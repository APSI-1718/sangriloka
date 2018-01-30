<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pengajuan_stok extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("pengajuan_stok_foodcourt");

		return $query->result_array();
	}

	function insert($data){
			$this->db->insert('pengajuan_stok_foodcourt', $data);
	}

	

	function insert_id_pengajuan2()
    {
    	$hari  = date('d');
        $bulan = date('m');
        $tahun = date('Y');
        $tahun = substr($tahun,2,2);
        $j = "PS".$tahun.$bulan.$hari;
        $query = $this->db->query(
                    "SELECT IFNULL(MAX(SUBSTRING(id_pengajuan,9,2)),0)+1 AS no_urut   
                    from pengajuan_stok_foodcourt
                    WHERE SUBSTRING(id_pengajuan,1,8) = '".$j."'
                    ");
        $data = $query->row_array();
        $nourut = sprintf("%02s",$data['no_urut']);
        $kode = "PS".$tahun.$bulan.$hari.$nourut;
        return $kode;
    }   


}

/* End of file M_pengajuan.php */
/* Location: ./application/models/M_pengajuan.php */