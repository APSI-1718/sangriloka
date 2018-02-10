<?php 
/**
* 
*/
class cart extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('restoran/transaksi/m_cart');
		$this->load->model('restoran/kitchen/M_kelolapesanan');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['menu'] = $this->m_cart->get_all();
		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_cart',$data);
		$this->load->view('restoran/transaksi/template/footer2');
	}

	function tambah()
	{
		$tambah_data = array(
			'id' => $this->input->post('id_pemesanan'),
			'name' => $this->input->post('nama_menu'),
			'price' => $this->input->post('harga_menu'),
			'qty' => 1
			);
		$this->cart->insert($tambah_data);
		redirect('Restoran/transaksi/cart/pesanan_view','refresh');
	}

	function hapus($rowid)
	{
		if($rowid == "all")
		{
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid' => $rowid,
				'qty' => 0
				);
			$this->cart->update($data);
		}
		redirect('Restoran/transaksi/cart');
	}

	function update_cart()
	{
		$cart_info = $_POST['cart'];
		foreach ($cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['harga_menu'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];

		$data = array(
			'rowid' => $rowid,
			'price' => $price,
			'amount' => $amount,
			'qty' => $qty
		);
		$this->cart->update($data);
		}
		redirect('Restoran/transaksi/cart');
	}

	function pesanan_view()
	{
		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_pesanan');
		$this->load->view('restoran/transaksi/template/footer2');
	}

	public function save_order()
	{
		$data = array(
		'id_pemesanan' => $id['idpemesanan'] = $this->M_kelolaorder->insert_id_pemesanan(),
		'nama_menu' => $this->input->post('nama_menu'),
		'Qty' => $this->input->post('Qty'),
		'total' => $this->input->post('total'),
		'no_meja' => $this->input->post('no_meja'),
		'tgl_pemesanan' => $this->input->post('tgl_pemesanan'),
		'status' => $this->input->post('status'),
		'statusBayar' => $this->input->post('statusBayar')
		);

		$this->m_cart->insert_meja($data);
		echo '<script>alert("Pesanan telah diterima");</script>';
		redirect('Restoran/kitchen/kelola_pesanan/lihat_pesanan','refresh');
		$this->cart->destroy();
	}

	function tampil_kategori($ktg){
		
		
		$data['menu'] = $this->m_cart->tampil_kategori($ktg);
			

		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/v_menukategori', $data);
		$this->load->view('restoran/transaksi/template/footer2');		 
			
	}
}

 ?>