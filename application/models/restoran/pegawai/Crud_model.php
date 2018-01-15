<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function select($table, $where = null){
		if ($where != null){
			$this->db->where($where);
		}

		$query = $this->db->get($table);

		return $query->result_array();
	}

	function insert($table, $data){
		$this->db->insert($table, $data);
	}

	function update($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function inner_join2($table1,$table2,$where1){
		$this->db->select('*');    
		$this->db->from($table1);
		$this->db->join($table2, $table1.'.'.$where1.' = '.$table2.'.'.$where1);
		$query = $this->db->get();	
		return $query->result_array();			

	}

}