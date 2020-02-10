-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: sitelab
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_01_11_011113_create_products_table',1),(2,'2019_01_12_221651_create_users_table',1),(3,'2019_01_14_162502_create_orders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2019-01-14 18:30:47','2019-01-14 18:30:47',1,'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:5;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:50;s:4:\"item\";O:12:\"App\\Products\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagePath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:5;s:10:\"created_at\";s:19:\"2019-01-12 23:51:22\";s:10:\"updated_at\";s:19:\"2019-01-12 23:51:22\";s:9:\"imagePath\";s:140:\"https://www.sportzone.pt/i/dfcd585466749f87f8b2126cd948c333a9eebc87.jpg?fbclid=IwAR0fSHMs_lE4b2A-dIiyX8ZlU36gulinBhAq4EbIXJfB5lzoeoWYwKG1jcs\";s:5:\"title\";s:15:\"PUMA NRGY COMET\";s:11:\"description\";s:39:\"Sapatilhas PUMA para atletas de corrida\";s:5:\"price\";i:50;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:5;s:10:\"created_at\";s:19:\"2019-01-12 23:51:22\";s:10:\"updated_at\";s:19:\"2019-01-12 23:51:22\";s:9:\"imagePath\";s:140:\"https://www.sportzone.pt/i/dfcd585466749f87f8b2126cd948c333a9eebc87.jpg?fbclid=IwAR0fSHMs_lE4b2A-dIiyX8ZlU36gulinBhAq4EbIXJfB5lzoeoWYwKG1jcs\";s:5:\"title\";s:15:\"PUMA NRGY COMET\";s:11:\"description\";s:39:\"Sapatilhas PUMA para atletas de corrida\";s:5:\"price\";i:50;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:80;s:4:\"item\";O:12:\"App\\Products\":26:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagePath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-01-12 23:51:21\";s:10:\"updated_at\";s:19:\"2019-01-12 23:51:21\";s:9:\"imagePath\";s:155:\"https://images.timberland.com/is/image/TimberlandEU/A1K3Z662-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR2Ig6WhURGgz5DNOSRc7556P-MKlRwXbUtx1cdSBbY16AbScBtU7acpYcs\";s:5:\"title\";s:41:\"BOTA PREMIUM 6 INCH PARA HOMEM EM AMARELO\";s:11:\"description\";s:74:\"Botas Timberland para homem, prefeitas para não molhar os pés no Inverno\";s:5:\"price\";i:80;}s:11:\"\0*\0original\";a:7:{s:2:\"id\";i:1;s:10:\"created_at\";s:19:\"2019-01-12 23:51:21\";s:10:\"updated_at\";s:19:\"2019-01-12 23:51:21\";s:9:\"imagePath\";s:155:\"https://images.timberland.com/is/image/TimberlandEU/A1K3Z662-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR2Ig6WhURGgz5DNOSRc7556P-MKlRwXbUtx1cdSBbY16AbScBtU7acpYcs\";s:5:\"title\";s:41:\"BOTA PREMIUM 6 INCH PARA HOMEM EM AMARELO\";s:11:\"description\";s:74:\"Botas Timberland para homem, prefeitas para não molhar os pés no Inverno\";s:5:\"price\";i:80;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:130;}','Diogo Cruz','Rua Lab 2019','ch_1DsaGKABTatqxHBx6giUNXT4');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagePath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://images.timberland.com/is/image/TimberlandEU/A1K3Z662-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR2Ig6WhURGgz5DNOSRc7556P-MKlRwXbUtx1cdSBbY16AbScBtU7acpYcs','BOTA PREMIUM 6 INCH PARA HOMEM EM AMARELO','Botas Timberland para homem, prefeitas para não molhar os pés no Inverno',80),(2,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://images.timberland.com/is/image/TimberlandEU/A1RBJ015-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR0MzUJ4yQ2_P-e5R0ptR-GLoEsizswmE93fmEWcyu0VYOXJB4apynDbNnQ','CHELSEA LONDON SQUARE PARA MULHER EM PRETO','Para mulheres que querem sentir o mesmo que os homens e ter os pés bem seguros',65),(3,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://images.timberland.com/is/image/TimberlandEU/8329R231-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR0HjQAUEKNbKbK2fTTD8vEi98xcjE_6BqHCfEm_C1OhjeCOzFrQM1TEVX4s','BOTA AUTHENTICS TEDDY FLEECE PARA MULHER EM AMARELO','Botas mais curtas mas com o mesmo conforto',45),(4,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://www.sportzone.pt/i/49b0633676e1adf3e1489108a03b27469b5a0c16.jpg?fbclid=IwAR1QJvexunSXfjvls1-GEPuA-fzc_VMcndsB4cFza4lsLtoTL0k9eX-sJVw','NIKE REVOLUT 4 ','Sapatilha de ginásio ou outdoors',75),(5,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://www.sportzone.pt/i/dfcd585466749f87f8b2126cd948c333a9eebc87.jpg?fbclid=IwAR0fSHMs_lE4b2A-dIiyX8ZlU36gulinBhAq4EbIXJfB5lzoeoWYwKG1jcs','PUMA NRGY COMET','Sapatilhas PUMA para atletas de corrida',50),(6,'2019-01-14 18:28:35','2019-01-14 18:28:35','https://www.sportzone.pt/i/16cd92f423d50febb74f7956696b3bad252ed716.jpg?fbclid=IwAR2RLAW-VB6L1MqBi7nmPF9Ov-gpSfnuM8sfLG2ltO_nZp8WdzqZtAER5SA','NIKE DOWNSHIFTER 8','Sapatilhas de alta categoria, perfeitas para caminhadas',60);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'2019-01-14 18:30:08','2019-01-14 18:30:08','diogo.9.cruz@gmail.com','$2y$10$J4HJmuwcZFtAGd9mIjkoRO62GxixUj3rnAAoFZkX9Xn34bKbZb9H.',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-16  0:41:54
