<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QRISDANA{
	public function __construct(){
		require_once APPPATH.'third_party/generateQR/qrlib.php';
	}
}