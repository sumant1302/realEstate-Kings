-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 11:34 PM
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
-- Database: `realestatekings`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicreglogin`
--

CREATE TABLE `basicreglogin` (
  `UserID` int(200) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Time Updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basicreglogin`
--

INSERT INTO `basicreglogin` (`UserID`, `Name`, `Email`, `Contact`, `Password`, `Time Updated`) VALUES
(100001, 'Sumant Kumar', 'sumant130201@gmail.com', '06299769178', '$2y$10$O6ypLSfBii2XDWg1o46k4uexG.BYdWZDRhnSo2ovvXqaEi639i9ay', '2021-05-12 23:37:42'),
(100002, 'Sumant Kumar', 'sumantkumar@gmail.com', '6345986476', '$2y$10$2JRsPoQ.KdPiNCOILk.GaehIgoAC0oH8wEwfLSlmsO74xKTpVLn7e', '2021-05-13 20:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `enquirycontact`
--

CREATE TABLE `enquirycontact` (
  `SlNo` int(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `ContactNumber` varchar(12) NOT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Query` varchar(350) DEFAULT NULL,
  `LookingFor` varchar(255) DEFAULT NULL,
  `Date-Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquirycontact`
--

INSERT INTO `enquirycontact` (`SlNo`, `Name`, `ContactNumber`, `Email`, `Query`, `LookingFor`, `Date-Time`) VALUES
(1, 'Sumant Kumar', '2147483647', 'sumant130201@gmail.com', ' zjhgd,nbvsD', 'select', '2021-05-15 23:12:51'),
(2, 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'hugHJDBm, ', 'select', '2021-05-15 23:18:44'),
(3, 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'hzvsdhvbk', 'Residential-1 BHK', '2021-05-15 23:20:31'),
(4, 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'mbzvshdg', 'Residential-3 BHK', '2021-05-15 23:22:50'),
(5, 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'hzusgvd ', 'Office', '2021-05-15 23:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `SlNo` int(10) NOT NULL,
  `InvestorName` varchar(255) NOT NULL,
  `InvestorLogo` varchar(300) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`SlNo`, `InvestorName`, `InvestorLogo`, `UpdateTime`) VALUES
(1, 'Vertex VentureCapitalists', 'investor-images/insta-icon.jpg', '2021-05-20 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `listproperty`
--

CREATE TABLE `listproperty` (
  `PropertyID` int(12) NOT NULL,
  `UserID` int(12) NOT NULL,
  `Iam` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `PropertyFor` varchar(50) NOT NULL,
  `PropertyType` varchar(120) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Locality` varchar(255) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `RSK_exclusivity` varchar(50) NOT NULL,
  `Wcontactagreement` varchar(50) NOT NULL,
  `Message` varchar(555) NOT NULL,
  `UploadTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listproperty`
--

INSERT INTO `listproperty` (`PropertyID`, `UserID`, `Iam`, `Name`, `Mobile`, `Email`, `PropertyFor`, `PropertyType`, `City`, `Locality`, `Images`, `RSK_exclusivity`, `Wcontactagreement`, `Message`, `UploadTime`) VALUES
(1001, 0, 'Owner', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'PG/Hostel', 'Bungalow', 'MUZAFFARPUR', '', 'aromalogo.png', 'Yes', 'Yes', '', '2021-05-17 13:29:34'),
(1002, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Sell', 'Bungalow', 'MUZAFFARPUR', '', 'aroma logo_edited.jpg', 'Yes', 'Yes', '', '2021-05-17 17:19:33'),
(1003, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:30:25'),
(1004, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:32:40'),
(1005, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:38:23'),
(1006, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:38:25'),
(1007, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:38:25'),
(1008, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 21:38:25'),
(1009, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Residential-1 BHK', 'MUZAFFARPUR', '', '', 'Yes', 'Yes', '', '2021-05-17 23:01:37'),
(1010, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', '', 'aroma logo_edited.jpg', 'Yes', 'Yes', '', '2021-05-17 23:23:21'),
(1011, 0, 'Agent', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', '', 'aroma logo_edited.jpg', 'Yes', 'Yes', '', '2021-05-17 23:32:05'),
(1012, 0, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Parking', 'MUZAFFARPUR', '', 'feed2.jpg', 'Yes', 'Yes', '', '2021-05-19 22:06:54'),
(1013, 100001, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', '', 'feed.jpg', 'Yes', 'Yes', '', '2021-05-19 22:28:10'),
(1014, 100001, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', 'Bairia', 'feed.jpg', 'Yes', 'Yes', '', '2021-05-19 22:41:16'),
(1015, 100001, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', 'Bairia', 'feed.jpg', 'Yes', 'Yes', '', '2021-05-19 22:56:34'),
(1016, 100001, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', 'Bairia', 'feed.jpg', 'Yes', 'Yes', '', '2021-05-19 22:57:46'),
(1017, 100001, 'Agent', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Bungalow', 'MUZAFFARPUR', 'Bairia', 'feed.jpg', 'Yes', 'Yes', '', '2021-05-19 22:58:28'),
(1018, 100001, '', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Office', 'MUZAFFARPUR', 'Bairia', 'feed3.jpg', 'Yes', 'Yes', '', '2021-05-20 00:46:42'),
(1019, 100001, '', 'Sumant Kumar', '6299769178', 'sumant130201@gmail.com', 'PG/Hostel', 'Office', 'MUZAFFARPUR', 'Bairia', 'feed2.jpg', 'Yes', 'Yes', '', '2021-05-20 00:59:40'),
(1020, 100001, '', 'Sumant Kumar', '06299769178', 'sumant130201@gmail.com', 'Rent/Lease', 'Office', 'MUZAFFARPUR', 'Bairia', 'bg4.jpg', 'Yes', 'Yes', '', '2021-05-20 21:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `Sl No` int(5) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL DEFAULT 'NA',
  `About` varchar(1000) NOT NULL DEFAULT 'NA',
  `UpdatedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`Sl No`, `Name`, `Designation`, `Image`, `About`, `UpdatedAt`) VALUES
(1, 'Sumant Kumar', '', 'upload-images/sumant_profile.jpg', '', '2021-05-20'),
(2, 'Sumant Kumar', '', 'uploaded-images/team-imagessumant_profile.jpg', '', '2021-05-20'),
(3, 'Sumant Kumar', '', 'uploaded-images/team-images/sumant_profile.jpg', '', '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `PropertyID` int(15) NOT NULL,
  `PropTitle` varchar(255) NOT NULL,
  `PropPrice` varchar(40) NOT NULL,
  `BuildupArea` int(20) NOT NULL,
  `Configuration` varchar(50) NOT NULL,
  `PosessionStatus` date NOT NULL,
  `Facing` varchar(20) NOT NULL,
  `CarpetArea` int(12) NOT NULL,
  `Bathrooms` int(5) NOT NULL,
  `Balcony` varchar(5) NOT NULL,
  `Bedrooms` int(5) NOT NULL,
  `Parking` varchar(10) NOT NULL,
  `About` varchar(1000) NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`PropertyID`, `PropTitle`, `PropPrice`, `BuildupArea`, `Configuration`, `PosessionStatus`, `Facing`, `CarpetArea`, `Bathrooms`, `Balcony`, `Bedrooms`, `Parking`, `About`, `UpdatedTime`) VALUES
(1, '3 BHK House', '10000000', 1200, '3BHK', '0000-00-00', 'West', 1200, 4, '2', 3, '', 'njzjbb asfjhkjn', '2021-05-20 00:05:08'),
(2, '3 BHK House', '10000000', 1200, '3BHK', '0000-00-00', 'West', 1200, 4, '2', 3, 'No', 'knzjsdbh', '2021-05-20 00:51:54'),
(3, '3 BHK House', '10000000', 1200, '3BHK', '0000-00-00', 'West', 1200, 4, '2', 3, 'No', 'knzjsdbh', '2021-05-20 00:52:13'),
(4, '3 BHK House', '10000000', 1200, '3BHK', '0000-00-00', 'West', 1200, 4, '2', 3, 'No', 'knzjsdbh', '2021-05-20 00:54:03'),
(1019, '3 BHK House', '10000000', 1200, '3BHK', '0000-00-00', 'West', 1200, 4, '2', 3, 'Yes', 'zsbd jhazs jabsf', '2021-05-20 01:00:18'),
(1020, '3 BHK Bungalow', '10000000', 2200, '3BHK', '0000-00-00', 'North', 1200, 4, '2', 3, 'Yes', 'jbbjh', '2021-05-20 21:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `selectoptions`
--

CREATE TABLE `selectoptions` (
  `SlNo` int(11) NOT NULL,
  `PropertyType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectoptions`
--

INSERT INTO `selectoptions` (`SlNo`, `PropertyType`) VALUES
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, '2-BHK House'),
(7, '3-BHK Independent House');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicreglogin`
--
ALTER TABLE `basicreglogin`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `enquirycontact`
--
ALTER TABLE `enquirycontact`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `listproperty`
--
ALTER TABLE `listproperty`
  ADD PRIMARY KEY (`PropertyID`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`Sl No`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`PropertyID`);

--
-- Indexes for table `selectoptions`
--
ALTER TABLE `selectoptions`
  ADD PRIMARY KEY (`SlNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicreglogin`
--
ALTER TABLE `basicreglogin`
  MODIFY `UserID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `enquirycontact`
--
ALTER TABLE `enquirycontact`
  MODIFY `SlNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `SlNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `listproperty`
--
ALTER TABLE `listproperty`
  MODIFY `PropertyID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `Sl No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `PropertyID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `selectoptions`
--
ALTER TABLE `selectoptions`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
