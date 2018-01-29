<?php
class cari_konten extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('notifikasi/C_konten');
	}
 	
	public function hasil()
	{
		$data2['cari'] = $this->C_konten->cariData();
		$this->load->view('template/header');
		$this->load->view('notifikasi/home');
		$this->load->view('notifikasi/hasil_cari', $data2);
		$this->load->view('template/footer');
	}
}