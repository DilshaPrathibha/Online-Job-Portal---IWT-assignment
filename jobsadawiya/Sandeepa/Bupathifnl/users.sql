-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 03:24 PM
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
-- Database: `userdata`
--

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
(8, 'ishara', 'herath', 'herath12', 23, 'anuradapura', '0775435456', 'anu12', 'job seeker', 0, 'ishara@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
