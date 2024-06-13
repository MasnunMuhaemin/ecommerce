<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin_logged')) {
			redirect("login", "refresh");
		}
		$this->load->model('m_produk');
		$this->load->model('M_Chat', 'm_chat');
	}

	public function index()
	{
		if ($this->m_produk->getAll() != null) {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => $this->m_produk->getAll(),
				'dataPengeluaran' => $this->m_produk->getAllPengeluaran(),
				'dataPengeluaranFromLaporan' => $this->m_produk->getPengeluaran()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => null,
				'dataPengeluaran' => $this->m_produk->getAllPengeluaran(),
				'dataPengeluaranFromLaporan' => $this->m_produk->getPengeluaran()
			];
		}

		frontEndAdmin("admin/home", $data);
	}

	function add_data()
	{
		$data = [
			'title' => "Dashboard | Tambah Data"
		];

		frontEndAdmin("admin/add_data", $data);
	}

	function view_data()
	{

		if ($this->m_produk->getAll() != null) {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => $this->m_produk->getAll()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => null
			];
		}


		frontEndAdmin("admin/view_data", $data);
	}

	function pengeluaran()
	{

		if ($this->m_produk->getAll() != null) {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => $this->m_produk->getAll()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Data",
				'data' => null
			];
		}


		frontEndAdmin("admin/pengeluaran", $data);
	}

	function edit_data()
	{
		$id = $this->uri->segment(2);

		$data = [
			'title' => "Dashboard | Edit Data",
			'data' => $this->m_produk->getProduk($id)
		];

		frontEndAdmin("admin/edit_data", $data);
	}

	function transaction()
	{


		if ($this->m_produk->getPengeluaran() != null) {
			$data = [
				'title' => "Dashboard | Lihat Transaksi",
				'data' => $this->m_produk->getPengeluaran()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Transaksi",
				'data' => null
			];
		}

		frontEndAdmin("admin/transaction", $data);
	}

	function transaction_request()
	{


		if ($this->m_produk->getAllTransactionCO() != false) {
			if ($this->m_produk->getRefund() != false) {
				$data = [
					'title' => "Dashboard | Lihat Transaksi",
					'data' => $this->m_produk->getAllTransactionCO(),
					'data_refund' => $this->m_produk->getRefund()
				];
			} else {
				$data = [
					'title' => "Dashboard | Lihat Transaksi",
					'data' => $this->m_produk->getAllTransactionCO(),
					'data_refund' => null
				];
			}
		} else {
			$data = [
				'title' => "Dashboard | Lihat Transaksi",
				'data' => null
			];
		}

		frontEndAdmin("admin/transaction_checkout", $data);
	}

	function see_transaction_request($uuid)
	{


		if ($this->m_produk->getDetailtransactionCO($uuid) != false) {
			$data = [
				'title' => "Dashboard | Lihat Detail Transaksi",
				'data' => $this->m_produk->getDetailtransactionCO($uuid)
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Detail Transaksi",
				'data' => null
			];
		}

		frontEndAdmin("admin/detail_transaction_checkout", $data);
	}

	function konfirmasi($uuid)
	{
		if ($uuid != null) {
			$this->m_produk->konfirmasi($uuid);
			redirect("transaction_checkout");
		}
	}

	function barangdikemas($uuid)
	{
		if ($uuid != null) {
			$this->m_produk->barangdikemas($uuid);
			redirect("transaction_checkout");
		}
	}

	function barangdikirim($uuid)
	{
		if ($uuid != null) {
			$this->m_produk->barangdikirim($uuid);
			redirect("transaction_checkout");
		}
	}

	function report()
	{


		if ($this->m_produk->getAllTransactionCO() != null) {
			$data = [
				'title' => "Dashboard | Lihat Laporan",
				'data' => $this->m_produk->getAllTransactionCO()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Laporan",
				'data' => null
			];
		}

		frontEndAdmin("admin/report", $data);
	}

	function report_per_year()
	{
		if ($this->m_produk->getPengeluaran_per_year() != null) {
			$data = [
				'title' => "Dashboard | Lihat Laporan Per Tahun",
				'data' => $this->m_produk->getPengeluaran_per_year()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Laporan Per Tahun",
				'data' => null
			];
		}

		frontEndAdmin("admin/report", $data);
	}

	function invoice()
	{
		if ($this->m_produk->getPengeluaran() != null) {
			$data = [
				'title' => "Dashboard | Invoice",
				'data' => $this->m_produk->getPengeluaran()
			];
		} else {
			$data = [
				'title' => "Dashboard | Invoice",
				'data' => null
			];
		}

		frontEndAdmin("admin/invoice", $data);
	}


	function print_invoice()
	{
		if ($this->m_produk->getPengeluaran() != null) {
			$data = [
				'title' => "Dashboard | Lihat Pengeluaran",
				'data' => $this->m_produk->getPengeluaran()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Pengeluaran",
				'data' => null
			];
		}

		$this->load->view('admin/print_invoice', $data);
	}

	function print_invoice_per_year()
	{
		if ($this->m_produk->getPengeluaran_per_year() != null) {
			$data = [
				'title' => "Dashboard | Lihat Pengeluaran Per Tahun",
				'data' => $this->m_produk->getPengeluaran_per_year()
			];
		} else {
			$data = [
				'title' => "Dashboard | Lihat Pengeluaran Per Tahun",
				'data' => null
			];
		}

		$this->load->view('admin/print_invoice_per_tahun', $data);
	}

	function actAddProduct()
	{
		$this->form_validation->set_rules('kode_produk', 'Kode Produk', 'trim|required');
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'trim|required');
		$this->form_validation->set_rules('stok_produk', 'Stok Produk', 'trim|required');
		$this->form_validation->set_rules('ukuran_barang', 'Ukuran Produk', 'trim|required');
		$this->form_validation->set_rules('model_barang', 'Model Produk', 'trim|required');
		$this->form_validation->set_rules('bahan_barang', 'Bahan Produk', 'trim|required');
		$this->form_validation->set_rules('tgl_input', 'Tanggal Produk', 'trim|required');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|required');
		// $this->form_validation->set_rules('gambar', 'Deskripsi Produk', 'trim|required');

		if ($this->form_validation->run() == true) {
			$config['upload_path'] = './assets/uploads/foto_produk';
			$config['allowed_types'] = 'jpg|png|img|jpeg';
			$config['max_size']  = '10000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
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

				$upload = [
					"kode_barang" => $this->input->post('kode_produk'),
					"nama_barang" => $this->input->post('nama_produk'),
					"harga_barang" => $this->input->post('harga_produk'),
					"bahan" => $this->input->post("bahan_barang"),
					'model' => $this->input->post("model_barang"),
					'ukuran' => $this->input->post("ukuran_barang"),
					"stok_barang" => $this->input->post('stok_produk'),
					"tgl_input" => $this->input->post('tgl_input'),
					"deskripsi" => $this->input->post('deskripsi_produk'),
					"gambar" => $data['file_name']
				];

				$this->m_produk->insert($upload);
				$this->session->set_flashdata('infoFlashAdd', 'Data berhasil di upload');
				redirect("add_data");
			}
		} else {
			$this->session->set_flashdata('infoFlashAdd', 'Isi semua bidang');
			redirect("add_data");
		}
	}

	function actEdit()
	{
		$this->form_validation->set_rules('kode_produk', 'Kode Produk', 'trim|required');
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('harga_produk', 'Harga Produk', 'trim|required');
		$this->form_validation->set_rules('stok_produk', 'Stok Produk', 'trim|required');
		// $this->form_validation->set_rules('tgl_input', 'Tanggal Produk', 'trim|required');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|required');

		if ($this->form_validation->run() == true) {
			$config['upload_path'] = './assets/uploads/foto_produk';
			$config['allowed_types'] = 'jpg|png|img|jpeg';
			$config['max_size']  = '10000';
			$config['max_width']  = '3000';
			$config['max_height']  = '3000';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			if (!$this->upload->do_upload("gambar")) {
				$upload = [
					"kode_barang" => $this->input->post('kode_produk'),
					"nama_barang" => $this->input->post('nama_produk'),
					"harga_barang" => $this->input->post('harga_produk'),
					"stok_barang" => $this->input->post('stok_produk'),
					"tgl_input" => $this->input->post('tgl_input_old'),
					"deskripsi" => $this->input->post('deskripsi_produk'),
					"gambar" => $this->input->post('gambar_old')
				];

				$this->m_produk->edit($this->input->post("id_barang"), $upload);
				$this->session->set_flashdata('infoFlashAdd', 'Data berhasil di update');
				redirect("view_data");
			} else {
				// $data = array('upload_data' => $this->upload->data());
				$data = $this->upload->data();

				$upload = [
					"kode_barang" => $this->input->post('kode_produk'),
					"nama_barang" => $this->input->post('nama_produk'),
					"harga_barang" => $this->input->post('harga_produk'),
					"stok_barang" => $this->input->post('stok_produk'),
					"tgl_input" => $this->input->post('tgl_input'),
					"deskripsi" => $this->input->post('deskripsi_produk'),
					"gambar" => $data['file_name']
				];

				$this->m_produk->edit($this->input->post("id_barang"), $upload);
				$this->session->set_flashdata('infoFlashAdd', 'Data berhasil di update');
				redirect("view_data");
			}
		} else {
			$this->session->set_flashdata('infoFlashAdd', 'Isi semua bidang');
			redirect("view_data");
		}
	}

	function actPengeluaran()
	{
		$kd_barang = $this->input->post("kd_brg");
		$nama = $this->input->post("nama_produk_pengeluaran");
		$harga = $this->input->post("harga_produk_pengeluaran");
		$jml_pengeluaran = $this->input->post("stok_produk_pengeluaran");
		$tgl = $this->input->post("tgl_input_pengeluaran");
		$total = $this->input->post("total_pendapatan");

		// var_dump($kd_barang." ".$nama." ".$harga." ".$jml_pengeluaran." ".$tgl);
		// die();

		if (isset($nama) && $nama != "" && isset($harga) && $harga != "" && isset($jml_pengeluaran) && $jml_pengeluaran != "" && isset($tgl) && $tgl != "") {

			$data = [
				'kode_barang' => $kd_barang,
				'nama_barang' => $nama,
				'harga_barang' => $harga,
				'stok_pengeluaran' => $jml_pengeluaran,
				'total_pendapatan' => $total,
				'tgl_input' => $tgl
			];

			$this->m_produk->insertPengeluaran($data);
			$this->session->set_flashdata('infoPengeluaran', 'Data berhasil di tambahkan ke tabel pengeluaran');
			redirect("pengeluaran");
		} else {
			$this->session->set_flashdata('infoPengeluaran', 'Mohon isi semua bidang yang ada');
			redirect("pengeluaran");
		}
	}

	function delete()
	{
		$this->db->delete('data_barang', array('id_barang' => $this->uri->segment(2)));
		$this->session->set_flashdata('infoFlashAdd', 'Data berhasil di Hapus');
		redirect("view_data");
	}

	function chat_home()
	{
		if ($this->m_chat->getAllUsers() != null) {
			$data = [
				'title' => "Dashboard | Chat Home",
				'data' => $this->m_chat->getAllUsers(),
				'notif' => $this->m_chat->getNotifphp($this->session->userdata['admin_logged']['id_user'])
			];
		} else {
			$data = [
				'title' => "Dashboard | Chat Home",
				'data' => null
			];
		}

		frontEndAdmin("admin/home_chat", $data);
	}

	function openChat($id, $status)
	{
		if ($status == "dibaca") {
			$this->m_chat->updateStatus($id, $status);
			redirect(redirect(base_url("ochat/" . $id . "/null")));
		}
		if ($this->m_chat->getAllChatAdmin($id) != null) {
			$data = [
				'title' => "Dashboard | Chat Home",
				'data' => $this->m_chat->getAllChatAdmin($id)
			];
		} else {
			$data = [
				'title' => "Dashboard | Chat Home",
				'data' => null
			];
		}

		frontEndAdmin("admin/open_chat", $data);
	}

	function updateNotifAjax()
	{
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */