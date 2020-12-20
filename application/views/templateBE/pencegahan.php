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
                        Tambah Pencegahan
                    </button>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cara pencegahan</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($tbl_pencegahan as $p) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $p['cara_pencegahan'] ?></td>
                                    <td><?= $p['deskripsi'] ?></td>
                                    <td> <img src="./assets/img_pencegahan/<?= $p['gambar'] ?>" height="35%" width="35%"></td>
                                    <td>
                                        <a href="<?= base_url() ?>datapencegahan/hapusDataPencegahan/<?= $p['id_pencegahan'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                        <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Edit<?= $p['id_pencegahan'] ?>"><i class=" fas fa-edit"></i> Edit</a>
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
                    <h4 class="modal-title">Tambah data pencegahan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('datapencegahan/tambahPencegahan') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Cara Pencegahan</label>
                            <input type="text" class="form-control" placeholder="Masukan Pencegahan" name="cara_pencegahan" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan deskripsi" name="deskripsi" required></textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="gambar" required>
                            <label class="custom-file-label" for="customFile">Gambar Pencegahan</label>
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


    <!-- Modal edit gejala -->
    <?php foreach ($tbl_pencegahan as $p) : ?>

        <div class="modal fade" id="Edit<?= $p['id_pencegahan'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit data gejala</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('datapencegahan/editDataPencegahan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Gejala</label>
                                <input type="hidden" class="form-control" placeholder="Masukan gejala" name="id_pencegahan" value="<?= $p['id_pencegahan'] ?>">
                                <input type="text" class="form-control" placeholder="Masukan gejala" name="cara_pencegahan" value="<?= $p['cara_pencegahan'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Masukan deskripsi" name="deskripsi"><?= $p['deskripsi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('./assets/img_pencegahan/') . $p['gambar'] ?>" class="img-thumbnail">
                            </div>
                            <div class="custom-file">
                                <!-- <input type="file" class="custom-file-input" id="customFile" name="gambar"> -->
                                <label class="custom-file-label" for="customFile"><?= $p['gambar'] ?></label>
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