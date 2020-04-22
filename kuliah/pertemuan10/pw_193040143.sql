-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 09:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040143`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'SongJoongKi.png'),
(2, 'Doddy', '133040123', 'doddy@yahoo.com', 'Teknik Industri', 'KyungSoo.png'),
(3, 'Erik', '023040321', 'erik@yahoo.com', 'Teknik Industri', 'EunWoo.png'),
(4, 'Ferry Mulyanto', '033030300', 'fery@yahoo.com', 'Teknik Planologi', 'JangDooYoon.png'),
(5, 'Ahn Hyo Seop', '193040111', 'ahs@gmail.com', 'Kesehatan Jasmani', 'AhnHyoSeop.png'),
(6, 'Park Seo Joon', '193040112', 'psj@gmail.com', 'BIsnis dan Manajemen', 'PSJ.png'),
(7, 'Kim Tae Hyung', '193040113', 'v@gmail.com', 'Arsitektur', 'TaeHyung.png'),
(8, 'Lee Min Ho', '193040114', 'lmh@gmail.com', 'BIsnis dan Manajemen', 'LMH.png'),
(9, 'Ong Seong Wu', '193040115', 'onge@gmail.com', 'Ilmu Komunikasi', 'Onge.png'),
(10, 'Song Kang', '193040116', 'sk@gmail.com', 'Teknik Industri', 'SooKang.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
