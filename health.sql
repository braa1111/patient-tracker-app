-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 02:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appo_id` int(2) NOT NULL,
  `appo_usname` varchar(25) NOT NULL,
  `appo-p-age` varchar(3) NOT NULL,
  `appo-p-gander` varchar(25) NOT NULL,
  `d_id` int(2) NOT NULL,
  `appo-dector` varchar(25) NOT NULL,
  `appo_date` varchar(25) NOT NULL,
  `appo-history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appo_id`, `appo_usname`, `appo-p-age`, `appo-p-gander`, `d_id`, `appo-dector`, `appo_date`, `appo-history`) VALUES
(22, 'a', '25', 'male', 0, '?', '2024-08-23', 'abc'),
(23, 'a', '25', 'male', 0, '?', '2024-08-23', 'abc'),
(24, 'a', '25', 'male', 0, 'dector', '2024-08-23', 'abc'),
(25, 'a', '25', 'male', 0, 'dector', '2024-08-23', 'abc'),
(26, 'mazen abbas', '40', 'male', 3, '', '2024-08-23', 'no '),
(27, 'osama ahmed ali', '30', 'male', 2, '', '2024-08-28', 'just');

-- --------------------------------------------------------

--
-- Table structure for table `dector`
--

CREATE TABLE `dector` (
  `d_id` int(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `specialize` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `appo-id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dector`
--

INSERT INTO `dector` (`d_id`, `username`, `email`, `password`, `specialize`, `mobile`, `appo-id`) VALUES
(1, 'hassan@gmail.com', 'hassan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0),
(2, 'hassan@gmail.com', 'hassan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0),
(3, 'ahmed hassan', 'ahmed@gmail.com', '202cb962ac59075b964b07152d234b70', 'abc', '09125634876', 0),
(4, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `regstration`
--

CREATE TABLE `regstration` (
  `p-id` int(2) NOT NULL,
  `p-name` varchar(25) NOT NULL,
  `p-address` varchar(25) NOT NULL,
  `p-phone` varchar(15) NOT NULL,
  `p-email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regstration`
--

INSERT INTO `regstration` (`p-id`, `p-name`, `p-address`, `p-phone`, `p-email`, `password`) VALUES
(1, 'mazen abbas hammad', 'portsudan', '0921487576', 'ibnabbas@gmail.com', '202cb962ac59075b964b07152'),
(2, 'osama abbas hammad', 'Abu-Hammad', '0924105877', 'osama@gmail.com', 'd41d8cd98f00b204e9800998e'),
(3, 'osama abbas hammad', 'Abu-Hammad', '0924105877', 'osama@gmail.com', 'd41d8cd98f00b204e9800998e'),
(4, 'osama abbas hammad', 'Abu-Hammad', '0924105877', 'osama@gmail.com', '202cb962ac59075b964b07152');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'mazen abbas hammad', 'mazen@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'ahmed khalid ahmed', 'ahmed@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appo_id`);

--
-- Indexes for table `dector`
--
ALTER TABLE `dector`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `regstration`
--
ALTER TABLE `regstration`
  ADD PRIMARY KEY (`p-id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appo_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dector`
--
ALTER TABLE `dector`
  MODIFY `d_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regstration`
--
ALTER TABLE `regstration`
  MODIFY `p-id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
