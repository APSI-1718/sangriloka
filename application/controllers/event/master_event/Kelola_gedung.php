<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_gedung extends CI_Controller {


	public function __construct(){
		parent::__construct();
		//memuat model
		$this->load->model('event/master_event/M_Kelola_gedung');
	}


	// public function index()
	// {
	// 	$this->load->view('event/master_event/template/header');
	// 	$this->load->view('event/master_event/template/menu');
	// 	$this->load->view('event/master_event/template/table/kelola_gedung');
	// 	$this->load->view('event/master_event/template/footer');
	// }


	public function KelolaGedung(){
											//Table Harga_Tiket
		$data['gedung'] = $this->M_Kelola_gedung->select();
		$this->load->view('event/master_event/template/header');
		$this->load->view('event/master_event/template/menu');
		$this->load->view('event/master_event/template/table/kelola_gedung',$data);
		$this->load->view('event/master_event/template/footer');

	}
	public function tambah(){

		$data = array(
			'id_gedung' => $this->M_Kelola_gedung->kode(),
			'jenis_gedung' => $this->input->post('jenis-gedung'),
			'jumlah_kuota' => $this->input->post('jumlah-kuota'),
			'status_gedung' => $this->input->post('status-gedung'),
			);
		$this->M_Kelola_gedung->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambah");
		redirect('event/master_event/kelola_gedung/KelolaGedung','refresh');
	}
	public function ubah(){
		$id =  $this->input->post('id-gedung');
		$data = array(
			'jenis_gedung' => $this->input->post('jenis-gedung'),
			'jumlah_kuota' => $this->input->post('jumlah-kuota'),
			'status_gedung' => $this->input->post('status-gedung'),
			);
		$where = array('id_gedung' =>  $id);
		$this->M_Kelola_gedung->update($data,$where);
		$this->session->set_flashdata('editdata', "Data berhasil diubah");
		redirect('event/master_event/kelola_gedung/KelolaGedung','refresh');
	}

	public function hapus(){
		$id =  $this->input->post('id_gedung');

		$where = array('id_gedung' =>  $id);
		$this->M_Kelola_gedung->delete($where);
		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");
		redirect('event/master_event/kelola_gedung/KelolaGedung','refresh');

	}
}	