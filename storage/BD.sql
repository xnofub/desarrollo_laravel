/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.10-MariaDB : Database - dailymodern
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dailymodern` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dailymodern`;

/*Table structure for table `cartas` */

DROP TABLE IF EXISTS `cartas`;

CREATE TABLE `cartas` (
  `CRT_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CRT_NOMBRE` varchar(255) DEFAULT NULL,
  `CRT_TIPO` varchar(255) DEFAULT NULL,
  `CRT_MANA` varchar(255) DEFAULT NULL,
  `CRT_RAREZA` varchar(255) DEFAULT NULL,
  `CRT_ARTISTA` varchar(255) DEFAULT NULL,
  `CRT_EDICION` varchar(255) DEFAULT NULL,
  `EDN_ID` bigint(20) DEFAULT NULL,
  `CRT_IMAGEN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CRT_ID`),
  KEY `EDN_ID` (`EDN_ID`),
  CONSTRAINT `cartas_ibfk_1` FOREIGN KEY (`EDN_ID`) REFERENCES `ediciones` (`EDN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cartas` */

/*Table structure for table `ediciones` */

DROP TABLE IF EXISTS `ediciones`;

CREATE TABLE `ediciones` (
  `EDN_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EDN_NOMBRE` varchar(255) DEFAULT NULL,
  `EDN_BLOQUE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EDN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ediciones` */

/*Table structure for table `eventos` */

DROP TABLE IF EXISTS `eventos`;

CREATE TABLE `eventos` (
  `EVN_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EVN_NOMBRE` varchar(255) DEFAULT NULL,
  `EVN_FECHA` date DEFAULT NULL,
  `FTO_ID` bigint(20) DEFAULT NULL,
  `TND_ID` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`EVN_ID`),
  KEY `FTO_ID` (`FTO_ID`),
  KEY `TND_ID` (`TND_ID`),
  CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`FTO_ID`) REFERENCES `formatos` (`FTO_ID`),
  CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`TND_ID`) REFERENCES `tiendas` (`TND_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `eventos` */

insert  into `eventos`(`EVN_ID`,`EVN_NOMBRE`,`EVN_FECHA`,`FTO_ID`,`TND_ID`) values (1,'Daily Forja','2017-05-01',2,1),(2,'Daily Forja','2017-05-01',1,1),(3,'Daily Forja','2017-05-22',2,1),(4,'Daily Forja','2017-05-22',2,1),(5,'Daily Forja','2017-05-22',2,1);

/*Table structure for table `eventos_mazos` */

DROP TABLE IF EXISTS `eventos_mazos`;

CREATE TABLE `eventos_mazos` (
  `EVM_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EVN_ID` bigint(20) DEFAULT NULL,
  `JGD_ID` bigint(20) DEFAULT NULL,
  `MAZ_ID` bigint(20) DEFAULT NULL,
  `EVM_NOMBRE_MAZO` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EVM_ID`),
  KEY `EVN_ID` (`EVN_ID`),
  KEY `JGD_ID` (`JGD_ID`),
  KEY `MAZ_ID` (`MAZ_ID`),
  CONSTRAINT `eventos_mazos_ibfk_1` FOREIGN KEY (`EVN_ID`) REFERENCES `eventos` (`EVN_ID`),
  CONSTRAINT `eventos_mazos_ibfk_2` FOREIGN KEY (`JGD_ID`) REFERENCES `jugadores` (`JGD_ID`),
  CONSTRAINT `eventos_mazos_ibfk_3` FOREIGN KEY (`MAZ_ID`) REFERENCES `mazos` (`MAZ_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `eventos_mazos` */

/*Table structure for table `formatos` */

DROP TABLE IF EXISTS `formatos`;

CREATE TABLE `formatos` (
  `FTO_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `FTO_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `formatos` */

insert  into `formatos`(`FTO_ID`,`FTO_NOMBRE`) values (1,'STANDAR'),(2,'MODERN'),(3,'LEGACY'),(4,'COMMANDAR'),(5,'VINTAGE');

/*Table structure for table `jugadores` */

DROP TABLE IF EXISTS `jugadores`;

CREATE TABLE `jugadores` (
  `JGD_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `JGD_NOMBRE` varchar(255) DEFAULT NULL,
  `JGD_PAIS` varchar(255) DEFAULT NULL,
  `JGD_DCI` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`JGD_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jugadores` */

insert  into `jugadores`(`JGD_ID`,`JGD_NOMBRE`,`JGD_PAIS`,`JGD_DCI`) values (1,'Francisco Arturo Carrasco Maureira','-','1205776700'),(2,'Mario BIsama',NULL,'7115100860'),(3,'Neftali Toro ',NULL,'3081087347'),(4,'Roberto del Rio',NULL,'2203827913'),(7,'Pietro Reyes',NULL,'4314941207');

/*Table structure for table `listas` */

DROP TABLE IF EXISTS `listas`;

CREATE TABLE `listas` (
  `LST_ID` bigint(20) DEFAULT NULL,
  `LST_CANTIDAD` bigint(20) DEFAULT NULL,
  `CRT_ID` bigint(20) DEFAULT NULL,
  `EVM_ID` bigint(20) DEFAULT NULL,
  KEY `EVM_ID` (`EVM_ID`),
  KEY `CRT_ID` (`CRT_ID`),
  CONSTRAINT `listas_ibfk_1` FOREIGN KEY (`EVM_ID`) REFERENCES `eventos_mazos` (`EVM_ID`),
  CONSTRAINT `listas_ibfk_2` FOREIGN KEY (`CRT_ID`) REFERENCES `cartas` (`CRT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `listas` */

/*Table structure for table `mazos` */

DROP TABLE IF EXISTS `mazos`;

CREATE TABLE `mazos` (
  `MAZ_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MAZ_NOMBRE` varchar(255) DEFAULT NULL,
  `FTO_ID` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`MAZ_ID`),
  KEY `FTO_ID` (`FTO_ID`),
  CONSTRAINT `mazos_ibfk_1` FOREIGN KEY (`FTO_ID`) REFERENCES `formatos` (`FTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mazos` */

insert  into `mazos`(`MAZ_ID`,`MAZ_NOMBRE`,`FTO_ID`) values (1,'JUND',2),(2,'UWR',2),(3,'BURN',2),(4,'MARDU TOKENS',2),(5,'UW CONTROL',2),(6,'BLUE MOON',2),(7,'TOKENS WB',2),(8,'BANTDRAZI',1),(9,'ELDRATRON',2),(10,'ADNAUSEUM',2),(11,'STORM',2);

/*Table structure for table `tiendas` */

DROP TABLE IF EXISTS `tiendas`;

CREATE TABLE `tiendas` (
  `TND_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TND_NOMBRE` varchar(255) DEFAULT NULL,
  `TND_PROPIETARIO` varchar(255) DEFAULT NULL,
  `TND_DIRECCION` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TND_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tiendas` */

insert  into `tiendas`(`TND_ID`,`TND_NOMBRE`,`TND_PROPIETARIO`,`TND_DIRECCION`) values (1,'LA FORJA DE STONE','JORGE PEÑAILILLO','GORBEA 762'),(2,'MAGIC SUR',NULL,NULL),(3,'MAGIC4EVER',NULL,NULL),(4,'STRONGHOLD',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
