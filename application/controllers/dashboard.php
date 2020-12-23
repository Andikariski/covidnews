<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin');
    }

    public function index()
    {
        $data['id_pencegahan'] = $this->Admin->CountDataPencegahan();
        $data['id_gejala'] = $this->Admin->CountDataGejala();
        $data['id_berita'] = $this->Admin->CountDataBerita();
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/dashboard.php', $data);
        $this->load->view('templateBE/footer.php');
    }
}
