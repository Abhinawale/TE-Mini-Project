-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2017 at 01:59 PM
-- Server version: 5.7.19-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`firstname`, `lastname`, `mobile`, `email`, `address`, `street`, `landmark`, `locality`, `pincode`, `password`) VALUES
('abhijeet', 'nawale', 44, 'abhijeetnawale13@gmail.com', '7,vishwashanti soc', 'sambhajinagar', 'kamalnayan bajaj school', 'chinchwad', 411019, 'abhi@123'),
('abhijeet', 'nawale', 44, 'abhijeetnawale13@gmail.com', '7,vishwashanti soc', 'sambhajinagar', 'kamalnayan bajaj school', 'chinchwad', 411019, 'abhi@123');

-- --------------------------------------------------------

--
-- Table structure for table `regispg2`
--

CREATE TABLE `regispg2` (
  `typeofstb` int(11) NOT NULL,
  `noofcon` int(11) NOT NULL,
  `selector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
