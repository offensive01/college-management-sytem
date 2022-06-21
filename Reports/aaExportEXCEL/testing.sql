-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2021 at 05:54 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `PostalCode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Yves', 'Goma', 'Nord-Kivu', 'Gooma', 'DRC'),
(2, 'Lionel', 'Argentina', 'Argentina', 'Gommaa', 'Argentina'),
(3, 'Nyambura', 'Kasrani', 'Nairobi', 'Gommaa', 'Kenya'),
(4, 'Ronaldo', 'Juventus', 'Turin', 'Gomaa', 'Italy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
