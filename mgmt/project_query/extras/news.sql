-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2014 at 06:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--
CREATE DATABASE IF NOT EXISTS `news` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `news`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bann_news` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bann_news`) VALUES
(12, 'Penguins.jpg'),
(13, 'Chrysanthemum.jpg'),
(14, '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `big_news`
--

CREATE TABLE IF NOT EXISTS `big_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `big_news`
--

INSERT INTO `big_news` (`id`, `News`, `description`, `photo`) VALUES
(3, 'sujdksjdskjdskdjskdjskdjskdjskdj', '<p>\r\n	sdlkckldcklxckxlcmk</p>\r\n', 'Tulips.jpg'),
(4, 'xaxasjdk sdjsjd skkjd skdjk sdfkls kcmxc nxmcn xmcnm xcnxmn cxmcnx m', '<p>\r\n	aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', ''),
(5, 'ksdjfdkjfdkdjf', '<p>\r\n	,jskdjskjdskdjskdjskjdskdjskjdsdjs</p>\r\n', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brek_news`
--

CREATE TABLE IF NOT EXISTS `brek_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(255) NOT NULL,
  `b_news` int(11) NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `h_news` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `brek_news`
--

INSERT INTO `brek_news` (`id`, `News`, `b_news`, `description`, `time`, `photo`, `video`, `h_news`) VALUES
(3, 'xmz,xmz,xmz,xmz,xmz', 1, '<p>\r\n	xzjkcdxszkdjskdxjs</p>\r\n', '2013-12-10 22:53:32', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'video.mp4', 1),
(4, 'dfjkdfhdsfhdfjd sdfbsdj mnjsmnj', 0, '<p>\r\n	sxjkdckjcxjk dsdsjxdc sxhdsdnhs &nbsp;xdsjknhdsdsnhdshj</p>\r\n', '2013-12-13 11:53:14', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', '', 1),
(5, 'skzjdskjdskj', 0, '<p>\r\n	sdjkjxjhcxchxj</p>\r\n<p>\r\n	xcxcxcx</p>\r\n<p>\r\n	cxxcxcxcx</p>\r\n', '2013-12-12 15:18:21', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `sid`) VALUES
(1, 'sjdksjdshjkdsjdskdj', 1),
(2, 'sjdksjdshjkdsjdskdj', 1),
(3, 'sxjdsmjndsmdncxmncx', 3),
(4, 'sxjdsmjndsmdncxmncx', 3),
(5, 'sxjdsmjndsmdncxmncx', 3),
(6, 'sxjdsmjndsmdncxmncx', 3),
(7, 'sxjdsmjndsmdncxmncx', 3),
(8, 'sxjdsmjndsmdncxmncx', 3),
(9, 'sxjdsmjndsmdncxmncx', 3),
(10, 'kxckcjkxcjkcjxkcjxk', 4),
(11, 'kskskskskskskskskk', 1),
(12, 'mxc m ', 1),
(13, 'kzxzjkxnzxnzmnxmzxn', 12),
(14, 'ksjdskjdskdjksjd', 11),
(15, 'delhi', 16),
(16, 'jckxjckx', 9),
(17, 's,mdsnmkdnskxnjksmz', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `sid`, `cid`, `photo`, `time`) VALUES
(3, 'sldskldjksjdskdjskdj', '<p>\r\n	jkjijjkjjjsdxshjdshujshjshjshj</p>\r\n', 1, 1, '', ''),
(4, 'zxzncxmcxmjjjjjjjjjj', '<p>\r\n	xnkjcnxjkcjxkcxkcjxkc</p>\r\n', 1, 1, '', ''),
(5, 'ahdsjhdsjdhsjdhhhjhjhdsj', '<p>\r\n	sjdsjnxmncxmcnxm</p>\r\n', 3, 3, '', ''),
(6, 'hzjxhzjxhjzxhxzjh', '<p>\r\n	kxckxjcxkncxmkcnxmncxmcn</p>\r\n', 1, 1, '', ''),
(7, 'jsaksjaksjakjsaksj', '<p>\r\n	zakxjzkxjzkxjkzxjkzjxkz</p>\r\n', 1, 1, '', ''),
(8, 'xjcxjchxjcnjxcbxnbc', '<p>\r\n	wsjddhjshdsjdhsjhdsj</p>\r\n', 1, 1, '', ''),
(9, 'sjkdhsjhdsjhdsjhdsjhdsjsd', '<p>\r\n	shjdhsjdhsjdhsjhdsjdhjsd</p>\r\n<p>\r\n	bhhjjhjhjhjhjhjhjhjhj</p>\r\n', 1, 1, '20131125_172352.jpg', ''),
(10, 'fcdxvvcvv', '<p>\r\n	sdfdfdfdfdfd</p>\r\n', 1, 1, '', ''),
(11, 'skjdskdjskjdskjdsk', '<p>\r\n	skidjdjskjdskdjskdjs</p>\r\n<p>\r\n	sdsdsd</p>\r\n', 11, 11, '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'now'),
(12, 'shbjsbcsnjcbxsjncbxncbxncb', '<p>\r\n	sdjshdjsdhsjdhsjdhsjdhsjhd</p>\r\n', 16, 16, '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'now()'),
(13, 'kxcmzkcmx,cmx,cmx,cm', '<p>\r\n	cjkxjckxjcxkcjxkcjxkjcxkcj</p>\r\n', 16, 16, '', '2013-12-12 12:29:24'),
(14, 'jazkxjskzxjzkjckzjk', '<p>\r\n	ksdjskjdksjdskjdskjdskj</p>\r\n', 16, 16, '', '2013-12-12 12:29:47'),
(15, 'ksjdskjdskjskx', '<p>\r\n	ksjdxkjkxjkxjxkcjxk</p>\r\n', 9, 9, '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', '2013-12-12 22:22:16'),
(16, 'lzxkclzkcxlckxlckxlc', '<p>\r\n	skcxkxszmcmcx,cmx,cmx</p>\r\n', 20, 20, '', '2013-12-12 22:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_tol` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `poll_tol`, `sid`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 0, 1),
(4, 0, 1),
(5, 0, 1),
(6, 0, 1),
(7, 0, 1),
(8, 0, 1),
(9, 0, 1),
(10, 0, 1),
(11, 0, 1),
(12, 0, 1),
(13, 0, 1),
(14, 0, 1),
(15, 0, 1),
(16, 0, 1),
(17, 0, 1),
(18, 0, 1),
(19, 0, 1),
(20, 0, 1),
(21, 0, 1),
(22, 0, 1),
(23, 0, 1),
(24, 0, 1),
(25, 0, 1),
(26, 0, 1),
(27, 0, 1),
(28, 1, 1),
(29, 1, 1),
(30, 1, 1),
(31, 1, 1),
(32, 1, 1),
(33, 1, 1),
(34, 1, 1),
(35, 1, 1),
(36, 1, 1),
(37, 1, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 1, 1),
(42, 1, 1),
(43, 1, 1),
(44, 1, 1),
(45, 1, 1),
(46, 1, 1),
(47, 1, 1),
(48, 1, 1),
(49, 1, 1),
(50, 1, 1),
(51, 1, 1),
(52, 1, 1),
(53, 1, 1),
(54, 1, 1),
(55, 1, 1),
(56, 1, 1),
(57, 1, 1),
(58, 1, 1),
(59, 0, 1),
(60, 0, 1),
(61, 1, 1),
(62, 1, 1),
(63, 1, 1),
(64, 1, 1),
(65, 0, 1),
(66, 1, 1),
(67, 0, 1),
(68, 0, 1),
(69, 1, 1),
(70, 1, 1),
(71, 0, 1),
(72, 0, 1),
(73, 0, 1),
(74, 0, 1),
(75, 0, 1),
(76, 0, 1),
(77, 0, 1),
(78, 0, 1),
(79, 0, 1),
(80, 0, 1),
(81, 0, 1),
(82, 0, 1),
(83, 0, 1),
(84, 0, 1),
(85, 0, 1),
(86, 0, 1),
(87, 1, 1),
(88, 1, 1),
(89, 1, 1),
(90, 1, 1),
(91, 1, 1),
(92, 0, 1),
(93, 1, 1),
(94, 0, 1),
(95, 0, 1),
(96, 1, 1),
(97, 1, 1),
(98, 1, 1),
(99, 1, 1),
(100, 0, 1),
(101, 0, 1),
(102, 0, 1),
(103, 0, 1),
(104, 0, 1),
(105, 0, 1),
(106, 0, 1),
(107, 0, 1),
(108, 0, 1),
(109, 0, 1),
(110, 0, 1),
(111, 1, 1),
(112, 1, 1),
(113, 1, 1),
(114, 1, 1),
(115, 1, 1),
(116, 1, 1),
(117, 1, 1),
(118, 1, 1),
(119, 1, 1),
(120, 1, 1),
(121, 1, 1),
(122, 1, 1),
(123, 1, 1),
(124, 1, 1),
(125, 1, 1),
(126, 1, 1),
(127, 1, 1),
(128, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`) VALUES
(1, '&#2313;&#2340;&#2381;&#2340;&#2352;&#2366;&#2326;&#2306;&#2337;'),
(2, '&#2361;&#2367;&#2350;&#2366;&#2330;&#2354; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358;'),
(3, '&#2309;&#2352;&#2369;&#2339;&#2366;&#2330;&#2354; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358;'),
(4, '&#2309;&#2360;&#2350;'),
(5, '&#2310;&#2306;&#2343;&#2381;&#2352;&#2366; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358;'),
(6, '&#2313;&#2340;&#2381;&#2340;&#2352; &#2346;&#2381;&#2352;&#2342;&#2375;&#2358;'),
(7, '&#2323;&#2352;&#2367;&#2360;&#2366;'),
(8, '&#2325;&#2352;&#2381;&#2344;&#2366;&#2335;&#2325;'),
(9, '&#2325;&#2375;&#2352;&#2354;&#2366;'),
(10, '&#2327;&#2379;&#2310;'),
(11, '&#2331;&#2381;&#2361;&#2340;&#2381;&#2340;&#2367;&#2360;&#2381;&#2327;&#2352;&#2381;&#2361;'),
(12, '&#2332;&#2350;&#2381;&#2350;&#2370;-&#2325;&#2358;&#2381;&#2350;&#2368;&#2352;'),
(13, '&#2333;&#2366;&#2352;&#2326;&#2306;&#2337;'),
(14, '&#2340;&#2350;&#2367;&#2354; &#2344;&#2366;&#2337;&#2369;'),
(15, '&#2340;&#2381;&#2352;&#2367;&#2346;&#2369;&#2352;&#2366;'),
(16, '&#2342;&#2375;&#2354;&#2381;&#2361;&#2368;'),
(17, '&#2344;&#2327;&#2366;&#2354;&#2373;&#2306;&#2337;'),
(18, '&#2346;&#2306;&#2332;&#2366;&#2348;'),
(19, '&#2348;&#2367;&#2361;&#2366;&#2352;'),
(20, '&#2350;&#2343;&#2381;&#2351;&#2346;&#2381;&#2352;&#2342;&#2375;&#2358;'),
(21, '&#2350;&#2361;&#2366;&#2352;&#2366;&#2359;&#2381;&#2335;&#2381;&#2352;&#2366;'),
(22, '&#2350;&#2367;&#2332;&#2364;&#2379;&#2352;&#2350;'),
(23, '&#2352;&#2366;&#2332;&#2360;&#2381;&#2341;&#2366;&#2344;'),
(24, '&#2357;&#2375;&#2360;&#2381;&#2335; &#2348;&#2375;&#2306;&#2327;&#2366;&#2354;'),
(25, '&#2360;&#2367;&#2325;&#2381;&#2325;&#2367;&#2350;'),
(26, '&#2361;&#2352;&#2351;&#2366;&#2339;&#2366;');

-- --------------------------------------------------------

--
-- Table structure for table `video_news`
--

CREATE TABLE IF NOT EXISTS `video_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `t_video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `video_news`
--

INSERT INTO `video_news` (`id`, `video`, `description`, `photo`, `news`, `time`, `t_video`) VALUES
(10, '', '<p>\r\n	kjxsjcxkjcxkjc</p>\r\n', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'xkcxkcmnxkcxnmc', '2013-12-07 13:25:31', ''),
(11, 'video.mp4', '<p>\r\n	kjxkzjxkzjjjjjncmxn xzcnncx hnxzjhh</p>\r\n', '20131125_172352.jpg', 'sdsjkdsndsnssmn', '2013-12-12 22:47:20', ''),
(12, 'video.mp4', '<p>\r\n	zm,xmmx,xmc</p>\r\n', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'smdsmnd.sdms,sjdsnmjszhn', '2013-12-12 22:49:04', ''),
(18, 'video.mp4', '<p>\r\n	sdsds fdff fdsfdf ffdsfdf absadahj</p>\r\n', '20131125_172352.jpg', 'sd dsese ewewe ewewe', '2013-12-17 12:02:44', 'mmm'),
(19, 'video.mp4', '<p>\r\n	sdsddsdsd</p>\r\n', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg', 'swwsf c  wrwrww w w  ww', '2013-12-15 17:51:19', 'dd www');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vote_det` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `vote_det`, `photo`) VALUES
(3, 'skdnsjkdnsdns s ds d sdd s sssjdhsjhs', '20131125_172352.jpg'),
(4, 'skdnsjkdnsdns s ds d sdd s ', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg'),
(5, 'skdnsjkdnsdns s ds d sdd s ', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg'),
(6, 'skdnsjkdnsdns s ds d sdd s ', '3a784ffbf3c4a708c93f9eb3e03dcf11.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
