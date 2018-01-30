<?php 
/**
* 
*/
class Pembagian_tugas_model extends ci_model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function status_ck()
	{
		$bulan = date('m');
		$tahun = date('Y');
		$tahun = substr($tahun,2,2);
		$hari = date('d');
		$j = $tahun.$bulan.$hari;
		$query = $this->db->query(
					"SELECT IFNULL(MAX(SUBSTRING(status_ck,7,4)),0)+1 AS no_urut   
			 		from kontol_kerja
			 		WHERE SUBSTRING(status_ck,1,6) = '".$j."'
			 		");
		$data = $query->row_array();
		$nourut = sprintf("%04s",$data['no_urut']);
		$kode = $tahun.$bulan.$hari.$nourut;
		return $kode;
	}	
}
 ?>