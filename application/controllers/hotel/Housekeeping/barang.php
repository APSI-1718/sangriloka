
<?php 
/**
* 
*/
class barang extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
	}
	function index(){
		$data['data_barang'] = $this->Crud_Model->select('barang');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/master_barang',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	function tambah_barang(){
		$data = array (
			'id_barang' => $this->input->post('id_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'keterangan_barang' => $this->input->post('keterangan_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'jumlah_barang_bagus' => $this->input->post('jumlah_barang_bagus'),
			'jumlah_barang_rusak' => $this->input->post('jumlah_barang_rusak'),
			'status_barang' => $this->input->post('status_barang'),
			);

		$this->Crud_Model->insert('barang',$data);
		echo "<script type='text/javascript'>alert('Data ID barang = ".$this->input->post('id_barang')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Hotel/Housekeeping/barang';		
		redirect($link,'refresh');


	}
	function update_barang(){
		$data = array (
			'id_barang' => $this->input->post('id_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'jenis_barang' => $this->input->post('jenis_barang'),
			'keterangan_barang' => $this->input->post('keterangan_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'jumlah_barang_bagus' => $this->input->post('jumlah_barang_bagus'),
			'jumlah_barang_rusak' => $this->input->post('jumlah_barang_rusak'),
			'status_barang' => $this->input->post('status_barang'),
			);
		$where = array('id_barang' => $this->input->post('id_barang'));
		$this->Crud_Model->update('barang', $data, $where);
		echo "<script type='text/javascript'>alert('Data ID barang = ".$this->input->post('id_barang')." Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/barang';
		redirect($link,'refresh');

	}
	function hapus_barang($id){
		$where = array('id_barang' => $id);
		$this->Crud_Model->delete('barang', $where);
		echo "<script type='text/javascript'>alert('Data ID barang = ".$id." Berhasil di Hapus');</script>";		
		$link = base_url().'Hotel/Housekeeping/barang';
		redirect($link,'refresh');		
	}
	function histori_pengajuan(){
		$data['data_pengajuan'] = $this->Crud_Model->select('pengajuan');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/histori_pengajuan',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');
	}
	function pengajuan(){
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/pengajuan_barang');
		$this->load->view('Hotel/Housekeeping/Template/Footer');
	}
	function kirim_pengajuan(){
		$data = array (
			'id_Pengajuan' => $this->input->post('id_Pengajuan'),
			'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
			'keterangan_pengajuan' => $this->input->post('keterangan_pengajuan'),
			'jumlah' => $this->input->post('jumlah'),
			'jenis' => $this->input->post('jenis'),
			);

		$this->Crud_Model->insert('pengajuan',$data);
		echo "<script type='text/javascript'>alert('Data ID Pengajuan = ".$this->input->post('id_pengajuan')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Hotel/Housekeeping/barang/histori_pengajuan';		
		redirect($link,'refresh');
	}
	function penerimaan(){
		$data['data_penerimaan'] = $this->Crud_Model->select('penerimaan');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/penerimaan_barang',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');
	}
	function update_penerimaan($id,$status){
		$data = array (
			'status_penerimaan' => $status,
		);
		$where = array('id_penerimaan' => $id);
		$this->Crud_Model->update('penerimaan', $data, $where);
		echo "<script type='text/javascript'>alert('Data ID Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/barang/penerimaan';
		redirect($link,'refresh');		
	}
}
 ?>