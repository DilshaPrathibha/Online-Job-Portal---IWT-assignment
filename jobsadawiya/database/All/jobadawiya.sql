-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 09:21 AM
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
('ABC Group', 150, 'Colombo', 'Software company', 'contact@abc.com'),
('Apex Industries', 300, 'Toronto', 'Manufacturing quality automotive parts', 'connect@apexind.com'),
('Delta Corp', 500, 'London', 'Innovating financial technology', 'info@deltacorp.com'),
('XYZ Technologies', 200, 'New York', 'Leading software solutions provider', 'contact@xyztech.com');

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
(73, 'Saman Kumara', 'samankumara@gmail.com', '0778563482', 'I need assistance with updating my profile information.', '2024-10-10 01:47:54', 'responded'),
(74, 'Emily White', 'emilywhite@outlook.com', '0784582314', 'I am having trouble submitting job applications. The form keeps giving an error.', '2024-10-10 07:06:27', 'pending'),
(75, 'Aravinda Jayasooriya', 'jayasooriya@gmail.com', '0767824591', 'I received an email regarding my application, but I didn’t understand the next steps.', '2024-10-10 07:06:29', 'responded'),
(76, 'Dilini Chamodya', 'dchamodya2002@gmail.com', '0727569548', 'The website crashes when I try to upload my resume. Please assist.', '2024-10-10 07:11:07', 'pending'),
(77, 'Hasantha Madushan', 'hasamadushan12@gmail.com', '0750120365', 'I want to delete my account but can not find the option in my settings.', '2024-10-06 23:46:49', 'pending'),
(118, 'testd dd testdd', 'testdd@gg.com', '354536', 'sdv fg trfgg tr', '2024-10-10 07:16:35', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `customercare1`
--

CREATE TABLE `customercare1` (
  `Id` int(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `EducationQualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customercare1`
--

INSERT INTO `customercare1` (`Id`, `Name`, `Email`, `Address`, `MobileNumber`, `EducationQualification`) VALUES
(1, 'Jem', 'Jem@gmail.com', '45/9, Dewata road, Matara', '0775465456', 'Bsc.(hons) Information Technology'),
(2, 'David', 'David@gmail.com', '78/4, Rose street, Colombo', '0718568794', 'Bsc.(hons) Bussiness Administration'),
(3, 'Udith', 'Udith@gmail.com', '32/1, Vijerama road, Galle', '0774583247', 'HND in Accounting'),
(4, 'Ashin', 'Ashin@gmail.com', '98/7, Greenland, Colombo', '0773259043', 'HND in  Tourism Management'),
(5, 'Sandeepa', 'Sandeepa@gmail.com', '75/3, Lower street, Kaluthara', '0773259043', 'Bsc. (hons) in Software Engineering'),
(6, 'Malith', 'Malith@gmail.com', '98/7, Main road, Ampara', '0718579656', 'Bsc. (hons) in Social Science'),
(7, 'Jagath', 'Jagath@gmail.com', '98/7, Kappetipola road, Badull', '0774365756', 'Bsc.(hons) in Engineering'),
(21, 'wqd', 'wqd@yjh.vom', 'wqdw', '3541', 'qwd'),
(485, 'wqd', 'testdd@gg.com', 'ddd', '59', 'wef'),
(596, 'wed', 'twedestdd@gg.com', 'ddd', 'wed', 'ed');

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
(26, 'test 2', 'testdd@gg.com', 'bug', 4, 'message\r\n', '2024-10-10 02:31:09'),
(27, 'ef', 'testdd@gg.com', 'bug', 2, 'ewf', '2024-10-10 05:52:18'),
(28, 'test 2', 'testdd@gg.com', 'bug', 2, 'sa', '2024-10-10 05:54:16'),
(29, 'test 2', 'testdd@gg.com', 'bug', 2, 'ssa', '2024-10-10 05:57:29'),
(30, 'test 2', 'testdd@gg.com', 'feature', 2, 'sas', '2024-10-10 05:58:30'),
(31, 'test 2', 'testdd@gg.com', 'bug', 0, 'sac', '2024-10-10 05:59:24'),
(32, 'test 2', 'testdd@gg.com', 'bug', 2, 'we', '2024-10-10 06:01:59'),
(33, 'testd', 'fdg@jhj.dfe', 'bug', 2, 'dfv', '2024-10-10 07:12:36');

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
('UX/UI Designer', 'On-site', 'Full-time', 85000, 'Design user interfaces for web and mobile apps', 'Figma, Adobe XD, HTML/CSS');

-- --------------------------------------------------------

--
-- Table structure for table `sdeveloper`
--

CREATE TABLE `sdeveloper` (
  `Degree` varchar(50) NOT NULL,
  `Previous_Experience` varchar(50) NOT NULL,
  `GPA` int(10) NOT NULL,
  `Timescale` varchar(20) NOT NULL,
  `Desition` varchar(50) NOT NULL,
  `Explanation` varchar(50) NOT NULL,
  `Reason_for_intern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdeveloper`
--

INSERT INTO `sdeveloper` (`Degree`, `Previous_Experience`, `GPA`, `Timescale`, `Desition`, `Explanation`, `Reason_for_intern`) VALUES
(' diploma in computer science', 'AI project', 3, 'anytime', 'yes', 'yes', 'i like your company'),
('wqd', 'wqdwq', 0, ' dwq', 'wqd', 'wdq', 'wqd'),
('wqd', 'fewsf', 0, ' wef', 'wef', 'wef', 'wef'),
('wqd', 'ewd', 985, ' wed', 'wed', 'wed', 'wed');

-- --------------------------------------------------------

--
-- Table structure for table `userpayment`
--

CREATE TABLE `userpayment` (
  `trx_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `package` varchar(50) NOT NULL,
  `additional_s` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `card_no` int(20) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpayment`
--

INSERT INTO `userpayment` (`trx_id`, `email`, `phone`, `NIC`, `package`, `additional_s`, `bank`, `holder_name`, `card_no`, `expire_date`, `cvv`) VALUES
(14, 'sandeepa@gmail.com', '0765678987', '288765678909', '3', '3', 'COMERSIAL', 'herath  HMBP', 2147483647, '2022-04-06', 345),
(15, 'kamaludara@gmail.com', '0789654888', '500345478965', '2', '3', 'COMERSIAL', 'herath  HMBP', 2147483647, '2022-04-07', 757),
(16, 'shehanbasuru@gmail.com', '08976576975', '200786756789', '2', '2', 'COMERSIAL', 'sahan YTHK', 2147483647, '2022-08-17', 756),
(17, 'dinuka@test.com', '0713442345', '200988778767', '2', '3', 'BOC', 'herath  HMBP', 2147483647, '2021-01-01', 487),
(18, 'pavansudaraka@test.com', '0718567890', '200988778567', '3', '1', 'SDB', 'senarathna LKNT', 2147483647, '2021-01-08', 987),
(19, 'raveendilshan@test.com', '0786541456', '2007567878987', '2', '3', 'UNION BANK', 'sandaruwan KJNG', 2147483647, '2022-05-08', 890),
(20, 'kaveesharavishani@test.com', '0784563456', '200356798078', '4', '2', 'COMERSIAL', 'herath HMAS', 2147483647, '2022-05-08', 856),
(21, 'sheharasineth@test.com', '0715643567', '200854378998', '2', '1', 'HNB', 'kavishka HJGJH', 2147483647, '2022-05-13', 354),
(22, 'tharushiamaya@test.com', '0789543456', '200854378956', '3', '3', 'UNION BANK', 'sherin HGTH', 2147483647, '2022-05-13', 345),
(23, 'chalanisaumya@test.com', '07189756878', '200854376756', '2', '2', 'HNB', 'kavya JTHJ', 2147483647, '2022-08-13', 244);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `hometown` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `spassword` varchar(255) NOT NULL,
  `register_as` varchar(45) NOT NULL,
  `terms_accepted` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `age`, `hometown`, `phone`, `spassword`, `register_as`, `terms_accepted`, `email`) VALUES
(1, 'bupathi', 'pranama', 'pranama1234', 22, 'qujaqusa', '1234567', '', 'recruter', 0, 'kasun@home'),
(2, 'malith', 'udara', 'malithp', 22, 'kaluthara', '0772950378', 'pmalith1234', 'job seeker', 0, 'malith@home'),
(3, 'shamal', 'ashinshana', 'shamal12', 23, 'badulla', '072346456', 'oppa', 'recruter', 0, 'oppa@badulla'),
(4, 'sandeepa', 'chathumina', 'sandeepa1234', 21, 'kaluthara', '0715478654', 'sandyp', 'recruter', 0, 'sandyp@dilly.com'),
(5, 'vishwa', 'nirmal', 'vishawa98', 22, 'nikawaratiya', '0255737481', 'lanka12', 'recruter', 0, 'vishwa@yahoo.com'),
(6, 'kavishka', 'rajapaksha', 'kavishka@12', 21, 'rajanganaya', '0776534876', 'kavi12', 'job seeker', 0, 'kavishka@gmail.com'),
(8, 'ishara', 'herath', 'herath12', 23, 'anuradapura', '0775435456', 'anu12', 'job seeker', 0, 'ishara@gmail.com'),
(9, '', '', 'dd', 0, '', '', 'Dd1234@', '', 0, ''),
(10, '', '', 'dd', 0, '', '', 'Dd1234@', '', 0, ''),
(11, '', '', 'dd', 0, '', '', 'Dd1234#', '', 0, ''),
(12, '', '', 'dd', 0, '', '', 'Ddd12345678@', '', 0, ''),
(13, '', '', 'dd', 0, '', '', 'Dd1234@', '', 0, ''),
(14, '', '', 'dd', 0, '', '', 'dd', '', 0, '');

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
-- Indexes for table `customercare1`
--
ALTER TABLE `customercare1`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `userpayment`
--
ALTER TABLE `userpayment`
  ADD PRIMARY KEY (`trx_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `customercare1`
--
ALTER TABLE `customercare1`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=597;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userpayment`
--
ALTER TABLE `userpayment`
  MODIFY `trx_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
