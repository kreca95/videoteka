-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 09:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Id` int(11) NOT NULL,
  `GodinaIzlaska` int(11) NOT NULL,
  `ZanrId` int(11) NOT NULL,
  `Cijena` double NOT NULL,
  `Opis` text NOT NULL,
  `Naziv` varchar(50) NOT NULL,
  `Glumci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Id`, `GodinaIzlaska`, `ZanrId`, `Cijena`, `Opis`, `Naziv`, `Glumci`) VALUES
(3, 123, 2, 12, ' asddsa asddsadsasdadsaasdsda  asddsadsasdadsaasdsda  asddsadsasdadsaasdsda  asddsadsasdadsaasdsda  asddsadsasdadsaasdsda  asddsadsasdadsaasdsda  asddsadsasdadsaasdsda dsasdadsaasdsda ', 'testsad', 'adsddsdas'),
(5, 1998, 1, 121, '                  tt tsssfgg hg hfdssdf sdffsd a ssasdadsd s aasdsad asdsadasdsdadasdasdasasdsadasd                  ', 'LOTR', 'test,aaasdsadas,dsdsaasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Id` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL,
  `Sifra` varchar(50) NOT NULL,
  `UlogaId` int(11) NOT NULL,
  `StanjeRacuna` double NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Id`, `Ime`, `Prezime`, `Sifra`, `UlogaId`, `StanjeRacuna`, `Email`) VALUES
(1, 'mobilni', 'asd', '12345', 2, 11, 'StjepanRadic@aasc.aasd'),
(2, 'Stjepan', 'Radic', '12345', 2, 821, 'stjepanradic@asdaasdsa.b'),
(3, 'ivano', 'ivic', '12345', 2, 0, 'ivano.ivic@gmailll.co'),
(4, 'ivano', 'ivic', '12345', 1, -133, 'ivano.ivic@gmailll.com'),
(5, '', '', '12345', 2, 1111099, 'admin@admin.ba');

-- --------------------------------------------------------

--
-- Table structure for table `ugovor`
--

CREATE TABLE `ugovor` (
  `Id` int(11) NOT NULL,
  `KorisnikId` int(11) NOT NULL,
  `FilmId` int(11) NOT NULL,
  `Suma` int(11) NOT NULL,
  `JeLiPreuzeto` tinyint(1) NOT NULL,
  `JeLiVraceno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ugovor`
--

INSERT INTO `ugovor` (`Id`, `KorisnikId`, `FilmId`, `Suma`, `JeLiPreuzeto`, `JeLiVraceno`) VALUES
(1, 2, 3, 12, 1, 1),
(2, 2, 3, 12, 1, 1),
(3, 2, 3, 12, 1, 1),
(4, 2, 3, 12, 1, 1),
(5, 2, 3, 12, 0, 0),
(6, 2, 3, 12, 0, 0),
(7, 2, 3, 12, 0, 0),
(8, 2, 3, 12, 1, 1),
(9, 2, 3, 12, 0, 0),
(10, 2, 3, 12, 0, 0),
(11, 2, 3, 12, 0, 0),
(12, 2, 3, 12, 0, 0),
(13, 2, 3, 12, 0, 0),
(14, 2, 3, 12, 0, 0),
(15, 2, 3, 12, 0, 0),
(16, 2, 3, 12, 0, 0),
(17, 2, 3, 12, 0, 0),
(18, 2, 3, 12, 0, 0),
(19, 2, 3, 12, 0, 0),
(20, 2, 4, 123, 0, 0),
(21, 2, 3, 12, 0, 0),
(22, 0, 3, 12, 0, 0),
(23, 4, 3, 12, 0, 0),
(24, 4, 5, 121, 0, 0),
(25, 5, 3, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`Id`, `Naziv`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`Id`, `Naziv`) VALUES
(1, 'Akcija'),
(2, 'Triler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ugovor`
--
ALTER TABLE `ugovor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ugovor`
--
ALTER TABLE `ugovor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
