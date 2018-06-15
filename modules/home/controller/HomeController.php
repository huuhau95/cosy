<?php
class HomeController extends Controller {
	public $modelHome;
	public function __construct() {
		parent::__construct();
		$this->modelHome = $this->loadModel('Home');
	}
	public function index() {
		global $_web;
		// dd(base_url());
		$link = base_url() . 'home.htm';
		$this->view->data['post_hot'] = $this->modelHome->getPostNew();
		$this->view->data['conment'] = $this->modelHome->getConment();
		$this->view->data['posts_1'] = $this->modelHome->getPosts_1(0, 6);
		$data_1 = $this->view->data['posts_1'][0]['cate_id'];
        $cate_id_1 = str_replace(array(','), '', $data_1);
        $this->view->data['cate_1'] = $this->modelHome->getCate1($cate_id_1);
		$this->view->data['posts_2'] = $this->modelHome->getPosts_2(0, 6);
        $data_2 = $this->view->data['posts_2'][0]['cate_id'];
        $cate_id_2 = str_replace(array(','), '', $data_2);
        $this->view->data['cate_2'] = $this->modelHome->getCate2($cate_id_2);
		$this->view->title = isset($_web['settings']['seo_title']) ? stripcslashes($_web['settings']['seo_title']) : '';
		$this->view->description = isset($_web['settings']['seo_description']) ? stripcslashes($_web['settings']['seo_description']) : '';
		$this->view->keywords = isset($_web['settings']['seo_keywords']) ? stripcslashes($_web['settings']['seo_keywords']) : '';
		$this->view->author = "Mr.Toán - 0987687869";
		$this->view->render('index');
	}
	public function dangky(){
		if (isset($_POST['dangky'])) {
			$phone = trim(addslashes($this->input->post('phone')));
			$name = trim(addslashes($this->input->post('name')));
			$email = trim(addslashes($this->input->post('email')));
			$check_1 = $_POST['check_1'];
			$content = trim(addslashes($this->input->post('content')));
			$data = array(
				'phone'=>$phone,
				'name'=>$name,
				'email'=>$email,
				'content'=>$content,
				'check_1'=>$check_1,
				'status'=> 1,
			);
			$data['create_time'] = time();
			$this->modelHome->InsertContact($data);
		  redirect(base_url());
		}
	}
	public function search() {
		if (isset($_GET['search'])) {
			$search = $_GET['search'];
			$link = base_url() . 'tim-kiem.htm?search=' . $search . '';
			$all_pages = $this->modelHome->getSearch($search);
			$paging = new Paging(count($all_pages), $link);
			$limit = 6;
			// dd($paging);
			// dd($_GET['p']);
			$count_page = $paging->findPages($limit);

			if (isset($_GET['p'])) {
				$curpage = $_GET['p'];
				$start = ($_GET['p'] - 1) * $limit;
			} else {
				$curpage = ($start / $limit) + 1;
				$start = $paging->rowStart($limit);
			}
			$this->view->data['search'] = getLimitPosts($all_pages, $start, $limit);
			$this->view->data['pagination'] = $paging->pagesListSearch($curpage);
			$this->view->data['count_search'] = $this->modelHome->getCount($search);
			// $this->view->data['search'] = $this->modelHome->getSearch($search);
		}
		$this->view->data['posts'] = $this->modelHome->getPosts();
		$this->view->data['posts_new'] = $this->modelHome->getPostsNew(0, 9);
		$this->view->render('search');
	}

	public function setLang() {
		$lang = $this->input->post('lang');
		$cookie_name = "lang";
		$cookie_value = $lang;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
		$data = array(
			'status' => true,
			'mess' => 'Success',
		);
		echo json_encode($data);
	}

}