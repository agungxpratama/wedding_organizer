<?php

class Model_vendor extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_jasa');
    }
    public function tambah_data($data)
    {
        $this->db->insert('tb_jasa', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($id)
    {
        return $this->db->query("SELECT * FROM tb_jasa where idjasa = " . $id);
    }

    public function update_data($data, $hasil)
    {

        $this->db->set($data);
        $this->db->where('idjasa', $hasil);
        $this->db->update('tb_jasa');
    }

    public function detail_paket($idjasa)
    {
        $result = $this->db->where('idjasa', $idjasa)->get('tb_jasa');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
