-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: superpapeleriatony_equipo_15
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Producto` varchar(100) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Stock` int NOT NULL,
  `Acciones` varchar(50) DEFAULT 'Activo',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'prueba',48.00,150,'Activo'),(2,'Bolígrafo Bic Cristal Negro c/12',48.00,120,'Activo'),(3,'Bolígrafo Bic Cristal Rojo c/12',48.00,80,'Activo'),(4,'Lápiz Dixon Ticonderoga del No. 2 c/10',45.50,200,'Activo'),(5,'Goma de borrar Factis M20',8.50,300,'Activo'),(6,'Sacapuntas de metal Maped',12.00,180,'Activo'),(7,'Cuaderno Scribe Clásico Raya 100hj',28.50,500,'Activo'),(8,'Cuaderno Scribe Clásico Cuadro Gde 100hj',28.50,450,'Activo'),(9,'Cuaderno Scribe Clásico Cuadro Chco 100hj',28.50,300,'Activo'),(10,'Marcador Permanente Sharpie Negro c/2',35.00,100,'Activo'),(11,'Marcador para Pizarrón Expo Negro',24.00,150,'Activo'),(12,'Marcatextos Stabilo Boss Original Amarillo',29.00,90,'Activo'),(13,'Pegamento en Barra Pritt 22g',32.50,250,'Activo'),(14,'Pegamento Líquido Elmers 118ml',26.00,80,'Activo'),(15,'Tijeras Escolares Maped Essentials',19.50,140,'Activo'),(16,'Regla de Plástico Flexible 30cm Baco',11.00,220,'Activo'),(17,'Juego de Geometría Maped 5 pzas',49.00,95,'Activo'),(18,'Compás de Precisión Staton',38.00,70,'Activo'),(19,'Colores Prismacolor Junior c/24',185.00,65,'Activo'),(20,'Crayones Crayola c/24',45.00,110,'Activo'),(21,'Plumones Crayola SuperTips c/50',275.00,40,'Activo'),(22,'Papel Bond Blanco Tamaño Carta c/500hj',125.00,130,'Activo'),(23,'Papel Bond Blanco Tamaño Oficio c/500hj',145.00,85,'Activo'),(24,'Carpeta de 3 Argollas Lefort 1 pulg',55.00,120,'Activo'),(25,'Protegidos de Hojas Oficio c/100 BC',78.00,90,'Activo'),(26,'Notas Adhesivas Post-it 3x3 Amarillo',34.00,210,'Activo'),(27,'Calculadora Científica Casio fx-82MS',299.00,50,'Activo'),(28,'Engrapadora de Golpe Pilot c/Grapas',115.00,45,'Activo'),(29,'Grapas Estándar Pilot c/5000',22.00,160,'Activo'),(30,'Clips Estándar Baco c/100',14.50,240,'Activo'),(31,'Cinta Adhesiva Tuk 12mm x 33m',16.00,190,'Activo'),(32,'Despachador de Cinta de Escritorio',45.00,35,'Activo'),(33,'Fólder Tamaño Carta Crema c/100',110.00,75,'Activo'),(34,'Fólder Tamaño Oficio Crema c/100',135.00,60,'Activo'),(35,'Cutter Grande Truper 6 pulg',24.00,80,'Activo'),(36,'Perforadora de 2 orificios Baco',68.00,40,'Activo'),(37,'Gises Blancos Azor c/50',32.00,55,'Activo'),(38,'Plastilina Papalote c/10 barras',26.50,130,'Activo'),(39,'Papel Cascarón 1/8 de pliego',7.00,300,'Activo'),(40,'Papel Ilustración 1/4 de pliego',16.50,150,'Activo'),(41,'Cartulina Blanca Starpak c/10',35.00,100,'Activo'),(42,'Block de Dibujo Scribe c/20hj',42.00,85,'Activo'),(43,'Fomi Tamaño Carta Colores Surtidos c/10',22.00,140,'Activo'),(44,'Papel Crepé Colores Surtidos',6.50,400,'Activo'),(45,'Papel China Colores Surtidos',3.50,500,'Activo'),(46,'Sacapuntas Eléctrico Bostitch',480.00,15,'Activo'),(47,'Marcador para CD/DVD Sharpie Doble Punta',28.00,95,'Activo'),(48,'Libreta de Taquigrafía Scribe',24.50,110,'Activo'),(49,'Goma Moldeable para Dibujo Lyra',18.00,70,'Activo'),(50,'Pintura Acrílica Politec 100ml Surtido',34.00,125,'Activo'),(51,'Cuaderno Mapita Rayas 60 hojas',45.80,100,'Activo');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-01  8:36:57
