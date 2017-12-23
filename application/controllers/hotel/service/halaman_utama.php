<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama extends CI_Controller {

//test
	public function index()
	{
		$this->load->view('hotel/service/template/header');
		$this->load->view('hotel/service/template/menu');
		$this->load->view('table');
		$this->load->view('hotel/service/template/footer');
	}
}
