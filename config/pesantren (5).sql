-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 10:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `role`) VALUES
(12000650, 'anvalhafi', 'val', 'admin01', 'admin'),
(11, 'anval', 'anval', 'siswa', 'siswa'),
(11, 'hafit@smkwikrama.sch.id', 'hafitan', 'hafit11', 'siswa'),
(101, 'admin', 'ada', 'admin', 'admin'),
(56789, 'ahsan@smkwikrama.sch.id', 'ahsan', 'ahsan56789', 'siswa'),
(123, 'Nisa@smkwikrama.sch.id', 'Nisa', 'Nisa123', 'siswa'),
(7890, 'Kiki@smkwikrama.sch.id', 'Kiki', 'Kiki123', 'siswa'),
(12000999, 'arya@smkwikrama.sch.id', 'arya', 'arya123', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `bacaan_quran`
--

CREATE TABLE `bacaan_quran` (
  `id_surat` varchar(20) NOT NULL,
  `surat` varchar(20) NOT NULL,
  `jml_ayat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bacaan_quran`
--

INSERT INTO `bacaan_quran` (`id_surat`, `surat`, `jml_ayat`) VALUES
('QS-001', 'Al-fathihah', 7),
('QS-002', 'Al-Baqarah', 286),
('QS.03', 'Ali-Imran', 200);

-- --------------------------------------------------------

--
-- Table structure for table `pencatatan`
--

CREATE TABLE `pencatatan` (
  `id_pencatatan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `subuh` varchar(20) DEFAULT NULL,
  `dzuhur` varchar(20) DEFAULT NULL,
  `ashar` varchar(20) DEFAULT NULL,
  `magrib` varchar(20) DEFAULT NULL,
  `isya` varchar(20) DEFAULT NULL,
  `dhuha` varchar(20) DEFAULT NULL,
  `tahajud` varchar(20) DEFAULT NULL,
  `id_surat` varchar(20) DEFAULT NULL,
  `ayat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencatatan`
--

INSERT INTO `pencatatan` (`id_pencatatan`, `nama`, `jk`, `tanggal`, `subuh`, `dzuhur`, `ashar`, `magrib`, `isya`, `dhuha`, `tahajud`, `id_surat`, `ayat`) VALUES
(0, 'Kiki', 'Perempuan', '2013-01-22', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'QS-001', '7'),
(66, '', 'Laki-Laki', '2012-01-22', '', '', '', '', '', '', '', 'QS-002', '90'),
(68, '', 'Laki-Laki', '2012-01-22', '', '', '', '', '', '', '', 'QS-002', '-9'),
(69, '', 'Laki-Laki', '2012-01-22', '', '', '', '', '', '', '', 'QS-001', '7'),
(70, 'ahsan', 'Laki-Laki', '2013-01-22', 'tidak', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'QS-002', '90'),
(71, 'Nisa', 'Perempuan', '2013-01-22', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'QS-001', '7'),
(75, 'hafitan', 'Laki-laki', '2015-01-22', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'iya', 'QS-002', '180'),
(76, 'arya', 'Laki-laki', '2015-01-22', 'iya', 'iya', 'iya', 'iya', 'iya', 'tidak', 'iya', 'QS-002', '90');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` varchar(20) DEFAULT NULL,
  `rayon` varchar(20) DEFAULT NULL,
  `pembimbing` varchar(50) DEFAULT NULL,
  `no_hpembim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `rayon`, `pembimbing`, `no_hpembim`) VALUES
('AL-1', 'Al-Ikrom 1', 'Kunedi', '08767890'),
('AL-2', 'Al-Ikrom 2', 'Nurjalil', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` varchar(20) DEFAULT NULL,
  `rombel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `rombel`) VALUES
('XI-RPL', 'XI - RPL'),
('X-RPL', 'X - RPL'),
('XI-TKJ', 'XI - TKJ'),
('X-TKJ', 'X - TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `id_rayon` varchar(20) DEFAULT NULL,
  `id_rombel` varchar(20) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `id_rayon`, `id_rombel`, `no_hp`) VALUES
(12000650, 'anval', 'Laki-Laki', 'AL-1', 'XI-RPL', '8892323'),
(11, 'hafitan', 'Laki-Laki', 'AL-1', 'XI-RPL', '2342'),
(56789, 'ahsan', 'Laki-Laki', 'AL-2', 'XI-TKJ', '0808080'),
(123, 'Nisa', 'Perempuan', 'AL-1', 'XI-RPL', '789'),
(7890, 'Kiki', 'Perempuan', 'AL-1', 'XI-RPL', '34563'),
(12000999, 'arya', 'Laki-laki', 'AL-1', 'X-RPL', '084563456');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampilan`
-- (See below for the actual view)
--
CREATE TABLE `tampilan` (
`id_pencatatan` int(11)
,`nama` varchar(50)
,`jk` varchar(10)
,`tanggal` date
,`subuh` varchar(20)
,`dzuhur` varchar(20)
,`ashar` varchar(20)
,`magrib` varchar(20)
,`isya` varchar(20)
,`dhuha` varchar(20)
,`tahajud` varchar(20)
,`id_surat` varchar(20)
,`ayat` varchar(20)
,`nis` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `tampilan`
--
DROP TABLE IF EXISTS `tampilan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampilan`  AS  (select `pencatatan`.`id_pencatatan` AS `id_pencatatan`,`pencatatan`.`nama` AS `nama`,`pencatatan`.`jk` AS `jk`,`pencatatan`.`tanggal` AS `tanggal`,`pencatatan`.`subuh` AS `subuh`,`pencatatan`.`dzuhur` AS `dzuhur`,`pencatatan`.`ashar` AS `ashar`,`pencatatan`.`magrib` AS `magrib`,`pencatatan`.`isya` AS `isya`,`pencatatan`.`dhuha` AS `dhuha`,`pencatatan`.`tahajud` AS `tahajud`,`pencatatan`.`id_surat` AS `id_surat`,`pencatatan`.`ayat` AS `ayat`,`siswa`.`nis` AS `nis` from (`pencatatan` join `siswa` on(`pencatatan`.`nama` = `siswa`.`nama`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaan_quran`
--
ALTER TABLE `bacaan_quran`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `pencatatan`
--
ALTER TABLE `pencatatan`
  ADD PRIMARY KEY (`id_pencatatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pencatatan`
--
ALTER TABLE `pencatatan`
  MODIFY `id_pencatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
