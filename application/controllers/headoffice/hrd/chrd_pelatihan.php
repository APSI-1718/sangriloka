<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_pelatihan extends CI_Controller {

	public function pelatihan()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/hrd_pelatihan');
		$this->load->view('template/footer');
	}
}
