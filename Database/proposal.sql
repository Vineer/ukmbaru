-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2017 pada 16.44
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
-- Struktur dari tabel `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `id_proposal` int(11) NOT NULL,
  `judul_proposal` varchar(50) DEFAULT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `id_ukm` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul_proposal`, `nama_ukm`, `no_telp`, `file`, `nip`, `id_ukm`) VALUES
(2, 'Coba Proposal', 'UKM Djawa', '081234567890', 'BudayaOrganisasi_Kelompok03_067.pdf', NULL, NULL),
(3, 'dsgsdg', 'sdgewew', '13132414', 'BudayaOrganisasi_Kelompok03_06.pdf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`), ADD KEY `id_ukm` (`id_ukm`), ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `proposal`
--
ALTER TABLE `proposal`
ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `kemahasiswaan` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
