<?php 
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	public function create(){

	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function selectAll($sql='1=1'){
		//$user = M('user');

		return $this->where($sql)->select();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$user = M('user');

		return $user->where('id='.$id)->save($data);
	}
}

 ?>