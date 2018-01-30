<?php 
/**
* 
*/
class Kontrol_kerja_model extends ci_model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function tampil_status_ck($id){
		$query = $this->db->query("SELECT * FROM `pegawai` where id_tugas = '$id' group BY status_ck");		
		return $query->result_array();		
	}
	function update_status_ck($id){
		$query = $this->db->query("UPDATE `pegawai` SET `status_ck` = '0' where id_tugas = '$id'");
		return true;			
	}
	function inner_join_kk($table1,$table2,$table3,$where1,$where2){
		$this->db->select('*');    
		$this->db->from($table1);
		$this->db->join($table2, $table1.'.'.$where1.' = '.$table2.'.'.$where1);
		$this->db->join($table3, $table1.'.'.$where2.' = '.$table3.'.'.$where2);
		$this->db->order_by("status_ck", "asc");		
		$query = $this->db->get();	
		return $query->result_array();			

	}	
}
 ?>	

