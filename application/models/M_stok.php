<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stok extends CI_Model {
    private $table = 'stok_darah';
    private $pk = 'id_stok';

    public function GetAll() {
        $this->db->order_by($this->pk, 'desc');
        return $this->db->get($this->table);
    }

    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function edit($kd) {
        $this->db->where($this->pk, $kd);
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

    public function updateStokDarahMasuk($id_stok, $qty) {
        $this->db->set('stok', "stok + $qty", false);
        $this->db->where($this->pk, $id_stok);
        return $this->db->update($this->table);
    }

    public function updateStokDarahKeluar($id_stok, $qty) {
        $this->db->set('stok', "stok - $qty", false);
        $this->db->where($this->pk, $id_stok);
        return $this->db->update($this->table);
    }


    public function getStokById($id_stok) {
        $this->db->where($this->pk, $id_stok);
        return $this->db->get($this->table)->row_array();
    }
}
