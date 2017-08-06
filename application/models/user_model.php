<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $table = "user";

	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{

	}

	public function checkExistUser($input, $isUsername)
	{
		if ($isUsername) {
			$this->db->where('username = ', $input);
			$query = $this->db->get($this->table);
			if ($query->num_rows > 0) {
				return true;
			}
			return false;
		}
	}

	public function insertUser($userData)
	{
		$data = array(
			"fullname" => $userData["fullname"],
			"username" => $userData["username"],
			"password" => md5($userData["password"]),
			"email" => $userData["email"],
			"tel" => $userData["tel"],
			"address" => $userData["address"],
			"type" => $userData["type"],
			);
		$this->db->insert($this->table, $data);
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */