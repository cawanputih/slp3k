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
-- Table structure for table `tabelproker`
--

CREATE TABLE `tabelproker` (
  `idproker` int(20) NOT NULL,
  `namaproker` text NOT NULL,
  `tanggalmulai` date NOT NULL,
  `tanggalselesai` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelproker`
--

INSERT INTO `tabelproker` (`idproker`, `namaproker`, `tanggalmulai`, `tanggalselesai`, `deskripsi`) VALUES
(1, 'Penyuluhan Narkoba kepada Pelajar', '2017-04-25', '2017-05-10', ''),
(2, 'Motivasi Terpusat dan Terpimpin', '2017-04-11', '2017-06-20', ''),
(3, 'Pengabdian Masyarakat Membersihkan Sungai', '2017-04-11', '2017-04-30', ''),
(8, 'Pembinaan Budi Pekerti', '2017-04-01', '2017-04-29', 'Membina budi pekerti pelajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelproker`
--
ALTER TABLE `tabelproker`
  ADD PRIMARY KEY (`idproker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelproker`
--
ALTER TABLE `tabelproker`
  MODIFY `idproker` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
