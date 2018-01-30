<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_penerimaan_stok extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("penerimaan_stok_foodcourt");

		return $query->result_array();
	}

}

/* End of file M_penerimaan.php */
/* Location: ./application/models/M_penerimaan.php */