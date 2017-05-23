<?php
namespace Home\Controller;
use Think\Controller;
class AppController extends Controller {
    public function getcity(){
    	$city = D('area')->city();
    	$result = array('status'=>'ok','city'=>$city);
    	$this->ajaxReturn($result);
    }
}