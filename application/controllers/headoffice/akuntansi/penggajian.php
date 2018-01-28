<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penggajian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}

	public function penggajian_view()
	{
		$data['penggajihan'] = $this->m_databases->select('penggajihan')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/penggajian_view', $data);
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}