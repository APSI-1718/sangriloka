<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ri_event extends CI_Controller {


	public function revent()
	{
		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/rinc_event');
		$this->load->view('template/footer');
	}
}