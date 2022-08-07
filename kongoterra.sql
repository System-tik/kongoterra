-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: kongoterra
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci,
  `sous` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'Identité de KONGOTERRA_NATURE','KongoTerra est un programme initié par l’asbl Action Pour la Promotion de la Santé Communautaire, APROSAC, en sigle en collaboration avec Maison de l’Artemisia au Congo dans le but de contribuer à l’amélioration de la santé et le bien-être des populations paysannes du Kongo Central en République Démocratique du Congo à travers le développement des chaines de valeurs des plantes aromatiques et médicinales, socialement inclusives, économiquement compétitives et écologiquement résilientes','[]','2022-06-11 07:19:18','2022-06-13 09:01:03'),(2,'Vision de KONGOTERRA','Notre ambition se résume en une nouvelle vision : \n« Un Congo où les populations paysannes sont en bonne santé et prospères à tous égards dans un environnement sain » (3jean1 :2)','[]','2022-06-11 07:19:49','2022-06-13 09:03:59'),(3,'Mission KONGOTERRA','La mission de KongoTerra est de Sauver et transformer des Vies sans détruire la Terre : ','[\"Des Microfermes agroécologiques et permaculturelles pour la Bio-Production, la biotransformation raisonnée des plantes aromatiques et médicinales saines respectueuse de la santé humaine et de l’environnement « KONGOTERRA-NATURE »\", \"Des Boutiques solidaires et coopératives des plantes aromatiques et médicinales « KONGOTERRA-PHYTO&NUTRION »\", \"D’une Académie pour l’émergence des jeunes leaders-entrepreneurs sociale et solidaire pour la Santé et le bien-être « KONGOTERRA-LEADERSHIP ACADEMIA » \"]','2022-06-13 09:10:32','2022-06-23 14:43:53'),(4,'But de KONGOTERRA','KONGOTERRA vise à contribuer à l’amélioration de la santé et le bien-être des populations paysannes du Kongo Central en République Démocratique du Congo à travers le développement des chaines de valeurs des plantes aromatiques et médicinales, socialement inclusives, économiquement compétitives et écologiquement résilientes.','[]','2022-06-13 09:12:15','2022-06-13 09:12:15'),(5,' Principe ','0','[\"Le principe de santé : KONGOTERRA devrait soutenir et améliorer la santé des hommes, des sols, des plantes, des animaux, et de la planète comme étant une et indivisible. \", \"Le principe d’écologie : KONGOTERRA mène des activités basées sur les cycles et les systèmes écologiques vivants, s’accorder avec eux, les imiter et les aider à se maintenir.\", \"Le principe d’équité : KONGOTERRA se construire sur des relations qui assurent l’équité par rapport à l’environnement commun et aux opportunités de la vie.\", \"Le principe de précaution : KONGOTERRA est un cadre où les actions sont conduites de manière prudente et responsable afin de protéger la santé et le bien-être des générations actuelles et futures ainsi que l’environnement.\"]','2022-06-13 09:17:10','2022-06-23 14:38:43'),(6,'Valeurs KONGOTERRA','0','[\"Agir avec intégrité, respect, Equité, honnêteté, transparence, confiance et esprit de collaboration interprofessionnelle en matière médecine préventive et intégrative. \", \"Développer efficacement un Esprit de service et l’excellence professionnelle.\"]','2022-06-13 09:18:18','2022-06-23 14:38:55'),(7,'Engagement de KONGOTERRA','Nous nous engageons à offrir aux individus, des groupes, des communautés et des organisations des milieux rural et péri-urbain de la RDC des prestations de renforcement des capacités en nouvelles technologies de santé publique dans le respect des normes en vigueur et de  l’éthique professionnelle à laquelle nous adhérons.','[]','2022-06-13 09:19:07','2022-06-13 09:24:00'),(8,'La devise de KONGOTERRA_NATURE®','0','[\"Créativité parce qu’elle est la clé de l’innovation donc de la création de valeur en technologies de santé Publique\", \"Agilité parce que la productivité des résultats c’est aussi la vitesse, la constance de l’adaptation de \", \"KONGOTERRA_NATURE® à un contexte qui évolue de plus en plus vite, \", \"Coopération parce que l’impact de nos actions résident surtout dans la manière de combiner les différentes activités entre elles, au-delà même des murs de KONGOTERRA_NATURE®\\nS’engager dans ces trois directions exige la mobilisation et le développement de l’intelligence individuelle, collective et organisationnelle. \"]','2022-06-13 09:22:40','2022-06-23 14:43:25'),(9,'Notre équipe','Grâce au dynamisme de son équipe pluridisciplinaire, KONGOTERRA_NATURE assure un service d’une qualité exceptionnelle à ses clients. \n Cette équipe est constituée d’experts Congolais qui ont des compétences avérées en santé publique, en informatique, en statistiques et épidémiologie et Aussi, bien expérimentés dans la structuration des organisations paysannes, gestion des projets de développement, diagnostic participatif communautaire et organisationnel, élaboration des plans d\'autonomisation et plans de développement communautaire, élaboration et misé en œuvre des projets dans domaine de santé et développement communautaire.','[]','2022-06-13 09:23:31','2022-06-13 09:23:31'),(10,'Nos Partenaires','0','[\"Médecins, infirmiers et autres professionnels\", \"Les services et les institutions déconcentrés de l’Etat ;\", \"Les entités territoriales déconcentrées ;\", \"Les organisations de la société civile ; \", \"Les organisations du secteur privé (petites et moyennes entreprises);\", \"Les organisations internationales.\"]','2022-06-13 09:37:09','2022-06-23 14:43:31');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actus`
--

DROP TABLE IF EXISTS `actus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actus`
--

LOCK TABLES `actus` WRITE;
/*!40000 ALTER TABLE `actus` DISABLE KEYS */;
/*!40000 ALTER TABLE `actus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adhesions`
--

DROP TABLE IF EXISTS `adhesions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adhesions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adhesions`
--

LOCK TABLES `adhesions` WRITE;
/*!40000 ALTER TABLE `adhesions` DISABLE KEYS */;
/*!40000 ALTER TABLE `adhesions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catps`
--

DROP TABLE IF EXISTS `catps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catps`
--

LOCK TABLES `catps` WRITE;
/*!40000 ALTER TABLE `catps` DISABLE KEYS */;
INSERT INTO `catps` VALUES (1,'glodise','2022-06-12 11:34:41','2022-06-12 12:09:00');
/*!40000 ALTER TABLE `catps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_tel_unique` (`tel`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Glodi kiese','0897832041','glodi@kt.net','123456','2022-06-24 07:22:37','2022-06-24 07:22:37');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commandes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `mag_id` int NOT NULL,
  `panier_id` int NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'attente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES (1,2,1,'magasin','2022-06-27 08:15:18','2022-06-27 10:51:51');
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headers`
--

DROP TABLE IF EXISTS `headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headers`
--

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;
INSERT INTO `headers` VALUES (1,'jlgjkjrkjgrk','2022-06-10 11:03:01','2022-06-10 11:03:01'),(2,'Glodi kiese','2022-06-12 10:03:17','2022-06-21 20:21:30'),(4,'bro joe','2022-06-21 20:20:56','2022-06-21 20:21:09');
/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infos`
--

LOCK TABLES `infos` WRITE;
/*!40000 ALTER TABLE `infos` DISABLE KEYS */;
INSERT INTO `infos` VALUES (2,'Telephone','M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z|0 0 24 24','244 89 78 32 041','Tel','2022-06-10 10:39:55','2022-06-23 18:49:25'),(3,'Email','M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z|0 0 24 24','gloditp@gmail.com','Email','2022-06-10 10:40:53','2022-06-23 20:04:02'),(4,'Site web','M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9|0 0 24 24','www.kongoterra.org','Lien','2022-06-10 10:44:00','2022-06-23 20:04:19'),(5,'Adresse','M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z|0 0 24 24','Avenue Bypass n°11, Q/Salongo, C/ Lemba,  Kinshasa /RDC','Texte','2022-06-10 10:45:34','2022-06-23 20:04:34'),(6,'Facebook','M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z|0 0 24 24','Facebook lien','Social','2022-06-23 18:40:05','2022-06-23 20:03:40'),(7,'Whatsapp','M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z|0 0 448 512','Facebook lien','Social','2022-06-23 18:41:12','2022-06-23 20:06:33'),(8,'Telegram','M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z|0 0 496 512','Facebook lien','Social','2022-06-23 20:10:54','2022-06-23 20:10:54'),(9,'LinkedIn','M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z|0 0 448 512','Facebook lien','Social','2022-06-23 20:11:56','2022-06-23 20:11:56'),(10,'Twitter','M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z|0 0 24 24','www.kongoterra.org','Social','2022-06-23 20:12:32','2022-06-23 20:12:32');
/*!40000 ALTER TABLE `infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `magasins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_id` int NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasins`
--

LOCK TABLES `magasins` WRITE;
/*!40000 ALTER TABLE `magasins` DISABLE KEYS */;
INSERT INTO `magasins` VALUES (1,'Cepromor',2,'Route jardin, 33',NULL,NULL,'2022-06-13 06:18:19','2022-06-24 16:53:57'),(2,'Monishop',1,'Noki, CAmp ISP 33',NULL,NULL,'2022-06-24 16:54:52','2022-06-24 16:54:52');
/*!40000 ALTER TABLE `magasins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (37,'2014_10_12_000000_create_users_table',1),(38,'2014_10_12_100000_create_password_resets_table',1),(39,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(40,'2019_08_19_000000_create_failed_jobs_table',1),(41,'2019_12_14_000001_create_personal_access_tokens_table',1),(42,'2022_06_08_065439_create_sessions_table',1),(46,'2022_06_08_072104_create_catps_table',1),(50,'2022_06_08_072249_create_actus_table',1),(51,'2022_06_08_072329_create_infos_table',1),(52,'2022_06_08_072338_create_headers_table',1),(53,'2022_06_08_072350_create_services_table',1),(54,'2022_06_08_074138_create_villes_table',1),(55,'2022_06_08_074209_create_provinces_table',1),(58,'2022_06_08_072014_create_abouts_table',2),(59,'2022_06_08_072149_create_produits_table',3),(61,'2022_06_08_072047_create_magasins_table',4),(63,'2022_06_08_072030_create_clients_table',6),(64,'2022_06_13_064628_create_adhesions_table',7),(69,'2022_06_08_072204_create_commandes_table',9),(70,'2022_06_24_113337_create_shoppingcarts_table',10),(75,'2022_06_08_072238_create_temoignages_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci,
  `prix` decimal(8,2) NOT NULL,
  `catp_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'Malacovid','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum obcaecati accusantium atque! Pariatur, voluptate voluptas quas dignissimos labore assumenda culpa ea veritatis, reiciendis modi dolorum optio commodi debitis aperiam vero.',5.50,1,'2022-06-13 04:54:52','2022-06-22 08:02:26'),(2,'Anti transpirant','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum obcaecati accusantium atque! Pariatur, voluptate voluptas quas dignissimos labore assumenda culpa ea veritatis, reiciendis modi dolorum optio commodi debitis aperiam vero.',66.50,1,'2022-06-13 05:24:51','2022-06-22 08:02:18'),(3,'Bonbon toux','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum obcaecati accusantium atque! Pariatur, voluptate voluptas quas dignissimos labore assumenda culpa ea veritatis, reiciendis modi dolorum optio commodi debitis aperiam vero.',800.00,1,'2022-06-22 08:03:27','2022-06-22 08:03:27'),(4,'Ratatouille','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum obcaecati accusantium atque! Pariatur, voluptate voluptas quas dignissimos labore assumenda culpa ea veritatis, reiciendis modi dolorum optio commodi debitis aperiam vero.',1400.00,1,'2022-06-22 08:04:06','2022-06-22 08:04:06'),(5,'Piment doux','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum obcaecati accusantium atque! Pariatur, voluptate voluptas quas dignissimos labore assumenda culpa ea veritatis, reiciendis modi dolorum optio commodi debitis aperiam vero.',60000.00,1,'2022-06-22 08:05:07','2022-06-22 08:05:07');
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (3,'Kongo central','2022-06-13 05:38:28','2022-06-13 05:44:10'),(5,'Kinshasa','2022-06-13 05:44:24','2022-06-13 05:44:24');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'Recherche-actions en   promotion de la sante et développement ','Appui conseil et accompagnement des individus, des groupes, des communautés et des organisations des milieux rural et péri-urbain de la RDC à identifier, à analyser les problèmes de santé de la population d’un territoire, à planifier et mettre sur pied, gérer et évaluer des programmes de santé susceptibles de répondre aux besoins identifiés,\nAppui à l’Analyse et interprétation   des données statistique sous Epi-info, SPSS, WHO-Antro, ENA for SMART, Excel, …\nAppui Conseil /Assistance maîtrise d’ouvrage / expertise/formation/ conception/ maîtrise d’œuvre, réalisations clé en main dans les domaines d’expertise suivants : sante-Wash-nutrition\nAppui au renforcement des capacités organisationnelles et opérationnelles des organisations œuvrant dans le secteur de santé et développement. \nConception des cartes géographique thématique avec les logiciels SIG (arc-Gis,...)\nCoaching & Mentorat personnel, organisationnel et communautaire santé et développement ','2022-06-13 09:28:11','2022-06-23 09:12:24'),(3,'Formation & assistance  individuelle  ou collective','Formation à l’utilisation des logiciels Bureautiques\nFormation à l’utilisation des logiciels  d’analyse statistique et épidémiologique (Epi-info, SPSS, EPI-Data, Cispro, stata…) pour l’analyse des données d’une enquête en santé publique.\nFormation à l’utilisation des logiciels  de gestion d’informations géographiques ( ArcGis, Map-Info, Arcveiw, Health Mapper, QGIS...) pour la création d’une carte géographique thématique\nFormation à l’utilisation des logiciels de comptabilité générale et analytique.\nFormation à « la préparation  et à l’exécution d’une enquête en Santé Publique »\nFormation à « l’élaboration et à l’utilisation d’indicateurs qualité »\nFormation sur « la mise en place d’un système de management de la qualité » \nFormation sur les Méthodes quantitatives au service de l’observation de la santé\nFormation en « Gestion de Projets et Programmes de Développement, GPPD»','2022-06-13 09:29:34','2022-06-23 09:12:51'),(4,'Coaching & mentorat en  technologies  de sante et développement','Appui au développement un Leadership pour la promotion de la santé et développement durable\nFaire émerger pour chacun, ses talents au service d’un projet de vie ou un projet professionnel  pour la promotion de la  santé et  le développement durable \nAugmenter  la performance en promotion de la santé grâce aux  technologies de santé publique et développement durable ;\nRenforcer vos compétences dans l’accompagnement du changement en santé et développement \nCréer en vous un esprit d’équipe pour la promotion de santé et du bien-être\nVous aider à l’amélioration votre communication en santé et développement \nOrganiser les Ateliers, forums ou conférence pour la promotion de la santé et le Développement durable.','2022-06-13 09:30:39','2022-06-23 09:13:21'),(5,'Bureautique, Papeterie et Cyber Café','Saisie de Texte (TFC, Mémoire, CV, de Lettres et de Documents); \nImpressions / Photocopies / plastification/ Tirages Photos & Reproductions numériques, Scan de Documents; \nGravure de CD et de DVD/ Montage Vidéo; Reliure et Fabrication de Dossiers, Conception Cartes de Visite / Affiches / Tracts / badge…\nCréation et consultance des boîtes email;\nNavigation et recherche sur internet.','2022-06-13 09:31:40','2022-06-23 09:14:03');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('o71X7FpgSMAAQPGY9AmK6P4Z1DYAjNioTuTvjlyz',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjNCaGY5SjR3dzV2RW9ZRm1sNnBpQXZFVkVXWHU4cWhLZ3VsOXBkZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZW1vaWduYWdlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1659215756);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcarts`
--

DROP TABLE IF EXISTS `shoppingcarts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcarts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int NOT NULL,
  `produits` json NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcarts`
--

LOCK TABLES `shoppingcarts` WRITE;
/*!40000 ALTER TABLE `shoppingcarts` DISABLE KEYS */;
INSERT INTO `shoppingcarts` VALUES (1,1,'[{\"idp\": 2, \"qte\": 5}, {\"idp\": 1, \"qte\": 13}]','1','2022-06-27 07:48:53','2022-06-27 08:15:18');
/*!40000 ALTER TABLE `shoppingcarts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temoignages`
--

DROP TABLE IF EXISTS `temoignages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temoignages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` text COLLATE utf8mb4_unicode_ci,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enceinte` tinyint(1) NOT NULL DEFAULT '0',
  `maladie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `methode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signe` json NOT NULL,
  `center_ttt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescripteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_prescri` tinyint(1) NOT NULL,
  `date_t` date NOT NULL,
  `ttt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_ttt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage` int NOT NULL,
  `mode_prepar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_prise` int NOT NULL,
  `nb_jour` int NOT NULL,
  `evolu_temp` json DEFAULT NULL,
  `evolu_paras` json DEFAULT NULL,
  `effet_ind` json DEFAULT NULL,
  `rechute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_rechute` date DEFAULT NULL,
  `dep_res` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temoignages`
--

LOCK TABLES `temoignages` WRITE;
/*!40000 ALTER TABLE `temoignages` DISABLE KEYS */;
INSERT INTO `temoignages` VALUES (1,'lflgklfgf',NULL,'gflkflk',';f;fl;f;fl','kflkfl','fkfjkfj','kflkfl','fkjfkf',20,'F',1,'khkhk','khk','[\"Douleurs abdominales\", \"Fièvre\"]','lnkj','ljj',1,'2022-08-04','ljjjjk','Plante fraiche',5,'kgggh',5,5,'[\"4\", \"5\", \"\", \"\", \"\", \"\", \"\"]','[\"5\", \"5\", \"\", \"\", \"\", \"\", \"\"]',NULL,'non',NULL,'lkhlhlh','lhkj','2022-07-29 16:59:11','2022-07-29 16:59:11'),(2,'iwiwiw','yeyeye','dewfe','fdfdf','ffsf','sfsf','sss','6262',12,'F',0,'erer','wwrwr','[\"Courbatures\"]','wrwrw','frwrwr',1,'2022-07-14','irrii','Poudre',2,'rerer',2,23,'[\"2\", \"3\", \"4\", \"4\", \"4\", \"4\", \"4\"]','[\"4\", \"4\", \"4\", \"5\", \"5\", \"56\", \"7\"]',NULL,'oui','2022-07-13','eqeqeqe','sgdgdgd','2022-07-29 17:37:23','2022-07-29 17:37:23'),(3,'iwiwiw','yeyeye','dewfe','fdfdf','ffsf','sfsf','sss','6262',12,'F',0,'erer','wwrwr','[\"Courbatures\"]','wrwrw','frwrwr',1,'2022-07-14','irrii','Poudre',2,'rerer',2,23,'[\"2\", \"3\", \"4\", \"4\", \"4\", \"4\", \"4\"]','[\"4\", \"4\", \"4\", \"5\", \"5\", \"56\", \"7\"]',NULL,'oui','2022-07-13','eqeqeqe','sgdgdgd','2022-07-29 17:38:09','2022-07-29 17:38:09'),(4,'iwiwiw','yeyeye','dewfe','fdfdf','ffsf','sfsf','sss','6262',12,'F',0,'erer','wwrwr','[\"Courbatures\"]','wrwrw','frwrwr',1,'2022-07-14','irrii','Poudre',2,'rerer',2,23,'[\"2\", \"3\", \"4\", \"4\", \"4\", \"4\", \"4\"]','[\"4\", \"4\", \"4\", \"5\", \"5\", \"56\", \"7\"]',NULL,'oui','2022-07-13','eqeqeqe','sgdgdgd','2022-07-29 17:38:15','2022-07-29 17:38:15'),(5,'ieieiei','ruru','wwjwj','eieioe','j','oieieio','jj','ieoeie',12,'F',0,'kddk','lrktlel','[\"Douleurs abdominales\"]','tetete','tffg',1,'2022-07-21','ututu','Poudre',2,'fdfd',3,4,'[\"1\", \"3\", \"4\", \"5\", \"6\", \"7\", \"8\"]','[\"23\", \"4\", \"5\", \"7\", \"8\", \"8\", \"8\"]',NULL,'oui','2022-07-12','weeqd','etetet','2022-07-29 17:39:57','2022-07-29 17:39:57'),(6,'ieieiei','ruru','wwjwj','eieioe','j','oieieio','jj','ieoeie',12,'F',0,'kddk','lrktlel','[\"Douleurs abdominales\"]','tetete','tffg',1,'2022-07-21','ututu','Poudre',2,'fdfd',3,4,'[\"1\", \"3\", \"4\", \"5\", \"6\", \"7\", \"8\"]','[\"23\", \"4\", \"5\", \"7\", \"8\", \"8\", \"8\"]',NULL,'oui','2022-07-12','weeqd','etetet','2022-07-29 17:42:26','2022-07-29 17:42:26'),(7,'ieieiei','kdkdk','kdkdk','o','kll','opop','kkk','opm',12,'F',0,'ffdf','lmffm','[\"Eruption cutanée\", \"Nausée\"]','fdfdf','lklfmldk',1,'2022-07-05','dgdgd','Poudre',2,'dfshk',3,23,'[\"2\", \"34\", \"5\", \"5\", \"6\", \"8\", \"7\"]','[\"233\", \"4\", \"5\", \"56\", \"6\", \"5\", \"7\"]',NULL,'oui','2022-07-19','jknkd','jfksjflsf','2022-07-29 17:44:28','2022-07-29 17:44:28'),(8,'kfhsfk','hkjhjhk','eqwq','ohoh','ljlj','nmn','ojuoj','jljoj',12,'F',0,'sdsd;',';nldnl','[\"Anoxerie\"]','ssr','lhflshfk',1,'2022-07-13','sfsfs','Poudre',3,'sfhsf',2,5,'[\"2\", \"4\", \"5\", \"5\", \"6\", \"6\", \"5\"]','[\"7\", \"\", \"\", \"\", \"\", \"\", \"\"]',NULL,'oui','2022-07-18','sdd','fdfdgf','2022-07-29 17:46:18','2022-07-29 17:46:18'),(9,'vggg','www.youtube.com/watch?v=dRGn2PYy4Gk','yu','bn','tyuty','hvhvh','yyu','15226',23,'F',0,'yeue','ohifbf','[\"Frissons\"]','ffsfs','nlfsnfs',1,'2022-07-07','leejbje','Plante fraiche',3,'jhbjdh',2,14,'[\"11\", \"\", \"\", \"\", \"\", \"\", \"\"]','[\"\", \"\", \"\", \"\", \"\", \"\", \"\"]',NULL,'oui','2022-07-19','fsfsfs','bmsbfsn','2022-07-29 17:55:27','2022-07-29 17:55:27');
/*!40000 ALTER TABLE `temoignages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'glodi','glodi@kongo.org',NULL,'$2y$10$7Lq0Fun3Ha6ScQNdnjNYFuUQNs0tA6ngWc6s8W.pHzCfDV2pwscE.',NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-10 10:05:18','2022-06-10 10:05:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `villes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpro` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (1,'Mbanza ngungu',3,'2022-06-13 05:41:17','2022-06-13 05:41:17'),(2,'Kisantu',3,'2022-06-13 05:44:46','2022-06-13 05:44:46');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-07 18:01:30
