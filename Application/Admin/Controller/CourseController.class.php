<?php
namespace Admin\Controller;
use Think\Controller;
class CourseController extends Controller 
{
	public function add ()
	{
		$category = M('category')->select();
        getTree($category,0,$result);
        $this->assign('category',$result);
    	$this->display();
	}
	public function handleadd ()
	{
		$info = uploadImage('img','course');
	    if ($info['status'] == 'error') {
	    	$this->error($info['error_msg']);
	    }
	    $data['img'] = $info['path'];	    
		$data['name']=$_POST['name'];
		$data['category_id']=$_POST['category_id'];
		$data['user_done_num']=$_POST['user_done_num'];
		$data['create_time']=date('Y-m-d H:i:s');
		M('course')->add($data);
		$this->success('ok',U('Admin/course/lists'));
	}
	public function edit ()
	{
		$id=$_GET['id'];
		$course =M('course')->where(array('id'=>$id))->find();
       	$category = M('category')->select();
        getTree($category,0,$result);
        $this->assign('category',$result);
        $this->assign('course',$course);
        $this->display();
	}
	public function handleedit ()
	{
		$data = array();
        if($_FILES['image']['name']){
            $info = uploadImage('img','course');
            if ($info['status'] == 'error') {
                $this->error($info['error_msg']);
            }
            $data['image'] =$info['path'];
        }
        $id = $_GET['id'];        
        $data['name']=$_POST['name'];
        $data['user_done_num']=$_POST['user_done_num'];	
        $data['create_time'] = time();
        $data['category_id']=$_POST['category_id'];
        M('course')->where(array('id'=>$id))->save($data);
        $this->success('ok',U('Admin/course/lists'));
	}
	public function lists ()
	{	
		$limit=1;
		$page=$_GET['page']?$_GET['page']:1;
		$count=M('course')->where('status=1')->count('id');     
		$offset=($page-1)*$limit;
		$allPageNum=ceil($count/$limit);
		$lists=M('course')->where('status=1')->limit($offset,$limit)->select();
		$this->assign('lists',$lists);
		$this->assign('allPageNum',$allPageNum);
		$this->display();
	}
	public function delete ()
	{
		$id=$_GET['id'];
		M('course')->where(array('id'=>$id))->delete();
		$this->success('ok',U('Admin/course/lists'));
	}
}