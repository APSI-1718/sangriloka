<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_tugas extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('restoran/pengelolaan_restoran/kelola_tugasdb');
	}	

	public function tugas()
	{
		$data['kelt'] = $this->kelola_tugasdb->select();
		$data['kodeunik'] = $this->kelola_tugasdb->buat_kode();

		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_tugas', $data);
		$this->load->view('restoran/pengelolaan_restoran/modal');
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_tugas' => $this->input->post('id_tugas'),
			'Nama_tugas' => $this->input->post('Nama_tugas'),
			'penempatan_tugas' => $this->input->post('penempatan_tugas'));

		$this->kelola_tugasdb->insert($data);
		redirect('Restoran/kelola_tugas/kelola_tugas/tugas', 'refresh');
	}

	function edit_data()
	{
		$id_tugas = $this->input->post('id_tugas');

		if ($this->input->post('id_tugas') == null) {
			$data = array (
				'id_tugas' => $this->input->post('id_tugas'),
			'Nama_tugas' => $this->input->post('Nama_tugas'),
			'penempatan_tugas' => $this->input->post('penempatan_tugas'));
		} else {
				$data = array (
				'id_tugas' => $this->input->post('id_tugas'),
			'Nama_tugas' => $this->input->post('Nama_tugas'),
			'penempatan_tugas' => $this->input->post('penempatan_tugas'));
		}
			$where = array ('id_tugas' => $id_tugas);
			$this->kelola_tugasdb->update($data, $where);
			redirect('Restoran/kelola_tugas/kelola_tugas/tugas', 'refresh');
	}

	function delete_data()
	{
		$id_tugas = $this->input->post('id_tugas');
		$where = array ('id_tugas' => $id_tugas);
		$this->kelola_tugasdb->delete($where);
		redirect('Restoran/kelola_tugas/kelola_tugas/tugas', 'refresh');
	}

}