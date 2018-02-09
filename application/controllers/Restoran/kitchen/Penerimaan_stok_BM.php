<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_stok_BM extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_stokmakanan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_stokmakanan->lihat_penerimaan();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/penerimaan-stok', $data);
		$this->load->view('template/footer');
	}

	function terima_stok(){

		$data = array (
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'kode_mkn' => $this->input->post('kode_mkn'),
			'nama_mkn' => $this->input->post('nama_mkn'),
			'stok_mkn' => $this->input->post('jumlah_masuk'),
			'tanggal_expired' => $this->input->post('tanggal_expired')

			);

			$where = $this->input->post('kode_mkn');
			$kode_mkn = array('kode_mkn' => $where);

			$this->M_stokmakanan->update($data, $kode_mkn);

			$this->session->set_flashdata('penerimaan', 'Data stok berhasil diterima');

			 redirect('restoran/kitchen/Penerimaan_stok_BM', 'refresh');

			}
	
}
