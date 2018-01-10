<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama extends CI_Controller {


	public function index()
	{
		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/table');
		$this->load->view('hotel/pendaftaran/template/footer');
	}
}
