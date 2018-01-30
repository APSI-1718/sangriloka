<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_kelola_menu extends CI_Model
{
	function __construct(){
		parent::__construct();
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("menu_foodcourt");

		return $query->result_array();
	}

	function insert($data) {
			$this->db->insert('menu_foodcourt', $data);
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update('menu_foodcourt', $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete("menu_foodcourt");
		}

	function tambah_mkn($data){
		$this->db->set(array(
			'tgl_masuk' => 'NOW()'),'', FALSE);

		$this->db->insert($this->table, $data);
	}



	function insert_id_menu() {
			$this->db->select('RIGHT(menu_foodcourt.id_menu,3) as kode', FALSE);
			$this->db->order_by('id_menu', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('menu_foodcourt');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "M".$kodemax;

			return $kodejadi;
		}


}
