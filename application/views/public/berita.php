<div class="jumbotron bg-white">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5 text-center text-md-left">
                <h1 class="h1 font-weight-bold">Berita terbaru perkembangan Covid-19</h1>
                <p class="lead text-secondary my-4"></p>
                <center><img width="200px" src="https://media.giphy.com/media/Ws45dwz1GX8fzvHXdC/giphy.gif" data-aos="fade-up" data-aos-anchor-placement="top-bottom"></center>
                <!-- <a href="#" class="btn btn-primary rounded-pill px-4" role="button">Cek Selengkapnya</a> -->
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="jumbotron__img">
                    <img src="./assets/assetsimg/banner/NEWS.png" class="img-fluid" alt="banner img" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jumbotron ends -->
<!-- call to action  -->
<section class="section-margin">
    <div class="container">
        <h2 data-aos="zoom-in" class="section-intro__title text-center text-dark">Berita terbaru</h2>
        <div class="row">

            <?php
            $no = 1;
            foreach ($tbl_berita as $u) { ?>
                <div class="col-md-4 col-sm-12 mb-3">

                    <div class="card">
                        <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= $u->judul_berita ?></h5>
                            <p class="card-text"><?= word_limiter($u->isi_berita, 20) ?></p>
                            <button type="button" class="btn btn-primary">Selengkapnya</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">sejak : <?= $u->tanggal_update ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    </div>
</section>