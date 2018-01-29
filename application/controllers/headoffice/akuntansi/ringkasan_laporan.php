<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ringkasan_laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}

	public function ringkasanlaporan_view()
	{
		$data['ringkasan'] = $this->m_databases->select('ringkasan_laporan')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/ringkasanlaporan_view', $data);
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}