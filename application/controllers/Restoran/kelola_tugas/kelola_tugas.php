<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_tugas extends CI_Controller {


	public function tugas()
	{
		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_tugas');
		$this->load->view('template/footer');
	}
}