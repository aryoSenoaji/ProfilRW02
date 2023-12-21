-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 11:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapdk`
--

CREATE TABLE `datapdk` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` int(25) NOT NULL,
  `domisili` varchar(15) NOT NULL,
  `noTelepon` int(15) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapdk`
--

INSERT INTO `datapdk` (`id`, `nama`, `nik`, `domisili`, `noTelepon`, `gambar`) VALUES
(1, 'jojo', 32487324, 'Jakarta Timur', 342564, 'titan2.png'),
(2, 'Budi Warman', 756435, 'Jakarta Barat', 5689434, 'eren.png'),
(3, 'Killua Zoldyck', 6578786, 'Jakarta Selatan', 78897, 'mikasa.png'),
(4, 'Reniner Braum', 564567, 'Jakarta Selatan', 5436675, 'bertoruto.png'),
(5, 'Erwin Smith', 675786, 'Jakarta Selatan', 786657, 'hange.png'),
(6, 'Alex Marsh', 8579437, 'Jakarta Utara', 9083443, 'titan.png'),
(18, 'Yanto', 876876, 'dfsgnvcvx', 986857, '612b4472657ce.png'),
(19, 'Siapa Ini deh boleh aja', 3457435, 'Pulau Seribu', 2147483647, '612b44ada967f.png'),
(21, 'dsasdasd', 6546546, 'fdssdf', 78676876, '612b61e19395a.png');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `username`, `password`) VALUES
(3, 'iyorji', '2224aryo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapdk`
--
ALTER TABLE `datapdk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapdk`
--
ALTER TABLE `datapdk`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
