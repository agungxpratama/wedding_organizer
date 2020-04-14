<?php

class Jasa extends CI_Controller
{
    public function index()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['dekorasi'] = $this->model_kategori->data_dekorasi()->result();
        $this->load->view('templates/head');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/dekorasi', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('templates/js');
    }
    public function gedung()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['gedung'] = $this->model_kategori->data_gedung()->result();
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/gedung', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function ketering()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ketering'] = $this->model_kategori->data_ketering()->result();
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/ketering', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function foto()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['foto'] = $this->model_kategori->data_foto()->result();
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/foto', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function hiburan()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['hiburan'] = $this->model_kategori->data_hiburan()->result();
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/hiburan', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_dekorasi($idjasa)
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['dekorasi'] = $this->model_wo->detail_dekorasi($idjasa);
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_dekorasi', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_foto()
    {
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_foto');
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_gedung()
    {
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_gedung');
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_hiburan($idjasa)
    {

        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['hiburan'] = $this->model_wo->detail_hiburan($idjasa);
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_hiburan', $data);
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_ketering()
    {
        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_ketering');
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function detail_mc()
    {

        $this->load->view('gallery/head_gallery');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_mc');
        // $this->load->view('gallery/footer_gallery');
        $this->load->view('gallery/js');
    }
    public function tambah_ke_pesanan($id)
    {
        $vendor = $this->model_wo->find($id);

        $data = array(
            'id' => $vendor->idjasa,
            'qty' => 1,
            'price' => $vendor->harga,
            'name' => $vendor->nama_vendor
        );
        $this->cart->insert($data);
        redirect('beranda/pesanan');
    }

    public function detail_keranjang()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/head');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('jasa/detail_keranjang');
        $this->load->view('templates/js');
    }
}
