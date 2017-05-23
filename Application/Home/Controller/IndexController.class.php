<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $result['status'] = 'ok';
        $user_id = I('post.user_id');
        $result['ad'] = M('ad')->where(array('status'=>1))->field('id,img,address')->select();
        foreach ($result['ad'] as $key => $value) {
        	$result['ad'][$key]['img'] = 'http://toget.cn'.$value['img'];
        }
        $where = array('status'=>1);
        $id = $user_id;
        $course = D('course')->lists($where,$id);
        $result['lists'] = $course;
        //var_dump($result);
        $this->ajaxReturn($result);
    }
}