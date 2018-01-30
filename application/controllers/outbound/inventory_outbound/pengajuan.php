<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	/**
	* 
	*/
	class pengajuan extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('outbound/inventory_outbound/m_pengajuan');
		}

		function index(){
				$id =  'outbound';
   				$where = array ('pengaju' => $id);
				$data['pengajuan'] = $this->m_pengajuan->select($where);
				$this->load->view('template/header');
				$this->load->view('outbound/inventory_outbound/v_pengajuan', $data);
				$this->load->view('template/footer');
		}
		function form_tambah_pengajuan()
  		{
    		$this->load->view('template/header');
      		$this->load->view('outbound/inventory_outbound/tambah_pengajuan');
      		$this->load->view('template/footer');
  		}

  		function tambah_pengajuan()
  		{
  		  $this->load->model('m_pengajuan','TPengajuan');
  		  $data = array(
  		  	  'id_pengajuan'=>$this->input->post('id_pengajuan'),
  		      'tanggal_pengajuan'=>$this->input->post('tanggal_pengajuan'),
  		      'pengaju'=>$this->input->post('pengaju'),
  		      'keterangan_pengajuan'=>$this->input->post('keterangan_pengajuan'),
  		      'jenis'=>$this->input->post('jenis'),
  		      'jumlah'=>$this->input->post('jumlah')
  		    );
  		  $this->TPengajuan->insert($data);
  		  redirect('outbound/inventory_outbound/pengajuan','refresh');
  		}

  		function hapus_peralatan(){
			$this->load->model('m_peralatan','TPeralatan');
    		$id =  $this->input->get('id');
   			$where = array ('id' => $id);
    		$this->TPeralatan->delete($where);
    		redirect('outbound/inventory_outbound/peralatan','refresh');
		}

		
	}