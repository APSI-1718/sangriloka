<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class perawatan extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/inventory_outbound/m_perawatan');
		}

		function index(){
				$id =  'outbound';
   				$where = array ('pengaju' => $id);
				$data['perawatan'] = $this->m_perawatan->select($where);
				$this->load->view('template/header');
				$this->load->view('outbound/inventory_outbound/v_perawatan', $data);
				$this->load->view('template/footer');
		}
		function form_tambah_perawatan()
  		{
    		$this->load->view('template/header');
      		$this->load->view('outbound/inventory_outbound/tambah_perawatan');
      		$this->load->view('template/footer');
  		}

  		function tambah_perawatan()
  		{
  		  $this->load->model('m_perawatan','TPerawatan');
  		  $data = array(
  		  	  'id_perawatan'=>$this->input->post('id_perawatan'),
  		      'tanggal_perawatan'=>$this->input->post('tanggal_perawatan'),
  		      'pengaju'=>$this->input->post('pengaju'),
  		      'keterangan_perawatan'=>$this->input->post('keterangan_perawatan'),
            'jenis_perawatan'=>$this->input->post('jenis_perawatan'),
  		      'pengajuan_biaya'=>$this->input->post('pengajuan_biaya')
  		    );
  		  $this->TPerawatan->insert($data);
  		  redirect('outbound/inventory_outbound/perawatan','refresh');
  		}

  		function hapus_peralatan(){
			$this->load->model('m_peralatan','TPeralatan');
    		$id =  $this->input->get('id');
   			$where = array ('id' => $id);
    		$this->TPeralatan->delete($where);
    		redirect('outbound/inventory_outbound/peralatan','refresh');
		}

		
	}