<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuti_peg extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/cuti_db');
	}
	
	public function cuti()
	{
		$data['hrd'] = $this->cuti_db->select();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/cutipeg', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_cuti' => $this->input->post('id_cuti'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'nama' => $this->input->post('nama'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'tgl_akhir' => $this->input->post('tgl_akhir'),
			'keterangan' => $this->input->post('keterangan'));

		$this->cuti_db->insert($data);
		redirect('headoffice/hrd/cuti_peg/cuti', 'refresh');
	}

	function delete_data()
	{
		$id_cuti = $this->input->post('id_cuti');
		$where = array ('id_cuti' => $id_cuti);
		$this->cuti_db->delete($where);
		redirect('headoffice/hrd/cuti_peg/cuti', 'refresh');
	}
}
