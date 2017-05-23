<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller
{
	public function add ()
	{
		$this->display();
	}
	public function handleadd ()
	{   
		$data['name']=$_POST['name'];
		$data['phone']=$_POST['phone'];
		$data['email']=$_POST['email'];
		$data['password']=$_POST['password'];
		M('course')->add($data);
		$this->success('ok',U('Admin/user/add'));
	}
	public function edit ()
	{
		$id=$_GET['id'];
		$user =M('user')->where(array('id'=>$id))->find();
        $this->assign('user',$user);
        $this->display();
	}
	public function handleedit ()
	{
		$data = array();
        $id = $_GET['id'];        
        $data['name']=$_POST['name'];
		$data['phone']=$_POST['phone'];
		$data['email']=$_POST['email'];
		$data['password']=$_POST['password'];
        M('user')->where(array('id'=>$id))->save($data);
        $this->success('ok',U('Admin/user/lists'));
	}
	public function lists ()
	{	
		$limit=1;
		$page=$_GET['page']?$_GET['page']:1;
		$count=M('user')->where('status=1')->count('id');     
		$offset=($page-1)*$limit;
		$allPageNum=ceil($count/$limit);
		$lists=M('user')->where('status=1')->limit($offset,$limit)->select();
		$this->assign('lists',$lists);
		$this->assign('allPageNum',$allPageNum);
		$this->display();
	}
	public function delete ()
	{
		$id=$_GET['id'];
		M('user')->where(array('id'=>$id))->delete();
		$this->success('ok',U('Admin/user/lists'));
	}
}