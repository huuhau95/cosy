<?php
class SettingsController extends Controller {
	public $info;
	public $modelAddress;

	//public $loadPages;
	public function __construct() {
		parent::__construct();
		$this->info = $this->loadModel('Settings');
		$this->modelAddress = $this->loadModel('Address');
	}
	public function manager() {
		if (isset($_SESSION['flash_success'])) {
			$this->view->data['flash_success'] = Session::get('flash_success');
			unset($_SESSION['flash_success']);
		}
		if (isset($_SESSION['flash_warning'])) {
			$this->view->data['flash_warning'] = Session::get('flash_warning');
			unset($_SESSION['flash_warning']);
		}
		$this->view->render('manager');
	}
	public function index() {
		global $_web;
		if ($_SESSION['group_id'] == '22' || $_SESSION['group_id'] == '20') {
			$dir = DIR_TMP . 'cdn/';
			$this->view->data['province'] = $this->modelAddress->getProvince();
			if (isset($_POST['ok'])) {
				$seo_title = trim(($this->input->post('seo_title')));
				$name = trim(($this->input->post('name')));
				$slogan = trim(($this->input->post('slogan')));
				$seo_description = trim(($this->input->post('seo_description')));
				$seo_keywords = trim(($this->input->post('seo_keywords')));
				$google_analytics = trim(($this->input->post('google_analytics')));
				$google_site_verification = trim(($this->input->post('google_site_verification')));
				$contact_address = trim(($this->input->post('contact_address')));
				$address2 = trim(($this->input->post('address2')));
				$email_footer = trim(($this->input->post('email_footer')));
				$contact_phone = trim(($this->input->post('contact_phone')));
				$contact_hotline = trim(($this->input->post('contact_hotline')));
				$link_fb = trim(($this->input->post('link_fb')));
				$id_app_fb = trim(($this->input->post('id_app_fb')));
				$content = trim(($this->input->post('content')));
				$domain = trim(($this->input->post('domain')));
				$adress3 = trim(($this->input->post('address3')));
				$name_bank_1 = trim(($this->input->post('namebank1')));
				$id_bank_1 = trim(($_POST['id_bank1']));
				$admin_bank_1 = trim(($this->input->post('adminbank1')));
				$name_bank_2 = trim(($this->input->post('nam_bank2')));
				$id_bank_2 = trim(($this->input->post('id_bank2')));
				$admin_bank_2 = trim(($this->input->post('adminbank2')));
				$content_bank = trim(($this->input->post('content_bank')));
				$youtube = trim(($this->input->post('youtube')));
				$facebook = trim(($this->input->post('facebook')));
				$google = trim(($this->input->post('google')));
				$data_insert = array(
					'seo_title' => $seo_title,
					'name' => $name,
					'slogan' => $slogan,
					'seo_description' => $seo_description,
					'seo_keywords' => $seo_keywords,
					'google_analytics' => $google_analytics,
					'google_site_verification' => $google_site_verification,
					'address' => $contact_address,
					'address2' => $address2,
					'email' => $email_footer,
					'email_support' => $email_support,
					'phone' => $contact_phone,
					'hotline' => $contact_hotline,
					'link_facebook' => $link_fb,
					'id_app_fb' => $id_app_fb,
					'conten' => $content,
					'domain' => $domain,
					'address3' => $adress3,
					'namebank' => $name_bank_1,
					'id_bank1' => $id_bank_1,
					'adminbank' => $admin_bank_1,
					'nam_bank2' => $name_bank_2,
					'id_bank2' => $id_bank_2,
					'adminbank2' => $admin_bank_2,
					'content_bank' => $content_bank,
					// 'province' 	=> $left_province,
					// 'district' 	=> $left_district,
					// 'address' 	=> $left_address
					'link_google' => $google,
					'link_facebook' => $facebook,
					'link_youtube' => $youtube,
					// 'link_google_map'	=> $link_gm,
				);
				$this->info->update($data_insert);
				$this->view->data['success'] = lang('success_settings');
			}

			//$this->view->data['images'] = getImagesToFolder($dir);
			$this->view->data['info'] = $this->info->getInfo();

			$this->view->render('index');
		} else {
			$mess = array(
				'flash_warning' => "Bạn không có quyền này!!!",
			);
			Session::create($mess);
			return redirect(base_url() . 'product/product/index');
		}
	}
	public function userOnline() {
		//$my_ip = getHostByName(php_uname('n'));
		$my_ip = getIP();
		echo $my_ip;die;
		/*$my_url = $_SERVER['PHP_SELF'];

			$sql = "SELECT * FROM online WHERE ip = '".$my_ip."'";
			$count = $database->count_query($sql);
			$data = array(
			  'ip'  => $my_ip,
			  'url' => $my_url,
			  'time'  => time()
			);
			if ($count>0) {
			  $where = array(
			    array('ip',$my_ip,'and'),
			        array('url',$my_url)
			  );
			  $database->update('online',$data,$where);
			}else{
			  // nếu chưa có ip trong database thì thêm địa chỉ ip mới vào
			  $database->insert('online',$data);

			}
			$time = time();
			$database->delete_sql("DELETE FROM online WHERE `time` + 1 < $time");

			// Select
			$data_ip = $database->query("SELECT * FROM online");

			if (isset($data_ip) && !empty($data_ip)) {
			  echo "<pre>";
			  print_r($data_ip);
			  echo "</pre>";
		*/
	}
	public function setLang() {
		$lang = $this->input->post('lang');
		//Session::create(array('lang'=> $lang));
		$cookie_name = "lang";
		$cookie_value = $lang;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day

		$data = array(
			'status' => true,
			'mess' => 'Success',
		);

		echo json_encode($data);
	}

	public function updateInfo() {
		if (isset($_POST['src'])) {
			$title = trim(addslashes($_POST['title']));

			if ($title == 'logo') {
				$data = array(
					'logo' => trim(addslashes($_POST['src'])),
				);
			} else {
				$data = array(
					'icon' => trim(addslashes($_POST['src'])),
				);
			}

			$this->info->update($data);
			$data_mess = array(
				'status' => true,
				'mess' => lang('logo_update_success'),
			);
			echo json_encode($data_mess);
		}
	}
	public function loadImageDefault() {
		if (isset($_POST['status']) && is_numeric($_POST['status'])) {
			if ($_POST['status'] != 0) {
				$data_update = array(
					'logo' => '',
				);
			} else {
				$data_update = array(
					'icon' => '',
				);
			}
			$this->info->update($data_update);
			$data = array(
				'status' => true,
				'mess' => lang('notification') . lang('success_settings'),
			);
			echo json_encode($data);
		}
	}
	public function openDirectory() {
		if (isset($_POST['check_folder']) && $_POST['check_folder'] != false && isset($_POST['directory'])) {
			$direct = trim(addslashes($_POST['check_folder']));
			$dir = trim($_POST['directory']) . $direct . "/";
			//$dir          = DIR_TMP.'cdn/'.$direct."/";
			$html = listAllFolderChooseImage($dir);
			$data = array(
				'status' => true,
				'html' => $html,
				'mess' => lang('notification') . lang('uploaded_message'),
			);
			echo json_encode($data);
		}

	}
	public function backDirectory() {
		if (isset($_POST['back']) && isset($_POST['directory'])) {
			$directory = dirname($_POST['directory']) . "/";
			$html = listAllFolderChooseImage($directory);
			$data = array(
				'status' => true,
				'html' => $html,
				'mess' => lang('notification') . lang('uploaded_message'),
			);
			echo json_encode($data);
		}

	}

	public function openDirectoryFile() {
		if (isset($_POST['check_folder']) && $_POST['check_folder'] != false && isset($_POST['directory'])) {
			$direct = trim(addslashes($_POST['check_folder']));
			$dir = trim($_POST['directory']) . $direct . "/";
			//$dir          = DIR_TMP.'cdn/'.$direct."/";
			$html = listAllFolderChooseFile($dir);
			$data = array(
				'status' => true,
				'html' => $html,
				'mess' => lang('notification') . lang('uploaded_message'),
			);
			echo json_encode($data);
		}

	}
	public function backDirectoryFile() {
		if (isset($_POST['back']) && isset($_POST['directory'])) {
			$directory = dirname($_POST['directory']) . "/";
			$html = listAllFolderChooseFile($directory);
			$data = array(
				'status' => true,
				'html' => $html,
				'mess' => lang('notification') . lang('uploaded_message'),
			);
			echo json_encode($data);
		}

	}
	public function sendFiles() {
		if (isset($_FILES['file']['name'])) {
			$file_name = $_FILES['file']['name'];
			$tmp_name = explode('.', $_FILES['file']['name']);
			$ext = end($tmp_name);
			if ($ext == 'json') {
				if (move_uploaded_file($_FILES['file']['tmp_name'], DIR_TMP . 'files/' . $file_name)) {
					$data_insert = array(
						'google_file_json' => $file_name,
					);
					$this->info->update($data_insert);
					$status = true;
					$mess = lang('success') . lang('uploaded_message');
				} else {
					$status = false;
					$mess = lang('warning') . lang('not_uploaded_message');
				}
			} else {
				$status = false;
				$mess = lang('warning') . lang('not_uploaded_message');
			}
			$data = array(
				'status' => $status,
				'mess' => $mess,
			);
			echo json_encode($data);
		}
	}

}