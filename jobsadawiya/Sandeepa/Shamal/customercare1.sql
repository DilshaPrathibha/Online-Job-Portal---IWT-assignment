-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 11:06 AM
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
-- Database: `intern`
--

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
(7, 'Jagath', 'Jagath@gmail.com', '98/7, Kappetipola road, Badull', '0774365756', 'Bsc.(hons) in Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customercare1`
--
ALTER TABLE `customercare1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customercare1`
--
ALTER TABLE `customercare1`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
