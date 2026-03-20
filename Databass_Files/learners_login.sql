-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 11:20 AM
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
-- Database: `learners_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance`
--

CREATE TABLE `advance` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advance`
--

INSERT INTO `advance` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(1, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$0UPIER1oyAG21hxQbtdIKeunlK/ZK.iAm.1k5Cm0j7qPWXs44fedK');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `how_know` varchar(150) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`name`, `address`, `reason`, `how_know`, `subject`) VALUES
('fwefef', 'efqefqef', 'qefqefqef', 'efqeqfg', 'wsws'),
('fwefef', 'efqefqef', 'qefqefqef', 'efqeqfg', 'wsws'),
('Aruna', 'Sri lanka', 'To learn', 'Internet', 'ComputerScience'),
('Aruna', 'Sri lanka', 'To learn', 'Internet', 'ComputerScience'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('Chathni', 'sdsd', 'asfsf', 'asfasf', 'afaf'),
('Aruna Samarasinghe', 'No', 'effe', 'sdfsdf', 'sdfsdf'),
('sS', 'SCsc', 'vv', 'zvzv', 'zvzv'),
('fafa', 'afasf', 'asfasf', 'asfasf', 'asfasf'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(10, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$toBlnd4SecjWWmFWiEfINuOF0Wiof6xG6UCbDTxOos8.PGx/prYGq');

-- --------------------------------------------------------

--
-- Table structure for table `ordinary`
--

CREATE TABLE `ordinary` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordinary`
--

INSERT INTO `ordinary` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(1, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$CGd2gioISgk/jh4OSkApxu7A9GaHcImT7zCjH.IamGAwB3sF7TEt2');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(1, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$TmaKISnS1Rj2AIwptEkQQuL5nBE.BZET4i9a/ihHnqa9I4u9WOf7O');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(1, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$29uWLOCS3BST7VabYOtdvuaHKCAAxRkWe83LC6Ef9hj/gzGRIhM4C');

-- --------------------------------------------------------

--
-- Table structure for table `undergraduate`
--

CREATE TABLE `undergraduate` (
  `usersId` int(12) NOT NULL,
  `usersFname` varchar(32) NOT NULL,
  `usersLname` varchar(32) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `userPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `undergraduate`
--

INSERT INTO `undergraduate` (`usersId`, `usersFname`, `usersLname`, `usersUid`, `usersEmail`, `userPwd`) VALUES
(1, 'Aruna', 'Samarasinghe', 'arunasamara', 'roxviper000@gmail.com', '$2y$10$ABRz/jNPxgBXLD8pik0aR.PWRfTsoQVIXE.Xqtm212XFPS.T.hiua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance`
--
ALTER TABLE `advance`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `learners`
--
ALTER TABLE `learners`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `ordinary`
--
ALTER TABLE `ordinary`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `undergraduate`
--
ALTER TABLE `undergraduate`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance`
--
ALTER TABLE `advance`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `learners`
--
ALTER TABLE `learners`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordinary`
--
ALTER TABLE `ordinary`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `undergraduate`
--
ALTER TABLE `undergraduate`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
