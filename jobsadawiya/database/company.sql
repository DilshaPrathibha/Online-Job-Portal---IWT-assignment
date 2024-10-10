-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 08:39 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
