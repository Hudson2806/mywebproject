-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_Name` varchar(25) NOT NULL,
  `Email_id` varchar(35) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Mobile_No` varchar(10) DEFAULT '0',
  `First_Name` varchar(30) DEFAULT 'None',
  `Last_Name` varchar(30) DEFAULT 'None',
  `DOB` date NOT NULL,
  `Country` varchar(30) DEFAULT 'None',
  `State` varchar(30) DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_Name`, `Email_id`, `Password`, `Mobile_No`, `First_Name`, `Last_Name`, `DOB`, `Country`, `State`) VALUES
('abc', 'abc@123.com', 'abc123', '9876543210', 'Henry', 'Jackson', '2004-04-06', 'India', 'Kerala'),
('dsa', 'safd@dsf', '123', '8790653421', 'Peter', 'son', '2001-11-16', 'India', 'Karnataka'),
('hudson', 'hudson@gmail.com', 'nosduh', '7689054321', 'Hudson', 'Issac', '2002-08-15', 'India', 'Tamil Nadu'),
('HUDSON143', 'hudsonissac222@gmail.com', 'hudisssonac341', '6382521090', 'Hudson', 'Issac', '1997-06-20', 'India', 'Karnataka'),
('Hudson2806', 'hudson2806@gmail', '2806', '9805643216', 'Issac', 'Hudson', '2000-08-01', 'India', 'Tamil Nadu'),
('HUDSON333', 'hudsonissac143@gmail.com', 'Hudson54321', '9865432111', 'Hudson', 'Issac', '1998-08-05', 'India', 'Tamil Nadu'),
('Hudson54321', 'hudsonissac432@gmail.com', 'hUdSOn^12345', '9871056738', 'Hudson', 'Issac', '1995-12-24', 'India', 'Andhra Pradesh'),
('Issac619', 'hudsonissac555@gmail.com', 'ISsac*916', '6754321980', 'Issac', 'Hudson', '2000-02-29', 'India', 'Goa'),
('ISSAC9520', 'hudsonissac619@gmail.com', 'Issac#0259', '7337801320', 'Issac', 'Hudson', '1999-02-14', 'India', 'Kerala'),
('RandyRaja', 'rr@gmail.com', '135rr', '9021784365', 'Randy', 'Raja', '1995-05-24', 'India', 'Telungana'),
('ROLEX', 'rx100@gmail.com', '111111', '7339378013', 'Rolex', 'Roman', '2022-08-05', 'India', 'Tamil Nadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Email id` (`Email_id`),
  ADD UNIQUE KEY `User Name` (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
