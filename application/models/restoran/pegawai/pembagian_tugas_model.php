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
<<<<<<< HEAD
			 		from kontol_kerja
=======
			 		from kontrol_kerja
>>>>>>> fd58cdfb379aadf2ff2c70a0f8bf8325c698e7e0
			 		WHERE SUBSTRING(status_ck,1,6) = '".$j."'
			 		");
		$data = $query->row_array();
		$nourut = sprintf("%04s",$data['no_urut']);
		$kode = $tahun.$bulan.$hari.$nourut;
		return $kode;
	}	
	function jumlah_absensi_sekarang($id_pegawai){
		$where  = array('id_pegawai' => $id_pegawai);
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('kontrol_kerja');
		$num = $query->num_rows();
		return $num;
	}

}
 ?>