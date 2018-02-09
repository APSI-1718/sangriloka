<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
	
	class Absensi extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('event/master_event/M_Absensi');
		}

		function index(){
			$data['absen'] = $this->M_Absensi->select();
			$this->load->view('event/master_event/template/header');
			$this->load->view('event/master_event/template/menu');
			$this->load->view('event/master_event/template/table/absensi', $data);
			$this->load->view('event/master_event/template/footer');
		}
	}

