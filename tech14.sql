-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 01:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech14`
--

-- --------------------------------------------------------

--
-- Table structure for table `klientet`
--

CREATE TABLE `klientet` (
  `klientiid` int(11) NOT NULL,
  `emri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mbiemri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klientet`
--

INSERT INTO `klientet` (`klientiid`, `emri`, `mbiemri`, `username`, `email`, `password`, `roli`) VALUES
(1, 'Hamz', 'Hajra', '123456789', 'hh51489@ubt-uni.net', 'Hamzhajra123', 1),
(2, 'Qendrim', 'Rexha', '546897123', 'qr38352@ubt-uni.net', 'Qrexha123', 1),
(3, 'Lumbardh', 'Gashi', '564789123', 'lg@ubt-uni.net', 'Lumbardh123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `kontaktuesiid` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefoni` int(11) NOT NULL,
  `mesazhi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`kontaktuesiid`, `emri`, `mbiemri`, `email`, `telefoni`, `mesazhi`) VALUES
(1, 'hamz', 'hajra', 'hamzhajra14@gmail,com', 49372311, 'Faqja ma e mire');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `produktiid` int(11) NOT NULL,
  `emri` int(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pershkrimi` text NOT NULL,
  `cmimi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shitjet`
--

CREATE TABLE `shitjet` (
  `shitjaid` int(11) NOT NULL,
  `produktiid` int(11) NOT NULL,
  `klientiid` int(11) NOT NULL,
  `kostoja` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientet`
--
ALTER TABLE `klientet`
  ADD PRIMARY KEY (`klientiid`),
  ADD UNIQUE KEY `klientiid` (`klientiid`),
  ADD UNIQUE KEY `klientiid_2` (`klientiid`);

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`kontaktuesiid`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`produktiid`);

--
-- Indexes for table `shitjet`
--
ALTER TABLE `shitjet`
  ADD KEY `produktiid` (`produktiid`),
  ADD KEY `klientiid` (`klientiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klientet`
--
ALTER TABLE `klientet`
  MODIFY `klientiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `kontaktuesiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `produktiid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shitjet`
--
ALTER TABLE `shitjet`
  ADD CONSTRAINT `shitjet_ibfk_1` FOREIGN KEY (`produktiid`) REFERENCES `produktet` (`produktiid`),
  ADD CONSTRAINT `shitjet_ibfk_2` FOREIGN KEY (`klientiid`) REFERENCES `klientet` (`klientiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
