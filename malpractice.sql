-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 08:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malpractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `malpractice`
--

CREATE TABLE `malpractice` (
  `id` int(11) NOT NULL,
  `staffname` varchar(100) NOT NULL,
  `staffid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `Malpractice` varchar(1000) NOT NULL,
  `malpracticedate` varchar(100) NOT NULL,
  `SubjectName` varchar(40) NOT NULL,
  `subjectid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malpractice`
--

INSERT INTO `malpractice` (`id`, `staffname`, `staffid`, `studentname`, `studentid`, `Malpractice`, `malpracticedate`, `SubjectName`, `subjectid`) VALUES
(1, 'Krishiv1', 123, 'Venkat', '12', 'mistake', '20/sep/1981', '', ''),
(2, 'venkat', 100, 'praveen', '101', 'Copy', '31/7/2020', 'Maths', 'Ma101'),
(3, 'venkat', 100, 'praveen', '101', 'Copy', '31/7/2020', 'Maths', 'Ma101');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `sname` varchar(11) NOT NULL,
  `suser` varchar(11) NOT NULL,
  `spwd` varchar(11) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `sname`, `suser`, `spwd`, `phone`) VALUES
(3, 'krishiv123', 'krishiv123', 'krishiv123', '123113'),
(4, 'venkat', 'venkat', 'venkat', '8248999938');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `malpractice`
--
ALTER TABLE `malpractice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `malpractice`
--
ALTER TABLE `malpractice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
