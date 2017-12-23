<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_pages extends CI_Controller {

//asdsadew2qeqwa
	public function e_comm()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('additional/e_commerce');
		$this->load->view('template/footer');
	}
	public function proyek()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('additional/project');
		$this->load->view('template/footer');
	}
	public function detil_proyek()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('additional/detail_project');
		$this->load->view('template/footer');
	}
	public function kontak()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('additional/contact');
		$this->load->view('template/footer');
	}
}