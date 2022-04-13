-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group11`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserName` varchar(15) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Contactno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserName`, `Email`, `Password`, `Contactno`) VALUES
('sazzclose', 'sasdasda@sd', 'cat', 713245678),
('sazzcloses', 'sasdasda@sdsa', 'dogsss', 713245678),
('sasasa', 'ushara@gmail.com', 'dddsds', 718891333),
('sasasa', 'ushara@gmail.com', 'sadsad', 718891333),
('sasasas', 'ushara@gmail.com', 'sda', 718891333),
('dfdfdf', 'ushara@gmail.com', 'gfgfgf', 718891333),
('dfdfdf', 'ushara@gmail.com', 'gfgfgf', 718891333),
('sazzz', 'sachiara@gmail.com', 'cats', 718891333),
('sazzz', 'sachiara@gmail.com', 'sddsda', 718891333),
('sazzz', 'sachiara@gmail.com', 'das', 718891333),
('sazzz', 'sachiara@gmail.com', 'sda', 718891333),
('saz', 'ushara@gmail.com', 'sas', 45453),
('sazzclsoee', 'gamersllk11@gmail.com', 'cats', 112822),
('', '', '', 0),
('sazzclsoee', 'dasad@ds', 'sadasdas', 4554544),
('sazzclsoees', 'gamersllk11@gmail.com', 'cats', 88887878),
('', '', '', 0),
('', '', '', 0),
('sazzclsoee', 'sadssad@gmail.com', 'cafsdafsa', 454545454);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Core i3 Processor', 'proc1', 'images/proc-1.png', 20000.00),
(2, 'RTX 3080 12GB GPU', 'gpu1', 'images/gpu-1.png', 30000.00),
(3, 'Asus rog monitor', 'mon1', 'images/monitor-1.png', 10000.00),
(4, 'CORSAIR CV550 POWER SUPPLY', 'psu1', 'images/psup-1.png', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
