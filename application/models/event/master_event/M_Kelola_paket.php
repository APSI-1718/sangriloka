<?php
defined('BASEPATH') OR exit('No');



class M_Kelola_paket extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->tbl = "paket";
		
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

		function kode() {
			$this->db->select('RIGHT(paket.id_paket,3) as kode', FALSE);
			$this->db->order_by('id_paket', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('paket');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "PKT".$kodemax;

			return $kodejadi;
		}
}