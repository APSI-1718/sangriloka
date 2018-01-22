<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_keuangan extends CI_Controller {


	public function laporankeuangan_view()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/laporankeuangan_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}