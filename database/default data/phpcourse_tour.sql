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
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `departure_point` int unsigned DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `overview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales` int NOT NULL DEFAULT '0',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  KEY `tour_departure_point_foreign` (`departure_point`),
  CONSTRAINT `tour_departure_point_foreign` FOREIGN KEY (`departure_point`) REFERENCES `province` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour`
--

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
INSERT INTO `tour` VALUES (1,'Du lịch Lễ 30/4 - Du lịch Hà Nội - Hà Giang - Lũng Cú - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể từ Sài Gòn 2022',500.00,6,30,'2024-11-08','overview/1.txt','http://127.0.0.1:8000/storage/tours/img/1.jpg',0,'http://127.0.0.1:8000/storage/tours/video/1.mp4','description/1.txt',4),(2,'Du lịch Lễ 30/4 - Du lịch Hà Nội - Mộc Châu - Sơn La - Điện Biên - Sa Pa - Phú Thọ - Đền Hùng từ Sài Gòn 2022',560.00,6,24,'2025-04-30','overview/2.txt','http://127.0.0.1:8000/storage/tours/img/2.jpg',10,'http://127.0.0.1:8000/storage/tours/video/2.mp4','description/2.txt',4),(3,'Du lịch Hè - Tour Du lịch Nha Trang - Tháp Bà Ponagar - Chùa Long Sơn - Vinwonders từ Sài Gòn',300.00,3,42,'2025-06-11','overview/3.txt','http://127.0.0.1:8000/storage/tours/img/3.jpg',15,'http://127.0.0.1:8000/storage/tours/video/3.mp4','description/3.txt',3),(4,'Du lịch Quảng Ngãi - Đảo Lý Sơn - Đảo Bé - Vương Quốc Tỏi từ Sài Gòn',350.00,3,30,'2025-10-25','overview/4.txt','http://127.0.0.1:8000/storage/tours/img/4.jpg',15,'http://127.0.0.1:8000/storage/tours/video/4.mp4','description/4.txt',3),(5,'Du lịch Phan Thiết Khám Phá Đảo Phú Quý từ Sài Gòn giá tốt',250.00,4,30,'2024-10-19','overview/5.txt','http://127.0.0.1:8000/storage/tours/img/5.jpg',0,'http://127.0.0.1:8000/storage/tours/video/5.mp4','description/5.txt',4),(6,'Tour Du lịch Hà Nội - Chùa Tam Chúc - Ninh Bình - Tràng An từ Sài Gòn',400.00,3,50,'2026-10-22','overview/6.txt','http://127.0.0.1:8000/storage/tours/img/6.jpg',0,'http://127.0.0.1:8000/storage/tours/video/6.mp4','description/6.txt',3),(7,'Tour Du lịch Hà Nội - Chùa Tam Chúc - Ninh Bình - Tràng An từ Sài Gòn',250.00,4,34,'2025-10-30','overview/7.txt','http://127.0.0.1:8000/storage/tours/img/7.jpg',10,'http://127.0.0.1:8000/storage/tours/video/7.mp4','description/7.txt',3),(8,'Du lịch Miền Bắc - Du lịch Vịnh Hạ Long - Yên Tử - Sa Pa - Bản Cát Cát tư Sài Gòn',420.00,7,19,'2025-10-30','overview/8.txt','http://127.0.0.1:8000/storage/tours/img/8.jpg',20,'http://127.0.0.1:8000/storage/tours/video/8.mp4','description/8.txt',3),(9,'Du lịch Miền Tây - Tour Mỹ Tho - Cần Thơ 2 ngày khởi hành từ Sài Gòn',300.00,3,37,'2025-11-14','overview/9.txt','http://127.0.0.1:8000/storage/tours/img/9.jpg',0,'http://127.0.0.1:8000/storage/tours/video/9.mp4','description/9.txt',3),(10,'Du lịch Miền Tây - Cà Mau - Bạc Liêu - Sóc Trăng 2 ngày 2 đêm từ Sài Gòn',100.00,4,1,'2025-11-12','overview/10.txt','http://127.0.0.1:8000/storage/tours/img/10.jpg',0,'http://127.0.0.1:8000/storage/tours/video/10.mp4','description/10.txt',3),(11,'Du lịch Miền Tây - Cà Mau - Bạc Liêu - Sóc Trăng',200.00,4,46,'2026-06-27','overview/11.txt','http://127.0.0.1:8000/storage/tours/img/11.jpg',5,'http://127.0.0.1:8000/storage/tours/video/11.mp4','description/11.txt',3),(12,'Tour Du lịch Cà Mau - Bạc Liêu - Sóc Trăng từ Sài Gòn',250.00,4,34,'2026-10-22','overview/12.txt','http://127.0.0.1:8000/storage/tours/img/12.jpg',5,'http://127.0.0.1:8000/storage/tours/video/12.mp4','description/12.txt',5),(13,'Tour Đà Lạt - QUÊ Garden - Nông Trại Cún Puppy - Fairytale Land từ Sài Gòn',320.00,4,52,'2025-11-20','overview/13.txt','http://127.0.0.1:8000/storage/tours/img/13.jpg',10,'http://127.0.0.1:8000/storage/tours/video/13.mp4','description/13.txt',3),(14,'Tour Hà Nội - Lào Cai - Sa Pa - Bản Cát Cát từ Sài Gòn',300.00,5,13,'2025-10-16','overview/14.txt','http://127.0.0.1:8000/storage/tours/img/14.jpg',0,'http://127.0.0.1:8000/storage/tours/video/14.mp4','description/14.txt',3);
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-08 20:48:53
