<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
*
*/
class M_room_set_up extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->table="roomsetup";
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("roomsetup");

		return $query->result_array();
	}

	function insert($data) {
			$this->db->insert('roomsetup', $data);
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update($this->table, $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete($this->table);
		}




	function kode() {
			$this->db->select('RIGHT(roomsetup.id_room,3) as kode', FALSE);
			$this->db->order_by('id_room', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('roomsetup');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "ER".$kodemax;

			return $kodejadi;
		}

}
