<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('headoffice/hrd/absensi_db');
	}

	public function index()
	{
		$this->load->view('headoffice/hrd/login');
	}

	/*public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('headoffice/hrd/absensi_db'); // load model_user
		$hasil = $this->absensi_db->cek_user($data);

		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='member') {
				redirect('member/c_member');
			}		
		}*/

	function insert_data()
	{
		$data = array(
			'tanggal_absen' => $this->input->post('tanggal_absen'),
			'id_pegawai' => $this->input->post('id_pegawai'),
			'status' => $this->input->post('status'));

		$this->absensi_db->insert($data);
		redirect('clogin', 'refresh');
	}
}
