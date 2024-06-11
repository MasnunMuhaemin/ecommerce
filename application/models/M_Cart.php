<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class M_Cart extends CI_Model {

	function checkout($uuid, $nama, $data, $alamat, $nope, $gambarPembayaran){
		$conv = json_decode($data);
		$_data = [];
		$days = date("Y-m-d");
		foreach($conv as $key => $val){

			if($this->add_to_cart($val->id_barang,$val->banyak)){
				$_data[$key] = [
					'uuid_checkout' => $uuid,
					'id_barang' => $val->id_barang,
					'id_user' => $this->session->userdata('user_logged')['id_user'],
					'produk' => $val->product,
					'harga' => $val->harga,
					'banyak' => $val->banyak,
					'ukuran' => $val->ukuran,
					'model' => $val->model,
					'bahan' => $val->bahan,
					'image' => $val->image,
					'nama_penerima' => $nama,
					'alamat_penerima' => $alamat,
					'no_penerima' => $nope,
					'bukti_pembayaran' => $gambarPembayaran,
					'provinsi' => $val->provinsi,
					'kota' => $val->kota,
					'ekspedisi' => $val->ekspedisi,
					'ongkir' => $val->ongkir,
					"due_datetime" => date("Y-m-d", strtotime('+2 days', strtotime(date("Y-m-d"))))
				];
				$this->db->insert('checkout', $_data[$key]);
			}else{
				echo "tidak bisa checkout karena stok terbatas";
			}


			// $data = json_decode($gambarPembayaran);
			// foreach($data as $datas){
			// 	echo json_encode($datas);
			// }


			
		}

		echo json_encode(true);
		
	}

	function getCheckout($id){
		// $check = $this->db->get_where('checkout', ['id_user' => $id]);
		// $this->db->query("SELECT * FROM checkout WHERE id_user = $id GROUP BY uuid_checkout");
		$this->db->select("`checkout`.`id_checkout` AS `id_checkout`, `checkout`.`uuid_checkout` AS `uuid_checkout`, `checkout`.`id_user` AS `id_user`, `checkout`.`produk` AS `produk`, `checkout`.`harga` AS `harga`, `checkout`.`banyak` AS `banyak`, `checkout`.`ukuran` AS `ukuran`, `checkout`.`model` AS `model`, `checkout`.`bahan` AS `bahan`, `checkout`.`image` AS `image`, `checkout`.`nama_penerima` AS `nama_penerima`, `checkout`.`alamat_penerima` AS `alamat_penerima`, `checkout`.`no_penerima` AS `no_penerima`, `checkout`.`status_pembayaran` AS `status_pembayaran`, `checkout`.`due_datetime` AS `due_datetime`, `checkout`.`datetime_pay` AS `datetime_pay`, `users`.`id_users` AS `id_users`, `users`.`id_role` AS `id_role`, `users`.`nama_lengkap` AS `nama_lengkap`, `users`.`no_hp` AS `no_hp`, `users`.`email` AS `email`, `users`.`password` AS `password`, `checkout`.`bukti_pembayaran` AS `bukti_pembayaran`, `checkout`.`provinsi` AS `provinsi`, `checkout`.`kota` AS `kota`, `checkout`.`ekspedisi` AS `ekspedisi`, `checkout`.`ongkir` AS `ongkir`, sum(banyak) as jumlah_beli");
		$this->db->from('checkout');
		$this->db->join("users", "users.id_users = checkout.id_user");
		$this->db->where('id_user', $id);
		$this->db->group_by('uuid_checkout');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_object();
		}else{
			return false;
		}
	}

	function getDetailCheckout($uuid){
		$check = $this->db->get_where('checkout', ['uuid_checkout' => $uuid]);
		if ($check->num_rows() > 0) {
			return $check->result_object();
		}else{
			return null;
		}
	}

	function add_to_cart($id, $banyak){
		$data = $this->db->get_where('data_barang', ['id_barang' => $id]);

		if ($data->num_rows() > 0) {
			$res = $data->result_object();
			foreach($res as $val){
				if($banyak > $val->stok_barang){
					return false;
				}else{
					return true;
				}
			}
		}else{
			return false;
		}
	}

}

/* End of file M_Cart.php */
/* Location: ./application/models/M_Cart.php */