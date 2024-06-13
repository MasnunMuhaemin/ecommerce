<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

	function pembayaran()
	{

		$this->form_validation->set_rules('uuid', 'Tidak ada id seperti itu', 'required');
		if ($this->form_validation->run()) {
			$config['upload_path'] = './assets/uploads/buktiTF';
			$config['allowed_types'] = 'jpg|png|img|jpeg';
			$config['max_size']  = '50000';
			$config['max_width']  = '5048';
			$config['max_height']  = '5048';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("gambar")) {
				$error = array('error' => $this->upload->display_errors());
				// $this->session->set_flashdata("infoFlashAdd", $error[0]);
				// redirect("add_data");
				var_dump($error);
				die();
			} else {
				// $data = array('upload_data' => $this->upload->data());
				$data = $this->upload->data();

				var_dump($data['file_name']);

				$this->m_produk->pembayaran($this->input->post("uuid"), $data['file_name']);
				$this->session->set_flashdata('infoFlashAdd', 'Data berhasil di upload');
				redirect("riwayat/" . $this->session->userdata("user_logged")['id_user']);
			}
		}
	}

	function updateRefund($uuid, $status, $statusPengembalian)
	{
		if ($uuid != "" && $status == "approverefund") {

			if ($statusPengembalian == "Return") {
				$data = [
					'status_pembayaran' => "Return Approve",
					'datetime_pay' => date("Y-m-d H:i:s")
				];
			} else if ($statusPengembalian == "Refund") {
				$data = [
					'status_pembayaran' => "Refund Approve",
					'datetime_pay' => date("Y-m-d H:i:s")
				];
			}

			$this->db->set($data);
			$this->db->where('uuid_checkout', $uuid);
			$update = $this->db->update('checkout');
			if ($update) {
				redirect("transaction_checkout");
			} else {
				echo "<script>alert('Gagal Konfirmasi')</script>";
				redirect("transaction_checkout");
			}
		}
	}

	function reject($uuid, $note, $status)
	{
		if ($uuid != "" && $status == "reject") {

			$data = [
				'status_pembayaran' => "return atau refund Reject",
				'note_reject' => str_replace("_", " ", $note),
				'datetime_pay' => date("Y-m-d H:i:s")
			];

			$this->db->set($data);
			$this->db->where('uuid_checkout', $uuid);
			$update = $this->db->update('checkout');
			if ($update) {
				redirect("transaction_checkout");
			} else {
				echo "<script>alert('Gagal Konfirmasi')</script>";
				redirect("transaction_checkout");
			}
		}
	}
}
