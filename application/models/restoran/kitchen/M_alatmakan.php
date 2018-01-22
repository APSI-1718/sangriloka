<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
*
*/
class M_alatmakan extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->table="alat_makan";
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("alat_makan");

		return $query->result_array();
	}

	function insert($data) {
			$this->db->insert('alat_makan', $data);
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update($this->table, $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete($this->table);
		}

	function tambah_mkn($data){
		$this->db->set(array(
			'tgl_masuk' => 'NOW()'),'', FALSE);

		$this->db->insert($this->table, $data);
	}



	function insert_kodeBrg() {
			$this->db->select('RIGHT(alat_makan.kodeBrg,3) as kode', FALSE);
			$this->db->order_by('kodeBrg', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('alat_makan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "AM".$kodemax;

			return $kodejadi;
		}

}
