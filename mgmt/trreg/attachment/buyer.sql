-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 09:11 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gaurav`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `date` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `gender` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `country`, `city`, `date`, `month`, `year`, `gender`, `contact`, `email`, `password`) VALUES
(20, 'Dharmesh Kumar', 'India', 'noida', 1, 'jan', 2014, 'Male', '4354354343', 'sonuk634@gmail.com', 'yoyo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
