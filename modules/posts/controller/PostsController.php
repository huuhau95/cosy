<?php
class PostsController extends Controller {
	public $modelPosts;
	public function __construct() {
		parent::__construct();
		$this->modelPosts = $this->loadModel('Posts');
	}
	public function index() {
		global $_web;
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			// dd($id);
			$link = base_url() . 'news.htm';
			$getAllpost = $this->modelPosts->getPosts();
			$all_pages = getPostLienQuan($id, $getAllpost);
			$paging = new Paging(count($all_pages), $link);
			$limit = $_web['options']['pagination_number'];
			// Tổng số trang
			$count_page = $paging->findPages($limit);
			// Bắt đầu từ mẫu tin
			$start = $paging->rowStart($limit);
			// Trang hiện tại
			$curpage = ($start / $limit) + 1;
			// Tạo session id_cate_now khi vào chuyên mục
			if ($_SESSION['id_cate_now'] && $_SESSION['id_cate_now'] != "") {
				$_SESSION['id_cate_now'] = $id;
			} else {
				$data = array(
					'id_cate_now' => $id,
				);
				Session::create($data);
			}
			//Xuất dữ liệu với truy vấn
			$this->view->data['menu'] = $this->modelPosts->getcate($id);
			$this->view->data['cate'] = $this->modelPosts->getCatePost($id);
			$this->view->data['data'] = getLimitPosts($all_pages, $start, $limit);
			$this->view->data['voucher'] = $this->modelPosts->getVoucher(0, 5);
			$this->view->data['care'] = $this->modelPosts->getPostCare(0, 4);
			$this->view->data['posts_khac'] = getLimitPosts($all_pages, 3, 12);
			$this->view->data['post_img'] = $this->modelPosts->getImg();
			$this->view->data['video_you'] = $this->modelPosts->getYoutube();
			$this->view->data['price_voucher'] = $this->modelPosts->getPriceVouchre();
			$this->view->data['AllPost'] = $getAllpost;
			$this->view->data['pagination'] = $paging->pagesList1($id, $curpage);

			$manager = $this->modelPosts->getManager();
			$homepost = $this->modelPosts->getAllNews();
			$this->view->data['list'] = getManagerHome($manager, $homepost);
			$this->view->data['posts_new'] = $this->modelPosts->getPostsnew(0, 9);
			// SEO
			$this->view->title = stripslashes($this->view->data['menu']['title']);
			$this->view->description = stripslashes($this->view->data['menu']['description']);
			$this->view->keywords = stripslashes($this->view->data['menu']['note']);
			$this->view->author = $_web['settings']['slogan'];
			// dd($this->view->data['data']);
		}
		$this->view->render('index');
	}
	public function addVoucher() {
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
			$start = $_POST['start'];
			$limit = $_POST['limit'];
			$data = $this->modelPosts->getVoucher($start, $limit);
			if (!empty($data)) {
				foreach ($data as $key => $value) {
					$html .= '  <li>
		                             <a href="">' . $value['title'] . '</a>
		                            <p><i class="glyphicon glyphicon-time">' . date('d-m-Y', $value['create_time']) . '</i></p>
		                          </li>';
				}

				$check = "ok";
			} else {
				$check = "no";
			}
			$data = array(
				'status' => true,
				'html' => $html,
				'check' => $check,
			);
		}
		echo json_encode($data);
	}
	public function addCare() {
		if (isset($_POST['start'])) {
			$start = $_POST['start'];
			$limit = $_POST['limit'];
			$data = $this->modelPosts->getPostCare($start, $limit);
			if (!empty($data)) {
				foreach ($data as $key => $care) {
					$html .= '   <div class="col-sm-12 dqht">
	                                <div class="col-sm-5">
	                                    <img src="' . getImage($care['thumbnail'], '89', '84', 'zc=1') . '" alt="" style="max-width: 100%; margin-left: -55px">
	                                </div>
	                                <div class="col-sm-7 chuat">
	                                    <p><a href="' . $care['alias'] . "-n" . $care['id'] . ".htm" . '">' . $care['title'] . '</a></p>
	                                </div>
                               </div>';
				}

				$check = "ok";
			} else {
				$check = "no";
			}
			$data = array(
				'status' => true,
				'html' => $html,
				'check' => $check,
			);
		}
		echo json_encode($data);
	}
	public function categories() {
		global $_web;
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$link = base_url() . 'categories.htm';
			// Tạo session id_cate_now khi vào chuyên mục
			if ($_SESSION['id_cate_now'] && $_SESSION['id_cate_now'] != "") {
				$_SESSION['id_cate_now'] = $id;
			} else {
				$data = array(
					'id_cate_now' => $id,
				);
				Session::create($data);
			}
			//Xuất dữ liệu với truy vấn
			$this->view->data['menu'] = $this->modelPosts->getcate($id);
			$this->view->data['cate'] = $this->modelPosts->getCatePost($id);

			$manager = $this->modelPosts->getManager();
			$homepost = $this->modelPosts->getAllNews();
			$this->view->data['list'] = getManagerHome($manager, $homepost);
			// SEO
			$this->view->title = stripslashes($this->view->data['menu']['title']);
			$this->view->description = stripslashes($this->view->data['menu']['description']);
			$this->view->keywords = stripslashes($this->view->data['menu']['note']);
			$this->view->author = $_web['settings']['slogan'];
		}
		// dd($this->view->data['menu']);
		$this->view->render('categories');

	}
	public function detail() {
		global $_L;
		global $_web;
		if (isset($_GET['id']) && is_numeric($_GET['id'])) {
			$id = $_GET['id'];
			$this->view->data['getId'] = $id;
			$_SESSION['_token'] = $token;
			// Lấy chi tiết tin
			$this->view->data['data_posts'] = $this->modelPosts->getDetail($id);
			$tag = $this->view->data['data_posts']['tags'];
			$this->view->data['post_tags'] = explode(",", $tag);
			$id_cate = $this->view->data['data_posts']['cate_id'];
			$this->view->data['posts_lq']  = $this->modelPosts->getPotsLienQuan($id_cate,$id);
			$cate_id = str_replace(array(','), '', $id_cate);
			$this->view->data['cate_name'] = $this->modelPosts->getcate($cate_id);
			$this->view->data['voucher'] = $this->modelPosts->getVoucher(0, 5);
			$this->view->data['care'] = $this->modelPosts->getPostCare(0, 4);
			$this->view->data['post_img'] = $this->modelPosts->getImg();
			$this->view->data['video_you'] = $this->modelPosts->getYoutube();
			$this->view->data['posts_hot']  = $this->modelPosts->getPotsDacBiet(0, 5);


			$this->view->title = stripslashes($this->view->data['data_posts']['title']);
			$this->view->description = stripslashes($this->view->data['data_posts']['description']);
			$this->view->keywords = stripslashes($this->view->data['data_posts']['tags']);
			$this->view->author = $_web['settings']['slogan'];
		}
		$this->view->render('detail_view');
	}
	public function conment(){
		if (isset($_POST['email'])) {
			$phone   = $_POST['phone'];
			$name    = $_POST['name'];
			$email   = $_POST['email'];
			$content = $_POST['content'];
			$data = array(
				'phone'=>$phone,
				'name'=>$name,
				'email'=>$email,
				'content'=>$content,
				'status'=> 0,
			);
			$data['create_time'] = time();
			$this->modelPosts->InsertConment($data);
			$html.="success";
		}
		$data = array(
				'status' => true,
				'html' => $html,
			);
		echo json_encode($data);
	}
	public function tags(){
		if(isset($_GET['tag'])){
			$tag = $_GET['tag'];
			$link = base_url() . 'tags.htm?tag=' . $tag . '';
			$all_pages = $this->modelPosts->getTags($tag);
			$paging = new Paging(count($all_pages), $link);
			$limit = 5;
			$count_page = $paging->findPages($limit);

			if (isset($_GET['p'])) {
				$curpage = $_GET['p'];
				$start = ($_GET['p'] - 1) * $limit;
			} else {
				$curpage = ($start / $limit) + 1;
				$start = $paging->rowStart($limit);
			}
			$this->view->data['tag'] = getLimitPosts($all_pages, $start, $limit);
			$this->view->data['pagination'] = $paging->pagesListSearch($curpage);
		}
		$this->view->data['voucher'] = $this->modelPosts->getVoucher(0, 5);
		$this->view->data['care'] = $this->modelPosts->getPostCare(0, 4);
		$this->view->data['posts_khac'] =  $this->modelPosts->getPostTags();
		$this->view->data['post_img'] = $this->modelPosts->getImg();
		$this->view->data['video_you'] = $this->modelPosts->getYoutube();
		$this->view->data['price_voucher'] = $this->modelPosts->getPriceVouchre();
		$this->view->render('tags');
	}
}