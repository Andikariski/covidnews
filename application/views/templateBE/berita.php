<br>
<div class="content-wrapper">
    <section class="content header">
        <div class="container-fluid">
            <?= $this->session->flashdata('message') ?>
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus-circle"></i>
                        Tambah Berita
                    </button>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Berita</th>
                                <th>Isi Berita</th>
                                <th>Tanggal Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($tbl_berita as $b) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $b['judul_berita'] ?></td>
                                    <td><?= $b['isi_berita'] ?></td>
                                    <td><?= date('d F Y', strtotime($b['tanggal_update'])) ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>databerita/hapusDataBerita/<?= $b['id_berita'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                        <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Edit<?= $b['id_berita'] ?>"><i class=" fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
    </section>

    <!-- Modal tambah gejala -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Berita</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="databerita/tambahBerita" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" class="form-control" placeholder="Masukan Judul Berita" name="judul_berita" required>
                            <?= form_error('judul_berita', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Isi berita</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan deskripsi" name="isi_berita" required></textarea>
                            <?= form_error('isi_berita', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input type="submit" name="Submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Modal Update Berita -->
    <?php foreach ($tbl_berita as $b) : ?>
        <div class="modal fade" id="Edit<?= $b['id_berita'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit data berita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('databerita/editDataBerita') ?>" method="POST">
                            <div class="form-group">
                                <label>Gejala</label>
                                <input type="hidden" class="form-control" placeholder="Masukan gejala" name="id_berita" value="<?= $b['id_berita'] ?>">
                                <input type="text" class="form-control" placeholder="Masukan Judul" name="judul_berita" value="<?= $b['judul_berita'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Masukan Isi berita" name="isi_berita"><?= $b['isi_berita'] ?></textarea>
                            </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input type="submit" name="Submit" value="Simpan" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php endforeach; ?>
</div>