<?php

namespace  Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
use Think\Model;
class UserController extends Controller{
    public function index(){
        //$name='陈观民';
        //$this->assign('name',$name);
        /*$data['name']='陈观民';
        $data['email']='1358643081@qq.com';
        $this->assign('data',$data);
        $this->display();*/
        ///修改模板文件
       // $this->display('Admin@bbb/index');
        //$this->display('./Template/Public/User/index.html');绝对目录下的模板文件
        //调用另外一个主题
        //$this->theme('blue')->display();
       /* $this->assign('user','陈观民');
        $this->display();*/
    }
    public function test($user,$pass){
        echo 'user:'.$user.'<br/>pass:'.$pass;
    }
    public function model(){
        //$user=new Model('data');
        //var_dump($user);
        $user=M('data');
        //$user=new UserModel();
        //$user=M('data');
        //var_dump($user->select());
        //$user=M();
        var_dump($user->query("SELECT * FROM think_data"));
       // var_dump($user->getDbFields());
    }
}
?>