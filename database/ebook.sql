-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 09:39 PM
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
(1, 'Satyam Mahajan', 'A concise lovable, adorable author known for its writing style'),
(2, 'Robert Collen', 'Born in Australia. Studied at California University in USA. Well-know author of the time'),
(3, 'Edward Stewart', 'Eminent fiction writter. Lives in NY. Graduated from University of Water Loo in Canada'),
(4, 'Flemming Wood', 'Lives in Singapore and graduated from Cambridge University. Famous Computer Science author'),
(5, 'Michael Yong', 'Lives in Canada. Graduated from UBC. Views the world with a broad perspective.'),
(6, 'Collen McCarty', 'Born and lives in Switzerland. Vivid writting style.'),
(7, 'Ramkrishan Mahajan', 'Born and lives in India. Author with logical and clear thoughts.'),
(8, 'Jeff vandermer', 'Born and lives in Dubai. Author known for his unique layout.'),
(9, 'Alison Edison', 'Born and lives in New York. Famous author with brilliant examples to illustrate concepts.'),
(10, 'Jamie Denike', 'Born and lives in Canada. Graduated from UBC. Writter that uses various examples to explain hypothesis.');

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
('1000000001', 'Biology'),
('1000000002', 'Biology'),
('1000000003', 'Computer Science'),
('1000000004', 'Arts'),
('1000000005', 'Computer Science'),
('1000000006', 'Computer Science'),
('1000000007', 'Biology'),
('1000000008', 'Biology'),
('1000000009', 'Computer Science'),
('1000000010', 'Arts'),
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
(101, '1st'),
(102, '2nd'),
(103, '5th'),
(104, '4th'),
(105, '7th'),
(106, '7th'),
(107, '3rd'),
(108, '4th'),
(109, '3rd'),
(110, '9th'),
(111, '1st');

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
(101, 'Who Are You?', '1234567890'),
(102, 'Biology of Life', '1000000001'),
(103, 'Biology of Life', '1000000002'),
(104, 'World of Computer Sc', '1000000003'),
(105, 'Fine Arts', '1000000004'),
(106, 'Intro to Computer Sc', '1000000005'),
(107, 'Intro to Web Program', '1000000006'),
(108, 'Biochemistry', '1000000007'),
(109, 'Cell Biology', '1000000008'),
(110, 'Java', '1000000009'),
(111, 'Fine Arts', '1000000010');

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
('Biochemistry', '4th', 377.8),
('Biology of Life', '2nd', 399.99),
('Biology of Life', '5th', 450),
('Cell Biology', '3rd', 340.5),
('Fine Arts', '1st', 110.5),
('Fine Arts', '7th', 150),
('Intro to Computer Sc', '7th', 455),
('Intro to Web Program', '3rd', 400),
('Java', '9th', 330),
('Who Are You?', '1st', 20),
('World of Computer Sc', '4th', 289.9);

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `UID` int(11) NOT NULL,
  `BID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Satyam Printing Pres', 'Satyam Imagination World, Saty', '2018-10-22'),
(2, 'Oxford Education', '244 5th Ave #2, New York, NY 1', '2010-09-10'),
(3, 'Pearson University E', '8984 Glenlake Street Brooklyn,', '1998-05-11'),
(4, 'Harper Collins', '9365 South Tower Rd. Covington', '1994-03-24'),
(5, 'James and Sons', '41 Pawnee Ave.Muskegon, MI 494', '2017-07-30'),
(6, 'Bloomsbury', '7061 West Snake Hill Street St', '2001-04-11'),
(7, 'John Wiley and sons', '201 Oak St. Maineville, OH 450', '2002-06-30'),
(8, 'Simon and Schuster', '800 Foxrun Rd. Wolfville, NS B', '0196-01-09'),
(9, 'Pan Macmillian', '7447 Big Rock Cove Dr.Olds, AB', '2014-08-01'),
(10, 'A&C Black', '46 Boston St.\r\nSt. Mary,ON N4X', '1991-03-16');

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
(101, 1),
(102, 2),
(103, 3),
(104, 4),
(105, 5),
(106, 6),
(107, 7),
(108, 8),
(109, 9),
(110, 10);

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
('smahajan02@langara.ca', 'sam', 'Satyam Mahajan', '777 111 surrey', 1);

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
(3, 'smahajan02@langara.ca', 'sam');

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
(1, 101),
(2, 102),
(3, 103),
(4, 104),
(5, 105),
(6, 106),
(7, 107),
(8, 108),
(9, 109),
(10, 110);

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
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book key`
--
ALTER TABLE `book key`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `book name`
--
ALTER TABLE `book name`
  MODIFY `BID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user login`
--
ALTER TABLE `user login`
  MODIFY `UID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `buys_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user login` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`BID`) REFERENCES `book key` (`BID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `user information_ibfk_1` FOREIGN KEY (`UEmail`) REFERENCES `user login` (`UEmail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user information_ibfk_2` FOREIGN KEY (`UPassword`) REFERENCES `user login` (`UPassword`) ON DELETE CASCADE ON UPDATE CASCADE;

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
