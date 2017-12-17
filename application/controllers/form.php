<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {


	public function general_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/general_form');
		
	}
	public function form_advanced()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/form_advanced');
		$this->load->view('template/footer');
	}
	public function validation_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/validation_form');
		$this->load->view('template/footer');
	}
	public function wizard_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/wizard_form');
	
	}
	public function upload_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/upload_form');
		$this->load->view('template/footer');
	}
	public function button_form()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('form/button_form');
		$this->load->view('template/footer');
	}
}
