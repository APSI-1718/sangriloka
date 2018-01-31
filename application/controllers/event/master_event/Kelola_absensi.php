<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_absensi extends CI_Controller {


	public function index()
	{
		$this->load->view('event/master_event/template/header');
		$this->load->view('event/master_event/template/menu');
		$this->load->view('event/master_event/template/table/Kelola_absensi');
		$this->load->view('event/master_event/template/footer');
	}
}
