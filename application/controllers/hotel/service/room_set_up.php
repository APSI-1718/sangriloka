<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class room_set_up extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/service/M_room_set_up');
	}
	public function index()
	{
		$data['roomsetup']= $this->M_room_set_up->select();
		$this->load->view('hotel/service/template/header');
		$this->load->view('hotel/service/template/menu');
		$this->load->view('hotel/service/room_set_up/table_room_set_up', $data);
		$this->load->view('template/footer');
	}

	function tambah_data() {

			// $nmfile = "file_".time();
			// $config ['upload_path'] = 'assets/img/';
			// $config ['allowed_types'] = 'jpg|png|jpeg|bmp';
			// $config ['max_size'] = '5000';
			// $config ['file_name'] = $nmfile;
			// $this->upload->initialize($config);
			// if ($_FILES['gambar']['name']) {
			// 	if($this->upload->do_upload('gambar')) {
			// 		$gbr = $this->upload->data();
			// 	}
			// 	else{
			// 		print_r($this->upload->display_errors());
			// 	}
			// }
			// $gambar = $gbr['file_name'];



			$data = array (
			'id_room' => $id['id_room'] = $this->M_room_set_up->kode(),
			'nama_room' => $this->input->post('nama_room'),
			'jenis_room' => $this->input->post('jenis_room'),
			'gambar' => $this->input->post('gambar'),
			'pralatan' => $this->input->post('pralatan')

			);

			 $this->M_room_set_up->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('hotel/service/room_set_up', 'refresh');

			}

	function edit_form() {
				$id = $this->input->get('id_room');
				$where = array ('id_room' => $id);
				$data['event'] = $this->M_room_set_up->select($where);
				$this->load->view('edit-form', $data);
			}

			function edit_data() {
				$id = $this->input->post('id_room');

				 $data = array (
				 	'nama_room' => $this->input->post('nama_room'),
					'jenis_room' => $this->input->post('jenis_room'),
					'gambar' => $this->input->post('gambar'),
					'pralatan' => $this->input->post('pralatan')

				 	);


			$where = array ('id_room' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_room_set_up->update($data, $where);

			redirect('hotel/service/room_set_up', 'refresh');
		}

	function delete_data() {
		$id = $this->input->post('id_room');
		$where = array ('id_room' => $id); $this->M_room_set_up->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");

		redirect('hotel/service/room_set_up', 'refresh');
		}
}
