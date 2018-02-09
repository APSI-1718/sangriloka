<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
* 
*/
class M_stokmakanan extends CI_Model
{
	function __construct(){
		parent::__construct();
		// $this->table="terima";
	}
	
	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db
		// ->join('penerimaan_stok', 'penerimaan_stok.id_mkn = stok_makanan.id_mkn', 'right outer')
		->get("stok_bahan_makanan");


		return $query->result_array();

	}

	function lihat_detail_makanan($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("detail_bahan_makanan");


		return $query->result_array();

	}

	function lihat_pengajuan($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("pengajuan_bahan_makanan");


		return $query->result_array();

	}

	function lihat_penerimaan($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("penerimaan_bahan_makanan");


		return $query->result_array();

	}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update("stok_bahan_makanan", $data);
		}

	function terima_stok($data) {
		
			$this->db->insert('detail_bahan_makanan', $data);
		}

	function insert($data) {
			$this->db->insert('stok_bahan_makanan', $data);
		}

	function tambah_pengajuan($data) {
		
			$this->db->insert('pengajuan_bahan_makanan', $data);
		}

	// function tambah_mkn($data){
	// 	$this->db->set(array(
	// 		'tgl_masuk' => 'NOW()'),'', FALSE);
			
	// 	$this->db->insert($this->table, $data);
	// }



	function insert_kode_mkn() {
			$this->db->select('RIGHT(stok_bahan_makanan.kode_mkn,3) as kode', FALSE);
			$this->db->order_by('kode_mkn', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('stok_bahan_makanan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "BM".$kodemax;

			return $kodejadi;
		}

		function insert_id_pengajuan_BM() {
			$this->db->select('RIGHT(pengajuan_bahan_makanan.id_pengajuan,3) as kode', FALSE);
			$this->db->order_by('id_pengajuan', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('pengajuan_bahan_makanan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "PJN-BM-".$kodemax;

			return $kodejadi;
		}

}
