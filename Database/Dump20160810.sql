CREATE DATABASE  IF NOT EXISTS `4x4sport` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `4x4sport`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: 4x4sport
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `idCountries` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(45) DEFAULT NULL,
  `ShortName` varchar(45) DEFAULT NULL,
  `Flag` blob,
  PRIMARY KEY (`idCountries`),
  UNIQUE KEY `idCountries_UNIQUE` (`idCountries`),
  UNIQUE KEY `Country_UNIQUE` (`Country`),
  UNIQUE KEY `ShortName_UNIQUE` (`ShortName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Germany','DE',NULL),(2,'Ukraine','UA',NULL),(3,'Romania','RO',NULL),(4,'Russia','RU',NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventnames`
--

DROP TABLE IF EXISTS `eventnames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventnames` (
  `ideventNames` int(11) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(255) DEFAULT NULL,
  `idCountry` int(11) NOT NULL,
  UNIQUE KEY `ideventNames_UNIQUE` (`ideventNames`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventnames`
--

LOCK TABLES `eventnames` WRITE;
/*!40000 ALTER TABLE `eventnames` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventnames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `idEvents` int(11) NOT NULL AUTO_INCREMENT,
  `NameEnglish` varchar(45) DEFAULT NULL,
  `NameOriginal` varchar(45) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `InfoSource` varchar(255) DEFAULT NULL,
  `DateStart` datetime DEFAULT NULL,
  `DateEnd` datetime DEFAULT NULL,
  `Countries_idCountries` int(11) NOT NULL,
  PRIMARY KEY (`idEvents`,`Countries_idCountries`),
  UNIQUE KEY `idEvents_UNIQUE` (`idEvents`),
  KEY `fk_events_Countries_idx` (`Countries_idCountries`),
  CONSTRAINT `fk_events_Countries` FOREIGN KEY (`Countries_idCountries`) REFERENCES `countries` (`idCountries`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Gorgan Trophy','Gorgan Trophy','http://www.gorgan-trophy.info','http://www.gorgan-trophy.info','2016-08-25 00:00:00','2016-08-28 00:00:00',2),(2,'Ladoga Trophy','Ладога-Трофи','http://www.ladoga-trophy.ru/','http://www.ladoga-trophy.ru/','2016-05-28 00:00:00','2016-06-04 00:00:00',4),(3,'Karpaty Trophy','Karpaty Trophy','https://www.facebook.com/karpaty.trophy/?fref=ts','https://www.facebook.com/karpaty.trophy/?fref=ts','2016-06-10 00:00:00','2016-06-12 00:00:00',2),(4,'DT Trophy','DT Trophy','https://www.facebook.com/Dttrophy/?fref=ts','https://www.facebook.com/Dttrophy/?fref=ts','2016-08-25 00:00:00','2016-08-27 00:00:00',3),(5,'DT Supertrophy','DT Supertrophy','https://www.facebook.com/Dttrophy/?fref=ts','https://www.facebook.com/Dttrophy/?fref=ts','2016-08-21 00:00:00','2016-08-27 00:00:00',3);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-10 21:52:56
