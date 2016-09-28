-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Sep 2016 pada 05.57
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
  `nilaiAkhirMahasiswa` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `beritaacarasidangskripsi`
--

INSERT INTO `beritaacarasidangskripsi` (`id`, `tahun`, `semester`, `npm`, `nama`, `judul`, `namaPembimbing`, `namaPembimbingPendamping`, `namaKetuaTimPenguji`, `namaAnggotaTimPenguji`, `bobotKetuaTimPenguji`, `bobotAnggotaTimPenguji`, `bobotPembimbing`, `nilaiKoordinatorSkripsi`, `bobotKoordinatorSkripsi`, `bobotTataTulisLaporanAnggota`, `bobotKelengkapanMateriAnggota`, `bobotPenguasaanMateriAnggota`, `bobotPresentasiAnggota`, `bobotPencapaianTujuanAnggota`, `bobotTataTulisLaporanKetua`, `bobotKelengkapanMateriKetua`, `bobotPenguasaanMateriKetua`, `bobotPresentasiKetua`, `bobotPencapaianTujuanKetua`, `bobotTataTulisLaporanPembimbing`, `bobotKelengkapanMateriPembimbing`, `bobotPenguasaanMateriPembimbing`, `prosesBimbinganPembimbing`, `nilaiAkhirMahasiswa`) VALUES
(1, 0000, 1, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2012, 1, '2012730017', 'asd', 'asd', 'asd', 'asd', 'ad', 'as', 35, 35, 20, 10, 10, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 108),
(3, 2016, 1, '213', 'asd', 'asdasd', 'asdasd', 'asd', 'asd', 'asd', 12, 12, 12, 12, 12, 45, 4, 54, 23, 2, 20, 20, 20, 3, 12, 45, 4, 45, 4, 0),
(4, 2012, 1, '2012730017', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(5, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(6, 2012, 1, '2012730017', 'dasd', 'asd', 'asd', 'asd', 'sd', 'asd', 35, 35, 20, 10, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 72),
(7, 2012, 1, '2012730017', 'dasd', 'asd', 'asd', 'asd', 'sd', 'asd', 35, 35, 20, 10, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 72),
(8, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(9, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(10, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(11, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(12, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(13, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0),
(14, 0000, 1, '', '', '', '', '', '', '', 35, 35, 20, 0, 10, 15, 10, 30, 15, 30, 15, 10, 30, 15, 30, 20, 20, 30, 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritaacarasidangskripsi`
--
ALTER TABLE `beritaacarasidangskripsi`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritaacarasidangskripsi`
--
ALTER TABLE `beritaacarasidangskripsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
