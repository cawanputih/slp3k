-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 09:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slp3kdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelprogres`
--

CREATE TABLE `tabelprogres` (
  `idprogres` int(20) NOT NULL,
  `idproker` int(20) NOT NULL,
  `tanggalprogres` date NOT NULL,
  `namaprogres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelprogres`
--

INSERT INTO `tabelprogres` (`idprogres`, `idproker`, `tanggalprogres`, `namaprogres`) VALUES
(5, 1, '2017-04-25', 'Melakukan Penyuluhan di Parsoburan'),
(6, 1, '2017-04-29', 'Melakukan penyuluhan di SMA Simalingkar'),
(7, 1, '2017-05-03', 'Melakukan Penyuluhan di SMA Simanindo'),
(8, 2, '2017-04-11', 'Pemberian Motivasi di Kisaran'),
(9, 3, '2017-04-11', 'Tingkat kebersihan sungai meningkat menjadi 40 %'),
(10, 3, '2017-04-18', 'Tingkat kebersihan sungai meningkat menjadi 70 %'),
(11, 3, '2017-04-28', 'Sungai telah bersih ( 100%)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelprogres`
--
ALTER TABLE `tabelprogres`
  ADD PRIMARY KEY (`idprogres`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelprogres`
--
ALTER TABLE `tabelprogres`
  MODIFY `idprogres` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
