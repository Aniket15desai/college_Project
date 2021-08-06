-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 02:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feeding_goa`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(10) NOT NULL,
  `Name` text DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Feedback` varchar(200) DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `I_id` int(10) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Number` bigint(12) DEFAULT NULL,
  `City` text DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Quantity` varchar(20) DEFAULT NULL,
  `Surplus Food` text DEFAULT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`I_id`, `Name`, `Email`, `Number`, `City`, `Address`, `Quantity`, `Surplus Food`, `Date`, `Time`) VALUES
(1, 'Vishal Naik', 'vishalnaik@gmail.com', 7475839847, 'Margoa', 'Panjim Goa', '5kg-10kg', 'Yes', '2021-08-06', '15:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `M_id` int(10) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Number` bigint(12) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Fund` varchar(6) DEFAULT NULL,
  `Date` date DEFAULT current_timestamp(),
  `Time` time(6) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`M_id`, `Name`, `Email`, `Number`, `Address`, `Fund`, `Date`, `Time`) VALUES
(1, 'Aniket Sardesai', 'aniketsardesai54@gmail.com', 7020464331, 'H.no 273 Neha Enterprices New Vaddem, Vasco, Goa', '1001', '2021-08-06', '11:54:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` bigint(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `number`, `password`, `token`, `status`) VALUES
(1, '_aniket1501_', 'aniketsardesai54@gmail.com', 7020464331, '$2y$10$Yoqn9oEnR69qG.Wa1WhWIeZWFyXtzjCkiyltah6VJsW26V5abz1Qm', '6fe4def52c4576b3ec92fbb71e73d8', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`I_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `I_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `M_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
