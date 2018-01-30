<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/Pemesanan_model/M_Kamar');
		$this->load->model('hotel/Pemesanan_model/M_Jenis');
	}

	public function index()
	{
		$data['kode'] = $this->M_Kamar->buat_kode();
		$data['kamar'] = $this->M_Kamar->select();	
		$data['jenis'] = $this->M_Jenis->select();	

		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/kamar_view', $data);
		$this->load->view('template/footer');
	}
	function tambah_kamar(){
		$data = array (
			'id_kmr' => $this->input->post('id_kmr'),
			'no_kmr' => $this->input->post('no_kmr'),
			'lokasi' => $this->input->post('lokasi'),
		);

		$this->M_Kamar->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");				
		redirect('hotel/Pemesanan/kamar','refresh');
	}

	function ubah_kamar(){
		$id = $this->input->post('id_kmr');
		$no_kmr = $this->input->post('no_kmr');
		$lokasi =  $this->input->post('lokasi');
		$data = array (
			'id_kmr' => $id,
			'no_kmr' => $no_kmr,
			'lokasi' => $lokasi
			);

		$where = array('id_kmr' => $id);

		$this->M_Kamar->update($data, $where);
		$this->session->set_flashdata('ubahdata', "Data berhasil diubah");		
		redirect('hotel/Pemesanan/kamar','refresh');
	}

	
	function hapus_kamar($id){
		$where = array('id_kmr' => $id);
		$this->M_Kamar->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		redirect('hotel/Pemesanan/kamar','refresh');
	}

	
}
