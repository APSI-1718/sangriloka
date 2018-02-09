<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class M_Pegawai extends CI_Model {
		
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

	}