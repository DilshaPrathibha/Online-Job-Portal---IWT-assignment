-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 07:35 AM
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
(' diploma in computer science', 'AI project', 3, 'anytime', 'yes', 'yes', 'i like your company');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
