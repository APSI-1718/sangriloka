<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/konten_db');
		$this->load->model('notifikasi/notifikasi_db');
		$this->load->model('notifikasi/agenda_db');
		$this->load->model('notifikasi/promosi_db');
	}

	public function index()
	{
		$data['event']=$this->konten_db->select();
		$data2['notifikasi']=$this->notifikasi_db->select();
		$data['promosi']=$this->promosi_db->select();
		$data['agenda']=$this->agenda_db->select();

		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/beranda', $data);
	}



}