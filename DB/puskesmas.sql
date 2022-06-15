-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 02:17 PM
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
  `Kode_dokter` int(8) NOT NULL,
  `Nama_dokter` varchar(100) DEFAULT NULL,
  `Spesialis` varchar(100) DEFAULT NULL,
  `Alamat_dokter` varchar(100) DEFAULT NULL,
  `Gambar_dokter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktek`
--

CREATE TABLE `jadwal_praktek` (
  `hari` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `Kode_pasien` int(8) NOT NULL,
  `Nama_Pasien` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(100) NOT NULL,
  `Umur` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
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
-- Table structure for table `poli/ruangan`
--

CREATE TABLE `poli/ruangan` (
  `No_poli` int(8) NOT NULL,
  `Nama_poli/ruangan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Haikal Wahyudi', 'admin@gmail.com', 'Laki-Laki', '083123765123', 'admin', 'admin'),
(5, 'kjhjkkj', 'ggg@gmail.com', 'Laki-Laki', '083123435567', '1234', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`Kode_dokter`);

--
-- Indexes for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD PRIMARY KEY (`hari`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`Kode_pasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`No_pendaftaran`);

--
-- Indexes for table `poli/ruangan`
--
ALTER TABLE `poli/ruangan`
  ADD PRIMARY KEY (`No_poli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Kode_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
