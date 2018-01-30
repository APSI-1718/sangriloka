<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/Pemesanan_model/M_Jenis');
	}

	public function index()
	{
		$data['jenis'] = $this->M_Jenis->select();	

		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/jenis_view', $data);
		$this->load->view('template/footer');
	}
	function tambah_jenis(){
		$data = array (
			'id_jenis' => $this->input->post('id_jenis'),
			'jenis' => $this->input->post('jenis'),
			'Harga' => $this->input->post('harga'),
		);

		$this->M_Jenis->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");				
		redirect('hotel/Pemesanan/Jenis','refresh');
	}

	function ubah_jenis(){
		$id = $this->input->post('id_jenis');
		$jenis = $this->input->post('jenis');
		$Harga =  $this->input->post('Harga');
		
		$data = array (

			'jenis' => $jenis,
			'id_jenis' => $id,
			'Harga' => $Harga
			);

		$where = array('id_jenis' => $id);

		$this->M_Jenis->update($data, $where);
		$this->session->set_flashdata('ubahdata', "Data berhasil diubah");		
		redirect('hotel/Pemesanan/Jenis','refresh');
	}

	
	function hapus_jenis($id){
		$where = array('id_jenis' => $id);
		$this->M_Jenis->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		redirect('hotel/Pemesanan/Jenis','refresh');
	}

	
}
