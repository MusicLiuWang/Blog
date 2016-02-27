<?php 
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
	protected $insertFields = 'admin,pass,name'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'pass,name'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$admin = M('admin');

		return $admin->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$admin = M('admin');

		return $admin->where($sql)->select();
	}

	public function find($sql){
		$admin = M('admin');

		if(!$sql)
			return 0;

		return $admin->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$admin = M('admin');

		return $admin->where('id='.$id)->save($data);
	}


}

 ?>