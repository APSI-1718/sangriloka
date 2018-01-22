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
}
 ?>	

