<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	function register($data){
		if ($this->db->insert('users', $data)) {
			return true;
		}else{
			return false;
		}
	}

	function login($email, $password){
		$check = $this->db->get_where('vw_users', ['email' => $email]);
		if ($check->num_rows() > 0) {
			$result_query = $check->row();
			if (password_verify($password, $result_query->password)) {
				return $check->result_object();
			}else{
				return false;
			}
		}
	}

	function checkEmail($email){
		$check = $this->db->get_where('vw_users', ['email' => $email]);
		if($check->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}

}

/* End of file M_Auth.php */
/* Location: ./application/models/M_Auth.php */