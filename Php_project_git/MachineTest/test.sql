-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 07:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`Id`, `Name`, `Age`) VALUES
(1, 'Neha', 20),
(2, 'Kajal', 21),
(4, 'Nemansh', 10),
(7, 'Gaurav', 16),
(10, 'Sanskruti', 21),
(23, 'Chaitanya', 28);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `username`, `password`) VALUES
('Divyansh', 'divyansh0303@gmail.com', 'Deva@03', 'divyansh'),
('Kajal', 'kajalv19@gmail.com', 'kajal@19', 'kajal'),
('Neha', 'nehavishwakarma484@gmail.com', 'neha@1', 'neha'),
('Nisha', 'nisha@123', 'nisha@1', 'nisha'),
('sdac', 'mail@mail.com', 'sdac@1', 'sdac'),
('Shri', 'shri@1', 'shri', 'shri'),
('Shri', 'shri0306@gmail.com', 'shri@1', 'shri'),
('shri', 'shri@1', 'shri@3', 'shri'),
('Sujit', 'sujit07@gmail.com', 'sujit@1', 'sujit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
