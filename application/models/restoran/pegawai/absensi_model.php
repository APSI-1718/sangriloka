<?php 
/**
* 
*/
class absensi_model extends ci_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function tampil_data_absen(){
		$where = array('tanggal' => date('Y-m-d'));
		$this->db->select('*');    
		$this->db->from('absensi');
		$this->db->join('pegawai', 'absensi.id_pegawai = pegawai.id_pegawai');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();			
	}
<<<<<<< HEAD
=======
	function jumlah_absensi_sekarang(){
		$where  = array('tanggal' => date('Y-m-d'));
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('absensi');
		$num = $query->num_rows();
		return $num;
	}

	function tampil_status($id_pegawai){
		$where  = array('id_pegawai' => $id_pegawai);
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('absensi');
		$data = $query->row_array();
		$status = $data['status'];
		return $status;
	}
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
}
 ?>