<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perubahan_modal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/akuntansi/m_databases');
	}

	public function perubahanmodal_view()
	{
		$data['perubahan_modal'] = $this->m_databases->select('perubahan_modal')->result_array();

		$this->load->view('headoffice/akuntansi/template/header');
		$this->load->view('headoffice/akuntansi/template/menu');
		$this->load->view('headoffice/akuntansi/modal');
		$this->load->view('headoffice/akuntansi/perubahanmodal_view', $data);
		$this->load->view('headoffice/akuntansi/template/footer');
	}
}