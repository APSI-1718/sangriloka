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

	public function lihat_pesanan()
	{
		$data['kitchen']= $this->M_kelolaorder->select();
		

		$this->load->view('template/header');
		$this->load->view('restoran/transaksi/v_lihatpesanan', $data);
		
	}

	function order_makanan(){
		$data = array ( 
			'id_pemesanan' 	=> $id['idpemesanan'] = $this->M_kelolaorder->insert_id_pemesanan(),
			'tgl_pemesanan' => $this->input->post('tgl_pemesanan'),
			'status' 		=> $this->input->post('status'),
			'statusBayar'   => $this->input->post('statusBayar'),
			'nama_menu'	 	=> $this->input->post('nama_menu'), 
			'qty' 			=> $this->input->post('qty'), 
			);

			 $this->M_kelolaorder->insert($data); 
			 redirect('restoran/kitchen/kelola_order/lihat_pesanan', 'refresh'); 
	}

	function set_status() {
				$id = $this->input->post('id_pemesanan');

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

			$where = array ('id_pemesanan' => $id);
			$this->M_kelolaorder->update($data, $where);
			redirect('restoran/kitchen/kelola_order', 'refresh');
		}


}
