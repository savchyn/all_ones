-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2014 at 08:35 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nex-g|ict`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` text NOT NULL,
  `query` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `address`, `country`, `query`, `message`, `date`) VALUES
(1, 'phillip Heath', 'philheath@olympia.com', '1122334455', 'Washington Dc, NY', 'america', 'Promotion', 'Hey this is 4* Mr. Olympia Jay Cutler', '2014-06-21 10:10:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
