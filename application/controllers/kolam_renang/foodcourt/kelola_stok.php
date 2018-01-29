<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_stok extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_kelola_stok');
	}

	public function index()
	{

		$data['stok_foodcourt']= $this->M_kelola_stok->select();
		$data['kode']= $this->M_kelola_stok->insert_idStok();
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_kelola_stok', $data);
		$this->load->view('template/footer');
	}

	function tambah_stok() {

			$data = array (
			'id_stok' => $id['id_stok'] = $this->M_kelola_stok->insert_idStok(),
			'nama_stok' => $this->input->post('nama_stok'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'satuan' => $this->input->post('satuan')

			);

			 $this->M_kelola_stok->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 
			 redirect('kolam_renang/foodcourt/Kelola_stok', 'refresh');

			}

	function edit_form() {
				$id = $this->input->get('id_stok');
				$where = array ('id_stok' => $id);
				$data['stok_foodcourt'] = $this->M_kelola_stok->select($where);
				$this->load->view('edit-form', $data);
			}

			function ubah_stok() {
				$id = $this->input->post('id_stok');

				 $data = array (
				 	'nama_stok' => $this->input->post('nama_stok'),
				 	'jenis' => $this->input->post('jenis'),
				 	'jumlah' => $this->input->post('jumlah'),
				 	'satuan' => $this->input->post('satuan')

				 	);


			$where = array ('id_stok' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_kelola_stok->update($data, $where);

			redirect('kolam_renang/foodcourt/Kelola_stok', 'refresh');
		}

	function hapus_stok() {
		$id = $this->input->post('id_stok');
		$where = array ('id_stok' => $id); $this->M_kelola_stok->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");

		redirect('kolam_renang/foodcourt/Kelola_stok', 'refresh');
		}
}

