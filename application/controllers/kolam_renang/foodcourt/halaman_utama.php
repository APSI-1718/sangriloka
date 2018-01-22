<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama extends CI_Controller {

//blaala
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('table');
		$this->load->view('template/footer');
	}
}
