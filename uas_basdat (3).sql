-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_basdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `nama`, `jumlah`, `harga`, `total`, `tanggal`) VALUES
(3, 'Paku', 982, 35000, 34370000, '2023-11-24'),
(4, 'Batu bata', 12, 700, 8400, '2023-11-29'),
(5, 'Batu bata', 12, 700, 8400, '2023-11-29'),
(6, 'Batu bata', 1, 700, NULL, '2023-11-23'),
(7, 'Batu bata', 1, 700, NULL, '2023-11-29'),
(8, 'Batu Cor', 2021, 550000, NULL, '2023-12-06'),
(9, 'Batu bata', 32131, 700, NULL, '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `ready`
--

CREATE TABLE `ready` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ready`
--

INSERT INTO `ready` (`id`, `nama`, `harga`, `satuan`, `jumlah`) VALUES
(7, 'Batu Cor', 550000, 'Kubik', 3123),
(10, 'Seng 8x9', 80000, 'lembar', 1313),
(11, 'Besi 8\"', 65000, 'Batang', 232),
(14, 'Paku', 35000, 'kg', 13366),
(15, 'Semen', 75000, 'sak', 200),
(28, 'Pasir Sungai', 200000, 'kubik', 9999),
(29, 'Grendel Jendela ', 10000, 'Buah', 78),
(30, 'Batu bata', 700, 'Biji', 2554),
(32, 'Jendela 2\"', 20000, 'set', 12),
(33, 'Cat Minyak', 85000, 'kg', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `tanggal`, `nama`, `jumlah`, `harga`, `total`) VALUES
(1, '2023-11-29', 'Seng 8x9', 1313, 80000, NULL),
(2, '2023-11-29', 'Besi 8\"', 232, 65000, NULL),
(3, '2023-11-29', 'Grendel Jendela ', 33, 10000, NULL),
(4, '2023-11-29', 'Paku', 13455, 35000, NULL),
(5, '2023-11-29', 'Semen', 200, 75000, NULL),
(6, '2023-11-29', 'Batu bata', 123, 700, NULL),
(7, '2023-11-29', 'Batu bata', 9999, 700, NULL),
(8, '2023-11-29', 'Batu bata', 9999, 700, NULL),
(9, '2023-11-29', 'Batu bata', 9999, 700, NULL),
(10, '2023-11-29', 'Batu bata', 9999, 700, NULL),
(11, '2023-11-29', 'Pasir Sungai', 9999, 200000, NULL),
(12, '2023-11-29', 'Grendel Jendela ', 78, 10000, NULL),
(13, '2023-11-29', 'Batu bata', 25, 700, NULL),
(14, '2023-11-29', 'Batu bata', 12, 700, NULL),
(15, '2023-11-29', 'Batu bata', 98198, 700, NULL),
(16, '2023-11-29', 'Batu bata', 1, 700, NULL),
(17, '2023-11-29', 'Batu bata', 1, 700, NULL),
(18, '2023-11-30', 'Batu bata', 1, 700, NULL),
(19, '2023-12-06', 'Jendela 2\"', 12, 20000, NULL),
(20, '2023-12-06', 'Batu Cor', 22, 550000, NULL),
(21, '2023-12-06', 'Cat Minyak', 5000, 85000, NULL),
(22, '2023-12-06', 'Batu Cor', 20, 550000, NULL),
(23, '2023-12-20', 'Batu bata', 1323, 700, NULL),
(24, '2023-12-20', 'Batu bata', 31231, 700, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `satuan` varchar(30) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `nama`, `harga`, `satuan`, `jumlah`) VALUES
(14, 'Semen', 75000, 'sak', NULL),
(15, 'Seng 6x9', 60000, 'lembar', NULL),
(16, 'Seng 7x9', 70000, 'lembar', NULL),
(17, 'Seng 8x9', 80000, 'lembar', NULL),
(20, 'Triplek 4\"', 85000, 'lembar', NULL),
(21, 'Paku', 35000, 'kg', NULL),
(22, 'Cat Minyak', 85000, 'kg', NULL),
(23, 'Cat Tembok 25kg', 52000, 'buah', NULL),
(24, 'Besi 12\"', 105000, 'Batang', NULL),
(25, 'Besi 10\"', 85000, 'batang', NULL),
(26, 'Besi 8\"', 65000, 'Batang', NULL),
(27, 'Besi 6\"', 45000, 'Batang', NULL),
(28, 'Besi 4\"', 15000, 'Batang', NULL),
(29, 'Kawat Pengikat', 35000, 'kg', NULL),
(30, 'Batu bata', 700, 'Biji', 3866),
(31, 'Batu Cor', 550000, 'Kubik', NULL),
(32, 'Pasir Sungai', 200000, 'kubik', NULL),
(33, 'Engsel pintu 4\"', 25000, 'set', NULL),
(34, 'Jendela 2\"', 20000, 'set', NULL),
(35, 'Grendel Pintu', 15000, 'Buah', NULL),
(36, 'Grendel Jendela ', 10000, 'Buah', NULL),
(37, 'dwdwd', 13123, '1231', NULL),
(38, 'dwkdmadwamdioaw', 12312, '312312', NULL),
(39, 'dwkdmadwamdioaw', 12312, '312312', NULL),
(40, 'wdw', 31231, '231', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ready`
--
ALTER TABLE `ready`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ready`
--
ALTER TABLE `ready`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
