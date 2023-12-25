-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 11:18 AM
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
  `sec1Image` varchar(250) DEFAULT NULL,
  `sec2Title` varchar(100) DEFAULT NULL,
  `sec2Desc` varchar(500) DEFAULT NULL,
  `sec2Link` varchar(100) DEFAULT NULL,
  `sec2Image` varchar(250) DEFAULT NULL,
  `sec3Title` varchar(100) DEFAULT NULL,
  `sec3Link` varchar(250) DEFAULT NULL,
  `sec3AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec4Title` varchar(250) DEFAULT NULL,
  `sec4Desc` varchar(500) DEFAULT NULL,
  `sec4Link` varchar(150) DEFAULT NULL,
  `sec4Image` varchar(250) DEFAULT NULL,
  `sec5Image` varchar(250) DEFAULT NULL,
  `sec5Title` varchar(100) DEFAULT NULL,
  `sec5AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec6Title` varchar(100) DEFAULT NULL,
  `sec6image` varchar(250) DEFAULT NULL,
  `sec6Link` varchar(150) DEFAULT NULL,
  `sec7Title` varchar(100) DEFAULT NULL,
  `sec7link` varchar(200) DEFAULT NULL,
  `sec7Images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec7Titles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec7Descriptions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sec8Title` varchar(100) DEFAULT NULL,
  `sec8Desc` varchar(500) DEFAULT NULL,
  `sec8LInk` varchar(150) DEFAULT NULL,
  `sec8Image` varchar(250) DEFAULT NULL,
  `sec9Title` varchar(100) DEFAULT NULL,
  `sec9Images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9Images`)),
  `sec9Dates` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9Dates`)),
  `sec9Titles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9Titles`)),
  `sec9Ratings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9Ratings`)),
  `sec9Prices` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9Prices`)),
  `sec9SubTitles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sec9SubTitles`)),
  `sec10AddMore` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
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

INSERT INTO `home` (`id`, `sec1Title`, `sec1SubTitle`, `sec1Desc`, `sec1LInk`, `sec1Image`, `sec2Title`, `sec2Desc`, `sec2Link`, `sec2Image`, `sec3Title`, `sec3Link`, `sec3AddMore`, `sec4Title`, `sec4Desc`, `sec4Link`, `sec4Image`, `sec5Image`, `sec5Title`, `sec5AddMore`, `sec6Title`, `sec6image`, `sec6Link`, `sec7Title`, `sec7link`, `sec7Images`, `sec7Titles`, `sec7Descriptions`, `sec8Title`, `sec8Desc`, `sec8LInk`, `sec8Image`, `sec9Title`, `sec9Images`, `sec9Dates`, `sec9Titles`, `sec9Ratings`, `sec9Prices`, `sec9SubTitles`, `sec10AddMore`, `created_at`, `updated_at`, `page_title`, `meta_title`, `meta_desc`, `meta_keyword`, `url_schema`, `canonical_tag`, `canonical_rel`) VALUES
(1, 'Want a bigger paycheck?', 'Of course you do.', 'JAVA, .Net, C++, what next? Technology evolves and at a fast pace. This has create a gap between the existing workforce’s skills and the skills that are now necessary to effectively execute their jobs. Our professionally created free online career assessment test that help’s you choose a career path that is compatible with your interests, skills, values and personality to successfully secure high paying jobs.', 'http://localhost/phpmyadmin/index.php?route=/table/structure&db=my_career_cafe&table=home', 'public/storage/home-images/17033218371.top-img.png', 'Skill Assessments to Boost Your Profile', 'Assess fundamental knowledge of your IT Skills including networking, setting up/managing infrastructure, managing application software, security, and more.  Meet potential your employers and stand out among a crowd of applicants during a job search and put your best foot forward Skill assessments offer a great way to make a good impression.', 'https://ardemos.co/my-career-cafe/skill-assessment', 'public/storage/home-images/17033217941.skill-set.png\n', 'For every career stage', NULL, '[{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835710.png\",\"sec3Titles\":\"College Students & Graduates\",\"sec3Descriptions\":\"Unsure about what to do after college? See the range of careers you can pursue with your interests, personality, and education.\",\"sec3OrderBy\":\"1\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835711.png\",\"sec3Titles\":\"Working Professionals\",\"sec3Descriptions\":\"Be your best self at work. Learn what makes you unique and how well-suited you are to your past, current, and future career choices.\",\"sec3OrderBy\":\"2\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835712.png\",\"sec3Titles\":\"Career Changers\",\"sec3Descriptions\":\"Looking to make a career change? Thinking about going back to school? MyCareerCafe will point you in the right direction.\",\"sec3OrderBy\":\"3\"},{\"sec3Images\":\"public\\/storage\\/home-images\\/section-3\\/17034835713.png\",\"sec3Titles\":\"Executive Leadership\",\"sec3Descriptions\":\"We help leaders and senior managers identify and achieve professional goals that are both strategic and practical.\",\"sec3OrderBy\":\"4\"}]', 'Advance your career with new skills', 'Choose from over 1,000 courses in topics like data analytics, graphic design, Python, and more. Skills for your present (and your future). Get started with us.', 'https://ardemos.co/my-career-cafe/courses', 'public/storage/home-images/17033240481.build-job.png', 'public/storage/home-images/17033241461.service.png', 'Our service to provide your career grow', '[{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838050.png\",\"sec5Titles\":\"Career Counselling\",\"sec5Descriptions\":\"One-on-one conversations between a counselor and a career seeker\",\"sec5OrderBy\":\"1\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838051.png\",\"sec5Titles\":\"Training\",\"sec5Descriptions\":\"Build on your IT foundations and learn in-demand skills.\",\"sec5OrderBy\":\"2\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838052.png\",\"sec5Titles\":\"Certification\",\"sec5Descriptions\":\"Upskill to earn verified certificates from trained professionals\",\"sec5OrderBy\":\"3\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838053.png\",\"sec5Titles\":\"R & D on Live Projects\",\"sec5Descriptions\":\"Certificate courses to train technology professionals\",\"sec5OrderBy\":\"4\"},{\"sec5Images\":\"public\\/storage\\/home-images\\/section-5\\/17034838054.png\",\"sec5Titles\":\"Placement Assistance\",\"sec5Descriptions\":\"Create new opportunities in the market by the medium of pathfinder.\",\"sec5OrderBy\":\"5\"}]', 'Explore the latest job openings', 'public/storage/home-images/17033254221.explore-latest.png', 'https://ardemos.co/my-career-cafe/job-listing', 'We\'re here to help with heap of insights and tips', '#', '', '', '', 'Cross Skilling, Upskilling, Reskilling Experts.', 'We are experts in IT Recruitment offering honest, transparent advice, helping candidates into their next role and clients find valued IT professionals. Operating for over a decade in this market, we know our industry inside and out.', '#', 'public/storage/home-images/17034980381.cross-skill-img.png', 'Courses', NULL, NULL, NULL, NULL, NULL, NULL, '[{\"title\":\"Certifications awardedto candidates till nowEnroll with us\",\"recordInDigit\":\"246\",\"sec10OrderBy\":\"1\"},{\"title\":\"Candidates successfully placed till now\",\"recordInDigit\":\"178+\",\"sec10OrderBy\":\"2\"},{\"title\":\"Certifications awarded to candidates till now Enroll with us\",\"recordInDigit\":\"246\",\"sec10OrderBy\":\"3\"}]', '2023-12-23 06:03:18', '2023-12-25 09:53:58', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing');

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
