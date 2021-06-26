<?php

class Model_barang extends CI_Model
{
    // menampilkan data
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    // menambah data
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function haspus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}