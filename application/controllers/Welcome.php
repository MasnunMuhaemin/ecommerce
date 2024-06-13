<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_cart');
		$this->load->library('cart');
		$this->load->library('QRISDANA');
	}

	public function index(){

		$data = Array();
		$datasRecommended = Array();

		if ($this->m_produk->getAll() != null) {
			if($this->session->userdata("user_logged")){
				$datas = $this->m_produk->getRecommendByID($this->session->userdata["user_logged"]['id_user']);
				if($datas != null || $datas != false){
					foreach($datas as $indexes => $val){
						$datasRecommended[$indexes] = $this->m_produk->getRecommended($val['harga'], $val['bahan']);
					}

				}
				$data = [
					'title' => "E-Commerce",
					'data' => $this->m_produk->getAll(),
					'data_recommend' => $datasRecommended,
					'totalItems' => $this->cart->total_items()
				];
			}else{
				$data = [
					'title' => "E-Commerce",
					'data' => $this->m_produk->getAll(),
					'data_recommend' => $this->m_produk->getRecommend(),
					'totalItems' => $this->cart->total_items()
				];
			}
		}else{
			$data = [
				'title' => "E-Commerce",
				'data' => null,
				'totalItems' => $this->cart->total_items()
			];
		}

		

		frontEnd("user/home", $data);
	}

	function view_all_product(){
		$data = array();
		if ($this->m_produk->getAll() != null) {
			$data = [
				'title' => "E-Commerce",
				'data' => $this->m_produk->getAll(),
				'totalItems' => $this->cart->total_items()
			];
		}else{
			$data = [
				'title' => "E-Commerce",
				'data' => null,
				'totalItems' => $this->cart->total_items()
			];
		}
		frontEnd("user/product", $data);

	}

	function about_company(){
		$data = [
			'title' => "E-Commerce",
			'totalItems' => $this->cart->total_items()
		];

		frontEnd("user/about", $data);
	}

	function contact(){
		$data = [
			'title' => "E-Commerce",
			'totalItems' => $this->cart->total_items()
		];

		frontEnd("user/contact", $data);
	}

	function detailProduk(){
		$id = $this->uri->segment(2);
		
		$data = [
			'title' => "E-Commerce",
			'data' => $this->m_produk->getDetailProduk($id),
			'totalItems' => $this->cart->total_items()
		];

		frontEnd("user/detail_product", $data);
	}

	function riwayat($id){
		if ($this->session->userdata('user_logged')['id_user'] == $id) {

			$data = [];

			if($this->m_cart->getCheckout($id) !== FALSE){
				$data = [
					'title' => "E-Commerce",
					'data' => $this->m_cart->getCheckout($id),
					'totalItems' => $this->cart->total_items()
				];

			}else{
				$data = [
					'title' => "E-Commerce",
					'data' => false,
					'totalItems' => $this->cart->total_items()
				];
			}
			frontEnd('user/riwayat', $data);

		}else{
			echo "<script>alert('Tidak bisa melihat riwayat orang lain')</script>";
			redirect($_SERVER["HTTP_REFERER"]);
		}
	}

	function detailriwayat($id){
		if($this->session->userdata('user_logged')['id_user'] == $id){
			$data = [];
			if ($this->m_cart->getDetailCheckout($this->uri->segment(3))) {
				$data = [
					'title' => "E-Commerce",
					'data' => $this->m_cart->getDetailCheckout($this->uri->segment(3)),
					'totalItems' => $this->cart->total_items(),
					// 'qrcode' => QRcode::
				];
			}else{
				$data = [
					'title' => "E-Commerce",
					'data' => null,
					'totalItems' => $this->cart->total_items()
				];
			}


			frontEnd('user/detailriwayat', $data);

		}else{
			echo "tidak boleh melihat";
			redirect("login");
		}
	}

	function barangditerima($id, $uuid, $status){
		if($status == "barangditerima"){
			$this->m_produk->barangditerima($uuid);
			redirect("detailriwayat/".$id."/".$uuid, "refresh");
		}
	}

	function barangtidakditerima(){
		$this->form_validation->set_rules('id_user', 'Id', 'trim|required');
		$this->form_validation->set_rules('uuid', 'UUID', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('radio', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('harga_barang', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('jumlah_pengembalian', 'Deskripsi', 'trim|required');

		if($this->form_validation->run()){
			$id = $this->input->post('id_user');
			$status = $this->input->post("status");
			$uuid = $this->input->post("uuid");
			$deskripsi = strtolower($this->input->post("deskripsi"));
			$radio = $this->input->post("radio");
			$harga_barang = $this->input->post("harga_barang");
			$jumlah_pengembalian = $this->input->post("jumlah_pengembalian");

			if($status == "barangtidakditerima" && $id != "" && $uuid != "" && $deskripsi != ""){

				$config['upload_path'] = './assets/uploads/foto_refund';
				$config['allowed_types'] = 'jpg|png|img|jpeg';
				$config['max_size']  = '50000';
				$config['max_width']  = '5000';
				$config['max_height']  = '5000';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ( !$this->upload->do_upload("gambarRefund") ){
					$error = array('error' => $this->upload->display_errors());
					// $this->session->set_flashdata("infoFlashAdd", $error[0]);
					// redirect("add_data");
					echo "<script>alert('Gambar tidak valid!')</script>";
					redirect("detailriwayat/".$id."/".$uuid, "refresh");
				}else{
					// $data = array('upload_data' => $this->upload->data());
					$data = $this->upload->data();
					$datacheckout= $this->db->get_where('checkout', ['uuid_checkout' => $uuid]);
					$nominal = 0;
					if($datacheckout->num_rows() > 0){
						$res = $datacheckout->result_object();
						foreach($res as $val){
							$res_product = $this->db->get_where("data_barang", ['id_barang' => $val->id_barang])->result_object();
							foreach($res_product as $value){
								$updateStok = $value->stok_barang + $val->banyak;

								$dataUpdate = [
									'stok_barang' => $updateStok
								];

								$this->db->set($dataUpdate);
								$this->db->where("id_barang", $value->id_barang);
								$this->db->update('data_barang');
								
							}

							$dataUpdateStatus = [
								'status_pembayaran'=> $radio,
								'datetime_pay' => date("Y-m-d H:i:s")
							];

							$this->db->set($dataUpdateStatus);
							$this->db->where('uuid_checkout', $uuid);
							$this->db->update('checkout');

							$datarefund = [
								'id_barang' => $value->id_barang,
								'id_checkout' => $val->id_checkout,
								'uuid_checkout' => $uuid,
								'id_users' => $id,
								'status_pengiriman' => $status,
								'status_pengembalian' => $radio,
								'nominal_refund' => $val->harga*$val->banyak,
								'deskripsi' => $this->input->post("deskripsi"),
								'gambar_refund' => $data['file_name'],
								'jumlah_pengembalian' => $jumlah_pengembalian
							];
							$this->db->insert("refund",$datarefund);
						}
					}
					redirect("detailriwayat/".$id."/".$uuid, "refresh");
				}
			}
		}else{
			// $this->session->set_flashdata('infoFlashRefund', 'Isi semua bidang');
			// redirect("detailriwayat/".$id."/".$uuid, "refresh");
		}


	}

	function recommend(){

		$this->form_validation->set_rules('uuid', 'UUID', 'trim|required');
		$this->form_validation->set_rules('bahan', 'Bahan', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'trim|required');

		if($this->form_validation->run() == TRUE) {
			$uuid = $this->input->post("uuid");
			$bahan = $this->input->post("bahan");
			$model = $this->input->post("model");
			$ukuran = $this->input->post("ukuran");

			$data = [
				"uuid" => $uuid,
				"bahan" => $bahan,
				"model" => $model,
				"ukuran" => $ukuran
			];

			$this->m_produk->recommend($data, $bahan, $model, $ukuran, $uuid);
			redirect('welcome','refresh');
		} else {
			echo "<script>alert('Harap isi kuesioner')</script>";
			echo "<script>localStorage.clear()</script>";
			redirect('welcome','refresh');
		}
		

		
	}


}
