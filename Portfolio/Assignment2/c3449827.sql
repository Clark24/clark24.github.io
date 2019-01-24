-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 03:21 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3449827`
--

-- --------------------------------------------------------

--
-- Table structure for table `Points of Interest`
--

CREATE TABLE IF NOT EXISTS `Points of Interest` (
  `poiID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `ImageName` varchar(20) NOT NULL,
  PRIMARY KEY (`poiID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Points of Interest`
--

INSERT INTO `Points of Interest` (`poiID`, `Name`, `Category`, `Description`, `ImageName`) VALUES
(1, 'Turkish Bath', 'Spa', 'A great place to relax and get the spa treatment.', 'turkishbath.jpeg'),
(2, 'Newby Hall & Gardens', 'Gardens', 'Visitors to Newby Hall can enjoy the 25 acres of gardens and the stunning hall.', 'newbyhall.jpeg'),
(3, 'Vipers', 'Club', 'Cool nightclub and lounge with live acts and VIP tables, plus cocktail masterclasses.', 'viper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Admin` tinyint(1) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Age` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `UserID`, `Admin`, `First Name`, `Last Name`, `Age`) VALUES
('clark@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0, '', '', ''),
('admin@gmail.com', '9e66009b2210a111925e3515f15b3bde', 2, 1, '', '', ''),
('user@gmail.com', '3f1e739e306a84cf0288f57fe9e2fc7e', 3, 0, 'vob', 'bob', '18-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
