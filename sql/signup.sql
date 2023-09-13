-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 02:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'Arunkumar', '$2y$10$lr.4ByY0mfvVVeNeDii4AeVSIVEcO.KN7IOGMVo3ztax7iJluwzkW', 'arunmechbit@gmai.com', '2023-05-12 07:03:35'),
(2, 'ak', '$2y$10$La/V4jdLD55bipZWHH2YdeknT7Vh.QvEPkcJJooCpbnb9Nrvx/Wqm', 'badboymcarun@gmail.com', '2023-05-31 05:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `weaving`
--

CREATE TABLE `weaving` (
  `batchid` int(11) NOT NULL,
  `process` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `scale` varchar(255) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weaving`
--

INSERT INTO `weaving` (`batchid`, `process`, `material`, `quantity`, `scale`, `startdate`, `enddate`, `status`) VALUES
(2, 'yarning', 'Null', 11, 'Null', '2023-05-23 12:23:00', '2023-05-23 12:23:00', 'Process Complete'),
(3, 'yarning', 'Null', 11, 'Null', '2023-05-23 12:00:00', '2023-05-23 12:20:00', 'Process Complete');

-- --------------------------------------------------------

--
-- Table structure for table `yarning`
--

CREATE TABLE `yarning` (
  `batchid` int(11) NOT NULL,
  `process` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `scale` varchar(255) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yarning`
--

INSERT INTO `yarning` (`batchid`, `process`, `material`, `quantity`, `scale`, `startdate`, `enddate`, `status`) VALUES
(1, 'yarning', 'Null', 12, 'Null', '2023-05-13 14:09:00', '2023-05-13 14:38:00', 'On Process'),
(2, 'yarning', 'Null', 12, 'Null', '2023-05-13 14:09:00', '2023-05-13 14:38:00', 'On Process'),
(3, 'yarning', 'Null', 15, 'Null', '2023-05-13 14:09:00', '2023-05-13 14:38:00', 'On Process'),
(4, 'yarning', 'Null', 25, 'Null', '2023-05-13 14:09:00', '2023-05-13 14:38:00', 'Process Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yarning`
--
ALTER TABLE `yarning`
  ADD PRIMARY KEY (`batchid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yarning`
--
ALTER TABLE `yarning`
  MODIFY `batchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
