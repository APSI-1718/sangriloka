<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kel_laporan extends CI_Controller {

	public function laporan()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/laporan');
		$this->load->view('template/footer');
	}
}
