/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.55-0+deb8u1 : Database - dailymodern
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dailymodern` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `PST_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PST_TITULO` varchar(255) DEFAULT NULL,
  `PST_FECHA` datetime DEFAULT NULL,
  `PST_TEXTO` text,
  `PST_ESTADO` tinyint(1) DEFAULT NULL,
  `TPP_ID` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`PST_ID`),
  KEY `TPP_ID` (`TPP_ID`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`TPP_ID`) REFERENCES `tipopost` (`TPP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tipopost` */

DROP TABLE IF EXISTS `tipopost`;

CREATE TABLE `tipopost` (
  `TPP_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TPP_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TPP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
