<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class M_menumakanan extends CI_Model { 

	function __construct() { 
		parent::__construct(); 
		$this->table = "menu_makanan"; 
	} 

		function select($where = null) { 
			if ($where != null) { 
				$this->db->where($where);
			}
			$this->db->order_by('id_menu', 'desc') ;
			$query = $this->db->get($this->table); 

			return $query->result_array(); 
		} 

		function insert($data) { 
			$this->db->insert($this->table, $data); 
		} 

		function update($data, $where) { 
			$this->db->where($where); $this->db->update($this->table, $data); 
		} 

		function delete($where) { $this->db->where($where); $this->db->delete($this->table); 
		}

		function insert_id_menu() {
			$this->db->select('RIGHT(menu_makanan.id_menu,3) as kode', FALSE);
			$this->db->order_by('id_menu', 'DESC');
			$this->db->limit(1);

			$query =  $this->db->get('menu_makanan');

			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->kode)+1;
			} else {
				$kode = 1;
			}

			$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
			$kodejadi = "MNU".$kodemax;

			return $kodejadi;
		}

		function hitung_data($count){
			$this->db->select($count);
			$this->db->from($this->table);

			return $num_result = $this->db->count_all_results();
		}

		function tampil_pagination_produk($limit, $offset){
			$this->db->order_by('id_menu', 'desc');
			$this->db->limit($limit, $offset);

			$query = $this->db->get('menu_makanan');

			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return $query->result_array();
			}
		}

		function cari_menu_makanan($nama){
			$this->db->select("*");
			$this->db->from($this->table);
			$this->db->like("nama", $nama);

			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return $query->result_array();
			}
		}
		function detail_brg($id){
			
			$this->db->where('id_menu',$id);
			 $query = $this->db->get($this->table);

			 return $query->result_array();
		}

		function tampil_kategori($ktg){
			
			$this->db->where('jenis_menu',$ktg);
			 $query = $this->db->get($this->table);

			 return $query->result_array();
			
		}

		function updatepesan($data,$where)
		{
			$this->db->where($where);
			$this->db->update("pemesanan", $data);
		}
	
		function pesanan($where)
		{
			$this->db->where('id_pemesanan',$where);
			$hasil = $this->db->get('menu_makanan,pemesanan');
			return $hasil->result_array();
		}

		function insert_data($data)
		{
			$this->db->insert('pemesanan',$data);
		}
	}

	