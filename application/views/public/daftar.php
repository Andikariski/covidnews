<div class="card shadow-sm container mt-5 mb-5">
    <div class="container mt-5 mb-5">
        <div class="row mx-auto my-auto justify-content-between">
            <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="20">
                <div class="">
                    <img class="img-fluid" src="./assets/assetsimg/banner/ilustrasi-registrasi.png">
                </div>
            </div>
            <div class="col-md-6 col-lg-5 pt-7" data-aos="fade-right">
                <form method="post" action="<?= base_url('daftar') ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">nama lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                        <?=form_error('nama_lengkap','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                        <?=form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">kata sandi</label>
                        <input type="password" name="password1" class="form-control" id="password1">
                        <?=form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">konfirmasi kata sandi</label>
                        <input type="password" name="password2" class="form-control" id="password2">
                    </div>
                    <button type="submit" class="btn btn-info mt-4">daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>