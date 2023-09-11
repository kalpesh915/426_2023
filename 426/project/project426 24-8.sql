-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 01:39 PM
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
(1, 'Demo1', 'My Project', 'admin@project.com', '3acd0be86de7dcccdbf91b20f94a68cea535922d');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `resumeid` int(5) NOT NULL,
  `candidatename` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `qualification` varchar(128) NOT NULL,
  `experience` varchar(128) NOT NULL,
  `resumepath` varchar(1024) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`resumeid`, `candidatename`, `phone`, `email`, `qualification`, `experience`, `resumepath`, `status`) VALUES
(3, 'NIkhil - 1692445637 nikhil.pdf', '9638527410', 'nikhil@google.com', 'BCA', 'Badhuy aavde', 'resumes/NIkhil - 1692445637 nikhil.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(5) NOT NULL,
  `categoryname` varchar(64) NOT NULL,
  `classname` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `classname`, `status`) VALUES
(1, 'Mouse', 'Mouse', 1),
(2, 'Key Board', 'Key-Board', 1),
(3, 'Pen Drive 32GB', 'Pen-Drive-32GB', 1),
(4, 'Head Phone', 'Head-Phone', 1),
(5, 'CPU', 'CPU', 1),
(6, 'Mother Board', 'Mother-Board', 1),
(7, 'Monitor', 'Monitor', 1),
(8, 'RAM', 'RAM', 1),
(9, 'Speakers 5.0', 'Speakers-5.0', 1),
(10, 'Printer', 'Printer', 1),
(11, 'Scanner', 'Scanner', 1),
(12, 'Projector', 'Projector', 1),
(13, 'Laptop Bag', 'Laptop-Bag', 1);

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
(1, 'Hemang (CEO)', '9638527710', '', 'hemang@darsh.com', '', '8855221133', 'koi ne na kevai, due to security reasons', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6056911563182!2d70.7793964744764!3d22.2929216796919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1690371938741!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int(5) NOT NULL,
  `question` varchar(256) NOT NULL,
  `answer` varchar(1024) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `question`, `answer`, `status`) VALUES
(2, 'question 1', 'answer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo text', 1),
(3, 'question 2', 'answer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo text', 1),
(4, 'question 3', 'answer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo text', 1),
(5, 'question 4', 'answer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo text', 1),
(6, 'question 5', 'nswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo textanswer demo text', 1);

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
(20, '2023-07-28 10:58:42', 'admin@project.com', 'successfully login'),
(21, '2023-07-29 11:06:25', 'admin@project.com', 'unsuccessfull atemp for login'),
(22, '2023-07-29 11:06:42', 'admin@project.com', 'successfully login'),
(23, '2023-07-31 11:07:03', 'admin@project.com', 'successfully login'),
(24, '2023-08-01 04:52:24', 'admin@project.com', 'successfully login'),
(25, '2023-08-01 04:53:27', 'admin@project.com', 'successfully login'),
(26, '2023-08-01 11:09:19', 'admin@project.com', 'successfully login'),
(27, '2023-08-02 12:22:40', 'admin@project.com', 'successfully login'),
(28, '2023-08-02 12:27:36', 'admin@project.com', 'successfully login'),
(29, '2023-08-03 04:57:25', 'admin@project.com', 'successfully login'),
(30, '2023-08-03 05:01:13', 'admin@project.com', 'successfully login'),
(31, '2023-08-03 06:06:41', 'admin@project.com', 'successfully login'),
(32, '2023-08-03 06:18:33', 'admin@project.com', 'successfully login'),
(33, '2023-08-03 11:14:17', 'admin@project.com', 'unsuccessfull atemp for login'),
(34, '2023-08-03 11:14:30', 'admin@project.com', 'successfully login'),
(35, '2023-08-04 05:57:45', 'admin@project.com', 'successfully login'),
(36, '2023-08-04 11:18:28', 'admin@project.com', 'successfully login'),
(37, '2023-08-05 11:43:14', 'admin@project.com', 'successfully login'),
(38, '2023-08-07 11:30:32', 'admin@project.com', 'unsuccessfull atemp for login'),
(39, '2023-08-07 11:30:51', 'admin@project.com', 'successfully login'),
(40, '2023-08-08 11:46:02', 'admin@project.com', 'successfully login'),
(41, '2023-08-09 06:11:11', 'vivek@gmail.com', 'unsuccessfull atemp for login'),
(42, '2023-08-09 06:11:21', 'admin@project.com', 'successfully login'),
(43, '2023-08-09 10:45:37', 'admin@project.com', 'successfully login'),
(44, '2023-08-10 11:24:56', 'admin@project.com', 'successfully login'),
(45, '2023-08-11 04:29:23', 'admin@project.com', 'successfully login'),
(46, '2023-08-11 04:32:32', 'admin@project.com', 'Password updated'),
(47, '2023-08-11 04:33:28', 'admin@project.com', 'Password updated'),
(48, '2023-08-11 11:32:28', 'admin@project.com', 'successfully login'),
(49, '2023-08-11 12:12:21', 'admin@project.com', 'successfully login'),
(50, '2023-08-12 04:52:47', 'admin@project.com', 'successfully login'),
(51, '2023-08-12 05:50:44', 'admin@project.com', 'successfully login'),
(52, '2023-08-12 11:42:00', 'admin@project.com', 'successfully login'),
(53, '2023-08-12 12:19:37', 'admin@project.com', 'successfully login'),
(54, '2023-08-14 04:37:45', 'admin@project.com', 'successfully login'),
(55, '2023-08-14 05:12:06', 'admin@project.com', 'successfully login'),
(56, '2023-08-14 12:07:55', 'admin@project.com', 'successfully login'),
(57, '2023-08-16 11:41:05', 'admin@project.com', 'successfully login'),
(58, '2023-08-16 12:01:21', 'admin@project.com', 'successfully login'),
(59, '2023-08-16 12:13:11', 'admin@project.com', 'Social Media Details updated'),
(60, '2023-08-16 12:13:23', 'admin@project.com', 'Social Media Details updated'),
(61, '2023-08-16 12:27:38', 'admin@project.com', 'Contact Details updated'),
(62, '2023-08-17 11:35:39', 'admin@project.com', 'successfully login'),
(63, '2023-08-18 04:30:05', 'admin@project.com', 'successfully login'),
(64, '2023-08-18 04:35:41', 'admin@project.com', 'Contact Details updated'),
(65, '2023-08-18 04:35:52', 'admin@project.com', 'Contact Details updated'),
(66, '2023-08-18 04:36:13', 'admin@project.com', 'Social Media Details updated'),
(67, '2023-08-18 11:41:54', 'admin@project.com', 'successfully login'),
(68, '2023-08-19 11:23:17', 'admin@project.com', 'successfully login'),
(69, '2023-08-21 11:48:12', 'admin@project.com', 'successfully login'),
(70, '2023-08-22 11:38:49', 'admin@project.com', 'successfully login'),
(71, '2023-08-22 12:01:56', 'admin@project.com', 'successfully login'),
(72, '2023-08-23 10:39:43', 'admin@project.com', 'successfully login'),
(73, '2023-08-23 11:14:58', 'admin@project.com', 'successfully login'),
(74, '2023-08-23 11:15:03', 'admin@gmail.com', 'unsuccessfull atemp for login'),
(75, '2023-08-23 11:16:57', 'admin@gmail.com', 'unsuccessfull atemp for login'),
(76, '2023-08-23 11:17:18', 'admin@gmail.com', 'unsuccessfull atemp for login'),
(77, '2023-08-23 11:17:31', 'admin@gmail.com', 'unsuccessfull atemp for login'),
(78, '2023-08-23 11:17:50', 'admin@project.com', 'successfully login'),
(79, '2023-08-23 11:18:19', 'admin@project.com', 'successfully login'),
(80, '2023-08-23 11:20:37', 'admin@project.com', 'successfully login'),
(81, '2023-08-23 11:24:33', 'admin@project.com', 'successfully login'),
(82, '2023-08-23 11:26:14', 'admin@project.com', 'successfully login'),
(83, '2023-08-24 11:16:55', 'admin@project.com', 'successfully login');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `sendername` varchar(128) NOT NULL,
  `senderphone` varchar(20) NOT NULL,
  `senderemail` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(4096) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `timestamp`, `sendername`, `senderphone`, `senderemail`, `subject`, `message`, `status`) VALUES
(3, '2023-08-08 12:12:38', 'demo', '7894561230', 'demo', 'ddm', 'fr', 1),
(4, '2023-08-08 12:12:38', 'de', '9632587410', 'sdfd', 'hgfd', 'hgghf', 1),
(7, '2023-08-17 11:50:07', 'Demo', '1122334455', 'another@gmail.com', 'testing', 'another msg', 1),
(8, '2023-08-17 11:51:57', 'Khakhi Demo', '9825285163', 'another@gmail.com', 'testing', 'demo', 0),
(9, '2023-08-17 11:54:46', 'kairavi', '1122334455', 'another@gmail.com', 'testing', 'kaurav sena', 0),
(10, '2023-08-17 11:56:53', 'Demo', '1122334455', 'another@gmail.com', 'testing', 'dmeo', 0),
(11, '2023-08-17 11:57:16', 'Demo', '1122334455', 'another@gmail.com', 'testing', 'd', 0),
(12, '2023-08-17 11:58:13', 'Demo', '1122334455', 'another@gmail.com', 'testing', 'sdf', 1),
(13, '2023-08-17 11:59:46', 'Khakhi Demo', '1122334455', 'another@gmail.com', 'testing', 'sdf', 0),
(14, '2023-08-17 12:01:15', 'kairavi', '1122334455', 'another@gmail.com', 'testing', 'sdaf', 1),
(15, '2023-08-17 12:03:41', 'Demo', '1122334455', 'another@gmail.com', 'testing', 'sdfds', 1),
(16, '2023-08-17 12:06:03', 'Sunny', '1122334455', 'another@gmail.com', 'testing', 'dermo', 1);

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
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `imageid` int(5) NOT NULL,
  `productid` int(5) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `mainimage` int(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`imageid`, `productid`, `imagepath`, `mainimage`, `status`) VALUES
(6, 5, 'img/productsimages/6750 img1.jpg', 0, 1),
(7, 6, 'img/productsimages/2404 img1.jpg', 0, 1),
(8, 7, 'img/productsimages/7442 img2.jpg', 1, 1),
(9, 7, 'img/productsimages/7658 img3.jpg', 0, 1),
(14, 11, 'img/productsimages/6025 img1.jpg', 0, 1),
(15, 11, 'img/productsimages/8436 img2.jpg', 1, 1),
(16, 11, 'img/productsimages/3493 img3.jpg', 0, 1),
(18, 10, 'img/productsimages/1223 img0.jpg', 0, 1),
(19, 9, 'img/productsimages/7283 img7.jpg', 0, 1),
(20, 9, 'img/productsimages/2151 img8.jpg', 0, 1),
(21, 9, 'img/productsimages/5086 img11.jpg', 0, 1),
(22, 8, 'img/productsimages/8937 img7.jpg', 0, 1),
(23, 8, 'img/productsimages/5733 img12.jpg', 0, 1),
(24, 4, 'img/productsimages/9822 img10.jpg', 0, 1),
(25, 4, 'img/productsimages/1227 img11.jpg', 0, 1),
(26, 4, 'img/productsimages/9236 img12.jpg', 0, 1),
(27, 3, 'img/productsimages/3496 img7.jpg', 0, 1),
(28, 3, 'img/productsimages/1818 img8.jpg', 0, 1),
(29, 3, 'img/productsimages/4346 img10.jpg', 0, 1),
(30, 3, 'img/productsimages/1826 img11.jpg', 0, 1),
(31, 3, 'img/productsimages/6222 img12.jpg', 0, 1),
(32, 2, 'img/productsimages/8216 img10.jpg', 0, 1),
(33, 2, 'img/productsimages/3800 img11.jpg', 0, 1),
(34, 2, 'img/productsimages/1163 img12.jpg', 0, 1),
(35, 1, 'img/productsimages/1497 img8.jpg', 0, 1),
(36, 1, 'img/productsimages/5059 img10.jpg', 0, 1),
(37, 1, 'img/productsimages/6312 img11.jpg', 0, 1),
(38, 1, 'img/productsimages/3257 img12.jpg', 0, 1),
(39, 12, 'img/productsimages/9310 img11.jpg', 1, 1),
(40, 12, 'img/productsimages/3903 img12.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(5) NOT NULL,
  `productname` varchar(128) NOT NULL,
  `category` int(5) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `material` varchar(512) NOT NULL,
  `packaging` varchar(512) NOT NULL,
  `batchno` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `category`, `description`, `price`, `material`, `packaging`, `batchno`, `status`) VALUES
(1, 'demo', 1, 'demo', 2100, 'ok', 'ko', '', 1),
(2, 'demo', 4, 'another product', 1200, 'ok', 'ok', '', 1),
(3, 'demo', 4, 'another product', 1200, 'ok', 'ok', 'another', 1),
(4, 'demo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(5, 'demo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(6, 'dmeo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(8, 'demo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(9, 'demo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(10, 'demo', 3, 'demo', 1200, 'ok', 'ko', 'demo', 1),
(11, 'Sample Product ', 3, 'DDR4 RAM ', 5800, 'ok', 'plastic', 'demo', 1),
(12, 'Product with images', 2, 'demo', 1200, 'ok', 'ko', 'demo', 1);

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
(1, 'Car', '<i class=\"fa fa-car\" aria-hidden=\"true\"></i>', 'Car Rental Service', 1),
(2, 'Time', '<i class=\"fa fa-clock\" aria-hidden=\"true\"></i>', 'Deliver on accurate time', 1),
(3, 'User', '<i class=\"fa fa-users\" aria-hidden=\"true\"></i>', 'Many Users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderid` int(5) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(512) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `imagetype` int(2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderid`, `title`, `description`, `imagepath`, `imagetype`, `status`) VALUES
(3, 'Demo 1', 'Deliver on accurate time slider new image', 'img/sliderimages/1911 _ img0.jpg', 1, 1),
(4, 'Demo 2', 'Deliver on accurate time slider new image', 'img/sliderimages/6410 _ img1.jpg', 2, 1),
(5, 'Demo 3', 'Deliver on accurate time slider new image', 'img/sliderimages/3898 _ img2.jpg', 1, 1),
(6, 'Demo 4', 'Deliver on accurate time slider new image', 'img/sliderimages/2433 _ img3.jpg', 1, 1),
(7, 'Demo 5', 'Deliver on accurate time slider new image', 'img/sliderimages/7572 _ img4.jpg', 1, 1),
(8, 'Gallery 1', 'Deliver on accurate time slider new image', 'img/sliderimages/5534 _ img3.jpg', 1, 1);

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
(1, 'https://www.facebook1.co.in', 'https://www.twitter.com', 'https://www.instagram.com', '', '', 'https://www.dummyurl.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(5) NOT NULL,
  `membername` varchar(128) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `teamimage` varchar(256) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamid`, `membername`, `designation`, `twitter`, `facebook`, `instagram`, `linkedin`, `teamimage`, `status`) VALUES
(1, 'Jigar Vaghela', 'Manager', 'https://www.twitter.com', 'https://www.dummyurl.co.in', 'https://www.instagram.com', 'https://www.instagram.com', 'img/teamimages/3504 _ img3.jpg', 1),
(3, 'Harshil Khakhi', 'Manager', 'https://www.twitter.com', 'https://www.dummyurl.co.in', 'https://www.instagram.com', 'https://www.instagram.com', 'img/teamimages/8892 _ img1.jpg', 1),
(4, 'Vivek Dodiya', 'Manager', 'https://www.twitter.com', 'https://www.dummyurl.co.in', '', '', 'img/teamimages/4518 _ img2.jpg', 0),
(5, 'Ganga Khatri', 'Manager', '', '', '', 'https://www.instagram.com', 'img/teamimages/5410 _ img1.jpg', 1),
(6, 'Kairavi Parsana', 'Boss A', 'https://www.twitter.com', 'https://www.dummyurl.co.in', 'https://www.instagram.com', 'https://www.instagram.com', 'img/teamimages/3843 _ img2.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`resumeid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`metaid`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderid`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`socialid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `resumeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `metaid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `imageid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
