-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.21 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for document_save
CREATE DATABASE IF NOT EXISTS `document_save` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `document_save`;

-- Dumping structure for table document_save.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.categories: 0 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`, `icon`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Laravel', '1111', 'Laravel Framework', NULL, '2021-04-19 15:41:34', '2021-04-19 15:41:34'),
	(2, 'Laravel', '1111', 'Laravel Framework', NULL, '2021-04-19 15:43:18', '2021-04-19 15:43:18'),
	(3, 'Laravel', 'Laravel Icon', 'Laravel Framework 8x', NULL, '2021-04-19 16:15:54', NULL),
	(4, 'Reactjs', 'Reactjs Icon', 'Reactjs 16.x', NULL, NULL, NULL),
	(5, '1', '1', '1', NULL, '2021-04-19 16:17:59', '2021-04-19 16:17:59'),
	(6, '1', '1', '1', NULL, NULL, NULL),
	(7, '2', '2', '2', NULL, NULL, NULL),
	(8, '3', '3', '3', NULL, NULL, NULL),
	(9, '4', '4', '4', NULL, NULL, NULL),
	(10, '5', '5', '5', NULL, NULL, NULL),
	(11, '6', '6', '6', NULL, NULL, NULL),
	(12, '7', '7', '7', NULL, NULL, NULL),
	(13, '8', '8', '8', NULL, NULL, NULL),
	(14, '9', '9', '9', NULL, NULL, NULL),
	(15, '10', '10', '10', NULL, NULL, NULL),
	(16, '11', '11', '11', NULL, NULL, NULL),
	(17, '12', '12', '12', NULL, NULL, NULL),
	(18, '13', '1', NULL, NULL, NULL, NULL),
	(19, '14', '14', NULL, NULL, NULL, NULL),
	(20, '15', '15', '15', NULL, NULL, NULL),
	(21, '16', '16', '16', NULL, NULL, NULL),
	(22, '17', '17', '17', NULL, NULL, NULL),
	(23, '18', '18', '18', NULL, NULL, NULL),
	(24, '19', '19', '19', NULL, NULL, NULL),
	(25, '20', '20', '20', NULL, NULL, NULL),
	(26, '21', '21', '21', NULL, NULL, NULL),
	(27, '22', '22', '22', NULL, NULL, NULL),
	(28, '23', '23', '23', NULL, NULL, NULL),
	(29, '24', '24', '24', NULL, NULL, NULL),
	(30, '25', '25', '25', NULL, NULL, NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table document_save.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `link_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.documents: 0 rows
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Dumping structure for table document_save.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.migrations: 1 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table document_save.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='tag of link';

-- Dumping data for table document_save.tags: 0 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table document_save.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
