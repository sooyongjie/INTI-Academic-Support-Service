-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 08:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inti-academic-support-services`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notifID` int(6) NOT NULL,
  `notifBody` varchar(99) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(5) NOT NULL,
  `amount` int(2) NOT NULL,
  `url` varchar(99) DEFAULT NULL,
  `reqID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payID`, `amount`, `url`, `reqID`) VALUES
(10001, 1, NULL, 10001);

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `progID` int(5) NOT NULL,
  `progName` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`progID`, `progName`) VALUES
(10001, 'University of Wollongong');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `reqID` int(5) NOT NULL,
  `subCount` int(5) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL,
  `uid` int(5) NOT NULL,
  `payID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`reqID`, `subCount`, `datetime`, `status`, `uid`, `payID`) VALUES
(10001, 1, '2021-02-25 12:35:13', 1, 10001, NULL),
(10002, 2, '2021-03-11 15:50:20', 1, 10001, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `request_subjects`
--

CREATE TABLE `request_subjects` (
  `rsID` int(5) NOT NULL,
  `progID` int(5) NOT NULL,
  `subID` varchar(10) NOT NULL,
  `sessID` int(5) NOT NULL,
  `reqID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_subjects`
--

INSERT INTO `request_subjects` (`rsID`, `progID`, `subID`, `sessID`, `reqID`) VALUES
(10001, 10001, 'CSIT321', 10001, 10001),
(10002, 10001, 'CSIT321', 10001, 10002),
(10003, 10001, 'CSIT321', 10001, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sessID` int(5) NOT NULL,
  `sessName` varchar(10) NOT NULL,
  `subID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sessID`, `sessName`, `subID`) VALUES
(10001, 'July 2019', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subID` varchar(10) NOT NULL,
  `subName` varchar(99) NOT NULL,
  `progID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subID`, `subName`, `progID`) VALUES
('CSIT321', 'Project', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `temp` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `fullname`, `password`, `temp`) VALUES
(10001, 'sooyongjie', 'Soo Yong Jie', '351e229dc7063eee0a898d74b0a935d7', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notifID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`progID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`reqID`);

--
-- Indexes for table `request_subjects`
--
ALTER TABLE `request_subjects`
  ADD PRIMARY KEY (`rsID`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sessID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notifID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `progID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `reqID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT for table `request_subjects`
--
ALTER TABLE `request_subjects`
  MODIFY `rsID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `sessID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
