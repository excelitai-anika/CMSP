-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 06:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `profile_picture`, `type`) VALUES
(12, 'hudai  ', 'hudai@gmail.com', '', 'rishabh-malhotra-83ypHTv6J2M-unsplash.jpg', 'user'),
(14, 'Ani    ', 'anik@gmail.com    ', '202cb962ac59075b964b07152d234b70', 'bence-balla-schottner-_HAVhi9B2a4-unsplash.jpg', 'user'),
(18, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'brooke-cagle-z1B9f48F5dc-unsplash (1).jpg', 'admin'),
(19, 'Friends', 'friends@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'faith-yarn-jX2cntCbrAo-unsplash.jpg', 'user'),
(20, 'mon', 'monica@gmail.com', '202cb962ac59075b964b07152d234b70', 'faith-yarn-Wr0TpKqf26s-unsplash.jpg', 'user'),
(21, 'joey', 'joey@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'tiko-giorgadze-AP-TfM3KT4g-unsplash.jpg', 'admin'),
(22, 'hhh', 'gsrgsg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user'),
(23, 'hgehrger', 'yheyhr@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'user'),
(24, 'hgehrger', 'yheyhr@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'user'),
(25, 'hghgj', 'khh@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'user'),
(26, 'hghgj', 'khh@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'user'),
(27, 'rdyhery', 'yeyr@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'user'),
(28, 'jyuyrt', 'hmgjhjh@gmail.com', '', '', 'user'),
(29, 'jyuyrthgg', 'hmgjhjhgggh@gmail.com', '', '', 'user'),
(30, 'jyuhyrthgg', 'hmfffgjhjhgggh@gmail.com', '', '', 'user'),
(31, 'hhg', 'htht@gmail.com', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_update`
--

CREATE TABLE `admin_login_update` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` blob NOT NULL,
  `reset password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `mail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`mail`, `name`, `pass`, `type`) VALUES
('a@gmail.com', 'test', '202cb962ac59075b964b07152d234b70', ''),
('ani@gmail.com', 'asa', '202cb962ac59075b964b07152d234b70', ''),
('taa@gmail.com', 'test', '250cf8b51c773f3f8dc8b4be867a9a02', ''),
('afa@gmail.com', 'test', '250cf8b51c773f3f8dc8b4be867a9a02', ''),
('DAS@gmail.com', 'test', '250cf8b51c773f3f8dc8b4be867a9a02', ''),
('anghsgi@gmail.com', 'Shapla City ', '250cf8b51c773f3f8dc8b4be867a9a02', ''),
('avia@gmail.com', 'avia', '202cb962ac59075b964b07152d234b70', ''),
('sdvdv@gmail.com', 'sdfcs', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_login_update`
--

CREATE TABLE `staff_login_update` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` blob NOT NULL,
  `reset_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_update`
--
ALTER TABLE `admin_login_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_login_update`
--
ALTER TABLE `staff_login_update`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
