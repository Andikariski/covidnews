<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "covidnews";
$koneksi = mysqli_connect($host, $username, $password, $databasename);
if (!$koneksi) {
    echo "Error: " . mysqli_connect_error();
    exit();
} else {
    // echo 'koneksi berhasil';
}
