<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$user = D('user');
    	$data['nick'] = 'wml';
    	echo $user->update('3',$data);
    }
}