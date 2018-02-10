<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/konten_db');
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function index()
	{
		$data['event']=$this->konten_db->select();
		$data2['notifikasi']=$this->notifikasi_db->select();
		$data2['detail'] = $this->konten_db->detail();

		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/konten', $data);
		$this->load->view('notifikasi/template/footer');
	}



}