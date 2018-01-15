<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuti_peg extends CI_Controller {


	public function cuti()
	{
		$this->load->view('headoffice/hrd/template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/cutipeg');
		$this->load->view('headoffice/hrd/template/footer');
	}
}
