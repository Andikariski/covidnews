<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid news</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/main.css?v=2" />
    <link rel="stylesheet" href="./assets/css/style.css?v=2" />
    <!-- <link rel="stylesheet" href="../css/style.css?v=2"> -->
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">C <span><img src="assets/assetsimg/icon.png" alt="">vidTest </span></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <img src="./assets/assetsimg/bars.svg" width="25" alt="hamburger">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kasus') ?>">Kasus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('rumahSakit') ?>">Rumah Sakit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('checkup') ?>">Checkup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('berita') ?>">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('daftar') ?>">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('masuk') ?>">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin') ?>">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>