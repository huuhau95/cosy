<?php
use voku\Cart\Cart;
use voku\Cart\Identifier\Cookie;
use voku\Cart\Storage\Session;

class Controller {
	public $view, $input, $mod, $controller, $action, $id, $loadPages, $modelGlobals, $menu, $cart;
	public function __construct() {
		global $_web;
		$this->mod = $_web['uri']['mod'];
		$this->controller = $_web['uri']['controller'];
		$this->action = $_web['uri']['action'];
		$this->id = $_web['uri']['id'];

		$this->input = new Input();
		$this->view = new View();
		$this->loadLibrary('paging');
		$this->modelGlobals = $this->loadModelGlobals('GlobalsModel');
		$_web['menu'] = $this->getMenuGlobals();
		$_web['menu_footer'] = $this->getMenuFooter();
		$_web['menu_right'] = $this->getMenuRight();
		$_web['menu_right_1'] = $this->getMenuRight_1();
		$_web['banner'] = $this->getBannerGlobals();
		$_web['settings'] = $this->getSettingsGlobals();
		$_web['options'] = $this->getOptionsGlobals();
		$_web['widgets'] = $this->getWidgetsGlobals();
		$_web['comment'] = $this->loadCommentCustomer();

		$_web['advertisement'] = $this->getAdvertisementGlobals();
		$_web['pages'] = $this->getPagesGlobals();
		$_web['pages_1'] = $this->getPagesGlobals_1();
		$_web['post'] = $this->modelGlobals->getPost();
		$_web['category_post'] = $this->modelGlobals->getCategoriPosts();
		$_web['new_product'] = $this->modelGlobals->newProduct(0, 4);

		$this->cart = new Cart(new Session, new Cookie);
		$_web['cart'] = $this->cart->contents();
		$_web['total_cart'] = $this->cart->total();
		$_web['total_item'] = $this->cart->totalItems();
		$_web['total_unique'] = $this->cart->totalUniqueItems();
		// dd($_web['AllBranch']);
	}
	public function loadModel($file, $mod = null) {
		if ($mod === null) {
			$path = DIR_MODULES . $this->mod . '/model/' . lcfirst($file) . '.php';
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . lcfirst($path));
			}
		} else {
			$path = DIR_MODULES . $mod . '/model/' . lcfirst($file) . '.php';
			if (file_exists($path)) {
				include_once $path;
				$obj = new $file();
				return $obj;
			} else {
				die('Không tồn tại file này' . lcfirst($path));
			}
		}
	}
	public function loadLibrary($file) {
		$path = DIR_APP . 'libraries/' . lcfirst($file) . '.php';
		if (file_exists($path)) {
			include_once $path;
		} else {
			die('Không tồn tại file này' . lcfirst($path));
		}
	}
	public function isPost($key) {
		if (isset($_POST[$key])) {
			return true;
		} else {
			return false;
		}
	}
	public function loadModelGlobals($file) {
		$path = DIR_MODULES . lcfirst($file) . '.php';
		if (file_exists($path)) {
			include_once $path;
			$obj = new $file();
			return $obj;
		} else {
			die('Không tồn tại file này' . lcfirst($path));
		}
	}
	public function getMenuGlobals() {
		$data = $this->modelGlobals->getMenu(1);
		return $data;
	}
	public function getMenuFooter() {
		$data = $this->modelGlobals->getMenu(2);
		return $data;
	}
	public function getMenuRight() {
		$data = $this->modelGlobals->getMenu(3);
		return $data;
	}
	public function getMenuRight_1() {
		$data = $this->modelGlobals->getMenu(5);
		return $data;
	}
	public function getMenuChinhSach() {
		$data = $this->modelGlobals->getMenu(6);
		return $data;
	}
	public function loadCommentCustomer(){
		$data = $this->modelGlobals->loadCommentCustomer();
		return $data;
	}
	public function getSettingsGlobals() {
		$data = $this->modelGlobals->getSettings();
		return $data;
	}
	public function getPagesGlobals() {
		$data = $this->modelGlobals->getPages();
		return $data;
	}
	public function getPagesGlobals_1() {
		$data = $this->modelGlobals->getPages_1();
		return $data;
	}
	public function getOptionsGlobals() {
		$data = $this->modelGlobals->getOptions();
		return $data;
	}
	public function getWidgetsGlobals() {
		$data = $this->modelGlobals->getWidgets();
		return $data;
	}

	public function getBannerGlobals() {
		$data = $this->modelGlobals->getBanner();
		return $data;
	}
	public function getAdvertisementGlobals() {
		$data = $this->modelGlobals->getAdvertisement();
		return $data;
	}
	// set Messager flash
	public function flashMessager($key = 'flash_success', $mess = 'Messager Demo Success.') {
		$mess = array(
			$key => $mess,
			//'flash_success' => lang('update_page_success'),
		);
		//Session::create($mess);

		if (isset($mess) && !empty($mess)) {
			foreach ($mess as $key => $value) {
				$_SESSION[$key] = $value;
			}
		}
	}
	public function getFlashMessager($key = 'flash_success') {
		if (isset($_SESSION[$key])) {
			$this->view->flash[$key] = $_SESSION[$key];
			unset($_SESSION[$key]);
		}
	}

}