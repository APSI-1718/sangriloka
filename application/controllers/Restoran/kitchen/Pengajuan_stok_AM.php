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
		$this->load->view('restoran/kitchen/pengajuan-stok-am', $data);
		$this->load->view('template/footer');
	}

	function kirim_pengajuan() {

			$data = array (
			'id_pengajuan' => $id['idpengajuan'] = $this->M_alatmakan->insert_id_pengajuan_AM(),
			'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
			'kode_am' => $this->input->post('kode_am'),
			'nama_am' => $this->input->post('nama_am'),
			'status_pengajuan' => $this->input->post('status_pengajuan'),
			'jumlah_permintaan' => $this->input->post('jumlah_permintaan')

			);

			$this->M_alatmakan->tambah_pengajuan($data);

			 $this->session->set_flashdata('pengajuanstok', "Data pengajuan stok terkirim");
			 redirect('restoran/kitchen/Pengajuan_stok_AM', 'refresh');

			}

	function hapus_pengajuan($where) {

			$id = $where;

			 $where = array ('id_pengajuan' => $id); 
			 $this->M_alatmakan->hapus_pengajuan($where);
			 $this->session->set_flashdata('hapuspengajuan', "Pengajuan berhasil dibatalkan ");
			 redirect('restoran/kitchen/Pengajuan_stok_AM', 'refresh');

			}


	function edit_data() {
				$id = $this->input->post('id_pengajuan');

				 $data = array (
				 	'nama_am' => $this->input->post('nama_am'),
				 	'kode_am' => $this->input->post('kode_am'),
				 	'jumlah_permintaan' => $this->input->post('jumlah_permintaan'),	 	

				 	);


			$where = array ('id_pengajuan' => $id);

			$this->session->set_flashdata('editpengajuan', "Data pengajuan berhasil diubah");

			$this->M_alatmakan->update_pengajuan($data, $where);

			redirect('restoran/kitchen/Pengajuan_stok_AM', 'refresh');
		}

}

