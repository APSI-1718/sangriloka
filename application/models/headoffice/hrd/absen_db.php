<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absen_db extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "absensi";
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
}
