<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_makanan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/transaksi/m_menumakanan');
		$this->load->model('restoran/kitchen/M_kelolaorder');
	}

	function index(){
		
		$jumlah = $this->m_menumakanan->hitung_data('id_menu') ;

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
		$data['menumkn'] = $this->m_menumakanan->tampil_pagination_produk($config['per_page'], $this->uri->segment(3));
		$data['order'] = $this->M_kelolaorder->jumlah_order();

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_daftarpesanan', $data);
		$this->load->view('restoran/transaksi/template/footer2');
				
	}


	function tampil_kategori($ktg){
		
		$jumlah = $this->m_menumakanan->hitung_data('id_menu') ;

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
		$data['menumkn'] = $this->m_menumakanan->tampil_pagination_produk($config['per_page'], $this->uri->segment(3)); 
		
			$data['menumkn'] = $this->m_menumakanan->tampil_kategori($ktg);
			$data['order'] = $this->M_kelolaorder->jumlah_order();

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_menukategori', $data);
		$this->load->view('restoran/transaksi/template/footer2');		 
			
	}

	function insert_data(){
		$data = array ( 
			'id_pemesanan' 	=> $id['idpemesanan'] = $this->M_kelolaorder->insert_id_pemesanan(),
			'nama_menu' => $this->input->post('nama_menu'),
			'Qty' => $this->input->post('Qty'),
			'total' => $this->input->post('total'),
			'tgl_pemesanan' => $this->input->post('tgl_pemesanan'),
			'no_meja' => $this->input->post('no_meja'),
			'status' 		=> $this->input->post('status'),
			'statusBayar'   => $this->input->post('statusBayar'),
			);
		$this->m_menumakanan->insert_data($data);
		echo '<script>alert("Pesanan telah diterima");</script>';
		redirect('restoran/kitchen/kelola_order/lihat_pesanan', 'refresh'); 
	}

	function success(){
		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_lihatpesanan', $data);
		$this->load->view('restoran/transaksi/template/footer2');
	}
}
 ?>