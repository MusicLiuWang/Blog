<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){
/*    	$user = D('user');
    	$data = $user->select();
    	dump($data);*/
		$this->assign('title','首页');
		$this->show();
    }



}