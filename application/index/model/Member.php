<?php
namespace app\index\model;

use think\Model;

/**
 * Created by PhpStorm.
 * User: sixth
 * Date: 2017/7/13
 * Time: 17:57
 */
class Member extends Model
{

    /**
     * 获取用户,不存在则新增
     * @param $info
     * @return array|false|\PDOStatement|string|Model
     */
    function getMemberInfo($info)
    {
        $data['openid'] = $info->openid;
        $data['nickname'] = $info->nickname;
        $data['sex'] = $info->sex;
        $data['language'] = $info->language;
        $data['city'] = $info->city;
        $data['province'] = $info->province;
        $data['country'] = $info->country;
        $data['headimgurl'] = $info->headimgurl;
        $data['create_time'] = time();
        $res = $this->where('openid', $data['openid'])->field('id, nickname, headimgurl, openid')->find();
        if (!$res){
            $this->insert($data);
            $res['id'] = $this->getLastInsID();
            $res['nickname'] = $data['nickname'];
            $res['headimgurl'] = $data['headimgurl'];
            $res['openid'] = $data['openid'];
        }
        return $res;
    }

    /**
     *
     * 绑定用户
     * @author tanhuaxin
     * @param $info
     * @param string $upMid
     * @return mixed
     */
    function bindingMember($info, $upMid = '')
    {
        $data['openid'] = $info->openid;
        $data['nickname'] = $info->nickname;
        $data['sex'] = $info->sex;
        $data['language'] = $info->language;
        $data['city'] = $info->city;
        $data['province'] = $info->province;
        $data['country'] = $info->country;
        $data['headimgurl'] = $info->headimgurl;
        $data['create_time'] = time();

        //被帮忙的人
        $upMember = $this->where('id', $upMid)->field('id, up_mid')->find();
        //帮忙的人
        $member = $this->where('openid', $data['openid'])->field('id, up_mid')->find();
        if (!$member){
            $this->insert($data);
            $member['id'] = $this->getLastInsID();
        }
        $msg = '欢迎使用图片打赏系统!';
        if($upMid != ''){
            if ($member['up_mid']) {
                $msg = '绑定失败，您已经绑定了上级,无法再进行绑定!';
            }
            if ($member['up_mid'] == '' && $member['id'] == $upMid) {
                $msg = '绑定失败，您不能绑定您自己!';
            }
            if ($member['up_mid'] == '' && $upMember['up_mid'] == $member['id']) {
                $msg = '绑定失败，您不能跟你的下级互绑!';
            }
            if ($member['up_mid'] == '' && $member['up_mid'] != $upMid && $upMember['up_mid'] != $member['id']) {
                $msg = '绑定成功，您的上级是' . $info->nickname . '!';
                $this->where('id', $member['id'])->update(['up_mid' => $upMid]);
            }
        }
        return $msg;
    }


    /**
     * 保存二维码
     * @author tanhuaxin
     * @param $uid
     * @param $code
     * @return false|int
     */
    function saveCode($uid, $code)
    {
        $this->where('id', $uid)->update(['code' => $code]);
    }
}