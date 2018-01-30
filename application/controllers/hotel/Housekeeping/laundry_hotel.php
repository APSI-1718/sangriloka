
<?php 
/**
* 
*/
class laundry_hotel extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
	}
	function index(){
		$data['data_laundry'] = $this->Crud_Model->select('laundry_hotel');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/laundry_hotel',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	function tambah_laundry_hotel(){
		$data = array (
			'Nama_Cucian' => $this->input->post('Nama_Cucian'),
			'Jenis_cucian' => $this->input->post('Jenis_cucian'),
			'Berat_Cucian' => $this->input->post('Berat_Cucian'),
			'Tanggal_cucian' => $this->input->post('Tanggal_cucian'),
			);

		$this->Crud_Model->insert('laundry_hotel',$data);
		echo "<script type='text/javascript'>alert('Data laundry hotel = ".$this->input->post('Nama_Cucian')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Hotel/Housekeeping/laundry_hotel';		
		redirect($link,'refresh');


	}
	function update_laundry_hotel(){
		$data = array (
			'Nama_Cucian' => $this->input->post('Nama_Cucian'),
			'Jenis_cucian' => $this->input->post('Jenis_cucian'),
			'Berat_Cucian' => $this->input->post('Berat_Cucian'),
			'Tanggal_cucian' => $this->input->post('Tanggal_cucian'),
			);
		$where = array('Nama_Cucian' => $this->input->post('Nama_Cucian'));
		$this->Crud_Model->update('laundry_hotel', $data, $where);
		echo "<script type='text/javascript'>alert('Data laundry hotel = ".$this->input->post('Nama_Cucian')." Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/laundry_hotel';
		redirect($link,'refresh');

	}
	function hapus_laundry_hotel($id){
		$where = array('Nama_Cucian' => $id);
		$this->Crud_Model->delete('laundry_hotel', $where);
		echo "<script type='text/javascript'>alert('Data laundry hotel = ".$id." Berhasil di Hapus');</script>";		
		$link = base_url().'Hotel/Housekeeping/laundry_hotel';
		redirect($link,'refresh');		
	}
}
 ?>