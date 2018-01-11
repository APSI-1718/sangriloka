<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_kitchen extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_stokmakanan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_stokmakanan->select();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/beranda-kitchen', $data);
		$this->load->view('template/footer');
	}
}
