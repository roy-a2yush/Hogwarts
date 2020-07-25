-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 10:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sid`, `uname`, `pass`) VALUES
(0, 'admin', 'admin'),
(3, 'a@a.a', '123'),
(5, 'deathEaters', '1234'),
(4, 'shashi@gmail.com', 'shashi');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `teamid` int(11) NOT NULL,
  `marks` int(11) NOT NULL DEFAULT 0,
  `review1` int(11) NOT NULL DEFAULT 0,
  `review2` int(11) NOT NULL DEFAULT 0,
  `review3` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `review1` int(11) DEFAULT NULL,
  `review2` int(11) DEFAULT NULL,
  `review3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `phoneno` varchar(11) NOT NULL,
  `teamid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `class`, `phoneno`, `teamid`) VALUES
(5, 'Tom Riddle', 'iamvoldemort@hogwarts.com', NULL, '9900990000', NULL),
(6, 'Gellart Grindelwald', 'grindelwald@hogwarts.com', NULL, '0000888897', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teamid` int(11) DEFAULT NULL,
  `phoneNo` char(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `email`, `teamid`, `phoneNo`, `username`) VALUES
(3, 'Snape', 'a@a.a', NULL, '9999999999', 'a@a.a'),
(4, 'Shashi', 'shashi@gmail.com', NULL, '6564676572', 'shashi@gmail.com');

--
-- Triggers `teacher`
--
DELIMITER $$
CREATE TRIGGER `deleteTeacherRecord` BEFORE DELETE ON `teacher` FOR EACH ROW DELETE FROM login WHERE uname = old.username
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Sid1` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `teamname` varchar(100) NOT NULL,
  `fileaddress` varchar(500) NOT NULL,
  `pstatement` varchar(500) NOT NULL,
  `approval` int(10) NOT NULL DEFAULT 0,
  `completed` int(11) NOT NULL DEFAULT 0,
  `Sid2` int(11) NOT NULL,
  `Sid3` int(11) DEFAULT NULL,
  `Sid4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Sid1`, `tid`, `teamid`, `teamname`, `fileaddress`, `pstatement`, `approval`, `completed`, `Sid2`, `Sid3`, `Sid4`) VALUES
(2, 3, 3, 'D', '', '', 0, 0, 3, 4, 5),
(0, 3, 5, 'deathEaters', '', '', 0, 0, 6, 0, 0),
(5, 4, 6, 'aurors', 'sfdxgcvc', 'dsfg', 1, 0, 6, NULL, NULL),
(5, 4, 8, 'beasts', 'dxfcgvhbj', 'fgvh', 0, 1, 6, NULL, NULL);

--
-- Triggers `team`
--
DELIMITER $$
CREATE TRIGGER `deleteTeamRecord` BEFORE DELETE ON `team` FOR EACH ROW DELETE FROM login WHERE uname = old.teamname
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `teamid` (`teamid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusid`),
  ADD KEY `teamid` (`teamid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`teamid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `teamid` (`teamid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`),
  ADD UNIQUE KEY `teamname` (`teamname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `team` (`teamid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
