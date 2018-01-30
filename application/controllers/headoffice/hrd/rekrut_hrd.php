<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekrut_hrd extends CI_Controller {


	public function rekrut()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/rekrut_form');
		$this->load->view('template/footer');
	}
}
