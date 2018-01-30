<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/Pemesanan_model/M_Pendaftaran');
		$this->load->model('hotel/Pemesanan_model/M_Jenis');
	}

	public function index()
	{
		$data['kode'] = $this->M_Pendaftaran->buat_kode();
		$data['pendaftaran'] = $this->M_Pendaftaran->select();	
		$data['jenis'] = $this->M_Jenis->select();	

		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/pendaftaran_view', $data);
		$this->load->view('template/footer');
	}
	function tambah_pendaftar(){
		$data = array (
			'tgl_pendaftaran' => $this->input->post('tgl_pendaftaran'),
			'id_pendaftar' => $this->input->post('id_pendaftar'),
			'nama_pendaftar' => $this->input->post('nama_pendaftar'),
			'status' => $this->input->post('status'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'notlp' => $this->input->post('notlp'),
			'email' => $this->input->post('email'),
			'tgl_checkin' => $this->input->post('tgl_checkin'),
			'tgl_checkout' => $this->input->post('tgl_checkout'),
			);

		$this->M_Pendaftaran->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");				
		redirect('hotel/Pemesanan/pendaftaran','refresh');
	}

	// function lamainap()
 //    {
 //        $data['tgl_checkout']=(int)$this->input->post('tgl_checkout',true);
 //        $data['tgl_checkin']=(int)$this->input->post('tgl_checkin',true);
 //        $data['hasil']=$data['tgl_checkout']-$data['tgl_checkin'];;
 //        $this->load->view('lamainap',$data);
 //    }

	// function tampil_edit($id)
	// 	{
	// 			$where = array('id_pendaftar' => $id);
	// 			$data['pendaftaran'] = $this->M_Pendaftaran->edit_data($where)->result();
	// 			$this->load->view('hotel/pendaftaran/template/header');
	// 			$this->load->view('hotel/pendaftaran/template/menu');
	// 			$this->load->view('hotel/pendaftaran/ubah_pendaftaran', $data);
	// 			$this->load->view('template/footer');
	// 	}
	
	function ubah_pendaftar(){
		$tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
		$id = $this->input->post('id_pendaftar');
		$nama_pendaftar =  $this->input->post('nama_pendaftar');
		$status =  $this->input->post('status');
		$jk =  $this->input->post('jk');
		$alamat =  $this->input->post('alamat');
		$notlp =  $this->input->post('notlp');
		$email =  $this->input->post('email');
		$tgl_checkin =  $this->input->post('tgl_checkin');
		$tgl_checkout =  $this->input->post('tgl_checkout');
		$data = array (
			'tgl_pendaftaran' => $tgl_pendaftaran,
			'id_pendaftar' => $id,
			'nama_pendaftar' => $nama_pendaftar,
			'status' => $status,
			'jk' => $jk,
			'alamat' => $alamat,
			'notlp' => $notlp,
			'email' => $email,
			'tgl_checkin' => $tgl_checkin,
			'tgl_checkout' => $tgl_checkout
			);

		$where = array('id_pendaftar' => $id);

		$this->M_Pendaftaran->update($data, $where);
		$this->session->set_flashdata('ubahdata', "Data berhasil diubah");		
		redirect('hotel/Pemesanan/pendaftaran/','refresh');
	}

	
	function hapus_pendaftar($id){
		$where = array('id_pendaftar' => $id);
		$this->M_Pendaftaran->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		redirect('hotel/Pemesanan/pendaftaran/','refresh');
	}

	
}
