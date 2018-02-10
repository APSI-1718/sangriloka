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

			 $this->session->set_flashdata('tambahdatamkn', "Data berhasil ditambahkan");
			 redirect('restoran/kitchen/Stok_makanan', 'refresh');

			}

			function edit_form() {
				$id = $this->input->get('kode_mkn');
				$where = array ('kode_mkn' => $id);
				$data['kitchen'] = $this->M_stokmakanan->select($where);
				$this->load->view('edit-form', $data);
			}

	function edit_data() {
				$id = $this->input->post('kode_mkn');

				 $data = array (
				 	'nama_mkn' => $this->input->post('nama_mkn'),
				 	'jenis_mkn' => $this->input->post('jenis_mkn')	 	

				 	);


			$where = array ('kode_mkn' => $id);

			$this->session->set_flashdata('editdatamkn', "Data berhasil diubah");

			$this->M_stokmakanan->update($data, $where);

			redirect('restoran/kitchen/Stok_makanan', 'refresh');
		}

	function delete_data() {
		$id = $this->input->post('kode_mkn');
		$where = array ('kode_mkn' => $id); $this->M_stokmakanan->delete($where);

		$this->session->set_flashdata('deletedatamkn', "Data berhasil dihapus");

		redirect('restoran/kitchen/Stok_makanan', 'refresh');
		}


			function hapus_stok($where) {

			$id = $where;

			$data = array (
			'stok_mkn' => 0,
			'tanggal_masuk' => null,
			'tanggal_expired' => null

			);

			 $this->M_stokmakanan->update($data, array('kode_mkn' => $id));
			 $this->session->set_flashdata('hapusstok', "Stok berhasil dihapus");
			 redirect('restoran/kitchen/Stok_makanan', 'refresh');

			}



}
