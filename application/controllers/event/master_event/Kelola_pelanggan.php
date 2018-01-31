<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_pelanggan extends CI_Controller {


	public function index()
	{
		$this->load->view('event/master_event/template/header');
		$this->load->view('event/master_event/template/menu');
		$this->load->view('event/master_event/template/table/kelola_pelanggan');
		$this->load->view('event/master_event/template/footer');
	}
}
