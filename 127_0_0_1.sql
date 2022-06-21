-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2022 at 08:39 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangalaregistration`
--
CREATE DATABASE IF NOT EXISTS `mangalaregistration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mangalaregistration`;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `admissionID` int(50) NOT NULL AUTO_INCREMENT,
  `studentID` int(50) NOT NULL,
  `staffID` int(50) NOT NULL,
  `admcreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admissionID`),
  UNIQUE KEY `studentID_2` (`studentID`),
  KEY `studentID` (`studentID`,`staffID`),
  KEY `staffID` (`staffID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admissionID`, `studentID`, `staffID`, `admcreated`) VALUES
(1, 1, 1, '2022-02-26 16:25:40'),
(2, 2, 2, '2022-02-26 16:25:40'),
(3, 3, 3, '2022-02-26 16:25:40'),
(4, 4, 4, '2022-02-26 16:25:40'),
(5, 5, 5, '2022-02-26 16:25:40'),
(6, 6, 6, '2022-02-27 16:25:06'),
(7, 7, 7, '2022-02-27 16:45:58'),
(8, 8, 8, '2022-04-02 11:56:45'),
(9, 9, 9, '2022-04-04 13:38:34'),
(10, 10, 10, '2022-04-04 13:39:08'),
(11, 11, 11, '2022-04-04 13:39:28'),
(12, 12, 12, '2022-04-04 13:45:09'),
(13, 13, 13, '2022-04-06 15:35:08'),
(14, 14, 14, '2022-04-07 15:53:10'),
(15, 15, 5, '2022-04-07 15:54:36'),
(16, 16, 16, '2022-04-07 15:54:57'),
(17, 17, 17, '2022-04-07 15:55:18'),
(18, 18, 18, '2022-04-11 13:06:25'),
(19, 19, 12, '2022-04-11 13:43:33'),
(20, 20, 19, '2022-04-11 13:44:19'),
(21, 21, 22, '2022-04-18 11:44:54'),
(22, 23, 24, '2022-04-30 13:13:38'),
(23, 25, 25, '2022-04-30 13:14:24'),
(24, 26, 26, '2022-04-30 13:15:02'),
(25, 27, 27, '2022-04-30 13:15:20'),
(26, 28, 28, '2022-04-30 13:15:34'),
(27, 29, 29, '2022-04-30 13:15:52'),
(28, 30, 30, '2022-04-30 13:16:05'),
(29, 31, 31, '2022-04-30 18:06:11'),
(30, 32, 32, '2022-04-30 18:06:57'),
(31, 33, 33, '2022-04-30 18:07:13'),
(32, 34, 34, '2022-04-30 18:07:23'),
(33, 35, 35, '2022-04-30 18:07:32'),
(34, 36, 36, '2022-04-30 18:07:43'),
(35, 81, 1, '2022-06-08 09:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int(50) NOT NULL AUTO_INCREMENT,
  `cousename` varchar(50) NOT NULL,
  `shortname` varchar(50) NOT NULL,
  `studentprogramID` int(50) NOT NULL,
  `lecturerID` int(50) NOT NULL,
  `coursecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`courseID`),
  UNIQUE KEY `cousename` (`cousename`),
  UNIQUE KEY `shortname` (`shortname`),
  KEY `studentprogramID` (`studentprogramID`,`lecturerID`),
  KEY `lecturerID` (`lecturerID`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `cousename`, `shortname`, `studentprogramID`, `lecturerID`, `coursecreated`) VALUES
(1, 'Semi-Conductor', 'CMT 201', 1, 1, '2022-02-27 19:51:19'),
(2, 'Artificial Intelligence', 'CMT 208', 1, 2, '2022-02-27 19:51:19'),
(3, 'Introduction to Database', 'CMT 109', 9, 3, '2022-02-27 19:51:19'),
(4, 'Data Communication', 'CMT 300', 1, 4, '2022-02-27 19:51:19'),
(5, 'Object Oriented Programming II', 'CMT 211', 1, 5, '2022-02-27 19:51:19'),
(6, 'Introduction To Hygiene', 'GS 105', 10, 6, '2022-04-06 15:18:26'),
(7, 'Introduction to Nuclear', 'GSC 101', 10, 7, '2022-04-06 15:25:15'),
(8, 'Micro Finance', 'CDS 300', 5, 5, '2022-04-06 15:25:15'),
(9, 'Advanced Diplomacies', 'CDS 401', 6, 4, '2022-04-06 15:30:51'),
(10, 'Advanced DataBase', 'CLS 302', 9, 1, '2022-04-06 15:30:51'),
(11, 'Networking ', 'CMT 111', 1, 1, '2022-04-07 11:42:59'),
(12, 'Micro Infections', 'NSC 010', 3, 13, '2022-04-08 10:24:06'),
(13, 'Health Community', 'NSC 201', 12, 5, '2022-04-08 10:32:23'),
(14, 'Introduction To Ethics ', 'MSC 109', 12, 6, '2022-04-08 10:34:18'),
(15, 'Introduction to Bible', 'GSC 105', 13, 13, '2022-04-08 10:38:37'),
(16, 'Library Management', 'CMT 302', 9, 1, '2022-04-08 10:39:47'),
(17, 'Piece Across Borders', 'SCP 402', 6, 15, '2022-04-08 10:45:43'),
(18, 'Development of Trees', 'CDS 208', 8, 16, '2022-04-08 10:51:51'),
(19, 'Reactions of Bombs', 'CDS 445', 7, 17, '2022-04-08 10:52:44'),
(20, 'Rural Areas', 'DSC 204', 10, 18, '2022-04-08 10:58:46'),
(21, 'Natural Gas', 'DGC 309', 10, 18, '2022-04-08 11:02:28'),
(22, 'Ocean and Lakes', 'GFD 111', 10, 20, '2022-04-08 11:03:13'),
(23, 'Mobile Application', 'CMT 312', 1, 1, '2022-04-08 11:05:38'),
(24, 'Business Ethics', 'DMG 231', 5, 10, '2022-04-08 11:07:39'),
(25, 'Communication Skills', 'GSC 100', 12, 14, '2022-04-08 11:09:28'),
(26, 'Principals of Management', 'DMG 221', 5, 13, '2022-04-08 11:10:31'),
(27, 'Warehousing And Stores Management', 'DPS 211', 14, 12, '2022-04-25 10:39:21'),
(28, 'Purchasing And Supply Management', 'DPS 212', 14, 1, '2022-04-25 10:42:45'),
(29, 'Transport Management', 'DPS 213 ', 14, 1, '2022-04-25 10:43:38'),
(30, 'Discrete Mathematics', 'MAT 111', 2, 33, '2022-04-29 21:07:57'),
(31, 'Fundamentals of Computing', 'CMT 102', 1, 2, '2022-04-29 21:08:49'),
(32, 'Physics for Computer Science I', 'CMT 100', 1, 3, '2022-04-29 21:09:26'),
(34, 'Introduction to Web Development', 'CMT 108', 1, 4, '2022-05-11 10:19:57'),
(35, 'Elements of Accounting', 'CMT 106', 2, 5, '2022-05-11 14:42:41'),
(36, 'Entrepreneurship', 'CMT 104', 12, 4, '2022-05-11 14:43:50'),
(38, 'Elements of Linear Algebra', 'MAT 104', 2, 7, '2022-05-11 14:46:28'),
(39, 'Hardware and Software Maintenance', 'CMT 101', 1, 8, '2022-05-11 14:48:24'),
(40, 'Programming Methodology', 'CMT 110', 1, 9, '2022-05-11 14:50:21'),
(41, 'Computer Networks', 'CMT 107', 1, 10, '2022-05-11 14:51:48'),
(42, 'Ethics In Procurement And Supplies', 'DPS 214 ', 14, 11, '2022-05-11 14:53:42'),
(43, 'Leadership Principles', 'DMT 211', 14, 12, '2022-05-11 14:54:01'),
(44, 'Procurement Management', 'DPS 111', 14, 12, '2022-05-11 14:54:32'),
(45, 'Introduction To Business Studies', 'DMT 111', 14, 13, '2022-05-11 14:54:57'),
(46, 'Foundations Of Accounting', 'DMT 112', 5, 13, '2022-05-11 14:55:32'),
(47, 'Introduction To Economics', 'DMT 113 ', 5, 14, '2022-05-11 14:55:59'),
(48, 'Principles Of Management', 'DMT 114', 5, 15, '2022-05-11 14:56:49'),
(49, ' Information Technology', 'GSC 123', 9, 1, '2022-05-11 14:57:25'),
(50, 'BUSINESS FINANCE', 'CFD 111', 5, 10, '2022-05-11 15:43:14'),
(51, 'PURCHASING AND SUPPLY CHAIN', 'CMD 111', 5, 11, '2022-05-11 15:43:34'),
(52, 'INTERMEDIATE MICRO-ECONOMICS', 'CEC 111', 5, 12, '2022-05-11 15:43:59'),
(53, 'ACCOUNTING FOR ASSETS', 'CAD 111', 5, 13, '2022-05-11 15:44:21'),
(54, 'BUSINESS LAW II', 'CMD 112', 5, 14, '2022-05-11 15:44:42'),
(55, 'BUSINESS INFORMATION SOFTWARE', 'CID 111', 5, 14, '2022-05-11 15:45:01'),
(56, 'BUSINESS STATISTICS', 'CID 073', 5, 14, '2022-05-11 15:45:22'),
(57, 'BUSINESS COMMUNICATION', 'CMD 073', 5, 15, '2022-05-11 15:45:50'),
(58, 'PRINCIPLES OF MARKETING', 'CKD 071', 5, 16, '2022-05-11 15:46:20'),
(59, 'INTRODUCTION TO MACROECONOMICS', 'CED 072', 5, 16, '2022-05-11 15:47:15'),
(60, 'FINANCIAL ACCOUNTING II', 'CAD 072', 5, 16, '2022-05-11 16:16:10'),
(61, 'BUSINESS LAW I', 'CMD 074', 5, 16, '2022-05-11 16:16:39'),
(62, 'BEHAVIOURAL SCIENCE FOR BUSINESS', 'CMD 081', 5, 17, '2022-05-11 16:39:43'),
(63, 'INTERMEDIATE BUSINESS MATHEMATICS', 'CID 081', 5, 17, '2022-05-11 16:40:11'),
(64, 'HUMAN RESOURCE POLICY AND PRACTICE', 'CHD 081', 5, 18, '2022-05-11 16:40:44'),
(65, 'INTERMEDIATE ACCOUNTING', 'CAD 081', 5, 19, '2022-05-11 16:41:03'),
(66, 'ACTURIAL AND FINANCIAL MATHEMATICS', 'CFD 081', 5, 20, '2022-05-11 16:41:28'),
(67, 'ORGANISATIONAL ANALYSIS', 'CMD 082', 5, 21, '2022-05-11 16:41:50'),
(68, 'MANAGERIAL STATISTICS', 'BMT 411', 5, 22, '2022-05-11 16:42:18'),
(69, 'RETAIL MANAGEMENT', 'MKT 421', 5, 23, '2022-05-11 16:42:45'),
(70, 'ADVERTISING', 'MKT 423', 5, 25, '2022-05-11 16:43:14'),
(72, 'GLOBAL HUMAN RESOURCE MANAGEMENT', 'HRM 412', 5, 26, '2022-05-11 16:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

DROP TABLE IF EXISTS `duration`;
CREATE TABLE IF NOT EXISTS `duration` (
  `durationID` int(50) NOT NULL AUTO_INCREMENT,
  `durname` varchar(50) NOT NULL,
  `durdescription` varchar(50) NOT NULL,
  `duration` int(50) NOT NULL,
  `durcreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`durationID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`durationID`, `durname`, `durdescription`, `duration`, `durcreated`) VALUES
(1, 'Diploma', '3 Faculty of Science', 3, '2022-02-05 16:41:15'),
(2, 'Degree', '4 Faculty of Science', 4, '2022-02-05 16:41:15'),
(3, 'Degree', '4 Law', 4, '2022-02-27 17:36:58'),
(4, 'Diploma', '2 Law', 2, '2022-02-27 17:36:58'),
(5, 'Degree', '4 Faculty of Commerce', 4, '2022-02-27 17:36:58'),
(6, 'Degree', '4 Faculty Of Art', 4, '2022-02-27 17:36:58'),
(7, 'Degree', '4 Faculty of Education', 4, '2022-02-27 17:36:58'),
(8, 'Diploma', 'Faculty of Education', 2, '2022-02-27 20:19:13'),
(9, 'Diploma', 'Faculty of Commerce', 2, '2022-02-27 20:21:37'),
(10, 'Degree', '4 Faculty of Language', 4, '2022-02-27 20:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `feeID` int(50) NOT NULL AUTO_INCREMENT,
  `admissionID` int(50) NOT NULL,
  `Amount` int(10) NOT NULL,
  `feedescription` varchar(50) NOT NULL,
  `fcreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feeID`),
  KEY `admissionID` (`admissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`feeID`, `admissionID`, `Amount`, `feedescription`, `fcreated`) VALUES
(1, 1, 10, 'Admission Fee', '2022-04-05 10:29:02'),
(2, 2, 10, 'Admission Fee', '2022-04-05 10:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturerID` int(50) NOT NULL AUTO_INCREMENT,
  `staffID` int(50) NOT NULL,
  `studentprogramID` int(50) NOT NULL,
  `leccreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`lecturerID`),
  KEY `staffID` (`staffID`),
  KEY `programID` (`studentprogramID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturerID`, `staffID`, `studentprogramID`, `leccreated`) VALUES
(1, 1, 1, '2022-02-27 19:47:30'),
(2, 2, 2, '2022-02-27 19:47:30'),
(3, 3, 3, '2022-02-27 19:47:30'),
(4, 4, 4, '2022-02-27 19:47:30'),
(5, 5, 5, '2022-02-27 19:47:30'),
(6, 6, 6, '2022-04-06 10:31:46'),
(7, 7, 9, '2022-04-06 15:21:56'),
(8, 8, 10, '2022-04-07 13:11:15'),
(9, 9, 4, '2022-04-07 13:11:32'),
(10, 25, 4, '2022-04-07 13:13:22'),
(11, 10, 6, '2022-04-07 13:22:49'),
(12, 11, 7, '2022-04-07 13:32:05'),
(13, 12, 1, '2022-04-07 13:32:25'),
(14, 13, 5, '2022-04-07 13:32:36'),
(15, 14, 4, '2022-04-07 13:33:47'),
(16, 15, 8, '2022-04-07 13:34:00'),
(17, 16, 1, '2022-04-07 13:34:43'),
(18, 17, 9, '2022-04-07 13:34:58'),
(19, 18, 2, '2022-04-07 13:35:09'),
(20, 19, 4, '2022-04-07 13:35:25'),
(21, 20, 6, '2022-04-07 13:40:43'),
(22, 21, 8, '2022-04-07 13:41:38'),
(23, 22, 6, '2022-04-07 15:45:04'),
(24, 24, 10, '2022-04-07 15:48:42'),
(25, 25, 1, '2022-04-07 15:48:54'),
(26, 26, 4, '2022-04-07 15:50:02'),
(27, 27, 9, '2022-04-07 15:50:39'),
(28, 28, 10, '2022-04-07 15:51:06'),
(29, 29, 13, '2022-04-09 12:32:37'),
(30, 30, 4, '2022-04-09 12:33:09'),
(31, 31, 4, '2022-04-22 10:20:06'),
(32, 32, 9, '2022-04-22 10:20:27'),
(33, 33, 3, '2022-04-22 10:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `logsID` int(50) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `logscreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`logsID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logsID`, `id`, `activity`, `logscreated`) VALUES
(1, 1, 'LoggedIn as an Admin', '2022-04-05 10:27:47'),
(2, 2, 'Deleted an User', '2022-04-05 10:27:47'),
(3, 9, 'deleted a user', '2022-06-21 19:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `nextkin`
--

DROP TABLE IF EXISTS `nextkin`;
CREATE TABLE IF NOT EXISTS `nextkin` (
  `nextkinID` int(50) NOT NULL AUTO_INCREMENT,
  `nationalID` varchar(50) NOT NULL,
  `studentID` int(50) NOT NULL,
  `nfirstname` varchar(50) NOT NULL,
  `nlastname` varchar(50) NOT NULL,
  `nphone` varchar(50) NOT NULL,
  `naddress` varchar(50) NOT NULL,
  `ngender` varchar(50) NOT NULL,
  `nrelation` varchar(50) NOT NULL,
  `nproffession` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nextkinID`),
  UNIQUE KEY `nationalID` (`nationalID`),
  UNIQUE KEY `nphone` (`nphone`),
  KEY `studentID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nextkin`
--

INSERT INTO `nextkin` (`nextkinID`, `nationalID`, `studentID`, `nfirstname`, `nlastname`, `nphone`, `naddress`, `ngender`, `nrelation`, `nproffession`, `created`) VALUES
(1, '001', 1, 'John', 'Magufuli', '+243 999 888 000', 'Tanzanie, Dodoma', 'Male', 'Friend', 'President', '2022-02-05 16:33:21'),
(2, '002', 2, 'Joseph', 'Kabila', '+243 999 888 001', 'Congo, Kinshasa', 'Male', 'Father', 'President', '2022-02-05 16:33:21'),
(3, '003', 3, 'Daniel', 'Sasou', '+243 999 888 002', 'Congo, Brazza', 'Female', 'Brother', 'BusinessMan', '2022-02-05 16:33:21'),
(4, '004', 4, 'Teodor', 'Obiang', '+243 999 888 003', 'Guinea, Conakry', 'Male', 'Brother', 'Economist', '2022-02-05 16:33:21'),
(5, '005', 5, 'Vladimr', 'Poutine', '+243 999 888 004', 'Russia, Moscow', 'Male', 'Law', 'Military', '2022-02-05 16:33:21'),
(6, '006', 6, 'Joe', 'Biden', '+243 999 888 005', 'US, Wanshington', 'Male', 'Father', 'Information', '2022-04-04 16:33:19'),
(7, '007', 7, 'Donald', 'Trump', '+243 999 888 006', 'Rwanda, Kigali', 'Male', 'Brother', 'Information', '2022-04-04 16:44:37'),
(8, '008', 8, 'Uhuru', 'Kenyatta', '+243 999 888 007', 'Nairobi, Kenya', 'Male', 'Mother', 'Analyst', '2022-04-04 16:59:05'),
(9, '009', 9, 'Yoweri', 'Museveni', '+243 999 888 008', 'Uganda, Kampala', 'Male', 'Sibling', 'Compatibilist', '2022-04-04 18:26:32'),
(10, '010', 10, 'Erdogan', 'Recep', '+243 999 888 009', 'Turkey, Baku', 'Male', 'Brother', 'Entrepreneur', '2022-04-04 18:28:16'),
(11, '011', 11, 'Jean', 'Beya', '+243 999 888 010', 'Congo, DRC', 'Male', 'Father', 'Politiacian', '2022-04-09 13:03:56'),
(12, '012', 12, 'Florian', 'Chebeya', '	+243 999 888 011', 'Quebec, Canada', 'Female', 'Mother', 'Activist', '2022-04-09 15:44:06'),
(14, '013', 13, 'Laurant', 'Kabila', '	+243 999 888 012', 'Brazza, Congo', 'Male', 'Friend', 'Politician', '2022-04-09 15:45:15'),
(15, '014', 14, 'Hamed', 'Bakayoko', '	+243 999 888 013', 'Cameroun, Doula', 'Female', 'Law', 'Assistant ', '2022-04-09 15:47:23'),
(16, '015', 15, 'Francois', 'Mitterand', '	+243 999 888 014', 'Lille, France', 'Female', 'Brother', 'Business Man', '2022-04-09 15:49:10'),
(17, '016', 16, 'Etienne', 'Tshisekedi', '	+243 999 888 015', 'Kisangani, DRC', 'Female', 'Sister', 'Deputy', '2022-04-09 15:50:24'),
(19, '017', 17, 'Emery', 'Patrice', '+243 999 888 017', 'Congo, Kinshasa', 'Male', 'Father', 'Politician', '2022-04-22 10:33:54'),
(20, '018', 18, 'Joseph', 'Kasavubu', '+243 999 888 018', 'Congo, Brazza', 'Female', 'Mother', 'Businessman', '2022-04-22 10:35:15'),
(21, '019', 19, 'Theodore', 'Obiang', '+243 999 888 019', 'Guinee, Accra', 'Female', 'Sister', 'President', '2022-04-22 10:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `schoolprogram`
--

DROP TABLE IF EXISTS `schoolprogram`;
CREATE TABLE IF NOT EXISTS `schoolprogram` (
  `SchoolprogramID` int(50) NOT NULL AUTO_INCREMENT,
  `progname` varchar(50) NOT NULL,
  `durationID` int(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`SchoolprogramID`),
  KEY `durationID` (`durationID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolprogram`
--

INSERT INTO `schoolprogram` (`SchoolprogramID`, `progname`, `durationID`, `created`) VALUES
(1, 'Faculty Of Science', 1, '2022-02-05 16:44:48'),
(2, 'Faculty Of Science', 2, '2022-02-05 16:44:48'),
(3, 'Faculty of Commerce', 5, '2022-02-27 17:40:32'),
(4, 'Faculty of Law', 3, '2022-02-27 17:40:32'),
(5, 'Faculty Of Art', 6, '2022-02-27 17:41:39'),
(6, 'Faculty of Education', 7, '2022-02-27 17:41:39'),
(7, 'Faculty Of Agriculture', 2, '2022-04-05 10:46:08'),
(8, 'Faculty Of Art', 2, '2022-04-06 11:49:57'),
(9, 'Faculty Of Social Science', 2, '2022-04-06 11:49:57'),
(10, 'School Of Law', 2, '2022-04-07 13:23:47'),
(11, 'Religious', 1, '2022-04-08 10:35:16'),
(12, 'Faculty Of Procurement', 2, '2022-04-25 10:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(50) NOT NULL AUTO_INCREMENT,
  `snationalityID` varchar(50) NOT NULL,
  `sfirstname` varchar(50) NOT NULL,
  `slastname` varchar(50) NOT NULL,
  `sdob` date NOT NULL,
  `sstatus` varchar(50) NOT NULL,
  `sphone` varchar(50) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `seduclevel` varchar(50) NOT NULL,
  `sgender` varchar(50) NOT NULL,
  `stitle` varchar(50) NOT NULL,
  `snationality` varchar(50) NOT NULL,
  `screated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`staffID`),
  UNIQUE KEY `snationalityID` (`snationalityID`),
  UNIQUE KEY `sphone` (`sphone`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `snationalityID`, `sfirstname`, `slastname`, `sdob`, `sstatus`, `sphone`, `saddress`, `seduclevel`, `sgender`, `stitle`, `snationality`, `screated`) VALUES
(1, '001', 'Lionel', 'Messi', '1988-02-02', 'Married', '+243 991 898 893', 'Paris, France', 'Secondaire', 'Male', 'Director', 'Argentina', '2022-02-05 12:49:50'),
(2, '002', 'Dimitry', 'Payet', '2022-02-01', 'Married', '+243 991 898 894', 'France, Marseille', 'Secondaire', 'Male', 'Assistant', 'French', '2022-02-05 13:31:43'),
(3, '003', 'Florian', 'Thauvin', '2022-02-01', 'Married', '+243 991 898 895', 'France, Marseille', 'Secondaire', 'Female', 'Technician', 'French', '2022-02-05 13:31:43'),
(4, '004', 'Ousman', 'Dembele', '2022-02-26', 'Single', '+243 991 898 896', 'Barcelona, Spain', 'University', 'Female', 'Assistant', 'French', '2022-02-05 13:42:42'),
(5, '005', 'Nelson', 'Semedo', '2021-10-12', 'Married', '+243 991 898 897 ', 'Wolves, UK', 'University', 'Female', 'Cleaner', 'Portugeuse', '2022-02-05 13:42:42'),
(6, '006', 'Stargen', 'Mark', '2021-09-05', 'Married', '+243 991 898 898', 'Barcelona, Spain', 'Primaire', 'Male', 'Director', 'Germany', '2022-02-05 14:21:41'),
(7, '007', 'Jordi', 'Alba', '2021-02-08', 'Married', '+243 991 898 899', 'Barcelona, Spain', 'Primaire', 'Male', 'Assistant', 'Spanish', '2022-02-05 14:21:41'),
(8, '008', 'Sadio', 'Mane', '2021-06-07', 'Married', '+243 991 898 810', 'Liverpool, UK', 'Primaire', 'Male', 'Analyst', 'Senegalese', '2022-02-05 14:21:41'),
(9, '009', 'Ivan', 'Rakitic', '2021-05-20', 'Married', '+243 991 898 811', 'Seville, Spain', 'Primaire', 'Female', 'Cleaner', 'Croatian', '2022-02-05 14:21:41'),
(10, '010', 'Artur', 'Melo', '2021-03-24', 'Single', '+243 991 898 812', 'Ibiza, Spain', 'Primaire', 'Female', 'Electrician', 'Brazilian', '2022-02-05 14:21:41'),
(11, '011', 'Sergio', 'Busquets', '2020-08-01', 'Married', '+243 991 898 813', 'Barcelona, Spain', 'Graduated', 'Male', 'Director', 'Spanish', '2022-02-05 14:33:34'),
(12, '012', 'Ansu', 'Fati', '2022-02-01', 'Single', '+243 991 898 814', 'Barcelona, Spain', 'Graduated', 'Male', 'Assistant', 'Spanish', '2022-02-05 14:33:34'),
(13, '013', 'Isco', 'Alacran', '2021-02-28', 'Married', '+243 991 898 815', 'Madrid, Spain', 'Graduated', 'Male', 'Technician', 'Spanish', '2022-02-05 14:33:34'),
(14, '014', 'Karim', 'Benzema', '2021-09-27', 'Married', '+243 991 898 816', 'Madrid, Spain', 'Graduated', 'Male', 'HoD', 'French', '2022-02-05 14:33:34'),
(15, '015', 'Lucas', 'Vasquets', '2020-06-23', 'Married', '+243 991 898 817', 'Madrid, Spain', 'Graduated', 'Female', 'Cleaner', 'Spanish', '2022-02-05 14:33:34'),
(16, '016', 'Eden', 'Hazard', '2021-04-04', 'Married', '+243 991 898 818', 'London, UK', 'University', 'Female', 'Admin', 'Belgium', '2022-02-05 14:50:43'),
(17, '017', 'Presnel', 'Kipembe', '2020-11-30', 'Married', '+243 991 898 819', 'Paris, France', 'University', 'Male', 'Assistant', 'French', '2022-02-05 14:50:43'),
(18, '018', 'Thiago', 'Silva', '2021-04-19', 'Married', '+243 991 698 820', 'London, UK', 'University', 'Male', 'DVC', 'Brazilian', '2022-02-05 14:50:43'),
(19, '019', 'Idrissa', 'Gueye', '2021-05-17', 'Married', '+243 991 898 820', 'Paris, France', 'University', 'Male', 'Science', 'Senegalese', '2022-02-05 14:50:43'),
(20, '020', 'Angel', 'Di_Maria', '2021-05-23', 'Married', '+243 991 898 821', 'Paris, France', 'University', 'Male', 'Assistant', 'Argentina', '2022-02-05 14:50:43'),
(21, '021', 'Paul', 'Mpoku', '2022-02-27', 'Married', '+243 991 898 822', 'Belgium, Liege', 'University', 'Male', 'Assistant', 'Congolese', '2022-03-31 12:46:08'),
(22, '022', 'Ryhad', 'Marhez', '2022-04-06', 'Maried', '+243 991 898 823', 'Algeria, ALger', 'PhD', 'Male', 'Assistant', 'Algerian', '2022-04-04 12:46:09'),
(24, '023', 'Joao', 'Felix', '2022-03-31', 'Single', '+243 991 898 824', 'Madrid, Spain', 'Primary', 'Female', 'Officer', 'Spanish', '2022-04-04 12:52:15'),
(25, '024', 'Luca', 'Modric', '2021-10-19', 'Married', '+243 991 898 825', 'Madrid, Spain', 'PhD', 'Male', 'Analyst', 'Croatian', '2022-04-07 13:13:05'),
(26, '025', 'Earling', 'Haaland', '2020-09-01', 'Single', '+243 991 898 826', 'Norwege, Norvege', 'Graduated', 'Male', 'Officer', 'Norwegian', '2022-04-07 14:54:34'),
(27, '026', 'Jerome', 'Boateng', '2021-02-09', 'Single', '+243 991 898 827', 'Munchen, Germany', 'Undefined', 'Female', 'Dean', 'Germania', '2022-04-07 14:57:04'),
(28, '027', 'Kingsley', 'Coman', '2022-01-11', 'Single', '+243 991 898 828', 'Monaco, France', 'Primary', 'Female', 'Technician', 'French', '2022-04-07 15:00:12'),
(29, '028', 'Kevin', 'De Brune', '2020-12-30', 'Married', '+243 991 898 829', 'Manchester, UK', 'Graduated', 'Male', 'Assistant', 'Belgium', '2022-04-07 15:05:51'),
(30, '029', 'Robert', 'Lewandowsky ', '2020-05-05', 'Married', '+243 991 898 830', 'Germany, Munchen', 'PhD', 'Male', 'Director', 'Polonia', '2022-04-07 15:08:32'),
(31, '030', 'Bernado', 'Silva', '2020-10-20', 'Married', '+243 991 898 831', 'Manchester, UK', 'Graduated', 'Female', 'Technician', 'Portuguese', '2022-04-07 15:10:11'),
(32, '031', 'Gabriel', 'Jesus', '2020-12-01', 'Single', '+243 991 898 832', 'Liverpool, UK', 'Diploma', 'Female', 'Cleaner', 'Brazilian', '2022-04-07 15:11:50'),
(33, '032', 'Kun', 'Aguero', '2022-04-20', 'Married', '+243 991 898 833', 'Leicester, UK', 'Masters', 'Male', 'Chancellor', 'Argentinian ', '2022-04-07 15:13:20'),
(34, '033', 'Wan', 'Bissaka', '2020-05-07', 'Single', '+243 991 898 834', 'Georgina, USA ', 'Primary', 'Female', 'Dean', 'Congolese', '2022-04-07 15:14:47'),
(35, '034', 'Paul', 'Pogba', '2019-07-28', 'Married', '+243 991 898 835', 'Virginia, USA', 'Masters', 'Male', 'Analyst', 'French', '2022-04-07 15:16:27'),
(36, '035', 'Marcus', 'Rashford', '2021-03-30', 'Single', '+243 991 898 836', 'Manchester, UK ', 'Masters', 'Male', 'Cleaner', 'British', '2022-04-07 15:18:01'),
(37, '036', 'Mohamed', 'Salah', '2021-08-03', 'Married', '+243 991 898 837', 'Iceland, Kingdom', 'Masters', 'Male', 'Technician', 'Egyptian', '2022-04-07 15:20:35'),
(38, '037', 'Sadio', 'Mane', '2021-07-05', 'Single', '+243 991 898 838', 'Senegal, Dakar', 'Graduated', 'Male', 'Director', 'Senegalese', '2022-04-07 15:23:27'),
(39, '038', 'Lucas', 'Mora', '2022-03-31', 'Married', '+243 991 898 839', 'London, UK', 'Primary', 'Male', 'Technician', 'Brazilian', '2022-04-07 15:24:43'),
(40, '039', 'Paulo', 'Dybala', '2021-06-29', 'Single', '+243 991 898 840', 'Russia, Petersburg', 'University', 'Male', 'Assistant', 'Argentina', '2022-04-07 15:26:03'),
(41, '040', 'Adrian', 'Rabiot', '2020-12-30', 'Married', '+243 991 898 841', 'Lens, France', 'Primary', 'Female', 'Dean', 'French', '2022-04-07 15:27:31'),
(42, '041', 'Douglas', 'Costa', '2021-09-27', 'Single', '+243 991 898 842', 'Gabon, Guinea', 'Primary', 'Female', 'Cleaner', 'Moroccan', '2022-04-07 15:29:09'),
(43, '042', 'Zlatan', 'Ibrahimovic', '2021-03-30', 'Married', '+243 991 898 843', 'Milan, Italy', 'PhD', 'Male', 'Admin', 'Sweden', '2022-04-07 15:30:55'),
(44, '043', 'Samuel', 'Etoo', '2021-08-03', 'Married', '	+243 991 898 844', 'Yaunde, Cameroon', 'University', 'Male', 'Science', 'Cameroonese', '2022-04-07 15:33:00'),
(45, '044', 'Didier', 'Drogba', '2022-03-28', 'Married', '+243 991 858 844', 'Ivory Coast, Dawa', 'University', 'Male', 'Electrician', 'Costarico', '2022-04-07 15:34:09'),
(46, '045', 'Tresor', 'Mputu', '2020-11-03', 'Married', '+243 991 898 845', 'Lubumbashi, DRC', 'Graduated', 'Male', 'Technician', 'Congolese', '2022-04-07 15:35:28'),
(47, '046', 'Dries', 'Mertens', '2021-08-03', 'Single', '+243 991 899 846', 'Lazio, Italy', 'Graduated', 'Male', 'Assistant', 'Argentina', '2022-04-07 15:37:11'),
(48, '047', 'Lorenzo', 'Insigne', '2020-09-30', 'Married', '+243 991 899 847', 'Roma, Italy', 'Graduated', 'Male', 'Assistant', 'Belgium', '2022-04-07 15:40:07'),
(49, '048', 'Corrente', 'Tolisso', '2021-03-02', 'Single', '+243 991 899 848', 'Alges, France', 'Primary', 'Female', 'DVC', 'French', '2022-04-07 15:42:12'),
(50, '049', 'Manuel', 'Neuer', '2000-12-31', 'Married', '+243 991 899 849', 'Germany, Munichen', 'PhD', 'Female', 'Analyst', 'f', '2022-04-19 10:26:04'),
(51, '050', 'Osvaldo', 'Ardiles', '1989-10-12', 'Married', '+243 991 899 850', 'Argentine, Buenos', 'Primary', 'Female', 'Assistant', 'Argentina', '2022-04-19 10:27:56'),
(52, '051', 'Diego', 'Forlan', '1997-01-04', 'Married', '+243 991 899 851', 'Urguaer, Urge', 'Graduated', 'Female', 'Director', 'Urgue', '2022-04-19 10:30:39'),
(53, '052', 'Igor', 'Belanov', '1988-02-22', 'Divorced', '+243 991 899 852', 'Moscow, Russia', 'Primary', 'Female', 'Dean', 'Russian', '2022-04-19 10:32:04'),
(54, '053', 'Rabah', 'Madjer', '1899-05-16', 'Compliacted', '+243 991 899 853', 'Algeria, Alger', 'Secondary', 'Male', 'Cleaner', 'Algerian', '2022-04-19 10:33:35'),
(55, '054', 'Didier', 'Deschamps', '1978-05-18', 'Married', '+243 991 899 854', 'France, Marseille', 'Masters', 'Male', 'Science', 'French', '2022-04-19 10:35:30'),
(56, '055', 'Salif', 'Keita', '1877-05-15', 'Single', '+243 991 899 855', 'Mali, Mali', 'Primary', 'Female', 'Analyst', 'Malian', '2022-04-19 10:45:46'),
(58, '056', 'Arjen', 'Robben', '2009-03-01', 'Married', '+243 991 899 856', 'Neerland', 'Graduated', 'Female', 'Technician', 'Nielander', '2022-04-19 10:47:32'),
(59, '057', 'Yaya', 'Toure', '1999-12-04', 'Married', '+243 991 899 857', 'Ivory coast', 'University', 'Female', 'Analyst', 'Ivorien', '2022-04-19 10:49:04'),
(60, '058', 'Roger', 'Milla', '2021-09-18', 'Married', '+243 991 899 858', 'Cameroun, Dawa', 'Primary', 'Female', 'Cleaner', 'Cameroonian', '2022-04-19 10:50:58'),
(61, '059', 'David', 'Beckham', '1998-08-23', 'Married', '+243 991 899 859', 'London, UK', 'Masters', 'Male', 'Director', 'British', '2022-04-19 10:51:58'),
(62, '060', 'Enzo', 'Francescoli', '2009-08-22', 'Single', '+243 991 899 860', 'Lille, France', 'Primary', 'Female', 'Officer', 'French', '2022-04-19 10:53:15'),
(63, '061', 'Steven', 'Gerrard', '1989-09-30', 'Married', '+243 991 899 861', 'Liverpool, UK', 'Graduated', 'Male', 'Technician', 'British', '2022-04-19 10:55:12'),
(64, '062', 'Franck', 'Ribery', '1998-01-21', 'Married', '+243 991 899 862', 'Lyon, France', 'Diploma', 'Male', 'Technician', 'French', '2022-04-19 10:56:31'),
(65, '063', 'Iker', 'Casillas', '2001-01-01', 'Married', '+243 991 899 863', 'Madrid, Spain', 'Masters', 'Female', 'Analyst', 'Spanish', '2022-04-19 10:57:56'),
(66, '064', 'Patrick', 'Vieira', '1922-10-21', 'Married', '+243 991 899 864', 'France, Nantes', 'University', 'Male', 'Dean', 'French', '2022-04-22 10:09:30'),
(68, '065', 'Ronald', 'Koeman', '1988-09-04', 'Married', '+243 991 899 865', 'Netherlands, AJAX ', 'Primary', 'Female', 'HoD', 'Netherlands', '2022-04-22 10:11:13'),
(69, '066', 'Francesco', 'Totti', '1977-06-11', 'Married', '+243 991 899 866', 'Roma, Italy', 'Graduated', 'Male', 'Chancellor', 'Italian', '2022-04-22 10:12:03'),
(70, '067', 'Gabriel', 'Batistua', '1899-01-05', 'Married', '+243 991 899 867', 'Argentina, Merose', 'University', 'Female', 'Analyst', 'Argentina', '2022-04-22 10:13:00'),
(71, '068', 'David', 'Jinola', '1980-03-05', 'Married', '+243 991 899 868', 'France, Metz', 'Masters', 'Male', 'Assistant', 'French', '2022-04-22 10:14:08'),
(72, '069', 'Carles', 'Puyol', '1980-09-07', 'Married', '+243 991 899 869', 'Barcelona, Spain', 'Masters', 'Male', 'Director', 'Spanish', '2022-04-22 10:15:15'),
(73, '070', 'Didier', 'Drogba', '1988-09-20', 'Married', '+243 991 899 870', 'Ivory-Coast', 'Graduated', 'Male', 'Analyst', 'Ivory-Coast', '2022-04-22 10:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentID` int(50) NOT NULL AUTO_INCREMENT,
  `nationalID` varchar(50) NOT NULL,
  `firsname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentID`),
  UNIQUE KEY `nationalID` (`nationalID`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `nationalID`, `firsname`, `lastname`, `dob`, `status`, `phone`, `address`, `gender`, `nationality`, `created`) VALUES
(1, '001', 'Didi', 'Stone', '2021-03-31', 'Complicated', '+243 999 888 777', 'Paris, France', 'Female', 'Congolese', '2022-02-05 15:05:57'),
(2, '002', 'Del Pirlo', 'Murinho', '2020-01-01', 'Single', '+243 999 888 111', 'Roma, Italy', 'Male', 'Congolese', '2022-02-05 15:05:57'),
(3, '003', 'Saint', 'James', '2021-03-01', 'Single', '+243 999 888 222', 'Amsterdam, Ajax', 'Male', 'Netherlands ', '2022-02-05 15:05:57'),
(4, '004', 'David', 'Nsala', '2021-04-12', 'Married', '+243 999 888 223', 'Kinshasa, Drc', 'Male', 'Congolese', '2022-02-05 15:05:57'),
(5, '005', 'Geulord', 'Makundi', '2021-07-19', 'Single', '+243 999 888 333', 'Goma, Drc', 'Male', 'Congolese', '2022-02-05 15:05:57'),
(6, '006', 'Zakari', 'Bababasi', '2022-02-01', 'Married', '+243 999 888 331', 'Togo, Lome', 'Male', 'Congolese', '2022-02-09 12:58:31'),
(7, '007', 'Chancel', 'Bemba', '2022-02-02', 'Married', '+243 999 888 332', 'Istanbul, Turkey', 'Male', 'Turkish', '2022-02-09 12:58:31'),
(8, '008', 'Sandra', 'Kazadi', '2021-11-09', 'Complicated', '+243 999 888 334', 'Kigali, Rwanda', 'Female', 'Rwandese', '2022-02-09 12:58:31'),
(9, '009', 'Roda', 'Nkuba', '2021-09-13', 'Single', '+243 999 888 335', 'Luanda, Angola', 'Female', 'Angolese', '2022-02-09 12:58:31'),
(10, '010', 'Gael', 'Busa', '2021-06-14', 'Single', '+243 999 888 336', 'Mali, Bamako', 'Male', 'Malien', '2022-02-09 12:58:31'),
(11, '011', 'Theodore', 'Obiang', '2022-02-02', 'Married', '+243 999 888 337', 'Benin, Cotonu', 'Male', 'Gunian', '2022-02-09 13:08:01'),
(12, '012', 'Toutou', 'Roba', '2021-10-03', 'Single', '+243 999 888 338', 'Guinee, Bisau', 'Male', 'Gunian ', '2022-02-09 13:08:01'),
(13, '013', 'Wivine', 'Moleka', '2022-02-24', 'Complicated', '+243 999 888 339', 'Jerusalem, Israel', 'Female', 'Israellian', '2022-02-09 13:08:01'),
(14, '014', 'Patrick', 'Bolonia', '2022-02-26', 'Single', '+243 999 888 340', 'Harare, Zimba', 'Male', 'Zimbabien', '2022-02-09 13:08:01'),
(15, '015', 'David', 'Okito', '2022-02-23', 'Married', '+243 999 888 341', 'Tanzanie, Dodo', 'Male', 'Tanzanian', '2022-02-09 13:08:01'),
(16, '016', 'Muchina', 'Murunga', '2022-02-05', 'Single', '+243 999 888 342', 'Togo, Lome', 'Male', 'Rwandese', '2022-02-25 15:19:21'),
(17, '017', 'Qetsia', 'Kyanga', '2022-03-26', 'Single', '+243 999 888 343', 'Goma, DRC', 'Female', 'Congolese', '2022-03-15 10:16:08'),
(18, '018', 'Rachel', 'Kambale', '2022-03-06', 'Married', '+243 999 888 344', 'Morocco, Rabat', 'Female', 'Egyptian ', '2022-03-24 15:49:15'),
(19, '019', 'Wabiwa', 'Kavira', '2022-03-01', 'Single', '+243 999 888 345', 'Pekin, China', 'Female', 'Congolese', '2022-03-24 15:50:37'),
(20, '020', 'Modogol', 'Botokol', '1989-08-02', 'Married', '+243 999 888 346', 'Russia, Moscow', 'Male', 'Russian', '2022-03-24 16:11:57'),
(21, '021', 'Denis', 'Lessie', '1970-03-30', 'Complicated', '+243 999 888 347', 'Morocco, Marrakech', 'Male', 'Congolese', '2022-03-30 15:43:41'),
(23, '022', 'Patrick', 'Muyaya', '2022-04-20', 'Married', '+243 991 898 823', 'Kinshasa, DRC', 'Male', 'Congoles', '2022-04-04 12:39:40'),
(25, '023', 'Malick', 'Towe', '2022-03-27', 'Married', '+243 991 898 824', 'Mali, Bamako', 'Female', 'Malian', '2022-04-04 13:30:54'),
(26, '024', 'Olivia', 'Song', '2021-11-01', 'Complicated', '+243 991 898 825', 'Cameroon, Yaunde', 'Female', 'Cameroonian', '2022-04-04 13:50:58'),
(27, '025', 'Christian', 'Lusakweno', '2022-04-13', 'Married', '+243 991 898 826', 'Saint Petersburg', 'Male', 'Russian', '2022-04-05 10:10:14'),
(28, '026', 'David', 'Nsala', '2022-03-31', 'Married', '+243 991 898 827', 'Morocco, Marrakech', 'Female', 'Congolese', '2022-04-05 10:21:29'),
(29, '027', 'Dedje', 'Mbiyamba', '2022-03-27', 'Single', '+243 991 898 828', 'Zimbabwe, Harare', 'Female', 'Moroccain', '2022-04-05 10:34:11'),
(30, '028', 'Celeo', 'Muyoki', '2022-03-27', 'Divorced', '+243 991 898 829', 'Dodoma, Tanzania', 'Male', 'Tanzanian', '2022-04-05 10:37:41'),
(31, '029', 'Didace', 'Pembe', '2022-03-27', 'Compliacted', '+243 991 898 830', 'Zambia, Zambia', 'Male', 'Zambian', '2022-04-05 10:40:26'),
(32, '030', 'Samuel', 'Eskadela', '2021-08-31', 'Single', '+243 991 898 831', 'Finland, Helskin ', 'Male', 'Finlandia', '2022-04-07 12:04:16'),
(33, '031', 'Ibrahim', 'Shako', '2020-12-01', 'Divorced', '+243 991 898 832', 'Lisbon, Portugal', 'Female', 'Portuguese ', '2022-04-07 12:05:45'),
(34, '032', 'Dieudonne', 'Kanyama', '2020-12-01', 'Married', '+243 991 899 832', 'Florence, Italy', 'Male', 'Italian', '2022-04-07 12:06:59'),
(35, '033', 'Andre', 'Kimbouta', '2021-03-30', 'Married', '+243 991 898 833', 'Italy, Milan', 'Male', 'Italian', '2022-04-07 12:09:00'),
(36, '034', 'Apocalypse', 'Bella', '2021-06-02', 'Married', '+243 991 898 834', 'Germany, Berlin', 'Female', 'Germania ', '2022-04-07 12:28:22'),
(37, '035', 'Shedo', 'Katanga', '2021-06-15', 'Single', '+243 991 898 835', 'Paris, France', 'Male', 'French', '2022-04-07 12:29:31'),
(38, '036', 'Carlos', 'Salumu', '2021-12-15', 'Divorced', '+243 991 898 836', 'Brazil, Bombas', 'Male', 'Brazilian', '2022-04-07 12:30:35'),
(39, '037', 'Didier', 'Okito', '2021-10-07', 'Single', '+243 991 898 837', 'Argentina, Valbuena', 'Male', 'Argentinian ', '2022-04-07 12:32:12'),
(40, '038', 'Richard', 'Kabala', '2022-04-18', 'Married', '+243 991 898 838', 'Poland, Warsaw', 'Male', 'Poland', '2022-04-07 12:33:48'),
(41, '039', 'Mimi', 'Chikeza', '2022-03-23', 'Compliacted', '	+243 991 898 839', 'Belgium, Liege', 'Female', 'Belgian ', '2022-04-07 12:35:10'),
(42, '040', 'Loris', 'La Congolaise', '2022-02-16', 'Divorced', '+243 991 898 840', 'Strasbourg, France', 'Male', 'French', '2022-04-07 12:36:24'),
(43, '041', 'Clement', 'Mubengai', '2022-04-20', 'Married', '+243 991 898 841', 'Liverpool, UK', 'Male', 'British', '2022-04-07 12:38:42'),
(44, '042', 'Albert', 'Moseka', '2020-11-25', 'Single', '+243 991 898 842', 'Spain, Madrid', 'Female', 'Poland', '2022-04-07 12:41:14'),
(45, '043', 'Ya Dede', 'Bokeli', '2021-03-02', 'Married', '+243 991 898 843', 'Malaga, Spain', 'Male', 'Italian', '2022-04-07 12:42:18'),
(46, '044', 'Ya Albert', 'Mboyo', '2022-04-26', 'Single', '+243 991 898 844', 'Benfica, Portugal', 'Female', 'Portuguese ', '2022-04-07 12:44:10'),
(47, '045', 'Serge', 'Itela', '2022-04-20', 'Single', '+243 991 898 845', 'Eiche, Spain', 'Male', 'Congolese', '2022-04-07 12:46:03'),
(48, '046', 'Etele', 'Ngobe', '2021-09-30', 'Compliacted', '+243 991 898 846', 'Aston Villa, UK', 'Female', 'Rwandese', '2022-04-07 12:47:30'),
(49, '047', 'Yves', 'Njoli', '2022-04-19', 'Single', '+243 991 898 847', 'Dortmund, Germany', 'Male', 'Zambezian', '2022-04-07 12:49:12'),
(50, '048', 'Bole', 'Nchesko', '2022-03-30', 'Married', '+243 991 898 848', 'Lille, France', 'Male', 'Congolese', '2022-04-07 12:50:45'),
(51, '049', 'Gounteur', 'Zugamondo', '2022-03-30', 'Compliacted', '+243 991 898 849', 'Lyon, France', 'Male', 'Ivorian', '2022-04-07 12:55:20'),
(54, '050', 'Wivine', 'Moleka', '2021-11-02', 'Married', '+243 991 898 850', 'Le Cairo, Egypt', 'Female', 'Japanese', '2022-04-12 12:31:19'),
(55, '051', 'Tresor', 'Mukuna', '2022-04-07', 'Single', '+243 991 898 851', 'Bergen, Mexico', 'Male', 'Norwegian ', '2022-04-12 12:31:49'),
(56, '052', 'Martin', 'Fayulu', '2022-03-27', 'Undefined', '+243 991 898 852', 'Istanbul, Turkey', 'Female', 'Turkish ', '2022-04-12 12:33:26'),
(57, '053', 'Didi', 'Kelolo', '2022-04-06', 'Divorced', '+243 991 898 853', 'Francisco, USA', 'Male', 'American', '2022-04-12 12:33:53'),
(58, '054', 'Silva', 'Mabanga', '2021-11-02', 'Compliacted', '+243 991 898 854', 'Venice, Italy', 'Female', 'Italian', '2022-04-12 12:34:36'),
(59, '055', 'Jeje', 'Fulam', '2022-03-27', 'Single', '+243 991 898 855', 'South Africa', 'Male', 'African', '2022-04-12 12:35:25'),
(60, '056', 'Nati', 'Lokole', '2022-04-05', 'Married', '+243 991 898 856', 'Rio de Janeiro', 'Female', 'Canadian', '2022-04-12 12:36:51'),
(61, '057', 'Shabani', 'Record', '2022-01-04', 'Single', '+243 991 898 857', 'Havane, Cuba', 'Male', 'Cuban', '2022-04-12 12:37:22'),
(63, '058', 'Puis', 'Mwabilu', '2022-01-05', 'Single', '+243 991 898 858', 'Dubai, UAE', 'Male', 'Emirate', '2022-04-12 12:37:59'),
(64, '059', 'Junior', 'Dande', '2022-03-29', 'Single', '+243 991 898 859', 'Venice, Italy', 'Female', 'Italian', '2022-04-18 11:56:51'),
(65, '060', 'Simon', 'Omossola', '2022-04-28', 'Single', '+243 991 898 860', 'Pekin, China', 'Female', 'Chinese', '2022-04-18 11:57:46'),
(66, '061', 'Joseph', 'Ebogo', '2021-11-29', 'Married', '+243 991 898 610', 'Manchester, UK', 'Male', 'British', '2022-04-18 11:58:28'),
(67, '062', 'Efala', 'Komguep', '2021-09-29', 'Divorced', '+243 991 898 862', 'Texas, USA', 'Male', 'American', '2022-04-18 11:59:48'),
(68, '063', 'Narcisse', 'Junior', '2012-12-30', 'Married', '+243 991 898 863', 'Paris, France', 'Male', 'French', '2022-04-18 12:00:47'),
(69, '064', 'Andre', 'Onana', '2000-02-03', 'Single', '+243 991 898 864', 'Japon, Nagoya', 'Male', 'Japanese', '2022-04-18 12:01:34'),
(70, '065', 'Deplexe', 'Tchamba', '2009-10-22', 'Married', '+243 991 898 865', 'Bergen, Norvege', 'Female', 'Norvegean', '2022-04-18 12:02:36'),
(71, '066', 'Michael', 'Ngadjui', '2004-05-29', 'Divorced', '+243 991 898 866', 'Istanbul, Turkey', 'Female', 'Turkish', '2022-04-18 12:03:23'),
(73, '067', 'Nouhou', 'Tolo', '2005-11-02', 'Married', '+243 991 898 867', 'Vienne, Autriche', 'Female', 'Autrichian', '2022-04-18 12:04:07'),
(74, '068', 'Ambroise', 'Onyongo', '2002-01-01', 'Married', '+243 991 898 868', 'Barcelona, Spain', 'Female', 'Spanish', '2022-04-18 12:05:31'),
(75, '069', 'Jean', 'Onana', '2001-12-12', 'Married', '+243 991 898 869', 'Le Cap', 'Male', 'South Afri', '2022-04-19 10:18:11'),
(76, '070', 'Oukine', 'Tcheoude', '2003-02-23', 'Single', '+243 991 898 870', 'Quebec, Canada', 'Female', 'Canadian', '2022-04-19 10:19:27'),
(77, '071', 'Thierry', 'Tchuente', '1994-10-29', 'Divorced', '+243 991 898 871', 'La Havane', 'Female', 'Cubian', '2022-04-19 10:20:12'),
(78, '072', 'Samuel', 'Yves', '1989-03-17', 'Compliacted', '+243 991 898 872', 'Dubai, UAE', 'Female', 'Emirates', '2022-04-19 10:21:46'),
(80, '073', 'Pierre', 'Nkonde', '1987-09-23', 'Single', '+243 991 898 873', 'Tokyo, Japan', 'Female', 'Japanese', '2022-04-19 10:22:27'),
(81, '880', 'nike', 'kalolo', '2001-02-10', 'Single', '0897898966', 'goma', 'Male', 'kenyan', '2022-06-08 08:48:03'),
(82, '6', 'CHRIS', 'MUTHONI', '2002-07-08', 'Single', '075643223', 'NAIROBI', 'Male', 'KENYAN', '2022-06-08 15:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `studentinclass`
--

DROP TABLE IF EXISTS `studentinclass`;
CREATE TABLE IF NOT EXISTS `studentinclass` (
  `studentinclassID` int(50) NOT NULL AUTO_INCREMENT,
  `admissionID` int(50) NOT NULL,
  `studentprogramID` int(50) NOT NULL,
  `courseID` int(50) NOT NULL,
  `studentinclasscreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentinclassID`),
  KEY `studentprogramID` (`studentprogramID`),
  KEY `admissionID` (`admissionID`),
  KEY `courseID` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinclass`
--

INSERT INTO `studentinclass` (`studentinclassID`, `admissionID`, `studentprogramID`, `courseID`, `studentinclasscreated`) VALUES
(1, 1, 2, 1, '2022-02-27 19:55:44'),
(2, 2, 2, 2, '2022-02-27 19:55:44'),
(3, 3, 2, 3, '2022-02-27 19:55:44'),
(4, 4, 2, 4, '2022-02-27 19:55:44'),
(5, 5, 2, 5, '2022-02-27 19:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `studentprogram`
--

DROP TABLE IF EXISTS `studentprogram`;
CREATE TABLE IF NOT EXISTS `studentprogram` (
  `studentprogramID` int(50) NOT NULL AUTO_INCREMENT,
  `stuprogramname` varchar(50) NOT NULL,
  `durationID` int(50) NOT NULL,
  `schoolprogramID` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentprogramID`),
  KEY `schoolprogramID` (`schoolprogramID`),
  KEY `durationID` (`durationID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprogram`
--

INSERT INTO `studentprogram` (`studentprogramID`, `stuprogramname`, `durationID`, `schoolprogramID`, `description`, `created`) VALUES
(1, 'Computer Science', 2, 1, 'Unit Computer', '2022-02-05 17:05:33'),
(2, 'Mathmatics', 1, 2, 'BsSc', '2022-02-27 19:44:43'),
(3, 'School of Nursing', 2, 2, 'Bs In Nursing', '2022-02-27 19:44:43'),
(4, 'School of Engineering ', 2, 2, 'Bsc', '2022-02-27 19:44:43'),
(5, 'School Of Commerce', 5, 3, 'Finance', '2022-02-27 19:44:43'),
(6, 'Political Science', 6, 5, 'Arts', '2022-02-27 19:44:43'),
(7, 'School of Chemistry', 1, 1, 'Chemistry', '2022-02-28 15:39:16'),
(8, 'School of Agriculture', 2, 7, 'Agriculture', '2022-04-05 11:07:23'),
(9, 'Library And Information', 2, 2, 'Library And Information', '2022-04-06 11:52:18'),
(10, 'Environment Studies', 2, 7, 'Maize Studies', '2022-04-06 11:52:18'),
(11, 'School Of Law', 2, 10, 'Canon Law', '2022-04-07 13:24:41'),
(12, 'Social Science', 2, 9, 'Social Science', '2022-04-08 10:32:05'),
(13, 'Religious', 1, 11, 'Religious', '2022-04-08 10:37:20'),
(14, 'Procurement', 2, 12, 'Procurement', '2022-04-25 10:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(1, 'Nollan', '$2y$10$Dq//oo9EvvdfPuqeBFh5b.fMNaD0w/9ID5gtULvruj5SedYavg/Vq', 'admin', 0, '2021-04-30 19:55:42'),
(2, 'Yves', '$2y$10$7jdGz9IVmKMCuSkYDYcqNuXy00aAGVR1KkSRr..4DLEWtaKVRgOu6', 'admin', 0, '2021-05-02 14:48:21'),
(3, 'yvonne', '$2y$10$mpF3YyvQz3Qg.l6VxST4QOGWSgczdCtHcz/uJRs6xZg6j10VMkzeW', 'admin', 0, '2021-05-05 10:56:54'),
(4, 'Emma', '$2y$10$omukvOARMGY3j5rXDwUod.NNW4R7ohTz7L7b3qHgly5DYoANWqave', 'admin', 0, '2021-05-05 11:03:06'),
(5, 'Messi', '$2y$10$CFRP2WOuCEhfP0mVQVrs0eVqy/3ZMCYkECKXGE3oUv4im/PiTPKNa', 'admin', 0, '2021-05-05 13:34:14'),
(6, 'mahama', '$2y$10$JuV4jhNiRwEjepk44PESROgK8ERARkH6Z915kwfU45YQM.87ws55e', 'admin', 0, '2021-05-25 12:47:47'),
(7, 'Iragi', '$2y$10$bbiRdP41lcf5NuXc2Ex37ulBHF.6XG5GkWjx7Nb5um9NnV8AmiE7e', 'admin', 0, '2021-05-25 12:48:12'),
(8, 'eve', '$2y$10$3SF9rh0BbTM.JYxWtSeIEOlLebFpfp3cSt2HWcPIeSmExXhGhzbce', 'admin', 0, '2021-06-29 09:10:13'),
(9, 'ian', '$2y$10$bIkZ7X1W5tsgJlHvfv/hSuCbFT5uPLvEZBfG9smMWmlE2oVmK0yZ.', 'admin', 0, '2021-08-14 00:53:40'),
(10, 'Njubi', '$2y$10$NoH6B4y5B6hlhGVEVrLLA.Vo8vwF1fwY1nbgDN1n2AZ88po/Z7fHm', 'admin', 0, '2021-08-17 19:13:05'),
(11, 'Pogba', '$2y$10$0Z9fIQPOnzzV284K.vAXhuL.8h66bRfECEJIlGLh0QdU48ZY4Z2Jm', 'admin', 0, '2021-08-17 19:14:41'),
(12, 'toto', '$2y$10$jrGVvOPd/TyNz/u0w79QcONol2P47j1GjAu.d3OiKG94g17xeRXN2', 'admin', 0, '2022-02-24 15:47:11'),
(13, 'Eliezer', '$2y$10$dZ8.nbOQBagSqY1LkY8a9uFAKKKO8NhSg4QIDoCn8MCvVXFBFg.tO', 'admin', 0, '2022-02-26 13:24:28'),
(14, 'DENIS', '$2y$10$immyCvTEHouLKRymOyeIqezFTWvYV/qgSFvbaLn6llvo8eGgXqcsu', 'superadmin', 1, '2022-06-08 15:12:35'),
(15, 'maurice', 'd5e6dfdba51a2bc97ccb65e665e4713a7b54e129', 'superadmin', 1, '2022-06-16 00:12:24');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `admission_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`studentprogramID`) REFERENCES `studentprogram` (`studentprogramID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`lecturerID`) REFERENCES `lecturer` (`lecturerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`admissionID`) REFERENCES `admission` (`admissionID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lecturer_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lecturer_ibfk_2` FOREIGN KEY (`studentprogramID`) REFERENCES `studentprogram` (`studentprogramID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nextkin`
--
ALTER TABLE `nextkin`
  ADD CONSTRAINT `nextkin_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schoolprogram`
--
ALTER TABLE `schoolprogram`
  ADD CONSTRAINT `schoolprogram_ibfk_1` FOREIGN KEY (`durationID`) REFERENCES `duration` (`durationID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studentinclass`
--
ALTER TABLE `studentinclass`
  ADD CONSTRAINT `studentinclass_ibfk_1` FOREIGN KEY (`studentprogramID`) REFERENCES `studentprogram` (`studentprogramID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentinclass_ibfk_2` FOREIGN KEY (`admissionID`) REFERENCES `admission` (`admissionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentinclass_ibfk_3` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studentprogram`
--
ALTER TABLE `studentprogram`
  ADD CONSTRAINT `studentprogram_ibfk_1` FOREIGN KEY (`schoolprogramID`) REFERENCES `schoolprogram` (`SchoolprogramID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentprogram_ibfk_2` FOREIGN KEY (`durationID`) REFERENCES `duration` (`durationID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
