<?php
namespace Admin\Controller;
use Think\Controller;
class AdvertController extends Controller {
    public function index(){//广告列表
    	$a = M('ad')->select();   	
    	$this->assign('a',$a);
    	$this->display();
    }
    public function add(){//增加广告
    	$this->display();
    }
    public function handleadd(){
    	$data = array();
    	$info = upload('image','ad');
    	if ($info['status'] == 'error') {
    		$this->error('上传失败！');
    	}else{
    		$data['img'] = $info['path'];
    	}
    	$data['address'] = $_POST['address'];
    	$data['status'] = $_POST['status'];
    	$status = M('ad')->add($data);
    	if ($status > 0) {
			$this->success('ok',U('admin/advert/index'));
		}else{
			$this->error('no',U('admin/advert/index'));
		}
	}		
	public function edit(){
		$i = $_GET['id'];
		$ad_info = M('ad')->where(array('id'=>$i))->find();
		$this->assign('ad',$ad_info);
		$this->display();
	}
	public function handleedit(){
		$data = array();
		$info = upload('image','ad');
		if($info['status']=='error'){
			$this->error('上传失败！');
		}else{
			$data['img'] = $info['path'];
		}
		$i = $_POST['id'];
		$data['address'] = $_POST['address'];
		$data['status'] = 1;
		$c = M('ad')->where(array('id'=>$i))->save($data);
		if ($c > 0) {
			$this->success('ok',U('admin/advert/index'));
		}else{
			$this->error('no',U('admin/advert/index'));
		}	
	}
	public function delete(){
		$i = $_GET['id'];
		$data = array('status' => 0);
		$c = M('ad')->where(array('id'=>$i))->save($data);
		if ($c > 0) {
			$this->success('ok',U('admin/advert/index'));
		}else{
			$this->error('no',U('admin/advert/index'));
		}
		
	}
    
}    