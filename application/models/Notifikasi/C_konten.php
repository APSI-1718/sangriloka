<?php
class C_konten extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function cariData()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from konten_event where judul_konten like '%$cari%' ");
		return $data->result();
	}
 
 
}