-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 07:34 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sismul`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `deskripsi_gambar` longtext NOT NULL,
  `date_gambar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_gambar`, `gambar`, `deskripsi_gambar`, `date_gambar`) VALUES
(3, 'Gambar 0', 'file_1459253520.jpg', '<p>Ini gambar 2</p>', '2016-03-31 14:46:35'),
(4, 'Gambar 3', 'file_1459256636.jpg', '<p>lalala yeyeyey lalala yeyeyeye</p>', '2016-03-29 13:03:56'),
(6, 'gambar 4', 'file_1459411484.png', '<p>gambar 4</p>', '2016-03-31 08:04:44'),
(7, 'lala', 'file_1459926242.jpg', '<p>lala</p>', '2016-04-06 07:04:02'),
(8, 'adbfkajdbf', 'file_1460208338.jpg', '<p>ajdbfkajdbf</p>', '2016-04-09 13:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(11) NOT NULL,
  `nama_musik` varchar(30) NOT NULL,
  `musik` varchar(30) NOT NULL,
  `penyanyi` varchar(30) NOT NULL,
  `date_musik` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `nama_musik`, `musik`, `penyanyi`, `date_musik`) VALUES
(2, '1', 'file_1459414795.mp3', '3', '2016-03-31 08:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `nama_video` varchar(30) NOT NULL,
  `video` varchar(30) NOT NULL,
  `deskripsi_video` longtext NOT NULL,
  `date_video` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `nama_video`, `video`, `deskripsi_video`, `date_video`) VALUES
(2, 'Video 1', 'file_1459435620.mp4', '<p>ini video 1</p>', '2016-03-31 14:47:00'),
(3, '2', 'file_1459502852.mp4', '<p>2</p>', '2016-04-01 09:27:32'),
(4, 'aa', 'file_1491629516.mp4', '<p>aa</p>', '2017-04-08 05:31:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
