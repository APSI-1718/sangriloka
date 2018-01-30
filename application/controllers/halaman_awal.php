<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_awal extends CI_Controller {


	public function sangri()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('isi');
		$this->load->view('template/footer');
	}
}
