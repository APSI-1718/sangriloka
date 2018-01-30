<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kinerja_peg extends CI_Controller {


	public function kinerja()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/kinerja_peg');
		$this->load->view('template/footer');
	}
}
