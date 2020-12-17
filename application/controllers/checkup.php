<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkup extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/checkup');
        $this->load->view('templateFE/footer.php');
    }
}
