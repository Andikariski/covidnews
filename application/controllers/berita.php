<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/berita');
        $this->load->view('templateFE/footer.php');
    }
}
