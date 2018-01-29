<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_meja extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('restoran/pengelolaan_restoran/kelola_mejadb');
	}	


	public function meja()
	{
		$data['kelmej'] = $this->kelola_mejadb->select();
		$data['kodeunik'] = $this->kelola_mejadb->buat_kode();

		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_meja', $data);
		$this->load->view('restoran/pengelolaan_restoran/modal');
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_meja' => $this->input->post('id_meja'),
			'jumlah_meja' => $this->input->post('jumlah_meja'),
			'type_meja' => $this->input->post('type_meja'));

		$this->kelola_mejadb->insert($data);
		redirect('Restoran/kelola_tugas/kelola_meja/meja', 'refresh');
	}

	function edit_data()
	{
		$id_meja = $this->input->post('id_meja');

		if ($this->input->post('id_meja') == null) {
			$data = array (
				'id_meja' => $this->input->post('id_meja'),
			'jumlah_meja' => $this->input->post('jumlah_meja'),
			'type_meja' => $this->input->post('type_meja'));
		} else {
				$data = array (
				'id_meja' => $this->input->post('id_meja'),
			'jumlah_meja' => $this->input->post('jumlah_meja'),
			'type_meja' => $this->input->post('type_meja'));
		}
			$where = array ('id_meja' => $id_meja);
			$this->kelola_mejadb->update($data, $where);
			redirect('Restoran/kelola_tugas/kelola_meja/meja', 'refresh');
	}

	function delete_data()
	{
		$id_meja = $this->input->post('id_meja');
		$where = array ('id_meja' => $id_meja);
		$this->kelola_mejadb->delete($where);
		redirect('Restoran/kelola_tugas/kelola_meja/meja', 'refresh');
	}

}
