-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2024 at 01:55 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukbestde_wp438`
--

-- --------------------------------------------------------

--
-- Table structure for table `wpup_bookings`
--

CREATE TABLE `wpup_bookings` (
  `id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `adult` varchar(2) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `kid` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `no_rooms` int(20) DEFAULT NULL,
  `room_number` int(20) DEFAULT NULL,
  `total_charge` int(100) DEFAULT NULL,
  `rate_per_night` int(100) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(30) DEFAULT NULL,
  `room_id` int(30) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wpup_bookings`
--

INSERT INTO `wpup_bookings` (`id`, `booking_date`, `date_start`, `date_end`, `adult`, `kid`, `no_rooms`, `room_number`, `total_charge`, `rate_per_night`, `user_id`, `order_id`, `product_id`, `room_id`, `name`, `email`, `phone`, `created_at`, `status`) VALUES
(1, '2024-04-03', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(2, '2024-04-04', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(3, '2024-04-05', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(4, '2024-04-06', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(5, '2024-04-07', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(6, '2024-04-08', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(7, '2024-04-09', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(8, '2024-04-10', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(9, '2024-04-11', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(10, '2024-04-12', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(11, '2024-04-13', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(12, '2024-04-14', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(13, '2024-04-15', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(14, '2024-04-16', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(15, '2024-04-17', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(16, '2024-04-18', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(17, '2024-04-19', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(18, '2024-04-20', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(19, '2024-04-21', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(20, '2024-04-22', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(21, '2024-04-23', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(22, '2024-04-24', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(23, '2024-04-25', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(24, '2024-04-26', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(25, '2024-04-27', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(26, '2024-04-28', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(27, '2024-04-29', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(28, '2024-04-30', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(29, '2024-05-01', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(30, '2024-05-02', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(31, '2024-05-03', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(32, '2024-05-04', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(33, '2024-05-05', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(34, '2024-05-06', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(35, '2024-05-07', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(36, '2024-05-08', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(37, '2024-05-09', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(38, '2024-05-10', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(39, '2024-05-11', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(40, '2024-05-12', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(41, '2024-05-13', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(42, '2024-05-14', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(43, '2024-05-15', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(44, '2024-05-16', '2024-04-03', '2024-05-16', '2', '1', NULL, 15, 860000, NULL, 1, 102, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:11:48', 'Completed'),
(45, '2024-01-23', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(46, '2024-01-24', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(47, '2024-01-25', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(48, '2024-01-26', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(49, '2024-01-27', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(50, '2024-01-28', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(51, '2024-01-29', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(52, '2024-01-30', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold'),
(53, '2024-01-31', '2024-01-23', '2024-01-31', '2', '1', 2, 15, 480000, NULL, 1, 106, NULL, NULL, 'susheel kumar', 'admin@bhagvadgita.ukbestdeal.com', '8840574997', '2024-01-29 08:16:56', 'On-hold');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wpup_bookings`
--
ALTER TABLE `wpup_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wpup_bookings`
--
ALTER TABLE `wpup_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
