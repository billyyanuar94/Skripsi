-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13 Jun 2017 pada 22.21
-- Versi Server: 5.5.34-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipskrip_beritaacarasidangskripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritaacarasidangskripsi`
--

CREATE TABLE `beritaacarasidangskripsi` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `namaPembimbing` varchar(256) NOT NULL,
  `namaPembimbingPendamping` varchar(256) DEFAULT NULL,
  `namaKetuaTimPenguji` varchar(256) NOT NULL,
  `namaAnggotaTimPenguji` varchar(256) NOT NULL,
  `bobotKetuaTimPenguji` int(2) NOT NULL,
  `bobotAnggotaTimPenguji` int(2) NOT NULL,
  `bobotPembimbing` int(2) NOT NULL,
  `nilaiKoordinatorSkripsi` float NOT NULL,
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
  `nilaiAkhirMahasiswa` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beritaacarasidangskripsi`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritaacarasidangskripsi`
--
ALTER TABLE `beritaacarasidangskripsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritaacarasidangskripsi`
--
ALTER TABLE `beritaacarasidangskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
