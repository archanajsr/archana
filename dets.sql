-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 09:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `dets`
--

CREATE TABLE `dets` (
  `regid` int(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `phone` bigint(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `gender` int(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dets`
--

INSERT INTO `dets` (`regid`, `fname`, `uname`, `mail`, `phone`, `pass`, `gender`, `date`) VALUES
(6, 'Sumit', 'Ssumit kumar', 'kunalitechnology@gmail.com', 9934347907, '', 0, '2021-08-06 12:10:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dets`
--
ALTER TABLE `dets`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dets`
--
ALTER TABLE `dets`
  MODIFY `regid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
