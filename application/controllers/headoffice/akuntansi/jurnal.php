<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurnal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}


	public function jurnal_view()
	{
		$data['jurnal'] 	= $this->m_databases->select('jurnal')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/jurnal_view', $data);
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}