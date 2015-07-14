---- phpMyAdmin SQL Dump
---- version 4.0.4
---- http://www.phpmyadmin.net
----
---- Host: localhost
---- Generation Time: Mar 16, 2014 at 12:42 AM
---- Server version: 5.6.12-log
---- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE DATABASE IF NOT EXISTS `members` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `members`;

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE IF NOT EXISTS `data` (
  `Name` varchar(40) DEFAULT NULL,
  `Emailid` varchar(40) DEFAULT NULL,
  `Sex` varchar(40) DEFAULT NULL,
  `Shirt` varchar(40) DEFAULT NULL, 
  `Department` varchar(40) DEFAULT NULL,
  `Year` varchar(40) DEFAULT NULL,
  `PhoneNo` varchar(40) DEFAULT NULL,
  `Paid` varchar(40) DEFAULT NULL,
  `Paidto` varchar(40) DEFAULT NULL,
  `Timepaid` varchar(40) DEFAULT NULL,
  `Shirtreceived` varchar(40) DEFAULT NULL,
  `CD` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`PhoneNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `admins` (
  `Username` varchar(40) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Numvalidated` int(11) DEFAULT '0',
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
