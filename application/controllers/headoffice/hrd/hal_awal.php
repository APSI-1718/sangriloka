<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_awal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/absen_db');
	}

	public function login()
	{
		$data['hrd'] = $this->absen_db->select();

		$this->load->view('headoffice/hrd/login');
	}

	function insert_data()
	{
		$data = array(
			'id_pegawai' => $this->input->post('id_pegawai'),
			'tanggal' => $this->input->post('tanggal'),
			'status' => $this->input->post('status'));

		$this->absen_db->insert($data);
		redirect('headoffice/hrd/hal_awal/login', 'refresh');
	}
}