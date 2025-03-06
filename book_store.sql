-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 10:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `id` bigint(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`id`, `title`) VALUES
(1, 'New Release'),
(2, 'Most Popular'),
(3, 'Upcoming Launches');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `is_deleted`) VALUES
(1, 2, 1, 6, '2023-08-26 04:12:59', '2023-08-26 04:57:41', 2, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_img` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `category_img`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `is_deleted`) VALUES
(1, 'shiv', 5, '2023-08-11 07:47:26', '2023-08-18 10:11:30', 1, 1, 1, 2),
(2, 'shiva', 6, '2023-08-11 08:11:57', '2023-08-18 10:11:36', 1, 1, 1, 1),
(3, 'shivam', 7, '2023-08-11 08:18:16', '2023-08-11 04:09:58', 1, 1, 1, 1);

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `language_code` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT 'Active=1,Inactive=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language_code`, `status`) VALUES
(1, 'Hindi', 'hi', 1),
(2, 'English', 'en', 1),
(3, 'others', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `url`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `is_deleted`) VALUES
(1, '42894b8.jpeg', '2023-08-11 07:47:26', NULL, NULL, NULL, 1, 1),
(2, '79535blog5.jpeg', '2023-08-11 08:05:02', NULL, NULL, NULL, 1, 1),
(3, '19216b8.jpeg', '2023-08-11 08:08:49', NULL, NULL, NULL, 1, 1),
(4, '88631blog4.jpeg', '2023-08-11 08:10:00', NULL, NULL, NULL, 1, 1),
(5, '8213blog2.jpg', '2023-08-11 08:10:53', NULL, NULL, NULL, 1, 1),
(6, '20794blog3.jpeg', '2023-08-11 08:11:57', NULL, NULL, NULL, 1, 1),
(7, '7100b8.jpeg', '2023-08-11 08:18:16', NULL, NULL, NULL, 1, 1),
(8, '57604b8.jpeg', '2023-08-14 05:29:41', NULL, NULL, NULL, 1, 1),
(9, '74902b8.jpeg', '2023-08-14 05:30:03', NULL, NULL, NULL, 1, 1),
(10, '10480b8.jpeg', '2023-08-14 05:46:14', NULL, NULL, NULL, 1, 1),
(11, '51638blog2.jpg', '2023-08-14 05:47:43', NULL, NULL, NULL, 1, 1),
(12, '52239b6.jpeg', '2023-08-14 05:48:20', NULL, NULL, NULL, 1, 1),
(13, '25194blog2.jpg', '2023-08-14 06:37:44', NULL, NULL, NULL, 1, 1),
(14, '91817b8.jpeg', '2023-08-14 06:38:02', NULL, NULL, NULL, 1, 1),
(15, '99306blog2.jpg', '2023-08-14 06:39:53', NULL, NULL, NULL, 1, 1),
(16, '19926blog2.jpg', '2023-08-14 07:47:05', NULL, NULL, NULL, 1, 1),
(17, '95528b8.jpeg', '2023-08-14 10:25:14', NULL, NULL, NULL, 1, 1),
(18, '50152b8.jpeg', '2023-08-14 10:45:12', NULL, NULL, NULL, 1, 1),
(19, '29069blog2.jpg', '2023-08-14 10:45:46', NULL, NULL, NULL, 1, 1),
(20, '11815blog2.jpg', '2023-08-14 10:49:55', NULL, NULL, NULL, 1, 1),
(21, '26835blog2.jpg', '2023-08-14 10:50:39', NULL, NULL, NULL, 1, 1),
(22, '93527b7.jpg', '2023-08-16 07:01:33', NULL, NULL, NULL, 1, 1),
(23, '13183blog2.jpg', '2023-08-18 12:29:09', NULL, NULL, NULL, 1, 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_23_095940_create_categories_table', 1),
(9, '2023_05_24_091226_create_media_table', 1),
(11, '2023_07_10_101452_create_carts_table', 1),
(12, '2023_07_15_050759_create_shipping_addresses_table', 1),
(13, '2023_08_10_081158_create_sessions_table', 1),
(14, '2023_05_24_080211_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `mrp` int(11) NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `language` int(11) NOT NULL COMMENT '1=hindi, 2=english, 3=other',
  `no_of_page` int(11) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `book_image` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=New\r\n2=popular\r\n3=Upcomming',
  `binding_type` int(11) DEFAULT NULL COMMENT '1=Paperback, 2=Hardcover',
  `stock_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `book_title`, `category`, `author_name`, `mrp`, `genre`, `language`, `no_of_page`, `isbn`, `book_image`, `description`, `type`, `binding_type`, `stock_quantity`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `is_deleted`) VALUES
(1, 'test book1', '2', 'testtt', 876, 'test', 1, 5641, NULL, 22, '<p>tefgd</p>', 1, 1, NULL, '2023-08-16 07:01:33', '2023-08-16 02:14:41', 1, 1, 1, 1),
(2, 'my book', '3', 'testtt', 876, 'tsxdt', 2, 562, '73094810524', 23, '<p>test</p>', 2, 1, 5, '2023-08-18 12:29:09', '2023-08-18 07:02:44', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1=admin, 2=user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `profile_image`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shivam', 'admin2023@gmail.com', '7309481059', NULL, 1, NULL, '$2y$10$e4Xcyw3uV7NZ49JciljR5e3rJA10WVmnn3zkfARoEH/9ujQ5Q.Ur2', NULL, '2023-08-11 00:11:49', '2023-08-17 06:50:03'),
(2, 'anoop', 'anoop@gmail.com', NULL, NULL, 2, NULL, '$2a$12$fEMXKgBDvCImwZiJFy9Wnu0IjEv.HZeI7IKxjw.duMhG.by8mtkQy', NULL, '2023-08-11 00:30:25', '2023-08-11 00:30:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
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
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
