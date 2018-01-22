<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_menu extends CI_Controller {


	public function menu()
	{
		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_menu');
		$this->load->view('restoran/pengelolaan_restoran/modal');
		$this->load->view('template/footer');
	}
}