<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/head_login');
            $this->load->view('login/login');
            $this->load->view('login/js');
        } else {
            $this->_login();
        }
    }


    public function _login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', [
            'username' => $username
        ])->row_array();

        if ($username == $user['username'] && $password == $user['password']) {

            $data = [
                'username' => $username,
                'id' => $user['idUser'],
                'role' => $user['role_id'],
                'status' => 'login',
            ];

            $this->session->set_userdata($data);

            if ($user['role_id'] == 1) {
                redirect('beranda');
            } elseif ($user['role_id'] == 2) {
                redirect('vendor');
            } else {
                redirect('admin');
            }
            } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Password dan Username tidak cocok !!
            </div>');

            redirect('login');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[3]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/head_login');
            $this->load->view('login/signup');
            $this->load->view('login/js');
        } else {

            $ambilDropdown = $this->input->post('dropdown');
            $roleId = 0;
            if ($ambilDropdown == "vendor") {
                $roleId = 2;
            } elseif ($ambilDropdown == "konsumen") {
                $roleId = 1;
            } else {
                $roleId = 3;
            }

            $data = array(
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.png',
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password1'),
                'role_id' => $roleId,
            );

            if ($ambilDropdown == "vendor") {
                $this->db->insert('tb_vendor', $data);
            } elseif ($ambilDropdown == "konsumen") {
                $this->db->insert('konsumen', $data);
            } else {
                $this->db->insert('admin', $data);
            }

            $this->db->insert('user', $data);

            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
