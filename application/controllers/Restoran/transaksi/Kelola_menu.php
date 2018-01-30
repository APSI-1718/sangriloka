<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_menu extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/transaksi/M_menumakanan');
	}

	function index(){

		$data['menumkn'] = $this->M_menumakanan->select();

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/template/menu');
		$this->load->view('restoran/transaksi/v_kelolamenu', $data);
		$this->load->view('restoran/transaksi/template/footer2');		
	}

		function tambah_menu() { 
			$data = array ( 
			'id_menu' => $id['idmenu'] = $this->M_menumakanan->insert_id_menu(),
			'gambar_menu' => $this->input->post('gambar_menu'),
			'nama_menu' => $this->input->post('nama_menu'), 
			'harga_menu' => $this->input->post('harga_menu'), 
			'jenis_menu' => $this->input->post('jenis_menu')
			);

			 $this->M_menumakanan->insert($data); 
			 redirect('restoran/transaksi/Kelola_menu', 'refresh'); 

			}
	function edit_form() {
				$id = $this->input->get('kode_am');
				$where = array ('kode_am' => $id);
				$data['kitchen'] = $this->M_alatmakan->select($where);
				$this->load->view('edit-form', $data);
			}

			function edit_data() {
				$id = $this->input->post('id_menu');

				 $data = array (
				 	'gambar_menu' => $this->input->post('gambar_menu'),
				 	'nama_menu' => $this->input->post('nama_menu'),
				 	'jenis_menu' => $this->input->post('jenis_menu'),
				 	'harga_menu' => $this->input->post('harga_menu')

				 	);


			$where = array ('id_menu' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_menumakanan->update($data, $where);

			redirect('restoran/transaksi/Kelola_menu', 'refresh');
		}

	function delete_data() {
		$id = $this->input->post('id_menu');
		$where = array ('id_menu' => $id); $this->M_menumakanan->delete($where);

		$this->session->set_flashdata('deletedata', "Data besrhasil dihapus");

		redirect('restoran/transaksi/Kelola_menu', 'refresh');
		}

}
 ?>