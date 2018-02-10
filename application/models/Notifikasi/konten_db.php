<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konten_db extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "konten_event";
	}

	public function select($where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->order_by("id_konten","desc");
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	function update($data, $where)
	{
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}

	function delete($where)
	{
		$this->db->where($where);
		$this->db->delete($this->table);
	}

	function detail()
	{
		$detail = $this->input->GET('detail', TRUE);
		$data = $this->db->query("SELECT * from konten_event where id_konten = '%$detail%' ");
		return $data->result();
	}
}
