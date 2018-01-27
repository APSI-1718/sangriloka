<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class pegawai extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/master_outbound/m_pegawai');
		}

		function index(){
				$data['pegawai'] = $this->m_pegawai->select();
				$this->load->view('template/header');
				$this->load->view('outbound/master_outbound/v_pegawai', $data);
				$this->load->view('template/footer');
		}

		function ubah_pegawai(){
			$id_pegawai = $this->input->post('id_pegawai');

			$data = array (
				'nama_pegawai' => $this->input->post('nama_pegawai'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_tlp' => $this->input->post('no_tlp'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'jabatan' => $this->input->post('jabatan'),
				'posisi' => $this->input->post('posisi')
				);

			$where = array ('id_pegawai' => $id_pegawai);
			$this->m_pegawai->update($data, $where);
			$this->session->set_flashdata('berhasiledit',"Data pegawai berhasil di ubah !");
			redirect('outbound/master_outbound/pegawai');
		}

	}