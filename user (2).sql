-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction No:` int(20) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Receiver` varchar(20) NOT NULL,
  `Amount` int(25) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Transaction No:`, `Sender`, `Receiver`, `Amount`, `timestamp`) VALUES
(1, 'Srishti', 'Vishnu', 23456, '2021-01-13 20:58:39'),
(2, 'Srishti', 'Ashish', 22068, '2021-01-13 20:59:34'),
(3, 'Jeel', 'Ashish', 60000, '2021-01-13 21:03:37'),
(4, 'Jeel', 'Ashish', 540000, '2021-01-13 21:05:10'),
(5, 'Ashish', 'Srishti', 100000, '2021-01-13 21:12:35'),
(6, 'Ashish', 'Jeel', 7000, '2021-01-13 21:30:09'),
(7, 'Pratima', 'Mahesh', 500, '2021-01-13 21:31:06'),
(8, 'Isha', 'Rakesh', 250, '2021-01-13 21:32:12'),
(9, 'Riya', 'Isha', 1, '2021-01-13 23:52:30'),
(10, 'Pratima', 'Rakesh', 1, '2021-01-14 16:53:18'),
(11, 'Pratima', 'Srishti', 1, '2021-01-14 16:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `Id` int(10) NOT NULL,
  `Name` char(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Srishti', 'srishti@gmail.com', 100001),
(2, 'Rakesh', 'rakesh@gmail.com', 34685),
(3, 'Pratima', 'pratima@gmail.com', 9399),
(4, 'Sanjana', 'sanjana@gmail.com', 4996),
(5, 'Riya', 'riya@gmail.com', 1999),
(6, 'Ashish', 'ashish@gmail.com', 540068),
(7, 'Isha', 'isha@gmail.com', 7756),
(8, 'Mahesh', 'mahesh@gmail.com', 16508),
(9, 'Vishnu', 'vishnu@gmail.com', 103579),
(10, 'Jeel', 'jeel@gmail.com', 7009);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction No:`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Transaction No:` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
