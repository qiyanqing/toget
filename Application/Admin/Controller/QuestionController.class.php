<?php
namespace Admin\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
    	$lists = M('question')->where(array('status'=>1))->select();
    	$this->assign('lists',$lists);
    	$this->display();
    }
    public function add(){
		$course = M('course')->select();
		getTree($course,0,$result);
		$this->assign('course',$result);
		$this->display();
	}
    public function handleadd(){
		$data = array();
		$data['stem'] = $_POST['stem'];
		$data['course_id'] = $_POST['parent'];
		$data['obj_id'] = $_POST['obj_id'];
		$data['type'] = $_POST['type'];
		$data['explain'] = $_POST['explain'];
		$data['question_type'] = $_POST['question_type'];
		$data['status'] = 1;
		$c = M('question')->add($data);
		if ($c > 0) {
			$this->success('ok',U('admin/question/add'));
		}else{
			$this->error('no',U('admin/question/add'));
		}
	}
	public function edit(){
		$course = M('course')->select();
		getTree($course,0,$result);
		$this ->assign('course',$result);
		$i = $_GET['id'];
		$c_info = M('question')->where(array('id'=>$i))->find();
		$this->assign('a',$c_info);
		$this->display();
	}
	public function handleedit(){
		$data = array();
		$i = $_POST['id'];
		$data['stem'] = $_POST['stem'];
		$data['type'] = $_POST['type'];
		$data['explain'] = $_POST['explain'];
		$data['question_type'] = $_POST['question_type'];
		$data['obj_id'] = $_POST['obj_id'];
		$data['status'] = $_POST['status'];
		$data['course_id'] = $_POST['parent'];
		$c = M('question')->where(array('id'=>$i))->save($data);
		if ($c > 0) {
			$this->success('ok',U('admin/question/index'));
		}else{
			$this->error('no',U('admin/question/index'));
		}	
	}
	public function delete(){
		$i = $_GET['id'];
		$data = array('status'=>0);
		$c = M('question')->where(array('id'=>$i))->save($data);
		if ($c > 0) {
			$this->success('ok',U('admin/question/index'));
		}else{
			$this->error('no',U('admin/question/index'));
		}
		
	}
}