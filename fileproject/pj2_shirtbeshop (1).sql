-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 06:53 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj2_shirtbeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name_bank`, `account`, `branch`, `created_at`, `updated_at`) VALUES
(1, 'ธนาคารกรุงไทย', '881-0-12552-7', 'สาขา ดอนเมือง', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'เสื้อยืด', '2017-05-28 23:25:53', '2017-05-28 23:25:53'),
(2, 'เสื้อเชิ้ต', '2017-05-28 23:50:00', '2017-05-28 23:50:00'),
(3, 'เสื้อกันหนาว', '2017-06-22 13:29:50', '2017-06-22 13:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `color_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `created_at`, `updated_at`) VALUES
(1, 'แดง', '2017-05-29 08:49:52', '2017-05-29 08:49:52'),
(2, 'ขาว', '2017-05-29 08:50:59', '2017-05-29 08:50:59'),
(3, 'ดำ', '2017-05-29 08:51:15', '2017-05-29 08:51:15'),
(4, 'น้ำเงิน', '2017-05-29 08:51:24', '2017-05-29 08:51:24'),
(5, 'เหลือง', '2017-06-02 10:00:18', '2017-06-02 10:00:18'),
(6, 'ส้ม', '2017-06-02 10:00:26', '2017-06-02 10:00:26'),
(7, 'เขียว', '2017-06-02 10:00:38', '2017-06-02 10:00:38'),
(8, 'เทา', '2017-06-18 12:33:08', '2017-06-18 12:33:08'),
(9, 'น้ำตาล', '2017-06-18 12:33:14', '2017-06-18 12:33:14'),
(10, 'ขาวดำ', '2017-06-22 13:33:07', '2017-06-22 13:33:07');

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
(3, '2017_05_27_184843_create_products_table', 2),
(4, '2017_05_27_185313_create_categories_table', 3),
(5, '2017_05_27_185455_create_colors_table', 3),
(6, '2017_05_27_185516_create_sizes_table', 3),
(9, '2017_05_29_200315_create_category_color_table', 4),
(19, '2017_05_30_092802_create_promotions_table', 5),
(20, '2017_06_02_171544_create_recommends_table', 5),
(21, '2017_06_11_142056_create_orders_table', 6),
(22, '2017_06_11_142850_create_order_product_table', 6),
(23, '2017_06_15_143732_add_users_column_to_user', 6),
(24, '2017_06_17_144401_create_promotion_news_table', 7),
(25, '2017_06_17_151434_add_promotionnew_to_products_table', 8),
(26, '2017_06_25_141127_create_paymants_table', 9),
(27, '2017_06_25_184357_create_banks_table', 10),
(28, '2017_07_01_172753_create_omise_addresses_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `omise_addresses`
--

CREATE TABLE `omise_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `confirm` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `omise_addresses`
--

INSERT INTO `omise_addresses` (`id`, `user_id`, `first_name`, `last_name`, `address`, `zip`, `source`, `amount`, `phone`, `order_id`, `confirm`, `created_at`, `updated_at`) VALUES
(18, 11, 'จิรายุ', 'ชาติยานนท์', 'FVFGFDGDFGSDFSD 7879798', 10210, 'Omise', '432.80', '0214654654', 184, 1, '2017-07-03 12:01:34', '2017-07-03 12:01:34'),
(19, 11, 'จิรายุ', 'ชาติยานนท์', 'FGVDFK;LJG;LG', 10210, 'Omise', '1,232.80', '0927426623', 187, 1, '2017-07-03 12:13:37', '2017-07-03 12:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `omise` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `delivered`, `created_at`, `updated_at`, `omise`) VALUES
(184, 11, '432.80', 1, '2017-07-03 12:00:41', '2017-07-03 12:00:41', 1),
(185, 11, '432.80', 1, '2017-07-03 12:03:58', '2017-07-03 12:03:58', 1),
(186, 11, '1,232.80', 1, '2017-07-03 12:11:01', '2017-07-03 12:11:01', 1),
(187, 11, '1,232.80', 1, '2017-07-03 12:13:23', '2017-07-03 12:13:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(220, 22, 184, 1, 200.00, NULL, NULL),
(221, 19, 184, 1, 152.00, NULL, NULL),
(222, 48, 184, 1, 80.80, NULL, NULL),
(223, 22, 185, 1, 200.00, NULL, NULL),
(224, 19, 185, 1, 152.00, NULL, NULL),
(225, 48, 185, 1, 80.80, NULL, NULL),
(226, 22, 187, 5, 1000.00, NULL, NULL),
(227, 19, 187, 1, 152.00, NULL, NULL),
(228, 48, 187, 1, 80.80, NULL, NULL);

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
-- Table structure for table `paymants`
--

CREATE TABLE `paymants` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_admin_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `confirm` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymants`
--

INSERT INTO `paymants` (`id`, `user_id`, `first_name`, `last_name`, `address`, `zip`, `source`, `bank_admin_id`, `account_user`, `amount`, `image`, `phone`, `order_id`, `confirm`, `created_at`, `updated_at`) VALUES
(13, 11, 'จิรายุ', 'ชาติยานนท์', 'ดดดด', 10210, 'โอน', 'ธนาคารไทยพาณิชย์', '405-094656-2', '20', '01.png', '927426623', 115, 1, '2017-07-01 12:48:48', '2017-07-01 12:52:56'),
(14, 13, 'Kuy', 'Boat', '21/12', 10210, 'โอน', 'ธนาคารไทยพาณิชย์', '2482324111', '2000000', '11896144_492831477564671_7818565359699723325_n.jpg', '0990079781', 154, 1, '2017-07-03 08:28:07', '2017-07-03 08:36:53'),
(15, 11, 'จิรายุ', 'ชาติยานนท์', 'SADSADSAD', 10210, 'โอน', 'ธนาคารไทยพาณิชย์', '565654654', '10210', 'BlackGT-site-leftside.jpg', '00214254545', 182, 0, '2017-07-03 11:55:54', '2017-07-03 11:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(191) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizes_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promotion_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommend_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `promotion_new_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `quantity`, `cost`, `price`, `image`, `description`, `category_id`, `sizes_id`, `colors_id`, `created_at`, `updated_at`, `promotion_id`, `recommend_id`, `discount`, `promotion_new_id`) VALUES
(7, 'เสื้อที่ขาว', '5', '150', 2000, 'shirt-107.jpg', 'หฟกฟหกฟหก', '1', '1', '2', '2017-05-29 10:03:31', '2017-06-21 09:31:24', '2', '1', 20, 0),
(11, 'เสื้ออะไรกะไม่รุ้', '5', '150', 250, 'shirt-106.jpg', 'แแแแกหดกห', '1', '2', '2', '2017-05-31 01:19:53', '2017-06-18 11:33:44', '2', '2', NULL, 0),
(12, 'เสื้อยืดตากบที่เหลือง', '5', '150', 200, 'shirt-105.jpg', 'เสื้อยืดตากบใส่สบาย', '1', '2', '5', '2017-06-02 09:10:38', '2017-06-17 11:24:04', '1', '1', NULL, 2),
(19, 'สีเขียว', '10', '100', 190, 'shirt-104.jpg', '123213123123', '1', '2', '7', '2017-06-18 01:55:54', '2017-06-18 11:34:35', '1', '1', 20, NULL),
(22, 'เสื้อตากบสีส้ม', '5', '100', 200, 'shirt-108.jpg', 'ไม่มี', '1', '2', '6', '2017-06-18 12:26:08', '2017-06-18 12:26:08', '1', '1', 0, NULL),
(23, 'เสื้อยืดตากบ', '5', '100', 200, 'mc.jpg', '456', '1', '2', '1', '2017-06-18 12:27:35', '2017-06-18 12:27:35', '1', '1', 10, NULL),
(46, '333', '333', '33', 1010, 'mc.jpg', '10', '1', '2', '1', '2017-06-21 11:14:32', '2017-06-21 11:14:32', '1', '1', 0, NULL),
(47, 'asdsad', '100', '1010', 1010, 'mc.jpg', '1010', '1', '2', '1', '2017-06-21 11:15:03', '2017-06-21 11:34:18', '2', '1', 10, NULL),
(48, '11', '111', '111', 101, 'mc.jpg', '111', '1', '2', '1', '2017-06-21 11:36:59', '2017-06-21 11:36:59', '1', '2', 20, NULL),
(50, '789', '789', '123', 500, 'shirt-105.jpg', 'ดดดด', '1', '2', '5', '2017-06-22 09:37:46', '2017-06-22 09:37:46', '1', '1', 40, NULL),
(51, '66', '66', '66', 123, 'shirt-106.jpg', 'กหกหก', '1', '2', '2', '2017-06-22 09:38:29', '2017-06-22 09:38:29', '1', '1', 0, NULL),
(52, '122', '22', '22', 123, 'shirt-1011.jpg', '123', '1', '2', '1', '2017-06-22 11:16:29', '2017-06-22 11:16:29', '1', '1', 10, NULL),
(53, '1222', '22', '22', 22, 'shirt-1011.jpg', '123', '1', '2', '1', '2017-06-22 11:16:47', '2017-06-22 11:16:47', '1', '1', 0, NULL),
(54, '123.', '23', '222', 22, '44.jpg', '2333', '1', '1', '3', '2017-06-22 11:17:49', '2017-06-22 11:17:49', '1', '1', 10, NULL),
(55, '22', '22', '22', 222, '44.jpg', '1111', '1', '2', '3', '2017-06-22 11:18:24', '2017-06-22 11:18:24', '1', '1', 30, NULL),
(57, '21312', '3213123', '12312', 3123, '44.jpg', '3123', '1', '1', '3', '2017-06-22 11:19:19', '2017-06-22 11:19:19', '1', '1', 20, NULL),
(61, '12312312', '123123', '213123', 123123, '44.jpg', '123213213', '1', '1', '3', '2017-06-22 11:26:02', '2017-06-22 11:26:02', '1', '1', 10, NULL),
(62, '12312312312213', '21323', '232', 2323, '1297489542.jpg', '123213', '1', '2', '3', '2017-06-22 11:26:38', '2017-06-22 11:26:38', '1', '1', 10, NULL),
(63, '123456', '546', '546', 456, 'ky.jpg', '456456', '1', '2', '3', '2017-06-22 11:30:33', '2017-06-22 11:30:33', '2', '1', 0, NULL),
(64, '123213', '213123', '123213', 213123, 'tshirtq32.jpg', '123213', '1', '2', '3', '2017-06-22 11:31:06', '2017-06-22 11:31:06', '2', '1', 30, NULL),
(65, '333', '33', '333', 333, 'wyn-5695-528702-1.jpg', '123213', '2', '1', '3', '2017-06-22 11:31:33', '2017-06-22 11:31:33', '1', '1', 20, NULL),
(66, '123123123', '3123213', '123', 22, 'shirt-102.jpg', '123213', '1', '2', '3', '2017-06-22 11:32:00', '2017-06-22 11:32:00', '1', '1', 20, NULL),
(67, '12312', '213123', '12312', 2323, 'ky.jpg', '332', '1', '2', '3', '2017-06-22 11:32:44', '2017-06-22 11:32:44', '1', '1', 30, NULL),
(68, 'เสื้อกันหนาวนำเข้า', '5', '350', 500, '385921_231760763554654_149481075115957_688683_1990519233_n.jpg', 'กกกก', '3', '2', '10', '2017-06-22 13:34:04', '2017-06-22 13:34:04', '1', '1', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotions_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `promotions_name`, `created_at`, `updated_at`) VALUES
(1, 'ใหม่', NULL, NULL),
(2, 'ธรรมดา', NULL, NULL),
(3, 'สินค้าหมดสต๊อก', '2017-07-03 09:34:07', '2017-07-03 09:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_news`
--

CREATE TABLE `promotion_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_discount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `id` int(10) UNSIGNED NOT NULL,
  `recommend_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommends`
--

INSERT INTO `recommends` (`id`, `recommend_name`, `created_at`, `updated_at`) VALUES
(1, 'สินค้าแนะนำ', NULL, NULL),
(2, 'สินค้าธรรมดา', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `created_at`, `updated_at`) VALUES
(1, 'S', '2017-05-29 09:12:40', '2017-05-29 09:12:40'),
(2, 'M', '2017-05-29 09:18:18', '2017-05-29 09:18:18'),
(3, 'XL', '2017-05-29 09:18:35', '2017-05-29 09:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`, `first_name`, `last_name`, `sex`, `phone`) VALUES
(2, 'Admin', 'theboat72@gmail.com', '$2y$10$u7j.IXg38LuZ0IfcSeam4eUMG7GcO.kJmPGxlVd3U9PJFoH7hCDxu', 1, 'zikOlcb8A5M7ryanVszcyjF4feBphPprUAI57cGJ0XbshLSPuTKQFLOJ4QyZ', '2017-05-26 07:57:26', '2017-05-26 07:57:26', '', '', '', '0'),
(11, 'ไฮเปอร์', 'theboat72@hotmail.com', '$2y$10$vBaW1dJsjUfGTX7nY1TrEuddM/nv8.EbPrzdB2vr6t2SGvVF.KF72', NULL, 'wTGp6zQH9mJTAKDKPSgsQjlbBm5SRDnauEJYztiVlY7iNMdfJo75WsfCu3JO', '2017-06-26 09:40:42', '2017-06-26 09:40:42', 'จิรายุ', 'ชาติยานนท์', 'ชาย', '0927426623'),
(12, 'Boat_DPU', '574607070001@dpu.ac.th', '$2y$10$uvniMjUAFHjz59pu1UECouy9TIJDZnjpltOpf2Mmp0ewuLYPBy7AW', NULL, NULL, '2017-06-28 09:39:44', '2017-06-28 09:39:44', 'จิรายุ', 'ชาติยานนท์', 'ชาย', '0927426623'),
(13, 'Dongtong', 'ja.nuengruthai@hotmail.com', '$2y$10$SWJdUb6ATVu2uv6EXLElv.Mkxrl.KQbSaEEjFGIsxmbRt/KEhILe.', NULL, 'dVv6uurYmJVO33lXxrH2oOTNH82TWHC0G7NOCLq2i020w9zRSmT0lcWYanrh', '2017-07-03 08:24:51', '2017-07-03 08:24:51', 'Kuy', 'Boat', 'ชาย', '0990079781'),
(14, '7777', '777@gmail.com', '$2y$10$xVi7rktUmfcYh5x3Yw3Hz.CJbyuId6vu94hzSUtIPazcUdWF.BUu.', NULL, NULL, '2017-07-05 09:01:23', '2017-07-05 09:01:23', '7777', '7777', 'ชาย', '927426623');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omise_addresses`
--
ALTER TABLE `omise_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymants`
--
ALTER TABLE `paymants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_news`
--
ALTER TABLE `promotion_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `omise_addresses`
--
ALTER TABLE `omise_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
--
-- AUTO_INCREMENT for table `paymants`
--
ALTER TABLE `paymants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promotion_news`
--
ALTER TABLE `promotion_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
