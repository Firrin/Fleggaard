-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 30. 05 2018 kl. 10:27:57
-- Serverversion: 10.1.28-MariaDB
-- PHP-version: 7.1.10

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
-- Struktur-dump for tabellen `booking`
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
-- Data dump for tabellen `booking`
--

INSERT INTO `booking` (`ID`, `Navn`, `Nummer`, `Mail`, `Adresse`, `Hjemby`, `Post_nummer`, `Trailer`, `Udlejningssted`, `Dato`) VALUES
(80, 'Jens Jensen', 12345678, 'Jensjensen@hotmail.com', 'skolegade 2', 'HjortshÃ¸j', 8110, 2, 'Aarhus', '2018-06-01 14:00:00'),
(81, 'Christian Larsen', 22222222, 'Jensjensen@hotmail.com', 'ringgaden 22', 'Randers', 8110, 3, 'Randers', '2018-05-30 13:45:00'),
(82, 'KÃ¥re Andersen', 66666666, 'Kaareandersen@supermand.dk', 'sÃ¸ndervÃ¦gnet 14', 'Aarhus', 8000, 3, 'Aarhus', '2018-05-30 00:00:00'),
(83, 'Peter Madsen', 66666666, 'Petermadsen@raket.dk', 'ubÃ¥den 1', 'Havet', 2244, 3, 'Skanderborg', '2018-06-06 13:15:00');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Unik` (`ID`),
  ADD KEY `Name` (`Navn`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
