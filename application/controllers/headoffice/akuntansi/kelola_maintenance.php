<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_maintenance extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}


	public function maintenance_view()
	{
		$data['maintenance'] = $this->m_databases->select('maintenance')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/maintenance_view', $data);
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}