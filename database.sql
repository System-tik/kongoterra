-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: kongoterra
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sous` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (5,'Notre Identité','est un Programme de Valorisation des plantes Médicinales et de développement de la Phytothérapie Clinique Intégrative en RDC.\nCe programme est issu d’un partenariat entre les associations, La Maison de l’Artemisia , Action pour la promotion de la santé communautaire (Aprosac) et Avec le centre de Recherche en Phytothérapie au Congo (Cerphytoco)','[]','2022-06-13 09:17:10','2023-01-24 01:25:05'),(26,'Notre Vision','Kongoterra compte devenir une figure de proue dans la valorisation des plantes médicinales et le développement de la  phytothérapie clinique intégrative en RDC.','[]','2022-09-18 19:16:04','2023-01-16 16:45:06'),(28,'Notre Mission','Nous offrons aux plus grands nombres des populations vulnérables l’opportunité d\'avoir accès aux services de Phytothérapie Clinique intégrative et aux produits de santé Naturels à base des plantes médicales localement disponibles qui ont fait leurs preuves dans l’usage traditionnel et que la médecine actuelle peut confirmer comme outils de base de première ligne dans la prise en charge des Malades.\nCette mission se décline en 5 points :','[\"Encadrer le développement des chaines de valeurs des plantes aromatiques et médicinales socialement inclusives, économiquement compétitives et écologiquement résilientes au Kongo Central en République Démocratique du Congo\", \"•\\tFormer les médecins, de pharmaciens et professionnels de santé du Kongo Central et République Démocratique du Congo en général dans la pratique de la phytothérapie clinique intégrative et dans plusieurs disciplines de la santé publique.\", \"Offrir des services de prise en charge de qualité en phytothérapie clinique intégrative de santé à la communauté.\", \"•\\tMener les travaux de recherche sur les plantes médicinales et la phytothérapie clinique intégrative afin de contribuer à la résolution des problèmes de santé qui se posent à la population.\", \"Eduquer et sensibiliser la population du Kongo en particulier et du Kongo central en générale sur l’usage cohérent des plantes médicales qui ont fait leurs preuves dans l’usage traditionnel et que la médecine actuelle peut confirmer.\"]','2022-09-19 10:08:55','2023-01-16 16:49:29'),(42,'Nos Valeurs ','Kongoterra est un vaste réseau d’hommes et de femmes qui travaillent avec bienveillance, confiance, et en toute transparence. Guidés par des valeurs communes de partage, de fraternité et de justice, nous avançons ensemble dans le respect de la Terre et de l’Homme. ','[]','2023-02-02 22:11:19','2023-02-02 22:11:19'),(43,'Notre engagement','Kongoterra s’engage à contribuer à la revalorisation et à la réintégration dans le système de santé en RDC, des produits de santé naturels à base des plantes médicales localement disponibles en RDC et qui ont fait leurs preuves dans l’usage traditionnel et que la médecine actuelle peut confirmer comme outils de base de première ligne dans le traitement quotidien de malades avec une approche Endobiogénique.','[]','2023-02-02 22:12:38','2023-02-02 22:12:38'),(44,'Notre équipe','Kongoterra fédère de nombreuses compétences pluridisciplinaires que la santé, la biologie-médicale, la pharmacie, l’agronomie, l’entrepreneuriat social, le juridique, le journalisme, l’informatique…\nGrâce au dynamisme de son équipe pluridisciplinaire, Kongoterra assure un service d’une qualité exceptionnelle pour la santé et le bien-être des populations vulnérables.','[]','2023-02-02 22:13:54','2023-02-02 22:13:54');
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
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `lib` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catps`
--

LOCK TABLES `catps` WRITE;
/*!40000 ALTER TABLE `catps` DISABLE KEYS */;
INSERT INTO `catps` VALUES (1,'Alimentaire','2022-06-12 11:34:41','2022-09-16 07:57:28'),(3,'Cosmetique','2022-09-16 07:57:42','2022-09-16 07:57:42'),(4,'Tisane','2022-09-17 03:30:44','2022-09-17 03:30:44');
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
  `noms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_tel_unique` (`tel`),
  UNIQUE KEY `clients_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'glodi','0897832041','glodin.kiese@gmail.com','$2y$10$aMk5RPJPTA7GcRWbFyf5e.GUh3DzbGXRdCEN61VNitnTKJD0wTJsO','2022-09-11 17:55:29','2022-09-11 17:55:29'),(2,'Yyyy','0899878656','F@gmail.com','hhhhh','2022-09-13 20:23:58','2022-09-13 20:23:58'),(3,'Hiram','0899969802','hiram@gmail.com','hiram','2022-09-17 10:31:13','2022-09-17 10:31:13');
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
  `etat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'attente',
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
INSERT INTO `commandes` VALUES (1,1,1,'ok','2022-09-11 17:57:08','2022-09-11 17:59:38');
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
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `headers` VALUES (2,'Glodi kiese','2022-06-12 10:03:17','2022-06-21 20:21:30'),(4,'bro joe','2022-06-21 20:20:56','2022-06-21 20:21:09');
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
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `infos` VALUES (2,'Telephone','M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z|0 0 24 24','243821085047','Tel','2022-06-10 10:39:55','2022-09-15 16:17:40'),(3,'Email','M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z|0 0 24 24','info@kongoterra.com','Email','2022-06-10 10:40:53','2022-09-15 16:18:30'),(4,'Site web','M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9|0 0 24 24','www.kongoterra.com','Lien','2022-06-10 10:44:00','2022-09-15 16:19:10'),(5,'Adresse','M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z|0 0 24 24','Avenue Bypass n°11, Q/Salongo, C/ Lemba,  Kinshasa /RDC','Texte','2022-06-10 10:45:34','2022-06-23 20:04:34'),(6,'Facebook','M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z|0 0 24 24','Facebook lien','Social','2022-06-23 18:40:05','2022-06-23 20:03:40'),(7,'Whatsapp','M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z|0 0 448 512','https://wa.me/243899682734?text=Bonjour%20,%20www.Kongoterra.com%20m\'interesse%20et%20j\'aimerais%20en%20savoir%20un%20peu%20plus%20de%20votre%20part','Social','2022-06-23 18:41:12','2022-08-15 02:37:53'),(8,'Youtube','M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z|0 0 16 16','https://www.youtube.com/watch?v=SJifPTkjaxo','Social','2022-06-23 20:10:54','2022-08-15 02:24:24'),(9,'LinkedIn','M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z|0 0 448 512','Facebook lien','Social','2022-06-23 20:11:56','2022-06-23 20:11:56'),(10,'Twitter','M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z|0 0 24 24','www.kongoterra.org','Social','2022-06-23 20:12:32','2022-06-23 20:12:32');
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
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_id` int NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magasins`
--

LOCK TABLES `magasins` WRITE;
/*!40000 ALTER TABLE `magasins` DISABLE KEYS */;
INSERT INTO `magasins` VALUES (1,'Kongoterra Solidarity Market Mbanza-Ngungu',1,'Avenue Prison N° 427/A , Réf route Nsona nkulu/ en face de l\'école nkudi ya ngemba',NULL,NULL,'2022-06-13 06:18:19','2022-09-17 03:09:35'),(2,'Kongoterra Phyto&Nutrition',2,'Avenue Kasavubu N°15, Quartier Wombo',NULL,NULL,'2022-06-24 16:54:52','2022-09-17 03:00:04'),(3,'Maison de l\'Artemisia de kisantu',2,'Avenue de la mission n° 16, Quartier kimbondo, réf Centre de santé de la Gare','','','2022-09-17 03:13:50','2022-09-17 03:13:50'),(4,'Boutique solidaire de phyto&Nutrition',3,'Avenue Bypass N°11,Q.Salongo,C/Lemba,réf en face du Garage Lokole','','','2022-09-17 03:18:22','2022-09-17 03:18:22'),(5,'Pharmacie Kaloma',4,'Avenue du Coin du Marché, Quartier Virunga, Réf station virunga','','','2022-09-23 11:34:04','2022-09-23 11:35:36'),(6,'Maison de l\'Artemisia Petit Nord-Kivu',4,'Avenue Kindu II N° 05, Quartier Mabanga','','','2022-09-23 11:37:05','2022-09-23 11:37:05');
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
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (37,'2014_10_12_000000_create_users_table',1),(38,'2014_10_12_100000_create_password_resets_table',1),(39,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(40,'2019_08_19_000000_create_failed_jobs_table',1),(41,'2019_12_14_000001_create_personal_access_tokens_table',1),(42,'2022_06_08_065439_create_sessions_table',1),(46,'2022_06_08_072104_create_catps_table',1),(51,'2022_06_08_072329_create_infos_table',1),(52,'2022_06_08_072338_create_headers_table',1),(54,'2022_06_08_074138_create_villes_table',1),(55,'2022_06_08_074209_create_provinces_table',1),(58,'2022_06_08_072014_create_abouts_table',2),(61,'2022_06_08_072047_create_magasins_table',4),(63,'2022_06_08_072030_create_clients_table',6),(64,'2022_06_13_064628_create_adhesions_table',7),(69,'2022_06_08_072204_create_commandes_table',9),(70,'2022_06_24_113337_create_shoppingcarts_table',10),(75,'2022_06_08_072238_create_temoignages_table',11),(78,'2022_06_08_072149_create_produits_table',12),(79,'2022_06_08_072350_create_services_table',13),(80,'2022_06_08_072249_create_actus_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',3,'API TOKEN','0d43c30e1a24a7ad0f26453485054f06dcca24e65cfab93d89e3671c681e7791','[\"*\"]',NULL,'2022-09-02 15:27:24','2022-09-02 15:27:24'),(2,'App\\Models\\User',4,'API TOKEN','b95d1c3fb2b9112e15c050d8a2a534e08826f011fcc5f102a141f41ebc603752','[\"*\"]','2022-12-03 18:12:40','2022-09-02 15:32:23','2022-12-03 18:12:40');
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
  `images` json DEFAULT NULL,
  `prix` decimal(8,2) NOT NULL,
  `catp_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'Miel Pure : 500ml','Composition :\nMiel des ruches multiflore renferme du sodium, du potassium, du calcium,du fer,des protéines;\ndes vitamines (A,B1,B2,B3...D,K) et divers sucres (glucose,fructose,maltose).\n\nPropriétés :\nLe miel est une source alimentaire d’antioxydants.\nil a une activité prébiotique, un pouvoir antibactérien, un effet anti-inflammatoire, antiseptique et possède un indice glycémique plus faible.\n\nconseils d\'utilisations :\npeut se mélanger avec d’autres boissons tel que le thé ou la tisane de votre choix pour vous procurer un bien être corporel selon le besoin.\n\n','[\"https://www.kongoterra.com/storage/produits/1/0.png\", \"https://www.kongoterra.com/storage/produits/1/1.png\"]',10000.00,1,'2022-08-29 10:17:04','2022-08-29 10:17:04'),(2,'Tisane d\'Artemisia Bio :40g','jjjj ','[\"https://www.kongoterra.com/storage/produits/2/1.png\", \"https://www.kongoterra.com/storage/produits/2/0.png\", \"https://www.kongoterra.com/storage/produits/2/1.png\"]',6000.00,4,'2022-08-30 01:53:25','2022-09-19 13:40:38'),(3,'Poudre d\'Hibiscus ou Bissap bio','jjjjjjj','[\"https://www.kongoterra.com/storage/produits/3/0.png\", \"https://www.kongoterra.com/storage/produits/3/1.png\", \"https://www.kongoterra.com/storage/produits/3/2.png\"]',8000.00,1,'2022-08-30 01:54:52','2022-08-30 01:54:52'),(4,'Clou de Girofle Bio','hhh','[\"https://www.kongoterra.com/storage/produits/4/0.png\", \"https://www.kongoterra.com/storage/produits/4/1.png\"]',10000.00,1,'2022-08-30 01:55:58','2022-08-30 01:55:58'),(5,'Poudre de moringa : 100g','fff','[\"https://www.kongoterra.com/storage/produits/5/0.png\", \"https://www.kongoterra.com/storage/produits/5/1.png\"]',8000.00,1,'2022-08-30 01:58:19','2022-08-30 01:58:19'),(6,'curcuma bio : 100g','jj','[\"https://www.kongoterra.com/storage/produits/6/0.png\", \"https://www.kongoterra.com/storage/produits/6/1.png\"]',8000.00,1,'2022-08-30 01:59:20','2022-08-30 01:59:20');
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
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (3,'Kongo central','2022-06-13 05:38:28','2022-06-13 05:44:10'),(5,'Kinshasa','2022-06-13 05:44:24','2022-06-13 05:44:24'),(6,'Nord Kivu','2022-09-23 11:34:59','2022-09-23 11:34:59');
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
  `sous` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Kongoterra-Bio-Nature (KBN)','Développer et structurer des chaines de valeurs des plantes médicinales et d\'autres produits de santé naturels dans la province du Kongo central selon les principes de l’économie sociale et solidaire (socialement inclusives économiquement compétitives et écologiquement résilientes) tout en garantissant la qualité de façon durable.','[]','2022-09-15 16:36:56','2022-09-15 16:36:56'),(2,'Kongoterra-Leadership Académie (KLA)','Favoriser l’émergence d’un vivier des jeunes leaders-entrepreneurs médico-sociale et solidaire engager dans la diffusion raisonnée des plantes médicinales et d\'autres produits de santé naturels respectueux de la physiologie et de l’environnement en RDC','[]','2022-09-15 16:38:56','2022-09-15 16:38:56'),(3,'Kongoterra - Health Education (KHE)','Éduquer et sensibiliser la population du Kongo central en particulier et de la République Démocratique du Congo en générale sur l’usage cohérent des plantes médicinales et d\'autres produits de santé naturels qui ont fait leurs preuves dans l’usage traditionnel et que la médecine actuelle…','[]','2022-09-15 16:49:03','2022-09-15 16:49:03'),(4,'Kongoterra Solidarity Market (KSM)','Améliorer l’accès des plantes aromatiques et médicinales et produits locaux de santé et de Nutrition made in DRC aux marchés à travers la création des Boutiques solidaires et coopératives de Phyto&nutrition.','[]','2022-09-15 17:02:00','2022-09-15 17:02:00'),(5,'Kongoterra Integrative Medicine (KIM)','Permettre au plus grand nombre des patients d’avoir accès aux soins de santé à travers la prise en charge globale intégrative et personnalisée selon l\'approche endobiogénique.','[]','2022-09-15 17:03:22','2022-09-15 17:03:22'),(6,'Kongoterra - Research Laboratory (KRL)','Stimuler la créativité scientifique en développant toute la dynamique de recherches et de publications pour continuer alimenter le dossier scientifique à travers les études et recherches scientifiques sur les plantés médicinales et autres produits de santé naturels ainsi que sur la phytothérapie et la phytonutrition.','[]','2022-09-15 17:05:14','2022-09-15 17:05:14');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `sessions` VALUES ('0PRw6vFrRYScPSM5Wzy2b93OeoNtFpuczYq3Go6p',NULL,'169.255.204.16','Mozilla/5.0 (Linux; Android 12; SM-A137F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.5359.128 Mobile Safari/537.36 OPR/73.0.3844.69695','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmlzU0REaWVoSVRidDBZS1ppdVVmQkdabFVwQ1RUQU1yUEt6V20ycSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675771497),('1VneyjGkeNSB3rHEAi8D175VMSECZLj4AuWucqvA',NULL,'192.241.198.13','Mozilla/5.0 zgrab/0.x','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVZhbUloTVdPaGh5WjVYemVUSXFXZ3RoU25lQUhVeEE3YUFjbTBqdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675751351),('2GpqbBakYUyZS7H7CXCo9TLbmICcryANsTAIOBeY',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidW1rbTBVOXZpSENvd0J4cnE2Y0U4dnl1SVR5THB5Y0ZYeTI0R1BSYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675744503),('4jatfC3GEZPAGFRd45hExjVDhi449sYYnsN6ta1R',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2wwdVNrMmlqdnpTd1o5THM4d0VZZGtjeVBFMnJtNk1OaENrend2eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675761720),('4KbPjI5DoXe8p69149cBqw4qDRuamY0jmqnFMVik',NULL,'102.223.130.103','Mozilla/5.0 (Android 10; Mobile; rv:109.0) Gecko/110.0 Firefox/110.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFRlaHFwcVBaak1yNUFRSkc4VG9rV2k5UXR4dEsyalg4WG9BSTdUZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tL2Fib3V0LzI4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675741118),('5xcu8khcY5tocX0B9Hsg88eiN1bRPIsMHPRPzzrg',NULL,'34.78.6.216','python-requests/2.28.2','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWU40eUNRWUc4b1Azc2RaY2p5WDdWWlpKdk5ZcEtyTUZVUDloNzVnMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675759537),('6C45w3qTB4lJiojRse4C0GCg1AmFHRdZSPsOMl83',NULL,'38.242.128.76','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiakVPTURORXJKMnNlUHE2aHlZWXRwb1FYSzhmYXFPOVBDSFpUc0ZYRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675783986),('6ceYLylcNRfMiZX6kAkNA5jQx938qeEuGzxujAN5',NULL,'168.80.174.2','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4 240.111 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTdGRHA4WHlydFZaRDRwS29NSUVtSEIySzI2ek5LaU43V1VhQ2ZqbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675799495),('6JzT2izbAYN6ebReTnKY64y3pDNkQTD5VSUpS0bI',NULL,'102.223.130.103','Mozilla/5.0 (Android 10; Mobile; rv:109.0) Gecko/110.0 Firefox/110.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWJqVXNSYWo1NzZ3YlFHdUhpVm9rYndzWXFHaVhSc3NxUDM4TTE3byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tL2Fib3V0LzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675741115),('6yDhFHw8RjBLe1SzRgjrjPnelD41qehrJqcSoDX9',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3drWjBET2JoMURTaFdUaUdXOWFmdWV5UFdteXNLVEtoODVyTlppVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675781966),('77aaXWkeQQjRsPAOfPcbIEPXrV7SZnNRHUFCyyM7',NULL,'109.206.243.235','python-requests/2.28.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXJZdFBseEFZcFJEZ0hzU3FaVGM5UTNlakpJRWwyOFZaYjdpR3h4UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675778732),('7iuZBcnfOSE3p5TRAWoYTXRfIcys1KTvivcCUmYF',NULL,'54.183.146.26','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXdkdXdzZWlFbVBuVThlMGw2dDg0bTA1aXFHTEcwU0NtMUR2Y1VGSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675801804),('94TzKKEXCBfl15C1ueVSfE7XijpFM11fC6zw07jU',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlFtdkt0dXpsOHF5TGY5QzlLOExkUEdEOUYzTEtKYnVIajZxZ2NuUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675761684),('9REFjqaXCGGeADXY6hM7E0UXeGAbALJz7Pcm9XSR',NULL,'3.252.156.85','Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjJHTW0xMDhPVmpGb1BOVklXcENIOFVqUDl0Z1F4dndna1U1cm1oaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675783396),('9tBPjihWh5DLNzhnAcz65qdI0ZokA5VLYt31EvMR',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTJIeFZTaFJwbzJYZ2JEZ3F6T0hVd3JPQTNhakx4OEJlQWNXYldKeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675723210),('baF3SheTOVyFfIJ8aACaGbWyNGkBBPveVLF17ldN',NULL,'42.83.147.34','Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko)Chrome/74.0.3729.169 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3ZGUEo2WW1LQjVkOHlGMWFYWmo1NXQ4VXVONkxGU056ZEFYb095byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675709733),('bFooUa05hct7KmSyswxMbBYynwUkRVRYgccul0ZH',NULL,'87.236.176.252','Mozilla/5.0 (compatible; InternetMeasurement/1.0; +https://internet-measurement.com/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzZ5Y2xlNzJWc01nTmpJY1pBVkNKbEZDMXEzRFY3RnV3WERmenJGRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675728955),('bhoQN2rtkXSwHsXYJiu4BBfPBVcTsMwKSY3ohtYb',NULL,'66.249.66.41','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.101 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUFMRFZGYTlyb29SRkhTWUtVOExBNU9YZzJ5UFkyc2dOTVRRZVJ5dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675726195),('bR1EYtSpfXdBdWE53qnU0TltjTBYvSrIWYX05y5L',NULL,'51.222.253.2','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoibmNrOEZ4VmpLMm56SndaZ2RjNlFGVVVwYkZSWnJ2cFRta2QyQXBYbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675706473),('chHkW9PoER2Dya7g7vg3AlFq9gt9RE5njtQTXBPm',NULL,'180.149.125.159','Mozilla/5.0 (Windows NT 5.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUNHS05pSkpPU3I5NXFYSDJLQ0c1dXozT0l5bmdyRzJVRGhPNnhFaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675798082),('cRwQC00okE1KKdH7b1ItHIEsV5CNSCUqv1UXFdnJ',NULL,'38.122.112.147','Mozilla/5.0 (Macintosh; Intel Mac OS X 11_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1 Safari/605.1.15','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXVDNlZ0emlvODlnOG1rWGFGclN1d1kxWjdzYmJHRDJWcWhGczJ0eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675716363),('dUgZrqInmLOgfnS3cEnqTRsolsvJxU99dxTg2GRu',NULL,'141.98.11.39','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2M5QUt1R3RpM0RBbWE4anBiVjdkcFl1OWpqVWZPQVl1U3J3S2wyVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675792739),('DvkdOKDY9enDHlQhTpHzCr101iHs4G9s9VsCZfzZ',NULL,'168.80.174.2','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHF3YU9mcjNPaG1iSXNJTUtqMFlMVUh4c0VaREpUdXhINUVtNkppViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675799136),('eNHj5xYZnbUQQebDmFU9yhinCikaOCMhYvz9mh5p',NULL,'20.74.166.164','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiU2VHMDhHM1BpcEh0UXZuVXJHTDh6NWxGUFJ0OFVhRXNGY3Y4VnY5diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675801668),('eUjInKZ66W47QnHaquqwnRi2xpSDS5cSmgNv8rjS',NULL,'196.225.144.224','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnBGTGdxZnk2NWNuQXV5bUlSaTFUaFoyV3hObWR2M1hDVE5ZdnFhQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675767278),('fPYr7eyQ4SCv447dciAnySM3Ks8MetqfF30g0F0Q',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkpCa2drUGh4bzYxTWNzajFkbWFVVXdEWkE0OVhua3hRODAyRUcxZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675747308),('FRkIfbeyYeKDGiNdLct4n9u6Ja7E4EaCEBrp1JNF',NULL,'205.210.31.56','Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWZCMlFzRnVKWEtQMjZEaUQ0dnlqRkRyZmhjMFRlZVNnYmphaE12ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675776728),('IrvTScqM4q3kNzoCKvqjf4ZuyRaNROGBxRKZnb5M',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMENselloSkNqWnRTQ21FbFk5Ulh3a0hoU055MTdySXJhaUVNbEtFSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675776273),('jcUIgYaWEP1obQ14BB225ulvZku5UahqGTrdx4yA',NULL,'163.172.176.137','Mozilla/5.0 (Linux; Android 7.0; Moto G (5) Plus Build/NPNS25.137-35-5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.107 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGk2QkhNSUhJNEp2SVdmaUpiWUd6WDN4SkszUXFkMUNkZkRMQ3ozMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675794813),('jdc3nU90fyEGXWnyS2YmGhUUUGOvo7oCKl4w5D4r',NULL,'113.142.141.105','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlQwNDZmQUtTVUhtUzVkR3dFNUtQcTZJNTVZT2tlT2JPUTA5VjMybSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675786816),('KaiHwJeugdOULLqHSZTPbVYOuPczHVlRnI86PhxK',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUtzbkZ3NTAyNkVkWTB1aWNJNU1mNTdFMTJjejFsSG9mWTVRdFZ3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675724498),('KbfT7bmtRSYEFt4q3lRfqwM8VUHkttKxwIzXoU7L',NULL,'64.62.197.118','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFpDSWpUY3FxbUxjS1hkMlY3ZGkwWndiZmh1cVlvY21pM0hmMHhDZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675742350),('khGh8NOnn4Yfbb5oQPKIaq38o9TYs886ONqkQ2D1',NULL,'128.1.138.230','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0t5V1Vya3VMbllQUzFNeVBqVnBGZmhyaGt2MDRHT2lUdFJ2QWplTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675742696),('KMo7A8UA34TkEmAVIMMEGrcW03Zsn0fuRniWICu1',NULL,'143.110.222.166','Mozilla/5.0 (iPhone; CPU iPhone OS 16_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.1 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWW5BdE85QXpLYVN0ZG9GWkNhQjA4UHZIWlZTR1FBc3Y1Uzd0Z3V6ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675717703),('Kz6yYssX72vOelH0V7lKFFdjQQmceDUGypjuZceu',NULL,'209.141.36.112','Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUR3SFYyWUpTSTVGYjFtTzNERkFHUUNGcmxRTDR6aGhXbFUxOW9vMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675704523),('kzOxTnwTU2bjh1BdpOvHxycfoThIEorUF66LWsQS',NULL,'51.222.253.9','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGZieXR0cW53ajczT0tGRWQwM2tBdE9WM0xJVmNaN2pnZEpHbmFSeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675787621),('l3HjjFDVgTdYwVcqPdHh2gxt9d7xPQ3Qn77BjfFb',NULL,'108.136.39.127','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3dzT1BjNzhoZW1uYzNOWGV2YWhyaXRUVmRPdjBhSnJiOVpQWmxXbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675727301),('m0g3znLDjToIadPpdDqP90k2UoaOYhxgwKBWtSCs',NULL,'35.160.229.169','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoibVdBYUtOYmNSYkhyNXhFSElLdlZkRG0yZ1VuN1Z3UkRGN3htU3VMdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675717981),('meO1nyvAHlWDZnK3fg8lpDZpXn9hoaVeMj9bxubX',NULL,'66.249.66.9','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.101 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNG9vQjRRZEFQRWc2QzZNYVhrMmI0VVdoc0NrWW50Zm1QRVdabmdBUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675720072),('meXDP1DvDxmycc5hQjOpUgrYDHNY4vHSQcX0tCVF',NULL,'31.13.127.9','facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlVta1Qzb2hHNlVBMk1XZXNZWmQycXppcTc3OFM5WGRwMlBsTFpTSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675767016),('MKeYZhaPx23hoyv2x9Vuy3goOdty06yV16Y9zoC5',NULL,'209.141.55.120','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoieE51M2dNMTJOUzg3WHlCUDBRUTlNNm5veGpSUEhoN0l1NTkxVmkzYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675704519),('MOAd5Vla0nidFdA8l6N6q8hUCpt3wIuhvQjbwDPy',NULL,'65.154.226.169','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/104.0.5112.101 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG1pTmIxN1pSbWo1VTgyY0l0UVdwaGxmSWFlbGNCM2tNaWdmcU56ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675759398),('MUi27VcvebXHVfJqybJqFUxmsrz9k5Cw2xKuTSxQ',NULL,'167.94.138.63','','YTozOntzOjY6Il90b2tlbiI7czo0MDoidHpCWHFQc0E2RmRoTnVoVnBkeDBNNXBmeVMyYnYwVXVMcWNVcWhINCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675711859),('n0tx2lW6j465l6mLqDTpkpAWOxQBavtlrejfXV0k',NULL,'89.248.172.16','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDQyRHViempSMTVwaUhWeUZkUlJWcmR6T2I4NmxaYVZES3BEeGV2eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675770618),('n3JsojBeRSgQjv3gLBlMrTzyBvJ4VnPnnLsr2RsD',NULL,'143.244.140.131','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG03NVZTUUI5OGJ4QnMzd1Y1UE9obWxJd1Q1OUhUNVhKak4wdkZaayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675706230),('N5kAciHvrX15cqetXPd6ckfm1WrH8bAz53UcwqMH',NULL,'51.222.253.20','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoia3gxeFAwWnYzRG9URkgzUFJrdXBGaHN5Z2Z5VTF5WVFRVEZGYUVIeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvNDQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675735642),('NcT3qHjqzR2peG0xW7s8yIQiHYnVXfqW7OnZGV00',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVhWSzRjdkIyb2JKaXRCeWJrUDlMbjhZalBWTkdJYk1Ed1hoTTJPVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675734521),('Nj8KG6ZMla00HHi6k9ErtfH9OdnFYh5nkZWYSfww',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzJqSG5abW5oQ2l4Mzd6anQ3aDRtZUl2ODg2cTI1Y0Y2bndPYXhGQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675792659),('Nw84rIFJnIJi7Ol5K4vuVkNh0vfNeJqq1xoTVgXI',NULL,'165.227.52.251','P3P Validator','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkRENjkxU2VIMlNSVnB4aUJQSlBVTGVnN284am9ITEd3YmhaZ2RLWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675763641),('o5jJaFUDOI8xOWuC1sUoHCcxiqb4aIwoWItIJVzy',NULL,'196.225.144.224','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT010TUc4QkpWRDFqOEE3b1lrdVFRNWFZQkNLYXROWHlLMHRPWk1sVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675786885),('OM3qjpm8yLCMV3vnNeikfbApciTaumx9GcQQdPNy',NULL,'17.241.219.24','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlBrSnRJcFdrS1I4MjVVcWVvQVFqN3hPWjRxU280eUhiNFF0bWdoZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvMjYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675745921),('ooZXLedvWlWEpFyMUVznfF8Zw3j1FtvIHyxw7fhp',NULL,'152.89.196.211','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXFBUkh5NVFoZEdNYVBwQTRGczFFU0U4WWkybmhwM2R6N3FjSEg0eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vNjguMTgzLjIzLjgxLz9YREVCVUdfU0VTU0lPTl9TVEFSVD1waHBzdG9ybSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675724548),('oXMTeFHSNyqCBbzN2mnAaoMwcUjX2zRgqWuj8GPR',NULL,'66.249.73.41','Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHVGVlgyWDBpRDVkTUdFTzN5QllkbEVpNlVUS2NQYVVCaW05dmVFMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675788272),('p51FFHK4MtLfaleIShZbTrupwmIg0QqWVLKeiSDT',NULL,'51.222.253.3','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoic3NWMUJTc3JrWTBOeFJGWlNEbTRoU0tNajRmdVNBWlplekdyc1FBeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvNDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675718561),('pV7DxQTqbQfzWmSkL9DjMHqXDM1YDTBe4zDQp7ZS',NULL,'94.102.61.8','python-requests/2.26.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUm4yME5abGhGdEZDWmRtUU82eHFjWGNodWlvblRwRDlPQ3cwVW1IQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675784940),('QSIeQzWpCFPIUVKnSVG7JCejqdBQ1spbO8FzV5LH',NULL,'64.62.197.115','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzJUYkJZMTlYcFA5TG5sNVBDcGg2akhRblUweElLSVpwT2l0WHcxdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675742900),('raBnQVWlOgnqqxkfnAp5ykXkksmPKl0lXF3yQd59',NULL,'197.157.209.63','Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.126 Mobile Safari/537.36 OPR/72.3.3767.68685','YTozOntzOjY6Il90b2tlbiI7czo0MDoidFc1bFBoVHVZU2l5ZmJ1djlrRWtPTlNQUDZTdTFmUXNOSWUwUTJ2SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675767154),('rnkY7FwDD0FKv5MIqmDgm20NQvjQs25IuoOLvE38',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoieThJYmE4eWF6N1dxek1XTkZWcWN5SGNMRWlLbXdrTTBrUTk5SnM0MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675748830),('RqPXCvem2r8uW0yV3zmpjf6w0AcO53FLlCGL9u1s',NULL,'17.241.227.252','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)','YTozOntzOjY6Il90b2tlbiI7czo0MDoickM0YU1wOG56eU1xczVHcnlhaXRCakRCeFI3OVM2SW5qT2FSaE80ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675809683),('RSOHEBiTx5fSnTcXHaXtz78XyZuZcYOZpyV7EU3E',NULL,'31.13.127.9','facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM05nTEo0eDdwRzZKWFpjWUkwZHJvM0R6N0kya21CMUJVSXZ5Q0VEcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675767017),('rTpOmgptlOmCaEOWWOOYWbQPnLfb1Dqioz20WXyg',NULL,'17.241.227.75','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlFxenhjQTNFeHl6TzJ4Z25BUmhCNHZON3dBNm51NWZhbklSYjZFdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675785691),('s3ojzPr9za2vgaTXGbP3oqbitSVgOgFgoqg3TiLY',2,'196.225.144.224','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/109.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjZsYmtncVViUlRCN0M3UFh1YnNTYkJqVExoaTI0SWpWbU5aVVpEeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675766954),('sa2VvYKth40eGYPgRXlOuv55ZdnLkv46hnp8bxHI',NULL,'66.249.66.85','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.101 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUE1jd00wRE5ubk9mUHB3ZGJnNUs2amVCVE9Eb3c3NTNxVVlnVmtJViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675719389),('sG21ON00KGY9YyFuitjvLjEEs7GYbijSsdLimj0M',NULL,'40.77.167.251','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3NtVDkzSEU2RHZnenRSaGVSQ3J4VlRpSU9SbTNicm9valFFanhpcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvNDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675751609),('tpFZXW1vPJUMdU4hOcVJvAMLF6OZVya9GgPbmnbw',NULL,'167.94.138.63','Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1ZDUGxSd3YxVEpFMloyUlZNUHBRZ2Y3R1ByT3pFNDNuUDR1REFwYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675711859),('TxOUi40l4Ne1pRYPzK2eZvrkNMxJYJ4iMMcGbvrj',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjJucjREOFc2eThRbHB3cjRLamJXbUlmY1ZaeEJKeFYwMnNuYXd0biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675710866),('UJEE6Vlt05E4l2z3hu1vTka3xzOyThLxRRA3jZ5x',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEFLeGZCd0YxdEtaaDJvSXN3blZUSFBOTk9DRVJabmlaenkyQk1pTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vYWJvdXQvNDIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675783284),('uqe6n93qs4t7yYrBy4xgQyUfWv7p0c7Ug48hUtxF',NULL,'66.249.66.4','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.101 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXozTnkxbk9GdmQ5TmEzSmpTUlZmeTNuMUw2RXFRcVJZcVdTRVFSdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tL2Fib3V0LzMwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675720969),('VAY4wxfcTc0nso3H2fThylCUgUuUxtIpSIptf3YK',NULL,'20.55.53.144','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicHRlTERoZEFkVTVzTU1YTXlYeTFmM05UU3oweDc4UU5Db3NvUEJUTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675813686),('vOCRPtyVAliohMlZBnShGzgFq1VJ8zzzI2OiDd9n',NULL,'128.14.133.58','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicU90RnBCVjVXOFAwdTNLNzRHOEJZeEd2aGVEekFhSk5rQ0xUeWJhdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675763928),('w2Jziv8uGnNSpslq30u7SQqDwqU3NQ0annKGpcnN',NULL,'54.188.163.106','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGtHNFEycDF0RUwxYnRYMjZucElDM0t1amVQM0E4dnlKTGNHV2J5MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675718069),('Wtm1p4klHDtXiNA2nAXhSw7EUIdCbUT5CB0dCoey',NULL,'66.249.66.206','Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3BieEt4ejVNUjhvT2xNQjFkaGdGU3V6RFFqVWN5TTh5azB4YlIwUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8va29uZ290ZXJyYS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675720323),('wVRR3I1xswiUghFEpyADrTDKnizqBv2zKBGeNERh',NULL,'205.210.31.178','Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXFDbHI3S2dORzgyWVFZaFNTdlhhS1N1N2d1dnEwdEtqS0V6UGNPYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675750503),('xAO9NpQHpo8mjfxeKTqDmuU4LVTRbO6JAqGNhsjD',NULL,'141.98.10.56','Hello World','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUpKT0ZDa1pXSXFXb042N05oT0FRbWVnZEM5VWlUMVd5OVo2OFN6ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675740673),('XB0eNGcTWxJ8QTXPROZehbIEsMluFwtiIqdbpMwx',NULL,'162.0.210.113','','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXBYQml2YVlFMUpSSkpwaVl2WDRxaDh0dDlIQ3lqR0xvR2xEb3lwNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675767193),('XktVukdpuNXMVpNWSe57kp12RGLpaEDnGyarz5o7',NULL,'66.249.73.41','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.101 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoialpWN1lJNlhPRko3Z1dtbmU5aWJwRDJqZU54OEV5SFk2Tjkwbmt1dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8va29uZ290ZXJyYS5jb20vc2VydmljZV9kZXRhaWwvNSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675779077),('xzJIQwo8CRbbfR4Ydoj9eNFg4wKdmN1K5sVuCXpT',NULL,'94.102.61.8','python-requests/2.26.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVBGRG9pV1FPdFNRVFdJZFV6cnJYQ0JUOEZ4ZFQ4SGxrQ3ZibjN0NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675784481),('YGKyFzwsa2hFVoJGxva7HKgrWTpQiLN62hUkXyCP',NULL,'66.249.66.37','Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUdiUDFoY25adTJPQUxHNTZsdXNuZkJ3ejBmMERqWVdCbk9icUpXSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675719375),('YLICxePXJYOjroRIz5tggWutASB0MZaQbAMSXE55',NULL,'137.184.188.25','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoibEpBOXBPNE5NZWwxNlFDdlhpVzEyR1g3MGdhZWhpMkc5Y0EyQkJWSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675733848),('yLrbEaFxjwP0R1hbFwOtbXmefEZ9VX3jeBGiJQgu',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGxabkRxajFta0Jyb0NFbThXZGhTeVdrNzhkcEIyZ0R2dFNTTXBIYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675800381),('Yp3TqSoQpZLul0XzcSDAhXJIc4FcinNm0ASNxNQf',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRU9JUW1NNG1ZdW92MXpzTTZaaWhyVUVaT1R2b011S1Fvck9DQkNhUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675808264),('Z0TVTfH7q6ORsha7u5NEHEH9luyF98qGTikV9PjX',NULL,'143.110.222.166','Mozilla/5.0 (iPhone; CPU iPhone OS 16_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.1 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDJBbmtkU3JkTjd0TVViaW96ZXo3cTlsVThjMU5FQUpyRkRrc1VXayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vNjguMTgzLjIzLjgxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675753440),('zFPGFiCW38tmpWC8WdjCOQQgidgJ8u0BHgHIDAq4',NULL,'52.167.144.98','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFRzUlV2c0xEZmV4cDAyWHZERE9OM09iSTlJUm11R2hlY3hpbGVmYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675726425),('zMyeBjZH5e74jeYJAfc2Lw7b9ovjXGCBLpTCEeLj',NULL,'65.154.226.166','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/104.0.5112.101 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVhma05nTWtUWU5RSWRudVZQTURHUjVsRkJKbmFiN1l0MEhUTDRCNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmtvbmdvdGVycmEuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675761131);
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
  `etat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcarts`
--

LOCK TABLES `shoppingcarts` WRITE;
/*!40000 ALTER TABLE `shoppingcarts` DISABLE KEYS */;
INSERT INTO `shoppingcarts` VALUES (1,1,'[{\"idp\": 1, \"qte\": 2}, {\"idp\": 6, \"qte\": 3}]','0','2022-09-11 17:57:08','2022-09-11 17:57:08'),(2,3,'[{\"idp\": 1, \"qte\": 3}, {\"idp\": 3, \"qte\": 5}, {\"idp\": 1, \"qte\": 1}, {\"idp\": 2, \"qte\": 1}]','0','2022-09-17 10:32:38','2022-09-20 17:22:37');
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
  `contenu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sexe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enceinte` tinyint(1) NOT NULL DEFAULT '0',
  `maladie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `methode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signe` json NOT NULL,
  `center_ttt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescripteur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_prescri` tinyint(1) NOT NULL,
  `date_t` date NOT NULL,
  `ttt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_ttt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage` int NOT NULL,
  `mode_prepar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_prise` int NOT NULL,
  `nb_jour` int NOT NULL,
  `evolu_temp` json DEFAULT NULL,
  `evolu_paras` json DEFAULT NULL,
  `effet_ind` json DEFAULT NULL,
  `rechute` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_rechute` date DEFAULT NULL,
  `dep_res` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temoignages`
--

LOCK TABLES `temoignages` WRITE;
/*!40000 ALTER TABLE `temoignages` DISABLE KEYS */;
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Dr Nathan','nathan@kongoterra.org',NULL,'$2y$10$R5bybhwmTWux70JawObwcOcHPKTnR6EgdJiAFVpLf1ujuS5w8mPey',NULL,NULL,NULL,'rbg5geiy2fX8Hjwl0DIQjzzNtbYKG94A3HeVv54fe9wfQwQgzHfbJdqSOX2k',NULL,NULL,'2022-08-26 18:41:01','2023-01-16 16:59:46'),(4,'king','glodin.kiese@gmail.com',NULL,'$2y$10$A1URUerWsjjH9FLnSl5p/eKCZGKYkHsAWe8nc3y.U1aov8JIYLCUa',NULL,NULL,NULL,NULL,NULL,NULL,'2022-09-02 15:32:23','2022-09-02 15:32:23');
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
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpro` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (1,'Mbanza ngungu',3,'2022-06-13 05:41:17','2022-06-13 05:41:17'),(2,'Kisantu',3,'2022-06-13 05:44:46','2022-06-13 05:44:46'),(3,'Kinshasa',5,'2022-09-17 03:01:23','2022-09-17 03:01:23'),(4,'Goma',6,'2022-09-23 11:35:14','2022-09-23 11:35:14');
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

-- Dump completed on 2023-02-08  0:34:23
