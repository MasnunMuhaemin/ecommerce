<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class M_produk extends CI_Model {

	function getAll(){
		$data = $this->db->get('data_barang');
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function add_to_cart($id){
		$data = $this->db->get_where('data_barang', ['id_barang' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return null;
		}
	}

	function getProduk($id){
		$data = $this->db->get_where('data_barang', ['id_barang' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return null;
		}
	}

	function getBahan($id){
		$data = $this->db->get_where('data_barang', ['bahan' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_array();
		}else{
			return null;
		}
	}
	function getModel($id){
		$data = $this->db->get_where('data_barang', ['model' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_array();
		}else{
			return null;
		}
	}
	function getUkuran($id){
		$data = $this->db->get_where('data_barang', ['ukuran' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_array();
		}else{
			return null;
		}
	}

	function insert($data){
		$this->db->insert('data_barang', $data);
	}

	function insertPengeluaran($data){
		$this->db->insert('pengeluaran', $data);
	}

	function getPengeluaran(){
		$data = $this->db->get('vw_report_checkout_per_month');
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getPengeluaran_per_year(){
		$data = $this->db->get('vw_report_checkout_per_year');
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getAllPengeluaran(){
		$data = $this->db->get('vw_report_checkout_per_month');
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getAllTransactionCO(){
		$this->db->select('*');
		$this->db->from('vw_report_checkout');
		// $this->db->group_by('uuid_checkout');
		$this->db->order_by('id_checkout', 'desc');
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getRefund(){
		$data = $this->db->get("vw_refund");
		if($data->num_rows() > 0){
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getDetailtransactionCO($uuid){
		$this->db->select('*');
		$this->db->from('vw_report_checkout');
		$this->db->where('uuid_checkout', $uuid);
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function konfirmasi($uuid){

		$dataUpdateStatus = [
			'status_pembayaran'=>"Approve",
			'datetime_pay' => date("Y-m-d H:i:s")
		];

		$data = $this->db->get_where('checkout', ['uuid_checkout' => $uuid]);

		if ($data->num_rows() > 0) {
			$res = $data->result_object();
			foreach($res as $val){
				$res_product = $this->getProduk($val->id_barang);
				foreach($res_product as $value){
					$updateStok = $value->stok_barang - $val->banyak;

					$dataUpdate = [
						'stok_barang' => $updateStok
					];

					$this->db->set($dataUpdate);
					$this->db->where("id_barang", $val->id_barang);
					$this->db->update('data_barang');
				}
			}
		}else{
			return null;
		}

		$this->db->set($dataUpdateStatus);
		$this->db->where('uuid_checkout', $uuid);
		$this->db->update('checkout');

	}

	function barangdikemas($uuid){
		$updateStatus = [
			'status_pembayaran' => "Barang dikemas"
		];
		$this->db->set($updateStatus);
		$this->db->where('uuid_checkout', $uuid);
		$this->db->update('checkout');
	}

	function barangdikirim($uuid){
		$updateStatus = [
			'status_pembayaran' => "Barang dikirim"
		];
		$this->db->set($updateStatus);
		$this->db->where('uuid_checkout', $uuid);
		$this->db->update('checkout');
	}

	function barangditerima($uuid){
		$updateStatus = [
			'status_pembayaran' => "Barang diterima"
		];
		$this->db->set($updateStatus);
		$this->db->where('uuid_checkout', $uuid);
		$this->db->update('checkout');
	}

	function pembayaran($uuid, $bukti){
		$data = [
			'status_pembayaran'=>"Sudah Melakukan Pembayaran",
			'bukti_pembayaran' => $bukti,
			'datetime_pay' => date("Y-m-d H:i:s")
		];

		$this->db->set($data);
		$this->db->where('uuid_checkout', $uuid);
		$this->db->update('checkout');
	}

	function edit($id, $data){
		return $this->db->where('id_barang', $id)->update('data_barang', $data);
	}

	function getDetailProduk($id){
		$data = $this->db->get_where('data_barang', ['id_barang' => $id]);

		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return null;
		}
	}

	function recommend($dataArr, $bahan, $model, $ukuran, $uuid){

		$this->db->insert("data_recommend", $dataArr);

		$lastId = $insert_id = $this->db->insert_id();

		if($this->getBahan($bahan)){
			foreach($this->getBahan($bahan) as $key => $val){
				$data = [
					'id_recommend' => $lastId,
					'id_barang' => $val['id_barang'],
					'kode_barang' => $val['kode_barang'],
					'nama_barang' => $val['nama_barang'],
					'harga_barang' => $val['harga_barang'],
					'bahan' => $val['bahan'],
					'model' => $val['model'],
					'ukuran' => $val['ukuran'],
					'stok_barang' => $val['stok_barang'],
					'tgl_input' => $val['tgl_input'],
					'deskripsi' => $val['deskripsi'],
					'gambar' => $val['gambar']
				];
				var_dump($data);
				$this->db->insert("recommended", $data);
			}
		}else if($this->getModel($model)){
			foreach($this->getModel($bahan) as $key => $val){
				$data = [
					'id_recommend' => $lastId,
					'id_barang' => $val['id_barang'],
					'kode_barang' => $val['kode_barang'],
					'nama_barang' => $val['nama_barang'],
					'harga_barang' => $val['harga_barang'],
					'bahan' => $val['bahan'],
					'model' => $val['model'],
					'ukuran' => $val['ukuran'],
					'stok_barang' => $val['stok_barang'],
					'tgl_input' => $val['tgl_input'],
					'deskripsi' => $val['deskripsi'],
					'gambar' => $val['gambar']
				];

				$this->db->insert("recommended", $data);
			}
		}else if($this->getUkuran($ukuran)){
			foreach($this->getUkuran($ukuran) as $key => $val){

				$data = [
					'id_recommend' => $lastId,
					'id_barang' => $val['id_barang'],
					'kode_barang' => $val['kode_barang'],
					'nama_barang' => $val['nama_barang'],
					'harga_barang' => $val['harga_barang'],
					'bahan' => $val['bahan'],
					'model' => $val['model'],
					'ukuran' => $val['ukuran'],
					'stok_barang' => $val['stok_barang'],
					'tgl_input' => $val['tgl_input'],
					'deskripsi' => $val['deskripsi'],
					'gambar' => $val['gambar']
				];
				var_dump($data);
				$this->db->insert("recommended", $data);
			}
		}else{
			echo "<br><pre>";
			var_dump($this->getAll());
			echo "</pre>";
		}


	}

	function getRecommend(){
		$data = $this->db->get('vw_recommend_produk');
		if ($data->num_rows() > 0) {
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getRecommended($harga, $bahan){
		// $data = "select * from data_barang where harga_barang <= ".$harga." AND bahan = ".$bahan;
		$data = $this->db->get_where('data_barang', ["harga_barang <=" => $harga, "bahan"=>$bahan]);

		if($data->num_rows() > 0){
			return $data->result_object();
		}else{
			return false;
		}
	}

	function getRecommendByID($id){
		$data = $this->db->order_by("banyak","desc")->get_where("vw_recommend_produk", ['id_user' => $id]);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

}

/* End of file M_produk.php */
/* Location: ./application/models/M_produk.php */