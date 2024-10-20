-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 01:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0066`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_0066`
--

CREATE TABLE `tbl_user_0066` (
  `id` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_0066`
--

INSERT INTO `tbl_user_0066` (`id`, `gambar`, `nama`, `jenis_kelamin`, `alamat`, `nohp`) VALUES
(1, '6714d7a6bc9a6.jpg', 'Amat', 'Laki - laki', 'Pekalongan', '0856123721324'),
(2, '6714c984d2cc9.jpg', 'Alufeed', 'Laki - laki', 'Batang', '0872912347192'),
(3, '6714c9f3db401.jpg', 'Nana', 'Perempuan', 'Pemalang', '0895623163842'),
(35, '6714e2ce5dba1.jpg', 'Laksamana', 'Laki - laki', 'Mataram', '0895281012842'),
(36, '6714e2f13c661.jpg', 'Cici', 'Perempuan', 'Bandung', '082140401829');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user_0066`
--
ALTER TABLE `tbl_user_0066`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_0066`
--
ALTER TABLE `tbl_user_0066`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
