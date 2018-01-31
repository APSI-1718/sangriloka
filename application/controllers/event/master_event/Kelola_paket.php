<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_paket extends CI_Controller {


	public function __construct(){
		parent::__construct();
		//memuat model
		$this->load->model('event/master_event/M_Kelola_paket');
	}


	public function KelolaPaket(){
											//Table Kelola Paket
		$data['paket'] = $this->M_Kelola_paket->select();
		$this->load->view('event/master_event/template/header');
		$this->load->view('event/master_event/template/menu');
		$this->load->view('event/master_event/template/table/Kelola_paket',$data);
		$this->load->view('event/master_event/template/footer');

	}
	public function insert(){

		$data = array(
			'id_paket' => $this->M_Kelola_paket->kode(),
			'nama_paket' => $this->input->post('nama-paket'),
			'harga_paket' => $this->input->post('harga-paket'),
			'detail_paket' => $this->input->post('detail-paket'),
			);
		$this->M_Kelola_paket->insert($data);
		redirect('event/master_event/kelola_paket/KelolaPaket','refresh');
	}
	public function update(){
		$id =  $this->input->post('id-paket');
		$data = array(
			'nama_paket' => $this->input->post('nama-paket'),
			'harga_paket' => $this->input->post('harga-paket'),
			'detail_paket' => $this->input->post('detail-paket'),
			);
		$where = array('id_paket' =>  $id);
		$this->M_Kelola_paket->update($data,$where);
		redirect('event/master_event/kelola_paket/KelolaPaket','refresh');
	}

	public function delete(){
		$id =  $this->input->post('id_paket');

		$where = array('id_paket' =>  $id);
		$this->M_Kelola_paket->delete($where);
		redirect('event/master_event/kelola_paket/KelolaPaket','refresh');

	}
}	