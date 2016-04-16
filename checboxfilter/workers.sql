-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 02:34 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `hasCar` tinyint(1) DEFAULT NULL,
  `speaksForeignLanguage` tinyint(1) DEFAULT NULL,
  `canWorkNights` tinyint(1) DEFAULT NULL,
  `isStudent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `age`, `address`, `hasCar`, `speaksForeignLanguage`, `canWorkNights`, `isStudent`) VALUES
(1, 'Jim', 39, '12 High Street, London', 1, 1, 1, 1),
(2, 'Fred', 29, '13 High Street, London', 1, 1, 1, 0),
(3, 'Bill', 19, '14 High Street, London', 1, 1, 0, 0),
(4, 'Tom', 39, '15 High Street, London', 1, 0, 0, 0),
(5, 'Cathy', 29, '16 High Street, London', 1, 0, 0, 1),
(6, 'Petra', 19, '17 High Street, London', 1, 0, 1, 0),
(7, 'Heide', 39, '18 High Street, London', 1, 1, 0, 0),
(8, 'William', 29, '19 High Street, London', 1, 1, 0, 1),
(9, 'Ted', 19, '20 High Street, London', 0, 0, 0, 1),
(10, 'Mike', 19, '21 High Street, London', 1, 0, 0, 1),
(11, 'Jo', 19, '22 High Street, London', 0, 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
