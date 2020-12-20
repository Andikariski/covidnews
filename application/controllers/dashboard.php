<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/dashboard.php');
        $this->load->view('templateBE/footer.php');
    }
}
