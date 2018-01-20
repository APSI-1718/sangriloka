<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal extends CI_Controller {

	public function login()
	{
		$this->load->view('headoffice/hrd/login');
	}
}