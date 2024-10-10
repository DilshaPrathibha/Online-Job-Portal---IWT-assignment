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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userpayment`
--
ALTER TABLE `userpayment`
  ADD PRIMARY KEY (`trx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userpayment`
--
ALTER TABLE `userpayment`
  MODIFY `trx_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
