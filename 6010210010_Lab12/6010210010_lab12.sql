-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 09:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6010210010_lab12`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEP_ID` varchar(2) NOT NULL,
  `DEP_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEP_ID`, `DEP_NAME`) VALUES
('01', 'Accounting'),
('02', 'Engineering'),
('03', 'Transporting');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMP_ID` varchar(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DEP_ID` int(11) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMP_ID`, `NAME`, `DEP_ID`, `AGE`, `SALARY`) VALUES
('010', 'Kongpop Jeenkeawpiam', 2, 23, 123123),
('0115', 'Peter Lance', 1, 45, 70000),
('0123', 'MIXX', 2, 19, 21300),
('0203', 'Lilly McDonald', 2, 35, 35000),
('0234', 'Tonnam', 1, 18, 150000),
('1000', 'John Mayer', 2, 25, 15000),
('1005', 'Michael Scotch', 1, 44, 28500),
('123123', 'NIGLOGIN', 1, 21, 70000),
('1559', 'Britney Wise', 1, 53, 36500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMP_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
