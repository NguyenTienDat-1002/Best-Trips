-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: phpcourse
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
-- Table structure for table `tour_highlight`
--

DROP TABLE IF EXISTS `tour_highlight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_highlight` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tour_id` int unsigned NOT NULL,
  `highlight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tour_highlight_tour_id_foreign` (`tour_id`),
  CONSTRAINT `tour_highlight_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_highlight`
--

LOCK TABLES `tour_highlight` WRITE;
/*!40000 ALTER TABLE `tour_highlight` DISABLE KEYS */;
INSERT INTO `tour_highlight` VALUES (1,1,'http://127.0.0.1:8000/storage/tours/highlights/1.jpg'),(2,1,'http://127.0.0.1:8000/storage/tours/highlights/2.jpg'),(3,1,'http://127.0.0.1:8000/storage/tours/highlights/3.jpg'),(4,2,'http://127.0.0.1:8000/storage/tours/highlights/4.jpg'),(5,2,'http://127.0.0.1:8000/storage/tours/highlights/5.jpg'),(6,2,'http://127.0.0.1:8000/storage/tours/highlights/6.jpg'),(7,3,'http://127.0.0.1:8000/storage/tours/highlights/7.jpg'),(8,3,'http://127.0.0.1:8000/storage/tours/highlights/8.jpg'),(9,3,'http://127.0.0.1:8000/storage/tours/highlights/9.jpg'),(10,3,'http://127.0.0.1:8000/storage/tours/highlights/10.jpg'),(11,3,'http://127.0.0.1:8000/storage/tours/highlights/11.jpg'),(12,4,'http://127.0.0.1:8000/storage/tours/highlights/12.jpg'),(13,4,'http://127.0.0.1:8000/storage/tours/highlights/13.jpg'),(14,4,'http://127.0.0.1:8000/storage/tours/highlights/14.jpg'),(15,4,'http://127.0.0.1:8000/storage/tours/highlights/15.jpg'),(16,5,'http://127.0.0.1:8000/storage/tours/highlights/16.jpg'),(17,5,'http://127.0.0.1:8000/storage/tours/highlights/17.jpg'),(18,5,'http://127.0.0.1:8000/storage/tours/highlights/18.jpg'),(19,5,'http://127.0.0.1:8000/storage/tours/highlights/19.jpg'),(20,5,'http://127.0.0.1:8000/storage/tours/highlights/20.jpg'),(21,6,'http://127.0.0.1:8000/storage/tours/highlights/21.jpg'),(22,6,'http://127.0.0.1:8000/storage/tours/highlights/22.jpg'),(23,6,'http://127.0.0.1:8000/storage/tours/highlights/23.jpg'),(24,7,'http://127.0.0.1:8000/storage/tours/highlights/24.jpg'),(25,7,'http://127.0.0.1:8000/storage/tours/highlights/25.jpg'),(26,7,'http://127.0.0.1:8000/storage/tours/highlights/26.jpg'),(27,8,'http://127.0.0.1:8000/storage/tours/highlights/27.jpg'),(28,8,'http://127.0.0.1:8000/storage/tours/highlights/28.jpg'),(29,8,'http://127.0.0.1:8000/storage/tours/highlights/29.jpg'),(30,8,'http://127.0.0.1:8000/storage/tours/highlights/30.jpg'),(31,9,'http://127.0.0.1:8000/storage/tours/highlights/31.jpg'),(32,10,'http://127.0.0.1:8000/storage/tours/highlights/32.jpg'),(33,10,'http://127.0.0.1:8000/storage/tours/highlights/33.jpg'),(34,10,'http://127.0.0.1:8000/storage/tours/highlights/34.jpg'),(35,10,'http://127.0.0.1:8000/storage/tours/highlights/35.jpg'),(36,11,'http://127.0.0.1:8000/storage/tours/highlights/36.jpg'),(37,11,'http://127.0.0.1:8000/storage/tours/highlights/37.jpg'),(38,11,'http://127.0.0.1:8000/storage/tours/highlights/38.jpg'),(39,12,'http://127.0.0.1:8000/storage/tours/highlights/39.jpg'),(40,12,'http://127.0.0.1:8000/storage/tours/highlights/40.jpg'),(41,12,'http://127.0.0.1:8000/storage/tours/highlights/41.jpg'),(42,13,'http://127.0.0.1:8000/storage/tours/highlights/42.jpg'),(43,13,'http://127.0.0.1:8000/storage/tours/highlights/43.jpg'),(44,13,'http://127.0.0.1:8000/storage/tours/highlights/44.jpg'),(45,14,'http://127.0.0.1:8000/storage/tours/highlights/45.jpg'),(46,14,'http://127.0.0.1:8000/storage/tours/highlights/46.jpg'),(47,14,'http://127.0.0.1:8000/storage/tours/highlights/47.jpg');
/*!40000 ALTER TABLE `tour_highlight` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-08 20:48:54
