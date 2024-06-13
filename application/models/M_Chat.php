<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Chat extends CI_Model
{

	public function userSenderInstant($data)
	{
		$insert = $this->db->insert('chat', $data);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function userSender()
	{
	}

	public function adminSender()
	{
	}

	public function getAllChat($id)
	{
		$query = "id_sender = '$id' OR id_receive = '$id'";

		// $data = $this->db->get('chat');
		// if ($data->num_rows() > 0) {
		// 	echo json_encode($data->result_object());
		// }else{
		// 	return false;
		// }
		$check = $this->db->get_where('chat', $query);
		if ($check->num_rows() > 0) {
			// $result_query = $check->row();
			// if (password_verify($password, $result_query->password)) {
			echo json_encode($check->result_object());
			// }else{
			// return false;
			// }
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			echo json_encode($data);
		}
	}

	function getNotif($id)
	{
		$query = "id_receive = '$id' AND status = 'Belum dibaca'";
		$check = $this->db->get_where('chat', $query);
		if ($check->num_rows() > 0) {
			$result_query = $check->result_object();
			echo json_encode($check->num_rows());
			// if ($result_query->id_receive == $id && $result_query->status == "Belum dibaca") {
			// 	echo json_encode($check->num_rows());
			// }
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			echo json_encode($data);
		}
	}

	public function getAllChatAdminAPI($id, $id_receive)
	{
		$query = "id_sender = '$id_receive' OR id_receive = '$id' AND id_sender = '$id' OR id_receive = '$id_receive'";

		// $data = $this->db->get('chat');
		// if ($data->num_rows() > 0) {
		// 	echo json_encode($data->result_object());
		// }else{
		// 	return false;
		// }
		$check = $this->db->get_where('chat', $query);
		if ($check->num_rows() > 0) {
			// $result_query = $check->row();
			// if (password_verify($password, $result_query->password)) {
			echo json_encode($check->result_object());
			// }else{
			// return false;
			// }
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			echo json_encode($data);
		}
	}

	public function getAllChatAdmin($id)
	{
		$query = "id_sender = '$id' OR id_receive = '$id'";
		$check = $this->db->get_where('chat', $query);
		if ($check->num_rows() > 0) {
			return $check->result_object();
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			echo json_encode($data);
		}
	}

	public function getAllUsers()
	{
		// $query = "id_sender = '$id' OR id_receive = '$id'";
		// $check = $this->db->get_where('chat',$query);
		$get = $this->db->get('users');
		if ($get->num_rows() > 0) {
			return $get->result_object();
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			echo json_encode($data);
		}
	}

	function getNotifphp($id)
	{
		$check = $this->db->get('vw_notif');
		if ($check->num_rows() > 0) {
			$result_query = $check->result_object();
			// echo json_encode($check->num_rows());
			return $result_query;
			// if ($result_query->id_receive == $id && $result_query->status == "Belum dibaca") {
			// 	echo json_encode($check->num_rows());
			// }
		} else {
			$data = [
				'code' => 404,
				"message" => "Belum ada pesan"
			];
			return false;
		}
	}

	function updateStatus($id, $status)
	{
		$data = [
			'status' => $status
		];

		$this->db->set($data);
		$this->db->where("id_sender", $id)->or_where("id_receive", $id);
		$this->db->update('chat');
	}
}

/* End of file M_Chat.php */
/* Location: ./application/models/M_Chat.php */