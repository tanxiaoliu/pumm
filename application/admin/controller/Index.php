<?php
namespace app\admin\controller;

use Qiniu\Http\Request;
use think\captcha\Captcha;
use think\Controller;
use think\Db;
use think\Session;
use think\Url;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 上午 2:30
 */
class Index extends Controller {

    function index()
    {
        $this->checkLogin();
        return $this->fetch();
    }

    /**
     * 提现列表
     */
    function withdrawals()
    {
        $list = Db::table('withdrawals')->order('id desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 会员列表
     */
    function member()
    {
        $list = Db::table('member')->order('id desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 打赏记录
     */
    function reward()
    {
        $list = Db::table('reward')->order('id desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 图片记录
     */
    function picture()
    {
        $list = Db::table('picture')->order('id desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 用户列表
     */
    function user()
    {
        $list = Db::table('user')->order('id desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 登录
     * @return mixed
     */
    function login()
    {
        if (Session::get('user')) {
            $this->redirect('index');
        } else {
            if(request()->isPost()) {
                $captcha = input('post.captcha');
                if(!captcha_check($captcha)){
                    $this->error('验证码错误');
                }
                $map['username'] = input('post.name');
                $password = input('post.pwd');
                if (!$map['username']) {
                    $this->error('用户名不能为空');
                }
                if (!$password) {
                    $this->error('密码不能为空');
                }
                $map['password'] = md5($password . 'pumm');
                $result = Db::table('user')->where($map)->find();
                if ($result) {
                    Session::set('user', $result);
                    $this->redirect('index');
                } else {
                    $this->error('用户名或密码错误！');
                }
            }
            return $this->fetch();
        }
    }

    /**
     * 退出
     * @author tanhuaxin
     * @return mixed
     */
    function logout()
    {
        Session::delete('user');
        $this->redirect('login');
    }


    /**
     * 检测登录
     * @author tanhuaxin
     */
    function checkLogin()
    {
        if (!Session::get('user')) {
            $this->redirect('login');
        }
    }

    function phpinfo()
    {
       echo phpinfo();
    }
}