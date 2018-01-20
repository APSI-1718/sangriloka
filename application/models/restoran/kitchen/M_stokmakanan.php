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
		->get("stok_makanan");


		return $query->result_array();

	}

	// function tambah_mkn($data){
	// 	$this->db->set(array(
	// 		'tgl_masuk' => 'NOW()'),'', FALSE);
			
	// 	$this->db->insert($this->table, $data);
	// }



	function insert_id_mkn() {
			$this->db->select('RIGHT(stok_makanan.id_mkn,3) as kode', FALSE);
			$this->db->order_by('id_mkn', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('stok_makanan');

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

}
