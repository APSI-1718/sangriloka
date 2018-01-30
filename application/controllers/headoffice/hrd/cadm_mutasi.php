<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_mutasi extends CI_Controller {

<<<<<<< HEAD
	public function mutasi()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_mutasi');
		$this->load->view('template/footer');
	}
=======
	function __construct()
	{
		parent::__construct();
		$this->load->model('headoffice/hrd/mutasi_db');
	}

	public function mutasi()
	{
		$data['kodeunik'] = $this->mutasi_db->buat_kode();
		$data['nipoto'] = $this->mutasi_db->buat_nip();
		$data['gabung'] = $this->mutasi_db->tampil(); //memanggil function tampil di model m_data
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		$this->load->view('headoffice/hrd/modalhrd');
		$this->load->view('headoffice/hrd/adm_mutasi', $data);
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
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'));
		}
			$where = array ('id_mutasi' => $id_mutasi);
			$this->mutasi_db->update($data, $where);
			redirect('headoffice/hrd/cadm_mutasi/mutasi', 'refresh');
	}

	function insert_data()
	{
		$data = array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'id_mutasi' => $this->input->post('id_mutasi'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'tanggal' => $this->input->post('tanggal'));

		$this->mutasi_db->insert($data);
		redirect('headoffice/hrd/cadm_mutasi/mutasi', 'refresh');
	}

	function delete_data()
	{
		$id_mutasi = $this->input->post('id_mutasi');
		$where = array ('id_mutasi' => $id_mutasi);
		$this->mutasi_db->delete($where);
		redirect('headoffice/hrd/cadm_mutasi/mutasi', 'refresh');
	}
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
}
