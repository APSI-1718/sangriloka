<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class m_pegawai extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
			$this->table = "pegawai";
		}

		function select($where = null){
			if ($where != null){
				$this->db->where($where);
			}

			$query = $this->db->get($this->table);
			return $query->result_array();
		}

		function update($data, $where){
			$this->db->where($where);
			$this->db->update($this->table, $data);
		}

	}