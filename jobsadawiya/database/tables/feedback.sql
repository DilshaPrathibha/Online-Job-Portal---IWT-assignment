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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
