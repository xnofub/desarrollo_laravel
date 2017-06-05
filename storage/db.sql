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

USE `dailymodern`;

/*Table structure for table `cartas` */

DROP TABLE IF EXISTS `cartas`;

CREATE TABLE `cartas` (
  `CRT_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CRT_NUMERO_EDICION` varchar(255) DEFAULT NULL,
  `CRT_NOMBRE` varchar(255) DEFAULT NULL,
  `CRT_TIPO` varchar(255) DEFAULT NULL,
  `CRT_MANA` varchar(255) DEFAULT NULL,
  `CRT_RAREZA` varchar(255) DEFAULT NULL,
  `CRT_ARTISTA` varchar(255) DEFAULT NULL,
  `CRT_EDICION` varchar(255) DEFAULT NULL,
  `EDN_COD_INTERNO` varchar(255) DEFAULT NULL,
  `EDN_ID` bigint(20) DEFAULT NULL,
  `CRT_IMAGEN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CRT_ID`),
  KEY `EDN_ID` (`EDN_ID`),
  CONSTRAINT `cartas_ibfk_1` FOREIGN KEY (`EDN_ID`) REFERENCES `ediciones` (`EDN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=432579 DEFAULT CHARSET=latin1;

/*Data for the table `cartas` */


/*Table structure for table `ediciones` */

DROP TABLE IF EXISTS `ediciones`;

CREATE TABLE `ediciones` (
  `EDN_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EDN_NOMBRE` varchar(255) DEFAULT NULL,
  `EDN_BLOQUE` varchar(255) DEFAULT NULL,
  `EDN_COD_INTERNO` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EDN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

/*Data for the table `ediciones` */

insert  into `ediciones`(`EDN_ID`,`EDN_NOMBRE`,`EDN_BLOQUE`,`EDN_COD_INTERNO`) values (1,'Aether Revolt',NULL,'AER'),(2,'Alara Reborn',NULL,'ARB'),(3,'Alliances',NULL,'AL'),(4,'Amonkhet',NULL,'AKH'),(5,'Anthologies',NULL,'ANT'),(6,'Antiquities',NULL,'AQ'),(7,'Apocalypse',NULL,'AP'),(8,'Arabian Nights',NULL,'AN'),(9,'Archenemy',NULL,'ARC'),(10,'Archenemy \"Schemes\"',NULL,'ARS'),(11,'Arena League',NULL,'ARE'),(12,'Asia Pacific Land Program',NULL,'APAC'),(13,'Avacyn Restored',NULL,'AVR'),(14,'Battle for Zendikar',NULL,'BFZ'),(15,'Battle Royale Box Set',NULL,'BR'),(16,'Beatdown Box Set',NULL,'BD'),(17,'Betrayers of Kamigawa',NULL,'BOK'),(18,'Born of the Gods',NULL,'BNG'),(19,'Celebration Cards',NULL,'CC'),(20,'Champions of Kamigawa',NULL,'CHK'),(21,'Champs',NULL,'CHA'),(22,'Chronicles',NULL,'CH'),(23,'Clash Pack',NULL,'CLSP'),(24,'Classic Sixth Edition',NULL,'6E'),(25,'Coldsnap',NULL,'CS'),(26,'Coldsnap Theme Decks',NULL,'CST'),(27,'Commander 2013 Edition',NULL,'C13'),(28,'Commander 2014',NULL,'C14'),(29,'Commander 2015',NULL,'C15'),(30,'Commander 2016',NULL,'C16'),(31,'Commander Anthology',NULL,''),(32,'Commander\'s Arsenal',NULL,'CRS'),(33,'Conflux',NULL,'CFX'),(34,'Conspiracy: Take the Crown',NULL,'CN2'),(35,'Conspiracy: Take the Crown \"Conspiracies\"',NULL,'CN2C'),(36,'Dark Ascension',NULL,'DKA'),(37,'Darksteel',NULL,'DS'),(38,'Deckmasters',NULL,'DM'),(39,'Dissension',NULL,'DIS'),(40,'Dragon\'s Maze',NULL,'DGM'),(41,'Dragons of Tarkir',NULL,'DTK'),(42,'Duel Decks Anthology, Divine vs. Demonic',NULL,'ADVD'),(43,'Duel Decks Anthology, Elves vs. Goblins',NULL,'AEVG'),(44,'Duel Decks Anthology, Garruk vs. Liliana',NULL,'AGVL'),(45,'Duel Decks Anthology, Jace vs. Chandra',NULL,'AJVC'),(46,'Duel Decks: Ajani vs. Nicol Bolas',NULL,'AVB'),(47,'Duel Decks: Blessed vs. Cursed',NULL,'BVC'),(48,'Duel Decks: Divine vs. Demonic',NULL,'DVD'),(49,'Duel Decks: Elspeth vs. Kiora',NULL,'EVK'),(50,'Duel Decks: Elspeth vs. Tezzeret',NULL,'EVT'),(51,'Duel Decks: Elves vs. Goblins',NULL,'EVG'),(52,'Duel Decks: Garruk vs. Liliana',NULL,'GVL'),(53,'Duel Decks: Heroes vs. Monsters',NULL,'HVM'),(54,'Duel Decks: Izzet vs. Golgari',NULL,'IVG'),(55,'Duel Decks: Jace vs. Chandra',NULL,'JVC'),(56,'Duel Decks: Jace vs. Vraska',NULL,'JVV'),(57,'Duel Decks: Knights vs. Dragons',NULL,'KVD'),(58,'Duel Decks: Mind vs. Might',NULL,'MVM'),(59,'Duel Decks: Nissa vs. Ob Nixilis',NULL,'NVO'),(60,'Duel Decks: Phyrexia vs. the Coalition',NULL,'PVC'),(61,'Duel Decks: Sorin vs. Tibalt',NULL,'SVT'),(62,'Duel Decks: Speed vs. Cunning',NULL,'SVC'),(63,'Duel Decks: Venser vs. Koth',NULL,'VVK'),(64,'Duel Decks: Zendikar vs. Eldrazi',NULL,'ZVE'),(65,'Duels of the Planeswalkers',NULL,'DPA'),(66,'Eighth Edition',NULL,'8E'),(67,'Eldritch Moon',NULL,'EMN'),(68,'Eternal Masters',NULL,'EMA'),(69,'European Land Program',NULL,'EUR'),(70,'Eventide',NULL,'EVE'),(71,'Exodus',NULL,'EX'),(72,'Fallen Empires',NULL,'FE'),(73,'Fate Reforged',NULL,'FRF'),(74,'Fifth Dawn',NULL,'FD'),(75,'Fifth Edition',NULL,'5E'),(76,'Fourth Edition',NULL,'4E'),(77,'Friday Night Magic',NULL,'FNM'),(78,'From the Vault: Angels',NULL,'V15'),(79,'From the Vault: Annihilation (2014)',NULL,'V14'),(80,'From the Vault: Dragons',NULL,'V08'),(81,'From the Vault: Exiled',NULL,'V09'),(82,'From the Vault: Legends',NULL,'V11'),(83,'From the Vault: Lore',NULL,'V16'),(84,'From the Vault: Realms',NULL,'V12'),(85,'From the Vault: Relics',NULL,'V10'),(86,'From the Vault: Twenty',NULL,'V13'),(87,'Future Sight',NULL,'FUT'),(88,'Gatecrash',NULL,'GTC'),(89,'Grand Prix',NULL,'GPX'),(90,'Guildpact',NULL,'GP'),(91,'Guru',NULL,'GUR'),(92,'Happy Holidays',NULL,'HHO'),(93,'Homelands',NULL,'HL'),(94,'Ice Age',NULL,'IA'),(95,'Innistrad',NULL,'ISD'),(96,'Invasion',NULL,'IN'),(97,'Journey into Nyx',NULL,'JOU'),(98,'Judge Gift Program',NULL,'JCG'),(99,'Judgment',NULL,'JU'),(100,'Kaladesh',NULL,'KLD'),(101,'Khans of Tarkir',NULL,'KTK'),(102,'Legend Membership',NULL,'LGM'),(103,'Legends',NULL,'LG'),(104,'Legions',NULL,'LE'),(105,'Limited Edition Alpha',NULL,'A'),(106,'Limited Edition Beta',NULL,'B'),(107,'Lorwyn',NULL,'LRW'),(108,'Magic 2010',NULL,'M10'),(109,'Magic 2011',NULL,'M11'),(110,'Magic 2012',NULL,'M12'),(111,'Magic 2013',NULL,'M13'),(112,'Magic 2014 Core Set',NULL,'M14'),(113,'Magic 2015 Core Set',NULL,'M15'),(114,'Magic Game Day Cards',NULL,'GDC'),(115,'Magic Origins',NULL,'ORI'),(116,'Magic Player Rewards',NULL,'REW'),(117,'Magic: The Gathering Launch Parties',NULL,'GLP'),(118,'Magic: The Gathering-Commander',NULL,'CMD'),(119,'Magic: The Gatheringâ€”Conspiracy',NULL,'CNS'),(120,'Magic: The Gatheringâ€”Conspiracy \"Conspiracies\"',NULL,'CNSC'),(121,'Masterpiece Series: Amonkhet Invocations',NULL,'AKHM'),(122,'Masterpiece Series: Kaladesh Inventions',NULL,'MPS'),(123,'Masters Edition',NULL,'ME'),(124,'Masters Edition II',NULL,'ME2'),(125,'Masters Edition III',NULL,'ME3'),(126,'Masters Edition IV',NULL,'ME4'),(127,'Media Inserts',NULL,'MBP'),(128,'Mercadian Masques',NULL,'MM'),(129,'Mirage',NULL,'MI'),(130,'Mirrodin',NULL,'MR'),(131,'Mirrodin Besieged',NULL,'MBS'),(132,'Modern Event Deck 2014',NULL,'MD1'),(133,'Modern Masters',NULL,'MMA'),(134,'Modern Masters 2015 Edition',NULL,'MM2'),(135,'Modern Masters 2017 Edition',NULL,'MM3'),(136,'Morningtide',NULL,'MOR'),(137,'Nemesis',NULL,'NE'),(138,'New Phyrexia',NULL,'NPH'),(139,'Ninth Edition',NULL,'9E'),(140,'Oath of the Gatewatch',NULL,'OGW'),(141,'Odyssey',NULL,'OD'),(142,'Onslaught',NULL,'ON'),(143,'Planar Chaos',NULL,'PLC'),(144,'Planechase',NULL,'PCH'),(145,'Planechase \"Planes\"',NULL,'PCP'),(146,'Planechase 2012 Edition',NULL,'PC2'),(147,'Planechase 2012 Edition \"Planes\" and \"Phenomena\"',NULL,'PP2'),(148,'Planechase Anthology',NULL,'PCA'),(149,'Planechase Anthology \"Planes\" and \"Phenomena\"',NULL,'PCAP'),(150,'Planeshift',NULL,'PS'),(151,'Portal',NULL,'PT'),(152,'Portal Second Age',NULL,'P2'),(153,'Portal Three Kingdoms',NULL,'P3'),(154,'Premium Deck Series: Fire and Lightning',NULL,'FAL'),(155,'Premium Deck Series: Graveborn',NULL,'GRV'),(156,'Premium Deck Series: Slivers',NULL,'SLI'),(157,'Prerelease Events',NULL,'PRE'),(158,'Pro Tour',NULL,'PRO'),(159,'Prophecy',NULL,'PY'),(160,'Ravnica: City of Guilds',NULL,'RAV'),(161,'Release Events',NULL,'RLS'),(162,'Return to Ravnica',NULL,'RTR'),(163,'Revised Edition',NULL,'R'),(164,'Rise of the Eldrazi',NULL,'ROE'),(165,'Saviors of Kamigawa',NULL,'SOK'),(166,'Scars of Mirrodin',NULL,'SOM'),(167,'Scourge',NULL,'SC'),(168,'Seventh Edition',NULL,'7E'),(169,'Shadowmoor',NULL,'SHM'),(170,'Shadows over Innistrad',NULL,'SOI'),(171,'Shards of Alara',NULL,'ALA'),(172,'Starter 1999',NULL,'ST'),(173,'Starter 2000',NULL,'S2'),(174,'Stronghold',NULL,'SH'),(175,'Summer of Magic',NULL,'SUM'),(176,'Super Series',NULL,'SS'),(177,'Tempest',NULL,'TE'),(178,'Tempest Remastered',NULL,'TPR'),(179,'Tenth Edition',NULL,'10E'),(180,'The Dark',NULL,'DK'),(181,'Theros',NULL,'THS'),(182,'Time Spiral',NULL,'TSP'),(183,'Time Spiral \"Timeshifted\"',NULL,'TSB'),(184,'Torment',NULL,'TO'),(185,'Two-Headed Giant Tournament',NULL,'2HG'),(186,'Ugin\'s Fate promos',NULL,'UFRF'),(187,'Unglued',NULL,'UG'),(188,'Unhinged',NULL,'UNH'),(189,'Unlimited Edition',NULL,'U'),(190,'Urza\'s Destiny',NULL,'UD'),(191,'Urza\'s Legacy',NULL,'UL'),(192,'Urza\'s Saga',NULL,'US'),(193,'Vintage Masters',NULL,'VMA'),(194,'Visions',NULL,'VI'),(195,'Weatherlight',NULL,'WL'),(196,'Welcome Deck 2016',NULL,'W16'),(197,'Welcome Deck 2017',NULL,'W17'),(198,'World Magic Cup Qualifiers',NULL,'WCQ'),(199,'Worlds',NULL,'WRL'),(200,'Worldwake',NULL,'WWK'),(201,'WPN/Gateway',NULL,'GTW'),(202,'Zendikar',NULL,'ZEN'),(203,'Zendikar Expeditions',NULL,'EXP'),(204,' Aether Revolt',NULL,NULL),(205,' Amonkhet',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `eventos` */

insert  into `eventos`(`EVN_ID`,`EVN_NOMBRE`,`EVN_FECHA`,`FTO_ID`,`TND_ID`) values (9,'MIERCOLES DE MODERN- MAGIC4EVER','2017-05-24',2,3),(10,'MIERCOLES DE MODERN- MAGIC4EVER','2017-05-17',2,3),(11,'MILONGA MAGIC SUR','2017-05-16',2,2),(15,'Lunes Forja','2017-05-29',2,1),(16,'Modern Monday','2017-05-29',2,6),(18,'WEAITA','2017-07-01',2,7);

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `eventosmazos` */

insert  into `eventosmazos`(`EVM_ID`,`EVN_ID`,`JGD_ID`,`MAZ_ID`,`EVM_NOMBRE_MAZO`,`EVM_POSICION`) values (11,9,1,13,'ABZAN FORJA','1'),(12,9,11,3,'BURN','2'),(13,9,12,14,'SHADOW','3'),(14,10,12,14,'SHADOW','1'),(15,10,11,3,'BURN','2'),(16,11,13,15,'Dredge','1'),(17,11,15,16,'GIFT','2'),(18,11,16,17,'Eldrazi','3'),(24,15,20,13,'FORJA COUNTERS','3'),(26,15,23,20,'BW TAXES','4'),(27,15,24,9,'ELDRATRON','2'),(28,15,25,11,'UR STORM','1'),(29,16,26,1,'Jund ','1'),(30,16,10,21,'Knightfall ','2'),(31,16,27,22,'URB Delver','3'),(34,18,28,9,'RUBIO','1');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `jugadores` */

insert  into `jugadores`(`JGD_ID`,`JGD_NOMBRE`,`JGD_PAIS`,`JGD_DCI`) values (1,'Francisco Arturo Carrasco Maureira','-','1205776700'),(2,'Mario BIsama',NULL,'7115100860'),(3,'Neftali Toro ',NULL,'3081087347'),(4,'Roberto del Rio',NULL,'2203827913'),(7,'Pietro Reyes',NULL,'4314941207'),(10,'Miguel Patiño',NULL,'120947327'),(11,'Javier Villouta',NULL,'39670984'),(12,'Leonardo Gonzalos Rodriguez',NULL,'8102254320'),(13,'Alejandro Gatica',NULL,'66666666666'),(14,'Ivo Lee',NULL,'333333333'),(15,'Elias Arzola Galaz',NULL,'22222222'),(16,'Juan Carlos Hernández Contreras',NULL,'888888888'),(17,'Ricardo Parra',NULL,'1208427365'),(18,'Carlos Cid',NULL,'7110475694'),(19,'Eduardo Reyes',NULL,'5115205615'),(20,'José Alarcon',NULL,'4248327761'),(21,'Sebastián Correa',NULL,'8203858655'),(22,'Vikingo Víctor Valenzuela',NULL,'9102290530'),(23,'Alejandro alasevic',NULL,'9101748185'),(24,'Nicolas Ormeño Flores',NULL,'3114951092'),(25,'Jhon Doe',NULL,'1'),(26,'Rodrigo Arce Torres',NULL,'1201596455'),(27,'Nicolas Vasquez Veliz',NULL,'2'),(28,'Joaquin Arismendi',NULL,'6223778231');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `mazos` */

insert  into `mazos`(`MAZ_ID`,`MAZ_NOMBRE`,`FTO_ID`) values (1,'JUND',2),(2,'UWR',2),(3,'BURN',2),(4,'MARDU TOKENS',2),(5,'UW CONTROL',2),(6,'BLUE MOON',2),(7,'TOKENS WB',2),(8,'BANTDRAZI',1),(9,'ELDRATRON',2),(10,'ADNAUSEUM',2),(11,'STORM',2),(12,'SKRED',2),(13,'ABZAN COUNTERS',2),(14,'DEATH\'S SHADOW',2),(15,'DREDGE',2),(16,'THOPTER GIFTS',2),(17,'GW ELDRAZIS EVOLUTION',2),(18,'FORJA DECK',2),(19,'WB TOKENS',2),(20,'BW TAXES',2),(21,'Knightfall ',2),(22,'URX DELVER',1);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('xnofub@gmail.com','36790e3e164d7c11b417f5fcf95de73162d6cabb3b70baed688258d3b2c53e45','2017-05-31 13:59:34');

/*Table structure for table `tiendas` */

DROP TABLE IF EXISTS `tiendas`;

CREATE TABLE `tiendas` (
  `TND_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TND_NOMBRE` varchar(255) DEFAULT NULL,
  `TND_PROPIETARIO` varchar(255) DEFAULT NULL,
  `TND_DIRECCION` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TND_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tiendas` */

insert  into `tiendas`(`TND_ID`,`TND_NOMBRE`,`TND_PROPIETARIO`,`TND_DIRECCION`) values (1,'LA FORJA DE STONE','JORGE PEÑAILILLO','GORBEA 762'),(2,'MAGIC SUR',NULL,NULL),(3,'MAGIC4EVER',NULL,NULL),(4,'STRONGHOLD',NULL,NULL),(5,'ROCADRAGON',NULL,NULL),(6,'PORTAL',NULL,NULL),(7,'OTRA',NULL,NULL);

/*Table structure for table `tipocarta` */

DROP TABLE IF EXISTS `tipocarta`;

CREATE TABLE `tipocarta` (
  `TCR_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TCR_NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TCR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tipocarta` */

insert  into `tipocarta`(`TCR_ID`,`TCR_NOMBRE`) values (1,'Instant and Sorc.'),(3,'Creature'),(4,'Lands'),(6,'Other Spell');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'fcarrasco','xnofub@gmail.com','$2y$10$nsSLl/W3pzrQGv08h9js6OYuTq9yLNAbdJqPjmbQHB9tHcq2hbAx2','gHaFqpcIfiCaaeyTMZ7eQ6aBORjoBaz5aHnsk9QreQyaIHeq07UtBQ9VzwAe','2017-05-27 10:48:30','2017-05-31 13:57:07'),(2,'Mario Bisama','mbisama@gmail.com','$2y$10$h6lRcdGJUv/HIVanzYQNSO70qhBHyIVxkLv2.FfqDYyCArdYf8lHa','2GWnxIxeuXLuwoP9qXsn2Tli2vKdx7F2qZ4fmVqAe22GVX1QbsNBkn2iE4FA','2017-05-27 16:13:24','2017-05-27 16:13:29'),(3,'Miguel Patiño','mpatino@elmostrador.cl','$2y$10$D/oi.B1X9M26UlQjf3UeOOEeio30V1SIhmh7zJqU8Ac5Kq0Q4hJOm','tzQed5K1XbCYAjlOadmuZdA28HRYgdOeRz6YXJaw3UY3a0dfR431UEqcr6t5','2017-05-27 16:14:57','2017-05-30 14:33:30'),(4,'Ricardo Parra','ricardoparramolina@gmail.com','$2y$10$6cP/Ru.IFEExvPqDuoApSegrfyY.BdQ7/nJW30I1XMWgQJUJvHLO6',NULL,'2017-05-28 15:26:50','2017-05-28 15:26:50'),(5,'Luis','rodrigoarcet@gmail.com','$2y$10$4tFKAzt1VGs.lFMTlFjTHOVr2fMPLfggMdeMj42r6KpaAGxPR1Qwi',NULL,'2017-05-30 14:35:36','2017-05-30 14:35:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;