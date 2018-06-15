<?php
class GlobalsModel {
	private $menu;
	private $settings;
	private $options;
	private $widgets;
	private $banner;
	private $advertisement;
	private $pages;
	private $branch;
	private $comment;

	public function __construct() {
		global $_web;
		$this->lang = $_web['lang'];
		$this->menu = new system\Model($this->lang . '_menu');
		$this->settings = new system\Model('web_settings');
		$this->options = new system\Model('web_options');
		$this->comment = new system\Model('conment');
		$this->widgets = new system\Model($this->lang . '_widgets');
		$this->banner = new system\Model($this->lang . '_banner_images');
		$this->product = new system\Model($this->lang . '_product_basic');
		$this->advertisement = new system\Model($this->lang . '_advertisement');
		$this->post = new system\Model($this->lang . '_posts');
		$this->pages = new system\Model($this->lang . '_pages');
		$this->branch = new system\Model($this->lang . '_branch');
		$this->category_posts = new system\Model($this->lang . '_categories_posts');

	}
	public function getMenu($position) {
		$this->menu->where('position', $position);
		$this->menu->orderBy('sort', 'asc');
		$result = $this->menu->get();
		return $result;
	}
	public function newProduct($start = null, $limit = null) {
		$select = $this->lang . "_product_basic.*";
		$this->product->where($this->lang . "_product_basic.status", 1);
		$this->product->orderBy('create_time', 'DESC');
		if ($start == null && $limit == null) {
			$result = $this->product->get(null, null, $select);
		} else {
			$result = $this->product->get(null, array($start, $limit), $select);
		}
		// dd($result);
		return $result;
	}

	public function getSettings() {
		$this->settings->where('id', 2);
		$result = $this->settings->getOne();
		return $result;
	}
	public function getOptions() {
		$this->options->where('id', 1);
		$result = $this->options->getOne();
		return $result;
	}
	public function loadCommentCustomer() {
		$this->comment->where('status', 1);
		$result = $this->comment->get();
		return $result;
	}
	
	public function getWidgets() {
		$result = $this->widgets->get();
		return $result;
	}
	public function getBanner() {
		$this->banner->where('status', 1);
		// $this->banner->orderBy('sort','asc');
		$result = $this->banner->get();
		return $result;
	}
	public function getAdvertisement() {
		$this->advertisement->where('status', 1);
		$this->advertisement->orderBy('sort', 'asc');
		$result = $this->advertisement->getOne();
		return $result;
	}
	public function getPost() {
		$select = $this->post->orderBy('create_time', 'desc');
		$result = $this->post->get();
		return $result;
	}
	public function getCategoriPosts() {
		$result = $this->category_posts->get();
		return $result;
	}

	public function getPages() {
		$this->pages->where("id", 11);
		$result = $this->pages->get();
		return $result;
	}
	public function getPages_1() {
		$this->pages->where("id", 12);
		$result = $this->pages->get();
		return $result;
	}

}