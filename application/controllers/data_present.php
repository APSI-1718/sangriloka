<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_present extends CI_Controller {


	public function chartjs()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('data_presentation/chartjs');
		$this->load->view('template/footer');
	}
}