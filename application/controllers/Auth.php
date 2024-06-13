<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Auth', "auth");
		$this->load->library('cart');
	}

	public function index(){
		$data = [
			'title' => "Silahkan Masuk"
		];
		$this->load->view('auth/login', $data);
	}

	function register(){
		$data = [
			'title' => "Silahkan Daftar"
		];
		$this->load->view('auth/register', $data);
	}

	function actRegister(){

		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('phone', 'No. Whatsapp', 'trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('retypepw', 'Re-Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$uuid = htmlspecialchars($this->input->post('uuid'));
			$fullname = htmlspecialchars($this->input->post('fullname'));
			$email = htmlspecialchars($this->input->post('email'));
			$phone = htmlspecialchars($this->input->post('phone'));
			$password = htmlspecialchars($this->input->post('password'));
			$alamat = htmlspecialchars($this->input->post('alamat'));

			if (isset($email)) {
				if($this->auth->checkEmail($email)){
					$dataUser = [
						'id_users' => $uuid,
						'id_role' => 3,
						'nama_lengkap' => $fullname,
						'no_hp' => $phone,
						'email' => $email,
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'alamat' => $alamat
					];

					if ($response = $this->auth->register($dataUser)) {
						redirect("login", "refresh");
					}else{
						$this->session->set_flashdata('errDaftar', 'Terjadi kesalahan');
						redirect("register");
					}
				}else{
					$this->session->set_flashdata('errDaftar', 'E-mail sudah digunakan');
					redirect("register");
				}
			}

			

		}else {
			$this->session->set_flashdata('errDaftar', 'Isi data dengan benar');
			redirect("register");
		}
	}

	function actLogin(){
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$email = htmlspecialchars($this->input->post('email'));
			$password = htmlspecialchars($this->input->post('password'));
			if (isset($email) && isset($password)) {
				$dataLogged = $this->auth->login($email, $password);
				
				if($dataLogged != false){
					if($dataLogged[0]->role == "admin" || $dataLogged[0]->role == "pengelola" || $dataLogged[0]->role == "pemilik"){
						$array = array(
							'id_user' => $dataLogged[0]->id_users,
							'nama_lengkap' => $dataLogged[0]->nama_lengkap,
							'role' => $dataLogged[0]->role,
							'email' => $dataLogged[0]->email,
							'no_hp' => $dataLogged[0]->no_hp
						);

						$dataSession = [
							'admin_logged' => $array
						];

						$this->session->set_userdata( $dataSession );
						
// die('test');
						redirect("admin", "refresh");
					}else{
						$array = array(
							'id_user' => $dataLogged[0]->id_users,
							'nama_lengkap' => $dataLogged[0]->nama_lengkap,
							'role' => $dataLogged[0]->role,
							'email' => $dataLogged[0]->email,
							'no_hp' => $dataLogged[0]->no_hp,
							'alamat' => $dataLogged[0]->alamat
						);

						$dataSession = [
							'user_logged' => $array
						];
						$this->session->set_userdata( $dataSession );

						echo "<script>localStorage.setItem('uuid', '".$dataLogged[0]->id_users."_abs');</script>";

						// die('test');
						redirect("", "refresh");
					}
				}else{
					$this->session->set_flashdata('errActLogin', 'Username atau Password salah');
					redirect("auth", "refresh");	
				}
			}else{
				$this->session->set_flashdata('errActLogin', 'Terjadi kesalahan internal');
				redirect("auth", "refresh");
			}
		} else {
			$this->session->set_flashdata('errActLogin', 'Mohon isi semua bidang');
			redirect("auth", "refresh");
		}
	}

	function saveDataRecommend(){
		
	}

	function logout(){
		if ($this->session->userdata('admin_logged')) {
			$this->session->unset_userdata('admin_logged');
			echo '<script>localStorage.setItem("uuid", parseInt(10)+Math.floor(Math.random() * (parseInt(100000) - parseInt(10) + 1))+"_abs")</script>';
			redirect('login','refresh');
		}else if($this->session->userdata('user_logged')){
			$this->cart->destroy();
			$this->session->unset_userdata('user_logged');
			echo '<script>localStorage.setItem("uuid", parseInt(10)+Math.floor(Math.random() * (parseInt(100000) - parseInt(10) + 1))+"_abs")</script>';
			redirect('','refresh');
		}
	}


}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */