<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ui_element extends CI_Controller {


	public function general_elements()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/general_elements');
		$this->load->view('template/footer');
	}
	public function media_gallery()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/media_gallery');
		$this->load->view('template/footer');
	}
	public function typography()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/typography');
		$this->load->view('template/footer');
	}
	public function icons()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/icons');
		$this->load->view('template/footer');
	}
	public function glyphicons()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/glyphicons');
		$this->load->view('template/footer');
	}
	public function widgets()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/widgets');
		$this->load->view('template/footer');
	}
		public function invoice()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/invoice');
		$this->load->view('template/footer');
	}
	public function inbox()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/inbox');
		$this->load->view('template/footer');
	}
	public function calendar()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('ui_element/calendar');

	}
}
