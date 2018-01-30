<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_makanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_stokmakanan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_stokmakanan->select();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/stok-makanan', $data);
		$this->load->view('template/footer');
	}

	public function detail_makanan()
	{
		$data['kitchen']= $this->M_stokmakanan->lihat_detail_makanan();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/detail-makanan', $data);
		$this->load->view('template/footer');
	}

	function tambah_data() {

			$data = array (
			'kode_mkn' => $id['kodemakanan'] = $this->M_stokmakanan->insert_kode_mkn(),
			'nama_mkn' => $this->input->post('nama_mkn'),
			'jenis_mkn' => $this->input->post('jenis_mkn'),
			'stok_mkn' => $this->input->post('stok_mkn')

			);

			 $this->M_stokmakanan->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('restoran/kitchen/Stok_makanan', 'refresh');

			}

	function terima_stok() {

			$data = array (
			'id_penerimaan' => $this->input->post('id_penerimaan'),
			'kode_mkn' 	=> $this->input->post('kode_mkn'),
			'nama_mkn' 	=> $this->input->post('nama_mkn'),
			'tanggal_masuk' => $this->input->post('tanggal_masuk'),
			'tanggal_expired' => $this->input->post('tanggal_expired'),
			'jumlah' 	=> $this->input->post('jumlah_masuk')

			);

			 $this->M_stokmakanan->tambah_stok($data);
			 redirect('restoran/kitchen/Stok_makanan', 'refresh');

			}

}
