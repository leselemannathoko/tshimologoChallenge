-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 10:59 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE IF NOT EXISTS `checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Food` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Firstnames` varchar(20) NOT NULL,
  `Contactname` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `preference` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`id`, `Food`, `Surname`, `Firstnames`, `Contactname`, `date`, `Age`, `preference`) VALUES
(8, 'Pasta,Beef-stir-fry,', 'mable', 'Smith', '07777', '2020-11-04', '40', 'Strongly-Agree');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
