-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 04:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekri`
--

-- --------------------------------------------------------

--
-- Table structure for table `field_code`
--

CREATE TABLE `field_code` (
  `id_jenis` varchar(20) NOT NULL,
  `field_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field_code`
--

INSERT INTO `field_code` (`id_jenis`, `field_name`) VALUES
('1', '[name]'),
('1', '[nik]');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_laporan`
--

CREATE TABLE `jenis_laporan` (
  `id_jenis` varchar(20) NOT NULL,
  `nama_laporan` varchar(100) NOT NULL,
  `template` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_laporan`
--

INSERT INTO `jenis_laporan` (`id_jenis`, `nama_laporan`, `template`) VALUES
('', '', NULL),
('1', 'Laporan XXX', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(11) NOT NULL,
  `id_jenis` varchar(20) NOT NULL,
  `tgl_bulan_thn` date NOT NULL,
  `no_polisi` varchar(8) NOT NULL,
  `no_ktp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_content`
--

CREATE TABLE `laporan_content` (
  `id_jenis` varchar(20) NOT NULL,
  `field_name` varchar(20) NOT NULL,
  `no_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` varchar(10) NOT NULL,
  `pangkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `pangkat`) VALUES
('1', 'Per Satu');

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `no_ktp` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no_polisi` varchar(8) NOT NULL,
  `id_pangkat` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no_polisi`, `id_pangkat`, `nama`, `username`, `password`) VALUES
('a', '1', 'a', 'a', '0cc175b9c0f1b6a831c399e2697726');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `field_code`
--
ALTER TABLE `field_code`
  ADD PRIMARY KEY (`id_jenis`,`field_name`);

--
-- Indexes for table `jenis_laporan`
--
ALTER TABLE `jenis_laporan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `jenis_laporan_laporan_fk` (`id_jenis`),
  ADD KEY `user_laporan_fk` (`no_polisi`),
  ADD KEY `pelapor_laporan_fk` (`no_ktp`);

--
-- Indexes for table `laporan_content`
--
ALTER TABLE `laporan_content`
  ADD PRIMARY KEY (`id_jenis`,`field_name`,`no_laporan`),
  ADD KEY `laporan_laporan_content_fk` (`no_laporan`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no_polisi`),
  ADD KEY `pangkat_user_fk` (`id_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `field_code`
--
ALTER TABLE `field_code`
  ADD CONSTRAINT `jenis_laporan_field_code_fk` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_laporan` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `jenis_laporan_laporan_fk` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_laporan` (`id_jenis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pelapor_laporan_fk` FOREIGN KEY (`no_ktp`) REFERENCES `pelapor` (`no_ktp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_laporan_fk` FOREIGN KEY (`no_polisi`) REFERENCES `users` (`no_polisi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `laporan_content`
--
ALTER TABLE `laporan_content`
  ADD CONSTRAINT `field_code_laporan_content_fk` FOREIGN KEY (`id_jenis`,`field_name`) REFERENCES `field_code` (`id_jenis`, `field_name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `laporan_laporan_content_fk` FOREIGN KEY (`no_laporan`) REFERENCES `laporan` (`no_laporan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `pangkat_user_fk` FOREIGN KEY (`id_pangkat`) REFERENCES `pangkat` (`id_pangkat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
