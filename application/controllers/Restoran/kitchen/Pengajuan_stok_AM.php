<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_stok_AM extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_alatmakan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_alatmakan->select();
		$data['pengajuan']= $this->M_alatmakan->lihat_pengajuan();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/pengajuan-stok', $data);
		$this->load->view('template/footer');
	}

	function kirim_pengajuan() {

			$data = array (
			'id_pengajuan' => $id['idpengajuan'] = $this->M_stokmakanan->insert_id_pengajuan_BM(),
			'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
			'kode_mkn' => $this->input->post('kode_mkn'),
			'nama_mkn' => $this->input->post('nama_mkn'),
			'status_pengajuan' => $this->input->post('status_pengajuan'),
			'jumlah_permintaan' => $this->input->post('jumlah_permintaan')

			);

			$this->M_stokmakanan->tambah_pengajuan($data);

			 $this->session->set_flashdata('pengajuanstok', "Data pengajuan stok terkirim");
			 redirect('restoran/kitchen/pengajuan_stok', 'refresh');

			}

}

