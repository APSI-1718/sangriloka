<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_kelola_menu');
		$this->load->model('kolam_renang/foodcourt/M_kelola_stok');
		$this->load->model('kolam_renang/foodcourt/M_detail_menu');
	}

	public function index()
	{

		$data['stok_foodcourt']= $this->M_kelola_stok->select();
		$data['menu_foodcourt']= $this->M_kelola_menu->select();
		$data['detail_menu_foodcourt']= $this->M_detail_menu->select();
		$data['kode']= $this->M_kelola_menu->insert_id_menu();
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_kelola_menu', $data);
		$this->load->view('template/footer');
	}

	
	function tambah_menu() {

			$data = array (
			'id_menu' => $id['id_menu'] = $this->M_kelola_menu->insert_id_menu(),
			'nama_menu' => $this->input->post('nama_menu'),
			'harga' => $this->input->post('harga')

			);

			 $this->M_kelola_menu->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('kolam_renang/foodcourt/Kelola_menu', 'refresh');

			}

	function edit_form() {
				$id = $this->input->get('id_menu');
				$where = array ('id_menu' => $id);
				$data['menu_foodcourt'] = $this->M_kelola_menu->select($where);
				$this->load->view('edit-form', $data);
			}

			function ubah_menu() {
				$id = $this->input->post('id_menu');

				 $data = array (
				 	'nama_menu' => $this->input->post('nama_menu'),
				 	'harga' => $this->input->post('harga')

				 	);


			$where = array ('id_menu' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_kelola_menu->update($data, $where);

			redirect('kolam_renang/foodcourt/Kelola_menu', 'refresh');
		}

	function hapus_menu() {
		$id = $this->input->post('id_menu');
		$where = array ('id_menu' => $id); $this->M_kelola_menu->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");

		redirect('kolam_renang/foodcourt/Kelola_menu', 'refresh');
		}
    
}