
<?php 
/**
* 
*/
class ruangan extends Ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hotel/Housekeeping/Crud_Model');
	}
	function index(){
		$data['data_ruangan'] = $this->Crud_Model->select('ruangan');
		$this->load->view('Hotel/Housekeeping/Template/Header');
		$this->load->view('Hotel/Housekeeping/Template/Menu');
		$this->load->view('Hotel/Housekeeping/kelola_ruangan',$data);
		$this->load->view('Hotel/Housekeeping/Template/Footer');		
	}
	function update_status($id,$status){
		$data = array (
			'status' => $status,
			);
		$where = array('ID_Ruangan' => $id);
		$this->Crud_Model->update('ruangan', $data, $where);
		echo "<script type='text/javascript'>alert('Data ID Berhasil di Sunting');</script>";		
		$link = base_url().'Hotel/Housekeeping/ruangan';
		redirect($link,'refresh');		
	}
}
 ?>