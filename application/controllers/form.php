<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {


	public function general_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/general_form');
		$this->load->view('template/footer');
	}
}
