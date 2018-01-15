<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perubahan_modal extends CI_Controller {


	public function perubahanmodal_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/perubahanmodal_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}