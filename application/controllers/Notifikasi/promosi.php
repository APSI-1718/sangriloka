<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class promosi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/promosi_db');
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function index()
	{
		$data['promosi']=$this->promosi_db->select();
		$data2['notifikasi']=$this->notifikasi_db->select();

		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/promosi', $data);
		$this->load->view('notifikasi/template/footer');
	}
}