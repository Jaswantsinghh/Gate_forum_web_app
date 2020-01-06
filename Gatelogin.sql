-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2020 at 02:27 PM
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
(7, 31, ' Graduate Aptitude Test Engineering', 1, 'Low', 'Vaibhav Shukla', 'vibhu154@gmail.com');

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
(31, 'What is the full form of GATE?', 'vibhu mishra', 'mishra@gmail.com'),
(32, 'Who conduct GATE exam?', 'Vaibhav Shukla', 'vibhu154@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `security` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`, `name`, `email`, `mobile`, `security`) VALUES
(7, 'vaibhav154', 'shukla', 'Vaibhav Shukla', 'vibhu154@gmail.com', 9876543210, 'what is your favorite book?'),
(8, 'vibhu', 'shukla', 'vibhu shukla', 'vibhu@gmail.com', 9658741230, 'where do you live?'),
(9, 'vibhushukla', 'shukla154', 'vibhu mishra', 'mishra@gmail.com', 9586487562, 'which is your favorite book?');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questionaddition`
--
ALTER TABLE `questionaddition`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
