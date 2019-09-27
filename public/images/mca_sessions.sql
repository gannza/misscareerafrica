-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2019 at 05:57 PM
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
-- Table structure for table `mca_sessions`
--

CREATE TABLE `mca_sessions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `numbering` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_current_applying` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mca_sessions`
--

INSERT INTO `mca_sessions` (`id`, `title`, `session`, `image`, `country`, `date`, `numbering`, `create_at`, `is_current_applying`) VALUES
(1, 'MISS CAREER AFRICA <br />(Eastern Africa)', '2019', 'RW.jpg', 'RWANDA', 'Wednesday,25 Sept, 2019', 1, '2019-09-25 22:00:00', 1),
(2, 'MISS CAREER AFRICA<br />(West Africa)', '2019', 'NG.jpg', 'NIGERIA', 'Satarday,30 November, 2019', 2, '2019-09-25 22:00:00', 0),
(3, 'MISS CAREER AFRICA<br />(Central Africa)', '2020', 'ANGOLA.jpg', 'ANGOLA', 'Satarday,04 Match, 2020', 3, '2019-09-25 22:00:00', 0),
(4, 'MISS CAREER AFRICA<br />(Southern Africa)', '2020', 'BOTS.jpg', 'BOTSWANA', 'Sunday,07 June, 2020', 4, '2019-09-25 22:00:00', 0),
(5, 'MISS CAREER AFRICA<br />(Northern Africa)', '2020', 'M.jpg', 'MOROCCO', 'Sunday,05 Sept, 2020', 5, '2019-09-25 22:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mca_sessions`
--
ALTER TABLE `mca_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mca_sessions`
--
ALTER TABLE `mca_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
