<?php 
/**
* 
*/
class Login extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Restoran/Pegawai/login_model');
	}
	function index(){
		if(!$this->session->userdata('status_login')){ 		
			$this->load->view('Restoran/Pegawai/login_view');
		}else{
			redirect('restoran/Pegawai');
		}
	}
	function ceklogin()
	{
		$this->login_model->cekusername();
		
		redirect('Restoran/Pegawai/login');
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('status_login');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect('Restoran/Pegawai/login');

	}		
}
 ?>