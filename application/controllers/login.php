<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loglog_in extends CI_Controller {


	public function index()
	{
		$this->load->view('headoffice/login');
	}
}
