<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pembayaran extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->table="pembayaran_homestay";
	}

	function select($where = null){
		if ($where != null){
			$this->db->where($where);
		}

		$query = $this->db->get($this->table);

		return $query->result_array();
	}

	public function get() 
	{
	  	
		$hasil=$this->db->get('pendaftaran');
		return $hasil->result();
	}

	function insert($data){
		$this->db->insert($this->table, $data);
	}

	function update($data, $where){
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}

	function buat_kode()
	{
		$this->db->select('RIGHT(pembayaran_homestay.id_pembayaran,6) as kode', FALSE);
		$this->db->order_by('id_pembayaran','DESC');
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
		//jika kode ternyata sudah ada.
		$data = $query->row();
		$kode = intval($data->kode) + 1;
		}else{
		//jika kode belum ada
		$kode = 1;
		}
		$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT);
		$kodejadi = "TRNS".$kodemax;
		return $kodejadi;
	}
}	