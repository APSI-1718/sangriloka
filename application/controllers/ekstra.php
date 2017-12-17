<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ekstra extends CI_Controller {


	public function biasa()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('extra/plain');
		$this->load->view('template/footer');
	}
	public function login()
	{
		$this->load->view('extra/login');
	}
	public function harga()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('extra/pricing');
		$this->load->view('template/footer');
	}
}