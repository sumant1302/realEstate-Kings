-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 09:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aromafeeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `SlNo` int(6) NOT NULL,
  `City` varchar(50) NOT NULL,
  `States` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`SlNo`, `City`, `States`) VALUES
(1, 'Patna', 'Bihar'),
(2, 'Gaya', 'Bihar'),
(3, 'Muzaffarpur', 'Bihar'),
(4, 'Samastipur', 'Bihar'),
(5, 'Gopalganj', 'Bihar'),
(6, 'Jamui', 'Bihar'),
(8, 'Madhubani', 'Bihar'),
(10, 'Bokaro', 'Jharkhand'),
(11, 'Ranchi', 'Jharkhand'),
(13, 'Kolkata', 'West Bengal'),
(14, 'Howrah', 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`SlNo`),
  ADD UNIQUE KEY `City` (`City`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `SlNo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
