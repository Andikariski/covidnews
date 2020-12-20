<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Databerita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Admin');
    }

    public function index()
    {


        $data['tbl_berita'] = $this->Admin->getAlldataBerita();
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/berita.php', $data);
        $this->load->view('templateBE/footer.php');
    }

    public function tambahBerita()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        if ($this->form_validation->run() == false) {
            redirect('databerita');
        } else {
            $this->Admin->tambahDataBerita();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Berita Berhasil DiTambahkan</div>');
            redirect('databerita');
        }
    }

    public function hapusDataBerita($id)
    {
        $this->Admin->hapusDataBerita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Berita Berhasil Dihapus</div>');
        redirect('databerita');
    }

    public function editDataBerita()
    {
        $id = $this->input->post('id_berita');

        $this->Admin->editDataBerita($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Berita Berhasil DiUbah</div>');
        redirect('databerita');
    }
}
