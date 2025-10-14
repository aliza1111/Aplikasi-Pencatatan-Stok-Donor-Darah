<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keluar extends CI_Model {
    private $table = 'data_darah_keluar';
    private $pk = 'id_keluar';

    public function GetAll() {
        $this->db->order_by($this->pk, 'desc');
        $this->db->join('stok_darah', 'data_darah_keluar.id_stok = stok_darah.id_stok');
        return $this->db->get($this->table);
    }

    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function edit($kd) {
        $this->db->where($this->pk, $kd);
        $this->db->join('stok_darah', 'data_darah_keluar.id_stok = stok_darah.id_stok');
        return $this->db->get($this->table)->row_array();
    }

    public function update($kd, $data) {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }

    public function delete($data) {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }

    public function search($data) {
        $this->db->like($this->pk, $data);
        $this->db->join('stok_darah', 'data_darah_keluar.id_stok = stok_darah.id_stok');
        return $this->db->get($this->table);
    }

    public function updateStokDarahKeluar($id_stok, $qty) {
        $this->db->set('stok', "stok - $qty", false);
        $this->db->where('id_stok', $id_stok);
        return $this->db->update('stok_darah');
    }
}
