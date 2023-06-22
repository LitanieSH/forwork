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
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinces` (
  `id` int NOT NULL,
  `code` varchar(5) NOT NULL,
  `name_th` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'10','กรุงเทพมหานคร','Bangkok'),(2,'11','สมุทรปราการ','Samut Prakan'),(3,'12','นนทบุรี','Nonthaburi'),(4,'13','ปทุมธานี','Pathum Thani'),(5,'14','พระนครศรีอยุธยา','Phra Nakhon Si Ayutthaya'),(6,'15','อ่างทอง','Ang Thong'),(7,'16','ลพบุรี','Loburi'),(8,'17','สิงห์บุรี','Sing Buri'),(9,'18','ชัยนาท','Chai Nat'),(10,'19','สระบุรี','Saraburi'),(11,'20','ชลบุรี','Chon Buri'),(12,'21','ระยอง','Rayong'),(13,'22','จันทบุรี','Chanthaburi'),(14,'23','ตราด','Trat'),(15,'24','ฉะเชิงเทรา','Chachoengsao'),(16,'25','ปราจีนบุรี','Prachin Buri'),(17,'26','นครนายก','Nakhon Nayok'),(18,'27','สระแก้ว','Sa Kaeo'),(19,'30','นครราชสีมา','Nakhon Ratchasima'),(20,'31','บุรีรัมย์','Buri Ram'),(21,'32','สุรินทร์','Surin'),(22,'33','ศรีสะเกษ','Si Sa Ket'),(23,'34','อุบลราชธานี','Ubon Ratchathani'),(24,'35','ยโสธร','Yasothon'),(25,'36','ชัยภูมิ','Chaiyaphum'),(26,'37','อำนาจเจริญ','Amnat Charoen'),(27,'39','หนองบัวลำภู','Nong Bua Lam Phu'),(28,'40','ขอนแก่น','Khon Kaen'),(29,'41','อุดรธานี','Udon Thani'),(30,'42','เลย','Loei'),(31,'43','หนองคาย','Nong Khai'),(32,'44','มหาสารคาม','Maha Sarakham'),(33,'45','ร้อยเอ็ด','Roi Et'),(34,'46','กาฬสินธุ์','Kalasin'),(35,'47','สกลนคร','Sakon Nakhon'),(36,'48','นครพนม','Nakhon Phanom'),(37,'49','มุกดาหาร','Mukdahan'),(38,'50','เชียงใหม่','Chiang Mai'),(39,'51','ลำพูน','Lamphun'),(40,'52','ลำปาง','Lampang'),(41,'53','อุตรดิตถ์','Uttaradit'),(42,'54','แพร่','Phrae'),(43,'55','น่าน','Nan'),(44,'56','พะเยา','Phayao'),(45,'57','เชียงราย','Chiang Rai'),(46,'58','แม่ฮ่องสอน','Mae Hong Son'),(47,'60','นครสวรรค์','Nakhon Sawan'),(48,'61','อุทัยธานี','Uthai Thani'),(49,'62','กำแพงเพชร','Kamphaeng Phet'),(50,'63','ตาก','Tak'),(51,'64','สุโขทัย','Sukhothai'),(52,'65','พิษณุโลก','Phitsanulok'),(53,'66','พิจิตร','Phichit'),(54,'67','เพชรบูรณ์','Phetchabun'),(55,'70','ราชบุรี','Ratchaburi'),(56,'71','กาญจนบุรี','Kanchanaburi'),(57,'72','สุพรรณบุรี','Suphan Buri'),(58,'73','นครปฐม','Nakhon Pathom'),(59,'74','สมุทรสาคร','Samut Sakhon'),(60,'75','สมุทรสงคราม','Samut Songkhram'),(61,'76','เพชรบุรี','Phetchaburi'),(62,'77','ประจวบคีรีขันธ์','Prachuap Khiri Khan'),(63,'80','นครศรีธรรมราช','Nakhon Si Thammarat'),(64,'81','กระบี่','Krabi'),(65,'82','พังงา','Phangnga'),(66,'83','ภูเก็ต','Phuket'),(67,'84','สุราษฎร์ธานี','Surat Thani'),(68,'85','ระนอง','Ranong'),(69,'86','ชุมพร','Chumphon'),(70,'90','สงขลา','Songkhla'),(71,'91','สตูล','Satun'),(72,'92','ตรัง','Trang'),(73,'93','พัทลุง','Phatthalung'),(74,'94','ปัตตานี','Pattani'),(75,'95','ยะลา','Yala'),(76,'96','นราธิวาส','Narathiwat'),(77,'97','บึงกาฬ','buogkan');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 10:57:42
