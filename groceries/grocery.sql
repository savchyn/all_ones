-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 06:32 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antimsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `c_id` int(15) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`c_id`, `c_name`) VALUES
(1, 'Ethnic Groceries'),
(2, 'General Groceries');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'shishir', 'abc@gmail.com', 'noida', '8898989812'),
(2, 'shishir', 'abc@gmail.com', 'noida', '8898989812');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2016-03-08', 1),
(2, '2016-03-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 1, 1, 960),
(2, 1, 1, 960);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sc_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `sc_name` varchar(200) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sc_id`, `c_id`, `sc_name`, `c_name`) VALUES
(1, 1, 'Religious Items', 'Ethnic Groceries'),
(2, 1, 'Ghee', 'Ethnic Groceries'),
(3, 1, 'Atta Besan Rice', 'Ethnic Groceries'),
(4, 1, 'Fruts Vegetables', 'Ethnic Groceries'),
(5, 1, 'Snacks', 'Ethnic Groceries'),
(6, 1, 'Beverages', 'Ethnic Groceries'),
(7, 1, 'Milk Dairy', 'Ethnic Groceries'),
(8, 1, 'Spice Pickles', 'Ethnic Groceries'),
(9, 1, 'Frozen', 'Ethnic Groceries'),
(10, 2, 'Cakes & Cookees', 'General Groceries'),
(11, 2, 'Dairy Products', 'General Groceries'),
(12, 2, 'Soup and Noodles', 'General Groceries'),
(13, 2, 'Beverages', 'General Groceries'),
(14, 2, 'Baby Food', 'General Groceries'),
(15, 2, 'Soft Drinks', 'General Groceries'),
(16, 2, 'Confectionery', 'General Groceries');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sc_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
