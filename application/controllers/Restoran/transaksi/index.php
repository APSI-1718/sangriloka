<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller
{
	function index(){
		$this->load->view('restoran/transaksi/template/header');
		$this->load->view('restoran/transaksi/template/menu');
		$this->load->view('restoran/transaksi/isi');
		$this->load->view('restoran/transaksi/template/footer');		
	}
}
 ?>