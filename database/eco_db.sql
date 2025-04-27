-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:25 AM
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
-- Database: `eco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `queryinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `queryinfo`) VALUES
(5, 'Dilini Amalsha', 'D@gmail.com', 'Can I have some previous work images, videos or anything');

-- --------------------------------------------------------

--
-- Table structure for table `officer_form`
--

CREATE TABLE `officer_form` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `cvv` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer_form`
--

INSERT INTO `officer_form` (`Id`, `name`, `contactnumber`, `package`, `price`, `cardnumber`, `expirydate`, `cvv`) VALUES
(2029, 'Yohan Ranasinghe', '0774709455', 'platinum', '400000', '4784-4587-4521', '02/28', 847),
(2030, 'Amaani', '0812456598', 'silver', '200000', '1457-4857-4875', '01/29', 485),
(2031, 'Razool', '08123795685', 'gold', '300000', '7451-4852-4785', '05/25', 485),
(2032, 'Avishka Pawan', '0742153254', 'bronze', '150000', '4745-4857-4512', '01/24', 485);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `queryinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `address`, `phonenumber`, `email`, `budget`, `queryinfo`) VALUES
(35, 'Kanchi Walasmulla', 'Ampitiya, Kandy', '07415214154', 'Kanchi@gmail.com', 'Yes. Rs. 78000 ', 'Please contact me for more Information');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `officer_form`
--
ALTER TABLE `officer_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `officer_form`
--
ALTER TABLE `officer_form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2033;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
