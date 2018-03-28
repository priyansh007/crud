-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 08:16 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `bname` varchar(6000) NOT NULL,
  `authorname` varchar(6000) NOT NULL,
  `creationdate` date NOT NULL,
  `subject` varchar(6000) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `authorname`, `creationdate`, `subject`, `link`) VALUES
(1, 'information is here', 'dr.j.j.patel', '2018-03-09', 'information security', 'https://drive.google.com/open?id=0BzrfWI6kSlJJMERrMlhHelpEY0k'),
(2, 'data and believer', 'dr.ram rahim', '2018-03-01', 'data science', 'https://drive.google.com/open?id=0B7tRgWCMM5cKemRORVlOSHkzZWM'),
(3, 'ramvichar', 'valmiki', '2018-02-27', 'ram-katha', 'https://drive.google.com/open?id=0B7tRgWCMM5cKLXdVRFpuOGs0eEE'),
(4, 'jacuzzi', 'mahanat pandey', '2018-02-09', 'mohajiya', 'https://drive.google.com/open?id=0B7tRgWCMM5cKczVDNlFoY0FSRWs'),
(12, 'baa', 'rgtfret', '5654-07-06', '34efd', 'adasdasdasd'),
(13, 'fafd', 'dfasfa', '7656-08-07', '56yvb', 'vcxcvx');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `emailid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `fname`, `lname`, `emailid`) VALUES
('u15co050', 'abc', 'priyansh', 'zalavadiya', 'priyanshzalavadiya007@gmail.com'),
('u15co051', '12345', 'mansingh', 'tomar', 'man@gmail.com'),
('u15co069', '123', 'ram', 'laxman', 'ram@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
