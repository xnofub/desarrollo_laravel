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

/*Table structure for table `estadopost` */

DROP TABLE IF EXISTS `estadopost`;

CREATE TABLE `estadopost` (
  `STP_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `STP_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`STP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `estadopost` */

insert  into `estadopost`(`STP_ID`,`STP_NOMBRE`) values (1,'Autorizado'),(2,'Pendiente');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `eventos` */

insert  into `eventos`(`EVN_ID`,`EVN_NOMBRE`,`EVN_FECHA`,`FTO_ID`,`TND_ID`) values (26,'Master Championship','2017-05-26',2,3),(27,'Open forja','2017-06-10',2,1);

/*Table structure for table `eventosmazos` */

DROP TABLE IF EXISTS `eventosmazos`;

CREATE TABLE `eventosmazos` (
  `EVM_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EVN_ID` bigint(20) DEFAULT NULL,
  `JGD_ID` bigint(20) DEFAULT NULL,
  `MAZ_ID` bigint(20) DEFAULT NULL,
  `EVM_NOMBRE_MAZO` varchar(255) DEFAULT NULL,
  `EVM_POSICION` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EVM_ID`),
  KEY `EVN_ID` (`EVN_ID`),
  KEY `JGD_ID` (`JGD_ID`),
  KEY `MAZ_ID` (`MAZ_ID`),
  CONSTRAINT `eventosmazos_ibfk_1` FOREIGN KEY (`EVN_ID`) REFERENCES `eventos` (`EVN_ID`),
  CONSTRAINT `eventosmazos_ibfk_2` FOREIGN KEY (`JGD_ID`) REFERENCES `jugadores` (`JGD_ID`),
  CONSTRAINT `eventosmazos_ibfk_3` FOREIGN KEY (`MAZ_ID`) REFERENCES `mazos` (`MAZ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `eventosmazos` */

insert  into `eventosmazos`(`EVM_ID`,`EVN_ID`,`JGD_ID`,`MAZ_ID`,`EVM_NOMBRE_MAZO`,`EVM_POSICION`) values (41,26,29,25,'Titan','1'),(42,26,13,15,'Dredge','2'),(43,26,26,1,'Jund','3'),(44,26,11,3,'Burn','4'),(45,26,32,6,'Blue Moon','5'),(46,26,33,26,'Mardu','6'),(47,26,34,27,'Esper Delve','7'),(48,26,35,9,'Tron','8'),(49,27,18,28,'Auras','4-8'),(50,27,36,8,'BantDrazi','2'),(51,27,19,2,'Uwr Queller','4-8');

/*Table structure for table `formatos` */

DROP TABLE IF EXISTS `formatos`;

CREATE TABLE `formatos` (
  `FTO_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `FTO_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `formatos` */

insert  into `formatos`(`FTO_ID`,`FTO_NOMBRE`) values (1,'Standar'),(2,'Modern'),(3,'Legacy'),(4,'Commander'),(5,'Vintage');

/*Table structure for table `listas` */

DROP TABLE IF EXISTS `listas`;

CREATE TABLE `listas` (
  `LST_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `LST_CANTIDAD` bigint(20) DEFAULT NULL,
  `LST_NOMBRE_CARTA` varchar(255) DEFAULT NULL,
  `CRT_ID` bigint(20) DEFAULT NULL,
  `EVM_ID` bigint(20) DEFAULT NULL,
  `TCR_ID` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`LST_ID`),
  KEY `EVM_ID` (`EVM_ID`),
  KEY `CRT_ID` (`CRT_ID`),
  KEY `TCR_ID` (`TCR_ID`),
  CONSTRAINT `listas_ibfk_3` FOREIGN KEY (`TCR_ID`) REFERENCES `tipocarta` (`TCR_ID`),
  CONSTRAINT `listas_ibfk_1` FOREIGN KEY (`EVM_ID`) REFERENCES `eventosmazos` (`EVM_ID`),
  CONSTRAINT `listas_ibfk_2` FOREIGN KEY (`CRT_ID`) REFERENCES `cartas` (`CRT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

/*Data for the table `listas` */

insert  into `listas`(`LST_ID`,`LST_CANTIDAD`,`LST_NOMBRE_CARTA`,`CRT_ID`,`EVM_ID`,`TCR_ID`) values (61,4,'primeval tita',205027,41,3),(62,4,'Sakura',74210,41,3),(63,1,'Obstinate',205075,41,3),(66,1,'',201578,41,1),(68,1,'',233055,41,6),(72,4,'Summoner\'s Pact',130706,41,1),(73,1,'Azusa, Lost but Seeking',80283,41,3),(74,4,'Amulet of v',191577,41,6),(77,1,'',370549,41,6),(80,2,'journ',49437,41,1),(81,4,'serum vi',50145,41,1),(82,4,'Ancient st',193437,41,1),(83,1,'sleight of ha',6529,41,1),(84,1,'pact of nega',130701,41,1),(87,1,'boros gar',83900,41,4),(88,1,'temple of m',373571,41,4),(89,1,'crumbling vest',407680,41,4),(90,3,'botanic',417817,41,4),(91,2,'forest',201962,41,4),(92,4,'simic gro',97089,41,4),(95,3,'',136047,41,4),(96,4,'gemstone',4592,41,4),(97,2,'gruul t',97223,41,4),(98,1,'ghost q',107504,41,4),(99,1,'radiant f',383355,41,4),(100,1,'vesuva',113543,41,4),(103,1,'',197789,41,4),(104,1,'sun',83794,41,4),(105,1,'slayer',240170,41,4),(106,1,'disme',230082,41,8),(108,3,'',397677,41,8),(109,1,'bojuka bo',197786,41,8),(110,1,'engineere',50139,41,8),(111,2,'swan',373701,41,8),(112,1,'firespo',153314,41,8),(113,1,'engineered',50139,41,8),(114,1,'chalice ',48326,41,8),(115,1,'beast wi',221533,41,8),(116,1,'reclamat',383359,41,8),(117,1,'RURI',369025,41,8),(118,1,'SIGARD',240033,41,8),(119,1,'HORNET Q',238141,41,8),(120,4,'Spider um',194925,49,6),(122,1,'',136196,49,3),(123,3,'Horizon Canopy',130574,49,4),(124,4,'Razorverge Thicket',209407,49,4),(125,4,'Temple Garden',89093,49,4),(128,1,'forest',201962,49,4),(129,1,'plains',201972,49,4),(130,4,'Windswept Heath',39507,49,4),(131,2,'Wooded Foothills',39506,49,4),(133,4,'Gladecover Scout',220082,49,3),(135,4,'slippery Bogle',150999,49,3),(136,3,'Kor Spiritdancer',193544,49,3),(137,4,'Daybreak Coronet',397798,49,6),(138,4,'Ethereal Armor',265414,49,6),(139,4,'Hyena Umbra',198294,49,6),(140,4,'Rancor',12433,49,6),(141,2,'Spirit Mantle',220154,49,6),(142,3,'Unflinching Courage',369074,49,6),(143,3,'path to exile',179235,49,1),(144,1,'Silhana Ledgewalker',96825,49,3),(147,3,'stony s',247425,49,8),(148,4,'Leyline of Sanctity',204993,49,8),(150,3,'pithing needle',74207,49,8),(151,1,'relic of pro',174824,49,8),(152,2,'disench',14463,49,8),(155,2,'Gaddock',140188,49,8),(156,4,'Spell que',414494,51,3),(157,4,'Snapcaster ',227676,51,3),(158,4,'Light ING ',87908,51,1),(161,4,'',397793,51,1),(162,3,'Logic',126151,51,1),(163,1,'Maná le',5182,51,1),(164,4,'Path to e',179235,51,1),(165,4,'Electrol',96829,51,1),(166,4,'Serum vis',50145,51,1),(167,4,'Lightning ',191089,51,1),(168,4,'Scalding ',190393,51,4),(169,2,'Ariel mesa',177584,51,4),(170,2,'Flooded',386537,51,4),(171,2,'Hallowed f',97071,51,4),(172,2,'Steam ve',96923,51,4),(173,1,'Sacred fou',89066,51,4),(174,3,'Island',201964,51,4),(175,1,'Plains',201972,51,4),(176,1,'Mountain',201967,51,4),(177,3,'Spire',417822,51,4),(179,3,'',177545,51,4);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `PST_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PST_TITULO` varchar(255) DEFAULT NULL,
  `PST_FECHA` datetime DEFAULT NULL,
  `PST_DESCRIPCION` varchar(255) DEFAULT NULL,
  `PST_TEXTO` text,
  `STP_ID` bigint(20) DEFAULT NULL,
  `TPP_ID` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`PST_ID`),
  KEY `TPP_ID` (`TPP_ID`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`TPP_ID`) REFERENCES `tipopost` (`TPP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`PST_ID`,`PST_TITULO`,`PST_FECHA`,`PST_DESCRIPCION`,`PST_TEXTO`,`STP_ID`,`TPP_ID`) values (7,'Lorem Ipsumssss','2017-06-15 02:06:17','At the beginning of 2017, Golgari Grave-Troll was banned to nerf, but not kill the deck. It had it\'s intended effect, as the deck lost 2-6 dredge power a turn, as well as having to devote more slots to discard and dredgers to shore up the gaps in the engi','<h1><em><strong>Ejemplo De Articulo&nbsp;</strong></em></h1>\r\n\r\n<h2><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/gQyj1Wa7BU8\" width=\"640\"></iframe></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&iquest;Qu&eacute; es Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas &quot;Letraset&quot;, las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n',1,1),(8,'Titulo de ejemplo','2017-06-13 22:06:55','At the beginning of 2017, Golgari Grave-Troll was banned to nerf, but not kill the deck. It had it\'s intended effect, as the deck lost 2-6 dredge power a turn, as well as having to devote more slots to discard and dredgers to shore up the gaps in the engi','<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/z-hVm9_O6BI\" width=\"640\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Texto de ejemplo</p>\r\n',1,1),(9,'Primer articulo de prueba','2017-06-14 01:06:47','At the beginning of 2017, Golgari Grave-Troll was banned to nerf, but not kill the deck. It had it\'s intended effect, as the deck lost 2-6 dredge power a turn, as well as having to devote more slots to discard and dredgers to shore up the gaps in the engi','<h1><img src=\"http://i.imgur.com/3IS96W2.png?1\" />&nbsp;<em><strong>Dredge</strong></em></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">\r\n			<table border=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>20 LANDS</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Blackcleave Cliffs</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Blood Crypt</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Bloodstained Mire</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>3&nbsp;Copperline Gorge</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Dakmor Salvage</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Gemstone Mine</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Mountain</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Scalding Tarn</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td valign=\"top\">\r\n			<table border=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Stomping Ground</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Wooded Foothills</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"25\" valign=\"bottom\">23 CREATURES</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Bloodghast</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Golgari Thug</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Insolent Neonate</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Narcomoeba</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Prized Amalgam</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Scourge Devil</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td valign=\"top\">\r\n			<table border=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Stinkweed Imp</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td height=\"25\" valign=\"bottom\">17 INSTANTS and SORC.</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Cathartic Reunion</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Collective Brutality</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>3&nbsp;Conflagrate</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Darkblast</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Faithless Looting</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>4&nbsp;Life from the Loam</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td valign=\"top\">\r\n			<table border=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td>SIDEBOARD</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Abrupt Decay</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Ancient Grudge</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Collective Brutality</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Darkblast</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Ghost Quarter</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>1&nbsp;Gnaw to the Bone</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Lightning Axe</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Nature&#39;s Claim</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>2&nbsp;Thoughtseize</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n',1,1),(10,'Modern 4C GIFT','2017-06-15 02:06:12','Una nueva sorpresa llega directamente desde el Daily modern 5-0 en ligas de mol un ausente durante meses.','<h1><em><strong>GIFT 5&#39;0 Dayli Magic</strong></em><br />\r\n&nbsp;</h1>\r\n\r\n<p><img src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Elesh+Norn%2C+Grand+Cenobite\" /><img src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Gifts+Ungiven\" /><img src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Unburial+Rites\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"youtube-embed-wrapper\" style=\"position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/YXbv0NRi6yc?rel=0\" style=\"position:absolute;top:0;left:0;width:100%;height:100%\" width=\"640\"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-sm-4 col-xs-12\">&nbsp;</div>\r\n</div>\r\n</div>\r\n',1,1),(11,'Titulo','2017-06-15 01:06:51','fghfhf','<div class=\"sorted-by-overview-container sortedContainer\" style=\"position: relative; height: 0px;\">\r\n<div class=\"sorted-by-planeswalker clearfix element\">\r\n<h5>Planeswalker (3)</h5>\r\n<span class=\"row\"><span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Liliana+of+the+Veil\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BLiliana%5D+%5Bof%5D+%5Bthe%5D+%5BVeil%5D\">Liliana of the Veil</a></span> </span></div>\r\n\r\n<div class=\"sorted-by-creature clearfix element\">\r\n<h5>Creature (4)</h5>\r\n<span class=\"row\"><span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Elesh+Norn%2C+Grand+Cenobite\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BElesh%5D+%5BNorn,%5D+%5BGrand%5D+%5BCenobite%5D\">Elesh Norn, Grand Cenobite</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Grave+Titan\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BGrave%5D+%5BTitan%5D\">Grave Titan</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Snapcaster+Mage\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BSnapcaster%5D+%5BMage%5D\">Snapcaster Mage</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Thragtusk\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BThragtusk%5D\">Thragtusk</a></span> </span></div>\r\n\r\n<div class=\"sorted-by-sorcery clearfix element\">\r\n<h5>Sorcery (18)</h5>\r\n<span class=\"row\"><span class=\"card-count\">2</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Damnation\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BDamnation%5D\">Damnation</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Duress\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BDuress%5D\">Duress</a></span> </span> <span class=\"row\"> <span class=\"card-count\">4</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Inquisition+of+Kozilek\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BInquisition%5D+%5Bof%5D+%5BKozilek%5D\">Inquisition of Kozilek</a></span> </span> <span class=\"row\"> <span class=\"card-count\">2</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Lingering+Souls\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BLingering%5D+%5BSouls%5D\">Lingering Souls</a></span> </span> <span class=\"row\"> <span class=\"card-count\">2</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Maelstrom+Pulse\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BMaelstrom%5D+%5BPulse%5D\">Maelstrom Pulse</a></span> </span> <span class=\"row\"> <span class=\"card-count\">4</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Serum+Visions\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BSerum%5D+%5BVisions%5D\">Serum Visions</a></span> </span> <span class=\"row\"> <span class=\"card-count\">2</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Thoughtseize\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BThoughtseize%5D\">Thoughtseize</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Unburial+Rites\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BUnburial%5D+%5BRites%5D\">Unburial Rites</a></span> </span></div>\r\n\r\n<div class=\"sorted-by-instant clearfix element\">\r\n<h5>Instant (10)</h5>\r\n<span class=\"row\"><span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Abrupt+Decay\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BAbrupt%5D+%5BDecay%5D\">Abrupt Decay</a></span> </span> <span class=\"row\"> <span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Fatal+Push\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BFatal%5D+%5BPush%5D\">Fatal Push</a></span> </span> <span class=\"row\"> <span class=\"card-count\">4</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Gifts+Ungiven\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BGifts%5D+%5BUngiven%5D\">Gifts Ungiven</a></span> </span> <span class=\"row\"> <span class=\"card-count\">2</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Go+for+the+Throat\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BGo%5D+%5Bfor%5D+%5Bthe%5D+%5BThroat%5D\">Go for the Throat</a></span> </span></div>\r\n\r\n<div class=\"sorted-by-land clearfix element\">\r\n<h5>Land (25)</h5>\r\n<span class=\"row\"><span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Breeding+Pool\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BBreeding%5D+%5BPool%5D\">Breeding Pool</a></span> </span> <span class=\"row\"> <span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Darkslick+Shores\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BDarkslick%5D+%5BShores%5D\">Darkslick Shores</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Forest\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BForest%5D\">Forest</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Godless+Shrine\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BGodless%5D+%5BShrine%5D\">Godless Shrine</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Hallowed+Fountain\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BHallowed%5D+%5BFountain%5D\">Hallowed Fountain</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Island\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BIsland%5D\">Island</a></span> </span> <span class=\"row\"> <span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Marsh+Flats\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BMarsh%5D+%5BFlats%5D\">Marsh Flats</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Overgrown+Tomb\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BOvergrown%5D+%5BTomb%5D\">Overgrown Tomb</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Plains\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BPlains%5D\">Plains</a></span> </span> <span class=\"row\"> <span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Polluted+Delta\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BPolluted%5D+%5BDelta%5D\">Polluted Delta</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Swamp\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BSwamp%5D\">Swamp</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Tectonic+Edge\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BTectonic%5D+%5BEdge%5D\">Tectonic Edge</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Temple+Garden\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BTemple%5D+%5BGarden%5D\">Temple Garden</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Urborg%2C+Tomb+of+Yawgmoth\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BUrborg,%5D+%5BTomb%5D+%5Bof%5D+%5BYawgmoth%5D\">Urborg, Tomb of Yawgmoth</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Vault+of+the+Archangel\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BVault%5D+%5Bof%5D+%5Bthe%5D+%5BArchangel%5D\">Vault of the Archangel</a></span> </span> <span class=\"row\"> <span class=\"card-count\">3</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Verdant+Catacombs\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BVerdant%5D+%5BCatacombs%5D\">Verdant Catacombs</a></span> </span> <span class=\"row\"> <span class=\"card-count\">1</span> <span class=\"card-name\"><a class=\"deck-list-link\" data-gif=\"http://magic.wizards.com/\" data-mp4=\"http://magic.wizards.com/\" data-src=\"http://gatherer.wizards.com/Handlers/Image.ashx?type=card&amp;name=Watery+Grave\" data-webm=\"http://magic.wizards.com/\" href=\"http://gatherer.wizards.com/Pages/Search/Default.aspx?name=+%5BWatery%5D+%5BGrave%5D\">Watery Grave</a></span> </span></div>\r\n\r\n<div class=\"regular-card-total\">60 Cards</div>\r\n</div>\r\n',1,1);

/*Table structure for table `tipocarta` */

DROP TABLE IF EXISTS `tipocarta`;

CREATE TABLE `tipocarta` (
  `TCR_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TCR_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TCR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tipocarta` */

insert  into `tipocarta`(`TCR_ID`,`TCR_NOMBRE`) values (1,'Instant and Sorc.'),(3,'Creature'),(4,'Lands'),(6,'Other Spell'),(8,'Sideboard');

/*Table structure for table `tipopost` */

DROP TABLE IF EXISTS `tipopost`;

CREATE TABLE `tipopost` (
  `TPP_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TPP_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TPP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tipopost` */

insert  into `tipopost`(`TPP_ID`,`TPP_NOMBRE`) values (1,'Articulo'),(2,'Noticia'),(3,'Otro');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
