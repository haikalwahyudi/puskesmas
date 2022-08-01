-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 03:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas_sesela`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` int(11) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `kd_poli` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `hari_praktik` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nm_dokter`, `kd_poli`, `jk`, `no_hp`, `poto`, `hari_praktik`, `id`, `alamat`) VALUES
(25, 'Haikal Wahyudi, S, Kep. Ners', 14, 'Laki-Laki', '12345', '1657526548_27b7bca1b04f0c985dcb.png', 'Rabu', 21, 'Lombok Timur'),
(26, 'Udang, S.Kep', 16, 'Perempuan', '555', '1657526590_27359363dcf69e326a18.jpg', 'Selasa', 20, 'Lombok Barat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktek`
--

CREATE TABLE `jadwal_praktek` (
  `id` int(11) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_praktek`
--

INSERT INTO `jadwal_praktek` (`id`, `jam`) VALUES
(20, '11.00-14:00'),
(21, '07:20-14:00'),
(22, '08:20-15.00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_psn` int(11) NOT NULL,
  `nm_psn` varchar(50) NOT NULL,
  `nik` varchar(39) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kd_psn`, `nm_psn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `kelurahan`, `jk`, `email`, `nohp`) VALUES
(13, 'Udang', '1234', 'Penakak', '2022-07-04', 'Monjok', 'Perempuan', 'udang@gmail.com', '111'),
(14, 'Udin', '333', 'Masbagik', '2022-06-27', 'Masbagik', 'Laki-Laki', 'udin@gmail.com', '222'),
(15, 'yusril', '34667', 'sesela ', '2022-07-12', 'sesela', 'Laki-Laki', 'yus@gmail.com', '5678'),
(16, 'yoyo', '1245', 'sesela', '2022-07-12', 'sesela', 'Laki-Laki', 'yo@gmail.com', '4545'),
(17, 'ronaldo', '23143365', 'sesela', '2021-07-12', 'sesela', 'Laki-Laki', 'r@gmail.com', '123'),
(18, 'ari', '244657', ' sesela', '2022-07-20', 'sesela', 'Laki-Laki', 'ari@gmail.com', '1212'),
(19, 'milawati', '1312432', 'lotim', '2021-09-14', 'sesela', 'Perempuan', 'milawati@gmail.com', '7777'),
(20, 'Renda', '65476589', 'lombok utara', '2021-10-04', 'sesela', 'Perempuan', 'mesem@gmail.com', '2222'),
(21, 'rival', '12433676', 'gunungsari', '2022-03-07', 'sesela', 'Laki-Laki', 'ri@gmail.com', '3333'),
(22, 'diki', '2315356568', 'turida', '2022-07-27', 'sesela', 'Laki-Laki', 'diki@gmail.com', '2121'),
(23, 'yusril hadi', '65543', 'batulayar', '2022-03-08', 'sesela', 'Laki-Laki', 'ril@gmail.com', '5656');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL,
  `kd_psn` int(11) NOT NULL,
  `no_antrian` int(10) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `kd_poli` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `kd_psn`, `no_antrian`, `tgl_kunjungan`, `tgl_pendaftaran`, `kd_poli`, `kategori`, `pembayaran`) VALUES
(711030526, 13, 1, '2022-06-11', '2022-07-11', 15, 'UMUM', NULL),
(711030648, 14, 1, '2022-06-12', '2022-07-11', 14, 'BPJS', '12121'),
(712080950, 13, 2, '2022-07-12', '2022-07-12', 14, 'BPJS', '134246767689798'),
(712082404, 16, 1, '2022-07-13', '2022-07-12', 16, 'UMUM', NULL),
(718023220, 16, 1, '2022-07-19', '2022-07-18', 14, 'UMUM', NULL),
(720093303, 16, 1, '2022-07-20', '2022-07-20', 15, 'UMUM', NULL),
(720093348, 16, 1, '2022-07-20', '2022-07-20', 14, 'UMUM', NULL),
(720104337, 17, 2, '2022-07-20', '2022-07-21', 14, 'UMUM', NULL),
(720105041, 17, 1, '2022-07-20', '2022-07-21', 17, 'BPJS', '21154354'),
(721095319, 18, 1, '2022-07-21', '2022-07-21', 17, 'BPJS', '2345'),
(722085933, 19, 1, '2022-07-23', '2022-07-22', 16, 'UMUM', NULL),
(722102109, 19, 1, '2022-07-22', '2022-07-23', 15, 'BPJS', '14324554'),
(722102311, 19, 1, '2022-07-22', '2022-07-23', 14, 'BPJS', '14336567'),
(722102406, 19, 1, '2022-07-22', '2022-07-23', 17, 'UMUM', NULL),
(722231114, 20, 1, '2022-07-24', '2022-07-23', 16, 'BPJS', '67589'),
(724231406, 21, 1, '2022-07-25', '2022-07-25', 14, 'UMUM', NULL),
(725110446, 22, 1, '2022-07-27', '2022-07-26', 17, 'BPJS', '3214365'),
(725110933, 22, 1, '2022-07-26', '2022-07-26', 14, 'UMUM', NULL),
(725211407, 23, 1, '2022-07-26', '2022-07-26', 16, 'UMUM', NULL),
(726031650, 16, 1, '2022-07-27', '2022-07-26', 14, 'BPJS', '123254476');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kd_poli` int(11) NOT NULL,
  `nm_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`kd_poli`, `nm_poli`) VALUES
(14, 'Poli GIGI & MULUT'),
(15, 'Poli KIA & KB'),
(16, 'MTBS/ANAK'),
(17, 'BP DEWASA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Kode_user` int(8) NOT NULL,
  `Nama_user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(100) NOT NULL,
  `No_hp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Kode_user`, `Nama_user`, `email`, `Jenis_kelamin`, `No_hp`, `password`, `level`) VALUES
(22, 'Siti Rodiah', 'diiyahdy@gmail.com', 'Perempuan', '1234', '1234', 'Admin'),
(23, 'Udang', 'udang@gmail.com', 'Perempuan', '111', '1234', 'Pasien'),
(24, 'Udin', 'udin@gmail.com', 'Laki-Laki', '222', '1234', 'Pasien'),
(25, 'yusril', 'yus@gmail.com', 'Laki-Laki', '5678', '3344', 'Pasien'),
(26, 'yoyo', 'yo@gmail.com', 'Laki-Laki', '4545', '1234', 'Pasien'),
(27, 'ronaldo', 'r@gmail.com', 'Laki-Laki', '123', '123', 'Pasien'),
(28, 'ari', 'ari@gmail.com', 'Laki-Laki', '1212', '1212', 'Pasien'),
(29, 'milawati', 'milawati@gmail.com', 'Perempuan', '7777', '9999', 'Pasien'),
(30, 'Renda', 'mesem@gmail.com', 'Perempuan', '2222', '1111', 'Pasien'),
(31, 'rival', 'ri@gmail.com', 'Laki-Laki', '3333', '2222', 'Pasien'),
(32, 'diki', 'diki@gmail.com', 'Laki-Laki', '2121', '12345', 'Pasien'),
(33, 'yusril hadi', 'ril@gmail.com', 'Laki-Laki', '5656', '6666', 'Pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indexes for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_psn`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kd_psn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Kode_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
