<?php 

function frontEnd($passing_file, $passing_data = ""){
	$ci = get_instance();
	$ci->load->view('partition/user/head', $passing_data);
	$ci->load->view('partition/user/header', $passing_data);
	$ci->load->view($passing_file, $passing_data);
	$ci->load->view('partition/user/footer', $passing_data);
}

function frontEndAdmin($passing_file, $passing_data = ""){

	$ci = get_instance();
	$ci->load->view('partition/admin/head', $passing_data);
	$ci->load->view('partition/admin/navbar', $passing_data);
	$ci->load->view('partition/admin/aside', $passing_data);
	// $ci->load->view('partition/admin/content_wrapper', $passing_data);
	$ci->load->view($passing_file, $passing_data);
	$ci->load->view('partition/admin/footer', $passing_data);

}

function recursive_change_key($arr, $set) {
	if (is_array($arr) && is_array($set)) {
		$newArr = array();
		foreach ($arr as $k => $v) {
			$key = array_key_exists( $k, $set) ? $set[$k] : $k;
			$newArr[$key] = is_array($v) ? recursive_change_key($v, $set) : $v;
		}
		return $newArr;
	}
	return $arr;    
}