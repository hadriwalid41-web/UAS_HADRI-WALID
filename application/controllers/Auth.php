<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    // 1. Tampilkan Halaman Login & Proses Login
    public function index() {
        // Jika sudah login, langsung lempar ke dashboard/produk
        if ($this->session->userdata('is_logged_in')) {
            redirect('produk');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_model->get_user($username);

            // Verifikasi User & Password (menggunakan password_verify)
            if ($user && md5($password) === $user['password']) {
    
                // Set Session jika password cocok
                $session_data = [
                    'user_id'      => $user['id'],
                    'username'     => $user['username'],
                    'is_logged_in' => TRUE
                ];
                $this->session->set_userdata($session_data);

                redirect('produk');
            } else {
                $this->session->set_flashdata('error', 'Username atau Password salah!');
                redirect('auth');
            }
        }

        $this->load->view('auth/login');
    }

    // 2. Proses Logout
    public function logout() {
        // --- HAPUS SESSION ---
        $this->session->unset_userdata(['user_id', 'username', 'is_logged_in']);
        $this->session->sess_destroy(); // Hapus seluruh session aktif

        $this->session->set_flashdata('success', 'Anda telah berhasil logout.');
        redirect('auth');
    }
}