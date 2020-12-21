<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Admin');
    }

    public function index()
    {

        $data['tbl_pencegahan'] = $this->Admin->getAlldataPencegahan();
        $data['tbl_gejala'] = $this->Admin->getAlldatagejala();
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/index', $data);
        $this->load->view('templateFE/footer.php');
    }
}
