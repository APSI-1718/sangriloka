<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
*
*/
class M_databases extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function select($table, $where = null){
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get($table);

		return $query;
	}

	function insert($table, $data) {
		$this->db->insert($table, $data);
	}

	function update($table, $data, $where) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);
	}

}
