-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 02:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictcentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', 'laptops', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(2, 'Desktops', 'desktops', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(3, 'Tablets', 'tablets', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(4, 'Phones', 'phones', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(5, 'Accessories', 'accessories', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(6, 'Headphones', 'headphones', '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(7, 'Displays', 'displays', '2020-01-26 07:06:15', '2020-01-26 07:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 1, 2, NULL, NULL),
(8, 7, 2, NULL, NULL),
(9, 8, 2, NULL, NULL),
(10, 9, 2, NULL, NULL),
(11, 10, 2, NULL, NULL),
(12, 11, 2, NULL, NULL),
(13, 12, 2, NULL, NULL),
(14, 13, 3, NULL, NULL),
(15, 14, 3, NULL, NULL),
(16, 15, 3, NULL, NULL),
(17, 16, 3, NULL, NULL),
(18, 17, 3, NULL, NULL),
(19, 18, 3, NULL, NULL),
(20, 19, 4, NULL, NULL),
(21, 20, 4, NULL, NULL),
(22, 21, 4, NULL, NULL),
(23, 22, 4, NULL, NULL),
(24, 23, 4, NULL, NULL),
(25, 24, 4, NULL, NULL),
(26, 25, 5, NULL, NULL),
(27, 26, 5, NULL, NULL),
(28, 27, 5, NULL, NULL),
(29, 28, 5, NULL, NULL),
(30, 29, 5, NULL, NULL),
(31, 30, 5, NULL, NULL),
(32, 31, 6, NULL, NULL),
(33, 32, 6, NULL, NULL),
(34, 33, 6, NULL, NULL),
(35, 34, 6, NULL, NULL),
(36, 35, 6, NULL, NULL),
(37, 36, 6, NULL, NULL),
(38, 37, 7, NULL, NULL),
(39, 38, 7, NULL, NULL),
(40, 39, 7, NULL, NULL),
(41, 40, 7, NULL, NULL),
(42, 41, 7, NULL, NULL),
(43, 42, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_23_120000_create_shoppingcart_table', 1),
(4, '2019_06_28_154647_create_products_table', 1),
(5, '2019_12_15_085255_create_categories_table', 1),
(6, '2019_12_15_100808_create_category_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Laptop 1', 'laptop_1', 'Core i7, 8GB Ram, 240GB SSD', 'Laptop 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1604, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(2, 'Laptop 2', 'laptop_2', 'Core i3, 8GB Ram, 240GB SSD', 'Laptop 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1295, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(3, 'Laptop 3', 'laptop_3', 'Core i3, 16GB Ram, 240GB SSD', 'Laptop 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2132, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(4, 'Laptop 4', 'laptop_4', 'Core i3, 16GB Ram, 960GB SSD', 'Laptop 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1435, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(5, 'Laptop 5', 'laptop_5', 'Core i7, 32GB Ram, 240GB SSD', 'Laptop 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2389, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(6, 'Laptop 6', 'laptop_6', 'Core i7, 8GB Ram, 480GB SSD', 'Laptop 6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2393, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(7, 'Desktop 1', 'desktop_1', 'Core i7, 16GB Ram, 480GB SSD', 'Desktop 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2079, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(8, 'Desktop 2', 'desktop_2', 'Core i3, 64GB Ram, 480GB SSD', 'Desktop 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1679, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(9, 'Desktop 3', 'desktop_3', 'Core i5, 16GB Ram, 240GB SSD', 'Desktop 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2135, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(10, 'Desktop 4', 'desktop_4', 'Core i3, 32GB Ram, 240GB SSD', 'Desktop 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1435, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(11, 'Desktop 5', 'desktop_5', 'Core i5, 32GB Ram, 480GB SSD', 'Desktop 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 1304, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(12, 'Desktop 6', 'desktop_6', 'Core i7, 16GB Ram, 960GB SSD', 'Desktop 6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 2012, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(13, 'Tablet 1', 'tablet_1', 'Snapdragon 845, 3GB Ram, 16GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 561, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(14, 'Tablet 2', 'tablet_2', 'Snapdragon 835, 4GB Ram, 128GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 765, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(15, 'Tablet 3', 'tablet_3', 'Snapdragon 845, 4GB Ram, 64GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 636, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(16, 'Tablet 4', 'tablet_4', 'Snapdragon 835, 3GB Ram, 128GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 975, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(17, 'Tablet 5', 'tablet_5', 'Snapdragon 845, 3GB Ram, 128GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 849, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(18, 'Tablet 6', 'tablet_6', 'Snapdragon 835, 2GB Ram, 128GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 633, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(19, 'Phone 1', 'phone_1', 'Snapdragon 835, 4GB Ram, 16GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 917, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(20, 'Phone 2', 'phone_2', 'Snapdragon 845, 3GB Ram, 64GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 707, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(21, 'Phone 3', 'phone_3', 'Snapdragon 835, 3GB Ram, 64GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 746, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(22, 'Phone 4', 'phone_4', 'Snapdragon 845, 3GB Ram, 16GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 845, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(23, 'Phone 5', 'phone_5', 'Snapdragon 835, 4GB Ram, 128GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 853, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(24, 'Phone 6', 'phone_6', 'Snapdragon 845, 3GB Ram, 16GB Storage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 698, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(25, 'Accessory 1', 'accessory_1', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 91, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(26, 'Accessory 2', 'accessory_2', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 99, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(27, 'Accessory 3', 'accessory_3', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 232, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(28, 'Accessory 4', 'accessory_4', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 55, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(29, 'Accessory 5', 'accessory_5', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 86, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(30, 'Accessory 6', 'accessory_6', 'Some accessory details', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 157, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(31, 'Headphone 1', 'headphone_1', 'Impedance: 32 ohms, Wired: 1, Wireless: 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 87, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(32, 'Headphone 2', 'headphone_2', 'Impedance: 32 ohms, Wired: 0, Wireless: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 441, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(33, 'Headphone 3', 'headphone_3', 'Impedance: 120 ohms, Wired: 1, Wireless: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 441, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(34, 'Headphone 4', 'headphone_4', 'Impedance: 32 ohms, Wired: 0, Wireless: 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 402, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(35, 'Headphone 5', 'headphone_5', 'Impedance: 120 ohms, Wired: 0, Wireless: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 485, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(36, 'Headphone 6', 'headphone_6', 'Impedance: 32 ohms, Wired: 0, Wireless: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 313, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(37, 'Display 1', 'display_1', '24 inches, G-Sync: 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 189, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(38, 'Display 2', 'display_2', '32 inches, G-Sync: 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 207, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(39, 'Display 3', 'display_3', '27 inches, G-Sync: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 349, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(40, 'Display 4', 'display_4', '24 inches, G-Sync: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 308, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(41, 'Display 5', 'display_5', '24 inches, G-Sync: 0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 432, '2020-01-26 07:06:15', '2020-01-26 07:06:15'),
(42, 'Display 6', 'display_6', '27 inches, G-Sync: 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, libero, reprehenderit? Aliquam vel voluptate placeat porro nemo impedit reprehenderit eligendi veniam dignissimos laudantium quae consequuntur, magnam soluta cum totam, at.', 496, '2020-01-26 07:06:15', '2020-01-26 07:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
