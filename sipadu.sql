-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 10:36 AM
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
(1, '3215143476982376', 'Agung Sahputra', 'Manager Kehutanan', '199056982365906598', 'superAdmin', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.'),
(2, '3215143476982377', 'Nanad Hutomang', 'Perwira Kehutanan', '199056982365906599', 'admin', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.');

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
  `status` enum('verified','unverified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `tgl_lahir`, `gender`, `wa`, `alamat`, `selfie`, `password`, `status`) VALUES
(1, '3126982365906598', 'Mulyanto Aji Prasetyo', '2023-09-07', 'Laki-laki', '082258941502', 'Kampung Lohan, Desa Gempol Tanjung, Rawa Rontek, Babad Padjajaran', 'hj.jpeg', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.', 'unverified'),
(2, '3126982365906597', 'Mulyanti Aji Prasetiwi', '2023-09-26', 'Perempuan', '082258941502', 'Kampung Lohan, Desa Gempol Tanjung, Rawa Kenyot, Babad Kahuruan', 'out.png', '$2y$10$BnDLLEs8MVMliTemqfqyruthI1SQ7oggZlV27yI/SlaD/elHlxrG.', 'verified'),
(4, '3210', 'Sri Mulyanto', '2023-10-07', 'Laki-laki', '081', 'Negara Api', 'ishtar-code.png', '$2y$10$xIif7TAb0qf9uy6B4MiXMOHzamY7r1BrC5mhWKgKuyJ56nNmYPBZ6', 'verified');

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
  `status` enum('ditinjau','diproses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `tgl_pengaduan`, `judul_pengaduan`, `isi_pengaduan`, `status`) VALUES
(1, '3126982365906598', 'Mulyanto Aji Prasetyo', 1686155948, 'Benih Padi Hancur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati culpa minima iste non, earum hic quibusdam vitia.', 'ditinjau');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
