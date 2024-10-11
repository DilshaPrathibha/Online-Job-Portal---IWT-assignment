-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 08:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobadawiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `UserID` int(10) NOT NULL,
  `Name_GeneralInfo` varchar(50) NOT NULL,
  `Title_GeneralInfo` varchar(50) NOT NULL,
  `Description_GeneralInfo` varchar(100) NOT NULL,
  `Description_About` varchar(100) NOT NULL,
  `Company_Name_WorkExperience` varchar(50) NOT NULL,
  `Employment_Type_WorkExperience` varchar(50) NOT NULL,
  `Title_WorkExperience` varchar(50) NOT NULL,
  `Start_Date_WorkExperience` varchar(50) NOT NULL,
  `End_Date_WorkExperience` varchar(100) NOT NULL,
  `Description_WorkExperience` varchar(100) NOT NULL,
  `Description_Education` varchar(100) NOT NULL,
  `Description_Skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`UserID`, `Name_GeneralInfo`, `Title_GeneralInfo`, `Description_GeneralInfo`, `Description_About`, `Company_Name_WorkExperience`, `Employment_Type_WorkExperience`, `Title_WorkExperience`, `Start_Date_WorkExperience`, `End_Date_WorkExperience`, `Description_WorkExperience`, `Description_Education`, `Description_Skills`) VALUES
(33, 'Anura Kumara', 'Software Engineer', 'Passionate about building scalable apps.', 'A skilled developer with 5+ years in tech.', 'Tech Innovations', 'Full-time', 'Full-time', 'Jan 2019', 'Present', 'Developed enterprise-level software solutions for cloud platforms.', 'BSc in Computer Science, NYU', 'Python, Java, Git, Docker'),
(34, 'Mahinda Rajapaksha', 'Digital Marketer', 'Managed and executed digital marketing campaigns.', 'Expert in SEO and digital advertising strategies.', 'Creative Studio', 'Part-time', 'Digital Marketer', 'Mar 2017	', 'Present', '', 'B.A. in Marketing, UCLA', 'SEO, SEM, Google Analytics'),
(35, 'Saranga Disasekara', 'Data Scientist', 'Implemented ML models to improve patient outcomes.', 'Specializing in predictive modeling for healthcare.', 'Data Insights Inc.', 'Full-time', 'Data Scientist', 'Jul 2019', 'Present', '', 'M.Sc. in Data Science, MIT', 'Python, R, SQL, Power BI'),
(36, 'Yasith Randika', 'HR Manager', 'Managed HR activities, including payroll, employee relations, and hiring.', 'Skilled in recruitment, payroll, and compliance management.', 'HR Solutions Group', 'Full-time	', 'HR Manager', 'Sep 2015', 'Present', '', 'B.A. in Human Resources, Stanford', 'HRIS, Communication, Leadership'),
(37, 'Sahan Sathsara', 'Graphic Designer', 'Created visual content for branding campaigns.', 'Focused on digital and print media design.', 'Pixel Design Agency', 'Freelance', 'Graphic Designer', 'May 2018', 'Present', '', 'B.F.A. in Graphic Design, RISD', 'Adobe Illustrator, Photoshop'),
(38, 'Amish Tharanya', 'Project Manage', 'Led project planning, execution, and delivery for enterprise clients.', 'Experienced in managing cross-functional teams for large projects.', 'Venture Projects', 'Full-time', 'Project Manager', 'Feb 2020', 'Present', '', 'PMP Certification, PMI', 'Agile, SCRUM, Leadership');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
