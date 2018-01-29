<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pemesanan_model/M_Pembayaran');
		$this->load->model('Pemesanan_model/M_Pendaftaran');
	}

	public function index()
	{
		$data['kode'] = $this->M_Pembayaran->buat_kode();
		$data['pembayaran'] = $this->M_Pembayaran->select();	
		$data['pendaftaran'] = $this->M_Pendaftaran->select();
		$this->load->view('hotel/pendaftaran/template/header');
		$this->load->view('hotel/pendaftaran/template/menu');
		$this->load->view('hotel/pendaftaran/pembayaran_view', $data);
		$this->load->view('hotel/pendaftaran/template/footer');
	}
	function tambah_bayar(){
		$id_pembayaran = $this->input->post('id_pembayaran');
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$pembayaran_loudry = $this->input->post('pembayaran_loudry');
		$totalharga = $this->input->post('totalharga');
		$keterangan = $this->input->post('keterangan');

		$data = array (
			'id_pembayaran' => $id_pembayaran,
			//'nama_pendaftar' => $this->input->post('nama_pendaftar'),
			'tgl_transaksi' => $tgl_transaksi,
			'pembayaran_loudry' => $pembayaran_loudry,
			'totalharga' => $totalharga,
			'keterangan' => $keterangan,
			);

		$this->M_Pembayaran->insert($data);
		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");		
		$link = base_url().'hotel/reservasi/pembayaran';		
		redirect($link,'refresh');
	}

	function ubah_bayar(){
		$id = $this->input->post('id_pembayaran');

		$data = array (

			'tgl_transaksi' => $this->input->post('tgl_transaksi'),
			'pembayaran_loudry' => $this->input->post('pembayaran_loudry'),
			'totalharga' => $this->input->post('totalharga'),
			'keterangan' => $this->input->post('keterangan'),
			);

		$where = array('id_pembayaran' => $id_pembayaran);
		$this->M_Pembayaran->update($data, $where);
		$this->session->set_flashdata('ubahdata', "Data berhasil diubah");		
		$link = base_url().'hotel/reservasi/pembayaran';		
		redirect($link,'refresh');
	}

	function hapus_bayar(){
		$id_pembayaran = $this->input->post('id_pembayaran');
		$where = array('id_pembayaran' => $id_pembayaran);
		$this->M_Pembayaran->delete($where);
		$this->session->set_flashdata('hapusdata', "Data berhasil dihapus");
		
		$link = base_url().'hotel/reservasi/pembayaran';		
		redirect($link,'refresh');	
	}
}
