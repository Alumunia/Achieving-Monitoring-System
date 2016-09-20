-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mei 2015 pada 15.22
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ams12`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(90) NOT NULL,
  `akses` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`, `level`, `akses`) VALUES
('admin', 'Rizki', 'admin', 'admin', 'admin'),
('dimas123', 'dimas agung', '4545', 'dosen', NULL),
('fahri', 'Fahri', 'fahri', 'dosen', NULL),
('hujan12', 'juuhan', 'password12', 'dosen', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images_tbl`
--

CREATE TABLE IF NOT EXISTS `images_tbl` (
`images_id` int(11) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `submission_date` date DEFAULT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `images_tbl`
--

INSERT INTO `images_tbl` (`images_id`, `images_path`, `submission_date`, `username`) VALUES
(14, 'images/16-05-2015-1431794199.jpg', '2015-05-16', 'rizki_12'),
(15, 'images/16-05-2015-1431794475.jpg', '2015-05-16', 'rizki_12'),
(16, 'images/16-05-2015-1431794739.jpg', '2015-05-16', 'rizki_12'),
(17, 'images/16-05-2015-1431795261.png', '2015-05-16', 'rizki_12'),
(18, 'images/16-05-2015-1431795376.jpg', '2015-05-16', 'rizki_12'),
(19, 'images/16-05-2015-1431795444.png', '2015-05-16', 'rizki_12'),
(20, 'images/16-05-2015-1431795461.png', '2015-05-16', 'rizki_12'),
(21, 'images/16-05-2015-1431795475.jpg', '2015-05-16', 'rizki_12'),
(22, 'images/16-05-2015-1431796798.png', '2015-05-16', 'rizki_12'),
(23, 'images/16-05-2015-1431797344.jpg', '2015-05-16', 'rizki_12'),
(24, 'images/16-05-2015-1431797534.png', '2015-05-16', 'rizki_12'),
(25, 'images/16-05-2015-1431798331.jpg', '2015-05-16', 'Rizki'),
(26, 'images/16-05-2015-1431798540.jpg', '2015-05-16', 'rizki_12'),
(27, 'images/17-05-2015-1431842866.jpg', '2015-05-17', 'rizki_12'),
(28, 'images/17-05-2015-1431843914.png', '2015-05-17', 'rizki_12'),
(29, 'images/17-05-2015-1431843928.jpg', '2015-05-17', 'rizki_12'),
(30, 'images/17-05-2015-1431844024.png', '2015-05-17', 'rizki_12'),
(31, 'images/17-05-2015-1431844045.png', '2015-05-17', 'rizki_12'),
(32, 'images/17-05-2015-1431876193.png', '2015-05-17', 'febri'),
(33, 'images/19-05-2015-1432049230.jpg', '2015-05-19', 'rizki_12'),
(34, 'images/19-05-2015-1432049391.jpg', '2015-05-19', 'rizki_12'),
(35, 'images/19-05-2015-1432049529.jpg', '2015-05-19', 'rizki_12'),
(36, 'images/19-05-2015-1432049914.jpg', '2015-05-19', 'rizki_12'),
(37, 'images/19-05-2015-1432058065.jpg', '2015-05-19', 'rizki_12'),
(38, 'images/19-05-2015-1432063135.jpg', '2015-05-19', 'rizki_12'),
(39, 'images/20-05-2015-1432088493.jpg', '2015-05-20', 'febri'),
(41, 'images/20-05-2015-1432091680.jpg', '2015-05-20', 'rendy_12t'),
(42, 'images/20-05-2015-1432095401.jpg', '2015-05-20', 'lani_12'),
(43, 'images/20-05-2015-1432099314.png', '2015-05-20', 'rizki_12'),
(44, 'images/20-05-2015-1432099324.jpg', '2015-05-20', 'rizki_12'),
(45, 'images/20-05-2015-1432100143.jpg', '2015-05-20', 'lintang_12'),
(46, 'images/20-05-2015-1432100338.jpg', '2015-05-20', 'rifky_12'),
(47, 'images/20-05-2015-1432100374.jpg', '2015-05-20', 'rizka_12'),
(48, 'images/20-05-2015-1432100407.jpg', '2015-05-20', 'rudi_12'),
(49, 'images/20-05-2015-1432100491.jpg', '2015-05-20', 'salsabila_12'),
(50, 'images/20-05-2015-1432100524.jpg', '2015-05-20', 'sri_12'),
(51, 'images/20-05-2015-1432100737.jpg', '2015-05-20', 'lilis_12'),
(52, 'images/20-05-2015-1432103151.png', '2015-05-20', 'rizki_12'),
(53, 'images/20-05-2015-1432105194.jpg', '2015-05-20', 'rizki_12'),
(54, 'images/24-05-2015-1432482040.jpg', '2015-05-24', 'akim_12'),
(55, 'images/25-05-2015-1432559698.jpg', '2015-05-25', 'akim_12'),
(56, 'images/25-05-2015-1432559698.jpg', '2015-05-19', 'fahri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
`idMapel` int(11) NOT NULL,
  `namaPelajaran` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`idMapel`, `namaPelajaran`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Fisika'),
(4, 'Bahasa Inggris'),
(5, 'Kimia'),
(6, 'biologi'),
(7, 'fisika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Nilai` double NOT NULL,
  `siswa_username` varchar(40) NOT NULL,
  `Mapel_idMapel` int(11) NOT NULL,
  `kelas` int(3) NOT NULL,
  `jurusan` varchar(21) NOT NULL,
  `namaSiswa` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=458 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `Semester`, `Nilai`, `siswa_username`, `Mapel_idMapel`, `kelas`, `jurusan`, `namaSiswa`) VALUES
(1, 1, 90, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(2, 1, 99, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(3, 1, 80, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(4, 1, 98, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(5, 1, 30, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(6, 2, 70, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(7, 2, 70, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(8, 2, 80, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(9, 2, 95, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(10, 2, 90, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(11, 3, 76, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(12, 3, 79, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(13, 3, 80, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(14, 3, 98, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(15, 3, 30, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(16, 1, 44, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(17, 1, 25, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(18, 2, 27, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(19, 3, 89, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(20, 2, 95, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(22, 3, 25, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(23, 4, 23, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(24, 4, 23, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(25, 4, 43, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(26, 4, 83, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(27, 4, 56, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(28, 5, 78, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(29, 5, 90, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(30, 5, 89, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(31, 5, 54, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(32, 5, 76, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(33, 5, 76, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(34, 5, 37, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(35, 4, 23, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(36, 4, 23, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(37, 6, 76, 'rizki_12', 1, 3, 'IPA3', 'Rizki Adi Utomo'),
(38, 6, 70, 'rizki_12', 2, 3, 'IPA3', 'Rizki Adi Utomo'),
(39, 6, 90, 'rizki_12', 3, 3, 'IPA3', 'Rizki Adi Utomo'),
(40, 6, 10, 'rizki_12', 4, 3, 'IPA3', 'Rizki Adi Utomo'),
(41, 6, 40, 'rizki_12', 5, 3, 'IPA3', 'Rizki Adi Utomo'),
(42, 6, 70, 'rizki_12', 6, 3, 'IPA3', 'Rizki Adi Utomo'),
(43, 6, 10, 'rizki_12', 7, 3, 'IPA3', 'Rizki Adi Utomo'),
(45, 1, 98, 'rendy_12t', 1, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(46, 1, 70, 'rendy_12t', 2, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(47, 1, 90, 'rendy_12t', 3, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(48, 1, 40, 'rendy_12t', 4, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(49, 1, 40, 'rendy_12t', 5, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(50, 1, 70, 'rendy_12t', 6, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(51, 1, 70, 'rendy_12t', 7, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(52, 1, 98, 'rendy_12t', 1, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(53, 1, 70, 'rendy_12t', 2, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(54, 1, 90, 'rendy_12t', 3, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(55, 1, 40, 'rendy_12t', 4, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(56, 1, 40, 'rendy_12t', 5, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(57, 1, 70, 'rendy_12t', 6, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(58, 1, 70, 'rendy_12t', 7, 3, 'IPA3', 'Rendhy Adhi Pratama'),
(59, 1, 90, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(60, 1, 80, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(61, 1, 80, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(62, 1, 79, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(63, 1, 98, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(64, 1, 87, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(65, 1, 66, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(66, 2, 89, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(67, 2, 78, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(68, 2, 80, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(69, 2, 79, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(70, 2, 80, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(71, 2, 87, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(72, 2, 81, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(73, 3, 77, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(74, 3, 80, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(75, 3, 76, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(76, 3, 79, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(77, 3, 78, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(78, 3, 67, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(79, 3, 66, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(80, 4, 76, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(81, 4, 75, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(82, 4, 98, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(83, 4, 79, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(84, 4, 69, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(85, 4, 96, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(86, 4, 87, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(87, 5, 54, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(88, 5, 98, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(89, 5, 78, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(90, 5, 89, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(91, 5, 98, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(92, 5, 87, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(93, 5, 88, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(94, 6, 80, 'weni_12', 1, 3, 'IPA2', 'Weni Handayani'),
(95, 6, 70, 'weni_12', 2, 3, 'IPA2', 'Weni Handayani'),
(96, 6, 70, 'weni_12', 3, 3, 'IPA2', 'Weni Handayani'),
(97, 6, 89, 'weni_12', 4, 3, 'IPA2', 'Weni Handayani'),
(98, 6, 98, 'weni_12', 5, 3, 'IPA2', 'Weni Handayani'),
(99, 6, 87, 'weni_12', 6, 3, 'IPA2', 'Weni Handayani'),
(100, 6, 86, 'weni_12', 7, 3, 'IPA2', 'Weni Handayani'),
(101, 1, 97, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(102, 1, 80, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(103, 1, 80, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(104, 1, 79, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(105, 1, 78, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(106, 1, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(107, 1, 76, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(108, 2, 60, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(109, 2, 60, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(110, 2, 70, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(111, 2, 89, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(112, 2, 58, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(113, 2, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(114, 2, 86, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(115, 3, 90, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(116, 3, 60, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(117, 3, 70, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(118, 3, 79, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(119, 3, 98, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(120, 3, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(121, 3, 66, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(122, 4, 90, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(123, 4, 90, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(124, 4, 80, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(125, 4, 79, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(126, 4, 78, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(127, 4, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(128, 4, 86, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(129, 5, 90, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(130, 5, 80, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(131, 5, 80, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(132, 5, 79, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(133, 5, 98, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(134, 5, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(135, 5, 66, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(136, 6, 78, 'tiara_12', 1, 3, 'IPA1', 'Tiara Fariz'),
(137, 6, 78, 'tiara_12', 2, 3, 'IPA1', 'Tiara Fariz'),
(138, 6, 80, 'tiara_12', 3, 3, 'IPA1', 'Tiara Fariz'),
(139, 6, 79, 'tiara_12', 4, 3, 'IPA1', 'Tiara Fariz'),
(140, 6, 78, 'tiara_12', 5, 3, 'IPA1', 'Tiara Fariz'),
(141, 6, 87, 'tiara_12', 6, 3, 'IPA1', 'Tiara Fariz'),
(142, 6, 86, 'tiara_12', 7, 3, 'IPA1', 'Tiara Fariz'),
(143, 1, 76, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(144, 1, 77, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(145, 1, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(146, 1, 68, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(147, 1, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(148, 1, 90, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(149, 1, 80, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(150, 2, 76, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(151, 2, 75, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(152, 2, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(153, 2, 68, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(154, 2, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(155, 2, 85, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(156, 2, 90, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(157, 3, 86, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(158, 3, 73, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(159, 3, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(160, 3, 68, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(161, 3, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(162, 3, 93, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(163, 3, 70, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(164, 4, 76, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(165, 4, 77, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(166, 4, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(167, 4, 68, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(168, 4, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(169, 4, 90, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(170, 4, 80, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(171, 5, 96, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(172, 5, 71, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(173, 5, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(174, 5, 68, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(175, 5, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(176, 5, 80, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(177, 5, 70, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(178, 6, 86, 'rizka_12', 1, 3, 'IPA1', 'Rizka Hasanti'),
(179, 6, 72, 'rizka_12', 2, 3, 'IPA1', 'Rizka Hasanti'),
(180, 6, 87, 'rizka_12', 3, 3, 'IPA1', 'Rizka Hasanti'),
(181, 6, 70, 'rizka_12', 4, 3, 'IPA1', 'Rizka Hasanti'),
(182, 6, 79, 'rizka_12', 5, 3, 'IPA1', 'Rizka Hasanti'),
(183, 6, 75, 'rizka_12', 6, 3, 'IPA1', 'Rizka Hasanti'),
(184, 6, 84, 'rizka_12', 7, 3, 'IPA1', 'Rizka Hasanti'),
(185, 1, 60, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(186, 1, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(187, 1, 56, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(188, 1, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(189, 1, 76, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(190, 1, 76, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(191, 1, 86, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(192, 1, 60, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(193, 1, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(194, 1, 56, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(195, 1, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(196, 1, 76, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(197, 1, 76, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(198, 1, 86, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(199, 2, 70, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(200, 2, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(201, 2, 66, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(202, 2, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(203, 2, 66, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(204, 2, 76, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(205, 2, 96, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(206, 3, 60, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(207, 3, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(208, 3, 56, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(209, 3, 96, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(210, 3, 86, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(211, 3, 76, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(212, 3, 86, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(213, 4, 60, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(214, 4, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(215, 4, 56, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(216, 4, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(217, 4, 76, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(218, 4, 56, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(219, 4, 86, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(220, 5, 60, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(221, 5, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(222, 5, 56, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(223, 5, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(224, 5, 76, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(225, 5, 76, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(226, 5, 86, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(227, 6, 80, 'sri_12', 1, 3, 'IPA3', 'Sri Wulansari'),
(228, 6, 65, 'sri_12', 2, 3, 'IPA3', 'Sri Wulansari'),
(229, 6, 86, 'sri_12', 3, 3, 'IPA3', 'Sri Wulansari'),
(230, 6, 76, 'sri_12', 4, 3, 'IPA3', 'Sri Wulansari'),
(231, 6, 76, 'sri_12', 5, 3, 'IPA3', 'Sri Wulansari'),
(232, 6, 66, 'sri_12', 6, 3, 'IPA3', 'Sri Wulansari'),
(233, 6, 66, 'sri_12', 7, 3, 'IPA3', 'Sri Wulansari'),
(234, 1, 70, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(235, 1, 70, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(236, 1, 87, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(237, 1, 78, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(238, 1, 90, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(239, 1, 60, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(240, 1, 80, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(241, 2, 75, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(242, 2, 75, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(243, 2, 87, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(244, 2, 78, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(245, 2, 95, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(246, 2, 70, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(247, 2, 80, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(248, 3, 89, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(249, 3, 75, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(250, 3, 87, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(251, 3, 98, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(252, 3, 95, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(253, 3, 80, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(254, 3, 66, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(255, 4, 75, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(256, 4, 75, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(257, 4, 87, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(258, 4, 78, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(259, 4, 95, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(260, 4, 70, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(261, 4, 80, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(262, 5, 75, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(263, 5, 75, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(264, 5, 67, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(265, 5, 78, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(266, 5, 87, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(267, 5, 70, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(268, 5, 60, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(269, 6, 75, 'rudi_12', 1, 3, 'IPA2', 'Rudi Prasetyo'),
(270, 6, 85, 'rudi_12', 2, 3, 'IPA2', 'Rudi Prasetyo'),
(271, 6, 87, 'rudi_12', 3, 3, 'IPA2', 'Rudi Prasetyo'),
(272, 6, 89, 'rudi_12', 4, 3, 'IPA2', 'Rudi Prasetyo'),
(273, 6, 95, 'rudi_12', 5, 3, 'IPA2', 'Rudi Prasetyo'),
(274, 6, 70, 'rudi_12', 6, 3, 'IPA2', 'Rudi Prasetyo'),
(275, 6, 75, 'rudi_12', 7, 3, 'IPA2', 'Rudi Prasetyo'),
(276, 1, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(277, 1, 85, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(278, 1, 70, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(279, 1, 87, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(280, 1, 75, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(281, 1, 95, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(282, 1, 80, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(283, 1, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(284, 2, 85, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(285, 2, 70, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(286, 2, 87, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(287, 2, 75, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(288, 2, 95, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(289, 3, 70, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(290, 3, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(291, 3, 85, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(292, 3, 80, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(293, 3, 87, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(294, 3, 75, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(295, 3, 65, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(296, 3, 80, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(297, 4, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(298, 4, 85, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(299, 4, 80, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(300, 4, 87, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(301, 4, 85, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(302, 4, 91, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(303, 4, 70, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(304, 5, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(305, 5, 85, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(306, 5, 90, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(307, 5, 87, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(308, 5, 75, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(309, 5, 65, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(310, 5, 70, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(311, 6, 95, 'lilis_12', 1, 3, 'IPA1', 'Lilis sulistiya'),
(312, 6, 75, 'lilis_12', 2, 3, 'IPA1', 'Lilis sulistiya'),
(313, 6, 70, 'lilis_12', 3, 3, 'IPA1', 'Lilis sulistiya'),
(314, 6, 77, 'lilis_12', 4, 3, 'IPA1', 'Lilis sulistiya'),
(315, 6, 95, 'lilis_12', 5, 3, 'IPA1', 'Lilis sulistiya'),
(316, 6, 95, 'lilis_12', 6, 3, 'IPA1', 'Lilis sulistiya'),
(317, 6, 80, 'lilis_12', 7, 3, 'IPA1', 'Lilis sulistiya'),
(318, 1, 75, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(319, 1, 78, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(320, 1, 95, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(321, 1, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(322, 1, 95, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(323, 1, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(324, 1, 87, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(325, 2, 75, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(326, 2, 98, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(327, 2, 75, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(328, 2, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(329, 2, 65, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(330, 2, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(331, 2, 97, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(332, 3, 75, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(333, 3, 78, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(334, 3, 65, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(335, 3, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(336, 3, 55, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(337, 3, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(338, 3, 87, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(339, 4, 85, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(340, 4, 78, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(341, 4, 95, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(342, 4, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(343, 4, 65, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(344, 4, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(345, 4, 87, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(346, 5, 95, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(347, 5, 78, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(348, 5, 65, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(349, 5, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(350, 5, 85, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(351, 5, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(352, 5, 77, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(353, 6, 75, 'rifky_12', 1, 3, 'IPA2', 'Rifky Eko'),
(354, 6, 78, 'rifky_12', 2, 3, 'IPA2', 'Rifky Eko'),
(355, 6, 75, 'rifky_12', 3, 3, 'IPA2', 'Rifky Eko'),
(356, 6, 95, 'rifky_12', 4, 3, 'IPA2', 'Rifky Eko'),
(357, 6, 85, 'rifky_12', 5, 3, 'IPA2', 'Rifky Eko'),
(358, 6, 65, 'rifky_12', 6, 3, 'IPA2', 'Rifky Eko'),
(359, 6, 67, 'rifky_12', 7, 3, 'IPA2', 'Rifky Eko'),
(402, 1, 74, 'lintang_12', 1, 3, 'IPA2', 'Lintang Utomo'),
(403, 1, 75, 'lintang_12', 2, 3, 'IPA2', 'Lintang Utomo'),
(404, 1, 86, 'lintang_12', 3, 3, 'IPA2', 'Lintang Utomo'),
(405, 1, 75, 'lintang_12', 4, 3, 'IPA2', 'Lintang Utomo'),
(406, 1, 95, 'lintang_12', 5, 3, 'IPA2', 'Lintang Utomo'),
(407, 1, 96, 'lintang_12', 6, 3, 'IPA2', 'Lintang Utomo'),
(408, 1, 75, 'lintang_12', 7, 3, 'IPA2', 'Lintang Utomo'),
(409, 2, 94, 'lintang_12', 1, 3, 'IPA2', 'Lintang Utomo'),
(410, 2, 75, 'lintang_12', 2, 3, 'IPA2', 'Lintang Utomo'),
(411, 2, 86, 'lintang_12', 3, 3, 'IPA2', 'Lintang Utomo'),
(412, 2, 95, 'lintang_12', 4, 3, 'IPA2', 'Lintang Utomo'),
(413, 2, 75, 'lintang_12', 5, 3, 'IPA2', 'Lintang Utomo'),
(414, 2, 96, 'lintang_12', 6, 3, 'IPA2', 'Lintang Utomo'),
(415, 2, 75, 'lintang_12', 7, 3, 'IPA2', 'Lintang Utomo'),
(416, 3, 94, 'lintang_12', 1, 3, 'IPA2', 'Lintang Utomo'),
(417, 3, 75, 'lintang_12', 2, 3, 'IPA2', 'Lintang Utomo'),
(418, 3, 86, 'lintang_12', 3, 3, 'IPA2', 'Lintang Utomo'),
(419, 3, 75, 'lintang_12', 4, 3, 'IPA2', 'Lintang Utomo'),
(420, 3, 75, 'lintang_12', 5, 3, 'IPA2', 'Lintang Utomo'),
(421, 3, 96, 'lintang_12', 6, 3, 'IPA2', 'Lintang Utomo'),
(422, 3, 75, 'lintang_12', 7, 3, 'IPA2', 'Lintang Utomo'),
(423, 4, 74, 'lintang_12', 1, 3, 'IPA2', 'Lintang Utomo'),
(424, 4, 75, 'lintang_12', 2, 3, 'IPA2', 'Lintang Utomo'),
(425, 4, 86, 'lintang_12', 3, 3, 'IPA2', 'Lintang Utomo'),
(426, 4, 85, 'lintang_12', 4, 3, 'IPA2', 'Lintang Utomo'),
(427, 4, 74, 'lintang_12', 5, 3, 'IPA2', 'Lintang Utomo'),
(428, 4, 96, 'lintang_12', 6, 3, 'IPA2', 'Lintang Utomo'),
(429, 4, 85, 'lintang_12', 7, 3, 'IPA2', 'Lintang Utomo'),
(430, 1, 74, 'salsabila_12', 1, 3, 'IPA2', 'Salsabila Ayu'),
(431, 1, 84, 'salsabila_12', 2, 3, 'IPA2', 'Salsabila Ayu'),
(432, 1, 64, 'salsabila_12', 3, 3, 'IPA2', 'Salsabila Ayu'),
(433, 1, 75, 'salsabila_12', 4, 3, 'IPA2', 'Salsabila Ayu'),
(434, 1, 74, 'salsabila_12', 5, 3, 'IPA2', 'Salsabila Ayu'),
(435, 1, 94, 'salsabila_12', 6, 3, 'IPA2', 'Salsabila Ayu'),
(436, 1, 73, 'salsabila_12', 7, 3, 'IPA2', 'Salsabila Ayu'),
(437, 2, 64, 'salsabila_12', 1, 3, 'IPA2', 'Salsabila Ayu'),
(438, 2, 74, 'salsabila_12', 2, 3, 'IPA2', 'Salsabila Ayu'),
(439, 2, 94, 'salsabila_12', 3, 3, 'IPA2', 'Salsabila Ayu'),
(440, 2, 74, 'salsabila_12', 4, 3, 'IPA2', 'Salsabila Ayu'),
(441, 2, 84, 'salsabila_12', 5, 3, 'IPA2', 'Salsabila Ayu'),
(442, 2, 94, 'salsabila_12', 6, 3, 'IPA2', 'Salsabila Ayu'),
(443, 2, 71, 'salsabila_12', 7, 3, 'IPA2', 'Salsabila Ayu'),
(444, 1, 90, 'akim_12', 1, 1, 'IPA1', 'akim'),
(445, 1, 78, 'akim_12', 2, 1, 'IPA1', 'akim'),
(446, 1, 34, 'akim_12', 3, 1, 'IPA1', 'akim'),
(447, 1, 78, 'akim_12', 4, 1, 'IPA1', 'akim'),
(448, 1, 50, 'akim_12', 5, 1, 'IPA1', 'akim'),
(449, 1, 59, 'akim_12', 6, 1, 'IPA1', 'akim'),
(450, 1, 90, 'akim_12', 7, 1, 'IPA1', 'akim'),
(451, 2, 90, 'akim_12', 1, 1, 'IPA1', 'akim'),
(452, 2, 65, 'akim_12', 2, 1, 'IPA1', 'akim'),
(453, 2, 90, 'akim_12', 3, 1, 'IPA1', 'akim'),
(454, 2, 89, 'akim_12', 4, 1, 'IPA1', 'akim'),
(455, 2, 54, 'akim_12', 5, 1, 'IPA1', 'akim'),
(456, 2, 13, 'akim_12', 6, 1, 'IPA1', 'akim'),
(457, 2, 20, 'akim_12', 7, 1, 'IPA1', 'akim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `username` varchar(40) NOT NULL,
  `namaSiswa` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `level` varchar(90) NOT NULL,
  `akses` varchar(20) DEFAULT NULL,
  `kelas` int(3) NOT NULL,
  `jurusan` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`username`, `namaSiswa`, `password`, `level`, `akses`, `kelas`, `jurusan`) VALUES
('akim_12', 'akim', 'akim', 'siswa', '', 1, 'IPA1'),
('faris_12', 'faris', 'faris', 'siswa', '', 1, 'IPA1'),
('lilis_12', 'Lilis sulistiya', 'lilis', 'siswa', NULL, 3, 'IPA1'),
('lintang_12', 'Lintang Utomo', 'lintang', 'siswa', NULL, 3, 'IPA2'),
('rendy_12t', 'Rendhy Adhi Pratama', 'rendy', 'siswa', NULL, 3, 'IPA3'),
('rifky_12', 'Rifky Eko', 'rifky', 'siswa', NULL, 3, 'IPA2'),
('rizka_12', 'Rizka Hasanti', 'rizka', 'siswa', NULL, 3, 'IPA1'),
('rizki_12', 'Rizki Adi Utomo', 'rizki', 'siswa', NULL, 3, 'IPA3'),
('rudi_12', 'Rudi Prasetyo', 'rudi', 'siswa', NULL, 3, 'IPA2'),
('salsabila_12', 'Salsabila Ayu', 'salsa', 'siswa', NULL, 3, 'IPA2'),
('sri_12', 'Sri Wulansari', 'sri', 'siswa', NULL, 3, 'IPA3'),
('tiara_12', 'Tiara Fariz', 'tiara', 'siswa', NULL, 3, 'IPA1'),
('weni_12', 'Weni Handayani', 'weni', 'siswa', NULL, 3, 'IPA2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `images_tbl`
--
ALTER TABLE `images_tbl`
 ADD PRIMARY KEY (`images_id`), ADD KEY `images_usernames` (`username`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`idMapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_Nilai_siswa_idx` (`siswa_username`), ADD KEY `fk_Nilai_Mapel1_idx` (`Mapel_idMapel`), ADD KEY `kelas` (`kelas`), ADD KEY `jurusan` (`jurusan`), ADD KEY `namaSiswa` (`namaSiswa`), ADD KEY `kelas_2` (`kelas`), ADD KEY `jurusan_2` (`jurusan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `setan` (`namaSiswa`(30)), ADD KEY `namaSiswa` (`namaSiswa`), ADD KEY `kelas` (`kelas`), ADD KEY `jurusan` (`jurusan`), ADD KEY `jurusan_2` (`jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images_tbl`
--
ALTER TABLE `images_tbl`
MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
MODIFY `idMapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=458;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
ADD CONSTRAINT `fk_Nilai_Mapel1` FOREIGN KEY (`Mapel_idMapel`) REFERENCES `mapel` (`idMapel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Nilai_siswa` FOREIGN KEY (`siswa_username`) REFERENCES `siswa` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_siswa_namaSiswa` FOREIGN KEY (`namaSiswa`) REFERENCES `siswa` (`namaSiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
