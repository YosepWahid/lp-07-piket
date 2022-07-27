-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 02:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piket`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_piket`
--

CREATE TABLE `anggota_piket` (
  `id` int(11) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_piket`
--

INSERT INTO `anggota_piket` (`id`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`) VALUES
(1, 'Iis', 'Adinda', 'Ahmad', 'Arjun', 'Azkya'),
(2, 'Miftah', 'Feri', 'Bilqis', 'Irfan ', 'Ihsan'),
(3, 'Raihan', 'Haris', 'Ghani', 'Marsya', 'Ariel'),
(4, 'Shalma', 'Rizki', 'Mutia', 'M.Nabil', 'Reyhan'),
(5, 'Aulia', 'Novi', 'Resa', 'Nizma', 'Yummna'),
(6, 'Lina', 'Tiara', 'Sarif', 'Rakha', 'Revalina'),
(9, 'Sahdan', '', '', '', 'Yosep');

-- --------------------------------------------------------

--
-- Table structure for table `hari_piket`
--

CREATE TABLE `hari_piket` (
  `id` int(11) NOT NULL,
  `Hari` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hari_piket`
--

INSERT INTO `hari_piket` (`id`, `Hari`) VALUES
(1, '2022-04-03'),
(2, '2022-03-08'),
(3, '2022-03-09'),
(4, '2022-03-10'),
(5, '2022-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_piket`
--
ALTER TABLE `anggota_piket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hari_piket`
--
ALTER TABLE `hari_piket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_piket`
--
ALTER TABLE `anggota_piket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hari_piket`
--
ALTER TABLE `hari_piket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
