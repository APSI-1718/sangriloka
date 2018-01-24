<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clogin extends CI_Controller {

	public function index()
	{
		$this->load->view('headoffice/hrd/login');
	}
}
