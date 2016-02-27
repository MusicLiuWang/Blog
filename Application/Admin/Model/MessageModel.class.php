<?php 
namespace Admin\Model;
use Think\Model;

class MessageModel extends Model{
	protected $insertFields = 'u_id,a_id,p_id,content,time'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'content'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$message = M('message');

		return $message->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$message = M('message');

		return $message->where($sql)->select();
	}

	public function find($sql){
		$message = M('message');

		if(!$sql)
			return 0;

		return $message->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$message = M('message');

		return $message->where('id='.$id)->save($data);
	}


}

 ?>