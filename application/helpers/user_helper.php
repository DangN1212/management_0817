<?php
function user_checkInputInsertData($userData)
{
	$error = array();
	$CI = get_instance();
	$CI->load->model('user_model', 'mdlUser');

	if ($CI->mdlUser->checkExistUser($userData["username"], true)) {
		$error["username"] = "username exist";
	}

	if ($userData["password"] != $userData["password_r"]) {
		$error["password_r"] = "different";
	}

	if (!filter_var($userData["email"], FILTER_VALIDATE_EMAIL)) {
	  	$error["email"] = "Invalid email format";
	}

	// if(!preg_match("\\+84|0)\\d{9,10}", $userData["tel"])) {
	//   	$error["tel"] = "Invalid phone number format";
	// }
	return $error;
}