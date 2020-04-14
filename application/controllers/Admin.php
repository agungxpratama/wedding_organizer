<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_admin');
        $this->load->model('M_All');
        $this->load->library('form_validation');
    }

    public function header()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
    }
    public function index()
    {
        $this->header();
        $data['admin'] = $this->model_admin->tampil()->result();
        $this->load->view('admin/konten', $data);
        $this->load->view('admin/js');
    }

    public function rekapVendor()
    {
        // code...
    }

    public function validasiVendor()
    {
        // code...
    }

    public function kategoriVendor()
    {
        // code...
    }

    public function ad_pemesanan()
    {
        $this->header();
        $this->load->view('admin/pemesanan');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }

    public function ad_pesanan()
    {
        $this->header();
        $data['pesanan'] = $this->M_All->join()->result();
        $this->load->view('admin/pesanan', $data);
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }

    public function prosesPesanan($id)
    {
        $where = array('id_pesanan' => $id, );
        $pesanan = $this->M_All->join_where('id_pesanan = '.$id)->row_array();
        $data = array(
            'fk_idkonsumen' => $pesanan['username'],
            'fk_idvendor' => $pesanan['id_vendor'],
            'harga' => $pesanan['price'],
            'paket' => $pesanan['paket'],
        );
        $this->M_All->insert('tb_transaksi', $data);
        $data_pesanan = array('status' => 1, );
        $this->M_All->update('pesanan', $where, $data_pesanan);
        // print_r($pesanan);
        redirect('admin/transaksi');
    }

    public function transaksi()
    {
        $this->header();
    }
    public function datakon()
    {
        $this->header();
        $data['konsumen'] = $this->db->get_where('konsumen', ['role_id' => 1])->result();
        $this->load->view('admin/konten_datakonsumen', $data);
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }

    public function dataven()
    {
        $this->header();
        $this->load->view('admin/konten_datavendor');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }
    public function kelkon()
    {
        $this->header();
        $data['admin'] = $this->model_admin->tampil()->result();
        $this->load->view('admin/konten_kelkonsumen', $data);
        $this->load->view('admin/js');
    }
    public function kelven()
    {
        $this->header();
        $data['admin'] = $this->model_admin->tampil()->result();
        $this->load->view('admin/konten_kelvendor');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }
    public function profile()

    {
        $this->header();
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/js');
    }

    public function editprofil()

    {
        $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/head');
            $this->load->view('admin/header', $data);
            $this->load->view('admin/leftside');
            $this->load->view('admin/editprofil', $data);
            $this->load->view('admin/js');
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
            redirect('admin/profile');
        }
    }
    public function tambah()
    {
        $nama_kategori = $this->input->post('kategori');

        $data = array(
            'nama_kategori' => $nama_kategori
        );

        $this->model_admin->tambah($data);
        redirect('admin/kelkon');
    }
    public function hapus($id)
    {
        $where = array('idkategori' => $id);
        $this->model_vendor->hapus_data($where, 'tb_kategori');
        redirect('admin/kelkon');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
