-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 09:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `Sender` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`Sender`, `Receiver`, `Amount`) VALUES
('Hariprasath', 'Bharathi', 200),
('Dinesh', 'karthik', 500),
('Mohan', 'Naresh', 700),
('Nirmal', 'Naveen', 1000),
('Vishnu', 'Sasi', 2000),
('Vishnu', 'Hariprasath', 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email_id`, `Amount`) VALUES
('Bharathi', 'bharu@gmail.com', 50000),
('Dinesh', 'dinesh@gmail.com', 15000),
('Hariprasath', 'hari301@gmail.com', 10000),
('Karthik', 'karthi19@gmail.com', 40000),
('Mohan', 'momo115@gmail.com', 5000),
('Naresh', 'naresh21@gmail.com', 20000),
('Naveen', 'naveen001@gmail.com', 30000),
('Nirmal', 'nir0001@gmail.com', 15000),
('Sasi', 'sasidd@gmail.com', 20000),
('Vishnu', 'vishnu113@gmail.com', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
