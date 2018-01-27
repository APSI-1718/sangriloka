<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_stok extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_pengajuan_stok');
	}
	public function index()
	{
		$data['pengajuan_stok_foodcourt']= $this->M_pengajuan_stok->select();
		$data['kode']= $this->M_pengajuan_stok->insert_id_pengajuan2();
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_pengajuan_stok',$data);
		$this->load->view('template/footer');
	}

	function tambah_pengajuan_stok() {

			$data = array (
			'id_pengajuan' => $id['id_pengajuan'] = $this->M_pengajuan_stok->insert_id_pengajuan2(),
			'tanggal' => $this->input->post('tanggal'),
			'status_pengajuan' => 'Belum disetujui'

			);

			 $this->M_pengajuan_stok->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('kolam_renang/foodcourt/Pengajuan_stok', 'refresh');

			}
}