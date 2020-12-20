<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapencegahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin');
    }

    public function index()
    {
        $data['tbl_pencegahan'] = $this->Admin->getAlldataPencegahan();
        $this->load->view('templateBE/header.php');
        $this->load->view('templateBE/sidebar.php');
        $this->load->view('templateBE/pencegahan.php', $data);
        $this->load->view('templateBE/footer.php');
    }


    public function tambahPencegahan()
    {
        $data = [
            "cara_pencegahan" => $this->input->post('cara_pencegahan'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';
            $config['upload_path'] = './assets/img_pencegahan';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $upload_image = $this->upload->data('file_name');
                $this->db->set('gambar', $upload_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('tbl_pencegahan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Pencegahan Berhasil DiTambahkan</div>');
        redirect('datapencegahan');
    }

    public function hapusDataPencegahan($id)
    {
        $this->Admin->hapusDataPencegahan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Pencegahan Berhasil Dihapus</div>');
        redirect('datapencegahan');
    }

    public function editDataPencegahan()
    {
        $id = $this->input->post('id_pencegahan');

        $this->Admin->editDataPencegahan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Pencegahan Berhasil DiUbah</div>');
        redirect('datapencegahan');
    }
}
