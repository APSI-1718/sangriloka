<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pemesanan_model/M_Fasilitas');
	}

	public function index()
	{
		$data['kode'] = $this->M_Fasilitas->buat_kode();
		$data['fasilitas'] = $this->M_Fasilitas->select();	

		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/fasilitas_view', $data);
		$this->load->view('template/footer');
	}
	function tambah_fasilitas(){
		$data = array (
			'id_fas' => $this->input->post('id_fas'),
			'nama_fas' => $this->input->post('nama_fas'),
			
			);

		$this->M_Fasilitas->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");				
		redirect('hotel/Pemesanan/Fasilitas','refresh');
	}

	function ubah_fasilitas(){
		$id = $this->input->post('id_fas');
		$nama_fas = $this->input->post('nama_fas');
				
		$data = array (
			'id_fas' => $id_fas,
			'nama_fas' => $nama_fas
			);

		$where = array('id_fas' => $id);

		$this->M_Fasilitas->update($data, $where);
		$this->session->set_flashdata('ubahdata', "Data berhasil diubah");		
		redirect('hotel/Pemesanan/Fasilitas','refresh');
	}

	
	function hapus_fasilitas($id){
		$where = array('id_fas' => $id);
		$this->M_Fasilitas->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		redirect('hotel/Pemesanan/Fasilitas','refresh');
	}

	
}
