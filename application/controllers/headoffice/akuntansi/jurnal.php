<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurnal extends CI_Controller {


	public function jurnal_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/jurnal_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}