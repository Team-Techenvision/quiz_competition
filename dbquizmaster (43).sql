-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 02:08 PM
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
  `user_id1` int(50) NOT NULL,
  `user_name1` varchar(255) NOT NULL,
  `user_id2` int(50) NOT NULL,
  `user_name2` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assigncompetition`
--

INSERT INTO `assigncompetition` (`assigncompetitionid`, `competitionid`, `pincode`, `user_id1`, `user_name1`, `user_id2`, `user_name2`, `created_date`) VALUES
(1, 1, 1, 1, 'Admin', 6, 'Datta Mane', '0000-00-00'),
(2, 2, 1, 50, 'Vinayak Baleghate', 51, 'Rohan Patil', '0000-00-00'),
(3, 1, 2, 19, '', 53, '', '0000-00-00'),
(4, 1, 3, 0, '', 0, '', '0000-00-00'),
(5, 1, 3, 0, '', 0, '', '0000-00-00'),
(6, 1, 3, 0, '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `assignwinner`
--

CREATE TABLE `assignwinner` (
  `assignwinnerid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `pincodeid` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignwinner`
--

INSERT INTO `assignwinner` (`assignwinnerid`, `competitionid`, `pincodeid`, `user_id`) VALUES
(1, 1, 1, 1),
(8, 2, 1, 6);

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
(4, 'Quiz Competition', 'D-38 IND Area Phase I Mohali, Chandigarh-160055, India', '', '', '', 0, '160055', '9041650633', '', 'support@cracslab.com', '', '', '', '', '', '', '', 'company_logo_4_1608890734.png', '', '2020-12-25 10:05:34');

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
  `competitiontypeid` int(50) NOT NULL,
  `competitionusertype` bigint(50) NOT NULL,
  `levelid` bigint(50) NOT NULL,
  `fromage` bigint(50) NOT NULL,
  `toage` bigint(50) NOT NULL,
  `enddate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `subjectstextarea` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `tabinputtextid` bigint(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `termsandconditions` varchar(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `uploadfile` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `whatsappnumber` char(12) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `class`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `created_date`) VALUES
(1, 2, 0, 1, 5, 7, '1970-01-01', 'Diagnostic Quiz', 'Register to see competition topic', '<ul><li>xyz</li><li>abc</li></ul>', 'Nursery - Class 1', 1, 'photo_1610351144.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '', '2021-01-08 08:06:29'),
(2, 1, 0, 1, 5, 7, '1970-01-01', 'Buzzfeed Style Quiz', 'Register to see competition topic', '', 'Nursery - Class 1', 1, 'photo_1610351525.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '2021-01-05 12:33:32'),
(3, 1, 0, 1, 5, 7, '2021-01-21', 'Geography', 'Register to see competition topic', '', 'Nursery - Class 1', 1, 'photo_1610351921.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '2020-12-30 11:44:26'),
(4, 1, 1, 1, 8, 11, '2021-01-27', 'Personality Quiz', 'Register to see competition topic', '', 'Class 2 - Class 5', 2, 'photo_4_1611751248.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '2021-01-27 12:40:48'),
(5, 1, 1, 1, 8, 11, '2021-01-27', 'True/False Quiz', 'Register to see competition topic', '', 'Class 2 - Class 5', 2, 'photo_5_1611751122.jpg', 'sad\r\n', 'assssssss', 0, 0, '', 0, '0', '2021-01-27 12:38:42'),
(6, 1, 1, 1, 12, 15, '2021-01-28', 'Assessment Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_6_1611751903.jpg', 'xxxx', 'xx', 0, 0, '', 0, '0', '2021-01-27 12:51:43'),
(7, 1, 1, 1, 12, 15, '2021-03-10', 'Matching Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_7_1611982112.jpg', 'xxxx', 'xx', 1, 0, '', 0, '0', '2021-01-30 04:48:32'),
(9, 1, 1, 1, 12, 15, '2021-01-28', 'IT Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_9_1611752081.jpg', 'aaaaaaaa', 'aaaaaaaaaa', 0, 0, '', 0, '0', '2021-01-27 12:54:41'),
(11, 1, 0, 2, 18, 25, '2020-12-29', 'second package', 'Register to see competition topic', '', 'Male(18+)', 4, 'photo_1610696124.jpg', 'aass', 'ddd', 0, 0, '', 0, '0', '2020-12-30 11:48:21'),
(12, 1, 1, 1, 12, 15, '2021-03-10', 'Maths Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_12_1611982189.jpg', 'sd', 'sd', 0, 0, '', 0, '0', '2021-01-30 04:49:49'),
(13, 1, 0, 1, 12, 15, '2020-12-15', 'singing', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_1612270794.jpg', 'asssssa', 'sdsadada', 0, 0, '', 0, '0', '2020-12-30 11:25:02'),
(14, 1, 0, 1, 12, 15, '1970-01-01', 'quiz', 'Register to see competition topic', '<ul><li>maths</li><li>english</li></ul>', 'class 6 - class 9', 2, 'photo_1609501026.jpg', 'aaaaa', 'aaaaaaaa', 0, 0, '', 0, '0', '2021-01-01 11:37:06'),
(15, 1, 0, 1, 2, 7, '2021-01-21', 'first package', 'Register to see competition topic', '<ul><li>asa</li></ul>', 'Nursery - Class 1', 1, 'photo_1609585575.jpg', 'sdsa', 'sad', 0, 0, '', 0, '0', '2021-01-02 11:06:15'),
(16, 2, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>ssd</p>', 'Nursery - Class 1', 2, 'photo_1609586639.jpg', 'ZCDDF', 'FSDSDD', 0, 0, '', 0, '0', '2021-01-02 11:23:58'),
(17, 1, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>dsaf</p>', 'Nursery - Class 1', 1, 'photo_1609586692.jpg', 'tgdxtr', 'fgvc', 0, 0, '', 0, '0', '2021-01-02 11:24:52'),
(18, 2, 0, 1, 14, 16, '1970-01-01', 'science quiz', 'Register to see competition topic', '<p>dddddddddf</p>', 'class 6 - class 9', 3, 'photo_18_1610093223.jpg', 'ughn', 'hjjjhy', 1, 0, '', 0, '0', '2021-01-08 08:07:02'),
(19, 1, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 'class 6 - class 9', 2, 'photo_1609852283.jpg', 'sd', 'sdd', 0, 0, '', 0, '0', '2021-01-05 13:11:23'),
(20, 1, 0, 1, 5, 8, '2021-01-09', 'first package', 'Register to see competition topic', 'ds', 'Nursery - Class 1', 1, 'photo_20_1610093311.jpg', 'gdg', 'fd', 1, 0, '', 0, '0', '2021-01-08 08:08:31'),
(21, 1, 0, 1, 4, 5, '2021-01-07', 'first package', 'Register to see competition topic', 'xfs', 'Nursery - Class 1', 1, 'photo_21_1609924059.jpg', 'jj', 'jj', 0, 0, '', 0, '0', '2021-01-06 09:07:39'),
(22, 2, 0, 1, 4, 6, '2021-01-14', 'first package', 'Register to see competition topic', 'd', 'Nursery - Class 1', 1, 'photo_22_1610093270.jpg', 'gtdg', ' vgf', 1, 0, '', 0, '0', '2021-01-08 08:07:50'),
(23, 2, 0, 1, 7, 9, '2021-01-12', 'first package', 'Register to see competition topic', 'jhg', 'Nursery - Class 1', 1, 'photo_23_1610093286.jpg', 'ghrh', 'bhh', 1, 0, '', 0, '0', '2021-01-08 08:08:06'),
(24, 2, 0, 1, 4, 9, '2021-01-14', 'first package', 'Register to see competition topic', ';lj', 'Nursery - Class 1', 1, 'photo_24_1610093250.jpg', 'yh', 'h', 1, 0, '', 0, '0', '2021-01-08 08:07:30'),
(25, 1, 0, 1, 15, 18, '2021-01-08', 'first package', 'Register to see competition topic', 'ghf', 'class 6 - class 9', 3, 'photo_1609924026.jpg', ' dfd', 'ds', 0, 0, '', 0, '0', '2021-01-06 09:07:06'),
(26, 3, 1, 1, 12, 15, '2021-02-10', 'Dancing Competition', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_26_1612269702.jpg', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 0, 1, 'demo@gmail.com', 1, '9999999999', '2021-02-02 12:41:42'),
(27, 1, 0, 4, 12, 15, '2021-01-21', 'easy', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_27_1610093339.jpg', 'sgdf', 'fsgsdf', 1, 0, '', 0, '', '2021-01-08 08:08:59'),
(28, 2, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_1610090867.jpg', 'xzC', 'xc', 0, 0, '', 0, '', '2021-01-08 07:27:47'),
(29, 1, 0, 2, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_1610090955.jpg', 'fghh', 'fgfgfgf', 0, 0, '', 0, '', '2021-01-08 07:29:15'),
(30, 1, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_1610091769.jpg', 'jhhhhhhhh', 'hfg', 1, 0, '', 0, '', '2021-01-08 07:42:49'),
(32, 1, 0, 1, 4, 5, '2021-01-22', 'first package', 'Register to see competition topic', '', 'Nursery - Class 1', 1, 'photo_1610091875.jpg', 'gjhgf', 'hgj', 1, 0, '', 0, '', '2021-01-08 07:44:35'),
(33, 1, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_1610092034.jpg', 'ghfh', 'dfghgh', 0, 0, '', 0, '9999999999', '2021-01-08 07:47:14'),
(36, 2, 0, 1, 5, 7, '2021-01-21', 'first package', 'Register to see competition topic', '', 'Nursery - Class 1', 1, 'photo_1610092351.jpg', 'gjjjjjjjjjjjj', 'fggggg', 1, 0, '', 1, '9999999999', '2021-01-08 07:52:31'),
(41, 1, 1, 1, 12, 15, '2021-01-27', 'GK Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_41_1611752806.jpg', 'sfdfdd', 'dsfasdf', 0, 0, '', 0, '', '2021-01-27 13:06:46'),
(46, 1, 1, 1, 8, 11, '2021-01-27', 'English Quiz', 'Register to see competition topic', '<div><br></div>', 'Class 2 - Class 5', 2, 'photo_46_1611753197.jpg', 'sdad', 'saaaaaa', 0, 0, '', 0, '', '2021-01-27 13:13:17'),
(47, 1, 1, 1, 12, 15, '2021-01-20', 'GK Quiz', 'Register to see competition topic', '', 'class 6 - class 9', 3, 'photo_47_1610359705.jpg', 'sfafd', 'dsaf', 0, 0, '', 0, '', '2021-01-11 10:08:25'),
(51, 1, 1, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 'Females(18+)', 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '2021-01-15 07:26:25'),
(52, 1, 1, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 'Females(18+)', 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '2021-01-15 07:27:18'),
(53, 1, 1, 1, 8, 10, '2021-02-10', 'Current Affairs Quiz', 'Register to see competition topic', '', 'Class 2 - Class 5', 2, 'photo_53_1611981866.jpg', 'klk', '<p>kll;</p>', 0, 0, '', 0, '', '2021-01-30 04:44:26'),
(59, 2, 1, 2, 18, 25, '2021-03-10', 'Classical Singing', 'Register to see competition topic', '', 'Females(18+)', 5, 'photo_59_1612271205.jpg', 'Participants should send their submissions based on the given topics. Submission should be in the desired format i.e video/ image.&nbsp;', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.', 1, 0, '', 0, '', '2021-02-02 13:06:45'),
(60, 4, 1, 1, 12, 15, '2021-02-10', 'Easy Writing', 'Register to see competition topic', '<ul><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Should plastic be banned?</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Pollution due to Urbanization.</li><li class=\"TrT0X', 'class 6 - class 9', 3, 'photo_60_1612270979.jpg', '<p style=\"margin-top: 1em; margin-bottom: 0px; font-size: 1.125rem; line-height: 1.5; text-align: initial; orphans: 1; hyphens: auto; font-family: \"Times New Roman\", Georgia, \"SBL Greek\", serif;\">An effective set of instruction require', '<ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: ', 1, 0, '', 0, '', '2021-02-02 13:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `competitionquizsubject`
--

CREATE TABLE `competitionquizsubject` (
  `quizsubjectid` bigint(50) NOT NULL,
  `competitionid` bigint(255) NOT NULL,
  `quizsubject` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competitionquizsubject`
--

INSERT INTO `competitionquizsubject` (`quizsubjectid`, `competitionid`, `quizsubject`, `created_date`) VALUES
(1, 46, 'Eng Quiz', '2021-01-11 07:45:44'),
(2, 45, 'Mathematics Quiz', '2021-01-11 07:52:05'),
(4, 47, 'GK Quiz', '2021-01-11 09:21:07'),
(6, 51, 'Current Affairs Quiz', '2021-01-15 07:26:25'),
(7, 52, 'Current Affairs Quiz', '2021-01-15 07:27:18'),
(8, 53, 'Current Affairs Quiz', '2021-01-15 07:30:48'),
(9, 54, 'Current Affairs Quiz', '2021-01-15 07:33:06'),
(10, 55, 'Current Affairs Quiz', '2021-01-15 07:33:56'),
(11, 58, 'Current Affairs Quiz', '2021-01-15 07:35:24'),
(12, 59, 'Current Affairs Quiz', '2021-01-15 07:34:52'),
(13, 60, '', '2021-02-02 12:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `competitiontype`
--

CREATE TABLE `competitiontype` (
  `competitiontypeid` bigint(50) NOT NULL,
  `competitiontype` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competitiontype`
--

INSERT INTO `competitiontype` (`competitiontypeid`, `competitiontype`, `created_date`) VALUES
(1, 'Quiz', '2021-01-11 00:00:00'),
(2, 'Singing', '2021-01-11 07:03:32'),
(3, 'Dancing', '2021-01-11 07:03:42'),
(4, 'Easy Writing', '2021-02-02 12:46:42');

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
-- Table structure for table `dynamiccompetition`
--

CREATE TABLE `dynamiccompetition` (
  `dynamiccompetitionid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answertype` varchar(255) NOT NULL COMMENT '1=RBbtn,2=ChkBbtn,3=textbox,4=textarea,5=ddl',
  `optionvalues` varchar(255) NOT NULL,
  `correctans` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dynamiccompetition`
--

INSERT INTO `dynamiccompetition` (`dynamiccompetitionid`, `competitionid`, `question`, `answertype`, `optionvalues`, `correctans`, `created_date`) VALUES
(10, 1, '	\r\nIndia has largest deposits of ____ in the world.', '1', 'gold,copper,mica,None of the above', '3', '2021-01-07'),
(11, 1, 'how are you?', '1', 'abc,def,ghi,jkl', '2', '2021-01-07'),
(13, 2, 'how are you?', '2', 'g,gf,j,hg', '2', '2021-01-07'),
(15, 1, 'how are you?', '2', 'a,b,c', '1,2', '2021-01-08'),
(29, 1, 'how are you?', '3', '', '', '2021-01-08'),
(30, 1, 'how are you?', '4', '', '', '2021-01-08'),
(34, 1, 'how are you?', '1', 'dsf,a,gdf,gd', '2', '2021-01-08'),
(36, 7, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '5', '\'Jhansi Ki Rani\', Sohrab Modi, Sir Syed Ahmed, \'Mirza Ghalib\'', '1', '2021-01-08'),
(37, 7, 'How many Lok Sabha seats belong to Rajasthan?', '1', '32,25,30,17', '2', '2021-01-08'),
(38, 7, 'ICAO stands for', '2', 'International Civil Aviation Organization,Indian Corporation of Agriculture Organization,Institute of Company of Accounts Organization,None of the above', '1', '2021-01-08'),
(39, 7, 'In which year of First World War Germany declared war on Russia and France?', '3', '', '', '2021-01-08'),
(40, 7, 'In which year, terrorists crash two planes into New York\'s World Trade Centre on September 11 in a sequence of destruction?', '4', '', '', '2021-01-08'),
(41, 4, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', 'dsf,a,dsf,gdf', '3', '2021-01-14'),
(42, 4, 'Which of the following statement is/are correct about Subhash Chandra Bose?', '1', 'iiiii,a,dsf,gdf', '3', '2021-01-12'),
(43, 4, 'Who is known as the political guru of Subhash Chandra Bose?', '2', 'Chittaranjan Das,Gopal Krishna Gokhle,Mahatma Gandhi,Vivekananda', '1', '2021-01-12'),
(44, 4, 'How many Lok Sabha seats belong to Rajasthan?', '2', 'as,sds,dfg,fgh', '1,2,3', '2021-01-12'),
(45, 4, 'ICAO stands for', '2', 'hgh,gfh,ggh,ghh', '3,4', '2021-01-12'),
(46, 4, 'In which year of First World War Germany declared war on Russia and France?', '2', 'ghgh,hh,kk,kk', '1,2', '2021-01-12'),
(47, 4, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', 'kj,h,jk,jk', '2', '2021-01-12'),
(48, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', 'jk,kkk,jku,uuuk', '3', '2021-01-12'),
(49, 4, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '5', 'hk,jk,jk,kjk', '1', '2021-01-12'),
(50, 4, 'In which year of First World War Germany declared war on Russia and France?', '2', 'kjhk,jhkjg,jhg,jk', '1,2,4', '2021-01-12'),
(51, 4, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', '', '', '2021-01-14'),
(52, 4, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', '', '', '2021-01-14'),
(53, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', '', '', '2021-01-14'),
(54, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', '', '', '2021-01-14'),
(55, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', '', '', '2021-01-14'),
(56, 4, 'How many Lok Sabha seats belong to Rajasthan?', '1', '', '', '2021-01-14'),
(57, 4, 'ICAO stands for', '1', '', '', '2021-01-14'),
(58, 4, 'ICAO stands for', '1', 'dsf,a,a,hgj', '', '2021-01-14'),
(59, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', 'dsf,a,h,gdf', '', '2021-01-14'),
(60, 4, 'In which year of First World War Germany declared war on Russia and France?', '1', '', '', '2021-01-15'),
(61, 6, 'How many Lok Sabha seats belong to Rajasthan?', '1', 'dsf,a,h,hgj', '2', '2021-01-15'),
(62, 9, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', 'iiim,iimm,iimn,iidn', '3', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `levelmaster`
--

CREATE TABLE `levelmaster` (
  `levelid` bigint(11) NOT NULL,
  `levelname` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levelmaster`
--

INSERT INTO `levelmaster` (`levelid`, `levelname`, `created_date`) VALUES
(1, 'School Level', '2020-12-30 09:44:37'),
(2, 'Community Level', '2020-12-30 09:45:18'),
(3, 'Town Level', '2020-12-30 09:44:55'),
(4, 'City Level', '2020-12-30 09:45:11'),
(5, 'District Level', '2020-12-30 09:45:45'),
(6, 'State Level', '2020-12-30 09:46:02'),
(7, 'National Level', '2020-12-30 09:46:16');

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
-- Table structure for table `prizemaster`
--

CREATE TABLE `prizemaster` (
  `prizeid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `levelid` bigint(50) NOT NULL,
  `winnerposition` bigint(50) NOT NULL,
  `prize` bigint(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prizemaster`
--

INSERT INTO `prizemaster` (`prizeid`, `competitionid`, `levelid`, `winnerposition`, `prize`, `created_date`) VALUES
(3, 2, 2, 1, 2000, '2021-01-01'),
(4, 7, 2, 1, 5000, '2021-01-15');

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
  `profile_image` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileid`, `parentname`, `age`, `emailid`, `grade`, `schoolcollegename`, `address`, `pincode`, `competitionid`, `user_id`, `profile_image`, `created_date`) VALUES
(1, 'Manish Patil', '10', 'manish@gmail.com', '2', 'english model school', 'Kolhapur', 1, 19, 62, '', '2021-01-15'),
(2, 'techenvision', '10', 'tech@gmail.com', '3', 'english model school', 'kolhapur', 1, 1, 50, '', '0000-00-00'),
(3, 'Manish Patil', '10', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, 5, 36, 'profile_image_1_1609322335.PNG', '0000-00-00'),
(4, 'mohan patil', '10', 'manish@gmail.com', '', 'english model school', 'kkk', 2, 34, 12, '', '0000-00-00'),
(6, 'manish patil', '10', 'manish@gmail.com', '', 'english model school', 'kkk', 2, 26, 53, 'profile1.jpg', '2020-12-29'),
(7, 'manish patil', '10', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, 7, 29, '', '2020-12-25'),
(8, 'manish patil', '10', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, 36, 30, '', '2020-12-25'),
(9, 'Rohan Wordpress', '10', 'manish@gmail.com', '4', 'english model school', 'kkk', 1, 5, 33, '', '2020-12-25'),
(10, 'manish patil', '10', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, 7, 34, '', '2020-12-25'),
(11, 'Manish Patil', '10', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, 6, 1, 'profile_image_1_1609322335.PNG', '2020-12-25'),
(12, 'manisha Pawar', '20', 'manish@gmail.com', '', 'english model school', 'kkk', 2, 7, 6, 'profile_image_6_1609303697.gif', '2020-12-25'),
(13, 'manish patil', '10', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, 6, 18, '', '2020-12-25'),
(14, 'Rohan Wordpress', '10', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, 5, 16, '', '2020-12-25'),
(15, 'Komal kadam', '10', 'manish@gmail.com', '4', 'english model school', 'kkk', 1, 7, 17, '', '2020-12-25'),
(16, 'kiran kadam', '10', 'kiran@gmail.com', '3', 'english model school', 'kkk', 1, 10, 55, '', '2020-12-25'),
(17, 'prathamesh chavan', '22', 'pppp@gmail.com', '3', 'english model school', 'kkk', 1, 10, 56, '', '2020-12-25'),
(18, 'manish patil', '10', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, 11, 20, '', '2020-12-31'),
(19, 'Manish Patil', '10', 'manish@gmail.com', '1', 'english model school', 'kkk', 2, 2, 21, '', '2020-12-31'),
(20, 'Rohan Wordpress', '10', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, 2, 23, '', '2020-12-31'),
(21, 'Rohan Wordpress', '10', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, 1, 57, '', '2021-01-01'),
(22, 'Kamini patil', '13', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, 7, 62, '', '2021-01-15'),
(23, 'monika desai', '15', 'monika@gmail.com', '5', 'english model school', 'kkk', 1, 14, 35, '', '2021-01-01'),
(24, 'Prakash', '15', 'prakash@gmail.com', '2', 'english model school', 'kkk', 2, 6, 58, 'profile_image_58_1609503496.jpg', '2021-01-01'),
(25, 'Rohan Wordpress', '12', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, 2, 59, '', '2021-01-02'),
(26, 'Manish Mane', '12', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, 53, 62, '', '2021-01-15'),
(27, 'Suresh Gavali', '23', 'sayali@gamil.com', '1', 'dot', 'Kolhapur', 1, 59, 63, '', '2021-01-20'),
(28, 'manish patil', '12', 'manish@gmail.com', '1', 'english model school', 'kkk', 416012, 53, 65, 'profile_image_65_1612261096.PNG', '2021-02-02'),
(29, 'Bhimrao Chavan', '20', 'manishc@gmail.com', '3', 'english model school', 'kolhapur', 416012, 53, 92, '', '2021-02-02'),
(30, 'Ganesh Chavan', '12', 'manish@gmail.com', '2', 'english model school', 'kkk', 416012, 53, 93, '', '2021-02-02');

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
(1, 1, '', 1, 'Admin', '', 1, 'Kolhapur', 'demo@email.com', '9876543210', '123456', NULL, 'active', 'Admin', '2020-12-25 06:58:39', 0),
(6, 1, '', 2, 'Datta Mane', 'kop\r\n', 416012, 'Kop', 'datta@mail.com', '9673454383', '123456', NULL, 'active', '0', '2021-01-28 13:17:18', 0),
(11, 1, '', 2, 'rohan wordpress', 'kop', 2, 'kolhapur', 'rohan@gm.com', '897456210', '123', NULL, 'active', '0', '2020-12-25 06:58:48', 0),
(12, 1, '', 2, 'techenvision', 'rajarampuri', 2, 'kop', 'techenvision@gmail.com', '8421751394', 'tech', '11', 'active', '0', '2021-01-21 06:08:05', 0),
(16, 0, '', 2, 'techenvision', '', 416012, '', '', '9999999999', '', '123654', 'active', '1', '2020-12-15 01:18:59', 1),
(17, 0, '', 2, 'tech', '', 416012, '', '', '7777777777', '', '30', 'active', '1', '2020-12-15 01:19:03', 1),
(18, 1, '', 2, 'abc', 'kk', 0, 'kolhapur', 'manish@gmail.com', '7845127845', '1234567', NULL, 'active', '1', '2020-12-15 01:17:00', 0),
(19, 0, '', 2, 'rohan wordpress', '', 123, '', '', '6666666666', '', '123456', 'active', '1', '2020-12-15 01:19:05', 1),
(20, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9856325698', '', '10000', 'active', '1', '2020-12-15 01:19:07', 1),
(21, 0, '', 2, 'rohan wordpress', '', 4444444, '', '', '8888888888', '', NULL, 'active', '1', '2020-12-15 01:19:10', 1),
(23, 0, '', 2, 'rohan wordpress', '', 416, '', '', '744444444', '', NULL, 'active', '1', '2020-12-15 01:19:14', 1),
(25, 0, '', 2, 'rohan wordpress', 'kkk', 410, 'kolhapur', 'rrr@mail.com', '7845211254', '123', NULL, 'active', '0', '2020-12-15 01:14:49', 0),
(26, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563214', '', NULL, 'active', '1', '2020-12-15 01:19:21', 1),
(29, 0, '', 2, 'rohan wordpress', '', 410512, '', '', '9874563215', '', NULL, 'active', '1', '2020-12-15 01:19:23', 1),
(30, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222222222', '', NULL, 'active', '1', '2020-12-15 01:19:25', 1),
(33, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222', '', NULL, 'active', '1', '2020-12-15 01:19:28', 1),
(34, 0, '', 2, 'rohan wordpress', '', 411, '', '', '1111111111', '', NULL, 'active', '1', '2020-12-15 01:19:31', 1),
(35, 0, '', 2, 'rohan wordpress', '', 4160001, '', '', '8521478554', '', NULL, 'active', '1', '2020-12-15 01:19:35', 1),
(36, 0, '', 2, 'rohan wordpress', '', 416, '', '', '9632587412', '', NULL, 'active', '1', '2020-12-15 01:19:38', 1),
(37, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563258', '', NULL, 'active', '1', '2020-12-15 01:19:40', 1),
(39, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7412589635', '', NULL, 'active', '1', '2020-12-15 01:19:42', 1),
(41, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrr@gmail.com', '9865988950', '123', NULL, 'active', '1', '2020-12-15 01:16:50', 0),
(42, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7845121236', '', NULL, 'active', '1', '2020-12-15 01:36:10', 1),
(43, 0, '', 2, 'rohan wordpress', '', 410126, '', '', '7896547890', '', NULL, 'active', '21', '2020-12-15 01:36:55', 1),
(44, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrrr@aa.com', '9874563210', '123', NULL, 'active', '1', '2020-12-15 02:03:50', 0),
(45, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rr@r.v', '9845632108', '123', NULL, 'active', '1', '2020-12-15 02:29:23', 0),
(46, 1, '', 2, 'abc', 'kkk', 0, 'kolhapur', 'rer@n.nn', '7771111111', '123', NULL, 'active', '1', '2020-12-15 02:34:15', 0),
(47, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'eee@d.c', '122', '123', NULL, 'active', '1', '2020-12-15 03:59:06', 0),
(48, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'jjj@f.cm', '44444', '123', NULL, 'active', '1', '2020-12-15 04:01:17', 0),
(49, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'zzz@g.mm', '1555', '123', NULL, 'active', '1', '2020-12-15 04:10:20', 0),
(50, 1, '', 2, 'Vinayak Baleghate', 'kolhapur', 0, 'kolhapur', 'vinayak@techenvision.in', '9874577777', '123456', NULL, 'active', '1', '2021-01-06 07:43:37', 1),
(51, 1, '', 2, 'Rohan Patil', 'kolhapur', 0, 'kolhapur', 'rohan@techenvision.in', '7474747474', '123', NULL, 'active', '1', '2020-12-25 07:03:49', 1),
(53, 1, '', 2, 'Sweta Mane', 'kolhapur', 0, 'kolhapur', 'sweta@gmail.com', '9988998899', 'sweta', NULL, 'active', '1', '2020-12-25 07:06:36', 1),
(55, 0, '', 3, 'kiran kadam', '', 1, '', '', '8282828282', '', NULL, 'active', '', '2020-12-25 11:27:36', 3),
(56, 0, '', 3, 'prathamesh chavan', '', 1, '', '', '7417417417', '', NULL, 'active', '', '2020-12-25 11:53:06', 3),
(58, 0, '', 3, 'Manikarnika', '', 1, '', '', '9888888888', '', NULL, 'active', '', '2021-01-01 12:06:39', 3),
(59, 0, '', 3, 'abc', '', 2, '', '', '7897897897', '', NULL, 'active', '', '2021-01-02 12:16:02', 3),
(60, 0, '', 3, 'sdf', '', 2, '', '', '9666666666', '', NULL, 'active', '', '2021-01-06 06:20:25', 3),
(61, 1, '', 2, 'Rahul Patil', 'kkk', 0, 'kolhapur', 'df@gm.com', '9333333333', '123', NULL, 'active', '1', '2021-01-15 07:12:21', 1),
(62, 1, '', 2, 'Omkar Mane', 'kolhapur', 0, 'kolhapur', 'omkar@gmail.com', '9639639630', 'omkar', NULL, 'active', '1', '2021-01-15 07:06:03', 1),
(63, 0, '', 3, 'Sayali Gavali', '', 416012, '', '', '9512364789', '', NULL, 'active', '', '2021-01-20 06:37:07', 3),
(64, 0, '', 3, 'gkshadg', '', 596, '', '', '9685714254', '', NULL, 'active', '', '2021-01-27 13:27:51', 3),
(65, 0, '', 3, 'Sweta', '', 416012, '', '', '8698066940', '123456', NULL, 'active', '', '2021-01-28 11:22:03', 3),
(66, 0, '', 3, 'aaa', '', 416, '', '', '9856325555', '123', NULL, 'active', '', '2021-01-29 05:39:26', 3),
(67, 0, '', 3, 'bbbb', '', 416012, '', '', '7410000000', '123', NULL, 'active', '', '2021-01-29 11:56:38', 3),
(68, 0, '', 3, 'cccc', '', 416012, '', '', '8698066920', '123', NULL, 'active', '', '2021-01-29 11:58:03', 3),
(69, 0, '', 3, 'aaaa', '', 1425, '', '', '8520000000', '123', NULL, 'active', '', '2021-01-29 11:59:25', 3),
(71, 0, '', 3, 'aaa', '', 416012, '', '', '8540000000', '123', NULL, 'active', '', '2021-01-29 12:02:28', 3),
(72, 0, '', 3, 'aaa', '', 1445, '', '', '8521000000', '123', NULL, 'active', '', '2021-01-29 12:05:44', 3),
(73, 0, '', 3, 'jjj', '', 416012, '', '', '8536000000', '123', NULL, 'active', '', '2021-01-29 12:10:23', 3),
(74, 0, '', 3, 'ssss', '', 416, '', '', '8456320000', '123', NULL, 'active', '', '2021-01-29 12:13:30', 3),
(75, 0, '', 3, 'ddds', '', 11455, '', '', '8563200000', '123', NULL, 'active', '', '2021-01-29 12:15:41', 3),
(76, 0, '', 3, 'ssss', '', 416012, '', '', '7896540000', '123', NULL, 'active', '', '2021-01-29 12:19:24', 3),
(77, 0, '', 3, 'asss', '', 416, '', '', '8965000000', '41256', NULL, 'active', '', '2021-01-29 12:20:19', 3),
(78, 0, '', 3, 'fgd', '', 416, '', '', '8563200001', '123', NULL, 'active', '', '2021-01-29 12:23:03', 3),
(79, 0, '', 3, 'ssss', '', 54646, '', '', '4563210000', '123', NULL, 'active', '', '2021-01-29 12:23:55', 3),
(80, 0, '', 3, 'tetert', '', 453, '', '', '8745454333', '123', NULL, 'active', '', '2021-01-29 12:25:29', 3),
(81, 0, '', 3, 'fdgddddddd', '', 4160, '', '', '8654123000', '123', NULL, 'active', '', '2021-01-29 12:28:16', 3),
(82, 0, '', 3, 'hfhg', '', 41, '', '', '8652365400', '123', NULL, 'active', '', '2021-01-29 12:32:18', 3),
(83, 0, '', 3, 'gfdh', '', 456, '', '', '8745600000', '123', NULL, 'active', '', '2021-01-29 12:40:26', 3),
(84, 0, '', 3, 'dsf', '', 456, '', '', '8965412000', '123', NULL, 'active', '', '2021-01-29 12:42:52', 3),
(85, 0, '', 3, 'dsaf', '', 456, '', '', '9685698000', '0012', NULL, 'active', '', '2021-01-29 12:43:59', 3),
(86, 0, '', 3, 'gdfgsd', '', 323, '', '', '1234686543', '32', NULL, 'active', '', '2021-01-29 12:47:02', 3),
(87, 0, '', 3, 'kjhgk', '', 456, '', '', '7896541236', '154', NULL, 'active', '', '2021-01-29 12:48:03', 3),
(88, 0, '', 3, 'gfhfg', '', 54534, '', '', '4563789654', '123', NULL, 'active', '', '2021-01-29 12:50:09', 3),
(89, 0, '', 3, 'dfs', '', 456, '', '', '8965412345', '123', NULL, 'active', '', '2021-01-29 12:52:07', 3),
(90, 0, '', 3, 'shweta P', '', 416012, '', '', '9527205327', '1234', NULL, 'active', '', '2021-01-29 13:01:35', 3),
(91, 0, '', 3, 'fsds', '', 456321, '', '', '9284355156', '123', NULL, 'active', '', '2021-01-30 04:42:20', 3),
(92, 0, '', 3, 'Sandip Chavan', '', 416012, '', '', '9898986565', '1234569', NULL, 'active', '', '2021-02-02 10:29:52', 3),
(93, 0, '', 3, 'Sachin Chavan', '', 416012, '', '', '9898988787', '789456', NULL, 'active', '', '2021-02-02 10:35:25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userquizsubmit`
--

CREATE TABLE `userquizsubmit` (
  `userquizsubmitid` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `dynamiccompetitionid` bigint(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `selectanswertext` varchar(255) NOT NULL,
  `ceated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `assignwinner`
--
ALTER TABLE `assignwinner`
  ADD PRIMARY KEY (`assignwinnerid`);

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
-- Indexes for table `competitionquizsubject`
--
ALTER TABLE `competitionquizsubject`
  ADD PRIMARY KEY (`quizsubjectid`);

--
-- Indexes for table `competitiontype`
--
ALTER TABLE `competitiontype`
  ADD PRIMARY KEY (`competitiontypeid`);

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
-- Indexes for table `dynamiccompetition`
--
ALTER TABLE `dynamiccompetition`
  ADD PRIMARY KEY (`dynamiccompetitionid`);

--
-- Indexes for table `levelmaster`
--
ALTER TABLE `levelmaster`
  ADD PRIMARY KEY (`levelid`);

--
-- Indexes for table `pincodemaster`
--
ALTER TABLE `pincodemaster`
  ADD PRIMARY KEY (`pincodeid`);

--
-- Indexes for table `prizemaster`
--
ALTER TABLE `prizemaster`
  ADD PRIMARY KEY (`prizeid`);

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
-- Indexes for table `userquizsubmit`
--
ALTER TABLE `userquizsubmit`
  ADD PRIMARY KEY (`userquizsubmitid`);

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
-- AUTO_INCREMENT for table `assignwinner`
--
ALTER TABLE `assignwinner`
  MODIFY `assignwinnerid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `competitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `competitionquizsubject`
--
ALTER TABLE `competitionquizsubject`
  MODIFY `quizsubjectid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `competitiontype`
--
ALTER TABLE `competitiontype`
  MODIFY `competitiontypeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `dynamiccompetition`
--
ALTER TABLE `dynamiccompetition`
  MODIFY `dynamiccompetitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `levelmaster`
--
ALTER TABLE `levelmaster`
  MODIFY `levelid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pincodemaster`
--
ALTER TABLE `pincodemaster`
  MODIFY `pincodeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prizemaster`
--
ALTER TABLE `prizemaster`
  MODIFY `prizeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `userquizsubmit`
--
ALTER TABLE `userquizsubmit`
  MODIFY `userquizsubmitid` bigint(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winnerid` bigint(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
