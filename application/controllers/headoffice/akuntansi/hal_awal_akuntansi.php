<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal_akuntansi extends CI_Controller {


	public function beranda()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/beranda');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}