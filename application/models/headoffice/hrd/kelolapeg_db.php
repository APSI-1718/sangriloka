<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelolapeg_db extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function tampilkelolapeg(){
    	$this->db->select('absensi.*, mutasi.nama, mutasi.posisi, mutasi.jabatan'); //mengambil semua data dari tabel data_users dan users
    	$this->db->from('mutasi'); //dari tabel data_users
    	$this->db->join('absensi', 'mutasi.id_pegawai = absensi.id_pegawai'); //menyatukan tabel users menggunakan left join

    	$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
  }
}