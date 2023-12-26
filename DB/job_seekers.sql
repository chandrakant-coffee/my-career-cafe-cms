-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 02:20 PM
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
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` int(11) NOT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `image_alt` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(150) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `Image`, `image_alt`, `name`, `designation`, `short_desc`, `description`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Image', 'Image', 'Image', 'Image', 'Image', 1, '2023-12-26 11:34:37', '2023-12-26 11:35:44'),
(2, 'public/uploads/assesment/17035905141.career-img-4.png', 'sg', 'dhsd', 'shsdf', 'ehth', NULL, 1, '2023-12-26 11:35:14', '2023-12-26 11:45:48'),
(3, 'public/uploads/assesment/17035961171.profile_img.jpg', 'Testing 1', 'Testing 2', 'Testing 3', 'Testing 4', 'Testing 5', 0, '2023-12-26 11:35:57', '2023-12-26 13:16:59'),
(4, 'public/uploads/assesment/17035961061.profile_img.jpg', 'sfsad', 'Testing 1', 'Testing', 'Testing', 'Testing', 0, '2023-12-26 11:53:53', '2023-12-26 13:08:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_seekers`
--
ALTER TABLE `job_seekers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
