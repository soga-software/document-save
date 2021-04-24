-- --------------------------------------------------------
-- Host:                         103.124.92.71
-- Server version:               5.5.68-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for document_save
CREATE DATABASE IF NOT EXISTS `document_save` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `document_save`;

-- Dumping structure for table document_save.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.categories: 12 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`, `icon`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Laravel', '<h3 class="text-danger"><i class="fab fa-laravel"></i></h3>', 'Kiến thức về Laravel framework', '2021-04-22 04:37:19', '2021-04-22 09:42:17', NULL),
	(2, 'Reactjs', '<h3 class="text-primary"><i class="fab fa-react"></i></h3>', 'Kiến thức về Reactjs Library', '2021-04-22 04:38:46', '2021-04-22 09:42:55', NULL),
	(3, 'React Native', '<h3 class="text-secondary"><i class="fab fa-react"></i></h3>', 'Kiến thức về React Native Framework', '2021-04-22 04:47:41', '2021-04-22 09:42:40', NULL),
	(4, 'Vuejs', '<h3 class="text-success"><i class="fab fa-vuejs"></i></h3>', 'Kiến thức về Vuejs Library', '2021-04-22 04:48:54', '2021-04-22 09:43:08', NULL),
	(5, 'Angular', '<h3 class="text-danger"><i class="fab fa-angular"></i></h3>', 'Kiến thức về Angular Framework', '2021-04-22 04:51:05', '2021-04-22 09:41:54', NULL),
	(6, 'Design Pattern', '<h3 class="text-warning"><i class="fas fa-boxes"></i></h3>', 'Kiến thức về Design pattern', '2021-04-22 05:21:27', '2021-04-22 09:42:07', NULL),
	(7, 'A', 'Reactjs Icon', 'ccsd', '2021-04-22 06:50:51', '2021-04-22 06:50:51', NULL),
	(8, 'Nodejs', '<h3 class="text-success"><i class="fab fa-node-js"></i></h3>', 'Kiến thức lập trình Nodejs', '2021-04-22 06:50:51', '2021-04-22 09:42:29', NULL),
	(9, 'Phalcon', '<h3 class="text-success"><i class="fas fa-dove"></i></h3>', 'Kiến thức lập trình Phalcon Framework', '2021-04-22 06:50:51', '2021-04-24 02:09:49', NULL),
	(10, 'Wordpress', '<h3 class="text-dark"><i class="fab fa-wordpress"></i></h3>', 'Kiến thức lập trình Wordpress', '2021-04-22 06:50:51', '2021-04-22 09:43:21', NULL),
	(11, 'Restful API', '<h3 class="text-danger"><i class="fas fa-shield-alt"></i></h3>', 'Kiến thức về Restful API và HTTP', '2021-04-23 23:30:18', '2021-04-23 23:33:45', NULL),
	(12, 'PHP', '<h3 class="text-secondary"><i class="fab fa-php"></i></h3>', 'Kiến thức lập trình PHP', '2021-04-23 23:32:30', '2021-04-23 23:32:30', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table document_save.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `tag_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.documents: 25 rows
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `category_id`, `tag_id`, `type`, `name`, `link`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'A1619020684', 'VIBLO', 'Triển khai Eloquent từ Blade', 'https://viblo.asia/p/laravelcalling-eloquent-from-blade-6-tips-for-performance-maGK7kP9Kj2', NULL, '2021-04-23 09:40:48', '2021-04-23 09:40:48', NULL),
	(3, 9, 'A1619065722', 'VIBLO', 'Tìm hiểu về Phalcon Framework', 'https://viblo.asia/p/tim-hieu-ve-phalcon-framework-Qpmlenvm5rd', 'Giới thiệu cơ bản về Phalcon Framework', '2021-04-23 10:17:20', '2021-04-23 10:17:20', NULL),
	(4, 9, 'A1619173114,A1619065722', NULL, 'Tạo dự án cơ bản với Phalcon Framework', 'http://anantgarg.com/2009/03/13/write-your-own-php-mvc-framework-part-1/', 'Tạo dự án cơ bản với Phalcon Framework', '2021-04-23 10:18:55', '2021-04-23 10:18:55', NULL),
	(2, 9, 'A1619065722', 'GITHUB', 'Github Phalcon', 'https://github.com/ovr/phalcon-module-skeleton', '[Source] về Phalcon Framework', '2021-04-23 10:16:50', '2021-04-23 10:16:50', NULL),
	(5, 9, 'A1619220110,A1619173114,A1619065722', NULL, 'Building a Simple App - Step 1 - Scaffolding', 'https://www.learnphalcon.com/post/show/7/building-a-simple-app---step-1---scaffolding', 'Một khóa học cơ bản về xây dựng ứng dụng Phalcon', '2021-04-23 23:23:25', '2021-04-23 23:23:25', NULL),
	(6, 9, 'A1619220110,A1619173114,A1619065722', 'JAVAPOINT', 'Phalcon Tutorial', 'https://www.javatpoint.com/phalcon-tutorial?ref=hackr.io', 'Khóa học của Javatpoint về xây dựng ứng dụng Phalcon', '2021-04-23 23:25:13', '2021-04-23 23:25:13', NULL),
	(7, 9, 'A1619173114,A1619065722', NULL, 'The Complete Phalcon Tutorial for Beginners', 'https://www.hostinger.com/tutorials/phalcon-tutorial', 'Tạo ứng dụng Auth cơ bản với Phalcon', '2021-04-23 23:27:35', '2021-04-23 23:27:35', NULL),
	(8, 11, 'A1619220695', 'VIBLO', 'HTTP security headers', 'https://viblo.asia/p/tat-ca-nhung-thu-ban-can-biet-ve-http-security-headers-mDYGDPLVGpx', 'Tất cả những thứ bạn cần biết về HTTP security headers', '2021-04-23 23:33:17', '2021-04-23 23:33:17', NULL),
	(9, 11, 'A1619220695', 'VIBLO', 'Cookie, Cache và Session', 'https://viblo.asia/p/cookie-cache-va-session-QpmleAOMlrd', 'Kiến thức cơ bản về Cookie, Cache và Session', '2021-04-24 00:48:04', '2021-04-24 00:48:04', NULL),
	(10, 11, 'A1619220695', NULL, 'Cookie, Cache và Session', 'https://mona.solutions/tin-tuc/cache-session-cookie-la-gi-phan-biet-cache-session-va-cookie/', 'Cache, session, cookie là gì? Phân biệt cache, session và cookie', '2021-04-24 00:53:25', '2021-04-24 00:53:25', NULL),
	(11, 11, 'A1619220695', NULL, 'Phân biệt Session, Cookie và Cache', 'http://itplus-academy.edu.vn/phan-biet-session-cookie-va-cache-khi-hoc-lap-trinh-2279.html', 'PHÂN BIỆT SESSION, COOKIE VÀ CACHE KHI HỌC LẬP TRÌNH', '2021-04-24 02:41:35', '2021-04-24 02:41:35', NULL),
	(12, 12, 'A1619220703', 'KIPALOG', 'Autoloading', 'https://kipalog.com/posts/PHP-co-the-ban-chua-biet----Auloading', 'Autoloading trong PHP', '2021-04-24 01:19:38', '2021-04-24 01:19:38', NULL),
	(13, 9, 'A1619065722', NULL, 'Phalcon Forum', 'https://forum.phalcon.io/discussions/hot', 'Diễn đàn và các câu hỏi phổ biến của Phalcon', '2021-04-24 01:28:18', '2021-04-24 01:28:18', NULL),
	(14, 9, 'A1619065722', 'GITHUB', 'phalcon / tutorial', 'https://github.com/phalcon/tutorial', 'Source cơ bản của một ứng dụng Phalcon', '2021-04-24 02:07:47', '2021-04-24 02:07:47', NULL),
	(15, 9, 'A1619065722', 'GITHUB', 'PhalconEye / phalconeye', 'https://github.com/PhalconEye/phalconeye', 'Dự án mẫu Phalcon trên Github', '2021-04-24 02:41:08', '2021-04-24 02:41:08', NULL),
	(16, 9, 'A1619065722', 'GITHUB', 'KevinJay / PhalconCMS', 'https://github.com/KevinJay/PhalconCMS', 'Một dự án mẫu CMS của Phalcon\r\nwww.marser.cn', '2021-04-24 02:42:35', '2021-04-24 02:42:35', NULL),
	(17, 9, 'A1619065722', 'GITHUB', 'alexander-torosh / yona-cms', 'https://github.com/alexander-torosh/yona-cms', 'Một dự án mẫu CMS của Phalcon\r\nyonacms.com/', '2021-04-24 02:43:44', '2021-04-24 02:43:44', NULL),
	(18, 9, 'A1619065722', 'GITHUB', 'alexander-torosh / yona-ecommerce', 'https://github.com/alexander-torosh/yona-ecommerce', 'Dự án mẫu bán hàng Phalcon', '2021-04-24 02:47:29', '2021-04-24 02:47:29', NULL),
	(19, 9, 'A1619065722', 'GITHUB', 'AlloVince / eva-engine', 'https://github.com/AlloVince/eva-engine', 'Dự án mẫu Phalcon, cấu trúc source khá ổn định', '2021-04-24 02:48:39', '2021-04-24 02:48:39', NULL),
	(20, 9, 'A1619065722', NULL, 'snowair / phalcon-debugbar', 'https://github.com/snowair/phalcon-debugbar', 'Một package hỗ trợ debugbar cho Phalcon', '2021-04-24 02:49:49', '2021-04-24 02:49:49', NULL),
	(21, 9, 'A1619173114,A1619065722,A1619232969', NULL, 'Phalcon and Vuejs Compoents', 'https://blog.antsand.com/singlepost/index/5619/How-to-integrate-php-(Phalcon)-and-Vue.js-components?', 'Kết hợp Phalcon và Vuejs Component', '2021-04-24 02:57:37', '2021-04-24 02:57:37', NULL),
	(22, 4, 'A1619065722', 'GITHUB', 'davellanedam / phalcon-micro-rest-api-skeleton', 'https://github.com/davellanedam/phalcon-micro-rest-api-skeleton', 'Cấu trúc thư mục mẫu khá ổn cho Phalcon', '2021-04-24 02:58:45', '2021-04-24 02:58:45', NULL),
	(23, 9, 'A1619220110,A1619065722', NULL, 'Một loạt bài về Phalcon từ 2015', 'https://hocphalcon.blogspot.com/2015/10/phalcon-2-7-phalcon-invo-cau-truc.html?fbclid=IwAR20dB66-zpgpzIK8TdbmQLwoJ4irdPriC5xXrtqw1z5VtOsiOhqE5ZAH3w', 'Học Phalcon| Phalcon tutorial| Lập trình phalcon', '2021-04-24 02:59:45', '2021-04-24 02:59:45', NULL),
	(24, 9, 'A1619220110,A1619065722', NULL, 'Phalcon Framework', 'https://kungfuphp.com/category/phalcon-framework', 'Một loạt bài về Phalcon từ trang kungfuphp.com', '2021-04-24 03:01:31', '2021-04-24 03:01:31', NULL),
	(25, 9, 'A1619065722,A1619220695,A1619233387', 'VIBLO', '[Dịch sách] Ebook Web Hacking 101', 'https://viblo.asia/p/phan-1-mot-vai-kien-thuc-nen-tang-ve-web-aWj53NAGl6m', 'Loạt bài về bảo mật và XSS từ Đoàn Đình Linh', '2021-04-24 03:04:39', '2021-04-24 03:04:39', NULL);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Dumping structure for table document_save.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document_save.migrations: 1 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table document_save.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tag_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='tag of link';

-- Dumping data for table document_save.tags: 14 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	('A1619020684', 'Laravel', '2021-04-21 15:58:04', '2021-04-21 15:58:04', NULL),
	('A1619065722', 'Phalcon', '2021-04-22 04:28:42', '2021-04-22 04:28:42', NULL),
	('A1619065745', 'Zend', '2021-04-22 04:29:22', '2021-04-22 04:29:22', NULL),
	('A1619065804', 'VPS', '2021-04-22 04:30:04', '2021-04-22 04:30:04', NULL),
	('A1619065839', 'Python', '2021-04-22 04:30:39', '2021-04-22 04:30:39', NULL),
	('A1619083135', 'Wordpress', '2021-04-22 09:18:55', '2021-04-22 09:18:55', NULL),
	('A1619083145', 'Design Pattern', '2021-04-22 09:19:05', '2021-04-22 09:19:05', NULL),
	('A1619173114', 'English', '2021-04-23 10:18:34', '2021-04-23 10:18:34', NULL),
	('A1619220110', 'Course', '2021-04-23 23:21:50', '2021-04-23 23:21:50', NULL),
	('A1619220695', 'Restful API', '2021-04-23 23:31:35', '2021-04-23 23:31:35', NULL),
	('A1619220703', 'PHP', '2021-04-23 23:31:43', '2021-04-23 23:31:43', NULL),
	('A1619232969', 'Vuejs', '2021-04-24 02:56:09', '2021-04-24 02:56:09', NULL),
	('A1619232985', 'Reactjs', '2021-04-24 02:56:25', '2021-04-24 02:56:25', NULL),
	('A1619233387', 'XSS', '2021-04-24 03:03:07', '2021-04-24 03:03:07', NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table document_save.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
