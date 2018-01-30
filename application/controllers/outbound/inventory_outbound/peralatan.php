<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class peralatan extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/inventory_outbound/m_peralatan');
		}

		function index(){
				$data['peralatan'] = $this->m_peralatan->select();
				$this->load->view('template/header');
				$this->load->view('outbound/inventory_outbound/v_peralatan', $data);
				$this->load->view('template/footer');
		}

		function hapus_peralatan(){
			$this->load->model('m_peralatan','TPeralatan');
    		$id =  $this->input->get('id');
   			$where = array ('id' => $id);
    		$this->TPeralatan->delete($where);
    		redirect('outbound/inventory_outbound/peralatan','refresh');
		}

		function form_edit_peralatan()
    	{
      		$this->load->model('m_peralatan','TPeralatan');
      		$id = $this->input->get('id');
      		$where = array ('id' => $id);
      		$data['peralatan'] = $this->TPeralatan->select($where);
      		$this->load->view('template/header');
      		$this->load->view('outbound/inventory_outbound/edit_peralatan', $data);
      		$this->load->view('template/footer');
    	}

    	function edit_peralatan()
    	{ 
      		$this->load->model('m_peralatan','TPeralatan');
      		$id = $this->input->post('id');
      		$data = array(
      		'id' => $this->input->post('id'),
      		'nama' => $this->input->post('nama'),
      		'jenis' => $this->input->post('jenis'),
      		'keterangan'=>$this->input->post('keterangan'),
  		    'status'=>$this->input->post('status'),
      		'jumlah' => $this->input->post('jumlah')
      		);
      		$where = array ('id' => $id);
      		$this->TPeralatan->update($data, $where);
      		redirect('outbound/inventory_outbound/peralatan','refresh');
    	}

    	function form_tambah_peralatan()
  		{
    		$this->load->view('template/header');
      		$this->load->view('outbound/inventory_outbound/tambah_peralatan');
      		$this->load->view('template/footer');
  		}

  		function tambah_peralatan()
  		{
  		  $this->load->model('m_peralatan','TPeralatan');
  		  $data = array(
  		      'nama'=>$this->input->post('nama'),
  		      'jenis'=>$this->input->post('jenis'),
  		      'keterangan'=>$this->input->post('keterangan'),
  		      'status'=>$this->input->post('status'),
  		      'jumlah'=>$this->input->post('jumlah')
  		    );
  		  $this->TPeralatan->insert($data);
  		  redirect('outbound/inventory_outbound/peralatan','refresh');
  		}
	}