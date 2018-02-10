<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kel_agenda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/agenda_db');
	}

	public function insert_data()
	{
		$data = array(
			'judul_agenda' => $this->input->post('judul'),
			'isi_agenda' => $this->input->post('isi'),
			'waktu_tanggal' => $this->input->post('waktu'));

		$this->agenda_db->insert($data);
		redirect('notifikasi/agenda', 'refresh');
	}

	function edit_data()
	{
		$id_agenda = $this->input->post('id');
			$data = array (
			'judul_agenda' => $this->input->post('judul'),
			'isi_agenda' => $this->input->post('isi'));
		
			$where = array ('id_agenda' => $id_agenda);
			$this->agenda_db->update($data, $where);
			redirect('notifikasi/agenda', 'refresh');
	}

	function delete_data()
	{
		$id_agenda = $this->input->post('id');
		$where = array ('id_agenda' => $id_konten);
		$this->agenda_db->delete($where);
		redirect('notifikasi/agenda', 'refresh');
	}
}
