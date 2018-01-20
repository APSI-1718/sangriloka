<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kinerja_peg extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/kinerja_db');
	}

	public function kinerja()
	{
		$data['hrd'] = $this->kinerja_db->select();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/kinerja_peg', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_kinerja' => $this->input->post('id_kinerja'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'nama' => $this->input->post('nama'),
			'posisi' => $this->input->post('posisi'),
			'jabatan' => $this->input->post('jabatan'),
			'tanggal' => $this->input->post('tanggal'),
			'pro_dem' => $this->input->post('pro_dem'));

		$this->kinerja_db->insert($data);
		redirect('headoffice/hrd/kinerja_peg/kinerja', 'refresh');
	}

	function edit_data()
	{
		$id_kinerja = $this->input->post('id_kinerja');

		if ($this->input->post('id_kinerja') == null) {
			$data = array (
				'id_kinerja' => $this->input->post('id_kinerja'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'));
		} else {
				$data = array (
				'id_kinerja' => $this->input->post('id_kinerja'),
				'id_pegawai' => $this->input->post('id_pegawai'),
				'nama' => $this->input->post('nama'),
				'tanggal' => $this->input->post('tanggal'),
				'posisi' => $this->input->post('posisi'),
				'jabatan' => $this->input->post('jabatan'));
		}
			$where = array ('id_kinerja' => $id_kinerja);
			$this->kinerja_db->update($data, $where);
			redirect('headoffice/hrd/kinerja_peg/kinerja', 'refresh');
	}

	function delete_data()
	{
		$id_kinerja = $this->input->post('id_kinerja');
		$where = array ('id_kinerja' => $id_kinerja);
		$this->kinerja_db->delete($where);
		redirect('headoffice/hrd/kinerja_peg/kinerja', 'refresh');
	}
}