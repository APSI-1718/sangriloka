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

}
