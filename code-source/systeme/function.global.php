<?php
function username_verify($data) {
	$data_length = strlen($data);
	if($data_length < 4 && $data_length > 255) {
		return false;
	}

	if(!preg_match('/\A([A-Za-z_-]+)\z/', $data, $output_array)) {
		return false;
	}

	return true;
}

function web($file) {
	include "__web__/".$file.".php";
}