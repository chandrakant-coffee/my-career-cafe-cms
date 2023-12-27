-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 02:19 PM
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
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `id` int(11) NOT NULL,
  `banner_section` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`banner_section`)),
  `skill_assesment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skill_assesment`)),
  `section_three` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`section_three`)),
  `section_four` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`section_four`)),
  `benefits_section` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`benefits_section`)),
  `insights_and_tips_section` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`insights_and_tips_section`)),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`id`, `banner_section`, `skill_assesment`, `section_three`, `section_four`, `benefits_section`, `insights_and_tips_section`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '{\"heading\":\"Real success from real job seekers.\",\"image\":\"public\\/uploads\\/assesment\\/17035959391.skill-asessment-headBg.png\",\"button\":{\"text\":\"Take a test\",\"link\":\"#\"}}', '{\"skill_assesment_title\":\"Skill Asessment\",\"skill_assesment_sub_title\":\"Our pre-employment assessment that measures the traits and abilities predictive of success on the job.\",\"skill_assesment_desc\":\"<p _ngcontent-cnf-c7=\\\"\\\" data-aos=\\\"fade-up\\\">At MyCareerCafe, we believes that solving complex hiring challenges requires tailored solutions rather than generic, off-the-shelf products. Our online skills assessment and analytics platform to hire, train and measure talent. Our platform enables companies to scientifically evaluate talent for job-relevant skills and predicts their success on the job. Ability to provide customized test for each role and level within an organization.&nbsp;<\\/p>\",\"skill_assesment_img\":\"public\\/uploads\\/assesment\\/17035959391.strength_secImg.jpg\",\"skill_assesment_img_alt\":\"test alt\",\"skill_assesment_short_desc\":\"<p>We have helped over 1000+ candidates to conduct assessments in the last 12 months across hiring, training and performance measurement areas.<\\/p>\",\"skill_assesment_tools\":[{\"tools_title\":\"Assessment Tools\",\"tools_desc\":\"<ul _ngcontent-dly-c7=\\\"\\\">\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Tests<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Psychometric Tests<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Competency Based Tests<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Soft Skills Test<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Aptitude &amp; Reasoning Test<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Situational Judgement Test<\\/li>\\r\\n<\\/ul>\",\"tools_link\":\"https:\\/\\/ardemos.co\\/my-career-cafe\\/assessment\",\"tools_order_by\":\"1\"},{\"tools_title\":\"test 2\",\"tools_desc\":\"<ul _ngcontent-dly-c7=\\\"\\\">\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Automated Video Interview<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Automated Video Interview<\\/li>\\r\\n\\t<li _ngcontent-cnf-c7=\\\"\\\">Business Simulations<\\/li>\\r\\n<\\/ul>\",\"tools_link\":\"https:\\/\\/ardemos.co\\/my-career-cafe\\/assessment\",\"tools_order_by\":\"2\"}]}', '{\"sec3_title\":\"Unlock your strengths and search with confidence.\",\"sec3_desc\":\"Throughout your job search, you\\u2019ll learn how to open doors that others don\\u2019t see. We\\u2019ll help you see your strengths, your transferable skills and how you seize every opportunity in a commanding manner so you\\u2019ll navigate the job market with confidence.\",\"sec3_image_alt\":\"Testing 2\",\"sec3_image\":\"public\\/uploads\\/assesment\\/17035959391.skill-asessment-headBg.png\",\"button\":{\"sec3_link_text\":\"Take a test\",\"sec3_link\":\"https:\\/\\/ardemos.co\\/my-career-cafe\\/assessment\"}}', '{\"sec4_title\":\"Real success from real job seekers.\",\"sec4_desc\":\"<p _ngcontent-tcv-c7=\\\"\\\" data-aos=\\\"fade-up\\\">Every job search and every career are different. It is the unique story of each individual and our impact on their careers that is our best measure of success.<\\/p>\\r\\n\\r\\n<p><button aria-label=\\\"Next\\\" type=\\\"button\\\"><\\/button><\\/p>\",\"sec4_image\":\"public\\/uploads\\/assesment\\/17035967521.seekers-bg-img.230e2dfcc386dde0.jpg\",\"button\":{\"sec4_text\":\"Take a test\",\"sec4_link\":\"#\"}}', '{\"heading\":\"Measure What Matters\",\"image\":{\"path\":\"public\\/uploads\\/assesment\\/1703595939_benifits.benefits-img.png\",\"alt\":\"demo image\"},\"button\":{\"text\":\"Take a test\",\"link\":\"#\"},\"pointers\":[\"Empowerment 23\",\"Motivation\",\"Greater loyalty\",\"Greater commitment\",\"Accelerated skills development\"]}', '{\"heading\":\"We re here to help with heap of insights and tips\",\"button\":{\"text\":\"More tips and tricks this way\",\"link\":\"#\"},\"pointers\":[\"2\"]}', 0, '2023-12-25 13:06:54', '2023-12-26 13:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
