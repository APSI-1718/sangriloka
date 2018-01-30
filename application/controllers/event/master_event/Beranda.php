<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index()
	{
		$this->load->view('event/master_event/template/header');
		$this->load->view('event/master_event/template/menu');
		$this->load->view('event/master_event/template/beranda');
		$this->load->view('event/master_event/template/footer');
	}
}