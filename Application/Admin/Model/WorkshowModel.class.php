<?php 
namespace Admin\Model;
use Think\Model;

class WorkshowModel extends Model{
	protected $insertFields = 'title,img_id,link,about,date'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'title,img_id,link,about,status'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$workshow = M('workshow');

		return $workshow->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$workshow = M('workshow');

		return $workshow->where($sql)->select();
	}

	public function find($sql){
		$workshow = M('workshow');

		if(!$sql)
			return 0;

		return $workshow->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$workshow = M('workshow');

		return $workshow->where('id='.$id)->save($data);
	}


}

 ?>