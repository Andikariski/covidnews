<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasus extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/kasus');
        $this->load->view('templateFE/footer.php');
    }
}
