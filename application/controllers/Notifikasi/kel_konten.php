<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kel_konten extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/konten_db');
	}

	public function insert_data()
	{
		$data = array(
			'judul_konten' => $this->input->post('judul'),
			'isi_konten' => $this->input->post('isi'),
			'waktu_tanggal' => $this->input->post('waktu'),
			'gambar_konten' => $this->input->post('gambar'));

		$this->konten_db->insert($data);
		redirect('notifikasi/detail_konten', 'refresh');
	}

	function edit_data()
	{
		$id_konten = $this->input->post('id');
			$data = array (
			'judul_konten' => $this->input->post('judul'),
			'isi_konten' => $this->input->post('isi'));
		
			$where = array ('id_konten' => $id_konten);
			$this->konten_db->update($data, $where);
			redirect('notifikasi/detail_konten', 'refresh');
	}

	function delete_data()
	{
		$id_konten = $this->input->post('id');
		$where = array ('id_konten' => $id_konten);
		$this->konten_db->delete($where);
		redirect('notifikasi/detail_konten', 'refresh');
	}
}
