<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekrut_hrd extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/rekrut_db');
	}

	public function rekrut()
	{
		$data['hrd'] = $this->rekrut_db->select();
		$data['kodeunik'] = $this->rekrut_db->buat_kode();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/menuhrd');
		$this->load->view('headoffice/hrd/modal');
		$this->load->view('headoffice/hrd/rekrut_form', $data);
		$this->load->view('template/footer');
	}

	function data_rekrut()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');

		if ($this->input->post('no_pendaftaran') == null) {
			$data = array (
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'j_kelamin' => $this->input->post('j_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'tingkat_pend' => $this->input->post('tingkat_pend'));
		}
			$where = array ('no_pendaftaran' => $no_pendaftaran);
			$this->rekrut_db->update($data, $where);
			redirect('rekrut_hrd', 'refresh');
	}

	function insert_data()
	{
		$data = array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'j_kelamin' => $this->input->post('j_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'tingkat_pend' => $this->input->post('tingkat_pend'));

		$this->rekrut_db->insert($data);
		redirect('headoffice/hrd/rekrut_hrd/rekrut', 'refresh');
	}

	function delete_data()
	{
		$no_pendaftaran = $this->input->post('no_pendaftaran');
		$where = array ('no_pendaftaran' => $no_pendaftaran);
		$this->rekrut_db->delete($where);
		redirect('headoffice/hrd/rekrut_hrd/rekrut', 'refresh');
	}
}
