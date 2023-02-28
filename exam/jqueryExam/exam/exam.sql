-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2012 at 10:11 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examjquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryName` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryName`) VALUES
(1, 'India'),
(2, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE IF NOT EXISTS `productcategory` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`categoryId`, `categoryName`) VALUES
(1, 'mobile'),
(2, 'electronics'),
(3, 'electrical'),
(4, 'toys'),
(5, 'grocery'),
(6, 'spices'),
(7, 'utencils'),
(8, 'ladiesware'),
(9, 'gentsware');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE IF NOT EXISTS `productinfo` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(30) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `purchasePrice` decimal(8,2) NOT NULL,
  `retailPrice` decimal(8,2) NOT NULL,
  `initialStock` int(4) NOT NULL,
  `quantity` int(4) NOT NULL,
  `created` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`productId`, `productName`, `categoryId`, `purchasePrice`, `retailPrice`, `initialStock`, `quantity`, `created`) VALUES
(1, 'sony plasma 32 tv', 2, '25000.00', '35000.00', 10, 10, '0000-00-00'),
(2, 'nokia N8', 1, '22000.00', '34000.00', 12, 12, '2012-11-05'),
(3, 't-shirt 212', 9, '100.00', '150.00', 30, 30, '2012-11-05'),
(4, '120 cft samsung fridge', 2, '35000.00', '50000.00', 5, 5, '2012-11-04'),
(5, 'city fan 22 inch', 3, '1800.00', '2500.00', 20, 20, '2012-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryId` int(11) NOT NULL,
  `stateName` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `countryId`, `stateName`) VALUES
(1, 1, 'U.P.'),
(2, 1, 'Uttarakhand'),
(3, 2, 'Dhaka'),
(4, 2, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `towninfo`
--

CREATE TABLE IF NOT EXISTS `towninfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `townId` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `towninfo`
--

INSERT INTO `towninfo` (`id`, `townId`, `description`) VALUES
(1, 3, 'Pithoragarh is a beautiful town situated in Kumaon region of Uttarakhand. It has an average elevation of 1,514 metres (4,967 feet) above sea level.'),
(2, 4, 'Dehradun also known as Doon is the capital city of Uttarakhand. It is around 250 Kilometers from national capital Delhi.\r\nRice and Lychee are major products of this city.'),
(3, 1, 'Lucknow is the capital city of U.P. or Uttar Pradesh.\r\nLucknow has Asia''s first human DNA bank.\r\nIt is popularly known as The City of Nawabs, Golden City of the East and The Constantinople of India.'),
(4, 6, 'Savar is beside Dhaka.'),
(5, 7, 'IUT is in gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE IF NOT EXISTS `towns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stateId` int(11) NOT NULL,
  `townName` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `stateId`, `townName`) VALUES
(1, 1, 'Lucknow'),
(2, 1, 'Bareilly'),
(3, 2, 'Pithoragarh'),
(4, 2, 'Dehradun'),
(5, 2, 'Nainital'),
(6, 3, 'Savar'),
(7, 3, 'Gazipur'),
(8, 4, 'Lohagara'),
(9, 4, 'Satkania');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'holmes', 'sherlockholmes'),
(2, 'watson', 'johnwatson'),
(3, 'sati', 'pranay'),
(4, 'mantu', 'ajayjoshi'),
(5, 'sahji', 'brijsah'),
(6, 'vijay', 'vijayjoshi'),
(7, 'brij', 'brijsah'),
(8, 'arjun', 'samant'),
(9, 'jyotsna', 'sonawane'),
(12, 'ravindra', 'pokharia'),
(13, 'prakash', 'joshi'),
(14, 'sahji2', 'aloklal'),
(15, 'basant', 'bhandari');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
