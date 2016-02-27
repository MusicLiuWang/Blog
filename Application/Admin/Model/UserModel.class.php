<?php 
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	protected $insertFields = 'nick,email,date'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'nick,status'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$user = M('user');

		return $user->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$user = M('user');

		return $user->where($sql)->select();
	}

	public function find($sql){
		$user = M('user');

		if(!$sql)
			return 0;

		return $user->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$user = M('user');

		return $user->where('id='.$id)->save($data);
	}


}

 ?>