<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat_makan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_alatmakan');
	}

	public function index()
	{
		$data['kitchen']= $this->M_alatmakan->select();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/alat-makan', $data);
		$this->load->view('template/footer');
	}

	function tambah_data() {

			$data = array (
			'kodeBrg' => $id['kodebarang'] = $this->M_alatmakan->insert_kodeBrg(),
			'namaBrg' => $this->input->post('namaBrg'),
			'kategoriBrg' => $this->input->post('kategoriBrg'),
			'stokBrg' => $this->input->post('stokBrg')

			);

			 $this->M_alatmakan->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('restoran/kitchen/alat_makan', 'refresh');

			}

	function edit_form() {
				$id = $this->input->get('kodeBrg');
				$where = array ('kodeBrg' => $id);
				$data['kitchen'] = $this->M_alatmakan->select($where);
				$this->load->view('edit-form', $data);
			}

			function edit_data() {
				$id = $this->input->post('kodeBrg');

				 $data = array (
				 	'namaBrg' => $this->input->post('namaBrg'),
				 	'kategoriBrg' => $this->input->post('kategoriBrg'),
				 	'stokBrg' => $this->input->post('stokBrg')

				 	);


			$where = array ('kodeBrg' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_alatmakan->update($data, $where);

			redirect('restoran/kitchen/alat_makan', 'refresh');
		}

	function delete_data() {
		$id = $this->input->post('kodeBrg');
		$where = array ('kodeBrg' => $id); $this->M_alatmakan->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");

		redirect('restoran/kitchen/alat_makan', 'refresh');
		}
}
