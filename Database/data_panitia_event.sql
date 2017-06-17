-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2017 pada 11.45
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_panitia_event`
--

CREATE TABLE IF NOT EXISTS `data_panitia_event` (
  `id_panitia` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `ukm_pilihan` varchar(100) NOT NULL,
  `divisi` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Diterima'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_panitia_event`
--

INSERT INTO `data_panitia_event` (`id_panitia`, `nama`, `nim`, `fakultas`, `jurusan`, `ukm_pilihan`, `divisi`, `no_hp`, `email`, `motivasi`, `cv`, `foto`, `status`) VALUES
(1, 'apa aja', '6701140223', 'FIT', 'IF', 'UKM Bola', '', '08167898706', 'resita.trisumawati@facebook.com', 'ntaps', 'kartupeserta_170408008.pdf', 'IMG_0616 (1).PNG', 'Belum Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_panitia_event`
--
ALTER TABLE `data_panitia_event`
  ADD PRIMARY KEY (`id_panitia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_panitia_event`
--
ALTER TABLE `data_panitia_event`
  MODIFY `id_panitia` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
