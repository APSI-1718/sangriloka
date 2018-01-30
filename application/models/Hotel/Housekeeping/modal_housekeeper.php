<?php 
/**
* 
*/
class modal_housekeeper extends ci_model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function id_housekeeper()
	{
		$bulan = date('m');
		$tahun = date('Y');
		$tahun = substr($tahun,2,2);
		$j = "SL".$tahun.$bulan;
		$query = $this->db->query(
					"SELECT IFNULL(MAX(SUBSTRING(id_pegawai,7,3)),0)+1 AS no_urut   
			 		from pegawai
			 		WHERE SUBSTRING(id_Pegawai,1,6) = '".$j."'
			 		");
		$data = $query->row_array();
		$nourut = sprintf("%03s",$data['no_urut']);
		$kode = "SL".$tahun.$bulan.$nourut;
		return $kode;
	}	
}
 ?>