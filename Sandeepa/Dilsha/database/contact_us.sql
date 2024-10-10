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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
