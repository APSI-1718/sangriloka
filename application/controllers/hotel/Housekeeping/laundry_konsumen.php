
<?php 
/**
* 
*/
class laundry_konsumen extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
	}
	function index(){
		$data['data_laundry_konsumen'] = $this->Crud_Model->select('laundry_konsumen');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/laundry_konsumen',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	function tambah_laundry_konsumen(){
		$data = array (
			'Nama_Laundry' => $this->input->post('Nama_Laundry'),
			'Jenis_Laundry' => $this->input->post('Jenis_Laundry'),
			'Berat_Laundry' => $this->input->post('Berat_Laundry'),
			'Total_Laundry' => $this->input->post('Total_Laundry'),
			'Status_Cucian' => $this->input->post('Status_Cucian'),
			);

		$this->Crud_Model->insert('laundry_konsumen',$data);
		echo "<script type='text/javascript'>alert('Data laundry = ".$this->input->post('Nama_Laundry')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Hotel/Housekeeping/laundry_konsumen';		
		redirect($link,'refresh');


	}
	function update_laundry_konsumen(){
		$data = array (
			'Nama_Laundry' => $this->input->post('Nama_Laundry'),
			'Jenis_Laundry' => $this->input->post('Jenis_Laundry'),
			'Berat_Laundry' => $this->input->post('Berat_Laundry'),
			'Total_Laundry' => $this->input->post('Total_Laundry'),
			'Status_Cucian' => $this->input->post('Status_Cucian'),
			);
		$where = array('Nama_Laundry' => $this->input->post('Nama_Laundry'));
		$this->Crud_Model->update('laundry_konsumen', $data, $where);
		echo "<script type='text/javascript'>alert('Data laundry = ".$this->input->post('Nama_Laundry')." Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/laundry_konsumen';
		redirect($link,'refresh');

	}
	function hapus_laundry_konsumen($id){
		$where = array('Nama_Laundry' => $id);
		$this->Crud_Model->delete('laundry_konsumen', $where);
		echo "<script type='text/javascript'>alert('Data laundry hotel = ".$id." Berhasil di Hapus');</script>";		
		$link = base_url().'Hotel/Housekeeping/laundry_konsumen';
		redirect($link,'refresh');		
	}
}
 ?>