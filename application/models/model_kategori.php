<?php

class Model_kategori extends CI_Model
{
    public function data_hiburan()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'hiburan'));
    }
    public function data_wo()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'wo'));
    }
    public function data_foto()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'foto'));
    }
    public function data_dekorasi()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'dekorasi'));
    }
    public function data_gedung()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'gedung'));
    }
    public function data_ketering()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'ketering'));
    }
    public function data_paket_wo()
    {
        return $this->db->get_where('tb_jasa', array('kategori' => 'wo'));
    }
}
