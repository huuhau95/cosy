<?php
class Posts {
	private $cate;
	private $posts;
	private $comments;
	private $options;
	private $manager_home;

	public function __construct() {
		global $_web;
		$this->lang = $_web['lang'];
		$this->posts = new system\Model($this->lang . '_posts');
		$this->options = new system\Model('web_options');
		$this->cate = new system\Model($this->lang . '_categories_posts');
		$this->comments = new system\Model($this->lang . '_comments_posts');
		$this->manager_home = new system\Model($this->lang . '_manager_home');
		$this->video = new system\Model($this->lang . '_video');
		$this->conment = new system\Model('conment');
	}
	public function getOptions() {
		$category = $this->options->get();
		return $category;
	}
	public function getPostsnew($start = null, $limit = null) {
		$this->posts->orderBy('id', 'DESC');
		$result = $this->posts->get(null, null);
		return $result;
	}
	public function getBreadcrumbsCategory($idCate, $data = array()) {
		$this->cate->where("id", $idCate);
		$this->cate->where("status", 1);
		$category = $this->cate->getOne();

		$category['link'] = base_url() . alias($category['title']) . '-c' . $category['id'] . '.htm';
		$data[] = array(
			'name' => (isset($category['title']) ? $category['title'] : ''),
			'href' => $category['link'],
		);
		if (isset($category['parent_id']) && $category['parent_id'] > 0) {
			$data = $this->getBreadcrumbsCategory($category['parent_id'], $data);
		}
		return $data;
	}
	public function getCatePost($parent_id) {
		$this->cate->where('parent_id', $parent_id);
		$this->cate->where('status', '1');
		$result = $this->cate->get();
		return $result;
	}
	public function getPosts() {
		$this->posts->where('status', 1);
		$this->posts->orderBy("create_time", "DESC");
		$result = $this->posts->get();
		return $result;
	}
	public function getPostsHighlights($start = null, $limit = null) {
		$select = $this->lang . "_posts.id," . $this->lang . "_posts.title," . $this->lang . "_posts.alias," . $this->lang . "_posts.description," . $this->lang . "_posts.thumbnail," . $this->lang . "_posts.create_time, user.id as id_user, user.username";
		$this->posts->where($this->lang . "_posts.hot1", 1);
		$this->posts->orderBy("create_time", "DESC");
		$this->posts->join('user', 'user.id = ' . $this->lang . '_posts.author_create', 'LEFT');
		if ($start == null && $limit == null) {
			$result = $this->posts->get(null, null, $select);
		} else {
			$result = $this->posts->get(null, array($start, $limit), $select);
		}
		return $result;
	}
	public function getcate($id) {
		$this->cate->where('id', $id);
		$this->cate->where('status', '1');
		$result = $this->cate->getOne();
		return $result;
	}
	public function getPostRandom() {
		$this->posts->where('status', 1);
		$this->posts->orderBy("RAND()");
		$result = $this->posts->get();
		return $result;
	}
	public function getPostLienquanAction2($cateid, $id) {
		$sql = "SELECT * FROM "
		. $this->lang . "_posts WHERE " .
		$this->lang . "_posts.cate_id like '%" . $cateid . "%' AND " . $this->lang . "_posts.id != '" . $id . "' ORDER BY rand() LIMIT 0,24";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getAllPost($start, $limit) {
		$select = $this->lang . "_posts.id," . $this->lang . "_posts.title," . $this->lang . "_posts.alias," . $this->lang . "_posts.thumbnail," . $this->lang . "_posts.description,"
		. $this->lang . "_posts.create_time, user.id as id_user, user.username";
		$this->posts->where($this->lang . "_posts.status", 1);
		$this->posts->orderBy("create_time", "DESC");
		$this->posts->join('user', 'user.id = ' . $this->lang . '_posts.author_create', 'LEFT');
		$result = $this->posts->get(null, array($start, $limit), $select);
		return $result;
	}
	public function getDetail($id) {
		$select = $this->lang . "_posts.*, user.id as id_user, user.username";
		$this->posts->where($this->lang . "_posts.status", 1);
		$this->posts->where($this->lang . "_posts.id", $id);
		$this->posts->join('user', 'user.id = ' . $this->lang . '_posts.author_create', 'LEFT');
		$result = $this->posts->getOne(null, $select);
		return $result;
	}
	public function insert_comt($data) {
		$this->comments->insert($data);
	}
	public function getCommentsByPostId($id) {
		$this->comments->where("status", 1);
		$this->comments->where("post_id", $id);
		$this->comments->orderBy("id", "ASC");
		$result = $this->comments->get();
		return $result;
	}
	public function getManager() {
		$data = $this->manager_home->get();
		return $data;
	}
	public function getAllNews($start = null, $limit = null) {
		$select = $this->lang . "_posts.id," . $this->lang . "_posts.title," . $this->lang . "_posts.alias," . $this->lang . "_posts.cate_id," . $this->lang . "_posts.description," . $this->lang . "_posts.thumbnail," . $this->lang . "_posts.create_time, user.id as id_user, user.username";
		$this->posts->where($this->lang . "_posts.status", 1);
		$this->posts->join('user', 'user.id = ' . $this->lang . '_posts.author_create', 'LEFT');
		$this->posts->orderBy("create_time", "DESC");
		if ($start == null && $limit == null) {
			$result = $this->posts->get(null, null, $select);
		} else {
			$result = $this->posts->get(null, array($start, $limit), $select);
		}
		return $result;
	}
	public function getVoucher($start, $limit) {
		$sql = "SELECT * FROM vi_posts WHERE cate_id =',1,' AND hot1 = 2  ORDER BY id DESC LIMIT $start,$limit";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getPostCare($start, $limit) {
		$sql = "SELECT * FROM vi_posts WHERE  hot1 = 1  ORDER BY id DESC LIMIT $start,$limit";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function getImg() {
		$this->posts->where("cate_id", ',7,');
		$result = $this->posts->getOne();
		return $result;
	}
	public function getYoutube() {
		$this->video->where('status', 1);
		$result = $this->video->getOne();
		return $result;
	}
	public function getPriceVouchre(){
		$this->posts->where("cate_id", ',8,');
		$result = $this->posts->getOne();
		return $result;
	}
	public function getPotsLienQuan($id_cate,$id){
	$sql="SELECT * FROM vi_posts WHERE cate_id = '$id_cate' AND id != $id ORDER BY id DESC LIMIT 0,5";
	$result = $this->posts->rawQuery($sql);
	return $result;
	}
	public function getPotsDacBiet($start, $limit){
		$sql = "SELECT * FROM vi_posts WHERE status = 1 AND cate_id = ',9,'  ORDER BY id DESC LIMIT $start,$limit";
		$result = $this->posts->rawQuery($sql);
		return $result;
	}
	public function InsertConment($data){
		$this->conment->insert($data);
	}
	 public function getTags($tag){
        $select = $this->posts->where($this->lang.'_posts.tags', '%'.$tag.'%', 'like');
        $result  = $this->posts->get(null,$select);
        return $result;
    }
    public function getPostTags(){
    	$sql = "SELECT * FROM vi_posts WHERE status = 1 ORDER BY id DESC LIMIT 0, 8";
		$result = $this->posts->rawQuery($sql);
		return $result;
    }
}