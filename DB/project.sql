-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 05:13 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `category` text NOT NULL,
  `subcategory` text NOT NULL,
  `nature` text NOT NULL,
  `comp` text NOT NULL,
  `file` text NOT NULL,
  `pending` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `user`, `category`, `subcategory`, `nature`, `comp`, `file`, `pending`, `date`) VALUES
(1, 'bhaskar', 'Faculty', 'lawra ka complaint h', 'betichod', 'bahenchod', './uploads/associatestatus.PNG', 0, 'January 22, 2023, 5:03 pm');

-- --------------------------------------------------------

--
-- Table structure for table `completedcomp`
--

CREATE TABLE `completedcomp` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `remark` text NOT NULL,
  `compnum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completedcomp`
--

INSERT INTO `completedcomp` (`id`, `user`, `remark`, `compnum`) VALUES
(1, 'bhaskar', 'hogya bc', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inprogressomp`
--

CREATE TABLE `inprogressomp` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `remarks` text NOT NULL,
  `compnum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userlogininfo`
--

CREATE TABLE `userlogininfo` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `user` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogininfo`
--

INSERT INTO `userlogininfo` (`id`, `fname`, `lname`, `user`, `date`) VALUES
(1, 'BHASKAR', 'NANDY', 'bhaskar', 'January 22, 2023, 5:01 pm'),
(2, 'BHASKAR', 'NANDY', 'bhaskar', 'January 22, 2023, 5:04 pm'),
(3, '', '', 'bhaskar', 'January 22, 2023, 5:12 pm');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `gender` text NOT NULL,
  `pass` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `username`, `fname`, `lname`, `email`, `phone`, `gender`, `pass`, `date`) VALUES
(1, '', '', '', '', '', '', '', 'January 22, 2023, 4:49 pm'),
(2, 'bhaskar', '', '', '', '', '', '123', 'January 22, 2023, 5:06 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completedcomp`
--
ALTER TABLE `completedcomp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprogressomp`
--
ALTER TABLE `inprogressomp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogininfo`
--
ALTER TABLE `userlogininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `completedcomp`
--
ALTER TABLE `completedcomp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inprogressomp`
--
ALTER TABLE `inprogressomp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogininfo`
--
ALTER TABLE `userlogininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
