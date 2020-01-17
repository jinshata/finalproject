-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 10:51 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcloth`
--

CREATE TABLE `addcloth` (
  `clothid` int(10) UNSIGNED NOT NULL,
  `clothcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addcloth`
--

INSERT INTO `addcloth` (`clothid`, `clothcategory`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Saree', 'A  saree  is a women\'s garment from the Indian subcontinent', '50', '1577864859.jpg', '2020-01-01 00:38:01', '2020-01-01 02:17:39'),
(2, 'Churidar', 'Churidar. Churidar, or more properly churidar pyjama is tightly fitting trouser worn by both men and women in the Indian subcontinent', '40', '1577858935.jpg', '2020-01-01 00:38:55', '2020-01-01 00:38:55'),
(3, 'Nighty', 'nightie definition: informal for nightdress UK or nightgown', '30', '1577862485.jpg', '2020-01-01 01:38:05', '2020-01-01 01:38:05'),
(4, 'Shirt', 'Used Shirts', '40', '1577865031.jpg', '2020-01-01 02:20:31', '2020-01-01 02:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `foodid` int(10) UNSIGNED NOT NULL,
  `foodcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`foodid`, `foodcategory`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Meals', 'A meal is an eating occasion that takes place at a certain time and includes prepared food. ... Some serve dinner as the main meal at midday,', '50', '1578201689.jpg', '2019-12-24 00:27:03', '2020-01-04 23:51:29'),
(10, 'Biriyani', 'A Rich and Flavorful Layered Indian Dish\r\nA world-renowned Indian dish, biryani takes time and practice to make but is worth every bit of the effort.', '30', '1577167111.jpg', '2019-12-24 00:28:31', '2019-12-24 00:28:31'),
(11, 'Chappathi', 'Roti (also known as chapati) is a round flatbread native to the Indian subcontinent made from stoneground wholemeal flour, traditionally known as atta, and water that is combined into a dough.', '50', '1577167388.jpg', '2019-12-24 00:33:08', '2019-12-24 00:33:08'),
(13, 'Vegnoodels', 'Its Very good Item', '50', '1577791137.jpg', '2019-12-31 05:48:57', '2019-12-31 05:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `addtoy`
--

CREATE TABLE `addtoy` (
  `toyid` int(10) UNSIGNED NOT NULL,
  `toycategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtoy`
--

INSERT INTO `addtoy` (`toyid`, `toycategory`, `description`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 'TeddyBear', 'A teddy bear is a stuffed toy in the form of a bear. ... Since the creation of the first teddy bears which sought to imitate the form of real bear cubs, \"teddies\" have greatly varied in form, style, color, and material', '25', '1577872800.jpg', '2020-01-01 04:18:30', '2020-01-01 04:30:00'),
(2, 'Teddybear', 'A teddy bear is a stuffed toy in the form of a bear. ... Since the creation of the first teddy bears which sought to imitate the form of real bear cubs, \"teddies\" have greatly varied in form, style, color, and material', '20', '1577872408.jpg', '2020-01-01 04:23:28', '2020-01-01 04:23:28'),
(3, 'Rubberducky', 'A rubber duck (also known as a rubber ducky) is a toy shaped like a stylized duck, generally yellow with a flat base. ... The yellow rubber duck has achieved an iconic status in Western pop culture and is often symbolically linked to bathing.', '30', '1577872464.jpg', '2020-01-01 04:24:24', '2020-01-01 04:24:24'),
(5, 'Little horse', 'Kids learn about the horse including terminology, colors, food, wild horses and more. ... There are certain breeds of horses that are small and these are generally .', '20', '1577872870.jpg', '2020-01-01 04:31:10', '2020-01-01 04:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `cloth_id` int(10) UNSIGNED NOT NULL,
  `clothcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`cloth_id`, `clothcategory`, `created_at`, `updated_at`) VALUES
(1, 'Saree', '2019-12-31 06:20:41', '2019-12-31 06:20:41'),
(3, 'Churidar', '2019-12-31 06:22:21', '2019-12-31 06:22:21'),
(5, 'Nighty', '2020-01-01 01:34:27', '2020-01-01 01:34:27'),
(6, 'Shirt', '2020-01-01 02:18:52', '2020-01-01 02:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'India', '2019-12-11 04:59:37', '2019-12-11 04:59:37'),
(2, 'India', '2019-12-11 05:39:32', '2019-12-11 05:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 'Kasargode', '2019-12-11 04:58:29', '2019-12-11 04:58:29'),
(2, 'Kannur', '2019-12-11 04:59:08', '2019-12-11 04:59:08'),
(3, 'Kozhikode', '2019-12-11 06:03:31', '2019-12-11 06:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `donateditem`
--

CREATE TABLE `donateditem` (
  `donateid` int(10) UNSIGNED NOT NULL,
  `fk_login_id` int(10) UNSIGNED NOT NULL,
  `food` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clothes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toys` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donateddate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `donor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `order_id`, `receiver_id`, `donor_id`, `created_at`, `updated_at`) VALUES
(1, 5, 38, 32, '2020-01-09 23:49:59', '2020-01-09 23:49:59'),
(2, 8, 32, 32, '2020-01-09 23:56:01', '2020-01-09 23:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(10) UNSIGNED NOT NULL,
  `foodcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `foodcategory`, `created_at`, `updated_at`) VALUES
(1, 'Rice', '2019-12-16 05:21:44', '2019-12-16 05:21:44'),
(5, 'Biriyani', '2019-12-16 05:22:59', '2019-12-16 05:22:59'),
(7, 'Meals', '2019-12-16 05:25:16', '2019-12-16 05:25:16'),
(8, 'Chappathi', '2019-12-16 05:25:30', '2019-12-16 05:25:30'),
(9, 'Porotta', '2019-12-16 05:25:39', '2019-12-16 05:25:39'),
(10, 'Dosa', '2019-12-16 05:25:57', '2019-12-16 05:25:57'),
(11, 'Plain Dosa', '2019-12-16 05:26:21', '2019-12-16 05:26:21'),
(12, 'MasalaDosa', '2019-12-16 05:26:34', '2019-12-16 05:26:34'),
(13, 'Poori', '2019-12-16 05:26:46', '2019-12-16 05:26:46'),
(14, 'VegBiriyani', '2019-12-20 00:44:39', '2019-12-20 00:44:39'),
(15, 'ChikenBiriyani', '2019-12-20 00:44:54', '2019-12-20 00:44:54'),
(16, 'Vegnoodels', '2019-12-20 00:45:06', '2019-12-20 00:45:06'),
(17, 'Chikennoodels', '2019-12-20 00:45:15', '2019-12-20 00:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `place_id` int(10) UNSIGNED NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`place_id`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', '2019-12-18 09:52:00', '2019-12-18 09:52:00'),
(2, 'Agra', '2019-12-18 09:52:02', '2019-12-18 09:52:02'),
(4, 'Amritsar', '2019-12-18 09:52:04', '2019-12-18 09:52:04'),
(5, 'Bangalore', '2019-12-18 09:52:05', '2019-12-18 09:52:05'),
(7, 'Bhopal', '2019-12-18 09:52:05', '2019-12-18 09:52:05'),
(9, 'Bhubaneswar', '2019-12-18 09:52:06', '2019-12-18 09:52:06');

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
(3, '2019_12_09_104852_create_user_login_table', 1),
(4, '2019_12_09_110200_create_user_account_table', 1),
(5, '2019_12_10_050750_create_state_table', 1),
(6, '2019_12_10_051229_create_city_table', 1),
(7, '2019_12_11_060657_create_district_table', 1),
(8, '2019_12_11_061502_create_country_table', 1),
(9, '2019_12_16_102531_create_food_table', 2),
(10, '2019_12_18_092858_create_location_table', 3),
(11, '2019_12_20_062015_create_addfood_table', 4),
(12, '2019_12_31_113152_create_cloth_table', 5),
(13, '2020_01_01_051059_create_addcloth_table', 6),
(14, '2020_01_01_075933_create_toy_table', 7),
(15, '2020_01_01_081904_create_addtoy_table', 8),
(16, '2020_01_02_090433_create_donateditem_table', 9),
(21, '2020_01_09_073556_create_donor_table', 14),
(22, '2020_01_09_081234_create_receiver_table', 15),
(23, '2020_01_09_114246_create_receiver_table', 16),
(24, '2020_01_09_171107_create_donor_table', 17),
(25, '2020_01_09_183225_create_donor_table', 18);

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
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_receiver_id` int(10) UNSIGNED NOT NULL,
  `needtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `needdate` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `fk_receiver_id`, `needtype`, `subcategory`, `quantity`, `needdate`, `status`, `created_at`, `updated_at`) VALUES
(1, 39, 'Food', 'Biriyani', '100', '2020-01-01', 'approved', '2020-01-09 06:15:26', '2020-01-09 06:28:39'),
(2, 40, 'Food', 'Egg Biriyani', '50', '2020-01-02', 'approved', '2020-01-09 06:22:03', '2020-01-09 10:45:25'),
(3, 41, 'Cloths', 'Churidar', '40', '2020-01-03', 'approved', '2020-01-09 06:25:22', '2020-01-09 23:39:38'),
(4, 38, 'Cloths', 'Saree', '45', '2020-01-04', 'approved', '2020-01-09 11:04:14', '2020-01-09 23:44:22'),
(5, 38, 'Cloths', 'Saree', '50', '2020-01-05', 'approved', '2020-01-09 11:12:22', '2020-01-09 23:48:37'),
(6, 32, 'Food', 'Egg Biriyani', '100', '2020-01-06', 'pending', '2020-01-09 23:24:11', '2020-01-09 23:24:11'),
(7, 32, 'Cloths', 'Churidar', '50', '2000-01-01', 'pending', '2020-01-09 23:30:41', '2020-01-09 23:30:41'),
(8, 32, 'Cloths', 'Kurta', '20', '2020-01-02', 'approved', '2020-01-09 23:55:28', '2020-01-09 23:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Kerala', '2019-12-11 04:59:24', '2019-12-11 04:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `toy`
--

CREATE TABLE `toy` (
  `toy_id` int(10) UNSIGNED NOT NULL,
  `toycategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toy`
--

INSERT INTO `toy` (`toy_id`, `toycategory`, `created_at`, `updated_at`) VALUES
(1, 'Teddybear', '2020-01-01 02:43:45', '2020-01-01 02:43:45'),
(2, 'Rubberducky', '2020-01-01 02:46:08', '2020-01-01 02:46:08'),
(3, 'Little horse', '2020-01-01 02:46:32', '2020-01-01 02:46:32');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `register_id` int(10) UNSIGNED NOT NULL,
  `fk_login_id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`register_id`, `fk_login_id`, `fullname`, `address`, `gender`, `contactno`, `district`, `state`, `country`, `pincode`, `usertype`, `status`, `created_at`, `updated_at`) VALUES
(19, 31, 'Jaigish', 'Dreams', 'male', '6282500187', '3', 'Kerala', 'India', '673317', 'Donor', '1', '2019-12-12 23:28:13', '2020-01-07 04:58:09'),
(20, 32, 'Sreelakshmi', 'sreeragam', 'female', '9895790788', '3', 'Kerala', 'India', '673317', 'Donor', '1', '2019-12-12 23:28:53', '2019-12-12 23:28:53'),
(22, 34, 'Anju.P', 'sopanam', 'female', '9048893286', '3', 'Kerala', 'India', '673317', 'Receiver', '1', '2019-12-16 02:40:10', '2019-12-16 02:40:10'),
(24, 35, 'Sithara', 'Sitharam', 'female', '9847344523', '3', 'Kerala', 'India', '673317', 'Donor', '1', '2019-12-18 00:07:57', '2019-12-18 00:07:57'),
(25, 36, 'ShanuPriya', 'Shanis', 'female', '8089424532', '2', 'Kerala', 'India', '673001', 'Receiver', '1', '2019-12-18 00:13:20', '2020-01-17 03:31:43'),
(26, 37, 'Athira', 'Vrindavanam', 'female', '9895676554', '2', 'Kerala', 'India', '673001', 'Receiver', '1', '2019-12-30 23:56:55', '2019-12-30 23:56:55'),
(27, 38, 'Swathi.K', 'Krishnakripa', 'female', '9895453423', '3', 'Kerala', 'India', '673314', 'Receiver', '1', '2019-12-31 01:40:39', '2019-12-31 01:40:39'),
(28, 39, 'Niva.P', 'NivaHouse', 'female', '9895671213', '2', 'Kerala', 'India', '673314', 'Receiver', '1', '2019-12-31 02:36:14', '2019-12-31 02:36:14'),
(29, 40, 'Anusha.L', 'Devikripa', 'female', '9895212321', '2', 'Kerala', 'India', '672001', 'Receiver', '1', '2019-12-31 03:34:37', '2019-12-31 03:34:37'),
(30, 41, 'Stefi P', 'stefi house', 'female', '9895677876', '2', 'Kerala', 'India', '673317', 'Receiver', '1', '2020-01-05 03:39:56', '2020-01-05 03:39:56'),
(31, 42, 'Minnu.L', 'minnu', 'female', '9897566554', '3', 'Kerala', 'India', '673010', 'Donor', '0', '2020-01-17 02:53:53', '2020-01-17 03:50:05'),
(32, 43, 'Sreedevi.H', 'sreedevinivas', 'female', '6282400123', '3', 'Kerala', 'India', '673011', 'Receiver', '1', '2020-01-17 02:56:46', '2020-01-17 02:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `email`, `password`, `usertype`, `status`, `created_at`, `updated_at`) VALUES
(28, 'admin@gmail.com', 'admin123', 'admin', '', NULL, NULL),
(30, 'jinshata999@gmail.com', 'jinsha', 'Donor', '', '2019-12-12 23:26:11', '2019-12-12 23:26:11'),
(31, 'jaigish@gmail.com', 'jaigish', 'Donor', '0', '2019-12-12 23:28:13', '2020-01-17 03:44:34'),
(32, 'sreelakshmi@gmail.com', 'sree', 'Donor', '', '2019-12-12 23:28:53', '2019-12-12 23:28:53'),
(33, 'akhila@gmail.com', 'akhila', 'Donor', '', '2019-12-13 02:36:24', '2019-12-13 02:36:24'),
(34, 'anjusajin@gmail.com', 'anju', 'Donor', '', '2019-12-16 02:40:10', '2019-12-16 02:40:10'),
(35, 'sithara@gmail.com', 'sithara', 'Donor', '', '2019-12-18 00:07:57', '2019-12-18 00:07:57'),
(36, 'shanu@gmail.com', 'shanu', 'Donor', '', '2019-12-18 00:13:20', '2019-12-18 00:13:20'),
(37, 'athira@gmail.com', 'athira', 'Donor', '', '2019-12-30 23:56:55', '2019-12-30 23:56:55'),
(38, 'swathi@gmail.com', 'swathi111', 'Receiver', '', '2019-12-31 01:40:38', '2019-12-31 01:40:38'),
(39, 'niva@gmail.com', 'niva', 'Receiver', '', '2019-12-31 02:36:14', '2019-12-31 02:36:14'),
(40, 'anusha@gmail.com', 'anusha', 'Receiver', '', '2019-12-31 03:34:37', '2019-12-31 03:34:37'),
(41, 'stefi@gmail.com', 'stefi', 'Receiver', '', '2020-01-05 03:39:55', '2020-01-05 03:39:55'),
(42, 'minnu@gmail.com', 'minnu', 'Donor', '0', '2020-01-17 02:53:53', '2020-01-17 03:50:05'),
(43, 'sreedevi@gmail.com', 'sreedevi', 'Receiver', '1', '2020-01-17 02:56:46', '2020-01-17 02:56:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcloth`
--
ALTER TABLE `addcloth`
  ADD PRIMARY KEY (`clothid`);

--
-- Indexes for table `addfood`
--
ALTER TABLE `addfood`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `addtoy`
--
ALTER TABLE `addtoy`
  ADD PRIMARY KEY (`toyid`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`cloth_id`),
  ADD UNIQUE KEY `cloth_clothcategory_unique` (`clothcategory`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `donateditem`
--
ALTER TABLE `donateditem`
  ADD PRIMARY KEY (`donateid`),
  ADD KEY `donateditem_fk_login_id_foreign` (`fk_login_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donor_order_id_foreign` (`order_id`),
  ADD KEY `donor_receiver_id_foreign` (`receiver_id`),
  ADD KEY `donor_donor_id_foreign` (`donor_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `food_foodcategory_unique` (`foodcategory`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`place_id`);

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
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiver_fk_receiver_id_foreign` (`fk_receiver_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `toy`
--
ALTER TABLE `toy`
  ADD PRIMARY KEY (`toy_id`),
  ADD UNIQUE KEY `toy_toycategory_unique` (`toycategory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `user_account_fk_login_id_foreign` (`fk_login_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcloth`
--
ALTER TABLE `addcloth`
  MODIFY `clothid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addfood`
--
ALTER TABLE `addfood`
  MODIFY `foodid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addtoy`
--
ALTER TABLE `addtoy`
  MODIFY `toyid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `cloth_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donateditem`
--
ALTER TABLE `donateditem`
  MODIFY `donateid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `place_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `toy`
--
ALTER TABLE `toy`
  MODIFY `toy_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `register_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donateditem`
--
ALTER TABLE `donateditem`
  ADD CONSTRAINT `donateditem_fk_login_id_foreign` FOREIGN KEY (`fk_login_id`) REFERENCES `user_login` (`login_id`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_donor_id_foreign` FOREIGN KEY (`donor_id`) REFERENCES `user_login` (`login_id`),
  ADD CONSTRAINT `donor_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `receiver` (`id`),
  ADD CONSTRAINT `donor_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `receiver` (`fk_receiver_id`);

--
-- Constraints for table `receiver`
--
ALTER TABLE `receiver`
  ADD CONSTRAINT `receiver_fk_receiver_id_foreign` FOREIGN KEY (`fk_receiver_id`) REFERENCES `user_login` (`login_id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_fk_login_id_foreign` FOREIGN KEY (`fk_login_id`) REFERENCES `user_login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
