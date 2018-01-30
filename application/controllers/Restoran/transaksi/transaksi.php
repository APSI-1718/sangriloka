<?php 
/**
* 
*/
class transaksi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('restoran/transaksi/m_transaksi');
		$this->load->model('restoran/transaksi/m_menumakanan');
	}
	
	function index(){
		$data['data'] = $this->m_transaksi->get();	
		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/template/menu');
		$this->load->view('restoran/transaksi/v_transaksi', $data);
		$this->load->view('restoran/transaksi/template/footer');	
	}

	function insert_data()
	{
		$data = array (
				'id_pemesanan' => $this->input->post('id_pemesanan'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
				'total' => $this->input->post('totalNum'),
				'total_bayar' => $this->input->post('total_bayar'),
				'kembali' => $this->input->post('kembaliNum'),
				'statusBayar' => "Sudah Dibayar"
		);
		$dataPemesanan = array('statusBayar' => "Sudah Dibayar");
		$where = array ('id_pemesanan' => $this->input->post('id_pemesanan'));
		$this->m_menumakanan->updatepesan($dataPemesanan,$where);
		$this->m_transaksi->insert($data);
		$this->cetak($this->input->post('id_pemesanan'));
	}

	function edit_data()
	{
		$data = array (
				'id_transaksi' => $this->input->post('id_transaksi'),
				'id_pesanan' => $this->input->post('id_pesanan'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
				'total_transaksi' => $this->input->post('total_transaksi')
		);

		$where = array ('id_transaksi' => $id);
		$this->m_transaksi->update($data, $where);
		redirect('transaksi','refresh');
	}

	function delete_data()
	{

		$id = $this->input->post('id_transaksi');
		$where = array ('id_transaksi' => $id);
		$this->m_transaksi->delete($where);
		redirect('transaksi','refresh');
	}

	function cetak($where)
	{
		$data['pesanan'] = $this->m_menumakanan->pesanan($where);
		$this->load->view('restoran/transaksi/v_cetak',$data);
	}
}
?>