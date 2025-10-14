<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_informasi extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'informasi_detail_darah';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'id_darah';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'desc');
        $this->db->join('stok_darah', 'informasi_detail_darah.id_stok=stok_darah.id_stok');
        return $this->db->get($this->table);
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function edit($kd)
    {
        $this->db->where($this->pk, $kd);
        $this->db->join('stok_darah', 'informasi_detail_darah.id_stok=stok_darah.id_stok');
        return $this->db->get($this->table)->row_array();
    }
    public function update($kd, $data)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }
    public function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }
    public function search($data)
    {
        $this->db->like($this->pk, $data);
        $this->db->join('stok_darah', 'informasi_detail_darah.id_stok=stok_darah.id_stok');
        return $this->db->get($this->table);
    }
}
