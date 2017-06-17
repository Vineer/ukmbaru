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
-- Struktur dari tabel `data_pengurus`
--

CREATE TABLE IF NOT EXISTS `data_pengurus` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `nim_mhs` varchar(15) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Diterima'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pengurus`
--

INSERT INTO `data_pengurus` (`id`, `nama_mhs`, `nim_mhs`, `fakultas`, `ukm_pilihan`, `jurusan`, `no_hp`, `email`, `motivasi`, `cv`, `foto`, `status`) VALUES
(1, 'dsfds', 'fdg', 'FTE', 'UKM Bola', 'fdg', 'dfg', 'sad', 'sad', 'Bekasi.docx', '20170109_104406.jpg', 'Belum Diterima'),
(2, 'fdfgfd', 'fdgdfg', 'FIT', 'UKM Bola', 'gfhfg', 'jh', 'fdg', 'fgd', '59953_(E.BISNIS) - Analisis Pelanggaran E.Bisnis PT.PLN.docx', '20170109_104343.jpg', 'Belum Diterima'),
(3, 'Aditya Asravi Dwianto', '6701140221', 'FIT', 'UKM Bola', 'Teknik Telekomunikasi', '081333546844', 'aditya.asravi@gmail.com', 'Ingin belajar bagaimana cara berhadapan dengan orang banyak dan saling menghargai satu sama lain serta memperdalam kemampuan bermain bola', 'Absensi.xlsx', 'leadership.docx', 'Belum Diterima'),
(4, 'carolina hendra puspita', '67011484766', 'FTE', 'UKM Bali', 'bhbjkji', '08167898706', 'cardon564@gmail.com', 'bhfsdcjkgfdeswaqwedrftgyhujikolbv', 'MATERI  9 LEADERSHIP.pptx', 'anggi.PNG', 'Belum Diterima'),
(5, 'Dinda Wijayanti', '6701149825', 'FTE', 'UKM Bali', 'hgcfcfsgxj', '891239736', 'gfdrsfatgga', 'bsdhjuhdiajkmdkc', '01021101.PDF', 'Sepakbola_6.jpg', 'Belum Diterima'),
(6, 'lutvi nafiah', '67011495678', 'FIT', 'UKM Bola', 'jfdvmfdkv', '495974765', 'fdnhcnsnd2jdnjn', 'd vjnjvifkmvkfd f jfni', 'kartupeserta_170413161.pdf', 'Hasil EPrT.jpg', 'Belum Diterima'),
(7, 'amalia tamara', '6707543456', 'FIT', 'UKM Bola', 'nhbgyhuikozavfd', '087255452678', 'n asvtys77', 'n sbgvfsghjhgfdcv', 'kartupeserta_170413171.pdf', 'ukm1.jpg', 'Belum Diterima'),
(8, 'Rani Cahyani', '6701146287', 'FIT', 'UKM Bola', 'bgcjcodisidjvd', '9982736578', 'cnvhdcgds679jasknxsaj', 'mdfnjhsdbhchjzdnj sd bsdyvndvdvkn ', 'RaniCahyani_6701144174_NilaiTambahan.docx', 'mhs.png', 'Belum Diterima'),
(9, 'galih vidia', '6789324245', 'FIT', 'UKM Bola', 'bjfxhvnkfb', '785672654763857', 'ndbhvudsvs7fef', 'dgsdhddfbd', 'Soal Tes Potensi Akademik beserta kunci jawaban (1).PDF', 'mhs.png', 'Belum Diterima'),
(10, 'yustisia', '66890965', 'FIT', 'UKM Bola', 'bvxjnckdj', '6798765434', 'xvjsjtfy987', 'bvhjkgfsudidjl', 'kartupeserta_170413171.pdf', 'kartupeserta_170408008.pdf', 'Belum Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
