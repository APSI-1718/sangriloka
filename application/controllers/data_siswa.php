<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_siswa extends CI_Controller {

	//Tes ubah syntax
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('table');
		$this->load->view('template/footer');
	}
}
