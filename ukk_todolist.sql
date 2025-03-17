-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 05:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `status` enum('Belum Selesai','Selesai') NOT NULL,
  `priority` enum('Rendah','Sedang','Tinggi') NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL,
  `detail` enum('Added','Edited','Deleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `task_name`, `status`, `priority`, `due_date`, `due_time`, `detail`) VALUES
(1, 'UKK', 'Belum Selesai', 'Rendah', '2025-03-17', '09:09:52', 'Added'),
(2, 'UKK', 'Selesai', 'Rendah', '2025-03-17', '09:11:34', 'Edited'),
(3, 'UKK', 'Selesai', 'Rendah', '2025-03-17', '09:11:39', 'Deleted'),
(4, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '09:12:50', 'Added'),
(5, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '09:23:32', 'Edited'),
(6, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '09:23:35', 'Edited'),
(7, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '09:34:20', 'Edited'),
(8, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '09:34:24', 'Edited'),
(9, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '09:34:24', 'Edited'),
(10, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '09:34:24', 'Edited'),
(11, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '09:34:24', 'Edited'),
(12, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '09:34:24', 'Edited'),
(13, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '09:34:25', 'Edited'),
(14, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '10:01:11', 'Edited'),
(15, 'Tes', 'Selesai', 'Rendah', '2025-03-17', '10:01:12', 'Edited'),
(16, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '10:08:38', 'Edited'),
(17, 'Tes', 'Belum Selesai', 'Rendah', '2025-03-17', '10:08:43', 'Deleted'),
(18, 'UKK', 'Belum Selesai', 'Rendah', '2025-03-17', '10:10:25', 'Added'),
(19, 'UKK', 'Selesai', 'Rendah', '2025-03-17', '10:10:34', 'Edited');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `status` enum('Belum Selesai','Selesai') NOT NULL,
  `priority` enum('Rendah','Sedang','Tinggi') NOT NULL,
  `due_date` date NOT NULL,
  `due_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `status`, `priority`, `due_date`, `due_time`) VALUES
(3, 'UKK', 'Selesai', 'Rendah', '2025-03-17', '10:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
