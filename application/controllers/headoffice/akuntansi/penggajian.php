<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penggajian extends CI_Controller {


	public function penggajian_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/penggajian_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}