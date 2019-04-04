-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 06:12 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dicchinicchitutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(32) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Name`) VALUES
(1, 'Irfan Admin');

-- --------------------------------------------------------

--
-- Table structure for table `applydetails`
--

CREATE TABLE `applydetails` (
  `Tid` int(32) NOT NULL,
  `Trid` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `Name`, `Phone`, `Gender`) VALUES
(1, 'Peuli', 1762416669, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Tid` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `PreferedPlace` varchar(200) NOT NULL,
  `PreferedSubject` varchar(200) NOT NULL,
  `PreferedClass` varchar(200) NOT NULL,
  `PreferedMedium` varchar(200) NOT NULL,
  `ExpectedMinimumSalary` int(200) NOT NULL,
  `University` varchar(200) NOT NULL,
  `StudentDetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Tid`, `Name`, `Phone`, `Gender`, `Email`, `PreferedPlace`, `PreferedSubject`, `PreferedClass`, `PreferedMedium`, `ExpectedMinimumSalary`, `University`, `StudentDetails`) VALUES
(1, 'Irfanul Karim', '01851804483', 'Male', 'Karimirfanul10@gmail.com', 'Mirpur', 'Math,english', '9,10', 'Bangla', 10000, 'AIUB', 'Very good'),
(2, 'ggg g ', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', 1554035483, '01554035483', '01554035483'),
(3, 'Bangladesh', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', '01554035483', 1554035483, '01554035483', '01554035483'),
(4, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'j jj'),
(5, 'irfan', '1554035483', '', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'rvrvr'),
(6, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'cecvevrv'),
(7, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'dvvdvdvdv'),
(8, 'himel', '1812337368', 'Female', 'himel@gmail.com', 'Mirpur', 'Chemestry', '12', 'Bangla', 1000, 'AIUB', ''),
(9, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'fvfvfv'),
(10, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'f  f  g g'),
(11, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'jljbjbhjb'),
(12, 'irfan', '1554035483', '', 'sajid@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'eeve'),
(13, 'irfan', '1554035483', '', 'sajid@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'fbfbf'),
(14, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'fvfvfvbf'),
(15, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', ''),
(16, 'irfan', '1554035483', 'Male', 'haqfahadul@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', ''),
(17, 'jahan', '1234567891', 'Male', 'jahan@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'ksjlvbaisd'),
(18, 'muhib', '1825477862', 'Male', 'muhib@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', ''),
(19, 'Tanvir', '1558047536', 'Male', 'manjir@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 20000, 'AIUB', 'bjvbads'),
(20, 'sayan', '1856204197', 'Male', 'imon@gmail.com', 'Mirpur', 'Math', '1', 'Bangla', 1000, 'AIUB', 'ksdvbjsd'),
(21, 'imranul karim', '1818134912', 'Male', 'imran@gmail.com', 'Mirpur', 'Math,english', '5', 'Bangla', 1000, 'AIUB', 'im good');

-- --------------------------------------------------------

--
-- Table structure for table `teacherrequirement`
--

CREATE TABLE `teacherrequirement` (
  `Trid` int(32) NOT NULL,
  `Sid` int(32) NOT NULL,
  `Tittle` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Medium` varchar(100) NOT NULL,
  `Salary` int(100) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Approve` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherrequirement`
--

INSERT INTO `teacherrequirement` (`Trid`, `Sid`, `Tittle`, `Place`, `Subject`, `Class`, `Medium`, `Salary`, `Details`, `Approve`) VALUES
(1, 1, 'HSC er math er jonno teacher chai', 'mirpur', 'Math', 'Hsc', 'Bangla', 10000, 'Should be punctual about time', '1'),
(2, 2, 'SSC Student er jonne FEMALE tutor chaii', 'Banani', 'ICT', '11', 'Bangla', 5000, 'Teacher valo hoite hobe...', '1'),
(3, 0, 'English Teacher chai', 'khilkhet', 'english', '5', 'english', 3000, 'timely ashte hobe', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(32) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Password`, `Type`) VALUES
(1, 'ecee', 'user'),
(1234567891, 'jahan123', 'Teacher'),
(1554035483, '1121', 'Teacher'),
(1558047536, '01558047536', 'Teacher'),
(1762416669, '7654321', 'Student'),
(1818134912, '01818134912', 'Teacher'),
(1825477862, '01825477862', 'Teacher'),
(1851804483, '1234567', 'Teacher'),
(1851804484, '', 'Teacher'),
(1851804485, '', 'Teacher'),
(1856204197, '01856204197', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `teacherrequirement`
--
ALTER TABLE `teacherrequirement`
  ADD PRIMARY KEY (`Trid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teacherrequirement`
--
ALTER TABLE `teacherrequirement`
  MODIFY `Trid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1856204198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
