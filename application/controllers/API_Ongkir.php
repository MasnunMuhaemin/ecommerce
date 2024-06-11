<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Ongkir extends CI_Controller {

	function update_provinsi(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: af4ff3b9eb0ef2b51c5adf77b18dcff2"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			// echo $response;
			// membuat $response menjadi array
			$dataprovinsi = json_decode($response, TRUE);
			$dataprovinsi = $dataprovinsi['rajaongkir']['results'];
			// echo json_encode($dataprovinsi);
			echo "<option value=''>Pilih Provinsi</option>";
			foreach ($dataprovinsi as $key => $value) {
				echo "<option value='".$value['province_id']."' nama='".$value['province']."'>".$value['province']."</option>";
			}
		}
	}
	function update_kota(){
		$id_provinsi = $this->input->post("idprov");
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=&province=$id_provinsi",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: af4ff3b9eb0ef2b51c5adf77b18dcff2"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			// echo $response;
			// konvert data array
			$datakota = json_decode($response, TRUE);
			// hanya data kota
			$datakota = $datakota['rajaongkir']['results'];
			// return $datakota;
			echo "<option value=''>Pilih Kota</option>";
			foreach($datakota as $key => $val){
				echo "<option value='".$val['city_id']."' nama='".$val['city_name']."' kodepos='".$val['postal_code']."' tipe='".$val['type']."'>".$val['type']." - ".$val['city_name']."</option>";
			}
		}
	}
	function update_ongkir(){
		$id_kota_asal = 211;
		$id_kota_tujuan = $this->input->post("id_kota");
		$berat = 100;
		$ekspedisi = $this->input->post("ekspedisi");
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=$id_kota_asal&destination=$id_kota_tujuan&weight=$berat&courier=$ekspedisi",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: af4ff3b9eb0ef2b51c5adf77b18dcff2"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			// echo $response;
			// konvert data ke array
			$dataongkir = json_decode($response, TRUE);
			// echo "<pre>";
			// print_r($dataongkir);
			// echo "</pre>";
			$dataongkir = $dataongkir['rajaongkir']['results']['0']['costs'];
			// return $dataongkir;
			echo '<option value="">- Pilih Jenis -</option>';
			foreach($dataongkir as $val){
				echo "<option value='' nama='".$val['service']."' biaya='".$val['cost']['0']['value']."' lama='".$val['cost']['0']['etd']."'>".$val['service']." - Rp. ".number_format($val['cost']['0']['value'])." - ".$val['cost']['0']['etd']."</option>";
			}
		}
	}

	function dataEkpedisi(){
		echo "<option value=''>Pilih ekspedisi</option><option value='tiki' nama='TIKI'>TIKI</option><option value='pos' nama='POS'>POS</option><option value='jne' nama=JNE>JNE</option>";
	}
}