<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_order extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/kitchen/M_kelolaorder');
	}

	public function index()
	{
		$data['kitchen']= $this->M_kelolaorder->select();

		$this->load->view('template/header');
		$this->load->view('restoran/kitchen/menu');
		$this->load->view('restoran/kitchen/kelola-order', $data);
		$this->load->view('template/footer');
	}

	function set_status() {
				$id = $this->input->post('id_pesanan');

				$status = $this->input->post('status');

				if ($status == 1) {
					 $data = array (
				 	'status' => "2"
				 	);
				} else if ($status == 2) {
					$data = array (
				 	'status' => "3"
				 	);
				} else {
					$data = array (
				 	'status' => "1"
				 	);
				}

			$where = array ('id_pesanan' => $id);
			$this->M_kelolaorder->update($data, $where);
			redirect('restoran/kitchen/kelola_order', 'refresh');
		}
}
