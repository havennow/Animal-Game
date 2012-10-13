# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.37)
# Database: animal
# Generation Time: 2012-10-13 18:00:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_animal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_animal`;

CREATE TABLE `tbl_animal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_animal` WRITE;
/*!40000 ALTER TABLE `tbl_animal` DISABLE KEYS */;

INSERT INTO `tbl_animal` (`id`, `nome`)
VALUES
	(1,'Cachorro'),
	(2,'Cobra'),
	(3,'Cavalo');

/*!40000 ALTER TABLE `tbl_animal` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_questao
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_questao`;

CREATE TABLE `tbl_questao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_questao` WRITE;
/*!40000 ALTER TABLE `tbl_questao` DISABLE KEYS */;

INSERT INTO `tbl_questao` (`id`, `nome`)
VALUES
	(1,'Rasteja pelo chão?'),
	(2,'Gosta de carne?'),
	(3,'Pode carregar uma pessoa?');

/*!40000 ALTER TABLE `tbl_questao` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_resposta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_resposta`;

CREATE TABLE `tbl_resposta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) unsigned NOT NULL,
  `id_questao` int(10) unsigned NOT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_animal` (`id_animal`),
  KEY `id_questao` (`id_questao`),
  CONSTRAINT `tbl_resposta_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `tbl_animal` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_resposta_ibfk_2` FOREIGN KEY (`id_questao`) REFERENCES `tbl_questao` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_resposta` WRITE;
/*!40000 ALTER TABLE `tbl_resposta` DISABLE KEYS */;

INSERT INTO `tbl_resposta` (`id`, `id_animal`, `id_questao`, `valor`)
VALUES
	(26,1,2,1),
	(27,2,1,1),
	(28,3,3,1),
	(29,3,2,0),
	(30,1,3,0),
	(31,2,2,0),
	(32,3,1,0),
	(33,1,1,0),
	(34,2,3,0);

/*!40000 ALTER TABLE `tbl_resposta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`)
VALUES
	(1,'animal','2cbb0819950a3b50ffe75723df4c6f6c','animal@animal.com');

/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
