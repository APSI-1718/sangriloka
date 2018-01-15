<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_maintenance extends CI_Controller {


	public function maintenance_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/maintenance_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}