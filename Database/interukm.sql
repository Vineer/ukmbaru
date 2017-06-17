-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2017 pada 16.27
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
-- Struktur dari tabel `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `jenis_akses` varchar(50) NOT NULL,
  `status_akses` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `jenis_akses`, `status_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(2, 'jawa', 'f1c64becc7ff3b5681c8782891c9d6fd', 'ukm', 1);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `konten` varchar(5000) NOT NULL,
  `id_ukm` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=235237 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`, `tempat`, `waktu`, `penyelenggara`, `poster`, `konten`, `id_ukm`) VALUES
(235235, 'sdagsdg', '2017-04-12', 'fgfhr', '07:14:31', 'wqtwrtwqet', 'wetrt', 'wetwet', NULL),
(235236, 'Gskfhsaf', '2017-07-19', 'GSG', '09:09:09', 'UKM Bali', '51.jpg', 'suayroqwruhfasnsansa', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL,
  `komentar` longtext,
  `rating` int(11) DEFAULT NULL,
  `like_` int(11) DEFAULT NULL,
  `nim` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemahasiswaan`
--

CREATE TABLE IF NOT EXISTS `kemahasiswaan` (
  `nip` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `id_akun` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `id_akun` int(10) DEFAULT NULL,
  `id_ukm` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--

CREATE TABLE IF NOT EXISTS `ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `sekre_ukm` varchar(50) DEFAULT NULL,
  `id_akun` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kd_artikel`), ADD KEY `id_ukm` (`id_ukm`), ADD KEY `id_ukm_2` (`id_ukm`);

--
-- Indexes for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indexes for table `data_panitia_event`
--
ALTER TABLE `data_panitia_event`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `data_pembyrn_tiket`
--
ALTER TABLE `data_pembyrn_tiket`
  ADD PRIMARY KEY (`kd_pmbyrn`);

--
-- Indexes for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`), ADD KEY `id_ukm` (`id_ukm`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`nip`), ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`), ADD KEY `id_ukm` (`id_ukm`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`), ADD KEY `id_akun` (`id_akun`), ADD KEY `id_ukm` (`id_ukm`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`), ADD KEY `id_ukm` (`id_ukm`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`), ADD KEY `id_ukm` (`id_ukm`), ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kd_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1235;
--
-- AUTO_INCREMENT for table `booking_tiket`
--
ALTER TABLE `booking_tiket`
  MODIFY `kd_tiket` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_panitia_event`
--
ALTER TABLE `data_panitia_event`
  MODIFY `id_panitia` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_pembyrn_tiket`
--
ALTER TABLE `data_pembyrn_tiket`
  MODIFY `kd_pmbyrn` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=235237;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

--
-- Ketidakleluasaan untuk tabel `feedback`
--
ALTER TABLE `feedback`
ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
ADD CONSTRAINT `kemahasiswaan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `lpj`
--
ALTER TABLE `lpj`
ADD CONSTRAINT `lpj_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

--
-- Ketidakleluasaan untuk tabel `proposal`
--
ALTER TABLE `proposal`
ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `kemahasiswaan` (`nip`);

--
-- Ketidakleluasaan untuk tabel `ukm`
--
ALTER TABLE `ukm`
ADD CONSTRAINT `ukm_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
