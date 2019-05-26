-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 04:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `uname` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `branch` text NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`uname`, `pass`, `branch`, `balance`) VALUES
('', '', '', 0),
('atul', '9876', 'cse', 2350),
('prince', 'abc', 'ranchi', 1250),
('rishab', 'qwerty', 'noida', 0),
('sagar', '123', 'ranchi', 2500),
('shubham', 'qwe', 'noida', 500);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tnum` int(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tnum`, `sender`, `receiver`, `time`, `amount`) VALUES
(1, 'sagar', 'atul', '2019-04-23 10:25:33', 200),
(2, 'sagar', 'shubham', '2019-04-23 10:54:42', 600),
(3, 'shubham', '', '2019-04-23 11:09:03', 0),
(4, 'shubham', '', '2019-04-23 11:09:04', 0),
(5, 'shubham', 'sagar', '2019-04-23 11:09:18', 100),
(6, 'shubham', '', '2019-04-23 11:09:19', 0),
(7, 'sagar', 'atul', '2019-04-23 11:23:12', 100),
(8, 'sagar', 'atul', '2019-04-23 14:55:51', 500),
(9, 'sagar', 'garvit', '2019-04-23 14:57:40', 500),
(10, 'sagar', 'dips', '2019-04-25 00:04:37', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tnum` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
