<?php

class Model_wo extends CI_Model
{

    public function tampil_hiburan()
    {
        return $this->db->get('tb_jasa');
    }
    public function detail_hiburan($idjasa)
    {
        $result = $this->db->where('idjasa', $idjasa)->get('tb_jasa');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function detail_dekorasi($idjasa)
    {
        $result = $this->db->where('idjasa', $idjasa)->get('tb_jasa');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function detail_wo($idjasa)
    {
        $result = $this->db->where('idjasa', $idjasa)->get('tb_jasa');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


    public function find($id)
    {
        $result = $this->db->where('idjasa', $id)
            ->limit(1)
            ->get('tb_jasa');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function tampil_data()
    {
        return $this->db->get('tb_jasa');
    }
    public function tambah_data($data)
    {
        $this->db->insert('tb_transaksi', $data);
    }
    public function view_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
