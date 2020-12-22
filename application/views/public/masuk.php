<?= $this->session->flashdata('message') ?>
<div class="card shadow-sm container mt-5 mb-5">
    <div class="container mt-5 mb-5 container-login">
        <div class="row mx-auto my-auto justify-content-between">
            <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="20">
                <div class="">
                    <img class="img-fluid" src="./assets/assetsimg/banner/ilustrasi-login.png">
                </div>
            </div>
            <div class="col-md-6 col-lg-5 pt-7" data-aos="fade-right">
                <form action="<?= base_url('') ?>masuk" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">email</label>
                        <input type="email" name="email" class="form-control text-secondary" id="formGroupExampleInput2">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">kata sandi</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn btn-info mt-4">masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>