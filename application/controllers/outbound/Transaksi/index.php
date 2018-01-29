<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('outbound/transaksi/template/header');
		$this->load->view('outbound/transaksi/template/template/menu');
		$this->load->view('outbound/transaksi/template/additional/e_commerce');
		$this->load->view('outbound/transaksi/template/template/footer');
	}

}
