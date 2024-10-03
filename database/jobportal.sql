-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 01:15 AM
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
(6, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 22:10:04', 'responded'),
(20, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 22:09:53', 'responded'),
(21, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 22:21:06', 'responded'),
(22, 'sa', 'dtest@gmail.com', '$0775556644899', 'mes ssage and the ', '2024-10-03 23:03:47', 'pending'),
(24, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 21:46:40', 'responded'),
(26, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 21:55:19', 'responded'),
(28, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 22:04:32', 'responded'),
(29, 'sa', 'dtest@gmail.com', '$0775556644899', 'dscsdvc', '2024-10-03 22:10:09', 'responded'),
(30, 'sa', 'dtest@gmail.com', '$0775556644899', 'message', '2024-10-03 22:10:10', 'responded'),
(32, 'testd dd testdd', 'testdd@gg.com', 'dss', 'sdc', '2024-10-03 22:23:25', 'pending'),
(33, 'upupupup 33', 'testdd@gg.com', 'dss', 'sdc', '2024-10-03 22:10:14', 'pending'),
(36, 'testd dd testdd', 'testdd@gg.com', 'fdb', 'fdb', '2024-10-03 22:21:10', 'pending'),
(37, 'testd dd testdd', 'testdd@gg.com', 'sdv', 'sdvh', '2024-10-03 19:48:10', 'pending'),
(39, 'testd dd testdd', 'testdd@gg.com', 'dsc', 'sdc', '2024-10-03 17:13:54', 'pending'),
(41, 'testd dd testdd', 'testdd@gg.com', 'sdv', 'dsv', '2024-10-03 17:14:16', 'pending'),
(43, 'testd dd testdd', 'testdd@gg.com', 've', 'erv', '2024-10-03 22:20:57', 'responded'),
(44, 'testd dd testdd', 'testdd@gg.com', 'fdb', 'bfd', '2024-10-03 17:15:10', 'pending'),
(45, 'testd dd testdd', 'testdd@gg.com', 'fdb', 'bfd', '2024-10-03 17:15:15', 'pending'),
(46, 'testd dd testdd', 'testdd@gg.com', 'fdb', 'bfd', '2024-10-03 17:15:27', 'pending'),
(47, 'testd dd testdd', 'testdd@gg.com', 'fdb', 'kk', '2024-10-03 17:50:39', 'pending'),
(50, 'testd dd testdd', 'testdd@gg.com', 'fgbf', 'fgb', '2024-10-03 17:16:10', 'pending'),
(51, 'testd dd testdd', 'testdd@gg.com', 'erg', 'erg', '2024-10-03 21:50:50', 'responded');

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
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
