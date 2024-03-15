-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 05:50 PM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`name`, `id`) VALUES
('German Shepherd', 9),
('Pug', 10),
('Pitbull', 11),
('Labrador', 12),
('German Shepherd', 13),
('Pug', 14),
('Pitbull', 15),
('Labrador', 16),
('German Shepherd', 17),
('German Shepherd', 18),
('Pug', 19),
('Pitbull', 20),
('Labrador', 21),
('Golden Retriever', 22),
('German Shepherd', 23),
('Pug', 24),
('Pitbull', 25),
('German Shepherd', 26),
('Golden Retriever', 27),
('German Shepherd', 28),
('Pitbull', 29),
('Pug', 30),
('Pitbull', 31),
('Pitbull', 32),
('Pitbull', 33),
('Pitbull', 34),
('Pitbull', 35),
('Pitbull', 36),
('Pitbull', 37),
('Pitbull', 38),
('Pitbull', 39),
('Pitbull', 40),
('Pitbull', 41),
('Pitbull', 42),
('Pitbull', 43),
('Pitbull', 44),
('Pitbull', 45),
('Pitbull', 46),
('Pitbull', 47),
('German Shepherd', 48),
('Labrador', 49),
('Pug', 50);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `price`, `image`) VALUES
(1, 'German Shepherd', '118', 'p1.jpg'),
(2, 'Pug', '118', 'p2.jpg'),
(3, 'Pitbull', '118', 'p3.jpg'),
(4, 'Labrador', '118', 'p4.jpg'),
(5, 'Golden Retriever', '118', 'p5.jpg'),
(6, 'Beagle', '118', 'p6.jpg'),
(7, 'Pomeranian', '118', 'p7.jpg'),
(8, 'Rottweiler', '118', 'p8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
