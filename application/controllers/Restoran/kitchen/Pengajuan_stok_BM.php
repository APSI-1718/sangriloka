<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_stok_BM extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_stokmakanan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_stokmakanan->select();
		$data['pengajuan']= $this->M_stokmakanan->lihat_pengajuan();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/pengajuan-stok-bm', $data);
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
			 redirect('restoran/kitchen/Pengajuan_stok_BM', 'refresh');

			}

	function hapus_pengajuan($where) {

			$id = $where;

			 $where = array ('id_pengajuan' => $id); 
			 $this->M_stokmakanan->hapus_pengajuan($where);
			 $this->session->set_flashdata('hapuspengajuan', "Pengajuan berhasil dibatalkan ");
			 redirect('restoran/kitchen/Pengajuan_stok_BM', 'refresh');

			}

	function edit_data() {
				$id = $this->input->post('id_pengajuan');

				 $data = array (
				 	'nama_mkn' => $this->input->post('nama_mkn'),
				 	'kode_mkn' => $this->input->post('kode_mkn'),
				 	'jumlah_permintaan' => $this->input->post('jumlah_permintaan'),	 	

				 	);


			$where = array ('id_pengajuan' => $id);

			$this->session->set_flashdata('editpengajuan', "Data pengajuan berhasil diubah");

			$this->M_stokmakanan->update_pengajuan($data, $where);

			redirect('restoran/kitchen/Pengajuan_stok_BM', 'refresh');
		}
}

