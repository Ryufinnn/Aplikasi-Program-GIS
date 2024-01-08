-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 12:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurul`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(20) NOT NULL,
  `id_pt` varchar(10) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `nama`, `id_pt`, `level`) VALUES
('aaaa', '74b87337454200d4d33f80c4663dc5e5', 'ahmad', '10104', 2),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, 1),
('andy', 'e00b29d5b34c3f78df09d45921c9ec47', 'terserah', '10201', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(10) NOT NULL,
  `nama_fakultas` varchar(50) DEFAULT NULL,
  `id_pt` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `id_pt`) VALUES
('20301', 'ILMU PENDIDIKAN ', '10301'),
('20302', 'MIPA', '10301'),
('20303', 'IPS', '10301'),
('21101', 'FAKULTAS EKONOMI', '10101'),
('21102', 'FAKULTAS HUKUM', '10101'),
('21103', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', '10101'),
('21104', 'FAKULTAS ILMU BUDAYA', '10101'),
('21105', 'FAKULTAS TEKNIK SIPIL DAN PERENCANAAN', '10101'),
('21106', 'FAKULTAS PERIKANAN DAN ILMU KELAUTAN', '10101'),
('21107', 'FAKULTAS TEKNOLOGI INDUSTRI', '10101'),
('21108', 'PANCASARJANA', '10101'),
('21201', 'FAKULTAS EKONOMI', '10102'),
('21202', 'Fakultas Hukum', '10102'),
('21203', 'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN', '10102'),
('21204', 'FAKULTAS TEKNIK', '10102'),
('21205', 'FAKUTAS KEHUTANAN', '10102'),
('21206', 'FAKULTAS PARIWISATA', '10102'),
('21207', 'FAKULTAS KESEHATAN', '10102'),
('21208', 'MIPA', '10102'),
('21209', 'FAKULTAS PERTANIAN', '10102'),
('21210', 'FAKULTAS ILMU AGAMA ISLAM', '10102'),
('21301', 'FAKULTAS EKONOMI', '10103'),
('21302', 'FAKULTAS HUKUM', '10103'),
('21303', 'FAKULTAS FKIP', '10103'),
('21304', 'FAKULTAS TEKNIK', '10103'),
('21305', 'FAKULTAS SASTRA', '10103'),
('21306', 'FAKULTAS FISIPOL', '10103'),
('21307', 'FAKULTAS  PERTANIAN', '10103'),
('21308', 'MIK', '10103'),
('21309', 'PANCASARJANA', '10103'),
('21501', 'FAKULTAS EKONOMI', '10105'),
('21502', 'FAKULTAS KEDOKTERAN', '10105'),
('21503', 'FAKULTAS KESEHATAN MASYARAKAT', '10105'),
('21504', 'FAKULTAS FAKULTAS KEDOKTERAN GIGI', '10105'),
('21601', 'FAKULTAS EKONOMI', 'kode'),
('21602', 'FAKULTAS KIP', 'kode'),
('21603', 'FAKULTAS TEKNIK SIPIL PERENCANAAN', 'kode'),
('21604', 'FAKULTAS TEKNIK INDUSTRI', 'kode'),
('21605', 'FAKULTAS ILMU KOMPUTER', 'kode'),
('21606', 'FAKULTAS PSIKOLOGI', 'kode'),
('21607', 'FALKULTAS DKV', 'kode'),
('21608', 'MAGISTER', 'kode');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` mediumint(7) NOT NULL,
  `id_pt` varchar(10) DEFAULT NULL,
  `nama_fasilitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_pt`, `nama_fasilitas`) VALUES
(1, 'kode', 'Ruang kelas ber-AC dengan kapasitas 30-40 mahasiswa'),
(2, '10102', 'Laboratorium Fakultas Teknik '),
(3, '10403', 'labor'),
(4, '10106', 'Ruang Kuliah Full AC'),
(5, '10106', 'Semua Ruangan Kuliah dilengkapi LCD Proyektor'),
(6, '10106', 'Labor Bank berbasis Syariah'),
(7, '10106', 'Inkubator Bisnis'),
(8, '10106', 'Perpustakaan Full AC'),
(9, '10106', 'Ruang Kemahasiswaan (BEM DLM  UKM)'),
(10, '10106', '3 (tiga) Unit Labor Komputer'),
(11, '10106', 'Ruang Seminar'),
(12, '10106', 'Ruangan Aula'),
(13, '10106', 'Sistem Informasi Akedemik (Jaringan)'),
(14, '10106', 'Free Hot Spot Internet Area (WiFi)'),
(15, '10106', 'Bea siswa (Pemerintah BAZ Semen Padang Bank Nagari)'),
(16, 'kode', 'Letak kampus yang strategis di pusat kota'),
(17, 'kode', 'Laboratorium komputer'),
(18, 'kode', 'Perpustakaan yang menyediakan majalah surat kabar dan koleksi buku.'),
(19, 'kode', 'Sarana ibadah'),
(20, 'kode', 'Fasilitas olahraga'),
(21, 'kode', 'Fasilitas kantin dan koperasi '),
(22, '10102', 'Laboratorium Fakultas Keguruan dan Ilmu Pendidikan '),
(23, '10102', ' Laboratorium dan Praktek di Fakultas Kesehatan dan MIPA '),
(24, '10102', ' Lembaga Penjaminan Mutu (LPjM) '),
(25, '10102', 'Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) '),
(26, '10102', 'Masjid'),
(27, '10102', 'Fasilitas Seni dan Olah Raga '),
(28, '10102', 'Perpustakaan'),
(29, '10103', 'puskom'),
(30, '10101', 'Kampus Proklamator I Ulakkarang, Kampus Proklamator II Aie Pacah Kampus Proklama III Gunung Pangilun'),
(31, '10101', 'Perpustakaan di Kampsu Proklamator I dan III'),
(32, '10101', 'Mesjid di Kampus Proklamator I dan III'),
(33, '10101', 'Kolam Pembibitan Ikan di Kapar, Kabupaten Pasaman'),
(34, '10101', 'Laboraotrium Basah Perikanan di Lubuk Minturun, Kota Padang.'),
(35, '10101', 'Gedung Olahraga dan Kesenian di Kampus Proklamator II Aie Pacah, Kota Padang.'),
(36, '10101', 'Lapangan Olahraga (sepak Bola, Tenis, Basket, Voli dan Bulu Tangkis) '),
(37, '10101', 'Koperasi Unit Usaha Toko P & D \r\n'),
(38, '10101', 'Koperasi Unit Usaha Foto Copy '),
(39, '10101', 'Koperasi Unit Usaha Kafetaria '),
(40, '10101', 'Koperasi Unit Usaha Percetakan '),
(41, '10101', 'Koperasi Unit Usaha Simpan Pinjam '),
(42, '10101', 'Koperasi Unit pelayanan Santunan Kecelakaan Mahasiswa '),
(43, '10101', 'Laboratorium Dasar (Kimia, Fisika dan Biologi)'),
(44, '10101', 'Laboroatorium Keahlian tiap program studi\r\n'),
(45, '10101', 'Jasa pelayanan bank (Bank Bukopin dan Bank Nagari) '),
(46, '10101', 'Satuan Pengamanan (Satpam) '),
(47, '10101', 'Unit Kegiatan Kemahasiswaan '),
(48, '10101', 'Kemitraan dan Kerjasama Tri Dharma Perguruan Tinggi '),
(49, '10101', 'Aula Balairung Caraka Gedung B Kampus Proklamator I Ulakkarang\r\n'),
(50, '10101', 'aula Gedung 6 Blok B Kampus Proklamator II Aie Pacah'),
(51, '10101', 'Aula Kampus Proklamator III Gunung Pangilun'),
(52, '10308', 'Lab.Proses Produksi'),
(53, '10308', 'Lab. Sistem Produksi'),
(54, '10308', 'Lab. Komputer'),
(55, '10308', 'Lab. PSK & E'),
(56, '10308', 'Lab. PTLFP'),
(57, '10308', 'Lab. Geologi'),
(58, '10308', 'Lab. Mekanika Tanah & Bebatuan'),
(59, '10308', 'Lab. Survei & Pemetaan'),
(60, '10308', 'Lab. Air Perpustakaan'),
(61, '10308', 'Studio Gambar'),
(62, '10308', 'Ruang Sidang'),
(63, '10308', 'Ruang Seminar'),
(64, '10308', 'Fasilitas Internet & Free Hotspot');

-- --------------------------------------------------------

--
-- Table structure for table `jalur`
--

CREATE TABLE `jalur` (
  `id_jalur` mediumint(5) NOT NULL,
  `nama_asal` varchar(50) DEFAULT NULL,
  `x` varchar(15) DEFAULT NULL,
  `y` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur`
--

INSERT INTO `jalur` (`id_jalur`, `nama_asal`, `x`, `y`) VALUES
(1, 'Basko', '-0.8979213', '100.3523024'),
(2, 'Mesjid Raya SUMBAR', '-0.924224', '100.361319');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` tinyint(1) NOT NULL,
  `nama_jenjang` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
(0, 'S2'),
(1, 'S1'),
(2, 'D4'),
(3, 'D3'),
(4, 'profesi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` tinyint(2) NOT NULL,
  `nama_kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Universitas'),
(2, 'Institut'),
(3, 'sekolah tinggi'),
(4, 'akademik'),
(5, 'Politeknik');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `akreditasi` varchar(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_jenjang` tinyint(1) DEFAULT NULL,
  `id_pt` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `akreditasi`, `status`, `id_jenjang`, `id_pt`) VALUES
('32204', 'Pendidikan Matematika', 'B', 1, 1, '10102'),
('J0101', 'Bimbingan dan Konseling ', 'C', 1, 1, '10301'),
('J0102', 'Pendidikan bahasa dan sastra indonesia', 'C', 1, 1, '10301'),
('J0103', 'Pendidikan Bahasa inggris', 'C', 1, 1, '10301'),
('J0104', 'pendidikan Biologi', 'C', 1, 1, '10301'),
('J0105', 'Pendidikan Ekonomi', 'C', 1, 1, '10301'),
('J0106', 'Pendidikan Fisika', 'C', 1, 1, '10301'),
('J0107', 'Pendidikan Geografi', 'C', 1, 1, '10301'),
('J0108', 'Pendidikan Informatika', 'C', 1, 1, '10301'),
('J0109', 'Pendidikan Matematika', 'C', 1, 1, '10301'),
('J0110', 'Pendidikan Sejarah', 'B', 1, 1, '10301'),
('J0111', 'Pendidikan Sosiologi', 'C', 1, 1, '10301'),
('J0201', 'Manajemen', 'C', 1, 1, '10302'),
('J0202', 'Manajemen', 'C', 1, 0, '10302'),
('J0203', 'Akuntasi', 'C', 1, 1, '10302'),
('J0301', 'Teknik Lingkungan', 'C', 1, 1, '10308'),
('J0302', 'Teknik Pertambangan', 'C', 1, 1, '10308'),
('J0303', 'Teknik Industri', 'C', 1, 1, '10308'),
('J0304', 'Sistem Informasi', 'C', 1, 1, '10308'),
('J0401', 'Sastra Inggris', 'C', 1, 1, '10304'),
('J0402', 'Bahasa Inggris', 'C', 1, 3, '10304'),
('J0901', 'Manajemen', 'C', 1, 1, '10309'),
('J1101', 'Sistem Informasi', 'B', 1, 1, '10311'),
('J1201', 'Sistem Informasi', 'C', 1, 1, '10312'),
('J1202', 'Sistem Komputer', 'C', 1, 1, '10312'),
('J1301', 'IlmuKeperawatan', 'C', 1, 1, '10313'),
('J1302', 'Kesehatan Masyarakat', 'C', 1, 1, '10313'),
('J1303', 'Profesi Ners', 'C', 1, 4, '10313'),
('J1501', 'Gizi', 'C', 1, 1, '10315'),
('J1502', 'Ilmu Keperawatan', 'C', 1, 1, '10315'),
('J1503', 'Analisis Kesehatan', 'C', 1, 2, '10315'),
('J1504', 'Analisis Kesehatan', 'C', 1, 3, '10315'),
('J1505', 'keperawatan ', 'C', 1, 3, '10315'),
('J1506', 'Gizi', 'C', 1, 3, '10315'),
('J1507', 'Kebidanan', 'C', 1, 3, '10315'),
('J1508', 'Ners', 'C', 1, 4, '10315'),
('J1601', 'Hiperkes dan Keselamatan Kerja', 'C', 1, 3, '10316'),
('J1602', 'Ilmu Keperawatan', 'C', 1, 1, '10316'),
('J1603', 'Profesi Ners', 'C', 1, 4, '10316'),
('J1801', 'Ilmu Kesehatan Masyrakat', 'B', 1, 1, '10318'),
('J1802', 'Ilmu Keperawatan', 'B', 1, 1, '10318'),
('J1803', 'Kebidanan ', 'B', 1, 3, '10318'),
('J1804', ' Profesi Ners', 'B', 1, 4, '10318'),
('J1901', 'Bidan Pendidik', 'C', 1, 2, '10319'),
('J1902', 'Ilmu Keperawatan', 'C', 1, 1, '10319'),
('J1903', 'Kebidanan', 'C', 1, 3, '10319'),
('J1904', 'keperawatan ', 'C', 1, 3, '10319'),
('J2001', 'Ilmu Keperawatan', 'C', 1, 1, '10320'),
('J2002', 'Kebidanan', 'C', 1, 3, '10320'),
('J2003', 'Rekan Medik dan Informasi Kesehatan', 'C', 1, 3, '10320'),
('J2101', 'Pendidikan Guru Pendidikan Anak Usia Dini', 'C', 1, 1, '10321'),
('J2102', 'Pendidikan Guru Sekolah Dasar', 'C', 1, 1, '10321'),
('J2401', 'Ilmu Keperawatan', 'B', 1, 1, '10324'),
('J2402', 'Profesi Ners', 'B', 1, 4, '10324'),
('J2403', 'Kebidanan', 'B', 1, 3, '10324'),
('J2404', 'keperawatan ', 'B', 1, 3, '10324'),
('J2501', 'Farmasi', 'B', 1, 1, '10325'),
('J2502', 'Profesi Apoteker', 'B', 1, 4, '10325'),
('JA121', 'Kebidanan', 'C', 1, 3, '10412'),
('JA141', 'Kebidanan', 'C', 1, 3, '10414'),
('JA501', 'Nautika', 'C', 1, 3, '10405'),
('JA502', 'Teknik Pelayaran', 'C', 1, 3, '10405'),
('JA503', 'Ketatalaksanaan Pelayaran Niagadan Perkapalan ', 'C', 1, 3, '10405'),
('JA701', 'Rekam Medik dan Kesehatan', 'C', 1, 3, '10407'),
('JBH01', 'Akuntansi', 'B', 1, 1, '10101'),
('JBH02', 'Arsitektur', 'C', 1, 0, '10101'),
('JBH03', 'Arsitektur', 'B', 1, 1, '10101'),
('JBH04', 'Budidaya Perairan', 'B', 1, 1, '10101'),
('JBH05', 'Ekonomi Pembangunan', 'B', 1, 1, '10101'),
('JBH06', 'Ekonomi Pembangunan', 'B', 1, 1, '10101'),
('JBH07', 'Ilmu Hukum', 'B', 1, 1, '10101'),
('JBH08', 'Ilmu Hukum', 'B', 1, 0, '10101'),
('JBH09', 'Manajemen', 'C', 1, 0, '10101'),
('JBH10', 'Manajemen', 'B', 1, 1, '10101'),
('JBH11', 'Pemanfaatan Sumberdaya Perikanan', 'B', 1, 1, '10101'),
('JBH12', 'Pendidikan Bahasa dan Sastra Indonesia', 'B', 1, 1, '10101'),
('JBH13', 'Pendidikan Bahasa dan Sastra Indonesia', 'C', 1, 0, '10101'),
('JBH14', 'Pendidikan Bahasa inggris', 'B', 1, 1, '10101'),
('JBH15', 'pendidikan Biologi', 'C', 1, 1, '10101'),
('JBH16', 'pendidikan guru sekolah dasar', 'B', 1, 1, '10101'),
('JBH17', 'Pendidikan Informatika dan komputer', 'C', 1, 1, '10101'),
('JBH18', 'Pendidikan Matematika', 'B', 1, 1, '10101'),
('JBH19', 'pendidikan pancasila dan kewarganegaraan ', 'B', 1, 1, '10101'),
('JBH20', 'Perencanaan Wilayah Dan Kota', 'B', 1, 1, '10101'),
('JBH21', 'Sastra Indonesia', 'B', 1, 1, '10101'),
('JBH22', 'Sastra Inggris', 'B', 1, 1, '10101'),
('JBH23', 'Sastra Jepang', 'B', 1, 1, '10101'),
('JBH24', 'Sumber daya Perairan Pesisir dan Kelautan', 'B', 1, 0, '10101'),
('JBH25', 'Teknik Ekonomi Konstruksi', 'B', 1, 3, '10101'),
('JBH26', 'Teknik Elektro', 'B', 1, 1, '10101'),
('JBH27', 'Teknik Industri', 'B', 1, 1, '10101'),
('JBH28', 'Teknik kimia', 'B', 1, 1, '10101'),
('JBH29', 'Teknik Mesin', 'B', 1, 1, '10101'),
('JBH30', 'Teknik Sipil', 'C', 1, 0, '10101'),
('JBH31', 'Teknik Sipil', 'B', 1, 1, '10101'),
('JBR01', 'Kebidanan', 'B', 1, 3, '10105'),
('JBR02', 'Kesehatan Masyarakat', 'B', 1, 1, '10105'),
('JBR03', 'Manajemen', 'C', 1, 1, '10105'),
('JBR04', 'Pendidikan Dokter', 'C', 1, 1, '10105'),
('JBR05', 'Pendidikan Dokter Gigi', 'B', 1, 1, '10105'),
('JBR06', 'Profesi Dokter', 'B', 1, 4, '10105'),
('JBR07', 'Profesi Dokter gigi', 'B', 1, 4, '10105'),
('JBR08', 'Radiodiagnostik dan Radioterapi', 'C', 1, 3, '10105'),
('JDA01', 'Akuntansi', 'C', 1, 1, '10106'),
('JDA02', 'Akuntansi', 'C', 1, 3, '10106'),
('JDA03', 'Farmasi', 'C', 1, 1, '10106'),
('JDA04', 'Ilmu Hukum', 'C', 1, 1, '10106'),
('JDA05', 'Ilmu Komunikasi', 'C', 1, 1, '10106'),
('JDA06', 'Manajemen', 'C', 1, 1, '10106'),
('JDA07', 'Manajemen Perusahan', 'C', 1, 3, '10106'),
('JDA08', 'Matematika', 'C', 1, 1, '10106'),
('JDA09', 'Peternakan', 'C', 1, 1, '10106'),
('JDA10', 'Sastra Inggris', 'C', 1, 1, '10106'),
('JDA11', 'Sistem Informasi', 'C', 1, 1, '10106'),
('JDA12', 'Teknik Mesin', 'C', 1, 1, '10106'),
('JDA13', 'Teknik Sipil', 'C', 1, 1, '10106'),
('JDA14', 'Teknologi Industri Pertanian', 'C', 1, 1, '10106'),
('JES01', '.Ilmu Administrasi Negara', 'B', 1, 1, '10103'),
('JES02', 'Agribisnis', 'B', 1, 1, '10103'),
('JES03', 'Agroteknologi', 'B', 1, 1, '10103'),
('JES04', 'Akuntansi', 'B', 1, 1, '10103'),
('JES05', 'Arsitektur', 'C', 1, 1, '10103'),
('JES06', 'Ilmu Hukum', 'B', 1, 1, '10103'),
('JES07', 'Ilmu Hukum', 'B', 1, 0, '10103'),
('JES08', 'Ilmu Komunikasi', 'B', 1, 1, '10103'),
('JES09', 'Ilmu Pemerintahan', 'C', 1, 1, '10103'),
('JES10', 'Manajemen', 'C', 1, 1, '10103'),
('JES11', 'Manajemen Informatika', 'C', 1, 3, '10103'),
('JES12', 'Pendidikan Bahasa dan Sastra Indonesia', 'C', 1, 1, '10103'),
('JES13', 'Pendidikan Bahasa inggris', 'C', 1, 1, '10103'),
('JES14', 'Pendidikan Ekonomi', 'C', 1, 1, '10103'),
('JES15', 'Pendidikan Matematika', 'C', 1, 1, '10103'),
('JES16', 'Pendidikan sastra Inggris', 'C', 1, 1, '10103'),
('JES17', 'Teknik Elektro', 'C', 1, 1, '10103'),
('JES18', 'Teknik Industri', 'C', 1, 1, '10103'),
('JES19', 'Teknik Mesin', 'C', 1, 1, '10103'),
('JES20', 'Teknik Sipil', 'B', 1, 1, '10103'),
('JES21', 'Teknologi Hasil Pertanian', 'C', 1, 1, '10103'),
('JI101', 'Teknik Sipil', 'B', 1, 1, '10201'),
('JI102', 'Teknik Informatika', 'C', 1, 1, '10201'),
('JI103', 'Teknik Geodesi', 'C', 1, 1, '10201'),
('JI104', 'Teknik Elektro', 'B', 1, 1, '10201'),
('JI105', 'Teknik Mesin', 'B', 1, 1, '10201'),
('JI106', 'Teknik Elektronika', 'B', 1, 3, '10201'),
('JI107', 'Teknik Mesin', 'C', 1, 3, '10201'),
('JI108', 'Teknik Sipil', 'B', 1, 3, '10201'),
('JMD01', 'Administrasi Rumah Sakit', 'C', 1, 1, '10102'),
('JMD02', 'Agribisnis', 'C', 1, 1, '10102'),
('JMD03', 'Agroteknologi', 'C', 1, 1, '10102'),
('JMD04', 'Akuntansi', 'C', 1, 1, '10102'),
('JMD05', 'Ilmu Hukum', 'B', 1, 1, '10102'),
('JMD06', 'Ilmu Keperawatan', 'C', 1, 1, '10102'),
('JMD07', 'Kebidanan', 'B', 1, 3, '10102'),
('JMD08', 'Kehutanan', 'B', 1, 1, '10102'),
('JMD09', 'Manajemen', 'B', 1, 1, '10102'),
('JMD10', 'Pendidikan Bahasa dan Sastra Indonesia', 'B', 1, 1, '10102'),
('JMD11', 'Pendidikan Bahasa inggris', 'C', 1, 1, '10102'),
('JMD12', 'Perhotelan', 'C', 1, 1, '10102'),
('JMD13', 'Profesi Ners', 'C', 1, 4, '10102'),
('JMD14', 'Teknik Elektro', 'B', 1, 1, '10102'),
('JMD15', 'Teknik Mesin', 'C', 1, 1, '10102'),
('JMD17', 'Teknik Sipil', 'C', 1, 1, '10102'),
('JMD18', 'Usaha Perjalanan Wisata', 'C', 1, 1, '10102'),
('JPI01', 'Akuntansi', 'B', 0, 3, 'kode'),
('JPI02', 'Akuntansi', 'B', 1, 1, 'kode'),
('JPI03', 'Arsitektur', 'A', 0, 1, 'kode'),
('JPI04', 'Manajemen', 'B', 1, 1, 'kode'),
('JPI05', 'Manajemen Perusahaan', 'B', 0, 3, 'kode'),
('JPI06', 'Pendidikan Informatika dan komputer', 'C', 1, 1, 'kode'),
('JPI07', 'Teknik Elektro', 'A', 0, 1, 'kode'),
('JPI08', 'Teknik Sipil', 'C', 1, 1, 'kode'),
('JTS01', 'Agroteknologi', 'B', 1, 1, '10104'),
('JTS02', 'Ilmu Hukum', 'B', 1, 1, '10104'),
('JTS03', 'Manajemen', 'B', 1, 1, '10104'),
('JTS04', 'Peternakan', 'B', 1, 1, '10104');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `id_pt` varchar(10) NOT NULL,
  `nama_pt` varchar(50) DEFAULT NULL,
  `alamat_pt` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `akreditasi_pt` varchar(15) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `skpt` varchar(20) DEFAULT NULL,
  `tanggal_skpt` date DEFAULT NULL,
  `date_pt` date DEFAULT NULL,
  `id_kategori` tinyint(2) DEFAULT NULL,
  `x` varchar(15) DEFAULT NULL,
  `y` varchar(15) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`id_pt`, `nama_pt`, `alamat_pt`, `kode_pos`, `akreditasi_pt`, `telp`, `email`, `website`, `skpt`, `tanggal_skpt`, `date_pt`, `id_kategori`, `x`, `y`, `gambar`) VALUES
('10101', 'Universitas Bung Hatta', 'Jl. Sumatera, Ulak Karang,Ulak Karang Utara,Padang Utara,Kota Padang, Sumatera Barat, Indonesia', '25133', 'B', '7517051678', 'rektorat@bunghatta.ac.id', 'www.bunghatta.ac.id', '006PDKOP.I.1981', '1981-04-20', '1981-04-20', 1, '-0.906774', '100.343448', 'Ubhh.jpg'),
('10102', 'Universitas Muhammadiyah Sumatera Barat', 'Jl. Pasir Kandang No.4,Padang Pasir,Padang Bar.,Kota Padang, Sumatera Barat, Indonesia', '25172', 'B', '0751-4851002', 'info@umsb.ac.id', 'www.umsb.ac.id', '012601985', '1985-03-13', '1985-03-13', 1, '-0.938388', '100.358795', 'umsb.png'),
('10103', 'Universitas Ekasakti', 'Jl. Veteran Dalam No.26B,Padang Pasir,Padang Bar.,Kota Padang, Sumatera Barat, Indonesia', '25114', 'B', '0751-28859', 'puskom@univ-ekasakti-pdg.ac.id', 'www.univ-ekasakti-pdg.ac.id', '56', '1985-03-23', '1985-03-23', 1, '-0.938781', '100.356087', 'nees1.jpg'),
('10104', 'Universitas Tamansiswa', 'Jalan Taman alai parak kopi Siswa No.9,Padang  Utara,Sumatera Barat,Indonesia', '25138', 'B', '(0751) 40020', 'u_tamsis@yahoo.co.id', 'unitas-pdg.ac.id', '0552O1989', '1989-05-09', '1987-09-03', 1, '-0.929623', '100.365582', 'tamsis.jpg'),
('10105', 'Universitas Baiturrahmah', 'Jalan Raya By Pass KM. 15 air pacah Sumatera Barat,Indonesia', '25172', 'B', '0751-463069', 'admin@unbrah.ac.id', 'www.unbrah.ac.id', 'NO. 070DO1994', '1994-07-16', '1994-07-16', 1, '-0.870567', '100.383728', 'baiturahmah.jpg'),
('10106', 'Universitas Dharma Andalas', 'Jalan Sawahan No. 103 A, Simpang Haru', '25127', 'B', '0751-37-135', 'dharma_andalas@yahoo.co.id', 'dharma-andalas.ac.id', '254/E/O/2014', '2014-08-18', '2014-08-27', 1, '-0.943472', '100.375181', 'unidha.jpg'),
('10201', 'Institut Teknologi Padang', 'Jl. Gajah Mada Kandis Nanggalo,Kp. Olo,Nanggalo,Kota Padang, Sumatera Barat, Indonesia', '25143', 'B', '0751-705-5202', 'info@itp.ac.id', ' www.itp.ac.id', '-0.899383', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'itp.jpg'),
('10202', 'Akademi Pariwisata Bunda Padang', 'Jl. Arif Rahman Hakim No.57,Ranah Parak Rumbio,Padang Sel.,Kota Padang, Sumatera Barat, Indonesia', '25212', 'B', '0751-34212', 'akparbunda@yahoo.com', 'www.akparbunda.com', '-0.957064', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
('10301', 'STKIP PGRI Sumatera Barat', 'Jalan Gunung Pangilun, Padang Utara,Gn. Pangilun,Padang,Kota PadangPadang Utara, Sumatera Barat, Ind', '25111', 'B', '(0751) 7053731', 'admin@stkip-pgri-sumbar.ac.id', 'www.stkip-pgri-sumbar.ac.id', '115SKKOPI1984', '1984-05-22', '1984-05-22', 3, '-0.909659', '100.367703', 'gambarstkippgri.png'),
('10302', 'Sekolah Tinggi Ilmu Ekonomi KBP', 'Jalan Khatib Sulaiman No 61 , Lolong Belanti, Padang Utara,Padang,Sumatera Barat,Indonesia', '25136', 'B', '0751-51398', 'stiekbp@hotmail.com', 'www.akbpstie.ac.id', '-0.915461', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'stie kbp.jpg'),
('10304', 'Sekolah Tinggi Bahasa Asing Prayoga', 'Jl. Chairil Anwar No.10,Belakang Tangsi,Padang Bar.,Kota Padang, Sumatera Barat, Indonesia', '25115', 'B', '81275730317', 'info@stba-prayoga.ac.id', 'www.stba-prayoga.ac.id', '-0.955036', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'stba prayoga.jpg'),
('10305', 'Sekolah Tinggi Ilmu Administrasi Lppn', 'Jl. Seberang Padang Selatan I. No.15,Seberang Padang,Padang Sel.,Kota Padang, Sumatera Barat, Indone', '25214', 'B', '0751-25-052', 'stialppnpadang@rocketmail.com', 'stialppn.ac.id', '-0.956939', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
('10308', 'Sekolah Tinggi Teknologi Industri Padang', 'JL. Prof. DR. Hamka, No. 121, Parupuk Tabing, Koto Tangah, Kota Padang, Sumatera Barat', '25171', 'B', '0751-7054350', 'sttind_padang@yahoo.com', 'http://sttind.ac.id', '086O1988', '1988-02-15', '1982-03-11', 3, '-0.880484', '100.349381', 'stindd.jpg'),
('10309', 'Sekolah Tinggi Ilmu Ekonomi Perdagangan', 'No.252,Jl. Prof. Dr. Hamka,Parupuk Tabing,Koto Tangah, Padang City, West Sumatra, Indonesia', '25171', 'B', '75155935', 'stiep_padang@yahoo.co.id', 'www.stie-perdagangan.org', '081601989', '1989-12-16', '1989-12-16', 3, '-0.879293', '100.348689', 'stie perdagangan.jpg'),
('10310', 'Sekolah Tinggi Ilmu Ekonomi Perbankan Indonesia', 'JL. By Pass, Pegambiran, Komplek Pusdiklat Bank Nagari,Jl. Raden Saleh No. 23 Ps. Ambacang,Kuranji,K', '25000', 'B', '0751-7053735', 'stiepi_padang@yahoo.com', 'www.stie-pi.ac.id', '-0.925558', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
('10311', 'STMIK Indonesia Padang', 'Jl. Khatib Sulaiman Dalam No.1,Lolong Belanti,Padang Utara,Kota Padang, Sumatera Barat, Indonesia', '25136', 'B', '0751-7056199', 'sekretariat@stmikindonesia.ac.id', 'www.stmikindonesia.ac.id', '4DO2002', '1995-03-15', '1986-01-01', 3, '-0.922608', '100.359932', 'stmik indonesia.jpg'),
('10312', 'STMIK Jaya Nusa', 'Jalan Damar, Olo, Padang Barat,Padang,Sumatera Barat,Indonesia', '25116', 'B', '0751-28984', 'jayanusa@jayanusa.ac.id', 'www.jayanusa.ac.id', '153DO2002', '2002-08-02', '2002-08-02', 3, '-0.943270', '100.354389', 'amik jaya nusa.jpg'),
('10313', 'Sekolah Tinggi Ilmu Kesehatan Alifah Padang', 'Jl. Khatib Sulaiman No. 52 Kelurahan Belanti Padang indonesia', '25137', 'B', '0751-7874512/70', 'stikes_alifah@yahoo.com', 'www.stikesalifah.ac.id', '342/E/O/2014', '2014-08-13', '2004-08-30', 3, '-0.915549', '100.359516', 'stikes alifah.jpg'),
('10314', 'Sekolah Tinggi Ilmu Farmasi Padang', 'Jl. Ciliman,Alai Parak Kopi,Padang Utara,Kota Padang, Sumatera Barat, Indonesia', '25138', 'B', '0751-443398/786', 'stifarm.padang@yahoo.co.id', 'www.stifarm-padang.ac.id', '102DO2005', '2005-07-26', '2005-07-26', 3, '-0.892885', '100.367244', NULL),
('10315', 'STIKES Perintis Padang', 'Jalan Adi Negoro Km 17 Simpang Kalumpang Lubuk Buaya ', '22222', 'B', '751481992', 'stikes.perintis@yahoo.com', 'www.stikesperintis.ac.id', '48', '1988-07-21', '1988-10-25', 3, '-0.838282', '100.331780', 'stikes perintis.jpg'),
('10316', 'Sekolah Tinggi Ilmu Kesehatan Indonesia Padang', 'Jalan Khatib Sulaiman No 17 Lolong Belanti,Padang Utara,Kota Padang, Sumatera Barat,Indonesia', '25137', 'B', '0751 7056138', 'stiikesi@yahoo.ac.id', 'www.stikesindonesia.com', '260DO2006', '2006-12-08', '2006-11-13', 3, '-0.922288', '100.361047', 'stikes indonesia.jpg'),
('10318', 'Sekolah Tinggi Ilmu Kesehatan Syedza Saintika', 'Jl. Prof. DR. Hamka No. 228,Air Tawar,Kota Padang, Sumatera Barat,Indonesia', '25132', 'B', '0751-442699', 'syedza_saintika@yahoo.co.id', 'www.syedzasaintika.ac.id', '173D02008', '0008-09-05', '2008-09-05', 3, '-0.894523', '100.352898', 'stkes syedza.jpg'),
('10319', 'STIKES Ranah Minang', 'Jl. Parak Gadang no - 35 B,Simpang Haru,Padang Tim.,Kota Padang, Sumatera Barat, Indonesia', '25123', 'B', '0751-33341', 'admin@stikes-ranahminang.ac.id', 'www.stikes-ranahminang.ac.id', '245DO2008', '2008-12-22', '2008-12-22', 3, '-0.947193', '100.377507', 'stikes ranah minang.jpg'),
('10320', 'STIKES Dharma Landbouw', 'Jl. Jhoni Anwar No.29,Ulak Karang Utara,Padang Utara,Kota Padang, Sumatera Barat, Indonesia', '25135', 'B', '7517055462', 'info@stikeslandbouw.ac.id', 'www.stikeslandbouw.ac.id', '75DO2009', '2009-06-17', '2009-06-17', 3, '-0.909488', '100.351694', 'stikes darma landbow.jpg'),
('10321', 'STKIP Adzkia', 'Jl. Taratak Paneh No. 7, Korong Gadang, Kuranji,Kalumbuk,Padang,Kota PadangKuranji, Sumatera Barat, ', '25153', 'B', '751497107', 'stkip.adzkia@yahoo.co.id', 'www.stkipadzkia.ac.id', '111DO2009', '2009-08-03', '2009-08-03', 3, '-0.919251', '100.394499', 'stkip azkia.jpg'),
('10323', 'Sekolah Tinggi Ilmu Kesehatan YPAK Padang', 'Jl. S. Parman No.1No.120 Lolong ,Ulak Karang Utara,Padang Utara,Kota Padang, Sumatera Barat, Indones', '21111', 'B', '0751-447427', 'ypak@stikesamanahpadang.ac.id', 'http://stikesamanahpadang.ac.id', '247DO2006', '2006-10-19', '2006-12-12', 3, '-0.1111', '100.111', NULL),
('10324', 'STIKES Mercubaktijaya Padang', 'Jalan Jamal Jamil Pondok Kopi Siteba padang indonesia', '25146', 'B', '0751442295', 'stikesmercubaktijaya@yahoo.co.id', 'www.mercubaktijaya.ac.id', '-0.783835', '2005-12-29', '2005-12-29', 3, '-0.899583', '100.374322', 'stikes mercue.jpg'),
('10325', 'Sekolah Tinggi Farmasi Indonesia Perintis Padang', 'JL. Adinegoro, Km. 17, Simpang Palumpang, Lubuk Buaya,Indonesia', '25173', 'B', '(0751)482171', 'stifipadang@gmail.com', 'stifi-padang.ac.id', '-0.838277', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'stifi padang.jpg'),
('10403', 'Akademi Akuntansi Indonesia Padang', 'Jalan Veteran Dalam No 26 B padang indonesia', '25113', 'B', '0751-28859', 'puskom@univ-ekasakti-pdg.ac.id', 'www.univ-ekasakti-pdg.ac.id', '-0.939826', '0000-00-00', '2016-07-13', 4, '88789', '897', NULL),
('10405', 'Akademi Maritim Sapta Samudra', 'JL. Gaduang By Pass, KM. 18 No. 17,  Simpang Lubuk Minturun - Kec. Koto Tangah  Padang,Indonesia', '25175', 'B', '0751-497855-497', 'Info@amsspadang.ac.id', 'amsspadang.ac.id', '-0.845863', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'akademi sapta samudra.jpg'),
('10406', 'Akademi Manajemen Informatika & Komputer Jaya Nusa', 'JL Damar, No. 69E,Indonesia', '25116', 'B', '0751-28984', 'jayanusa@jayanusa.ac.id', 'www.jayanusa.ac.id', '-0.944664', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
('10407', 'Apikes Iris', 'Jl. Gajah Mada No.23,Gn. Pangilun,Padang Utara,Kota Padang, Sumatera Barat, Indonesia', '25143', 'B', '0751-444726/444', 'iris@apikes.com', 'www.apikes.com', '-0.909841', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'apikes iris.jpg'),
('10412', 'Akademi Kebidanan Puteri Andalas', 'Jalan Andalas Baru No.7 Simpang Haru ', '25123', 'B', '85100882882', 'puteri.andalas@rocketmail.com', 'akbidputeriandalas.ac.id', '-0.944620', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'akbid kebidanan andalas.jpg'),
('10414', 'Akademi Kebidanan Imam Bonjol', 'Jl.Syekh.M.Jamil Jaho No.133.kel Koto Katiak', '12345', 'B', '075283165/82435', 'akbid.ib_padangpanjang@yahoo.com', 'http://akbidimambonjol-ppj.ac.id/', '-0.474853', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'akademi imambonjol padang.jpg'),
('10417', 'Akademi Refraksi Optisi YLPTK', 'Jl. Berok Raya No.29,Kurao Pagang,Nanggalo,Kota Padang, Sumatera Barat, Indonesia', '25147', 'B', '0751-7054695', 'aro.padang@yahoo.co.id', 'http://aroylptk.blogspot.com', '-0.892024', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL),
('10501', 'Politeknik Kesehatan Siteba', 'Jl. Jhoni Anwar No.17,Kp. Lapai Baru,Nanggalo,Kota Padang, Sumatera Barat, Indonesia', '25147', 'B', '0751-445-880', 'poltekessiteba@yahoo.ac.id', 'www.poltekes-siteba.ac.id', '-0,904901', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'politeknik.jpg'),
('kode', 'Universitas Putra Indonesia ', 'Jl Raya Lubuk Begalung', '25221', 'B', '(0751) 776666', 'admin@yptk.ac.id', 'www.yptk.ac.id, sisfo.upiyptk.ac.id', '29DO2001', '2001-03-30', '2001-03-20', 1, '-0.958377', '100.396324', 'Upi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_pt` (`id_pt`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD KEY `id_pt` (`id_pt`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_pt` (`id_pt`);

--
-- Indexes for table `jalur`
--
ALTER TABLE `jalur`
  ADD PRIMARY KEY (`id_jalur`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_jenjang` (`id_jenjang`,`id_pt`),
  ADD KEY `id_fakultas` (`id_pt`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` mediumint(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `jalur`
--
ALTER TABLE `jalur`
  MODIFY `id_jalur` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`);

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fakultas_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`);

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`),
  ADD CONSTRAINT `prodi_ibfk_3` FOREIGN KEY (`id_pt`) REFERENCES `pt` (`id_pt`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
