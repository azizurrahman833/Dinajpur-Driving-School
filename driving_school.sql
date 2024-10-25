-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 07:08 PM
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
-- Database: `driving_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `entryform`
--

CREATE TABLE `entryform` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` varchar(7) NOT NULL,
  `training_type` varchar(20) NOT NULL,
  `received` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entryform`
--

INSERT INTO `entryform` (`id`, `name`, `gender`, `contact`, `email`, `address`, `age`, `training_type`, `received`) VALUES
(23, 'tushar', 'male', '01538198535', 'tushar@gmail.com', 'ertfrtgrtyy', '41', 'bike', 'received'),
(24, 'tushar', 'male', '01538198535', 'tushar@gmail.com', 'esfrrfhjk', '41', 'heavy_vehicle', 'not_received'),
(25, 'tushar', 'male', '01538198535', 'tushar@gmail.com', 'tfgyuhjkl', '41', 'car', 'not_received');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_name`) VALUES
(51, 'photo/young-black-car-mechanic-using-computer-with-his-manager-auto-repair-shop.jpg'),
(52, 'photo/woman-male-driving-instructor-during-driving-test.jpg'),
(53, 'photo/woman-male-driving-instructor-during-driving-test (1).jpg'),
(54, 'photo/woman-learning-drive-car-going-reverse.jpg'),
(55, 'photo/woman-facing-camera-doing-peace-sign.jpg'),
(56, 'photo/woman-drivers-hands-car-steering-wheel.jpg'),
(57, 'photo/person-taking-driver-s-license-exam.jpg'),
(58, 'photo/person-taking-driver-s-license-exam (1).jpg'),
(59, 'photo/mechanic-handing-key-customer.jpg'),
(60, 'photo/female-holds-key-while-sits-luxury-automobile-glad-recieve-expensive-present-from-relatives-focus-keys.jpg'),
(61, 'photo/car-germany-map-with-pinpoint-line.jpg'),
(62, 'photo/5739253.jpg'),
(63, 'photo/person-taking-driver-s-license-exam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_type` varchar(50) NOT NULL DEFAULT 'Normal User',
  `u_password` varchar(20) NOT NULL DEFAULT 'password',
  `u_permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`u_name`, `u_email`, `u_type`, `u_password`, `u_permission`) VALUES
('a_maruf', 'a_maruf@gmail.com', 'authority_user', 'a_maruf', 'permitted'),
('a_tushar', 'a_tushar@gmail.com', 'authority_user', 'a_tushar', 'permitted'),
('maruf', 'maruf@gmail.com', 'normal_user', 'maruf', 'permitted'),
('tushar', 'tushar@gmail.com', 'normal_user', 'tushar', 'permitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entryform`
--
ALTER TABLE `entryform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`u_email`),
  ADD UNIQUE KEY `u_password` (`u_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entryform`
--
ALTER TABLE `entryform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
