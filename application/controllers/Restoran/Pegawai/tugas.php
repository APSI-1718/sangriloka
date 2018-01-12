<?php 
/**
* 
*/
class tugas extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/Crud_model');
	}
	function index(){
		$data['data_tugas'] = $this->Crud_model->select('tugas');
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/tugas_view',$data);
		$this->load->view('restoran/pegawai/template/footer');			
	}
}
 ?>