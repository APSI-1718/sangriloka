<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal_akuntansi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}


	public function beranda()
	{
		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/beranda');
		$this->load->view('headoffice/akuntansi/template/footer');
	}

	public function listArray(){
		$where = array($this->input->post('attribut') => $this->input->post('nilai'));

		echo json_encode($this->m_databases->select($this->input->post('table'), $where)->result_array());
	}
}