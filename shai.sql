-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 09:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `joined` date NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `DateofBirth`, `Gender`, `joined`, `Designation`, `email`, `password`) VALUES
(1, 'Mohamed Musha', '1990-12-30', 'Male', '2017-04-01', 'Administrator', 'Musha971@gmail.com', '123456789'),
(22, 'Azzy', '0000-00-00', 'Select..', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ID`, `Name`, `date`, `time`, `address`, `Package`) VALUES
(10, 'Aslam', '2017-07-15', '21:00', '31, Sangamt', 'Weddings');

-- --------------------------------------------------------

--
-- Table structure for table `confirmbooking`
--

CREATE TABLE `confirmbooking` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `Package` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmbooking`
--

INSERT INTO `confirmbooking` (`ID`, `Name`, `address`, `date`, `Package`, `time`) VALUES
(2, 'aslam', '31, ibjll', '2017-07-08', 'Weddings', '03:05'),
(3, 'salam', 'sadasdasdasdasdasd', '2017-07-16', 'Birthdays ', '05:06'),
(7, 'Raju', 'asdasdasdasd', '2017-07-19', 'Weddings', '03:03');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `User` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Name`, `Email`, `Tel`, `User`, `password`) VALUES
(5, 'Aslam', 'aslam971', '0112343327', 'aslam', '0112343327'),
(8, 'Azzy', 'azzy', '0112343327', 'Azzy_aslam', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `Name`, `Email`, `Mes`) VALUES
(10, 'Azzy', 'azzy123@gmail.com', 'i would like to know what is happening around u??');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `item` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`Name`, `Date`, `item`, `ID`) VALUES
('Aslam', '2017-07-04', 'LED MUSIC LASER,LED BEAMS,BUBBLE MACHINE,LED SCANNER,SMOKE,LASER LIGHTS', 6),
('Aslam', '2017-07-04', 'LED MUSIC LASER,LED BEAMS,BUBBLE MACHINE,LED SCANNER,SMOKE,LASER LIGHTS', 7),
('Aslam', '2017-07-14', 'LED BEAMS,BUBBLE MACHINE,MOVING HEADS,LED SCANNER,SMOKE,LASER LIGHTS,SOUND LED LIGHT', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `confirmbooking`
--
ALTER TABLE `confirmbooking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `confirmbooking`
--
ALTER TABLE `confirmbooking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
