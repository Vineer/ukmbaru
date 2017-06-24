-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 12:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interukm`
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
  `id_ukm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `jenis_akses`, `nim`, `id_ukm`) VALUES
(1, 'bali', 'bali123', 'Administrator', NULL, 1235),
(2, 'padang', 'padang123', 'Administrator', NULL, 1236),
(3, 'resita', 'resita123', 'Superadmin', NULL, 3),
(10, 'rere', 'rere', 'Mahasiswa', 6701140223, 4),
(13, 'kara', 'kara123', 'Mahasiswa', 6701146754, 5),
(18, 'faisal', 'faisal123', 'Mahasiswa', 670112321, 0),
(19, 'tetyhandayani', 'tetydoang', 'Mahasiswa', 6701140076, 0),
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
(4, 'UKM Kesenian Bali Widyacana Murti', 'Kebudayaan Daerah', '2017-06-15', '<div>Ada zaman sekarang ini orang bertanya-tanya apa betul leak itu ada? apa betul leak itu menyakiti? Secara Umum leak itu tidak menyakiti, leak itu proses ilmu &nbsp;yang cukup bagus &nbsp;bagi yang berminat. Karena ilmu leak juga memiliki etika-etika tersendiri.</div><div>Tidak gampang mempelajari ilmu leak. Dibutuhkan kemampuan yang prima untuk mempelajari ilmu leak. Di masyarakat sering kali leak dicap menyakiti bahkan bisa membunuh manusia, padahal tidak seperti itu.</div><div>Ilmu leak juga sama dengan ilmu yang lainnya yang terdapat dalam lontar-lontar kuno Bali.</div><div>Dulu ilmu leak tidak sembarangan orang mempelajari, karena ilmu leak merupakan ilmu yang cukup rahasia sebagai pertahanan serangan dari musuh.</div><div>Orang Bali Kuno yang mempelajari ilmu ini adalah para petinggi-petinggi raja disertai dengan bawahannya.</div><div>Tujuannya untuk sebagai ilmu pertahanan dari musuh terutama serangan dari luar.</div><div>Orang-orang yang mempelajari ilmu ini memilih tempat yang cukup rahasia, karena ilmu leak ini memang rahasia.</div><div>Jadi tidak sembarangan orang yang mempelajari.</div><div>Namun zaman telah berubah otomatis ilmu ini juga mengalami perubahan sesuai dengan zamannya.</div><div>Namun esensinya sama dalam penerapan. Yang jelas ilmu leak tidak menyakiti.</div><div>Yang menyakiti itu ilmu teluh atau nerangjana, inilah ilmu yang bersifat negatif, khusus untuk menyakiti orang karena beberapa hal seperti balas dendam, iri hati, ingin lebih unggul, ilmu inilah yang disebut pengiwa.</div><div>Ilmu pengiwa inilah yang banyak berkembang di kalangan masyarakat seringkali dicap sebagai ilmu leak.</div><div>Seperti yang dikatakan diatas leak itu memang ada sesuai dengan tingkatan ilmunya termasuk dengan endih leak. Endih leak ini biasanya muncul pada saat mereka lagi latihan atau lagi bercengkrama dengan leak lainnya baik sejenis maupun lawan jenis. Munculnya endih itu pada saat malam hari khususnya tengah malam.</div><div>Harinya pun hari tertentu tidak sembarangan orang menjalankan untuk melakukan ilmu tersebut.</div>', 'Misteri Leak Bali', 1235, 0),
(1235, 'UKM Kesenian Widyacana Murti', 'Kebudayaan', '2017-06-13', '<div>Jika anda pernah mengunjungi Bali, anda akan merasa dipermainkan jika anda pikir nama setiap orang yang anda temui bernama Wayan. Anak-anak orang Bali diberi nama berdasarkan sesuai dengan kasta keluarga yang di miliki dan di urutkan berdasarkan kelahiran mereka.90% dari populasi masing-masing memiliki satu kasta, nama-nama seperti Made. Wayan dan Nyoman begitu sangat populer.</div><div>Masyarakat Bali didasarkan pada sistem kasta Hindu, meskipun tidak serumit bentuk yang terjadi di India. Versi sederhana ini menjelaskan penempatan orang ke dalam 4 kasta yang berbeda:</div><div><br></div><div>- Brahmana (Pendeta)</div><div>Ini merupakan kasta para pemuka agama dan orang suci yang melakukan upacara keagamaan yang sangat penting.</div><div>Ida Bagus - untuk anak laki-laki</div><div>Ida Ayu or Dayu - untuk anak perempuan</div><div><br></div><div>- Ksatria (Penguasa/ksatria)</div><div>Anggota kasta ini mencangkup beberapa bangsawan dan raja (contohnya. Anggota keluarga kerajaan)</div><div>Anak Agung, Agung, Dewa - untuk anak laki-laki</div><div>Anak Agung, Agung, Dewi, Dewayu - untuk anak perempuan</div><div>Cokorda, Dewa Agung untuk anggota kerajaan yang berkuasa.</div><div>Kasta Ksatria juga memiliki nama tengah sebagai berikut&nbsp;</div><div>Raka - saudara perempuan/lakui-laki tertua&nbsp;</div><div>Oka - bungsu</div><div>Rai - saudara perempuan/laki-laki termuda</div><div>Anom - perempuan muda</div><div>Ngurah - seseorang yang berwenang</div><div><br></div><div>- Wesia (Pedagang)</div><div>Gusti (tuan) - untuk laki-laki dan perempuan</div><div>Dewa - untuk laki-laki</div><div>Desak - untuk perempuan</div><div><br></div><div>- Sudra (Petani)</div><div>Merupakan populasi paling banyak (lebih dari 90%) di Bali memiliki kasta ini</div><div>Wayan, Putu, Gede - &nbsp;anak pertama laki-laki&nbsp;</div><div>Wayan, Putu, Iluh - &nbsp;anak pertama perempuan&nbsp;</div><div>Made, Kadek, Nengah - anak kedua untuk laki-laki dan perempuan</div><div>Nyoman, Komang - anak ketiga untuk laki-laki dan perempuan&nbsp;</div><div>Ketut - anak keempat untuk laki-laki dan perempuan</div><div>Jika seseorang merupakan anak ke lima maka beralih kembali ke nama yang sama dengan anak pertama lahir.</div><div>Sistem yang unik ini hanyalah sedikit bagian dari hal yang menarik di Bali. Jadi jangan heran jika anda memanggil \"Made\" di tengah orang banyak dan beberapa orang akan berbalik memanggil anda!</div>', 'Kasta Hindu di Bali', 1235, 0),
(1236, 'UKM Rumah Gadang', 'Kebudayaan', '2017-06-12', '<div>Makan bajamba tradisi Minang merupakan tradisi dari leluhur nenek moyang yang terus dibudayakan sampai sekarang. Makan bajamba sendiri maksudnya adalah makan didalam pinggan besar secara bersama-sama.</div><div>Makan bajamba disebut juga dengan makan barapak, Biasanya terdiri dari 5 sampai 7 orang. Rata-rata didaerah Minangkabau mempunyai cara makan bajamba namun dengan gaya masing-masing pula.</div><div>Umumnya yang membedakan adalah jenis makanan yang di hidangkan. untuk daerah Bukttinggi yang dipengaruhi oleh adat Kurai Limo Jorong makan bajamba dengan menggunakan \"samba nan salapan\". Maksudnya ada lauk khusus yang harus wajib ada pada acara makan bajamba.</div><div>Makan bajamba tradisi Minang akan bajamba sering dilakukan pada saat pelaksanaan baralek dan acara penting lainnya seperti ulang tahun kota.</div><div>Bahkan makan bajamba digelar ketika ada menyambut tamu penting.</div><div>Tujuannya untuk memupuk tali silaturrahmi dan memunculkan rasa kebersamaan tanpa melihat status dan pangkat.</div><div>Biasanya acara makan bajamba ini di adakan di sebuah rumah atau tempat khusus yang diikuti puluhan atau ratusan orang. Ketika makan bajamba semua orang larut dalam kebahagiann karena bekerjasama menghabiskan nasi yang super banyak di pinggan.</div>', 'Makan Bajamba', NULL, 0),
(1237, 'UKM Betawie', 'Kebudayaan Daerah', '2017-06-12', '<div>Tidak Banyak yang tahu, bahwa sesungguhnya nama rumah asli suku Betawi adalah Rumah Kebaya. Sekilas namanya terdengar seperti jenis pakian nasional. Namun, tahukah Anda mengapa rumah ini disebut sebagai Rumah Kebaya?</div><div>Disebut dengan Rumah Kebaya karena bentuk atap yang menyerupai pelana yang dilipat dan apabila dilihat dari samping maka lipatan-lipatan tersebut terlihat seperti lipatan kebaya.</div><div>Nama Rumah Kebaya memang tidak populer, sebab masyarakat lebih familiar dengan Rumah Joglo. Padahal sebenarnya, Rumah Joglo merupakan rumah adat Jawa.</div><div>Kendati sekilas keduanya serupa, namun jika dilihat secara seksama, keduanya sangatlah berbeda. Salah satu perbedaannya terlihat dari atap rumah. Rumah Joglo atapnya tidak menyerupai pelana layaknya lipatan, tetapi menyerupai seperti perahu terbalik.</div><div>Rumah Kebaya sendiri memiliki karakteristik yang khas. Ciri khas dari rumah ini adalah dilihat dari teras yang luas. Teras tersebut berguna untuk menjamu tamu dan menjadi tempat bersantai keluarga.</div><div>Berbeda dengan rumah modern di mana ruang keluarga biasanya ada di dalam rumah, tetapi di Rumah Kebaya, teras luar inilah tempat favorit keluarga untuk bersenda gurau.</div><div>Di teras, terdapat kursi bale-bale dari rotan, bambu, atau kayu jati yang disebut amben. Lantai teras diberi nama gejogan, yang memiliki simbol penghormatan kepada tamu.</div><div>Bagi masyarakat Betawi, gejongan ini dianggap sakral atau kramat, karena berhubungan langsung dengan tangga masuk bernama balaksuji, yakni penghubung rumah dengan area luar.</div><div>Masyarakat Betawi juga membuat sumur di depan rumah dan pemakaman yang berada di samping rumah. Keberadaan makam di samping rumah merupakan tradisi lawas masyarakat Betawi.</div><div>Affan Banon Dirga, Masyarakat Betawi Condet mengungkapkan mengapa makam berada di samping rumah, yaitu agar pihak keluarga yang masih hidup akan sebuah kematian.</div><div>\"Jadi, ketika membuka jendela kamar , pemandangan pertama dilihat adalah makam. Selain itu, dengan adanya makam, sanak saudara yang tidak tinggal di rumah tersebut bisa berziarah tanpa harus menempuh jarak jauh,\" Katanya.</div><div>Namun, seiringnya perkembanga zaman dan lahan yang kian terbatas, tradisi menyimpan makam di dekat rumah sudah mulai ditinggalkan.</div><div>Rumah Kebaya memiliki dinding rumah yang terbuat dari panel-panel yang dapat dibuka dan digeser-geser hingga ke tepi. Tujuannya agar rumah terasa lebih luas. Selain itu, sirkulasi udara pun akan terjadi tanpa sekat.</div>', 'Filosopi Rumah Adat Betawi', NULL, 0),
(1239, 'UKM Permala', 'Kebudayaan Daerah', '2017-06-13', '<div>[ALL ABOUT LAMPUNG]</div><div><br></div><div>Apa itu Sekura?</div><div>Sekura berarti penutup wajah atau topeng. Pesta sekura adalah sebuah pesta rakyat yang seluruh pesertanya menutup wajah.&nbsp;</div><div>Sekura merupakan jenis topeng yang digunakan dalam perhelatan pesta sekura. Seseorang dapat disebut ber-sekura ketika sebagian atau seluruh wajahnya tertutup. Penutup wajah dapat berupa topeng dari kayu, kacamata, kain, atau hanya polesan warna. Untuk menambah kemeriahan acara, sekura bisa dipadukan dengan berbagai busana dengan warna-warna meriah atau mencolok.</div><div><br></div><div>Pesta sekura merupakan perhelatan rutin yang diadakan oleh masyarakat Kabupaten Lampung Barat. Pesta rakyat ini selalu diadakan ketika menyambut Hari Raya Idul Fitri. Dalam acara ini, peserta acara diwajibkan mengenakan topeng dengan berbagai karakter dan ekspresi. Pesta sekura merupakan wujud ungkapan rasa syukur dan suka cita menyambut hari yang suci.</div><div>Pesta ini berlangsung dari 1 sampai 7 Syawal setiap tahunnya. Sebuah bentuk perayaan kemenangan setelah menahan hawa nafsu selama bulan Ramadhan. Bukan sebagai pelampiasan puasa sebulan ya… Juga sebagai ajang silaturahmi dan bermaafan.</div><div>Sekura dibagi menjadi dua, Sekura Kamak dan Sekura Betik.&nbsp;</div><div>- Sekura kamak mengenakan topeng kayu dan berbaju compang-camping.&nbsp;</div><div>- Sekura Betik/Kecah mengenakan tutup muka berupa kain khas motif Lampung yang disebut selendang miwang.&nbsp;</div><div>Bermotif kembang cengkeh ataupun motif lain. Pesta diakhiri dengan panjat pinang yang hanya bisa diikuti oleh Sekura Kamak saja.</div><div><br></div><div>Kapan Ada Pesta Sekura??</div><div>Tidak susah untuk mengingat kapan bakal ada acara ini di Liwa. Siap-siap saja untuk agendakan kunjungan ke Liwa pada 1 – 7 Syawal. Karena acara pesta Sekura ini selalu ada tiap tahunnya. Menjadi perayaan kemenangan setelah sebulan menahan hawa nafsu. Juga sebagai wadah silaturrahim warga pekon.</div>', 'All About Lampung', NULL, 0),
(1240, 'UKM Rumah Gadang', 'Kebudayaan Daerah', '2017-06-19', '<div>Alhamdulillah sudah terlaksana Buko Basamo Alumni Rumah Gadang.</div><div>Semoga uda uni alumni Rumah Gadang dapat selalu menjaga silahturahmi ini dengan baik kedepannya. Aamiin</div><div><br></div><div>Jangan lupa besok akan diadakan Buko Basamo Rumah Gadang dan Charity, regional Sumbar. Ditunggu kedatangan uda uni yg berada di Sumbar</div><div><br></div><div>Rumah Gadang Kokoh, Nagari Tagak</div><div>#HANTAM</div>', 'Kebersamaan Keluarga Kami', 1236, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_bukti_transfer`
--

CREATE TABLE `data_bukti_transfer` (
  `kd_bukti` int(10) NOT NULL,
  `kd_booking` varchar(10) NOT NULL,
  `nim` bigint(10) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_bukti_transfer`
--

INSERT INTO `data_bukti_transfer` (`kd_bukti`, `kd_booking`, `nim`, `foto`) VALUES
(2, '6778', 67890, 'ukm4.jpg'),
(3, '0', 6701140223, 'ukm4.jpg'),
(4, '0', 6701140223, 'skema relasi.jpg'),
(5, '2324', 6701148567, 'ClassDiagram1tety (1) (1).png'),
(6, '5', 6701140076, 'UKM KBMS.jpg'),
(7, '3', 6701140223, 'UKM KBMS.jpg'),
(8, '13', 6701140076, 'profil-Aksara_Telkom.jpg'),
(9, '14', 6701140223, 'profil-Aksara_Telkom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_panitia`
--

CREATE TABLE `data_panitia` (
  `kd_panitia` int(10) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nim` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_panitia`
--

INSERT INTO `data_panitia` (`kd_panitia`, `ukm_pilihan`, `divisi`, `motivasi`, `cv`, `status`, `nim`) VALUES
(1, 'UKM Bola', 'sponsorship, acara', 'hhhhushsahahhs', 'FI-Benua-Etam.jpg', 'Diterima', 0),
(2, 'UKM Bola', 'acara', 'huhuhuhuhu', 'syukuran.jpg', '', 0),
(3, 'UKM Bola', 'dokumentasi', 'bcjnx sj', '6701140223 Registrasi _ Telkom University.pdf', '', 0),
(4, 'UKM Bola', 'logistik', 'ingin mencari pengalaman', '6701140223 Nilai _ Telkom University.pdf', 'Diterima', 0),
(5, 'UKM Bola', 'konsumsi', 'bvbvbv', 'Aksara Telkom.jpg', '', 0),
(6, 'UKM Bola', 'logistik', 'asa', 'Alek Rumah Gadang.jpg', '', 0),
(7, 'Alek Rumah Gadang 2017', 'acara', 'asasas', 'web-firefly-wallpaper-fireflyws-lomography-hangar-nature-wallpapers.jpg', '', 0),
(9, 'Alek Rumah Gadang 2017', 'logistik', 'asasaksjkhdwgdyqwgdtyqrd', 'web-firefly-wallpaper-fireflyws-lomography-hangar-nature-wallpapers.jpg', '', 0),
(10, 'Alek Rumah Gadang 2017', 'dokumentasi', 'iya bagus', '1037.jpg', '', 2147483647),
(13, 'Pilih Event', 'dokumentasi', 'iya', '1037.jpg', '', 2147483647),
(14, 'Alek Rumah Gadang 2017', 'sponsorship', 'bn', 'ClassDiagram1tety (1).png', '', 670112321),
(15, 'Pagelaran Seni dan Budaya Betawie', 'acara', 'aku ingin menjadi', 'ClassDiagram1tety (1) (1).png', '', 6701140076),
(16, 'Pagelaran Seni dan Budaya Betawie', 'dokumentasi', 'tety ikut kepanitiaan', 'ClassDiagram1tety (1).png', '', 6701140076);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `id` int(11) NOT NULL,
  `ukm_pilihan` varchar(50) NOT NULL,
  `motivasi` varchar(500) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum Diterima',
  `nim` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengurus`
--

INSERT INTO `data_pengurus` (`id`, `ukm_pilihan`, `motivasi`, `cv`, `status`, `nim`) VALUES
(1, '', 'sad', 'Bekasi.docx', 'Belum Diterima', 0),
(2, '', 'fgd', '59953_(E.BISNIS) - Analisis Pelanggaran E.Bisnis PT.PLN.docx', 'Belum Diterima', 0),
(3, 'UKM Bola', 'sahaha', 'FI-Benua-Etam.jpg', 'Belum Diterima', 0),
(4, 'UKM Bali', 'hbnjmkmn', 'FI-Benua-Etam.jpg', 'Belum Diterima', 0),
(5, 'UKM Bola', 'nxb jsnxjs', '6701140223 Nilai _ Telkom University.pdf', 'Belum Diterima', 0),
(6, 'UKM Bali', 'mENCARI PENGALAMAN', 'ppt pa.pptx', 'Belum Diterima', 0),
(7, 'UKM Bola', '', '', 'Belum Diterima', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pesan_tiket`
--

CREATE TABLE `data_pesan_tiket` (
  `kd_booking` varchar(10) NOT NULL,
  `nim` bigint(10) NOT NULL,
  `acara` varchar(100) NOT NULL,
  `jml_tiket` varchar(50) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_pesan_tiket`
--

INSERT INTO `data_pesan_tiket` (`kd_booking`, `nim`, `acara`, `jml_tiket`, `total_harga`, `status`, `id_event`) VALUES
('1', 6701148899, 'Gala Abhinaya', '3', 225000, '', 235246),
('10', 6701140076, 'Dies Natalis XXIV - Calonarang', '2', 0, '', 0),
('11', 6701140076, 'Gala Abhinaya', '1', 0, '', 0),
('13', 6701140076, 'Dies Natalis XXIV - Calonarang', '4', 200000, '', 235243),
('14', 6701140223, 'Alek Rang Minang feat Ajo Buset', '4', 100000, 'Lunas', 235245),
('3', 6701140223, '', '2', 0, '', 0),
('5', 6701140076, '', '5', 0, '', 0),
('6', 123123123, '', '2', 0, '', 0),
('7', 6701140223, 'Dies Natalis XXIV - Calonarang', '2', 0, '', 0),
('8', 6701140223, 'Dies Natalis XXIV - Calonarang', '4', 0, '', 0);

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
  `selesai` time NOT NULL,
  `harga_tiket` int(100) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `konten` varchar(5000) NOT NULL,
  `id_ukm` int(10) DEFAULT NULL,
  `status_approval` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`, `tempat`, `waktu`, `selesai`, `harga_tiket`, `penyelenggara`, `poster`, `konten`, `id_ukm`, `status_approval`, `rating`) VALUES
(235244, 'Pagelaran Seni dan Budaya Betawie', '2018-07-01', 'Aula FIT', '19:00:00', '00:00:00', 30000, 'UKM Betawie', 'UKM_Betawie3.jpg', '<div>Panggilan untuk abang mpok semuanyeeeeee!!!!!!!!! UKM Betawie telkom University dengan bangga nampilin \"PAGELARAN SENI &nbsp;DAN BUDAYA BETAWIE 2016\"</div><div>Hari/Tanggal : Sabtu 2 april 2016</div><div>Tempat : Aula FIT</div><div>Ebuset masa iya kaga dateng !! Kapan lagi nih abang mpok bisa nonton&nbsp;</div><div>pertunjukan nyang megah tentang kebudayaan betawi di tanah sunda ini.</div><div>Nyokk dahh semuanye datang dan ramein nihh acara Budaya Betawi tercinte.&nbsp;</div><div>Aye jamin, kaga bakal ada yang nyesel dahh</div><div>Lebih lengkapnye lagi, lu pada bisa tanya tanya nih ke orang ini :</div><div>Id line : widyalifianti / 089679931848</div><div>#Pagelaranbetawie2016</div><div>#betawiepunyagaye</div>', NULL, 1, 2),
(235245, 'Alek Rang Minang feat Ajo Buset', '2017-04-16', 'Aula Fakultas Komunikasi Bisnis Telkom University', '19:00:00', '00:00:00', 25000, 'UKM Rumah Gadang', 'rumah_gadang.jpg', '<div>Iko nyo nan dinanti nanti kini lah tibo,</div><div>Alek bukan sumbarang alek, aleknyo bujang jo gadih minang ditanah rantau</div><div>RUMAH GADANG TELKOM UNIVERSITY Proudly Present</div><div>Grand Launching Rumah Gadang Telkom University ALEK RANG MINANG \"Maluruihkan Bandang Nan Kusuik\" Ft. Ajo Buset</div><div>Drama, Tari, Randai, Silek, dan musik tradisional Minangkabau dikemas menjadi sebuah pertunjukan menarik dan sangat ditunggu.</div><div>Hari: Sabtu, 16 April 2016</div><div>Tempat: Aula Fakultas Komunikasi Bisnis, Telkom University</div><div>Note the date from NOW!</div><div>#ARM2016</div><div>#RumahGadangTelkom</div>', 1236, 1, 0),
(235246, 'Gala Abhinaya', '2017-04-26', 'Lapangan Parkir Telkom Convention Hall', '15:00:00', '00:00:00', 75000, 'UKM Band', 'Ukm_band.jpg', '<div>UKM BAND Telkom University</div><div>Mempersembahkan</div><div>GALA ABHINAYA</div><div>\"Satukan Budaya dengan Irama\"</div><div>Dibintangi oleh :</div><div>- ALEXA</div><div>- Barry Likumahuwa \"Feel Good Collective\"</div><div>- \"Arumba\" by Saung Angklung Udjo</div><div>Penampilan Tradisional oleh :</div><div>- UKM Permala (Lampung)</div><div>- UKM KBMS (Sulawesi)</div><div>- UKM Bali Widyacana Murti</div><div>Penampilan Band oleh :</div><div>- SEREVINA &amp; friends</div><div>- Green Tea Latte</div><div>dan kunjungi juga Culinary Festival!!</div><div>Dilaksanakan pada :</div><div>April 26th, 2015</div><div>di Lapangan Parkir Telkom Convention Hall</div><div>Jl.Telekomunkasi no.1, Dayeuhkolot, Bandung</div><div>Mulai Pukul :</div><div>15.00 WIB</div><div>Tiket :</div><div>Presale 1 : IDR 28.000 (21 Mar - 5 Apr 2015)</div><div>Presale 2 : IDR 38.000 (6 Apr - 16 Apr 2015)</div><div>OTS : IDR 50.000</div><div>Contact Person :</div><div>- Untuk Tiket :</div><div>Muhe : 0853 5290 9966</div><div>Eddy : 0857 3970 6333&nbsp;</div><div>- Untuk Event :</div><div>Arvel : 0813 1850 6384</div><div>Ilham : 0812 90 575 909</div><div>Stand Tiket :</div><div>Kantin TES (Business Center)</div><div>Senin - Jumat, 12.00 - 16.00 WIB</div><div>Nikmatilah atmosfir dari kebudayaan tradisonal Indonesia yang dipadukan oleh modernisasi, hanya di GALA ABHINAYA!</div><div>Twitter &amp; Instagram :</div><div>@UKMBANDUNITEL</div>', NULL, 1, 0),
(235248, 'Alek Rumah Gadang 2017', '2017-06-20', 'Gedung Serba Guna Telkom', '14:00:00', '15:00:00', 35000, 'UKM Rumah Gadang', 'Alek_Rumah_Gadang6.jpg', '<div>[ALEK RUMAH GADANG 2017]</div><div><br></div><div>Assalamualaikum..</div><div>Hallo uda uni Penampil ARG\'17</div><div>Kita akan mengadakan latihan gabungan pertama seluruh PENAMPIL ALEK RUMAH GADANG 2017 :&nbsp;</div><div><br></div><div>Hari/ Tanggal: Rabu,25 Januari 2017</div><div>Tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: GSG</div><div>Jam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 18.00</div><div><br></div><div>*seluruh penampil wajib untuk hadir di latihan pertama ini.&nbsp;</div><div><br></div><div>Atas perhatiannya, kami ucapkan Terima Kasih.</div><div><br></div><div>\"satu orang bisa menjadi bahan penting dalam sebuah tim, namun satu orang tidak dapat membuat sebuah tim - Kareem Abdul-Jabbar\"</div><div><br></div><div>#AlekRumahGadang2017</div><div>#RumahGadangTel-U</div>', 1236, 1, 0),
(235249, 'Marawa Rumah Gadang', '2017-06-19', 'Teras Cikapundung', '15:00:00', '20:00:00', 25000, 'UKM Rumah Gadang', 'Marawa_Rumah_Gadang.jpg', '<div>[ MARAWA RUMAH GADANG]</div><div><br></div><div>Bak cando urang mamikek, Lah manyaru buruang di rantiang, ma angguak-angguak balam tigo gayo, kini lah tibo maso nyo kabakeh kami nak ma undang sanak sudaro, manyongsong alek kahilaman, di sapo jo muluik manih di sambuik di baok naiak, sajamba satandia makan baanjuang bahaso urang disiko.</div><div><br></div><div>Rumah Gadang mempersembahkan sebuah event pagelaran seni budaya yang bertujuan untuk mengingatkan dan mengenalkan akan budaya dan seni Minangkabau.</div><div>Selain penampilan seni dan budaya juga akan diselenggarakan pembagian hadiah para juara pada event Rumah Gadang Olimpiade di Marawa Rumah Gadang.&nbsp;</div><div><br></div><div>Yuk datang dan saksikan:</div><div>Teras Cikapundung</div><div>Sabtu,22 April 2017</div><div>18.00 WIB s.d Selesai</div><div><br></div><div>#AlekRumahGadang</div><div>#TarasoMinangnyo</div><div>#RumahGadangKokohNagariTagak</div><div>#Hantam&nbsp;</div><div>#ARG2K17</div>', 1236, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `kritik` varchar(500) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `nim` bigint(10) DEFAULT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `kritik`, `saran`, `nim`, `id_event`) VALUES
(1, 'bagus', 'good', NULL, 0),
(2, 'jelek', 'ngga', NULL, 0),
(3, 'acara kurang menarik', 'buat konsep lebih bagus lagi', 6701140076, 0),
(4, 'asas', 'qwqwq', 235248, 0),
(5, 'ini kritik', 'ini saran', 6701148899, 235244);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `isi_komentar` varchar(512) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `nim` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `jenis`, `id_artikel`, `isi_komentar`, `waktu`, `nim`) VALUES
(2, 'event', 235236, 'oke mantap', 'May 25, 2017, 7:03 pm', NULL),
(3, 'event', 4, 'aku aku aku', 'May 25, 2017, 7:04 pm', NULL),
(5, 'artikel', 4, 'wah artikel yang sangat bagus', 'May 25, 2017, 7:29 pm', NULL),
(7, 'artikel', 1235, 'halo ini coba komentar', 'June 12, 2017, 8:44 pm', NULL),
(8, 'event', 1240, 'event ukm', 'June 13, 2017, 4:07 am', NULL),
(9, 'event', 235243, 'resita aja ya kan', 'June 19, 2017, 4:34 am', NULL),
(10, 'event', 235244, 'apa ajalah', 'June 20, 2017, 6:00 am', 6701148899),
(11, 'event', 235245, 'halooo ini bagus', 'June 20, 2017, 6:22 am', 6701148899),
(12, 'artikel', 1236, 'hahahaha', 'June 20, 2017, 6:34 am', 6701148899),
(13, 'event', 235244, 'ya gitu deh', 'June 21, 2017, 8:51 pm', 6701140076);

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
(6701140076, 'Teti Handayani', 'FIT', 'MI', 'tetihandayani51@gmail.com', '081220917250', 'author.jpg', 'aktiv'),
(6701140223, 'Resita Tri Sukmawati', 'FIT', 'MI', 'resita@gmail.com', '081333840010', '10371.jpg', 'aktiv'),
(6701144244, 'Tegar Jagat Geni A. P.', 'FIT', 'MI', 'tegar@gmail.com', '81223345566', 'author1.jpg', 'aktiv'),
(6701144265, 'Bayu', 'FIT', 'MI', 'bsapp@gmail.com', '81226673133', 'author1.jpg', 'aktiv'),
(6701144272, 'Asto Hartopo', 'FIT', 'MI', 'asto@gmail.com', '81226673133', 'author1.jpg', 'aktiv'),
(6701146754, 'kara nadya na na', 'FIT', 'MI', 'karakara@gmail.com', '0815556666', 'rumah_gadang.jpg', 'non-aktiv'),
(6701148899, 'Amelia Shabrina', 'Fakultas Ilmu Terapan', 'Manajemen Informatika', 'amelia@gmail.com', '081333456765', 'UKM_Fotographi.jpg', 'aktiv');

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
  `status` int(11) NOT NULL DEFAULT '0',
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `jenis_pengumuman`, `judul`, `isi_pengumuman`, `id_ukm`, `status`, `id_event`) VALUES
(1, 'Open Recruitment', 'Open Recruitment Festival Widyacanamurti', 'Pendaftaran panitia dibuka mulai tanggal 20 Mei 2017', NULL, 1, 0),
(2, 'Biasa aja kok ini', 'Penting sekali', 'ah ah we we qw ew', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(10) NOT NULL,
  `nama_ukm` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `sekre_ukm` varchar(200) NOT NULL,
  `logo_ukm` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nama_cp` varchar(50) NOT NULL,
  `no_rekening` bigint(50) NOT NULL,
  `bank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `nama_ukm`, `kategori`, `slogan`, `deskripsi`, `sekre_ukm`, `logo_ukm`, `status`, `nama_cp`, `no_rekening`, `bank`) VALUES
(1235, 'UKM Kesenian Bali Widyacanamurti', 'Kebudayaan', 'Budaya Kita, Kita yang Budayakan', 'UKM ini merupakan salah satu wadah kegiatan mahasiswa Bali', 'Gedung Serba Guna Lantai 3', 'UKM_Djawa.jpg', 'aktiv', 'Komang Trian', 3498769281, 'BRI'),
(1236, 'UKM Rumah Gadang', 'Daerah', 'Alek Rang Minang', 'UKM ini merupakan UKM asal daerah Sumatera Barat', 'Student Center', 'UKM_Rumah_Gadang.jpg', 'aktiv', 'Viona', 346275417, 'BNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_ukm` (`id_ukm`);

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
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_booking` (`kd_booking`);

--
-- Indexes for table `data_panitia`
--
ALTER TABLE `data_panitia`
  ADD PRIMARY KEY (`kd_panitia`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `data_pesan_tiket`
--
ALTER TABLE `data_pesan_tiket`
  ADD PRIMARY KEY (`kd_booking`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_event` (`id_event`);

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
  ADD KEY `nim` (`nim`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `id_ukm` (`id_ukm`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_event_2` (`id_event`);

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
  MODIFY `kd_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;
--
-- AUTO_INCREMENT for table `data_bukti_transfer`
--
ALTER TABLE `data_bukti_transfer`
  MODIFY `kd_bukti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_panitia`
--
ALTER TABLE `data_panitia`
  MODIFY `kd_panitia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `data_pengurus`
--
ALTER TABLE `data_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235250;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `ukm` (`id_ukm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
