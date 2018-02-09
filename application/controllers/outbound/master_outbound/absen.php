<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class absen extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/master_outbound/m_absen');
		}

		function index(){
			$data['absen'] = $this->m_absen->select();
			$this->load->view('template/header');
			$this->load->view('outbound/master_outbound/v_absen', $data);
			$this->load->view('template/footer');
		}

	}a