-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: quotation
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `date` varchar(45) NOT NULL,
  `code` varchar(4) NOT NULL DEFAULT 'QUT',
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name_th` varchar(150) NOT NULL,
  `address` varchar(45) NOT NULL,
  `village` varchar(45) DEFAULT NULL,
  `road` varchar(45) DEFAULT NULL,
  `refprovid` varchar(200) NOT NULL,
  `refdistid` varchar(200) DEFAULT NULL,
  `refsubdistid` varchar(200) DEFAULT NULL,
  `zipcode` int DEFAULT NULL,
  `taxid` varchar(15) DEFAULT NULL,
  `branch_id` varchar(6) DEFAULT '00000',
  `branch_th` varchar(45) DEFAULT 'สำนักงานใหญ่',
  `staff` varchar(150) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jobsid_1` varchar(200) NOT NULL,
  `jobsid_2` varchar(200) DEFAULT NULL,
  `jobsid_3` varchar(200) DEFAULT NULL,
  `jobsid_4` varchar(200) DEFAULT NULL,
  `jobsid_5` varchar(200) DEFAULT NULL,
  `jobsid_6` varchar(200) DEFAULT NULL,
  `total` int DEFAULT NULL,
  `price1` int DEFAULT NULL,
  `price2` int DEFAULT NULL,
  `price3` int DEFAULT NULL,
  `price4` int DEFAULT NULL,
  `price5` int DEFAULT NULL,
  `price6` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `refprovid_idx` (`refprovid`),
  KEY `refdistid_idx` (`refdistid`),
  KEY `refsubdistid_idx` (`refsubdistid`),
  KEY `jobsid_2_idx` (`jobsid_2`),
  KEY `jobsid_3_idx` (`jobsid_3`),
  KEY `jobsid_4_idx` (`jobsid_4`),
  KEY `jobsid_5_idx` (`jobsid_5`),
  KEY `jobsid_6_idx` (`jobsid_6`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES ('2023-05-06','QUT',00001,'มหาวิทยาลัยรามคำแแหง','55/22','รามวง','รามคำแหง','กรุงเทพมหานคร','เขตพระนคร','พระบรมมหาราชวัง',10200,'1111111111111','00000','สำนักงานใหญ๋','ปรมินทร์','02-523-52456','ram@ram.com','บัญชีรายเดือน - เอกสารบัญชีไม่เกิน 150 ใบ / เดือน','บัญชีรายเดือน - เอกสารบัญชีไม่เกิน 150 ใบ / เดือน','บัญชีรายเดือน  เอกสารบัญชีไม่เกิน 300 ใบ / เดือน','ที่ปรึกษา IT  IT Consultant เข้าบริษัทลูกค้า 4 วัน / เดือน','ที่ปรึกษา IT  IT Consultant เข้าบริษัทลูกค้า 4 วัน / เดือน','ที่ปรึกษา IT  IT Consultant เข้าบริษัทลูกค้า 4 วัน / เดือน',75500,4500,4500,6500,20000,20000,20000),('2023-05-06','QUT',00002,'บริษัท ตัวอย่าง จำกัด','55/22','รามวง','รามคำแหง','พระนครศรีอยุธยา','ท่าเรือ','ท่าหลวง',13130,'6547896541236','','','ปรมินทร์','02-523-52456','ram@ram.com','ที่ปรึกษาบัญชี - เข้าตรวจสอบเอกสาร 4 วัน / เดือน','ที่ปรึกษาบัญชี - เข้าตรวจสอบเอกสาร 1 วัน / เดือน','','','','',32000,20000,12000,0,0,0,0),('2023-05-06','QUT',00003,'บริษัท ตัวอย่าง จำกัด','44/216','พนาสนธ์การ์เด้นโฮม8','นิมิตใหม่12 / นิมิตใหม่','กรุงเทพมหานคร','เขตคลองสามวา','ทรายกองดิน',10510,'123456789987','','','นายสราวุธ เทพนิยม','084-134-0924','test@gmail.com','บัญชีรายเดือน - เอกสารบัญชีไม่เกิน 150 ใบ / เดือน','บัญชีรายเดือน - เอกสารบัญชีไม่เกิน 300 ใบ / เดือน','','','','',11000,4500,6500,0,0,0,0),('2023-05-06','QUT',00004,'บริษัท ตัวอย่าง จำกัด','44/216','พนาสนธ์การ์เด้นโฮม8','นิมิตใหม่12 / นิมิตใหม่','กรุงเทพมหานคร','เขตคลองสามวา','ทรายกองดิน',10510,'123456789987','','','นายสราวุธ เทพนิยม','084-134-0924','test@gmail.com','บัญชีรายเดือน - เอกสารบัญชีไม่เกิน 150 ใบ / เดือน','ที่ปรึกษาบัญชี - เข้าตรวจสอบเอกสาร 2 วัน / เดือน','','','','',20500,4500,16000,0,0,0,0),('2023-05-07','QUT',00005,'บริษัท ตัวอย่าง จำกัด','44/216','พนาสนธ์การ์เด้นโฮม8','นิมิตใหม่12 / นิมิตใหม่','กรุงเทพมหานคร','เขตคลองสามวา','ทรายกองดิน',10510,'123456789987','','','นายสราวุธ เทพนิยม','084-134-0924','tepniyom@gmail.com','Network, Firewall - Wiring Network, CCTV, WIFI Hotspot','Software Install, Config  - Install Software, Mail Server, Database Server, Firewall Poricy','','','','',0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 10:57:43
