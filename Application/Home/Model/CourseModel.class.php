<?php 
namespace Home\Model;
use Think\Model;
class CourseModel extends Model{ 
	function lists($where,$id){
		$course = M('course')->where($where)->field('id,name,head_image,image')->limit(7)->select();
                foreach ($course as $key => $value) {
                  $course_id = array('status'=>1,'course_id'=>$value['id']);
                  $is_id = array('course_id'=>$value['id'],'user_id'=>$id);
                  $num = M('collection')->where($course_id)->count('id');
                  $is_do =M('collection')->where($is_id)->find();
        	       $course[$key]['head_image'] = 'http://toget.cn'.$value['head_image'];
        	       $course[$key]['image'] = 'http://toget.cn'.$lists[$key]['image'];
        	       $course[$key]['do_num'] = 1;
        	       $course[$key]['collect_num'] = $num;
                       if ($is_do) {
                               $course[$key]['is_collect_status'] =true;
                       }else{
                               $course[$key]['is_collect_status'] =false;
                       }
        	       $course[$key]['is_do'] = 1;
                }
        return($course);
	}
  function info($id){
        $course_info = M('course')->where(array('id'=>$id,'status'=>1))->field('image,name,id')->find();
        $course_info['image'] = 'http://toget.cn'.$course_info['image'];
        $course_info['zt_num'] = D('course')->getzt($id);
        $course_info['zj_num'] = D('course')->getzj($id);
        $course_info['mn_num'] = D('course')->getmn($id);
        return($course_info);
  }
  function getzj($id){
      $where['status'] = array('gt',0); 
      $zt_all = M('chapter')->where(array('course_id'=>$id))->where($where)->count('id');
      $zt_is = M('chapter')->where(array('status'=>2,'course_id'=>$id))->count('id');
      $zt_num = "$zt_is".'/'."$zt_all";
      return($zt_num);
  }
  function getzt($id){
      $where['status'] = array('gt',0); 
      $zt_all = M('test')->where(array('course_id'=>$id,'type'=>'1'))->where($where)->count('id');
      $zt_is = M('test')->where(array('status'=>2,'course_id'=>$id,'type'=>'1'))->count('id');
      $zt_num = "$zt_is".'/'."$zt_all";
      return($zt_num);
  }
  function getmn($id){
      $where['status'] = array('gt',0); 
      $zt_all = M('test')->where(array('course_id'=>$id,'type'=>'2'))->where($where)->count('id');
      $zt_is = M('test')->where(array('status'=>2,'course_id'=>$id,'type'=>'2'))->count('id');
      $zt_num = "$zt_is".'/'."$zt_all";
      return($zt_num);
  }        
}