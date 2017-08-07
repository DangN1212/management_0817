<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $userID;

	function __construct()
	{
		parent::__construct();

		$userType = $_SESSION["userData"]["type"];

		if ($userType != 1) {
			redirect(base_url());
		}

		$this->userID = $_SESSION["userData"]["id"];

	}

	public function index()
	{
		$this->load->model('bill_model', "mdlBill");
		$totalInvest = $this->mdlBill->getSumValue(3)->total;
		$totalIncome = $this->mdlBill->getSumValue(1)->total;
		$totalOutcome = $this->mdlBill->getSumValue(2)->total;


		$data["totalInvest"] = $totalInvest;
		$data["totalIncome"] = $totalIncome;
		$data["totalOutcome"] = $totalOutcome;
		$data["mainContent"] = "admin/index";
		$this->load->view('templates/main', $data, false);
	}

	public function create_staff(){

		if (isPost()) {
			$params = $this->input->post();
			$this->load->helper('user_helper');
			$error = user_checkInputInsertData($params);
			if ($error) {
				$data["error"] = $error;
				$data["params"] = $params;
			} else {
				$this->load->model('user_model', 'mdlUser');
				$this->mdlUser->insertUser($params);
				redirect(base_url("admin"),'refresh');
			}
		}

		$data["mainContent"] = "admin/create_staff";
		$this->load->view('templates/main', $data, false);
	}

	public function invest()
	{
		$params = $this->input->get();
		$from = $params["from"];
		$to = $params["to"];

		$this->load->model('bill_model', "mdlBill");
		$listBill = $this->mdlBill->getAllBillByUser($this->userID, 3, $from, $to);
		$listAllBill = $this->mdlBill->getAllBillByUser($this->userID, 3);

		$data["listAllBill"] = $listAllBill;
		$data["listBill"] = $listBill;

		$data["params"] = $params;

		if (isPost()) {
			$params = $this->input->post();
			$params["bill_type"] = 1;
			$this->load->helper('bill_helper');
			$error = bill_checkInputInsertBill($params);
			if ($error) {
				$data["error"] = $error;
				$data["params"] = $params;
			} else {
				$params["user"] = $this->userID;
				$params["activity_type"] = 3;

				$this->load->model('bill_model', 'mdlBill');
				$this->mdlBill->insertBill($params);
				redirect(base_url("/admin/invest"),'refresh');
			}

		}

		$data["mainContent"] = "admin/invest";
		$this->load->view('templates/main', $data, false);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */