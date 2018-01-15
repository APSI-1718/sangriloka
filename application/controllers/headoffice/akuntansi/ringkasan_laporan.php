<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ringkasan_laporan extends CI_Controller {


	public function ringkasanlaporan_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/ringkasanlaporan_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}