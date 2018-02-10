<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('notifikasi/m_image');
		$this->load->library('upload');
	}

	function index()
	{
		$data['image'] = $this->m_image->select();
		$data['total'] = $this->m_image->count_row();
		$data['error'] = $this->upload->display_errors();

		$this->load->view('notifikasi/template/header');
		$this->load->view('notifikasi/image-form', $data);
		$this->load->view('notifikasi/template/footer');
	}

	function configImage()
	{
		
		$nmfile = "img_".time();
		$config['upload_path']   =   "./assets/img/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "3000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$config['file_name']     =   $nmfile;
 
		$this->upload->initialize($config);
	}

	function insertImage()
	{
		$this->configImage();
 
		if(!$this->upload->do_upload('gambar'))
		{

 			$this->index();

		} else {
			$fileinfo = $this->upload->data();

			$data = array(
						'nm_img' => $this->input->post('nama'),
						'ket_img' => $this->input->post('keterangan'),
						'path_img' => $fileinfo['file_name']);

			$this->m_image->insert($data);
			$this->session->set_flashdata('success', true);
			redirect('notifikasi/image', 'refresh');

		}
	}

	function editImage()
	{
		$id = $this->input->post('id');
		$img_path = $this->input->post('path');

		$this->configImage();

		if (!$this->upload->do_upload('gambar')) {
			$data = array (
						'nm_img' => $this->input->post('nama'),
						'ket_img' => $this->input->post('keterangan'));
		} else {

			$fileinfo = $this->upload->data();

			$data = array (
						'nm_img' => $this->input->post('nama'),
						'ket_img' => $this->input->post('keterangan'),
						'path_img' => $fileinfo['file_name']);

			unlink("./assets/img/". $img_path);
		}
 
			$this->m_image->update($data, $id);
			redirect('image', 'refresh');
	}

	function deleteImage()
	{
		$id = $this->input->post('id');
		$img_path = $this->input->post('path');

		unlink("./assets/img/". $img_path);

		$this->m_image->delete($id);
		redirect('image', 'refresh');
	}



}