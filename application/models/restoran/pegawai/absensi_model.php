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
}
 ?>