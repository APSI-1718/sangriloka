<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class M_Pelanggan extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
			$this->table = "pelanggan_event";
		}

		function select($where = null){
			if ($where != null){
				$this->db->where($where);
			}

			$query = $this->db->get($this->table);
			return $query->result_array();
		}

	}