<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_detail_menu');
		$this->load->model('kolam_renang/foodcourt/M_kelola_stok');
		$this->load->model('kolam_renang/foodcourt/M_kelola_menu');
	}

	public function index()
	{	$id_menu = $this->input->get('id');
		$where = array('id_menu' => $id_menu );
		$data['data'] = $this->M_detail_menu->ambildata($where);
		$data['data2'] = $this->M_detail_menu->ambildata2($where);
		$data['stok'] = $this->M_detail_menu->ambilstok($where);
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_detail_menu',$data);
		$this->load->view('template/footer');
	}

	
	function tambah_detail_menu() {

		$id['id_detail_menu'] = $this->M_detail_menu->insert_id_detail_menu();
        $data 	=	 array('id_detail_menu'	=>	$id['id_detail_menu'],
		                   'id_menu'	=> $this->input->post('id_menu'),
		                   'id_stok'	=> $this->input->post('id_stok'),
		                   'jumlahstok' => $this->input->post('jumlahstok'));

		$this->M_detail_menu->insert($data);

		$this->session->set_flashdata('tambahdata', "Data berhasil ditambahkan");
		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);

		}

	function edit_form() {

		$id = $this->input->get('id_detail_menu');
		$where = array ('id_detail_menu' => $id);
		$data['detail_menu_foodcourt'] = $this->M_detail_menu->select($where);
		$this->load->view('edit-form', $data);
		}

		function ubah_detail_menu() {

			$id = $this->input->post('id_detail_menu');
			$data = array (
				 			'id_menu' => $this->input->post('id_menu'),
				 			'id_stok' => $this->input->post('id_stok'),
				 			'jumlahstok' => $this->input->post('jumlahstok')
				 			);
			$where = array ('id_detail_menu' => $id);
			$this->session->set_flashdata('editdata', "Data berhasil diubah");
			$this->M_detail_menu->update($data, $where);
			$url = $_SERVER['HTTP_REFERER'];
			redirect($url);

		}

	function hapus_detail_menu(){ 

		$id = $this->input->post('id_detail_menu');
		$where = array ('id_detail_menu' => $id); 
		$this->M_detail_menu->delete($where);

		$this->session->set_flashdata('deletedata', "Data berhasil dihapus");
			$url = $_SERVER['HTTP_REFERER'];
			redirect($url);

		}

}