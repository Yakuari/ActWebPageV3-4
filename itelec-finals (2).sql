-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 04:40 AM
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
-- Database: `itelec-finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE `email_config` (
  `id` int(145) NOT NULL,
  `email` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`id`, `email`, `password`, `create_at`, `update_at`) VALUES
(1, 'dominguezstephen01@gmail.com', 'dbjt hnsz vpzo zvei', '2024-11-24 03:06:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_uid` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_role` enum('manager','user','admin') NOT NULL,
  `user_amount` int(11) NOT NULL,
  `user_month` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_uid`, `user_pass`, `user_email`, `user_role`, `user_amount`, `user_month`, `created_at`, `expire_at`, `status`) VALUES
(4, 'jayson', '$2y$10$gy1Z5vqRaU49hY01191WUOSXJtrEKqvc1LKvv5trAeEAq55luUyaW', 'dominguezstephen01@gmail.com', 'admin', 16000, '12', '2024-12-04 10:07:47', '2025-11-29 03:12:34', NULL),
(15, 'bagnit', '$2y$10$dbMdq26yn6mmhikUfOwD1.uo6DHQC5PctFHRfCqKs6gBkaChzbqKK', 'wrenchnerbangit@gmail.com', 'user', 1500, '1', '2024-12-04 14:13:35', '2025-01-04 04:50:09', 'accepted'),
(28, 'stephen', '$2y$10$BcpJIy4I/0MW3TsbTP5T0ulAFz1koabOuql/z683T58mwhiUQlfWC', 'dominguezstephen6@gmail.com', 'user', 1500, '1', '2024-12-05 12:06:28', '2025-01-04 05:06:48', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `log_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `action` tinyint(1) NOT NULL,
  `performed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`log_id`, `user_id`, `action`, `performed_at`) VALUES
(1, 4, 1, '2024-12-04 10:12:34'),
(12, 15, 0, '2024-12-04 14:14:23'),
(13, 15, 0, '2024-12-04 14:14:25'),
(91, 15, 0, '2024-12-05 11:50:09'),
(92, 28, 0, '2024-12-05 12:06:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `log_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD CONSTRAINT `user_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
