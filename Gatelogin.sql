-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2020 at 02:32 PM
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
-- Database: `Gatelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `timerq` int(10) NOT NULL,
  `diff` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `qid`, `answer`, `timerq`, `diff`, `name`, `email`) VALUES
(1, 1, ' Graduate Aptitude Test Engineering', 1, 'Low', 'Vaibhav Shukla', 'vaibhav2017shukla@gmail.com'),
(2, 1, ' Graduate Aptitude Test Engineering', 1, 'Low', 'vibhu', 'shukla2017vaibhav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questionaddition`
--

CREATE TABLE `questionaddition` (
  `id` int(50) NOT NULL,
  `que` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionaddition`
--

INSERT INTO `questionaddition` (`id`, `que`, `name`, `email`) VALUES
(1, 'what is the full form of GATE', 'vibhu', 'shukla2017vaibhav@gmail.com'),
(2, 'what is the full form of GATE', 'Vaibhav Shukla', 'shukla2017vaibhav@gmail.com'),
(3, 'who conduct gate ', 'vibhu', 'shukla2017vaibhav@gmail.com'),
(4, 'what is gate', 'Vaibhav Shukla', 'shukla2017vaibhav@gmail.com'),
(5, 'what is gate', 'Vaibhav Shukla', 'shukla2017vaibhav@gmail.com'),
(6, 'WHAT DO YOU MEAN BY GATE', 'vaibhav', 'shukla@gmil.com'),
(7, 'WHAT DO YOU MEAN BY GATE', 'vaibhav', 'shukla@gmil.com'),
(8, 'what is gate', 'varun', 'shukla2017vaibhav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `security` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`, `mobile`, `security`) VALUES
(1, 'vaibhav', 'shukla', 9865741236, 'what is your favorite book?'),
(2, 'vibhu', 'shukla', 9999999999, 'what is your favorite sport?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionaddition`
--
ALTER TABLE `questionaddition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questionaddition`
--
ALTER TABLE `questionaddition`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
