<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajuan_barang extends CI_Controller {

//test
	public function index()
	{
		$this->load->view('hotel/service/template/header');
		$this->load->view('hotel/service/template/menu');
		// $this->load->view('table');
		$this->load->view('template/footer');
	}
}
