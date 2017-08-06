<?php
function bill_checkInputInsertBill($billData)
{
	$error = array();

	if (strlen($billData[dateInput]) != 10) {
		$error["dateInput"] = "Wrong format";
	}

	if (!$billData["bill_type"]) {
		$error["bill_type"] = "require";
	}

	return $error;
}