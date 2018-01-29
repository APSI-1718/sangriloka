<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_tugasdb extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "kelolatugas";
	}

	public function buat_kode()
	{
		$this->db->select('RIGHT(id_tugas,3) as kode', FALSE);
		$this->db->order_by('id_tugas','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('kelolatugas');

		if($query->num_rows() <> 0)
		{
			$data = $query->row();      
			$kode = intval($data->kode) + 1;    
		} else {
			$kode = 1;    
		}

		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "KT".$kodemax;
		return $kodejadi;
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
	}
}
