-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seva_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `seva_id`, `quantity`, `created_at`, `updated_at`) VALUES
(8, '1', '4', '1', '2022-10-27 11:28:02', '2022-10-27 11:28:02'),
(12, '1', '2', '1', '2022-10-31 08:42:44', '2022-10-31 08:42:44'),
(13, '1', '12', '1', '2022-10-31 08:42:49', '2022-10-31 08:42:49'),
(15, '4', '6', '2', '2022-10-31 09:49:05', '2022-10-31 09:49:05'),
(16, '4', '7', '3', '2022-10-31 09:49:12', '2022-10-31 09:49:12'),
(17, '6', '3', '1', '2022-11-02 01:57:27', '2022-11-02 01:57:27'),
(18, '6', '6', '1', '2022-11-02 01:57:39', '2022-11-02 01:57:39'),
(19, '7', '3', '2', '2022-11-02 10:26:09', '2022-11-02 10:26:09'),
(20, '7', '4', '2', '2022-11-02 10:26:17', '2022-11-02 10:26:17'),
(21, '7', '2', '2', '2022-11-02 10:26:32', '2022-11-02 10:26:32'),
(22, '8', '2', '2', '2022-11-03 22:00:01', '2022-11-03 22:00:01'),
(23, '8', '6', '1', '2022-11-03 22:00:07', '2022-11-03 22:00:07');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `feedback`, `created_at`, `updated_at`) VALUES
(2, 'Deviprasad', 'deviprasadbhat71@gmail.com', '8105237887', 'Peaceful place', '2022-10-26 00:28:45', '2022-10-26 00:28:45'),
(4, 'user', 'user@gmail.com', '123445767', 'Kukkundoor is a village in the southern state of Karnataka, India.[1][2] It is located in the Karkal taluk of Udupi district in Karnataka.', '2022-10-26 00:56:45', '2022-10-26 00:56:45'),
(5, 'Deviprasad', 'deviprasadbhat71@gmail.com', '8105237887', 'wonderful', '2022-10-26 04:23:34', '2022-10-26 04:23:34'),
(6, 'Sunil Kumar', 'sunilkumar@gmail.com', '1234567890', 'Very Peaceful temple', '2022-10-26 05:45:48', '2022-10-26 05:45:48'),
(7, 'Shobha', 'shobha@gmail.com', '1234567890', 'Devotional', '2022-10-26 06:05:16', '2022-10-26 06:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1666783622.jpg', '2022-10-26 04:18:30', '2022-10-26 05:57:02'),
(6, '1666783644.jpg', '2022-10-26 04:48:20', '2022-10-26 05:57:24'),
(7, '1666783661.jpg', '2022-10-26 05:57:41', '2022-10-26 05:57:41'),
(8, '1666783670.jpg', '2022-10-26 05:57:50', '2022-10-26 05:57:50'),
(9, '1666783682.jpg', '2022-10-26 05:58:02', '2022-10-26 05:58:02'),
(10, '1666783691.jpg', '2022-10-26 05:58:11', '2022-10-26 05:58:11'),
(11, '1666783700.jpg', '2022-10-26 05:58:21', '2022-10-26 05:58:21'),
(12, '1666783711.jpg', '2022-10-26 05:58:31', '2022-10-26 05:58:31'),
(13, '1666783725.jpg', '2022-10-26 05:58:45', '2022-10-26 05:58:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_25_032520_create_sessions_table', 1),
(7, '2022_10_25_145542_create_sevas_table', 2),
(8, '2022_10_26_020620_create_sevas_table', 3),
(9, '2022_10_26_045954_create_feedback_table', 4),
(10, '2022_10_26_080608_create_galleries_table', 5),
(11, '2022_10_27_144056_create_carts_table', 6),
(12, '2022_10_31_141506_create_orders_table', 7),
(13, '2022_11_02_131913_create_orders_table', 8),
(14, '2022_11_02_144330_create_notifications_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sevaname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `sevaname`, `price`, `quantity`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(52, 'Paramannam Naivedyam', '10.00', '2', 'Deviprasad', '8105237887', 'sk7098222@gmail.com', '2022-11-02 19:33:44', '2022-11-02 19:33:44'),
(53, 'Karpoora Arathi', '5.00', '3', 'Deviprasad', '8105237887', 'sk7098222@gmail.com', '2022-11-02 19:33:49', '2022-11-02 19:33:49'),
(54, 'Hoovina Pooja', '100.00', '2', 'Nitheesh', '1234567890', 'nitheeshprabhu2001@gmail.com', '2022-11-03 22:00:34', '2022-11-03 22:00:34'),
(55, 'Paramannam Naivedyam', '10.00', '1', 'Nitheesh', '1234567890', 'nitheeshprabhu2001@gmail.com', '2022-11-03 22:00:50', '2022-11-03 22:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$2e2qdTamnipTIcPo4GVVdec9TChCcV57/b9bPMskxn90fpKoVVtTC', '2022-10-31 10:01:14');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MgeyOYYYLbzW7yoZ96XUs4pIWRLP5ASE7pWUu4Me', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGZIUXlOSzVza01yMFZmTTNRMkp5d0FLNUVvVDdEaEQ3RnJEMGxYSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1667726448),
('MTP8AmBiucuDD38ySQFXtjyxxoYblQ6jlHRqk6hf', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMkNxemhhdlVXUkRWdUwxZGpXRTVldmwzUm5QOGNOalVKSjJaYndCaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93Y2FydC84Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODt9', 1667532655);

-- --------------------------------------------------------

--
-- Table structure for table `sevas`
--

CREATE TABLE `sevas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sevas`
--

INSERT INTO `sevas` (`id`, `title`, `descr`, `price`, `image`, `created_at`, `updated_at`) VALUES
(2, 'H', 'oovina Pooja', '100.00', '1666888411.jpg', '2022-10-25 20:56:27', '2022-10-27 11:03:31'),
(3, 'S', 'ona Arathi', '100.00', '1666751219.jpg', '2022-10-25 20:56:59', '2022-10-25 20:56:59'),
(4, 'L', 'alitha Sahasranama', '50.00', '1666751251.jpg', '2022-10-25 20:57:31', '2022-10-25 20:57:31'),
(5, 'S', 'aptashati Parayana', '50.00', '1666751288.jpg', '2022-10-25 20:58:08', '2022-10-25 20:58:08'),
(6, 'P', 'aramannam Naivedyam', '10.00', '1666751331.jpg', '2022-10-25 20:58:51', '2022-10-25 20:58:51'),
(7, 'K', 'arpoora Arathi', '5.00', '1666751375.jpg', '2022-10-25 20:59:35', '2022-10-25 20:59:35'),
(8, 'K', 'umkuma Archane', '5.00', '1666751404.jpg', '2022-10-25 21:00:04', '2022-10-25 21:00:04'),
(9, 'K', 'arthi Pooja', '10.00', '1666751435.jpg', '2022-10-25 21:00:35', '2022-10-25 21:00:35'),
(10, 'P', 'anchamritha Abhisheka', '25.00', '1666751464.jpg', '2022-10-25 21:01:04', '2022-10-25 21:01:04'),
(12, 'D', 'urga Namaskara', '25.00', '1666756017.jpg', '2022-10-25 22:16:57', '2022-10-25 22:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', NULL, '$2y$10$eSqsSwoZytUxfCU84Su.f.RqGMocs7bkHLjWZiJg7x/gowEfhslwm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 00:51:08', '2022-10-25 00:51:08'),
(2, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$XOp44grlAGIJQXns7nrLfuViQp2jfhmOAQRlttCMjqeUXFmtmjf7e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-25 01:55:12', '2022-10-25 01:55:12'),
(4, 'Deviprasad', 'deviprasadbhat71@gmail.com', '0', NULL, '$2y$10$HAacGJ8Whh.K8RoWUT64k./XQ/O.d9devNZiaR/4prOuCQNSGxOWG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-26 05:44:12', '2022-10-26 05:44:12'),
(5, 'Deviprasad', 'dp@gmail.com', '0', NULL, '$2y$10$hAoJgDADScTqegXjFMCB2.eDs0Gastr0JJkJuBaHd83G6ujN5dqR6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-27 05:46:57', '2022-10-27 05:46:57'),
(6, 'mashshetty', 'sasas@gmail.com', '0', NULL, '$2y$10$TTItwyDkn0ISUQ3ucUw/xeSB83yWRbRYhx4G4lvdu.y/iEmEl/YwK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 01:57:09', '2022-11-02 01:57:09'),
(7, 'noob master', 'nm19cs@gmail.com', '0', NULL, '$2y$10$YD/tkPYwEJIPWu/qZEpOquLro.kMzh2gnAzGc6f200QBZAUnzXF6q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 10:25:56', '2022-11-02 10:25:56'),
(8, 'Nitheesh', 'nitheeshprabhu2001@gmail.com', '0', NULL, '$2y$10$C2U.EOZVDUajtvikJSoSPeZOP9Fg6HyqMk5uRrekbh8Xhc3fiSyfe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 21:58:58', '2022-11-03 21:58:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sevas`
--
ALTER TABLE `sevas`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevas`
--
ALTER TABLE `sevas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
