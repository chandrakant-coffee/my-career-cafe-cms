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
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `sec1Title` varchar(100) DEFAULT NULL,
  `sec1SubTitle` varchar(100) DEFAULT NULL,
  `sec1Desc` varchar(500) DEFAULT NULL,
  `sec1LInk` varchar(150) DEFAULT NULL,
  `sec1LinkTxt` varchar(100) DEFAULT NULL,
  `sec1Image` varchar(250) DEFAULT NULL,
  `sec1ImgAlt` varchar(100) DEFAULT NULL,
  `sec2Title` varchar(100) DEFAULT NULL,
  `sec2Desc` varchar(500) DEFAULT NULL,
  `sec2Link` varchar(100) DEFAULT NULL,
  `sec2LinkTxt` varchar(100) DEFAULT NULL,
  `sec2Image` varchar(250) DEFAULT NULL,
  `sec2ImageAlt` varchar(100) DEFAULT NULL,
  `sec3Title` varchar(100) DEFAULT NULL,
  `sec3Link` varchar(250) DEFAULT NULL,
  `sec3LinkTxt` varchar(100) DEFAULT NULL,
  `sec3AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec4Title` varchar(250) DEFAULT NULL,
  `sec4Desc` varchar(500) DEFAULT NULL,
  `sec4Link` varchar(150) DEFAULT NULL,
  `sec4LinkTxt` varchar(100) DEFAULT NULL,
  `sec4Image` varchar(250) DEFAULT NULL,
  `sec4ImageAlt` varchar(100) DEFAULT NULL,
  `sec5Image` varchar(250) DEFAULT NULL,
  `sec5ImageAlt` varchar(100) DEFAULT NULL,
  `sec5Title` varchar(100) DEFAULT NULL,
  `sec5AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec6Title` varchar(100) DEFAULT NULL,
  `sec6image` varchar(250) DEFAULT NULL,
  `sec6imageAlt` varchar(100) DEFAULT NULL,
  `sec6Link` varchar(150) DEFAULT NULL,
  `sec6LinkText` varchar(100) DEFAULT NULL,
  `sec8Title` varchar(100) DEFAULT NULL,
  `sec8Desc` varchar(500) DEFAULT NULL,
  `sec8LInk` varchar(150) DEFAULT NULL,
  `sec8LInkTxt` varchar(100) DEFAULT NULL,
  `sec8Image` varchar(250) DEFAULT NULL,
  `sec8ImgAlt` varchar(100) DEFAULT NULL,
  `sec9Title` varchar(100) DEFAULT NULL,
  `sec10AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `insights_and_tips_section` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `page_title` varchar(100) DEFAULT NULL,
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_desc` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(250) DEFAULT NULL,
  `url_schema` varchar(255) DEFAULT NULL,
  `canonical_tag` varchar(250) DEFAULT NULL,
  `canonical_rel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `sec1Title`, `sec1SubTitle`, `sec1Desc`, `sec1LInk`, `sec1LinkTxt`, `sec1Image`, `sec1ImgAlt`, `sec2Title`, `sec2Desc`, `sec2Link`, `sec2LinkTxt`, `sec2Image`, `sec2ImageAlt`, `sec3Title`, `sec3Link`, `sec3LinkTxt`, `sec3AddMore`, `sec4Title`, `sec4Desc`, `sec4Link`, `sec4LinkTxt`, `sec4Image`, `sec4ImageAlt`, `sec5Image`, `sec5ImageAlt`, `sec5Title`, `sec5AddMore`, `sec6Title`, `sec6image`, `sec6imageAlt`, `sec6Link`, `sec6LinkText`, `sec8Title`, `sec8Desc`, `sec8LInk`, `sec8LInkTxt`, `sec8Image`, `sec8ImgAlt`, `sec9Title`, `sec10AddMore`, `insights_and_tips_section`, `created_at`, `updated_at`, `is_deleted`, `page_title`, `meta_title`, `meta_desc`, `meta_keyword`, `url_schema`, `canonical_tag`, `canonical_rel`) VALUES
(1, 'Want a bigger paycheck?', 'Of course you do.', 'JAVA, .Net, C++, what next? Technology evolves and at a fast pace. This has create a gap between the existing workforce’s skills and the skills that are now necessary to effectively execute their jobs. Our professionally created free online career assessment test that help’s you choose a career path that is compatible with your interests, skills, values and personality to successfully secure high paying jobs.', 'http://localhost/phpmyadmin/index.php?route=/table/structure&db=my_career_cafe&table=home', 'Take a free assessment test', 'public/storage/home-images/17035006221.top-img.png', 'Test', 'Skill Assessments to Boost Your Profile', 'Assess fundamental knowledge of your IT Skills including networking, setting up/managing infrastructure, managing application software, security, and more.  Meet potential your employers and stand out among a crowd of applicants during a job search and put your best foot forward Skill assessments offer a great way to make a good impression.', 'https://ardemos.co/my-career-cafe/skill-assessment', 'Take a test', 'public/storage/home-images/17035006461.skill-set.png', 'Test 2', 'For every career stage', 'https://ardemos.co/my-career-cafe/', 'Take a test', '[{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835710.png\",\"sec3ImagesAlt\":\"test\",\"sec3Titles\":\"College Students & Graduates\",\"sec3Descriptions\":\"Unsure about what to do after college? See the range of careers you can pursue with your interests, personality, and education.\",\"sec3OrderBy\":\"1\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835711.png\",\"sec3ImagesAlt\":\"test 2\",\"sec3Titles\":\"Working Professionals\",\"sec3Descriptions\":\"Be your best self at work. Learn what makes you unique and how well-suited you are to your past, current, and future career choices.\",\"sec3OrderBy\":\"2\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835712.png\",\"sec3ImagesAlt\":\"test 3\",\"sec3Titles\":\"Career Changers\",\"sec3Descriptions\":\"Looking to make a career change? Thinking about going back to school? MyCareerCafe will point you in the right direction.\",\"sec3OrderBy\":\"3\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835713.png\",\"sec3ImagesAlt\":\"test 4\",\"sec3Titles\":\"Executive Leadership\",\"sec3Descriptions\":\"We help leaders and senior managers identify and achieve professional goals that are both strategic and practical.\",\"sec3OrderBy\":\"4\"}]', 'Advance your career with new skills', 'Choose from over 1,000 courses in topics like data analytics, graphic design, Python, and more. Skills for your present (and your future). Get started with us.', 'https://ardemos.co/my-career-cafe/courses', 'Take Test', 'public/storage/home-images/17033240481.build-job.png', 'Test 3', 'public/storage/home-images/17033241461.service.png', 'Test 4', 'Our service to provide your career grow', '[{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838050.png\",\"sec5ImagesAlt\":\"Test\",\"sec5Titles\":\"Career Counselling\",\"sec5Descriptions\":\"One-on-one conversations between a counselor and a career seeker\",\"sec5OrderBy\":\"1\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838051.png\",\"sec5ImagesAlt\":\"Test 2\",\"sec5Titles\":\"Training\",\"sec5Descriptions\":\"Build on your IT foundations and learn in-demand skills.\",\"sec5OrderBy\":\"2\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838052.png\",\"sec5ImagesAlt\":\"Test 3\",\"sec5Titles\":\"Certification\",\"sec5Descriptions\":\"Upskill to earn verified certificates from trained professionals\",\"sec5OrderBy\":\"3\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838053.png\",\"sec5ImagesAlt\":\"Test 4\",\"sec5Titles\":\"R & D on Live Projects\",\"sec5Descriptions\":\"Certificate courses to train technology professionals\",\"sec5OrderBy\":\"4\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838054.png\",\"sec5ImagesAlt\":\"Test 5\",\"sec5Titles\":\"Placement Assistance\",\"sec5Descriptions\":\"Create new opportunities in the market by the medium of pathfinder.\",\"sec5OrderBy\":\"5\"}]', 'Explore the latest job openings', 'public/storage/home-images/17033254221.explore-latest.png', 'Test 5', 'https://ardemos.co/my-career-cafe/job-listing', 'Take Test', 'Cross Skilling, Upskilling, Reskilling Experts.', 'We are experts in IT Recruitment offering honest, transparent advice, helping candidates into their next role and clients find valued IT professionals. Operating for over a decade in this market, we know our industry inside and out.', 'Teke Test', 'Take Test', 'public/storage/home-images/17034980381.cross-skill-img.png', 'Test 8', NULL, '[{\"title\":\"Certifications awardedto candidates till nowEnroll with us\",\"recordInDigit\":\"246\",\"sec10OrderBy\":\"1\"},{\"title\":\"Candidates successfully placed till now\",\"recordInDigit\":\"178+\",\"sec10OrderBy\":\"2\"},{\"title\":\"Certifications awarded to candidates till now Enroll with us\",\"recordInDigit\":\"246\",\"sec10OrderBy\":\"3\"}]', '{\"heading\":\"We re here to help with heap of insights and tips\",\"button\":{\"text\":\"More tips and tricks this way\",\"link\":\"#\"},\"pointers\":[\"1\",\"2\",\"3\"]}', '2023-12-23 06:03:18', '2023-12-27 12:12:59', 0, 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
