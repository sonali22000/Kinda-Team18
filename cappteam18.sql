-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 22, 2023 at 01:33 PM
-- Server version: 8.0.32
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cappteam18`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentid` int NOT NULL,
  `programid` int NOT NULL,
  `kidsid` int NOT NULL,
  `enrollmentdate` date NOT NULL,
  `academicyear` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kidsinfo`
--

CREATE TABLE `kidsinfo` (
  `kidsid` int NOT NULL,
  `kidsname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `parentsname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` int NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kidsinfo`
--

INSERT INTO `kidsinfo` (`kidsid`, `kidsname`, `parentsname`, `dob`, `phone`, `email`, `address`) VALUES
(1, 'test', 'test', '2023-02-15', 3454543, 'werwerw', ''),
(2, 'pari maghrebi', 'neda maghrebi', '2018-02-01', 113962868, 'maghrebi.n655@gmail.com', 'tonekabon'),
(3, 'fff', 'mansour', '2023-02-08', 4556, 'maghrebi.n655@gmail.com', 'ferdosi avenue.salmanharati alley. Shahrak baran. Sakhteman arain. Vahed yek');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `programid` int NOT NULL,
  `pname` text NOT NULL,
  `description` text NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `capacity` int NOT NULL,
  `kidsid` int NOT NULL,
  `teid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacherscareer`
--

CREATE TABLE `teacherscareer` (
  `refno` int NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` text NOT NULL,
  `postalcode` int NOT NULL,
  `contactno` int NOT NULL,
  `emailid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachersinfo`
--

CREATE TABLE `teachersinfo` (
  `teid` int NOT NULL,
  `tname` text NOT NULL,
  `phone` int NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`teid`, `tname`, `phone`, `email`, `address`, `bio`) VALUES
(1, 'tommy', 3454543, 'maghrebi.123@gamil.com', 'shahsavar', 'first grade teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentid`),
  ADD KEY `programid` (`programid`),
  ADD KEY `kidsid` (`kidsid`);

--
-- Indexes for table `kidsinfo`
--
ALTER TABLE `kidsinfo`
  ADD PRIMARY KEY (`kidsid`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`programid`),
  ADD KEY `kidsid` (`kidsid`),
  ADD KEY `teid` (`teid`);

--
-- Indexes for table `teacherscareer`
--
ALTER TABLE `teacherscareer`
  ADD PRIMARY KEY (`refno`);

--
-- Indexes for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  ADD PRIMARY KEY (`teid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kidsinfo`
--
ALTER TABLE `kidsinfo`
  MODIFY `kidsid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `programid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teacherscareer`
--
ALTER TABLE `teacherscareer`
  MODIFY `refno` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  MODIFY `teid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`programid`) REFERENCES `program` (`programid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`kidsid`) REFERENCES `kidsinfo` (`kidsid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`teid`) REFERENCES `teachersinfo` (`teid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`kidsid`) REFERENCES `kidsinfo` (`kidsid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
