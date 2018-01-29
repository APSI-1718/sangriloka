<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class event extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			// $this->load->model('m_login');
			$this->load->model('outbound/master_outbound/m_event');
		}

		function index(){
				$data['event'] = $this->m_event->select();
			    $data['idevent'] = $this->m_event->id_event();
				$this->load->view('template/header');
				$this->load->view('outbound/master_outbound/v_event', $data);
				$this->load->view('template/footer');
		}

		function tambah_event(){
			$data = array (
				'id_event' => $this->input->post('id_event'),
				'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
				'tanggal_penyelenggaraan' => $this->input->post('tanggal_penyelenggaraan'),
				'kebutuhan' => $this->input->post('kebutuhan'),
				'status' => $this->input->post('status')
				);

			$this->m_event->insert($data);
			$this->session->set_flashdata('berhasiltambah',"Data event berhasil di tambahkan !");
			redirect('outbound/master_outbound/event');
		}

	}