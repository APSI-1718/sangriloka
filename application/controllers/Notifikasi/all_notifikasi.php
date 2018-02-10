<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class all_notifikasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function index()
	{
		$data2['notifikasi']=$this->notifikasi_db->select();


		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/all_notifikasi');
		$this->load->view('notifikasi/template/footer');

	}

	function delete_data()
	{
		$id_notifikasi = $this->input->post('id');
		$where = array ('id_notifikasi' => $id_notifikasi);
		$this->notifikasi_db->delete($where);
		redirect('notifikasi/all_notifikasi', 'refresh');
	}
}