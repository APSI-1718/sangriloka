
<?php 
/**
* 
*/
class housekeeper extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
		//$this->load->model('Hotel/Housekeeping/modal_housekeeper');
	}
	function index(){
		$data['data_housekeeper'] = $this->Crud_Model->select('housekeeper');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/kelola_housekeeper',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	
}
 ?>