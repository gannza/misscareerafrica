-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2019 at 04:00 PM
-- Server version: 10.3.17-MariaDB-0ubuntu0.19.04.1
-- PHP Version: 7.1.32-1+ubuntu19.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miss_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `applcation_form`
--

CREATE TABLE `applcation_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `level_education` varchar(255) DEFAULT NULL,
  `former_school_attended` text NOT NULL,
  `education_background` text NOT NULL,
  `current_occupation` varchar(255) DEFAULT NULL,
  `q1` text DEFAULT NULL,
  `q2` text DEFAULT NULL,
  `q3` text DEFAULT NULL,
  `q4` text DEFAULT NULL,
  `q5` text DEFAULT NULL,
  `q6` text DEFAULT NULL,
  `q7` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applcation_form`
--

INSERT INTO `applcation_form` (`id`, `fname`, `lname`, `email`, `dob`, `phone_code`, `phone_number`, `street`, `city`, `province`, `country`, `level_education`, `former_school_attended`, `education_background`, `current_occupation`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `created_at`) VALUES
(1, 'sdsa', 'sdsa', 'respinho2014@gmail.om', '2019-09-25', '250', '781945189', 'as', 'sds', 'ds', 'Rwanda', 'sds', 'sds', 'sdsds', 'dsds', 'sdsd', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'dsd', 'sdsds', '2019-09-25 11:38:16'),
(2, 'sds', 'as', 'respinho2014@gmail.com', '2019-09-25', '250', 'SDS', 'DDD', 'SDD', 'DD', 'Rwanda', 'SS', 'SDS', 'DFKJSDFJD', 'VCV', 'SCS', 'SDS', 'SDSD', 'SDDF', 'CVCV', 'CC', 'DS', '2019-09-25 11:38:16'),
(3, 'Ganza', 'respice', 'respinho2014@gmail.com', '2019-10-02', '250', '781945189', 'kigali', 'kiha', 'north', 'Rwanda', 'level 1', 's', 'kmdfd fsdnf dfsd', 'vc fds', 'fdsf dsf fsd', 'cvc dfds', 'df dfds', 'dfds dfds', 'fd dfsd', 'dfds fdds', 'dfsddfd', '2019-09-25 11:42:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applcation_form`
--
ALTER TABLE `applcation_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applcation_form`
--
ALTER TABLE `applcation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
