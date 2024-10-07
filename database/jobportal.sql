-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 07:45 PM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cName` varchar(50) NOT NULL,
  `Employe` int(50) NOT NULL,
  `cLocation` varchar(100) NOT NULL,
  `About` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cName`, `Employe`, `cLocation`, `About`, `Email`) VALUES
('ABC Group', 150, 'Colombo', 'we are sa h kj sacsc', 'contact@abc.com'),
('f', 33, 'xxxxxxx', 'xxxx', 'aa@gmail.com'),
('xxxxxxx', 33, 'xxxxxxx', 'xxxxxxx', 'aa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('pending','responded') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`m_id`, `name`, `email`, `phone`, `message`, `time`, `status`) VALUES
(73, 'Saman Kumara', 'samankumara@gmail.com', '0778563482', 'I need assistance with updating my profile information.', '2024-10-04 20:31:32', 'responded'),
(74, 'Emily White', 'emilywhite@outlook.com', '0784582314', 'I am having trouble submitting job applications. The form keeps giving an error.', '2024-10-04 20:22:27', 'pending'),
(75, 'Aravinda Jayasooriya', 'jayasooriya@gmail.com', '0767824591', 'I received an email regarding my application, but I didn’t understand the next steps.', '2024-10-04 20:31:48', 'responded'),
(76, 'Dilini Chamodya', 'dchamodya2002@gmail.com', '0727569548', 'The website crashes when I try to upload my resume. Please assist.', '2024-10-04 20:25:51', 'pending'),
(77, 'Hasantha Madushan', 'hasamadushan12@gmail.com', '0750120365', 'I want to delete my account but can not find the option in my settings.', '2024-10-04 20:29:23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` enum('general','bug','feature') NOT NULL,
  `rating` int(1) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `type`, `rating`, `message`, `time`) VALUES
(5, 'Damith De Silva', 'damithsilva@gmail.com', 'general', 5, 'Great platform! Easy to navigate, and the job search features are excellent. Keep up the good work!', '2024-10-04 20:00:40'),
(6, 'Mahinda Jayasinghe', 'mahindajayasinghe@yahoo.com', 'bug', 2, ' job search filters kept showing jobs outside the selected categories', '2024-10-04 20:04:59'),
(8, 'Deepika Kumari', 'deepikakumari1985@gmail.com', 'feature', 3, 'If the platform had a resume builder, it would be easier for job seekers to apply directly', '2024-10-04 20:09:00'),
(9, 'David Brown', 'davidbrown@gmail.com', 'general', 5, 'Excellent job!', '2024-10-04 20:09:58'),
(10, 'Kasun Sampath Samarasinghe', 'ksamarasinghe@hotmail.com', 'general', 4, 'Great portal, but loading could be faster.', '2024-10-04 20:14:04'),
(11, '', '', '', 0, '', '2024-10-05 22:48:11'),
(12, '', '', '', 0, '', '2024-10-05 22:48:17');

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
('Data Analyst', 'Remote', 'Full-time', 80000, 'Analyze data and generate business insights', 'Python, SQL, Tableau'),
('End Developer', 'Remote', 'Full-time', 75000, 'Responsible for building the front-end of web appl', 'HTML, CSS, JavaScript, Vue.js'),
('Marketing Coordinator', 'On-site', 'Part-time', 40000, 'Coordinate marketing campaigns and social media co', 'SEO, Content Writing, Analytics'),
('Software Developer', 'Remote', 'Full-time', 70000, 'Develop and maintain web applications', 'JavaScript, React, Node.js'),
('UX/UI Designer', 'On-site', 'Full-time', 85000, 'Design user interfaces for web and mobile apps', 'Figma, Adobe XD, HTML/CSS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cName`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
