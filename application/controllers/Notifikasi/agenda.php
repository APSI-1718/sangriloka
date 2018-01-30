<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agenda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function index()
	{
		$data2['notifikasi']=$this->notifikasi_db->select();


		$this->load->view('template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/agenda');

	
	}
}