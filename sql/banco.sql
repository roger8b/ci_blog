-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `postagem`
--

DROP TABLE IF EXISTS `postagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postagem` (
  `pst_id` int(11) NOT NULL AUTO_INCREMENT,
  `pst_titulo` varchar(45) DEFAULT NULL,
  `pst_conteudo` longtext,
  `pst_dt_criado` date DEFAULT NULL,
  `pst_dt_postado` date DEFAULT NULL,
  `usuario_usr_id` int(11) NOT NULL,
  PRIMARY KEY (`pst_id`),
  KEY `fk_postagem_usuario_idx` (`usuario_usr_id`),
  CONSTRAINT `fk_postagem_usuario` FOREIGN KEY (`usuario_usr_id`) REFERENCES `usuario` (`usr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postagem`
--

LOCK TABLES `postagem` WRITE;
/*!40000 ALTER TABLE `postagem` DISABLE KEYS */;
INSERT INTO `postagem` (`pst_id`,`pst_titulo`, `pst_conteudo`, `pst_dt_criado`, `pst_dt_postado`, `usuario_usr_id`) VALUES 
                              (1,'Primeiro Post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tincidunt quam. Vivamus viverra a dui non aliquet. Suspendisse accumsan molestie massa, sed dapibus arcu maximus sed. Etiam non neque ullamcorper, pellentesque enim id, pellentesque lacus. Mauris congue mollis facilisis. Integer finibus suscipit tortor at maximus. Morbi sed purus fringilla.','2017-09-22','2017-09-22',1),
                              (2,'Terceiro Post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tincidunt quam. Vivamus viverra a dui non aliquet. Suspendisse accumsan molestie massa, sed dapibus arcu maximus sed. Etiam non neque ullamcorper, pellentesque enim id, pellentesque lacus. Mauris congue mollis facilisis. Integer finibus suscipit tortor at maximus. Morbi sed purus fringilla.','2017-09-22','2017-09-22',2),
                              (3,'Quarto Post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tincidunt quam. Vivamus viverra a dui non aliquet. Suspendisse accumsan molestie massa, sed dapibus arcu maximus sed. Etiam non neque ullamcorper, pellentesque enim id, pellentesque lacus. Mauris congue mollis facilisis. Integer finibus suscipit tortor at maximus. Morbi sed purus fringilla.','2017-09-22','2017-09-22',1),
                              (4,'Quinto Post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis tincidunt quam. Vivamus viverra a dui non aliquet. Suspendisse accumsan molestie massa, sed dapibus arcu maximus sed. Etiam non neque ullamcorper, pellentesque enim id, pellentesque lacus. Mauris congue mollis facilisis. Integer finibus suscipit tortor at maximus. Morbi sed purus fringilla.','2017-09-22','2017-09-22',2);
/*!40000 ALTER TABLE `postagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nome` varchar(45) DEFAULT NULL,
  `usr_email` varchar(45) DEFAULT NULL,
  `usr_senha` varchar(45) DEFAULT NULL,
  `usr_dt_entrada` date DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'ROGER','ROGER.8B@GMAIL.COM','1234','2017-09-22'),(2,'MICHELI','MI.8B@GMAIL.COM','1234','2017-09-25');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-25 16:53:17
