<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_beranda extends CI_Controller {

	public function beranda()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_beranda');
		$this->load->view('template/footer');
	}
}
