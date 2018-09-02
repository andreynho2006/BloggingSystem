-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: simple_blog
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'andreynho2006@gmail.com','4a7d1ed414474e4033ac29ccb8653d9b');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_entry`
--

DROP TABLE IF EXISTS `blog_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `blog_entry` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `entry_text` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_entry`
--

LOCK TABLES `blog_entry` WRITE;
/*!40000 ALTER TABLE `blog_entry` DISABLE KEYS */;
INSERT INTO `blog_entry` VALUES (1,'YelpCamp2','<p>E un fapt bine stabilit că cititorul va fi sustras de conţinutul citibil al unei pagini atunci c&acirc;nd se uită la aşezarea &icirc;n pagină. Scopul utilizării a Lorem Ipsum, este acela că are o distribuţie a literelor mai mult sau mai puţin normale, faţă de utilizarea a ceva de genul \"Conţinut aici, conţinut acolo\", făc&acirc;ndu-l să arate ca o engleză citibilă. Multe pachete de publicare pentru calculator şi editoare de pagini web folosesc acum Lorem Ipsum ca model standard de text, iar o cautare de \"lorem ipsum\" va rezulta &icirc;n o mulţime de site-uri web &icirc;n dezvoltare. Pe parcursul anilor, diferite versiuni au evoluat, uneori din int&acirc;mplare, uneori intenţionat (infiltr&acirc;ndu-se elemente de umor sau altceva de acest gen).</p>','2018-08-25 15:49:55'),(2,'Google','E un fapt bine stabilit că cititorul va fi sustras de conţinutul citibil al unei pagini atunci când se uită la aşezarea în pagină. Scopul utilizării a Lorem Ipsum, este acela că are o distribuţie a literelor mai mult sau mai puţin normale, faţă de utilizarea a ceva de genul \"Conţinut aici, conţinut acolo\", făcându-l să arate ca o engleză citibilă. Multe pachete de publicare pentru calculator şi editoare de pagini web folosesc acum Lorem Ipsum ca model standard de text, iar o cautare de \"lorem ipsum\" va rezulta în o mulţime de site-uri web în dezvoltare. Pe parcursul anilor, diferite versiuni au evoluat, uneori din intâmplare, uneori intenţionat (infiltrându-se elemente de umor sau altceva de acest gen).','2018-08-25 15:50:07'),(3,'Yahoo','E un fapt bine stabilit că cititorul va fi sustras de conţinutul citibil al unei pagini atunci când se uită la aşezarea în pagină. Scopul utilizării a Lorem Ipsum, este acela că are o distribuţie a literelor mai mult sau mai puţin normale, faţă de utilizarea a ceva de genul \"Conţinut aici, conţinut acolo\", făcându-l să arate ca o engleză citibilă. Multe pachete de publicare pentru calculator şi editoare de pagini web folosesc acum Lorem Ipsum ca model standard de text, iar o cautare de \"lorem ipsum\" va rezulta în o mulţime de site-uri web în dezvoltare. Pe parcursul anilor, diferite versiuni au evoluat, uneori din intâmplare, uneori intenţionat (infiltrându-se elemente de umor sau altceva de acest gen).','2018-08-26 05:25:11'),(4,'Facebook','E un fapt bine stabilit că cititorul va fi sustras de conţinutul citibil al unei pagini atunci când se uită la aşezarea în pagină. Scopul utilizării a Lorem Ipsum, este acela că are o distribuţie a literelor mai mult sau mai puţin normale, faţă de utilizarea a ceva de genul \"Conţinut aici, conţinut acolo\", făcându-l să arate ca o engleză citibilă. Multe pachete de publicare pentru calculator şi editoare de pagini web folosesc acum Lorem Ipsum ca model standard de text, iar o cautare de \"lorem ipsum\" va rezulta în o mulţime de site-uri web în dezvoltare. Pe parcursul anilor, diferite versiuni au evoluat, uneori din intâmplare, uneori intenţionat (infiltrându-se elemente de umor sau altceva de acest gen).','2018-08-26 05:25:25'),(8,'Github','//get the entry id from the hidden input in editor form','2018-08-27 13:46:41'),(10,'Gitlab','//get the entry id from the hidden input in editor form','2018-08-27 14:02:26'),(12,'Github','<p><strong>tymyMCE is great</strong></p>\r\n<p>let\'s use it</p>','2018-08-30 03:39:27'),(13,'subway','<p>loremuiyvgv [oudsbip; bpiaub</p>','2018-09-02 03:29:49');
/*!40000 ALTER TABLE `blog_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `author` varchar(75) DEFAULT NULL,
  `txt` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `entry_id` (`entry_id`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`entry_id`) REFERENCES `blog_entry` (`entry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,1,'me','testing, testing','2018-08-28 03:52:10'),(2,1,'Andrei','yfgjh','2018-08-28 16:11:57'),(3,1,'Simona','nice','2018-08-28 16:12:09'),(4,2,'Andrei','google it\r\n','2018-08-29 03:36:54'),(5,2,'Simona','google me\r\n','2018-08-29 04:37:13');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-02 10:51:03
