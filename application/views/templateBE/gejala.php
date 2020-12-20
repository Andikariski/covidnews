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
                        Tambah gejala
                    </button>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gejala</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($tbl_gejala as $g) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $g['gejala'] ?></td>
                                    <td><?= $g['deskripsi'] ?></td>
                                    <td> <img src="./assets/img_gejala/<?= $g['gambar'] ?>" height="35%" width="35%"></td>
                                    <td>
                                        <a href="<?= base_url() ?>datagejala/hapusDatagejala/<?= $g['id_gejala'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                        <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Edit<?= $g['id_gejala'] ?>"><i class=" fas fa-edit"></i> Edit</a>
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
                    <h4 class="modal-title">Tambah data gejala</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('datagejala/tambahgejala') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Gejala</label>
                            <input type="text" class="form-control" placeholder="Masukan gejala" name="gejala" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Masukan deskripsi" name="deskripsi" required></textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="gambar" required>
                            <label class="custom-file-label" for="customFile">Gambar gejala</label>
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
    <?php foreach ($tbl_gejala as $g) : ?>

        <div class="modal fade" id="Edit<?= $g['id_gejala'] ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit data gejala</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('datagejala/editDataGejala') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Gejala</label>
                                <input type="hidden" class="form-control" placeholder="Masukan gejala" name="id_gejala" value="<?= $g['id_gejala'] ?>">
                                <input type="text" class="form-control" placeholder="Masukan gejala" name="gejala" value="<?= $g['gejala'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" placeholder="Masukan deskripsi" name="deskripsi" required><?= $g['deskripsi'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('./assets/img_gejala/') . $g['gambar'] ?>" class="img-thumbnail">
                            </div>
                            <div class="custom-file">
                                <!-- <input type="file" class="custom-file-input" id="customFile" name="gambar"> -->
                                <label class="custom-file-label" for="customFile"><?= $g['gambar'] ?></label>
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