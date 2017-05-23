<?php
namespace Admin\Controller;
use Think\Controller;
class AnswerController extends Controller 
{
	public function lists(){
		$question = M('question')->field('id,stem')->select();
		foreach ($question as $key => $value) {
			$answer = M('answer')->where(array('question_id'=>$value['id']))->select();
			$qa[] = array('id'=>$value['id'],'stem'=>$value['stem'],'answer'=>$answer);
		}
		$this->assign('qa',$qa);
		$this->display();

	}
}