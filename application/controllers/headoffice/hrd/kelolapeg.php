<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelolapeg extends CI_Controller {

	public function kelola()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/kelola_peg');
		$this->load->view('template/footer');
	}
}
