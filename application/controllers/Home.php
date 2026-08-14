<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // Menyusun data yang ingin dikirim ke View
        $data['judul'] = 'Halaman Utama CI3';
        $data['pesan'] = 'Selamat datang di tutorial pembuatan web CodeIgniter 3!';

        // Memanggil View 'home_view' dan mengoper $data
        $this->load->view('home_view', $data);
    }
}