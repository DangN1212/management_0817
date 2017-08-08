<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$userType = $_SESSION["userData"]["type"];

		switch ($userType) {
			case 1:
				redirect(base_url("admin"));
				break;
			case 2:
				redirect(base_url("staff"));
				break;
			default:
				redirect(base_url("/home/login"));
				break;
		}
	}

	public function login()
	{
		if (isPost()) {
			$user = $this->input->post();
			if (!$user["username"] || !$user["password"]) {
				$data["error"] = "Bạn cần nhập đầy đủ thông tin đăng nhập.";
 			} else {
 				$this->load->model('user_model', "mdlUser");
 				if (!$this->mdlUser->checkExistUser($user["username"], true)) {
 					$data["error"] = "Thông tin đăng nhập không chính xác!";
 				} else {
 					$userInfo = $this->mdlUser->getUserByUsername($user["username"]);

 					if (md5($user["password"]) == $userInfo->password) {
 						$this->load->helper('user_helper');
 						if (user_login($userInfo)) {
 							redirect(base_url());
 						} else {
 							$data["error"] = "Có lỗi xảy ra, vui lòng thử lại sau!";
 						}
 					} else {
 						$data["error"] = "Thông tin đăng nhập không chính xác!";
 					}
 				}
 			}
		}

		$data["mainContent"] = "home/login";
		$this->load->view('templates/main', $data, false);
	}

	public function logout()
	{
		$_SESSION["userData"] = null;
		redirect(base_url());
	}

	public function ajax_addIncomeType()
	{

	}

	public function ajax_addOutcomeType()
	{

	}

	public function ajax_getBillType2($billType){
		$this->load->model('bill_type_2_model', "mdlBillType2");
		$result = $this->mdlBillType2->getAllBillType2ByBillType($billType);
		header('Content-Type: application/json');
		echo json_encode($result);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */ ?>