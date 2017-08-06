<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index()
	{

	}

	public function add_income()
	{
		$this->load->model('bill_type_model', "mdlBillType");
		$listTypeIncome = $this->mdlBillType->getAllBillTypeByActivity(1);
		$data["listTypeIncome"] = $listTypeIncome;

		if (isPost()) {
			$params = $this->input->post();

			$this->load->helper('bill_helper');
			$error = bill_checkInputInsertBill($params);

			if ($error) {
				$data["error"] = $error;
				$data["params"] = $params;
			} else {
				$params["user"] = 9;
				$params["activity_type"] = 1;

				$this->load->model('bill_model', 'mdlBill');
				$this->mdlBill->insertBill($params);
				redirect(base_url("staff"),'refresh');
			}
		}

		$data["mainContent"] = "staff/add_income";
		$this->load->view('templates/main', $data, false);
	}

	public function add_outcome()
	{
		$this->load->model('bill_type_model', "mdlBillType");
		$listTypeIncome = $this->mdlBillType->getAllBillTypeByActivity(2);
		$data["listTypeIncome"] = $listTypeIncome;

		if (isPost()) {
			$params = $this->input->post();

			$this->load->helper('bill_helper');
			$error = bill_checkInputInsertBill($params);

			if ($error) {
				$data["error"] = $error;
				$data["params"] = $params;
			} else {
				$params["user"] = 9;
				$params["activity_type"] = 2;

				$this->load->model('bill_model', 'mdlBill');
				$this->mdlBill->insertBill($params);
				redirect(base_url("staff"),'refresh');
			}
		}

		$data["mainContent"] = "staff/add_outcome";
		$this->load->view('templates/main', $data, false);
	}

	public function list_income()
	{
		$params = $this->input->get();
		$from = $params["from"];
		$to = $params["to"];

		$this->load->model('bill_model', "mdlBill");
		$listBill = $this->mdlBill->getAllBillByUser(9, 1, $from, $to);
		$listAllBill = $this->mdlBill->getAllBillByUser(9, 1);

		$data["listAllBill"] = $listAllBill;
		$data["listBill"] = $listBill;

		$data["params"] = $params;
		$data["mainContent"] = "staff/list_income";

		$this->load->view('templates/main', $data, false);
	}

	public function list_outcome()
	{
		$params = $this->input->get();
		$from = $params["from"];
		$to = $params["to"];

		$this->load->model('bill_model', "mdlBill");
		$listBill = $this->mdlBill->getAllBillByUser(9, 2, $from, $to);
		$listAllBill = $this->mdlBill->getAllBillByUser(9, 2);

		$data["listAllBill"] = $listAllBill;
		$data["listBill"] = $listBill;

		$data["params"] = $params;
		$data["mainContent"] = "staff/list_outcome";

		$this->load->view('templates/main', $data, false);
	}

}

/* End of file staff.php */
/* Location: ./application/controllers/staff.php */