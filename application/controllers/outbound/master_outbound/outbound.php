<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class outbound extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/master_outbound/m_outbound');
		}

		function index(){
			    $data['idoutbound'] = $this->m_outbound->id_outbound();
				$data['outbound'] = $this->m_outbound->select();
				$this->load->view('template/header');
				$this->load->view('outbound/master_outbound/v_outbound', $data);
				$this->load->view('template/footer');
		}

		function tambah_outbound(){
			$data = array (
				'id_outbound' => $this->input->post('id_outbound'),
				'nama_outbound' => $this->input->post('nama_outbound'),
				'keterangan' => $this->input->post('keterangan')
				);

			$this->m_outbound->insert($data);
			$this->session->set_flashdata('berhasiltambah',"Data outbound berhasil di tambahkan !");
			redirect('outbound/master_outbound/outbound');
		}

		function ubah_outbound(){
			$id_outbound = $this->input->post('id_outbound');

			$data = array (
				'nama_outbound' => $this->input->post('nama_outbound'),
				'keterangan' => $this->input->post('keterangan')
				);

			$where = array ('id_outbound' => $id_outbound);
			$this->m_outbound->update($data, $where);
			$this->session->set_flashdata('berhasiledit',"Data outbound berhasil di ubah !");
			redirect('outbound/master_outbound/outbound');
		}

		function hapus_outbound(){
			$id_outbound = $this->input->post('id_outbound');
			$where = array ('id_outbound' => $id_outbound);
			$this->m_outbound->delete($where);
			$this->session->set_flashdata('berhasilhapus',"Data outbound berhasil di hapus !");
			redirect('outbound/master_outbound/outbound');
		}

	}