-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2017 at 06:47 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_connections`
--

CREATE TABLE IF NOT EXISTS `new_connections` (
  `mobile` varchar(10) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `typeofstb` int(10) DEFAULT NULL,
  `noofcon` int(10) DEFAULT NULL,
  `installation` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_connections`
--

INSERT INTO `new_connections` (`mobile`, `firstname`, `lastname`, `typeofstb`, `noofcon`, `installation`) VALUES
('', '', '', 0, 0, 0),
('000000000', 'shreyash', '', 0, 0, 0),
('1234567894', '', '', 1, 1, 3),
('1583', 'abhijeet', 'sss', 0, 0, 0),
('15834454', 'abhijeet', 'sss', 0, 0, 0),
('454524552', 'gaurimaaa', 'kareekarmaaa', 0, 0, 0),
('454545', 'abhijeet', 'test', 3, 3, 3),
('456456456', 'abhijeet', 'testing', 0, 0, 0),
('7275152189', 'Akash', 'Agarwal', 1, 1, 1),
('787878787', 'abhijeet', 'jagtap', 0, 0, 0),
('8291716021', 'Rohit', 'Joshi', 1, 1, 1),
('8552993403', 'Madhura', 'Shaligram', 3, 1, 1),
('8585858585', 'TEJAL', 'SHENDE', 1, 1, 1),
('878552526', 'abhijeet', 'sss', 0, 0, 0),
('8805977915', 'Abhijeet', 'Nawale', 1, 1, 2),
('9096789789', 'abhijeet', 'jagtap', 1, 2, 2),
('9764544291', 'VARADA', 'SHALIGRAM', 1, 1, 1),
('9870261235', 'DEEPALI ', 'JOSHI', 3, 2, 2),
('9999999999', 'Sujay', 'Mahadik', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
