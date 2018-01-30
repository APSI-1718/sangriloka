<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_cuti extends CI_Controller {

<<<<<<< HEAD
	public function cuti()
	{
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		/*$this->load->view('headoffice/hrd/modal');*/
		$this->load->view('headoffice/hrd/adm_cuti');
		$this->load->view('template/footer');
	}
=======
	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/cuti_db');
	}

	public function cuti()
	{
		$data['kodeunik'] = $this->cuti_db->buat_kode();
		$data['gabungcuti'] = $this->cuti_db->tampilcuti();

		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		$this->load->view('headoffice/hrd/modalhrd');
		$this->load->view('headoffice/hrd/adm_cuti',$data);
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'id_cuti' => $this->input->post('id_cuti'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'tgl_akhir' => $this->input->post('tgl_akhir'),
			'ket' => $this->input->post('ket'));

		$this->cuti_db->insert($data);
		redirect('headoffice/hrd/cadm_cuti/cuti', 'refresh');
	}

	function delete_data()
	{
		$id_cuti = $this->input->post('id_cuti');
		$where = array ('id_cuti' => $id_cuti);
		$this->cuti_db->delete($where);
		redirect('headoffice/hrd/cadm_cuti/cuti', 'refresh');
	}
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
}
