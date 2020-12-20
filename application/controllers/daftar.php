<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login');
    }

    public function index()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_login.email]');
        $this->form_validation->set_rules('password1', 'password', 'trim|required|min_length[8]|matches[password2]', [
            'matches' => 'Kata sandi tidak cocok!',
            'min_length' => 'Kata Sandi minimal 8 karakter!'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[8]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateFE/navbar.php');
            $this->load->view('public/daftar');
            $this->load->view('templateFE/footer.php');
        } else {
            $data = [
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
            ];
            $this->login->daftar($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <center>Selamat, Akun anda sudah terbuat!</center>
          </div>');
            redirect('masuk');
        }
    }
}
