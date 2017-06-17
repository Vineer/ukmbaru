-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 05:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobaukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_akses` varchar(50) NOT NULL,
  `nim` bigint(10) DEFAULT NULL,
  `id_ukm` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `jenis_akses`, `nim`, `id_ukm`) VALUES
(1, 'komang', 'komang123', 'Administrator', NULL, 1),
(2, 'teti', 'teti123', 'Administrator', NULL, 2),
(3, 'resita', 'resita123', 'Superadmin', NULL, 3),
(10, 'rere', 'rere', 'Mahasiswa', 6701140223, 4),
(13, 'kara', 'kara123', 'Mahasiswa', 6701146754, 5),
(14, 'sulawesi', 'sulawesi', 'Administrator', NULL, 6),
(15, 'dgdhf', 'dgfh', 'Administrator', NULL, 7),
(16, 'chvj', 'chj', 'Administrator', NULL, 8),
(17, 'Faizz', 'faizz', 'Administrator', NULL, 0),
(18, 'faisal', 'faisal123', 'Mahasiswa', 670112321, 0),
(19, 'tetyhandayani', 'tetydoang', 'Mahasiswa', 6701140076, 0),
(20, 'djawa', 'djawa123', 'Administrator', NULL, 0),
(21, 'padang', 'padang', 'Administrator', NULL, 0),
(22, 'padang', 'padang', 'Administrator', NULL, 0),
(23, 'amelia', 'amelia', 'Mahasiswa', 6701148899, 0);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kd_artikel` int(11) NOT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tgl_terbit` date DEFAULT NULL,
  `konten` longtext NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_ukm` int(10) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`kd_artikel`, `penerbit`, `kategori`, `tgl_terbit`, `konten`, `judul`, `id_ukm`, `rating`) VALUES
(4, 'UKM Kesenian Bali Widyacana Murti', 'Kebudayaan Daerah', '2017-06-15', '<div>Ada zaman sekarang ini orang bertanya-tanya apa betul leak itu ada? apa betul leak itu menyakiti? Secara Umum leak itu tidak menyakiti, leak itu proses ilmu &nbsp;yang cukup bagus &nbsp;bagi yang berminat. Karena ilmu leak juga memiliki etika-etika tersendiri.</div><div>Tidak gampang mempelajari ilmu leak. Dibutuhkan kemampuan yang prima untuk mempelajari ilmu leak. Di masyarakat sering kali leak dicap menyakiti bahkan bisa membunuh manusia, padahal tidak seperti itu.</div><div>Ilmu leak juga sama dengan ilmu yang lainnya yang terdapat dalam lontar-lontar kuno Bali.</div><div>Dulu ilmu leak tidak sembarangan orang mempelajari, karena ilmu leak merupakan ilmu yang cukup rahasia sebagai pertahanan serangan dari musuh.</div><div>Orang Bali Kuno yang mempelajari ilmu ini adalah para petinggi-petinggi raja disertai dengan bawahannya.</div><div>Tujuannya untuk sebagai ilmu pertahanan dari musuh terutama serangan dari luar.</div><div>Orang-orang yang mempelajari ilmu ini memilih tempat yang cukup rahasia, karena ilmu leak ini memang rahasia.</div><div>Jadi tidak sembarangan orang yang mempelajari.</div><div>Namun zaman telah berubah otomatis ilmu ini juga mengalami perubahan sesuai dengan zamannya.</div><div>Namun esensinya sama dalam penerapan. Yang jelas ilmu leak tidak menyakiti.</div><div>Yang menyakiti itu ilmu teluh atau nerangjana, inilah ilmu yang bersifat negatif, khusus untuk menyakiti orang karena beberapa hal seperti balas dendam, iri hati, ingin lebih unggul, ilmu inilah yang disebut pengiwa.</div><div>Ilmu pengiwa inilah yang banyak berkembang di kalangan masyarakat seringkali dicap sebagai ilmu leak.</div><div>Seperti yang dikatakan diatas leak itu memang ada sesuai dengan tingkatan ilmunya termasuk dengan endih leak. Endih leak ini biasanya muncul pada saat mereka lagi latihan atau lagi bercengkrama dengan leak lainnya baik sejenis maupun lawan jenis. Munculnya endih itu pada saat malam hari khususnya tengah malam.</div><div>Harinya pun hari tertentu tidak sembarangan orang menjalankan untuk melakukan ilmu tersebut.</div>', 'Misteri Leak Bali', 6, 0),
(1235, 'UKM Kesenian Widyacana Murti', 'Kebudayaan', '2017-06-13', '<div>Jika anda pernah mengunjungi Bali, anda akan merasa dipermainkan jika anda pikir nama setiap orang yang anda temui bernama Wayan. Anak-anak orang Bali diberi nama berdasarkan sesuai dengan kasta keluarga yang di miliki dan di urutkan berdasarkan kelahiran mereka.90% dari populasi masing-masing memiliki satu kasta, nama-nama seperti Made. Wayan dan Nyoman begitu sangat populer.</div><div>Masyarakat Bali didasarkan pada sistem kasta Hindu, meskipun tidak serumit bentuk yang terjadi di India. Versi sederhana ini menjelaskan penempatan orang ke dalam 4 kasta yang berbeda:</div><div><br></div><div>- Brahmana (Pendeta)</div><div>Ini merupakan kasta para pemuka agama dan orang suci yang melakukan upacara keagamaan yang sangat penting.</div><div>Ida Bagus - untuk anak laki-laki</div><div>Ida Ayu or Dayu - untuk anak perempuan</div><div><br></div><div>- Ksatria (Penguasa/ksatria)</div><div>Anggota kasta ini mencangkup beberapa bangsawan dan raja (contohnya. Anggota keluarga kerajaan)</div><div>Anak Agung, Agung, Dewa - untuk anak laki-laki</div><div>Anak Agung, Agung, Dewi, Dewayu - untuk anak perempuan</div><div>Cokorda, Dewa Agung untuk anggota kerajaan yang berkuasa.</div><div>Kasta Ksatria juga memiliki nama tengah sebagai berikut&nbsp;</div><div>Raka - saudara perempuan/lakui-laki tertua&nbsp;</div><div>Oka - bungsu</div><div>Rai - saudara perempuan/laki-laki termuda</div><div>Anom - perempuan muda</div><div>Ngurah - seseorang yang berwenang</div><div><br></div><div>- Wesia (Pedagang)</div><div>Gusti (tuan) - untuk laki-laki dan perempuan</div><div>Dewa - untuk laki-laki</div><div>Desak - untuk perempuan</div><div><br></div><div>- Sudra (Petani)</div><div>Merupakan populasi paling banyak (lebih dari 90%) di Bali memiliki kasta ini</div><div>Wayan, Putu, Gede - &nbsp;anak pertama laki-laki&nbsp;</div><div>Wayan, Putu, Iluh - &nbsp;anak pertama perempuan&nbsp;</div><div>Made, Kadek, Nengah - anak kedua untuk laki-laki dan perempuan</div><div>Nyoman, Komang - anak ketiga untuk laki-laki dan perempuan&nbsp;</div><div>Ketut - anak keempat untuk laki-laki dan perempuan</div><div>Jika seseorang merupakan anak ke lima maka beralih kembali ke nama yang sama dengan anak pertama lahir.</div><div>Sistem yang unik ini hanyalah sedikit bagian dari hal yang menarik di Bali. Jadi jangan heran jika anda memanggil \"Made\" di tengah orang banyak dan beberapa orang akan berbalik memanggil anda!</div>', 'Kasta Hindu di Bali', 6, 0),
(1236, 'UKM Rumah Gadang', 'Kebudayaan', '2017-06-12', '<div>Makan bajamba tradisi Minang merupakan tradisi dari leluhur nenek moyang yang terus dibudayakan sampai sekarang. Makan bajamba sendiri maksudnya adalah makan didalam pinggan besar secara bersama-sama.</div><div>Makan bajamba disebut juga dengan makan barapak, Biasanya terdiri dari 5 sampai 7 orang. Rata-rata didaerah Minangkabau mempunyai cara makan bajamba namun dengan gaya masing-masing pula.</div><div>Umumnya yang membedakan adalah jenis makanan yang di hidangkan. untuk daerah Bukttinggi yang dipengaruhi oleh adat Kurai Limo Jorong makan bajamba dengan menggunakan \"samba nan salapan\". Maksudnya ada lauk khusus yang harus wajib ada pada acara makan bajamba.</div><div>Makan bajamba tradisi Minang akan bajamba sering dilakukan pada saat pelaksanaan baralek dan acara penting lainnya seperti ulang tahun kota.</div><div>Bahkan makan bajamba digelar ketika ada menyambut tamu penting.</div><div>Tujuannya untuk memupuk tali silaturrahmi dan memunculkan rasa kebersamaan tanpa melihat status dan pangkat.</div><div>Biasanya acara makan bajamba ini di adakan di sebuah rumah atau tempat khusus yang diikuti puluhan atau ratusan orang. Ketika makan bajamba semua orang larut dalam kebahagiann karena bekerjasama menghabiskan nasi yang super banyak di pinggan.</div>', 'Makan Bajamba', NULL, 0),
(1237, 'UKM Betawie', 'Kebudayaan Daerah', '2017-06-12', '<div>Tidak Banyak yang tahu, bahwa sesungguhnya nama rumah asli suku Betawi adalah Rumah Kebaya. Sekilas namanya terdengar seperti jenis pakian nasional. Namun, tahukah Anda mengapa rumah ini disebut sebagai Rumah Kebaya?</div><div>Disebut dengan Rumah Kebaya karena bentuk atap yang menyerupai pelana yang dilipat dan apabila dilihat dari samping maka lipatan-lipatan tersebut terlihat seperti lipatan kebaya.</div><div>Nama Rumah Kebaya memang tidak populer, sebab masyarakat lebih familiar dengan Rumah Joglo. Padahal sebenarnya, Rumah Joglo merupakan rumah adat Jawa.</div><div>Kendati sekilas keduanya serupa, namun jika dilihat secara seksama, keduanya sangatlah berbeda. Salah satu perbedaannya terlihat dari atap rumah. Rumah Joglo atapnya tidak menyerupai pelana layaknya lipatan, tetapi menyerupai seperti perahu terbalik.</div><div>Rumah Kebaya sendiri memiliki karakteristik yang khas. Ciri khas dari rumah ini adalah dilihat dari teras yang luas. Teras tersebut berguna untuk menjamu tamu dan menjadi tempat bersantai keluarga.</div><div>Berbeda dengan rumah modern di mana ruang keluarga biasanya ada di dalam rumah, tetapi di Rumah Kebaya, teras luar inilah tempat favorit keluarga untuk bersenda gurau.</div><div>Di teras, terdapat kursi bale-bale dari rotan, bambu, atau kayu jati yang disebut amben. Lantai teras diberi nama gejogan, yang memiliki simbol penghormatan kepada tamu.</div><div>Bagi masyarakat Betawi, gejongan ini dianggap sakral atau kramat, karena berhubungan langsung dengan tangga masuk bernama balaksuji, yakni penghubung rumah dengan area luar.</div><div>Masyarakat Betawi juga membuat sumur di depan rumah dan pemakaman yang berada di samping rumah. Keberadaan makam di samping rumah merupakan tradisi lawas masyarakat Betawi.</div><div>Affan Banon Dirga, Masyarakat Betawi Condet mengungkapkan mengapa makam berada di samping rumah, yaitu agar pihak keluarga yang masih hidup akan sebuah kematian.</div><div>\"Jadi, ketika membuka jendela kamar , pemandangan pertama dilihat adalah makam. Selain itu, dengan adanya makam, sanak saudara yang tidak tinggal di rumah tersebut bisa berziarah tanpa harus menempuh jarak jauh,\" Katanya.</div><div>Namun, seiringnya perkembanga zaman dan lahan yang kian terbatas, tradisi menyimpan makam di dekat rumah sudah mulai ditinggalkan.</div><div>Rumah Kebaya memiliki dinding rumah yang terbuat dari panel-panel yang dapat dibuka dan digeser-geser hingga ke tepi. Tujuannya agar rumah terasa lebih luas. Selain itu, sirkulasi udara pun akan terjadi tanpa sekat.</div>', 'Filosopi Rumah Adat Betawi', NULL, 0),
(1239, 'UKM Permala', 'Kebudayaan Daerah', '2017-06-13', '<div>[ALL ABOUT LAMPUNG]</div><div><br></div><div>Apa itu Sekura?</div><div>Sekura berarti penutup wajah atau topeng. Pesta sekura adalah sebuah pesta rakyat yang seluruh pesertanya menutup wajah.&nbsp;</div><div>Sekura merupakan jenis topeng yang digunakan dalam perhelatan pesta sekura. Seseorang dapat disebut ber-sekura ketika sebagian atau seluruh wajahnya tertutup. Penutup wajah dapat berupa topeng dari kayu, kacamata, kain, atau hanya polesan warna. Untuk menambah kemeriahan acara, sekura bisa dipadukan dengan berbagai busana dengan warna-warna meriah atau mencolok.</div><div><br></div><div>Pesta sekura merupakan perhelatan rutin yang diadakan oleh masyarakat Kabupaten Lampung Barat. Pesta rakyat ini selalu diadakan ketika menyambut Hari Raya Idul Fitri. Dalam acara ini, peserta acara diwajibkan mengenakan topeng dengan berbagai karakter dan ekspresi. Pesta sekura merupakan wujud ungkapan rasa syukur dan suka cita menyambut hari yang suci.</div><div>Pesta ini berlangsung dari 1 sampai 7 Syawal setiap tahunnya. Sebuah bentuk perayaan kemenangan setelah menahan hawa nafsu selama bulan Ramadhan. Bukan sebagai pelampiasan puasa sebulan ya… Juga sebagai ajang silaturahmi dan bermaafan.</div><div>Sekura dibagi menjadi dua, Sekura Kamak dan Sekura Betik.&nbsp;</div><div>- Sekura kamak mengenakan topeng kayu dan berbaju compang-camping.&nbsp;</div><div>- Sekura Betik/Kecah mengenakan tutup muka berupa kain khas motif Lampung yang disebut selendang miwang.&nbsp;</div><div>Bermotif kembang cengkeh ataupun motif lain. Pesta diakhiri dengan panjat pinang yang hanya bisa diikuti oleh Sekura Kamak saja.</div><div><br></div><div>Kapan Ada Pesta Sekura??</div><div>Tidak susah untuk mengingat kapan bakal ada acara ini di Liwa. Siap-siap saja untuk agendakan kunjungan ke Liwa pada 1 – 7 Syawal. Karena acara pesta Sekura ini selalu ada tiap tahunnya. Menjadi perayaan kemenangan setelah sebulan menahan hawa nafsu. Juga sebagai wadah silaturrahim warga pekon.</div>', 'All About Lampung', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_bukti_transfer`
--

CREATE TABLE `data_bukti_transfer` (
  `kd_bukti` int(10) NOT NULL,
  `kd_booking` varchar(10) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `nim` bigint(10) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_bukti_transfer`
--

INSERT INTO `data_bukti_transfer` (`kd_bukti`, `kd_booking`, `nama_mhs`, `nim`, `foto`) VALUES
(2, '6778', 'vhbjnk', 67890, 'ukm4.jpg'),
(3, '0', 'resita tri sukmawati', 6701140223, 'ukm4.jpg'),
(4, '0', 'resita tri sukmawati', 6701140223, 'skema relasi.jpg'),
(5, '2324', 'res', 6701148567, 'ClassDiagram1tety (1) (1).png'),
(6, '5', 'tety handayani', 6701140076, 'UKM KBMS.jpg'),
(7, '3', 'tety handayani', 6701140223, 'UKM KBMS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_panitia`
--

CREATE TABLE `data_panitia` (
  `kd_panitia` int(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `nim_mhs` varchar(15) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_panitia`
--

INSERT INTO `data_panitia` (`kd_panitia`, `nama_mhs`, `nim_mhs`, `ukm_pilihan`, `fakultas`, `jurusan`, `divisi`, `no_hp`, `email`, `motivasi`, `cv`, `foto`, `status`) VALUES
(1, 'komang', '7778812888', 'UKM Bola', 'FIT', 'yyyyy', 'sponsorship', '9999928', 'hadi@gmail.com', 'hhhhushsahahhs', 'FI-Benua-Etam.jpg', 'senior.jpg', 'Diterima'),
(2, 'hasan', '77777', 'UKM Bola', 'FIT', 'mi', 'acara', '09898', 'hadi@gmail.com', 'huhuhuhuhu', 'syukuran.jpg', 'championsip.jpg', ''),
(3, 'roro', '6780284358', 'UKM Bola', 'FIT', 'mi', 'dokumentasi', '081382472587', 'hbchsbdhjcn', 'bcjnx sj', '6701140223 Registrasi _ Telkom University.pdf', 'ukm1.jpg', ''),
(4, 'KOMANG', '6701146287', 'UKM Bola', 'FIT', 'mi', 'logistik', '093678549', 'komang', 'ingin mencari pengalaman', '6701140223 Nilai _ Telkom University.pdf', 'ukm5.jpg', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `nim_mhs` varchar(15) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Diterima'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengurus`
--

INSERT INTO `data_pengurus` (`id`, `nama_mhs`, `nim_mhs`, `ukm_pilihan`, `fakultas`, `jurusan`, `no_hp`, `email`, `motivasi`, `cv`, `foto`, `status`) VALUES
(1, 'dsfds', 'fdg', '', 'FTE', 'fdg', 'dfg', 'sad', 'sad', 'Bekasi.docx', '20170109_104406.jpg', 'Belum Diterima'),
(2, 'fdfgfd', 'fdgdfg', '', 'FIT', 'gfhfg', 'jh', 'fdg', 'fgd', '59953_(E.BISNIS) - Analisis Pelanggaran E.Bisnis PT.PLN.docx', '20170109_104343.jpg', 'Belum Diterima'),
(3, 'hasan', '77', 'UKM Bola', 'FIT', 'mi', '89', 'hadi@gmail.com', 'sahaha', 'FI-Benua-Etam.jpg', 'syukuran.jpg', 'Belum Diterima'),
(4, 'fgyhjk', '567890', 'UKM Bali', 'FIT', 'bgbhnjkmj', '678907', 'hjnjki', 'hbnjmkmn', 'FI-Benua-Etam.jpg', 'senior.jpg', 'Belum Diterima'),
(5, 'rara', '6701146287', 'UKM Bola', 'FIT', 'mi', '789098765', 'zxhsbyshbksm', 'nxb jsnxjs', '6701140223 Nilai _ Telkom University.pdf', 'skema.png', 'Belum Diterima'),
(6, 'teti handayani', '6701140076', 'UKM Bali', 'FIT', 'MI', '78754488900', 'tetihandayani51@gmail.com', 'mENCARI PENGALAMAN', 'ppt pa.pptx', 'ukm5.jpg', 'Belum Diterima'),
(7, '', '', 'UKM Bola', 'FIT', '', '', '', '', '', '', 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `data_pesan_tiket`
--

CREATE TABLE `data_pesan_tiket` (
  `kd_booking` int(10) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `acara` varchar(100) NOT NULL,
  `jml_tiket` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pesan_tiket`
--

INSERT INTO `data_pesan_tiket` (`kd_booking`, `nama_mhs`, `nim`, `acara`, `jml_tiket`, `status`) VALUES
(1, 'Dinda Wijayanti', '6701140221', '', '3', 'Lunas'),
(2, 'qwe', '342342', '', '10', 'Lunas'),
(3, 'resita tri sukmawati', '6701140223', '', '2', ''),
(5, 'tety handayani', '6701140076', '', '5', ''),
(6, 'Testes', '123123123', '', '2', ''),
(7, 'Resita Tri Sukmawati', '6701140223', 'Dies Natalis XXIV - Calonarang', '2', ''),
(8, 'Resita Tri Sukmawati', '6701140223', 'Dies Natalis XXIV - Calonarang', '4', ''),
(9, 'Resita Tri Sukmawati', '6701140223', 'Gala Abhinaya', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(200) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `harga_tiket` int(100) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `konten` varchar(5000) NOT NULL,
  `id_ukm` int(10) DEFAULT NULL,
  `status_approval` int(11) NOT NULL DEFAULT '0',
  `status_terlaksana` varchar(10) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`, `tempat`, `waktu`, `harga_tiket`, `penyelenggara`, `poster`, `konten`, `id_ukm`, `status_approval`, `status_terlaksana`, `rating`) VALUES
(235243, 'Dies Natalis XXIV - Calonarang', '2017-04-16', 'Gedung Serba Guna Universitas Telkom', '18:00:00', 50000, 'UKM Kesenian Bali Widyacana Murti', '10372.jpg', '<div>Rasakan Suasana Bali disini!</div><div>Dies Natalis XXIV UKM Kesenian Bali Widyacanamurti</div><div>Pre-event [Free Entry]</div><div>16 April 2016</div><div>19.00 WIB</div><div><br></div><div>Sendratari Calonarang Part I</div><div>Pawai Ogoh-ogoh</div><div>Barong Bangkung</div><div>Baleganjur</div><div>Fire Dance</div><div><br></div><div>Start : ATM Centre FRI</div><div>Finish : Gd Tokong Nanas</div><div><br></div><div>Peak Event [Presale 2 IDR 25K/ OTS IDR 30K]</div><div>23 April 2016</div><div>Open gate 18.00 WIB</div><div><br></div><div>Sendratari Calonarang part II</div><div>Musik Kolaborasi Kontemporer</div><div>Tari Siwa Nataraja</div><div>Tari Sekar Jagat</div><div>Tari Sekar Ibing</div><div><br></div><div>At Gedung Serba Guna</div><div><br></div><div>Untuk puncak acara jangan lupa beli tiketnya yang bisa didapatkan langsung dengan menghubungi :</div><div><br></div><div>Official Line Account : @eaq3792d</div><div>LINE : bayupurnama_</div>', 123, 1, 'Belum', 1),
(235244, 'Pagelaran Seni dan Budaya Betawie', '2017-04-02', 'Aula FIT', '19:00:00', 30000, 'UKM Betawie', 'UKM_Betawie3.jpg', '<div>Panggilan untuk abang mpok semuanyeeeeee!!!!!!!!! UKM Betawie telkom University dengan bangga nampilin \"PAGELARAN SENI &nbsp;DAN BUDAYA BETAWIE 2016\"</div><div>Hari/Tanggal : Sabtu 2 april 2016</div><div>Tempat : Aula FIT</div><div>Ebuset masa iya kaga dateng !! Kapan lagi nih abang mpok bisa nonton&nbsp;</div><div>pertunjukan nyang megah tentang kebudayaan betawi di tanah sunda ini.</div><div>Nyokk dahh semuanye datang dan ramein nihh acara Budaya Betawi tercinte.&nbsp;</div><div>Aye jamin, kaga bakal ada yang nyesel dahh</div><div>Lebih lengkapnye lagi, lu pada bisa tanya tanya nih ke orang ini :</div><div>Id line : widyalifianti / 089679931848</div><div>#Pagelaranbetawie2016</div><div>#betawiepunyagaye</div>', NULL, 1, 'Sudah', 2),
(235245, 'Alek Rang Minang feat Ajo Buset', '2017-04-16', 'Aula Fakultas Komunikasi Bisnis Telkom University', '19:00:00', 25000, 'UKM Rumah Gadang', 'rumah_gadang.jpg', '<div>Iko nyo nan dinanti nanti kini lah tibo,</div><div>Alek bukan sumbarang alek, aleknyo bujang jo gadih minang ditanah rantau</div><div>RUMAH GADANG TELKOM UNIVERSITY Proudly Present</div><div>Grand Launching Rumah Gadang Telkom University ALEK RANG MINANG \"Maluruihkan Bandang Nan Kusuik\" Ft. Ajo Buset</div><div>Drama, Tari, Randai, Silek, dan musik tradisional Minangkabau dikemas menjadi sebuah pertunjukan menarik dan sangat ditunggu.</div><div>Hari: Sabtu, 16 April 2016</div><div>Tempat: Aula Fakultas Komunikasi Bisnis, Telkom University</div><div>Note the date from NOW!</div><div>#ARM2016</div><div>#RumahGadangTelkom</div>', NULL, 1, 'Sudah', 0),
(235246, 'Gala Abhinaya', '2017-04-26', 'Lapangan Parkir Telkom Convention Hall', '15:00:00', 75000, 'UKM Band', 'Ukm_band.jpg', '<div>UKM BAND Telkom University</div><div>Mempersembahkan</div><div>GALA ABHINAYA</div><div>\"Satukan Budaya dengan Irama\"</div><div>Dibintangi oleh :</div><div>- ALEXA</div><div>- Barry Likumahuwa \"Feel Good Collective\"</div><div>- \"Arumba\" by Saung Angklung Udjo</div><div>Penampilan Tradisional oleh :</div><div>- UKM Permala (Lampung)</div><div>- UKM KBMS (Sulawesi)</div><div>- UKM Bali Widyacana Murti</div><div>Penampilan Band oleh :</div><div>- SEREVINA &amp; friends</div><div>- Green Tea Latte</div><div>dan kunjungi juga Culinary Festival!!</div><div>Dilaksanakan pada :</div><div>April 26th, 2015</div><div>di Lapangan Parkir Telkom Convention Hall</div><div>Jl.Telekomunkasi no.1, Dayeuhkolot, Bandung</div><div>Mulai Pukul :</div><div>15.00 WIB</div><div>Tiket :</div><div>Presale 1 : IDR 28.000 (21 Mar - 5 Apr 2015)</div><div>Presale 2 : IDR 38.000 (6 Apr - 16 Apr 2015)</div><div>OTS : IDR 50.000</div><div>Contact Person :</div><div>- Untuk Tiket :</div><div>Muhe : 0853 5290 9966</div><div>Eddy : 0857 3970 6333&nbsp;</div><div>- Untuk Event :</div><div>Arvel : 0813 1850 6384</div><div>Ilham : 0812 90 575 909</div><div>Stand Tiket :</div><div>Kantin TES (Business Center)</div><div>Senin - Jumat, 12.00 - 16.00 WIB</div><div>Nikmatilah atmosfir dari kebudayaan tradisonal Indonesia yang dipadukan oleh modernisasi, hanya di GALA ABHINAYA!</div><div>Twitter &amp; Instagram :</div><div>@UKMBANDUNITEL</div>', NULL, 1, 'Belum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kritik` varchar(500) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `nim` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `email`, `kritik`, `saran`, `nim`) VALUES
(1, 'resita', 'resita@gmail.com', 'bagus', 'good', NULL),
(2, 'rega', 'rega@gmail.com', 'jelek', 'ngga', NULL),
(3, 'Teti Handayani', 'tetihandayani51@gmail.com', 'acara kurang menarik', 'buat konsep lebih bagus lagi', 6701140076);

-- --------------------------------------------------------

--
-- Table structure for table `kemahasiswaan`
--

CREATE TABLE `kemahasiswaan` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kemahasiswaan`
--

INSERT INTO `kemahasiswaan` (`nip`, `nama`, `jabatan`, `foto`) VALUES
('13580823', 'Andi Joko', 'Kepala Bagian Kemahasiswaan Tel-U', 'ukm1.jpg'),
('56807', 'Taufan Tambunan', 'bagian kemahasiswaan', 'ukm41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_artikel` varchar(100) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `isi_komentar` varchar(512) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `nim` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `jenis`, `id_artikel`, `nama_komentar`, `email`, `website`, `isi_komentar`, `waktu`, `nim`) VALUES
(2, 'event', '235236', 'wa wa', 's@gmail.com', 'sss.net', 'oke mantap', 'May 25, 2017, 7:03 pm', NULL),
(3, 'event', '4', 'ak aaa', 'aku@gmail.com', 'aku.net', 'aku aku aku', 'May 25, 2017, 7:04 pm', NULL),
(5, 'artikel', '4', 'wa wa wa hehe', 'wa@gmail.com', 'wa.net', 'wah artikel yang sangat bagus', 'May 25, 2017, 7:29 pm', NULL),
(7, 'artikel', '1235', 'hadi', 'hadikaes96@gmail.com', 'hadikaes.com', 'halo ini coba komentar', 'June 12, 2017, 8:44 pm', NULL),
(8, 'event', '235243', 'tety', 'tety@gmail.com', '', 'event ukm', 'June 13, 2017, 4:07 am', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lpj`
--

CREATE TABLE `lpj` (
  `id_lpj` int(11) NOT NULL,
  `judul_lpj` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpj`
--

INSERT INTO `lpj` (`id_lpj`, `judul_lpj`, `file`, `nama_ukm`, `no_telp`) VALUES
(2, 'LPJ UKM adhad', 'BudayaOrganisasi_Kelompok03_065.pdf', 'UKM BALI', '081220917250'),
(6, 'UKM TELKOM', 'BudayaOrganisasi_Kelompok03_064.pdf', 'UKM JAWA', '081232801197');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fakultas`, `jurusan`, `email`, `no_telp`, `foto`, `status`) VALUES
(670112321, 'Faisal', 'FKB', 'MI', 'faisalfadli@gmail.com', '08122098789', 'author1.jpg', 'aktiv'),
(6701140076, 'Teti Handayani', 'FIT', 'MI', 'tetihandayani51@gmail.com', '081220917250', 'blog2.jpg', 'aktiv'),
(6701140223, 'Resita Tri Sukmawati', 'FIT', 'MI', 'resita@gmail.com', '081333840010', '10371.jpg', 'aktiv'),
(6701146754, 'kara nadya na na', 'FIT', 'MI', 'karakara@gmail.com', '0815556666', 'rumah_gadang.jpg', 'non-aktiv'),
(6701148899, 'Amelia Shabrina', 'Fakultas Ilmu Terapan', 'Manajemen Informatika', 'amelia@gmail.com', '081333456765', 'UKM_Fotographi.jpg', 'aktiv');

-- --------------------------------------------------------

--
-- Table structure for table `partisipan`
--

CREATE TABLE `partisipan` (
  `id_partisipan` int(11) NOT NULL,
  `kd_booking` int(10) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `jenis_pengumuman` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `id_ukm` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `jenis_pengumuman`, `judul`, `isi_pengumuman`, `id_ukm`, `status`) VALUES
(1, 'Open Recruitment', 'Open Recruitment Festival Widyacanamurti', 'Pendaftaran panitia dibuka mulai tanggal 20 Mei 2017', NULL, 1),
(2, 'Biasa aja kok ini', 'Penting sekali', 'ah ah we we qw ew', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `judul_proposal` varchar(50) DEFAULT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `judul_proposal`, `nama_ukm`, `no_telp`, `file`) VALUES
(2, 'Coba Proposal', 'UKM Djawa', '081234567890', 'ACFrOgDfl6cpxsXgz8FjNdVD4PU9mUA0aCww4k4___1bm6omJa'),
(4, '123', 'dsdsd', '123', 'KSM5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(100) NOT NULL,
  `nama_ukm` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `sekre_ukm` varchar(200) NOT NULL,
  `logo_ukm` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `nama_ukm`, `kategori`, `slogan`, `deskripsi`, `sekre_ukm`, `logo_ukm`, `status`) VALUES
(1, 'UKM Fotography Oke', 'Dokumentasi', 'Hasil Karya Terbaik', 'UKM ini didirikan pada tahun 2016 pada bulan Januari', 'Gedung GSG', 'UKM_Fotographi.jpg', 'aktiv'),
(2, 'UKM Tennis Club', 'Olahraga', 'Tennis Club Solid', 'UKM Tennis merupakan salah satu kegiatan cabang olahraga di Telkom University', 'Student Center', 'UKM_Tennis_Club.jpg', 'non-aktiv'),
(1235, 'UKM DJAWA', 'Kebudayaan Daerah', 'Tjap Parabola', 'Keluarga Wilayah Jawa berkumpul dalam UKM ini', 'Student Center', 'UKM_Djawa.jpg', 'non-aktif'),
(1236, 'UKM Padang', 'Daerah', 'alek rang minang', 'UKM ini merupakan UKM asal daerah Padang', 'Belakang FKB', 'UKM_Rumah_Gadang.jpg', 'non-aktif'),
(1237, 'UKM Padang', 'daerah', 'alek rang minang', 'UKM asal padang', 'belakang FKB', 'UKM_Rumah_Gadang1.jpg', 'non-aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kd_artikel`),
  ADD KEY `id_ukm` (`id_ukm`),
  ADD KEY `id_ukm_2` (`id_ukm`);

--
-- Indexes for table `data_bukti_transfer`
--
ALTER TABLE `data_bukti_transfer`
  ADD PRIMARY KEY (`kd_bukti`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `data_panitia`
--
ALTER TABLE `data_panitia`
  ADD PRIMARY KEY (`kd_panitia`);

--
-- Indexes for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pesan_tiket`
--
ALTER TABLE `data_pesan_tiket`
  ADD PRIMARY KEY (`kd_booking`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id_lpj`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `partisipan`
--
ALTER TABLE `partisipan`
  ADD PRIMARY KEY (`id_partisipan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kd_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;
--
-- AUTO_INCREMENT for table `data_bukti_transfer`
--
ALTER TABLE `data_bukti_transfer`
  MODIFY `kd_bukti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_panitia`
--
ALTER TABLE `data_panitia`
  MODIFY `kd_panitia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_pesan_tiket`
--
ALTER TABLE `data_pesan_tiket`
  MODIFY `kd_booking` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235247;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `partisipan`
--
ALTER TABLE `partisipan`
  MODIFY `id_partisipan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1238;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
