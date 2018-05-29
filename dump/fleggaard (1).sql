-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 04:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fleggaard`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `Navn` varchar(50) NOT NULL,
  `Nummer` int(128) NOT NULL,
  `Mail` varchar(256) NOT NULL,
  `Adresse` varchar(256) NOT NULL,
  `Hjemby` varchar(256) NOT NULL,
  `Post_nummer` int(4) NOT NULL,
  `Trailer` int(1) NOT NULL,
  `Udlejningssted` varchar(20) NOT NULL,
  `Dato` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `Navn`, `Nummer`, `Mail`, `Adresse`, `Hjemby`, `Post_nummer`, `Trailer`, `Udlejningssted`, `Dato`) VALUES
(27, 'dfghj', 34567898, '45678@ybjk.dk', 'qdsf 23', 'huio', 8968, 0, '', '0000-00-00 00:00:00'),
(28, 'dfghj', 34567898, '45678@ybjk.dk', 'qdsf 23', 'huio', 8968, 0, '', '0000-00-00 00:00:00'),
(29, 'dfghj', 34567898, '45678@ybjk.dk', 'qdsf 23', 'huio', 8968, 0, '', '0000-00-00 00:00:00'),
(30, '', 0, '', '', '', 0, 0, '', '0000-00-00 00:00:00'),
(31, '', 0, '', '', '', 0, 0, '', '0000-00-00 00:00:00'),
(32, '', 0, '', '', '', 0, 0, '', '0000-00-00 00:00:00'),
(33, '', 0, '', '', '', 0, 0, '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Unik` (`ID`),
  ADD KEY `Name` (`Navn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
