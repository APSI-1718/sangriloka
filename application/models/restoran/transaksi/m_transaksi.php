<?php 	
/**
* 	
*/
class m_transaksi extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->table = "transaksi";
	}
	public function get() 
	{
	  	
		$hasil=$this->db->get('pemesanan');
		return $hasil->result();
	
	}
	function insert($data){
		$this->db->insert($this->table, $data);
	}
}
?>