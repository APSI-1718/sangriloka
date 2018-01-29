<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_pengajuan_stok extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kolam_renang/foodcourt/M_kelola_stok');
		$this->load->model('kolam_renang/foodcourt/M_detail_pengajuan_stok');
		$this->load->model('kolam_renang/foodcourt/M_pengajuan_stok');
	}

	public function index()
	{
		
		$id_pengajuan = $this->input->get('id');
		$where = array('id_pengajuan' => $id_pengajuan );
		$data['data'] = $this->M_detail_pengajuan_stok->ambildata($where);
		$data['data2'] = $this->M_detail_pengajuan_stok->ambildata2($where);
		$data['stok'] = $this->M_detail_pengajuan_stok->ambilstok($where);
		$this->load->view('template/header');
		$this->load->view('kolam_renang/foodcourt/v_halaman_utama');
		$this->load->view('kolam_renang/foodcourt/v_detail_pengajuan_stok',$data);
		$this->load->view('template/footer');
		
		
	}

	function tambah_detail_pengajuan_stok() {

		$id['id_detail_pengajuan'] = $this->M_detail_pengajuan_stok->insert_id_detail_pengajuan();
        $data 	= array('id_detail_pengajuan'=>$id['id_detail_pengajuan'],
        				'id_stok' => $this->input->post('id_stok'),
                        'jumlahps' =>$this->input->post('jumlahps'),
                        'id_pengajuan' =>$this->input->post('id_pengajuan') ,
                        'id_penerimaan' =>$this->input->post('id_penerimaan'));

			
		$this->M_detail_pengajuan_stok->insert($data);

		$this->session->set_flashdata('tambah_data', "Data berhasil ditambahkan");
		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);

	}

	function edit_form() {

		$id = $this->input->get('id_detail_pengajuan');
		$where = array ('id_detail_pengajuan' => $id);
		$data['detail_pengajuan_stok_foodcourt'] = $this->M_detail_pengajuan_stok->select($where);
		$this->load->view('edit-form', $data);
		}

		function ubah_detail_pengajuan_stok() {

			$id = $this->input->post('id_detail_pengajuan');
			$data = array (
							'id_detail_pengajuan' => $this->input->post('id_detail_pengajuan'),
				 			'id_stok' => $this->input->post('id_stok'),
				 			'id_pengajuan' => $this->input->post('id_pengajuan'),
				 			'id_penerimaan' => $this->input->post('id_penerimaan'),
				 			'jumlahps' => $this->input->post('jumlahps')

				 			);


			$where = array ('id_detail_pengajuan' => $id);

			$this->session->set_flashdata('edit_data', "Data berhasil diubah");

			$this->M_detail_pengajuan_stok->update($data, $where);

			$url = $_SERVER['HTTP_REFERER'];
			redirect($url);

		}

	function hapus_detail_pengajuan_stok(){ 

		$id = $this->input->post('id_detail_pengajuan');
		$where = array ('id_detail_pengajuan' => $id); $this->M_detail_pengajuan_stok->delete($where);

		$this->session->set_flashdata('delete_data', "Data berhasil dihapus");

		$url = $_SERVER['HTTP_REFERER'];
		redirect($url);
		}



}

/* End of file detail_pengajuan.php */
/* Location: ./application/controllers/detail_pengajuan.php */