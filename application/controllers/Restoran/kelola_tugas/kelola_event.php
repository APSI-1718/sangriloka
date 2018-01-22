<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_event extends CI_Controller {


	public function event()
	{
		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_event');
		$this->load->view('template/footer');
	}
}