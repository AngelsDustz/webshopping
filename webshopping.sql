-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 19 jun 2015 om 10:30
-- Serverversie: 5.5.43-0ubuntu0.14.04.1
-- PHP-versie: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshopping`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Gegevens worden uitgevoerd voor tabel `Category`
--

INSERT INTO `Category` (`idCategory`, `Name`) VALUES
(4, 'Memory'),
(5, 'Casing'),
(6, 'Fans'),
(7, 'Controllers'),
(8, 'Graphic Cards'),
(9, 'Power Supply Unit'),
(10, 'Motherboard'),
(11, 'HDD'),
(12, 'SSD');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Payment`
--

CREATE TABLE IF NOT EXISTS `Payment` (
  `idPayment` int(11) NOT NULL AUTO_INCREMENT,
  `IBAN` varchar(18) NOT NULL,
  `Creditcard` bit(1) DEFAULT NULL,
  `User` int(11) NOT NULL,
  PRIMARY KEY (`idPayment`),
  UNIQUE KEY `IBAN_UNIQUE` (`IBAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `idProducts` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) DEFAULT NULL,
  `Code` varchar(45) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Category` int(11) DEFAULT NULL,
  `Name` varchar(45) NOT NULL,
  PRIMARY KEY (`idProducts`),
  KEY `fk_Products_1_idx` (`Category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `Products`
--

INSERT INTO `Products` (`idProducts`, `Description`, `Code`, `Price`, `Category`, `Name`) VALUES
(3, 'De Crucial 8 GB SODIMM DDR3-1600-module, ook wel bekend als CT102464BF160B, is een enkele geheugenmodule voor gebruik in laptops. Bij deze module krijg je levenslang garantie van Crucial mee.', '', 70, 4, 'CRUCIAL 8 GB SODIMM DDR3-1600'),
(4, 'De Kingston HyperX Savage is de opvolger van de HyperX Genesis. Met de opvallend rode, asymmetrische heat spreader, misstaat de module in geen enkele gaming computer. De HyperX Savage is geschikt voor Intel XMP, waardoor je eenvoudig kunt overclocken zond', '', 60, 4, 'KINGSTON HYPERX SAVAGE 4 GB DIMM DDR3-1600'),
(5, 'De Corsair Vengeance 8 GB DIMM DDR3-1600 CL 9 dual-channel geheugenkit is ontworpen voor stabiel overklokken. De aluminium hitteverspreiders zorgen, naast de verspreiding van warmte, voor een uniek uiterlijk. De Corsair Vengeance geheugenkit is beschikbaa', '', 70, 4, 'CORSAIR VENGEANCE 8 GB DIMM DDR3-1600 CL 9 RO');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Userlevel`
--

CREATE TABLE IF NOT EXISTS `Userlevel` (
  `idUserlevel` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Userlevel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUserlevel`),
  UNIQUE KEY `Description_UNIQUE` (`Description`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `Userlevel`
--

INSERT INTO `Userlevel` (`idUserlevel`, `Description`, `Name`, `Userlevel`) VALUES
(1, 'Admin level heeft rechten tot admin- en verkoop-paneel.', 'Admin', 20),
(2, 'Heeft toegang tot de verkoop-paneel maar niet het admin-paneel.', 'Verkoop Manager', 10),
(3, 'Ungeactiveerde account', 'Ungeactiveerd.', 0),
(4, 'Geactiveerd account.', 'Gebruiker', 1),
(5, 'Het machtigste account.', 'Developer', 99);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Pass` varchar(45) NOT NULL,
  `Userlevel` int(11) NOT NULL,
  `E-Mail` varchar(255) NOT NULL,
  `Paymentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_Users_Userlevel1_idx` (`Userlevel`),
  KEY `fk_Users_Payment1_idx` (`Paymentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `Users`
--

INSERT INTO `Users` (`idUser`, `Name`, `Pass`, `Userlevel`, `E-Mail`, `Paymentid`) VALUES
(1, 'dev', 'developer', 5, 'dev@dev.nl', NULL),
(3, 'user', 'user', 4, '', NULL),
(5, 'Array', 'bob', 4, '', NULL);

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `fk_Products_Category1` FOREIGN KEY (`Category`) REFERENCES `Category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `fk_Users_Payment1` FOREIGN KEY (`Paymentid`) REFERENCES `Payment` (`idPayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_Userlevel1` FOREIGN KEY (`Userlevel`) REFERENCES `Userlevel` (`idUserlevel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
