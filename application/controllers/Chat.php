<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class Chat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Chat', "m_chat");
	}

	public function userSenderInstant(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$data = file_get_contents("php://input");
			
			if($data == "" || $data == null){
				echo "mohon di isi";
			}else{
				$row = json_decode($data, true);
				if($row['nama'] != "" && $row['msg'] != "" && $row['status'] !== ""){
					$idSender = (int)$this->session->userdata("user_logged")['id_user'];
					$idReceive = 1;
					$nama = $row['nama'];
					$message = $row['msg'];
					$status = $row['status'];

					$data = [
						'id_receive' => $idReceive,
						'id_sender' => $idSender,
						'nama' => $nama,
						'message' => $message,
						'status' => $status,
						'time' => date("Y-m-d H:i:s")
					];

					if($this->m_chat->userSenderInstant($data)){
						// redirect($_SERVER["HTTP_REFERER"]);
						echo "console.log('berhasil')";
					}else{
						echo "console.log('gagal kirim')";
					}
				}
			}

			die();
		}
	}

	public function userSender(){
		$config['upload_path'] = './assets/uploads/buktiTF';
		$config['allowed_types'] = 'jpg|png|img';
		// $config['max_size']  = '10000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( !$this->upload->do_upload('file') ){
			$upload = [
				'id_receive' => 1,
				'id_sender' => $this->session->userdata('user_logged')['id_user'],
				'nama' => $this->session->userdata('user_logged')['nama_lengkap'],
				'message' => $this->input->post("msg"),
				'status' => "Belum dibaca",
				'time' => date('Y-m-d H:i:s'),
			];

			if($this->m_chat->userSenderInstant($upload)){
				echo "Pesan berhasil di kirim";
			}else{
				echo "Pesan gagal di kirim";
			}
		}else{
			// $data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$upload = [
				'id_receive' => 1,
				'id_sender' => $this->session->userdata('user_logged')['id_user'],
				'nama' => $this->session->userdata('user_logged')['nama_lengkap'],
				'message' => $this->input->post("msg"),
				'image' => $data['file_name'],
				'status' => "Belum dibaca",
				'time' => date("Y-m-d H:i:s"),
			];

			if($this->m_chat->userSenderInstant($upload)){
				echo "Pesan berhasil di kirim";
			}else{
				echo "Pesan gagal di kirim";
			}
		}
	}

	public function uploadImage(){
		$file = $_FILES['file']['name'];
		echo "<script>console.log(".$file.")</script>";
	}


	public function getAllChat(){
		$id_user = $this->session->userdata('user_logged')['id_user'];
		$this->m_chat->getAllChat($id_user);
	}

	public function getNotif($id){
		$this->m_chat->getNotif($id);
	}

	public function getAllChatAdminAPI($id_receive){
		$id_user = $this->session->userdata('admin_logged')['id_user'];
		$this->m_chat->getAllChatAdminAPI($id_user, $id_receive);
	}
	

	public function adminSender(){
		$config['upload_path'] = FCPATH.'/assets/uploads/buktiTF';
		$config['allowed_types'] = 'jpg|png|img';
		// $config['max_size']  = '10000';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( !$this->upload->do_upload('file') ){
			$upload = [
				'id_receive' => $this->input->post("id_user"),
				'id_sender' => $this->session->userdata('admin_logged')['id_user'],
				'nama' => $this->session->userdata('admin_logged')['nama_lengkap'],
				'message' => $this->input->post("msg"),
				'status' => "Belum dibaca",
				'time' => date("Y-m-d H:i:s"),
			];

			if($this->m_chat->userSenderInstant($upload)){
				redirect($_SERVER["HTTP_REFERER"]);
			}else{
				echo "Pesan gagal di kirim";
			}
		}else{
			// $data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$upload = [
				'id_receive' => $this->input->post("id_user"),
				'id_sender' => $this->session->userdata('admin_logged')['id_user'],
				'nama' => $this->session->userdata('admin_logged')['nama_lengkap'],
				'message' => $this->input->post("msg"),
				'status' => 'Belum dibaca',
				'image' => $data['file_name'],
				'time' => date("Y-m-d H:i:s"),
			];

			if($this->m_chat->userSenderInstant($upload)){
				redirect($_SERVER["HTTP_REFERER"]);
			}else{
				echo "Pesan gagal di kirim";
			}
		}
	}

	public function updateNotifAjax(){
		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$data = file_get_contents("php://input");

			echo json_encode($data);
			
			if($data == "" || $data == null){
				echo "Mohon di isi";
			}else{
				$row = json_decode($data, true);
				if($row['id'] != "" && $row['status'] != ""){
					$id = $row['id'];
					$status = $row['status'];
					if($this->m_chat->updateStatus($id, $status)){
						// redirect($_SERVER["HTTP_REFERER"]);
						echo "console.log('berhasil')";
					}else{
						echo "console.log('gagal kirim')";
					}
				}
			}

			die();
		}
	}

	function deleteChat($id){
		$query = "id_sender = '$id' OR id_receive = '$id'";
		$this->db->delete('chat', $query);
		redirect("home-chat-admin", "refresh");
	}

}

/* End of file Chat.php */
/* Location: ./application/controllers/Chat.php */