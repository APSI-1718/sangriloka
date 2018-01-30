<?php 
/**
* 
*/
class Kontrol_kerja extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/Crud_model');	
		$this->load->model('Restoran/Pegawai/Kontrol_kerja_model');	
		$this->load->model('Restoran/Pegawai/Pembagian_tugas_model');	
		

	}
	function index(){
		$data['data_tugas'] = $this->Crud_model->select('kelolatugas');	
		$data['data_pegawai'] = $this->Kontrol_kerja_model->inner_join_kk('kontrol_kerja','pegawai','kelolatugas','id_pegawai','id_tugas');



		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/kontrol_kerja_view',$data);
		$this->load->view('restoran/pegawai/kontrol_kerja/footer_kk',$data);					
	}
	function update_status_ck($id){
		$status_ck =  $this->Pembagian_tugas_model->status_ck();
		$data = array (
			'status_ck' => $status_ck
		);
		$where = array('no' => $id);
		$this->Crud_model->update('kontrol_kerja', $data, $where);
		echo "<script type='text/javascript'>alert('Berhasil... Pegawai Telah Melakukan Tugas');</script>";		
		$link = base_url().'Restoran/pegawai/Kontrol_kerja';
		redirect($link,'refresh');	
	}
}
 ?>