<?php 
/**
* 
*/
class index extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/Home_Housekeeping');
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
}
 ?>