<?php 
/**
* 
*/
class CS extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/Crud_model');		

	}
	function index(){
		$where =  array('status' => '2');
		$data['data_meja'] = $this->Crud_model->select('meja',$where);
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu',$data);
		$this->load->view('restoran/pegawai/cs_view');
		$this->load->view('restoran/pegawai/template/footer');			
	}
	function update_status_meja($id){
		$data = array (
			'status' => '1'
			);
		$where = array('no_meja' => $id);
		$this->Crud_model->update('meja', $data, $where);
		echo "<script type='text/javascript'>alert('Meja Telah di Bersihkan');</script>";		
		$link = base_url().'Restoran/pegawai/cs';
		redirect($link,'refresh');
	}
}
?>