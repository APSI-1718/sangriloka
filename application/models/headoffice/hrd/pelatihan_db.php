<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelatihan_db extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function tampilpelatihan(){
    	$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
    	$this->db->from('mutasi'); //dari tabel data_users
    	$this->db->where('status','Pelatihan'); //menyatukan tabel users menggunakan left join

    	$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
  }
}