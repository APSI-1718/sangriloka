<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class table extends CI_Controller {


	public function tables()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('table/tables');
		$this->load->view('template/footer');
	}
	public function tables_dynamic()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('table/tables_dynamic');
		$this->load->view('template/footer');
	}

}