-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 07:20 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-notes`
--
CREATE DATABASE IF NOT EXISTS `e-notes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e-notes`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`first_name`, `last_name`, `qualification`, `address`, `gender`, `contact`, `username`, `password`, `confirm`, `id`) VALUES
('ju', 'k', 'l', ' jkh', 'male', '080980980', 'gy', 'gy', 'gy', 20),
('mahesh', 'kumar', 'msc', 'smg', 'male', '22298207989798', 'kkkk', 'kkkk', 'kkkk', 21),
('jkhk', 'jkjhkjh', 'hkjh', 'khkjh', 'male', '7842354235', 'khkjhk', 'kk', 'kk', 22),
('harshitha', 'murthy', 'mca', 'bangalore', 'female', '9876542113', 'harshi', 'harshi', 'harshi', 23),
('k', 'k', 'k', 'k', 'male', '8888888888', 'ty', 'ty', 'ty', 24),
('ji', 'ji', 'ji', 'hkjhk', 'male', '8889898987', 'hu', 'hu', 'hu', 25);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first_name`, `last_name`, `father`, `address`, `gender`, `contact`, `username`, `password`, `confirm`, `id`) VALUES
('kiran', 'kumar', 'sreedhar', 'bdvt', 'male', '9481984650', 'kiran', 'kk', 'kk', 3),
('j', 'j', 'j', 'j', 'female', '7987987987987', 'jj', 'jj', 'jj', 4),
('manu', 'kukmar', 'bbvc', 'vbg', 'female', '7979879879', 'manu', 'manu', 'mnaju', 5),
('manaj', 'mj', 'nkjhkj', 'kjhkjh', 'male', '7987987888', 'kl', 'kl', 'kl', 6),
('p', 'p', 'p', 'p', 'male', '9090999999', 'io', 'io', 'io', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `NAME` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `TYPE` varchar(250) NOT NULL,
  `SIZE` varchar(250) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`NAME`, `subject`, `TYPE`, `SIZE`, `ID`, `description`) VALUES
('759lecture_7.ppt', 'physics', 'application/vnd.ms-powerpoint', '323584', 118, 'pppt'),
('16820abc.html', 'physics', 'text/html', '420', 120, 'html'),
('693important.txt', 'physics', 'text/plain', '199', 121, 'text'),
('23645tbl_uploads.sql', 'physics', 'application/octet-stream', '2598', 122, 'sql'),
('614salary_calculator_2017-18(fnl_with_taxform).xls', 'physics', 'application/vnd.ms-excel', '473088', 123, 'hkjghkjh'),
('479tax_form___fa-_2017-18.xlsx', 'physics', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', '31588', 124, 'whkefk'),
('697uploads1-20180216t050249z-001.zip', 'physics', 'application/zip', '186636678', 125, 'rar\r\n'),
('801123.html', 'physics', 'text/html', '541', 126, '\r\nsddg'),
('45313451614_238053706577386_1380960116_n.mp4', 'chemistry', 'video/mp4', '3687230', 129, 'nkjhk'),
('721111.png', 'computer science', 'image/png', '1253320', 130, 'hgkjgk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
