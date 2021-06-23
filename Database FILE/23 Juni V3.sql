-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 08:50 AM
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
('1', 'Laporan XXX', '<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\">SURAT TANDA BUKTI PENERIMAAN LAPORAN POLISI</span></p>\n<p style=\"text-align: center;\"><span style=\"text-decoration: underline;\">Nomor: XXX/YYY/ZZZ-09876899</span></p>\n<p style=\"text-align: center;\">&nbsp;</p>\n<p style=\"text-align: justify;\">Yang betanda tangan dibawah ini---------------------------------------------------------------------- [name] ,&nbsp;</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus velit mauris, at elementum lorem consequat non. Aliquam erat volutpat. Vestibulum rutrum rhoncus orci, nec elementum eros egestas dictum. Aliquam ac dui feugiat nisi commodo rutrum. Quisque in tincidunt diam. Sed eu consequat turpis. Nunc suscipit ante id nulla hendrerit, vitae tristique enim ultrices. Sed faucibus congue ligula, eu bibendum ligula mattis scelerisque. Nulla porta quam vel mi iaculis mollis.</p>\n<p>Vivamus sed lectus a lectus convallis volutpat at vel neque. Proin luctus congue diam vel tempus. Nullam ex nibh, ullamcorper ac lacus non, tristique placerat elit. Vestibulum aliquet vehicula ante, quis porta arcu euismod vitae. Suspendisse potenti. Ut non interdum turpis. In eros sem, accumsan ac ante eget, imperdiet tempor felis. Donec et elementum sapien, ac efficitur ligula. Praesent lobortis est non consectetur faucibus. Nam sollicitudin erat in finibus condimentum. Etiam ultrices vehicula felis ut elementum. Proin nec viverra enim, eu tempor magna.</p>\n<p>In consequat orci quam, ut aliquet tellus euismod id. Aenean luctus purus id orci bibendum finibus. Nulla varius, libero sit amet elementum feugiat, lacus ex hendrerit eros, a tincidunt eros massa quis turpis. Donec aliquam ipsum a pharetra imperdiet. Curabitur vel nibh nec nisi fermentum vestibulum. Praesent in tempor ex. Etiam viverra metus eros, eget euismod dui mollis at. Cras magna ex, suscipit vitae cursus sagittis, sollicitudin sed nibh. Nunc nisl diam, pretium in varius eget, sodales vel mauris. Phasellus ornare ut lacus a lobortis. Cras ac lobortis nibh. Pellentesque faucibus, lectus non fringilla accumsan, nibh dolor gravida massa, in dignissim turpis ante vitae orci. Donec vestibulum pretium eleifend. Vestibulum in ex urna.</p>\n<p>Suspendisse efficitur iaculis enim, eu interdum ligula tincidunt ut. Suspendisse faucibus, velit non finibus rutrum, magna quam vehicula erat, ultrices lobortis est nulla vitae odio. Praesent a egestas diam, at luctus nisl. Nulla facilisi. Proin eu cursus sem. Donec purus orci, ullamcorper quis finibus id, bibendum nec nunc. Aliquam feugiat sodales justo nec sodales. Praesent faucibus massa quis tellus varius ultricies. Phasellus nec nunc odio. Ut vel sagittis metus. Aenean interdum leo id nisi dictum, quis luctus ipsum viverra. Quisque justo dui, placerat quis venenatis nec, auctor sit amet libero. Sed vulputate eleifend justo at bibendum. Nam hendrerit vel tellus tempus efficitur. Duis ligula justo, facilisis ac iaculis at, semper eget lacus. Duis porttitor luctus fringilla.</p>\n<p>Suspendisse et posuere arcu, a vehicula nisl. In euismod feugiat scelerisque. Morbi molestie odio nibh, et feugiat orci vestibulum vel. Vivamus interdum, velit vitae ultrices lacinia, purus libero elementum ligula, et fringilla risus purus ac ante. Nunc interdum eros sed viverra auctor. Curabitur nibh enim, feugiat eget orci luctus, venenatis tincidunt nibh. Etiam placerat elementum placerat. Vivamus finibus nulla id lacus rhoncus commodo in quis nulla. Maecenas sit amet bibendum ante. Fusce ut erat vehicula purus pellentesque scelerisque. Sed aliquet sit amet nisl nec sagittis. Quisque sit amet dignissim neque. Mauris massa arcu, volutpat a efficitur commodo, aliquet eget orci.</p>\n<p style=\"text-align: center;\">&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(11) NOT NULL,
  `id_jenis` varchar(20) NOT NULL,
  `tgl_bulan_thn` date NOT NULL,
  `no_polisi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`no_laporan`, `id_jenis`, `tgl_bulan_thn`, `no_polisi`) VALUES
(1, '1', '2021-01-01', '09876543'),
(2, '1', '2001-01-01', '09876543'),
(3, '1', '2001-01-01', '09876543'),
(4, '1', '2002-02-02', '09876543');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_content`
--

CREATE TABLE `laporan_content` (
  `id_jenis` varchar(20) NOT NULL,
  `field_name` varchar(20) NOT NULL,
  `no_laporan` int(11) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_content`
--

INSERT INTO `laporan_content` (`id_jenis`, `field_name`, `no_laporan`, `value`) VALUES
('1', '[name]', 2, 'Bapak Satu'),
('1', '[name]', 3, 'Bapak Dua'),
('1', '[name]', 4, 'Bapak Tiga'),
('1', '[nik]', 4, '7338484');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no_polisi` varchar(8) NOT NULL,
  `id_pangkat` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no_polisi`, `id_pangkat`, `nama`, `username`, `password`) VALUES
('09876543', '1', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
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
  ADD KEY `user_laporan_fk` (`no_polisi`);

--
-- Indexes for table `laporan_content`
--
ALTER TABLE `laporan_content`
  ADD PRIMARY KEY (`id_jenis`,`field_name`,`no_laporan`),
  ADD UNIQUE KEY `value` (`value`) USING HASH,
  ADD KEY `laporan_laporan_content_fk` (`no_laporan`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no_polisi`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `pangkat_user_fk` (`id_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
