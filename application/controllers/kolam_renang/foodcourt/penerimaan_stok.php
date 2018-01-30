<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penerimaan_stok extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_penerimaan_stok');
	}

	public function index()
	{
		$data['penerimaan'] = $this->M_penerimaan_stok->select();
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_penerimaan_stok', $data);
		$this->load->view('template/footer');
	}

}

/* End of file penerimaan_stok.php */
/* Location: ./application/controllers/penerimaan_stok.php */