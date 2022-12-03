-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 02:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `sch_contact`
--

CREATE TABLE `sch_contact` (
  `contact_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_contact`
--

INSERT INTO `sch_contact` (`contact_id`, `fname`, `lname`, `phone`, `subject`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `sch_login`
--

CREATE TABLE `sch_login` (
  `admin_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_login`
--

INSERT INTO `sch_login` (`admin_id`, `user_name`, `password`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `sch_notice`
--

CREATE TABLE `sch_notice` (
  `n_id` int(50) NOT NULL,
  `n_title` varchar(200) NOT NULL,
  `n_date` int(50) NOT NULL DEFAULT current_timestamp(),
  `n_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_notice`
--

INSERT INTO `sch_notice` (`n_id`, `n_title`, `n_date`, `n_file`) VALUES

;

-- --------------------------------------------------------

--
-- Table structure for table `sch_table`
--

CREATE TABLE `sch_table` (
  `sch_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `course` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sch_table`
--

INSERT INTO `sch_table` (`sch_id`, `fname`, `lname`, `birth`, `email`, `phone`, `course`, `comment`, `picture`) VALUES


--
-- Indexes for dumped tables
--

--
-- Indexes for table `sch_contact`
--
ALTER TABLE `sch_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `sch_login`
--
ALTER TABLE `sch_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `sch_notice`
--
ALTER TABLE `sch_notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `sch_table`
--
ALTER TABLE `sch_table`
  ADD PRIMARY KEY (`sch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sch_contact`
--
ALTER TABLE `sch_contact`
  MODIFY `contact_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sch_login`
--
ALTER TABLE `sch_login`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sch_notice`
--
ALTER TABLE `sch_notice`
  MODIFY `n_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sch_table`
--
ALTER TABLE `sch_table`
  MODIFY `sch_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
