<?php 
	class login_model extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function CekUsername(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			$query	= $this->db->query("SELECT * FROM pegawai WHERE username='$user' AND password='$pass'");

			if($query->num_rows() > 0 ){
				foreach ($query->result() as $row)
				{
					$data['id_pegawai'] = $row->id_pegawai ;
					$data['username'] = $row->username ;
					$data['jabatan'] = $row->jabatan;
					$data['nama'] = $row->nama_pegawai;
					$data['status_login'] = true ;
					
					
					$this->session->set_userdata($data);				   
				}
				return true;
			}else{
				$this->session->set_flashdata('error','Username dan Password salah');
				$this->session->set_userdata('status_login',false);
				return false;

			}
		}
	}
?>