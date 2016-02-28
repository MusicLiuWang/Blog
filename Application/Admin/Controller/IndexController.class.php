<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){

		$this->assign('title','首页');
		$this->show();
    }



}