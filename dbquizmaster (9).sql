-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 02:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbquizmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Techno', 'info@technothinksup.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assigncompetition`
--

CREATE TABLE `assigncompetition` (
  `assigncompetitionid` int(11) NOT NULL,
  `competitionid` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assigncompetition`
--

INSERT INTO `assigncompetition` (`assigncompetitionid`, `competitionid`, `pincode`, `user_id`) VALUES
(1, 1, 30, 17),
(2, 1, 30, 16),
(3, 1, 30, 19),
(4, 1, 33, 0),
(5, 1, 33, 0),
(6, 1, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bannerid` bigint(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `slider_possition` bigint(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bannerid`, `title`, `subtitle`, `profile_image`, `slider_possition`, `created_date`) VALUES
(1, 'Preview: Aus vs India, 1st Test', 'Australia host India in the first of four Tests starting this Thursday and here\'s all you need to know', 'profile_image_1_1608269477.jpg', 1, '0000-00-00 00:00:00'),
(2, 'Preview: Aus vs India, 1st Test', 'Australia host India in the first of four Tests starting this Thursday and here\'s all you need to know', 'profile_image_2_1608269490.jpg', 1, '0000-00-00 00:00:00'),
(5, 'Preview: Aus vs India, 1st Test', 'Australia host India in the first of four Tests starting this Thursday and here\'s all you need to know', 'profile_image_5_1608269500.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` bigint(50) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `countryid` bigint(50) NOT NULL,
  `stateid` bigint(50) NOT NULL,
  `ceated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `countryid`, `stateid`, `ceated_date`) VALUES
(1, 'kolhapur', 1, 1, '2020-12-05 00:00:00'),
(2, 'sangali', 1, 1, '2020-12-05 00:00:00'),
(3, 'satara', 1, 1, '2020-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` bigint(20) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `company_address` varchar(350) NOT NULL,
  `company_city` varchar(150) NOT NULL,
  `company_state` varchar(150) NOT NULL,
  `company_district` varchar(150) NOT NULL,
  `company_statecode` bigint(20) NOT NULL,
  `company_pincode` varchar(20) DEFAULT NULL,
  `company_mob1` varchar(12) NOT NULL,
  `company_mob2` varchar(12) NOT NULL,
  `company_email` varchar(150) NOT NULL,
  `company_website` varchar(150) NOT NULL,
  `company_pan_no` varchar(12) NOT NULL,
  `company_gst_no` varchar(100) NOT NULL,
  `company_lic1` varchar(150) NOT NULL,
  `company_lic2` varchar(150) NOT NULL,
  `company_start_date` varchar(15) NOT NULL,
  `company_end_date` varchar(15) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `company_seal` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_city`, `company_state`, `company_district`, `company_statecode`, `company_pincode`, `company_mob1`, `company_mob2`, `company_email`, `company_website`, `company_pan_no`, `company_gst_no`, `company_lic1`, `company_lic2`, `company_start_date`, `company_end_date`, `company_logo`, `company_seal`, `date`) VALUES
(1, 'Output Books', 'fghfgh dfgh', 'Kolhapur', 'Maharashtra', 'Kolhaput', 0, '111222', '9876543210', '9998887770', 'demo@email.com', 'www.ppp.com', '111', '222', '333', '444', '01-1-2019', '01-1-2021', 'company_logo_1_1607606087.jpg', '', '2020-12-10 13:14:47'),
(2, 'a', 'kkk', '', '', '', 0, '410', '8888888888', '', 'manish@gmail.com', '', '', '', '', '', '', '', 'company_logo_2_1607668284.jpg', '', '2020-12-11 06:31:24'),
(3, 'techenvision', 'rajarampuri kolhapur', '', '', '', 0, '416012', '7777777777', '', 'techenvision@gmail.com', '', '', '', '', '', '', '', 'company_logo_3_1607668265.jpg', '', '2020-12-11 06:31:05'),
(4, 'Quiz Competition', 'D-38 IND Area Phase I Mohali, Chandigarh-160055, India', '', '', '', 0, '160055', '9041650633', '', 'support@cracslab.com', '', '', '', '', '', '', '', 'company_logo_1607672261.jpg', '', '2020-12-11 08:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `compeitionprofilemaster`
--

CREATE TABLE `compeitionprofilemaster` (
  `competitionprofileid` bigint(20) NOT NULL,
  `competitionid` bigint(20) NOT NULL,
  `profileid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `competitionid` bigint(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `tabinputtextid` bigint(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `termsandconditions` varchar(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`competitionid`, `title`, `subtitle`, `class`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `created_date`) VALUES
(1, 'Diagnostic Quiz', 'The first quiz type is the Diagnostic Quiz.', 'Nursery - Class 1', 1, 'img8.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', '2020-12-10 00:00:00'),
(2, 'Buzzfeed Style Quiz', 'Register to see competition topic', 'Nursery - Class 1', 1, 'img9.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', '2020-12-10 00:00:00'),
(3, 'Geography', 'Register to see competition topic', 'Nursery - Class 1', 2, 'img8.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', '2020-12-10 00:00:00'),
(4, 'Personality Quiz', 'Register to see competition topic', 'Nursery - Class 1', 2, 'img9.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', '2020-12-10 00:00:00'),
(5, ' True/False Quiz', 'Register to see competition topic', 'Nursery - Class 1', 1, 'img8.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-12-10 00:00:00'),
(6, 'Assessment Quiz', 'Register to see competition topic', 'Nursery - Class 1', 3, 'img9.jpg', 'xxxx', 'xx', '0000-00-00 00:00:00'),
(7, 'Matching Quiz', 'Register to see competition topic', 'Nursery - Class 1', 3, 'img8.jpg', 'xxxx', 'xx', '2020-12-10 00:00:00'),
(8, 'Envirnment', 'Register to see competition topic', 'Nursery - Class 1', 1, 'img9.jpg', 'jjjjjjj', 'jjjjjjjjjj', '2020-12-10 00:00:00'),
(9, 'IT', 'Register to see competition topic', 'Nursery - Class 1', 4, 'img8.jpg', 'aaaaaaaa', 'aaaaaaaaaa', '2020-12-14 05:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryid` bigint(50) NOT NULL,
  `countryname` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `countryname`, `created_date`) VALUES
(1, 'India', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` bigint(50) NOT NULL,
  `districtname` varchar(255) NOT NULL,
  `countryid` bigint(50) NOT NULL,
  `stateid` bigint(50) NOT NULL,
  `cityid` bigint(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `districtname`, `countryid`, `stateid`, `cityid`, `created_date`) VALUES
(1, 'ajara', 1, 1, 1, '2020-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pincodemaster`
--

CREATE TABLE `pincodemaster` (
  `pincodeid` bigint(50) NOT NULL,
  `countryid` bigint(50) NOT NULL,
  `stateid` bigint(50) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pincodemaster`
--

INSERT INTO `pincodemaster` (`pincodeid`, `countryid`, `stateid`, `district`, `city`, `pincode`) VALUES
(1, 1, 22, 'kolhapur', 'kolhapur', 416012),
(2, 1, 8, 'abc', 'abc', 400255);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileid` bigint(50) NOT NULL,
  `parentname` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `schoolcollegename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileid`, `parentname`, `age`, `emailid`, `grade`, `schoolcollegename`, `address`, `pincode`, `competitionid`, `user_id`, `created_date`) VALUES
(1, 'Manish Patil', '10', 'manish@gmail.com', '2', 'english model school', 'Kolhapur', 1, 1, 1, '0000-00-00'),
(2, 'techenvision', '10', 'tech@gmail.com', '3', 'english model school', 'kolhapur', 1, 1, 2, '0000-00-00'),
(3, 'Rohan Wordpress', '20', 'rohan@gmail.com', '4', 'english model school', 'kkk', 2, 3, 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` bigint(50) NOT NULL,
  `statename` varchar(255) NOT NULL,
  `countryid` bigint(50) NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`, `countryid`, `created_date`) VALUES
(1, 'Andaman and Nicobar Islands', 1, '0000-00-00 00:00:00'),
(2, 'Andhra Pradesh', 1, '0000-00-00 00:00:00'),
(3, 'Arunachal Pradesh', 1, '0000-00-00 00:00:00'),
(4, 'Assam', 1, '0000-00-00 00:00:00'),
(5, 'Bihar', 1, '0000-00-00 00:00:00'),
(6, 'Chandigarh', 1, '0000-00-00 00:00:00'),
(7, 'Chhattisgarh', 1, '0000-00-00 00:00:00'),
(8, 'Dadra and Nagar Haveli', 1, '0000-00-00 00:00:00'),
(9, 'Daman and Diu', 1, '0000-00-00 00:00:00'),
(10, 'Delhi-NCR', 1, '0000-00-00 00:00:00'),
(11, 'Goa', 1, '0000-00-00 00:00:00'),
(12, 'Gujarat', 1, '0000-00-00 00:00:00'),
(13, 'Haryana', 1, '0000-00-00 00:00:00'),
(14, 'Himachal Pradesh', 1, '0000-00-00 00:00:00'),
(15, 'Jammu and Kashmir', 1, '0000-00-00 00:00:00'),
(16, 'Jharkhand', 1, '0000-00-00 00:00:00'),
(17, 'Karnataka', 1, '0000-00-00 00:00:00'),
(18, 'Kenmore', 1, '0000-00-00 00:00:00'),
(19, 'Kerala', 1, '0000-00-00 00:00:00'),
(20, 'Lakshadweep', 1, '0000-00-00 00:00:00'),
(21, 'Madhya Pradesh', 1, '0000-00-00 00:00:00'),
(22, 'Maharashtra', 1, '0000-00-00 00:00:00'),
(23, 'Manipur', 1, '0000-00-00 00:00:00'),
(24, 'Meghalaya', 1, '0000-00-00 00:00:00'),
(25, 'Mizoram', 1, '0000-00-00 00:00:00'),
(26, 'Nagaland', 1, '0000-00-00 00:00:00'),
(27, 'Narora', 1, '0000-00-00 00:00:00'),
(28, 'Natwar', 1, '0000-00-00 00:00:00'),
(29, 'Odisha', 1, '0000-00-00 00:00:00'),
(30, 'Paschim Medinipur', 1, '0000-00-00 00:00:00'),
(31, 'Pondicherry', 1, '0000-00-00 00:00:00'),
(32, 'Punjab', 1, '0000-00-00 00:00:00'),
(33, 'Rajasthan', 1, '0000-00-00 00:00:00'),
(34, 'Sikkim', 1, '0000-00-00 00:00:00'),
(35, 'Tamil Nadu', 1, '0000-00-00 00:00:00'),
(36, 'Telangana', 1, '0000-00-00 00:00:00'),
(37, 'Tripura', 1, '0000-00-00 00:00:00'),
(38, 'TEST', 1, '0000-00-00 00:00:00'),
(39, 'UP-1', 1, '0000-00-00 00:00:00'),
(40, 'xxxxxx', 1, '0000-00-00 00:00:00'),
(41, 'West Bengal', 1, '0000-00-00 00:00:00'),
(42, 'UP-2', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabcompetition`
--

CREATE TABLE `tabcompetition` (
  `tabinputtextid` bigint(50) NOT NULL,
  `tabinputtext` varchar(255) NOT NULL,
  `tabid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabcompetition`
--

INSERT INTO `tabcompetition` (`tabinputtextid`, `tabinputtext`, `tabid`) VALUES
(1, 'Nur-1st', 'nur-class1'),
(2, '2nd-5th', 'class2-class5'),
(3, '6th-9th', 'class6-class9'),
(4, 'Males(18+)', 'male'),
(5, 'Females(18+)', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `roll_id` int(11) NOT NULL DEFAULT '2',
  `user_name` varchar(250) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_pincode` bigint(50) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_otp` varchar(10) DEFAULT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active',
  `user_addedby` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `company_id`, `branch_id`, `roll_id`, `user_name`, `user_address`, `user_pincode`, `user_city`, `user_email`, `user_mobile`, `user_password`, `user_otp`, `user_status`, `user_addedby`, `user_date`, `is_admin`) VALUES
(1, 0, '', 2, 'Rohan Patil', '', 1, '', '', '9874563210', '', NULL, 'active', '1', '2020-12-21 09:01:20', 1),
(2, 0, '', 2, 'techenvision', '', 1, '', '', '8956230147', '', NULL, 'active', '1', '2020-12-21 09:03:28', 1),
(3, 0, '', 2, 'rohanwordpress', '', 2, '', '', '7777777777', '', NULL, 'active', '2', '2020-12-21 10:17:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `winnerid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `profileid` bigint(50) NOT NULL,
  `cityid` bigint(50) NOT NULL,
  `winnerno` bigint(50) NOT NULL,
  `is_admin` bigint(10) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assigncompetition`
--
ALTER TABLE `assigncompetition`
  ADD PRIMARY KEY (`assigncompetitionid`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `compeitionprofilemaster`
--
ALTER TABLE `compeitionprofilemaster`
  ADD PRIMARY KEY (`competitionprofileid`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`competitionid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Indexes for table `pincodemaster`
--
ALTER TABLE `pincodemaster`
  ADD PRIMARY KEY (`pincodeid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `tabcompetition`
--
ALTER TABLE `tabcompetition`
  ADD PRIMARY KEY (`tabinputtextid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mobile` (`user_mobile`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`winnerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assigncompetition`
--
ALTER TABLE `assigncompetition`
  MODIFY `assigncompetitionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `compeitionprofilemaster`
--
ALTER TABLE `compeitionprofilemaster`
  MODIFY `competitionprofileid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `competitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pincodemaster`
--
ALTER TABLE `pincodemaster`
  MODIFY `pincodeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tabcompetition`
--
ALTER TABLE `tabcompetition`
  MODIFY `tabinputtextid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winnerid` bigint(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;