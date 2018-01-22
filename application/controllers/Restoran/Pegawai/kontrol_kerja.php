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

	}
	function index(){
		$data['data_tugas'] = $this->Crud_model->select('tugas');	
		$data['data_pegawai'] = $this->Crud_model->inner_join3('pegawai','tugas','id_tugas');

			foreach ($this->Crud_model->select('tugas') as $dataT) {
				$x=1;
				foreach ($this->Kontrol_kerja_model->tampil_status_ck($dataT['id_tugas']) as $data2) {
					if($data2['status_ck']=='1'){
						if($x==1){
							$this->Kontrol_kerja_model->update_status_ck($dataT['id_tugas']);
						}

					}
				$x++;
				}

			}

		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/kontrol_kerja_view',$data);
		$this->load->view('restoran/pegawai/kontrol_kerja/footer_kk',$data);					
	}
	function update_status_ck($id){
		$data = array (
			'status_ck' => '1'
		);
		$where = array('id_pegawai' => $id);
		$this->Crud_model->update('pegawai', $data, $where);
		echo "<script type='text/javascript'>alert('Berhasil... Pegawai Telah Melakukan Tugas');</script>";		
		$link = base_url().'Restoran/pegawai/Kontrol_kerja';
		redirect($link,'refresh');	
	}
}
 ?>