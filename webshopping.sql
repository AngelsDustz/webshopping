-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2015 at 12:47 PM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
`idCategory` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
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
-- Table structure for table `Payment`
--

CREATE TABLE IF NOT EXISTS `Payment` (
`idPayment` int(11) NOT NULL,
  `IBAN` varchar(18) NOT NULL,
  `Creditcard` bit(1) DEFAULT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
`idProducts` int(11) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Code` varchar(45) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Category` int(11) DEFAULT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`idProducts`, `Description`, `Code`, `Price`, `Category`, `Name`) VALUES
(1, 'test', '', 0, 4, 'test'),
(2, 'Echte kaas', '', 120, 4, 'kaas');

-- --------------------------------------------------------

--
-- Table structure for table `Userlevel`
--

CREATE TABLE IF NOT EXISTS `Userlevel` (
`idUserlevel` int(11) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Userlevel` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Userlevel`
--

INSERT INTO `Userlevel` (`idUserlevel`, `Description`, `Name`, `Userlevel`) VALUES
(1, 'Admin level heeft rechten tot admin- en verkoop-paneel.', 'Admin', 20),
(2, 'Heeft toegang tot de verkoop-paneel maar niet het admin-paneel.', 'Verkoop Manager', 10),
(3, 'Ungeactiveerde account', 'Ungeactiveerd.', 0),
(4, 'Geactiveerd account.', 'Gebruiker', 1),
(5, 'Het machtigste account.', 'Developer', 99);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
`idUser` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Pass` varchar(45) NOT NULL,
  `Userlevel` int(11) NOT NULL,
  `E-Mail` varchar(255) NOT NULL,
  `Paymentid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`idUser`, `Name`, `Pass`, `Userlevel`, `E-Mail`, `Paymentid`) VALUES
(1, 'dev', 'developer', 5, 'dev@dev.nl', NULL),
(3, 'user', 'user', 4, '', NULL),
(5, 'Array', 'bob', 4, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
 ADD PRIMARY KEY (`idPayment`), ADD UNIQUE KEY `IBAN_UNIQUE` (`IBAN`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
 ADD PRIMARY KEY (`idProducts`), ADD KEY `fk_Products_1_idx` (`Category`);

--
-- Indexes for table `Userlevel`
--
ALTER TABLE `Userlevel`
 ADD PRIMARY KEY (`idUserlevel`), ADD UNIQUE KEY `Description_UNIQUE` (`Description`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`idUser`), ADD KEY `fk_Users_Userlevel1_idx` (`Userlevel`), ADD KEY `fk_Users_Payment1_idx` (`Paymentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
MODIFY `idPayment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Userlevel`
--
ALTER TABLE `Userlevel`
MODIFY `idUserlevel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
ADD CONSTRAINT `fk_Products_Category1` FOREIGN KEY (`Category`) REFERENCES `Category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
ADD CONSTRAINT `fk_Users_Payment1` FOREIGN KEY (`Paymentid`) REFERENCES `Payment` (`idPayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Users_Userlevel1` FOREIGN KEY (`Userlevel`) REFERENCES `Userlevel` (`idUserlevel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
