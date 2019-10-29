-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 11:31 PM
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
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `Fee_no` int(6) NOT NULL,
  `Date` date NOT NULL,
  `Reg_No` int(10) NOT NULL,
  `Student_Name` varchar(20) NOT NULL,
  `Semester` varchar(5) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `Reg_No` int(6) DEFAULT NULL,
  `Student_Name` varchar(20) NOT NULL,
  `Semester` varchar(5) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Subject1` varchar(15) NOT NULL,
  `mark1` int(3) NOT NULL,
  `Subject2` varchar(15) NOT NULL,
  `mark2` int(3) NOT NULL,
  `Subject3` varchar(15) NOT NULL,
  `mark3` int(3) NOT NULL,
  `total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Reg_No` int(6) NOT NULL,
  `F_name` varchar(25) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(3) NOT NULL,
  `City` varchar(15) NOT NULL,
  `District` varchar(15) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Course` int(11) NOT NULL,
  `DOJ` date NOT NULL,
  `email` varchar(15) NOT NULL,
  `mob` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Reg_No`, `F_name`, `L_name`, `DOB`, `Sex`, `City`, `District`, `State`, `Course`, `DOJ`, `email`, `mob`, `username`, `password`) VALUES
(0, '', '', '0000-00-00', '', '', '', '', 0, '0000-00-00', '', 0, '', ''),
(2345, 'fgh', 'bnm', '0000-00-00', 'Fem', 'Mumbai', 'Nalanda', 'New Delhi', 0, '0000-00-00', 'anusree@gmail.c', 1234, 'mca979', '12344'),
(23456, 'fgh', 'bnm', '0000-00-00', 'Fem', 'Mumbai', 'Nalanda', 'New Delhi', 0, '0000-00-00', 'anusree@gmail.c', 1234, 'mca979', '12344'),
(234564, 'fgh', 'bnm', '0000-00-00', 'Fem', 'Mumbai', 'Nalanda', 'New Delhi', 0, '0000-00-00', 'anusree@gmail.c', 1234, 'mca979', '12344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`Fee_no`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD KEY `reg_no` (`Reg_No`),
  ADD KEY `reg_no_2` (`Reg_No`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Reg_No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`Reg_No`) REFERENCES `student` (`Reg_No`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
