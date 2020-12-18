<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/gejala.php');
        $this->load->view('templateBE/footer.php');
    }

    public function tambahGejala()
    {
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/gejala.php');
        $this->load->view('templateBE/footer.php');
    }
}
