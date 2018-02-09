<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/Pemesanan_model/M_Pembayaran');
		$this->load->model('hotel/Pemesanan_model/M_Pendaftaran');
	}

	public function index()
	{
		$data['kode'] = $this->M_Pembayaran->buat_kode();
		$data['pembayaran_homestay'] = $this->M_Pembayaran->select();	
		$data['pendaftaran'] = $this->M_Pendaftaran->select();
		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/pembayaran_view', $data);
		$this->load->view('hotel/pendaftaran/template/footer');
	}
	function tambah_bayar(){
		$data = array (
			'id_pembayaran' => $this->input->post('id_pembayaran'),
			'nama_pendaftar' => $this->input->post('nama_pendaftar'),
			'tgl_transaksi' => $this->input->post('tgl_transaksi'),
			'Total' => $this->input->post('Total')
			);


		$this->M_Pembayaran->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");		
		redirect('hotel/Pemesanan/Pembayaran/','refresh');
	}

	function hapus_bayar($id){
		$where = array('id_pembayaran' => $id);
		$this->M_Pembayaran->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		redirect('hotel/Pemesanan/Pembayaran/','refresh');
	}
	
	function cetak($where)
	{
		$data['pembayaran'] = $this->M_Pembayaran->pembayaran($where);
		$this->load->view('hotel/pendaftaran/cetak',$data);
	}

}
