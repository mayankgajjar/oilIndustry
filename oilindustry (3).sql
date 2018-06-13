-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 06:39 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oilindustry`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rss_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `facebook_link`, `twitter_link`, `rss_link`, `created_at`, `updated_at`) VALUES
(1, 'Donec purus neque, vulputate id est id, pretium semper enim. Morbi viverra congue nisi vel pulvinar posuere sapien eros, sed faucibus.', 'https://www.facebook.com/', 'https://twitter.com/', 'http://rss.com/', '2017-07-26 18:30:00', '2017-07-26 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfos`
--

CREATE TABLE `contactinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactinfos`
--

INSERT INTO `contactinfos` (`id`, `address`, `phone`, `fax`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, '1234k Avenue, New York City', '(+012) 345 6433', '+82-21-1220', 'info@example.com', 'http://Oilw3layouts.com', '2017-07-18 18:30:00', '2017-07-21 06:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designations_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designations_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designations_name`, `designations_status`, `created_at`, `updated_at`) VALUES
(1, 'Worker', '1', '2017-07-21 05:11:01', '2017-07-21 05:49:59'),
(2, 'Supervisor', '1', '2017-07-21 05:16:44', '2017-07-21 05:16:44'),
(3, 'Security', '1', '2017-07-27 04:45:45', '2017-07-27 04:45:45'),
(4, 'Client', '1', '2017-07-27 06:37:22', '2017-07-27 06:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `featuredservices`
--

CREATE TABLE `featuredservices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featuredservices`
--

INSERT INTO `featuredservices` (`id`, `title`, `description`, `image`, `icon`, `show_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LOBORTIS QUIS DOLOR', 'Aliquam lacus turpis, lobortis quis dolor sed, dignissim rhoncus neque.', '1501828544.jpg', 'fa fa-line-chart', '1', '1', '2017-08-04 00:02:55', '2017-08-04 01:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Oil Industry', 'Donec sapien massa, placerat ac sodales ac, feugiat quis est.', '1501150483.jpg', '1', '2017-07-27 04:44:43', '2017-07-27 04:44:43'),
(3, 'Oil Industry', 'Donec sapien massa, placerat ac sodales ac, feugiat quis est.', '1501150505.jpg', '1', '2017-07-27 04:45:05', '2017-07-27 04:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `introductions`
--

CREATE TABLE `introductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `introductions`
--

INSERT INTO `introductions` (`id`, `description`, `image`, `image_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.', '01501651255.jpg,11501651255.jpg,31501651255.jpg,41501651255.jpg,51501651255.jpg,11501650997.jpg', 'IMG01,IMG03,IMG05,IMG06,IMG07,IMG02', '1', '2017-07-31 18:30:00', '2017-08-01 23:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_20_044656_create_galleries_table', 1),
(4, '2017_07_21_090707_create_designations_table', 1),
(5, '2017_07_21_121723_create_teams_table', 1),
(6, '2017_07_24_054747_create_contactinfos_table', 1),
(7, '2017_07_25_093509_create_abouts_table', 1),
(8, '2017_07_25_112145_create_news_table', 1),
(9, '2017_07_26_101613_create_subscribers_table', 1),
(13, '2017_07_27_093454_add_users_table', 3),
(12, '2017_07_27_093454_create_testimonials_table', 2),
(15, '2017_07_27_093454_add_account_verification_to_users', 4),
(16, '2017_07_31_070321_create_slieders_table', 5),
(17, '2017_07_31_122131_create_introductions_table', 6),
(18, '2017_08_02_063746_create_services_table', 7),
(19, '2017_08_03_042917_create_milestones_table', 8),
(20, '2017_08_03_084707_create_offers_table', 9),
(21, '2017_08_04_040906_create_featuredservices_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `id` int(10) UNSIGNED NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `experience`, `awards`, `workers`, `companies`, `created_at`, `updated_at`) VALUES
(1, '88', '330', '22,496', '620', '2017-08-02 18:30:00', '2017-08-03 00:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `news_date`, `description`, `show_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Curabitur quis egestas.', '1501150762.jpg', '2017-07-27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.', '1', '1', '2017-07-27 04:49:22', '2017-07-27 04:49:22'),
(2, 'Aenean porttitor accumsan', '1501502292.jpg', '2017-07-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.', '1', '1', '2017-07-31 06:28:12', '2017-07-31 06:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `icon`, `show_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LOREM EGESTAS COMM', 'Nunc posuere sapien eros, sed faucibus metus feugiat non.', 'fa fa-tasks', '1', '1', '2017-08-03 05:39:54', '2017-08-03 05:39:54'),
(2, 'PROIN EROS METUS', 'Nunc posuere sapien eros, sed faucibus metus feugiat non.', 'fa fa-gavel', '1', '1', '2017-08-03 05:47:32', '2017-08-03 05:47:32'),
(3, 'FAUCIBUS METUS FEUGI', 'Nunc posuere sapien eros, sed faucibus metus feugiat non.', 'fa fa-cogs', '1', '1', '2017-08-03 05:48:31', '2017-08-03 05:48:31'),
(4, 'DUIS LACINIA SAPIEN', 'Nunc posuere sapien eros, sed faucibus metus feugiat non.', 'fa fa-flask', '1', '1', '2017-08-03 05:49:13', '2017-08-03 06:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `service_status`, `status`, `show_status`, `created_at`, `updated_at`) VALUES
(1, 'LOREM IPSUM DOLOR', '1501670416.jpg', 'Our working Process', '1', '0', '2017-08-02 04:23:04', '2017-08-02 05:59:37'),
(2, 'LOREM IPSUM DOLOR', '1501673309.jpg', 'Our working Process', '1', '1', '2017-08-02 05:58:29', '2017-08-02 05:58:29'),
(3, 'LOREM IPSUM DOLOR', '1501673324.jpg', 'Our working Process', '1', '1', '2017-08-02 05:58:44', '2017-08-02 05:58:44'),
(4, 'LOREM IPSUM DOLOR', '1501673357.jpg', 'Our working Process', '1', '1', '2017-08-02 05:59:17', '2017-08-02 05:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `slieders`
--

CREATE TABLE `slieders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slieders`
--

INSERT INTO `slieders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'First Slieder', '1501497751.jpg', '1', '2017-07-31 05:12:31', '2017-07-31 05:12:31'),
(2, 'Second Slider', '1501490572.jpg', '1', '2017-07-31 03:12:52', '2017-07-31 03:12:52'),
(3, 'Third Slieder', '1501490646.jpg', '1', '2017-07-31 03:14:06', '2017-07-31 03:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mga@narola.email', '2017-07-27 04:49:46', '2017-07-27 04:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_rss_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_show_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `emp_name`, `emp_designation`, `emp_facebook_link`, `emp_twitter_link`, `emp_rss_link`, `emp_photo`, `emp_status`, `emp_show_status`, `created_at`, `updated_at`) VALUES
(1, 'PETER PARKER', '3', 'https://www.facebook.com/', 'https://twitter.com/', 'http://www.whatisrss.com/', '1501150609.jpg', '1', '1', '2017-07-27 04:46:49', '2017-07-27 04:46:49'),
(2, 'STEVEN WILSON', '1', 'https://www.facebook.com/', 'https://twitter.com/', 'http://www.whatisrss.com/', '1501150631.jpg', '1', '1', '2017-07-27 04:47:11', '2017-07-27 04:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designations` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designations`, `image`, `description`, `status`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Mayank Gajjar', 4, '1501158746.png', 'The website is Looking Good....', '1', 'mga@narola.email', '2017-07-27 07:02:26', '2017-07-28 04:23:10'),
(2, 'Rosy Crisp', 2, '1501215563.png', 'Awesome Service', '1', 'demo.narolainfotech@gmail.com', '2017-07-27 22:49:23', '2017-07-28 04:23:04'),
(3, 'Divyang Gajjar', 4, '1501235548.png', 'Good Service....', '1', 'dig@narola.email', '2017-07-28 04:22:28', '2017-07-28 04:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `roll`, `remember_token`, `created_at`, `updated_at`, `verified`, `email_token`) VALUES
(1, 'Mayank Gajjar', 'mga@narola.email', '$2y$10$bIY47Pra13kH.JzB05JOe.Ajo69jUPbiDdvf7FqBkk5LGF3fGU8Wa', 1, 'BfqjJ0ZtM654R6BzTvM00FDuesymmJi4MhkrIUFHFWzzQF7FQcfKPaJRwt1t', '2017-07-30 22:29:00', '2017-07-30 22:29:56', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfos`
--
ALTER TABLE `contactinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featuredservices`
--
ALTER TABLE `featuredservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introductions`
--
ALTER TABLE `introductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slieders`
--
ALTER TABLE `slieders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactinfos`
--
ALTER TABLE `contactinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `featuredservices`
--
ALTER TABLE `featuredservices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `introductions`
--
ALTER TABLE `introductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slieders`
--
ALTER TABLE `slieders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
