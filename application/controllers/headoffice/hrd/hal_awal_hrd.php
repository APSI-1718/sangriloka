<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal_hrd extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/pegawai_db');
	}

	public function beranda()
	{
		$data['hrd'] = $this->pegawai_db->select();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/beranda', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_mutasi' => $this->input->post('id_mutasi'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'nama' => $this->input->post('nama'),
			'posisi' => $this->input->post('posisi'),
			'jabatan' => $this->input->post('jabatan'),
			'alamat' => $this->input->post('alamat'),
			'j_kelamin' => $this->input->post('j_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'no_tlp' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'));

		$this->pegawai_db->insert($data);
		redirect('headoffice/hrd/hal_awal_hrd/beranda', 'refresh');
	}

	function edit_data()
	{
		$id_pegawai = $this->input->post('id_pegawai');

		if ($this->input->post('id_pegawai') == null) {
			$data = array (
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'),
				'alamat' => $this->input->post('alamat'),
				'j_kelamin' => $this->input->post('j_kelamin'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'));
		} else {
				$data = array (
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'),
				'alamat' => $this->input->post('alamat'),
				'j_kelamin' => $this->input->post('j_kelamin'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'));
		}
			$where = array ('id_pegawai' => $id_pegawai);
			$this->pegawai_db->update($data, $where);
			redirect('headoffice/hrd/hal_awal_hrd/beranda', 'refresh');
	}

	function delete_data()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$where = array ('id_pegawai' => $id_pegawai);
		$this->pegawai_db->delete($where);
		redirect('headoffice/hrd/hal_awal_hrd/beranda', 'refresh');
	}
}
