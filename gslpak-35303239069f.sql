-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2023 at 11:12 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gslpak-35303239069f`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

DROP TABLE IF EXISTS `academic_details`;
CREATE TABLE IF NOT EXISTS `academic_details` (
  `academic_id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) DEFAULT NULL,
  `degreeName` varchar(200) DEFAULT NULL,
  `grade` varchar(30) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `university` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`academic_id`),
  KEY `personal_id` (`personal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`academic_id`, `personal_id`, `degreeName`, `grade`, `year`, `university`) VALUES
(1, 1, '', '', '', ''),
(2, 2, 'dal', '1', '1992', 'furc');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminremarks`
--

DROP TABLE IF EXISTS `adminremarks`;
CREATE TABLE IF NOT EXISTS `adminremarks` (
  `adminRemarks_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobForm_id` int(11) DEFAULT NULL,
  `followUP` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminRemarks_id`),
  KEY `jobForm_id` (`jobForm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminremarks`
--

INSERT INTO `adminremarks` (`adminRemarks_id`, `jobForm_id`, `followUP`, `comments`) VALUES
(1, 1, 'no', 'no'),
(2, 2, 'no', 'no'),
(3, 3, 'yes', 'yes'),
(4, 4, 'no', 'no'),
(5, 5, 'yes', 'yes'),
(6, 6, 'no', 'no'),
(7, 8, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `consultantform`
--

DROP TABLE IF EXISTS `consultantform`;
CREATE TABLE IF NOT EXISTS `consultantform` (
  `consultantForm_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(150) DEFAULT NULL,
  `fatherName` varchar(150) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cnic` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(50) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`consultantForm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultantform`
--

INSERT INTO `consultantform` (`consultantForm_id`, `fullName`, `fatherName`, `phone`, `email`, `cnic`, `date`, `city`, `reference`) VALUES
(1, 'x', 'x', 0, 'x@gmail.com', 'x', '2023-08-23 06:36:48', 'xx', 'x'),
(2, 'zaw', 'xasd', 232123, 'scasd@gamil.com', '313', '2023-10-03 03:58:15', 'wraw', 'waeawe');

-- --------------------------------------------------------

--
-- Table structure for table `countryofinterest`
--

DROP TABLE IF EXISTS `countryofinterest`;
CREATE TABLE IF NOT EXISTS `countryofinterest` (
  `countryOI_id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) DEFAULT NULL,
  `UK` varchar(5) DEFAULT NULL,
  `Australia` varchar(10) DEFAULT NULL,
  `Canada` varchar(10) DEFAULT NULL,
  `USA` varchar(5) DEFAULT NULL,
  `Other` varchar(15) DEFAULT NULL,
  `visaRejectionAny` varchar(5) DEFAULT NULL,
  `reasonVR` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`countryOI_id`),
  KEY `personal_id` (`personal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countryofinterest`
--

INSERT INTO `countryofinterest` (`countryOI_id`, `personal_id`, `UK`, `Australia`, `Canada`, `USA`, `Other`, `visaRejectionAny`, `reasonVR`) VALUES
(1, 1, '', '', '', '', '', '', ''),
(2, 2, 'UK', 'Australia', 'Canada', '', '', 'Yes', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `ieltstype`
--

DROP TABLE IF EXISTS `ieltstype`;
CREATE TABLE IF NOT EXISTS `ieltstype` (
  `ieltsType_id` int(11) NOT NULL AUTO_INCREMENT,
  `mockTestReg_id` int(11) DEFAULT NULL,
  `ieltsType` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ieltsType_id`),
  KEY `mockTestReg_id` (`mockTestReg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ieltstype`
--

INSERT INTO `ieltstype` (`ieltsType_id`, `mockTestReg_id`, `ieltsType`) VALUES
(1, 3, 'Academic'),
(2, 4, 'Academic'),
(3, 5, 'Academic'),
(4, 6, 'Academic'),
(5, 7, 'Academic'),
(6, 8, 'Academic'),
(7, 9, 'Academic'),
(8, 10, 'Academic'),
(9, 16, 'General Training'),
(10, 17, 'General Training'),
(11, 18, 'General Training'),
(12, 19, 'Academic'),
(13, 20, 'Life Skills A1');

-- --------------------------------------------------------

--
-- Table structure for table `jobform`
--

DROP TABLE IF EXISTS `jobform`;
CREATE TABLE IF NOT EXISTS `jobform` (
  `jobForm_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(150) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `coverLetter` varchar(3000) DEFAULT NULL,
  `resume` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`jobForm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobform`
--

INSERT INTO `jobform` (`jobForm_id`, `fullName`, `phone`, `date`, `coverLetter`, `resume`) VALUES
(1, 'z', 556230, '2023-08-23 08:43:15', 'fsdfdsv dsadsa sadaasa dcsd', 'Hamid\'s Resume.pdf'),
(2, 'z', 556230, '2023-08-23 08:46:57', 'fsdfdsv dsadsa sadaasa dcsd', 'Hamid\'s Resume.pdf'),
(3, 'y', 516565565, '2023-08-23 08:47:15', 'fsdfdsf efsdfsd sdfsd', 'Hamid\'s Resume.pdf'),
(4, 'q', 2147483647, '2023-08-23 08:48:51', 'dsc sdsd sds ', 'Hamid\'s Resume.pdf'),
(5, 'r', 2147483647, '2023-08-23 08:49:42', 'thtd dffse assdfsf', 'Hamid\'s Resume.pdf'),
(6, 'o', 2147483647, '2023-08-24 01:01:59', 'vdfv ssdd ', 'Hamid\'s Resume.pdf'),
(7, 'u', 5554554, '2023-08-24 03:03:13', 'ccscdscs ckmkmmks kcmsdmck', 'csdcs'),
(8, 'm', 6526565, '2023-08-24 03:08:41', 'jij jijik', 'jk');

--
-- Triggers `jobform`
--
DROP TRIGGER IF EXISTS `after_jobform_insert`;
DELIMITER $$
CREATE TRIGGER `after_jobform_insert` AFTER INSERT ON `jobform` FOR EACH ROW BEGIN
    INSERT INTO adminremarks (jobForm_id, followUP, comments)
    VALUES (NEW.jobForm_id, 'waiting for response', '');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mocktest_reg`
--

DROP TABLE IF EXISTS `mocktest_reg`;
CREATE TABLE IF NOT EXISTS `mocktest_reg` (
  `mockTestReg_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(150) DEFAULT NULL,
  `cnic` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(30) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mockTestReg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mocktest_reg`
--

INSERT INTO `mocktest_reg` (`mockTestReg_id`, `fullName`, `cnic`, `phoneNumber`, `email`, `date`) VALUES
(1, 'x', 'x', 'x', 'x@gmail.com', '2023-08-23 06:45:35'),
(2, 'Abu Baker', '374090034849', '0333-5954599', 'abubaker0818@gmail.com', '2023-08-23 06:47:26'),
(3, 'ali', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:19:51'),
(4, 'y', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:25:39'),
(5, 'm', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:26:31'),
(6, 'p', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:26:54'),
(7, 'p', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:26:54'),
(8, 'o', '1354345', '051642313', 'ali@gmail.com', '2023-08-23 07:27:18'),
(9, 'zx', '1212', '1234', 'asd', '2023-10-02 06:29:22'),
(10, 'zx', '1212', '1234', 'asd', '2023-10-02 06:34:38'),
(11, 'zain', '3405', '03119590197', 'uhanif30@gmail.com', '2023-10-02 06:43:04'),
(12, 'zain', '3405', '03119590197', 'uhanif30@gmail.com', '2023-10-02 06:52:59'),
(13, 'zain', '3405', '03119590197', 'uhanif30@gmail.com', '2023-10-02 06:53:31'),
(14, 'usama', '3740547548349', '03119590197', 'uhanif320@gmail.com', '2023-10-02 07:13:39'),
(15, 'usama', '3740547548349', '03119590197', 'uhanif320@gmail.com', '2023-10-02 07:18:35'),
(16, 'usama', '3740547548349', '03119590197', 'uhanif320@gmail.com', '2023-10-02 07:21:19'),
(17, 'usama', '3740547548349', '03119590197', 'uhanif320@gmail.com', '2023-10-02 07:21:53'),
(18, 'usama', '3740547548349', '03119590197', 'uhanif320@gmail.com', '2023-10-02 07:31:59'),
(19, 'x', '3740547548349', 'w9321', 'uhanif320@gmail.com', '2023-10-03 02:55:23'),
(20, 'zain', '3123', '0311', 'uhanif30@gmail.com', '2023-10-03 03:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `oettype`
--

DROP TABLE IF EXISTS `oettype`;
CREATE TABLE IF NOT EXISTS `oettype` (
  `oettype_id` int(11) NOT NULL AUTO_INCREMENT,
  `mockTestReg_id` int(11) DEFAULT NULL,
  `oetType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`oettype_id`),
  KEY `mockTestReg_id` (`mockTestReg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oettype`
--

INSERT INTO `oettype` (`oettype_id`, `mockTestReg_id`, `oetType`) VALUES
(1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE IF NOT EXISTS `personal_details` (
  `personal_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(150) DEFAULT NULL,
  `fatherName` varchar(150) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cnic` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(50) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`personal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`personal_id`, `fullName`, `fatherName`, `phone`, `email`, `cnic`, `date`, `city`, `reference`) VALUES
(1, 'Muhammad Abu Baker Bin Tariq', 'Tariq Mehmood', 2147483647, 'abtandco18@gmail.com', '1234567891234', '2023-08-23 07:05:54', 'Islamabad', 'none'),
(2, 'dsa', 'ada', 3132, 'uhanif30@gmail.com', '23214', '2023-10-03 04:01:59', 'wea', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `professional_details`
--

DROP TABLE IF EXISTS `professional_details`;
CREATE TABLE IF NOT EXISTS `professional_details` (
  `professional_id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) DEFAULT NULL,
  `organizationName` varchar(250) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `period` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`professional_id`),
  KEY `personal_id` (`personal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_details`
--

INSERT INTO `professional_details` (`professional_id`, `personal_id`, `organizationName`, `designation`, `period`) VALUES
(1, 1, '', '', ''),
(2, 2, 'furc', 'rwap', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ptetype`
--

DROP TABLE IF EXISTS `ptetype`;
CREATE TABLE IF NOT EXISTS `ptetype` (
  `ptetype_id` int(11) NOT NULL AUTO_INCREMENT,
  `mockTestReg_id` int(11) DEFAULT NULL,
  `pteType` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ptetype_id`),
  KEY `mockTestReg_id` (`mockTestReg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testmode`
--

DROP TABLE IF EXISTS `testmode`;
CREATE TABLE IF NOT EXISTS `testmode` (
  `testMode_id` int(11) NOT NULL AUTO_INCREMENT,
  `mockTestReg_id` int(11) DEFAULT NULL,
  `testMode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`testMode_id`),
  KEY `mockTestReg_id` (`mockTestReg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testmode`
--

INSERT INTO `testmode` (`testMode_id`, `mockTestReg_id`, `testMode`) VALUES
(1, 1, 'Computer B'),
(2, 3, 'Paper Base'),
(3, 4, 'Paper Base'),
(4, 5, 'Paper Base'),
(5, 6, 'Paper Base'),
(6, 7, 'Paper Base'),
(7, 8, 'Paper Base'),
(8, 18, 'Paper Based'),
(9, 19, 'Paper Based'),
(10, 20, 'Paper Based');

-- --------------------------------------------------------

--
-- Table structure for table `testtype`
--

DROP TABLE IF EXISTS `testtype`;
CREATE TABLE IF NOT EXISTS `testtype` (
  `testtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `mockTestReg_id` int(11) DEFAULT NULL,
  `testtype` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`testtype_id`),
  KEY `mockTestReg_id` (`mockTestReg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtype`
--

INSERT INTO `testtype` (`testtype_id`, `mockTestReg_id`, `testtype`) VALUES
(1, 1, 'OET'),
(2, 2, 'IELTS'),
(3, 3, 'IELTS'),
(4, 4, 'IELTS'),
(5, 5, 'IELTS'),
(6, 6, 'IELTS'),
(7, 7, 'IELTS'),
(8, 8, 'IELTS'),
(9, 9, 'IELTS'),
(10, 10, 'IELTS'),
(11, 11, 'IELTS'),
(12, 12, 'IELTS'),
(13, 13, 'IELTS'),
(14, 14, 'IELTS'),
(15, 15, 'IELTS'),
(16, 16, 'IELTS'),
(17, 17, 'IELTS'),
(18, 18, 'IELTS'),
(19, 19, 'IELTS'),
(20, 20, 'IELTS');

-- --------------------------------------------------------

--
-- Table structure for table `uploadjobs`
--

DROP TABLE IF EXISTS `uploadjobs`;
CREATE TABLE IF NOT EXISTS `uploadjobs` (
  `job_ID` int(11) NOT NULL AUTO_INCREMENT,
  `jobTitle` varchar(15) DEFAULT NULL,
  `jobType` varchar(15) DEFAULT NULL,
  `jobDescription` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`job_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadjobs`
--

INSERT INTO `uploadjobs` (`job_ID`, `jobTitle`, `jobType`, `jobDescription`) VALUES
(1, 'Test', 'Full Time', 'XYZ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD CONSTRAINT `academic_details_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `personal_details` (`personal_id`);

--
-- Constraints for table `adminremarks`
--
ALTER TABLE `adminremarks`
  ADD CONSTRAINT `adminRemarks_ibfk_1` FOREIGN KEY (`jobForm_id`) REFERENCES `jobform` (`jobForm_id`);

--
-- Constraints for table `countryofinterest`
--
ALTER TABLE `countryofinterest`
  ADD CONSTRAINT `countryofinterest_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `personal_details` (`personal_id`);

--
-- Constraints for table `ieltstype`
--
ALTER TABLE `ieltstype`
  ADD CONSTRAINT `ieltstype_ibfk_1` FOREIGN KEY (`mockTestReg_id`) REFERENCES `mocktest_reg` (`mockTestReg_id`);

--
-- Constraints for table `oettype`
--
ALTER TABLE `oettype`
  ADD CONSTRAINT `oettype_ibfk_1` FOREIGN KEY (`mockTestReg_id`) REFERENCES `mocktest_reg` (`mockTestReg_id`);

--
-- Constraints for table `professional_details`
--
ALTER TABLE `professional_details`
  ADD CONSTRAINT `professional_details_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `personal_details` (`personal_id`);

--
-- Constraints for table `ptetype`
--
ALTER TABLE `ptetype`
  ADD CONSTRAINT `ptetype_ibfk_1` FOREIGN KEY (`mockTestReg_id`) REFERENCES `mocktest_reg` (`mockTestReg_id`);

--
-- Constraints for table `testmode`
--
ALTER TABLE `testmode`
  ADD CONSTRAINT `testmode_ibfk_1` FOREIGN KEY (`mockTestReg_id`) REFERENCES `mocktest_reg` (`mockTestReg_id`);

--
-- Constraints for table `testtype`
--
ALTER TABLE `testtype`
  ADD CONSTRAINT `testtype_ibfk_1` FOREIGN KEY (`mockTestReg_id`) REFERENCES `mocktest_reg` (`mockTestReg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
