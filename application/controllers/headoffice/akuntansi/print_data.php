<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class print_data extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}

	public function print_ringkasanlaporan()
	{
		$data['perubahan_modal'] = $this->m_databases->select('perubahan_modal')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/print_ringkasanlaporan', $data);
	}

	public function print_laporankeuangan()
	{
		$data['perubahan_modal'] = $this->m_databases->select('perubahan_modal')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/print_laporankeuangan', $data);
	}
}