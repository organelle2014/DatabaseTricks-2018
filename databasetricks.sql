-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2018 at 01:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databasetricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE IF NOT EXISTS `new_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `age`, `submittedby`) VALUES
(10, '2018-08-22 10:27:27', 'Jack Ma China', 40, ''),
(11, '2018-08-13 10:29:00', 'richard brown', 65, ''),
(13, '2018-08-13 10:40:19', 'Patel Rahmeed', 56, ''),
(14, '2018-08-13 10:42:53', 'Ivy Liz', 16, ''),
(15, '2018-08-22 10:27:42', 'Isaac Samoei Ruto', 63, ''),
(16, '2018-08-13 10:44:51', 'Mark Too', 42, ''),
(17, '2018-08-22 10:27:17', 'Omar Iqbal', 100, '');
