<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_kinerja extends CI_Controller {

	public function kinerja()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/hrd_kinerja');
		$this->load->view('template/footer');
	}
}
