
<?php 
/**
* 
*/
class jadwal extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
	}
	function index(){
		$data['data_jadwal'] = $this->Crud_Model->select('jadwal');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/jadwal_housekeeper',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	function tambah_jadwal(){
		$data = array (
			'ID_Jadwal' => $this->input->post('ID_Jadwal'),
			'tanggal' => $this->input->post('tanggal'),
			'shif' => $this->input->post('shif'),
			);

		$this->Crud_Model->insert('jadwal',$data);
		echo "<script type='text/javascript'>alert('Data ID jadwal = ".$this->input->post('ID_Jadwal')." Berhasil di Tambahkan');</script>";	
		$link = base_url().'Hotel/Housekeeping/jadwal';		
		redirect($link,'refresh');


	}
	function update_jadwal(){
		$data = array (
			'ID_Jadwal' => $this->input->post('ID_Jadwal'),
			'tanggal' => $this->input->post('tanggal'),
			'shif' => $this->input->post('shif'),
			);
		$where = array('ID_Jadwal' => $this->input->post('ID_Jadwal'));
		$this->Crud_Model->update('jadwal', $data, $where);
		echo "<script type='text/javascript'>alert('Data ID jadwal = ".$this->input->post('ID_Jadwal')." Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/jadwal';
		redirect($link,'refresh');

	}
	function hapus_jadwal($id){
		$where = array('ID_Jadwal' => $id);
		$this->Crud_Model->delete('jadwal', $where);
		echo "<script type='text/javascript'>alert('Data ID jadwal = ".$id." Berhasil di Hapus');</script>";		
		$link = base_url().'Hotel/Housekeeping/jadwal';
		redirect($link,'refresh');		
	}
}
 ?>