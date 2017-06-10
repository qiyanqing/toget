<?php
namespace Home\Controller;
use Think\Controller;
class AppController extends Controller {
    public function getcity(){
    	$city = D('area')->city();
    	$result = array('status'=>'ok','city'=>$city);
    	$this->ajaxReturn($result);
    }
    public function ceshi(){
    	//$a = time('Y-m-d');
  //   	$a = date('Y-m-d H:i:s',strtotime('-1 day'));
  //   	//echo "$a"."<br>";
  //   	$b = date('Y-m-d H:i:s',time()-60*60*24);
  //   	//echo "$b"."<br>";
  //   	$c = time();
  //   	//echo "$c"."<br>";
  //   	$string = "geek_zoo_studio.";
		// //$str = trim($string,'_');
		// $str = str_replace('_',' ',$string);
		// $st = ucwords($str);
		// $s = str_replace(' ','',$st);
		// //echo "$s";
		// $data = array(
		// 		'中国','美国','日本','中国','美国','日本','中国','美国','中国','美国','日本','中国','美国','日本'
		// 	);
		// //print_r(count($data));
		// $arr = array(1,2,'3','4');
		// echo $a[0]+$a[1]+$a[2]+$a[3];
		// echo 1+2+'3+4';
		//echo "3+4";
		//echo "$a>$b?($a>$c?$a:$c):($b>$c?$b:$c)";
		$a = intval(0);
		echo "$a";
    }
}