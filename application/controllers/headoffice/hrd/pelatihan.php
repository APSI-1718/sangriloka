<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelatihan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/pelatihan_db');
	}

	public function pelpeg()
	{
		$data['hrd'] = $this->pelatihan_db->select();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/pelatihan', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_pelatihan' => $this->input->post('id_pelatihan'),
			'tanggal' => $this->input->post('tanggal'),
			'id_mutasi' => $this->input->post('id_mutasi'),
			'nama' => $this->input->post('nama'),
			'posisi' => $this->input->post('posisi'),
			'jabatan' => $this->input->post('jabatan'),);

		$this->pelatihan_db->insert($data);
		redirect('headoffice/hrd/pelatihan/pelpeg', 'refresh');
	}

function delete_data()
	{
		$id_pelatihan = $this->input->post('id_pelatihan');
		$where = array ('id_pelatihan' => $id_pelatihan);
		$this->pelatihan_db->delete($where);
		redirect('headoffice/hrd/pelatihan/pelpeg', 'refresh');
	}
}
