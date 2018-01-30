<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengelolaan_event extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('hotel/service/M_pengelolaanEvent');
	}

	public function index()
	{
		$data['event']= $this->M_pengelolaanEvent->select();
		$data['roomsetup']= $this->M_pengelolaanEvent->ambilRoom();
		$this->load->view('hotel/service/template/header');
		$this->load->view('hotel/service/template/menu');
		$this->load->view('hotel/service/pengelolaan_event/table_pengelolaan_event', $data);
		$this->load->view('template/footer');
	}

	function tambah_data() {

			$data = array (
			'id_event' => $id['id_event'] = $this->M_pengelolaanEvent->kode(),
			'nama_event' => $this->input->post('nama_event'),
			'jadwal_event' => $this->input->post('jadwal_event'),
			'jenis_event' => $this->input->post('jenis_event'),
			'progress' => $this->input->post('progress'),
			'status' => $this->input->post('status')

			);

			 $this->M_pengelolaanEvent->insert($data);

			 $this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
			 redirect('hotel/service/pengelolaan_event', 'refresh');

			}

	function edit_form() {
				$id = $this->input->get('id_event');
				$where = array ('id_event' => $id);
				$data['event'] = $this->M_pengelolaanEvent->select($where);
				$this->load->view('edit-form', $data);
			}

			function edit_data() {
				$id = $this->input->post('id_event');

				 $data = array (
				 	'nama_event' => $this->input->post('nama_event'),
					'jadwal_event' => $this->input->post('jadwal_event'),
					'jenis_event' => $this->input->post('jenis_event'),
					'progress' => $this->input->post('progress'),
					'status' => $this->input->post('status')	
				 	);


			$where = array ('id_event' => $id);

			$this->session->set_flashdata('editdata', "Data berhasil diubah");

			$this->M_pengelolaanEvent->update($data, $where);

			redirect('hotel/service/pengelolaan_event', 'refresh');
		}

	function delete_data() {
		$id = $this->input->post('id_event');
		$where = array ('id_event' => $id); $this->M_pengelolaanEvent->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");

		redirect('hotel/service/pengelolaan_event', 'refresh');
		}
}
