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

    public function index()
    {
        $where_user = array('username' => $this->session->userdata('username'), );
        $data['user'] = $this->M_All->view_where('user', $where_user)->row_array();
        $this->load->view('beranda/header', $data);
        $this->load->view('templates/konten');
        $this->load->view('beranda/footer');
    }

    public function paket()
    {
        $where_user = array('username' => $this->session->userdata('username'), );
        $data['user'] = $this->M_All->view_where('user', $where_user)->row_array();
        $data['wedding'] = $this->M_All->get('tb_jasa')->result();
        $this->load->view('beranda/header', $data);
        $this->load->view('konten/home/Paket');
        $this->load->view('beranda/footer');
    }

    public function vendor()
    {
        // code...
    }

    public function galery()
    {
        // code...
    }

    public function pesanan()
    {
        // code...
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
