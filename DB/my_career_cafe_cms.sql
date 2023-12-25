-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_career_cafe_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `banner_section` text NOT NULL,
  `career_development_section` text NOT NULL,
  `charge_process_section` text NOT NULL,
  `career_development_program_section` text NOT NULL,
  `benefits_section` text NOT NULL,
  `insights_and_tips_section` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `banner_section`, `career_development_section`, `charge_process_section`, `career_development_program_section`, `benefits_section`, `insights_and_tips_section`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"heading\":\"Shift your mindset from ROI to Return On Potential.\",\"image\":\"public\\/uploads\\/17033311052.png\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"}}', '{\"heading\":\"Career Development\",\"sub_heading\":\"Tap into your real potential\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation.\",\"pointers\":[{\"heading\":\"1 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 5\",\"image\":\"public\\/uploads\\/fb-icon.png\",\"image_alt\":\"Demo Image 0\"},{\"heading\":\"2 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 4\",\"image\":\"public\\/uploads\\/fb-icon.png\",\"image_alt\":\"Demo Image 1\"},{\"heading\":\"3 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 3\",\"image\":\"public\\/uploads\\/17033338252.png\",\"image_alt\":\"Demo Image 2\"}]}', '{\"heading\":\"The Take Charge Process\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[{\"heading\":\"Flexible And Blended Approach 1\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 6\"},{\"heading\":\"Flexible And Blended Approach 2\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 5\"},{\"heading\":\"Flexible And Blended Approach 3\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 4\"}]}', '{\"heading\":\"Career Development <br\\/> Program Overview\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation.\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"},{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"},{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"}]}', '{\"heading\":\"Measure What Matters\",\"image\":{\"path\":\"public\\/uploads\\/fb-icon.png\",\"alt\":\"demo image\"},\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[\"Empowerment 23\",\"Motivation\",\"Greater loyalty\",\"Greater commitment\",\"Accelerated skills development\"]}', '{\"heading\":\"We re here to help with heap of insights and tips\",\"button\":{\"text\":\"More tips and tricks this way\",\"link\":\"#\"},\"pointers\":[\"2\"]}', 0, '2023-12-23 10:28:05', '2023-12-25 12:36:12');

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
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `description` text NOT NULL,
  `menus` text NOT NULL,
  `social_menus` text NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `copyright` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `logo`, `description`, `menus`, `social_menus`, `phone_no`, `email`, `copyright`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"image\":\"public\\/uploads\\/17033243302.png\",\"alt\":\"My Career Cafe\",\"link\":\"#\"}', '<strong>MyCareerCafe </strong>is on a mission to help people build great careers. We believe quality education should be accessible to everyone without any financial or geographical barriers. Our courses offer technical skills that are pivotal to becoming an excellent software developer along with placement support.', '[{\"title\":\"Courses\",\"link\":\"#1\",\"order\":\"1\"},{\"title\":\"Assessment\",\"link\":\"#\",\"order\":\"2\"},{\"title\":\"Certification\",\"link\":\"#\",\"order\":\"3\"},{\"title\":\"Jobs\",\"link\":\"#\",\"order\":\"4\"}]', '[{\"image\":\"public\\/uploads\\/fb-icon.png\",\"link\":\"#\"},{\"image\":\"public\\/uploads\\/17033263301.png\",\"link\":\"#\"},{\"image\":\"public\\/uploads\\/17033263952.png\",\"link\":\"#3\"},{\"image\":\"public\\/uploads\\/17033263953.png\",\"link\":\"#4\"}]', '+91 98200 98200', 'contact@mycareercafe.com', 'Copyright © 2022 - MyCareerCafe.com All rights reserved.', 0, '2023-12-23 10:28:05', '2023-12-23 15:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `menus` text NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `logo`, `menus`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"image\":\"public\\/uploads\\/17033243302.png\",\"alt\":\"My Career Cafe\",\"link\":\"#\"}', '[{\"title\":\"Courses\",\"link\":\"#\",\"order\":\"1\"},{\"title\":\"Assessment\",\"link\":\"#\",\"order\":\"2\"},{\"title\":\"Certification\",\"link\":\"#\",\"order\":\"3\"},{\"title\":\"Jobs\",\"link\":\"#\",\"order\":\"4\"}]', 0, '2023-12-23 10:28:05', '2023-12-23 16:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `insights_and_tips`
--

CREATE TABLE `insights_and_tips` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `summary` text NOT NULL,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insights_and_tips`
--

INSERT INTO `insights_and_tips` (`id`, `image`, `category`, `summary`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"path\":\"public\\/uploads\\/1703486117_benifits.png\",\"alt\":\"MCC Image 2\"}', 'Tips 1', '10 best career pages to inspire and supercharge your hiring in 2023 3', 0, '2023-12-25 06:35:17', '2023-12-25 06:37:15'),
(2, '{\"path\":\"public\\/uploads\\/1703487543_benifits.png\",\"alt\":\"image 2\"}', 'Advice', 'How to shortlist candidates for interviews using 10 simple solutions', 0, '2023-12-25 06:59:03', '2023-12-25 06:59:03'),
(3, '{\"path\":\"public\\/uploads\\/1703487574_benifits.png\",\"alt\":\"predictions for 2023\"}', 'Tricks', 'HR trends and predictions for 2023: 10 experts weigh in', 0, '2023-12-25 06:59:34', '2023-12-25 06:59:34');

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
(5, '2023_02_11_094639_create_permission_tables', 2),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(9, '2016_06_01_000004_create_oauth_clients_table', 3),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `controller` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `controller`, `created_at`, `updated_at`) VALUES
(1, 'role-permission.index', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:11:15'),
(2, 'role-permission.create', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:13:10'),
(3, 'role-permission.store', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:11:15'),
(4, 'role-permission.edit', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:11:15'),
(5, 'role-permission.update', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:11:15'),
(6, 'role-permission.destroy', 'web', 'RolePermissionController', '2023-02-13 03:11:15', '2023-02-13 03:11:15'),
(7, 'users.index', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(8, 'users.create', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(9, 'users.store', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(10, 'users.edit', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(11, 'users.update', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(12, 'users.destroy', 'web', 'UsersController', '2023-02-13 03:12:36', '2023-02-13 03:12:36'),
(13, 'VerifyUser', 'web', 'UsersController', '2023-02-13 20:22:09', '2023-02-13 20:22:09'),
(14, 'ChangeStatus', 'web', 'UsersController', '2023-02-13 20:22:28', '2023-02-13 20:22:28'),
(15, 'permission-listing.index', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(16, 'permission-listing.create', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(17, 'permission-listing.store', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(18, 'permission-listing.edit', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(19, 'permission-listing.update', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(20, 'permission-listing.destroy', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(21, 'permission-listing.show', 'web', 'PermissionListingController', '2023-03-14 00:05:51', '2023-03-14 00:05:51'),
(22, 'footer.index', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(23, 'footer.create', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(24, 'footer.store', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(25, 'footer.edit', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(26, 'footer.update', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(27, 'footer.destroy', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(28, 'footer.show', 'web', 'FooterController', '2023-12-23 07:16:25', '2023-12-23 07:16:25'),
(29, 'header.index', 'web', 'HeaderController', '2023-12-23 10:30:39', '2023-12-23 10:30:39'),
(30, 'header.create', 'web', 'HeaderController', '2023-12-23 10:30:39', '2023-12-23 10:30:39'),
(31, 'header.store', 'web', 'HeaderController', '2023-12-23 10:30:39', '2023-12-23 10:30:39'),
(32, 'header.edit', 'web', 'HeaderController', '2023-12-23 10:30:39', '2023-12-23 10:30:39'),
(33, 'header.update', 'web', 'HeaderController', '2023-12-23 10:30:40', '2023-12-23 10:30:40'),
(34, 'header.destroy', 'web', 'HeaderController', '2023-12-23 10:30:40', '2023-12-23 10:30:40'),
(35, 'header.show', 'web', 'HeaderController', '2023-12-23 10:30:40', '2023-12-23 10:30:40'),
(36, 'about.index', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(37, 'about.create', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(38, 'about.store', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(39, 'about.edit', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(40, 'about.update', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(41, 'about.destroy', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(42, 'about.show', 'web', 'AboutController', '2023-12-23 11:09:48', '2023-12-23 11:09:48'),
(43, 'tips.index', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(44, 'tips.create', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(45, 'tips.store', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(46, 'tips.edit', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(47, 'tips.update', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(48, 'tips.destroy', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00'),
(49, 'tips.show', 'web', 'TipsController', '2023-12-25 06:01:00', '2023-12-25 06:01:00');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `active` varchar(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '1', '2023-02-13 08:40:53', '2023-02-13 08:40:53'),
(2, 'User', 'web', '1', '2023-03-13 12:52:33', '2023-03-13 12:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Sachin', 'Patil', 'sachin@aquilmedia.in', '2023-02-14 01:53:36', '$2y$10$Qx4BM5SivnrShJ1aY4lklO7emXa8T.P9e8URppP5t2WXCufmxH.hO', NULL, 1, 0, '2023-02-11 01:41:14', '2023-12-23 06:44:54'),
(2, 'Aquil', 'Tech', 'email.services@aquilmedia.in', '2023-03-13 13:12:10', '$2y$10$Qx4BM5SivnrShJ1aY4lklO7emXa8T.P9e8URppP5t2WXCufmxH.hO', NULL, 1, 0, '2023-02-11 01:41:14', '2023-03-13 13:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insights_and_tips`
--
ALTER TABLE `insights_and_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insights_and_tips`
--
ALTER TABLE `insights_and_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
