<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agenda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('notifikasi/agenda_db');
		$this->load->model('notifikasi/notifikasi_db');
	}

	public function index()
	{
		$data2['notifikasi']=$this->notifikasi_db->select();
		$data['agenda']=$this->agenda_db->select();


		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/home', $data2);
		$this->load->view('notifikasi/agenda',$data);
	}

	function edit_data()
	{
		$id_agenda = $this->input->post('id');
			$data = array (
			'judul_agenda' => $this->input->post('title2'),
			'isi_agenda' => $this->input->post('descr2'));
		
			$where = array ('id_agenda' => $id_agenda);
			$this->agenda_db->update($data, $where);
			redirect('notifikasi/agenda', 'refresh');
	}

	function delete_data()
	{
		$id_agenda = $this->input->post('id');
		$where = array ('id_agenda' => $id_agenda);
		$this->agenda_db->delete($where);
		redirect('notifikasi/agenda', 'refresh');
	}
}