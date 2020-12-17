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
                        <a class="nav-link active" href="rumah_sakit.php">Rumah Sakit</a>
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
                    <center><img width="200px" src="https://media.giphy.com/media/Ws45dwz1GX8fzvHXdC/giphy.gif" data-aos="fade-up" data-aos-anchor-placement="top-bottom"></center>
                    <!-- <a href="#" class="btn btn-primary rounded-pill px-4" role="button">Cek Selengkapnya</a> -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="jumbotron__img">
                        <img src="../assets/banner/rs.png" class="img-fluid" alt="banner img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron ends -->
    <!-- table rumah sakit -->
    <section class="section-margin">
        <div class="container">

            <h1 data-aos="zoom-in" style="text-align: center;">Rumah Sakit Rujukan</h1>
            <p data-aos="zoom-in" style="text-align: center;">Rumah sakit rujukan ini dapat membantu masyarakat dalam menemukan rumah sakit yang telah terverifikasi Kementrian Kesehatan dalam menangani kasus COVID-19</p>

            <div class="container" data-aos="zoom-in">
                <div class="card col-md-15 mb-7">
                    <div class="card-header  text-white" data-aos="zoom-in" style="background-color: rgb(65 ,47 ,179);">
                        <b>Data Rumah Sakit Rujukan COVID-19 diIndonesia</b>
                    </div>
                    <div class="card-body">
                        <!-- table -->
                        <table id="example" class="table table-striped table-bordered" style="width:100%" data-aos="zoom-in">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Alamat</th>
                                    <th>Wilayah</th>
                                    <th>Telephone</th>
                                    <th>Provinsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RS UMUM DAERAH DR. ZAINOEL ABIDIN</td>
                                    <td>JL. TGK DAUD BEUREUEH, NO. 108 B. ACEH</td>
                                    <td>KOTA BANDA ACEH, ACEH</td>
                                    <td>(0651) 34565</td>
                                    <td>Aceh</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH CUT MEUTIA KAB. ACEH UTARA</td>
                                    <td>JL. BANDA ACEH-MEDAN KM.6 BUKET RATA LHOKSEUMAWE</td>
                                    <td>KOTA LHOKSEUMAWE, ACEH</td>
                                    <td>(0645) 46334</td>
                                    <td>Aceh</td>
                                </tr>
                                <tr>
                                    <td>RSUP SANGLAH</td>
                                    <td>JL. DIPONEGORO DENPASAR BALI</td>
                                    <td>KOTA DENPASAR, BALI</td>
                                    <td>(0361) 227912</td>
                                    <td>Bali</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KAB. BULELENG</td>
                                    <td>JL. NGURAH RAI 30 SINGARAJA</td>
                                    <td>BULELENG, BALI</td>
                                    <td>(0362) 22046</td>
                                    <td>Bali</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH SANJIWANI GIANYAR</td>
                                    <td>JL. CIUNG WENARA NO.2 GIANYAR</td>
                                    <td>GIANYAR, BALI</td>
                                    <td>(0361) 943049</td>
                                    <td>Bali</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TABANAN</td>
                                    <td>JL. PAHLAWAN NO. 14 TABANAN</td>
                                    <td>TABANAN, BALI</td>
                                    <td>(0361) 811027</td>
                                    <td>Bali</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TABANAN</td>
                                    <td>JL. PAHLAWAN NO. 14 TABANAN</td>
                                    <td>TABANAN, BALI</td>
                                    <td>(0361) 811027</td>
                                    <td>Bali</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KABUPATEN TANGERANG</td>
                                    <td>JL. A YANI NO. 9 TANGERANG, KOTA TANGERANG</td>
                                    <td>TANGERANG, BANTEN</td>
                                    <td>(021) 5523507 / (021) 5512948 / (021) 5513709</td>
                                    <td>Banten</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. DRAJAT PRAWIRANEGARA</td>
                                    <td>JL. TGK DAUD BEUREUEH, NO. 108 B. ACEH</td>
                                    <td>TANGERANG, BANTEN</td>
                                    <td>null</td>
                                    <td>Banten</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. M. YUNUS BENGKULU</td>
                                    <td>JL. BHAYANGKARA, SIDOMULYO, KEC. GADING CEMP., KOTA BENGKULU, BENGKULU 38211</td>
                                    <td>KOTA BENGKULU, BENGKULU</td>
                                    <td>(0736) 52004</td>
                                    <td>Bengkulu</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ARGA MAKMUR</td>
                                    <td>JL. SITI KHODIJAH NO.8, KALI, ARMA JAYA, KABUPATEN BENGKULU UTARA, BENGKULU 38611</td>
                                    <td>BENGKULU UTARA, BENGKULU</td>
                                    <td>(0737) 521118</td>
                                    <td>Bengkulu</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH HASANUDDIN DAMRAH MANNA</td>
                                    <td>JL. RAYA PADANG PANJANG, PAGAR DEWA, KOTA MANNA, KABUPATEN BENGKULU SELATAN, BENGKULU 38515</td>
                                    <td>BENGKULU SELATAN, BENGKULU</td>
                                    <td>0853-8163-7684</td>
                                    <td>Bengkulu</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PANEMBAHAN SENOPATI</td>
                                    <td>JL DR. WAHIDIN SUDIRO HUSODO BANTUL</td>
                                    <td>BANTUL, DAERAH ISTIMEWA YOGYAKARTA</td>
                                    <td>(0274) 367381</td>
                                    <td>DI Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH WATES</td>
                                    <td>JL TENTARA PELAJAR KM.1 NO.5 WATES KULON PROGO</td>
                                    <td>KULON PROGO, DAERAH ISTIMEWA YOGYAKARTA</td>
                                    <td>(0274) 773169</td>
                                    <td>DI Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KOTA YOGYAKARTA</td>
                                    <td>JL. KI AGENG PEMANAHAN NO.1, SOROSUTAN, KEC. UMBULHARJO, KOTA YOGYAKARTA, DAERAH ISTIMEWA YOGYAKARTA 55162</td>
                                    <td>KOTA YOGYAKARTA, DAERAH ISTIMEWA YOGYAKARTA</td>
                                    <td>(0274) 371195</td>
                                    <td>DI Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>RSUP DR. SARDJITO</td>
                                    <td>JL KESEHATAN NO.1 SEKIP YOGYAKARTA</td>
                                    <td>SLEMAN, DAERAH ISTIMEWA YOGYAKARTA</td>
                                    <td>(0274) 583613</td>
                                    <td>DI Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM AL DR MINTOHARJO</td>
                                    <td>JL. BENDUNGAN HILIR 17 JAKPUS</td>
                                    <td>JAKARTA PUSAT, DKI JAKARTA</td>
                                    <td>(021) 5703081</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PAD GATOT SOEBROTO</td>
                                    <td>JL. DR. ABDUL RAHMAN SALEH NO. 24 JAKARTA PUSAT</td>
                                    <td>JAKARTA PUSAT, DKI JAKARTA</td>
                                    <td>(021) 3441008</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM BHAYANGKARA TK. I R.SAID SUKANTO</td>
                                    <td>JL. RAYA BOGOR KRAMAT JATI,JAKARTA TIMUR</td>
                                    <td>JAKARTA TIMUR, DKI JAKARTA</td>
                                    <td>(021) 8093288</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RSUP PERSAHABATAN</td>
                                    <td>JL. PERSAHABATAN RAYA NO. 1,JAKTIM</td>
                                    <td>JAKARTA TIMUR, DKI JAKARTA</td>
                                    <td>(021) 4891708</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS PENYAKIT INFEKSI PROF. DR. SULIANTI SAROSO</td>
                                    <td>JL. BARU SUNTER PERMAI RAYA JAKARTA UTARA</td>
                                    <td>JAKARTA UTARA, DKI JAKARTA</td>
                                    <td>(021) 6506559</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RSUP FATMAWATI</td>
                                    <td>JL. RS FATMAWATI CILANDAK,JAKSEL</td>
                                    <td>JAKARTA SELATAN, DKI JAKARTA</td>
                                    <td>(021) 7501524</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PASAR MINGGU</td>
                                    <td>JL. TB. SIMATUPANG NO. 1 KELURAHAN RAGUNAN, KECAMATAN PASAR MINGGU - JAKARTA SELATAN</td>
                                    <td>JAKARTA SELATAN, DKI JAKARTA</td>
                                    <td>(021) 29059999</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH CENGKARENG</td>
                                    <td>JL.KAMAL RAYA BUMI CENGKARENG INDAH CENGKARENG TIMUR</td>
                                    <td>JAKARTA BARAT, DKI JAKARTA</td>
                                    <td>null</td>
                                    <td>DKI Jakarta</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PROF DR. H. ALOEI SABOE</td>
                                    <td>JL. PROFESOR DR. H. ALOEI SABOE, WONGKADITI, KOTA UTARA, KOTA GORONTALO, GORONTALO 96115</td>
                                    <td>GORONTALO, GORONTALO</td>
                                    <td>0435 821924</td>
                                    <td>Gorontalo</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH RADEN MATTAHER JAMBI</td>
                                    <td>JL. LETJEN SUPRAPTO NO.31, TELANAIPURA, KEC. TELANAIPURA, KOTA JAMBI, JAMBI 36361</td>
                                    <td>MUARO JAMBI, JAMBI</td>
                                    <td>(0741) 61692</td>
                                    <td>Jambi</td>
                                </tr>
                                <tr>
                                    <td>RS PARU DR. H. A. ROTINSULU</td>
                                    <td>JL. BUKIT JARIAN NO. 40 BANDUNG</td>
                                    <td>BANDUNG, JAWA BARAT</td>
                                    <td>null</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PUSAT DR. HASAN SADIKIN</td>
                                    <td>JL. PASTEUR NO. 38 BANDUNG</td>
                                    <td>BANDUNG, JAWA BARAT</td>
                                    <td>null</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH RADEN MATTAHER JAMBI</td>
                                    <td>JL. LETJEN SUPRAPTO NO.31, TELANAIPURA, KEC. TELANAIPURA, KOTA JAMBI, JAMBI 36361</td>
                                    <td>MUARO JAMBI, JAMBI</td>
                                    <td>(0741) 61692</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SLAMET GARUT</td>
                                    <td>JL. RUMAH SAKIT NO.12 GARUT</td>
                                    <td>GARUT, JAWA BARAT</td>
                                    <td>(0262) 232720</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM TK II DUSTIRA</td>
                                    <td>JL. DR. DUSTIRA NO.1 KEL. BAROS KEC. CIMAHI TENGAH</td>
                                    <td>KOTA CIMAHI, JAWA BARAT</td>
                                    <td>(022) 6652207</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS PARU DR. M. GOENAWAN PARTOWIDIGDO</td>
                                    <td>JL. RAYA PUNCAK KM.83, PO BOX 28 CISARUA BOGOR 16750</td>
                                    <td>BOGOR, JAWA BARAT</td>
                                    <td>0251-8253630</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH R SYAMSUDIN SH</td>
                                    <td>JL. RUMAH SAKIT NO. 1 KOTA SUKABUMI</td>
                                    <td>SUKABUMI, JAWA BARAT</td>
                                    <td>null</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH GUNUNG JATI</td>
                                    <td>JL. KESAMBI NO.56 CIREBON - 45134</td>
                                    <td>CIREBON, JAWA BARAT</td>
                                    <td>null</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KAB. INDRAMAYU</td>
                                    <td>JL. MURAH NARA NO. 7 SINDANG INDRAMAYU</td>
                                    <td>INDRAMAYU, JAWA BARAT</td>
                                    <td>(0234) 272655</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH K.R.M.T WONGSONEGORO</td>
                                    <td>JL. FATMAWATI RAYA NO.1</td>
                                    <td>SEMARANG, JAWA TENGAH</td>
                                    <td>(024) 6711500</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PUSAT DR. KARIADI</td>
                                    <td>JL. DR. SOETOMO NO.16,SEMARANG</td>
                                    <td>SEMARANG, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KARDINAH</td>
                                    <td>JALAN AIP JL. KS. TUBUN NO.2, KEJAMBON, KEC. TEGAL TIM., KOTA TEGAL, JAWA TENGAH 52124</td>
                                    <td>TEGAL, JAWA TENGAH</td>
                                    <td>(0283) 350477</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PUSAT DR. SOERADJI TIRTONEGORO</td>
                                    <td>JL. KRT. SURAJI TIRTONEGORO NO.1, KLATEN</td>
                                    <td>KLATEN, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. LOEKMONO HADI</td>
                                    <td>JL. DR. LUKMONOHADI NO.19,KUDUS</td>
                                    <td>KUDUS, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SOESELO SLAWI KABUPATEN TEGAL</td>
                                    <td>JL. DR. SOETOMO NO.63, SLAWI KULON, KEC. SLAWI, TEGAL, JAWA TENGAH 52419</td>
                                    <td>TEGAL, JAWA TENGAH</td>
                                    <td>(0283) 491016</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KRATON KAB. PEKALONGAN</td>
                                    <td>JL. DR SUTOMO NO. 42 BATANG</td>
                                    <td>PEKALONGAN, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. H. SOEWONDO KENDAL</td>
                                    <td>JL. LAUT NO. 21, KENDAL</td>
                                    <td>KENDAL, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. MOEWARDI SURAKARTA</td>
                                    <td>JL. KOL SUTARTO 132,SURAKARTA</td>
                                    <td>KOTA SURAKARTA, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TIDAR</td>
                                    <td>JL. TIDAR NO.30 A, KOTA MAGELANG</td>
                                    <td>MAGELANG, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RSUD BANYUMAS</td>
                                    <td>JL. RUMAH SAKIT NO.1 BANYUMAS</td>
                                    <td>BANYUMAS, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS PARU DR. ARIO WIRAWAN</td>
                                    <td>JL. HASANUDIN NO.806,SALATIGA</td>
                                    <td>KOTA SALATIGA, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PROF DR. MARGONO SOEKARJO PURWOKER</td>
                                    <td>JL. DR GUMBREG NO. 1 PURWOKERTO</td>
                                    <td>BANYUMAS, JAWA TENGAH</td>
                                    <td>null</td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UNIVERSITAS AIRLANGGA</td>
                                    <td>KAMPUS C UNIVERSITAS AIRLANGGA, MULYOREJO, SURABAYA</td>
                                    <td>KOTA SURABAYA, JAWA TIMUR</td>
                                    <td>0813-3235-5540</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SOETOMO</td>
                                    <td>JL. MAYJEND. PROF. DR. MOESTOPO NO. 6 - 8 SURABAYA, JAWA TIMUR</td>
                                    <td>KOTA SURABAYA, JAWA TIMUR</td>
                                    <td>(031) 5501078</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SOEDONO MADIUN</td>
                                    <td>JL. DR. SOETOMO 59, MADIUN</td>
                                    <td>KOTA MADIUN, JAWA TIMUR</td>
                                    <td>(0351) 454657</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SAIFUL ANWAR</td>
                                    <td>JL. JAKSA AGUNG SUPRAPTO NO.2 MALANG</td>
                                    <td>MALANG, JAWA TIMUR</td>
                                    <td>(0341) 362101</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. R. KOESMA TUBAN</td>
                                    <td>JL. DR. WAHIDIN SUDIRO HUSODO NO. 800</td>
                                    <td>TUBAN, JAWA TIMUR</td>
                                    <td>(0356) 321010</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. ISKAK TULUNGAGUNG</td>
                                    <td>JL. DR. WAHIDIN SUDIRO HUSODO TULUNGAGUNG</td>
                                    <td>TULUNGAGUNG, JAWA TIMUR</td>
                                    <td>(0355) 322609</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH SIDOARJO</td>
                                    <td>JALAN MOJOPAHIT NO. 667 SIDOARJO</td>
                                    <td>SIDOARJO, JAWA TIMUR</td>
                                    <td>(031) 8961649</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH BLAMBANGAN</td>
                                    <td>JL. LETKOL ISTIQLAH NO. 49 BANYUWANGI</td>
                                    <td>BANYUWANGI, JAWA TIMUR</td>
                                    <td>(0333) 421118</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SOEBANDI</td>
                                    <td>JL. DR. SOEBANDI NO.124, JEMBER</td>
                                    <td>JEMBER, JAWA TIMUR</td>
                                    <td>(0331) 487441</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KABUPATEN KEDIRI</td>
                                    <td>JL. PAHLAWAN KUSUMA BANGSA NO. 1 PARE</td>
                                    <td>KEDIRI, JAWA TIMUR</td>
                                    <td>(0354) 391718</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. R. SOSODORO DJATIKOESOEMO</td>
                                    <td>JL. VETERAN NO 36, BOJONEGORO</td>
                                    <td>BOJONEGORO, JAWA TIMUR</td>
                                    <td>(0353) 3412133</td>
                                    <td>Jawa Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. SOEDARSO PONTIANAK</td>
                                    <td>JL. DR. SOEDARSO NO.1 PONTIANAK</td>
                                    <td>KOTA PONTIANAK, KALIMANTAN BARAT</td>
                                    <td>(0561) 737701</td>
                                    <td>Kalimantan Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ADE MUHAMMAD DJOEN SINTANG</td>
                                    <td>JL. PATIMURA DAN JL.YC OEVANG OERAY SINTANG</td>
                                    <td>SINTANG, KALIMANTAN BARAT</td>
                                    <td>(0565) 21002</td>
                                    <td>Kalimantan Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. AGOESDJAM KETAPANG</td>
                                    <td>JL. PANJAITAN NO.51 KETAPANG</td>
                                    <td>KETAPANG, KALIMANTAN BARAT</td>
                                    <td>(0534) 3037239</td>
                                    <td>Kalimantan Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. ABDUL AZIZ SINGKAWANG</td>
                                    <td>JL. DR SOETOMO NO. 28, SINGKAWANG</td>
                                    <td>KOTA SINGKAWANG, KALIMANTAN BARAT</td>
                                    <td>null</td>
                                    <td>Kalimantan Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ULIN BANJARMASIN</td>
                                    <td>JL. JEN A YANI NO.43, BANJARMASIN KALIMANTAN SELATAN</td>
                                    <td>KOTA BANJARMASIN, KALIMANTAN SELATAN</td>
                                    <td>(0511) 3252180</td>
                                    <td>Kalimantan Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH H. BOEJASIN PELAIHARI</td>
                                    <td>JL. HADJI BOEJASIN NO.68 KAB. TANAH LAUT</td>
                                    <td>TANAH LAUT, KALIMANTAN SELATAN</td>
                                    <td>(0512) 21083</td>
                                    <td>Kalimantan Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR DORIS SYLVANUS PALANGKA RAYA</td>
                                    <td>JL. TAMBUN BUNGAI NO.4 PALANGKARAYA</td>
                                    <td>MURUNG RAYA, KALIMANTAN TENGAH</td>
                                    <td>(0536) 3224695</td>
                                    <td>Kalimantan Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH SULTAN IMANUDDIN</td>
                                    <td>JL. SUTAN SYAHRIR NO 17 PANGKALAN BUN</td>
                                    <td>KOTAWARINGIN BARAT, KALIMANTAN TENGAH</td>
                                    <td>(0532) 21404</td>
                                    <td>Kalimantan Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR MURJANI SAMPIT</td>
                                    <td>JL. H M ARSYAD NO. 65 SAMPIT</td>
                                    <td>BARITO TIMUR, KALIMANTAN TENGAH</td>
                                    <td>(0531) 21010</td>
                                    <td>Kalimantan Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ABDUL WAHAB SJAHRANIE</td>
                                    <td>JL. PALANG MERAH NO.1, SIDODADI, KEC. SAMARINDA ULU, KOTA SAMARINDA, KALIMANTAN TIMUR 75123</td>
                                    <td>KOTA SAMARINDA, KALIMANTAN TIMUR</td>
                                    <td>(0541) 738118</td>
                                    <td>Kalimantan Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TAMAN HUSADA</td>
                                    <td>JL. LETJEN S. PARMAN NO.1, BELIMBING, BONTANG BAR., KOTA BONTANG, KALIMANTAN TIMUR 75331</td>
                                    <td>KOTA BONTANG, KALIMANTAN TIMUR</td>
                                    <td>(0548) 23000</td>
                                    <td>Kalimantan Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. KANUJOSO DJATIWIBOWO</td>
                                    <td>JL. M.T. HARYONO RING ROAD BALIKPAPAN NO.656</td>
                                    <td>KOTA BALIKPAPAN, KALIMANTAN TIMUR</td>
                                    <td>(0542) 873901</td>
                                    <td>Kalimantan Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH AJI MUHAMMAD PARIKESIT</td>
                                    <td>JL. RATU AGUNG NO. 1 TENGGARONG SEBERANG</td>
                                    <td>KUTAI KARTANEGARA, KALIMANTAN TIMUR</td>
                                    <td>(0541) 661015</td>
                                    <td>Kalimantan Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PANGLIMA SEBAYA</td>
                                    <td>JL. KUSUMA BANGSA KM.5 TANAH GROGOT</td>
                                    <td>PASER, KALIMANTAN TIMUR</td>
                                    <td>0852-4743-3000</td>
                                    <td>Kalimantan Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TANJUNG SELOR</td>
                                    <td>JL CENDRAWASIH KEL TANJUNG SELOR HILIR, KEC TANJUNG SELOR KAB BULUNGAN</td>
                                    <td>BULUNGAN, KALIMANTAN UTARA</td>
                                    <td>(0552) 21118</td>
                                    <td>Kalimantan Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM KOTA TARAKAN</td>
                                    <td>JL. AKI BABU RT 01 KELURAHAN KARANG HARAPAN KECAMATAN TARAKAN BARAT KOTA TARAKAN PROVINSI KALIMANTAN</td>
                                    <td>KOTA TARAKAN, KALIMANTAN UTARA</td>
                                    <td>(0551) 21166</td>
                                    <td>Kalimantan Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DEPATI HAMZAH</td>
                                    <td>L. SOEKARNO HATTA, BUKITBESAR, KEC. GIRIMAYA, KOTA PANGKAL PINANG, KEPULAUAN BANGKA BELITUNG 33684</td>
                                    <td>KOTA PANGKALPINANG, KEPULAUAN BANGKA BELITUNG</td>
                                    <td>(0717) 438660</td>
                                    <td>Kep. Bangka Belitung</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. H. MARSIDI JUDONO</td>
                                    <td>JL. JEND. SUDIRMAN KM.5,5, AIK RAYAK, TJ. PANDAN, KABUPATEN BELITUNG, KEPULAUAN BANGKA BELITUNG 33411</td>
                                    <td>BELITUNG, KEPULAUAN BANGKA BELITUNG</td>
                                    <td>(0719) 22190</td>
                                    <td>Kep. Bangka Belitung</td>
                                </tr>
                                <tr>
                                    <td>"RS UMUM DAERAH PROVINSI KEPULAUAN RIAU TANJUNGPINA</td>
                                    <td>JL. W.R SUPRATMAN NO. 100 KM. 8 TANJUNGPINANG KEPULAUAN RIAU</td>
                                    <td>KOTA TANJUNGPINANG, KEPULAUAN RIAU</td>
                                    <td>null</td>
                                    <td>Kep. Riau</td>
                                </tr>
                                <tr>
                                    <td>RS BADAN PENGUSAHAAN BATAM</td>
                                    <td>JL. DR. CIPTO MANGUNKUSUMO NO.1, SEKUPANG,BATAM</td>
                                    <td>KOTA BATAM, KEPULAUAN RIAU</td>
                                    <td>(0778) 322121</td>
                                    <td>Kep. Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH EMBUNG FATIMAH KOTA BATAM</td>
                                    <td>JL. LETJEND SUPRAPTO NO.1-9, BUKIT TEMPAYAN, KEC. BATU AJI, KOTA BATAM, KEPULAUAN RIAU 29425</td>
                                    <td>KOTA BATAM, KEPULAUAN RIAU</td>
                                    <td>(0778) 364446</td>
                                    <td>Kep. Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH MUHAMMAD SANI KABUPATEN KARIMUN</td>
                                    <td>JALAN POROS NO.1, HARJOSARI, TEBING, KABUPATEN KARIMUN, KEPULAUAN RIAU 29663</td>
                                    <td>KARIMUN, KEPULAUAN RIAU</td>
                                    <td>(0777) 327808</td>
                                    <td>Kep. Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR H ABDUL MOELOEK</td>
                                    <td>JL. DR. RIVAI NO.6, PENENGAHAN, KEC. TJ. KARANG PUSAT, KOTA BANDAR LAMPUNG, LAMPUNG 35112</td>
                                    <td>KOTA BANDAR LAMPUNG, LAMPUNG</td>
                                    <td>"(0721) 703312</td>
                                    <td>Lampung</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH AHMAD YANI METRO</td>
                                    <td>JL.JEND. A.YANI NO.13 KOTA METRO</td>
                                    <td>KOTA METRO, LAMPUNG</td>
                                    <td>null</td>
                                    <td>Lampung</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH MAY JEN HM RYACUDU</td>
                                    <td>JL. JEND. SUDIRMAN NO.2, KOTA GAPURA, KOTABUMI, KABUPATEN LAMPUNG UTARA, LAMPUNG 34511</td>
                                    <td>LAMPUNG UTARA, LAMPUNG</td>
                                    <td>(0724) 22095</td>
                                    <td>Lampung</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. H. BOB BAZAR, SKM</td>
                                    <td>JL. LETTU ROHANI NO.14 B, KEDATON, KEC. KALIANDA, KABUPATEN LAMPUNG SELATAN, LAMPUNG 35551</td>
                                    <td>LAMPUNG SELATAN, LAMPUNG</td>
                                    <td>(0727) 322159</td>
                                    <td>Lampung</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PUSAT DR. J. LEIMENA</td>
                                    <td>JALAN R. SUPRAPTO NO.123, RUMAH TIGA, TLK. AMBON, KOTA AMBON, MALUKU</td>
                                    <td>KOTA AMBON, MALUKU</td>
                                    <td>null</td>
                                    <td>Maluku</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DR. M. HAULUSSY AMBON</td>
                                    <td>JL. DR. KAYADOE, BENTENG, NUSANIWE, KEL BENTENG, NUSANIWE, KOTA AMBON, MALUKU</td>
                                    <td>KOTA AMBON, MALUKU</td>
                                    <td>(0911) 344871</td>
                                    <td>Maluku</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. P. P. MAGRETTI SAUMLAKI</td>
                                    <td>JL. MR. LATUHARHARI - SAUMLAKI</td>
                                    <td>MALUKU TENGGARA BARAT, MALUKU</td>
                                    <td>null</td>
                                    <td>Maluku</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. H. CHASAN BOESOIRIE TERNATE</td>
                                    <td>JL. CEMPAKA, TANAH TINGGI BAR., TERNATE SEL., KOTA TERNATE, MALUKU UTARA</td>
                                    <td>KOTA TERNATE, MALUKU UTARA</td>
                                    <td>(0921) 3121281</td>
                                    <td>Maluku Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH NTB</td>
                                    <td>JL. PRABU RANGKASARI DASAN CERMEN</td>
                                    <td>KOTA MATARAM, NUSA TENGGARA BARAT</td>
                                    <td>(0370) 7502424</td>
                                    <td>Nusa Tenggara Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. R. SOEDJONO SELONG</td>
                                    <td>JL. PROF M. YAMIN, SH. NO. 55 SELONG</td>
                                    <td>LOMBOK TIMUR, NUSA TENGGARA BARAT</td>
                                    <td>0376 21415</td>
                                    <td>Nusa Tenggara Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM BIMA</td>
                                    <td>JL. LANGSAT NO. 1 RABA KOTA BIMA</td>
                                    <td>BIMA, NUSA TENGGARA BARAT</td>
                                    <td>(0374-43142)</td>
                                    <td>Nusa Tenggara Barat</td>
                                </tr>
                                <tr>
                                    <td>RS H. L. MANAMBAI ABDULKADIR</td>
                                    <td>JL. LINTAS SUMBAWA-BIMA KM 5, SEKETENG, KEC. SUMBAWA, KABUPATEN SUMBAWA, NUSA TENGGARA BAR. 84316</td>
                                    <td>SUMBAWA, NUSA TENGGARA BARAT</td>
                                    <td>(0371) 2628078</td>
                                    <td>Nusa Tenggara Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PROF DR WZ JOHANES</td>
                                    <td>JL. DR MOCH HATTA NO. 19 KUPANG</td>
                                    <td>KUPANG, NUSA TENGGARA TIMUR</td>
                                    <td>(0380) 820331</td>
                                    <td>Nusa Tenggara Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR TC HILLERS MAUMERE</td>
                                    <td>JL WAIRKLAU, NO. 1, 86113, KOTA BARU, ALOK TIM., KABUPATEN SIKKA, NUSA TENGGARA TIM.</td>
                                    <td>SIKKA, NUSA TENGGARA TIMUR</td>
                                    <td>0812-6115-3944 / 0380 - 21617</td>
                                    <td>Nusa Tenggara Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KOMODO</td>
                                    <td>DESA GOLO BILAS, KECAMATAN KOMODO, KABUPATEN MANGGARAI BARAT, NTT</td>
                                    <td>MANGGARAI BARAT, NUSA TENGGARA TIMUR</td>
                                    <td>0813-3705-5250</td>
                                    <td>Nusa Tenggara Timur</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM JAYAPURA</td>
                                    <td>JL. KESEHATAN NO.1, DOK II, BAYANGKARA, JAYAPURA UTARA, KOTA JAYAPURA, PAPUA</td>
                                    <td>JAYAPURA, PAPUA</td>
                                    <td>(0967) 533616 EXT. 533781</td>
                                    <td>Papua</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM MERAUKE</td>
                                    <td>JL. SOEKARJO WIRYOPRANOTO NO.1, MARO, KEC. MERAUKE, KABUPATEN MERAUKE, PAPUA 99613</td>
                                    <td>MERAUKE, PAPUA</td>
                                    <td>(0971) 321124 EXT. 321125</td>
                                    <td>Papua</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM NABIRE</td>
                                    <td>JL. R.E. MARTADINATA, SIRIWINI, KEC. NABIRE, KABUPATEN NABIRE, PAPUA 98816</td>
                                    <td>NABIRE, PAPUA</td>
                                    <td>(0984) 21845</td>
                                    <td>Papua</td>
                                </tr>
                                <tr>
                                    <td>"RS UMUM DAERAH MANOKWARI</td>
                                    <td>JL. SILIWANGI NO.1, MANOKWARI BAR., KABUPATEN MANOKWARI, PAPUA BAR. 98312</td>
                                    <td>MANOKWARI, PAPUA BARAT</td>
                                    <td>(0986) 215133</td>
                                    <td>Papua Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KABUPATEN SORONG</td>
                                    <td>JL. KESEHATAN NO. 36 SORONG</td>
                                    <td>SORONG, PAPUA BARAT</td>
                                    <td>(0951) 321850</td>
                                    <td>Papua Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ARIFIN ACHMAD</td>
                                    <td>JL. DIPONEGORO NO.2, SUMAHILANG, KEC. PEKANBARU KOTA, KOTA PEKANBARU, RIAU 28156</td>
                                    <td>KOTA PEKANBARU, RIAU</td>
                                    <td>(0761) 21618</td>
                                    <td>Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KOTA DUMAI</td>
                                    <td>JL. TJ. JATI NO.4, BULUH KASAP, DUMAI TIM., KOTA DUMAI, RIAU 28812</td>
                                    <td>KOTA DUMAI, RIAU</td>
                                    <td>(0765) 440992</td>
                                    <td>Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PURI HUSADA TEMBILAHAN</td>
                                    <td>JL. VETERAN NO.52, TEMBILAHAN HILIR, TEMBILAHAN, KABUPATEN INDRAGIRI HILIR, RIAU 29281</td>
                                    <td>INDRAGIRI HILIR, RIAU</td>
                                    <td>(0768) 22118</td>
                                    <td>Riau</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PROVINSI SULAWESI BARAT</td>
                                    <td>JL. RE MARTADINATA, SIMBORO, KEC. SIMBORO DAN KEPULAUAN, KABUPATEN MAMUJU, SULAWESI BARAT 91512</td>
                                    <td>MAMUJU, SULAWESI BARAT</td>
                                    <td>(0426) 2703260</td>
                                    <td>Sulawesi Barat</td>
                                </tr>
                                <tr>
                                    <td>RSUP DR. WAHIDIN SUDIROHUSODO</td>
                                    <td>JL. PERINTIS KEMERDEKAAN KM.11 MAKASAR</td>
                                    <td>KOTA MAKASSAR, SULAWESI SELATAN</td>
                                    <td>(0411) 584677</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS DR. TADJUDDIN CHALID, MPH</td>
                                    <td>JL. PACCERAKKANG NO.67 / PAJJAIANG DAYA MAKASSAR</td>
                                    <td>KOTA MAKASSAR, SULAWESI SELATAN</td>
                                    <td>(0411) 513795</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH LABUANG BAJI</td>
                                    <td>JL. DR. RATULANGI NO.81 MAKASSAR</td>
                                    <td>KOTA MAKASSAR, SULAWESI SELATAN</td>
                                    <td>(0411) 873482</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>"RS TK.II PELAMONIA</td>
                                    <td>JL. JEND SUDIRMAN NO.27,MAKASSAR</td>
                                    <td>KOTA MAKASSAR, SULAWESI SELATAN</td>
                                    <td>0811-1782-399</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH LAKIPADADA</td>
                                    <td>JL. PONGTIKU MANDETEK TANA TORAJA</td>
                                    <td>TANA TORAJA, SULAWESI SELATAN</td>
                                    <td>(0423) 22264</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KABUPATEN SINJAI</td>
                                    <td>JL. JEND SUDIRMAN NO. 47 SINJAI, SULAWESI SELATAN</td>
                                    <td>SINJAI, SULAWESI SELATAN</td>
                                    <td>(0482) 21132</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH ANDI MAKKASAU PAREPARE</td>
                                    <td>JL. NURUSSAMAWATI NO.9 KOTA PAREPARE</td>
                                    <td>KOTA PARE PARE, SULAWESI SELATAN</td>
                                    <td>(0401) 27643</td>
                                    <td>Sulawesi Selatan</td>
                                </tr>
                                <tr>
                                    <td>"RS UMUM DAERAH UNDATA PALU</td>
                                    <td>JALAN TRANS SULAWESI TONDO, TALISE, MANTIKULORE, KOTA PALU, SULAWESI TENGAH 94119</td>
                                    <td>KOTA PALU, SULAWESI TENGAH</td>
                                    <td>(0451) 4908020</td>
                                    <td>Sulawesi Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM ANUTAPURA PALU</td>
                                    <td>JL. KANGKUNG NO. 1 PALU</td>
                                    <td>KOTA PALU, SULAWESI TENGAH</td>
                                    <td>(0451) 460570</td>
                                    <td>Sulawesi Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM MOKOPIDO TOLI-TOLI</td>
                                    <td>JL. LANONI NO.37 KEL BARU KEC BAOLAN KAB TOLI-TOLI, SULTENG</td>
                                    <td>TOLITOLI, SULAWESI TENGAH</td>
                                    <td>(0453) 21301</td>
                                    <td>Sulawesi Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KOLONEDALE</td>
                                    <td>JL. W MONGINSIDI 2 KOLONEDALE</td>
                                    <td>MOROWALI UTARA, SULAWESI TENGAH</td>
                                    <td>(0465) 21010</td>
                                    <td>Sulawesi Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KABUPATEN BANGGAI</td>
                                    <td>JL. IMAM BONJOL KM 3 NO. 14 LUWUK</td>
                                    <td>BANGGAI, SULAWESI TENGAH</td>
                                    <td>(0461) 21820</td>
                                    <td>Sulawesi Tengah</td>
                                </tr>
                                <tr>
                                    <td>RS BAHTERAMAS PROVINSI SULTRA</td>
                                    <td>JL. KAPTEN PIERE TENDEAN NO 50 KEC BARUGA</td>
                                    <td>KOTA KENDARI, SULAWESI TENGGARA</td>
                                    <td>(0401) 3195611</td>
                                    <td>Sulawesi Tenggara</td>
                                </tr>
                                <tr>
                                    <td>RSUP PROF. DR. R. D. KANDOU</td>
                                    <td>JL. RAYA TANAWANGKO NO.56, MANADO</td>
                                    <td>JL. RAYA TANAWANGKO NO.56, MANADO</td>
                                    <td>(0431) 8383058</td>
                                    <td>Sulawesi Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DR.SAM RATULANGI</td>
                                    <td>JL. R. SUPRAPTO NO.123, LUAAN, TONDANO TIM., KABUPATEN MINAHASA, SULAWESI UTARA</td>
                                    <td>MINAHASA, SULAWESI UTARA</td>
                                    <td>(0431) 321171</td>
                                    <td>Sulawesi Utara</td>
                                </tr>
                                <tr>
                                    <td>RSU RATATOTOK - BUYAT</td>
                                    <td>JL. J.W. LASUT RATATOTOK II KECAMATAN RATATOTOK</td>
                                    <td>MINAHASA TENGGARA, SULAWESI UTARA</td>
                                    <td>null</td>
                                    <td>Sulawesi Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KOTA KOTAMOBAGU</td>
                                    <td>KELURAHAN POBUNDAYAN KECAMATAN KOTAMOBAGU SELATAN</td>
                                    <td>KOTA KOTAMOBAGU, SULAWESI UTARA</td>
                                    <td>null</td>
                                    <td>Sulawesi Utara</td>
                                </tr>
                                <tr>
                                    <td>RSUP DR. M. DJAMIL</td>
                                    <td>JL. PERINTIS KEMERDEKAAN PADANG</td>
                                    <td>KOTA PADANG, SUMATERA BARAT</td>
                                    <td>null</td>
                                    <td>Sumatera Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. ACHMAD MOCHTAR</td>
                                    <td>JL. DR. ABDUL RIVAI NO.1, BUKIT APIT PUHUN, KEC. GUGUK PANJANG, KOTA BUKITTINGGI, SUMATERA BARAT 26122</td>
                                    <td>KOTA BUKITTINGGI, SUMATERA BARAT</td>
                                    <td>(0752) 21720</td>
                                    <td>Sumatera Barat</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH SITI FATIMAH PROVINSI SUMATERA SELATAN</td>
                                    <td>JL. KOL. H. BURLIAN KM 6</td>
                                    <td>KOTA PALEMBANG, SUMATERA SELATAN</td>
                                    <td>(0711) 5718883</td>
                                    <td>Sumatera Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM PUSAT DR. MOHAMMAD HOESIN PALEMBANG</td>
                                    <td>JL. JEND. SUDIRMAN NO.KM.3,5, SEKIP JAYA, KEC. KEMUNING, KOTA PALEMBANG, SUMATERA SELATAN 30126</td>
                                    <td>KOTA PALEMBANG, SUMATERA SELATAN</td>
                                    <td>(0711) 354088</td>
                                    <td>Sumatera Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH LAHAT</td>
                                    <td>JL. LETJEND HARUN SOHAR NO.28</td>
                                    <td>LAHAT, SUMATERA SELATAN</td>
                                    <td>null</td>
                                    <td>Sumatera Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS DR. RIVAI ABDULLAH</td>
                                    <td>JL. SUNGAI KUNDUR KELURAHAN MARIANA KEC. BANYUASIN I</td>
                                    <td>BANYUASIN, SUMATERA SELATAN</td>
                                    <td>null</td>
                                    <td>Sumatera Selatan</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH KAYUAGUNG</td>
                                    <td>JL. LINTAS TIMUR LAMPUNG - PALEMBANG, JUA JUA, KEC. KAYU AGUNG, KABUPATEN OGAN KOMERING ILIR, SUMATERA SELATAN 30867</td>
                                    <td>OGAN KOMERING ILIR, SUMATERA SELATAN</td>
                                    <td>(0712) 323889</td>
                                    <td>Sumatera Selatan</td>
                                </tr>
                                <tr>
                                    <td>RSUP H. ADAM MALIK</td>
                                    <td>JL. BUNGA LAU NO.17, KEMENANGAN TANI, KEC. MEDAN TUNTUNGAN, KOTA MEDAN, SUMATERA UTARA 20136</td>
                                    <td>KOTA MEDAN, SUMATERA UTARA</td>
                                    <td>null</td>
                                    <td>Sumatera Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH DR. DJASAMEN SARAGIH</td>
                                    <td>JL SUTOMO NO. 230, PEMATANGSIANTAR</td>
                                    <td>KOTA PEMATANGSIANTAR, SUMATERA UTARA</td>
                                    <td>(0622) 22959</td>
                                    <td>Sumatera Utara</td>
                                </tr>
                                <tr>
                                    <td>"RS UMUM DAERAH KABANJAHE</td>
                                    <td>JL KAPTEN SELAMAT KETAREN NO. 08 KABANJAHE</td>
                                    <td>KARO, SUMATERA UTARA</td>
                                    <td>0628-20012</td>
                                    <td>Sumatera Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH PADANG SIDEMPUAN</td>
                                    <td>JL DR. F.L. TOBING NO. 10,PADANGSIDIMPUAN</td>
                                    <td>KOTA PADANG SIDIMPUAN, SUMATERA UTARA</td>
                                    <td>(0634) 21251</td>
                                    <td>Sumatera Utara</td>
                                </tr>
                                <tr>
                                    <td>RS UMUM DAERAH TARUTUNG</td>
                                    <td>JL AGUS SALIM NO. 1 TARUTUNG</td>
                                    <td>TAPANULI UTARA, SUMATERA UTARA</td>
                                    <td>0633 - 21303</td>
                                    <td>Sumatera Utara</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Rumahsakit</th>
                                    <th>Alamat</th>
                                    <th>Wilayah</th>
                                    <th>Telephone</th>
                                    <th>Provinsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </section>
    <!-- table rumah sakit ends -->

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
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [4, "asc"]
                ]
            });
        });
    </script>
</body>

</html>