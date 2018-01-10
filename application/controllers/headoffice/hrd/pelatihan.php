<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelatihan extends CI_Controller {


	public function pelpeg()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/pelatihan');
		$this->load->view('template/footer');
	}
}
