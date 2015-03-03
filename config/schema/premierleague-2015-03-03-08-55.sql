# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.22)
# Database: premierleague
# Generation Time: 2015-03-03 08:55:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table matches
# ------------------------------------------------------------

DROP TABLE IF EXISTS `matches`;

CREATE TABLE `matches` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `home_team_id` int(11) DEFAULT NULL,
  `away_team_id` int(11) DEFAULT NULL,
  `played` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `matches` WRITE;
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;

INSERT INTO `matches` (`id`, `home_team_id`, `away_team_id`, `played`, `created`, `modified`)
VALUES
	(1,1,2,'2015-03-03','2015-03-03 08:36:40','2015-03-03 08:36:40'),
	(2,2,1,'2015-03-05','2015-03-03 08:37:06','2015-03-03 08:37:06');

/*!40000 ALTER TABLE `matches` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table players
# ------------------------------------------------------------

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;

INSERT INTO `players` (`id`, `first_name`, `last_name`, `created`, `modified`)
VALUES
	(1,'David','Yell','2015-03-03 08:32:52','2015-03-03 08:32:52'),
	(2,'Tom','Curry','2015-03-03 08:32:58','2015-03-03 08:32:58'),
	(3,'Simon','Buckwell','2015-03-03 08:33:06','2015-03-03 08:33:06'),
	(4,'Adam','White','2015-03-03 08:33:13','2015-03-03 08:33:13'),
	(5,'Stuart','Lowes','2015-03-03 08:33:26','2015-03-03 08:33:26'),
	(6,'Daniel','Platt','2015-03-03 08:33:35','2015-03-03 08:33:35'),
	(7,'Michael','Forbes','2015-03-03 08:34:15','2015-03-03 08:34:15'),
	(8,'Cameron','Runcie','2015-03-03 08:34:24','2015-03-03 08:34:24'),
	(9,'Steve','King','2015-03-03 08:34:31','2015-03-03 08:34:31'),
	(10,'Salvador','Dali','2015-03-03 08:53:23','2015-03-03 08:53:23'),
	(11,'Pablo','Picasso','2015-03-03 08:53:51','2015-03-03 08:53:51'),
	(12,'Claude','Monet','2015-03-03 08:54:07','2015-03-03 08:54:07');

/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table players_teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `players_teams`;

CREATE TABLE `players_teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `players_teams` WRITE;
/*!40000 ALTER TABLE `players_teams` DISABLE KEYS */;

INSERT INTO `players_teams` (`id`, `player_id`, `team_id`, `created`, `modified`)
VALUES
	(1,1,1,'2015-03-03 08:35:53','2015-03-03 08:35:53'),
	(2,2,1,'2015-03-03 08:35:58','2015-03-03 08:35:58'),
	(3,3,1,'2015-03-03 08:36:02','2015-03-03 08:36:02'),
	(4,4,1,'2015-03-03 08:36:07','2015-03-03 08:36:07'),
	(5,5,1,'2015-03-03 08:36:12','2015-03-03 08:36:12'),
	(6,6,1,'2015-03-03 08:36:16','2015-03-03 08:36:16'),
	(7,7,2,'2015-03-03 08:36:21','2015-03-03 08:36:21'),
	(8,8,2,'2015-03-03 08:36:26','2015-03-03 08:36:26'),
	(9,9,2,'2015-03-03 08:36:30','2015-03-03 08:36:30'),
	(10,10,2,'2015-03-03 08:54:41','2015-03-03 08:54:41'),
	(11,11,2,'2015-03-03 08:54:47','2015-03-03 08:54:47'),
	(12,12,2,'2015-03-03 08:54:53','2015-03-03 08:54:53');

/*!40000 ALTER TABLE `players_teams` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;

INSERT INTO `teams` (`id`, `name`, `created`, `modified`)
VALUES
	(1,'Developers United','2015-03-03 08:33:50','2015-03-03 08:33:50'),
	(2,'Designers FC','2015-03-03 08:33:58','2015-03-03 08:33:58');

/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
