-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 07:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
-- Table structure for table `Authors`
--

CREATE TABLE `Authors` (
  `AID` int(11) NOT NULL,
  `AName` char(20) DEFAULT NULL,
  `ADescription` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`AID`, `AName`, `ADescription`) VALUES
(1, 'Satyam Mahajan', 'A concise lovable, adorable author known for its writing style');

-- --------------------------------------------------------

--
-- Table structure for table `Book Genre`
--

CREATE TABLE `Book Genre` (
  `BISBN` varchar(20) NOT NULL,
  `BGenre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book Genre`
--

INSERT INTO `Book Genre` (`BISBN`, `BGenre`) VALUES
('1234567890', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `Book Key`
--

CREATE TABLE `Book Key` (
  `BID` int(9) NOT NULL,
  `BEdition` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book Key`
--

INSERT INTO `Book Key` (`BID`, `BEdition`) VALUES
(1, '1st');

-- --------------------------------------------------------

--
-- Table structure for table `Book Name`
--

CREATE TABLE `Book Name` (
  `BID` int(9) NOT NULL,
  `BName` varchar(20) NOT NULL,
  `BISBN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book Name`
--

INSERT INTO `Book Name` (`BID`, `BName`, `BISBN`) VALUES
(1, 'Who Are You?', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `Book Price`
--

CREATE TABLE `Book Price` (
  `BName` varchar(20) NOT NULL,
  `BEdition` varchar(20) NOT NULL,
  `BPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book Price`
--

INSERT INTO `Book Price` (`BName`, `BEdition`, `BPrice`) VALUES
('Who Are You?', '1st', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Buys`
--

CREATE TABLE `Buys` (
  `UID` int(11) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Buys`
--

INSERT INTO `Buys` (`UID`, `BID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Includes_Additional_Resources`
--

CREATE TABLE `Includes_Additional_Resources` (
  `BID` int(9) NOT NULL,
  `RID` int(9) NOT NULL,
  `RName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE `Publisher` (
  `PID` int(11) NOT NULL,
  `PName` char(20) DEFAULT NULL,
  `PAddress` char(30) DEFAULT NULL,
  `PDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Publisher`
--

INSERT INTO `Publisher` (`PID`, `PName`, `PAddress`, `PDate`) VALUES
(1, 'Satyam Printing Pres', 'Satyam Imagination World, Saty', '2018-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `Publishes`
--

CREATE TABLE `Publishes` (
  `BID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Publishes`
--

INSERT INTO `Publishes` (`BID`, `PID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UID` int(9) NOT NULL,
  `UEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UID`, `UEmail`) VALUES
(1, 'smahajan02@langara.ca');

-- --------------------------------------------------------

--
-- Table structure for table `User Information`
--

CREATE TABLE `User Information` (
  `UEmail` varchar(30) NOT NULL,
  `UPassword` varchar(20) NOT NULL,
  `UName` varchar(30) NOT NULL,
  `UAddress` varchar(50) NOT NULL,
  `UType` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User Information`
--

INSERT INTO `User Information` (`UEmail`, `UPassword`, `UName`, `UAddress`, `UType`) VALUES
('smahajan02@langara.ca', 'satyam', 'Satyam', 'NAAH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User Login`
--

CREATE TABLE `User Login` (
  `UID` int(9) NOT NULL,
  `UEmail` varchar(30) NOT NULL,
  `UPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User Login`
--

INSERT INTO `User Login` (`UID`, `UEmail`, `UPassword`) VALUES
(1, 'smahajan02@langara.ca', 'satyam');

-- --------------------------------------------------------

--
-- Table structure for table `Writes`
--

CREATE TABLE `Writes` (
  `AID` int(11) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Writes`
--

INSERT INTO `Writes` (`AID`, `BID`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Authors`
--
ALTER TABLE `Authors`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `Book Genre`
--
ALTER TABLE `Book Genre`
  ADD PRIMARY KEY (`BISBN`);

--
-- Indexes for table `Book Key`
--
ALTER TABLE `Book Key`
  ADD PRIMARY KEY (`BID`,`BEdition`),
  ADD KEY `BEdition` (`BEdition`);

--
-- Indexes for table `Book Name`
--
ALTER TABLE `Book Name`
  ADD PRIMARY KEY (`BID`),
  ADD UNIQUE KEY `BISBN` (`BISBN`),
  ADD KEY `BName` (`BName`);

--
-- Indexes for table `Book Price`
--
ALTER TABLE `Book Price`
  ADD PRIMARY KEY (`BName`,`BEdition`),
  ADD KEY `book price_ibfk_1` (`BEdition`);

--
-- Indexes for table `Buys`
--
ALTER TABLE `Buys`
  ADD PRIMARY KEY (`UID`,`BID`),
  ADD KEY `BID` (`BID`);

--
-- Indexes for table `Includes_Additional_Resources`
--
ALTER TABLE `Includes_Additional_Resources`
  ADD PRIMARY KEY (`BID`,`RID`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `Publishes`
--
ALTER TABLE `Publishes`
  ADD PRIMARY KEY (`BID`,`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UEmail` (`UEmail`);

--
-- Indexes for table `User Information`
--
ALTER TABLE `User Information`
  ADD PRIMARY KEY (`UEmail`,`UPassword`),
  ADD UNIQUE KEY `UEmail` (`UEmail`),
  ADD KEY `UPassword` (`UPassword`);

--
-- Indexes for table `User Login`
--
ALTER TABLE `User Login`
  ADD PRIMARY KEY (`UID`,`UEmail`,`UPassword`),
  ADD UNIQUE KEY `UEmail` (`UEmail`),
  ADD KEY `UPassword` (`UPassword`);

--
-- Indexes for table `Writes`
--
ALTER TABLE `Writes`
  ADD PRIMARY KEY (`AID`,`BID`),
  ADD KEY `BID` (`BID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Authors`
--
ALTER TABLE `Authors`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Book Key`
--
ALTER TABLE `Book Key`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Book Name`
--
ALTER TABLE `Book Name`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Publisher`
--
ALTER TABLE `Publisher`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User Login`
--
ALTER TABLE `User Login`
  MODIFY `UID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book Genre`
--
ALTER TABLE `Book Genre`
  ADD CONSTRAINT `book genre_ibfk_1` FOREIGN KEY (`BISBN`) REFERENCES `Book Name` (`BISBN`) ON UPDATE CASCADE;

--
-- Constraints for table `Book Name`
--
ALTER TABLE `Book Name`
  ADD CONSTRAINT `book name_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `Book Key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `Book Price`
--
ALTER TABLE `Book Price`
  ADD CONSTRAINT `book price_ibfk_1` FOREIGN KEY (`BEdition`) REFERENCES `Book Key` (`BEdition`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book price_ibfk_2` FOREIGN KEY (`BName`) REFERENCES `Book Name` (`BName`) ON UPDATE CASCADE;

--
-- Constraints for table `Buys`
--
ALTER TABLE `Buys`
  ADD CONSTRAINT `buys_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `User Login` (`UID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`BID`) REFERENCES `Book Key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `Includes_Additional_Resources`
--
ALTER TABLE `Includes_Additional_Resources`
  ADD CONSTRAINT `includes_additional_resources_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `Book Key` (`BID`) ON UPDATE CASCADE;

--
-- Constraints for table `Publishes`
--
ALTER TABLE `Publishes`
  ADD CONSTRAINT `publishes_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `Book Key` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `publishes_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `Publisher` (`PID`);

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `User Login` (`UID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`UEmail`) REFERENCES `User Login` (`UEmail`) ON UPDATE CASCADE;

--
-- Constraints for table `User Information`
--
ALTER TABLE `User Information`
  ADD CONSTRAINT `user information_ibfk_1` FOREIGN KEY (`UEmail`) REFERENCES `User Login` (`UEmail`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user information_ibfk_2` FOREIGN KEY (`UPassword`) REFERENCES `User Login` (`UPassword`);

--
-- Constraints for table `Writes`
--
ALTER TABLE `Writes`
  ADD CONSTRAINT `writes_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `Book Key` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `writes_ibfk_2` FOREIGN KEY (`AID`) REFERENCES `Authors` (`AID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
