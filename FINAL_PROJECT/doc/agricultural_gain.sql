-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 10:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricultural_gain`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `GENDER` varchar(20) DEFAULT NULL,
  `CONTACT_NO` varchar(20) DEFAULT NULL,
  `TITLE` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PASSWORD` int(50) DEFAULT NULL,
  `TYPE` varchar(20) DEFAULT NULL,
  `DATE` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `GENDER`, `CONTACT_NO`, `TITLE`, `ADDRESS`, `PASSWORD`, `TYPE`, `DATE`) VALUES
(1, 'user1', 'email1@gmail.com', 'Male', '12345', 'title1', 'address1', 12345, 'admin', '0000-00-00'),
(2, 'user2', 'email2@gmail.com', 'Male', '12345', 'title1', 'address2', 12345, 'agriculturist', '0000-00-00'),
(3, 'user3', 'email3@gmail.com', 'Female', '12345', 'title2', 'address3', 12345, 'agriculturist', '2022-08-06'),
(4, 'user4', 'email4@gmail.com', 'Male', '12345', 'title2', 'address4', 12345, 'farmer', '2022-08-06'),
(5, 'user5', 'email5@gmail.com', 'Female', '12345', 'title2', 'address5', 12345, 'farmer', '2022-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
