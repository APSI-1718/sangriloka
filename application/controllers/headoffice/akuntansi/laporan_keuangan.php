<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_keuangan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}

	public function laporankeuangan_view()
	{
		$data['laporan'] = $this->m_databases->select('ringkasan_laporan')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/laporankeuangan_view');
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}