<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function lists(){
    	$result['status'] = 'ok';
    	$parent_id = I('post.parent_id',0);
    	$category = M('category')->where(array('status'=>1,'parent_id'=>$parent_id))->select();
    	if(!$parent_id){
    		foreach ($category as $key => $value) {
    			$result['lists'][] = array('id'=>$value['id'],'name'=>$value['name'],'icon'=>$value['icon']);
    			}
    		$this->ajaxReturn($result);
    		die();
    		}
    	foreach ($category as $key => $value) {
            $kid = array();
    		$child = M('category')->where(array('status'=>1,'parent_id'=>$value['id']))->field('name,id')->select();
    		 	foreach ($child as $k => $v) {
    		 		$kid[] = array('id'=>$v['id'],'name'=>$v['name']);
    		 	}
    		 $cate[] = array('id'=>$value['id'],'name'=>$value['name'],'icon'=>$value['icon'],'child'=>$kid);
    		}
    		$cate_info = M('category')->where(array('id'=>$parent_id))->find();
    		$result['cate_info']['name'] = $cate_info['name'];
    		$result['lists'] = $cate;
    		// var_dump($result);
    		$this->ajaxReturn($result);
    }
}