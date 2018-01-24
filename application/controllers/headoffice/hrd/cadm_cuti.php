<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_cuti extends CI_Controller {

	public function cuti()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_cuti');
		$this->load->view('template/footer');
	}
}
