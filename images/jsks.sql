-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: jsks
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `advance`
--

DROP TABLE IF EXISTS `advance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advance` (
  `id` varchar(20) NOT NULL,
  `advdate` date NOT NULL,
  `advamt` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advance`
--

LOCK TABLES `advance` WRITE;
/*!40000 ALTER TABLE `advance` DISABLE KEYS */;
INSERT INTO `advance` VALUES ('JSKS10004','2018-10-01',400);
/*!40000 ALTER TABLE `advance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendence` (
  `attid` int(11) NOT NULL AUTO_INCREMENT,
  `attempid` varchar(45) NOT NULL,
  `attdate` date DEFAULT NULL,
  `attstatus` float DEFAULT NULL,
  PRIMARY KEY (`attid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendence`
--

LOCK TABLES `attendence` WRITE;
/*!40000 ALTER TABLE `attendence` DISABLE KEYS */;
INSERT INTO `attendence` VALUES (1,'JSKS10001','2018-09-30',1),(2,'JSKS10002','2018-09-30',0),(3,'JSKS10003','2018-09-30',0),(4,'JSKS10004','2018-09-30',1);
/*!40000 ALTER TABLE `attendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daily`
--

DROP TABLE IF EXISTS `daily`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daily` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `timein` datetime NOT NULL,
  `timeout` datetime DEFAULT NULL,
  `tothours` time DEFAULT NULL,
  `workday` float DEFAULT NULL,
  `dailycol` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`dailycol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daily`
--

LOCK TABLES `daily` WRITE;
/*!40000 ALTER TABLE `daily` DISABLE KEYS */;
/*!40000 ALTER TABLE `daily` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `empcolid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(45) NOT NULL,
  `empname` varchar(45) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `phoneno` int(11) NOT NULL,
  `aadhar` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `dateofjoin` date DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`empcolid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'JSKS10001','MUTHU PANDIAN','Male',2147483647,2147483647,'No:18,Kovilpathagai','2018-10-01','20180423_162109.jpg',0),(2,'JSKS10002','LalSingn','Male',432323,324342,'UP','2018-10-01','20180425_202042.jpg',0),(3,'JSKS10003','MageSingn','Male',4323324,334,'UP','2018-10-01','20180422_210305.jpg',0),(4,'JSKS10004','Rakesh','Male',433434,3425435,'gsfgsg','2018-10-01','20180425_202537.jpg',0);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenses` (
  `expid` int(11) NOT NULL AUTO_INCREMENT,
  `expname` varchar(50) NOT NULL,
  `expamt` int(11) NOT NULL,
  `expdate` date NOT NULL,
  PRIMARY KEY (`expid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenses`
--

LOCK TABLES `expenses` WRITE;
/*!40000 ALTER TABLE `expenses` DISABLE KEYS */;
INSERT INTO `expenses` VALUES (1,'Water',300,'2018-06-07'),(2,'JSKS10001',3000,'2018-06-07'),(3,'Delivery',200,'2018-06-07'),(4,'jj',2012,'2018-06-07'),(5,'jkks',2000,'2018-06-07'),(6,'kjdf',324,'2018-06-07'),(7,'KDJFKJS',4,'2018-06-07'),(8,'QKJE',20,'2018-06-07'),(9,'EWR',40,'2018-06-07'),(10,'JSKS10002',250,'2018-06-07'),(11,'efd',88,'2018-06-07'),(12,'JSKS10003',302,'2018-06-08'),(13,'WATER',300,'2018-06-09'),(14,'SBI BANK DEPOSIT',30000,'2018-06-09'),(15,'OTHER',250,'2018-06-09'),(16,'JSKS10005',8000,'2018-06-09'),(17,'JSKS10002',400,'2018-06-08'),(18,'JSKS10003',2000,'2018-06-08'),(19,'JSKS10004',200,'2018-06-08'),(20,'JSKS10002',400,'2018-06-08'),(21,'JSKS10002',460,'2018-06-08'),(22,'JSKS10002',430,'2018-06-08'),(23,'SAI PVT LIMIT',790877,'2018-06-09'),(24,'JSKS10005',800,'2018-06-09'),(25,'JSKS10005',500,'2018-06-09'),(26,'JSKS10004',500,'2018-06-10'),(27,'JSKS10006',299,'2018-06-15'),(28,'kamal',2000,'2018-06-19'),(29,'js',45,'2018-07-18'),(30,'JSKS10001',300,'2018-07-18'),(31,'Water ',400,'2018-08-11'),(32,'JSKS10001',1000,'2018-09-08'),(33,'JSKS10001',200,'2018-09-08'),(34,'jsks10001',200,'2018-10-10'),(35,'water',323,'2018-09-10'),(36,'JSKS10002',300,'2018-09-12'),(37,'jsks10001',200,'2018-09-13'),(38,'JSKS10001',500,'2018-09-28'),(39,'JSKS10009',200,'2018-09-30'),(40,'JSKS10004',400,'2018-10-01');
/*!40000 ALTER TABLE `expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jsksnewemp`
--

DROP TABLE IF EXISTS `jsksnewemp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jsksnewemp` (
  `empid` varchar(20) NOT NULL,
  `empname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dateofjoinng` date DEFAULT NULL,
  `fathername` varchar(30) NOT NULL,
  `emptype` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pincode` int(10) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `jsksnewempcol` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`jsksnewempcol`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jsksnewemp`
--

LOCK TABLES `jsksnewemp` WRITE;
/*!40000 ALTER TABLE `jsksnewemp` DISABLE KEYS */;
INSERT INTO `jsksnewemp` VALUES ('JSKS10001','MuthuPadndian','1994-07-14','Male',9876546655,6754323897675,'muthupadndian@gmail.com','2017-12-22','Kolangi','SalesMan','Avadi','TamilNadu',600062,'20180423_162109.jpg',1),('JSKS10002','Muhammed Safi','1995-06-23','Male',9876546655,84375746634,'safi@gmail.com','2018-06-12','','HR','avadi','TamilNadu',600054,'20180422_210433.jpg',2),('JSKS10003','Mage Singh','1996-04-10','Male',8765545666,765654535432,'mage@gmail.com','2018-06-11','Kishore','SalesMan','ambattur','TamilNadu',600053,'20180422_210305.jpg',3),('JSKS10004','Rakesh Bharman','1992-07-09','Male',7667656554,776655673444,'rakesh@gmail.com','2018-06-12','kumar','SalesMan','Avadi','TamilNadu',600054,'20180425_202537.jpg',4),('JSKS10005','Magesh Singh','1987-06-17','Male',8766456454,876545678989,'magesh@gmail.com','2018-06-04','Tharun','SalesMan','Patabiram','TamilNadu',600052,'20180423_161351.jpg',5),('JSKS10006','Lal Singh','1996-01-17','Male',9843727478,534534543534,'lal@gmail.com','2018-06-21','prabu','SalesMan','Kovilpathgai','TamilNadu',600062,'20180425_202042.jpg',6),('JSKS10007','vinoth','0000-00-00','Male',35435,0,'','2018-09-20','','HR','','',0,'107167.jpg',72);
/*!40000 ALTER TABLE `jsksnewemp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leavesalary`
--

DROP TABLE IF EXISTS `leavesalary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leavesalary` (
  `id` varchar(20) NOT NULL,
  `perdaysalary` int(11) NOT NULL,
  `leavepermonth` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leavesalary`
--

LOCK TABLES `leavesalary` WRITE;
/*!40000 ALTER TABLE `leavesalary` DISABLE KEYS */;
INSERT INTO `leavesalary` VALUES ('JSKS10001',300,3),('JSKS10002',400,1),('JSKS10003',300,0),('JSKS10005',350,2),('JSKS10004',300,2);
/*!40000 ALTER TABLE `leavesalary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `salarymonth` varchar(10) NOT NULL,
  `workday` float NOT NULL,
  `leaveday` int(11) NOT NULL,
  `perday` int(11) NOT NULL,
  `gross` int(11) NOT NULL,
  `detection` int(11) NOT NULL,
  `net` int(11) NOT NULL,
  `salarydate` date NOT NULL,
  `paidon` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES ('JSKS10005','bharkavi','Sep/2018',2,2,350,1400,0,1400,'2018-10-01','0000-00-00'),('JSKS10001','vinoth','Sep/2018',1.5,3,300,1350,1700,-350,'2018-10-01','0000-00-00');
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-01 19:53:15
