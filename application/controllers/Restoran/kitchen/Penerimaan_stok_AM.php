<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_stok_AM extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_alatmakan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_alatmakan->lihat_penerimaan();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/penerimaan-stok-am', $data);
		$this->load->view('template/footer');
	}

	function terima_stok(){

		$data = array (
			'kode_am' => $this->input->post('kode_am'),
			'nama_am' => $this->input->post('nama_am'),
			'stok_am' => $this->input->post('jumlah_masuk')
		

			);

			$where = $this->input->post('kode_am');
			$kode_mkn = array('kode_am' => $where);

			$this->M_alatmakan->update($data, $kode_mkn);

			$this->session->set_flashdata('penerimaanam', 'Data stok berhasil diterima');

			 redirect('restoran/kitchen/Penerimaan_stok_AM', 'refresh');

			}

	
}
