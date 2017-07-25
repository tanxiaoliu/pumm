<?php
namespace app\index\controller;

use app\index\model\Config;
use app\index\model\Member;
use app\index\model\Picture;
use app\index\model\Reward;
use app\index\model\Withdrawals;
use think\Cache;
use think\Controller;
use think\Db;
use think\Image;
use Think\Log;
use think\queue\connector\Redis;
use think\Session;
use think\Url;
use think\wechatPhpSdk\Api;
use think\wechatPhpSdk\Wechat;


class Index extends Controller
{
    const PICTURE_PATH = "../Picture/";
    const APP_ID = "wx33d9402ea60d3681";
    const APP_SECRET = "eb34a1662269b9027b7ed8635b04c6ed";
    const TOKEN = "dashang";
    const CALLBACK_URL = "http://laoit.top/pumm/public/index.php/index/Index/callback";
    const CODE_URL = "http://laoit.top/pumm/public/index.php/index/Index/reward?";

    /**
     *
     * @author tanhuaxin
     * @throws \think\Exception
     */
    function index()
    {
        //实例化
        $wechat = new Wechat(array(
            'appId' => self::APP_ID,
            'token' => self::TOKEN,
        ));
        $api = new Api(
            array(
                'appId' => self::APP_ID,
                'appSecret' => self::APP_SECRET,
                'get_access_token' => function () {
                    return Cache::get('wechat_token');
                },
                'save_access_token' => function ($token) {
                    return Cache::set('wechat_token', $token, 3600);
                }
            )
        );
        //获取微信消息
        $msg = $wechat->serve();

        //回复消息
        if ($msg->MsgType == 'event' && ($msg->Event == 'subscribe' || $msg->Event == 'SCAN')) {//关注
            $userInfo = $api->get_user_info($msg->FromUserName);
            //1、判断是否是带参数二维码
            if ($msg->EventKey) {
                if ($msg->Event == 'subscribe') {
                    $sceneId = substr($msg->EventKey, 8);
                }
                if ($msg->Event == 'SCAN') {
                    $sceneId = $msg->EventKey;
                }
                $msg = Member::create()->bindingMember($userInfo[1], $sceneId);
                $wechat->reply($msg);
            } else {
                //2、保存用户信息
                Member::create()->getMemberInfo($userInfo[1]);
                $wechat->reply('欢迎使用图片打赏系统!');
            }
        } else if ($msg->MsgType == 'image') {//处理图片
            //1、获取用户信息
            $userInfo = $api->get_user_info($msg->FromUserName);
            $menber = Member::create()->getMemberInfo($userInfo[1]);
            //2、上传图片到七牛
            $key = time() . '_' . $menber['id'] . ".png";
            $picPath = self::PICTURE_PATH . $key;
            downloadImage($msg->PicUrl, $picPath);
            qiNiuUpload($key, $picPath);
            //3、保存图片信息
            $data['mid'] = $menber['id'];
            $data['image'] = $key;
            $data['media_id'] = $msg->MediaId;
            $pid = Picture::create()->addPicture($data);
            //4、合成图片
            $this->createPicture($picPath, $data['mid'], $pid);
            /*//5、上传图片到临时素材
            $res = $api->upload_media('image', $picPath);
            //6、回复图片
            $wechat->reply(array(
                'type' => 'image',
                'media_id' => $res[1]->media_id
            ));*/
            $wechat->reply(array(
                'type' => 'image',
                'media_id' => $msg->MediaId
            ));
        } else {
            $userInfo = $api->get_user_info($msg->FromUserName);
            $wechat->reply($userInfo[1]->nickname . "，欢迎使用图片打赏系统！");
        }
    }

    /**
     * 检查登录
     * @return mixed
     */
    function checkLogin()
    {
        $userInfo = Session::get('userInfo');
        $openid = Session::get('openid');
        if (empty($userInfo) || empty($openid)) {
            $api = new Api(
                array(
                    'appId' => self::APP_ID,
                    'appSecret' => self::APP_SECRET,
                    'get_access_token' => function () {
                        return Cache::get('wechat_token');
                    },
                    'save_access_token' => function ($token) {
                        return Cache::set('wechat_token', $token, 3600);
                    }
                )
            );
            $this->redirect($api->get_authorize_url('snsapi_userinfo', self::CALLBACK_URL));
        } else {
            return $userInfo;
        }
    }

    /**
     * 回调页面
     * @return mixed
     */
    function callback()
    {
        $code = input('get.code');
        $api = new Api(
            array(
                'appId' => self::APP_ID,
                'appSecret' => self::APP_SECRET,
                'get_access_token' => function () {
                    return Cache::get('wechat_token');
                },
                'save_access_token' => function ($token) {
                    return Cache::set('wechat_token', $token, 3600);
                }
            )
        );
        $userInfo = $api->get_userinfo_by_authorize('snsapi_userinfo', $code);
        $member = Member::create()->getMemberInfo($userInfo[1]);
        Session::set('openid', $member['openid']);
        Session::set('userInfo', $member);
        $this->redirect(Url::build('Index/reward'));
    }

    /**
     * 打赏
     * @return mixed
     */
    function reward()
    {
        $this->checkLogin();
        $config = $this->getConfig();
        $this->assign('config', $config);
        return $this->fetch();
    }

    /**
     * 用户打赏
     * @author tanhuaxin
     * @return mixed
     */
    function doReward()
    {
        $userInfo = $this->checkLogin();
        $collectMid = input('get.collect_mid');
        $rewardMid = $userInfo['id'];
        $money = input('get.money');
        $pid = input('get.pid');

        $data['collect_mid'] = $collectMid;
        $data['reward_mid'] = $rewardMid;
        $data['pid'] = $pid;
        $res = Reward::create()->where($data)->find();
        if($res)
        {
            $this->replyPictures($pid);
        } else {
            $conf['appId'] = self::APP_ID;
            $conf['appSecret'] = self::APP_SECRET;
            $conf['mchId'] = '';//商户号
            $conf['body'] = '打赏照片';//商品描述
            $conf['out_trade_no'] = '';//商户订单号
            $conf['total_fee'] = '';//总金额
            $conf['notify_url'] = '';//通知地址
            $conf['trade_type'] = 'JSAPI';//交易类型
            $api = new Api($conf);
            $result = $api->wxPayUnifiedOrder();
            if ($result) {
                $data['collect_mid'] = $collectMid;
                $data['reward_mid'] = $rewardMid;
                $data['money'] = $money;
                $data['pid'] = $pid;
                $data['create_time'] = time();
                Reward::create()->insert($data);

                $this->replyPictures($pid);
            }
        }
    }

    /**
     * 回复图片
     * @author tanhuaxin
     */
    function replyPictures()
    {

    }

    /**
     * 赏金提现
     * @return mixed
     */
    function withdrawals()
    {
        $userInfo = $this->checkLogin();
        $member = Member::get($userInfo['id']);
        $config = $this->getConfig();
        $count = intval($member->money / $config->mini_withdrawals);
        $number = $count > 0 ? ($count * $config->mini_withdrawals) : 0;
        $this->assign('config', $config);
        $this->assign('number', $number);
        $this->assign('member', $member);
        return $this->fetch();
    }

    /**
     * 用户提现
     * @author tanhuaxin
     * @return mixed
     */
    function doWithdrawals()
    {
        $userInfo = $this->checkLogin();
        $money = input('get.money');
        $data['mid'] = $userInfo['id'];
        $data['money'] = $money;
        $data['create_time'] = time();
        Withdrawals::create()->insert($data);

        /*$conf['appId'] = self::APP_ID;
        $conf['appSecret'] = self::APP_SECRET;
        $conf['mchId'] = '';//商户号
        $conf['mch_billno'] = '';//商户订单号
        $conf['send_name'] = '创享科技';//商户名称
        $conf['re_openid'] = '';//用户openid
        $conf['total_amount'] = '';//付款金额
        $conf['total_num'] = 1;//红包发放总人数
        $conf['wishing'] = '感谢您使用图片打赏，祝您生活愉快！';//红包祝福语
        $conf['act_name'] = '图片打赏';//活动名称
        $conf['remark'] = '打赏越多得越多，快来玩！';//备注
        $conf['scene_id'] = 'PRODUCT_5';//场景id
        $api = new Api($conf);
        $result = $api->sendRedPack();
        if ($result) {
            $data['status'] = 1;
            Withdrawals::create()->update($data);
        }*/
    }

    /**
     * 我的赏金
     * @return mixed
     */
    function myReward()
    {
        $userInfo = $this->checkLogin();
        $member = Member::get($userInfo['id']);
        $picList = Picture::all(['mid' => $userInfo['id']]);
        $this->assign('member', $member);
        $this->assign('picList', $picList);
        return $this->fetch();
    }


    /**
     * 赏金详情
     * @return mixed
     */
    function rewardDetail()
    {
        $pid = input('get.pid');
        $image = input('get.image');
        $money = input('get.money');
        $reward = Db::table('reward')
            ->alias('a')
            ->join('member w', 'a.reward_mid = w.id')
            ->where(['a.pid' => $pid])
            ->select();
        $this->assign('reward', $reward);
        $this->assign('image', $image);
        $this->assign('money', $money);
        return $this->fetch();
    }

    /**
     * 邀请码
     * @return mixed
     */
    function invite()
    {
        $mid = input('get.mid');
        if (!$mid) {
            $userInfo = $this->checkLogin();
            $mid = $userInfo['id'];
        }
        $member = Member::get($mid);
        if (!$member['code']) {
            $api = new Api(
                array(
                    'appId' => self::APP_ID,
                    'appSecret' => self::APP_SECRET,
                    'get_access_token' => function () {
                        return Cache::get('wechat_token');
                    },
                    'save_access_token' => function ($token) {
                        return Cache::set('wechat_token', $token, 3600);
                    }
                )
            );
            $code = $api->create_qrcode($userInfo['id'], 604800);
            $codeUrl = $api->get_qrcode_url($code[1]->ticket);
            Member::create()->saveCode($userInfo['id'], $codeUrl);
            $code = $codeUrl;
        } else {
            $code = $member['code'];
        }
        $this->assign('code', $code);
        return $this->fetch();
    }

    /**
     * 图片合成
     * @param $url
     * @param $mid
     * @param $pid
     * @return string
     */
    function createPicture($url, $mid, $pid)
    {
        $codePath = createQrCode(self::CODE_URL."data={$mid}_{$pid}", self::PICTURE_PATH ."code_{$mid}_{$pid}.png");
        $image = Image::open($url);
        $width = $image->width();
        $height = $image->height();
        //缩略图
        $num = $width > 300 ? 300 / $width : 1;
        $image->thumb($width * $num, $height * $num)->save($url);

        gaussianBlur($url);
        //添加水印
        $image = Image::open($url);
        $image->water(self::PICTURE_PATH . $codePath, \think\Image::WATER_SOUTH)->save($url);
        return $url;
    }

    /**
     * 联系我们
     * @return mixed
     */
    function contact()
    {
        return $this->fetch();
    }

    /**
     * 生成说明
     * @return mixed
     */
    function  createExplain()
    {
        return $this->fetch();
    }

    /**
     * 提现说明
     * @return mixed
     */
    function withdrawalsExplain()
    {
        return $this->fetch();
    }

    /**
     * 公众号二维码
     * @return mixed
     */
    function code()
    {
        return $this->fetch();
    }

    /**
     * 获取配置
     * @return mixed
     */
    function getConfig()
    {
        /*$options = [
            'expire'     => 60,
            'default'    => 'default',
            'host'       => config('redis.host'),
            'port'       => config('redis.port'),
            'password'   => config('redis.psw'),
            'select'     => 0,
            'timeout'    => 0,
            'persistent' => false
        ];
        $redis = new Redis($options);
        $config = $redis->get('config');
        if(!$config) {
            $config = Config::get(1);
            $redis->set('config', $config, 36000);
        }*/
        $config = Config::get(1);
        return $config;
    }

}
