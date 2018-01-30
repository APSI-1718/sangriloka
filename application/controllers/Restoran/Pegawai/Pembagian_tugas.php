<?php 
/**
* 
*/
class Pembagian_tugas extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/Crud_model');
		$this->load->model('Restoran/Pegawai/Pembagian_tugas_model');

	}
	function index(){

		$data['data_tugas'] = $this->Crud_model->select('kelolatugas');	
		$data['data_pegawai'] = $this->Crud_model->select('pegawai');	
		$data['pembagian_tugas'] = $this->Crud_model->inner_join3('kontrol_kerja','pegawai','kelolatugas','id_pegawai','id_tugas');
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/Pembagian_tugas_view',$data);
		$this->load->view('restoran/pegawai/template/footer');	
	}
	function tambah_pegawai(){
		$data = array (
			'id_pegawai' => $this->input->post('pegawai'),
			'id_tugas' => $this->input->post('tugas'),
			'status_ck' => $this->input->post('status_ck')
			);

		$this->Crud_model->insert('kontrol_kerja',$data);
		echo "<script type='text/javascript'>alert('Data ID Pegawai = ".$this->input->post('id_pegawai')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';		
		redirect($link,'refresh');


	}
	function update_pegawai(){
		$data = array (
			'id_tugas' => $this->input->post('tugas')
			);
		$where = array('no' => $this->input->post('no'));
		$this->Crud_model->update('kontrol_kerja', $data, $where);
		echo "<script type='text/javascript'>alert('Data Berhasil di Sunting');</script>";		
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';
		redirect($link,'refresh');

	}
	function hapus_pegawai($id){
		$where = array('no' => $id);
		$this->Crud_model->delete('kontrol_kerja', $where);
		echo "<script type='text/javascript'>alert('Data Berhasil di Hapus');</script>";		
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';
		redirect($link,'refresh');		
	}
}
 ?>