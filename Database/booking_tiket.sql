-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2017 pada 05.10
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_tiket`
--

CREATE TABLE IF NOT EXISTS `booking_tiket` (
  `kd_tiket` int(10) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking_tiket`
--

INSERT INTO `booking_tiket` (`kd_tiket`, `nim`, `nama`, `fakultas`, `jurusan`, `no_telp`, `email`) VALUES
(1, 1234, 'resita tri sukmawati', '1', '1', 123, 'as'),
(2, 1234, 'resita tri sukmawati', '1', '1', 123, 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  MODIFY `kd_tiket` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
