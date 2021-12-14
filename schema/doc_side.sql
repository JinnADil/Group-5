-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 10:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_side`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctracker`
--

CREATE TABLE `doctracker` (
  `id` int(11) NOT NULL,
  `doc_type` int(11) DEFAULT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `doc_status` int(11) DEFAULT NULL,
  `Receiver_test` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctracker`
--

INSERT INTO `doctracker` (`id`, `doc_type`, `sender`, `receiver`, `doc_status`, `Receiver_test`) VALUES
(1, NULL, NULL, NULL, NULL, 'akohung8@gmail.com'),
(2, NULL, NULL, NULL, NULL, 'akohung8@gmail.com'),
(3, NULL, NULL, NULL, NULL, 'email@gmail.com'),
(4, 1, NULL, NULL, NULL, 'em@gmail.com'),
(5, 4, NULL, NULL, NULL, 'afwajwaj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `docu_type`
--

CREATE TABLE `docu_type` (
  `id` int(11) NOT NULL,
  `doc_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docu_type`
--

INSERT INTO `docu_type` (`id`, `doc_type`) VALUES
(1, 'NSO'),
(2, 'FORM 137'),
(3, 'APPLICATION FORM'),
(4, 'Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `status_ref`
--

CREATE TABLE `status_ref` (
  `id` int(11) NOT NULL,
  `doc_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_ref`
--

INSERT INTO `status_ref` (`id`, `doc_status`) VALUES
(1, 'In transit'),
(2, 'Received'),
(3, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `extension` varchar(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `bday_month` int(2) NOT NULL,
  `bday_day` int(2) NOT NULL,
  `bday_year` int(4) NOT NULL,
  `sex` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `user_pass`, `firstname`, `middlename`, `lastname`, `extension`, `address`, `phonenumber`, `emailaddress`, `bday_month`, `bday_day`, `bday_year`, `sex`) VALUES
(1, 'jj', 'angelbeats', 'jinn', 'almendras', 'dilag', 'jr', '#5 dalandan street', '09954406196', 'email@gmail.com', 0, 24, 2000, 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctracker`
--
ALTER TABLE `doctracker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_type` (`doc_type`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`),
  ADD KEY `doc_status` (`doc_status`);

--
-- Indexes for table `docu_type`
--
ALTER TABLE `docu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_ref`
--
ALTER TABLE `status_ref`
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
-- AUTO_INCREMENT for table `doctracker`
--
ALTER TABLE `doctracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `docu_type`
--
ALTER TABLE `docu_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_ref`
--
ALTER TABLE `status_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctracker`
--
ALTER TABLE `doctracker`
  ADD CONSTRAINT `doctracker_ibfk_1` FOREIGN KEY (`doc_type`) REFERENCES `docu_type` (`id`),
  ADD CONSTRAINT `doctracker_ibfk_2` FOREIGN KEY (`sender`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `doctracker_ibfk_3` FOREIGN KEY (`receiver`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `doctracker_ibfk_4` FOREIGN KEY (`doc_status`) REFERENCES `status_ref` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
