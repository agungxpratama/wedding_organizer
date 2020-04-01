<?php

class Kategori extends CI_Controller
{
    public function hiburan()
    {
        $data['hiburan'] = $this->model_kategori->data_hiburan()->result();
        $this->load->view('templates/head');
        $this->load->view('templates/header');
        $this->load->view('templates/leftside');
        $this->load->view('', $data);
    }
}
