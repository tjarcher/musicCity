-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2023 at 06:47 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archert1_musicCity`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `username` varchar(15) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `motivation` varchar(100) NOT NULL,
  `creditsCompleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`username`, `firstName`, `lastName`, `address`, `motivation`, `creditsCompleted`) VALUES
('joesmith14', 'Joe', 'Smith', '42 Parcel Way, Malibu CA', 'I want to become the best musician in the world so that I can win back my ex wife Gennifer', 8),
('bigronda', 'Ronda', 'Towers', '1 Huge Road, TX', 'I will add instruments to my ever growing list of skills so I can dominate in all areas of life', 5),
('youngandrew2', 'Andrew', 'Littleton', '15 Little Lane', 'I hope I can learn how to play the piano despite being the size of a piano key', 3),
('archert1', 'Tim', 'Archer', '18 Leigh Court, NJ', 'I created this program and now am enrolling in an \"undercover boss\" type situation', 0),
('oboeFan5', 'Stacy', 'Piper', '123 Pickle Place, PA', 'I want to learn the oboe!', 0),
('hungryPlumber5', 'Hungry', 'Phil', '1 Hungry Way', 'I want to eat a trombone (frowning face emoji)', 0),
('newGuy6', 'New', 'Guy', '1 new lane', 'I am the new guy', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(6) NOT NULL,
  `topic` varchar(15) NOT NULL,
  `modality` varchar(15) NOT NULL,
  `creditValue` int(1) NOT NULL,
  `enrollmentLimit` int(2) NOT NULL,
  `teacherID` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `topic`, `modality`, `creditValue`, `enrollmentLimit`, `teacherID`) VALUES
(1, 'Drums', 'On-Line', 3, 10, 2),
(2, 'Clapping Hands', 'In Home Visit', 5, 1, 4),
(3, 'Military Music', 'In-War', 3, 30, 7),
(5, 'Guitar', 'In-Person', 3, 15, 5),
(6, 'Clarinet', 'Zoom', 2, 5, 8),
(7, 'Upright Bass', 'In-Person', 3, 15, 5),
(8, 'Trombone', 'In-Person', 3, 25, 3),
(9, 'Trumpet', 'In-Person', 3, 15, 9),
(10, 'Vocals', 'Zoom', 5, 3, 2),
(11, 'Belly Drumming', 'In-Person', 5, 10, 1),
(12, 'Screamo Vocals', 'In-Home Visit', 4, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `instructor` varchar(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `time` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `name`, `description`, `instructor`, `day`, `time`) VALUES
(362939, 'Guitar', 'Learn guitar from one of our expert strummers!', 'Prince', 'Monday', '12PM'),
(462442, 'Guitar', 'Learn guitar from one of our expert strummers!', 'Jimi Hendrix', 'Friday', '6PM'),
(461812, 'Drums', 'Learn to smash those things from one of the greats!', 'Ringo Starr', 'Tuesday', '3PM'),
(119203, 'Drums', 'Learn to smash those things from one of the greats!', 'Dave Grohl', 'Wednesday', '3PM'),
(337210, 'Vocals', 'Perfect those pipes with help from a certified professional', 'Andrea Bocelli', 'Thursday', '10AM'),
(220109, 'Vocals', 'Perfect those pipes with help from a certified professional', 'Isaac Wood', 'Monday', '10AM'),
(873919, 'Rapping', 'Learn to spit bars from a seasoned veteran', 'Lupe Fiasco', 'Friday', '6PM'),
(772635, 'Rapping', 'Learn to spit bars from a seasoned veteran', 'Eminem', 'Wednesday', '12PM'),
(555555, 'Clapping Your Hands', 'We are not really sure why you would need to take this class to be honest', 'My Friend Doug', 'Tuesday', '3PM'),
(123456, 'Clapping Your Hands', 'We are not really sure why you would need to take this class to be honest', 'Barack Obama', 'Monday', '3PM'),
(545454, 'Beatboxing', 'Learn to beatbox from a guy who thinks he is pretty good at it', 'Tim Archer', 'Friday', '12PM'),
(987654, 'Beatboxing', 'Learn to beatbox from a guy who thinks he is pretty good at it', 'Tim Archer', 'Friday', '12PM'),
(623723, 'Beatboxing', 'Learn to beatbox from a guy who thinks he is pretty good at it', 'Tim Archer', 'Friday', '3PM'),
(568570, 'Beatboxing', 'Learn to beatbox from a guy who thinks he is pretty good at it', 'Tim Archer', 'Monday', '3PM'),
(383020, 'Cello', 'Learn cello from one of the experts in the field', 'Yo Yo Ma', 'Monday', '12PM');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(6) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `phoneNumber`, `address`, `firstName`, `lastName`, `dateOfBirth`) VALUES
(1, '9734578823', '123 Pastry Ave, NJ', 'Gene', 'Simmons', '1985-09-16'),
(2, '1234567891', '15 Vanilla Road, MI', 'Dave', 'Grohl', '1983-12-08'),
(3, '2412786654', '13 Adolescent Ave, NM', 'My Friend', 'Neil', '2015-12-15'),
(4, '9982731354', '8 Wallaby Way, WA', 'Captain', 'Teacher', '1995-09-11'),
(5, '1435261776', '123 Guitar Avenue', 'Johnny', 'Guitar', '1987-05-15'),
(7, '5532261111', '1 Tuba Way', 'Phillip', 'Tuba', '2023-12-11'),
(8, '1123456261', '123 My House', 'Joe', 'School', '2023-12-11'),
(9, '8765432191', 'Trumpt Tower', 'Donnie', 'Trumpet', '1992-06-17'),
(10, '9999999999', '32 Driver Ave', 'Julio', 'Screamer', '1997-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `sectionID` int(6) NOT NULL,
  `clientUsername` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Enrolled'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`sectionID`, `clientUsername`, `status`) VALUES
(2, 'newGuy6', 'Completed'),
(1, 'newGuy6', 'Enrolled'),
(3, 'newGuy6', 'Enrolled'),
(13, 'joesmith14', 'Enrolled'),
(21, 'joesmith14', 'Completed'),
(1, 'joesmith14', 'Completed'),
(12, 'bigronda', 'Enrolled'),
(5, 'bigronda', 'Enrolled'),
(25, 'bigronda', 'Completed'),
(3, 'youngandrew2', 'Enrolled'),
(18, 'youngandrew2', 'Completed'),
(3, 'archert1', 'Enrolled'),
(6, 'hungryPlumber5', 'Enrolled'),
(26, 'hungryPlumber5', 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `courseID` int(6) NOT NULL,
  `clientUsername` varchar(15) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`courseID`, `clientUsername`, `rating`, `review`) VALUES
(2, 'bigronda', 5, 'The teacher offered to brush my hair'),
(11, 'bigronda', 1, 'I hurt my belly'),
(1, 'archert1', 3, 'It was meh');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionID` int(6) NOT NULL,
  `year` int(4) NOT NULL,
  `season` varchar(10) NOT NULL,
  `courseID` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `year`, `season`, `courseID`) VALUES
(1, 2023, 'fall', 1),
(2, 2022, 'spring', 2),
(3, 2023, 'fall', 2),
(4, 2024, 'spring', 1),
(5, 2023, 'winter', 3),
(6, 2024, 'spring', 3),
(7, 2023, 'winter', 5),
(8, 2024, 'spring', 5),
(9, 2023, 'winter', 6),
(10, 2024, 'spring', 6),
(11, 2023, 'winter', 7),
(12, 2024, 'winter', 7),
(13, 2024, 'spring', 8),
(14, 2023, 'spring', 8),
(15, 2023, 'summer', 8),
(16, 2024, 'fall', 8),
(17, 2023, 'summer', 9),
(18, 2024, 'spring', 9),
(19, 2024, 'fall', 9),
(20, 2023, 'winter', 10),
(21, 2023, 'summer', 10),
(22, 2024, 'spring', 10),
(23, 2024, 'winter', 10),
(24, 2023, 'fall', 11),
(25, 2023, 'winter', 11),
(26, 2024, 'spring', 11),
(27, 2023, 'winter', 12),
(28, 2024, 'spring', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `courseID` (`courseID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`sectionID`,`clientUsername`),
  ADD KEY `clientUsername` (`clientUsername`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `clientUsername` (`clientUsername`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionID`),
  ADD KEY `courseID` (`courseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
