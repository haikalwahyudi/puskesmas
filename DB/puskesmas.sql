-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:06 PM
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
(19, 'Haikal', 1, 'Laki-Laki', '12121', '1656140933_8d0d9a6275cec5420472.png', 'Rabu', 1, 'sdfsdf'),
(23, 'jhhj', 2, 'Perempuan', '76867', '1656288132_517fe75582bb2981b7e9.jpg', 'Selasa', 9, 'hjghjgj'),
(24, 'Haikal Wahyudi', 12, 'Laki-Laki', '09876543', '1656859731_4114339ed0fc25dde3a2.jpg', 'Selasa', 7, 'erwerw');

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
(7, '11.00-15.00'),
(9, '07:20-13:00');

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
(7, 'Jack', '', '', '0000-00-00', '', 'Laki-Laki', 'jack@gmail.com', '085337181996'),
(8, 'DINA', '', '', '0000-00-00', '', 'Perempuan', 'DY@gmail.com', '081234567890'),
(9, 'Haikal Wahyudi', '', '', '0000-00-00', '', 'Laki-Laki', 'udang@gmail.com', '123456789'),
(10, 'Udin', '1862381', 'Penakak', '2020-06-17', 'Monjok', 'Laki-Laki', 'udin@gmail.com', '132133453'),
(11, 'dfgdf', '43534', 'rete', '5345-03-04', 'er', 'Laki-Laki', 'admin@gmail.com', '34534'),
(12, 'ddfgd', '234', 'sfsdf', '2022-07-27', 'sdf', 'Perempuan', 'hh@gmail.com', '23423');

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
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `kd_psn`, `no_antrian`, `tgl_kunjungan`, `tgl_pendaftaran`, `kd_poli`, `kategori`) VALUES
(630081650, 7, 1, '2022-07-01', '2022-06-30', 1, 'umum'),
(630100425, 7, 1, '2022-07-02', '2022-07-01', 3, 'bpjs'),
(630101053, 7, 1, '2022-06-30', '2022-07-01', 4, 'umum'),
(630101130, 7, 1, '2022-07-02', '2022-07-01', 1, 'umum'),
(630102548, 8, 1, '2022-07-02', '2022-07-01', 9, 'bpjs'),
(703012919, 7, 1, '2022-07-04', '2022-07-03', 9, 'umum'),
(703091405, 9, 1, '2022-07-04', '2022-07-03', 11, 'bpjs');

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
(7, 'UMUM'),
(9, 'KIA&KB'),
(10, 'BP DEWASA'),
(11, 'MTBS/ANAK'),
(12, 'GIGI & MULUT'),
(13, 'IMUNISASI');

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
(14, 'aaaa', 'aa@gmail.com', 'Perempuan', '1111', '1234', 'Pasien'),
(16, 'Jack', 'jack@gmail.com', 'Laki-Laki', '085337181996', '1234', 'pasien'),
(17, 'DINA', 'DY@gmail.com', 'Perempuan', '081234567890', '1212', 'pasien'),
(18, 'Haikal Wahyudi', 'udang@gmail.com', 'Laki-Laki', '123456789', '1234', 'pasien'),
(19, 'Udin', 'udin@gmail.com', 'Laki-Laki', '132133453', '1234', 'pasien'),
(20, 'dfgdf', 'admin@gmail.com', 'Laki-Laki', '34534', '345', 'pasien'),
(21, 'ddfgd', 'hh@gmail.com', 'Perempuan', '23423', '24234', 'pasien');

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
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kd_psn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Kode_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
