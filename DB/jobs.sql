-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 08:15 AM
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `banner_section` text NOT NULL,
  `section_two` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`section_two`)),
  `section_three` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `last_section` longtext DEFAULT NULL,
  `page_title` varchar(250) DEFAULT NULL,
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_desc` varchar(250) DEFAULT NULL,
  `meta_keyword` varchar(250) DEFAULT NULL,
  `url_schema` varchar(250) DEFAULT NULL,
  `canonical_tag` varchar(250) DEFAULT NULL,
  `canonical_rel` varchar(250) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `banner_section`, `section_two`, `section_three`, `last_section`, `page_title`, `meta_title`, `meta_desc`, `meta_keyword`, `url_schema`, `canonical_tag`, `canonical_rel`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"heading\":\"Shift your mindset from ROI to Return On Potential.\",\"image\":\"public\\/uploads\\/jobs\\/17036597202.png\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"}}', '{\"heading\":\"Career Development\",\"sub_heading\":\"Tap into your real potential\",\"description\":\"<p>With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation.<\\/p>\"}', '{\"sec3_title\":\"Launch a new chapter in your career\",\"sec3_desc\":\"Using a flexible and blended approach, we work with you at all levels and tenure to help you bridge the gap between where they are now and where they want to be.\",\"sec3_image_alt\":\"Testing\",\"sec3_image\":\"public\\/uploads\\/assesment\\/17036547171.find-job-secImg.jpg\",\"button\":{\"sec3_link_text\":\"Take a test\",\"sec3_link\":\"https:\\/\\/ardemos.co\\/my-career-cafe\\/\"}}', '{\"sec_last_title\":\"Unlock your strengths and search with confidence.\",\"images\":[{\"image\":\"public\\/uploads\\/jobs\\/17036585330.trust-logo-1.png\",\"order_by\":\"1\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585331.trust-logo-2.png\",\"order_by\":\"2\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585332.trust-logo-3.png\",\"order_by\":\"3\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585333.trust-logo-4.png\",\"order_by\":\"4\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585334.trust-logo-5.png\",\"order_by\":\"5\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585335.trust-logo-6.png\",\"order_by\":\"6\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585336.trust-logo-8.png\",\"order_by\":\"7\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585337.trust-logo-9.png\",\"order_by\":\"8\"},{\"image\":\"public\\/uploads\\/jobs\\/17036585338.trust-logo-10.png\",\"order_by\":\"9\"}]}', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 0, '2023-12-23 10:28:05', '2023-12-27 12:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
