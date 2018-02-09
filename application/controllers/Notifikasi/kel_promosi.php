<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kel_promosi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/promosi_db');
	}

	public function insert_data()
	{
		$data = array(
			'judul_promosi' => $this->input->post('judul'),
			'isi_promosi' => $this->input->post('isi'),
			'waktu_tanggal' => $this->input->post('waktu'),
			'gambar_promosi' => $this->input->post('gambar'));

		$this->promosi_db->insert($data);
		redirect('notifikasi/promosi', 'refresh');
	}

	function edit_data()
	{
		$id_konten = $this->input->post('id');
			$data = array (
			'judul_promosi' => $this->input->post('judul'),
			'isi_promosi' => $this->input->post('isi'));
		
			$where = array ('id_promosi' => $id_konten);
			$this->promosi_db->update($data, $where);
			redirect('notifikasi/promosi', 'refresh');
	}

	function delete_data()
	{
		$id_konten = $this->input->post('id');
		$where = array ('id_promosi' => $id_konten);
		$this->promosi_db->delete($where);
		redirect('notifikasi/promosi', 'refresh');
	}
}
