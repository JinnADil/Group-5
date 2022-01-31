-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 06:06 AM
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
  `sender_email` varchar(200) NOT NULL,
  `sender_docu` varchar(200) NOT NULL,
  `sender_docu_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_info`
--

INSERT INTO `history_info` (`id`, `user_info_id`, `sender_email`, `sender_docu`, `sender_docu_status`) VALUES
(1, 'Deleted', 'mooltoo.bot@gmail.com', 'Transcript of Records', 'Received'),
(2, '5', 'mooltoo.bot@gmail.com', 'Good Moral', 'Cancelled'),
(3, '5', 'mooltoo.bot@gmail.com', 'Diploma', 'Cancelled'),
(6, '5', 'mooltoo.bot@gmail.com', 'Good Moral', 'Cancelled'),
(17, '5', 'mooltoo.bot@gmail.com', 'Diploma', 'Cancelled'),
(19, '1', 'dread.knight02@gmail.com', 'Diploma', 'Received'),
(20, '1', 'dread.knight02@gmail.com', 'Transcript of Records', 'Cancelled'),
(21, '5', 'mooltoo.bot@gmail.com', 'Transcript of Records', 'Cancelled'),
(22, '5', 'mooltoo.bot@gmail.com', 'Diploma', 'Cancelled'),
(23, '5', 'mooltoo.bot@gmail.com', 'Diploma', 'Received'),
(24, '60', 'dread.knight02@gmail.com', 'Good Moral', 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `sender_user` varchar(200) NOT NULL,
  `sender_pass` varchar(200) NOT NULL,
  `sender_fname` varchar(200) NOT NULL,
  `sender_mname` varchar(200) NOT NULL,
  `sender_lname` varchar(200) NOT NULL,
  `sender_extension` varchar(20) NOT NULL,
  `sender_addrs` varchar(200) NOT NULL,
  `sender_phnum` varchar(200) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `sender_tmp_email` varchar(30) NOT NULL,
  `sender_month` varchar(30) NOT NULL,
  `sender_day` varchar(30) NOT NULL,
  `sender_year` varchar(30) NOT NULL,
  `sender_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `sender_user`, `sender_pass`, `sender_fname`, `sender_mname`, `sender_lname`, `sender_extension`, `sender_addrs`, `sender_phnum`, `sender_email`, `sender_tmp_email`, `sender_month`, `sender_day`, `sender_year`, `sender_status`) VALUES
(1, 'admin1', 'adminpass1', 'patrick', 'Agcaoili', 'Gallardo', ' ', '', '0997707606', 'juanpatrick@gmail.com', 'juanpatrick@gmail.com', 'February', '12', '2001', '1'),
(5, 'Darkdrift', 'adminpass2', 'Juan Patrick', 'Agcaoili', 'Gallardo', ' ', 'Imus City Cavite', '0999-7707-606', 'mooltoo.bot@gmail.com', 'mooltoo.bot@gmail.com', 'February', '12', '2001', '1'),
(6, 'admin3', 'adminpass3', 'pat', 'aj', 'gall', '', '', '1111', 'aj@gmail.com', 'aj@gmail.com', '', '', '', '1'),
(32, 'user', 'kamote', 'fname', 'mname', 'lname', ' ', '', '9999', 'email@gmail.com', 'email@gmail.com', 'Month', 'Day', 'Year', '1'),
(33, 'AKIN TO', 'pass', 'Juan Patrick', 'Agcaoili', 'Gallardo', 'Sr.', '', '09997707606', 'DELETED', 'gallardo@gmail.com', 'August', '19', '2003', '0'),
(60, '', 'Aqours_heroes', 'juan', 'patrick', 'gallardo', ' ', '', '09997707606', 'mari@gmail.com', 'mari@gmail.com', 'February', '12', '2001', '1'),
(61, 'pino', '12', '12', '123', '32', 'Jr.', '423e', '12', 'pino@gmail.com', 'pino@gmail.com', 'September', '15', '2000', '1'),
(62, 'lopo', 'lopo', 'try', 'try', 'try', 'Sr.', '123', '123', 'lopo@gmail.com', 'lopo@gmail.com', 'February', '12', '2001', '1'),
(63, 'gop', 'gop', 'gr', 'gr', 'gr', 'Jr.', '321', '213', 'gop@gmail.com', 'gop@gmail.com', 'August', '20', '2006', '1'),
(64, 'pot', '12', 'as', 'as', 'as', ' ', 'as', '123', 'af@gmail.com', 'af@gmail.com', 'January', '1', '2022', '1'),
(65, 'Mooltoo', 'dark123', 'juan patrick', 'agcaoili', 'gallardo', 'Jr.', 'Imus city', '09997707606', 'juanpatrick.gallardo@gmail.com', 'juanpatrick.gallardo@gmail.com', 'February', '6', '2016', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
