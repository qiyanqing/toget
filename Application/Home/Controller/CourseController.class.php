<?php
namespace Home\Controller;
use Think\Controller;
class CourseController extends Controller {
    public function detail(){
    	$result['status'] = 'ok';
    	$id = I('post.id',1);
    	$course_info = D('course')->info($id);
    	$result['info'] = $course_info;
		$this->ajaxReturn($result);
    }
    public function getchapter(){
        $course_id = I('post.course_id',0); 
        if(!$course_id){
            $result  = array('status'=>'error','msg'=>'参数错误');
            $this->ajaxReturn($result);
        }
        $where['status'] = array('gt',0);
        $where['course_id'] = $course_id;
        $chapt = M('chapter')->where($where)->select(); 
        foreach ($chapt as $key => $value) {
            $chapter[] = array('id'=>$value['id'],'name'=>$value['name']);
        }
        $result = array('status'=>'ok','lists'=>$chapter);
        //var_dump($result);
        $this->ajaxReturn($result);
    }
    public function lists(){
        $user_id = I('post.user_id');
        $category = I('post.category_id',10);
        $where = array('status'=>1,'category_id'=>$category);
        $course = D('course')->lists($where);
        $name = M('category')->where(array('category'=>$category))->field('name')->find();
        $result = array('status'=>'ok','lists'=>$course,'name'=>$name);
        $this->ajaxReturn($result);
    }
    public function gettest(){
        $course_id = I('post.course_id',1);
        $type = I('post.type',1);
        $where['status'] = array('gt',0);
        $lists = M('test')->where(array('course_id'=>$course_id,'type'=>$type))->where($where)->field('id,name')->select();
        $result = array('status'=>'ok','lists'=>$lists);
        //var_dump($result);
        $this->ajaxReturn($result);
    }
    public function addcollect(){
        $course_id = I('post.course_id');
        $user_id = I('post.user_id');
        if ($course_id == '' || $user_id == '') {
           $result = array('status'=>'error','msg'=>'请传id。');
           $this->ajaxReturn($result);
           die();
        }
        $is_user = M('collection')->where(array('course_id'=>$course_id,'user_id'=>$user_id))->find();
        if (!$is_user) {
            $data = array('course_id'=>$course_id,'user_id'=>$user_id,'status'=>1);
            $coll_s = M('collection')->add($data);
        }
        $result = array('status'=>'ok','msg'=>'收藏成功');
        $this->ajaxReturn($result);
    }
    public function uncollect(){
        $course_id = I('post.course_id');
        $user_id = I('post.user_id');
        if ($course_id == '' || $user_id == '') {
           $result = array('status'=>'error','msg'=>'请传id。');
           $this->ajaxReturn($result);
           die();
        }
        $where = array('user_id'=>$user_id,'course_id'=>$course_id);
        $user_s = M('collection')->where($where)->delete();
        if ($user_s) {
             $result = array('status'=>'ok','msg'=>'取消成功。');
            $this->ajaxReturn($result);
        }
       

    }
     
}