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

	function hapus_pengajuan($where) {
			$this->db->where($where);
			$this->db->delete("pengajuan_alat_makan");
		}

	function update_pengajuan($data, $where) {
			$this->db->where($where);
			$this->db->update("pengajuan_alat_makan", $data);
		}

	function lihat_pengajuan($where = null)
		{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("pengajuan_alat_makan");


		return $query->result_array();

	}

	function tambah_pengajuan($data) {
		
			$this->db->insert('pengajuan_alat_makan', $data);
		}

	function lihat_penerimaan($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("penerimaan_alat_makan");


		return $query->result_array();

	}



	function insert_kodeAm() {
			$this->db->select('RIGHT(alat_makan.kode_am,3) as kode', FALSE);
			$this->db->order_by('kode_am', 'DESC');
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

		function insert_id_pengajuan_AM() {
			$this->db->select('RIGHT(pengajuan_alat_makan.id_pengajuan,3) as kode', FALSE);
			$this->db->order_by('id_pengajuan', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('pengajuan_alat_makan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "PJN-AM-".$kodemax;

			return $kodejadi;
		}

}
