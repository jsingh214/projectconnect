-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2014 at 11:42 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `equipment`
--

-- --------------------------------------------------------

--
-- Table structure for table `pods`
--

CREATE TABLE IF NOT EXISTS `pods` (
  `pod_id` int(100) NOT NULL AUTO_INCREMENT,
  `pod_desc` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`pod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pods`
--

INSERT INTO `pods` (`pod_id`, `pod_desc`, `status`) VALUES
(1, 'test', 0),
(2, 'test2', 0),
(3, 'test3', 0),
(4, 'test2', 0),
(5, 'test3', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
