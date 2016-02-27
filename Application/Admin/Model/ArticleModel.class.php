<?php 
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
	protected $insertFields = 'a_id,title,content,date'; // 新增数据的时候允许写入name和email字段
	protected $updateFields = 'title,content,status'; // 编辑数据的时候只允许写入email字段

	public function add($data){
		$article = M('article');

		return $article->add($data);
	}

	/* 如果有条件则返回指定条件数组,否则返回所有
	*/
	public function select($sql='1=1'){
		$article = M('article');

		return $article->where($sql)->select();
	}

	public function find($sql){
		$article = M('article');

		if(!$sql)
			return 0;

		return $article->where($sql)->find();
	}

	/* 如果更新成功则返回id,否则返回0
	*/
	public function update($id,$data){
		$article = M('article');

		return $article->where('id='.$id)->save($data);
	}


}

 ?>