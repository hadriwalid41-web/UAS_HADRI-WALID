<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('is_logged_in')) {
            $this->session->set_flashdata('error', 'Silakan login terlebih dahulu!');
            redirect('auth');
        }
        $this->load->model('Produk_model');
    }

    // Read: Tampilkan semua produk
    public function index() {
        $data['produk'] = $this->Produk_model->get_all();
        $this->load->view('produk/index', $data);
    }

    // Create: Form & Proses Tambah
    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga'       => $this->input->post('harga'),
                'stok'        => $this->input->post('stok')
            ];
            $this->Produk_model->insert($data);
            redirect('produk');
        }
        $this->load->view('produk/tambah');
    }

    // Update: Form & Proses Edit
    public function edit($id) {
        if ($this->input->post()) {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga'       => $this->input->post('harga'),
                'stok'        => $this->input->post('stok')
            ];
            $this->Produk_model->update($id, $data);
            redirect('produk');
        }
        $data['produk'] = $this->Produk_model->get_by_id($id);
        $this->load->view('produk/edit', $data);
    }

    // Delete: Hapus Data
    public function hapus($id) {
        $this->Produk_model->delete($id);
        redirect('produk');
    }
}