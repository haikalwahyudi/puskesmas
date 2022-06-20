-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 06:01 PM
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
-- Database: `puskesmas`
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
(10, 'haikal', 1, 'Laki-Laki', '87', '1655723651_cab91d9f5a36b4d497a3.jpeg', 'Kamis', 2, 'lkkl'),
(12, 'lkhklh', 2, 'Laki-Laki', '87678', '1655724030_038c66eeed4b04113483.jpg', 'Rabu', 1, 'jkhkj');

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
(1, '8:30 - 15:00'),
(2, '9:30 - 16:00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kd_psn` int(11) NOT NULL,
  `nm_psn` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `usia` varchar(15) NOT NULL,
  `nohp` varchar(16) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `No_pendaftaran` int(8) NOT NULL,
  `Kunjungan` varchar(100) NOT NULL,
  `Tgl_Pendafataran` varchar(100) NOT NULL,
  `Poliklinik_tujuan` varchar(100) NOT NULL,
  `Bpjs` varchar(100) NOT NULL,
  `Umum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Gigi'),
(2, 'Saraf'),
(3, 'Jantung'),
(4, 'Penyakit dalam');

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
(5, 'Haikal Wahyudi', 'admin@gmail.com', 'Laki-Laki', '083123435567', '1234', 'Admin'),
(14, 'aaaa', 'aaaaa@gmail.com', 'Perempuan', '1111', '11', 'Admin');

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
  ADD PRIMARY KEY (`No_pendaftaran`);

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
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Kode_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
