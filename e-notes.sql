-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 10:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(150) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`name`, `type`, `size`, `first_name`, `qualification`, `gender`, `contact`, `username`, `password`, `confirm`, `id`) VALUES
('73kiran_photo.jpeg', 'image/jpeg', '109037', 'kiran', 'mca', 'male', '9481984650', 'kiran', 'kiran', 'kiran', 30),
('889img_20250216_0001.jpg', 'image/jpeg', '61438', 'deepak', 'BE', 'male', '9878987777', 'deepu', 'deepu', 'deepu', 34);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `sec_question` varchar(100) NOT NULL,
  `sec_answer` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first_name`, `last_name`, `father`, `address`, `gender`, `contact`, `username`, `password`, `confirm`, `sec_question`, `sec_answer`, `id`) VALUES
('kiran', 'kumar', 'sreedhar', 'nmc bhadravthi', 'male', '7019340698', 'kk', 'kk', 'kk', 'which is your fav animal?', 'cat', 31),
('akarsha', 'kumar', 'akslfjlak', 'dkdlshflakshfs;a', 'male', '7829159016', 'akarsh', 'akarsh', 'akarsh', 'which is your fav animal?', 'dog', 32),
('sanju', 'alfhlak', 'lhlaksflka', 'lkafjlkfjalk', 'female', '8987686676', 'sanju', 'sanju', 'sanju', 'which is your fav animal?', 'bow bow', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `NAME` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `TYPE` varchar(250) NOT NULL,
  `SIZE` varchar(250) NOT NULL,
  `ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`NAME`, `subject`, `TYPE`, `SIZE`, `ID`, `description`, `uploaded_by`) VALUES
('60810_mcq.pdf', '4th sem', 'application/pdf', '671259', 154, '10 th chpater mcq question and answer', 'kiran'),
('4631.pdf', '3rd sem', 'application/pdf', '240501', 156, 'boolean algebra', 'kiran'),
('1681.docx', '3rd sem', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '15818', 157, '1st chapter notes', 'deepak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
