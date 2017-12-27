
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
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/isi');
		$this->load->view('restoran/pegawai/template/footer');		
	}
}
 ?>