<?php
namespace Admin\Controller;
use Think\Controller;
class ChapterController extends Controller
{
	public function add ()
	{
		$course = M('course')->select();
        $this->assign('course',$course);
    	$this->display();
	}
	public function handleadd ()
	{
		$data['name']=$_POST['name'];
		$data['course_id']=$_POST['course_id'];
		$data['status']=$_POST['status'];
		$data['create_time']=date('Y-m-d H:i:s');
		M('chapter')->add($data);
		$this->success('ok',U('Admin/chapter/lists'));
	}
	public function edit ()
	{
		$id=$_GET['id'];
		$chapter =M('chapter')->where(array('id'=>$id))->find();
       	$course = M('course')->select();
        $this->assign('course',$course);
        $this->assign('chapter',$chapter);
        $this->display();
	}
	public function  handleedit ()
	{
		$data = array();
        $id = $_GET['id'];        
        $data['name']=$_POST['name'];
		$data['course_id']=$_POST['course_id'];
		$data['create_time']=date('Y-m-d H:i:s');
		$data['status']=$_POST['status'];
        M('chapter')->where(array('id'=>$id))->save($data);
        $this->success('ok',U('Admin/chapter/lists'));
	}
	public function lists ()
	{
		$limit=10;
		$page=$_GET['page']?$_GET['page']:1;
		$count=M('chapter')->where('status=1')->count('id');     
		$offset=($page-1)*$limit;
		$allPageNum=ceil($count/$limit);
		$lists=M('chapter')->where('status=1')->limit($offset,$limit)->select();
		$this->assign('lists',$lists);
		$this->assign('allPageNum',$allPageNum);
		$this->display();
	}
	public function delete()
	{
		$id=$_GET['id'];
		M('chapter')->where(array('id'=>$id))->delete();
		$this->success('ok',U('Admin/chapter/lists'));
	}
}