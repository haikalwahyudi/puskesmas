-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 10:14 AM
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
(25, 'Haikal Wahyudi, S, Kep. Ners', 14, 'Laki-Laki', '12345', '1657526548_27b7bca1b04f0c985dcb.png', 'Rabu', 21, 'Lombok Timur'),
(26, 'Udang, S.Kep', 16, 'Perempuan', '555', '1657526590_27359363dcf69e326a18.jpg', 'Selasa', 20, 'Lombok Timur');

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
(14, 'Udin', '333', 'Masbagik', '2022-06-27', 'Masbagik', 'Laki-Laki', 'udin@gmail.com', '222');

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
(711030526, 13, 1, '2022-07-11', '2022-07-11', 15, 'UMUM', NULL),
(711030648, 14, 1, '2022-07-12', '2022-07-11', 14, 'BPJS', '12121');

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
(14, 'Poli Gigi'),
(15, 'Poli Kandungan'),
(16, 'Poli Mata');

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
(22, 'Haikal Wahyudi', 'udang@gmail.com', 'Laki-Laki', '1234', '1234', 'Admin'),
(23, 'Udang', 'udang@gmail.com', 'Perempuan', '111', '1234', 'Pasien'),
(24, 'Udin', 'udin@gmail.com', 'Laki-Laki', '222', '1234', 'Pasien');

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
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kd_psn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Kode_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
