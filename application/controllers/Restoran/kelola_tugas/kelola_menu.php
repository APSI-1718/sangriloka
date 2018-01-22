<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelola_menu extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('restoran/pengelolaan_restoran/kelola_menudb');
	}

	public function menu()
	{
		$data['kelm'] = $this->kelola_menudb->select();
		$data['kodeunik'] = $this->kelola_menudb->buat_kode();

		$this->load->view('template/header');
		$this->load->view('restoran/pengelolaan_restoran/menu_kr');
		$this->load->view('restoran/pengelolaan_restoran/kelola_menu', $data);
		$this->load->view('restoran/pengelolaan_restoran/modal');
		$this->load->view('template/footer');
	}

	function insert_data()
	{
		$data = array(
			'no_menu' => $this->input->post('no_menu'),
			'daftar_menu' => $this->input->post('daftar_menu'),
			'harga' => $this->input->post('harga'),
			'jenismakanan' => $this->input->post('jenismakanan'));

		$this->kelola_menudb->insert($data);
		redirect('Restoran/kelola_tugas/kelola_menu/menu', 'refresh');
	}

	function edit_data()
	{
		$no_menu = $this->input->post('no_menu');

		if ($this->input->post('no_menu') == null) {
			$data = array (
				'no_menu' => $this->input->post('no_menu'),
			'daftar_menu' => $this->input->post('daftar_menu'),
			'harga' => $this->input->post('harga'),
			'jenismakanan' => $this->input->post('jenismakanan'));
		} else {
				$data = array (
				'no_menu' => $this->input->post('no_menu'),
			'daftar_menu' => $this->input->post('daftar_menu'),
			'harga' => $this->input->post('harga'),
			'jenismakanan' => $this->input->post('jenismakanan'));
		}
			$where = array ('no_menu' => $no_menu);
			$this->kelola_menudb->update($data, $where);
			redirect('Restoran/kelola_tugas/kelola_menu/menu', 'refresh');
	}

	function delete_data()
	{
		$no_menu = $this->input->post('no_menu');
		$where = array ('no_menu' => $no_menu);
		$this->kelola_menudb->delete($where);
		redirect('Restoran/kelola_tugas/kelola_menu/menu', 'refresh');
	}

}

