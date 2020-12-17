<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function index()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/index');
        $this->load->view('templateFE/footer.php');
    }

    public function kasusCovid()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/kasus');
        $this->load->view('templateFE/footer.php');
    }


    public function rumahSakit()
    {
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/rumahsakit');
        $this->load->view('templateFE/footer.php');
    }
}
