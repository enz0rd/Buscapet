-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bdbuscapet
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `categorias_empresas`
--

DROP TABLE IF EXISTS `categorias_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias_empresas` (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `ds_categoria` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`idcategoria`),
  UNIQUE KEY `ds_categoria` (`ds_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias_empresas`
--

LOCK TABLES `categorias_empresas` WRITE;
/*!40000 ALTER TABLE `categorias_empresas` DISABLE KEYS */;
INSERT INTO `categorias_empresas` VALUES (1,'Agropecuária'),(2,'Petshop'),(3,'Veterinário');
/*!40000 ALTER TABLE `categorias_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias_prodser`
--

DROP TABLE IF EXISTS `categorias_prodser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias_prodser` (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `ds_categoria` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`idcategoria`),
  UNIQUE KEY `ds_categoria` (`ds_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias_prodser`
--

LOCK TABLES `categorias_prodser` WRITE;
/*!40000 ALTER TABLE `categorias_prodser` DISABLE KEYS */;
INSERT INTO `categorias_prodser` VALUES (3,'Acessórios'),(7,'Estética'),(6,'Higiene'),(4,'Médico'),(1,'Ração'),(2,'Remédio'),(5,'Roupa');
/*!40000 ALTER TABLE `categorias_prodser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `idempresa` int NOT NULL AUTO_INCREMENT,
  `logoempresa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ds_empresa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_empresa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contato_empresa` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idcategoria` int NOT NULL,
  `endereco_empresa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`idempresa`),
  UNIQUE KEY `ds_empresa` (`ds_empresa`,`contato_empresa`,`endereco_empresa`),
  KEY `idcategoria` (`idcategoria`),
  CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_empresas` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (2,'agropet.png','AgroPet','Uma agropecuária','4995798532',1,'Rua das Abobrinhas, 221'),(3,'pet-love.png','PetLove','O melhor Petshop do Rio de Janeiro','2184185698',2,'Rua dos Coqueiros, 5432'),(4,'pet&cia.jpg','Pet&Cia','Petshop','4532144589',2,'Avenida São Jorge, 234');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `img_produto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ds_produto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `qtd_produto` int NOT NULL,
  `desc_produto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idcategoria` int NOT NULL,
  `idempresa` int NOT NULL,
  PRIMARY KEY (`idproduto`),
  KEY `idempresa` (`idempresa`),
  KEY `idcategoria` (`idcategoria`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_prodser` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'brinquedo.jpg','Brinquedo Mordedor',4.50,10,'Um brinquedo muito bom para o seu cão morder',3,2),(2,'racao2.jpg','Ração Pitty 1kg',29.90,25,'A ração Pitty é a melhor para o seu cão',1,2),(3,'racao.jpg','Ração DG 2kg',49.90,30,'Ração premium para o seu pet',1,3),(4,'remedio.jpg','Antitóxico',34.99,5,'O antitóxico para o seu pet',2,3);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `idservico` int NOT NULL AUTO_INCREMENT,
  `img_servico` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ds_servico` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `valor_servico` decimal(10,2) NOT NULL,
  `desc_servico` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idcategoria` int NOT NULL,
  `idempresa` int NOT NULL,
  PRIMARY KEY (`idservico`),
  KEY `idempresa` (`idempresa`),
  KEY `idcategoria` (`idcategoria`),
  CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_prodser` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (2,'Banho.jpg','Banho para Porte Médio',89.90,'',6,3),(3,'Consulta.jpg','Consulta médica',109.90,'',4,4),(4,'Castracao.jpg','Castração',79.90,'',4,2),(5,'Tosa.jpg','Tosa',50.00,'',7,3);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-30 13:45:41
