<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_detail_penjualan extends CI_Model
	{
	function __construct(){
		parent::__construct();
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("detail_penjualan_foodcourt");

		return $query->result_array();
	}

	function tampil($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("penjualan_foodcourt");

		return $query->result_array();
	}

	function insert($data, $where) {
			$this->db->where($where);
			$this->db->insert('detail_penjualan_foodcourt', $data);
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update('detail_penjualan_foodcourt', $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete("detail_penjualan_foodcourt");
		}

	function setTanggal(){
		$hari  = date('d');
        $bulan = date('m');
        $tahun = date('Y');
        $j = $tahun.'-'.$bulan.'-'.$hari;
        $query = $this->db->query(
                    "SELECT IFNULL(MAX(SUBSTRING(tanggal,9,2)),0)
                    from penjualan_foodcourt
                    WHERE SUBSTRING(tanggal,1,8) = '".$j."'
                    ");
        $data = $query->row_array();
        $kode = $tahun."/".$bulan."/".$hari;
        return $kode;
	}

		

	function insert_id_detail_penjualan() {
			$this->db->select('RIGHT(detail_penjualan_foodcourt.id_detail_penjualan,2) as kode', FALSE);
			$this->db->order_by('id_detail_penjualan', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('detail_penjualan_foodcourt');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
			$kodejadi = "DP".$kodemax;

			return $kodejadi;
		}

	
	function inner_join($table1,$table2,$table3, $where1, $where2){
		$this->db->select('*');    
		$this->db->from($table1);
		$this->db->join($table2, $table1.'.'.$where1.' = '.$table2.'.'.$where1);
		$this->db->join($table3, $table1.'.'.$where2.' = '.$table3.'.'.$where2);
		$query = $this->db->get();	
		return $query->result_array();			

	}

	function insert_id_penjualan2()
    {
    	$hari  = date('d');
        $bulan = date('m');
        $tahun = date('Y');
        $tahun = substr($tahun,2,2);
        $j = "PJ".$tahun.$bulan.$hari;
        $query = $this->db->query(
                    "SELECT IFNULL(MAX(SUBSTRING(id_penjualan,9,2)),0)+1 AS no_urut   
                    from penjualan_foodcourt
                    WHERE SUBSTRING(id_penjualan,1,8) = '".$j."'
                    ");
        $data = $query->row_array();
        $nourut = sprintf("%02s",$data['no_urut']);
        $kode = "PJ".$tahun.$bulan.$hari.$nourut;
        return $kode;
    } 

    function ambildata($where){
		$this->db->select('detail_penjualan_foodcourt.*,menu_foodcourt.nama_menu, menu_foodcourt.harga');    
		$this->db->from('detail_penjualan_foodcourt');
		$this->db->join('menu_foodcourt', 'detail_penjualan_foodcourt.id_menu = menu_foodcourt.id_menu');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();	
	}

	function ambildata2($where) {
		$this->db->from('penjualan_foodcourt');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();	
	}

	function ambilmenu($where) {
		$this->db->from('menu_foodcourt');
		$query = $this->db->get();	
		return $query->result_array();	
	}  

	

}
