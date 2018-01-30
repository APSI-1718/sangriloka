<?php 
/**
* 
*/
class Absensi extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/Crud_model');
		$this->load->model('Restoran/Pegawai/absensi_model');

	}
	function index(){
<<<<<<< HEAD
		$where = "id_pegawai = '".$this->session->userdata('id_pegawai')."' AND tanggal = '".date('Y-m-d')."'";
		$where2 = array('id_pegawai' => $this->session->userdata('id_pegawai'));

		$data['absen'] = $this->Crud_model->select('absensi',$where);
		$data['data_absensi'] = $this->Crud_model->select('absensi',$where2);

		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/absensi_view',$data);
		// $this->load->view('restoran/pegawai/template/footer');			
=======
		// $where = "id_pegawai = '".$this->session->userdata('id_pegawai')."' AND tanggal = '".date('Y-m-d')."'";
		// $where2 = array('id_pegawai' => $this->session->userdata('id_pegawai'));

		// $data['absen'] = $this->Crud_model->select('absensi',$where);
		// $data['data_absensi'] = $this->Crud_model->select('absensi',$where2);
		$data['data_pegawai'] = $this->Crud_model->inner_join3("kontrol_kerja","pegawai","kelolatugas","id_pegawai","id_tugas");
		$where =  array('tanggal' => date('Y-m-d'));
		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/absensi_view',$data);
		$this->load->view('restoran/pegawai/template/footer');			
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
	}
	function data(){
		$data['data_pegawai'] = $this->Crud_model->select('pegawai');
		$where =  array('tanggal' => date('Y-m-d'));
		$data['data_absensi'] = $this->Crud_model->select('absensi',$where);
		$where2 = "SUBSTRING(tanggal,1,7)  = '".date('Y-m')."'";
		$data['data_absensi_bulan'] = $this->Crud_model->select('absensi',$where2);

		$this->load->view('restoran/pegawai/template/header');
		$this->load->view('restoran/pegawai/template/menu');
		$this->load->view('restoran/pegawai/data_absensi_view',$data);
		$this->load->view('restoran/pegawai/template/footer');	
	}
<<<<<<< HEAD
=======
	function selesai_absensi(){
		foreach ( $this->Crud_model->inner_join3("kontrol_kerja","pegawai","kelolatugas","id_pegawai","id_tugas") as $data) {
				$id_pegawai = "id_pegawai".$data['id_pegawai'];
				$absen = "absensi".$data['id_pegawai'];
					$data = array (
						'tanggal' => date('Y-m-d'),
						'id_pegawai' => $this->input->post($id_pegawai),
						'status' => $this->input->post($absen)
						);

					$this->Crud_model->insert('absensi',$data);			
		}
					echo "<script type='text/javascript'>alert('Absensi Berhasil');</script>";	
					$link = base_url().'Restoran/pegawai/absensi';		
					redirect($link,'refresh');					
	}
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
	function absen_masuk(){
		if($this->input->post('submit')){
			$password = $this->input->post('password');
			$where = "id_pegawai = '".$this->session->userdata('id_pegawai')."' AND password = '".$password."'";
			foreach ($this->Crud_model->select('pegawai',$where) as $data) {
				if($data['id_pegawai']){
					$data = array (
						'tanggal' => date('Y-m-d'),
						'id_pegawai' => $this->session->userdata('id_pegawai'),
						'status' => 'Masuk'
						);

					$this->Crud_model->insert('absensi',$data);
					echo "<script type='text/javascript'>alert('Absensi Berhasil');</script>";	
					$link = base_url().'Restoran/pegawai/absensi';		
					redirect($link,'refresh');				
				}else{
					echo "Gagal";
				}
			}

			echo "<script type='text/javascript'>alert('Password Salah');</script>";	
			$link = base_url().'Restoran/pegawai/absensi';		
			redirect($link,'refresh');		
		}else{
			$link = base_url().'Restoran/pegawai/absensi';	
			redirect($link,'refresh');	
		}

	}
	function update_absensi_hari(){
		foreach ($this->Crud_model->select('pegawai') as $data) {
			$link = 'status'.$data['id_pegawai'];
				if (!$this->input->post($link)) {
					$status = 'Tidak Masuk';
				}else{
					$status = $this->input->post($link);
				}			
				
			
			if ($status=='Masuk') {
				echo "";

			}else{
					$data = array (
						'tanggal' => date('Y-m-d'),
						'id_pegawai' => $data['id_pegawai'],
						'status' => $status
						);

					$this->Crud_model->insert('absensi',$data);
			}
		}
		echo "<script type='text/javascript'>alert('Berhasil');</script>";	
		$link = base_url().'Restoran/pegawai/absensi/data';		
		redirect($link,'refresh');				
	}
}
 ?>