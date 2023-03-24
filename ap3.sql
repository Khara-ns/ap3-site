CREATE DATABASE  IF NOT EXISTS `all4sport_bdd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `all4sport_bdd`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: all4sport_bdd
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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
-- Table structure for table `CLIENT`
--

DROP TABLE IF EXISTS `CLIENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CLIENT` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `client_nom` varchar(45) NOT NULL,
  `client_prenom` varchar(45) NOT NULL,
  `client_adresse` varchar(45) NOT NULL,
  `client_email` varchar(45) NOT NULL,
  `client_dateNaissance` date NOT NULL,
  `client_panier` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `client_dateDernierAchat` date DEFAULT NULL,
  `client_motDePasseHash` varchar(255) DEFAULT NULL,
  `client_nomUtilisateur` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `client_id_UNIQUE` (`client_id`),
  UNIQUE KEY `client_email_UNIQUE` (`client_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CLIENT`
--

LOCK TABLES `CLIENT` WRITE;
/*!40000 ALTER TABLE `CLIENT` DISABLE KEYS */;
INSERT INTO `CLIENT` VALUES (1,'Thomas','Jerry','2282 Broadway Street',' JerryLThomas@teleworm.us','1960-12-10','1:3,1:2,1:1,2:1,',NULL,'a90202bae53a3c154a1cec8bfeaa00e18b68a80b62bf51425431c4728d87ade7','user1'),(2,'Jeon','Lucille','1283 Broadway Street','LucileFJeon@jourrapide.com ','1951-11-02',NULL,NULL,'3e0a684314667e890c05ce95a3b1ac1fc13867da3845e42559b4dd7b45549f89','user2');
/*!40000 ALTER TABLE `CLIENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMMANDE`
--

DROP TABLE IF EXISTS `COMMANDE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `COMMANDE` (
  `commande_id` int NOT NULL AUTO_INCREMENT,
  `commande_typeLivraison` varchar(45) NOT NULL,
  `commande_lieuLivraison` varchar(45) NOT NULL,
  `client_fk` int NOT NULL,
  PRIMARY KEY (`commande_id`),
  UNIQUE KEY `commande_id_UNIQUE` (`commande_id`),
  KEY `fk_client_idx` (`client_fk`),
  CONSTRAINT `fk_client` FOREIGN KEY (`client_fk`) REFERENCES `CLIENT` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMMANDE`
--

LOCK TABLES `COMMANDE` WRITE;
/*!40000 ALTER TABLE `COMMANDE` DISABLE KEYS */;
/*!40000 ALTER TABLE `COMMANDE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ENFANTS`
--

DROP TABLE IF EXISTS `ENFANTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ENFANTS` (
  `enfant_id` int NOT NULL AUTO_INCREMENT,
  `enfant_dateNaissance` date NOT NULL,
  `client_fk` int NOT NULL,
  PRIMARY KEY (`enfant_id`),
  UNIQUE KEY `enfant_id_UNIQUE` (`enfant_id`),
  KEY `clientenfant_fk_idx` (`client_fk`),
  CONSTRAINT `clientenfant_fk` FOREIGN KEY (`client_fk`) REFERENCES `CLIENT` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ENFANTS`
--

LOCK TABLES `ENFANTS` WRITE;
/*!40000 ALTER TABLE `ENFANTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `ENFANTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ETAT`
--

DROP TABLE IF EXISTS `ETAT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ETAT` (
  `etat_id` int NOT NULL AUTO_INCREMENT,
  `etat_code` tinyint(1) NOT NULL,
  `etat_libelle` varchar(45) NOT NULL,
  `commande_fk` int NOT NULL,
  PRIMARY KEY (`etat_id`),
  UNIQUE KEY `etat_id_UNIQUE` (`etat_id`),
  KEY `fk_commande_idx` (`commande_fk`),
  CONSTRAINT `fk_commande` FOREIGN KEY (`commande_fk`) REFERENCES `COMMANDE` (`commande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ETAT`
--

LOCK TABLES `ETAT` WRITE;
/*!40000 ALTER TABLE `ETAT` DISABLE KEYS */;
/*!40000 ALTER TABLE `ETAT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FOURNISSEUR`
--

DROP TABLE IF EXISTS `FOURNISSEUR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FOURNISSEUR` (
  `fournisseur_id` int NOT NULL AUTO_INCREMENT,
  `fournisseur_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`fournisseur_id`),
  UNIQUE KEY `fournisseur_id_UNIQUE` (`fournisseur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FOURNISSEUR`
--

LOCK TABLES `FOURNISSEUR` WRITE;
/*!40000 ALTER TABLE `FOURNISSEUR` DISABLE KEYS */;
INSERT INTO `FOURNISSEUR` VALUES (1,'Mulliez');
/*!40000 ALTER TABLE `FOURNISSEUR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LIEUX_STOCKAGE`
--

DROP TABLE IF EXISTS `LIEUX_STOCKAGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LIEUX_STOCKAGE` (
  `lieu_id` int NOT NULL AUTO_INCREMENT,
  `entrepot_adresse` varchar(45) NOT NULL,
  `type` int NOT NULL,
  PRIMARY KEY (`lieu_id`),
  UNIQUE KEY `lieu_id_UNIQUE` (`lieu_id`),
  UNIQUE KEY `entrepot_adresse_UNIQUE` (`entrepot_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LIEUX_STOCKAGE`
--

LOCK TABLES `LIEUX_STOCKAGE` WRITE;
/*!40000 ALTER TABLE `LIEUX_STOCKAGE` DISABLE KEYS */;
INSERT INTO `LIEUX_STOCKAGE` VALUES (1,'Le_Havre',1),(2,'Paris',0);
/*!40000 ALTER TABLE `LIEUX_STOCKAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PHOTOS`
--

DROP TABLE IF EXISTS `PHOTOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PHOTOS` (
  `photo_id` int NOT NULL AUTO_INCREMENT,
  `photo_fichier` varchar(45) NOT NULL,
  `produit_fk` int NOT NULL,
  PRIMARY KEY (`photo_id`),
  UNIQUE KEY `photo_fichier_UNIQUE` (`photo_fichier`),
  KEY `fk_photoproduit_idx` (`produit_fk`),
  CONSTRAINT `produitphoto_fk` FOREIGN KEY (`produit_fk`) REFERENCES `PRODUITS` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PHOTOS`
--

LOCK TABLES `PHOTOS` WRITE;
/*!40000 ALTER TABLE `PHOTOS` DISABLE KEYS */;
INSERT INTO `PHOTOS` VALUES (1,'rate1.png',1),(2,'rate2.png',1),(3,'bas1.jpg',2),(4,'bas2.jpg',2);
/*!40000 ALTER TABLE `PHOTOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `PHOTOSOLO`
--

DROP TABLE IF EXISTS `PHOTOSOLO`;
/*!50001 DROP VIEW IF EXISTS `PHOTOSOLO`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `PHOTOSOLO` AS SELECT 
 1 AS `photo_id`,
 1 AS `photo_fichier`,
 1 AS `produit_fk`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `PRODUITS`
--

DROP TABLE IF EXISTS `PRODUITS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PRODUITS` (
  `produit_id` int NOT NULL AUTO_INCREMENT,
  `produit_nom` varchar(45) NOT NULL,
  `produit_ref` varchar(45) NOT NULL,
  `produit_coutHT` int NOT NULL,
  `produit_description` varchar(45) NOT NULL,
  `rayon_fk` int NOT NULL,
  `fournisseur_fk` int NOT NULL,
  `stockage_fk` int NOT NULL,
  `uuid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`produit_id`),
  UNIQUE KEY `produit_id_UNIQUE` (`produit_id`),
  KEY `rayonproduit_fk_idx` (`rayon_fk`),
  KEY `stockageproduit_fk_idx` (`stockage_fk`),
  KEY `fournisseurproduit_fk_idx` (`fournisseur_fk`),
  CONSTRAINT `fournisseurproduit_fk` FOREIGN KEY (`fournisseur_fk`) REFERENCES `FOURNISSEUR` (`fournisseur_id`),
  CONSTRAINT `rayonproduit_fk` FOREIGN KEY (`rayon_fk`) REFERENCES `RAYON` (`rayon_id`),
  CONSTRAINT `stockageproduit_fk` FOREIGN KEY (`stockage_fk`) REFERENCES `LIEUX_STOCKAGE` (`lieu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUITS`
--

LOCK TABLES `PRODUITS` WRITE;
/*!40000 ALTER TABLE `PRODUITS` DISABLE KEYS */;
INSERT INTO `PRODUITS` VALUES (1,'Raquette_De_Tennis','RaTe80',3000,'Raquette_Super',2,1,1,'5535b774-c265-11ed-afa1-0242ac120002'),(2,'Basquettes_De_Course','BaCo80',1500,'Magnifiques_Basquettes',1,1,1,NULL);
/*!40000 ALTER TABLE `PRODUITS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QUANTITE`
--

DROP TABLE IF EXISTS `QUANTITE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `QUANTITE` (
  `produit_fk` int NOT NULL,
  `commande_fk` int NOT NULL,
  PRIMARY KEY (`produit_fk`,`commande_fk`),
  KEY `fk_commande_idx` (`commande_fk`),
  CONSTRAINT `fk_command` FOREIGN KEY (`commande_fk`) REFERENCES `COMMANDE` (`commande_id`),
  CONSTRAINT `fk_produit` FOREIGN KEY (`produit_fk`) REFERENCES `PRODUITS` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QUANTITE`
--

LOCK TABLES `QUANTITE` WRITE;
/*!40000 ALTER TABLE `QUANTITE` DISABLE KEYS */;
/*!40000 ALTER TABLE `QUANTITE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RAYON`
--

DROP TABLE IF EXISTS `RAYON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RAYON` (
  `rayon_id` int NOT NULL AUTO_INCREMENT,
  `rayon_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`rayon_id`),
  UNIQUE KEY `rayon_id_UNIQUE` (`rayon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RAYON`
--

LOCK TABLES `RAYON` WRITE;
/*!40000 ALTER TABLE `RAYON` DISABLE KEYS */;
INSERT INTO `RAYON` VALUES (1,'Course'),(2,'Tennis'),(3,'Basket');
/*!40000 ALTER TABLE `RAYON` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `PHOTOSOLO`
--

/*!50001 DROP VIEW IF EXISTS `PHOTOSOLO`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `PHOTOSOLO` AS select `PHOTOS`.`photo_id` AS `photo_id`,`PHOTOS`.`photo_fichier` AS `photo_fichier`,`PHOTOS`.`produit_fk` AS `produit_fk` from `PHOTOS` limit 1 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-24 13:24:35
