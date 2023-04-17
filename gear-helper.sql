-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2023 at 12:07 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gear-helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_classes`
--

DROP TABLE IF EXISTS `character_classes`;
CREATE TABLE IF NOT EXISTS `character_classes` (
  `name` varchar(255) NOT NULL,
  `stat1` varchar(3) NOT NULL,
  `stat2` varchar(3) NOT NULL,
  `stat3` varchar(3) NOT NULL,
  `stat4` varchar(3) NOT NULL,
  `stat5` varchar(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `character_classes_stat1_foreign` (`stat1`),
  KEY `character_classes_stat2_foreign` (`stat2`),
  KEY `character_classes_stat3_foreign` (`stat3`),
  KEY `character_classes_stat4_foreign` (`stat4`),
  KEY `character_classes_stat5_foreign` (`stat5`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `character_classes`
--

INSERT INTO `character_classes` (`name`, `stat1`, `stat2`, `stat3`, `stat4`, `stat5`, `created_at`, `updated_at`) VALUES
('warrior', 'STA', 'STR', 'AGI', 'SPI', 'INT', '2023-04-02 16:21:30', NULL),
('rogue', 'AGI', 'STR', 'STA', 'SPI', 'INT', '2023-04-02 16:21:30', NULL),
('priest', 'INT', 'SPI', 'STA', 'AGI', 'STR', '2023-04-02 16:21:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
CREATE TABLE IF NOT EXISTS `inventories` (
  `user` varchar(255) NOT NULL,
  `item` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `inventories_user_foreign` (`user`),
  KEY `inventories_item_foreign` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `stat1` varchar(3) NOT NULL,
  `stat1amount` int(11) NOT NULL,
  `stat2` varchar(3) NOT NULL,
  `stat2amount` int(11) NOT NULL,
  `stat3` varchar(3) NOT NULL,
  `stat3amount` int(11) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_name_unique` (`name`),
  KEY `items_stat1_foreign` (`stat1`),
  KEY `items_stat2_foreign` (`stat2`),
  KEY `items_stat3_foreign` (`stat3`),
  KEY `items_material_foreign` (`material`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `stat1`, `stat1amount`, `stat2`, `stat2amount`, `stat3`, `stat3amount`, `slot`, `material`, `created_at`, `updated_at`) VALUES
(1, 'Silk Hood', 'INT', 1, 'SPI', 2, 'AGI', 1, 'head', '1', '2023-04-02 17:15:42', NULL),
(2, "Enchanter's Hood", 'INT', 3, 'SPI', 2, 'STA', 1, 'head', '1', '2023-04-02 18:06:13', NULL),
(3, 'Fishing Hat', 'AGI', 4, 'SPI', 3, 'STA', 3, 'head', '1', '2023-04-02 20:40:58', NULL),
(4, 'Wizard Hat', 'INT', 7, 'SPI', 3, 'STA', 2, 'head', '1', '2023-04-02 20:40:58', NULL),
(5, 'Lucky Cowl', 'STA', 3, 'SPI', 3, 'AGI', 3, 'head', '1', '2023-04-02 20:40:58', NULL),
(6, 'Rugged Hat', 'STA', 2, 'SPI', 3, 'AGI', 3, 'head', '2', '2023-04-02 20:40:58', NULL),
(7, 'Cutthroat Cap', 'STR', 2, 'STA', 3, 'AGI', 3, 'head', '2', '2023-04-02 20:40:58', NULL),
(8, 'Cloaked Cowl', 'STA', 2, 'SPI', 2, 'AGI', 6, 'head', '2', '2023-04-02 20:40:58', NULL),
(9, "Wanderer's Cap", 'STA', 6, 'SPI', 3, 'AGI', 3, 'head', '2', '2023-04-02 20:40:58', NULL),
(10, 'Holy Circlet', 'STA', 5, 'SPI', 3, 'INT', 3, 'head', '3', '2023-04-02 20:40:58', NULL),
(11, "Miner's Helmet", 'STA', 6, 'STR', 4, 'AGI', 1, 'head', '3', '2023-04-02 20:40:58', NULL),
(12, "Guard's Helm", 'STA', 3, 'SPI', 3, 'STR', 3, 'head', '3', '2023-04-02 20:40:58', NULL),
(13, 'Sacrificial Vestments', 'INT', 8, 'SPI', 4, 'STA', 3, 'torso', '1', '2023-04-02 20:48:54', NULL),
(14, 'Silk Vest', 'SPI', 6, 'INT', 3, 'STA', 3, 'torso', '1', '2023-04-02 20:48:54', NULL),
(15, "Enchanter's Robes", 'AGI', 1, 'SPI', 7, 'STA', 4, 'torso', '1', '2023-04-02 20:48:54', NULL),
(16, "Fisherman's Vest", 'INT', 2, 'SPI', 6, 'STA', 7, 'torso', '1', '2023-04-02 20:48:54', NULL),
(17, 'Lucky Robe', 'STA', 3, 'SPI', 8, 'AGI', 3, 'torso', '1', '2023-04-02 20:48:54', NULL),
(18, 'Tanned Jacket', 'STA', 3, 'SPI', 3, 'AGI', 6, 'torso', '2', '2023-04-02 20:48:54', NULL),
(19, 'Slit Vest', 'STR', 2, 'STA', 3, 'AGI', 7, 'torso', '2', '2023-04-02 20:48:54', NULL),
(20, 'Camouflage Tunic', 'STA', 4, 'SPI', 4, 'AGI', 6, 'torso', '2', '2023-04-02 20:48:54', NULL),
(21, 'Cured Vest', 'STA', 6, 'STR', 3, 'AGI', 3, 'torso', '2', '2023-04-02 20:48:54', NULL),
(22, 'Fortified Breastplate', 'STA', 5, 'SPI', 3, 'STR', 8, 'torso', '3', '2023-04-02 20:48:54', NULL),
(23, 'Heavy Chestguard', 'STA', 6, 'STR', 4, 'SPI', 2, 'torso', '3', '2023-04-02 20:48:54', NULL),
(24, 'Heroic Breastplate', 'STA', 3, 'SPI', 7, 'STR', 6, 'torso', '3', '2023-04-02 20:48:54', NULL),
(25, 'Silk Pants', 'INT', 6, 'SPI', 4, 'STA', 3, 'legs', '1', '2023-04-02 20:55:57', NULL),
(26, "Enchanter's Legwarmers", 'SPI', 6, 'INT', 3, 'AGI', 3, 'legs', '1', '2023-04-02 20:55:57', NULL),
(27, "Fisherman's Pants", 'INT', 1, 'SPI', 7, 'STA', 3, 'legs', '1', '2023-04-02 20:55:57', NULL),
(28, 'Lucky Leggings', 'INT', 2, 'SPI', 6, 'STA', 4, 'legs', '1', '2023-04-02 20:55:57', NULL),
(29, 'Woven Leggings', 'STA', 3, 'SPI', 7, 'AGI', 4, 'legs', '1', '2023-04-02 20:55:57', NULL),
(30, "Wanderer's Britches", 'STA', 5, 'SPI', 5, 'AGI', 2, 'legs', '2', '2023-04-02 20:55:57', NULL),
(31, 'Camouflage Leggings', 'STR', 2, 'STA', 3, 'AGI', 7, 'legs', '2', '2023-04-02 20:55:57', NULL),
(32, 'Cured Pants', 'STA', 4, 'SPI', 4, 'AGI', 5, 'legs', '2', '2023-04-02 20:55:57', NULL),
(33, 'Tanned Pants', 'STA', 6, 'STR', 3, 'AGI', 3, 'legs', '2', '2023-04-02 20:55:57', NULL),
(34, 'Heavy Legguards', 'STA', 5, 'SPI', 3, 'STR', 8, 'legs', '3', '2023-04-02 20:55:57', NULL),
(35, "Miner's Legguards", 'STA', 6, 'STR', 4, 'SPI', 4, 'legs', '3', '2023-04-02 20:55:57', NULL),
(36, "Guard's Legplates", 'STA', 3, 'SPI', 6, 'STR', 6, 'legs', '3', '2023-04-02 20:55:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `materials_class_foreign` (`class`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `class`, `created_at`, `updated_at`) VALUES
(1, 'cloth', 'warrior', '2023-04-02 17:14:32', NULL),
(1, 'cloth', 'rogue', '2023-04-02 17:14:32', NULL),
(1, 'cloth', 'priest', '2023-04-02 17:14:32', NULL),
(2, 'leather', 'warrior', '2023-04-02 17:14:32', NULL),
(2, 'leather', 'rogue', '2023-04-02 17:14:32', NULL),
(3, 'plate', 'warrior', '2023-04-02 17:14:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_26_202214_create_items_table', 1),
(6, '2023_02_26_203341_create_statistics_table', 1),
(7, '2023_02_26_214630_create_materials_table', 1),
(8, '2023_02_26_220005_create_character_classes_table', 1),
(9, '2023_04_02_230405_create_inventories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

DROP TABLE IF EXISTS `statistics`;
CREATE TABLE IF NOT EXISTS `statistics` (
  `abbr` varchar(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`abbr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`abbr`, `name`, `created_at`, `updated_at`) VALUES
('AGI', 'agility', '2023-04-02 16:19:12', NULL),
('STR', 'strength', '2023-04-02 16:19:12', NULL),
('STA', 'stamina', '2023-04-02 16:19:12', NULL),
('INT', 'intellect', '2023-04-02 16:19:12', NULL),
('SPI', 'spirit', '2023-04-02 16:19:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` boolean NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
COMMIT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'admin', 'admin@example.com', NULL, 'admin', NULL, NULL, NULL, 1),
(2, 'Deondre', 'fernando.kassulke@example.com', '2023-04-17 18:33:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'waX5xOsg5n', '2023-04-17 18:33:05', '2023-04-17 18:33:05', 0),
(3, 'Marta', 'verla.satterfield@example.org', '2023-04-17 18:33:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jYrfclAcHK', '2023-04-17 18:33:05', '2023-04-17 18:33:05', 0),
(4, 'Kale', 'aaliyah.cassin@example.net', '2023-04-17 18:33:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '68jOGojOqj', '2023-04-17 18:33:05', '2023-04-17 18:33:05', 0),
(5, 'Ari', 'bosco.rudolph@example.net', '2023-04-17 18:33:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ak5rk0xjE7', '2023-04-17 18:33:05', '2023-04-17 18:33:05', 0),
(6, 'Nathaniel', 'feil.jorge@example.net', '2023-04-17 18:33:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T6OK1NmJ0v', '2023-04-17 18:33:05', '2023-04-17 18:33:05', 0),
(7, 'Mathew', 'dickinson.ken@example.com', '2023-04-17 18:33:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JoMxrX2cqS', '2023-04-17 18:33:07', '2023-04-17 18:33:07', 0),
(8, 'Gregorio', 'river01@example.org', '2023-04-17 18:33:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YFWRx97j7L', '2023-04-17 18:33:07', '2023-04-17 18:33:07', 0),
(9, 'Titus', 'zfritsch@example.net', '2023-04-17 18:33:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RERDIvRE0j', '2023-04-17 18:33:07', '2023-04-17 18:33:07', 0),
(10, 'Sidney', 'sleannon@example.com', '2023-04-17 18:33:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nX1J4QErrT', '2023-04-17 18:33:07', '2023-04-17 18:33:07', 0),
(11, 'Gust', 'roy.predovic@example.com', '2023-04-17 18:33:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5epU1tGiwh', '2023-04-17 18:33:07', '2023-04-17 18:33:07', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
