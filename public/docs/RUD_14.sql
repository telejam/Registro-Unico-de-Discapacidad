CREATE DATABASE  IF NOT EXISTS `rud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `rud`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: rud
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barrio`
--

DROP TABLE IF EXISTS `barrio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barrio` (
  `id` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrio`
--

LOCK TABLES `barrio` WRITE;
/*!40000 ALTER TABLE `barrio` DISABLE KEYS */;
INSERT INTO `barrio` VALUES (1,'Blanco',1),(2,'Mitre',1);
/*!40000 ALTER TABLE `barrio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciudad` (
  `id` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `provincia` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'2 de Mayo',14),(2,'25 de Mayo',14),(3,'28 de Noviembre',20),(4,'Abra Pampa',10),(5,'Achiras',6),(6,'Aconquija',2),(7,'Adolfo Gonzales Chaves',1),(8,'Aguas Calientes',10),(9,'Aguas de Oro',6),(10,'Aguas Verdes',1),(11,'Aimogasta',12),(12,'Alba Posse',14),(13,'Alberdi',24),(14,'Alberti',1),(15,'Alcira Gigena',6),(16,'Alejandra',21),(17,'Alijilan',2),(18,'Allen',16),(19,'Almafuerte',6),(20,'Alpa Corral',6),(21,'Alta Gracia',6),(22,'Alto Río Senguer',4),(23,'Alumine',15),(24,'Amaicha del Valle',24),(25,'Amboy',6),(26,'Aminga',12),(27,'Ampimpa',24),(28,'Ancasti',2),(29,'Andacollo',15),(30,'Andalgala',2),(31,'Andresito',14),(32,'Angastaco',17),(33,'Anillaco',12),(34,'Anisacate',6),(35,'Antofagasta',2),(36,'Añatuya',22),(37,'Apostoles',14),(38,'Arenas Verdes',1),(39,'Aristobulo del Valle',14),(40,'Armstrong',21),(41,'Arocena',21),(42,'Arrecifes',1),(43,'Arroyito',6),(44,'Arroyito',15),(45,'Arroyo de los Patos',6),(46,'Arroyo Leyes',21),(47,'Arroyo Seco',21),(48,'Ascochinga',6),(49,'Ataliva Roca',11),(50,'Athos Pampa',6),(51,'Avellaneda',21),(52,'Avia Terai',3),(53,'Ayacucho',1),(54,'Azul',1),(55,'Bahia Blanca',1),(56,'Bahía Bustamante',4),(57,'Bahia San Blas',1),(58,'Balcarce',1),(59,'Balde',19),(60,'Balnearia',6),(61,'Balneario San Cayetano',1),(62,'Bandera',22),(63,'Baradero',1),(64,'Bariloche',16),(65,'Barrancas',21),(66,'Barreal',18),(67,'Basavilbaso',8),(68,'Belen',2),(69,'Bell Ville',6),(70,'Bella Vista',7),(71,'Bella Vista',18),(72,'Benito Juarez',1),(73,'Berisso',1),(74,'Bernardo de Irigoyen',14),(75,'Bernardo Larroude',11),(76,'Bialet Masse',6),(77,'Bolivar',1),(78,'Bragado',1),(79,'Brandsen',1),(80,'Brazo Largo',8),(81,'Burruyacu',24),(82,'C. del Uruguay',8),(83,'Caa Catí',7),(84,'Cabalango',6),(85,'Cabra Corral',17),(86,'Cachi',17),(87,'Cafayate',17),(88,'Caimancito',10),(89,'Caleta Olivia',20),(90,'Calingasta',18),(91,'Calmayo',6),(92,'Camarones',4),(93,'Campana',1),(94,'Campo Grande',14),(95,'Campo Quijano',17),(96,'Campo Viera',14),(97,'Candelaria',14),(98,'Cañada de Gomez',21),(99,'Cañon del Atuel',13),(100,'Cañuelas',1),(101,'Capilla del Monte',6),(102,'Capilla del Señor',1),(103,'Capiovi',14),(104,'Capitan Sarmiento',1),(105,'Caraguatay',14),(106,'Carcaraña',21),(107,'Carhue',1),(108,'Carilo',1),(109,'Carlos Casares',1),(110,'Carlos Keen',1),(111,'Carlos Tejedor',1),(112,'Carmen de Areco',1),(113,'Carmen de Patagones',1),(114,'Carpinteria',19),(115,'Carro Quemado',11),(116,'Casa de Piedra',11),(117,'Casa Grande',6),(118,'Casabindo',10),(119,'Casilda',21),(120,'Castelli',1),(121,'Catriel',16),(122,'Caucete',18),(123,'Caviahue',15),(124,'Cayasta',21),(125,'Centenario',15),(126,'Ceres',21),(127,'Cerrillos',17),(128,'Cerro Colorado',6),(129,'Chabas',21),(130,'Chacabuco',1),(131,'Chacharramendi',11),(132,'Chacras de Coria',13),(133,'Chajari',8),(134,'Chamical',12),(135,'Chapadmalal',1),(136,'Charata',3),(137,'Charbonier',6),(138,'Chascomus',1),(139,'Chepes',12),(140,'Chicoana',17),(141,'Chilecito',12),(142,'Chivilcoy',1),(143,'Choele Choel',16),(144,'Cholila',4),(145,'Chos Malal',15),(146,'Cinco Saltos',16),(147,'Cipolletti',16),(148,'Ciudad Autónoma de Buenos Aires',5),(149,'Claromeco',1),(150,'Clorinda',9),(151,'Colalao del Valle',24),(152,'Colon',1),(153,'Colon',8),(154,'Colonia 25 de Mayo',11),(155,'Colonia Baron',11),(156,'Colonia Caroya',6),(157,'Colonia Pellegrini',7),(158,'Colonia Suiza',13),(159,'Colonia Victoria',14),(160,'Comodoro Rivadavia',4),(161,'Concaran',19),(162,'Concepcion',24),(163,'Concepción de la Sierra',14),(164,'Concordia',8),(165,'Copacabana',6),(166,'Copahue',15),(167,'Corcovado',4),(168,'Cordoba Capital',6),(169,'Coronda',21),(170,'Coronel Dorrego',1),(171,'Coronel Moldes',17),(172,'Coronel Pringles',1),(173,'Coronel Suarez',1),(174,'Coronel Vidal',1),(175,'Corpus',14),(176,'Corrientes Capital',7),(177,'Cortaderas',19),(178,'Cosquin',6),(179,'Costa Azul',1),(180,'Costa Chica',1),(181,'Costa del Este',1),(182,'Costa Esmeralda',1),(183,'Crespo',8),(184,'Cruz Alta',6),(185,'Cruz Chica',6),(186,'Cruz del Eje',6),(187,'Cruz Grande',6),(188,'Cte. Piedra Buena',20),(189,'Cuesta Blanca',6),(190,'Curuzu Cuatia',7),(191,'Cutral Co',15),(192,'Daireaux',1),(193,'Dean Funes',6),(194,'Del Campillo',6),(195,'Despeñaderos',6),(196,'Desvio Arijon',21),(197,'Diamante',8),(198,'Dina Huapi',16),(199,'Dolores',1),(200,'Eduardo Castex',11),(201,'El Alcazar',14),(202,'El Alto',2),(203,'El Bolson',16),(204,'El Cadillal',24),(205,'El Calafate',20),(206,'El Carmen',10),(207,'El Chalten',20),(208,'El Cholar',15),(209,'El Colorado',9),(210,'El Dorado',14),(211,'El Durazno',6),(212,'El Hoyo',4),(213,'El Huecu',15),(214,'El Maiten',4),(215,'El Manso',16),(216,'El Manzano',6),(217,'El Mollar',24),(218,'El Morro',19),(219,'El Nihuil',13),(220,'El Rodeo',2),(221,'El Sauzalito',3),(222,'El Siambon',24),(223,'El Soberbio',14),(224,'El Sosneado',13),(225,'El Trapiche',19),(226,'El Volcan',19),(227,'Elortondo',21),(228,'Embalse',6),(229,'Embarcacion',17),(230,'Empedrado',7),(231,'Ensenada',1),(232,'Epuyen',4),(233,'Escobar',1),(234,'Esperanza',21),(235,'Esquel',4),(236,'Esquina',7),(237,'Exaltación de la Cruz',1),(238,'Ezeiza',1),(239,'Famailla',24),(240,'Famatina',12),(241,'Federacion',8),(242,'Federal',8),(243,'Fiambala',2),(244,'Firmat',21),(245,'Fitz Roy',20),(246,'Florencia',21),(247,'Florentino Ameghino',1),(248,'Formosa Capital',9),(249,'Franck',21),(250,'Frias',22),(251,'Fuerte Esperanza',3),(252,'Funes',21),(253,'Gaiman',4),(254,'Gancedo',3),(255,'Garupa',14),(256,'General Acha',11),(257,'General Alvear',13),(258,'General Belgrano',1),(259,'General Conesa',16),(260,'General Deheza',6),(261,'General Guemes',17),(262,'General Lamadrid',1),(263,'General Las Heras',1),(264,'General Lavalle',1),(265,'General Levalle',6),(266,'General Madariaga',1),(267,'General Mosconi',17),(268,'General Pico',11),(269,'General Pinedo',3),(270,'General Pinto',1),(271,'General Ramirez',8),(272,'General Roca',16),(273,'General Rodriguez',1),(274,'General San Martin',3),(275,'General San Martin',11),(276,'General Vedia',3),(277,'General Villegas',1),(278,'Gobernador Costa',4),(279,'Gobernador Gregores',20),(280,'Gobernador Roca',14),(281,'Godoy Cruz',13),(282,'Goya',7),(283,'Gral. Manuel Belgrano',9),(284,'Granadero Baigorria',21),(285,'Gualeguay',8),(286,'Gualeguaychu',8),(287,'Guaminí',1),(288,'Guandacol',12),(289,'Guatrache',11),(290,'Guaymallen',13),(291,'Hasenkamp',8),(292,'Helvecia',21),(293,'Hermoso Campo',3),(294,'Hernandarias',8),(295,'Hernando',6),(296,'Herradura',9),(297,'Hipolito Yrigoyen',20),(298,'Hornillos',10),(299,'Huacalera',10),(300,'Huanguelen',1),(301,'Huerta Grande',6),(302,'Huichaira',10),(303,'Huinca Renanco',6),(304,'Huinganco',15),(305,'Humahuaca',10),(306,'Ibarreta',9),(307,'Ibicuy',8),(308,'Icaño',2),(309,'Icho Cruz',6),(310,'Iglesia',18),(311,'Ingeniero Jacobacci',16),(312,'Ingeniero Juarez',9),(313,'Intendente Alvear',11),(314,'Intiyaco',6),(315,'Iruya',17),(316,'Ischilin',6),(317,'Isla del Cerrito',3),(318,'Ita Ibate',7),(319,'Itati',7),(320,'Ituzaingo',7),(321,'Jachal',18),(322,'Jacinto Arauz',11),(323,'James Craik',6),(324,'Jaramillo',20),(325,'Jardin America',14),(326,'Jesus Maria',6),(327,'Joaquin V. Gonzalez',17),(328,'Jose de San Martin',4),(329,'Juan Jose Castelli',3),(330,'Juana Koslay',19),(331,'Junin',1),(332,'Junin',13),(333,'Junin de los Andes',15),(334,'La Banda',22),(335,'La Bolsa',6),(336,'La Caldera',17),(337,'La Calera',6),(338,'La Carlota',6),(339,'La Carolina',19),(340,'La Cesira',6),(341,'La Cruz',6),(342,'La Cruz Corrientes',7),(343,'La Cumbre',6),(344,'La Cumbrecita',6),(345,'La Falda',6),(346,'La Florida',19),(347,'La Granja',6),(348,'La Lucila del Mar',1),(349,'La Paisanita',6),(350,'La Paz',2),(351,'La Paz',8),(352,'La Paz Cordoba',6),(353,'La Plata',1),(354,'La Poblacion',6),(355,'La Poma',17),(356,'La Puerta',2),(357,'La Punta',19),(358,'La Quiaca',10),(359,'La Rioja Capital',12),(360,'La Serranita',6),(361,'La Toma',19),(362,'Laboulaye',6),(363,'Lago Puelo',4),(364,'Laguna Blanca',9),(365,'Larroque',8),(366,'Las Albacas',6),(367,'Las Breñas',3),(368,'Las Caleras',6),(369,'Las Calles',6),(370,'Las Carditas',13),(371,'Las Cuevas',13),(372,'Las Flores',1),(373,'Las Flores',18),(374,'Las Gaviotas',1),(375,'Las Grutas',16),(376,'Las Heras',13),(377,'Las Heras',20),(378,'Las Juntas',2),(379,'Las Lajas',15),(380,'Las Lomitas',9),(381,'Las Ovejas',15),(382,'Las Rabonas',6),(383,'Las Tapias',6),(384,'Las Toninas',1),(385,'Las Vegas',13),(386,'Leandro Alem',14),(387,'Libertador San Martin',10),(388,'Lincoln',1),(389,'Lobería',1),(390,'Lobos',1),(391,'Loma Bola',6),(392,'Loncopue',15),(393,'Loreto',14),(394,'Los Antiguos',20),(395,'Los Cocos',6),(396,'Los Condores',6),(397,'Los Hornillos',6),(398,'Los Menucos',16),(399,'Los Molinos',6),(400,'Los Molles',13),(401,'Los Molles',19),(402,'Los Pozos',6),(403,'Los Reartes',6),(404,'Los Reyunos',13),(405,'Los Toldos',1),(406,'Loza Corral',6),(407,'Lozano',10),(408,'Lujan',1),(409,'Lujan de Cuyo',13),(410,'Lujan San Luis',19),(411,'Macachin',11),(412,'Machagai',3),(413,'Magdalena',1),(414,'Maimara',10),(415,'Maipu',1),(416,'Maipu',13),(417,'Malargue',13),(418,'Manzano Amargo',15),(419,'Manzano Historico',13),(420,'Mar Azul',1),(421,'Mar Chiquita',1),(422,'Mar de Ajo',1),(423,'Mar de Cobo',1),(424,'Mar de las Pampas',1),(425,'Mar del Plata',1),(426,'Mar del Sur',1),(427,'Mar del Tuyu',1),(428,'Marcos Juarez',6),(429,'Maria Grande',8),(430,'Marisol',1),(431,'Mayor Villafañe',9),(432,'Mayu Sumaj',6),(433,'Mburucuya',7),(434,'Medanos',1),(435,'Melincue',21),(436,'Mendiolaza',6),(437,'Mendoza Capital',13),(438,'Mercedes',1),(439,'Mercedes Corrientes',7),(440,'Merlo',19),(441,'Mina Clavero',6),(442,'Ministro Ramos Mexia',16),(443,'Miramar',1),(444,'Miramar',6),(445,'Mision Nueva Pompeya',3),(446,'Molinari',6),(447,'Molinos',17),(448,'Monje',21),(449,'Monte Caseros',7),(450,'Monte Hermoso',1),(451,'Monte Maiz',6),(452,'Montecarlo',14),(453,'Moquehue',15),(454,'Morteros',6),(455,'Navarro',1),(456,'Necochea',1),(457,'Neuquen Capital',15),(458,'Nogoli',19),(459,'Nogoya',8),(460,'Nono',6),(461,'Nueva Atlantis',1),(462,'Nueva Galia',19),(463,'Nueve de Julio',1),(464,'Obera',14),(465,'Olavarria',1),(466,'Oliveros',21),(467,'Olta',12),(468,'Oncativo',6),(469,'Ongamira',6),(470,'Oran',17),(471,'Orense',1),(472,'Oriente',1),(473,'Ostende',1),(474,'Paclin',2),(475,'Pagancillo',12),(476,'Palo Santo',9),(477,'Palpalá',10),(478,'Pampa del Indio',3),(479,'Panaholma',6),(480,'Panambi',14),(481,'Papagayos',19),(482,'Parana',8),(483,'Paso de la Patria',7),(484,'Paso de los Libres',7),(485,'Patquia',12),(486,'Pedro Luro',1),(487,'Pehuajo',1),(488,'Pehuen Co',1),(489,'Pergamino',1),(490,'Perico',10),(491,'Perito Moreno',20),(492,'Pico Truncado',20),(493,'Picun Leufu',15),(494,'Piedra del Aguila',15),(495,'Piedras Blancas',8),(496,'Pigüé',1),(497,'Pilar',1),(498,'Pinamar',1),(499,'Pinar del Sol',1),(500,'Pinto',22),(501,'Pipinas',1),(502,'Pirane',9),(503,'Pismanta',18),(504,'Playa Unión',4),(505,'Playas Doradas',16),(506,'Plaza Huincul',15),(507,'Plottier',15),(508,'Poman',2),(509,'Posadas',14),(510,'Potrerillos',13),(511,'Potrero de Garay',6),(512,'Potrero de los Funes',19),(513,'Primeros Pinos',15),(514,'Puan',1),(515,'Pueblo Liebig',8),(516,'Puerto Deseado',20),(517,'Puerto Esperanza',14),(518,'Puerto Gaboto',21),(519,'Puerto Iguazu',14),(520,'Puerto Libertad',14),(521,'Puerto Madryn',4),(522,'Puerto Mineral',14),(523,'Puerto Piramides',4),(524,'Puerto Piray',14),(525,'Puerto Rico',14),(526,'Puerto San Julian',20),(527,'Puerto Santa Cruz',20),(528,'Puerto Tirol',3),(529,'Puerto Yerua',8),(530,'Puiggari',8),(531,'Pulmari',15),(532,'Punta Alta',1),(533,'Punta Indio',1),(534,'Punta Medanos',1),(535,'Purmamarca',10),(536,'Quequen',1),(537,'Quilino',6),(538,'Quilmes',1),(539,'Quines',19),(540,'Raco',24),(541,'Rada Tilly',4),(542,'Rafaela',21),(543,'Ramallo',1),(544,'Ranchos',1),(545,'Rancul',11),(546,'Rauch',1),(547,'Rawson',4),(548,'Rawson',18),(549,'Realico',11),(550,'Reconquista',21),(551,'Recreo',2),(552,'Renca',19),(553,'Resistencia',3),(554,'Reta',1),(555,'Rincón de los Sauces',15),(556,'Rio Ceballos',6),(557,'Rio Colorado',16),(558,'Rio Cuarto',6),(559,'Rio de los Sauces',6),(560,'Rio Gallegos',20),(561,'Rio Grande',23),(562,'Rio Mayo',4),(563,'Rio Pico',4),(564,'Rio Tercero',6),(565,'Rio Turbio',20),(566,'Rivadavia',1),(567,'Rivadavia',13),(568,'Rivadavia',18),(569,'Rodeo',18),(570,'Rojas',1),(571,'Romang',21),(572,'Roque Perez',1),(573,'Roque Saenz Peña',3),(574,'Rosario',21),(575,'Rosario de la Frontera',17),(576,'Rosario del Tala',8),(577,'Rufino',21),(578,'Ruinas de Quilmes',24),(579,'S. Francisco del Monte',19),(580,'S. Martin de los Andes',15),(581,'Saavedra',1),(582,'Saladillo',1),(583,'Saldan',6),(584,'Saldungaray',1),(585,'Salsacate',6),(586,'Salsipuedes',6),(587,'Salta Capital',17),(588,'Salto',1),(589,'Salto Encantado',14),(590,'San A. de Arredondo',6),(591,'San A. de los Cobres',17),(592,'San Andres de Giles',1),(593,'San Antonio',14),(594,'San Antonio de Apipe',7),(595,'San Antonio de Areco',1),(596,'San Antonio Este',16),(597,'San Antonio Oeste',16),(598,'San Bernardo',1),(599,'San Blas de Los Sauces',12),(600,'San Carlos',13),(601,'San Carlos',17),(602,'San Carlos',21),(603,'San Carlos Minas',6),(604,'San Cayetano',1),(605,'San Clemente',6),(606,'San Clemente del Tuyu',1),(607,'San Cristobal',21),(608,'San Esteban',6),(609,'San Fernando',1),(610,'San Fernando del Valle',2),(611,'San Francisco',6),(612,'San Francisco',10),(613,'San Francisco de Laishi',9),(614,'San Geronimo',19),(615,'San Ignacio',14),(616,'San Isidro',1),(617,'San Isidro',2),(618,'San Javier',14),(619,'San Javier',21),(620,'San Javier Traslasierra',6),(621,'San Javier Tucuman',24),(622,'San Jorge',21),(623,'San Jose de Feliciano',8),(624,'San Jose de la Dormida',6),(625,'San Jose de Metan',17),(626,'San Jose del Rincon',21),(627,'San Juan Capital',18),(628,'San Justo',21),(629,'San Lorenzo',21),(630,'San Luis Capital',19),(631,'San Marcos Sierras',6),(632,'San Martin',13),(633,'San Miguel de Tucuman',24),(634,'San Miguel del Monte',1),(635,'San Nicolas',1),(636,'San Pedro',1),(637,'San Pedro',14),(638,'San Pedro de Colalao',24),(639,'San Pedro de Jujuy',10),(640,'San Rafael',13),(641,'San Roque',6),(642,'San Salvador',8),(643,'San Salvador de Jujuy',10),(644,'San Vicente',14),(645,'Sanagasta',12),(646,'Santa Ana',7),(647,'Santa Ana',14),(648,'Santa Catalina',10),(649,'Santa Clara del Mar',1),(650,'Santa Cruz del Lago',6),(651,'Santa Elena',8),(652,'Santa Fe Capital',21),(653,'Santa Isabel',11),(654,'Santa Lucia',18),(655,'Santa Maria',2),(656,'Santa María',14),(657,'Santa Maria de Punilla',6),(658,'Santa Monica',6),(659,'Santa Rita',14),(660,'Santa Rosa',17),(661,'Santa Rosa Calamuchita',6),(662,'Santa Rosa del Conlara',19),(663,'Santa Rosa La Pampa',11),(664,'Santa Teresita',1),(665,'Santa Teresita',12),(666,'Santo Tome',21),(667,'Santo Tome Corrientes',7),(668,'Sarmiento',4),(669,'Sastre',21),(670,'Sauce',7),(671,'Sauce Viejo',21),(672,'Saujil',2),(673,'Seclantas',17),(674,'Sgo. del Estero Capital',22),(675,'Sierra Colorada',16),(676,'Sierra de la Ventana',1),(677,'Sierra de las Quijadas',19),(678,'Sierra de los Padres',1),(679,'Sierra Grande',16),(680,'Sierras Bayas',1),(681,'Simoca',24),(682,'Sinsacate',6),(683,'Sta. Rosa de Calchines',21),(684,'Suipacha',1),(685,'Sumampa',2),(686,'Sunchales',21),(687,'Susques',10),(688,'Taco Ralo',24),(689,'Tafi del Valle',24),(690,'Tafi Viejo',24),(691,'Tala Huasi',6),(692,'Tama',12),(693,'Tancacha',6),(694,'Tandil',1),(695,'Tanti',6),(696,'Tapalque',1),(697,'Tartagal',17),(698,'Termas de Rio Hondo',22),(699,'Tigre',1),(700,'Tilcara',10),(701,'Tilisarao',19),(702,'Timbues',21),(703,'Tinogasta',2),(704,'Toay',11),(705,'Tobuna',14),(706,'Tolar Grande',17),(707,'Tolhuin',23),(708,'Tomas Jofre',1),(709,'Tornquist',1),(710,'Tostado',21),(711,'Treinta de Agosto',1),(712,'Trelew',4),(713,'Trenque Lauquen',1),(714,'Tres Arroyos',1),(715,'Trevelin',4),(716,'Tricao Malal',15),(717,'Tudcum',18),(718,'Tumbaya',10),(719,'Tunuyan',13),(720,'Tupungato',13),(721,'Ulapes',12),(722,'Ullum',18),(723,'Unquillo',6),(724,'Uquia',10),(725,'Urdinarrain',8),(726,'Ushuaia',23),(727,'Uspallata',13),(728,'V. C. Pque. Los Reartes',6),(729,'Valcheta',16),(730,'Valeria del Mar',1),(731,'Valle de Uco',13),(732,'Valle Fertil',18),(733,'Valle Grande',10),(734,'Valle Grande',13),(735,'Valle Hermoso',6),(736,'Valle Maria',8),(737,'Vallecito',18),(738,'Vaqueros',17),(739,'Varvarco',15),(740,'Vedia',1),(741,'Veinticinco de Mayo',1),(742,'Venado Tuerto',21),(743,'Verónica',1),(744,'Viale',8),(745,'Vicente Casares',1),(746,'Victoria',8),(747,'Victorica',11),(748,'Viedma',16),(749,'Villa Allende',6),(750,'Villa Alpina',6),(751,'Villa Ameghino',4),(752,'Villa Angela',3),(753,'Villa Animi',6),(754,'Villa Ascasubi',6),(755,'Villa Berna',6),(756,'Villa Cañas',21),(757,'Villa Carlos Paz',6),(758,'Villa Castelli',12),(759,'Villa Ciudad America',6),(760,'Villa Constitucion',21),(761,'Villa Cura Brochero',6),(762,'Villa de la Quebrada',19),(763,'Villa de las Rosas',6),(764,'Villa de Maria',6),(765,'Villa de Soto',6),(766,'Villa del Dique',6),(767,'Villa del Totoral',6),(768,'Villa Dolores',6),(769,'Villa El Chocon',15),(770,'Villa El Condor',16),(771,'Villa Elena',19),(772,'Villa Elisa',8),(773,'Villa Futalaufquen',4),(774,'Villa General Belgrano',6),(775,'Villa Gesell',1),(776,'Villa Giardino',6),(777,'Villa Jardín de Reyes',10),(778,'Villa La Angostura',15),(779,'Villa La Arcadia',1),(780,'Villa La Punta',22),(781,'Villa Lago Gutiérrez',16),(782,'Villa Lago Mascardi',16),(783,'Villa Lago Meliquina',15),(784,'Villa Larca',19),(785,'Villa Las Pirquitas',2),(786,'Villa Los Aromos',6),(787,'Villa Maria',6),(788,'Villa Mercedes',19),(789,'Villa Nougues',24),(790,'Villa Ocampo',21),(791,'Villa Ojo de Agua',22),(792,'Villa Paranacito',8),(793,'Villa Parque Siquiman',6),(794,'Villa Pehuenia',15),(795,'Villa Regina',16),(796,'Villa Rio Bermejito',3),(797,'Villa Rumipal',6),(798,'Villa San Jose',8),(799,'Villa San Lorenzo',17),(800,'Villa Serrana La Gruta',1),(801,'Villa Traful',15),(802,'Villa Tulumba',6),(803,'Villa Union',12),(804,'Villa Urquiza',8),(805,'Villa Ventana',1),(806,'Villaguay',8),(807,'Villalonga',1),(808,'Villamonte',10),(809,'Vinchina',12),(810,'Virasoro',7),(811,'Volcan',10),(812,'Wanda',14),(813,'Winifreda',11),(814,'Yacanto Calamuchita',6),(815,'Yacanto Traslasierra',6),(816,'Yala',10),(817,'Yapeyu',7),(818,'Yavi',10),(819,'Yerba Buena',24),(820,'Zapala',15),(821,'Zarate',1),(822,'Zonda',18);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `persona` int NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`persona`,`contacto`),
  KEY `contactoPersona_idx` (`persona`),
  CONSTRAINT `contactoPersona` FOREIGN KEY (`persona`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'9999-999999',1),(1,'elias@correo.com',1),(2,'99-9999-9999',1),(2,'jorge@correo.com',1),(2,'jorge@correodeltrabajo.com',1);
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discapacidad`
--

DROP TABLE IF EXISTS `discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discapacidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `tipo` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `discapacidadTipo_idx` (`tipo`),
  CONSTRAINT `discapacidadTipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_discapacidad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discapacidad`
--

LOCK TABLES `discapacidad` WRITE;
/*!40000 ALTER TABLE `discapacidad` DISABLE KEYS */;
INSERT INTO `discapacidad` VALUES (1,'Distrofia muscular','sdfgsg',1,1),(2,'Pérdida de memoria','sdfrsdgf',4,1),(3,'Deficiencia auditiva','fdgdxfg',2,1),(4,'Autismo','dgfh',3,1);
/*!40000 ALTER TABLE `discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_civil`
--

DROP TABLE IF EXISTS `estado_civil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_civil` (
  `id` int NOT NULL,
  `tipoEstado` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_civil`
--

LOCK TABLES `estado_civil` WRITE;
/*!40000 ALTER TABLE `estado_civil` DISABLE KEYS */;
INSERT INTO `estado_civil` VALUES (1,'Soltero'),(2,'Casado'),(3,'Divorciado'),(4,'Viudo');
/*!40000 ALTER TABLE `estado_civil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_tramite`
--

DROP TABLE IF EXISTS `estado_tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_tramite` (
  `id` int NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_tramite`
--

LOCK TABLES `estado_tramite` WRITE;
/*!40000 ALTER TABLE `estado_tramite` DISABLE KEYS */;
INSERT INTO `estado_tramite` VALUES (1,'Iniciado'),(2,'Finalizado');
/*!40000 ALTER TABLE `estado_tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modificacion_tramite`
--

DROP TABLE IF EXISTS `modificacion_tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modificacion_tramite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fechaSeguimiento` date DEFAULT NULL,
  `observacion` varchar(100) NOT NULL,
  `usuario` int NOT NULL,
  `tramite` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `modificacionUsuario_idx` (`usuario`),
  KEY `modificacionTramite_idx` (`tramite`),
  CONSTRAINT `modificacionTramite` FOREIGN KEY (`tramite`) REFERENCES `tramite` (`id`),
  CONSTRAINT `modificacionUsuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modificacion_tramite`
--

LOCK TABLES `modificacion_tramite` WRITE;
/*!40000 ALTER TABLE `modificacion_tramite` DISABLE KEYS */;
INSERT INTO `modificacion_tramite` VALUES (1,'2022-05-31','id 2',1,2,1),(2,'2022-05-31','id 2',1,2,1),(5,'2022-06-02','Revisar',1,11,1);
/*!40000 ALTER TABLE `modificacion_tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacionalidad`
--

DROP TABLE IF EXISTS `nacionalidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nacionalidad` (
  `id` int NOT NULL,
  `pais` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacionalidad`
--

LOCK TABLES `nacionalidad` WRITE;
/*!40000 ALTER TABLE `nacionalidad` DISABLE KEYS */;
INSERT INTO `nacionalidad` VALUES (1,'Argentina'),(2,'Uruguay'),(3,'Paraguay'),(4,'Chile');
/*!40000 ALTER TABLE `nacionalidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obra_social`
--

DROP TABLE IF EXISTS `obra_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `obra_social` (
  `id` int NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(200) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `domicilio` varchar(100) NOT NULL,
  `observacion` varchar(200) DEFAULT NULL,
  `telefonoNumero` varchar(20) DEFAULT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obra_social`
--

LOCK TABLES `obra_social` WRITE;
/*!40000 ALTER TABLE `obra_social` DISABLE KEYS */;
INSERT INTO `obra_social` VALUES (3,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA GRAFICA DE LA PROVINCIA DE CORDOBA',NULL,'AVELLANEDA 54',NULL,NULL,1),(4,'OBRA SOCIAL PORTUARIOS ARGENTINOS DE MAR DEL PLATA','OSPA','RONDEAU 63',NULL,NULL,1),(5,'OBRA SOCIAL DEL PERSONAL DEL ORGANISMO DE CONTROL EXTERNO','OSPOCE','BARTOLOME MITRE 1523',NULL,'0800-321-6776(O.S.)',1),(6,'OBRA SOCIAL DE CAPITANES, PILOTOS Y PATRONES DE PESCA','OSPESCA','AVDA JUAN B. JUSTO 518',NULL,NULL,1),(7,'OBRA SOCIAL DE AGENTES DE LOTERIAS Y AFINES DE LA REPUBLICA ARGENTINA','OSALARA','ADOLFO ALSINA 946',NULL,'0800-333-8866',1),(8,'MUTUAL DEL PERSONAL DEL AGUA Y LA ENERGIA DE MENDOZA',NULL,'JOSE VICENTE ZAPATA 144',NULL,NULL,1),(9,'OBRA SOCIAL DE LA ACTIVIDAD DE SEGUROS, REASEGUROS, CAPITALIZACION Y AHORRO Y PRESTAMO PARA LA VIVIENDA','OSSEG','PELLEGRINI 575',NULL,'0800-666-7734',1),(10,'OBRA SOCIAL PARA LA ACTIVIDAD DOCENTE','OSPLAD','TACUARI 345',NULL,'0810-666-7752',1),(11,'OBRA SOCIAL PARA EL PERSONAL DEL MINISTERIO DE ECONOMIA Y DE OBRAS Y SERVICIOS PUBLICOS','OSME','VENEZUELA 155',NULL,'0800-3456763',1),(12,'OBRA SOCIAL FERROVIARIA','OSFE','ESTADOS UNIDOS 2859',NULL,'0800-333-3313',1),(13,'OBRA SOCIAL DE LA ASOCIACION CIVIL PROSINDICATO DE AMAS DE CASA DE LA REPUBLICA ARGENTINA','OSSACRA','BARTOLOME MITRE Nª 844',NULL,NULL,1),(14,'OBRA SOCIAL DEL SINDICATO UNIDO DE TRABAJADORES DE LA INDUSTRIA DE AGUAS GASEOSAS DE LA PROVINCIA DE SANTA FE',NULL,'SARMIENTO 2225',NULL,NULL,1),(15,'OBRA SOCIAL DEL PERSONAL JERARQUICO DE LA REPUBLICA ARGENTINA PARA EL PERSONAL JERARQUICO DE LA INDUSTRIA GRAFICA Y EL PERSONAL JERARQUICO DEL AGUA Y LA ENERGIA','OSJERA','MORENO 1142 PLANTA BAJA',NULL,'0810-345-753',1),(16,'OBRA SOCIAL DE LOS LEGISLADORES DE LA REPUBLICA ARGENTINA','OSLERA','MEXICO 565',NULL,'0800-444-3423',1),(17,'OBRA SOCIAL DE LA FEDERACION DE CAMARAS Y CENTROS COMERCIALES ZONALES DE LA REPUBLICA ARGENTINA (FEDECAMARAS)','FEDECAMARAS','RIVADAVIA 5456 1 PISO GALERIA ASTRO',NULL,'0800-345-0770',1),(18,'OBRA SOCIAL PROFESIONALES DEL TURF DE LA REPUBLICA ARGENTINA','OSPROTURA','PANAMA 950',NULL,NULL,1),(19,'OBRA SOCIAL DE EMPLEADOS Y PERSONAL JERARQUICO DE LA ACTIVIDAD DEL NEUMATICO ARGENTINO DE NEUMATICOS GOOD YEAR SRL',NULL,'MANUEL OCAMPO 1201',NULL,'0800-333-2820',1),(20,'OBRA SOCIAL PARA EL PERSONAL DE EMPRESAS DE LIMPIEZA, SERVICIOS Y MAESTRANZA DE MENDOZA',NULL,'MONTEVIDEO 270',NULL,'0800-666-5579',1),(21,'OBRA SOCIAL DEL PERSONAL JERARQUICO DEL TRANSPORTE AUTOMOTOR DE PASAJEROS DE CORDOBA Y AFINES',NULL,'CASEROS Nº 636',NULL,NULL,1),(22,'OBRA SOCIAL DE MINISTROS, SECRETARIOS Y SUBSECRETARIOS','OSMISS','ADOLFO ALSINA 943 PISO 2',NULL,'0800-3336373',1),(23,'OBRA SOCIAL DE LOS TRABAJADORES DE LA CARNE Y AFINES DE LA REPUBLICA ARGENTINA','O.S.T.C.A.R.A.','PARANA 749 2º A',NULL,NULL,1),(24,'OBRA SOCIAL DE LOS TRABAJADORES ASOCIADOS A LA ASOCIACION MUTUAL MERCANTIL ARGENTINA','OSTAMMA','CATAMARCA 1173',NULL,NULL,1),(25,'OBRA SOCIAL DE LA CAMARA DE EMPRESARIOS DE AGENCIAS DE REMISES DE ARGENTINA',NULL,'CALLE RIVADAVIA Y 1ERO. DE MAYO',NULL,NULL,1),(26,'OBRA SOCIAL ASOCIACION MUTUAL METALURGICA VILLA CONSTITUCION','OSAMMVC','JUAN MANUEL DE ROSAS 710 - PLANTA ALTA -',NULL,NULL,1),(27,'OBRA SOCIAL DEL PERSONAL ASOCIADO A ASOCIACION MUTUAL SANCOR','O.S.PERS.A.A.M.S.','SARMIENTO 811 PISO 4 OFICINA 1',NULL,NULL,1),(28,'OBRA SOCIAL DE LOS INMIGRANTES ESPAÑOLES Y SUS DESCENDIENTES RESIDENTES EN LA REPUBLICA ARGENTINA','OSPAÑA','VENEZUELA 1162 PB',NULL,'0800-999-0000',1),(29,'OBRA SOCIAL DE TRABAJADORES SOCIOS DE LA ASOCIACION MUTUAL DEL PERSONAL JERARQUICO DE BANCOS OFICIALES NACIONALES-JERARQUICOS SALUD-',NULL,'AV FACUNDO ZUVIRIA 4584',NULL,'0800-555-4844',1),(30,'OBRA SOCIAL DE TRABAJADORES VENDEDORES DE DIARIOS REVISTAS Y AFINES','OSTVENDRA','TUCUMAN Nº 456',NULL,NULL,1),(31,'OBRA SOCIAL ASOCIACION MUTUAL DE LOS OBREROS CATOLICOS PADRE FEDERICO GROTE','O.S.A.M.O.C','BILLINGHURST 1669',NULL,'0810-555-6726',1),(32,'OBRA SOCIAL DE CONDUCTORES TITULARES DE TAXIS DE LA CIUDAD AUTONOMA DE BUENOS AIRES','O.S.TAX.B.A','FRAGATA PRESIDENTE SARMIENTO 661',NULL,NULL,1),(33,'OBRA SOCIAL PROGRAMAS MEDICOS SOCIEDAD ARGENTINA DE CONSULTORIA MUTUAL',NULL,'ESPAÑA 160 PISO 2',NULL,'0800-345-6674',1),(34,'OBRA SOCIAL YACIMIENTOS CARBONIFEROS','OSYC','24 DE NOVIEMBRE 1126',NULL,NULL,1),(35,'OBRA SOCIAL DE LA PREVENCION Y LA SALUD',NULL,'AVDA CALLAO 625 PISO 3',NULL,NULL,1),(36,'OBRA SOCIAL DE TECNICOS DE VUELO DE LINEAS AEREAS','OSTVLA','VICTOR HUGO 369',NULL,NULL,1),(37,'OBRA SOCIAL DE AGENTES DE PROPAGANDA MEDICA DE ROSARIO',NULL,'LADRIDA 1063',NULL,NULL,1),(38,'OBRA SOCIAL PARA EL PERSONAL DE LA INDUSTRIA ACEITERA, DESMOTADORA Y AFINES','OSIAD','AVDA. BELGRANO 1370 PISO 2',NULL,'0810-345-6742',1),(39,'OBRA SOCIAL DE ACTORES','OSA','AYACUCHO 537',NULL,'0-800-999-0301',1),(40,'OBRA SOCIAL DEL PERSONAL SUPERIOR Y PROFESIONAL DE EMPRESAS AEROCOMERCIALES','OSPEA','INDEPENDENCIA 1111 - PISO 2',NULL,'0800-999-8907',1),(41,'OBRA SOCIAL DEL PERSONAL AERONAUTICO','OSPA','ANCHORENA 1266',NULL,NULL,1),(42,'OBRA SOCIAL DEL PERSONAL DE AERONAVEGACION DE ENTES PRIVADOS','OSPADEP','VENEZUELA 900',NULL,'0800-222-2722',1),(43,'OBRA SOCIAL DEL PERSONAL TECNICO AERONAUTICO','OSPTA','D ONOFRIO 158',NULL,'0800--666-2096',1),(44,'OBRA SOCIAL DE AERONAVEGANTES','OSA','BARTOLOME MITRE 1902 - PB',NULL,'0800 9999 672',1),(45,'OBRA SOCIAL EMPLEADOS DE AGENCIAS DE INFORMES','OSEADI','LAVALLE 1783 PISO 1 - OF. A',NULL,NULL,1),(46,'OBRA SOCIAL DEL PERSONAL DE AGUAS GASEOSAS Y AFINES','OSPAGA','BACACAY 2735/37',NULL,'0800-222-6772',1),(47,'OBRA SOCIAL DE ALFAJOREROS, REPOSTEROS, PIZZEROS Y HELADEROS','OSARPYH','AV. LURO 3523',NULL,NULL,1),(48,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DE LA ALIMENTACION','OSPIA','VENEZUELA 1326',NULL,'0800-666-6774',1),(49,'OBRA SOCIAL DEL PERSONAL DEL AUTOMOVIL CLUB ARGENTINO','OSPACA','ANCHORENA 639 - PISO 1',NULL,'0800-999-6772',1),(50,'OBRA SOCIAL DEL PERSONAL DEL AZUCAR DEL INGENIO LA ESPERANZA','OSPA','SERAPIO SORIA 337',NULL,NULL,1),(51,'OBRA SOCIAL DEL PERSONAL DEL AZUCAR DEL INGENIO LEDESMA','OSPAIL','JUJUY 755 CC5',NULL,NULL,1),(52,'OBRA SOCIAL DEL PERSONAL DEL AZUCAR DEL INGENIO SAN MARTIN','OSPA','ISLAS MALVINAS S/N - BARRIO PATRON COSTAS',NULL,NULL,1),(53,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA AZUCARERA','OSPIA','CONGRESO 342/8',NULL,NULL,1),(54,'OBRA SOCIAL DEL PERSONAL DE BARRACAS DE LANAS, CUEROS Y ANEXOS',NULL,'FLORENTINO AMEGHINO 1060',NULL,'0-800-222-7203',1),(55,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA BOTONERA','OSPIB','CALLE 91 N# 1886',NULL,NULL,1),(56,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL CALZADO','OSPICAL','YATAY 129 PISO 4',NULL,NULL,1),(57,'OBRA SOCIAL DE CONDUCTORES CAMIONEROS Y PERSONAL DEL TRANSPORTE AUTOMOTOR DE CARGAS',NULL,'AV. CASEROS 921/23',NULL,NULL,1),(58,'OBRA SOCIAL DEL PERSONAL DE CARGA Y DESCARGA','OSPCYD','COCHABAMBA 1635',NULL,NULL,1),(59,'OBRA SOCIAL DEL PERSONAL AUXILIAR DE CASAS PARTICULARES','OSPACP','CHARCAS 2745',NULL,'0800-888-2748',1),(60,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL CAUCHO','OSPIC','CONGRESO 2033',NULL,NULL,1),(61,'OBRA SOCIAL DEL PERSONAL DEL CAUCHO','OSPECA','VALLE 1281',NULL,NULL,1),(62,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL CAUCHO DE SANTA FE','OSPIC SANTA FE','ITURRASPE 2458',NULL,NULL,1),(63,'OBRA SOCIAL DEL PERSONAL DE CEMENTERIOS DE LA REPUBLICA ARGENTINA.','OSPCRA','FEDERICO LACROZE 3908',NULL,'0800-555-6772',1),(64,'OBRA SOCIAL DE CERAMISTAS','OSCE','DOBLAS 629',NULL,NULL,1),(65,'OBRA SOCIAL DEL PERSONAL DE LA CERAMICA, SANITARIOS, PORCELANA DE MESA Y AFINES','OSPCSPMYA','AV. HIIPOLITO IRIGOYEN 1255',NULL,NULL,1),(66,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD CERVECERA Y AFINES','OSPACA','HUMAHUACA 4072',NULL,'0800-3336772',1),(67,'OBRA SOCIAL DEL PERSONAL CINEMATOGRAFICO DE MAR DEL PLATA','OSPERCIN','NEUQUEN 2655',NULL,NULL,1),(68,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA CINEMATOGRAFICA','OSPIC','JUNCAL 2029',NULL,NULL,1),(69,'OBRA SOCIAL DE OPERADORES CINEMATOGRAFICOS','OSOC','VIAMONTE 2045',NULL,NULL,1),(70,'OBRA SOCIAL DE COLOCADORES DE AZULEJOS, MOSAICOS, GRANITEROS, LUSTRADORES Y PORCELANEROS','OSCAMGLYP','JOSE EUSEBIO COLOMBRES 1419',NULL,NULL,1),(71,'OBRA SOCIAL DE CONDUCTORES NAVALES','OSCONARA','PINZON 281',NULL,NULL,1),(72,'OBRA SOCIAL DEL PERSONAL ADMINISTRATIVO Y TECNICO DE LA CONSTRUCCION Y AFINES','OSPATCA','PTE. LUIS SAENZ PEÑA 1142/44',NULL,'0800-333-3480',1),(73,'OBRA SOCIAL DEL PERSONAL DE LA CONSTRUCCION','OSPECON','AVDA. BELGRANO 1862/70',NULL,'0800-222-0123',1),(74,'OBRA SOCIAL DE LOS CORTADORES DE LA INDUMENTARIA','OSUCI','SANTIAGO DEL ESTERO 576',NULL,NULL,1),(75,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL CUERO Y AFINES','OSPICA','CALLE GIRIBONE 789',NULL,NULL,1),(76,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL CHACINADO Y AFINES','OSPICHA','AVDA. SAN JUAN 4229 PLANTA BAJA',NULL,NULL,1),(77,'OBRA SOCIAL DE CHOFERES DE CAMIONES','OSCHOCA','SAN JOSE 1775/81',NULL,'0800-777-0020',1),(78,'OBRA SOCIAL DEL PERSONAL DE ENTIDADES DEPORTIVAS Y CIVILES','OSPEDYC','ALBERTI 646',NULL,NULL,1),(79,'OBRA SOCIAL DE EMPLEADOS DE DESPACHANTES DE ADUANA','OSEDA','CALLAO 220 PISO 6',NULL,NULL,1),(80,'OBRA SOCIAL DEL PERSONAL DE DISTRIBUIDORAS CINEMATOGRAFICAS DE LA R.A.','OSPEDICI','AYACUCHO 512/514 1º Y 2º PISO',NULL,NULL,1),(81,'OBRA SOCIAL DE DOCENTES PARTICULARES','OSDOP','BARTOLOME MITRE 2233',NULL,'0800-6666-450',1),(82,'OBRA SOCIAL DEL PERSONAL DE EDIFICIOS DE RENTA Y HORIZONTAL DE LA REPUBLICA ARGENTINA','OSPERYHRA','SARMIENTO 2026',NULL,NULL,1),(83,'OBRA SOCIAL DEL PERSONAL DE EDIFICIOS DE RENTA Y HORIZONTAL DE LA CIUDAD AUTONOMA DE BUENOS AIRES Y GRAN BUENOS AIRES','OSPERYH','SARMIENTO 2026',NULL,'0800-266-0066',1),(84,'OBRA SOCIAL ELECTRICISTAS NAVALES','OSEN','AVDA JUAN DE GARAY 1900',NULL,NULL,1),(85,'OBRA SOCIAL DE OBREROS EMPACADORES DE FRUTA DE RIO NEGRO Y NEUQUEN',NULL,'MENGUELLE 130',NULL,NULL,1),(86,'OBRA SOCIAL DEL PERSONAL DE LA ENSEÑANZA PRIVADA','OSPEP','AV. JUJUY 226',NULL,NULL,1),(87,'OBRA SOCIAL DEL PERSONAL DE ESCRIBANIAS DE LA PROVINCIA DE BUENOS AIRES','OSPEPBA','CALLE 45 Nº 509',NULL,NULL,1),(88,'OBRA SOCIAL DEL PERSONAL DE ESCRIBANOS','OSPE','RODRIGUEZ PEÑA 536/38',NULL,NULL,1),(89,'OBRA SOCIAL DEL PERSONAL DEL ESPECTACULO PUBLICO','OSPEP','PASCO 148/54',NULL,NULL,1),(90,'OBRA SOCIAL DEL PERSONAL DE ESTACIONES DE SERVICIO, GARAGES, PLAYAS DE ESTACIONAMIENTO Y LAVADEROS AUTOMATICOS','OSPESGYPE','HIPOLITO YRIGOYEN 2727',NULL,NULL,1),(91,'OBRA SOCIAL DEL PERSONAL DE FARMACIA','OSPF','CONSTITUCION 2066',NULL,'0800-333-9820',1),(92,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL FIBROCEMENTO','OSPIF','CONSTITUCION 3674',NULL,NULL,1),(93,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA FIDEERA','OSPIF','RIO DE JANEIRO 55',NULL,NULL,1),(94,'OBRA SOCIAL PARA EL PERSONAL DE LA INDUSTRIA FORESTAL DE SANTIAGO DEL ESTERO','OSPIFSE','MISIONES 332',NULL,NULL,1),(95,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL FOSFORO, ENCENDIDO Y AFINES','OSPIF','MARCONI 652',NULL,NULL,1),(96,'OBRA SOCIAL DE FOTOGRAFOS','OSFOT','PRINGLES 1090/92',NULL,NULL,1),(97,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD FRUTICOLA','OSPAF','SAAVEDRA 121',NULL,NULL,1),(98,'OBRA SOCIAL DEL PERSONAL DE MANIPULEO, EMPAQUE Y EXPEDICION DE FRUTA FRESCA Y HORTALIZAS DE CUYO','OSFYHC','MONTECASEROS 1147',NULL,NULL,1),(99,'OBRA SOCIAL DE FUTBOLISTAS','FAA','SALTA 1144',NULL,NULL,1),(100,'OBRA SOCIAL DE TECNICOS DE FUTBOL','OSTECF','VIAMONTE 1328 PB PISO 1',NULL,NULL,1),(101,'OBRA SOCIAL DE LA UNION DE TRABAJADORES DEL TURISMO, HOTELEROS Y GASTRONOMICOS DE LA REPUBLICA ARGENTINA','OSUTHGRA','AVDA. DE MAYO 930',NULL,'0800-222-8844',1),(102,'OBRA SOCIAL DEL PERSONAL GRAFICO','OSPG','AVDA. BELGRANO 2530',NULL,NULL,1),(103,'OBRA SOCIAL DE GUINCHEROS Y MAQUINISTAS DE GRUAS MOVILES',NULL,'CORONEL SALVADORES 1638',NULL,NULL,1),(104,'OBRA SOCIAL DEL PERSONAL DE CONSIGNATARIOS DEL MERCADO NACIONAL DE HACIENDA DE LINIERS','OSPEMER','LISANDRO DE LA TORRE 2337/9',NULL,NULL,1),(105,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL HIELO Y MERCADOS PARTICULARES','OSPIHMP','COLOMBRES 1573 (SINDICATO)',NULL,'0800-666-7744',1),(106,'OBRA SOCIAL DEL PERSONAL DE LOS HIPODROMOS DE BUENOS AIRES Y SAN ISIDRO','OSPHGBAYSI','PICO 1671/75 PISO 5 DTO A',NULL,'0800-888-5377',1),(107,'OBRA SOCIAL DEL PERSONAL MENSUALIZADO DEL JOCKEY CLUB DE BUENOS AIRES Y LOS HIPODROMOS DE PALERMO Y SAN ISIDRO',NULL,'AVDA. CABILDO 4193',NULL,NULL,1),(108,'OBRA SOCIAL DEL PERSONAL DE IMPRENTAS, DIARIOS Y AFINES','OSPIDA','SAN JOSE 157',NULL,NULL,1),(109,'OBRA SOCIAL DEL PERSONAL DE JABONEROS','OSPEJ','SARMIENTO 1113 PISO 8 B',NULL,NULL,1),(110,'OBRA SOCIAL DE JARDINEROS, PARQUISTAS, VIVERISTAS Y FLORICULTORES DE LA REPUBLICA ARGENTINA','OSJPVYF','LUIS SAENZ PEÑA 480',NULL,'0800-666-7386',1),(111,'OBRA SOCIAL DEL PERSONAL DEL JOCKEY CLUB DE ROSARIO',NULL,'OVIDIO LAGOS 1571',NULL,NULL,1),(112,'OBRA SOCIAL DEL PERSONAL LADRILLERO','OSPL','HIPOLITO IRIGOYEN 1534 3º PISO',NULL,NULL,1),(113,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA LADRILLERA A MAQUINA','OSPILM','25 DE MAYO 1724 E/ LINCOLN Y JUAREZ (79 1724 E 46/',NULL,NULL,1),(114,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA LECHERA','OSPIL','AVDA. HIPOLITO YRIGOYEN 4054',NULL,NULL,1),(115,'OBRA SOCIAL DE LOCUTORES','OSDEL','VIDT 2011',NULL,NULL,1),(116,'OBRA SOCIAL DE LA FEDERACION ARGENTINA DE TRABAJADORES DE LUZ Y FUERZA','OSFATLYF','LIMA 163 4° PISO',NULL,NULL,1),(117,'OBRA SOCIAL DE LOS TRABAJADORES DE LAS EMPRESAS DE ELECTRICIDAD','OSTEE','HUMBERTO 1º 434',NULL,'0800-999-1534',1),(118,'OBRA SOCIAL DEL PERSONAL DE LUZ Y FUERZA DE CORDOBA','OSLYF','AVDA. GRAL PAZ 282 PISO 1',NULL,'0800-333-3202',1),(119,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA MADERERA','OSPIM','ROJAS 254',NULL,NULL,1),(120,'OBRA SOCIAL DEL PERSONAL DE MAESTRANZA','OSPM','ALZAGA 2271',NULL,'0800-333-8154',1),(121,'OBRA SOCIAL DE MAQUINISTAS DE TEATRO Y TELEVISION',NULL,'AVDA CORRIENTES 1642 PISO 1 OFICINA 21',NULL,NULL,1),(122,'OBRA SOCIAL DE CAPITANES DE ULTRAMAR Y OFICIALES DE LA MARINA MERCANTE','OSCOMM','AVENIDA INDEPEDENCIA 611',NULL,'0800-6667266',1),(123,'OBRA SOCIAL DE CAPITANES BAQUEANOS FLUVIALES DE LA MARINA MERCANTE','OSCAPBAQFLU','ARISTOBULO DEL VALLE 319',NULL,NULL,1),(124,'OBRA SOCIAL DE EMPLEADOS DE LA MARINA MERCANTE','OSEMM','BARTOLOME MITRE 3776',NULL,NULL,1),(125,'OBRA SOCIAL DE ENCARGADOS APUNTADORES MARITIMOS','OSEAM','MEXICO 2183 DTO A',NULL,NULL,1),(126,'OBRA SOCIAL DEL PERSONAL MARITIMO','OSPM','VENEZUELA 1427',NULL,NULL,1),(127,'OBRA SOCIAL DEL SINDICATO DE MECANICOS Y AFINES DEL TRANSPORTE AUTOMOTOR','OSMATA','AVDA. BELGRANO 665 PISO 8',NULL,'4-340-7412',1),(128,'OBRA SOCIAL DEL PERSONAL SUPERIOR MERCEDES BENZ ARGENTINA','OSPS MERCEDES','OLIDEN 46',NULL,NULL,1),(129,'OBRA SOCIAL DE LA UNION OBRERA METALURGICA DE LA REPUBLICA ARGENTINA','OSUOMRA','ALSINA 485 - PISO 4',NULL,NULL,1),(130,'OBRA SOCIAL DE LOS SUPERVISORES DE LA INDUSTRIA METALMECANICA DE LA REPUBLICA ARGENTINA','OSSIMRA','AZCUENAGA 1234',NULL,'0-800-888-2746',1),(131,'OBRA SOCIAL DEL PERSONAL DE MICROS Y OMNIBUS DE MENDOZA','OSPEMOM','CATAMARCA 382',NULL,NULL,1),(132,'OBRA SOCIAL DE LA ACTIVIDAD MINERA','O.S.A.M.','ROSARIO 434/36',NULL,NULL,1),(133,'OBRA SOCIAL MODELOS ARGENTINOS','OSMA','AVDA CORRIENTES 1622 PISO 1 DTO A',NULL,NULL,1),(134,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA MOLINERA','OSPIM','AV. SAN JUAN 2670/72',NULL,NULL,1),(135,'OBRA SOCIAL DEL PERSONAL MOSAISTA','OSPM','QUIRNO 89',NULL,NULL,1),(136,'OBRA SOCIAL DE MUSICOS','OSDEM','AVDA. BELGRANO 3655',NULL,NULL,1),(137,'OBRA SOCIAL DE JEFES Y OFICIALES NAVALES DE RADIOCOMUNICACIONES','OSJONR','24 DE NOVIEMBRE 643/5',NULL,NULL,1),(138,'OBRA SOCIAL DE JEFES Y OFICIALES MAQUINISTAS NAVALES','OSJOMN','RODRIGUEZ PEÑA 1464',NULL,NULL,1),(139,'OBRA SOCIAL DEL PERSONAL NAVAL','OSPENA','JUAN DE DIOS FILIBERTO 914',NULL,NULL,1),(140,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL NEUMATICO','OSPIN','JUJUY 995',NULL,'0800-222-1537',1),(141,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA NAVAL','OSPIN','CHACABUCO 528',NULL,NULL,1),(142,'OBRA SOCIAL DE COMISARIOS NAVALES',NULL,'BERNARDO DE IRIGOYEN 840',NULL,'0800-333-6726',1),(143,'OBRA SOCIAL DEL PERSONAL DE PANADERIAS','OSPEP','BOEDO 168',NULL,'0800-999-3861',1),(144,'OBRA SOCIAL DE PANADEROS, PASTELEROS Y FACTUREROS DE ENTRE RIOS','OSSPYFER','VELEZ SARSFIELD 447/49',NULL,NULL,1),(145,'OBRA SOCIAL DEL PERSONAL DEL PAPEL, CARTON Y QUIMICOS','OSPPCYQ','OSVALDO CRUZ 2075',NULL,'0800-222-2727',1),(146,'OBRA SOCIAL DE LA INDUSTRIA DE PASTAS ALIMENTICIAS','OSIPA','AVDA.. BELGRANO 4280',NULL,NULL,1),(147,'OBRA SOCIAL TRABAJADORES PASTELEROS, CONFITEROS, PIZZEROS , HELADEROS Y ALFAJOREROS DE LA REPUBLICA ARGENTINA','OSTPCHPYARA','BOGADO 4541',NULL,NULL,1),(148,'OBRA SOCIAL DE PATRONES DE CABOTAJE DE RIOS Y PUERTOS',NULL,'AV MONTES DE OCA 1731',NULL,'0800-2221480',1),(149,'OBRA SOCIAL DEL PERSONAL DE PELUQUERIAS, ESTETICAS Y AFINES','OSPPEA','AYACUCHO 838',NULL,NULL,1),(150,'OBRA SOCIAL DE OFICIALES PELUQUEROS Y PEINADORES DE ROSARIO','OSOFPP DE ROSARIO','MONTEVIDEO 1488',NULL,NULL,1),(151,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD PERFUMISTA','OSPAP','TREINTA Y TRES ORIENTALES 148',NULL,'0810-3334683',1),(152,'OBRA SOCIAL DE TRABAJADORES DE PRENSA DE BUENOS AIRES','OSTPBA','PTE J.D. PERON 1173',NULL,'0800-345-6787',1),(153,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL PESCADO DE MAR DEL PLATA','OSPIP','12 DE OCTUBRE 4445',NULL,NULL,1),(154,'OBRA SOCIAL DE PETROLEROS','OSPE','AVDA. L. ALEM 692 1º PISO',NULL,'0800-444-6773',1),(155,'OBRA SOCIAL DEL PETROLEO Y GAS PRIVADO','OSPEGAP','AV. CASEROS 715',NULL,'0800-555-6773',1),(156,'OBRA SOCIAL DE PETROLEROS DE CORDOBA','O.S.PE.COR','AYACUCHO 575 -BARRIO. GRAL. GUEMES',NULL,'4244014',1),(157,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA PETROQUIMICA','OSPIP','AVDA. SAN MARTIN 698 PA',NULL,NULL,1),(158,'OBRA SOCIAL PARA PILOTOS DE LINEAS AEREAS COMERCIALES Y REGULARES','OSPLA','LEZICA 4047',NULL,NULL,1),(159,'OBRA SOCIAL DEL PERSONAL DE FABRICAS DE PINTURA','UPFPARA','NAZCA 845',NULL,'0800-999-8525',1),(160,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL PLASTICO','OSPIP','PAVON 4175',NULL,'0800-222-6774',1),(161,'OBRA SOCIAL DE CAPATACES ESTIBADORES PORTUARIOS','OSCEP','PINZON 1012/1016',NULL,NULL,1),(162,'OBRA SOCIAL DE PORTUARIOS ARGENTINOS','OSPA','BOLIVAR 839',NULL,NULL,1),(163,'OBRA SOCIAL PORTUARIOS PUERTO SAN MARTIN Y BELLA VISTA',NULL,'CAYETANO NERBUTTI 256',NULL,NULL,1),(164,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE LA REPUBLICA ARGENTINA','OSPPRA','SOLIS 1158 PISO 3§',NULL,NULL,1),(165,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE BAHIA BLANCA',NULL,'LAMADRID 266',NULL,NULL,1),(166,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE MAR DEL PLATA','OSPREN','DORREGO 1734',NULL,NULL,1),(167,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE MENDOZA',NULL,'CHILE 1661',NULL,NULL,1),(168,'OBRA SOCIAL DE EMPLEADOS DE PRENSA DE CORDOBA','OSEPC','OBISPO TREJO 365',NULL,NULL,1),(169,'OBRA SOCIAL DE AGENTES DE PROPAGANDA MEDICA DE LA REPUBLICA ARGENTINA','OSAPM','AVELLANEDA 2144',NULL,NULL,1),(170,'OBRA SOCIAL DE AGENTES DE PROPAGANDA MEDICA DE CORDOBA','OSAPMCBA','AVDA OLMOS 485 PISO 2 (ESQUINA STAGO DEL ESTERO)',NULL,NULL,1),(171,'OBRA SOCIAL DE AGENTES DE PROPAGANDA MEDICA DE ENTRE RIOS','OSAPMER','CATAMARCA 451',NULL,NULL,1),(172,'OBRA SOCIAL DEL PERSONAL DE LA PUBLICIDAD','OSPP','AVDA CORDOBA 1576',NULL,NULL,1),(173,'OBRA SOCIAL DEL PERSONAL DE INDUSTRIAS QUIMICAS Y PETROQUIMICAS','OSPIQYP','MEXICO 1474',NULL,NULL,1),(174,'OBRA SOCIAL DE RECIBIDORES DE GRANOS Y ANEXOS','OSRGA','AVDA BELGRANO 510 PISO 5',NULL,NULL,1),(175,'OBRA SOCIAL DEL PERSONAL DE RECOLECCION Y BARRIDO DE ROSARIO',NULL,'BUENOS AIRES 1635',NULL,NULL,1),(176,'OBRA SOCIAL DEL PERSONAL DE REFINERIAS DE MAIZ',NULL,'ANCHORENA 1429',NULL,NULL,1),(177,'OBRA SOCIAL DE RELOJEROS Y JOYEROS','OSRJA','VALENTIN GOMEZ 3828',NULL,'0800-333-3420',1),(178,'OBRA SOCIAL DEL PERSONAL RURAL Y ESTIBADORES DE LA REPUBLICA ARGENTINA','OSPRERA','RECONQUISTA 630',NULL,'0800-77-78725',1),(179,'OBRA SOCIAL DEL PERSONAL DE LA SANIDAD ARGENTINA','OSPSA','DEAN FUNES 1242',NULL,NULL,1),(180,'OBRA SOCIAL DEL PERSONAL DE INSTALACIONES SANITARIAS','OSPIS','PASCO Nº 1040',NULL,'0800-555-8774',1),(181,'OBRA SOCIAL DEL PERSONAL DE SEGURIDAD COMERCIAL, INDUSTRIAL E INVESTIGACIONES PRIVADAS','OSPSIP','AVDA. DIAZ VELEZ 3965 U.F 3',NULL,'0800-333-6777',1),(182,'OBRA SOCIAL DE SERENOS DE BUQUES',NULL,'BERNARDO DE IRIGOYEN 972/4 PISO 9 OF. 45',NULL,'0800-345-7332',1),(183,'OBRA SOCIAL DEL PERSONAL DE SUPERVISION DE LA EMPRESA SUBTERRANEOS DE BUENOS AIRES','OSPSESBA','EMILIO MITRE 582',NULL,NULL,1),(184,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LA EMPRESA SUBTERRANEOS DE BUENOS AIRES','OSPDESBA','AVDA CALLAO 322 PISO 8 DTO A',NULL,NULL,1),(185,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL TABACO','OSPIT','ESTEBAN BONORINO 281',NULL,NULL,1),(186,'OBRA SOCIAL DE EMPLEADOS DEL TABACO DE LA REPUBLICA ARGENTINA','OSETRA','BOLIVIA 384',NULL,NULL,1),(187,'OBRA SOCIAL DEL PERSONAL DE LAS TELECOMUNICACIONES DE LA REPUBLICA ARGENTINA','OSTEL','AVDA JUAN DE GARAY 2569',NULL,'0800-333-6783',1),(188,'OBRA SOCIAL DE TRABAJADORES DE LAS COMUNICACIONES','OSTRAC','CHACABUCO 140',NULL,NULL,1),(189,'OBRA SOCIAL DEL PERSONAL DE TELEVISION','OSPTV','QUINTINO BOCAYUVA 38/50',NULL,'0800-288-8872',1),(190,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA TEXTIL','OSPIT','AVDA. LA PLATA 754',NULL,'0800-333-63733',1),(191,'OBRA SOCIAL DE EMPLEADOS TEXTILES Y AFINES','OSETYA','BENITO QUINQUELA MARTIN 1738',NULL,'0810-999-6738',1),(192,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL TRACTOR','OSPIT','SAN LORENZO 2181',NULL,NULL,1),(193,'OBRA SOCIAL DE LA INDUSTRIA DEL TRANSPORTE AUTOMOTOR DE CORDOBA','OSITAC','PARANA 327',NULL,NULL,1),(194,'OBRA SOCIAL CONDUCTORES DE TRANSPORTE COLECTIVO DE PASAJEROS',NULL,'MORENO 2969',NULL,'INT 109.183,155,117,',1),(195,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD DEL TURF','OSPAT','AVDA ROQUE SAENZ PEÑA 832 PISO 3',NULL,'0800-999-1656',1),(196,'OBRA SOCIAL CONDUCTORES DE TAXIS DE CORDOBA','OSTC','SAN LUIS 373 - B. GUEMES',NULL,NULL,1),(197,'OBRA SOCIAL DE VAREADORES',NULL,'ENTRE RIOS 1395',NULL,'0800-3455006',1),(198,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL VESTIDO','OSPIV','AVDA. RIVADAVIA 1378 PB',NULL,'8009991941',1),(199,'OBRA SOCIAL DE VIAJANTES VENDEDORES DE LA REPUBLICA ARGENTINA. (ANDAR)','OSVVRA','MORENO 2045',NULL,'0800-345-26327',1),(200,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD VIAL','OSPA-VIAL','AVDA. DE MAYO 1439',NULL,NULL,1),(201,'OBRA SOCIAL DE EMPLEADOS DE LA INDUSTRIA DEL VIDRIO','OSEIV','CARABOBO 217',NULL,NULL,1),(202,'OBRA SOCIAL DEL PERSONAL DE LA INDUSTRIA DEL VIDRIO','OSPIV','BALBASTRO 453',NULL,NULL,1),(203,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD VITIVINICOLA','OSPAV','WARNES 1894',NULL,'0800-444-6772',1),(204,'OBRA SOCIAL DEL PERSONAL DE VIGILANCIA Y SEGURIDAD COMERCIAL, INDUSTRIAL E INVESTIGACIONES PRIVADAS DE CORDOBA','OSPEVIC','FAUSTINO ALLENDE 189 - BARRIO INDEPENDENCIA',NULL,'0810-888-6773',1),(205,'OBRA SOCIAL DEL PERSONAL DE ESTACIONES DE SERVICIO, GARAGES, PLAYAS Y LAVADEROS AUTOMATICOS DE LA PROVINCIA DE SANTA FE','OSPESGA','RIOBAMBA 1069',NULL,NULL,1),(206,'OBRA SOCIAL PARA EL PERSONAL DE ESTACIONES DE SERVICIO, GARAGES, PLAYAS DE ESTACIONAMIENTO, LAVADEROS AUTOMATICOS Y GOMERIAS DE LA REPUBLICA ARGENTINA','OSPES','AVDA. JUJUY 110 PISO 3 DTOS A , B',NULL,NULL,1),(207,'OBRA SOCIAL TALLERISTAS A DOMICILIO','OSTAD','ACEVEDO 553',NULL,NULL,1),(208,'OBRA SOCIAL DEL PERSONAL DE SOCIEDADES DE AUTORES Y AFINES','OSPESA','MONTEVIDEO 453 (DOMICILIO PROVISORIO)',NULL,NULL,1),(209,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE ROSARIO','OSPRO','JUAN MANUEL DE ROSAS 958',NULL,NULL,1),(210,'OBRA SOCIAL DEL PERSONAL DE PRENSA DE TUCUMAN','OSPRENTUC','JUNIN 775',NULL,NULL,1),(211,'OBRA SOCIAL DE TRABAJADORES DE PERKINS ARGENTINA S.A.I.C','OSTP','ROQUE SAENZ PEÑA 1377',NULL,'0800-444-0663',1),(212,'OBRA SOCIAL DE PEONES DE TAXIS DE LA CAPITAL FEDERAL','OSPETAX','AVDA LA PLATA 1554/60/62/64',NULL,NULL,1),(213,'OBRA SOCIAL DE VENDEDORES AMBULANTES DE LA REPUBLICA ARGENTINA','OSVARA','GALLO 443',NULL,NULL,1),(214,'OBRA SOCIAL DE BOXEADORES AGREMIADOS DE LA REPUBLICA ARGENTINA','OSBARA','TALCAHUANO 109 PISO 6 D',NULL,NULL,1),(215,'OBRA SOCIAL DE TRABAJADORES DE LA INDUSTRIA DEL GAS','OSTIG','BOEDO 90',NULL,NULL,1),(216,'OBRA SOCIAL DE LOS PROFESIONALES UNIVERSITARIOS DEL AGUA Y LA ENERGIA ELECTRICA','OSPUAYE','RECONQUISTA 1048 PISO 2',NULL,NULL,1),(217,'OBRA SOCIAL FEDERAL DE LA FEDERACION NACIONAL DE TRABAJADORES DE OBRAS SANITARIAS','OSFFENTOS','PASCO 580 - PB',NULL,'0800-555-1133',1),(218,'OBRA SOCIAL DE LA FEDERACION ARGENTINA DEL TRABAJADOR DE LAS UNIVERSIDADES NACIONALES','OSFATUN','AV BELGRANO 3768 4TO. PISO',NULL,'0-800-666--5173',1),(219,'OBRA SOCIAL UNION PERSONAL DE LA UNION DEL PERSONAL CIVIL DE LA NACION','OSPCN','TUCUMAN 949',NULL,'0810-8888646',1),(220,'OBRA SOCIAL DE ARBITROS DEPORTIVOS DE LA REPUBLICA ARGENTINA','OSADRA','VIAMONTE 1835',NULL,NULL,1),(221,'OBRA SOCIAL DE LA FEDERACION GREMIAL DEL PERSONAL DE LA INDUSTRIA DE LA CARNE Y SUS DERIVADOS',NULL,'HIPOLITO YRIGOYEN 746',NULL,'0800-222-7938',1),(222,'OBRA SOCIAL PARA LOS TRABAJADORES DE LA EDUCACION PRIVADA','OSTEP','SALTA 534',NULL,NULL,1),(223,'OBRA SOCIAL DE LOS EMPLEADOS DE COMERCIO Y ACTIVIDADES CIVILES','OSECAC','MORENO 648/50',NULL,'0800-666-0400',1),(224,'OBRA SOCIAL SERVICIOS SOCIALES BANCARIOS','OSBA','25 DE MAYO 182',NULL,'0800-555-6722',1),(225,'OBRA SOCIAL DE LA CONFEDERACION DE OBREROS Y EMPLEADOS MUNICIPALES ARGENTINA ( OSCOEMA )','OSCOEMA','MORENO 970 PISO 2 OF. 15',NULL,'0810-333-3057',1),(226,'OBRA SOCIAL DEL PERSONAL DE INDUSTRIAS QUIMICAS Y PETROQUIMICAS DE ZARATE CAMPANA','OPZC','DR FELIX PAGOLA 1712',NULL,NULL,1),(227,'OBRA SOCIAL DEL PERSONAL DE LA ACTIVIDAD AZUCARERA TUCUMANA',NULL,'CONGRESO DE TUCUMAN 341',NULL,NULL,1),(228,'OBRA SOCIAL DE CONDUCTORES DE REMISES Y AUTOS AL INSTANTE Y AFINES','OSCRAIA','\"CERRITO 228 - 1º \"\"B\"\" \"',NULL,NULL,1),(229,'OBRA SOCIAL DE LOS MEDICOS DE LA CIUDAD DE BUENOS AIRES','OSMEDICA','MARCELO T. DE ALVEAR 867/871',NULL,'0800-999-5396',1),(230,'OBRA SOCIAL DE TRABAJADORES DE ESTACIONES DE SERVICIO','OSTES','BANDERA DE LOS ANDES 239',NULL,NULL,1),(231,'OBRA SOCIAL DEL PERSONAL DE TELECOMUNICACIONES SINDICATO BUENOS AIRES','OSPETELCO','24 DE NOVIEMBRE 40',NULL,'0800-999-6241',1),(232,'OBRA SOCIAL DE MANDOS MEDIOS DE TELECOMUNICACIONES EN LA REPUBLICA ARGENTINA Y MERCOSUR','OSMMEDT','URIARTE 1317',NULL,'0810 777 6767',1),(233,'OBRA SOCIAL DE TRABAJADORES VIALES Y AFINES DE LA REPUBLICA ARGENTINA',NULL,'MEXICO 1399 P.B ESQUINA SAN JOSE',NULL,NULL,1),(234,'OBRA SOCIAL DE OBREROS Y EMPLEADOS TINTOREROS SOMBREREROS Y LAVADEROS DE LA REPUBLICA ARGENTINA','OSOETSYLARA','CULPINA 25/29',NULL,NULL,1),(235,'OBRA SOCIAL DE LAS ASOCIACIONES DE EMPLEADOS DE FARMACIA','OSADEF','RINCON 1035',NULL,'0800-666-2333',1),(236,'OBRA SOCIAL PARA EL PERSONAL DE OBRAS Y SERVICIOS SANITARIOS','OSOSS','AVELLANEDA 212 PISO 3',NULL,'0800-999-1702',1),(237,'OBRA SOCIAL PERSONAL ESTACIONES DE SERVICIO,GARAGES,PLAYAS Y LAVADEROS DE LA PROVINCIA DEL CHACO','OSPESCHA','JULIO A. ROCA 755',NULL,NULL,1),(238,'OBRA SOCIAL DE LUZ Y FUERZA DE LA PATAGONIA','OSLYF PATAGONIA','BALDOMERO CARRASCO Nº 60',NULL,'0800-666-4363',1),(239,'OBRA SOCIAL DE PETROLEROS PRIVADOS','OS.PE.PRI','SANTA CRUZ 275',NULL,NULL,1),(240,'OBRA SOCIAL DEL PERSONAL DE LA FEDERACION DE SINDICATOS DE LA INDUSTRIA QUIMICA Y PETROQUIMICA',NULL,'PAVON 3708',NULL,NULL,1),(241,'OBRA SOCIAL DE LA UNION DE TRABAJADORES DEL INSTITUTO NACIONAL DE SERVICIOS SOCIALES PARA JUBILADOS Y PENSIONADOS DE LA REPUBLICA ARGENTINA','OSUTI','ESMERALDA 25',NULL,'0800-666-7884',1),(242,'OBRA SOCIAL DEL SINDICATO UNICO DE RECOLECTORES DE RESIDUOS Y BARRIDO DE CORDOBA','O.S.S.U.R.R.B.A.C','LIMA 342',NULL,NULL,1),(243,'OBRA SOCIAL PEONES DE TAXIS DE ROSARIO','O.S.PE.TAX.R','SALTA 2882',NULL,NULL,1),(244,'OBRA SOCIAL DEL SINDICATO OBREROS Y EMPLEADOS DE EMPRESAS DE LIMPIEZA,SERVICIOS Y AFINES DE CORDOBA','OSSOELSAC','ENTRE RIOS 372',NULL,NULL,1),(245,'OBRA SOCIAL DE FARMACEUTICOS Y BIOQUIMICOS','OSFYB','AGUERO 1595 PISO 13',NULL,NULL,1),(246,'OBRA SOCIAL DE TRABAJADORES DEL PETROLEO Y GAS PRIVADO DEL CHUBUT',NULL,'AVDA ALSINA 728 PISO 3',NULL,NULL,1),(247,'OBRA SOCIAL DEL PERSONAL DE DRAGADO Y BALIZAMIENTO','OSPEDYB','CALLE PIEDRAS 1693/95',NULL,NULL,1),(248,'OBRA SOCIAL DEL PERSONAL ADUANERO DE LA REPUBLICA ARGENTINA','OSPAD','PERU 625',NULL,NULL,1),(249,'OBRA SOCIAL DE LOS TRABAJADORES ARGENTINOS DE CENTROS DE CONTACTOS','O.S.T.A.C.C,','ROSARIO DE SANTA FE 414',NULL,NULL,1),(250,'OBRA SOCIAL DE LA ASOCIACION DEL PERSONAL SUPERIOR DE LA EMPRESA PROVINCIAL DE ENERGIA DE CORDOBA','O.S.A.P.S.E','RIVADEO Nº 1231',NULL,NULL,1),(251,'OBRA SOCIAL DEL PERSONAL DE LA EMPRESA NACIONAL DE CORREOS Y TELEGRAFOS S.A. Y DE LAS COMUNICACIONES DE LA REPULICA ARGENTINA','OSPEC','MAIPU 39',NULL,NULL,1),(252,'OBRA SOCIAL CERAS JOHNSON','JOHNSON','URUGUAY 7286',NULL,NULL,1),(253,'OBRA SOCIAL PARA DIRECTIVOS, TECNICOS Y EMPLEADOS DE JOHN DEERE ARGENTINA','DITEM','JUAN ORSETTI 481',NULL,NULL,1),(254,'OBRA SOCIAL COMPANIA MINERA AGUILAR S.A',NULL,'AVDA BELGRANO 485 PISO 1 OFC 3',NULL,NULL,1),(255,'OBRA SOCIAL REFINERIAS DE MAIZ S.A.I.C.F.','OSRM','\"CORDOBA 1345 PISO 15 DEPTO \"\"B\"\" \"',NULL,NULL,1),(256,'OBRA SOCIAL SUPERCO',NULL,'CERRITO 1070 PISO 5 OF 95',NULL,NULL,1),(257,'OBRA SOCIAL CABOT ARGENTINA',NULL,'AVDA. ROCA 189',NULL,NULL,1),(258,'OBRA SOCIAL DE SHELL ARGENTINA',NULL,'AVDA. CORRIENTES 3101 PISO 1',NULL,NULL,1),(259,'OBRA SOCIAL DEL PERSONAL DE PBBPOLISUR SA DE BAHIA BLANCA',NULL,'LAS HERAS 95',NULL,NULL,1),(260,'OBRA SOCIAL DE FORD AGENTINA S.C.A',NULL,'AVDA DE MAYO 651',NULL,NULL,1),(261,'OBRA SOCIAL DE VOLKSWAGEN ARGENTINA S.A.',NULL,'MAIPU 267 PISO 11',NULL,NULL,1),(262,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LAS EMPRESAS DE LA ALIMENTACION Y DEMAS ACTIVIDADES EMPRESARIAS','OPDEA','BERNANDO DE IRIGOYEN 540 PISO 2#',NULL,'0800-999-6733',1),(263,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LA INDUSTRIA AUTOMOTRIZ ARGENTINA','OSPREME','ARRIBEÑOS 3619 PISO 9',NULL,'0800-999-7384',1),(264,'OBRA SOCIAL COOPERATIVA LTDA. DE ASISTENCIA MEDICA Y FARMACEUTICA, SERVICIOS ASISTENCIALES Y TURISMO DEL PERSONAL SUPERIOR DE LA INDUSTRIA DEL CAUCHO Y OTRAS ACTIVIDADES INDUSTRIALES','CAMPSIC','DR. EMILIO RAVIGNANI 2540',NULL,NULL,1),(265,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LA INDUSTRIA CERVECERA Y MALTERA','SERVESALUD','RODRIGUEZ PEÑA 1474',NULL,'0800-362-7398',1),(266,'OBRA SOCIAL DE LA ASOCIACION DEL PERSONAL DE DIRECCION Y JERARQUICO DE LA INDUSTRIA DEL CIGARRILLO','APDJIC','LAVALLE N§ 445 PISO 4§',NULL,NULL,1),(267,'OBRA SOCIAL DEL PERSONAL DIRECTIVO DE LA INDUSTRIA DE LA CONSTRUCCION','OSDIC','BILLINGHURST 1662 PISO 2',NULL,NULL,1),(268,'OBRA SOCIAL CAMARA DE LA INDUSTRIA CURTIDORA ARGENTINA','OSCICA','AVDA. BELGRANO 3978',NULL,NULL,1),(269,'OBRA SOCIAL DE EJECUTIVOS Y DEL PERSONAL DE DIRECCION DE EMPRESAS','OSDE','AVDA. LEANDRO N. ALEM 1067 PISO 9',NULL,'0800-555-6733',1),(270,'OBRA SOCIAL DEL PERSONAL DE DIRECCION ACCION SOCIAL DE EMPRESARIOS (A:S:E.)','ASE','LIMA 87 PISO 8',NULL,'0810-333-3273',1),(271,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LAS EMPRESAS QUE ACTUAN EN FRUTOS DEL PAIS','FRUTOS','BALCARCE 880 PISO 1§',NULL,NULL,1),(272,'OBRA SOCIAL DEL PERSONAL DE DIRECCION ALFREDO FORTABAT',NULL,'CECILIA GRIERSON 355 3 Y 4 PISO',NULL,'4319-9879',1),(273,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LA INDUSTRIA METALURGICA Y DEMAS ACTIVIDADES EMPRESARIAS','OSIM','MONTEVIDEO 373 PISO 4º',NULL,NULL,1),(274,'OBRA SOCIAL PARA EL PERSONAL DE DIRECCION DE LA INDUSTRIA MADERERA','OSMAD','AVDA BELGRANO 748 PISO 10 OF. 103',NULL,NULL,1),(275,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE LA INDUSTRIA PRIVADA DEL PETROLEO','OSDIPP','25 DE MAYO 537/553/555 1ER. SUBSUELO',NULL,NULL,1),(276,'OBRA SOCIAL DE EMPRESARIOS, PROFESIONALES Y MONOTRIBUTISTAS','OSDEPYM','RECONQUISTA 458 PISO 2',NULL,NULL,1),(277,'OBRA SOCIAL ASOCIACION MUTUAL DEL PERSONAL DE PHILIPS ARGENTINA (AMPAR)','AMPAR','VEDIA 3892',NULL,NULL,1),(278,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE PERFUMERIA E.W. HOPE','WHOPE','AVDA. CORDOBA 1345 PISO 5',NULL,'0800-333-34673',1),(279,'OBRA SOCIAL DEL PERSONAL DE DIRECCION DE SANIDAD LUIS PASTEUR','OSLPASTEUR','CALLAO 764/66',NULL,NULL,1),(280,'OBRA SOCIAL ASOCIACION DEL PERSONAL DE DIRECCION DE LA INDUSTRIA SIDERURGICA','APDIS','GORRITI 6046 - 5° PISO - OF 506/507/508',NULL,NULL,1),(281,'OBRA SOCIAL MUTUALIDAD INDUSTRIAL TEXTIL ARGENTINA','OSMITA','PARAGUAY 610 PISO 6',NULL,'0800-888-6482',1),(282,'OBRA SOCIAL ASOCIACION DEL PERSONAL SUPERIOR DE LA ORGANIZACION TECHINT','APSOT','CORDOBA 320 PISO 2',NULL,'0800-122-8778',1),(283,'OBRA SOCIAL PARA EL PERSONAL DE DIRECCION DE LA INDUSTRIA VITIVINICOLA Y AFINES','OSEDEIV','AV. CASEROS 3563 1º PISO',NULL,NULL,1),(284,'OBRA SOCIAL YPF','OSYPF','MACACHA GUEMES 515 1º P',NULL,NULL,1),(285,'OBRA SOCIAL ASOCIACION DE SERVICIOS SOCIALES PARA EMPRESARIOS Y PERSONAL DE DIRECCION DE EMPRESAS DEL COMERCIO, SERVICIOS, PRODUCCION, INDUSTRIA Y CIVIL (ASSPE )','ASSPE','JUAN DOMINGO PERON 1606',NULL,'0800-345-7332',1),(286,'OBRA SOCIAL DE DIRECCION OSDO',NULL,'AVDA. LUIS MARUA CAMPOS 46 PISO 8',NULL,'0800-5556736',1),(287,'OBRA SOCIAL DE DIRECCION DE LA ACTIVIDAD AEROCOMERCIAL PRIVADA',NULL,'VENEZUELA 900',NULL,'0800-222-0034',1),(288,'INSTITUTO NACIONAL DE SERVICIOS SOCIALES PARA JUBILADOS Y PENSIONADOS',NULL,'PERU 169 PISO 10 ( VER OBSERVACIONES )',NULL,NULL,1),(289,'ASOCIACION DE OBRAS SOCIALES DE COMODORO RIVADAVIA',NULL,'HIPOLITO YRIGOYEN 387',NULL,NULL,1),(290,'ASOCIACION GUALEGUAYCHU DE OBRAS SOCIALES',NULL,'OLEGARIO V. ANDRADE 1057',NULL,'03446-4-24133',1),(291,'ASOCIACION DE OBRAS SOCIALES DE GUALEGUAY',NULL,'25 DE MAYO 530/38',NULL,NULL,1),(292,'ASOCIACION DE OBRAS SOCIALES DE ROSARIO','ADOS ROSARIO','MITRE 1174',NULL,NULL,1),(293,'ASOCIACION DE OBRAS SOCIALES DE TRELEW',NULL,'28 DE JULIO 722',NULL,NULL,1),(294,'OBRA SOCIAL DEL PERSONAL MUNICIPAL DE AVELLANEDA',NULL,'LAPRIDA 70',NULL,NULL,1),(295,'OBRA SOCIAL DEL PERSONAL MUNICIPAL DE LA MATANZA',NULL,'ALMAFUERTE 3160',NULL,NULL,1),(296,'OBRA SOCIAL PARA EL PERSONAL MUNICIPAL DE TRES DE FEBRERO',NULL,'AMADEO SABATTINI 4661/65',NULL,'0800-444-0321',1),(297,'OBRA SOCIAL ATANOR S.A',NULL,'ALBARELLO 4914',NULL,NULL,1),(298,'OBRA SOCIAL ACEROS PARANA',NULL,'AVDA. MORENO 187',NULL,NULL,1),(299,'OBRA SOCIAL DEL PERSONAL DE EMPRESAS FIAT Y EMPRESAS PEUGEOT CITROEN ARGENTINA','OSPEF Y EPCA','AV. LEANDRO N. ALEN 530 PISO 11',NULL,NULL,1);
/*!40000 ALTER TABLE `obra_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padron`
--

DROP TABLE IF EXISTS `padron`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `padron` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cuil` int NOT NULL,
  `cud` varchar(100) NOT NULL,
  `cudVigencia` date NOT NULL,
  `cudDiagnostico` varchar(50) NOT NULL,
  `discapacidad` int NOT NULL,
  `causa` varchar(100) NOT NULL,
  `pension` varchar(100) NOT NULL,
  `obraSocial` int NOT NULL,
  `nivelInstruccion` varchar(100) NOT NULL,
  `tipoModalidad` varchar(100) NOT NULL,
  `experienciaLaboral` varchar(100) NOT NULL,
  `actividades` varchar(100) NOT NULL,
  `nivelEducacion` varchar(100) NOT NULL,
  `residencia` varchar(100) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  `persona` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `padronObraSocial_idx` (`obraSocial`),
  KEY `padronDiscapacidad_idx` (`discapacidad`),
  KEY `padronPersona_idx` (`persona`),
  CONSTRAINT `padronDiscapacidad` FOREIGN KEY (`discapacidad`) REFERENCES `discapacidad` (`id`),
  CONSTRAINT `padronObraSocial` FOREIGN KEY (`obraSocial`) REFERENCES `obra_social` (`id`),
  CONSTRAINT `padronPersona` FOREIGN KEY (`persona`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padron`
--

LOCK TABLES `padron` WRITE;
/*!40000 ALTER TABLE `padron` DISABLE KEYS */;
INSERT INTO `padron` VALUES (1,1111111,'22222222','2022-06-04','fdgdfhg',1,'Caída','Si',4,'Estudiante','Virtual','Heladería','dsfsgd','Secundario','sdfsdf',1,1),(4,23425,'55BCZ','2024-04-08','dfgdg',2,'fdhfdh','Si',18,'Estudiante','Virtual','Cámaras','fdghfhg','Primaria','dfg',1,4),(5,54546678,'ty55','2022-10-17','Grave',3,'dff','No',18,'Estudiante','Presencial','Fabrica','dfgfgd','Universitario','dfcgv',1,8),(6,4353646,'54g','2022-06-12','sdf',3,'dsfsd','Sí',12,'Desempleado','Virtual','Policía','dfxgd','Universitario','dfgd',1,9),(7,4356,'bf45','2022-06-21','Repentino',3,'dsfdsg','Sí',20,'Estudiante','Virtual','Kiosko','gdfhg','Universitario','dfgbg',1,2),(10,43567,'b2c345','2022-06-30','sdf',2,'sdg','Sí',19,'Desempleado','Virtual','Fabrica','Deporte','Universitario','dfgdfg',1,11);
/*!40000 ALTER TABLE `padron` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persona` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `estadoCivil` int NOT NULL,
  `dniTipo` int NOT NULL,
  `dniTramite` int NOT NULL,
  `dniNumero` int NOT NULL,
  `nacionalidad` int NOT NULL,
  `provincia` int NOT NULL,
  `ciudad` int NOT NULL,
  `calle` varchar(45) NOT NULL,
  `altura` int NOT NULL,
  `piso` int DEFAULT '0',
  `dpto` varchar(45) DEFAULT NULL,
  `barrio` int NOT NULL,
  `usuario` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `personaDNI_idx` (`dniTipo`),
  KEY `personaUsuario_idx` (`usuario`),
  KEY `personaNacionalidad_idx` (`nacionalidad`),
  KEY `personaEstadoCivil_idx` (`estadoCivil`),
  KEY `personaProvincia_idx` (`provincia`) USING BTREE,
  KEY `personaCiudad_idx` (`ciudad`),
  KEY `personaBarrio_idx` (`barrio`),
  CONSTRAINT `personaBarrio` FOREIGN KEY (`barrio`) REFERENCES `barrio` (`id`),
  CONSTRAINT `personaCiudad` FOREIGN KEY (`ciudad`) REFERENCES `ciudad` (`id`),
  CONSTRAINT `personaDNI` FOREIGN KEY (`dniTipo`) REFERENCES `tipo_dni` (`id`),
  CONSTRAINT `personaEstadoCivil` FOREIGN KEY (`estadoCivil`) REFERENCES `estado_civil` (`id`),
  CONSTRAINT `personaNacionalidad` FOREIGN KEY (`nacionalidad`) REFERENCES `nacionalidad` (`id`),
  CONSTRAINT `personaProvincia` FOREIGN KEY (`provincia`) REFERENCES `provincia` (`id`),
  CONSTRAINT `personaUsuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Elías','Facchini','2017-01-09','M',1,1,45565656,40859643,1,1,123,'Rosetti',330,0,NULL,1,1,1),(2,'Jorge','Mora','2020-11-18','M',1,1,54565656,30567432,1,1,1,'Otra calle',22,0,NULL,1,1,1),(3,'Delfina','Martinez Fontana','1997-09-26','F',1,1,45454564,40643856,1,1,1,'Callecita',333,5,'A',1,1,1),(4,'Rocío','Rivas','2000-04-21','F',1,1,43554364,42454567,1,1,1,'4',1,NULL,NULL,1,1,1),(5,'María','García','2022-02-07','1',3,2,54432,1,3,1,1,'3',1,1,NULL,1,2,1),(6,'Carlos','Guiterritos','2022-02-07','1',3,2,1,1,3,1,1,'3',1,0,NULL,1,2,1),(8,'Marcelo','Lopez','2019-05-01','H',2,1,454634225,56453546,1,5,11,'Humberto Primo',120,0,NULL,1,1,1),(9,'León','Kennedy','2017-01-01','dsxg',1,1,4535,4356,1,2,2,'Rossetti',3213,0,NULL,1,1,1),(10,'Lucas','Betolli','2022-06-13','H',1,1,435345,56435432,1,2,1,'Rossetti',456,0,NULL,1,1,1),(11,'Juan','Latessa','2022-06-15','H',1,1,54643,5678543,1,1,1,'Rossetti',43,0,NULL,1,1,1);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincia` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincia`
--

LOCK TABLES `provincia` WRITE;
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
INSERT INTO `provincia` VALUES (1,'Buenos Aires'),(2,'Catamarca'),(3,'Chaco'),(4,'Chubut'),(5,'Ciudad Autónoma de Buenos Aires'),(6,'Córdoba'),(7,'Corrientes'),(8,'Entre Ríos'),(9,'Formosa'),(10,'Jujuy'),(11,'La Pampa'),(12,'La Rioja'),(13,'Mendoza'),(14,'Misiones'),(15,'Neuquén'),(16,'Río Negro'),(17,'Salta'),(18,'San Juan'),(19,'San Luís'),(20,'Santa Cruz'),(21,'Santa Fe'),(22,'Santiago del Estero'),(23,'Tierra del Fuego, Antártida e Islas del Atlántico Sur'),(24,'Tucumán');
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable_de`
--

DROP TABLE IF EXISTS `responsable_de`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsable_de` (
  `idResponsable` int NOT NULL,
  `idPadron` int NOT NULL,
  `vinculo` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`idResponsable`,`idPadron`),
  KEY `haciaPadron_idx` (`idPadron`),
  KEY `haciaPersona_idx` (`idResponsable`),
  KEY `haciaVinculo_idx` (`vinculo`),
  CONSTRAINT `haciaPadron` FOREIGN KEY (`idPadron`) REFERENCES `padron` (`id`),
  CONSTRAINT `haciaPersona` FOREIGN KEY (`idResponsable`) REFERENCES `persona` (`id`),
  CONSTRAINT `haciaVinculo` FOREIGN KEY (`vinculo`) REFERENCES `vinculo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable_de`
--

LOCK TABLES `responsable_de` WRITE;
/*!40000 ALTER TABLE `responsable_de` DISABLE KEYS */;
INSERT INTO `responsable_de` VALUES (2,1,1,1);
/*!40000 ALTER TABLE `responsable_de` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_discapacidad`
--

DROP TABLE IF EXISTS `tipo_discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_discapacidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_discapacidad`
--

LOCK TABLES `tipo_discapacidad` WRITE;
/*!40000 ALTER TABLE `tipo_discapacidad` DISABLE KEYS */;
INSERT INTO `tipo_discapacidad` VALUES (1,'Física o motora','Es aquella que ocurre al faltar o quedar muy poco de una parte del cuerpo.',1),(2,'Sensorial','Corresponde al tipo de personas que han perdido su capacidad visual o auditiva.',1),(3,'Intelectual','Presenta una serie de limitaciones en las habilidades diarias que una persona aprende.',1),(4,'Psíquica','Es aquella que está directamente relacionada con el comportamiento del individuo.',1),(5,'Múltiple','Deriva de una combinación de limitaciones derivadas de algunas de las anteriores deficiencias.',1);
/*!40000 ALTER TABLE `tipo_discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_dni`
--

DROP TABLE IF EXISTS `tipo_dni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_dni` (
  `id` int NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_dni`
--

LOCK TABLES `tipo_dni` WRITE;
/*!40000 ALTER TABLE `tipo_dni` DISABLE KEYS */;
INSERT INTO `tipo_dni` VALUES (1,'DNI',1),(2,'LC',1),(3,'LE',1);
/*!40000 ALTER TABLE `tipo_dni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_tramite`
--

DROP TABLE IF EXISTS `tipo_tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_tramite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `intervenciones` varchar(45) NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tramite`
--

LOCK TABLES `tipo_tramite` WRITE;
/*!40000 ALTER TABLE `tipo_tramite` DISABLE KEYS */;
INSERT INTO `tipo_tramite` VALUES (1,'Obligación','lalala','2','dsfdgf',1),(2,'Beneficio','bebebe','2','dfsg',0),(3,'Consulta','defsd','1','dsf',1),(6,'Traslado','dffdg','1','Sí',1);
/*!40000 ALTER TABLE `tipo_tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramite`
--

DROP TABLE IF EXISTS `tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tramite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fechaInicio` date DEFAULT NULL,
  `tipoTramite` int NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `estadoTramite` int NOT NULL,
  `numeroExpediente` int NOT NULL,
  `fechaResolucion` date DEFAULT NULL,
  `persona` int NOT NULL,
  `usuario` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `seguimientoTipoTramite_idx` (`tipoTramite`),
  KEY `tramitePersona_idx` (`persona`),
  KEY `tramiteUsuario_idx` (`usuario`) /*!80000 INVISIBLE */,
  KEY `tramiteEstadoTramite_idx` (`estadoTramite`),
  CONSTRAINT `tramiteEstadoTramite` FOREIGN KEY (`estadoTramite`) REFERENCES `estado_tramite` (`id`),
  CONSTRAINT `tramitePersona` FOREIGN KEY (`persona`) REFERENCES `persona` (`id`),
  CONSTRAINT `tramiteTipoTramite` FOREIGN KEY (`tipoTramite`) REFERENCES `tipo_tramite` (`id`),
  CONSTRAINT `tramiteUsuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite`
--

LOCK TABLES `tramite` WRITE;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
INSERT INTO `tramite` VALUES (2,'2022-05-26',1,'Requiere documentos',1,22,NULL,1,1,1),(3,'2020-10-12',2,'Papeleo',2,55,NULL,2,1,1),(4,'2011-11-09',1,'dasdasdas',2,12345,NULL,3,2,1),(10,'2022-06-02',1,'fghj',1,2432,NULL,1,1,1),(11,'2022-06-02',1,'drtfjuh',2,454,'2022-06-02',1,1,1),(12,'2022-06-02',1,'fghfgjhn',1,546,NULL,1,1,1),(14,'2022-06-10',2,'dfdxcgbfdc',1,5556,NULL,3,1,1),(19,'2022-06-12',2,'cvbcv',1,5577,NULL,8,1,1),(20,'2022-06-12',2,'sdfgdf',2,356,'2022-06-12',1,1,1);
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `idSigmu` int NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idSigmu` (`idSigmu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Juan','admin',1,1),(2,'Cristian','operador',2,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vinculo`
--

DROP TABLE IF EXISTS `vinculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vinculo` (
  `id` int NOT NULL,
  `vinculo` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `vigente` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vinculo`
--

LOCK TABLES `vinculo` WRITE;
/*!40000 ALTER TABLE `vinculo` DISABLE KEYS */;
INSERT INTO `vinculo` VALUES (1,'Tutor',1),(2,'Padre',1),(3,'Tío',1),(4,'Abuelo',1);
/*!40000 ALTER TABLE `vinculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-22  3:14:57
