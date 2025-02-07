-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 07:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int NOT NULL,
  `no_plat` varchar(20) DEFAULT NULL,
  `id_parkir` int DEFAULT NULL,
  `jenis_kendaraan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_plat`, `id_parkir`, `jenis_kendaraan`) VALUES
(1, 'D 111 AA', 111, 'YAMAHA'),
(123, 'D 123 BB', 222, 'YAMAHA'),
(234, 'D 123 CC', 222, 'YAMAHA'),
(345, 'D 123 CC', 333, 'YAMAHA'),
(456, 'D 111 EWE', 444, 'BENELI');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int NOT NULL,
  `tanggal_parkir` date DEFAULT NULL,
  `harga_parkir` varchar(20) DEFAULT NULL,
  `alamat_parkir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `tanggal_parkir`, `harga_parkir`, `alamat_parkir`) VALUES
(111, '2020-02-02', 'Rp2.000', 'sukamenak'),
(222, '2020-02-03', 'Rp2.000', 'sukamenak'),
(333, '2020-02-04', 'Rp2.000', 'sukamenak'),
(444, '2020-02-05', 'Rp2.000', 'sukamenak'),
(555, '2020-02-06', 'Rp2.000', 'sukamenak'),
(999, '2025-01-01', '3.000', 'Sukamenak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
