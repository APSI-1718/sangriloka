<?php 
/**
* 
*/
class CS extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/cs_view');
		$this->load->view('restoran/pegawai/template/footer');			
	}
}
?>