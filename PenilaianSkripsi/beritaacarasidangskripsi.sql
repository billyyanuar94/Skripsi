-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2016 pada 14.54
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritaacarasidangskripsi`
--

CREATE TABLE IF NOT EXISTS `beritaacarasidangskripsi` (
  `tahun` year(4) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `namaPembimbing` varchar(20) NOT NULL,
  `namaPembimbingPendamping` varchar(20) DEFAULT NULL,
  `namaKetuaTimPenguji` varchar(20) NOT NULL,
  `namaAnggotaTimPenguji` varchar(20) NOT NULL,
  `bobotKetuaTimPenguji` int(2) NOT NULL,
  `bobotAnggotaTimPenguji` int(2) NOT NULL,
  `bobotPembimbing` int(2) NOT NULL,
  `nilaiKoordinatorSkripsi` int(2) NOT NULL,
  `bobotKoordinatorSkripsi` int(2) NOT NULL,
  `bobotTataTulisLaporanAnggota` int(2) NOT NULL,
  `bobotKelengkapanMateriAnggota` int(2) NOT NULL,
  `bobotPenguasaanMateriAnggota` int(2) NOT NULL,
  `bobotPresentasiAnggota` int(2) NOT NULL,
  `bobotPencapaianTujuanAnggota` int(2) NOT NULL,
  `bobotTataTulisLaporanKetua` int(2) NOT NULL,
  `bobotKelengkapanMateriKetua` int(2) NOT NULL,
  `bobotPenguasaanMateriKetua` int(2) NOT NULL,
  `bobotPresentasiKetua` int(2) NOT NULL,
  `bobotPencapaianTujuanKetua` int(2) NOT NULL,
  `bobotTataTulisLaporanPembimbing` int(2) NOT NULL,
  `bobotKelengkapanMateriPembimbing` int(2) NOT NULL,
  `bobotPenguasaanMateriPembimbing` int(2) NOT NULL,
  `prosesBimbinganPembimbing` int(2) NOT NULL,
  `NilaiAkhirMahasiswa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritaacarasidangskripsi`
--
ALTER TABLE `beritaacarasidangskripsi`
 ADD PRIMARY KEY (`npm`), ADD UNIQUE KEY `npm` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
