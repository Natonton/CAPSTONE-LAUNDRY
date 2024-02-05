-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 02:20 PM
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
-- Database: `capstonemylaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `cnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `fname`, `lname`, `cnumber`) VALUES
(1, 'admin@gmail.com', 'Admin_123', 'Admin', 'One', '09876541');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `delivery_opt` varchar(255) NOT NULL,
  `drop_schedule` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `s_instruction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ammount` int(255) NOT NULL,
  `refid` varchar(255) NOT NULL,
  `done_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fname`, `lname`, `p_number`, `address`, `email`, `delivery_opt`, `drop_schedule`, `pos`, `s_instruction`, `status`, `created_at`, `remarks`, `ammount`, `refid`, `done_date`) VALUES
(44, 'Jakob Dylan', 'Cordero', '09284260195', 'Mandu', 'jakob@gmail.com', 'PickUp', '14-03-2023', 'SDO', 'ok', 'Cancel', '2023-03-28 20:39:25', '---', 0, ' ', '2023-03-28 05:40:26'),
(45, 'Jakob Dylan', 'Cordero', '09284260195', 'Mandu', 'jakob@gmail.com', 'Door2Door', '27-03-2023', 'P1', 'eyyy', 'Declined', '2023-03-28 20:42:43', '---', 0, '6422e0e63abe6', '2023-03-28 05:43:18'),
(46, 'Jakob Dylan', 'Cordero', '09284260195', 'Mandu', 'jakob@gmail.com', 'PickUp', '21-03-2023', 'SDO', 'ayooo', 'Done', '2023-03-28 20:44:13', '---', 500, '6422e1473726d', '2023-03-28 21:00:21'),
(47, 'Aivinlee', 'Gritan', '09686561509', 'Ames', 'gritan@gmail.com', 'PickUp', '13-03-2023', 'SDO', 'hihi', 'Done', '2023-03-28 21:21:13', '---', 200, '6422e9dde6438', '2023-03-28 21:22:38'),
(48, 'Aivinlee', 'Gritan', '09686561509', 'Ames', 'gritan@gmail.com', 'Door2Door', '21-03-2023', 'P1', 'asdffgke', 'Done', '2023-03-29 07:47:36', '---', 100, '64239ea63a8c4', '2023-03-29 10:20:59'),
(49, 'Aivinlee', 'Gritan', '09686561509', 'Ames', 'gritan@gmail.com', 'PickUp', '20-03-2023', 'P3', 'gusto ko hamot', 'Pending', '2023-03-29 10:25:04', '---', 0, ' ', '2023-03-29 10:25:04'),
(50, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'PickUp', '31-03-2023', 'SDO', 'Eyy', 'Done', '2023-03-29 21:05:53', '---', 90, '642439b0ca18c', '2023-03-29 21:14:57'),
(51, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'PickUp', '31-03-2023', 'SDO', 'Agoi', 'Done', '2023-03-29 21:06:21', '---', 200, '642439e9d91f4', '2023-11-25 18:20:57'),
(52, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'Door2Door', '03-03-2023', 'P2', 'Hahaha', 'Pending', '2023-03-29 21:06:59', '---', 0, ' ', '2023-03-29 21:06:59'),
(53, 'John', 'Doe', '09991234', 'Iloilo City', 'jd@gmail.com', 'PickUp', '---', 'SSS', '---', 'Done', '2023-05-27 22:07:47', 'walkin', 200, '64720eb3ac1c4', '2023-05-27 22:07:47'),
(54, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'Door2Door', '26-05-2023', 'P3', '', 'Pending', '2023-05-27 22:20:40', '---', 0, ' ', '2023-05-27 22:20:40'),
(55, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'NO SELECTED', '29-11-2023', 'NO SELECTED', '', 'Done', '2023-11-25 18:20:14', '---', 200, '6561ca6f5d3e9', '2023-11-25 18:21:06'),
(56, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', 'Door2Door', '16-11-2023', 'P1', 'ang puti himo-a blue', 'Done', '2023-11-29 12:24:52', '---', 200, '6566bd9e3eea5', '2023-11-29 12:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'FULLY BOOKED', '#FF0000', '2016-01-01 00:00:00', '2016-01-01 00:00:00'),
(20, 'FULLY BOOKED', '#FF0000', '2016-01-20 00:00:00', '2016-01-24 00:00:00'),
(36, 'FULLY BOOKED', '#FF0000', '2016-01-24 00:00:00', '2016-01-31 00:00:00'),
(37, 'FULLY BOOKED', '#FF0000', '2023-03-13 00:00:00', '2023-03-18 00:00:00'),
(38, 'FULLY BOOKED', '#FF0000', '2023-03-08 00:00:00', '2023-03-10 00:00:00'),
(41, 'FULLY BOOKED', '#FF0000', '2023-05-17 00:00:00', '2023-05-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `p1`
--

CREATE TABLE `p1` (
  `id` int(11) NOT NULL,
  `per_kilo_p1` varchar(255) NOT NULL,
  `min_kilo_p1` varchar(255) NOT NULL,
  `exd_p1` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions_p1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p1`
--

INSERT INTO `p1` (`id`, `per_kilo_p1`, `min_kilo_p1`, `exd_p1`, `status`, `inclusions_p1`) VALUES
(1, '35', '244', '243', 'Unavailable', '');

-- --------------------------------------------------------

--
-- Table structure for table `p2`
--

CREATE TABLE `p2` (
  `id` int(11) NOT NULL,
  `per_kilo_p2` varchar(255) NOT NULL,
  `min_kilo_p2` varchar(255) NOT NULL,
  `exd_p2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions_p2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p2`
--

INSERT INTO `p2` (`id`, `per_kilo_p2`, `min_kilo_p2`, `exd_p2`, `status`, `inclusions_p2`) VALUES
(1, '89', '15', '22', 'Unavailable', '');

-- --------------------------------------------------------

--
-- Table structure for table `p3`
--

CREATE TABLE `p3` (
  `id` int(11) NOT NULL,
  `per_kilo_p3` varchar(255) NOT NULL,
  `min_kilo_p3` varchar(255) NOT NULL,
  `exd_p3` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions_p3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p3`
--

INSERT INTO `p3` (`id`, `per_kilo_p3`, `min_kilo_p3`, `exd_p3`, `status`, `inclusions_p3`) VALUES
(1, '78', '12', '41', 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `p4`
--

CREATE TABLE `p4` (
  `id` int(11) NOT NULL,
  `per_kilo_p4` varchar(255) NOT NULL,
  `min_kilo_p4` varchar(255) NOT NULL,
  `exd_p4` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions_p4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p4`
--

INSERT INTO `p4` (`id`, `per_kilo_p4`, `min_kilo_p4`, `exd_p4`, `status`, `inclusions_p4`) VALUES
(1, '98', '67', '4', 'Unavailable', '');

-- --------------------------------------------------------

--
-- Table structure for table `pnp`
--

CREATE TABLE `pnp` (
  `id` int(255) NOT NULL,
  `per_kilo` varchar(255) NOT NULL,
  `min_kilo` varchar(255) NOT NULL,
  `exd` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pnp`
--

INSERT INTO `pnp` (`id`, `per_kilo`, `min_kilo`, `exd`, `status`, `inclusions`) VALUES
(1, '100', '2', '90', 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `vno` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `spi` varchar(255) NOT NULL,
  `bt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `cno`, `vno`, `user_id`, `spi`, `bt`) VALUES
(1, '+639284260195', '+447520651191', 16, '3f1ef643c0e14ac78c1589953e86dd15', '87e6cc4a2694426ab702dfeb157c48fb'),
(3, '+639166464423', '+447520651023', 17, 'fef2897951064127902b3e50406044fd', 'fa5eb9568444477ba6cc7607de8e6312'),
(4, '+639686561509', '+447520651290', 18, 'f555244d2163447cb6fccd3a20c9c717', '0989df68cf0841ccb2d838ea20700962');

-- --------------------------------------------------------

--
-- Table structure for table `ss`
--

CREATE TABLE `ss` (
  `id` int(100) NOT NULL,
  `per_kilo_ss` varchar(100) NOT NULL,
  `min_kilo_ss` varchar(100) NOT NULL,
  `exd_ss` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inclusions_ss` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ss`
--

INSERT INTO `ss` (`id`, `per_kilo_ss`, `min_kilo_ss`, `exd_ss`, `status`, `inclusions_ss`) VALUES
(1, '12', '12', '93', 'Unavailable', 'Detergent, fabric softener');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fn`, `ln`, `phone`, `address`, `email`, `password`) VALUES
(19, 'Demo', 'Account ', '099999999', 'Transylvania', 'ac@gmail.com', '$2y$10$fuM0dA8ejjns1bU06mHDq.uQauXwLn07qT3jfeCpZpPvGdIk7pJeW'),
(18, 'Aivinlee', 'Gritan', '09686561509', 'Ames', 'gritan@gmail.com', '$2y$10$XN3N7aeLJY8cGGzv.HZ2uu92eH/jUbDGTTxAw8w7lgq0ynjg7n0rG'),
(16, 'Jakob Dylan', 'Cordero', '09284260195', 'Mandu', 'jakob@gmail.com', '$2y$10$v8tT8OOV3nQWzXdWAwHo5.2iNJ68LB19tFN8kpUrz2q4iZAfg1BYG'),
(17, 'Dylan Jakob', 'Celestial', '09166464423', 'Mandu', 'jakob123@gmail.com', '$2y$10$Y6NU7jeMNe8BK5MZec4Z1e2g04WQrlWccE6xABIwnh8dUrqCQzf4u'),
(20, 'asdasd', 'asd', '121', 'asdasd', 'hehe', '$2y$10$1ocBIvantzhNxKWlLXijIeg6jCKT3LePM3bkJmXAWjubOzJTB/Jde'),
(21, 'aaa', 'aaa', '345d', 'sfdgf', 'aa@gmail.com', '$2y$10$v9vRouKBOjpynPu1g8.Lbul.XtbE3HM0qsoHtSlgdnSatD8Ws/ni.'),
(22, 'd', 'd', '13', 'asd', 's@gmail.com', '$2y$10$zpR985xdOe6grckVctZRgeOi5Q/FvViG9j8mdZ7ru.Tmc0z/67zv.'),
(23, 'Lloyd ', 'Doe', '09999999asdasd', 'asd', 'f@gmail.com', '$2y$10$Xko8uLEqRLsTnk7sEybb6.87RrwkUvjRCBI1q/ys1KIQHm5gxODvS'),
(24, 'asdasd', 'asdasdad', '13131', 'dasdasd', 'aaa@gmail.com', '$2y$10$GoKjES6akPYfXp2OwsUcGumapqhrkUmxjHnrhCKdiL8iq2BGutb.K');

-- --------------------------------------------------------

--
-- Table structure for table `walkin`
--

CREATE TABLE `walkin` (
  `id` int(11) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `walkin`
--

INSERT INTO `walkin` (`id`, `fn`, `ln`, `phone`, `address`, `email`) VALUES
(3, 'AIvinlee', 'Gritan', '0921312312', 'Mandurriao Iloilo City', 'gritanaivinlee@gmail.com'),
(4, 'John', 'Doe', '09991234', 'Iloilo City', 'jd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p1`
--
ALTER TABLE `p1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p2`
--
ALTER TABLE `p2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p3`
--
ALTER TABLE `p3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p4`
--
ALTER TABLE `p4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnp`
--
ALTER TABLE `pnp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ss`
--
ALTER TABLE `ss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walkin`
--
ALTER TABLE `walkin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `p1`
--
ALTER TABLE `p1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p2`
--
ALTER TABLE `p2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p3`
--
ALTER TABLE `p3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p4`
--
ALTER TABLE `p4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pnp`
--
ALTER TABLE `pnp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ss`
--
ALTER TABLE `ss`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `walkin`
--
ALTER TABLE `walkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
