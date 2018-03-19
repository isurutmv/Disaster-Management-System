-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 06:26 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`) VALUES
('Isuru', 'isurutmv@gmail.com', 'nsbm@123');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `ID` int(11) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Number_of_death` int(11) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Gross_Damage` double NOT NULL,
  `Approved_By` varchar(255) NOT NULL,
  `lat` float DEFAULT NULL,
  `lot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`ID`, `User_ID`, `Type`, `Date_Time`, `Location`, `Number_of_death`, `Photos`, `Gross_Damage`, `Approved_By`, `lat`, `lot`) VALUES
(2, '58', 'Vehical', '2017-05-03 00:00:00', 'Colombo', 2, '', 50000, 'tharaka', NULL, NULL),
(4, '6', 'Vehical', '2017-05-03 00:00:00', 'gampaha', 6, '', 50000, '', 6.28472, 80.2408);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ID`, `Name`, `NIC`, `Telephone`, `Email`, `Password`, `Photos`) VALUES
(1, 'Isuru Udayanga', '970702598V', 770599873, 'isurutmv@gmail.com', 'nsbm@123', ''),
(3, 'chamath', '970702597V', 770599874, 'chamath@123.com', '123@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `pending_incident`
--

CREATE TABLE `pending_incident` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Date_Time` date NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Number_of_death` int(11) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Gross_Damage` double NOT NULL,
  `lat` float DEFAULT NULL,
  `lon` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rejected`
--

CREATE TABLE `rejected` (
  `ID` int(11) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Number_of_death` int(11) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Gross_Damage` int(11) NOT NULL,
  `Rejected_By` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `lat` float DEFAULT NULL,
  `lot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejected`
--

INSERT INTO `rejected` (`ID`, `User_ID`, `Type`, `Date_Time`, `Location`, `Number_of_death`, `Photos`, `Gross_Damage`, `Rejected_By`, `Comments`, `lat`, `lot`) VALUES
(3, '6', 'Vehical', '2017-05-03 00:00:00', 'Panadura', 3, '', 60000, 'pamoda', 'invalid data', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Name`, `NIC`, `Telephone`, `Email`, `Password`, `Location`, `Designation`) VALUES
(1, 'Isuru Udayanga', '970702598V', 770599873, 'isurutmv@gmail.com', 'nsbm@123', '', ''),
(2, 'chamath', '970702597V', 770599874, 'chamath@123.com', '123456', 'gampaha', 'gramasewaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pending_incident`
--
ALTER TABLE `pending_incident`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rejected`
--
ALTER TABLE `rejected`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_incident`
--
ALTER TABLE `pending_incident`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
