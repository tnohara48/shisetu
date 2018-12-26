-- MySQL dump 10.16  Distrib 10.1.35-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: company
-- ------------------------------------------------------
-- Server version	10.1.35-MariaDB

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
-- Table structure for table `dat_company`
--

DROP TABLE IF EXISTS `dat_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dat_company` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zigyousya` varchar(32) NOT NULL,
  `yuubinbangou` varchar(7) NOT NULL,
  `todouhuken` varchar(4) NOT NULL,
  `tyouiki` varchar(50) NOT NULL,
  `denwabangou` varchar(11) NOT NULL,
  `faxbangou` varchar(11) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `daihyousya` varchar(15) NOT NULL,
  `syokumei` varchar(15) NOT NULL,
  `zigyousyo` varchar(32) NOT NULL,
  `kaigos` varchar(15) NOT NULL,
  `zigyousyoba` varchar(30) NOT NULL,
  `yuubinbangou2` varchar(7) NOT NULL,
  `todouhuken2` varchar(4) NOT NULL,
  `tyouiki2` varchar(50) NOT NULL,
  `zenwabangou2` varchar(11) NOT NULL,
  `FAX2` varchar(11) NOT NULL,
  `zigyoukaisi` varchar(11) NOT NULL,
  `sabisunaiyou` text NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dat_company`
--

LOCK TABLES `dat_company` WRITE;
/*!40000 ALTER TABLE `dat_company` DISABLE KEYS */;
INSERT INTO `dat_company` VALUES (39,'2018-11-02 05:35:53','a','','ｌｋじ','','','','','','','','','','','','','','','',''),(40,'2018-11-02 05:36:02','0','','c','','','','','','','','','','','','','','','',''),(41,'2018-11-02 05:36:11','aaa','','c','','','','','','','','','','','','','','','',''),(42,'2018-11-13 02:30:29','株式会社','','w','','','','','','','','','','','','','','','',''),(43,'2018-11-19 02:50:42','z','','s','','844-5497-15','','','','','','','','','','','','','',''),(44,'2018-11-22 02:29:31','haiohdfgh','596123','s','','844-5497-15','','','','','','','','','','','','','',''),(45,'2018-11-23 03:32:46','依田  平','530-000','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','http://www.care21.co.jp','依田  平','社長','株式会社ケア２','1型','64549','4884','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','平成 5年 11月','介護'),(46,'2018-11-23 05:12:57','<br />\r\n<b>Notice</b>:  Undefine','<br />\r','<br ','<br />\r\n<b>Notice</b>:  Undefined variable: tyouik','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>Notice</b>:  Undefined variable: hp in ','<br />\r\n<b>Noti','<br />\r\n<b>Noti','<br />\r\n<b>Notice</b>:  Undefine','<br />\r\n<b>Noti','<br />\r\n<b>Notice</b>:  Undefi','<br />\r','<br ','<br />\r\n<b>Notice</b>:  Undefined variable: tyouik','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>Notice</b>:  Undefined variable: sabisunaiyou in <b>C:\\xampp\\htdocs\\shisetutouroku\\kensaku_h3.php</b> on line <b>180</b><br />\r\n'),(47,'2018-11-23 05:13:25','<br />\r\n<b>Notice</b>:  Undefine','<br />\r','<br ','<br />\r\n<b>Notice</b>:  Undefined variable: tyouik','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>Notice</b>:  Undefined variable: hp in ','<br />\r\n<b>Noti','<br />\r\n<b>Noti','<br />\r\n<b>Notice</b>:  Undefine','<br />\r\n<b>Noti','<br />\r\n<b>Notice</b>:  Undefi','<br />\r','<br ','<br />\r\n<b>Notice</b>:  Undefined variable: tyouik','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>','<br />\r\n<b>Notice</b>:  Undefined variable: sabisunaiyou in <b>C:\\xampp\\htdocs\\shisetutouroku\\kensaku_h3.php</b> on line <b>180</b><br />\r\n'),(48,'2018-11-26 02:06:58','依田  平','530-000','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','http://www.care21.co.jp','依田  平','社長','株式会社ケア２','1型','64549','4884','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','平成 5年 11月','介護'),(49,'2018-11-26 02:07:03','依田  平','530-000','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','http://www.care21.co.jp','依田  平','社長','株式会社ケア２','1型','64549','4884','大阪市北','2-2-2 近鉄堂島ビル10F','06-6456-563','06-6456-564','平成 5年 11月','介護'),(50,'2018-11-28 02:02:25','j','','lflu','','65441616','','','','','','','','','','','','','',''),(51,'2018-12-03 02:43:31','','','','','','','','','','','','','','','','','','',''),(52,'2018-11-30 01:44:41','q','','l','','3','','','','','8','','','','1','','3','','',''),(53,'2018-12-03 01:46:14','z','','l','','1','','','','','','','','','','','','','',''),(54,'2018-12-03 02:43:20','','','','','','','','','','','','','','','','','','',''),(55,'2018-12-03 02:43:54','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `dat_company` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-06 10:56:31
