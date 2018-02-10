<?php 
/**
* 
*/
class m_cart extends CI_Model
{
	
	function get_all()
	{
		$hasil=$this->db->get('menu_makanan');
		return $hasil->result();
	}

	function insert_meja($data)
	{
		$this->db->insert('pemesanan',$data);
	}

	function update($data,$where)
	{
		$this->db->where($where);
		$this->db->update("pemesanan", $data);
	}

	function tampil_kategori($ktg){
			
			$this->db->where('jenis_menu',$ktg);
			 $query = $this->db->get("menu_makanan");

			 return $query->result();
			
		}
}
?>