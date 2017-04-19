-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2012 at 01:22 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `member_id` varchar(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `date_created`, `member_id`) VALUES
(132, 'sdsdssf', '1328613060', '43'),
(133, 'dsdsdsdds', '1328613067', '43'),
(135, 'sds', '1328617260', '50'),
(171, 'awy', '1329664979', '46'),
(103, 'john', '1328370831', '50'),
(155, 'sdsdsd', '1329278523', '43'),
(160, 'sds', '1329283209', '43'),
(161, 'jlsfjjfjjjk', '1329458863', '43'),
(162, 'sdsd', '1329664332', '45'),
(163, 'aaa', '1329664356', '45'),
(172, 'sddd', '1329664988', '46'),
(173, 'dsdsd', '1329665017', '46');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(2) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `member_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(11) NOT NULL,
  `friends_with` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`member_id`, `datetime`, `status`, `friends_with`) VALUES
(43, '2012-02-19 18:53:14', 'conf', 46);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `remarks` text NOT NULL,
  `remarksby` varchar(30) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(14) NOT NULL,
  `Url` varchar(100) NOT NULL,
  `Birthdate` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `profImage` varchar(200) NOT NULL,
  `curcity` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `Interested` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `college` varchar(100) NOT NULL,
  `highschool` varchar(200) NOT NULL,
  `experiences` varchar(200) NOT NULL,
  `arts` text NOT NULL,
  `aboutme` text NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `Stats` varchar(30) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`, `Address`, `ContactNo`, `Url`, `Birthdate`, `Gender`, `DateAdded`, `profImage`, `curcity`, `hometown`, `Interested`, `language`, `college`, `highschool`, `experiences`, `arts`, `aboutme`, `month`, `day`, `year`, `Stats`) VALUES
(34, 'js', '32981a13284db7a0', 'jorgielyn', 'Serfino', 'ilog', '09096520595', 'twinkle_serfino@yahoo.com', 'October/16/1993', 'Female', '0000-00-00 00:00:00', 'upload/p.jpg', 'ilog', '', '', '', '', '', '', '', '', 'October', '16', '1993', ''),
(41, 's', '03c7c0ace395d80182db07ae2c30f034', 's', 's', 's', 's', 's@fgh.com', 'January/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/a.jpg', 's', '', '', '', '', '', '', '', '', 'January', '1', '2012', 'Single'),
(43, 'k', '8ce4b16b22b58894aa86c421e8759df3', 'kevin', 'Lorayna', 'Bago City', '09466651154', 'kevin_lorayna@yahoo.com', '12/24/1993', 'Male', '0000-00-00 00:00:00', 'upload/iron-man-2.jpg', 'k', '', 'Women', 'Hiligaynon', 'CHMSC', 'Our Lady of the Pillar Academy', '', '', 'Simple Lang', '', '', '', 'Single'),
(44, 'shehe', '52fa0118a02429506778c063f5d1638f', 'shiera mae', 'tuting', 'talisay city', '09127730611', 'kyziel_me@yahoo.com', 'February/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/Between_Darkness_and_Wonder_Black_Purity_HD_Wallpaper.jpg', 'talisay city', '', 'Men', 'c++, c, vb6, php, html', 'chmsc', 'chmsc', '', '', 'iam me', 'February', '1', '2012', 'Single'),
(45, 'emoblazz', '827ccb0eea8a706c4c34a16891f84e7b', 'Honeylee', 'Magbanua', 'Bago City', '123456789', 'emoblazz@yahoo.com', 'October/14/1989', 'Female', '0000-00-00 00:00:00', 'upload/a.jpg', 'Bago City', '', '', '', '', '', '', '', '', 'October', '14', '1989', ''),
(46, 'js', '32981a13284db7a021131df49e6cd203', 'twinkle', 'serfino', 'js', '90909', 'js@yahoo.com', 'January/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/p.jpg', 'js', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'jk', '051a9911de7b5bbc610b76f4eda834a0', 'john kevin amos', 'lorayna', 'Bago City', '09127730611', 'kevin_lorayna@yahoo.com', 'January/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/a.jpg', 'Bago City', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'kj', '771f01104d905386a134a676167edccc', 'kent john', 'lorayna', 'Bago City', '90908989', 'kevin_lorayna@yahoo.com', 'January/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/p.jpg', 'Bago City', '', '', '', '', '', '', '', '', 'January', '1', '2012', ''),
(49, 'jk', '051a9911de7b5bbc610b76f4eda834a0', 'jk', 'jk', 'jk', 'jk', 'js@yahoo.com', 'January/1/2012', 'Female', '0000-00-00 00:00:00', 'upload/p.jpg', 'jk', '', '', '', '', '', '', '', '', 'January', '1', '2012', ''),
(51, 'jam', '5275cb415e5bc3948e8f2cd492859f26', 'maricon', 'itona', 'victorias city', '09468282747', 'mariconitona@gmail.com', 'July/11/1992', 'Female', '0000-00-00 00:00:00', 'upload/p.jpg', 'victorias city', '', '', '', '', '', '', '', '', 'July', '11', '1992', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(40) NOT NULL,
  `recipient` varchar(40) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE IF NOT EXISTS `month` (
  `month_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(15) NOT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(200) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `member_id`) VALUES
(20, 'upload/[large][AnimePaper]wallpapers_Mobile-Suit-Gundam-Seed-Destiny_Rukawa11(1.33)__THISRES__72873.jpg', 43),
(28, 'upload/Iron_Man_Movie_by_anaheim_420.jpg', 43),
(29, 'upload/bleach_48_640.jpg', 46),
(30, 'upload/Jellyfish.jpg', 43),
(31, 'upload/DSC00467.jpg', 43),
(32, 'upload/DSC00497.jpg', 43),
(17, 'upload/a.jpg', 43),
(13, 'upload/12819748323869.jpg', 43),
(14, 'upload/a.jpg', 43),
(21, 'upload/Between_Darkness_and_Wonder_Black_Purity_HD_Wallpaper.jpg', 43),
(22, 'upload/black-abstract-windows7-seven-desktop-wallpaper-1600x1200.jpg', 43),
(23, 'upload/captain-jsck-sparrow.jpg', 43),
(33, 'upload/DSC00476.jpg', 43),
(34, 'upload/img-wallpapers-windows-vista-carbon-lupuce-21748.jpg', 43),
(25, 'upload/a.jpg', 46),
(35, 'upload/Code_Geass__Zero_Vector_by_Reina_Kitsune.jpg', 43);

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE IF NOT EXISTS `postcomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `commentedby` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `postcomment`
--

INSERT INTO `postcomment` (`comment_id`, `content`, `commentedby`, `pic`, `id`, `date_created`) VALUES
(31, 'dsd', '46', 'upload/p.jpg', 171, '1329664982');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(30, 1983),
(29, 1984),
(28, 1985),
(27, 1986),
(26, 1987),
(25, 1988),
(24, 1989),
(23, 1990),
(22, 1991),
(21, 1992),
(20, 1993),
(19, 1994),
(18, 1995),
(17, 1996),
(16, 1997),
(15, 1998),
(14, 1999),
(13, 2000),
(12, 2001),
(11, 2002),
(10, 2003),
(9, 2004),
(8, 2005),
(7, 2006),
(6, 2007),
(5, 2008),
(4, 2009),
(3, 2010),
(2, 2011),
(1, 2012),
(43, 1970),
(42, 1971),
(41, 1972),
(40, 1973),
(39, 1974),
(38, 1975),
(37, 1976),
(36, 1977),
(35, 1978),
(34, 1979),
(33, 1980),
(32, 1981),
(31, 1982);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
