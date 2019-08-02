-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 05:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pettypro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `access_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `access_level`) VALUES
(1, 'oduor', '1', 0),
(2, 'oduorsamuel', 'samuel', 0),
(3, 'petty', 'pro', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `admission` varchar(199) NOT NULL,
  `unit_code` varchar(199) NOT NULL,
  `unit_name` varchar(199) NOT NULL,
  `state` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`admission`, `unit_code`, `unit_name`, `state`, `id`) VALUES
('ci/00078/014', 'MSU 101', 'Probability theory', 1, 5),
('ci/00078/014', 'MSU 101', 'Discrete Mathematics', 1, 6),
('ci/00078/014', 'MSU 101', 'Probability theory', 1, 7),
('ci/00078/014', 'MSU 101', 'Probability theory', 1, 8),
('ci/00078/014', 'MSU 101', 'Scientific themes', 1, 9),
('ci/00078/014', 'MSU 101', 'Probability theory', 1, 10),
('ci/00078/014', 'MSU 101', 'Discrete Mathematics', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `TransactionType` varchar(10) NOT NULL,
  `TransID` varchar(10) NOT NULL,
  `TransTime` varchar(14) NOT NULL,
  `TransAmount` varchar(6) NOT NULL,
  `BusinessShortCode` varchar(6) NOT NULL,
  `BillRefNumber` varchar(6) NOT NULL,
  `InvoiceNumber` varchar(6) NOT NULL,
  `OrgAccountBalance` varchar(10) NOT NULL,
  `ThirdPartyTransID` varchar(10) NOT NULL,
  `MSISDN` varchar(14) NOT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `MiddleName` varchar(10) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_payments`
--

INSERT INTO `mobile_payments` (`transLoID`, `TransactionType`, `TransID`, `TransTime`, `TransAmount`, `BusinessShortCode`, `BillRefNumber`, `InvoiceNumber`, `OrgAccountBalance`, `ThirdPartyTransID`, `MSISDN`, `FirstName`, `MiddleName`, `LastName`) VALUES
(43, 'Pay Bill', 'NFE01H8ON2', '2019-06-11', '129', '600580', 'inv130', '', '70247.00', '', '254708374149', 'John', 'J.', 'Doe'),
(46, 'Pay Bill', 'NFE11H8ON3', '2019-06-12', '23000.', '600580', '14', '', '93247.00', '', '254708374149', 'John', 'J.', 'Doe'),
(49, 'Pay Bill', 'NFE41H8ON6', '20190614115447', '25000', '600580', '12', '', '118247.00', '', '254708374149', 'John', 'J.', 'Doe'),
(52, 'Pay Bill', 'NFE21H8OQG', '20190614135154', '65.00', '600580', 'inv12', '', '118312.00', '', '254708374149', 'John', 'J.', 'Doe');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `names` varchar(100) NOT NULL,
  `staff_id` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `state` int(1) NOT NULL,
  `department` varchar(30) NOT NULL,
  `last_login` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `adm` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `school` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `program` varchar(200) NOT NULL,
  `student_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`adm`, `first_name`, `last_name`, `school`, `department`, `program`, `student_password`) VALUES
('', '', '', '', '', '', '25d55ad283aa400af464c76d713c07ad'),
('0', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('2', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('3', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('67', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('ci/000/25/015', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('ci/000/25/0153', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('ci/000/25/0157', 'ruth', 'ruth', 'computing', 'scjhjh', 'sam', '25d55ad283aa400af464c76d713c07ad'),
('ci/00078/014', 'Maxwell', 'Maragia', 'School of Agriculture', 'Department of Agriculture', 'Information Technology', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `student_ledger`
--

CREATE TABLE `student_ledger` (
  `admission` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_ledger`
--

INSERT INTO `student_ledger` (`admission`, `amount`, `id`) VALUES
('ci/00078/014', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `year` int(1) NOT NULL,
  `course` varchar(199) NOT NULL,
  `unit_name` varchar(199) NOT NULL,
  `unit_code` varchar(199) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`adm`);

--
-- Indexes for table `student_ledger`
--
ALTER TABLE `student_ledger`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission` (`admission`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `student_ledger`
--
ALTER TABLE `student_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
