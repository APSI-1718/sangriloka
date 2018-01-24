<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_mutasi extends CI_Controller {

	public function mutasi()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_mutasi');
		$this->load->view('template/footer');
	}
}
