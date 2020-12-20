<?php
class Admin extends CI_model
{

    // Menampilkan semua data gejala pada admin
    public function getAlldatagejala()
    {
        return $this->db->get('tbl_gejala')->result_array();
    }

    // Hapus data gejala
    public function hapusDataGejala($id)
    {
        $this->db->where('id_gejala', $id);
        $this->db->delete('tbl_gejala');
    }

    // Edit Gejala
    public function editDatagejala($id)
    {
        $data = [
            "gejala"    => $this->input->post('gejala'),
            "deskripsi" => $this->input->post('deskripsi'),
        ];
        $this->db->where('id_gejala', $id);
        $this->db->update('tbl_gejala', $data);
    }

    // Menampilkan semua data pencegahan pada admin
    public function getAlldataPencegahan()
    {
        return $this->db->get('tbl_pencegahan')->result_array();
    }

    // Hapus data pencegahan
    public function hapusDataPencegahan($id)
    {
        $this->db->where('id_pencegahan', $id);
        $this->db->delete('tbl_pencegahan');
    }

    // Edit Pencegahan
    public function editDataPencegahan($id)
    {
        $data = [
            "cara_pencegahan"    => $this->input->post('cara_pencegahan'),
            "deskripsi" => $this->input->post('deskripsi'),
        ];
        $this->db->where('id_pencegahan', $id);
        $this->db->update('tbl_pencegahan', $data);
    }

    // Tambah data berita
    public function tambahDataBerita()
    {
        $data = [
            "judul_berita" => $this->input->post('judul_berita'),
            "isi_berita" => $this->input->post('isi_berita')
        ];

        $this->db->insert('tbl_berita', $data);
    }

    // Menampilkan semua data berita pada admin
    public function getAlldataBerita()
    {
        return $this->db->get('tbl_berita')->result_array();
    }

    // Hapus data berita
    public function hapusDataBerita($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('tbl_berita');
    }

    // Edit Berita
    public function editDataBerita($id)
    {
        $data = [
            "judul_berita"    => $this->input->post('judul_berita'),
            "isi_berita" => $this->input->post('isi_berita'),
        ];
        $this->db->where('id_berita', $id);
        $this->db->update('tbl_berita', $data);
    }
}
