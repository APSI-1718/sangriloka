<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mutasi_hrd extends CI_Controller {


	public function mutasi()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/mutasi');
		$this->load->view('template/footer');
	}
}
