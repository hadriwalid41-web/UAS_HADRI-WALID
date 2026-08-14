<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

    // Ambil semua data produk
    public function get_all() {
        return $this->db->get('produk')->result_array();
    }

    // Simpan data baru
    public function insert($data) {
        return $this->db->insert('produk', $data);
    }

    // Ambil 1 produk berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    // Update data produk
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('produk', $data);
    }

    // Hapus data produk
    public function delete($id) {
        return $this->db->delete('produk', ['id' => $id]);
    }
}