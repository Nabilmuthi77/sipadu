-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 03:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `role` enum('admin','superAdmin') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nik`, `nama`, `jabatan`, `nip`, `role`, `password`) VALUES
(1, '3215143476982376', 'Eichiro Oda', 'Sensei', '199056982365906598', 'superAdmin', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.'),
(4, '3215143476982374', 'Monkey D Luffy', 'Yonkou', '199056982365906594', 'admin', '$2y$10$KSK67KvRhb9uXWVbv8CeH.tAJ5M9dLnxQ5oQ1.9/taCMgXz4koPBe'),
(7, '3215143476982371', 'Chopper', 'Doctor', '199056982365906591', 'admin', '$2y$10$VmhM25Y9aUVtrPbskkpIMeVIALgjH5Q6eg/mVgQPf1T5VNw4MYXxO'),
(8, '3215143476982372', 'Nico Robin', 'Arkeolog', '199056982365906592', 'admin', '$2y$10$7jIE9pmNyRatq2md1AVc..kO1SYvuWw3SxOD39tcAl6j84IiozADK'),
(9, '3215143476982373', 'Sanji', 'Chef', '199056982365906593', 'admin', '$2y$10$.pr58LXvrbxM5G8jj5L3k.4PpYsOQ220SunM2IEQRSw0aqr/O6Sfy');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `wa` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `selfie` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('verified','unverified') NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `tgl_lahir`, `gender`, `wa`, `alamat`, `selfie`, `password`, `status`, `id_service`) VALUES
(2, '3126982365906597', 'Mulyanti Aji Prasetiwi', '2023-09-26', 'Perempuan', '082258941502', 'Kampung Lohan, Desa Gempol Tanjung, Rawa Kenyot, Babad Kahuruan', 'profile.png', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.', 'verified', 5),
(4, '3126982365906598', 'Mulyanti Aji Prasetyo', '2023-10-11', 'Laki-laki', '089856561209', 'Kampung Cupang, Desa Buang Langlang, Rawa Rontek, Babad Kahuripan', 'profile.png', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.', 'verified', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pengaduan` int(11) NOT NULL,
  `judul_pengaduan` varchar(30) NOT NULL,
  `isi_pengaduan` varchar(280) NOT NULL,
  `penyelesaian` varchar(225) NOT NULL,
  `status` enum('ditinjau','diproses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `tgl_pengaduan`, `judul_pengaduan`, `isi_pengaduan`, `penyelesaian`, `status`) VALUES
(8, '3126982365906597', 'Mulyanti Aji Prasetiwi', 1698027004, 'Benih Padi Licin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.', '1.ditanam', 'ditinjau'),
(9, '3126982365906597', 'Mulyanti Aji Prasetiwi', 1698027028, 'Benih Padi Meleot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.', '2.dicabut', 'ditinjau'),
(10, '3126982365906598', 'Mulyanti Aji Prasetyo', 1698027093, 'Benih Padi Meledak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.', 'Meledak Ciputat', 'selesai'),
(11, '3126982365906598', 'Mulyanti Aji Prasetyo', 1698027138, 'Benih Padi Busuk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.', '', 'diproses'),
(12, '3126982365906597', 'Mulyanti Aji Prasetiwi', 1701826931, 'Benih Padi Hurung', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.', '', 'diproses');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `pelayanan` varchar(16) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `pelayanan`, `total`) VALUES
(1, 'Sangat Puas', 9),
(2, 'Cukup Puas', 19),
(3, 'Puas', 7),
(4, 'Tidak Puas', 4),
(5, 'Kurang Puas', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
