<?php
namespace Home\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function getquestion(){
    	$course_id = I('post.course_id',1);
    	$obj_id = I('post.obj_id',1);
    	$type = I('post.type',1);
        $chapter_id = I('post.chapter_id',14);
        $title = M('chapter')->where(array('id'=>$chapter_id))->field('name')->find();
    	$question = M('question')->where(array('status'=>1,'course_id'=>$course_id,'type'=>$type,'obj_id'=>$obj_id))->field('id,sn,stem,question_type,explain')->select();
    	foreach ($question as $key => $value) {
    		$answer = M('answer')->where(array('question_id'=>$value['id']))->field('content,is_true,sn')->select();
    			$ans = array();
    		foreach ($answer as $k => $v) { 			
    			if ($v['is_true'] == 1) {
    				$v['is_true'] = 'true';
    			}else{
    				$v['is_true'] = 'false';
    			}
    			$ans[] = array('title'=>$v['content'],'is_true'=>$v['is_true'],'sn'=>$v['sn'],'color'=>false);
    		}
    		
    		$explain = $value['explain'];
    		$question[$key]['content'] = $ans;
    	}
    	$result = array('status'=>'ok','lists'=>$question,'title'=>$title['name']);
    	//var_dump($result);
    	//var_dump($answer);
    	$this->ajaxReturn($result);
    	
    }
}