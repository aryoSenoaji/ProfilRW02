-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 11:18 AM
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
-- Database: `rw02`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_foto`
--

CREATE TABLE `data_foto` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_foto`
--

INSERT INTO `data_foto` (`id`, `judul`, `foto`) VALUES
(4, 'Kerja Bakti', '62108f399e90d.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_video`
--

CREATE TABLE `data_video` (
  `id` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_video`
--

INSERT INTO `data_video` (`id`, `keterangan`, `link2`) VALUES
(5, 'Kegiatan RW', 'https://www.youtube.com/embed/GJl_fn_skOM');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id` int(50) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id`, `rt`, `link`) VALUES
(1, '001', 'https://drive.google.com/drive/folders/1kiCB9pZXvqojnaGG_zbKl2jJuLOlgvfI?usp=sharing'),
(2, '002', 'https://drive.google.com/drive/folders/14a1OqcruRFclOL3SmIKDpBuDnKMYjP6k?usp=sharing'),
(4, '008', 'https://drive.google.com/drive/folders/1qjx_JaiZkhbLtOgPrwjUUIpfdy77GOJR?usp=sharing'),
(5, '012', 'https://drive.google.com/drive/folders/1pDPGqrFitw8_RrfSDXFtQT7qqzqCRh6B?usp=sharing'),
(6, '005', 'https://drive.google.com/drive/folders/14voMZpTo3cofU_xRcIDVMCqcZ6JTglhl?usp=sharing'),
(7, '009', 'https://www.google.com/'),
(8, '007', 'https://drive.google.com/drive/folders/1a9crjAGS9SdsJEwdg6QRbdhUzOaH7Ukx?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'iyorji', '$2y$10$zV4CTGpd9iw2QextIhrvPe9rHyEdj5SQnP/qm2sKrD6yuE278BEmS'),
(2, 'banu', '$2y$10$e2xcNAO0jGpO.NXfa4AjHOoyZd3XfN5DRZXiaCwmP/cUZl82MfXP.'),
(3, 'dodi', '$2y$10$RwjCz9DqVyoLs2ZbwZBYC.VTcd8H6zB0hqWs34m9/oFysj6SBfLzS'),
(4, 'dodo', '$2y$10$qqrengWjPjlhFACtYXRZ6uRNA/8Wzpu2SuQInPYIl6lgPcHZRO9qC'),
(5, 'senja123', '$2y$10$1fBh/038c6C8xH/Gr.sCee7ONACXvtB2hWMNrGpQ5HiVdGOc5NacO'),
(6, 'aweawe', '$2y$10$1e7hKYX7poR4nHocQpd1YOlpL2.9DjiG8eg9x3vN0S/WKcCKkuFMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_foto`
--
ALTER TABLE `data_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_video`
--
ALTER TABLE `data_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_foto`
--
ALTER TABLE `data_foto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_video`
--
ALTER TABLE `data_video`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
