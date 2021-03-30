# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: collector_project
# Generation Time: 2021-02-08 14:35:37 +0000
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
  `name` varchar(50) NOT NULL DEFAULT '',
  `origin` varchar(50) DEFAULT NULL,
  `family` varchar(20) NOT NULL DEFAULT '',
  `method` varchar(50) NOT NULL DEFAULT '',
  `rating` int(2) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `taxidermy_collection` WRITE;
/*!40000 ALTER TABLE `taxidermy_collection` DISABLE KEYS */;

INSERT INTO `taxidermy_collection` (`id`, `name`, `origin`, `family`, `method`, `rating`, `image`, `description`)
VALUES
	(1,'Brown Owl','U.K.','Bird','Dry Specimen',3,'images/brown-owl.jpeg','A stuffed brown owl mounted on a branch with head at stange angle and musty with age'),
	(2,'Fox','Siberian','Mammal','Dry Specimen',7,'images/fox.jpeg','Hilarious stuffed fox, raised on hind legs with a creepy smile on its face'),
	(3,'Elephant Fetus','Indian','Mammal','Wet Specimen',8,'images/elephant-fetus.jpeg','Elephant fetus suspended in a jar filled with embalming fluid'),
	(4,'Crocodile (Nile)','Egypt','Reptile','Dry Specimen',9,'images/nile-crocodile.jpeg','A well preserved medium sized Nile Crocodile Specimen'),
	(5,'Magpie','U.K.','Bird','Dry Specimen',5,'images/magpie.jpeg','A magpie stood on a block of wood with a missing wing and loose head'),
	(6,'Rhino Beetle','Indonesia','Insect','Dry Specimen',10,'images/rhino-beetle.jpeg','An excellent Rhino Beetle specimen, pinned with wings extended'),
	(7,'Jumping Spider','Indonesia','Insect','Resin Specimen',10,'images/jumping-spider.jpeg','Large jumping spider encased in resin and in great condition');

/*!40000 ALTER TABLE `taxidermy_collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
