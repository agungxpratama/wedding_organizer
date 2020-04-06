<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['admin'] = $this->model_admin->tampil()->result();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/konten', $data);
        $this->load->view('admin/js');
    }

    public function ad_pemesanan()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/pemesanan');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }

    public function ad_pesanan()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/pesanan');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }
    public function datakon()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/konten_datakonsumen');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }

    public function dataven()
    {
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/konten_datavendor');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }
    public function kelkon()
    {
        $data['admin'] = $this->model_admin->tampil()->result();
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/konten_kelkonsumen', $data);
        $this->load->view('admin/js');
    }
    public function kelven()
    {
        $data['admin'] = $this->model_admin->tampil()->result();
        $atas['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header',$atas);
        $this->load->view('admin/leftside');
        $this->load->view('admin/konten_kelvendor');
        $this->load->view('admin/footer');
        $this->load->view('admin/js');
    }
    public function profile()

    {
        $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/head');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/leftside');
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
