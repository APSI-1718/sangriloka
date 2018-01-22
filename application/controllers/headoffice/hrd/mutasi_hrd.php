<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mutasi_hrd extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/mutasi_db');
	}

	public function mutasi()
	{
		$data['hrd'] = $this->mutasi_db->select();
		$data['kodeunik'] = $this->mutasi_db->buat_kode();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/mutasi', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_mutasi' => $this->input->post('id_mutasi'),
			'tanggal' => $this->input->post('tanggal'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama' => $this->input->post('nama'),
			'posisi' => $this->input->post('posisi'),
			'jabatan' => $this->input->post('jabatan'));

		$this->mutasi_db->insert($data);
		redirect('headoffice/hrd/mutasi_hrd/mutasi', 'refresh');
	}

	function edit_data()
	{
		$id_mutasi = $this->input->post('id_mutasi');

		if ($this->input->post('id_mutasi') == null) {
			$data = array (
				'id_mutasi' => $this->input->post('id_mutasi'),
				'tanggal' => $this->input->post('tanggal'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'));
		} else {
				$data = array (
				'id_mutasi' => $this->input->post('id_mutasi'),
				'tanggal' => $this->input->post('tanggal'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'));
		}
			$where = array ('id_mutasi' => $id_mutasi);
			$this->mutasi_db->update($data, $where);
			redirect('headoffice/hrd/mutasi_hrd/mutasi', 'refresh');
	}

	function delete_data()
	{
		$id_mutasi = $this->input->post('id_mutasi');
		$where = array ('id_mutasi' => $id_mutasi);
		$this->mutasi_db->delete($where);
		redirect('headoffice/hrd/mutasi_hrd/mutasi', 'refresh');
	}
}