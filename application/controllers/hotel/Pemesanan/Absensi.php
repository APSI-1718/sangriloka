<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/Pemesanan_model/M_Absensi');
	}

	public function index()
	{
		$data['absensi'] = $this->M_Absensi->select();	

		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/absensi_view', $data);
		$this->load->view('template/footer');
	}
	
}
