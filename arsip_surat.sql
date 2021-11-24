-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 06:08 AM
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
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `namafile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `no_surat`, `kategori`, `judul`, `waktu`, `namafile`) VALUES
(12, '401/0001/418.69.10/2', 'Pengumuman', 'Bersih Desa', '2021-11-24 03:59:53', '115-pengumumanwisuda-Ixg6W.pdf'),
(14, '147/0001/418.69.10/2', 'Pengumuman', 'vaksin dosis ke dua', '2021-11-24 05:52:36', '04. Soal Praktek Pemrograman PSDKU Kediri 2021_2.p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
