<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templateFE/navbar.php');
            $this->load->view('public/masuk');
            $this->load->view('templateFE/footer.php');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_login', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'nama_lengkap' => $user['nama_lengkap']
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            } else {
                //Password salah
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Password salah!</center></div></div>');
                redirect('masuk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Username tidak terdaftar!</center></div></div>');
            redirect('masuk');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama_lengkap');
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Anda telah keluar!</center></div></div>');
        redirect('masuk');
    }
}
