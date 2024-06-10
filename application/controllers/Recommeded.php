<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recommended extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_cart');
		$this->load->library('cart');
		$this->load->library('QRISDANA');
	}

	public function index(){
		
	}

}