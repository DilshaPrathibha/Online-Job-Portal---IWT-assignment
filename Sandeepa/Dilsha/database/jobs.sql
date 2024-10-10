-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 05:42 PM
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
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Title` varchar(50) NOT NULL,
  `jLocation` varchar(50) NOT NULL,
  `Employmenttype` varchar(50) NOT NULL,
  `SalaryRange` int(20) NOT NULL,
  `jDescription` varchar(50) NOT NULL,
  `Skills` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Title`, `jLocation`, `Employmenttype`, `SalaryRange`, `jDescription`, `Skills`) VALUES
(' Project Manager', 'On-site', 'Full-time', 95000, 'Manage project timelines, resources, and communica', 'Agile, Scrum, Leadership, Communication'),
('Backend Developer', 'Remote', 'Full-time', 90000, 'Develop and maintain server-side logic for applica', 'Node.js, MongoDB, Express'),
('Data Analyst', 'Remote', 'Full-time', 80000, 'Analyze data and generate business insights', 'Python, SQL, Tableau'),
('Digital Marketer', 'On-site', 'Full-time', 65000, 'Design and implement online marketing campaigns', 'Google Ads, Analytics, SEO'),
('End Developer', 'Remote', 'Full-time', 75000, 'Responsible for building the front-end of web appl', 'HTML, CSS, JavaScript, Vue.js'),
('Marketing Coordinator', 'On-site', 'Part-time', 40000, 'Coordinate marketing campaigns and social media co', 'SEO, Content Writing, Analytics'),
('Software Developer', 'Remote', 'Full-time', 70000, 'Develop and maintain web applications', 'JavaScript, React, Node.js'),
('UX/UI Designer', 'On-site', 'Part-time', 85000, 'Design user interfaces for web and mobile apps', 'Figma, Adobe XD, HTML/CSS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
