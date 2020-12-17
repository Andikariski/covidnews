<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trafalgar Landing Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css?v=2" />
    <link rel="stylesheet" href="../css/style.css?v=2">
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
                        <a class="nav-link" href="kasus.php">Kasus</a>
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
                        <a class="nav-link active" href="daftar.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <!-- login section -->
    <section>
        <div class="container">
            <div class="row mx-auto my-auto justify-content-between">
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="20">
                    <div class="">
                        <img class="img-fluid" src="../assets/banner/ilustrasi-registrasi.png">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 pt-7" data-aos="fade-right">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">nama lengkap</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">kata sandi</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">konfirmasi kata sandi</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <button type="submit" class="btn btn-info mt-4">daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- login section ends -->

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
    <!-- <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script> -->

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