<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill_model extends CI_Model {

	var $table = "bill";

	function __construct()
	{
		parent::__construct();
	}

	public function getAllBillByType($type)
	{
		$this->db->where('bill_type = ', $type);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function getAllBillByUser($userID, $type, $from = null, $to = null)
	{
		$this->db->select('bill.*, bill_type.name as bill_type_name, bill_type.description as bill_type_description, bill_type_2.name as bill_type_2_name, bill_type_2.description as bill_type_2_description');
		$this->db->where('user = ', $userID);
		$this->db->where('bill.activity_type = ', $type);
		if ($from) {
			$this->db->where('dateInput >= ', $from);
		}
		if ($to) {
			$this->db->where('dateInput <= ', $to);
		}
		$this->db->join('bill_type', 'bill.bill_type = bill_type.pk', 'left');
		$this->db->join('bill_type_2', 'bill.bill_type_2 = bill_type_2.pk', 'left');
		$this->db->order_by('dateInput', 'desc');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function getAllBillByActivity($activityType)
	{
		$this->db->where('activity_type = ', $activityType);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function insertBill($billData)
	{
		$data = array(
			"user" => $billData["user"],
			"dateInput" => $billData["dateInput"],
			"bill_type" => $billData["bill_type"],
			"activity_type" => $billData["activity_type"],
			"description" => $billData["description"],
			"value" => $billData["value"],
			);
		if ($billData["bill_type_2"]) {
			$data["bill_type_2"] = $billData["bill_type_2"];
		}
		$this->db->insert($this->table, $data);
	}

	public function getSumValue($activity_type) {
		$this->db->select('sum(value) as total');
		$this->db->where('activity_type = ', $activity_type);
		$query = $this->db->get($this->table);
		return $query->row();
	}

}

/* End of file bill_model.php */
/* Location: ./application/models/bill_model.php */