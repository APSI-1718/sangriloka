<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_detail_penjualan');
		$this->load->model('kolam_renang/foodcourt/M_kelola_menu');
	}

	public function index()
	{
		// $id_penjualan = $this->input->get('id');
		// $where = array('id_penjualan' => $id_penjualan );
		$data['penjualan_foodcourt'] = $this->M_detail_penjualan->tampil();
		$data['detail_penjualan_foodcourt'] = $this->M_detail_penjualan->select();
		$data['data'] = $this->M_detail_penjualan->inner_join('detail_penjualan_foodcourt','menu_foodcourt','penjualan_foodcourt','id_menu','id_penjualan');
		$data['menu_foodcourt'] = $this->M_kelola_menu->select();
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_daftar_penjualan', $data);
		$this->load->view('template/footer');
	}

	function edit_form() {
				$id = $this->input->get('id_penjualan');
				$where = array ('id_penjualan' => $id);
				$data['penjualan_foodcourt'] = $this->M_detail_penjualan->tampil($where);
				$this->load->view('edit-form', $data);
			}

			function lihat_detail_penjualan(){
				$this->load->view('kolam_renang/foodcourt/v_modal_dpenjualan', $data);
			}

}

/* End of file daftar_penjualan.php */
/* Location: ./application/controllers/daftar_penjualan.php */