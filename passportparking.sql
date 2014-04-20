-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2014 at 10:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `passportparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `calc`
--

CREATE TABLE IF NOT EXISTS `calc` (
  `val1` varchar(20) NOT NULL,
  `action` varchar(2) NOT NULL,
  `val2` varchar(20) NOT NULL,
  `result` varchar(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calc`
--

INSERT INTO `calc` (`val1`, `action`, `val2`, `result`, `ip`, `datetime`) VALUES
('0', '/', '0', 'NaN', '172.160.2.21', '2014-04-19 22:17:41'),
('23', '-', '1', '22', '172.160.1.229', '2014-04-19 22:33:43'),
('12', '*', '34', '408', '172.160.2.21', '2014-04-19 22:36:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
