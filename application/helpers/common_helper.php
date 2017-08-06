<?php
function publicUrl($url = '')
{
	return base_url("/public".$url);
}

function isPost()
{
	$request = $_SERVER['REQUEST_METHOD'];
	if ($request == "POST") {
		return true;
	}
	return false;
}