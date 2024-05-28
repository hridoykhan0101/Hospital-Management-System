-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 11:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_appoinment`
--

CREATE TABLE `add_appoinment` (
  `id` int(250) NOT NULL,
  `pfn` varchar(2000) NOT NULL,
  `pa` varchar(2000) NOT NULL,
  `pn` varchar(2000) NOT NULL,
  `dn` varchar(2000) NOT NULL,
  `dt` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_appoinment`
--

INSERT INTO `add_appoinment` (`id`, `pfn`, `pa`, `pn`, `dn`, `dt`) VALUES
(1, 'dvd', 'dv', 'dv', 'dv', 'dv'),
(2, 'df', 'df', 'dfd', 'fd', 'df'),
(3, 'jhcds', 'fbvzdf', 'fdbdfg', 'fbfd', '20 january 2023');

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `id` int(250) NOT NULL,
  `doc_name` varchar(2000) NOT NULL,
  `doc_email` varchar(2000) NOT NULL,
  `phn_no` varchar(2000) NOT NULL,
  `specialist` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`id`, `doc_name`, `doc_email`, `phn_no`, `specialist`) VALUES
(1, 'hasninur rahmna', 'hanisur@gmail.com', '01626262626', 'dentist'),
(2, 'fbvfb', 'fbfb', 'fbfbf', 'fbfbf'),
(3, 'fgfg', 'fgfgf', 'gfgfg', 'fgfg'),
(4, 'regfrf', 'grfgf', 'gfgfgf', 'gfgf'),
(5, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaaa'),
(6, 'qwe', 'qwe', 'qwe', 'qwe'),
(12, 'sdsd', 'sdsds', 'sdsd', 'saaaaa'),
(13, 'sfdf', 'dfdfd', 'fdfdf', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('', '', ''),
('', '', ''),
('aaa', 'aaa@gmail.com', '4321'),
('frs', 'aa@gmail.com', '4321'),
('frs', 'aa@gmail.com', '4321'),
('aaa', 'bbb@gmail.com', '4321'),
('hasinur', 'hasinur@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_appoinment`
--
ALTER TABLE `add_appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_appoinment`
--
ALTER TABLE `add_appoinment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
