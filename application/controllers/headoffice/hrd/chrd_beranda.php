<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_beranda extends CI_Controller {

	public function beranda()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/hrd_beranda');
		$this->load->view('template/footer');
	}
}
