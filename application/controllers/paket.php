<?php

class Paket extends CI_Controller
{
	public function index()
	{
		$atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['wedding'] = $this->model_kategori->data_paket_wo()->result();
		$this->load->view('gallery/head_gallery');
		$this->load->view('templates/header', $atas);
		$this->load->view('templates/leftside');
		$this->load->view('wo/paket', $data);
		// $this->load->view('gallery/footer_gallery');
		$this->load->view('gallery/js');
	}
}
