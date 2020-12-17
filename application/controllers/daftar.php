<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Daftar extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/daftar');
        $this->load->view('templateFE/footer.php');
    }
}
