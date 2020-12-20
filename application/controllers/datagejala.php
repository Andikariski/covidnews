<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datagejala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin');
    }

    public function index()
    {
        $data['tbl_gejala'] = $this->Admin->getAlldatagejala();
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/gejala.php', $data);
        $this->load->view('templateBE/footer.php');
    }

    public function tambahgejala()
    {
        $data = [
            "gejala" => $this->input->post('gejala'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';
            $config['upload_path'] = './assets/img_gejala';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $upload_image = $this->upload->data('file_name');
                $this->db->set('gambar', $upload_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('tbl_gejala', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Gejala Berhasil DiTambahkan</div>');
        redirect('datagejala');
    }

    public function hapusDataGejala($id)
    {
        $this->Admin->hapusDataGejala($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Gejala Berhasil Dihapus</div>');
        redirect('datagejala');
    }

    public function editDataGejala()
    {
        $id = $this->input->post('id_gejala');

        $this->Admin->editDatagejala($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Gejala Berhasil DiUbah</div>');
        redirect('datagejala');
    }
}
