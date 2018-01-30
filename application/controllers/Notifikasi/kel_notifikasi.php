<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kel_notifikasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function insert_data()
	{
		$data2 = array(
			'judul_notifikasi' => $this->input->post('judul'),
			'isi_notifikasi' => $this->input->post('isi'),
			'waktu_tanggal' => $this->input->post('waktu'));

		$this->notifikasi_db->insert($data2);
		redirect('notifikasi/utama', 'refresh');
	}

	function edit_data()
	{
		$id_notifikasi = $this->input->post('id');
			$data2 = array (
			'judul_notifikasi' => $this->input->post('judul'),
			'isi_notifikasi' => $this->input->post('isi'));
		
			$where = array ('id_notifikasi' => $id_notifikasi);
			$this->notifikasi_db->update($data2, $where);
			redirect('notifikasi/utama', 'refresh');
	}

	function delete_data()
	{
		$id_notifikasi = $this->input->post('id');
		$where = array ('id_notifikasi' => $id_notifikasi);
		$this->notifikasi_db->delete($where);
		redirect('notifikasi/utama', 'refresh');
	}
}
