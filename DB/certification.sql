-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 01:59 PM
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
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `banner_section` text NOT NULL,
  `content_section` text NOT NULL,
  `immersive_learning_section` text NOT NULL,
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
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `banner_section`, `content_section`, `immersive_learning_section`, `page_title`, `meta_title`, `meta_desc`, `meta_keyword`, `url_schema`, `canonical_tag`, `canonical_rel`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"heading\":\"Shift your mindset from ROI to Return On Potential.\",\"image\":\"public\\/uploads\\/17033311052.png\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"}}', '{\"heading\":\"Get Professional Certificates 1\",\"sub_heading\":\"Break into a new field like information technology or data science. 9\\/10 of our learners achieve their learning objectives after successful course completion. 2\",\"content\":\"Accelerate your growth with expert level learning from global experts and get certified by the worlds leading institute. 3\",\"bottom_heading\":\"Transform your life through upskilling 4\",\"bottom_content\":\"Learners around the world are launching new careers, advancing in their fields, and enriching their lives. Achieve your career goals with industry-recognized learning paths. 5\",\"image\":{\"path\":\"public\\/uploads\\/17035011762.jpg\",\"alt\":\"Transform your\"},\"button\":{\"text\":\"Take a Course 6\",\"link\":\"#7\"}}', '{\"heading\":\"An immersive learning experience\",\"image\":{\"path\":\"public\\/uploads\\/17035020552.png\",\"alt\":\"An immersive learning\"},\"bottom_heading\":\"Trending Post Graduate Programs\",\"bottom_content\":\"Project Management Certification Course | Cyber Security Certification Course | Data Science Certification | Data Analytics Certification | Business Analysis Certification Course | Digital Marketing Certification Program | Lean Six Sigma Certification Course | Cloud Computing Certification Course | Data Engineer Certification Program | AI and Machine Learning Course | Full Stack Web Development Course | Digital Marketing Bootcamp\"}', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 0, '2023-12-23 10:28:05', '2023-12-27 13:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
