<?php
function bill_checkInputInsertBill($billData)
{
	$error = array();

	if (strlen($billData["dateInput"]) != 10) {
		$error["dateInput"] = "Wrong format";
	}

	switch ($billData["activity_type"]) {
		case 3:
			# code...
			break;

		default:
			if (!$billData["bill_type"]) {
				$error["bill_type"] = "require";
			}
			break;
	}

	return $error;
}