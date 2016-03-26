-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2014 at 08:51 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nexg`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_enquiry`
--

CREATE TABLE IF NOT EXISTS `add_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` text NOT NULL,
  `u_name` text NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(250) NOT NULL,
  `enq_status` text NOT NULL,
  `enq_type` text NOT NULL,
  `u_message` text NOT NULL,
  `e_message` text NOT NULL,
  `in_interface` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_enquiry`
--

INSERT INTO `add_enquiry` (`id`, `emp_name`, `u_name`, `email`, `contact`, `enq_status`, `enq_type`, `u_message`, `e_message`, `in_interface`, `date`) VALUES
(1, 'Dharmesh', 'chandan', 'sonuk634@gmail.com', '9953703313', 'Sent', 'International Corporate Training', 'Hello', 'Hello', 'WhatsApp', '2014-09-30 12:18:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
