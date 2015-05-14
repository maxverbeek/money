-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db-werkend
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `bands`
--

DROP TABLE IF EXISTS `bands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bands`
--

LOCK TABLES `bands` WRITE;
/*!40000 ALTER TABLE `bands` DISABLE KEYS */;
INSERT INTO `bands` VALUES (1,'king khan &amp; his shrines',''),(2,'the king khan &amp; BBQ show',''),(3,'the tandoori knights',''),(4,'king khan',''),(5,'king khan &amp; his lonesome guitar',''),(6,'king khan &amp; pat meteor',''),(7,'saba lou &amp; king khan',''),(8,'The Monsters',''),(9,'Reverend Beat-Man',''),(10,'Lightning Beat-Man &amp; His No Talent',''),(11,'Lightning Beat-Man &amp; the Never Heard Of\'EMS',''),(12,'Die Zorros','');
/*!40000 ALTER TABLE `bands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `platen`
--

DROP TABLE IF EXISTS `platen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `platen` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `band` int(11) DEFAULT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `jaar` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `platen`
--

LOCK TABLES `platen` WRITE;
/*!40000 ALTER TABLE `platen` DISABLE KEYS */;
INSERT INTO `platen` VALUES (1,1,'Billiards at Nine Thirty ',2004),(2,1,'What is',2007),(3,1,'Mr. Supernatural',2004),(4,1,'Three Hairs and You\'re Mine',2001),(5,1,'The Supreme Genius of...',2008),(6,2,'Invisible Girl',2009),(7,2,'The King Khan &amp; BBQ show',2007),(8,2,'The King Khan &amp; BBQ show',2005),(9,2,'What\'s for Dinner?',2006),(10,2,'Teabag Party',2007),(11,2,'We are the Ocean / Terrapin',2011),(12,3,'Curry Up',2010),(13,3,'Gomper ',2010),(14,3,'Pretty Please / Bucketful',2009),(15,4,'It\'s a Lie / Congratulations I\'m sorry',2008),(16,5,'Ugly Women! / Run Blacksnake Run',2008),(17,6,'The Fiery Tears of St. Laurent / Bon Bon',2010),(18,7,'First day of School / I want to sing what I want / +2',2007),(19,8,'Masks',2013),(20,8,'The Hunch',2013),(21,8,'Youth Against Nature',1995),(22,8,'Youth Against Nature',2003),(23,8,'Birds Eat Martians',1998),(24,8,'I See Dead People',2002),(25,8,'&hellip;Pop Up Yours',2011),(26,8,'Jungle Noise',1994),(27,8,'Split - Dead Moon: It\'s OK / Monsters: Burn my mind',1996),(28,8,'I Still Love Her',2007),(29,9,'Get On Your Knees',2001),(30,9,'Get On Your Knees',2001),(31,9,'Get On Your Knees',2012),(32,9,'Surreal Folk Blues Gospel',2007),(33,9,'I Don\'t Need No Cocaine I Just Need My Hot Rod',2010),(34,9,'Mililt&uuml;rk',2011),(35,9,'It\'s A Beat-Man\'s World',2012),(36,10,'Wrestling Rock\'n\'Roll',2008),(37,11,'Apartment Wrestling Rock\'n\'roll',0),(38,12,'History Of Rock Vol. 7',2010),(39,12,'Future',2012),(40,9,'Surreal Flok Blues Gospel Trash Vol 3',2008),(41,9,'I\'ll Take Care Of You',2012),(42,9,'Ding Dong Baby',2012);
/*!40000 ALTER TABLE `platen` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-14 20:32:34
