-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 10:32 PM
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
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(200) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_age` int(200) NOT NULL,
  `p_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `doc_name`, `p_name`, `p_age`, `p_description`) VALUES
(1, 'د. علاء', 'احمد', 20, 'الم مفاصل'),
(2, 'د. محمد ثائر', 'قاسم', 20, 'مريض سكري'),
(3, 'د. محمد ثائر', 'قاسم', 20, 'مفاصل'),
(4, 'د. علاء عبدالحسين', 'عمار', 75, 'الم بالمفاصل'),
(5, 'د. محمد ثائر', 'امير', 66, 'صداع والم بالمفاصل'),
(6, 'د. علاء عبدالحسين', 'امير', 66, 'صداع والم بالمفاصل'),
(7, 'د. محمد ثائر', 'علي طالب', 26, 'الام بالظهر والركبة');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`, `location`, `time`) VALUES
(1, 'د. علاء عبدالحسين', 'طب اطفال', 'شارع 60', '4:00 - 6:30'),
(2, 'د. محمد ثائر', 'انف واذن وحنجرة', 'شارع 40', '3:00 - 7:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
