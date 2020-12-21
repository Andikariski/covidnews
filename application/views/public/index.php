<div class="jumbotron bg-white">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5 text-center text-md-left">
                <h1 class="h1 font-weight-bold">Apa itu COVID-19?</h1>
                <p class="lead text-secondary my-4">Pneumonia Coronavirus Disease 2019 atau COVID-19 adalah penyakit peradangan paru yang disebabkan oleh Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>
                <a href="#" class="btn btn-primary rounded-pill px-4" role="button">yuk self checkup!</a>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="jumbotron__img">
                    <img src="./assets/assetsimg/home.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- card gejala covid -->
    <section>
        <h2 class="section-title">kenali gejalanya</h2>
        <span class="section-line"></span>
        <p class="text-secondary text-center w-75 mx-auto">Jangan Panik, Kenali gejalanya dan deteksi COVID-19 sejak dini. Hanya perlu jaga jarak, hindari jabat tangan dan bila sakit memakai masker, dan jaga kebersihan</p>
        <!-- card gejala -->
        <div class="row mt-5">

            <?php foreach ($tbl_gejala as $g) : ?>
                <div class="col-md-5 col-lg-4">
                    <div class="card service-card">
                        <div class="service-card__img">
                            <img src="./assets/img_gejala/<?= $g['gambar'] ?>" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $g['gejala'] ?></h5>
                            <p class="card-text"><?= $g['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
        <!-- card gejala ends -->
    </section>
    <!-- card gejala covid ends -->

    <!-- pencegahan section -->
    <section>
        <h2 class="section-title">Pencegahan COVID-19</h2>
        <span class="section-line"></span>
        <p class="text-secondary text-center w-75 mx-auto">Lindungi diri dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh badan kesehatan publik lokal Anda</p>
        <!-- card and image pencegahan section -->
        <div class="row justify-content-center mt-5">

            <?php foreach ($tbl_pencegahan as $p) : ?>
                <div class="col-md-5 col-lg-4">
                    <div class="card pencegahan-covid-card">
                        <div class="pencegahan-covid-card__img">
                            <img src="./assets/img_pencegahan/<?= $p['gambar'] ?>" alt="gejala_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['cara_pencegahan'] ?></h5>
                            <p class="card-text"><?= $p['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-md-6 col-lg-5">
                    <div class="jumbotron__img">
                        <img src="./assets/pencegahan_img/pencegahan.png" class="img-fluid" alt="" />
                    </div>
                </div> -->
        </div>
        <!-- card and image pencegahan section ends -->
    </section>
    <!-- pencegahan section ends -->
    <!-- blog section -->
    <section>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="feature-img">
                    <img src="./assets/assetsimg/banner/curva.png" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-lg-5 text-center text-md-left">
                <div class="fiture-detail">
                    <p class="h3 font-weight-bold">Jumlah Kasus Covid-19 di Indonesia</p>
                    <span class="feature-line"></span>
                    <p class="lead text-secondary text-justify">Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari.</p>
                    <p class="text-secondary">Cek grafik yang terjadi di Indonesia!</p>
                    <a href="#" class="btn btn-outline-primary px-4 py-2 font-weight-bold rounded-pill px-4" role="button">Cek Grafik</a>
                </div>
            </div>

        </div>
    </section>
    <!-- blog section ends -->
    <!-- service section -->
    <section>
        <div class="row justify-content-between align-items-center my-5 flex-md-row-reverse text-center text-md-left">
            <div class="col-md-6 col-lg-5">
                <div class="feature-img">
                    <img src="./assets/assetsimg/banner/rs.png" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-lg-5 text-center text-md-left">
                <div class="fiture-detail">
                    <p class="h3 font-weight-bold">Rumah Sakit Rujukan</p>
                    <span class="feature-line"></span>
                    <p class="lead text-secondary text-justify">Rumah sakit rujukan ini dapat membantu masyarakat dalam menemukan rumah sakit yang telah terverifikasi Kementrian Kesehatan dalam menangani kasus COVID-19</p>
                    <p class="text-secondary">Cek Rumah Sakit Rujukan terdekat anda!!</p>
                    <a href="#" class="btn btn-outline-primary px-4 py-2 font-weight-bold rounded-pill px-4" role="button">Cek Rumah Sakit</a>
                </div>
            </div>

        </div>
    </section>
</div>