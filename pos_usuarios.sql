CREATE DATABASE  IF NOT EXISTS `pos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pos`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: pos
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (21,'Luisa Santos','Lsantos','1beYbKXa7nWLA','Especial','vistas/img/usuarios/Lsantos/528.png',1,'2021-01-23 21:05:44','2021-01-24 03:13:09'),
                              (22,'Jahir Carvajal ','Jcarvajal','20EAfcH0JSFQY','Especial','vistas/img/usuarios/Jcarvajal/656.png',1,'2021-01-23 21:01:32','2021-01-24 02:31:22'),
                              (23,'Nelson Carvajal','Ncarvajal','1beYbKXa7nWLA','Administrador','vistas/img/usuarios/Ncarvajal/352.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:11'),
                              (24,'Karen Suarez','Ksuarez','c7c.YBlDHrrcM','Administrador','',1,'2017-12-19 20:20:09','2021-01-24 02:32:11'),
                              (25,'Liz Suarez','Lsuarez','20EAfcH0JSFQY','vendedor','vistas/img/usuarios/Lsuarez/773.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:12'),
                              (27,'Wilhem Suarez','Wilhem','20EAfcH0JSFQY','Especial','vistas/img/usuarios/Wilhem/621.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:13'),
                              (28,'Diana Santos','Dsantos','20EAfcH0JSFQY','vendedor','vistas/img/usuarios/Dsantos/753.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:13'),
                              (29,'Tatiana Santos','Tsantos','20EAfcH0JSFQY','vendedor','vistas/img/usuarios/Tsantos/879.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:14'),
                              (30,'Dario Jimenez','Djimenez','20EAfcH0JSFQY','vendedor','vistas/img/usuarios/Djimenez/704.png',1,'2017-12-19 20:20:09','2021-01-24 02:32:15'),
                              (34,'Kiara Carvajal','Kcarvajal','20EAfcH0JSFQY','Especial','vistas/img/usuarios/Kcarvajal/694.png',1,'2017-12-19 20:20:09','2021-01-24 02:58:24'),
                              (35,'Pedro Perez','Pperez','20EAfcH0JSFQY','Administrador','vistas/img/usuarios/Pperez/841.png',1,'2021-01-24 03:33:30','2021-01-24 08:33:30'),
                              (36,'Luz Bernal','Lbernal','20EAfcH0JSFQY','Administrador','vistas/img/usuarios/Lbernal/814.png',1,'2021-01-24 04:01:13','2021-01-24 09:01:13');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-24 17:48:36
