-- MySQL dump 10.13  Distrib 8.4.5, for Linux (x86_64)
--
-- Host: 172.18.0.2    Database: rap_cms
-- ------------------------------------------------------
-- Server version	5.7.44

--
-- Dumping data for table `administrators`
--

LOCK TABLES `administrators` WRITE;
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
INSERT INTO `administrators` VALUES 
(1,'Alexndre','alexandre@gmail.com','$2y$12$6kRJ8H0scL0kSLDf3jVBceN5lrQvbPM0Ft271BO1CkZtM1wmvmiv6',10,'2025-05-06 01:44:23',NULL),
(2,'Shop Admin','admin@shop.com.br','$2y$12$lMHXC42cqj3FjXhHD2pjKui1M0zHFupg01lJo3mnYXLec1315a0Ma',10,'2025-05-06 12:05:30',NULL);
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES 
(1,'Alendre','alendre@gmail.com','$2y$12$SCf0JOZO3rlZYi09Wm0o3equ6/bs7itEe3Py.HU3C7swUiC8N8xky',10,'2025-04-29 02:57:07','2025-04-29 02:57:07'),
(2,'FÃ¡tima','fatima@gmail.com','$2y$12$f60uOnDnC7WrqxPCSFAVD.1eyxneUvyIRm6T6CRZ/Cm4kznaDoo76',10,'2025-04-29 20:38:45','2025-04-29 20:38:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

-- Dump completed on 2025-05-06 11:16:15
