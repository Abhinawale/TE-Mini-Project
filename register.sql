-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 11:33 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-2+ubuntu16.04.1+deb.sury.org+4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_on`
--
-- Creation: Sep 17, 2017 at 08:29 AM
-- Last update: Sep 17, 2017 at 03:06 PM
--

DROP TABLE IF EXISTS `add_on`;
CREATE TABLE `add_on` (
  `mobile` varchar(10) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `addon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `add_on`:
--

--
-- Dumping data for table `add_on`
--

INSERT DELAYED IGNORE INTO `add_on` (`mobile`, `cost`, `addon`) VALUES
('8805977915', '45', 'Sports Pack'),
('8805977915', '35', 'Music Pack');

-- --------------------------------------------------------

--
-- Table structure for table `basic_pack`
--
-- Creation: Sep 17, 2017 at 08:29 AM
-- Last update: Sep 17, 2017 at 03:06 PM
--

DROP TABLE IF EXISTS `basic_pack`;
CREATE TABLE `basic_pack` (
  `mobile` varchar(11) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `basic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `basic_pack`:
--

--
-- Dumping data for table `basic_pack`
--

INSERT DELAYED IGNORE INTO `basic_pack` (`mobile`, `cost`, `basic`) VALUES
('8805977915', '500', 'Package2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Creation: Sep 06, 2017 at 02:27 PM
-- Last update: Sep 17, 2017 at 03:06 PM
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `typeofstb` int(10) DEFAULT NULL,
  `noofcon` int(10) DEFAULT NULL,
  `installation` int(10) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `customer`:
--

--
-- Dumping data for table `customer`
--

INSERT DELAYED IGNORE INTO `customer` (`firstname`, `lastname`, `mobile`, `email`, `address`, `street`, `landmark`, `locality`, `pincode`, `city`, `password`, `typeofstb`, `noofcon`, `installation`, `total`) VALUES
('shreyash', '', '000000000', 'lahaneshreyash@gmail.com', 'florida', 'nincc', 'ceevev', 'kothrud', 41414, 'pune', 'shree', NULL, NULL, NULL, NULL),
('abhijeet', 'sss', '1583', 'sswsws', 'sssss', 'ssssss', 'ssssss', 'ssssss', 495885, 'hyderabad', 'rrr', NULL, NULL, NULL, NULL),
('abhijeet', 'sss', '15834454', 'sswsws', 'sssss', 'ssssss', 'ssssss', 'ssssss', 495885, 'hyderabad', 'term', NULL, NULL, NULL, NULL),
('gaurimaaa', 'kareekarmaaa', '454524552', 'gaurikara@zigzag.com', 'mjnh', 'mdovjef', 'vrvsgws', 'gradrh', 132643, '', 'gauri', NULL, NULL, NULL, NULL),
('abhijeet', 'test', '454545', 'nkno', 'nini', 'npnin', 'boubub', 'bouboub', 45454, 'mumbai', 'hh', 3, 3, 3, NULL),
('abhijeet', 'testing', '456456456', 'huhugu', 'nouihug9u', 'buibuivg', 'jbuvyv', 'bjbuii', 4545, 'nashik', 'term', NULL, NULL, NULL, NULL),
('Akash', 'Agarwal', '7275152189', 'akashagarwal@gmail.com', 'aiw9dw', 'crvjpwb', 'rvwbrb', 'bbwb', 4545, 'pune', 'akash', 1, 1, 1, NULL),
('abhijeet', 'jagtap', '787878787', 'pompom', 'cecevrv', 'swsef4rv', 'vnnbgbu7', 'm4dkcj95', 4545, 'pune', 'rick', NULL, NULL, NULL, NULL),
('TEJAL', 'SHENDE', '8585858585', 'tejalalala.com', 'shrerama heights', 'mamta road', 'back gate', 'kothrud', 4141, 'pune', 'tejal', 1, 1, 1, NULL),
('abhijeet', 'sss', '878552526', 'sswsws', 'sssss', 'ssssss', 'ssssss', 'ssssss', 495885, 'hyderabad', 'tomi', NULL, NULL, NULL, NULL),
('Abhijeet', 'Nawale', '8805977915', 'abhijeetnawale13@gmail.com', ',pkloo', 'mo[onipb', 'nipiiub', 'dtyf5ex', 45142, '', 'abhi', 1, 1, 2, '580'),
('abhijeet', 'jagtap', '9096789789', 'harshaljagtap', 'neiv', 'cmeiknqv', 'vmevqve', 'ewkvevq2', 85858, 'nashik', 'harsh', 1, 2, 2, NULL),
('Sujay', 'Mahadik', '9999999999', 'sujaymahadik@gmail.com', 'lotus paradise', 'pmc school road', 'rambaugh colony', 'kothrud', 41414, 'pune', 'sas', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
-- Creation: Sep 17, 2017 at 06:00 PM
-- Last update: Sep 17, 2017 at 06:00 PM
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `name` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `employee`:
--

--
-- Dumping data for table `employee`
--

INSERT DELAYED IGNORE INTO `employee` (`name`, `userid`, `password`, `city`, `email`, `mobile`) VALUES
('Abhijeet Nawale', 'PUN-001', '001', 'pune', 'pun001@gmail.com', 1111111111),
('Gauri Karekar', 'PUN-002', '111', 'pune', 'pun002@gmail.com', 55501235);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--
-- Creation: Sep 17, 2017 at 08:27 AM
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `name_package` varchar(50) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `packages`:
--

--
-- Dumping data for table `packages`
--

INSERT DELAYED IGNORE INTO `packages` (`name_package`, `cost`) VALUES
('Package1', '350'),
('Package2', '500'),
('Package3', '700'),
('Package4', '1400'),
('Sports Pack', '45'),
('Religious Pack', '45'),
('Kids Pack', '30'),
('Music Pack', '35'),
('Hindi Entertainment Pack', '70'),
('Marathi Pack', '40');

-- --------------------------------------------------------

--
-- Table structure for table `regispg2`
--
-- Creation: Sep 01, 2017 at 05:24 PM
--

DROP TABLE IF EXISTS `regispg2`;
CREATE TABLE `regispg2` (
  `typeofstb` int(11) NOT NULL,
  `noofcon` int(11) NOT NULL,
  `selector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `regispg2`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`userid`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for add_on
--

--
-- Metadata for basic_pack
--

--
-- Metadata for customer
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT DELAYED IGNORE INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'register', 'customer', '{"CREATE_TIME":"2017-09-06 19:57:27","col_order":["0","1","2","3","7","4","5","6","8","9","10","11","12","13","14"],"col_visib":["1","1","1","1","1","1","1","1","1","1","1","1","1","1","1"],"sorted_col":"`customer`.`total` ASC"}', '2017-09-16 19:27:13');

--
-- Metadata for employee
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT DELAYED IGNORE INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'register', 'employee', '{"sorted_col":"`userid` ASC"}', '2017-09-17 11:44:54');

--
-- Metadata for packages
--

--
-- Metadata for regispg2
--

--
-- Metadata for register
--
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
