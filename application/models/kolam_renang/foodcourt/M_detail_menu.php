<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_detail_menu extends CI_Model
	{
	function __construct(){
		parent::__construct("detail_menu_foodcourt");
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("detail_menu_foodcourt");

		return $query->result_array();
	}

	function insert($data, $where) {
			$this->db->where($where);
			$this->db->insert('detail_menu_foodcourt', $data);
		}
	function tambah($data) {
			$this->db->insert('detail_menu_foodcourt', $data );
		}


	function update($data, $where) {
			$this->db->where($where);
			$this->db->update('detail_menu_foodcourt', $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete("detail_menu_foodcourt");
		}

		

	function insert_id_detail_menu() {
			$this->db->select('RIGHT(detail_menu_foodcourt.id_detail_menu,2) as kode', FALSE);
			$this->db->order_by('id_detail_menu', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('detail_menu_foodcourt');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
			$kodejadi = "DM".$kodemax;

			return $kodejadi;
		}

	function ambildata($where){
		$this->db->select('detail_menu_foodcourt.*,stok_foodcourt.nama_stok, stok_foodcourt.satuan');    
		$this->db->from('detail_menu_foodcourt');
		$this->db->join('stok_foodcourt', 'detail_menu_foodcourt.id_stok=stok_foodcourt.id_stok');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();			
	}

	function ambildata2($where) {
		$this->db->from('menu_foodcourt');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();	
	}

	function ambilstok($where) {
		$this->db->from('stok_foodcourt');
		$query = $this->db->get();	
		return $query->result_array();	
	}


	

}
