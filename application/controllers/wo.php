<?php

class Wo extends CI_Controller
{
	public function index()
	{
		$atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['wedding'] = $this->model_kategori->data_wo()->result();
		$this->load->view('gallery/head_gallery');
		$this->load->view('templates/header', $atas);
		$this->load->view('templates/leftside');
		$this->load->view('wo/wo_konten', $data);

		$this->load->view('gallery/js');
	}
	public function detail($idjasa)
	{
		$atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['wedding'] = $this->model_wo->detail_wo($idjasa);
		$this->load->view('gallery/head_gallery');
		$this->load->view('templates/header', $atas);
		$this->load->view('templates/leftside');
		$this->load->view('wo/detail', $data);
		$this->load->view('gallery/js');
	}
}
