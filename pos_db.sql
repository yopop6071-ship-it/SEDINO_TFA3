-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2026 at 01:29 PM
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
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Shiori Novela', 'shiorin@example.com', '09171234567', '2026-09-22 13:27:14'),
(2, 'Koseki Bijou', 'biboo@example.com', '09181234567', '2026-09-22 13:27:14'),
(3, 'Nerissa Ravencroft', 'nerissa@example.com', '09191234567', '2026-09-22 13:27:14'),
(4, 'Fuwawa Abyssgard', 'fuwawa@example.com', '09201234567', '2026-09-22 13:27:14'),
(5, 'Moco Abyssgard', 'mococo@example.com', '09211234567', '2026-09-22 13:27:14'),
(6, 'Wilduard Sedino', 'popoysedino@gmail.com', '0992344523', '2026-10-03 10:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `avatar`, `created_at`) VALUES
(1, 'admin', 'Administrator User', '1791026349_1224966ad6795fbc45b7.jpg', '2026-09-22 13:27:14'),
(2, 'Achi', 'Achichi Mela', '1791026361_2549a40fc5097e97bb28.jpg', '2026-09-22 13:27:14'),
(3, 'Sora', 'Sorashina Sopia', '1791026381_047b6db64a46ce9182de.jpg', '2026-09-22 13:27:14'),
(4, 'Kyo', 'Hyakuto Kyoko', '1791026393_4d193d9a6ef999134d88.jpg', '2026-09-22 13:27:14'),
(5, 'Tsuzu', 'Suzuna Tsuzuri', '1791026405_ae7e01e0a7f78e5818aa.jpg', '2026-09-22 13:27:14'),
(6, 'Chattini', 'Charles Galeon', '1791026470_9698ea2dd36b03c4870b.jpg', '2026-10-03 10:54:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
