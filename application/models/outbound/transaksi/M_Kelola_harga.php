<?php
defined('BASEPATH') OR exit('No');



class M_Kelola_harga extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->tbl = "catering";

	}
	function select($where = null){

		if($where != null){
			$this->db->where($where);
		}
		$query = $this->db->get($this->tbl);
		return $query->result_array();
	}
	function insert($data){
		$this->db->insert($this->tbl,$data);
	}
	function update($data, $where){
		$this->db->where($where);
		$this->db->update($this->tbl, $data);
	}
	function delete($where){
		$this->db->where($where);
		$this->db->delete($this->tbl);
	}
}
