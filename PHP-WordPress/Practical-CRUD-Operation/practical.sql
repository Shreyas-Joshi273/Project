-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `number`) VALUES
(1, '', '', '', ''),
(2, 'Shreyas B', 'Joshi', 'shreyasjoshi273@gmail.com', '2363652562'),
(3, 'Hemal', 'Joshi', 'hemal000@gmail.com', '4152636525'),
(4, 'Sagar ', 'Joshi', 'sagar1212@gmail.com', '2121545421'),
(5, 'Sweta', 'Joshi', 'sweta8500@gmail.com', '5698563256'),
(6, 'Kaushal', 'Joshi', 'kaushal458@gmail.com', '0321456987'),
(7, 'Aaditya', 'Mehta', 'aaditya89@gmail.com', '2589631478'),
(8, 'Meera', 'Mehta', 'meera55@gmail.com', '3654569871'),
(10, 'Bhavisha', 'Joshi', 'bhavisha41@gmail.com', '4125636525'),
(11, 'Hardik', 'May', 'hardik22@gmail.com', '5522552255'),
(12, 'Pratik', 'Nakum', 'pratik00@gmail.com', '4411441144');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
