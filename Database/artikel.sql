-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2017 pada 16.42
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
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `kd_artikel` int(11) NOT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tgl_terbit` date DEFAULT NULL,
  `konten` longtext NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_ukm` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1235 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`kd_artikel`, `penerbit`, `kategori`, `tgl_terbit`, `konten`, `judul`, `id_ukm`) VALUES
(1123, 'UKM Djawa', 'Prestasi UKM', '2017-04-19', 'Pada saat ini UKM Djawa memiliki beberapa prestasi yaitu', 'Prestasi Tidak Surutkan Semangat UKM Djawa', NULL),
(1234, 'UKM DJAWA', 'Sejarah', '2017-04-17', 'Jawa Timur dan Jawa Tengah merupakan daerah yang', 'Djawa dimata Indonesia', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kd_artikel`), ADD KEY `id_ukm` (`id_ukm`), ADD KEY `id_ukm_2` (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kd_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1235;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
