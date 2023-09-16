-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Mobiles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-16 23:17:49', '2023-04-16 23:17:49'),
(2, 'Computers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-16 23:17:50', '2023-04-16 23:17:50'),
(3, 'Clothes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-16 23:17:50', '2023-04-16 23:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_04_16_225403_create_cats_table', 1),
(12, '2023_04_17_094336_create_products_table', 2),
(13, '2023_04_25_104927_add_column_role_to_users_table', 3),
(15, '2023_04_29_185215_add_access_token_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discount_price`, `img`, `desc`, `cat_id`, `created_at`, `updated_at`) VALUES
(5, 'DELL', 2000.00, 20.00, 'products/3PLBuX3Scei6zzkobyJJxOsDVaJ4ciOimAR2mAic.jpg', 'Dell company', 2, '2023-04-19 07:54:30', '2023-04-19 11:15:11'),
(6, 'iphone12 pro max', 2000.00, 50.00, 'products/0aP7HHaynPTkmg8vLpbfBiZIE3oNoqpIGCZSja2Z.jpg', 'apple Company', 1, '2023-04-19 11:22:05', '2023-04-19 11:22:05'),
(10, 'Lenovo', 5000.00, 60.00, 'products/SaZkAM8t5tNElKnyUEILbbDHhtdHqjhM60PQrzEr.jpg', 'Lenovo Company', 2, '2023-04-19 21:30:09', '2023-04-19 21:30:09'),
(11, 'HP', 4500.00, 10.00, 'products/JVQ9yoBfDoUkv1FEdfCy4WO9oudAYPvCGk4BMGze.jpg', 'HP company', 2, '2023-04-19 21:32:31', '2023-04-19 21:32:31'),
(15, 'T-shirt round', 20.00, 5.00, 'products/r5dgPl2beOxGOOnzKA1dj1UD0QyMFs0Xsqjzhr0e.jpg', 'Cotton 100%', 3, '2023-04-19 22:36:20', '2023-04-19 22:36:20'),
(20, 'SAMSUNG Galaxy S22 altra', 800.00, 25.00, 'products/0MuN14k4PM1AJvWHsQ0KDifMDqIPk1qARmcwjdMy.webp', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas voluptatum', 1, '2023-04-29 21:40:22', '2023-04-29 21:40:22'),
(23, 'SAMSUNG Galaxy S22', 700.00, 20.00, 'products/TBfUDT9uiudVpZCABafWhUppCOMuhTScbFc8fNSk.jpg,products/Z0bM5d3TkxSJfNbOsZcqUmpELpgkPnpzWBqh5ogq.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit', 1, '2023-04-30 06:06:24', '2023-04-30 06:49:49'),
(24, 'T-shirt', 10.00, NULL, 'products/AlexoyzY4qznaug5Yc4ZRLbmQoh8rsp0GZ5RBOWT.jpg,products/bPm4YbsEAnSFzw3g9ObGyDDqIfo3fSGYaGNeVpTK.jpg,products/psttE2Qctv5wmvoAgv539jqUlHnRSw3Li6Aiu3vj.jpg,products/lzZY1Iuvm5JVryhmaVAs9vpxKZ9QcZVosfqUW1vI.jpg', 'Cotton 100%', 3, '2023-04-30 06:28:13', '2023-04-30 06:28:13'),
(25, 'shoes  Nike', 50.00, 2.00, 'products/TfPso8DxPaGh1dwd2Zvn97oTBlmoPoxy79V8ZF2N.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit', 3, '2023-04-30 06:35:12', '2023-04-30 06:35:12'),
(36, 'shoes  Nike', 60.00, 5.00, 'products/kYA2ZMGjgzffmCOdIYPTmyyN7h0dqQxTVBfLrTbd.jpg', 'original', 3, '2023-04-30 12:55:59', '2023-04-30 12:55:59'),
(59, 'Shoses updated 2', 80.00, 0.00, 'products/GwxwA5VPifuPB3k3HSgEOiXWGVILCWTctqZM0o4s.webp', 'Shoses description', 1, '2023-04-30 14:44:28', '2023-06-23 21:21:52'),
(61, 'fd', 800.00, 500.00, 'products/sLMDTOM0DNvVaCHFRZrmVoUkd3pc8hnCoSpVv1rW.jpg', 'asdfg', 1, '2023-06-23 21:01:28', '2023-06-23 21:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `access_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `access_token`) VALUES
(1, 'Ahmed', 'a@a.com', NULL, '$2y$10$nYflXJNkVaPLgk3edpZ1A.FRy27ZQygEnAuOT8E4pSVC0NNxq9EDK', NULL, '2023-04-23 10:39:54', '2023-04-29 19:34:34', 'admin', 'i5DZ6jTi9hlA9jLOCVPW5QTBbJgC8w1INllPYdeVrDuJdug83bXJZoPvujiebyQl'),
(3, 'yousef', 'yousef@gmail.com', NULL, '$2y$10$rWYCsnLcx0KIgneM0mQghurqZEI1/MUtNhl7ZuRffn2IyQOWiUcvq', NULL, '2023-04-25 08:44:10', '2023-04-25 08:44:10', 'admin', NULL),
(5, 'test', 'test@test.com', NULL, '$2y$10$A1ufPcrGfcVFisxc/ifs/ewcerC9nCkK45jbenPIzB1tbAqNF09..', NULL, '2023-04-29 18:12:33', '2023-04-29 19:21:32', 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

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
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
