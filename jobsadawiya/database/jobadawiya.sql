-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 07:38 AM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cName` varchar(20) NOT NULL,
  `Employe` int(10) NOT NULL,
  `cLocation` varchar(25) NOT NULL,
  `About` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cName`, `Employe`, `cLocation`, `About`, `Email`) VALUES
('Creative Studio', 70, 'Gampaha', 'A full-service marketing and b', 'jobs@creativestudio.'),
('Data Insights Inc.', 200, 'Colombo', 'Providing data analysis and bu', 'careers@datainsights'),
('Designify', 150, 'Mathale', 'Specializing in user experienc', 'careers@designify.co'),
('HR Solutions Group', 100, 'Kalutara', 'Helping businesses streamline ', 'apply@hrsolutions.co'),
('Pixel Design Agency', 50, 'Badulla', 'We specialize in graphic desig', 'contact@pixeldesign.'),
('SupportNow', 160, 'Matara', 'A customer support outsourcing', 'hr@supportnow.com'),
('Tech Innovations', 150, 'Colombo', 'A leading software company spe', 'hr@techinnovations.c'),
('Venture Projects', 200, 'Bambalapitiya', 'Leading project management con', 'work@ventureprojects');

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
(73, 'Saman Kumara', 'samankumara@gmail.com', '0778563482', 'I need assistance with updating my profile information.', '2024-10-07 12:28:26', 'pending'),
(74, 'Emily White', 'emilywhite@outlook.com', '0784582314', 'I am having trouble submitting job applications. The form keeps giving an error.', '2024-10-07 05:51:59', 'responded'),
(75, 'Aravinda Jayasooriya', 'jayasooriya@gmail.com', '0767824591', 'I received an email regarding my application, but I didn’t understand the next steps.', '2024-10-07 12:28:24', 'pending'),
(76, 'Dilini Chamodya', 'dchamodya2002@gmail.com', '0727569548', 'The website crashes when I try to upload my resume. Please assist.', '2024-10-07 12:29:22', 'responded'),
(77, 'Hasantha Madushan', 'hasamadushan12@gmail.com', '0750120365', 'I want to delete my account but can not find the option in my settings.', '2024-10-07 13:50:02', 'responded'),
(114, 'Sunil Rathnayake', 'dtsaest@gmail.com', '0775265752', 'Help me to delete this account', '2024-10-07 13:26:31', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `customercare1`
--

CREATE TABLE `customercare1` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `EducationQualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customercare1`
--

INSERT INTO `customercare1` (`Id`, `Name`, `Email`, `Address`, `MobileNumber`, `EducationQualification`) VALUES
(1212, 'shamal', 'shamal@gmail.com', 'springwalley,badulla', '0324556545', 'it degree'),
(3487568, 'Saman Jaya', 'saman@email.com  ', '654, Negombo Rd, Negombo  \r\n', '0774567890', 'Bachelor of Information Technology.\r\n'),
(47854837, 'Nirosha Fe', 'nirosha@email.com  ', '456 Kandy Rd, Kandy  ', '0777654321', 'Bachelor of Arts in Information Technology.\r\n'),
(48356873, 'Amila Pere', 'amila.p@email.com  ', '123 Galle Rd, Colombo 03  \r\n', '0771234567', 'BSc in Computer Science'),
(48753484, 'Harini Wij', 'harini@email.com  ', '321, Havelock Rd, Colombo 05  ', '0779876543', 'Bachelor of Engineering \r\n'),
(59845789, 'Dilshan Ku', 'dilshan@email.com  ', '789, Nugegoda, Dehiwala  \r\n', '0773456789', 'Associate Degree in Computer Science');

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
(26, 'Kamal Addararrachchi', 'Addararrachchi@gmail.com', 'general', 5, 'awesome site', '2024-10-07 13:28:30'),
(31, 'dsds wdwe ', 'Addararrachchi@gmail.com', 'bug', 2, 'bugs!!!!!!', '2024-10-07 13:41:05');

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
('Cloud Architect', 'Remote', 'Full-time', 120000, 'Design cloud solutions and manage cloud infrastruc', 'AWS, Azure, Cloud Computing, Networking'),
('Content Writer', 'Remote', 'Part-time', 30000, 'Produce high-quality written content for various p', 'SEO, Creative Writing, Research'),
('Cybersecurity Analyst', 'On-site', 'Full-time', 90000, 'Protect systems and networks from cyber threats', 'Security, Risk Assessment, Incident Response'),
('Data Analyst', 'Remote', 'Full-time', 80000, 'Analyze data and generate business insights', 'Python, SQL, Tableau'),
('Data Scientist', 'On-site', 'Full-time', 95000, 'Use data analysis and machine learning to derive i', 'Python, R, SQL, Machine Learning'),
('Database Administrator', 'Remote', 'Full-time', 85000, 'Manage and maintain database systems and performan', 'SQL, Database Design, Performance Tuning'),
('DevOps Engineer', 'Remote', 'Full-time', 95000, 'Streamline development and operations through auto', 'Docker, Kubernetes, CI/CD, AWS'),
('Digital Marketer', 'On-site', 'Full-time', 65000, 'Design and implement online marketing campaigns', 'Google Ads, Analytics, SEO'),
('End Developer', 'Remote', 'Full-time', 75000, 'Responsible for building the front-end of web appl', 'HTML, CSS, JavaScript, Vue.js'),
('Frontend Developer', 'Remote', 'Full-time', 70000, 'Create visually appealing and user-friendly web in', 'HTML, CSS, JavaScript, React'),
('Game Developer', 'Remote', 'Full-time', 80000, 'Design and develop video games across platforms', 'Unity, C#, Game Design, 3D Modeling'),
('Graphic Designer', 'Remote', 'Part-time', 40000, 'Create visual concepts to communicate ideas', 'Adobe Photoshop, Illustrator, Branding'),
('HR Manager', 'On-site', 'Full-time', 80000, 'Manage recruitment, training, and employee relatio', 'Recruitment, Employee Relations, HR Policies'),
('Marketing Coordinator', 'On-site', 'Part-time', 40000, 'Coordinate marketing campaigns and social media co', 'SEO, Content Writing, Analytics'),
('Mobile App Developer', 'Remote', 'Full-time', 90000, 'Develop mobile applications for iOS and Android', 'Swift, Kotlin, Flutter, API Integration'),
('Network Engineer', 'On-site', 'Full-time', 80000, 'Design, implement, and manage network systems', 'Networking, Cisco, Firewall, Troubleshooting'),
('Product Manager', 'On-site', 'Full-time', 100000, 'Oversee product development from conception to lau', 'Agile, Market Research, Communication, Leadership'),
('Sales Executive', 'On-site', 'Full-time', 60000, 'Drive sales and manage client relationships', 'Sales Strategy, Negotiation, CRM, Communication'),
('Salesforce Developer', 'Remote', 'Full-time', 95000, 'Develop custom solutions on the Salesforce platfor', 'Salesforce, Apex, Visualforce, Lightning'),
('SEO Specialist', 'Remote', 'Part-time', 50000, 'Optimize website content to rank higher on search ', 'SEO, Google Analytics, Keyword Research'),
('Software Developer', 'Remote', 'Full-time', 70000, 'Develop and maintain web applications', 'JavaScript, React, Node.js'),
('System Administrator', 'On-site', 'Full-time', 75000, 'Manage and maintain IT systems and servers', 'Windows Server, Linux, Networking, Security'),
('Technical Writer', 'On-site', 'Full-time', 65000, 'Create user manuals and documentation for products', 'Technical Writing, Communication, Attention to Det'),
('UX/UI Designer', 'On-site', 'Full-time', 85000, 'Design user interfaces for web and mobile apps', 'Figma, Adobe XD, HTML/CSS');

-- --------------------------------------------------------

--
-- Table structure for table `sdeveloper`
--

CREATE TABLE `sdeveloper` (
  `NIC` int(20) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Previous_Experience` varchar(50) NOT NULL,
  `GPA` int(20) NOT NULL,
  `Timescale` varchar(20) NOT NULL,
  `Desition` varchar(50) NOT NULL,
  `Explanation` varchar(50) NOT NULL,
  `Reason_for_intern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdeveloper`
--

INSERT INTO `sdeveloper` (`NIC`, `Degree`, `Previous_Experience`, `GPA`, `Timescale`, `Desition`, `Explanation`, `Reason_for_intern`) VALUES
(34578347, 'Associate Degree in Computer Science', 'Built a game in Python\r\n', 3, 'Immediately', 'Yes', 'Yes', 'To learn from industry professionals'),
(36437468, 'Bachelor of Science in Computer Science', 'Developed a mobile app for local businesses;', 4, ' 2 weeks', 'Yes', 'Yes', ' To gain real-world experience'),
(74375983, 'Diploma in Information Technology', 'Created a chatbot for customer support\r\n', 3, ' in 2 weeks', 'Yes', 'Yes', 'To build my skills.\r\n'),
(83487549, 'Bachelor of Engineering', 'Worked on a data analysis project', 4, ' in 2 weeks', 'Yes', 'Yes', 'Passion for technology and innovation\r\n'),
(84758437, 'Bachelor of Information Technology', 'Created a website for a charity\r\n', 4, ' Immediately', 'Yes', 'Yes', 'To learn from industry professionals');

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
(23, 'chalanisaumya@test.com', '07189756878', '200854376756', '2', '2', 'HNB', 'kavya JTHJ', 2147483647, '2022-08-13', 244),
(24, 'pranamaherath@gmail.com', '0775198549', '200228603745', '3', '2', 'COMERSIAL', 'herath  HMBP', 2147483647, '2023-02-02', 345);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, '0', 12345),
(2, 'kassa', 12345),
(3, 'bupika', 12),
(4, 'sandy', 1212),
(5, 'sandy', 12345),
(6, 'apple', 12345),
(7, 'nira123', 123),
(8, 'nira123', 123),
(9, 'bupika', 1111);

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
(35, 'Saranga Disasekara', 'Data Scientist', 'Implemented ML models to improve patient outcomes.', 'Specializing in predictive modeling for healthcare.', 'Data Insights Inc.', 'Full-time', 'Data Scientist', 'Jul 2019', 'Present', 'Analyzed large datasets and created insightful reports for management decisions.', 'M.Sc. in Data Science, MIT', 'Python, R, SQL, Power BI'),
(36, 'Yasith Randika', 'HR Manager', 'Managed HR activities, including payroll, employee relations, and hiring.', 'Skilled in recruitment, payroll, and compliance management.', 'HR Solutions Group', 'Full-time	', 'HR Manager', 'Sep 2015', 'Present', 'Managed end-to-end recruitment processes and improved employee retention through engagement programs', 'B.A. in Human Resources, Stanford', 'HRIS, Communication, Leadership'),
(37, 'Sahan Sathsara', 'Graphic Designer', 'Created visual content for branding campaigns.', 'Focused on digital and print media design.', 'Pixel Design Agency', 'Freelance', 'Graphic Designer', 'May 2018', 'Present', 'Created user personas, wireframes, and prototypes for multiple mobile apps and websites.', 'B.F.A. in Graphic Design, RISD', 'Adobe Illustrator, Photoshop'),
(38, 'Amish Tharanya', 'Project Manage', 'Led project planning, execution, and delivery for enterprise clients.', 'Experienced in managing cross-functional teams for large projects.', 'Venture Projects', 'Full-time', 'Project Manager', 'Feb 2020', 'Present', 'Led multiple projects from inception to completion, ensuring timely delivery and meeting client expe', 'PMP Certification, PMI', 'Agile, SCRUM, Leadership');

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
-- Indexes for table `sdeveloper`
--
ALTER TABLE `sdeveloper`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `userpayment`
--
ALTER TABLE `userpayment`
  ADD PRIMARY KEY (`trx_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `customercare1`
--
ALTER TABLE `customercare1`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userpayment`
--
ALTER TABLE `userpayment`
  MODIFY `trx_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
