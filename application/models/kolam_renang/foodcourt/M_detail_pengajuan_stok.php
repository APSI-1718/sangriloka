<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_detail_pengajuan_stok extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}

		$query = $this->db->get("detail_pengajuan_stok_foodcourt");

		return $query->result_array();
	}
	function insert($data) {
			$this->db->insert('detail_pengajuan_stok_foodcourt', $data);
		}

	function update($data, $where) {
			$this->db->where($where);
			$this->db->update('detail_pengajuan_stok_foodcourt', $data);
		}

	function delete($where) {
			$this->db->where($where);
			$this->db->delete("detail_pengajuan_stok_foodcourt");
		}


	function inner_join2($table1,$table2,$where1){
		$this->db->select('*');    
		$this->db->from('stok_foodcourt');
		$this->db->join('detail_pengajuan_stok_foodcourt', 'detail_pengajuan_stok_foodcourt'.'.'.'id_stok'.' = '.'stok_foodcourt'.'.'.'id_stok');
		$query = $this->db->get();	
		return $query->result_array();			

	}

	
	function insert_id_detail_pengajuan() {
			$this->db->select('RIGHT(detail_pengajuan_stok_foodcourt.id_detail_pengajuan,4) as kode', FALSE);
			$this->db->order_by('id_detail_pengajuan', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('detail_pengajuan_stok_foodcourt');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
			$kodejadi = "DPS".$kodemax;

			return $kodejadi;
		}
	function ambildata($where){
		$this->db->select('detail_pengajuan_stok_foodcourt.*,stok_foodcourt.nama_stok, stok_foodcourt.satuan');    
		$this->db->from('detail_pengajuan_stok_foodcourt');
		$this->db->join('stok_foodcourt', 'detail_pengajuan_stok_foodcourt.id_stok=stok_foodcourt.id_stok');
		$this->db->where($where);
		$query = $this->db->get();	
		return $query->result_array();			
	}

	function ambildata2($where) {
		$this->db->from('pengajuan_stok_foodcourt');
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

/* End of file M_detail_pengajuan.php */
/* Location: ./application/models/M_detail_pengajuan.php */