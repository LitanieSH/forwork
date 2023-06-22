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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `code` varchar(5) NOT NULL DEFAULT 'JobID',
  `id` int NOT NULL AUTO_INCREMENT,
  `prise` int DEFAULT NULL,
  `jobs_name` varchar(45) NOT NULL,
  `details_th` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES ('JobID',1,4500,'บัญชีรายเดือน','เอกสารบัญชีไม่เกิน 150 ใบ / เดือน'),('JobID',2,6500,'บัญชีรายเดือน','เอกสารบัญชีไม่เกิน 300 ใบ / เดือน'),('JobID',3,12000,'บัญชีรายเดือน','เอกสารบัญชีตั้งแต่ 300 ใบ / เดือน'),('JobID',4,12000,'ที่ปรึกษาบัญชี','เข้าตรวจสอบเอกสาร 1 วัน / เดือน'),('JobID',5,16000,'ที่ปรึกษาบัญชี','เข้าตรวจสอบเอกสาร 2 วัน / เดือน'),('JobID',6,20000,'ที่ปรึกษาบัญชี','เข้าตรวจสอบเอกสาร 4 วัน / เดือน'),('JobID',7,12000,'งานจดทะเบียน','จดทะเบียนจัดตั้งบริษัทใหม่'),('JobID',8,5000,'งานจดทะเบียน','เพิ่มวัตถุประสงค์'),('JobID',9,6000,'งานจดทะเบียน','แจ้งการเข้า - ออก กรรมการ'),('JobID',10,6000,'งานจดทะเบียน','ขึ้นทะเบียนผู้ประกันตน'),('JobID',11,25000,'งานจดทะเบียน','เลิกกิจการ'),('JobID',12,30000,'ปิดงบรายปี','งบรายปี นำส่งสรรพกร กรณีงบเปล่า'),('JobID',13,45000,'ปิดงบรายปี','งบรายปี นำส่งสรรพกร รายได้ไม่เกิน 1,000,000 บาท'),('JobID',14,60000,'ปิดงบรายปี','งบรายปี นำส่งสรรพกร รายได้ตั้งแต่ 1,000,000 บาท'),('JobID',15,3000,'แจ้งซ่อม / งานซ่อม','งานตรวจสอบอุปกรณ์คอมพิวเตอร์ยังไม่รวมราคาอะไหล่'),('JobID',16,6500,'ที่ปรึกษา IT','IT Consultant เข้าบริษัทลูกค้า 1 วัน / เดือน'),('JobID',17,12000,'ที่ปรึกษา IT','IT Consultant เข้าบริษัทลูกค้า 2 วัน / เดือน'),('JobID',18,20000,'ที่ปรึกษา IT','IT Consultant เข้าบริษัทลูกค้า 4 วัน / เดือน'),('JobID',19,30000,'ที่ปรึกษา IT','IT Consultant เข้าประจำบริษัท'),('JobID',20,0,'Network, Firewall','Wiring Network, CCTV, WIFI Hotspot'),('JobID',21,0,'Software Install, Config ','Install Software, Mail Server, Database Server, Firewall Poricy'),('JobID',22,0,'Developre, Web','ออกแบบระบบเว็บไซต์, Software design'),('JobID',999,0,'Null','Null');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 10:57:44
