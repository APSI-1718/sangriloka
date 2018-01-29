<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class absensi_db extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "absensi";
	}

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
}