-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 08:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `slug`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'test', 0, 'test', 1, NULL, NULL),
(2, 'test 2', 0, 'test2', 2, NULL, NULL);

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
  `parents_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parents_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `parents_first_name`, `parents_last_name`, `students_first_name`, `students_last_name`, `students_grade`, `contact`, `email`, `suggestion`, `created_at`, `updated_at`) VALUES
(2, 'Test 2', 'test 2', 'test 2', 'test 2', 'B', '01683541038', 'test2@test.com', 'Test2 Comments....', '2022-07-30 03:40:07', '2022-07-30 03:40:07'),
(3, 'Test 3', 'test 3', 'test 3', 'test 3', 'C', '01683541039', 'test3@test.com', 'Test3 Comments....', '2022-07-30 03:41:12', '2022-07-30 03:41:12'),
(4, 'Test 4', 'test 4', 'test 4', 'test 4', 'D', '01683541031', 'test4@test.com', 'Test4 Comments....', '2022-07-30 03:41:43', '2022-07-30 03:41:43'),
(5, 'Test 5', 'test 5', 'test 5', 'test 5', 'E', '01683541032', 'test5@test.com', 'Test5 Comments....', '2022-07-30 03:42:13', '2022-07-30 03:42:13'),
(6, 'Test 6', 'test 6', 'test 6', 'test 6', 'F', '01683541033', 'test6@test.com', 'Test6 Comments....', '2022-07-30 03:42:42', '2022-07-30 03:42:42'),
(7, 'Test 7', 'test 7', 'test 7', 'test 7', 'G', '01683541034', 'test7@test.com', 'Test7 Comments....', '2022-07-30 03:43:10', '2022-07-30 03:43:10'),
(8, 'Rafiqul', 'Islam', 'Saim', 'Islam', 'H', '01683541035', 'saim8@gmail.com', 'What the hell is go\'in on ?', '2022-07-30 03:43:45', '2022-07-30 03:47:42'),
(9, 'jdsbcjdsbcjdsbc', 'tsdfvfdvfdvdfvfdv', 'test 8', 'test 8', 'H', '01683541035', 'test8@test.com', 'Test8 Comments....', '2022-07-30 08:02:53', '2022-07-31 00:31:51');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_07_24_044703_create_categories_table', 2),
(7, '2021_10_24_045716_create_products_table', 3),
(8, '2022_07_28_123622_create_posts_table', 4),
(10, '2022_07_30_082640_create_feedback_table', 5),
(11, '2022_08_01_122922_update_content_column_typee', 6);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `image`, `author`, `status`, `created_at`, `updated_at`) VALUES
(8, 'testsdkhfvs', 'gnfgn', 'fghnghm', 'DPUyLbyFUBy5Ooe.png', 'ghmghm', 'available', '2022-07-30 08:24:20', '2022-08-01 04:49:28'),
(10, 'Test Title', 'Test Content', 'Test Excerpt', 'wIqwxOfdz0qAJGO.png', 'Test Author', 'available', '2022-07-30 23:22:33', '2022-08-01 00:14:12'),
(15, 'Cool title', 'Cool Content', 'Cool Excerpt', 'SxGBzA5HKn2MRkd.png', 'Cool Author', 'available', '2022-07-31 03:10:53', '2022-08-01 00:12:55'),
(19, 'test image for duplicate', 'Test Image for Duplicate', 'Test Image for Duplicate', '8agO5oeDiJ4mINe.png', 'Test Image for Duplicate', 'available', '2022-07-31 23:58:42', '2022-08-01 04:09:08'),
(20, 'final test updated', 'final test content updated', 'final test content updated', 'm7V3Hwc6xRNhhiz.png', 'final test content updated', 'available', '2022-08-01 03:45:45', '2022-08-01 04:50:58'),
(23, '1uujfjuvjv', 'ijgjgijgg', 'jugjgjug', 'ky3eOENaqUdp9Kp.png', 'jhvhgvcghyvhkgmv', 'available', '2022-08-01 05:48:02', '2022-08-01 05:48:33'),
(24, 'Live Facebook Session on Centrelink and Govt. Financial Support package during coronavirus situation', 'Victorian Bangladeshi Community Foundation (VBCF) is going to organise a Facebook Live Discussion session with two well-known Public Accountant Mr. Mo Sadique Ifti and Mr. Muktar Hossain for Bangladeshi communities. The live session will focus on Centrelink support, stimulus package and initiatives by Australian Govt., superannuation and other financial related matters. If you have any question to ask or any information to know please forward your queries to info@vbcf.com.au on or before the session. You can also send message directly from our Facebook page (https://www.facebook.com/VBCF-Corona-Virus-COVID-19-Update-and-Communication-110593150579557/) during live session.', 'N/A', 'G9yNi0CPniMCjKj.png', 'Mr. Mo Sadique Ifti and Mr. Muktar Hossain', 'available', '2022-08-01 06:39:33', '2022-08-01 21:48:06'),
(25, 'Live Facebook Session on Finance and banking support during coronavirus situation', 'Victorian Bangladeshi Community Foundation (VBCF) is going to organise a Facebook Live Discussion session with a well-known Finance Broker, Mr. Abdullah Rubel, for Bangladeshi communities. The live session will focus on Banking support to mortgage owner, Business owner, Landlord and Tenant. If you have any question to ask or any information to know please forward your queries to info@vbcf.com.au on or before the session. You can also send message directly from our Facebook page ( https://www.facebook.com/VBCF-Corona-Virus-COVID-19-Update-and-Communication-110593150579557/ )', 'N/A', 'Yjxae2BxpYwTnvo.png', 'Mr. Abdullah Rubel', 'available', '2022-08-01 21:44:43', '2022-08-01 21:47:35'),
(26, 'Live Facebook Session on Current coronavirus situation', 'Victorian Bangladeshi Community Foundation (VBCF) is going to organise a Facebook Live Discussion session with a well-known medical practitioner, Dr Tahjibul Anam, for Bangladeshi communities. The live session will focus on updates related to current Coronavirus situation, common symptoms of Covid-19and current guidelines by government, safety measures, things to do on suspicion of infection and general discussion. If you have any question to ask or any information to know please forward you queries to info@vbcf.com.au on or before the session. You can also send message directly from our Facebook page ( https://www.facebook.com/VBCF-Corona-Virus-COVID-19-Update-and-Communication-110593150579557/ )', 'N/A', 'nNBI52THkNGFodn.png', 'Dr Tahjibul Anam', 'available', '2022-08-01 21:49:53', '2022-08-01 21:49:53'),
(27, 'WRBS KID EID Anandamela', 'WRBS organize KIDS EID Anandamela 2020 for bangla school kids', 'N/A', 'MZiUNMDx9dNt0DN.png', 'N/A', 'available', '2022-08-01 21:51:18', '2022-08-01 21:51:18'),
(28, 'IMLD 2020', 'Coming soon', 'N/A', 'KCnO2E6LVbEjiJq.png', 'N/A', 'available', '2022-08-01 21:53:01', '2022-08-01 21:58:32'),
(29, 'Australia Day Parade 2020', 'On behalf of the Victorian Bangladeshi Community Foundation (VBCF) and Western Region Bangla School (WRBS), it’s our immense pleasure to invite all Bangladeshi community members living in Melbourne and its surrounding suburbs to participate in Australia Day Parade 2020 on Sunday, 26 January and grab the opportunity to represent Bangladesh. You are welcome to wear costumes (Panjabi, Sharee etc.) & accessories and bring along with your items such as musical instruments (Ektara, Dhol, Flute etc.) that truly represent Bangladeshi tradition and culture.\n\n \n \n\nWhen & Where to Meet:\n \n\n10:00 AM, Sunday, 26 January 2020(Please come and meet on time)\n\nCorner of Bourke Street & Swanston Street,\n\nMelbourne (Melbourne Town Hall)\n \n\nVictorian Bangladeshi Community Foundation (VBCF) and Western Region Bangla School proudly represent Bangladesh by regularly participating in Australia day parade for the last few years, which was highly appreciated by the Victorian Multicultural Commission and other community groups. This is an opportunity for our children to understand and appreciate the significance of multiculturalism in the Australian society which is the major highlight of the day!\n\nWe highly appreciate the participation of all the parents as well as the Bangladeshi community members living in Victoria.\n \n\nWe sincerely look forward to seeing you all there.', 'N/A', 'dDGywDPCaFgwZOw.png', 'WRBS', 'available', '2022-08-01 21:57:02', '2022-08-02 00:28:20'),
(30, 'test', 'test', 'wefrsgf', 'quBAhxFbFApXqd7.png', 'sdvfsfdv', 'available', '2022-08-02 00:28:55', '2022-08-02 00:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, 'test', NULL, NULL),
(2, 'test 2 updated', 2, 'test 2 updated', NULL, '2022-07-30 01:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
-- Indexes for dumped tables
--

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
