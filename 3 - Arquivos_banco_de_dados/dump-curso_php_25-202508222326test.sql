/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: curso_php_25
-- ------------------------------------------------------
-- Server version	10.11.13-MariaDB-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `enderecos` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(100) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `tipo_endereco` varchar(100) NOT NULL,
  `id_pessoas` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES
(2,'garfield heights','los rebles avenue','apartamento',4,'pasadena','ca','90001','eua','apartamento',NULL),
(3,'coqueiros','Avenida Almirante Tamandaré','casa',78,'florianopolis','sc','88080-160','brasil','residencial',NULL);
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoas` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `estado_civil` enum('SOLTEIRO','CASADO','VIÚVO') NOT NULL DEFAULT 'SOLTEIRO',
  `nome_mae` varchar(100) NOT NULL,
  `nome_pai` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `escolaridade` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_usuario` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoas_usuarios_FK` (`id_usuario`),
  CONSTRAINT `pessoas_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` VALUES
(4,'cristian vieira','1998-02-02','M','SOLTEIRO','sol','zé','11111111111','ensino medio completo','11111111111','breezxyvieira_@gmail.com',1),
(5,'sheldon cooper','1980-02-26','M','CASADO','mary','george','22222222222','superior completo','22222222222','sheldonc@gmail.com',2),
(6,'new desenvolvedor','1975-02-16','M','VIÚVO','fulana','fulano','33333333333','superior completo','33333333333','programador@gmail.com',3);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_recuperacao` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_perfil` varchar(100) NOT NULL,
  `permicoes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES
(1,'cristianvieira','0123','cristian vieira','breezxyvieira@gmail.com',1,'adm','all'),
(2,'sheldoncooper','4567','sheldon cooper','sheldonc@gmail.com',0,'convidado','deny'),
(3,'newprogramador','9876','new programador','programador@gmail.com',1,'convidado','parcial');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_php_25'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-08-22 23:26:35
