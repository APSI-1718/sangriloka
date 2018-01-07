<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal_hrd extends CI_Controller {


	public function beranda()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/beranda');
		$this->load->view('template/footer');
	}
}
