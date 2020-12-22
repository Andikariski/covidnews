<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('text');
    }


    public function index()
    {
        $data['tbl_berita'] = $this->m_data->tampil_berita()->result();
        $this->load->view('templateFE/navbar.php');
        $this->load->view('public/berita', $data);
        $this->load->view('templateFE/footer.php');
    }
}
