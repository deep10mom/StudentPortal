-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 11:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`name`, `path`) VALUES
('abc', 'DeepaKeshri_InternshalaResume (1).pdf.basename'),
('c', 'Resume_Functional Resume â€“ 03(Vertical Design) (1).pdf.basename'),
('deepa', 'draft.deepa.docx.basename'),
('doc', 'balace.jpg.basename'),
('grruyugs', 'cnn.py.basename'),
('hm', 'cnn.py.basename'),
('holiday', 'heap_CR.docx.basename'),
('Machine learning', '_964b8d77dc0ee6fd42ac7d8a70c4ffa1_Lecture6.pdf.basename'),
('news', 'Resume_Functional Resume â€“ 03(Vertical Design) (1).pdf.basename'),
('renu', '1016082793-1671.pdf.basename'),
('sneha', 'Doc1.docx.basename'),
('try', 'Whatever  we speak.docx.basename');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `userid` varchar(20) NOT NULL,
  `maths` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `geography` int(3) NOT NULL,
  `hindi` int(3) NOT NULL,
  `history` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `computer` int(3) NOT NULL,
  `attendence` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`userid`, `maths`, `science`, `geography`, `hindi`, `history`, `english`, `computer`, `attendence`) VALUES
('deep10mom', 100, 52, 87, 55, 99, 52, 100, 89),
('Priya', 68, 98, 80, 77, 87, 85, 100, 23),
('sneha', 87, 99, 78, 58, 93, 100, 100, 25);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subid` varchar(20) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subid`, `sname`) VALUES
('103', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `tid` varchar(20) NOT NULL,
  `subid` varchar(20) NOT NULL,
  `class` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `class` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `address`, `email`, `contact`, `class`) VALUES
('t01', 'aman kumar', 'jamshedpur', 'keshrideepa10@gmail.com', 2147483647, '8 A'),
('t02', 'Arunanshu Mitra', 'jamshedpur', 'keshrideepa10@gmail.com', 2147483647, '10 A'),
('t03', 'Debjani Ganguly', 'kadma', 'keshrideepa10@gmail.com', 2147483647, '9 C');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class` int(5) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `fathers` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`tid`,`subid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `subid` (`subid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`subid`) REFERENCES `subjects` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
