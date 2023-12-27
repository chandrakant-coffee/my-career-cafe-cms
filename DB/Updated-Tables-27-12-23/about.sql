-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 01:56 PM
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
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `banner_section`, `career_development_section`, `charge_process_section`, `career_development_program_section`, `benefits_section`, `insights_and_tips_section`, `page_title`, `meta_title`, `meta_desc`, `meta_keyword`, `url_schema`, `canonical_tag`, `canonical_rel`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"heading\":\"Shift your mindset from ROI to Return On Potential.\",\"image\":\"public\\/uploads\\/17033311052.png\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"}}', '{\"heading\":\"Career Development\",\"sub_heading\":\"Tap into your real potential\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation.\",\"pointers\":[{\"heading\":\"1 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 5\",\"image\":\"public\\/uploads\\/fb-icon.png\",\"image_alt\":\"Demo Image 0\"},{\"heading\":\"2 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 4\",\"image\":\"public\\/uploads\\/fb-icon.png\",\"image_alt\":\"Demo Image 1\"},{\"heading\":\"3 Flexible And Blended Approach\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 3\",\"image\":\"public\\/uploads\\/17033338252.png\",\"image_alt\":\"Demo Image 2\"}]}', '{\"heading\":\"The Take Charge Process\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[{\"heading\":\"Flexible And Blended Approach 1\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 6\"},{\"heading\":\"Flexible And Blended Approach 2\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 5\"},{\"heading\":\"Flexible And Blended Approach 3\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation. 4\"}]}', '{\"heading\":\"Career Development <br\\/> Program Overview\",\"description\":\"With the right career development solution, you create a sense of empowerment and a sense of possibilities; and thus, a greater level of commitment and motivation.\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"},{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"},{\"heading\":\"Phase 1<br\\/> Plan Development\",\"description\":\"Research & Discovery Identification of Priority Goals Plan Development\",\"goal\":\"Research & Discovery Identification of Priority Goals Plan Development & Buy-in\",\"time\":\"1 Month\"}]}', '{\"heading\":\"Measure What Matters\",\"image\":{\"path\":\"public\\/uploads\\/fb-icon.png\",\"alt\":\"demo image\"},\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[\"Empowerment 23\",\"Motivation\",\"Greater loyalty\",\"Greater commitment\",\"Accelerated skills development\"]}', '{\"heading\":\"We re here to help with heap of insights and tips\",\"button\":{\"text\":\"More tips and tricks this way\",\"link\":\"#\"},\"pointers\":[\"1\",\"2\",\"3\"]}', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 0, '2023-12-23 10:28:05', '2023-12-27 14:37:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
