<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_makanan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/transaksi/M_menumakanan');
		$this->load->model('restoran/kitchen/M_kelolaorder');
	}

	function index(){
		
		$jumlah = $this->M_menumakanan->hitung_data('id_menu') ;

		$config = array();
		$config['base_url'] = base_url() . 'Menu_makanan/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 15;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['menumkn'] = $this->M_menumakanan->tampil_pagination_produk($config['per_page'], $this->uri->segment(3));
		$data['order'] = $this->M_kelolaorder->jumlah_order();

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_menumakanan', $data);
		$this->load->view('restoran/transaksi/template/footer2');
				
	}


	function tampil_kategori($ktg){
		
		$jumlah = $this->M_menumakanan->hitung_data('id_menu') ;

		$config = array();
		$config['base_url'] = base_url() . 'Menu_makanan/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 20;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['menumkn'] = $this->M_menumakanan->tampil_pagination_produk($config['per_page'], $this->uri->segment(3)); 
		
			$data['menumkn'] = $this->M_menumakanan->tampil_kategori($ktg);
			$data['order'] = $this->M_kelolaorder->jumlah_order();

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_menukategori', $data);
		$this->load->view('restoran/transaksi/template/footer2');		 
			
	}


}
 ?>