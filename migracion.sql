-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: tso_practica
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
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (3,'Bolígrafo de tinta azul',6.00,300),(4,'Bolígrafo de tinta roja',6.00,250),(5,'Libreta profesional cuadro chico',28.00,120),(6,'Libreta profesional raya',28.00,115),(7,'Libreta profesional cuadro grande',28.00,100),(8,'Cuaderno francés raya',18.50,150),(9,'Cuaderno francés cuadro',18.50,140),(10,'Cuaderno italiano raya',222.00,180),(11,'Borrador de migajón',8.00,200),(12,'Sacapuntas metálico',5.50,180),(13,'Regla de plástico 30 cm',10.00,90),(14,'Juego de geometría',35.00,60),(15,'Compás de precisión',45.00,45),(16,'Tijeras escolares punta roma',14.00,80),(18,'Pegamento líquido blanco 125 ml',16.50,75),(19,'Cinta adhesiva transparente chica',12.00,110),(20,'Cinta de aislar negra',15.00,50),(21,'Marcador para pizarrón negro',25.00,85),(22,'Marcador para pizarrón azul',25.00,80),(23,'Marcador para pizarrón rojo',25.00,75),(24,'Marcador permanente negro',22.00,90),(25,'Marcador permanente azul',22.00,85),(26,'Pluma de gel negra',18.00,60),(27,'Pluma de gel azul',18.00,60),(28,'Pluma de gel roja',18.00,50),(29,'Marcatextos amarillo',16.00,120),(30,'Marcatextos verde',16.00,100),(31,'Corrector en lápiz',24.00,88),(32,'Corrector en cinta',38.00,40),(33,'Sacapuntas de plástico con depósito',12.00,95),(34,'Caja de clips estándar 100 pzas',15.00,100),(35,'Caja de clips mariposa',18.00,85),(36,'Engrapadora de escritorio',65.00,30),(37,'Caja de grapas 26/6',11.00,120),(38,'Perforadora de 2 orificios',75.00,25),(39,'Post-it notas adhesivas 3x3',30.00,85),(40,'Notas adhesivas con líneas',32.00,65),(41,'Paquete de 500 hojas blancas tamaño carta',95.00,120),(42,'Paquete de 500 hojas blancas tamaño oficio',105.00,90),(43,'Carpetas de argollas tamaño carta',45.00,40),(44,'Carpetas de argollas tamaño oficio',50.00,35),(45,'Sobres manila tamaño carta',5.00,200),(46,'Sobres manila tamaño oficio',6.00,180),(47,'Micas para laminar tamaño carta',3.50,150),(48,'Micas para laminar tamaño credencial',1.50,300),(49,'Pliego de papel américa varios colores',4.00,250),(50,'Pliego de papel celofán',6.00,210),(51,'Pliego de papel china',3.00,300),(52,'Pliego de papel crepe',6.50,180),(53,'Cartulina blanca',5.50,220),(54,'Cartulina de color',6.00,200),(55,'Cartón corrugado tamaño carta',9.00,85),(56,'Foami liso tamaño carta',8.00,160),(57,'Foami diamantado tamaño carta',12.00,95),(58,'Silicón en barra delgado',3.00,500),(59,'Silicón en barra grueso',6.00,400),(60,'Pistola para silicón chica',55.00,35),(61,'Pistola para silicón grande',120.00,15),(62,'Pintura acrílica 50ml negra',18.00,65),(63,'Pintura acrílica 50ml blanca',18.00,60),(64,'Pintura acrílica 50ml azul',18.00,55),(65,'Pintura acrílica 50ml roja',18.00,55),(66,'Pincel plano número 4',12.00,115),(67,'Pincel redondo número 2',10.00,125),(68,'Juego de pinceles 5 piezas',45.00,40),(69,'Acuarelas 12 colores',25.00,70),(70,'Colores de madera 12 piezas',38.00,80),(71,'Colores de madera 24 piezas',72.00,45),(72,'Plumones de agua 12 piezas',28.00,90),(73,'Plumones de agua 24 piezas',55.00,60),(74,'Plastilina 12 barras',22.00,65),(75,'Plastilina moldeable 6 colores',35.00,50),(76,'Cinta canela 48mm x 50m',32.00,110),(77,'Cinta masking tape 18mm',16.00,140),(78,'Cinta masking tape 36mm',28.00,95),(79,'Marcador para tela negro',28.00,40),(80,'Marcador para CD/DVD doble punta',19.00,75),(81,'Tarjetas de presentación 100 piezas',65.00,30),(82,'Folder tamaño carta color beige',3.50,400),(83,'Folder tamaño oficio color beige',4.00,380),(84,'Separadores de pestañas 10 divisiones',18.00,50),(85,'Broche latonado para folder 50 pzas',24.00,60),(86,'Libro de actas 100 hojas',110.00,18),(87,'Libro de contabilidad 2 columnas',85.00,22),(88,'Tarjetero de escritorio 50 tarjetas',40.00,15),(89,'Dispensador de cinta adhesiva',48.00,25),(90,'Gomas de borrar para lápiz',4.00,250),(91,'Lápices de colores pastel 10 piezas',42.00,35),(92,'Regla de aluminio 30 cm',28.00,50),(93,'Sacapuntas eléctrico de escritorio',280.00,8),(94,'Cúter retráctil chico',14.00,100),(95,'Cúter reforzado grande',26.00,50),(96,'Repuestos de navaja para cúter',12.00,70),(97,'Base para corte 30x45 cm',165.00,12),(98,'Compás de metal con adaptador',78.00,20),(99,'Lupa de mano con luz led',88.00,18),(100,'Calculadora de bolsillo 8 dígitos',55.00,30),(101,'Lapiz de Luis',200.85,132),(104,'Lapicera Mapache',45.89,200);
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-24 15:13:49
