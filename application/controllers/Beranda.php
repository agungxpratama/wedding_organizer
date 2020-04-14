<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct()
    {
 		parent::__construct();
 		// memuat model yang bertujuan tuntuk mendapatkan data admin
 		$this->load->model('M_All');

 		// if($this->session->userdata('role') != "admin"){
 		// 	redirect(base_url("index.php/home"));
 		// }
 	}

    public function header()
    {
        $where_user = array('username' => $this->session->userdata('username'), );
        $data['user'] = $this->M_All->view_where('user', $where_user)->row_array();
        $this->load->view('beranda/header', $data);
    }

    public function index()
    {
        $this->header();
        $this->load->view('templates/konten');
        $this->load->view('beranda/footer');
    }

    public function paket()
    {
        $this->header();
        $data['wedding'] = $this->model_kategori->data_paket_wo()->result();
		$this->load->view('wo/paket', $data);
		// $this->load->view('gallery/footer_gallery');
        $this->load->view('beranda/footer');
    }

    public function wedding_organizer()
    {
        $this->header();
        $data['wedding'] = $this->model_kategori->data_wo()->result();
        $this->load->view('wo/wo_konten', $data);
        $this->load->view('beranda/footer');
    }

    public function detail_wo($id)
    {
        $this->header();
        $data['wedding'] = $this->model_wo->detail_wo($id);
        $this->load->view('wo/detail', $data);
        $this->load->view('beranda/footer');
    }

    public function jasa($kategori)
    {

    }

    public function vendor()
    {
        // code...
    }

    public function galery()
    {
        //
    }

    public function pesanan()
    {
        $this->header();
        $data['pesanan'] = $this->M_All->join()->result();
        $this->load->view('templates/pesanan', $data);
        // $this->load->view('templates/konten');
        $this->load->view('beranda/footer');
    }

    public function simpan_pesanan()
    {
        $keranjang = $this->cart->contents();
        // print_r($keranjang);
        $keranjang2 = array_keys($keranjang);
        // echo($keranjang2[0]);
        for ($i=0; $i < count($keranjang2); $i++) {
            $data = array(
                'id_vendor' => $keranjang[$keranjang2[$i]]['id'],
                'qty' => $keranjang[$keranjang2[$i]]['qty'],
                'price' => $keranjang[$keranjang2[$i]]['price'],
                'name' => $keranjang[$keranjang2[$i]]['name'],
                'username' => $this->session->userdata('id'),
                'status' => 0,
                'tgl_pesan' => date('d-m-Y'),
            );
            $this->db->insert('pesanan', $data);
            // $keranjang2[$i];
        }
        // echo $keranjang[$keranjang2[0]]['id'];
        // foreach ($keranjang2 as $key) {
        //     echo $key.'<br>';
        // }
        // foreach ($keranjang as $k) {
            // $this->db->insert('pesanan', $k);
        // }
        $keranjang = $this->cart->destroy();
        redirect('beranda/pesanan');
    }

    public function Keranjang()
    {
        // code...
    }

    public function detail_keranjang()
    {
        $this->header();
        $this->load->view('jasa/detail_keranjang');
        $this->load->view('templates/js');
    }

    public function tambah_keranjang($id)
    {
        $vendor = $this->model_wo->find($id);

        $data = array(
            'id' => $vendor->idjasa,
            'qty' => 1,
            'price' => $vendor->harga,
            'name' => $vendor->nama_vendor,

        );
        $this->cart->insert($data);
        redirect('beranda/pesanan');
    }

    public function transaksi()
    {
        $this->header();
        $this->load->view('templates/transaksi');
        $this->load->view('templates/js');
    }

    public function pembayaran()
    {
        // code...
    }

    function Logout(){
        $this->session->sess_destroy();
        redirect('beranda');
    }
}
