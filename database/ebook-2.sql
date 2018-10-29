-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 07:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `AID` int(11) NOT NULL,
  `AName` char(20) DEFAULT NULL,
  `ADescription` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`AID`, `AName`, `ADescription`) VALUES
(1, 'Satyam Mahajan', 'A concise lovable, adorable author known for its writing style');

-- --------------------------------------------------------

--
-- Table structure for table `book genre`
--

CREATE TABLE `book genre` (
  `BISBN` varchar(20) NOT NULL,
  `BGenre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book genre`
--

INSERT INTO `book genre` (`BISBN`, `BGenre`) VALUES
('1234567890', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `book key`
--

CREATE TABLE `book key` (
  `BID` int(9) NOT NULL,
  `BEdition` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book key`
--

INSERT INTO `book key` (`BID`, `BEdition`) VALUES
(1, '1st');

-- --------------------------------------------------------

--
-- Table structure for table `book name`
--

CREATE TABLE `book name` (
  `BID` int(9) NOT NULL,
  `BName` varchar(20) NOT NULL,
  `BISBN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book name`
--

INSERT INTO `book name` (`BID`, `BName`, `BISBN`) VALUES
(1, 'Who Are You?', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `book price`
--

CREATE TABLE `book price` (
  `BName` varchar(20) NOT NULL,
  `BEdition` varchar(20) NOT NULL,
  `BPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book price`
--

INSERT INTO `book price` (`BName`, `BEdition`, `BPrice`) VALUES
('Who Are You?', '1st', 20);

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `UID` int(11) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`UID`, `BID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `includes_additional_resources`
--

CREATE TABLE `includes_additional_resources` (
  `BID` int(9) NOT NULL,
  `RID` int(9) NOT NULL,
  `RName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PID` int(11) NOT NULL,
  `PName` char(20) DEFAULT NULL,
  `PAddress` char(30) DEFAULT NULL,
  `PDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PID`, `PName`, `PAddress`, `PDate`) VALUES
(1, 'Satyam Printing Pres', 'Satyam Imagination World, Saty', '2018-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `publishes`
--

CREATE TABLE `publishes` (
  `BID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishes`
--

INSERT INTO `publishes` (`BID`, `PID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user information`
--

CREATE TABLE `user information` (
  `UEmail` varchar(30) NOT NULL,
  `UPassword` varchar(20) NOT NULL,
  `UName` varchar(30) NOT NULL,
  `UAddress` varchar(50) NOT NULL,
  `UType` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user information`
--

INSERT INTO `user information` (`UEmail`, `UPassword`, `UName`, `UAddress`, `UType`) VALUES
('smahajan02@langara.ca', 'satyam', 'Satyam', 'NAAH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user login`
--

CREATE TABLE `user login` (
  `UID` int(9) NOT NULL,
  `UEmail` varchar(30) NOT NULL,
  `UPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user login`
--

INSERT INTO `user login` (`UID`, `UEmail`, `UPassword`) VALUES
(1, 'smahajan02@langara.ca', 'satyam');

-- --------------------------------------------------------

--
-- Table structure for table `writes`
--

CREATE TABLE `writes` (
  `AID` int(11) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writes`
--

INSERT INTO `writes` (`AID`, `BID`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `book genre`
--
ALTER TABLE `book genre`
  ADD PRIMARY KEY (`BISBN`);

--
-- Indexes for table `book key`
--
ALTER TABLE `book key`
  ADD PRIMARY KEY (`BID`,`BEdition`),
  ADD KEY `BEdition` (`BEdition`);

--
-- Indexes for table `book name`
--
ALTER TABLE `book name`
  ADD PRIMARY KEY (`BID`),
  ADD UNIQUE KEY `BISBN` (`BISBN`),
  ADD KEY `BName` (`BName`);

--
-- Indexes for table `book price`
--
ALTER TABLE `book price`
  ADD PRIMARY KEY (`BName`,`BEdition`),
  ADD KEY `book price_ibfk_1` (`BEdition`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`UID`,`BID`),
  ADD KEY `BID` (`BID`);

--
-- Indexes for table `includes_additional_resources`
--
ALTER TABLE `includes_additional_resources`
  ADD PRIMARY KEY (`BID`,`RID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `publishes`
--
ALTER TABLE `publishes`
  ADD PRIMARY KEY (`BID`,`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `user information`
--
ALTER TABLE `user information`
  ADD PRIMARY KEY (`UEmail`,`UPassword`),
  ADD UNIQUE KEY `UEmail` (`UEmail`),
  ADD KEY `UPassword` (`UPassword`);

--
-- Indexes for table `user login`
--
ALTER TABLE `user login`
  ADD PRIMARY KEY (`UID`,`UEmail`,`UPassword`),
  ADD UNIQUE KEY `UEmail` (`UEmail`),
  ADD KEY `UPassword` (`UPassword`);

--
-- Indexes for table `writes`
--
ALTER TABLE `writes`
  ADD PRIMARY KEY (`AID`,`BID`),
  ADD KEY `BID` (`BID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book key`
--
ALTER TABLE `book key`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book name`
--
ALTER TABLE `book name`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user login`
--
ALTER TABLE `user login`
  MODIFY `UID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book genre`
--
ALTER TABLE `book genre`
  ADD CONSTRAINT `book genre_ibfk_1` FOREIGN KEY (`BISBN`) REFERENCES `book name` (`BISBN`) ON UPDATE CASCADE;

--
-- Constraints for table `book name`
--
ALTER TABLE `book name`
  ADD CONSTRAINT `book name_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `book price`
--
ALTER TABLE `book price`
  ADD CONSTRAINT `book price_ibfk_1` FOREIGN KEY (`BEdition`) REFERENCES `book key` (`BEdition`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book price_ibfk_2` FOREIGN KEY (`BName`) REFERENCES `book name` (`BName`) ON UPDATE CASCADE;

--
-- Constraints for table `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user login` (`UID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `includes_additional_resources`
--
ALTER TABLE `includes_additional_resources`
  ADD CONSTRAINT `includes_additional_resources_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `publishes`
--
ALTER TABLE `publishes`
  ADD CONSTRAINT `publishes_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `publishes_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `publisher` (`PID`);

--
-- Constraints for table `user information`
--
ALTER TABLE `user information`
  ADD CONSTRAINT `user information_ibfk_1` FOREIGN KEY (`UEmail`) REFERENCES `user login` (`UEmail`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user information_ibfk_2` FOREIGN KEY (`UPassword`) REFERENCES `user login` (`UPassword`);

--
-- Constraints for table `writes`
--
ALTER TABLE `writes`
  ADD CONSTRAINT `writes_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `writes_ibfk_2` FOREIGN KEY (`AID`) REFERENCES `authors` (`AID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
