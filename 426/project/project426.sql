-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 01:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project426`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` int(5) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Demo', 'My Project', 'admin@project.com', '3acd0be86de7dcccdbf91b20f94a68cea535922d');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(2) NOT NULL,
  `contactperson` varchar(128) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(512) NOT NULL,
  `googlemap` varchar(4096) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactperson`, `phone1`, `phone2`, `email1`, `email2`, `whatsapp`, `address`, `googlemap`) VALUES
(1, 'Hemang (CEO)', '9638527710', '5544332211', 'hemang@darsh.com', 'hemang@nasa.com', '8855221133', 'koi ne na kevai, due to security reasons', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6056911563182!2d70.7793964744764!3d22.2929216796919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1690371938741!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `event` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `timestamp`, `email`, `event`) VALUES
(1, '2023-07-24 11:41:05', 'admin@project.com', 'unsuccessfgull atemp for login'),
(2, '2023-07-24 11:41:34', 'admin@project.com', 'successfully login'),
(3, '2023-07-24 11:49:42', 'sdfsdf@gmail.com', 'unsuccessfull atemp for login'),
(4, '2023-07-24 11:51:11', 'ad@gmail.com', 'unsuccessfull atemp for login'),
(5, '2023-07-24 11:51:53', 'admin@project.com', 'successfully login'),
(6, '2023-07-24 11:52:35', 'admin@project.com', 'successfully login'),
(7, '2023-07-25 11:12:23', 'admin@project.com', 'successfully login'),
(8, '2023-07-25 11:38:59', 'admin@project.com', 'Password updated'),
(9, '2023-07-25 11:39:51', 'admin@project.com', 'unsuccessfull attempt to Password updated'),
(10, '2023-07-26 11:23:07', 'admin@project.com', 'unsuccessfull atemp for login'),
(11, '2023-07-26 11:23:16', 'admin@project.com', 'successfully login'),
(12, '2023-07-26 11:52:27', 'admin@project.com', 'Contact Details updated'),
(13, '2023-07-26 12:07:11', 'admin@project.com', 'Social Media Details updated'),
(14, '2023-07-27 11:08:52', 'admin@project.com', 'successfully login'),
(15, '2023-07-27 11:25:58', 'admin@project.com', 'successfully login'),
(16, '2023-07-27 11:27:47', 'admin@project.com', 'Social Media Details updated'),
(17, '2023-07-27 11:28:27', 'admin@project.com', 'Social Media Details updated'),
(18, '2023-07-28 10:57:50', 'admin@project.com', 'unsuccessfull atemp for login'),
(19, '2023-07-28 10:58:00', 'admon@project.com', 'unsuccessfull atemp for login'),
(20, '2023-07-28 10:58:42', 'admin@project.com', 'successfully login');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `metaid` int(1) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `keywords` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`metaid`, `description`, `keywords`) VALUES
(1, 'demo  another text some data', 'demo keywords, another data, sdample data');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(5) NOT NULL,
  `title` varchar(128) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `title`, `icon`, `description`, `status`) VALUES
(1, 'Car', '<i class=\"fa fa-car\" aria-hidden=\"true\"></i>', 'Car Rental Service', 0),
(2, 'Time', '<i class=\"fa fa-clock\" aria-hidden=\"true\"></i>', 'Deliver on accurate time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `socialid` int(2) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`socialid`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `snapchat`) VALUES
(1, 'https://www.facebook.co.in', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.dummyurl.com', 'https://www.dummyurl.com', 'https://www.dummyurl.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`metaid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`socialid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `metaid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
