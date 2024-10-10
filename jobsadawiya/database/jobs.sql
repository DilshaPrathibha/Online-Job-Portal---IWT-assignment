-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 06:03 PM
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
-- Database: `jobadawiya`
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
('UX/UI Designer', 'On-site', 'Full-time', 85000, 'Design user interfaces for web and mobile apps', 'Figma, Adobe XD, HTML/CSS'),
('Frontend Developer', 'Remote', 'Full-time', 70000, 'Create visually appealing and user-friendly web interfaces', 'HTML, CSS, JavaScript, React'),
('Data Scientist', 'On-site', 'Full-time', 95000, 'Use data analysis and machine learning to derive insights', 'Python, R, SQL, Machine Learning'),
('Network Engineer', 'On-site', 'Full-time', 80000, 'Design, implement, and manage network systems', 'Networking, Cisco, Firewall, Troubleshooting'),
('Content Writer', 'Remote', 'Part-time', 30000, 'Produce high-quality written content for various platforms', 'SEO, Creative Writing, Research'),
('System Administrator', 'On-site', 'Full-time', 75000, 'Manage and maintain IT systems and servers', 'Windows Server, Linux, Networking, Security'),
('Mobile App Developer', 'Remote', 'Full-time', 90000, 'Develop mobile applications for iOS and Android', 'Swift, Kotlin, Flutter, API Integration'),
('Sales Executive', 'On-site', 'Full-time', 60000, 'Drive sales and manage client relationships', 'Sales Strategy, Negotiation, CRM, Communication'),
('Graphic Designer', 'Remote', 'Part-time', 40000, 'Create visual concepts to communicate ideas', 'Adobe Photoshop, Illustrator, Branding'),
('DevOps Engineer', 'Remote', 'Full-time', 95000, 'Streamline development and operations through automation', 'Docker, Kubernetes, CI/CD, AWS'),
('Product Manager', 'On-site', 'Full-time', 100000, 'Oversee product development from conception to launch', 'Agile, Market Research, Communication, Leadership'),
('SEO Specialist', 'Remote', 'Part-time', 50000, 'Optimize website content to rank higher on search engines', 'SEO, Google Analytics, Keyword Research'),
('Technical Writer', 'On-site', 'Full-time', 65000, 'Create user manuals and documentation for products', 'Technical Writing, Communication, Attention to Detail'),
('HR Manager', 'On-site', 'Full-time', 80000, 'Manage recruitment, training, and employee relations', 'Recruitment, Employee Relations, HR Policies'),
('Database Administrator', 'Remote', 'Full-time', 85000, 'Manage and maintain database systems and performance', 'SQL, Database Design, Performance Tuning'),
('Cloud Architect', 'Remote', 'Full-time', 120000, 'Design cloud solutions and manage cloud infrastructure', 'AWS, Azure, Cloud Computing, Networking'),
('Cybersecurity Analyst', 'On-site', 'Full-time', 90000, 'Protect systems and networks from cyber threats', 'Security, Risk Assessment, Incident Response'),
('Salesforce Developer', 'Remote', 'Full-time', 95000, 'Develop custom solutions on the Salesforce platform', 'Salesforce, Apex, Visualforce, Lightning'),
('Game Developer', 'Remote', 'Full-time', 80000, 'Design and develop video games across platforms', 'Unity, C#, Game Design, 3D Modeling');

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
