<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
*
*/
class M_kelolaorder extends CI_Model
{
	function __construct(){
		parent::__construct();
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("pemesanan");
		$this->db->order_by('status', 'ASC');


		return $query->result_array();
	}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update("pemesanan", $data);
		}

	function insert($data) {
			$this->db->insert('pemesanan', $data);
		}

	function insert_id_pemesanan() {
			$this->db->select('RIGHT(pemesanan.id_pemesanan,3) as kode', FALSE);
			$this->db->order_by('id_pemesanan', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('pemesanan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "ORD".$kodemax;

			return $kodejadi;
		}

		function jumlah_order() {
            $query = $this->db->get('pemesanan');
            return $query->num_rows();  
        }   



}
