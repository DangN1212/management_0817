<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_type_2_model extends CI_Model {

	var $table = "bill_type_2";

	function __construct($foo = null)
	{
		parent::__construct();
	}

	public function getAllBillType2ByBillType($billType)
	{
		$this->db->where('bill_type = ', $billType);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function insertBillType2($billType2Data)
	{
		$data = array (
			"name" => $billType2Data["name"],
			"description" => $billType2Data["description"],
			"bill_type" => $billType2Data["bill_type"],
			);
		$this->db->insert($this->table, $data);
	}

}

/* End of file bill_type_model_2.php */
/* Location: ./application/models/bill_type_model_2.php */