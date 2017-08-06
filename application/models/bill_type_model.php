<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_type_model extends CI_Model {

	var $table = "bill_type";

	function __construct($foo = null)
	{
		parent::__construct();
	}

	public function getAllBillTypeByActivity($activityType)
	{
		$this->db->where('activity_type = ', $activityType);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function insertBillType($billTypeData)
	{
		$data = array (
			"activity_type" => $billTypeData["activity_type"],
			"name" => $billTypeData["name"],
			"description" => $billTypeData["description"],
			);
		$this->db->insert($this->table, $data);
	}

}

/* End of file bill_type_model.php */
/* Location: ./application/models/bill_type_model.php */