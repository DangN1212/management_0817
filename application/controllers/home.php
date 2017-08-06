<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["mainContent"] = "home/index";
		$this->load->view('templates/main', $data, false);
	}

	public function login()
	{
			$this->session->set_userdata('user_s', $user_s);
			echo "<pre>";
			print_r($_SESSION["user_s"]);
			echo "<pre/>";
			die;

		if (isPost()) {
			$user = $this->input->post();
		}

		$data["mainContent"] = "home/login";
		$this->load->view('templates/main', $data, false);
	}

	public function logout()
	{

	}

	public function ajax_addIncomeType()
	{

	}

	public function ajax_addOutcomeType()
	{

	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */ ?>