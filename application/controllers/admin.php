<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
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

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */