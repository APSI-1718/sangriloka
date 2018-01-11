<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Housekeeping extends CI_Controller {


	public function index()
	{
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/Home_Housekeeping');
		$this->load->view('Hotel/Housekeeping/Template/Footer');
	}
}
