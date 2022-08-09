-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220703.0056236a4c
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 07:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adrental_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$AC2gsILzskJ4huDy3dx/lOPvj70/fr5GtjR3O0W/okPzJO5nWf1Aq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `created_at`, `updated_at`) VALUES
(1, 'Independent Home', NULL, NULL),
(2, 'Apartment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `name`, `email`, `subject`, `message`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dharmi', 'dharmi@gmail.com', 'House finding', 'my finding area is bhaktinager circle plz give me some infomatyion about this location house.', 1, NULL, '2022-07-04 00:27:21', '2022-07-04 00:27:21'),
(2, 'rohit mori', 'rohitmori1@gmail.com', 'apartment finding', 'plz give infomation about other apartment in rajkot.', 2, NULL, '2022-07-04 00:32:19', '2022-07-04 00:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedbackin`, `rating`, `query`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'rohit mori', 'rohitmori1@gmail.com', 'suggestion', '5', 'plz you are add some other city in this website.', 2, '2022-07-04 00:34:13', '2022-07-04 00:34:13'),
(2, 'Avani Makwana', 'avanim6420@gmail.com', 'other', '5', 'nice! your website is easy to use .', 1, '2022-07-04 00:36:24', '2022-07-04 00:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `post_id`, `created_at`, `updated_at`) VALUES
(1, '1656845541_1.jpg', 1, '2022-07-03 05:22:21', '2022-07-03 05:22:21'),
(2, '1656845541_2.jpg', 1, '2022-07-03 05:22:21', '2022-07-03 05:22:21'),
(3, '1656845541_4.jpg', 1, '2022-07-03 05:22:21', '2022-07-03 05:22:21'),
(4, '1656845541_5.jpg', 1, '2022-07-03 05:22:21', '2022-07-03 05:22:21'),
(5, '1656860384_ho2-2.jpg', 2, '2022-07-03 09:29:44', '2022-07-03 09:29:44'),
(6, '1656860385_ho2-3.jpg', 2, '2022-07-03 09:29:45', '2022-07-03 09:29:45'),
(7, '1656860385_ho2-4.jpg', 2, '2022-07-03 09:29:45', '2022-07-03 09:29:45'),
(8, '1656860385_ho2-5.jpg', 2, '2022-07-03 09:29:45', '2022-07-03 09:29:45'),
(9, '1656860385_ho2-6.jpg', 2, '2022-07-03 09:29:45', '2022-07-03 09:29:45'),
(10, '1656860385_ho2-7.jpg', 2, '2022-07-03 09:29:45', '2022-07-03 09:29:45'),
(11, '1656861034_ho3-2.jpg', 3, '2022-07-03 09:40:34', '2022-07-03 09:40:34'),
(12, '1656861034_ho3-3.jpg', 3, '2022-07-03 09:40:34', '2022-07-03 09:40:34'),
(13, '1656861034_ho3-4.jpg', 3, '2022-07-03 09:40:34', '2022-07-03 09:40:34'),
(14, '1656861034_ho3-5.jpg', 3, '2022-07-03 09:40:34', '2022-07-03 09:40:34'),
(15, '1656861034_ho3-7.jpg', 3, '2022-07-03 09:40:34', '2022-07-03 09:40:34'),
(16, '1656861510_ap1-1.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(17, '1656861510_ap1-2.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(18, '1656861510_ap1-3.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(19, '1656861510_ap1-4.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(20, '1656861510_ap1-5.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(21, '1656861510_ap1hall-1.jpg', 4, '2022-07-03 09:48:30', '2022-07-03 09:48:30'),
(22, '1656861752_ap2-2.jpg', 5, '2022-07-03 09:52:32', '2022-07-03 09:52:32'),
(23, '1656861752_ap2-3.jpg', 5, '2022-07-03 09:52:32', '2022-07-03 09:52:32'),
(24, '1656861752_ap2-5.jpg', 5, '2022-07-03 09:52:32', '2022-07-03 09:52:32'),
(25, '1656861752_ap2-7.jpg', 5, '2022-07-03 09:52:32', '2022-07-03 09:52:32'),
(26, '1656940237_ap8-1.jpeg', 6, '2022-07-04 07:40:37', '2022-07-04 07:40:37'),
(27, '1656940237_ap8-2.jpeg', 6, '2022-07-04 07:40:37', '2022-07-04 07:40:37'),
(28, '1656940237_ap8-3.jpeg', 6, '2022-07-04 07:40:37', '2022-07-04 07:40:37'),
(29, '1656940237_ap8-4.jpg', 6, '2022-07-04 07:40:37', '2022-07-04 07:40:37'),
(30, '1656940790_app9-2.jpg', 7, '2022-07-04 07:49:50', '2022-07-04 07:49:50'),
(31, '1656940790_app9-3.jpg', 7, '2022-07-04 07:49:50', '2022-07-04 07:49:50'),
(32, '1656940790_app9-4.jpg', 7, '2022-07-04 07:49:50', '2022-07-04 07:49:50'),
(33, '1656940790_app9-5.jpg', 7, '2022-07-04 07:49:50', '2022-07-04 07:49:50'),
(34, '1656940790_app9-6.jpg', 7, '2022-07-04 07:49:50', '2022-07-04 07:49:50'),
(35, '1656941208_ap7-1.jpg', 8, '2022-07-04 07:56:48', '2022-07-04 07:56:48'),
(36, '1656941208_ap7-2.jpg', 8, '2022-07-04 07:56:48', '2022-07-04 07:56:48'),
(37, '1656941208_ap7-3.jpg', 8, '2022-07-04 07:56:48', '2022-07-04 07:56:48'),
(38, '1656941208_ap7-4.jpg', 8, '2022-07-04 07:56:48', '2022-07-04 07:56:48'),
(39, '1656941208_ap7-5.jpg', 8, '2022-07-04 07:56:48', '2022-07-04 07:56:48'),
(40, '1656941539_ap6-1.jpg', 9, '2022-07-04 08:02:19', '2022-07-04 08:02:19'),
(41, '1656941539_ap6-3.jpg', 9, '2022-07-04 08:02:19', '2022-07-04 08:02:19'),
(42, '1656941539_ap6-4.jpg', 9, '2022-07-04 08:02:19', '2022-07-04 08:02:19'),
(43, '1656941539_ap6-5.jpg', 9, '2022-07-04 08:02:19', '2022-07-04 08:02:19'),
(44, '1656941809_362389008T-1653526632782.jpg', 10, '2022-07-04 08:06:49', '2022-07-04 08:06:49'),
(45, '1656941809_362389010T-1653526632780.jpg', 10, '2022-07-04 08:06:49', '2022-07-04 08:06:49'),
(46, '1656941809_362389014T-1653540220557.jpg', 10, '2022-07-04 08:06:49', '2022-07-04 08:06:49'),
(47, '1656941809_362389016T-1653526632780.jpg', 10, '2022-07-04 08:06:49', '2022-07-04 08:06:49'),
(48, '1656941809_362389018T-1653526632780.jpg', 10, '2022-07-04 08:06:49', '2022-07-04 08:06:49'),
(49, '1656942224_355814930T-1650351266118.jpg', 11, '2022-07-04 08:13:44', '2022-07-04 08:13:44'),
(50, '1656942224_355814932T-1650351266136.jpg', 11, '2022-07-04 08:13:44', '2022-07-04 08:13:44'),
(51, '1656942224_355814946T-1650351267015.jpg', 11, '2022-07-04 08:13:44', '2022-07-04 08:13:44'),
(52, '1656942224_355814972T-1650351268082.jpg', 11, '2022-07-04 08:13:44', '2022-07-04 08:13:44'),
(53, '1656942224_355815072T-1650351271418.jpg', 11, '2022-07-04 08:13:44', '2022-07-04 08:13:44'),
(54, '1656942799_6-1.jpg', 12, '2022-07-04 08:23:19', '2022-07-04 08:23:19'),
(55, '1656942799_6-3.jpg', 12, '2022-07-04 08:23:19', '2022-07-04 08:23:19'),
(56, '1656942799_6-4.jpg', 12, '2022-07-04 08:23:19', '2022-07-04 08:23:19'),
(57, '1656943260_ho7-1.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(58, '1656943260_ho7-3.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(59, '1656943260_ho7-4.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(60, '1656943260_ho7-5.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(61, '1656943260_ho7-6.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(62, '1656943260_ho7-7.jpg', 13, '2022-07-04 08:31:00', '2022-07-04 08:31:00'),
(63, '1656943707_8-1.jpg', 14, '2022-07-04 08:38:27', '2022-07-04 08:38:27'),
(64, '1656943707_8-2.jpg', 14, '2022-07-04 08:38:27', '2022-07-04 08:38:27'),
(65, '1656943707_8-3.jpg', 14, '2022-07-04 08:38:27', '2022-07-04 08:38:27'),
(66, '1656944174_9-1.jpg', 15, '2022-07-04 08:46:14', '2022-07-04 08:46:14'),
(67, '1656944174_9-2.jpg', 15, '2022-07-04 08:46:14', '2022-07-04 08:46:14'),
(68, '1656944174_9-3.jpg', 15, '2022-07-04 08:46:14', '2022-07-04 08:46:14'),
(69, '1656944174_9-4.jpg', 15, '2022-07-04 08:46:14', '2022-07-04 08:46:14'),
(70, '1656944174_9-5.jpg', 15, '2022-07-04 08:46:14', '2022-07-04 08:46:14'),
(71, '1656944922_10-2.jpg', 16, '2022-07-04 08:58:42', '2022-07-04 08:58:42'),
(72, '1656944922_10-3.jpg', 16, '2022-07-04 08:58:42', '2022-07-04 08:58:42'),
(73, '1656945477_11-2.jpg', 17, '2022-07-04 09:07:57', '2022-07-04 09:07:57'),
(74, '1656945477_11-3.jpg', 17, '2022-07-04 09:07:57', '2022-07-04 09:07:57'),
(75, '1656945477_11-4.jpg', 17, '2022-07-04 09:07:57', '2022-07-04 09:07:57'),
(76, '1656945767_12-1.jpg', 18, '2022-07-04 09:12:48', '2022-07-04 09:12:48'),
(77, '1656945768_12-2.jpg', 18, '2022-07-04 09:12:48', '2022-07-04 09:12:48'),
(78, '1656945768_12-3.jpg', 18, '2022-07-04 09:12:48', '2022-07-04 09:12:48'),
(79, '1656946294_342527862T-1643801727058.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(80, '1656946294_342527868T-1643801727178.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(81, '1656946294_342527878T-1643801727392.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(82, '1656946294_342527894T-1643801728034.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(83, '1656946294_342527896T-1643801728044.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(84, '1656946294_342527906T-1643801728334.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34'),
(85, '1656946294_342527908T-1643801728334.jpg', 19, '2022-07-04 09:21:34', '2022-07-04 09:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2022_05_18_144108_create_admins_table', 1),
(43, '2022_06_23_155144_create_categories_table', 1),
(44, '2022_06_23_155145_create_properties_table', 1),
(45, '2022_06_23_165447_create_images_table', 1),
(46, '2022_06_28_170424_create_contactuses_table', 1),
(47, '2022_06_30_141917_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `addr1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `age_property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `about_property` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `cat_id`, `owner_name`, `email`, `phone`, `addr1`, `addr2`, `room`, `floor`, `age_property`, `rent_out`, `price`, `about_property`, `user_id`, `cover`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rohit Mori', 'rohitmori1@gmail.com', 8856456789, 'University Road,Munjka,Vimal Nagar,Manharpura 1,Raiya,Ghanshyam Nagar', '809-A Pramukh swami arcade malviya chowk rajkot , Rajkot', 3, 3, '5-10 years', 'Family,Single men', 21000, 'Rent Agreement Duration:11 Months', 1, '1656845540_3.jpg', 2, NULL, '2022-07-03 05:22:21', '2022-07-03 05:32:18'),
(2, 1, 'Ashutosh Trivedi', 'Ashutoshtrivedi@gmail.com', 8856456789, 'Madhuvan Society', 'Nr. patidar chowk, Rajkot, Gujarat', 3, 1, '5-10 years', 'Family,Single women', 15000, 'Rent Agreement Duration:11 Months\r\nParking:Covered, 1 Open\r\nElectricity & Water Charges:Charges not included', 3, '1656860384_ho2-1.jpg', 2, NULL, '2022-07-03 09:29:44', '2022-07-03 09:53:34'),
(3, 1, 'Suraj', 'suraj@gmail.com', 9856257456, 'sterling hospital Raiya Road', 'Rajkot', 4, 2, '5-10 years', 'Family', 21000, 'Rent Agreement Duration:11 Months\r\nElectricity & Water Charges:Charges not included\r\nParking:Covered, Open', 4, '1656861034_ho3-1.jpg', 2, NULL, '2022-07-03 09:40:34', '2022-07-03 09:53:49'),
(4, 2, 'Sandipbhai H Jivrajani', 'sandipbhaijivrajani@gmail.com', 9935621528, 'RD Gokul Apartment', '150 Feet Ring Road, Rajkot', 3, 4, '1-5 years', 'Family', 17000, 'Floor Number:4th   of 12 Floors\r\nParking:1 Covered, 1 Open\r\nElectricity & Water Charges:Charges included\r\nRent Agreement Duration:11 Months', 5, '1656861510_ap1hall-1.jpg', 2, NULL, '2022-07-03 09:48:30', '2022-07-03 09:54:02'),
(5, 2, 'Sandipbhai H Jivrajani', 'sandipbhaijivrajani@gmail.com', 9965874315, 'puspa enclave patidar chok', 'University Road, Rajkot', 3, 4, '1-5 years', 'Family,Single women', 16000, 'Floor Number:4th   of 4 Floors\r\nElectricity & Water Charges:Charges included\r\nParking:1 Covered, 1 Open\r\nGated Community:Yes', 5, '1656861751_ap2-1.jpg', 2, NULL, '2022-07-03 09:52:32', '2022-07-03 09:54:13'),
(6, 2, 'Shivam', 'shivam@gmail.com', 8956321475, 'Vasant Marvel,Vimal Nagar', 'Rajkot, Gujarat', 2, 6, '5-10 years', 'Family,Single men,Single women', 17500, 'Floor Number:6th   of 11 Floors\r\nParking:1 Covered, Open\r\nFacing:West\r\nRent Agreement Duration:11 Months\r\nElectricity & Water Charges:Charges included', 6, '1656940237_ap8-5.jpg', 2, NULL, '2022-07-04 07:40:37', '2022-07-04 08:31:58'),
(7, 2, 'sandipbhai mohan', 'sandipbhaimohan@gmail.com', 89631254783, 'prarthana apartment', 'Airport Road, Rajkot', 3, 3, '1-5 years', 'Family', 258000, 'Floor Number:3rd   of 5 Floors\r\nElectricity & Water Charges:Charges not included\r\nRent Agreement Duration:11 Months\r\nParking:1 Covered, 1 Open', 7, '1656940790_app9-1.jpg', 2, NULL, '2022-07-04 07:49:50', '2022-07-04 08:32:14'),
(8, 2, 'Nilesh Bhai', 'Nileshbhai@gmail.com', 9545231859, 'Shubh Prayag', 'Airport Road, Rajkot', 2, 4, '10+ years', 'Family,Single men,Single women', 16000, 'Floor Number:4th of 4 \r\nFloorsFacing:East\r\nFlooring:Vitrified\r\nWidth of facing road:40.0 FeetGated Community:Yes\r\nParking:1 Covered, Open\r\nRent Agreement Duration:11 Months\r\nElectricity & Water Charges:Charges not included', 8, '1656941208_ap7-6.jpg', 2, NULL, '2022-07-04 07:56:48', '2022-07-04 08:32:30'),
(9, 2, 'vishal javia', 'vishaljavia@gmail.com', 8956321475, 'Sarovar Apartment, Shakti Nagar', 'Kalavad Road, Rajkot', 3, 1, '10+ years', 'Family,Single men,Single women', 16500, 'Floor Number:1st   of 10 Floors\r\nElectricity & Water Charges:Charges included\r\nRent Agreement Duration:None\r\nGated Community:Yes\r\nFlooring:Mosaic\r\nFacing:North-West', 9, '1656941539_ap6-6.jpg', 2, NULL, '2022-07-04 08:02:19', '2022-07-04 08:33:06'),
(10, 1, 'Vishal Javia', 'vishaljavia@gmail.com', 8593214568, 'mombasa avneu  society', '150 Feet Ring Road, Rajkot', 3, 2, '1-5 years', 'Family,Single women', 17000, 'Total Floors:2 Floors\r\nParking:1 Covered, 1 Open\r\nElectricity & Water Charges:Charges included', 9, '1656941809_362389012T-1653526632780.jpg', 2, NULL, '2022-07-04 08:06:49', '2022-07-04 08:32:42'),
(11, 1, 'Shivam', 'shivam@gmail.com', 9985632156, 'collage wadi', 'Kalavad Road, Rajkot', 2, 2, '1-5 years', 'Family,Single men,Single women', 15000, 'Floor Number:2nd   of 4 Floors   \r\nParking:1 Covered, 1 Open\r\nRent Agreement Duration:11 Months\r\nElectricity & Water Charges:Charges included\r\nWidth of facing road:80.0 Feet', 6, '1656942224_355814994T-1650351268289.jpg', 2, NULL, '2022-07-04 08:13:44', '2022-07-04 08:33:24'),
(12, 1, 'Dr R B Varnagar', 'rbvarnagar@gmail.com', 8596741235, 'Shivdhara-1 Apartment 301, Nana Mava Chowk', 'Rajkot, Gujarat', 3, 3, '10+ years', 'Family,Single men', 20000, 'Floor Number:3rd   of 4 Floors\r\nGated Community:Yes\r\nCorner Property:Yes\r\nElectricity & Water Charges:Charges not included\r\nRent Agreement Duration:11 Months', 10, '1656942799_6-2.jpg', 2, NULL, '2022-07-04 08:23:19', '2022-07-04 08:33:38'),
(13, 1, 'Mr. Amar Kansagara', 'amarkansagara@gmail.com', 8596321568, 'Royal Park', 'Aashirwad, Royal Park, Rajkot, Gujarat', 3, 2, '10+ years', 'Family,Single women', 23000, 'Total Floors:2 Floors\r\nParking:1 Covered, 1 Open\r\nElectricity & Water Charges:Charges not included\r\nPet Friendly:Yes', 11, '1656943260_ho7-2.jpg', 2, NULL, '2022-07-04 08:31:00', '2022-07-04 08:31:49'),
(14, 1, 'RAJ BANERJEE', 'rajbanerjee@gmail.com', 9545231856, 'Shivalik University Road', 'Rajkot, Gujarat', 3, 2, '1-5 years', 'Family,Single women', 16000, 'Total Floors:2 Floors\r\nRent Agreement Duration:11 Months\r\nParking:1 Covered, Open\r\nElectricity & Water Charges:Charges not included\r\nFurnishing:Semifurnished', 12, '1656943707_8-2.jpg', 2, NULL, '2022-07-04 08:38:27', '2022-07-04 08:59:19'),
(15, 1, 'RAJ BANERJEE', 'rajbanerjee@gmail.com', 9545231859, 'aaryashree society ambika town ship', 'Rajkot, Gujarat', 3, 1, '5-10 years', 'Family', 20000, 'Total Floors:1 Floors\r\nElectricity & Water Charges:Charges included', 12, '1656944174_9-3.jpg', 2, NULL, '2022-07-04 08:46:14', '2022-07-04 08:59:34'),
(16, 2, 'gaurav', 'gaurav@gmail.com', 8963251475, 'Kailashnahar Society 150 Ring road,Saurashtra Kala Kendra,', 'Rajkot, Gujarat', 3, 2, '10+ years', 'Family,Single men,Single women', 19000, 'Total Floors:2 Floors\r\nGated Community:Yes\r\nParking:1 Covered, 1 Open\r\nElectricity & Water Charges:Charges not included\r\nRent Agreement Duration:11 Months\r\nFurnishing:Furnished', 13, '1656944922_10-1.jpg', 2, NULL, '2022-07-04 08:58:42', '2022-07-04 08:59:47'),
(17, 2, 'Vivek Ganatra', 'vivekganatra@gmail.com', 8963251475, 'Selenium City ,Madhapar', 'Rajkot, Gujarat', 3, 8, '0-1 years', 'Family,Single men,Single women', 14000, 'Floor Number:8th   of 12 Floors\r\nElectricity & Water Charges:Charges included\r\nParking:Covered, Open\r\nRent Agreement Duration:None', 14, '1656945477_11-1.jpg', 2, NULL, '2022-07-04 09:07:57', '2022-07-04 09:14:17'),
(18, 2, 'VIVEK GANATRA', 'vivekganatre@gmail.com', 89631254783, 'Kalawad Road, Rahkot', 'Rajkot, Gujarat', 3, 3, '1-5 years', 'Family,Single men', 15000, 'Floor Number:3rd   of 5 Floors\r\nElectricity & Water Charges:Charges not included', 14, '1656945767_12-4.jpg', 2, NULL, '2022-07-04 09:12:47', '2022-07-04 09:14:27'),
(19, 2, 'praful pandya', 'prafulpandya@gmail.com', 8526398745, 'Ratnam Sky City,Ghanteshwer', 'Rajkot, Gujarat', 3, 6, '1-5 years', 'Family,Single men,Single women', 10000, 'Floor Number:6th   of 12 Floors\r\nElectricity & Water Charges:Charges not included\r\nRent Agreement Duration:None', 15, '1656946294_342527872T-1643801727274.jpg', 2, NULL, '2022-07-04 09:21:34', '2022-07-04 09:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Avani Makwana', 'avanim6420@gmail.com', NULL, '$2y$10$b9Cuq7nz2kVDAiJTMkrsuuzFaY8dThp2KE7K/VlPP2gME5hD6vs6q', NULL, '2022-07-03 00:59:12', '2022-07-03 00:59:12'),
(2, 'Rohit Mori', 'rohitmori1@gmail.com', NULL, '$2y$10$DVftYbG9rYLLEz3Kp7.PRuHIdoxJr.c9/NqAvN6ftP.ecqAG5VIc6', NULL, '2022-07-03 00:59:32', '2022-07-03 00:59:32'),
(3, 'Ashutosh Trivedi', 'ashutoshtrivedi@gmail.com', NULL, '$2y$10$C5j6qqLzpUkcNzICq1pa.ORBsO2dX8yV80ZlrBeSpDf0rH49WJEW6', NULL, '2022-07-03 01:00:04', '2022-07-03 01:00:04'),
(4, 'Suraj', 'Suraj@gmail.com', NULL, '$2y$10$gtgvYC0GRurAbAQFKWwX1.7SvcHjdTGJ/4f.4k5Cq9xl70VTFci.q', NULL, '2022-07-03 09:35:12', '2022-07-03 09:35:12'),
(5, 'Sandipbhai H Jivrajani', 'sandipbhaijivrajani@gmail.com', NULL, '$2y$10$agiU1wxkpC/qUf8PXp3hgelefmH3xPUTnPfe0TmXqSWkUGhe2i8eq', NULL, '2022-07-03 09:44:42', '2022-07-03 09:44:42'),
(6, 'Shivam', 'shivam@gmail.com', NULL, '$2y$10$dMoJ562PTrEKS5ZPT3mT2udaYC3j11FuzKwKiRkViIZqwb19kbNZa', NULL, '2022-07-04 07:36:23', '2022-07-04 07:36:23'),
(7, 'Sandipbhai Mohan', 'sandipbhaimohan@gemail.com', NULL, '$2y$10$WIw1XApwm8XAGiOFOID6juv0N0ikVleLU.Y1AWa0R7HErIbRbjFGm', NULL, '2022-07-04 07:46:14', '2022-07-04 07:46:14'),
(8, 'Nilesh Bhai', 'Nileshbhai@gmail.com', NULL, '$2y$10$VJWzW5SKtR0DUg/BamkaK.YIgBZb5vcG22o/7p8i3VWo9eBaRyHnO', NULL, '2022-07-04 07:51:51', '2022-07-04 07:51:51'),
(9, 'Vishal Javia', 'vishaljavia@gmail.com', NULL, '$2y$10$/4DdQLerag145ay3CAO8..0dA7JGmnq.r1mUvDDSUkoxkhuldrNNy', NULL, '2022-07-04 07:58:14', '2022-07-04 07:58:14'),
(10, 'Dr R B Varnagar', 'rbvarnagar@gmail.com', NULL, '$2y$10$1JZIafA6IpqIbyGQeWtwee3rxHTfIWINIMRt1GCbdmOzJg8WRMDPy', NULL, '2022-07-04 08:20:07', '2022-07-04 08:20:07'),
(11, 'Amar Kansagara', 'amarkansagara@gmail.com', NULL, '$2y$10$9WfQkbzQpPqArzFEeLarUubd53eG36.5l.wRmEywZ9RAHdrMIVHw.', NULL, '2022-07-04 08:28:29', '2022-07-04 08:28:29'),
(12, 'Raj Banerjee', 'rajbanerjee@gmail.com', NULL, '$2y$10$kyHFhN8Wi30/bDfq1.oebeT664hGB23ti6YGkEYb/fiSqeOu/E5iu', NULL, '2022-07-04 08:35:45', '2022-07-04 08:35:45'),
(13, 'Gaurav', 'gaurav@gmail.com', NULL, '$2y$10$zPvlDigFSyH6sjRU3F.i7uNF5JKFUAFvtCKjKpDsNdKvaLixE9aaS', NULL, '2022-07-04 08:56:08', '2022-07-04 08:56:08'),
(14, 'Vivek Ganatra', 'vivekganatra@gmail.com', NULL, '$2y$10$vfEF3q71I8BJyrj/NO3jx.I16yzFVw7aDlbTg6IiOFTI.rJ80uvG6', NULL, '2022-07-04 09:05:49', '2022-07-04 09:05:49'),
(15, 'praful pandya', 'prafulpandya@gmail.com', NULL, '$2y$10$B1plVTgrdi4rFaZcpg0t0.x1iJgIBC9XmlhcEioqKKRL6/6mdey6y', NULL, '2022-07-04 09:17:33', '2022-07-04 09:17:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactuses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_post_id_foreign` (`post_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_foreign` (`user_id`),
  ADD KEY `properties_cat_id_foreign` (`cat_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD CONSTRAINT `contactuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



