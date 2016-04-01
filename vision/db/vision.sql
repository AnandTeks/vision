-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 03:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vision`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billNo` int(100) NOT NULL,
  `grandTotal` varchar(1000) NOT NULL,
  `customerid` int(100) NOT NULL,
  `dateofentry` varchar(1000) NOT NULL,
  `amountpaid` varchar(100) NOT NULL,
  `Balanceamount` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `billNo`, `grandTotal`, `customerid`, `dateofentry`, `amountpaid`, `Balanceamount`) VALUES
(1, 1, '900', 1, '01.02.2016', '892', '8'),
(2, 2, '9000', 1, '01.02.2016', '5000', '4000'),
(3, 3, '9000', 1, '01.02.2016', '5000', '4000'),
(4, 4, '9500', 1, '01.02.2016', '8200', '2500'),
(5, 5, '270', 1, '02.02.2016', '150', '120');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE IF NOT EXISTS `billing_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `customerid` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `grandTotal` varchar(100) NOT NULL,
  `billno` int(100) NOT NULL,
  `amountpaid` varchar(100) NOT NULL,
  `Balanceamount` varchar(1000) NOT NULL,
  `dateofentry` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `name`, `customerid`, `address`, `phno`, `product`, `code`, `qty`, `amount`, `discount`, `total`, `grandTotal`, `billno`, `amountpaid`, `Balanceamount`, `dateofentry`) VALUES
(1, 'anandmaster', 1, 'salem', '98765432101', 'FastTrack', '10', '', '200', '10', '900', '900', 1, '892', '8', '01.02.2016'),
(2, 'anandmaster', 1, 'salem', '98765432101', 'Titian', '100', '', '1000', '10', '9000', '9000', 2, '5000', '4000', '01.02.2016'),
(3, 'anandmaster', 1, 'salem', '98765432101', 'rebook', '100', '100', '100', '10', '9000', '9000', 3, '5000', '4000', '01.02.2016'),
(4, 'anandmaster', 1, 'salem', '98765432101', 'FastTrack', 'KIOF', '10', '1000', '5', '9500', '9500', 4, '7000', '2500', '01.02.2016'),
(5, 'anandmaster', 1, 'salem', '98765432101', 'FastTrack', '10', '1', '100', '10', '90', '270', 5, '150', '120', '02.02.2016'),
(6, 'anandmaster', 1, 'salem', '98765432101', 'Titian', '10', '2', '100', '10', '180', '270', 5, '150', '120', '02.02.2016');

-- --------------------------------------------------------

--
-- Table structure for table `customerprofile`
--

CREATE TABLE IF NOT EXISTS `customerprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(1500) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phno` varchar(1000) NOT NULL,
  `GlassRighEyeDistanceSph` varchar(1000) NOT NULL,
  `GlassRighEyeDistanceCyl` varchar(1000) NOT NULL,
  `GlassRighEyeDistanceAxis` varchar(1000) NOT NULL,
  `GlassRighEyeDistancePrism` varchar(1000) NOT NULL,
  `GlassRighEyeDistanceBase` varchar(1000) NOT NULL,
  `GlassRighEyeDistanceVa` varchar(1000) NOT NULL,
  `GlassRighEyeNearSph` varchar(1000) NOT NULL,
  `GlassRighEyeNearCyl` varchar(1000) NOT NULL,
  `GlassRighEyeNearAxis` varchar(1000) NOT NULL,
  `GlassRighEyeNearPrism` varchar(1000) NOT NULL,
  `GlassRighEyeNearBase` varchar(1000) NOT NULL,
  `GlassRighEyeNearVA` varchar(1000) NOT NULL,
  `GlassLeftEyeDistancesph` varchar(100) NOT NULL,
  `GlassLeftEyeDistanceCyl` varchar(1000) NOT NULL,
  `GlassLeftEyeDistanceAxis` varchar(1000) NOT NULL,
  `GlassLeftEyeDistancePrism` varchar(1000) NOT NULL,
  `GlassLeftEyeDistanceBase` varchar(1000) NOT NULL,
  `GlassLeftEyeDistanceVA` varchar(10000) NOT NULL,
  `GlassLeftEyeNearSph` varchar(1000) NOT NULL,
  `GlassLeftEyeNearCyl` varchar(1000) NOT NULL,
  `GlassLeftEyeNearAxis` varchar(1000) NOT NULL,
  `GlassLeftEyeNearPrism` varchar(1000) NOT NULL,
  `GlassLeftEyeNearBase` varchar(1000) NOT NULL,
  `GlassLeftEyeNearVA` varchar(1000) NOT NULL,
  `LensRightEyeBrand` varchar(1000) NOT NULL,
  `LensRightEyeBC` varchar(1000) NOT NULL,
  `LensRightEyeDio` varchar(1000) NOT NULL,
  `LensRightEyeSph` varchar(1000) NOT NULL,
  `LensRightEyeCyl` varchar(1000) NOT NULL,
  `LensRightEyeAdd` varchar(1000) NOT NULL,
  `LensRightEyeTint` varchar(1000) NOT NULL,
  `LensRightEyeOZ` varchar(1000) NOT NULL,
  `LensRightEyeVA` varchar(1000) NOT NULL,
  `LensLeftEyeBrand` varchar(1000) NOT NULL,
  `LensLeftEyeBC` varchar(1000) NOT NULL,
  `LensLeftEyeDio` varchar(1000) NOT NULL,
  `LensLeftEyeSph` varchar(1000) NOT NULL,
  `LensLeftEyeCyl` varchar(1000) NOT NULL,
  `LensLeftEyeAdd` varchar(1000) NOT NULL,
  `LensLeftEyeTint` varchar(1000) NOT NULL,
  `LensLeftEyeOZ` varchar(1000) NOT NULL,
  `LensLeftEyeVA` varchar(1000) NOT NULL,
  `Age` int(100) NOT NULL,
  `dateofbirth` varchar(1000) NOT NULL,
  `dateofjoin` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customerprofile`
--

INSERT INTO `customerprofile` (`id`, `Name`, `address`, `email`, `phno`, `GlassRighEyeDistanceSph`, `GlassRighEyeDistanceCyl`, `GlassRighEyeDistanceAxis`, `GlassRighEyeDistancePrism`, `GlassRighEyeDistanceBase`, `GlassRighEyeDistanceVa`, `GlassRighEyeNearSph`, `GlassRighEyeNearCyl`, `GlassRighEyeNearAxis`, `GlassRighEyeNearPrism`, `GlassRighEyeNearBase`, `GlassRighEyeNearVA`, `GlassLeftEyeDistancesph`, `GlassLeftEyeDistanceCyl`, `GlassLeftEyeDistanceAxis`, `GlassLeftEyeDistancePrism`, `GlassLeftEyeDistanceBase`, `GlassLeftEyeDistanceVA`, `GlassLeftEyeNearSph`, `GlassLeftEyeNearCyl`, `GlassLeftEyeNearAxis`, `GlassLeftEyeNearPrism`, `GlassLeftEyeNearBase`, `GlassLeftEyeNearVA`, `LensRightEyeBrand`, `LensRightEyeBC`, `LensRightEyeDio`, `LensRightEyeSph`, `LensRightEyeCyl`, `LensRightEyeAdd`, `LensRightEyeTint`, `LensRightEyeOZ`, `LensRightEyeVA`, `LensLeftEyeBrand`, `LensLeftEyeBC`, `LensLeftEyeDio`, `LensLeftEyeSph`, `LensLeftEyeCyl`, `LensLeftEyeAdd`, `LensLeftEyeTint`, `LensLeftEyeOZ`, `LensLeftEyeVA`, `Age`, `dateofbirth`, `dateofjoin`) VALUES
(1, 'anandmaster', 'salem', 'anandkiot@gmail.com1', '98765432101', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '111', '11', '11', '11', '11', '11', '11', '11', '11', '111', '11', '11', '11', 25, '11/14/1991', '01/23/16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(100) NOT NULL,
  `Modelname` varchar(1000) NOT NULL,
  `qty` varchar(1000) NOT NULL,
  `Price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productType`, `Modelname`, `qty`, `Price`) VALUES
(1, 'Lense', 'NH4', '52', 50),
(2, 'Lense', 'KI0', '60', 100),
(3, 'Frame', 'KG', '5', 600);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
