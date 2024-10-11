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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Title` varchar(20) NOT NULL,
  `jLocation` varchar(25) NOT NULL,
  `Employmenttype` varchar(20) NOT NULL,
  `SalaryRange` int(8) NOT NULL,
  `jDescription` varchar(50) NOT NULL,
  `Skills` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Title`, `jLocation`, `Employmenttype`, `SalaryRange`, `jDescription`, `Skills`) VALUES
('Customer Support', 'Matara', 'Part-time', 50000, 'Provide customer support and resolve issues.', 'CRM tools, Communication'),
('Data Analyst', 'Colombo	', 'Full-time', 70000, 'Analyze large datasets and provide actionable insi', 'Excel, SQL, Power BI, Python'),
('Digital Marketing', 'Gampaha', 'Part-time', 55000, 'Plan and execute digital marketing campaigns.', 'SEO, SEM, Google Analytics'),
('Graphic Designer', 'Badulla', 'freelance', 60000, 'Create visuals for digital and print media.', 'Adobe Suite, Figma, Sketch'),
('HR Manager', 'Kalutara', 'Full-time', 80000, 'Oversee HR functions, including recruitment, payro', 'Communication, Management, HRI'),
('Project Manager', 'Bambalapitiya', 'Full-time', 100000, 'Lead project planning, execution, and closure acti', 'MS Project, Agile, SCRUM'),
('Software Engineer', 'Colombo', 'Full-time', 100000, 'Design, develop, and maintain software application', 'Python, Java, Git, SQL'),
('UX/UI Designer', 'Mathale', 'Full-time', 80000, 'Design user interfaces and user experiences for we', 'Figma, Adobe XD, CSS, HTML');

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
