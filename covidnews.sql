-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 04:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` varchar(500) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_update`) VALUES
(5, 'Vaksin Covid-19 Tiba', 'Tanggal 20 Desember Indonesia menerima vaksin covid-19 dari amerika', '2020-12-20 15:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkup`
--

CREATE TABLE `tbl_checkup` (
  `id_checkup` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `gejala`, `deskripsi`, `gambar`) VALUES
(25, 'Batuk berdahak banyak', 'kepala sakit kunang kunang', 'sakittenggorokan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kasus`
--

CREATE TABLE `tbl_kasus` (
  `id_kasus` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `pasien_positif` varchar(50) NOT NULL,
  `pasien_sembuh` varchar(50) NOT NULL,
  `pasien_meninggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(4, 'Andika Riski', 'dika@gmail.com', '$2y$10$mw5tNcgSByMjby7XRbmhCujacJUaQ.5QvVrovDeEwiUt3/xc7V9wu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pencegahan`
--

CREATE TABLE `tbl_pencegahan` (
  `id_pencegahan` int(11) NOT NULL,
  `cara_pencegahan` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pencegahan`
--

INSERT INTO `tbl_pencegahan` (`id_pencegahan`, `cara_pencegahan`, `deskripsi`, `gambar`) VALUES
(3, 'Cuci tangan ', 'Rajin mencuci tangan dapat mengurangi dampak covid', 'cuci_tangan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rsrujukan`
--

CREATE TABLE `tbl_rsrujukan` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `alamat_rs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_checkup`
--
ALTER TABLE `tbl_checkup`
  ADD PRIMARY KEY (`id_checkup`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_pencegahan`
--
ALTER TABLE `tbl_pencegahan`
  ADD PRIMARY KEY (`id_pencegahan`);

--
-- Indexes for table `tbl_rsrujukan`
--
ALTER TABLE `tbl_rsrujukan`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_checkup`
--
ALTER TABLE `tbl_checkup`
  MODIFY `id_checkup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pencegahan`
--
ALTER TABLE `tbl_pencegahan`
  MODIFY `id_pencegahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rsrujukan`
--
ALTER TABLE `tbl_rsrujukan`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
