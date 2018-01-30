<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_form_penjualan');
		$this->load->view('template/footer');
	}

}

/* End of file form_transaksi.php */
/* Location: ./application/controllers/form_transaksi.php */