<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_konten extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/konten_db');
	}

	public function index()
	{
		$data['event']=$this->konten_db->select();

		$this->load->view('template/header');
		$this->load->view('notifikasi/home');
		$this->load->view('notifikasi/detail_konten', $data);
		$this->load->view('template/footer');
	}



}