<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chrd_rekrutmen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/rekrut_db');
	}

	public function rekrutmen()
	{
		$data['hrd'] = $this->rekrut_db->select();
		$data['kodeunik'] = $this->rekrut_db->buat_kode();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/hrd_menu');
		$this->load->view('headoffice/hrd/modalhrd');
		$this->load->view('headoffice/hrd/hrd_rekrutmen', $data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
<<<<<<< HEAD
=======
			'tanggal' => $this->input->post('tanggal'),
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'j_kelamin' => $this->input->post('j_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
<<<<<<< HEAD
=======
			'no_tlp' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'),
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
			'tingkat_pend' => $this->input->post('tingkat_pend'));

		$this->rekrut_db->insert($data);
		redirect('headoffice/hrd/chrd_rekrutmen/rekrutmen', 'refresh');
	}

	function delete_data()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$where = array ('no_pendaftaran' => $no_pendaftaran);
		$this->rekrut_db->delete($where);
		redirect('headoffice/hrd/chrd_rekrutmen/rekrutmen', 'refresh');
	}
}
