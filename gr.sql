-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 12:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gr`
--

-- --------------------------------------------------------

--
-- Table structure for table `commitee`
--

CREATE TABLE `commitee` (
  `username` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `designation` varchar(50) NOT NULL,
  `commitee` varchar(50) NOT NULL,
  `t_password` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commitee`
--

INSERT INTO `commitee` (`username`, `fname`, `lname`, `designation`, `commitee`, `t_password`, `password`, `position`) VALUES
('fsdsdf', 'fsdf', 'sdfs', 'sdf', 'member', 'W5d#eR*EQj', '', ''),
('gsg', 'sgs', 'sg', 'gsg', 'member', '5nj4lk5D9Y', '', ''),
('pratham', 'p', 'v', 'teacher', 'head', '', 'pratham', ''),
('qw', 'q', 'w', 'w', 'e', '', '1234', ''),
('trf', 'dfgd', 'dfg', 'gfdg', 'member', '2OxlG7ljF(', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaintreply`
--

CREATE TABLE `complaintreply` (
  `id` int(10) NOT NULL,
  `complaintid` int(10) NOT NULL,
  `commitee` varchar(50) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `date1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintreply`
--

INSERT INTO `complaintreply` (`id`, `complaintid`, `commitee`, `reply`, `date1`) VALUES
(2, 23, 'pv', 'ok', '17/02/2018'),
(3, 23, 'pv', 'okok', '17/02/2018'),
(4, 23, 'pratham', 'kklk', '17/02/2018'),
(5, 24, 'pv', 'qqqqqq', '17/02/2018'),
(6, 24, 'pratham', 'ok', '17/02/2018'),
(7, 25, 'pv', 'ok', '19/02/2018'),
(8, 25, 'qq', 'okk', '19/02/2018'),
(9, 25, 'pratham', 'ok', '19/02/2018'),
(10, 26, 'pv', 'uu', '19/02/2018'),
(11, 26, 'pratham', 'qqq', '19/02/2018'),
(12, 32, 'pv', 'bb', '01/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `c_id` int(50) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `year` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `time1` varchar(50) NOT NULL,
  `readres` varchar(500) NOT NULL,
  `rdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`c_id`, `enrollment`, `year`, `title`, `discription`, `status`, `date1`, `time1`, `readres`, `rdate`) VALUES
(2, '40', '', 'vbv', 'dfg', '', '23/01/2018', '04:04:59pm', 'pvqq', ''),
(3, '40', '', 'vbv23', 'dfg', '', '23/01/2018', '08:37:40pm', 'pvqw', ''),
(7, '40', '', 'ghgfh', 'fghfgh', '', '23/01/2018', '09:15:08pm', 'pv', ''),
(8, '40', '', 'hgfhf', 'hgfhfgh', '', '23/01/2018', '09:15:12pm', 'pv', ''),
(9, '40', '', 'hjghikuhjkyt', 'ghfjghjghkjhgk h', '', '23/01/2018', '09:15:18pm', 'pv', ''),
(10, '40', '', 'hjghikuhjkyt', 'ghfjghjghkjhgk h', '', '23/01/2018', '09:15:18pm', 'pv', ''),
(11, '40', '', 'khjkjfgth ytfryhfh', 'fghfghjfjfhj', '', '23/01/2018', '09:15:23pm', 'pv', ''),
(12, '40', '', 'ghjhgjgh jgh', 'jghjghjghjhgj', '', '23/01/2018', '09:15:31pm', 'pv', ''),
(13, '40', '', 'jghjghjkguh gh', 'jgjghjkgkjg', '', '23/01/2018', '09:15:37pm', 'pv', ''),
(14, '40', '', 'jkghkgjgh', 'jghjghjghj', '', '23/01/2018', '09:15:43pm', 'qwpv', ''),
(16, '23', '', 'qwert', 'ahdgadfa\r\nfd\r\nfd\r\nfd\r\nfdf\r\n', 'read', '24/01/2018', '07:42:21pm', '0pvqw', ''),
(17, '40', '', 'kjljuj', 'kjljljl;j;', '', '24/01/2018', '09:24:05pm', 'qwpv', ''),
(19, '40', '', 'complait regarding wifi', 'wifi router not working\r\nnear our hostel\r\ntake action immigiatly', '', '02/02/2018', '09:48:40am', 'pvqq', ''),
(21, '80', '', 'ghj', 'jdsjkfl', '', '03/02/2018', '04:19:18pm', 'qqpv', ''),
(22, '40', '', 'yuBSSA', 'SADBHJB', '', '03/02/2018', '04:45:45pm', 'pvqwpratham', ''),
(23, '40', '', 'cd', 'dzf\r\nxvx\r\nvvxv\r\ndfdsfsd\r\ngf', '', '03/02/2018', '04:50:44pm', 'pvpratham', ''),
(25, '333', '', 'help', 'please help me', 'read', '19/02/2018', '02:52:33pm', 'pvqqpratham', ''),
(26, '333', '', 'eer', 'ffgg', 'read', '19/02/2018', '03:37:12pm', 'pvpratham', ''),
(27, '333', '', 'ag', 'hhh', 'completed', '20/02/2018', '12:01:58pm', 'pratham', ''),
(31, '23', 'FY COMPUTER', 'ss', 'thyhyty', 'read', '22/02/2018', '04:15:23pm', 'pratham', ''),
(32, '333', 'SY COMPUTER', 'dmf', 'jfdkmfd', 'read', '24/02/2018', '02:56:17pm', 'prathampv', '2018-03-08'),
(33, '23', 'FY COMPUTER', 'LLL', 'L\r\n', '', '24/02/2018', '03:10:48pm', 'prathampv', ''),
(35, '4', 'FY COMPUTER', 'bv', 'bcv', 'read', '02/03/2018', '12:54:21am', 'pratham', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `dis` varchar(500) NOT NULL,
  `date1` varchar(10) NOT NULL,
  `time1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `dis`, `date1`, `time1`) VALUES
(4, 'hh', 'hhhhhh', '24/02/2018', '02:11:10am'),
(5, 'bbv', 'vbbv', '24/02/2018', '02:12:14am'),
(8, 'gfgggggggggggggggggggggggggggggggggggggggggggggggg', 'gdgggggggggggggggggggggggg gggggggggggggggg\r\ng\r\ng\r\ng\r\ng', '08/03/2018', '01:30:14pm'),
(9, 'dffffff f            fffffffffffffffffffffffffffff', '', '08/03/2018', '01:31:36pm'),
(10, 'want to root my phone at the moment', '', '08/03/2018', '01:34:05pm');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `uname` varchar(50) NOT NULL,
  `reset` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `er_no` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `t_password` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`er_no`, `password`, `t_password`, `fname`, `lname`, `gender`, `year`) VALUES
('4', '', '*A51G1W$Ft', 'd', 'd', 'male', ''),
('4444', '', '2Z$8i!qqN*', 'p', 'v', '', ''),
('45', '', 'LnGmeM0z8x', 'd', 'd', '', ''),
('556', '', 'pSshYkt94I', 'o', 'v', '', ''),
('5698', '', 'TnATzaqPdC', 'l', 'l', 'male', ''),
('5845', '', 'IaO*67CNG4', 'jh', 'kj', 'male', ''),
('6536', '', '2nC&ZCQQ)w', 'hd', 'hd', 'male', ''),
('77', '', 'hYtW*FcPOw', 'prathamesh', 'vengurlekar', '', ''),
('78575241', '', '2S)QwdQw98', 'hgj', 'ghj', 'male', ''),
('788', '', 'u$oi$Kq#@9', 'pp', 'vvv', '', 'PASSOUT COMPUTER'),
('789', '', 'F$bIF2PKvw', 'a', 'b', '', ''),
('80', '', 'DGQqlZJRVz', 'p', 'v', '', ''),
('88', '', 'EFeS*BzpDp', 'j', 'j', '', ''),
('9078987', '', 'ZbAGy8dM5I', 'hgj', 'jghj', 'male', ''),
('9999', '', 'KyJB34tjv6', 'Q', 'W', '', 'PASSOUT COMPUTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commitee`
--
ALTER TABLE `commitee`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `complaintreply`
--
ALTER TABLE `complaintreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`er_no`),
  ADD UNIQUE KEY `er_no` (`er_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaintreply`
--
ALTER TABLE `complaintreply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
