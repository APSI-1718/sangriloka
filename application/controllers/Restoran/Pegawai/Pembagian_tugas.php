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

		$data['data_tugas'] = $this->Crud_model->select('tugas');	
		$data['data_pegawai'] = $this->Crud_model->inner_join2('pegawai','tugas','id_tugas');	
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/Pembagian_tugas_view',$data);
		$this->load->view('restoran/pegawai/template/footer');	
	}
	function tambah_pegawai(){
		$data = array (
			'id_pegawai' => $this->input->post('id_pegawai'),
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'username' => '-',
			'password' => 'admin',
			'jabatan' => $this->input->post('jabatan'),
			'id_tugas' => $this->input->post('tugas'),
			);

		$this->Crud_model->insert('pegawai',$data);
		echo "<script type='text/javascript'>alert('Data ID Pegawai = ".$this->input->post('id_pegawai')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';		
		redirect($link,'refresh');


	}
	function update_pegawai(){
		$data = array (
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'username' => '-',
			'password' => 'admin',
			'jabatan' => $this->input->post('jabatan'),
			'id_tugas' => $this->input->post('tugas'),
			);
		$where = array('id_pegawai' => $this->input->post('id_pegawai'));
		$this->Crud_model->update('pegawai', $data, $where);
		echo "<script type='text/javascript'>alert('Data ID Pegawai = ".$this->input->post('id_pegawai')." Berhasil di Sunting');</script>";		
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';
		redirect($link,'refresh');

	}
	function hapus_pegawai($id){
		$where = array('id_pegawai' => $id);
		$this->Crud_model->delete('pegawai', $where);
		echo "<script type='text/javascript'>alert('Data ID Pegawai = ".$id." Berhasil di Hapus');</script>";		
		$link = base_url().'Restoran/pegawai/Pembagian_Tugas';
		redirect($link,'refresh');		
	}
}
 ?>