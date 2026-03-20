-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 11:22 AM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(2, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 'check-mark-png-picture-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_advance`
--

CREATE TABLE `user_form_advance` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_advance`
--

INSERT INTO `user_form_advance` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 'two.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_ordinary`
--

CREATE TABLE `user_form_ordinary` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_ordinary`
--

INSERT INTO `user_form_ordinary` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_parent`
--

CREATE TABLE `user_form_parent` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_parent`
--

INSERT INTO `user_form_parent` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_teacher`
--

CREATE TABLE `user_form_teacher` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_teacher`
--

INSERT INTO `user_form_teacher` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form_university`
--

CREATE TABLE `user_form_university` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form_university`
--

INSERT INTO `user_form_university` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'samaraaruna', 'roxviper000@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_advance`
--
ALTER TABLE `user_form_advance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_ordinary`
--
ALTER TABLE `user_form_ordinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_parent`
--
ALTER TABLE `user_form_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_teacher`
--
ALTER TABLE `user_form_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form_university`
--
ALTER TABLE `user_form_university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_form_advance`
--
ALTER TABLE `user_form_advance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form_ordinary`
--
ALTER TABLE `user_form_ordinary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form_parent`
--
ALTER TABLE `user_form_parent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form_teacher`
--
ALTER TABLE `user_form_teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form_university`
--
ALTER TABLE `user_form_university`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
