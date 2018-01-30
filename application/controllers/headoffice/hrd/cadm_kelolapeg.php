<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_kelolapeg extends CI_Controller {

<<<<<<< HEAD
	public function kelolapeg()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_kelolapeg');
=======
	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/kelolapeg_db');
	}

	public function kelolapeg()
	{
		$data['gabungkp'] = $this->kelolapeg_db->tampilkelolapeg();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_kelolapeg',$data);
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
		$this->load->view('template/footer');
	}
}
