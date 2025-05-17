-- MySQL dump 10.13  Distrib 8.4.5, for Linux (x86_64)
--
-- Host: 172.18.0.2    Database: rap_cms
-- ------------------------------------------------------
-- Server version	5.7.44
--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

LOCK TABLES `administrators` WRITE;
INSERT INTO `administrators` VALUES (1,'Alexndre','alexandre@gmail.com','$2y$12$gBT.j0gNWRmHEy9JYcfa5uzKnEbWPKTZ.WORVWiHJEhWhmztvGNGm',NULL,'10','2025-05-06 01:44:23',NULL),(2,'Shop Admin','admin@shop.com.br','$2y$12$6HO5EykYOUT7XuVirQvFHOo.DNSqWMPeA7JTqR4Qd8xnmFGUOI.ou','(41) 9 9999-9999','10','2025-05-06 12:05:30','2025-05-11 00:11:49');
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
INSERT INTO `brands` VALUES (1,'Chase','2025-05-11 11:05:45',NULL),(3,'Adidas','2025-05-12 12:05:26',NULL),(4,'Brasil Surf','2025-05-12 12:05:46','2025-05-12 12:05:12'),(5,'Topper','2025-05-12 12:05:27',NULL),(6,'Rainha','2025-05-12 12:05:24',NULL),(7,'Malve','2025-05-12 12:05:40',NULL);
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
INSERT INTO `categories` VALUES (1,'Clothes','2025-05-12 01:05:49',NULL),(2,'Jacket','2025-05-12 01:05:24',NULL),(3,'Sweetshirt','2025-05-12 01:05:46',NULL),(4,'T-shirt','2025-05-12 01:05:50',NULL),(5,'Pants','2025-05-12 01:05:40',NULL),(6,'Pullover','2025-05-12 01:05:13',NULL),(7,'Crooped','2025-05-12 01:05:46',NULL),(8,'Shook','2025-05-12 01:05:21',NULL),(9,'Head band','2025-05-12 01:05:38',NULL);
UNLOCK TABLES;

--
-- Table structure for table `collors`
--

DROP TABLE IF EXISTS `collors`;
CREATE TABLE `collors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collors`
--

LOCK TABLES `collors` WRITE;
INSERT INTO `collors` VALUES (1,'Blue Light','2025-05-12 01:05:10',NULL),(2,'Blue','2025-05-12 01:05:14',NULL),(3,'Bege','2025-05-12 01:05:26',NULL),(4,'White','2025-05-12 01:05:35',NULL),(5,'Black','2025-05-12 01:05:44',NULL),(6,'Pink','2025-05-12 01:05:03',NULL);
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_address_id` int(11) unsigned NOT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('on_hold','paid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on_hold',
  `delivered` enum('pending','shipped','delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_order_idx` (`user_id`),
  CONSTRAINT `fk_orders_order` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
INSERT INTO `orders` VALUES (1,32,6,'3','254','paid','pending','2025-05-17 07:05:34','2025-05-17 10:05:03');
UNLOCK TABLES;

--
-- Table structure for table `orders_items`
--

DROP TABLE IF EXISTS `orders_items`;
CREATE TABLE `orders_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_items_user_idx` (`user_id`),
  KEY `fk_orders_items_order_idx` (`order_id`),
  KEY `fk_orders_items_products_idx` (`product_id`),
  CONSTRAINT `fk_orders_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_items_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_items_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_items`
--

LOCK TABLES `orders_items` WRITE;
INSERT INTO `orders_items` VALUES (1,32,1,2,'2025-05-17 07:05:34'),(2,32,1,1,'2025-05-17 07:05:34'),(3,32,1,3,'2025-05-17 07:05:34');
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payments_user_idx` (`user_id`),
  KEY `fk_payments_order_idx` (`order_id`),
  CONSTRAINT `fk_payments_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_payments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
INSERT INTO `payments` VALUES (1,32,1,'7JW93902A81393152','2025-05-17 10:05:03',NULL);
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `title` varchar(145) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Draft','Published') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users_idx` (`user_id`),
  CONSTRAINT `fk_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
INSERT INTO `posts` VALUES (3,1,'lorem ipsum dolor sit amet','Turpis faucibus est ultricies sagittis scelerisque magnis platea vitae porta massa condimentum, adipiscing mauris dapibus ex maecenas vehicula tortor primis habitasse sed. Ullamcorper fringilla at scelerisque sit convallis molestie purus parturient pellentesque varius vitae blandit dis mus nibh, et congue integer fames semper hac ante accumsan aliquet nunc felis phasellus proin placerat. Fames libero nostra at leo arcu felis adipiscing cubilia semper sociosqu sem curae lectus ullamcorper vestibulum netus cras, feugiat parturient mi non facilisis platea massa porta senectus risus dapibus phasellus ornare egestas pretium nisi. Malesuada nullam mollis nunc tellus venenatis hendrerit gravida, aenean semper lectus interdum commodo luctus, ligula vulputate quisque curae congue viverra. Purus est et ultricies libero at venenatis orci neque, sollicitudin elit donec sem suspendisse etiam.','Draft','2025-05-02 00:14:03',NULL),(4,1,'Lorem ipsum dolor sit amet','Edited\r\nDis accumsan dapibus felis hendrerit malesuada potenti odio turpis tellus facilisi posuere mollis orci eros ad consequat, curae dictumst rutrum eget libero ullamcorper dignissim ridiculus conubia habitant finibus commodo cursus magna tortor. Consectetur at nisi maximus purus magna lacinia felis curae in, leo netus vitae mus dui sem aenean lectus, ante cubilia suscipit nascetur dictumst vehicula ex conubia. Enim quis dis dictumst aptent ligula eros condimentum natoque faucibus massa primis, potenti porta cras quisque tellus penatibus tempor elementum habitant. Facilisis ipsum feugiat lacus cras vivamus felis dapibus curabitur sed tristique et porttitor, leo adipiscing habitant curae varius placerat vulputate torquent sapien volutpat lorem, sagittis eros iaculis ut elit mauris sit phasellus consequat cursus laoreet. Et non purus gravida diam vivamus consequat risus vestibulum nisi dictumst, tincidunt maximus iaculis imperdiet pretium condimentum sodales hendrerit suspendisse.','Published','2025-05-02 00:17:16','2025-05-02 01:50:31'),(6,1,'Edited lorem ipsum dolor sit amet','Dis accumsan dapibus felis hendrerit malesuada potenti odio turpis tellus facilisi posuere mollis orci eros ad consequat, curae dictumst rutrum eget libero ullamcorper dignissim ridiculus conubia habitant finibus commodo cursus magna tortor. Consectetur at nisi maximus purus magna lacinia felis curae in, leo netus vitae mus dui sem aenean lectus, ante cubilia suscipit nascetur dictumst vehicula ex conubia. Enim quis dis dictumst aptent ligula eros condimentum natoque faucibus massa primis, potenti porta cras quisque tellus penatibus tempor elementum habitant. Facilisis ipsum feugiat lacus cras vivamus felis dapibus curabitur sed tristique et porttitor, leo adipiscing habitant curae varius placerat vulputate torquent sapien volutpat lorem, sagittis eros iaculis ut elit mauris sit phasellus consequat cursus laoreet. Et non purus gravida diam vivamus consequat risus vestibulum nisi dictumst, tincidunt maximus iaculis imperdiet pretium condimentum sodales hendrerit suspendisse.','Draft','2025-05-02 00:20:36','2025-05-03 22:33:27'),(7,1,'lorem ipsum dolor sit amet','Integer adipiscing sed lobortis orci augue rhoncus ante, mi egestas feugiat praesent in. Vitae euismod morbi taciti quisque nisi mauris efficitur inceptos mi nibh risus, phasellus bibendum consequat tincidunt fermentum dictumst aenean viverra malesuada lobortis. Curae at ad auctor sollicitudin aliquam nunc lectus litora condimentum parturient duis vivamus tristique, nulla himenaeos habitasse ridiculus convallis porta fringilla porttitor congue ligula class. In felis habitasse nunc erat pulvinar donec lobortis per potenti finibus blandit, mollis magna sed porttitor commodo nascetur convallis volutpat aliquet. Scelerisque natoque facilisis litora augue convallis fames massa lacinia efficitur nascetur morbi a, aliquet penatibus imperdiet mi dignissim auctor lacus interdum nunc est euismod.','Draft','2025-05-02 00:20:49',NULL),(8,2,'Lorem ipsum dolor sit amet','Edited\r\nNostra venenatis habitasse habitant potenti posuere ridiculus magnis facilisis odio vitae sollicitudin quisque convallis, dapibus felis ligula donec faucibus natoque suspendisse tellus libero malesuada hac maximus. Posuere tortor aptent vestibulum convallis magna in urna scelerisque fringilla, tristique volutpat per at viverra quis ipsum natoque, auctor molestie proin mi aliquam felis rhoncus congue. Aliquam penatibus nec lacinia velit habitant volutpat est facilisi cubilia nullam ultricies iaculis eros mus nisi, felis imperdiet senectus vivamus lobortis ornare fermentum molestie dui vestibulum lacus luctus posuere dolor. Pellentesque condimentum in ad rhoncus mauris sodales fringilla nascetur facilisi faucibus suspendisse nisi, convallis quisque aptent amet congue semper suscipit vulputate eros libero.','Published','2025-05-04 15:53:31','2025-05-04 16:00:02'),(9,2,'Lorem ipsum dolor sit amet','Neque bibendum hac class velit per gravida posuere enim ullamcorper fermentum purus lectus consectetur eleifend, congue euismod venenatis vel aliquam maximus cubilia cras dapibus montes faucibus nisl. Est aliquet blandit aptent quisque justo per dui urna sem mollis lobortis, erat dignissim hendrerit praesent malesuada magna fames neque nostra. Libero quisque sodales montes ultricies mollis natoque himenaeos maecenas dignissim proin phasellus volutpat lorem sed tristique elit integer, adipiscing finibus aliquet ullamcorper augue sagittis diam amet vitae condimentum vehicula vulputate fringilla consectetur inceptos accumsan. Sit erat ad natoque aenean adipiscing elit ligula morbi facilisi massa vel, ornare tellus neque nibh egestas elementum maecenas sem volutpat ut, id consectetur vivamus praesent suspendisse tristique placerat malesuada odio rhoncus.','Published','2025-05-04 17:17:54','2025-05-04 17:39:42');
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adm_id` int(11) unsigned NOT NULL,
  `brand_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `collor_id` int(11) unsigned NOT NULL,
  `size_id` int(11) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Draft','Published') COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_products_brands_idx` (`brand_id`),
  KEY `fk_products_categories_idx` (`category_id`),
  KEY `fk_products_collors_idx` (`collor_id`),
  KEY `fk_products_adm_idx` (`adm_id`),
  KEY `fk_products_sizes_idx` (`size_id`),
  CONSTRAINT `fk_products_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrators` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_brands` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_collors` FOREIGN KEY (`collor_id`) REFERENCES `collors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_sizes` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
INSERT INTO `products` VALUES (1,2,1,4,4,2,'Tank top','tank-top',5,166,'Simple and beautiful tank top to be worn on fun occasions.','Published',0,'2025-05-12 03:05:09','2025-05-13 12:05:35'),(2,2,1,9,5,1,'Head band','head-band',5,54,'Com a HeadBand Chase Preto, vocÃª encontrarÃ¡ o acessÃ³rio perfeito para compor seu look. Produzida com material macio, sua peÃ§a estÃ¡ toda trabalhada em canelado, dando um toque de sofisticaÃ§Ã£o ao visual.','Published',0,'2025-05-12 02:05:39',NULL),(3,2,1,8,5,1,'Shook','shook',5,34,'Meia CHASE essencial para composiÃ§Ã£o do seu look.\r\n\r\nLavagem manual. Para mais detalhes conferir a etiqueta interna de cada peÃ§a.','Published',0,'2025-05-12 05:05:09',NULL);
UNLOCK TABLES;

--
-- Table structure for table `products_images`
--

DROP TABLE IF EXISTS `products_images`;
CREATE TABLE `products_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adm_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_images_products_idx` (`product_id`),
  KEY `fk_products_images_adm_idx` (`adm_id`),
  CONSTRAINT `fk_products_images_adm` FOREIGN KEY (`adm_id`) REFERENCES `administrators` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_images_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

LOCK TABLES `products_images` WRITE;
INSERT INTO `products_images` VALUES (1,2,1,'37eb44d4fc394a68ce82485ed83a324a2a9b4bb2.webp','/public/assets/uploads/products/','2025-05-14 03:05:08',NULL),(2,2,1,'64bee55cec27c4576b94a9dad141b9590be324d6.webp','/public/assets/uploads/products/','2025-05-14 03:05:08',NULL),(3,2,2,'fae709305bbd2fad7099d971d40632b6915faffa.webp','/public/assets/uploads/products/','2025-05-14 07:05:55',NULL),(4,2,2,'0dba3bcdd1da0049514176a57a52b2f51348cb2c.webp','/public/assets/uploads/products/','2025-05-14 07:05:55',NULL),(5,2,3,'eca656f3130edf7779a975de7f29d11eec46af2c.webp','/public/assets/uploads/products/','2025-05-14 07:05:54',NULL),(6,2,3,'1d0ee9a32fa29aa55f5b2304ef32fd2a19543817.webp','/public/assets/uploads/products/','2025-05-14 07:05:54',NULL);
UNLOCK TABLES;

--
-- Temporary view structure for view `products_view`
--

DROP TABLE IF EXISTS `products_view`;
SET @saved_cs_client     = @@character_set_client;
/*!50001 CREATE VIEW `products_view` AS SELECT 
 1 AS `id`,
 1 AS `brand_id`,
 1 AS `category_id`,
 1 AS `collor_id`,
 1 AS `size_id`,
 1 AS `name`,
 1 AS `slug`,
 1 AS `quantity`,
 1 AS `price`,
 1 AS `status`,
 1 AS `discount`,
 1 AS `description`,
 1 AS `brandsId`,
 1 AS `brands`,
 1 AS `categoriesId`,
 1 AS `categories`,
 1 AS `collorsId`,
 1 AS `collors`,
 1 AS `sizesId`,
 1 AS `sizes`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
INSERT INTO `sizes` VALUES (1,'Small','2025-05-12 11:05:13',NULL),(2,'Medium','2025-05-12 11:05:24',NULL),(3,'Large','2025-05-12 11:05:41',NULL),(4,'XSmall','2025-05-12 11:05:51',NULL),(5,'XXSmall','2025-05-12 11:05:01',NULL),(6,'XLarge','2025-05-12 11:05:09',NULL),(7,'XXLarge','2025-05-12 11:05:20',NULL);
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `profile_completed` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'Alendre','alendre@gmail.com','$2y$12$gBT.j0gNWRmHEy9JYcfa5uzKnEbWPKTZ.WORVWiHJEhWhmztvGNGm',NULL,'10','0','2025-05-06 21:11:50',NULL),(2,'Rowan Jerde','jtrantow@yahoo.com','$2y$12$l8Xv4LZy79LnacHTgeSXtuEV1SyBGYaJ6tuhOkbwV3S5X/2bpneWu',NULL,'10','0','2025-05-07 01:31:59',NULL),(3,'Kamille Adams','lessie58@gmail.com','$2y$12$Me1tYWCO5fWqX992C9k5WuVCghKvzdLgAFoIg0UclVOWlygENuyy2',NULL,'10','0','2025-05-07 01:31:59',NULL),(4,'Emelie Steuber III','rice.lenny@gmail.com','$2y$12$p5mSS/OllE63RFSBL9MP2e6NY0A9gXzuHxuLp0013dbJEuyV9ydYm',NULL,'10','0','2025-05-07 01:32:00',NULL),(5,'Birdie Mante V','emma.hamill@veum.com','$2y$12$Z6UM2wHgPBhUi3K4PIoNiuzDmHBxKK2Ce9AWy0qX817ttj6.0Sbja',NULL,'10','0','2025-05-07 01:32:00',NULL),(6,'Celia Fisher MD','warren.sawayn@flatley.com','$2y$12$r2rmZh0fXI.0nGAdRavcPutYzXkhYj.JQ2uAbp1veyURsv/onFPcG',NULL,'10','0','2025-05-07 01:32:00',NULL),(7,'Dr. Jameson Orn DDS','cummerata.caesar@runte.info','$2y$12$FV2ZwVjTJj6utPUGiQR02OUxSEEv5oON2YMTEn3DX5nns9LLHnuQy',NULL,'10','0','2025-05-07 01:32:00',NULL),(8,'Gerard Hilpert','alden.oberbrunner@cassin.net','$2y$12$YcEgDMgeEH4AJZhjECZkxuuJ445ZdhCLHY2TMA15i60uxjqA.UAni',NULL,'10','0','2025-05-07 01:32:00',NULL),(9,'Savanna Feil','mohammed.paucek@hickle.org','$2y$12$fGKhr/xGNzGHzN54i51lWuhBk9q3g6zelQ.iRHG.RwCTxokBG00FK',NULL,'10','0','2025-05-07 01:32:01',NULL),(10,'Oswald D\'Amore','will.andre@friesen.com','$2y$12$688S0rOVIclflkT46d.0LOdyaMVcV5tV1sD2kws60Eis5b7tPQjTi',NULL,'10','0','2025-05-07 01:32:01',NULL),(11,'Mia Balistreri','donald.kautzer@bogan.com','$2y$12$oma4cZ7olEfCayFS5CEUK.Lb3D2zs2h6PzNyipHp7RlZb4s5BRRB6',NULL,'10','0','2025-05-07 01:32:01',NULL),(12,'Prof. Zena McCullough DDS','brody93@yahoo.com','$2y$12$Pwq8.5UdAyZy1QNSVC4qBuBBORNixyzW38vqYq4AYr1ijGG5El3L2',NULL,'10','0','2025-05-07 01:32:01',NULL),(13,'Mr. Elmore Hickle PhD','ischowalter@hotmail.com','$2y$12$Oddqvd10QG.aBZXUTZfL4upmB5ghnIwtCpP5GWjESC7nXPMWDtoNC',NULL,'10','0','2025-05-07 01:32:01',NULL),(14,'Silas Gleason','bernhard.della@deckow.com','$2y$12$MMx9cUn/dm.nr2cgUOp/8.Z5yf1kXX.alpflxvtpO4.icmSH5f7wK',NULL,'10','0','2025-05-07 01:32:02',NULL),(15,'Jaeden Fadel','mavis92@stroman.com','$2y$12$eEJy0AHDu.TeI5LVGTV.zu88Z1HULbhkoKozVy3ScxGFNnJp3VFJ.',NULL,'10','0','2025-05-07 01:32:02',NULL),(16,'Mr. Arden Kuhic','mlegros@gmail.com','$2y$12$r5tO5K83AVaktLUh8QTK8.DjVgVpr8HjR38vboHhELWf.THxyMqMm',NULL,'10','0','2025-05-07 01:32:02',NULL),(17,'Shanelle Beatty','korbin14@daugherty.com','$2y$12$fPcvLcm6MaNLFlk5gJL3AO4P6PMPEhY31U0x5p2c.zbieeNxopY1O',NULL,'10','0','2025-05-07 01:32:02',NULL),(18,'Prof. Diana Kutch','lschuppe@kunde.net','$2y$12$OYhUM5VYNjWaJG/AtmunSO/ocawpAIZRXebr/7REW4XpchQn4Z8P2',NULL,'10','0','2025-05-07 01:32:02',NULL),(19,'Keara Weber II','jaden.botsford@stoltenberg.com','$2y$12$H5bkojeMI/MZSY8vyNFG2ObY1wbKswzEJEQ0eCmy0PpDT7.9Ai6WO',NULL,'10','0','2025-05-07 01:32:03',NULL),(20,'Prof. Joany Schamberger','hill.minnie@hotmail.com','$2y$12$7fIVQKsKYx3kuzEbsxACpeWES2dgCvAumkq9HC/vX2iZ5J.QWgkmS',NULL,'10','0','2025-05-07 01:32:03',NULL),(21,'Eva Ebert DDS','dooley.cheyanne@dietrich.biz','$2y$12$ce2MmKMtmbzjGYkA2IyF0egT8yGrwFXAfwVeg67l4D2.AouVMPv0C',NULL,'10','0','2025-05-07 01:32:03',NULL),(22,'Ellie Kessler','lowe.christian@damore.com','$2y$12$TBqb6ias3cJikSzDTpfzIeFDtL.sSP2/cFlwTcShGT8XfgYEbbY.q',NULL,'10','0','2025-05-07 01:32:03',NULL),(23,'Delpha Yundt','schinner.brionna@gmail.com','$2y$12$0nWWEH2nqXUqvt6l/JfikuwboAFxhfzpem/4hIHmZ8.FLf0.ZKtDG',NULL,'10','0','2025-05-07 01:32:03',NULL),(24,'Prof. Lysanne Schaden','alesch@heidenreich.com','$2y$12$epXHOtdDDX7f.6c/Oo33QOP7dViRNT.2hpaKfwpv5eQukLtqL2Sa6',NULL,'10','0','2025-05-07 01:32:03',NULL),(25,'Mr. Jennings Little','baumbach.damian@feeney.biz','$2y$12$IunABe4V7.AvX0AXHwevfOmddG.VZufQq8/pxyKRi69ZV7wqGJd6q',NULL,'10','0','2025-05-07 01:32:04',NULL),(26,'Jayson Eichmann','adelbert.wilderman@marquardt.info','$2y$12$n8yKdO8sYnH993uCPa7.CuUOax26s6CqXnXdNxaJLlziazju3/.qq',NULL,'10','0','2025-05-07 01:32:04',NULL),(27,'Alejandra Kessler','caroline04@brekke.info','$2y$12$1AfBTy3IcSaJw39zzYD29eG4hbWdUjS/ssp021zWbiBAn5ZEsdQr2',NULL,'10','0','2025-05-07 01:32:04',NULL),(28,'Braden Haley IV','muller.alexandra@herzog.net','$2y$12$S6RmADj6J2bBVfuJRI8jgOD2yE5eya0ING78I.Fa4j1L99neKQOXK',NULL,'10','0','2025-05-07 01:32:04',NULL),(29,'Lucius Dicki','zelma84@yahoo.com','$2y$12$ooJ3JXt6p9scly/r2lZdc.1a6051hE6iSSWVnu37LzIpo6IqUtANi',NULL,'10','0','2025-05-07 01:32:04',NULL),(30,'Yazmin Mayert','hartmann.mitchel@kautzer.net','$2y$12$f7dxY9zOizaRtB.4La520OX0p9L.uwUnW1JvgBAIoXsRrI6lBdlqW',NULL,'10','0','2025-05-07 01:32:05',NULL),(31,'Tianna Willms','hilda.kutch@yahoo.com','$2y$12$juln9gDaOpF0zqgNy2zAKOiYb.3U1nJuXtBdG8aV.nWvXdpbftK3y',NULL,'10','0','2025-05-07 01:32:05',NULL),(32,'FÃ¡tima','fatima@gmail.com','$2y$12$92nl5yjIWpKbJvbzmy8iN.Z2JstNG6DRkLkkyXhGJUWBI/NcQPTCm','(41) 9 9999-9999','10','1','2025-05-07 19:17:15','2025-05-10 00:54:06');
UNLOCK TABLES;

--
-- Table structure for table `users_address`
--

DROP TABLE IF EXISTS `users_address`;
CREATE TABLE `users_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `zip_code` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_number` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_complement` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_address_default` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_address_users_idx` (`user_id`),
  CONSTRAINT `fk_users_address_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_address`
--

LOCK TABLES `users_address` WRITE;
INSERT INTO `users_address` VALUES (1,32,'81540-450','Rua Doutor MÃ¡rio MirÃ³ Filho','123','','Uberaba','Curitiba','PR','BR','0','2025-05-08 22:23:01',NULL),(2,32,'81550-460','Rua Arminda Volpi Morganti','124','','Uberaba','Curitiba','PR','BR','0','2025-05-09 01:58:50',NULL),(3,32,'81560-460','Rua Eurides Maciel de Almeida','125','','Uberaba','Curitiba','PR','BR','0','2025-05-09 02:00:55',NULL),(6,32,'81540-460','Rua Dona SazÃ¡ Lattes','283','Sobrado 03','Uberaba','Curitiba','PR','BR','1','2025-05-09 02:34:03','2025-05-09 15:59:42');
UNLOCK TABLES;

--
-- Final view structure for view `products_view`
--

/*!50001 DROP VIEW IF EXISTS `products_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `products_view` AS select `p`.`id` AS `id`,`p`.`brand_id` AS `brand_id`,`p`.`category_id` AS `category_id`,`p`.`collor_id` AS `collor_id`,`p`.`size_id` AS `size_id`,`p`.`name` AS `name`,`p`.`slug` AS `slug`,`p`.`quantity` AS `quantity`,`p`.`price` AS `price`,`p`.`status` AS `status`,`p`.`discount` AS `discount`,`p`.`description` AS `description`,`brands`.`id` AS `brandsId`,`brands`.`name` AS `brands`,`categories`.`id` AS `categoriesId`,`categories`.`name` AS `categories`,`collors`.`id` AS `collorsId`,`collors`.`name` AS `collors`,`sizes`.`id` AS `sizesId`,`sizes`.`name` AS `sizes` from ((((`products` `p` left join `brands` on((`p`.`brand_id` = `brands`.`id`))) left join `categories` on((`p`.`category_id` = `categories`.`id`))) left join `collors` on((`p`.`collor_id` = `collors`.`id`))) left join `sizes` on((`p`.`size_id` = `sizes`.`id`))) */;
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

-- Dump completed on 2025-05-17 20:09:39
