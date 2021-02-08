# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: collector_project
# Generation Time: 2021-02-08 11:35:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table taxidermy_collection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxidermy_collection`;

CREATE TABLE `taxidermy_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Origin` varchar(50) DEFAULT NULL,
  `Family` varchar(20) NOT NULL DEFAULT '',
  `Preservation Method` varchar(50) NOT NULL,
  `Quality (out of 10)` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `taxidermy_collection` WRITE;
/*!40000 ALTER TABLE `taxidermy_collection` DISABLE KEYS */;

INSERT INTO `taxidermy_collection` (`id`, `Name`, `Origin`, `Family`, `Preservation Method`, `Quality (out of 10)`)
VALUES
	(1,'Brown Owl','U.K.','Bird','Dry',3),
	(2,'Fox','Siberian','Mammal','Dry',7),
	(3,'Elephant Fetus','Indian','Mammal','Wet',8),
	(4,'Crocodile (Nile)','Egypt','Reptile','Dry',9),
	(5,'Magpie','U.K.','Bird','Dry',5),
	(6,'Rhino Beetle','Indonesia','Insect','Dry',10),
	(7,'Jumping Spider','Indonesia','Insect','Resin',10);

/*!40000 ALTER TABLE `taxidermy_collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
