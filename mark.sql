-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `Reg_No` int(6) DEFAULT NULL,
  `Stud_Name` varchar(20) NOT NULL,
  `Sem` varchar(5) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Sub1` varchar(15) NOT NULL,
  `mark1` int(3) NOT NULL,
  `Sub2` varchar(15) NOT NULL,
  `mark2` int(3) NOT NULL,
  `Sub3` varchar(15) NOT NULL,
  `mark3` int(3) NOT NULL,
  `total` int(6) NOT NULL,
  `Percentage` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`Reg_No`, `Stud_Name`, `Sem`, `Course`, `Sub1`, `mark1`, `Sub2`, `mark2`, `Sub3`, `mark3`, `total`, `Percentage`) VALUES
(121, 'qwe', '3', 'mca', 'asd', 50, 'fgh', 50, 'jkl', 50, 300, '50'),
(100, 'Sruthy', '3', 'Mca', 'DAA', 60, 'CN', 70, 'SE', 80, 300, '70'),
(100, 'Sruthy', '3', 'Mca', 'DAA', 60, 'CN', 70, 'SE', 80, 300, '70'),
(121, 'hfg', '3', 'mca', 'fdf', 0, 'CN', 50, 'hgfhg', 6, 300, '18.66'),
(0, 'ddd', '', 'ggg', '', 5, '', 45, '', 456, 300, '168.6'),
(0, 'ddd', '', 'ggg', '', 5, '', 45, '', 456, 300, '168.6'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(0, '', '', '', '', 0, '', 0, '', 0, 300, '0'),
(121, 'Sruthy', '3', 'mca', 'asd', 60, 'fgh', 5, 'jkl', 80, 300, '48.33'),
(29, 'Sree', '3', 'mca', 'DAA', 50, 'CN', 50, 'SE', 50, 300, '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD KEY `reg_no` (`Reg_No`),
  ADD KEY `reg_no_2` (`Reg_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
