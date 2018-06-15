<?php
class Home {
	private $posts;
	private $cate;

	public function __construct() {
		global $_web;
		$this->lang = $_web['lang'];
		$this->posts = new system\Model($this->lang . '_posts');
		$this->cate = new system\Model($this->lang . '_categories_posts');
		$this->conment = new system\Model('conment');
		$this->contact = new system\Model('web_contacts');
	}
	public function getPostNew() {
		$this->posts->where('cate_id', ',1,');
		$this->posts->where('hot', 1);
		$result = $this->posts->getOne();
		return $result;
	}
	public function getConment() {
		$sql = "SELECT * FROM conment WHERE status = 1 ORDER BY id DESC LIMIT 0,3";
		$result = $this->conment->rawQuery($sql);
		return $result;
	}
	public function getPosts_1($start, $limit) {
		$sql = "SELECT * FROM vi_posts WHERE cate_id = ',4,' ORDER BY id DESC LIMIT $start,$limit ";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getCate1($cate_id){
		$this->cate->where('id',$cate_id);
		$result = $this->cate->getOne();;
		return $result;
	}
	public function getPosts_2($start, $limit) {
		$sql = "SELECT * FROM vi_posts WHERE cate_id = ',5,' ORDER BY id DESC LIMIT $start,$limit ";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getCate2($cate_id){
		$this->cate->where('id',$cate_id);
		$result = $this->cate->getOne();;
		return $result;
	}
	public function getSearch($search) {
		$sql = "SELECT * FROM vi_posts WHERE title LIKE '%$search%' ORDER BY id DESC ";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getCount($search) {
		$sql = "SELECT * FROM vi_posts WHERE title LIKE '%$search%'";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function InsertContact($data){
		$this->contact->insert($data);
	}
}