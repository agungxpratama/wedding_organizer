<?php

class Model_admin extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('tb_kategori', $data);
    }
    public function tampil()
    {
        return $this->db->get('tb_kategori');
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
