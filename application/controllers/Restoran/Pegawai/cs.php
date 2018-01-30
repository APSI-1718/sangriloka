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
<<<<<<< HEAD
		$data['data_meja'] = $this->Crud_model->select('meja');
=======
		$where =  array('status' => '2');
		$data['data_meja'] = $this->Crud_model->select('meja',$where);
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
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