<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_pelatihan extends CI_Controller {

<<<<<<< HEAD
	public function pelatihan()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/hrd_pelatihan');
=======
	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/pelatihan_db');
	}

	public function pelatihan()
	{
		$data['gabungpel'] = $this->pelatihan_db->tampilpelatihan();


		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/hrd_pelatihan',$data);
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
		$this->load->view('template/footer');
	}
}
