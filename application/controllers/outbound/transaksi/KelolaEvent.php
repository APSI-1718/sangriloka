<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaEvent extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//memuat model
		$this->load->model('outbound/transaksi/M_Kelola_catering');
	}

	public function index(){
	$data['catering'] = $this->M_Kelola_catering->select();
	$this->load->view('outbound/transaksi/template/header');
	$this->load->view('outbound/transaksi/template/menu');
	$this->load->view('outbound/transaksi/template/table/kelola-catering',$data);
	$this->load->view('outbound/transaksi/template/footer');
}

public function insert(){

	$data = array(
		'id_catering' => $this->input->post('id-catering'),
		'nama_catering' => $this->input->post('nama-catering'),
		'harga' => $this->input->post('harga'),
		'keterangan' => $this->input->post('keterangan'),
		'id_tiket' => $this->input->post('id-tiket'),
		'id_pembelian' => $this->input->post('id-pembelian'),
		);
	$this->M_Kelola_catering->insert($data);
	redirect('outbound/transaksi/kelolacatering/','refresh');
}
public function update(){
	$id =  $this->input->post('id-catering');
	$data = array(

		'nama_catering' => $this->input->post('nama-catering'),
		'harga' => $this->input->post('harga'),
		'keterangan' => $this->input->post('keterangan'),
		);
	$where = array('id_catering' =>  $id);
	$this->M_Kelola_catering->update($data,$where);
	redirect('outbound/transaksi/kelolacatering/','refresh');
}

public function delete(){
	$id =  $this->input->post('id-catering');

	$where = array('id_catering' =>  $id);
	$this->M_Kelola_catering->delete($where);
	redirect('outbound/transaksi/kelolacatering/','refresh');

}

}
