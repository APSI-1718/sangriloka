<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class m_event extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
			$this->table = "kelolaevent";
		}

		function select($where = null){
			if ($where != null){
				$this->db->where($where);
			}

			$query = $this->db->get($this->table);
			return $query->result_array();
		}

		function insert($data){
			$this->db->insert($this->table, $data);
		}

		function id_event(){
			$this->db->select('RIGHT(kelolaevent.id_event,4) as kode', FALSE);
			$this->db->order_by('id_event','DESC');
			$this->db->limit(1);

			$query = $this->db->get('kelolaevent');

			if ($query->num_rows() <> 0){
				$data = $query->row();
				$kode = intval($data->kode) + 1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
			$kodejadi = "123".$kodemax;

			return $kodejadi;
		}

	}