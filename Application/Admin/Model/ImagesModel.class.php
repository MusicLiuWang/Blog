<?php 
namespace Admin\Model;
use Think\Model;

class ImagesModel extends Model{
	protected $insertFields = 'title,time,path,p_group'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'title,p_group'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$images = M('images');

		return $images->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$images = M('images');

		return $images->where($sql)->select();
	}

	public function find($sql){
		$images = M('images');

		if(!$sql)
			return 0;

		return $images->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$images = M('images');

		return $images->where('id='.$id)->save($data);
	}


}

 ?>