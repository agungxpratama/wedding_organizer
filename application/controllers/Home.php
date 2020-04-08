<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/leftside');
        $this->load->view('templates/konten');
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }
    public function wo()
    {
        $this->load->view('templates/head');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('wo/wo_konten');
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }
    public function FunctionName()
    {
        $this->load->view('home/index');
    }
    public function tambah_pemesanan()
    {
        $nama_vendor = $this->input->post('nama_vendor');
        $paket = $this->input->post('paket');
        $harga = $this->input->post('harga');
        $keterangan = $this->input->post('keterangan');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tglpernikahan = $this->input->post('tglpernikahan');

        $data = array(
            'nama_vendor'   => $nama_vendor,
            'paket'         => $paket,
            'harga'         => $harga,
            'keterangan'    => $keterangan,
            'nama_lengkap'  => $nama_lengkap,
            'alamat'        => $alamat,
            'no_hp'         => $no_hp,
            'tglpernikahan' => $tglpernikahan

            // 'nama kolom di db' => $nama_variabel
        );

        $this->model_wo->tambah_data($data);
        redirect('templates/pesanan');
    }
    public function pemesanan($id)
    {
        $where =  array('idjasa' => $id,);
        $data['vendor'] = $this->model_wo->view_where('tb_jasa', $where)->row();
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('templates/pemesanan', $data);
        // $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }
    public function transaksi()
    {
        $this->load->view('templates/head');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('templates/transaksi');
        // $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }
    public function pesanan()
    {
        $atas['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head');
        $this->load->view('templates/header', $atas);
        $this->load->view('templates/leftside');
        $this->load->view('templates/pesanan');
        // $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function myprofile()

    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/head');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/leftside');
        $this->load->view('templates/myprofile', $data);
        $this->load->view('templates/js');
    }

    public function editprofile()

    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/head');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/leftside');
            $this->load->view('templates/editprofile', $data);
            $this->load->view('templates/js');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['upload_path'] = './assets/images/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('nama', $nama);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Profile mu berhasil di perbaharui !!
              </div>');
            redirect('home/myprofile');
        }
    }
}
