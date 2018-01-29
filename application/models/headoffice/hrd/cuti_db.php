<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuti_db extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "cuti";
	}

	public function buat_kode()
	{
		$this->db->select('RIGHT(id_cuti,4) as kode', FALSE);
		$this->db->order_by('id_cuti','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('cuti');

		if($query->num_rows() <> 0)
		{
			$data = $query->row();      
			$kode = intval($data->kode) + 1;    
		} else {
			$kode = 1;    
		}

		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "C".$kodemax;
		return $kodejadi;
	}

	public function tampilcuti(){
    	$this->db->select('cuti.*, mutasi.nama'); //mengambil semua data dari tabel data_users dan users
    	$this->db->from('cuti'); //dari tabel data_users
    	$this->db->join('mutasi', 'mutasi.id_pegawai = cuti.id_pegawai'); //menyatukan tabel users menggunakan left join

    	$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
  }

  function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
	}
}