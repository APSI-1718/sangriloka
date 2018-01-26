<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadm_mutasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('headoffice/hrd/mutasi_db');
		$this->table = array('tbl1' => 'rekrutmen','tbl2' => 'rekrutmen');
	}

	public function mutasi()
	{
		$data['kodeunik'] = $this->mutasi_db->buat_kode();
		$data['nipoto'] = $this->mutasi_db->buat_nip();
		$data['mutpeg'] = $this->mutasi_db->select();
		$this->load->view('template/header');
		$this->load->view('headoffice/hrd/adm_menu');
		$this->load->view('headoffice/hrd/modalhrd',$data);
		$this->load->view('headoffice/hrd/adm_mutasi', $data);
		$this->load->view('template/footer');
	}
}
