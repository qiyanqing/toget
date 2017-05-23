<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
    	$result['status'] = 'ok';
    	$data['email'] = I('post.email');
		$data['password'] = I('post.password');
		if(!$data['password']){
			$result['info'] = array();
			$result['msg'] = '请输入密码';
		 	$this->ajaxReturn($result);
		 	die();
		}
		$user = M('user')->where(array('email'=>$data['email']))->find();
		 	if($user){
		 		if($user['password'] == $data['password']){		 			
		 			$result['info'] = array('user_id'=>$user['id'],'email'=>$user['email']);
		 			$result['msg'] = '登录成功';
		 		}else{
		 			$result['info'] = array();
					$result['msg'] = '密码错误';
		 		}

		 	}else{
		 		$result['info'] = array();
				$result['msg'] = '邮箱不存在';	
    			}
    	$this->ajaxReturn($result);
	}
    public function reg(){
    	$result['status'] = 'ok';
    	$data['phone'] = I('post.phone');
		$data['name']  = I('post.name');
		$data['email'] = I('post.email');
		$data['password'] = I('post.password');
		if($data['phone'] && $data['name'] && $data['email'] && $data['password']){
			$user = M('user')->where(array('email'=>$data['email']))->find();
			if($user){
				$result['msg'] = 'email已存在';
			}else{
				M('user')->add($data);
				$result['msg'] = '注册成功';
			}
		}else{
			$result['msg'] = '请完善信息';
		}
		$this->ajaxReturn($result);
    }
}