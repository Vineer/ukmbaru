-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2017 pada 16.43
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
-- Struktur dari tabel `lpj`
--

CREATE TABLE IF NOT EXISTS `lpj` (
  `id_lpj` int(11) NOT NULL,
  `judul_lpj` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `id_ukm` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lpj`
--

INSERT INTO `lpj` (`id_lpj`, `judul_lpj`, `file`, `nama_ukm`, `no_telp`, `nip`, `id_ukm`) VALUES
(2, 'LPJ UKM adhad', 'BudayaOrganisasi_Kelompok03_065.pdf', 'UKM BALI', '081220917250', NULL, NULL),
(6, 'UKM TELKOM', 'BudayaOrganisasi_Kelompok03_064.pdf', 'UKM JAWA', '081232801197', NULL, NULL),
(7, 'sbdfkjdsf', '6701140132_Registrasi___Telkom_University.pdf', 'coba deh', '12341421', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`), ADD KEY `id_ukm` (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lpj`
--
ALTER TABLE `lpj`
ADD CONSTRAINT `lpj_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
