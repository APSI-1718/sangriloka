<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_kelola_stok extends CI_Model
{
	function __construct(){
		parent::__construct("stok_foodcourt");
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("stok_foodcourt");

		return $query->result_array();
	}

	function insert($data) {
			$this->db->insert('stok_foodcourt', $data );
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update('stok_foodcourt', $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete('stok_foodcourt');
		}

	
	function insert_idStok() {
			$this->db->select('RIGHT(stok_foodcourt.id_stok,3) as kode', FALSE);
			$this->db->order_by('id_stok', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('stok_foodcourt');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "S".$kodemax;

			return $kodejadi;
		}

}
