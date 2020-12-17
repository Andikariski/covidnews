<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trafalgar Landing Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css?v=2" />
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">C <span><img src="assets/icon.png" alt="">vidTest </span></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img src="./assets/bars.svg" width="25" alt="hamburger">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kasus.php">Kasus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rumah_sakit.php">Rumah Sakit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkup.php">Checkup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="masuk.php">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <!-- jumbotron -->
    <div class="jumbotron bg-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left">
                    <h1 class="h1 font-weight-bold">Kasus COVID-19</h1>
                    <p class="lead text-secondary my-4">Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari.</p>
                    <a href="#" class="btn btn-primary rounded-pill px-4" role="button">Cek Selengkapnya</a>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="jumbotron__img">
                        <img src="../assets/banner/curva.png" class="img-fluid" alt="banner img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron ends -->
    <!-- data section -->
    <section class="section-margin">
        <div class="container">

            <h1 style="text-align: center;" data-aos="zoom-in">Kasus Covid-19 Terkini</h1>
            <p style="text-align: center;" data-aos="zoom-in">Berikut adalah jumlah kasus Positif, Meninggal, dan Sembuh seluruh dunia</p>

            <div class="row">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="bg-danger box text-white">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-down">
                                <h5>Positif</h5>
                                <h4 id="data-kasus">
                                    <td><img width="50px" src="../assets/Preloader.svg">
                                </h4>
                                <h5>Orang</h5>
                            </div>
                            <div class="col-md-4" data-aos="fade-up">
                                <img src="../assets/sad.svg" style="width: 100px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="zoom-in">
                    <div class="bg-info box text-white">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-down">
                                <h5>Meninggal</h5>
                                <h4 id="data-mati">
                                    <td><img width="50px" src="../assets/Preloader.svg">
                                </h4>
                                <h5>Orang</h5>
                            </div>
                            <div class="col-md-4 " data-aos="fade-up">
                                <img src="../assets/cry.svg" style="width: 100px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="zoom-in">
                    <div class="bg-success box text-white">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-down">
                                <h5>Sembuh</h5>
                                <h4 id="data-sembuh">
                                    <td><img width="50px" src="../assets/Preloader.svg">
                                </h4>
                                <h5>Orang</h5>
                            </div>
                            <div class="col-md-4" data-aos="fade-up">
                                <img src="../assets/happy.svg" style="width: 100px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3" data-aos="zoom-in">
                    <div class="bg box text-black" style="background-color: rgb(65 ,47 ,179);">
                        <div class="row">
                            <div class="col-md-3" data-aos="fade-down">
                                <h2>INDONESIA</h2>

                                <h5>Positif : <span class="pos-id"></span></h5>
                                <h5>Meninggal : <span class="meninggal-id"></span></h5>
                                <h5>Sembuh : <span class="sembuh-id"></h5>

                            </div>
                            <div class="col-md-4" data-aos="zoom-in">
                                <img src="../assets/indonesia.svg" style="width: 150px">
                            </div>
                            <div class="col-md-5" data-aos="fade-down">
                                <h2>Terkini</h2>
                                <h5>Positif : <span class="pos-idtoday"></span></h5>
                                <h5>Meninggal : <span class="meninggal-idtoday"></span></h5>
                                <h5>Sembuh : <span class="sembuh-idtoday"></h5>
                                <h6 style="color: white">Update <span class="timeindo"> </h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-wrapper-scroll-y my-custom-scrollbar" data-aos="zoom-in">
                <div class="card mt-3">
                    <div class="card-header  text-white" data-aos="zoom-in" style="background-color: rgb(65 ,47 ,179);">
                        <b>Data Kasus Corona Virus diIndonesia Bedasarkan Provinsi</b>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%" data-aos="zoom-in">

                            <thead>
                                <th>No.</th>
                                <th>Nama Provinsi</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </thead>
                            <tbody id="table-data">
                                <tr>
                                    <td><img width="50px" src="../assets/Preloader.svg"></td>
                                    <td><img width="50px" src="../assets/Preloader.svg"></td>
                                    <td><img width="50px" src="../assets/Preloader.svg"></td>
                                    <td><img width="50px" src="../assets/Preloader.svg"></td>
                                    <td><img width="50px" src="../assets/Preloader.svg"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    <!-- data section ends -->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <!-- footer about -->
                    <div class="footer-about">
                        <p class="footer-title"></p>
                        <p>HOTLINE COVID-19 KEMENKES RI</p>
                        <p>Tlp. 199 ext 9</p>
                        <p>WEBSITE MITIGASI COVID-19 UMY</p>
                        <a class="text-white" href="">Covid-19.umy.ac.id</a>
                    </div>
                </div>
                <div class="col-md-4 col-md-4">
                    <p class="footer-title">Kontak</p>
                    <table>
                        <tr>
                            <td class="footer-about">Telp</td>
                            <td class="footer-about">: +62 274 387656 (hunting)</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Faks</td>
                            <td class="footer-about">: +62 274 387646</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Admisi</td>
                            <td class="footer-about">: +62 274 387649</td>
                        </tr>
                        <tr>
                            <td class="footer-about"></td>
                            <td class="footer-about"> +62 274 387656 Ext. 199 & 200 (hunting)</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Humas</td>
                            <td class="footer-about">: +62 274 387656 Ext. 115</td>
                        </tr>
                        <tr>
                            <td class="footer-about">Surel</td>
                            <td class="footer-about">: bhp@umy.ac.id</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-md-4">
                    <p class="footer-title">alamat</p>
                    <p class="footer-about">Kampus Terpadu UMY</p>
                    <p class="footer-about">Jl Brawijaya</p>
                    <p class="footer-about">Kasihan, Bantul</p>
                    <p class="footer-about">Yogyakarta 55183</p>
                    <p class="footer-about">Lihat di Peta Google</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-primary">Copyright &copy;<script>
            document.write(new Date().getFullYear());
        </script> Smatecin All rights reserved
    </div>
    <!-- Copyright -->
    <!-- footer ends -->
    <!-- Javascript Tags -->
    <script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/data.js"></script>
</body>

</html>