<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mutasi_db extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->table = "mutasi";
	}

	public function buat_kode()
	{
		$this->db->select('RIGHT(id_mutasi,4) as kode', FALSE);
		$this->db->order_by('id_mutasi','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('mutasi');

		if($query->num_rows() <> 0)
		{
			$data = $query->row();      
			$kode = intval($data->kode) + 1;    
		} else {
			$kode = 1;    
		}

		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "M".$kodemax;
		return $kodejadi;
	}

	function buat_nip()
	{
		$this->db->select('RIGHT(id_pegawai,4) as nip', FALSE);
		$this->db->order_by('id_pegawai','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('mutasi');

		if($query->num_rows() <> 0)
		{
			$data = $query->row();      
			$nip = intval($data->nip) + 1;    
		} else {
			$nip = 1;    
		}

		$nipmax = str_pad($nip, 4, "0", STR_PAD_LEFT);
		$nipjadi = "SL".$nipmax;
		return $nipjadi;
	}

	public function tampil(){
    	$this->db->select('mutasi.*, rekrutmen.nama, rekrutmen.alamat, rekrutmen.j_kelamin, rekrutmen.tgl_lahir, rekrutmen.no_tlp, rekrutmen.email'); //mengambil semua data dari tabel data_users dan users
    	$this->db->from('mutasi'); //dari tabel data_users
    	$this->db->join('rekrutmen', 'rekrutmen.no_pendaftaran = mutasi.no_pendaftaran'); //menyatukan tabel users menggunakan left join

    	$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
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

	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
}