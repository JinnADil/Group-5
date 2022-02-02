-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 12:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_info`
--

CREATE TABLE `history_info` (
  `id` int(11) NOT NULL,
  `user_info_id` varchar(200) NOT NULL,
  `sender_req_email` varchar(200) NOT NULL,
  `sender_docu` varchar(200) NOT NULL,
  `sender_docu_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `sender_user` varchar(200) NOT NULL,
  `sender_pass` varchar(200) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `sender_tmp_email` varchar(200) NOT NULL,
  `sender_status` varchar(200) NOT NULL,
  `sender_lname` varchar(200) NOT NULL,
  `sender_fname` varchar(200) NOT NULL,
  `sender_mname` varchar(100) NOT NULL,
  `sender_extension` varchar(200) NOT NULL,
  `sender_phnum` varchar(200) NOT NULL,
  `sender_addrs` varchar(200) NOT NULL,
  `sender_month` varchar(200) NOT NULL,
  `sender_day` varchar(200) NOT NULL,
  `sender_year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_info`
--
ALTER TABLE `history_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_info`
--
ALTER TABLE `history_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
