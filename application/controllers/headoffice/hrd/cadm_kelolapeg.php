<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_kelolapeg extends CI_Controller {

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
		$this->load->view('template/footer');
	}
}
