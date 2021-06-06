-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: realestatekings
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basicreglogin`
--

DROP TABLE IF EXISTS `basicreglogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basicreglogin` (
  `UserID` int(200) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Time Updated` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=100003 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basicreglogin`
--

LOCK TABLES `basicreglogin` WRITE;
/*!40000 ALTER TABLE `basicreglogin` DISABLE KEYS */;
INSERT INTO `basicreglogin` VALUES (100001,'Sumant Kumar','sumant130201@gmail.com','06299769178','$2y$10$O6ypLSfBii2XDWg1o46k4uexG.BYdWZDRhnSo2ovvXqaEi639i9ay','2021-05-12 23:37:42'),(100002,'Sumant Kumar','sumantkumar@gmail.com','6345986476','$2y$10$2JRsPoQ.KdPiNCOILk.GaehIgoAC0oH8wEwfLSlmsO74xKTpVLn7e','2021-05-13 20:06:31');
/*!40000 ALTER TABLE `basicreglogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquirycontact`
--

DROP TABLE IF EXISTS `enquirycontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquirycontact` (
  `SlNo` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `ContactNumber` varchar(12) NOT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `Query` varchar(350) DEFAULT NULL,
  `LookingFor` varchar(255) DEFAULT NULL,
  `Date-Time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`SlNo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquirycontact`
--

LOCK TABLES `enquirycontact` WRITE;
/*!40000 ALTER TABLE `enquirycontact` DISABLE KEYS */;
INSERT INTO `enquirycontact` VALUES (1,'Sumant Kumar','2147483647','sumant130201@gmail.com',' zjhgd,nbvsD','select','2021-05-15 23:12:51'),(2,'Sumant Kumar','06299769178','sumant130201@gmail.com','hugHJDBm, ','select','2021-05-15 23:18:44'),(3,'Sumant Kumar','06299769178','sumant130201@gmail.com','hzvsdhvbk','Residential-1 BHK','2021-05-15 23:20:31'),(4,'Sumant Kumar','06299769178','sumant130201@gmail.com','mbzvshdg','Residential-3 BHK','2021-05-15 23:22:50'),(5,'Sumant Kumar','06299769178','sumant130201@gmail.com','hzusgvd ','Office','2021-05-15 23:24:21');
/*!40000 ALTER TABLE `enquirycontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investors`
--

DROP TABLE IF EXISTS `investors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `investors` (
  `SlNo` int(10) NOT NULL AUTO_INCREMENT,
  `InvestorName` varchar(255) NOT NULL,
  `InvestorLogo` varchar(300) NOT NULL,
  `UpdateTime` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`SlNo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investors`
--

LOCK TABLES `investors` WRITE;
/*!40000 ALTER TABLE `investors` DISABLE KEYS */;
INSERT INTO `investors` VALUES (1,'Vertex VentureCapitalists','investor-images/insta-icon.jpg','2021-05-20 16:52:27');
/*!40000 ALTER TABLE `investors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listproperty`
--

DROP TABLE IF EXISTS `listproperty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listproperty` (
  `PropertyID` int(12) NOT NULL AUTO_INCREMENT,
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
  `UploadTime` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`PropertyID`)
) ENGINE=InnoDB AUTO_INCREMENT=1021 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listproperty`
--

LOCK TABLES `listproperty` WRITE;
/*!40000 ALTER TABLE `listproperty` DISABLE KEYS */;
INSERT INTO `listproperty` VALUES (1001,0,'Owner','Sumant Kumar','06299769178','sumant130201@gmail.com','PG/Hostel','Bungalow','MUZAFFARPUR','','aromalogo.png','Yes','Yes','','2021-05-17 13:29:34'),(1002,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Sell','Bungalow','MUZAFFARPUR','','aroma logo_edited.jpg','Yes','Yes','','2021-05-17 17:19:33'),(1003,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:30:25'),(1004,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:32:40'),(1005,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:38:23'),(1006,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:38:25'),(1007,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:38:25'),(1008,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 21:38:25'),(1009,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Residential-1 BHK','MUZAFFARPUR','','','Yes','Yes','','2021-05-17 23:01:37'),(1010,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','','aroma logo_edited.jpg','Yes','Yes','','2021-05-17 23:23:21'),(1011,0,'Agent','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','','aroma logo_edited.jpg','Yes','Yes','','2021-05-17 23:32:05'),(1012,0,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Parking','MUZAFFARPUR','','feed2.jpg','Yes','Yes','','2021-05-19 22:06:54'),(1013,100001,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','','feed.jpg','Yes','Yes','','2021-05-19 22:28:10'),(1014,100001,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','Bairia','feed.jpg','Yes','Yes','','2021-05-19 22:41:16'),(1015,100001,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','Bairia','feed.jpg','Yes','Yes','','2021-05-19 22:56:34'),(1016,100001,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','Bairia','feed.jpg','Yes','Yes','','2021-05-19 22:57:46'),(1017,100001,'Agent','Sumant Kumar','6299769178','sumant130201@gmail.com','Rent/Lease','Bungalow','MUZAFFARPUR','Bairia','feed.jpg','Yes','Yes','','2021-05-19 22:58:28'),(1018,100001,'','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Office','MUZAFFARPUR','Bairia','feed3.jpg','Yes','Yes','','2021-05-20 00:46:42'),(1019,100001,'','Sumant Kumar','6299769178','sumant130201@gmail.com','PG/Hostel','Office','MUZAFFARPUR','Bairia','feed2.jpg','Yes','Yes','','2021-05-20 00:59:40'),(1020,100001,'','Sumant Kumar','06299769178','sumant130201@gmail.com','Rent/Lease','Office','MUZAFFARPUR','Bairia','bg4.jpg','Yes','Yes','','2021-05-20 21:15:36');
/*!40000 ALTER TABLE `listproperty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_team`
--

DROP TABLE IF EXISTS `our_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `our_team` (
  `Sl No` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL DEFAULT 'NA',
  `About` varchar(1000) NOT NULL DEFAULT 'NA',
  `UpdatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Sl No`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_team`
--

LOCK TABLES `our_team` WRITE;
/*!40000 ALTER TABLE `our_team` DISABLE KEYS */;
INSERT INTO `our_team` VALUES (1,'Sumant Kumar','','upload-images/sumant_profile.jpg','','2021-05-20'),(2,'Sumant Kumar','','uploaded-images/team-imagessumant_profile.jpg','','2021-05-20'),(3,'Sumant Kumar','','uploaded-images/team-images/sumant_profile.jpg','','2021-05-20');
/*!40000 ALTER TABLE `our_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_details`
--

DROP TABLE IF EXISTS `property_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_details` (
  `PropertyID` int(15) NOT NULL AUTO_INCREMENT,
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
  `UpdatedTime` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`PropertyID`)
) ENGINE=InnoDB AUTO_INCREMENT=1021 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_details`
--

LOCK TABLES `property_details` WRITE;
/*!40000 ALTER TABLE `property_details` DISABLE KEYS */;
INSERT INTO `property_details` VALUES (1,'3 BHK House','10000000',1200,'3BHK','0000-00-00','West',1200,4,'2',3,'','njzjbb asfjhkjn','2021-05-20 00:05:08'),(2,'3 BHK House','10000000',1200,'3BHK','0000-00-00','West',1200,4,'2',3,'No','knzjsdbh','2021-05-20 00:51:54'),(3,'3 BHK House','10000000',1200,'3BHK','0000-00-00','West',1200,4,'2',3,'No','knzjsdbh','2021-05-20 00:52:13'),(4,'3 BHK House','10000000',1200,'3BHK','0000-00-00','West',1200,4,'2',3,'No','knzjsdbh','2021-05-20 00:54:03'),(1019,'3 BHK House','10000000',1200,'3BHK','0000-00-00','West',1200,4,'2',3,'Yes','zsbd jhazs jabsf','2021-05-20 01:00:18'),(1020,'3 BHK Bungalow','10000000',2200,'3BHK','0000-00-00','North',1200,4,'2',3,'Yes','jbbjh','2021-05-20 21:49:45');
/*!40000 ALTER TABLE `property_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selectoptions`
--

DROP TABLE IF EXISTS `selectoptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selectoptions` (
  `SlNo` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyType` varchar(100) NOT NULL,
  PRIMARY KEY (`SlNo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selectoptions`
--

LOCK TABLES `selectoptions` WRITE;
/*!40000 ALTER TABLE `selectoptions` DISABLE KEYS */;
INSERT INTO `selectoptions` VALUES (2,''),(3,''),(4,''),(5,''),(6,'2-BHK House'),(7,'3-BHK Independent House');
/*!40000 ALTER TABLE `selectoptions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-06 22:42:28
