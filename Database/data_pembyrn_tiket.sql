-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2017 pada 11.46
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
-- Struktur dari tabel `data_pembyrn_tiket`
--

CREATE TABLE IF NOT EXISTS `data_pembyrn_tiket` (
  `kd_pmbyrn` int(20) NOT NULL,
  `kd_booking` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembyrn_tiket`
--

INSERT INTO `data_pembyrn_tiket` (`kd_pmbyrn`, `kd_booking`, `nama`, `nim`, `ukm_pilihan`, `foto`) VALUES
(1, '3576', 'DEa', '763475237', 'UKM Bola', 'resi.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pembyrn_tiket`
--
ALTER TABLE `data_pembyrn_tiket`
  ADD PRIMARY KEY (`kd_pmbyrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pembyrn_tiket`
--
ALTER TABLE `data_pembyrn_tiket`
  MODIFY `kd_pmbyrn` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
