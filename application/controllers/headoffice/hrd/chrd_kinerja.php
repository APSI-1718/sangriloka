<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_kinerja extends CI_Controller {

	function __construct()
	{
	parent::__construct();
		$this->load->model('headoffice/hrd/mutasi_db');
	}

	public function kinerja()
	{
		$data['gabung'] = $this->mutasi_db->tampil();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		$this->load->view('headoffice/hrd/modalhrd');
		$this->load->view('headoffice/hrd/hrd_kinerja',$data);
		$this->load->view('template/footer');
	}

	function edit_data()
	{
		$id_mutasi = $this->input->post('id_mutasi');

		if ($this->input->post('id_mutasi') == null) {
			$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'id_mutasi' => $this->input->post('id_mutasi'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'),
				'status' => $this->input->post('status'),
				'pil_kinerja' => $this->input->post('pil_kinerja'),
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'));
		} else {
				$data = array (
				'no_pendaftaran' => $this->input->post('no_pendaftaran'),
				'id_mutasi' => $this->input->post('id_mutasi'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'),
				'status' => $this->input->post('status'),
				'pil_kinerja' => $this->input->post('pil_kinerja'),
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'));
		}
			$where = array ('id_mutasi' => $id_mutasi);
			$this->mutasi_db->update($data, $where);
			redirect('headoffice/hrd/chrd_kinerja/kinerja', 'refresh');
	}
}
