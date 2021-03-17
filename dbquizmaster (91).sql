-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 02:39 PM
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
-- Table structure for table `admincheck_answer`
--

CREATE TABLE `admincheck_answer` (
  `admincheck_answerid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `competitionid` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `checkanswer` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admincheck_answer`
--

INSERT INTO `admincheck_answer` (`admincheck_answerid`, `user_id`, `competitionid`, `question_id`, `checkanswer`, `created_date`) VALUES
(1, 256, 7, 36, 0, '2021-02-26 08:10:48'),
(2, 256, 7, 37, 1, '2021-02-26 08:10:48'),
(3, 256, 7, 38, 1, '2021-02-26 08:10:49'),
(4, 256, 7, 39, 1, '2021-02-26 08:10:49'),
(5, 256, 7, 40, 1, '2021-02-26 08:10:49'),
(6, 256, 7, 67, 0, '2021-02-26 08:10:49'),
(7, 220, 12, 65, 0, '2021-02-26 10:57:25'),
(8, 220, 12, 66, 0, '2021-02-26 10:57:25'),
(9, 220, 12, 68, 0, '2021-02-26 10:57:26'),
(46, 262, 7, 36, 0, '2021-02-27 11:13:47'),
(47, 262, 7, 37, 0, '2021-02-27 11:13:48'),
(48, 262, 7, 38, 1, '2021-02-27 11:13:48'),
(49, 262, 7, 39, 1, '2021-02-27 11:13:48'),
(50, 262, 7, 40, 1, '2021-02-27 11:13:48'),
(51, 262, 7, 67, 0, '2021-02-27 11:13:48'),
(52, 263, 7, 36, 1, '2021-02-27 11:15:00'),
(53, 263, 7, 37, 1, '2021-02-27 11:15:00'),
(54, 263, 7, 38, 1, '2021-02-27 11:15:00'),
(55, 263, 7, 39, 1, '2021-02-27 11:15:00'),
(56, 263, 7, 40, 1, '2021-02-27 11:15:00'),
(57, 263, 7, 67, 0, '2021-02-27 11:15:00'),
(58, 265, 7, 36, 1, '2021-02-28 13:57:07'),
(59, 265, 7, 37, 0, '2021-02-28 13:57:07'),
(60, 265, 7, 38, 1, '2021-02-28 13:57:07'),
(61, 265, 7, 39, 1, '2021-02-28 13:57:07'),
(62, 265, 7, 40, 1, '2021-02-28 13:57:07'),
(63, 265, 7, 67, 0, '2021-02-28 13:57:07'),
(64, 264, 7, 36, 1, '2021-03-02 11:54:17'),
(65, 264, 7, 37, 1, '2021-03-02 11:54:18'),
(66, 264, 7, 38, 1, '2021-03-02 11:54:18'),
(67, 264, 7, 39, 1, '2021-03-02 11:54:18'),
(68, 264, 7, 40, 0, '2021-03-02 11:54:18'),
(69, 264, 7, 67, 0, '2021-03-02 11:54:18'),
(70, 266, 7, 36, 1, '2021-03-03 05:58:58'),
(71, 266, 7, 37, 1, '2021-03-03 05:58:58'),
(72, 266, 7, 38, 1, '2021-03-03 05:58:58'),
(73, 266, 7, 39, 1, '2021-03-03 05:58:58'),
(74, 266, 7, 40, 1, '2021-03-03 05:58:58'),
(75, 266, 7, 67, 0, '2021-03-03 05:58:58'),
(76, 307, 7, 36, 1, '2021-03-05 12:39:31'),
(77, 307, 7, 37, 1, '2021-03-05 12:39:31'),
(78, 307, 7, 38, 1, '2021-03-05 12:39:31'),
(79, 307, 7, 39, 1, '2021-03-05 12:39:32'),
(80, 307, 7, 40, 1, '2021-03-05 12:39:32'),
(81, 307, 7, 67, 0, '2021-03-05 12:39:32'),
(82, 307, 79, 72, 0, '2021-03-06 04:48:30'),
(83, 307, 79, 73, 1, '2021-03-06 04:48:30'),
(84, 307, 79, 72, 0, '2021-03-06 04:48:48'),
(85, 307, 79, 73, 1, '2021-03-06 04:48:48'),
(86, 307, 7, 36, 1, '2021-03-06 04:58:09'),
(87, 307, 7, 37, 1, '2021-03-06 04:58:09'),
(88, 307, 7, 38, 1, '2021-03-06 04:58:09'),
(89, 307, 7, 39, 1, '2021-03-06 04:58:09'),
(90, 307, 7, 40, 1, '2021-03-06 04:58:09'),
(91, 307, 7, 67, 0, '2021-03-06 04:58:09'),
(92, 333, 7, 36, 1, '2021-03-06 10:32:40'),
(93, 333, 7, 37, 1, '2021-03-06 10:32:40'),
(94, 333, 7, 38, 1, '2021-03-06 10:32:40'),
(95, 333, 7, 39, 1, '2021-03-06 10:32:40'),
(96, 333, 7, 40, 1, '2021-03-06 10:32:40'),
(97, 333, 7, 67, 1, '2021-03-06 10:32:40');

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
(9, 53, 0, 65, '', 226, '', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `assignwinner`
--

CREATE TABLE `assignwinner` (
  `assignwinnerid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `pointsid` bigint(50) NOT NULL,
  `points` bigint(50) NOT NULL,
  `conversionpoints` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignwinner`
--

INSERT INTO `assignwinner` (`assignwinnerid`, `competitionid`, `pointsid`, `points`, `conversionpoints`, `user_id`) VALUES
(1, 7, 1, 0, 0, 263),
(2, 7, 2, 0, 0, 256),
(3, 7, 4, 0, 0, 265),
(4, 7, 5, 500, 50, 264),
(6, 7, 3, 300, 30, 307),
(7, 60, 16, 1000, 100, 307),
(8, 60, 17, 800, 80, 220),
(9, 79, 21, 1000, 200, 307),
(10, 7, 1, 100, 15, 333);

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
  `stateid` bigint(50) NOT NULL,
  `ceated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `stateid`, `ceated_date`) VALUES
(1, 'kolhapur', 22, '2020-12-05 00:00:00'),
(2, 'sangali', 22, '2020-12-05 00:00:00'),
(3, 'satara', 22, '2020-12-05 00:00:00'),
(4, 'xyz', 15, '0000-00-00 00:00:00');

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
(4, 'Quiz Competition', 'D-38 IND Area Phase I Mohali, Chandigarh-160055, India', '', '', '', 0, '160055', '9041650633', '', 'support@cracslab.com', '', '', '', '', '', '', '', '70332724-4311-47ba-bfab-88a11a00ec82.jpg', '', '2021-02-19 11:09:38');

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
  `gender` int(11) NOT NULL,
  `levelid` bigint(50) NOT NULL,
  `fromage` bigint(50) NOT NULL,
  `toage` bigint(50) NOT NULL,
  `enddate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `subjectstextarea` varchar(255) NOT NULL,
  `standard` bigint(50) NOT NULL,
  `tabinputtextid` bigint(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `termsandconditions` longtext NOT NULL,
  `instruction` longtext NOT NULL,
  `uploadfile` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `emailaddress` varchar(255) DEFAULT NULL,
  `whatsapp` int(11) NOT NULL,
  `whatsappnumber` char(12) DEFAULT NULL,
  `file_format` varchar(256) NOT NULL,
  `upload_audio` int(11) NOT NULL,
  `upload_image` int(11) NOT NULL,
  `upload_vedio` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`, `status`) VALUES
(1, 2, 0, 0, 1, 5, 7, '1970-01-01', 'Diagnostic Quiz', 'Register to see competition topic', '<ul><li>xyz</li><li>abc</li></ul>', 0, 1, 'photo_1610351144.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 08:06:29', 0),
(2, 1, 0, 0, 1, 5, 7, '1970-01-01', 'Buzzfeed Style Quiz', 'Register to see competition topic', '', 0, 1, 'photo_1610351525.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-05 12:33:32', 0),
(3, 1, 0, 0, 1, 5, 7, '2021-01-21', 'Geography', 'Register to see competition topic', '', 0, 1, 'photo_1610351921.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:44:26', 0),
(4, 1, 1, 0, 1, 8, 11, '2021-01-27', 'Personality Quiz', 'Register to see competition topic', '', 0, 2, 'photo_4_1611751248.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:40:48', 0),
(5, 1, 1, 0, 1, 8, 11, '2021-01-27', 'True/False Quiz', 'Register to see competition topic', '', 0, 2, 'photo_5_1611751122.jpg', 'sad\r\n', 'assssssss', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:38:42', 0),
(6, 1, 1, 0, 1, 12, 15, '2021-01-28', 'Assessment Quiz', 'Register to see competition topic', '', 0, 3, 'photo_6_1611751903.jpg', 'xxxx', 'xx', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-20 12:51:43', 0),
(7, 1, 1, 3, 1, 12, 15, '2021-03-31', 'Spelling Bee', 'Register to see competition topic', '<p><br></p>', 2, 2, 'photo_7_1614681387.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '0', '0', 0, 0, 0, '2021-03-03 12:58:03', 0),
(9, 1, 1, 0, 1, 12, 15, '2021-01-28', 'IT Quiz', 'Register to see competition topic', '', 0, 3, 'photo_9_1611752081.jpg', 'aaaaaaaa', 'aaaaaaaaaa', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:54:41', 0),
(11, 1, 0, 0, 2, 18, 99, '2020-12-29', 'second package', 'Register to see competition topic', '', 0, 4, 'photo_1610696124.jpg', 'aass', 'ddd', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:48:21', 0),
(12, 1, 1, 3, 1, 18, 99, '2021-03-31', 'Maths Quiz', 'Register to see competition topic', '<p>Maths Quiz</p>', 3, 3, 'photo_12_1611982189.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '0', '0', 0, 0, 0, '2021-03-03 06:15:06', 0),
(13, 1, 0, 0, 1, 12, 15, '2020-12-15', 'singing', 'Register to see competition topic', '', 0, 3, 'photo_1612270794.jpg', 'asssssa', 'sdsadada', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:25:02', 0),
(14, 1, 0, 0, 1, 12, 15, '1970-01-01', 'quiz', 'Register to see competition topic', '<ul><li>maths</li><li>english</li></ul>', 0, 2, 'photo_1612330442.jpg', 'aaaaa', 'aaaaaaaa', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-01 11:37:06', 0),
(15, 1, 0, 0, 1, 2, 7, '2021-01-21', 'first package', 'Register to see competition topic', '<ul><li>asa</li></ul>', 0, 1, 'photo_1612356153.jpg', 'sdsa', 'sad', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:06:15', 0),
(16, 2, 0, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>ssd</p>', 0, 2, 'photo_1609586639.jpg', 'ZCDDF', 'FSDSDD', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:23:58', 0),
(17, 1, 0, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>dsaf</p>', 0, 1, 'photo_1609586692.jpg', 'tgdxtr', 'fgvc', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:24:52', 0),
(18, 2, 0, 0, 1, 14, 16, '1970-01-01', 'science quiz', 'Register to see competition topic', '<p>dddddddddf</p>', 0, 3, 'photo_18_1610093223.jpg', 'ughn', 'hjjjhy', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:02', 0),
(19, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 2, 'photo_1609852283.jpg', 'sd', 'sdd', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-05 13:11:23', 0),
(20, 1, 0, 0, 1, 5, 8, '2021-01-09', 'first package', 'Register to see competition topic', 'ds', 0, 1, 'photo_20_1610093311.jpg', 'gdg', 'fd', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:08:31', 0),
(21, 1, 0, 0, 1, 4, 5, '2021-01-07', 'first package', 'Register to see competition topic', 'xfs', 0, 1, 'photo_21_1609924059.jpg', 'jj', 'jj', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-06 09:07:39', 0),
(22, 2, 0, 0, 1, 4, 6, '2021-01-14', 'first package', 'Register to see competition topic', 'd', 0, 1, 'photo_22_1610093270.jpg', 'gtdg', ' vgf', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:50', 0),
(23, 2, 0, 0, 1, 7, 9, '2021-01-12', 'first package', 'Register to see competition topic', 'jhg', 0, 1, 'photo_23_1610093286.jpg', 'ghrh', 'bhh', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:08:06', 0),
(24, 2, 0, 0, 1, 4, 9, '2021-01-14', 'first package', 'Register to see competition topic', ';lj', 0, 1, 'photo_24_1610093250.jpg', 'yh', 'h', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:30', 0),
(25, 1, 0, 0, 1, 15, 18, '2021-01-08', 'first package', 'Register to see competition topic', 'ghf', 0, 3, 'photo_1609924026.jpg', ' dfd', 'ds', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-06 09:07:06', 0),
(26, 3, 1, 3, 1, 3, 6, '2021-03-08', 'Dancing Competition', 'Register to see competition topic', '<p>Dancing Competition</p>', 1, 1, 'photo_26_1612269702.jpg', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 0, 1, 'demo@gmail.com', 1, '9999999999', '3', 0, 0, 1, '2021-03-03 11:54:43', 0),
(27, 1, 0, 0, 4, 12, 15, '2021-01-21', 'easy', 'Register to see competition topic', '', 0, 3, 'photo_27_1610093339.jpg', 'sgdf', 'fsgsdf', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 08:08:59', 0),
(28, 2, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610090867.jpg', 'xzC', 'xc', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:27:47', 0),
(29, 1, 0, 0, 2, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610090955.jpg', 'fghh', 'fgfgfgf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:29:15', 0),
(30, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610091769.jpg', 'jhhhhhhhh', 'hfg', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:42:49', 0),
(32, 1, 0, 0, 1, 4, 5, '2021-01-22', 'first package', 'Register to see competition topic', '', 0, 1, 'photo_1610091875.jpg', 'gjhgf', 'hgj', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:44:35', 0),
(33, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610092034.jpg', 'ghfh', 'dfghgh', 0, 0, '', 0, '9999999999', '', 0, 0, 0, '2021-01-08 07:47:14', 0),
(36, 2, 0, 0, 1, 5, 7, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 1, 'photo_1610092351.jpg', 'gjjjjjjjjjjjj', 'fggggg', 1, 0, '', 1, '9999999999', '', 0, 0, 0, '2021-01-08 07:52:31', 0),
(41, 1, 1, 0, 1, 12, 15, '2021-01-27', 'GK Quiz', 'Register to see competition topic', '', 0, 3, 'photo_41_1611752806.jpg', 'sfdfdd', 'dsfasdf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-27 13:06:46', 0),
(46, 1, 1, 0, 1, 8, 11, '2021-01-27', 'English Quiz', 'Register to see competition topic', '<div><br></div>', 0, 2, 'photo_46_1611753197.jpg', 'sdad', 'saaaaaa', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-27 13:13:17', 0),
(47, 1, 1, 0, 1, 12, 15, '2021-01-20', 'GK Quiz', 'Register to see competition topic', '', 0, 3, 'photo_47_1610359705.jpg', 'sfafd', 'dsaf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-11 10:08:25', 0),
(51, 1, 1, 0, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 0, 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-15 07:26:25', 0),
(52, 1, 1, 0, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 0, 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-15 07:27:18', 0),
(53, 1, 1, 3, 1, 8, 10, '2021-03-31', 'Current Affairs Quiz', 'Register to see competition topic', '<p>Current Affairs Quiz</p>', 3, 3, 'photo_53_1611981866.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">5. Only one entry is permitted per person. Entries are to be submitted online via the </span><a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"font-family: \"Times New Roman\";\">competition page</span></a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</span></p>', '<ol style=\"margin-bottom: 10px; padding-left: 18px; color: rgb(51, 51, 51); font-family: open-sans; font-size: 15px; letter-spacing: -0.3px;\"><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">All entries must be a digital video.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">Each entry must focus on ONE of following global challenges as it relates to population growth:</span><ul style=\"margin-top: 10px; margin-bottom: 10px; padding-left: 18px; list-style-type: disc;\"><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Promoting Environmental Justice</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Strengthening Global Health</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Re-Imagining Industrial Systems</span></li></ul></span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Students may work together in groups or submit entries as individuals.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">The length of the video should not exceed 60 seconds (one minute), not including the 5 second title screen (see #5).</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">All entries should begin with a 5 second full-screen “title screen” that includes the following information:</span><ul style=\"margin-top: 10px; margin-bottom: 10px; padding-left: 18px; list-style-type: disc;\"><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Lead Producer’s name</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">School name</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">School city, state</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Title of video</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Total running time (not including the 5 second title screen)</span></li></ul></span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">All information presented in the video must be cited, giving credit to the original source. Plagiarism of any kind will result in disqualification. You DO NOT need to include your citations in your video. IF CHOSEN AS A FINALIST, you must submit a list of your sources, properly cited.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">Each video must have one </span><span style=\"font-weight: 700; font-family: \"Times New Roman\";\">Lead Producer</span><span style=\"font-family: \"Times New Roman\";\"> to serve as the main point of contact. Recognition and prizes will be given to the lead producer and all those listed as co-producers on the entry form.</span></span></li></ol>', 0, 0, '', 0, '', '1', 0, 0, 0, '2021-03-03 11:50:30', 0),
(59, 2, 1, 3, 2, 15, 17, '2021-03-31', 'Classical Singing', 'Register to see competition topic', '<p>Classical Singing</p>', 3, 3, 'photo_59_1612328773.jpg', '<ul><li>Participants should send their submissions based on the given topics. Submission should be in the desired format i.e video/ image. </li><li>Participants should send their submissions based on the given topics. Submission should be in the desir', '<ul><li>Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.</li><li>Participants should send their submissions based on the given topics. Submission should be in the desired fo', 0, 0, '', 1, '', '2', 1, 0, 0, '2021-03-03 11:54:23', 0);
INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`, `status`) VALUES
(60, 4, 1, 3, 1, 12, 15, '2021-03-31', 'Easy Writing', 'Register to see competition topic', '<ul><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Should plastic be banned?</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Pollution due to Urbanization.</li><li class=\"TrT0X', 2, 2, 'photo_60_1612270979.jpg', '<h4 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 1.5em; line-height: 1em; font-family: \"Open Sans\", sans-serif; margin: 1em 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"background-color: rgb(255, 255, 255);\">Competition Rules</span></h4><ol style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: \"Open Sans\", sans-serif; margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The SMART Competition is open to all undergraduate university students and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">An educator, school or sponsored education program may register multiple teams.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">A student may compete for multiple years.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The competition structure is progressive based on the scores assigned by the judges.  Teams and team members that progress through each of these competition levels must remain consistent.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">All team members must comply with the SMART Competition Code of Conduct.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The decision of the judges is final.</span></li></ol>', '<h4 style=\"margin: 1em 0px; font-family: \"Open Sans\", sans-serif; font-weight: 700; line-height: 1em; color: rgb(0, 0, 0); font-size: 1.5em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\">Competition Rules</h4><ol style=\"margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: \"Open Sans\", sans-serif; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The SMART Competition is open to all undergraduate university students and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">An educator, school or sponsored education program may register multiple teams.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">A student may compete for multiple years.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The competition structure is progressive based on the scores assigned by the judges.  Teams and team members that progress through each of these competition levels must remain consistent.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">All team members must comply with the SMART Competition Code of Conduct.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The decision of the judges is final.</li></ol><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"></ul>', 1, 0, '', 0, '', '1', 0, 0, 0, '2021-03-04 05:09:42', 0),
(61, 1, 1, 3, 1, 0, 99, '2021-01-24', 'Basic Computer Quiz', 'Register to see competition topic', '<p>Basic Computer Quiz</p>', 6, 6, 'photo_1613056055.jpg', '<p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA &amp; Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the&nbsp;<a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA &amp; Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the&nbsp;<a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-02-11 15:07:34', 0),
(71, 5, 1, 3, 1, 8, 10, '2021-03-24', 'Poster Presentation', 'Register to see competition topic', '<ul class=\"i8Z77e\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Speech and Image', 3, 3, 'photo_71_1613377107.jpg', '<h3 style=\"font-family: type-font, Arial, Roboto, Helvetica, sans-serif; font-weight: 700; margin: 1.25rem 0px 0.625rem; line-height: 1.5; font-size: 1.25rem; color: rgb(64, 64, 64);\">General Terms and Conditions:</h3><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">This contest will be governed by these standard terms and conditions. Each participant agrees that he/she has read and understood these terms and by their participation in the contest, each participant agrees to be bound by the terms. Mere participation should not be perceived as any commitment on the part of Shell to select a participant as the winner. Nothing herein amounts to a commitment by Shell to conduct further, similar or other contests in future.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">This promotion is in no way sponsored, endorsed or administered by, or associated with, Facebook or Twitter. Any questions, comments or complaints regarding the promotion will be directed to Sponsor, not Facebook or Twitter.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Incomplete information provided or failure to provide true and accurate information as stated in these terms and conditions, failure to submit proof of identification and/or original confirmation number upon collection of the Prize will automatically disqualify the participant. Shell shall have the absolute and sole discretion to determine whether any participant should be disqualified by reason of failure to abide by these terms and conditions, bad faith, fraud or any other legitimate reason</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Multiple Facebook comment entries* and Tweets on the contest post per person during the Contest Period will be entertained</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell reserves the right to change the terms and conditions of this contest, including extending, withdrawing or discontinuing the same without notice, without assigning any reason, at its sole discretion without any liability..</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">There is no cash alternative to the stated prizes, and the prizes are non-transferable and non-refundable. Shell reserves the right to substitute either any part of Prize or whole Prize for similar prize of equal or greater value.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell shall not be liable in any manner whatsoever for any claims, losses, damage, costs or expenses in connection with or arising from this Competition, the redemption or use of the Prizes.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">To the extent only permitted by applicable law, Shell reserves the right to use the winner’s image, photograph, name and likeness in post-promotion publicity material and in advertising, marketing or promotional material in any media by any means throughout the world for any purpose connected with the products/services of Shell or any company within the Royal Dutch/Shell Group of companies without additional compensation or prior notice to the winner and all participants consent to the same.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Copyrighted, obscene, provocative or otherwise questionable content will not be considered. Shell India retains sole discretion as to what constitutes inappropriate content.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">In the event of any inconsistency between these terms and conditions and any advertising, promotional, publicity and other materials relating to or in connection with this promotion, these terms and conditions shall prevail.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell reserves the right to request proof of a participant\'s eligibility in the event that there is a doubt over his/her eligibility for the promotion.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Subject to applicable laws, Shell shall not be liable for any losses, taxes, liabilities or inconvenience suffered by any participant as a result of these terms and conditions, entering into this Competition or accepting any part of the Prize</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell shall not be liable under or in connection with these terms and conditions or for this Competition or using the Prize for any indirect, special or consequential cost, expense, loss or damage even if such cost, expense, loss or damage was reasonably foreseeable or might reasonably have been contemplated by the participant and Shell and whether arising from breach of contract, tort, negligence, breach of statutory duty or otherwise.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell India accepts no responsibility for difficulties experienced in submitting an entry to this Contest. Shell does not accept responsibility for (1) lost, late or undelivered entries or (2) any technical or access issue, failure, malfunction or difficulty that might hinder the ability of a participant to enter the Competition or (3) any event which may cause the Competition to be disrupted or corrupted.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">In addition to these terms & conditions, other specific terms may be imposed by Shell from time to time to deal with any unforeseen situation. Shell also reserves the absolute right to change the terms and conditions contained herein and, or, any other rules and regulations in respect of the Competition at any time without any notice, the itinerary, without assigning any reason and without any liability whatsoever. Participants are requested to refer to such other terms and conditions, if any, which may be intimated separately as Shell considers fit.  However, no obligation is cast on Shell to separately intimate each individual participant with regard to such additional terms and conditions.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell may (i) extend (ii) terminate or suspend the Competition at any time due to circumstances beyond its control (iii) substitute a prize (or any part of a Prize).</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The participant(s) hereby give express permission to Shell to freely distribute its submission in any publication and media whether online, offline or on the Internet. Material sent to Shell including feedback and other communications of any kind as well as submission of an entry to this Competition shall be deemed to be non-confidential. Shell shall be free to reproduce, distribute and publicly display such feedback, materials without limitation or obligation of any kind. Shell is also free to use any ideas, concepts, know-how or techniques contained in such submissions or materials for any purpose.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant understands that each of the officials of Shell engaged in the organization and management of this Competition including its directors, officers, partners, employees, consultants, and agents are under no obligation to render any advice or service to any participant in respect of this Competition</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The participant undertakes to indemnify and keep Shell harmless and indemnified against any loss, damage, claims, costs and expenses which may be incurred or suffered by Shell due to breach of any of the terms and conditions herein contained.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Any disputes, differences and/or any other matters in relation to and arising out of this Promotion and, or pertaining to these terms and conditions shall be referred to arbitration under the Arbitration & Conciliation Act, 1996. The venue of arbitration shall be New Delhi. The Promotion shall be governed by and construed in accordance with applicable laws in India and will be subject to exclusive jurisdiction of the courts at Bangalore alone. The Rules of Indian Council of Arbitration(“Rules”) shall apply to the arbitration proceedings and the arbitration shall be conducted by a sole arbitrator to be appointed as per the Rules.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant must ensure that his or her participation in the promotion is lawful in accordance with the laws of India. Neither Shell nor its representatives or agents shall be taken to make any representations, express or implied, as to the lawfulness of any participant\'s participation in the Competition</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Entrants are deemed to accept these terms and conditions by entering the Contest. </li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">One Winner of the contest will be selected basis a lucky draw of the answer entries that fulfil the eligibility criteria.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The Winner will be eligible to a trip sponsored by Shell to Malaysia MotoGP in Sepang. The prize is limited to Air Travel from Mumbai to Kuala Lumpur, Bus travel from Kuala Lumpur to Sepang, Accommodation and Meals as mentioned in the itinerary and Tickets to MotoGP in VIP. All mentioned arrangements will be made by Shell after receiving the necessary details from the winner as per the below mentioned itinerary.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Trip Itinerary:<ul style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">28th October: Late night flight from Mumbai (Malindo). Transfers arranged from Pune.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">29th October: Early morning arrival in KL. Check into Hotel Renaissance. Breakfast, Lunch and Welcome Dinner on Day 1. Day free for leisure.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">30th October: MotoGP in VIP Suite. Lunch at MotoGP. Dinner at Hotel. Transfers arranged.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">31st October: Checkout from hotel.</li></ul></li></ul><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The prize is limited to the above mentioned expenses/itinerary and any additional expenses incurred by the winner during the trip will not be paid by Shell.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant consents to the use of information supplied by the participant in any media for future promotional, marketing and publicity purposes without any further reference or payment or other compensation to the participant, by Shell.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The decision of Shell will be final and binding.</li></ul>', '<h3 style=\"font-family: type-font, Arial, Roboto, Helvetica, sans-serif; font-weight: 700; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; line-height: 1.5; font-size: 1.25rem; color: rgb(64, 64, 64);\">How to Enter:</h3><p style=\"line-height: 1.5; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Facebook</span></p><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must like the contest post on Facebook.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must share their answer entry in the comment section of the contest post using #TheWinningIngredient.</li></ul><p style=\"line-height: 1.5; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Twitter</span></p><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must follow <a href=\"https://twitter.com/Shell_India\" target=\"_blank\" class=\"text-link link-info tracking-progression\" data-tracking=\"external\" aria-label=\"@Shell_India Opens in new window\" style=\"line-height: 1.5; text-decoration-line: underline; font-weight: 700; color: inherit;\">@Shell_India</a></li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must retweet the contest tweet</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must tweet their answer entry to <a href=\"https://twitter.com/Shell_India\" target=\"_blank\" class=\"text-link link-info tracking-progression\" data-tracking=\"external\" aria-label=\"@Shell_India Opens in new window\" style=\"line-height: 1.5; text-decoration-line: underline; font-weight: 700; color: inherit;\">@Shell_India</a> using #TheWinningIngredient</li></ul>', 0, 1, '', 1, '8698066940', '4', 0, 1, 0, '2021-03-03 11:54:11', 0),
(73, 6, 1, 3, 1, 3, 6, '2021-03-24', 'Drawing Competition', 'Register to see competition topic', '<p>Nature Drawing</p>', 1, 1, 'photo_1613982401.jpg', '<h4 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 1.5em; line-height: 1em; font-family: \"Open Sans\", sans-serif; margin: 1em 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"background-color: rgb(255, 255, 255);\">Competition Rules</span></h4><ol style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: \"Open Sans\", sans-serif; margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The SMART Competition is open to all undergraduate university students and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">An educator, school or sponsored education program may register multiple teams.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">A student may compete for multiple years.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The competition structure is progressive based on the scores assigned by the judges.  Teams and team members that progress through each of these competition levels must remain consistent.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">All team members must comply with the SMART Competition Code of Conduct.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The decision of the judges is final.</span></li></ol>', '<h4 style=\"margin: 1em 0px; font-family: \"Open Sans\", sans-serif; font-weight: 700; line-height: 1em; color: rgb(0, 0, 0); font-size: 1.5em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\">Competition Rules</h4><ol style=\"margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: \"Open Sans\", sans-serif; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The SMART Competition is open to all undergraduate university students and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">An educator, school or sponsored education program may register multiple teams.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">A student may compete for multiple years.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The competition structure is progressive based on the scores assigned by the judges.  Teams and team members that progress through each of these competition levels must remain consistent.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">All team members must comply with the SMART Competition Code of Conduct.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The decision of the judges is final.</li></ol>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-03-03 11:53:39', 0),
(74, 7, 1, 3, 1, 5, 10, '2021-03-31', 'Soap Creativity', 'Test your creativity', '', 1, 1, 'photo_74_1614672339.jpg', '<p><div class=\"rich-text paragraph paragraph--type--rich-text paragraph--view-mode--default\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; color: rgb(6, 23, 32); font-family: \"Euclid Circular\", Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div class=\"rich-text paragraph paragraph--type--rich-text paragraph--view-mode--default\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; color: rgb(6, 23, 32); font-family: \"Euclid Circular\", Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-size: inherit; line-height: 1.5; text-rendering: optimizelegibility;\">All Competitions are free to enter. Details of how to enter a particular Competition will be set out in the Supplementary Rules.</p><p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-size: inherit; line-height: 1.5; text-rendering: optimizelegibility;\"> Please note that your mobile or telephone service provider may charge you for any Competition entries you make by phone or by text.</p><p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-size: inherit; line-height: 1.5; text-rendering: optimizelegibility;\">  Entries must be correctly submitted by the closing date of the Competition. BFBS accepts no responsibility for any entries or information that is incomplete, incorrectly submitted or fail to reach us by the closing date for any reason.</p></div>', '<p><span style=\"color: rgb(102, 102, 102); font-family: Lato, sans-serif; text-align: justify;\">To create different art in the soap using knife and colours.Making flowers,sculpture, models etc.</span></p>', 0, 1, '', 1, '', '0', 0, 0, 0, '2021-03-03 12:58:43', 0),
(75, 8, 1, 3, 5, 5, 18, '2021-03-31', 'Best out of Waste', 'Never refuse to reuse', '', 6, 6, 'photo_1614672844.jpg', '<p> Participants will be given 1 hour and 30 min. to show their creativity and 2 minutes\r\nto talk about the same. During the entire competition, the participant should be under the\r\ncamera frame. Recording will be done via Microsoft team software.\r\n3. Waste material could be anything like tetra packs, bottles, newspapers, old utensils,\r\njute material or any secondhand items that otherwise would be thrown away.\r\n4. The material would be rejected if not found to be a waste product or second-hand item.\r\n5. No ready or semi-finished model or matter would be accepted from participant in competition\r\n6. Participants will be judged on Creativity, Utilization of Resources, Artistic\r\ncomposition & design, Eco-friendly rating, Utility of the Product and Overall presentation.\r\n7. No mobile or Internet would be allowed to be used at the time of Competition.\r\n8 By participating in this competition, the contestant agrees to accept the terms and conditions of the\r\ncompetition.\r\n9. The decision of the organizers / competition judges will be final and no communication in this regard will be\r\nentertained. </p>', '<p>This competition requires use of creative skills by the participants highlighting role of mechanical engineering\r\nas a basis of designing. With the growing increase in wastes in our society from households to industrial\r\nwastes, we now require a very innovative approach to get rid of them. Recycling and reusing the valuable\r\nwaste material can result in development of fantastic and usable products. Rather than putting these waste\r\nmaterials into the landfills, various innovative and creative ideas can be put together to create something\r\nnew and useful. Everyday Wastes such as plastic, glasses, newspapers or electronic are not only waste of\r\nlimited resources but also are harmful to the environment.</p>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-03-03 11:53:23', 0);
INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`, `status`) VALUES
(76, 9, 1, 3, 4, 6, 14, '2021-03-31', 'Story Telling', 'Natural-born storyteller.', '', 3, 3, 'photo_1614673574.jpg', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\"><b>stories</b> presented can be authentic, adapted or originally written.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\"><b>Stories</b> presented must not touch on sensitive issues such as race, religion, stereotyping, politics, etc.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\"><b>Stories</b> must be thematically educational.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Props, backdrops and sound effects are not allowed.</li></ol>', '<p>1.Story telling shall be graded on the following criteria:\r\n Content – How well the story adheres to the Biblical passages it is taken from\r\nand application of the story to the world or our lives.\r\n</p><p> Clarity – Annunciation and pronunciation of words and voice strength.\r\n</p><p> Presentation – Memorization, audience contact, body language, and gestures.\r\n</p><p>2. Scoring of the judges will be final.</p>', 0, 1, '', 1, '', '3', 0, 0, 1, '2021-03-03 11:52:40', 0),
(77, 10, 2, 2, 4, 18, 25, '2021-03-31', 'Nail Art', 'Art & creativity', '', 5, 5, 'photo_1614678544.jpg', '<p>• 5 point total for all of these categories\r\n</p><p>• 1 point for each nail.\r\n</p><p>• 1/2 points may be given if the nails has two areas that are required to be judged in that\r\ncategory. For example, there are two sidewalls on each finger nail. Therefore, half points\r\nmay be given when judging sidewalls and lateral side extensions</p><p>\r\n• Each nail is judged on its own merit.\r\n</p><p>• The nail must meet all of the criteria for the category being judged to earn its point.</p>', '<p>1. Total time allowed is 7 hours.</p><p>\r\n2. Description of the competition is a long running event where the competitor must create a\r\nset of nails that have all types of nail art including; 3D acrylic, flat art with gels and/ or\r\nacrylic paint, structured nails with unique shapes and styles on models.</p><p><span style=\"font-size: 1rem;\">3. Time allowed: the competitors will have 7 hours to complete their work. The first day is 4\r\nhours without models present while all 3d work will be created.</span></p><p><span style=\"font-size: 1rem;\">\r\n4. The second part of the challenge is on the last day. The models will be present and there will\r\nbe 2 hours to apply the nails on 1 hand to be applied. There will be a 1 hour break for\r\njudging and the remanding 1 hour after the break will be with models present for the 3d\r\nartwork to be applied and added to the top surface. There will be a second judging.</span></p><p><span style=\"font-size: 1rem;\">\r\n5. Flat art, foils, glitters, flocking, crushed shells, confetti and rhinestones are allowed for extra\r\neffect.\r\n</span></p><p><span style=\"font-size: 1rem;\">6. NO pre-made art such as Fimo or machine made shapes of any kind.\r\n</span></p><p><span style=\"font-size: 1rem;\">7. Theme is of the competitors choosing. Theme will be judged based on the cohesive\r\ncollaboration of artistry and style. There is not an actual theme required. For example; Alice\r\nin Wonderland. The theme should have a style and design that represents the competitors\r\nunique style.\r\n</span></p><p><span style=\"font-size: 1rem;\">8. The models nails should have a unique and new modern style shape. Example; edge, stiletto,\r\nor pipe.</span></p><p><span style=\"font-size: 1rem;\">9. The models nails may be applied with acrylic or gel but must be sculpted. All colors and type\r\nof acrylic and gel are allowed.\r\n</span></p><p><span style=\"font-size: 1rem;\">10. The nails may be applied however the competitor chooses.&nbsp;</span></p>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-03-02 09:49:04', 0),
(78, 11, 2, 2, 3, 18, 25, '2021-03-31', 'Mehandi', 'Art', '<ul class=\"i8Z77e\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Indian Mehndi de', 5, 5, 'photo_1614680689.jpg', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Participants have to apply&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">mehndi</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">&nbsp;on the Palmer as well as the dorsall side of the hand. Participants can apply&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">mehndi</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">&nbsp;on their own hand or any other person\'s hand. It is one round event. Time Limit is one hour.</span></p>', '<div class=\"co8aDb XcVN5d\" aria-level=\"3\" role=\"heading\" style=\"margin-bottom: 12px; color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif !important;\"><br></div><div class=\"RqBzHd\" style=\"padding: 0px 20px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Participants must bring their own material . ...</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Participants have to apply&nbsp;<b>mehndi</b>&nbsp;on the Palmer as well as the dorsall side of the hand.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Participants can apply&nbsp;<b>mehndi</b>&nbsp;on their own hand or any other person\'s hand.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">It is one round event.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Time Limit is one hour.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Neatness.</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Creativity.</li></ol></div>', 0, 1, '', 1, '', '3', 0, 0, 1, '2021-03-02 10:24:49', 0),
(79, 1, 1, 3, 1, 7, 12, '2021-05-31', 'competitive-reasoning', 'competitive-reasoning', '<p>Odd man out</p>', 2, 2, 'photo_1614683147.jpg', '<p>1] 30 Question will be asked for an aptitude test.\r\n</p><p>2] 45 Minutes for aptitude test.\r\n</p><p>3] Two marks for each correct Answer.\r\n</p><p>4] No Negative Marking</p>', '<p>1] Five Teams at a time will be taken for competition.\r\n</p><p>2] One team will be selected out of five for final round.\r\n</p><p>2] Top four teams will be eligible for final round.\r\n</p><p>3] First and Second rank team will be selected for prize.\r\n</p><p>4] Maximum five members are allowed in one group.\r\n</p><p>5] Prizes of Rs. 2000</p>', 0, 0, '', 0, '', '1', 0, 0, 0, '2021-03-03 12:58:21', 1),
(80, 13, 1, 1, 7, 18, 22, '2021-05-31', 'Videography', 'Videography', '', 4, 4, 'photo_1614753133.jpeg', '<p><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br></p><p><span style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">1. Only one entry per person.</span><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">2. If you want to enter a competition you must post a comment leaving your full name and email address.</span><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</span><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</span><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</span><br style=\"color: rgb(99, 98, 98); font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"></p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, '', 1, '', '3', 0, 0, 1, '2021-03-04 06:08:10', 1),
(81, 14, 1, 1, 2, 18, 25, '2021-05-31', 'Robo race', 'Robo race', '', 4, 4, 'photo_1614753276.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, '', 1, '', '3', 0, 0, 1, '2021-03-03 12:58:31', 0),
(82, 15, 1, 1, 6, 18, 25, '2021-05-31', 'Logo Bulider', 'Logo Bulider', '', 4, 4, 'photo_1614753369.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 0, '', 0, '', '4', 0, 1, 0, '2021-03-03 12:56:15', 0),
(83, 16, 1, 1, 2, 18, 25, '2021-05-03', 'Tshirt Hacks', 'Tshirt Hacks', '', 4, 4, 'photo_1614753537.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-03-03 12:57:15', 0),
(84, 17, 1, 2, 2, 18, 25, '2021-05-31', 'Rangoli', 'Art of mind', '', 5, 5, 'photo_1614753699.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-03-03 12:56:29', 0),
(85, 18, 1, 2, 6, 18, 25, '2021-05-31', 'Jewellery Making', 'Art & creativity', '', 5, 5, 'photo_85_1614774413.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, '', 1, '', '3', 0, 0, 1, '2021-03-03 12:57:02', 0),
(86, 19, 1, 3, 1, 5, 7, '2021-05-31', 'Paper Craft', 'Art& creativity', '', 1, 1, 'photo_1614754058.jpg', '<p>address.</p><p><br></p><p>3. The winner will be the entrant who fulfills the task/s given in the competition (for example: “be the first to guess the right amount of Maltesers” or “provide the wittiest comment about the competition”, etc.)</p><p><br></p><p>4. The closing date is as specified in each competition, and Maltalingua reserves the right to amend the competition end date at any time.</p><p><br></p><p>5. If you win a competition, we will notify you by post and/or e-mail and/or Facebook. The judges’ decision will be final, and no correspondence will be entered into.</p>', '<p>1. The panel of judges for each competition will be comprised of members of the marketing team of Maltalingua Ltd.</p><p><br></p><p>2. The prize will not be transferable to another person.</p><p><br></p><p>3. No part of a prize is exchangeable for cash or any other prize.</p><p><br></p><p>4. If an advertised prize is not available, we reserve the right to offer an alternative prize of equal or greater value.</p><p><br></p><p>5. Incorrectly completed entries will be disqualified.</p><div><br></div>', 0, 1, 'abc@gmail.com', 1, '9999999999', '4', 0, 1, 0, '2021-03-17 11:07:00', 1),
(87, 20, 2, 3, 1, 15, 17, '2021-03-31', 'Chess Competition', 'Register to see competition topic', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">tactics: forks, skewers, pins, double attacks, clearance sacrifices</span></p>', 3, 3, 'photo_1614774227.jpg', '<h2 style=\"padding: 20px 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; color: rgb(39, 54, 66); font-size: 21px; line-height: 30px; text-shadow: rgba(255, 255, 255, 0.64) 0px 1px; font-family: Arial, Helvetica, sans-serif;\"><span style=\"font-size: 14px; font-weight: 400; text-align: justify;\">White is always first to move and players take turns alternately moving one piece at a time. Movement is required. If a player´s turn is to move, he is not in check but has no legal moves, this situation is called “Stalemate” and it ends the game in a draw. Each type of piece has its own method of movement. A piece may be moved to another position or may capture an opponent´s piece, replacing on its square (en passant being the only exception). With the exception of the knight, a piece may not move over or through any of the other pieces. When a king is threatened with capture (but can protect himself or escape), it´s called check. If a king is in check, then the player must make a move that eliminates the threat of capture and cannot leave the king in check. Checkmate happens when a king is placed in check and there is no legal move to escape. Checkmate ends the game and the side whose king was checkmated looses.&nbsp;</span><a href=\"http://www.chesscoachonline.com/chess-articles/chess-for-kids-adhd-programs\" style=\"font-size: 14px; font-weight: 400; text-align: justify; background-color: rgb(255, 255, 255); color: rgb(75, 125, 175);\">Chess for kids</a><span style=\"font-size: 14px; font-weight: 400; text-align: justify;\">&nbsp;would be a great option to help the kid enhance his thinking capability with the&nbsp;</span><a href=\"http://www.chesscoachonline.com/chess-articles/chess-strategy\" style=\"font-size: 14px; font-weight: 400; text-align: justify; background-color: rgb(255, 255, 255); color: rgb(75, 125, 175);\">chess strategies</a><span style=\"font-size: 14px; font-weight: 400; text-align: justify;\">&nbsp;involved. Visit our affiliate&nbsp;</span><a title=\"ChessOnlineLessons\" href=\"https://chessonlinelessons.com/\" target=\"_blank\" style=\"font-size: 14px; font-weight: 400; text-align: justify; background-color: rgb(255, 255, 255); color: rgb(75, 125, 175);\">chess online lessons</a><span style=\"font-size: 14px; font-weight: 400; text-align: justify;\">&nbsp;website for scheduling an evaluation session with one of our experienced chess coaches.</span></h2>', '<h2 style=\"padding: 20px 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: bold; color: rgb(39, 54, 66); font-size: 21px; line-height: 30px; text-shadow: rgba(255, 255, 255, 0.64) 0px 1px; font-family: Arial, Helvetica, sans-serif;\"><span style=\"font-size: 14px; text-align: justify; font-weight: 400;\">White is always first to move and players take turns alternately moving one piece at a time. Movement is required. If a player´s turn is to move, he is not in check but has no legal moves, this situation is called “Stalemate” and it ends the game in a draw. Each type of piece has its own method of movement. A piece may be moved to another position or may capture an opponent´s piece, replacing on its square (en passant being the only exception). With the exception of the knight, a piece may not move over or through any of the other pieces. When a king is threatened with capture (but can protect himself or escape), it´s called check. If a king is in check, then the player must make a move that eliminates the threat of capture and cannot leave the king in check. Checkmate happens when a king is placed in check and there is no legal move to escape. Checkmate ends the game and the side whose king was checkmated looses.&nbsp;</span><a href=\"http://www.chesscoachonline.com/chess-articles/chess-for-kids-adhd-programs\" style=\"font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); font-weight: 400; color: rgb(75, 125, 175);\">Chess for kids</a><span style=\"font-size: 14px; text-align: justify; font-weight: 400;\">&nbsp;would be a great option to help the kid enhance his thinking capability with the&nbsp;</span><a href=\"http://www.chesscoachonline.com/chess-articles/chess-strategy\" style=\"font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); font-weight: 400; color: rgb(75, 125, 175);\">chess strategies</a><span style=\"font-size: 14px; text-align: justify; font-weight: 400;\">&nbsp;involved. Visit our affiliate&nbsp;</span><a title=\"ChessOnlineLessons\" href=\"https://chessonlinelessons.com/\" target=\"_blank\" style=\"font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255); font-weight: 400; color: rgb(75, 125, 175);\">chess online lessons</a><span style=\"font-size: 14px; text-align: justify; font-weight: 400;\">&nbsp;website for scheduling an evaluation session with one of our experienced chess coaches.</span></h2>', 0, 0, '', 1, '', '3', 0, 0, 1, '2021-03-03 12:23:47', 0),
(88, 21, 2, 3, 1, 8, 11, '2021-03-31', 'Carrom Competition', 'Register to see competition topic', '', 2, 2, 'photo_1614774387.jpg', '<h3 style=\"margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 1em; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Trebuchet MS&quot;, serif; font-weight: bold; color: rgb(0, 0, 0);\">Fouls</h3><p><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">When a player commits a foul, the turn comes to an end immediately and a penalty is incurred. The penalty is that one pocketed piece is returned to the board by the opponent anywhere within the main circle. Any other pieces requiring to be returned to the board are also placed within the main circle by the opponent. It is normal for pieces to be positioned in order to confer an advantage for the opponent.</span><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">A foul is recorded in the following situations:</span></p><p style=\"margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.3em; font-family: Arial, Helvetica, sans-serif;\"></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 4em; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Arial, Helvetica, sans-serif;\"><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The striker is pocketed.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The striker or any other piece leaves the board.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets an opponent\'s piece. If the Queen was also pocketed, it is returned to the centre by the opponent together with the penalty piece. Any other pieces pocketed in the same strike remain pocketed.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets the final opponent\'s piece. Regardless of whether the Queen has been covered, the opponent\'s piece is returned to the centre in addition to the penalty piece.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets the final piece before the Queen has been covered. In this case both the pocketed piece and a penalty piece are returned to the centre.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player contravenes the rules for striking.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player touches any piece in play, other than the striker.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The first player to strike fails to break the counters in three attempts.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.3em; font-family: Arial, Helvetica, sans-serif;\">Where a penalty is incurred but no pocketed pieces exist to return, the penalty is \"owed\" until a piece becomes available. If a penalty is owed, when a piece becomes available due to being pocketed, the piece is returned to the centre by the opponent at the end of the turn. Should the opponent forget to do this before the start of the next turn, any owed penalties are lost.<br></p>', '<h3 style=\"margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 1em; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Trebuchet MS&quot;, serif; font-weight: bold; color: rgb(0, 0, 0);\">Fouls</h3><p><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">When a player commits a foul, the turn comes to an end immediately and a penalty is incurred. The penalty is that one pocketed piece is returned to the board by the opponent anywhere within the main circle. Any other pieces requiring to be returned to the board are also placed within the main circle by the opponent. It is normal for pieces to be positioned in order to confer an advantage for the opponent.</span><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><br style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px;\">A foul is recorded in the following situations:</span></p><p style=\"margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.3em; font-family: Arial, Helvetica, sans-serif;\"></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 4em; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: Arial, Helvetica, sans-serif;\"><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The striker is pocketed.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The striker or any other piece leaves the board.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets an opponent\'s piece. If the Queen was also pocketed, it is returned to the centre by the opponent together with the penalty piece. Any other pieces pocketed in the same strike remain pocketed.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets the final opponent\'s piece. Regardless of whether the Queen has been covered, the opponent\'s piece is returned to the centre in addition to the penalty piece.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player pockets the final piece before the Queen has been covered. In this case both the pocketed piece and a penalty piece are returned to the centre.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player contravenes the rules for striking.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">A player touches any piece in play, other than the striker.</li><li style=\"margin: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">The first player to strike fails to break the counters in three attempts.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.2em; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 1.3em; font-family: Arial, Helvetica, sans-serif;\">Where a penalty is incurred but no pocketed pieces exist to return, the penalty is \"owed\" until a piece becomes available. If a penalty is owed, when a piece becomes available due to being pocketed, the piece is returned to the centre by the opponent at the end of the turn. Should the opponent forget to do this before the start of the next turn, any owed penalties are lost.<br></p>', 0, 0, '', 1, '', '3', 0, 0, 1, '2021-03-03 12:26:27', 0);

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
(13, 60, '', '2021-02-02 12:59:54'),
(14, 61, '', '2021-02-03 05:34:02'),
(15, 62, '', '2021-02-03 12:42:33');

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
(1, 'Quiz', '2021-03-16 07:18:33'),
(2, 'Singing', '2021-01-11 07:03:32'),
(3, 'Dancing', '2021-01-11 07:03:42'),
(4, 'Essay Writing', '2021-02-04 13:13:16'),
(5, 'Poster Presentation', '2021-02-15 06:00:59'),
(6, 'Drawing', '2021-02-22 08:07:25'),
(7, 'Soap Creativity', '2021-03-02 07:50:14'),
(8, 'Best out of Waste', '2021-03-02 08:06:34'),
(9, 'Story Telling', '2021-03-02 08:15:54'),
(10, 'Nail Art', '2021-03-02 09:40:44'),
(11, 'Mehandi', '2021-03-02 10:18:35'),
(12, 'Competitive Reasoning', '2021-03-02 11:09:55'),
(13, 'Videography', '2021-03-03 06:23:43'),
(14, 'Robo race', '2021-03-03 06:33:03'),
(15, 'Logo Builder', '2021-03-03 06:34:57'),
(16, 'Tshirt Hacks', '2021-03-03 06:37:27'),
(17, 'Rangoli', '2021-03-03 06:40:06'),
(18, 'Jewellery Making', '2021-03-03 06:42:59'),
(19, 'Paper Craft', '2021-03-03 06:46:10'),
(20, 'Chess Competition', '2021-03-03 12:19:14'),
(21, 'Carrom Competition', '2021-03-03 12:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `competition_uploadfile_submit`
--

CREATE TABLE `competition_uploadfile_submit` (
  `uploadfileid` int(11) NOT NULL,
  `competitionid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uploadfile` varchar(256) NOT NULL,
  `file_format` int(11) NOT NULL,
  `upload_audio` varchar(256) NOT NULL,
  `upload_vedio` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition_uploadfile_submit`
--

INSERT INTO `competition_uploadfile_submit` (`uploadfileid`, `competitionid`, `user_id`, `uploadfile`, `file_format`, `upload_audio`, `upload_vedio`, `upload_image`, `created_date`) VALUES
(67, 59, 258, '', 2, 'upload_audio_258_1614838822.mp3', '', '', '2021-02-21 13:45:46'),
(69, 85, 259, '', 3, '', 'upload_vedio_259_1614838664.mp4', '', '2021-02-22 07:54:36'),
(70, 73, 261, '', 4, '', '', 'upload_image_261_1614079094.jpg', '2021-02-22 09:53:42'),
(76, 60, 220, 'uploadfile_220_1613989668.pdf', 1, '', '', '', '2021-02-22 10:27:48'),
(77, 59, 255, '', 1, '', '', '', '2021-03-04 05:44:45'),
(78, 59, 267, '', 1, '', '', '', '2021-03-04 06:02:11'),
(79, 60, 307, 'uploadfile_307_1614948339.pdf', 1, '', '', '', '2021-03-05 12:45:38'),
(80, 60, 333, 'uploadfile_333_1615026529.pdf', 1, 'upload_audio_333_1615380858.mp3', '', '', '2021-03-06 10:28:48'),
(81, 26, 334, '', 3, '', 'upload_vedio_334_1615188204.wmv', '', '2021-03-08 07:23:24'),
(82, 88, 333, '', 3, 'upload_audio_333_1615380858.mp3', '', '', '2021-03-10 10:13:42'),
(83, 59, 333, '', 2, 'upload_audio_333_1615380858.mp3', '', '', '2021-03-10 12:54:18');

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
(1, 'Kolhapur', 1, 1, 1, '2020-12-05 00:00:00');

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
(62, 9, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', 'iiim,iimm,iimn,iidn', '3', '2021-01-27'),
(63, 59, 'Q.1: Use Euclid’s division lemma to show that the square of any positive integer is either of the form 3m or 3m + 1 for some integer m.', '2', '5,50,20,60', '', '2021-02-19'),
(64, 53, 'Q.2: Express each number as a product of its prime factors:', '1', '5,6,8,9', '2', '2021-02-20'),
(65, 12, 'Q.2: Express each number as a product of its prime factors:', '2', '5,8,9,12', '2', '2021-02-03'),
(66, 12, 'Q.2: Express each number as a product of its prime factors:', '1', '5,6,8,20', '3', '2021-02-03'),
(67, 7, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', '41,4,14,17', '2', '2021-02-04'),
(68, 12, 'Question 1. What is three fifth of 100?', '5', '3,5,20,60', '2', '2021-02-15'),
(69, 60, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', '10,20,30,40', '3', '2021-03-05'),
(70, 60, 'In which year of First World War Germany declared war on Russia and France?', '1', '10,22,23,45', '2', '2021-03-05'),
(71, 60, 'How many Lok Sabha seats belong to Rajasthan?', '1', '4,7,5,3', '3', '2021-03-05'),
(72, 79, 'India\'s first Technicolor film ____ in the early 1950s was produced by ____', '1', '10,20,32,40', '2', '2021-03-10'),
(73, 79, 'In which year of First World War Germany declared war on Russia and France?', '1', '10,21,11,44', '2', '2021-03-09'),
(74, 12, 'gh', '1', '', '', '2021-03-10');

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
-- Table structure for table `points_master`
--

CREATE TABLE `points_master` (
  `pointsid` bigint(50) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `points` bigint(50) NOT NULL,
  `winnerposition` varchar(256) NOT NULL,
  `conversionpoints` bigint(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `points_master`
--

INSERT INTO `points_master` (`pointsid`, `competitionid`, `points`, `winnerposition`, `conversionpoints`, `created_date`) VALUES
(1, 7, 100, '1st Winner', 15, '2021-02-28'),
(2, 7, 200, '2nd Winner', 20, '2021-02-28'),
(3, 7, 300, '3rd Winner', 30, '2021-02-28'),
(4, 7, 450, '1st Runner Up', 45, '2021-02-28'),
(5, 7, 500, '2nd Runner Up', 50, '2021-02-28'),
(6, 12, 5000, '1st Winner', 500, '2021-02-28'),
(7, 12, 3000, '2nd Winner', 300, '2021-02-28'),
(8, 12, 1000, '3rd Winner', 100, '2021-02-28'),
(9, 12, 500, '1st Runner Up', 70, '2021-02-28'),
(10, 12, 300, '2nd Runner Up', 50, '2021-02-28'),
(11, 73, 5000, '1st Winner', 500, '2021-03-03'),
(12, 73, 3000, '2nd winner', 300, '2021-03-03'),
(13, 73, 1000, '3rd winner', 100, '2021-03-03'),
(14, 73, 700, '1st Runner Up', 70, '2021-03-03'),
(15, 73, 500, '2nd Runner Up', 50, '2021-03-03'),
(16, 60, 1000, '1st Winner', 100, '0000-00-00'),
(17, 60, 800, '2nd Winner', 80, '0000-00-00'),
(18, 60, 600, '3rd Winner', 60, '0000-00-00'),
(19, 60, 400, '1st Runner Up', 40, '0000-00-00'),
(20, 60, 200, '2st Runner Up', 20, '0000-00-00'),
(21, 79, 1000, '1st Winner', 200, '0000-00-00'),
(22, 79, 800, '2nd Winner', 150, '0000-00-00'),
(23, 79, 600, '3rd Winner', 100, '0000-00-00'),
(24, 79, 400, '1st Runner Up', 50, '0000-00-00'),
(25, 79, 200, '2st Runner Up', 20, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileid` bigint(50) NOT NULL,
  `parentname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `schoolcollegename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `alternatemobno` varchar(10) NOT NULL,
  `gender` int(11) NOT NULL,
  `cityid` varchar(256) NOT NULL,
  `districtid` varchar(256) NOT NULL,
  `stateid` int(11) NOT NULL,
  `competitionid` bigint(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `userprofileid` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileid`, `parentname`, `birthdate`, `emailid`, `standard`, `schoolcollegename`, `address`, `pincode`, `fullname`, `alternatemobno`, `gender`, `cityid`, `districtid`, `stateid`, `competitionid`, `user_id`, `userprofileid`, `profile_image`, `created_date`) VALUES
(2, 'techenvision', '0000-00-00', 'tech@gmail.com', '3', 'english model school', 'kolhapur', 1, '', '', 0, '0', '0', 0, 1, 50, 0, '', '0000-00-00'),
(3, 'Manish Patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 5, 36, 0, 'profile_image_1_1609322335.PNG', '0000-00-00'),
(4, 'mohan patil', '0000-00-00', 'manish@gmail.com', '', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 34, 12, 0, '', '0000-00-00'),
(6, 'manish patil', '0000-00-00', 'manish@gmail.com', '', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 26, 53, 0, 'profile1.jpg', '2020-12-29'),
(7, 'manish patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 7, 29, 0, '', '2020-12-25'),
(8, 'manish patil', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 36, 30, 0, '', '2020-12-25'),
(9, 'Rohan Wordpress', '0000-00-00', 'manish@gmail.com', '4', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 5, 33, 0, '', '2020-12-25'),
(10, 'manish patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 7, 34, 0, '', '2020-12-25'),
(11, 'Manish Patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 6, 1, 0, 'profile_image_1_1609322335.PNG', '2020-12-25'),
(12, 'Mahesh Mane', '2004-06-16', 'mahesh@gmail.com', '13', 'Gopal Krishna Gokhale College Kolhapur', 'kolhapur', 416012, 'Datta Mane', '7854125487', 1, '1', '1', 22, 0, 6, 0, 'profile_image_6_1612877802.jpg', '2020-12-25'),
(13, 'manish patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 6, 18, 0, '', '2020-12-25'),
(14, 'Rohan Wordpress', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 5, 16, 0, '', '2020-12-25'),
(15, 'Komal kadam', '0000-00-00', 'manish@gmail.com', '4', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 7, 17, 0, '', '2020-12-25'),
(16, 'kiran kadam', '0000-00-00', 'kiran@gmail.com', '3', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 10, 55, 0, '', '2020-12-25'),
(17, 'prathamesh chavan', '0000-00-00', 'pppp@gmail.com', '3', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 10, 56, 0, '', '2020-12-25'),
(18, 'manish patil', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 11, 20, 0, '', '2020-12-31'),
(19, 'Manish Patil', '0000-00-00', 'manish@gmail.com', '1', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 2, 21, 0, '', '2020-12-31'),
(20, 'Rohan Wordpress', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 2, 23, 0, '', '2020-12-31'),
(21, 'Rohan Wordpress', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 1, 57, 0, '', '2021-01-01'),
(22, 'Kamini patil', '0000-00-00', 'manish@gmail.com', '3', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 7, 62, 0, '', '2021-01-15'),
(23, 'monika desai', '0000-00-00', 'monika@gmail.com', '5', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 14, 35, 0, '', '2021-01-01'),
(24, 'Prakash', '0000-00-00', 'prakash@gmail.com', '2', 'english model school', 'kkk', 2, '', '', 0, '0', '0', 0, 6, 58, 0, 'profile_image_58_1609503496.jpg', '2021-01-01'),
(25, 'Rohan Wordpress', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 2, 59, 0, '', '2021-01-02'),
(26, 'Manish Mane', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 53, 62, 0, '', '2021-01-15'),
(27, 'Suresh Gavali', '0000-00-00', 'sayali@gamil.com', '1', 'dot', 'Kolhapur', 1, '', '', 0, '0', '0', 0, 59, 63, 0, '', '2021-01-20'),
(28, 'manish patil', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 416012, '', '', 0, '0', '0', 0, 53, 65, 0, 'profile_image_65_1612357338.jpg', '2021-02-02'),
(29, 'Bhimrao Chavan', '0000-00-00', 'manishc@gmail.com', '3', 'english model school', 'kolhapur', 416012, '', '', 0, '0', '0', 0, 53, 92, 0, '', '2021-02-02'),
(30, 'Ganesh Chavan', '0000-00-00', 'manish@gmail.com', '2', 'english model school', 'kkk', 416012, '', '', 0, '0', '0', 0, 53, 93, 0, '', '2021-02-02'),
(31, 'xyz', '0000-00-00', 'xyz@gmail.com', '', 'ppgh', 'kolhapur', 416012, '', '', 0, '0', '0', 0, 26, 94, 0, '', '2021-02-03'),
(32, 'Rangrao', '0000-00-00', 'manish@gmail.com', '4', 'jkllk', 'kkk', 416012, '', '', 0, '0', '0', 0, 60, 123, 0, '', '2021-02-08'),
(33, 'Manish Patil', '0000-00-00', 'manish@gmail.com', '', 'english model school', 'kkk', 1, '', '', 0, '0', '0', 0, 7, 1, 0, '', '2021-02-08'),
(46, 'Ramesh Mane', '2013-02-05', 'kiran@gmail.com', '8', 'English Model School,kolhapur', 'kkk', 410012, 'Kiran Mane', '7854785478', 1, '1', '1', 22, 7, 225, 7, 'profile_image_225_1613040466.jpg', '2021-02-11'),
(47, 'Ramesh Mane', '2013-02-05', 'kiran@gmail.com', '8', 'English Model School,kolhapur', 'kkk', 410012, 'Kiran Mane', '7854785478', 1, '1', '1', 22, 61, 225, 7, 'profile_image_225_1613040466.jpg', '2021-02-11'),
(48, 'Manish Joshi', '2008-06-17', 'Manish@gmail.com', '5', 'S.M. Lohiya School ,Kolhapur', 'Kolhapur', 416012, 'Swapnil Joshi', '9874587458', 1, '1', '1', 22, 61, 226, 8, 'profile_image_226_1613109176.jpg', '2021-02-12'),
(50, 'Manish Joshi', '2008-06-17', 'Manish@gmail.com', '5', 'S.M. Lohiya School ,Kolhapur', 'Kolhapur', 416012, 'Swapnil Joshi', '9874587458', 1, '1', '1', 22, 53, 226, 8, 'profile_image_226_1613109176.jpg', '2021-02-12'),
(51, 'Vilas', '1992-01-24', 'yash@gmail.com', '8', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 61, 236, 18, '', '2021-02-12'),
(52, 'Vilas', '2013-01-24', 'yash@gmail.com', '8', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 7, 236, 18, '', '2021-02-12'),
(55, 'Vilas', '2014-01-24', 'yash@gmail.com', '13', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 12, 236, 18, '', '2021-02-12'),
(56, 'Vilas', '2014-01-24', 'yash@gmail.com', '13', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 53, 236, 18, '', '2021-02-12'),
(58, 'bbbb', '2021-02-11', 'aaa@gmail.com', '5', 'hhh', 'kkk', 416012, 'aabbb', '9874562144', 1, '1', '1', 22, 7, 241, 23, 'profile_image_241_1613305157.jpg', '2021-02-14'),
(59, 'yash', '2006-01-16', 'sve@gmail.com', '5', 'SM', 'Yash plaza', 416018, 'Aditya', '9822114878', 1, '1', '1', 22, 53, 242, 24, 'profile_image_242_1613367223.png', '2021-02-15'),
(60, 'Vilas', '2021-02-15', 'Yash@gmail.com', '3', 'Kolhapur Highschool Kolhapur', 'Rajarampuri', 416018, 'shweta E', '9822114888', 1, '1', '1', 22, 71, 243, 25, '', '2021-02-15'),
(62, 'dfdf', '2021-02-02', 'manish@gmail.com', '3', 'fff', 'kkk', 0, 'fff', '8698066956', 1, 'kolhapur', 'Kolhapur', 22, 53, 245, 27, 'profile_image_245_1613470431.png', '2021-02-16'),
(63, 'ddd', '2021-01-01', 'sss@abc.abc', '2', 'sss', 'kkk', 0, 'Gayatri', '4343545666', 2, 'kolhapur', 'Kolhapur', 22, 53, 246, 28, '', '2021-02-16'),
(67, 'vilas', '2018-02-18', 'xyz@gmail.com', '1', 'ppgh', 'yash plaza', 0, 'xyz', '9822114889', 1, '123', 'kolhapur12333', 22, 26, 251, 33, '', '2021-02-18'),
(68, 'Kiran Kulkarni', '2015-07-09', 'manish@gmail.com', '7', 'ppg', 'Kolhapur', 0, 'Manisha Kulkarni', '9874563210', 2, 'kolhapur', 'kolhapur', 22, 59, 255, 37, 'profile_image_255_1613728321.png', '2021-02-19'),
(69, 'Sandip Kore', '2014-07-09', 'manish@gmail.com', '6', 'Maharashtra Highschool', 'Kolhapur', 0, 'Ramesh Kore', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 256, 38, 'profile_image_256_1613820293.png', '2021-02-20'),
(70, 'aa', '2013-06-12', 'aaa@gmail.com', '6', 'sm', 'Kolhapur', 0, 'abc', '9874563210', 1, 'Kolhapur', 'Kolhapur', 22, 7, 258, 40, 'profile_image_258_1613891266.jpg', '2021-02-21'),
(71, 'aa', '2013-06-12', 'aaa@gmail.com', '6', 'sm', 'Kolhapur', 0, 'abc', '9874563210', 1, 'Kolhapur', 'Kolhapur', 22, 59, 258, 40, 'profile_image_258_1613891266.jpg', '2021-02-21'),
(72, 'Manish', '2015-02-17', 'manish@gmail.com', '5', 'ppg', 'Kolhapur', 0, 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 72, 259, 41, 'profile_image_259_1613978579.png', '2021-02-22'),
(73, 'Tukaram', '2017-06-13', 'manish@gmail.com', '1', 'sm', 'Kolhapur', 0, 'Prakash Ilage', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 73, 261, 43, 'profile_image_261_1613982851.png', '2021-02-22'),
(74, 'Manish', '2016-02-17', 'manish@gmail.com', '6', 'SM', 'kolhapur', 0, 'Raju Patel', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 262, 44, 'profile_image_262_1614339172.png', '2021-02-26'),
(75, 'Umesh', '2016-06-15', 'manish@gmail.com', '6', 'SM', 'Kolhapur', 0, 'Ramesh Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 263, 45, 'profile_image_263_1614340427.png', '2021-02-26'),
(76, 'Ramesh Patil', '2015-03-13', 'ramesh@gmail.com', '6', 'SM', 'kolhapur', 0, 'Rishikesh Patil', '9874569874', 1, 'kolhapur', 'kolhapur', 22, 7, 264, 46, 'profile_image_264_1614491663.PNG', '2021-02-28'),
(77, 'Ramakant', '2015-07-16', 'ram@gmail.com', '7', 'Sm', 'Kolhapur', 0, 'Ram Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 265, 47, 'profile_image_265_1614520183.PNG', '2021-02-28'),
(82, 'Karan', '2010-06-09', 'manish@gmail.com', '6', 'sm', 'Kolhapur', 0, 'Omkar Vhatkar', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 266, 48, 'profile_image_266_1614750583.PNG', '2021-03-03'),
(90, 'Karan', '2000-06-09', 'manish@gmail.com', '13', 'sm', 'Kolhapur', 0, 'Omkar Vhatkar', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 26, 266, 48, 'profile_image_266_1614750583.PNG', '2021-03-03'),
(91, 'Karan', '2000-06-09', 'manish@gmail.com', '13', 'sm', 'Kolhapur', 0, 'Omkar Vhatkar', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 12, 266, 48, 'profile_image_266_1614750583.PNG', '2021-03-03'),
(109, 'Manish', '2008-06-17', 'manish@gmail.com', '14', 'ppg', 'Kolhapur', 0, 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 78, 259, 41, 'profile_image_259_1613978579.png', '2021-03-03'),
(110, 'Manish', '2001-06-04', 'manish@gmail.com', '14', 'ppg', 'Kolhapur', 0, 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 84, 259, 41, 'profile_image_259_1613978579.png', '2021-03-03'),
(111, 'Manish', '2001-06-04', 'manish@gmail.com', '14', 'ppg', 'Kolhapur', 0, 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 85, 259, 41, 'profile_image_259_1613978579.png', '2021-03-03'),
(112, 'Manish', '2001-06-04', 'manish@gmail.com', '14', 'ppg', 'Kolhapur', 0, 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 75, 259, 41, 'profile_image_259_1613978579.png', '2021-03-04'),
(113, 'Mohan', '2015-11-11', 'demo@gmail.com', '5', 'SM Lohiya', 'Kolhapur', 416012, 'Rohan Velhal', '8745965412', 1, 'Kolhapur', 'Kolhapur', 22, 88, 220, 2, 'profile_image_220_1613565686.png', '2021-03-04'),
(114, 'Ramakant', '2015-07-16', 'ram@gmail.com', '7', 'Sm', 'Kolhapur', 0, 'Ram Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 59, 265, 47, 'profile_image_265_1614520183.PNG', '2021-03-04'),
(115, 'edasd', '2015-02-06', 'manish@gmail.com', '10', 'sm', 'kkk', 0, 'abccfasd', '4343545666', 1, 'kolhapur', 'kolhapur', 22, 59, 267, 49, '', '2021-03-04'),
(116, 'ramesh', '2015-07-08', '', '9', 'sm', 'kolhapur', 0, 'Chinmayi Patil', '4343545666', 2, 'kolhapur', 'kolhapur', 22, 7, 307, 85, 'profile_image_307_1614947895.jpg', '2021-03-05'),
(117, 'ramesh', '2015-07-08', '', '9', 'sm', 'kolhapur', 0, 'Chinmayi Patil', '4343545666', 2, 'kolhapur', 'kolhapur', 22, 60, 307, 85, 'profile_image_307_1614947895.jpg', '2021-03-05'),
(118, 'ramesh', '2015-07-08', '', '9', 'sm', 'kolhapur', 0, 'Chinmayi Patil', '4343545666', 2, 'kolhapur', 'kolhapur', 22, 79, 307, 85, 'profile_image_307_1614947895.jpg', '2021-03-05'),
(119, 'Mahesh', '2005-11-16', '', '9', 'sm', 'kolhapur', 0, 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 60, 333, 87, 'profile_image_333_1615025594.PNG', '2021-03-06'),
(120, 'Mahesh', '2005-11-16', '', '9', 'sm', 'kolhapur', 0, 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 7, 333, 87, 'profile_image_333_1615025594.PNG', '2021-03-06'),
(121, 'Vinay', '2015-06-16', '', '3', 'rainbow school', 'kolhapur', 0, 'Pratham Chavan', '9856321456', 1, 'kolhapur', 'kolhapur', 22, 26, 334, 88, 'profile_image_334_1615187696.PNG', '2021-03-08'),
(122, 'Vinay', '2014-02-04', '', '6', 'rainbow school', 'kolhapur', 0, 'Pratham Chavan', '9856321456', 1, 'kolhapur', 'kolhapur', 22, 7, 334, 88, 'profile_image_334_1615187696.PNG', '2021-03-08'),
(126, 'Mahesh', '2005-11-16', '', '9', 'sm', 'kolhapur', 0, 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 79, 333, 87, 'profile_image_333_1615025594.PNG', '2021-03-10'),
(127, 'Mahesh', '2005-11-16', '', '9', 'sm', 'kolhapur', 0, 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 88, 333, 87, 'profile_image_333_1615025594.PNG', '2021-03-10'),
(130, 'Mahesh', '2005-11-16', '', '10', 'sm', 'kolhapur', 0, 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 59, 333, 87, 'profile_image_333_1615025594.PNG', '2021-03-10'),
(132, 'Mohan', '1994-06-07', 'demo@gmail.com', '14', 'SM Lohiya', 'Kolhapur', 416012, 'Rohan Velhal', '8745965412', 1, 'Kolhapur', 'Kolhapur', 22, 81, 220, 2, '', '2021-03-16'),
(149, 'Mohan', '1999-07-07', 'demo@gmail.com', '15', 'SM Lohiya', 'Kolhapur', 416012, 'Rohan Velhal', '8745965412', 2, 'Kolhapur', 'Kolhapur', 22, 84, 220, 2, '', '2021-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` bigint(50) NOT NULL,
  `statename` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`, `created_date`) VALUES
(1, 'Andaman and Nicobar Islands', '0000-00-00 00:00:00'),
(2, 'Andhra Pradesh', '0000-00-00 00:00:00'),
(3, 'Arunachal Pradesh', '0000-00-00 00:00:00'),
(4, 'Assam', '0000-00-00 00:00:00'),
(5, 'Bihar', '0000-00-00 00:00:00'),
(6, 'Chandigarh', '0000-00-00 00:00:00'),
(7, 'Chhattisgarh', '0000-00-00 00:00:00'),
(8, 'Dadra and Nagar Haveli', '0000-00-00 00:00:00'),
(9, 'Daman and Diu', '0000-00-00 00:00:00'),
(10, 'Delhi-NCR', '0000-00-00 00:00:00'),
(11, 'Goa', '0000-00-00 00:00:00'),
(12, 'Gujarat', '0000-00-00 00:00:00'),
(13, 'Haryana', '0000-00-00 00:00:00'),
(14, 'Himachal Pradesh', '0000-00-00 00:00:00'),
(15, 'Jammu and Kashmir', '0000-00-00 00:00:00'),
(16, 'Jharkhand', '0000-00-00 00:00:00'),
(17, 'Karnataka', '0000-00-00 00:00:00'),
(18, 'Kerala', '0000-00-00 00:00:00'),
(20, 'Lakshadweep', '0000-00-00 00:00:00'),
(21, 'Madhya Pradesh', '0000-00-00 00:00:00'),
(22, 'Maharashtra', '0000-00-00 00:00:00'),
(23, 'Manipur', '0000-00-00 00:00:00'),
(24, 'Meghalaya', '0000-00-00 00:00:00'),
(25, 'Mizoram', '0000-00-00 00:00:00'),
(26, 'Nagaland', '0000-00-00 00:00:00'),
(29, 'Odisha', '0000-00-00 00:00:00'),
(31, 'Pondicherry', '0000-00-00 00:00:00'),
(32, 'Punjab', '0000-00-00 00:00:00'),
(33, 'Rajasthan', '0000-00-00 00:00:00'),
(34, 'Sikkim', '0000-00-00 00:00:00'),
(35, 'Tamil Nadu', '0000-00-00 00:00:00'),
(36, 'Telangana', '0000-00-00 00:00:00'),
(37, 'Tripura', '0000-00-00 00:00:00'),
(40, 'West Bengal', '0000-00-00 00:00:00'),
(42, 'Ladakh', '2021-03-16 00:00:00'),
(43, 'Uttarakhand', '0000-00-00 00:00:00'),
(44, 'Uttar Pradesh', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabcompetition`
--

CREATE TABLE `tabcompetition` (
  `tabinputtextid` bigint(50) NOT NULL,
  `tabinputtext` varchar(255) NOT NULL,
  `tabid` varchar(255) NOT NULL,
  `fromstand` int(11) NOT NULL,
  `tostand` int(11) NOT NULL,
  `alluser` int(11) NOT NULL,
  `fromage` int(11) NOT NULL,
  `toage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabcompetition`
--

INSERT INTO `tabcompetition` (`tabinputtextid`, `tabinputtext`, `tabid`, `fromstand`, `tostand`, `alluser`, `fromage`, `toage`) VALUES
(1, 'Nur-1st', 'nur-class1', 1, 5, 0, 3, 6),
(2, '2nd-5th', 'class2-class5', 6, 9, 0, 7, 10),
(3, '6th-9th', 'class6-class9', 10, 13, 0, 11, 14),
(4, 'Males(18+)', 'male', 0, 0, 0, 18, 45),
(5, 'Females(18+)', 'female', 0, 0, 0, 18, 45),
(6, 'All', 'all', 0, 100, 1, 0, 0);

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
  `points` bigint(50) NOT NULL,
  `conversionpoints` bigint(50) NOT NULL,
  `user_otp` varchar(10) DEFAULT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'active',
  `user_addedby` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `company_id`, `branch_id`, `roll_id`, `user_name`, `user_address`, `user_pincode`, `user_city`, `user_email`, `user_mobile`, `user_password`, `points`, `conversionpoints`, `user_otp`, `user_status`, `user_addedby`, `user_date`, `is_admin`) VALUES
(1, 1, '', 1, 'Admin', '', 1, 'Kolhapur', 'demo@email.com', '9876543210', '25d55ad283aa400af464c76d713c07ad', 0, 0, NULL, 'active', 'Admin', '2021-03-17 06:52:09', 0),
(6, 1, '', 2, 'Datta Mane', 'kop\r\n', 416012, 'Kop', 'datta@mail.com', '9673454383', '12345689', 0, 0, NULL, 'active', '0', '2021-02-05 05:01:37', 0),
(11, 1, '', 2, 'rohan wordpress', 'kop', 2, 'kolhapur', 'rohan@gm.com', '8974562101', '1234', 0, 0, NULL, 'active', '0', '2021-02-08 12:37:48', 0),
(12, 1, '', 2, 'techenvision', 'rajarampuri', 2, 'kop', 'techenvision@gmail.com', '8421751394', 'tech', 0, 0, '11', 'active', '0', '2021-01-21 06:08:05', 0),
(16, 0, '', 2, 'techenvision', '', 416012, '', '', '9999999999', '', 0, 0, '123654', 'active', '1', '2020-12-15 01:18:59', 1),
(17, 0, '', 2, 'tech', '', 416012, '', '', '7777777777', '', 0, 0, '30', 'active', '1', '2020-12-15 01:19:03', 1),
(18, 1, '', 2, 'abc', 'kk', 0, 'kolhapur', 'manish@gmail.com', '7845127845', '1234567', 0, 0, NULL, 'active', '1', '2020-12-15 01:17:00', 0),
(19, 0, '', 2, 'rohan wordpress', '', 123, '', '', '6666666666', '', 0, 0, '1234567', 'active', '1', '2021-02-04 06:48:46', 1),
(20, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9856325698', '', 0, 0, '10000', 'active', '1', '2020-12-15 01:19:07', 1),
(21, 0, '', 2, 'rohan wordpress', '', 4444444, '', '', '8888888888', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:10', 1),
(23, 0, '', 2, 'rohan wordpress', '', 416, '', '', '744444444', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:14', 1),
(25, 0, '', 2, 'rohan wordpress', 'kkk', 410, 'kolhapur', 'rrr@mail.com', '7845211254', '1235', 0, 0, NULL, 'active', '0', '2021-02-04 06:56:17', 0),
(26, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563214', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:21', 1),
(29, 0, '', 2, 'rohan wordpress', '', 410512, '', '', '9874563215', '12', 0, 0, NULL, 'active', '1', '2021-02-04 05:22:00', 1),
(30, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222222222', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:25', 1),
(33, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:28', 1),
(34, 0, '', 2, 'rohan wordpress', '', 411, '', '', '1111111111', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:31', 1),
(35, 0, '', 2, 'rohan wordpress', '', 4160001, '', '', '8521478554', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:35', 1),
(36, 0, '', 2, 'rohan wordpress', '', 416, '', '', '9632587412', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:38', 1),
(37, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563258', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:40', 1),
(39, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7412589635', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:19:42', 1),
(41, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrr@gmail.com', '9865988950', '1236', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:23', 0),
(42, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7845121236', '', 0, 0, NULL, 'active', '1', '2020-12-15 01:36:10', 1),
(43, 0, '', 2, 'rohan wordpress', '', 410126, '', '', '7896547890', '', 0, 0, NULL, 'active', '21', '2020-12-15 01:36:55', 1),
(44, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrrr@aa.com', '9874563210', '1237', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:26', 0),
(45, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rr@r.v', '9845632108', '1238', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:30', 0),
(46, 1, '', 2, 'abc', 'kkk', 0, 'kolhapur', 'rer@n.nn', '7771111111', '1239', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:34', 0),
(47, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'eee@d.c', '122', '1230', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:40', 0),
(48, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'jjj@f.cm', '44444', '1231', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:44', 0),
(49, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'zzz@g.mm', '1555', '1232', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:51', 0),
(50, 1, '', 2, 'Vinayak Baleghate', 'kolhapur', 0, 'kolhapur', 'vinayak@techenvision.in', '9874577777', '1234563', 0, 0, NULL, 'active', '1', '2021-02-04 06:56:56', 1),
(51, 1, '', 2, 'Rohan Patil', 'kolhapur', 0, 'kolhapur', 'rohan@techenvision.in', '7474747474', '12334', 0, 0, NULL, 'active', '1', '2021-02-04 06:57:05', 1),
(53, 1, '', 2, 'Sweta Mane', 'kolhapur', 0, 'kolhapur', 'sweta@gmail.com', '9988998899', 'sweta', 0, 0, NULL, 'active', '1', '2020-12-25 07:06:36', 1),
(55, 0, '', 3, 'kiran kadam', '', 1, '', '', '8282828282', '', 0, 0, NULL, 'active', '', '2020-12-25 11:27:36', 3),
(56, 0, '', 3, 'prathamesh chavan', '', 1, '', '', '7417417417', '', 0, 0, NULL, 'active', '', '2020-12-25 11:53:06', 3),
(58, 0, '', 3, 'Manikarnika', '', 1, '', '', '9888888888', '', 0, 0, NULL, 'active', '', '2021-01-01 12:06:39', 3),
(59, 0, '', 3, 'abc', '', 2, '', '', '7897897897', '', 0, 0, NULL, 'active', '', '2021-01-02 12:16:02', 3),
(60, 0, '', 3, 'sdf', '', 2, '', '', '9666666666', '', 0, 0, NULL, 'active', '', '2021-01-06 06:20:25', 3),
(61, 1, '', 2, 'Rahul Patil', 'kkk', 0, 'kolhapur', 'df@gm.com', '9333333333', '12356', 0, 0, NULL, 'active', '1', '2021-02-04 06:57:11', 1),
(62, 1, '', 2, 'Omkar Mane', 'kolhapur', 0, 'kolhapur', 'omkar@gmail.com', '9639639630', 'omkar', 0, 0, NULL, 'active', '1', '2021-01-15 07:06:03', 1),
(63, 0, '', 3, 'Sayali Gavali', '', 416012, '', '', '9512364789', '', 0, 0, NULL, 'active', '', '2021-01-20 06:37:07', 3),
(64, 0, '', 3, 'gkshadg', '', 596, '', '', '9685714254', '', 0, 0, NULL, 'active', '', '2021-01-27 13:27:51', 3),
(65, 0, '', 3, 'Sweta', '', 416012, '', '', '8698066940', '123456789', 0, 0, NULL, 'active', '', '2021-02-05 05:02:31', 3),
(66, 0, '', 3, 'aaa', '', 416, '', '', '9856325555', '12387', 0, 0, NULL, 'active', '', '2021-02-04 06:57:26', 3),
(67, 0, '', 3, 'bbbb', '', 416012, '', '', '7410000000', '123676', 0, 0, NULL, 'active', '', '2021-02-04 06:57:29', 3),
(68, 0, '', 3, 'cccc', '', 416012, '', '', '8698066920', '12365', 0, 0, NULL, 'active', '', '2021-02-04 06:57:33', 3),
(69, 0, '', 3, 'aaaa', '', 1425, '', '', '8520000000', '12343', 0, 0, NULL, 'active', '', '2021-02-04 06:57:37', 3),
(71, 0, '', 3, 'aaa', '', 416012, '', '', '8540000000', '123433', 0, 0, NULL, 'active', '', '2021-02-04 06:57:42', 3),
(72, 0, '', 3, 'aaa', '', 1445, '', '', '8521000000', '12345657', 0, 0, NULL, 'active', '', '2021-02-04 06:57:48', 3),
(73, 0, '', 3, 'jjj', '', 416012, '', '', '8536000000', '12354323', 0, 0, NULL, 'active', '', '2021-02-04 06:57:54', 3),
(74, 0, '', 3, 'ssss', '', 416, '', '', '8456320000', '12345432', 0, 0, NULL, 'active', '', '2021-02-04 06:58:00', 3),
(75, 0, '', 3, 'ddds', '', 11455, '', '', '8563200000', '1230989', 0, 0, NULL, 'active', '', '2021-02-04 06:58:04', 3),
(76, 0, '', 3, 'ssss', '', 416012, '', '', '7896540000', '123896', 0, 0, NULL, 'active', '', '2021-02-04 06:58:09', 3),
(77, 0, '', 3, 'asss', '', 416, '', '', '8965000000', '41256', 0, 0, NULL, 'active', '', '2021-01-29 12:20:19', 3),
(78, 0, '', 3, 'fgd', '', 416, '', '', '8563200001', '1236786', 0, 0, NULL, 'active', '', '2021-02-04 06:58:13', 3),
(79, 0, '', 3, 'ssss', '', 54646, '', '', '4563210000', '123456657', 0, 0, NULL, 'active', '', '2021-02-04 06:58:20', 3),
(80, 0, '', 3, 'tetert', '', 453, '', '', '8745454333', '66753456', 0, 0, NULL, 'active', '', '2021-02-04 06:58:23', 3),
(81, 0, '', 3, 'fdgddddddd', '', 4160, '', '', '8654123000', '6789098', 0, 0, NULL, 'active', '', '2021-02-04 06:58:31', 3),
(82, 0, '', 3, 'hfhg', '', 41, '', '', '8652365400', '12398986', 0, 0, NULL, 'active', '', '2021-02-04 06:58:37', 3),
(83, 0, '', 3, 'gfdh', '', 456, '', '', '8745600000', '1238967', 0, 0, NULL, 'active', '', '2021-02-04 06:58:41', 3),
(84, 0, '', 3, 'dsf', '', 456, '', '', '8965412000', '12398678', 0, 0, NULL, 'active', '', '2021-02-04 06:58:49', 3),
(85, 0, '', 3, 'dsaf', '', 456, '', '', '9685698000', '0012', 0, 0, NULL, 'active', '', '2021-01-29 12:43:59', 3),
(86, 0, '', 3, 'gdfgsd', '', 323, '', '', '1234686543', '32', 0, 0, NULL, 'active', '', '2021-01-29 12:47:02', 3),
(87, 0, '', 3, 'kjhgk', '', 456, '', '', '7896541236', '154', 0, 0, NULL, 'active', '', '2021-01-29 12:48:03', 3),
(88, 0, '', 3, 'gfhfg', '', 54534, '', '', '4563789654', '1238976', 0, 0, NULL, 'active', '', '2021-02-04 06:58:53', 3),
(89, 0, '', 3, 'dfs', '', 456, '', '', '8965412345', '12376754', 0, 0, NULL, 'active', '', '2021-02-04 06:58:57', 3),
(90, 0, '', 3, 'shweta P', '', 416012, '', '', '9527205327', '1234', 0, 0, NULL, 'active', '', '2021-01-29 13:01:35', 3),
(91, 0, '', 3, 'fsds', '', 456321, '', '', '9284355156', '1233423', 0, 0, NULL, 'active', '', '2021-02-04 06:59:03', 3),
(92, 0, '', 3, 'Sandip Chavan', '', 416012, '', '', '9898986565', '1234569', 0, 0, NULL, 'active', '', '2021-02-02 10:29:52', 3),
(93, 0, '', 3, 'Sachin Chavan', '', 416012, '', '', '9898988787', '789456', 0, 0, NULL, 'active', '', '2021-02-02 10:35:25', 3),
(94, 0, '', 3, 'Test', '', 416012, '', '', '9822114878', '987', 0, 0, NULL, 'active', '', '2021-02-03 05:11:10', 3),
(95, 0, '', 3, 'test', '', 123, '', '', '7894569874', '12345678', 0, 0, NULL, 'active', '', '2021-02-03 06:30:26', 3),
(96, 0, '', 3, 'test', '', 123654, '', '', '8888855555', '12345678', 0, 0, NULL, 'active', '', '2021-02-03 06:32:27', 3),
(99, 0, '', 3, 'test', '', 456321, '', '', '8965456545', '1233423 ', 0, 0, NULL, 'active', '', '2021-02-04 06:59:08', 3),
(108, 0, '', 3, 'gfsdja', '', 89754, '', '', '4563545555', '1234356767', 0, 0, NULL, 'active', '', '2021-02-04 06:59:13', 3),
(109, 0, '', 3, 'weedas', '', 123445, '', '', '1222223333', '2334456', 0, 0, NULL, 'active', '', '2021-02-03 07:40:03', 3),
(110, 0, '', 3, 'dfgsdg', '', 22334545, '', '', '1222335566', 'Priya@12', 0, 0, NULL, 'active', '', '2021-02-03 07:40:42', 3),
(111, 0, '', 3, 'rfewrfe', '', 456321, '', '', '8745965444', '1236546', 0, 0, NULL, 'active', '', '2021-02-04 06:59:18', 3),
(112, 0, '', 3, 'demotype', '', 1234, '', '', '1122334455', 'Priya@12', 0, 0, NULL, 'active', '', '2021-02-03 08:29:33', 3),
(113, 0, '', 3, 'sdfds', '', 1223, '', '', '8698569852', 'Priya@12', 0, 0, NULL, 'active', '', '2021-02-03 10:11:36', 3),
(114, 0, '', 3, 'textwecfh', '', 456321, '', '', '9898983232', '12345678', 0, 0, NULL, 'active', '', '2021-02-03 10:32:35', 3),
(115, 0, '', 3, 'fadsh', '', 98555556, '', '', '7896969696', '45d6dsfd', 0, 0, NULL, 'active', '', '2021-02-03 11:02:57', 3),
(116, 0, '', 3, 'fdtgfdg', '', 546546, '', '', '5644545545', '12365478', 0, 0, NULL, 'active', '', '2021-02-03 11:04:47', 3),
(117, 0, '', 3, 'fdsfds', '', 54545, '', '', '3323323232', 'Priya123', 0, 0, NULL, 'active', '', '2021-02-03 11:08:55', 3),
(118, 0, '', 3, 'sjdfhsa', '', 12344, '', '', '3232323232', 'Priya@123', 0, 0, NULL, 'active', '', '2021-02-03 11:09:44', 3),
(119, 0, '', 3, 'sdsaf', '', 12323, '', '', '7896578788', 'Priuya@1234', 0, 0, NULL, 'active', '', '2021-02-03 12:19:59', 3),
(120, 0, '', 3, 'xyz', '', 416012, '', '', '9822114879', 'Sp@99663', 0, 0, NULL, 'active', '', '2021-02-03 12:24:39', 3),
(121, 0, '', 3, 'yash', '', 416012, '', '', '7507877187', 'Sp@7507877187', 0, 0, NULL, 'active', '', '2021-02-04 06:17:39', 3),
(122, 0, '', 3, 'Tushar', '', 416012, '', '', '9696965454', 'Tushar@123456', 0, 0, NULL, 'active', '', '2021-02-04 10:07:58', 3),
(123, 0, '', 3, 'Rohini Patil', '', 416012, '', '', '8585855252', 'Rohini@1', 0, 0, NULL, 'active', '', '2021-02-08 06:48:08', 3),
(124, 0, '', 3, 'Mohini Rane', '', 416012, '', '', '7474744141', 'Mohini@123', 0, 0, NULL, 'active', '', '2021-02-08 12:46:50', 3),
(125, 0, '', 3, 'Ram', '', 416012, '', '', '4545454512', 'Ram@1234', 0, 0, NULL, 'active', '', '2021-02-08 12:54:24', 3),
(126, 0, '', 3, 'sssssssss', '', 333333, '', '', '6666666667', 'Aa@654321', 0, 0, NULL, 'active', '', '2021-02-08 13:06:59', 3),
(127, 0, '', 3, 'ddddd', '', 223333, '', '', '9999999977', 'Sa#1223344', 0, 0, NULL, 'active', '', '2021-02-08 13:10:36', 3),
(128, 0, '', 3, 'yhtyyujy', '', 655555, '', '', '3333333344', 'Ad@1234567', 0, 0, NULL, 'active', '', '2021-02-08 13:12:16', 3),
(129, 0, '', 3, 'dddddds', '', 333333, '', '', '5555555554', 'Asdf@1234', 0, 0, NULL, 'active', '', '2021-02-08 13:20:09', 3),
(157, 0, '', 3, 'fdsfdf', '', 344555, '', '', '8888888866', 'As#12234454', 0, 0, NULL, 'active', '', '2021-02-08 13:24:03', 3),
(158, 0, '', 3, 'gjhgjh', '', 416012, '', '', '6363632121', 'Lh@1234567', 0, 0, NULL, 'active', '', '2021-02-08 13:26:13', 3),
(159, 0, '', 3, 'dfdgf', '', 444444, '', '', '6565656363', 'Ki@12345667', 0, 0, NULL, 'active', '', '2021-02-08 13:31:20', 3),
(183, 0, '', 3, 'xdfss', '', 234565, '', '', '6969696969', 'Kj@12345', 0, 0, NULL, 'active', '', '2021-02-09 04:47:15', 3),
(184, 0, '', 3, 'dfdfdff', '', 222222, '', '', '6363636363', 'Lu#1234556', 0, 0, NULL, 'active', '', '2021-02-09 04:48:53', 3),
(185, 0, '', 3, 'SHWETA', '', 123456, '', '', '7057088404', 'Sp@7057088404', 0, 0, NULL, 'active', '', '2021-02-09 04:55:09', 3),
(186, 0, '', 3, 'ffffff', '', 233333, '', '', '5666666666', 'tyA@1233444545', 0, 0, NULL, 'active', '', '2021-02-09 06:23:43', 3),
(187, 0, '', 3, 'ereeeeee', '', 444444, '', '', '5555555555', 'As@123456778', 0, 0, NULL, 'active', '', '2021-02-09 06:30:17', 3),
(188, 0, '', 3, 'hyyyygjghj', '', 677777, '', '', '4555555555', 'Sw@133456777', 0, 0, NULL, 'active', '', '2021-02-09 06:33:14', 3),
(189, 0, '', 3, 'wwwwwwwww', '', 333333, '', '', '4444443333', 'Sa@121243567', 0, 0, NULL, 'active', '', '2021-02-09 06:36:09', 3),
(190, 0, '', 3, 'rrrrreeeee', '', 444444, '', '', '5555555444', 'Ds$1234567', 0, 0, NULL, 'active', '', '2021-02-09 06:37:22', 3),
(191, 0, '', 3, 'tttt', '', 888888, '', '', '7777777778', 'tttttttttttS@2334567', 0, 0, NULL, 'active', '', '2021-02-09 06:41:29', 3),
(192, 0, '', 3, 'Yashvardhan Powar', '', 416012, '', '', '4141414141', 'Yash@1234', 0, 0, NULL, 'active', '', '2021-02-10 05:33:18', 3),
(193, 0, '', 3, 'Yash Mathur', '', 454545, '', '', '4545455656', 'Yash2123456', 0, 0, NULL, 'active', '', '2021-02-10 10:48:39', 3),
(194, 0, '', 3, 'Megha', '', 416012, '', '', '7533577533', 'Jik@12345678', 0, 0, NULL, 'active', '', '2021-02-10 10:50:37', 3),
(195, 0, '', 3, 'sssss', '', 455566, '', '', '8686868686', 'Ass@12334545', 0, 0, NULL, 'active', '', '2021-02-10 10:54:23', 3),
(196, 0, '', 3, 'fffff', '', 234255, '', '', '6677778888', 'Jesss@123456', 0, 0, NULL, 'active', '', '2021-02-10 10:57:26', 3),
(197, 0, '', 3, 'jjjjj', '', 666666, '', '', '2345678765', 'Khghg@12345', 0, 0, NULL, 'active', '', '2021-02-10 11:13:07', 3),
(198, 0, '', 3, 'ghhhhghg', '', 455666, '', '', '3454567788', 'Kjjhh@1234566', 0, 0, NULL, 'active', '', '2021-02-10 11:14:37', 3),
(203, 0, '', 3, 'hhjjh', '', 344545, '', '', '3345456687', 'Sdf@1223454', 0, 0, NULL, 'active', '', '2021-02-10 11:32:37', 3),
(204, 0, '', 3, 'GHDS', '', 435535, '', '', '3456543421', 'Sddd@12345566', 0, 0, NULL, 'active', '', '2021-02-10 11:35:39', 3),
(205, 0, '', 3, 'gfh', '', 0, '', '', '', '', 0, 0, NULL, 'active', '', '2021-02-10 11:42:21', 3),
(206, 0, '', 3, 'rrttr', '', 545355, '', '', '4334566777', 'Sddd@123456777', 0, 0, NULL, 'active', '', '2021-02-10 11:42:57', 3),
(207, 0, '', 3, 'sfdaf', '', 433444, '', '', '3544566767', 'Sdd3#45545456', 0, 0, NULL, 'active', '', '2021-02-10 11:49:59', 3),
(208, 0, '', 3, 'hgdh', '', 555555, '', '', '5433344545', 'Kj@12345455', 0, 0, NULL, 'active', '', '2021-02-10 11:56:20', 3),
(209, 0, '', 3, 'rerrt', '', 455655, '', '', '6775556555', 'Lk@123454556', 0, 0, NULL, 'active', '', '2021-02-10 12:20:19', 3),
(210, 0, '', 3, 'jhhjsdhgsd', '', 567665, '', '', '5678987654', 'Ki@1122334556', 0, 0, NULL, 'active', '', '2021-02-10 12:24:11', 3),
(211, 0, '', 3, 'yyyy', '', 556565, '', '', '6555545543', 'S@a34556677', 0, 0, NULL, 'active', '', '2021-02-10 12:25:35', 3),
(212, 0, '', 3, 'fds', '', 554555, '', '', '5656434423', 'Lk@123344555', 0, 0, NULL, 'active', '', '2021-02-10 12:31:16', 3),
(213, 0, '', 3, 'dfsg', '', 435655, '', '', '3457786554', 'Lj@1234545555', 0, 0, NULL, 'active', '', '2021-02-10 12:33:33', 3),
(214, 0, '', 3, 'ghsdaf', '', 666666, '', '', '3454637462', 'Kghds@4235', 0, 0, NULL, 'active', '', '2021-02-10 13:33:43', 3),
(215, 0, '', 3, 'cvx', '', 435235, '', '', '5463456446', 'Kdshafsg', 0, 0, NULL, 'active', '', '2021-02-10 13:37:24', 3),
(216, 0, '', 3, 'dfs', '', 546346, '', '', '2345787654', 'dcfS@565', 0, 0, NULL, 'active', '', '2021-02-10 13:38:32', 3),
(217, 1, '', 2, 'rohan wordpress', 'kolhapur', 0, 'kolhapur', 'manisha@gmail.com', '4142453521', 'Ks@123445', 0, 0, NULL, 'active', '1', '2021-02-11 06:44:37', 1),
(220, 1, '', 2, 'Rohan Velhal', 'Shahupuri, Kolhapur', 416012, 'Kolhapur', 'rohan@gmail.com', '8484888489', 'Ki@1234556', 800, 80, NULL, 'active', '1', '2021-03-05 13:23:55', 1),
(222, 0, '', 3, 'sadfs', '', 444444, '', '', '6655534444', 'Ss@12344556', 0, 0, NULL, 'active', '', '2021-02-11 08:23:55', 3),
(223, 0, '', 3, 'dfgdf', '', 555565, '', '', '6454434545', 'Ki@445623547', 0, 0, NULL, 'active', '', '2021-02-11 08:40:52', 3),
(224, 0, '', 3, 'Komal Kadam', '', 416012, '', '', '9876789877', 'Ko@123454566', 0, 0, NULL, 'active', '', '2021-02-11 10:39:56', 3),
(225, 0, '', 3, 'Kiran Mane', '', 416012, '', '', '9874587458', 'Li@123354', 0, 0, NULL, 'active', '', '2021-02-11 10:46:04', 3),
(226, 0, '', 3, 'Swapnil Joshi', '', 416012, '', '', '7276034878', 'Sj@1234', 0, 0, NULL, 'active', '', '2021-02-12 05:22:46', 3),
(227, 0, '', 3, 'Prathamesh Joshi', '', 416012, '', '', '7798025835', 'Pratham@1', 0, 0, NULL, 'active', '', '2021-02-12 06:03:51', 3),
(228, 0, '', 3, 'fgy', '', 654323, '', '', '8765342345', 'Li7786@', 0, 0, NULL, 'active', '', '2021-02-12 06:10:39', 3),
(229, 0, '', 3, 'ghjgk', '', 674564, '', '', '8907867656', '99999999', 0, 0, NULL, 'active', '', '2021-02-12 06:12:19', 3),
(230, 0, '', 3, 'ghhsafk', '', 345543, '', '', '3455433455', 'ki8765434', 0, 0, NULL, 'active', '', '2021-02-12 06:17:17', 3),
(231, 0, '', 3, 'drt', '', 444444, '', '', '3445565444', 'Ki678', 0, 0, NULL, 'active', '', '2021-02-12 06:30:15', 3),
(232, 0, '', 3, 'dffgsd', '', 544356, '', '', '4344344444', 'fgdf45654', 0, 0, NULL, 'active', '', '2021-02-12 06:32:37', 3),
(233, 0, '', 3, 'rtt', '', 456443, '', '', '5464656575', '12', 0, 0, NULL, 'active', '', '2021-02-12 06:33:08', 3),
(234, 0, '', 3, 'sghf', '', 766767, '', '', '9878765667', 'g8765', 0, 0, NULL, 'active', '', '2021-02-12 06:37:14', 3),
(235, 0, '', 3, 'fdgfsd', '', 355655, '', '', '5554544544', 'fgfgA@12233', 0, 0, NULL, 'active', '', '2021-02-12 07:15:32', 3),
(236, 0, '', 3, 'Yash Kulkarni', '', 416013, '', '', '7276094878', '123456', 0, 0, NULL, 'active', '', '2021-02-12 09:53:50', 3),
(237, 0, '', 3, 'kaustubh', '', 416013, '', '', '7276054878', '123456', 0, 0, NULL, 'active', '', '2021-02-12 10:13:02', 3),
(238, 0, '', 3, '+@@@@', '', 416016, '', '', '7276064878', '12345678', 0, 0, NULL, 'active', '', '2021-02-12 13:36:35', 3),
(239, 0, '', 3, '%%^^^', '', 416012, '', '', '7276074878', '12345678', 0, 0, NULL, 'active', '', '2021-02-12 13:40:44', 3),
(240, 0, '', 3, 'abc', '', 416012, '', '', '8585856565', 'Pa@12345', 0, 0, NULL, 'active', '', '2021-02-14 09:20:19', 3),
(241, 0, '', 3, 'aa', '', 416012, '', '', '4444444444', 'aaaaaaaa', 0, 0, NULL, 'active', '', '2021-02-14 10:48:55', 3),
(242, 0, '', 3, 'Aditya', '', 416018, '', '', '7507877188', 'Sp@12345', 0, 0, NULL, 'active', '', '2021-02-15 05:15:03', 3),
(243, 1, '', 2, 'shweta E', 'Padmini apartment,sHAHUPUIRI', 416018, 'KOLHAPUR', 'sve@gmail.com', '9822114889', 'Sp@12345', 0, 0, NULL, 'active', '1', '2021-02-15 05:52:19', 1),
(244, 0, '', 3, 'aaa', '', 422333, '', '', '8765433222', 'Ki@hsdjsj444', 0, 0, NULL, 'active', '', '2021-02-16 05:08:04', 3),
(245, 0, '', 3, 'fff', '', 417667, '', '', '9867645556', 'sssA@122', 0, 0, NULL, 'active', '', '2021-02-16 10:02:49', 3),
(246, 0, '', 3, 'Gayatri', '', 416012, '', '', '9822114880', 'Sp@12345', 0, 0, NULL, 'active', '', '2021-02-16 12:12:52', 3),
(247, 0, '', 3, 'Druv Shinde', '', 416012, '', '', '8484888987', 'Ki@1234556', 0, 0, NULL, 'active', '', '2021-02-17 12:43:34', 3),
(248, 0, '', 3, 'sdfsd', '', 343442, '', '', '2344342343', 'gdf34324534', 0, 0, NULL, 'active', '', '2021-02-17 12:56:33', 3),
(249, 0, '', 3, 'gsdgsd', '', 676767, '', '', '5675345455', 'Kiggg@1234545', 0, 0, NULL, 'active', '', '2021-02-17 13:07:44', 3),
(250, 0, '', 3, 'hsgak', '', 356565, '', '', '7346127834', 'jh325613143', 0, 0, NULL, 'active', '', '2021-02-17 13:15:31', 3),
(251, 0, '', 3, 'xyz', '', 416012, '', '', '9822114899', 'xyz@1234', 0, 0, NULL, 'active', '', '2021-02-18 10:15:58', 3),
(252, 0, '', 3, 'hsdakjfhasdjkl', '', 343245, '', '', '9867543545', 'P@asdf1234', 0, 0, NULL, 'active', '', '2021-02-19 07:42:59', 3),
(253, 0, '', 3, 'ssd', '', 545454, '', '', '5464564666', 'gghgh343443', 0, 0, NULL, 'active', '', '2021-02-19 07:52:33', 3),
(254, 0, '', 3, 'sdfds', '', 343423, '', '', '3243423423', 'fgffg23423', 0, 0, NULL, 'active', '', '2021-02-19 08:12:13', 3),
(255, 0, '', 3, 'Manisha Kulkarni', '', 416012, '', '', '7798025825', 'Manisha@123', 0, 0, NULL, 'active', '', '2021-02-19 09:49:20', 3),
(256, 0, '', 3, 'Ramesh Kore', '', 416012, '', '', '8421751396', 'Ramesh@123', 0, 0, NULL, 'active', '', '2021-02-20 11:22:54', 3),
(257, 0, '', 3, 'asdsdsd', '', 344324, '', '', '3423423434', 'fdgfd34534', 0, 0, NULL, 'active', '', '2021-02-20 13:38:04', 3),
(258, 0, '', 3, 'abc', '', 416012, '', '', '7412587412', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-02-21 07:05:22', 3),
(259, 0, '', 3, 'Neha Rane', '', 416015, '', '', '8698066910', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-02-22 07:22:59', 3),
(260, 0, '', 3, 'fgsdg', '', 567567, '', '', '8698066930', 'gfgfd43534534', 0, 0, NULL, 'active', '', '2021-02-22 05:38:49', 3),
(261, 0, '', 3, 'Prakash Ilage', '', 416012, '', '', '8698066970', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-02-22 08:31:59', 3),
(262, 0, '', 3, 'Raju Patel', '', 416012, '', '', '8698066945', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-02-26 11:30:29', 3),
(263, 0, '', 3, 'Ramesh Jadhav', '', 416012, '', '', '8698066946', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-02-26 11:52:57', 3),
(264, 0, '', 3, 'Rishikesh Patil', '', 416012, '', '', '8698066975', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-02-28 05:54:23', 3),
(265, 0, '', 3, 'Ram Jadhav', '', 416012, '', '', '8698066955', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-02-28 13:48:11', 3),
(266, 0, '', 3, 'Omkar Vhatkar', '', 416012, '', '', '8698066923', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-03 05:47:31', 3),
(267, 0, '', 3, 'abccfasd', '', 416012, '', '', '8745698745', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-04 06:01:12', 3),
(273, 0, '', 3, 'aaaa', '', 416012, '', '', '8698066333', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-04 13:25:19', 3),
(274, 0, '', 3, 'asdgas', '', 416012, '', 'manish@gmail.com', '8698066999', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 05:35:15', 3),
(275, 0, '', 3, 'xdfdf', '', 416012, '', 'manish@gmail.com', '8745987458', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 05:38:09', 3),
(279, 0, '', 3, 'sssss', '', 416012, '', 'manish@gmail.com', '8968569856', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 05:51:44', 3),
(280, 0, '', 3, 'vbggvg', '', 416012, '', 'kiran@gmail.com', '8698066941', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 05:58:53', 3),
(281, 0, '', 3, 'dddd', '', 416012, '', 'manish1@gmail.com', '8698066942', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 06:38:50', 3),
(282, 0, '', 3, 'dfds', '', 416012, '', 'manish12@gmail.com', '8698066943', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 07:29:21', 3),
(283, 0, '', 3, 'asda', '', 416012, '', 'mmmm@ff', '4343545666', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 07:31:51', 3),
(284, 0, '', 3, 'gdf', '', 416012, '', 'manish123@gmail.com', '4343545668', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 08:24:00', 3),
(285, 0, '', 3, 'dd', '', 416012, '', 'dd@gmail.com', '7458965896', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 09:53:42', 3),
(286, 0, '', 3, 'fgddf', '', 416012, '', 'fddf@gmic.vvv', '8965741236', 'Ki@123454', 0, 0, NULL, 'active', '', '2021-03-05 09:56:41', 3),
(287, 0, '', 3, 'assss', '', 416012, '', 'mm@gmail.com', '7854858585', 'a7835b18322aa0184a262c91d6fc0ec8', 0, 0, NULL, 'active', '', '2021-03-05 10:04:08', 3),
(288, 0, '', 3, 'assss', '', 416012, '', 'mmmm@gmail.com', '7412563241', 'a7835b18322aa0184a262c91d6fc0ec8', 0, 0, NULL, 'active', '', '2021-03-05 10:04:31', 3),
(289, 0, '', 3, 'assss', '', 416012, '', 'mmmmmm@gmail.com', '7412563242', 'a7835b18322aa0184a262c91d6fc0ec8', 0, 0, NULL, 'active', '', '2021-03-05 10:05:11', 3),
(290, 0, '', 3, 'dcsd', '', 416012, '', 'ggg@dfd.df', '8698066998', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 10:06:34', 3),
(291, 0, '', 3, 'dfgd', '', 416012, '', 'kkk@kkk.kk', '7412589632', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 10:08:41', 3),
(292, 0, '', 3, 'dfgd', '', 416012, '', 'kkk@kkk.kkk', '7412589633', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 10:10:40', 3),
(293, 0, '', 3, 'gfg', '', 416012, '', 'kkk@gmail.com', '9856985698', '709c279cc00678917f1184ae56b7ece6', 0, 0, NULL, 'active', '', '2021-03-05 10:43:17', 3),
(294, 0, '', 3, 'dfsd', '', 416012, '', 'aaaa@12h.com', '7415896589', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 10:45:00', 3),
(295, 0, '', 3, 'asdfg', '', 416012, '', 'asss@gmail.com', '7458321636', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 10:46:04', 3),
(296, 0, '', 3, 'rohini', '', 416012, '', 'roh@gmail.com', '9284355159', 'Ki@123456', 0, 0, NULL, 'active', '', '2021-03-05 11:04:48', 3),
(297, 0, '', 3, 'dfsgsdfg', '', 416012, '', 'aass@gmail.com', '8698562398', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 11:14:35', 3),
(298, 0, '', 3, 'dfsgsdfg', '', 416012, '', 'aasss@gmail.com', '8698562399', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 11:16:25', 3),
(299, 0, '', 3, 'dfsgsdfg', '', 416012, '', 'aasssd@gmail.com', '8698562394', '571237b24eb535090251fa7bf3ecfd41', 0, 0, NULL, 'active', '', '2021-03-05 11:18:50', 3),
(300, 0, '', 3, 'dfsgsdfg', '', 416012, '', 'aasssdggg@gmail.com', '8698562392', 'Ki@12345', 0, 0, NULL, 'active', '', '2021-03-05 11:21:09', 3),
(301, 0, '', 3, 'asdhf', '', 416016, '', 'qwe@gmail.com', '8698055632', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 11:23:12', 3),
(302, 0, '', 3, 'asdhf', '', 416016, '', 'qwee@gmail.com', '8698055631', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 11:28:33', 3),
(303, 0, '', 3, 'asdhf', '', 416016, '', 'qweee@gmail.com', '8698055610', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 11:31:23', 3),
(304, 0, '', 3, 'asdhf', '', 416016, '', 'qweeee@gmail.com', '8698055611', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 11:32:00', 3),
(305, 0, '', 3, 'abcd', '', 416012, '', 'abcd@1gmail.com', '8698066123', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 11:34:58', 3),
(306, 0, '', 3, 'Manisha Rane', '', 416012, '', 'manisha1@gmail.com', '7798025888', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-05 12:29:49', 3),
(307, 0, '', 3, 'Chinmayi Patil', '', 416012, '', 'chinu@gmail.com', '7798025899', 'be6148685373df5bcc6f0baffda23be3', 2300, 330, NULL, 'active', '', '2021-03-06 05:17:55', 3),
(310, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025877', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-06 08:00:01', 3),
(315, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025878', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:04:46', 3),
(317, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025879', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:05:12', 3),
(319, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025855', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:12:08', 3),
(323, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025866', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:16:24', 3),
(325, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025867', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:17:09', 3),
(326, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025868', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:17:21', 3),
(327, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025869', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:17:53', 3),
(328, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025861', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:19:49', 3),
(329, 0, '', 3, 'Prathamesh Shinde', '', 416012, '', 'pratham1@gmail.com', '7798025862', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:21:07', 3),
(331, 0, '', 3, 'Parth Shinde', '', 416012, '', 'parth@gmail.com', '8698066956', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:34:33', 3),
(332, 0, '', 3, 'Ramesh Rane', '', 416012, '', 'ramesh1@gmail.com', '8698066954', '121afe6c927d03e219e7e790677ea625', 0, 0, NULL, 'active', '', '2021-03-06 08:39:02', 3),
(333, 0, '', 3, 'Ramesh Shinde', '', 416012, '', 'rameshs@gmail.com', '8421751623', 'be6148685373df5bcc6f0baffda23be3', 100, 15, NULL, 'active', '', '2021-03-06 11:04:31', 3),
(334, 0, '', 3, 'Pratham Chavan', '', 416012, '', 'pratham@gmail.com', '8698066925', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-08 06:59:14', 3),
(335, 0, '', 3, 'Vedu Patil', '', 416012, '', 'manish1233@gmail.com', '8698055940', '96ca1a1962182255e3b5b08dddaa0ed6', 0, 0, NULL, 'active', '', '2021-03-15 04:57:16', 3),
(336, 0, '', 3, 'dfsd', '', 416012, '', 'manish11111@gmail.com', '8698044650', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-15 05:21:47', 3),
(337, 0, '', 3, 'asdf', '', 416012, '', 'asdf@gmail.com', '8698066560', '7d532c0ff2fda8f2cd91993db0202332', 0, 0, NULL, 'active', '', '2021-03-15 05:23:42', 3),
(338, 0, '', 3, 'Assdf', '', 416012, '', 'asdf1@gmail.com', '8698064155', '74b1598b5c826f66c19011c320443e70', 0, 0, NULL, 'active', '', '2021-03-15 05:32:17', 3),
(339, 0, '', 3, 'asdf lkjh', '', 416012, '', 'asdf123@gmail.com', '9284355651', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-15 09:59:32', 3),
(340, 0, '', 3, 'asdf', '', 416012, '', 'aasdf@gmail.com', '9284355151', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-15 12:24:37', 3),
(341, 1, '', 2, 'Nagraj Chavan', '', 416012, '', 'Nagraj@gmail.com', '8698009595', 'Ki@123456', 0, 0, NULL, 'active', '1', '2021-03-16 11:43:10', 1),
(342, 1, '', 2, 'Narayan Shinde', '', 416012, '', 'narayan@gmail.com', '9603917088', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '1', '2021-03-17 07:29:56', 1),
(343, 1, '', 2, 'Purva Chavan', '', 416012, '', 'purva@gmail.com', '9603917089', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '342', '2021-03-17 07:36:07', 1),
(344, 1, '', 2, 'Karuna Patil', '', 416012, '', 'karuna@gmail.com', '9603917087', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '1', '2021-03-17 07:49:18', 1),
(345, 0, '', 3, 'Kartik Powar', '', 416012, '', 'kartik@gmail.com', '9603917086', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-17 07:52:06', 3),
(346, 0, '', 3, 'Manish Kore', '', 416012, '', 'manishk@gmail.com', '9603917085', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-17 07:55:38', 3),
(347, 0, '', 2, 'Prasad Patil', '', 416012, '', 'prasad@gamil.com', '9603917084', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '346', '2021-03-17 08:00:32', 1),
(348, 0, '', 3, 'Mayuri Patil', '', 416012, '', 'mayuri@gmail.com', '9603917083', 'be6148685373df5bcc6f0baffda23be3', 0, 0, NULL, 'active', '', '2021-03-17 08:03:37', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile_master`
--

CREATE TABLE `userprofile_master` (
  `userprofileid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_submitted` int(1) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_pincode` varchar(10) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `parentname` varchar(256) NOT NULL,
  `birthdate` date NOT NULL,
  `emailid` varchar(256) NOT NULL,
  `standard` int(11) NOT NULL,
  `schoolcollegename` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `alternatemobno` varchar(12) NOT NULL,
  `gender` int(11) NOT NULL,
  `cityid` varchar(256) NOT NULL,
  `districtid` varchar(256) NOT NULL,
  `stateid` int(11) NOT NULL,
  `profile_image` varchar(256) NOT NULL,
  `check_one` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile_master`
--

INSERT INTO `userprofile_master` (`userprofileid`, `user_id`, `profile_submitted`, `user_name`, `user_pincode`, `user_mobile`, `user_password`, `user_email`, `parentname`, `birthdate`, `emailid`, `standard`, `schoolcollegename`, `address`, `pincode`, `fullname`, `alternatemobno`, `gender`, `cityid`, `districtid`, `stateid`, `profile_image`, `check_one`, `created_date`) VALUES
(2, 220, 1, 'Rohan Velhal', '416012', '8484888489', 'Ki@1234556', '', 'Mohan', '1999-07-07', 'demo@gmail.com', 15, 'SM Lohiya', 'Kolhapur', '416012', 'Rohan Velhal', '8745965412', 2, 'Kolhapur', 'Kolhapur', 22, 'profile_image_220_1613565686.png', 0, '2021-03-16 00:47:54'),
(4, 222, 1, 'sadfs', '444444', '6655534444', 'Ss@12344556', '', 'sghdad', '2010-02-02', 'dsaf@gmail.com', 4, 'gkg', 'ghfhdf, kolhapur', '444444', 'sadfs', '7896541236', 1, '1', '1', 22, '', 0, '2021-02-11 08:23:55'),
(5, 223, 1, 'dfgdf', '555565', '6454434545', 'Ki@445623547', '', 'sdfg', '2017-05-30', 'manish@gmail.com', 5, 'kkk', 'kkk', '555565', 'dfgdf', '4343545666', 1, '1', '1', 22, 'profile_image_223_1613036680.jpg', 0, '2021-02-11 08:40:52'),
(6, 224, 0, 'Komal Kadam', '416012', '9876789877', 'Ko@123454566', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-11 10:39:57'),
(7, 225, 1, 'Kiran Mane', '416012', '9874587458', 'Li@123354', '', 'Ramesh Mane', '2013-02-05', 'kiran@gmail.com', 8, 'English Model School,kolhapur', 'kkk', '410012', 'Kiran Mane', '7854785478', 1, '1', '1', 22, 'profile_image_225_1613040466.jpg', 0, '2021-02-11 10:46:04'),
(8, 226, 1, 'Swapnil Joshi', '416012', '7276034878', 'Sj@1234', '', 'Manish Joshi', '2008-06-17', 'Manish@gmail.com', 5, 'S.M. Lohiya School ,Kolhapur', 'Kolhapur', '416012', 'Swapnil Joshi', '9874587458', 1, '1', '1', 22, 'profile_image_226_1613109176.jpg', 0, '2021-02-12 05:22:46'),
(9, 227, 0, 'Prathamesh Joshi', '416012', '7798025835', 'Pratham@1', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:03:51'),
(10, 228, 0, 'fgy', '654323', '8765342345', 'Li7786@', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:10:39'),
(11, 229, 0, 'ghjgk', '674564', '8907867656', '99999999', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:12:19'),
(12, 230, 0, 'ghhsafk', '345543', '3455433455', 'ki8765434', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:17:17'),
(13, 231, 0, 'drt', '444444', '3445565444', 'Ki678', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:30:15'),
(14, 232, 0, 'dffgsd', '544356', '4344344444', 'fgdf45654', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:32:37'),
(15, 233, 0, 'rtt', '456443', '5464656575', '12', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:33:08'),
(16, 234, 0, 'sghf', '766767', '9878765667', 'g8765', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 06:37:14'),
(17, 235, 0, 'fdgfsd', '355655', '5554544544', 'fgfgA@12233', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 07:15:32'),
(18, 236, 1, 'Yash Kulkarni', '416013', '7276094878', '123456', '', 'Vilas', '2014-01-24', 'yash@gmail.com', 13, 'PPGH', 'xyz road', '416013', 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, '', 0, '2021-02-12 09:53:50'),
(19, 237, 0, 'kaustubh', '416013', '7276054878', '123456', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 10:13:02'),
(20, 238, 0, '+@@@@', '416016', '7276064878', '12345678', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 13:36:35'),
(21, 239, 0, '%%^^^', '416012', '7276074878', '12345678', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-12 13:40:44'),
(22, 240, 1, 'abc', '416012', '8585856565', 'Pa@12345', '', 'bca', '2018-02-14', 'abc@gmail.com', 6, 'pg', 'Kolhapur', '416012', 'abc', '9874563211', 1, '1', '1', 22, '', 0, '2021-02-14 09:20:19'),
(23, 241, 1, 'aa', '416012', '4444444444', 'aaaaaaaa', '', 'bbbb', '2021-02-11', 'aaa@gmail.com', 5, 'hhh', 'kkk', '416012', 'aabbb', '9874562144', 1, '1', '1', 22, 'profile_image_241_1613305157.jpg', 0, '2021-02-14 09:28:39'),
(24, 242, 1, 'Aditya', '416018', '7507877188', 'Sp@12345', '', 'yash', '2006-01-16', 'sve@gmail.com', 14, 'SM', 'Yash plaza', '416018', 'Aditya', '9822114878', 2, '1', '1', 22, 'profile_image_242_1613367223.png', 0, '2021-02-15 05:15:03'),
(25, 243, 1, 'shweta E', '416018', '9822114889', 'Sp@12345', '', 'Vilas', '2021-02-15', 'Yash@gmail.com', 3, 'Kolhapur Highschool Kolhapur', 'Rajarampuri', '416018', 'shweta E', '9822114888', 1, '1', '1', 22, '', 0, '2021-02-15 00:27:31'),
(26, 244, 0, 'aaa', '422333', '8765433222', 'Ki@hsdjsj444', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', 0, '2021-02-16 05:08:04'),
(27, 245, 1, 'fff', '417667', '9867645556', 'sssA@122', '', 'dfdf', '2021-02-02', 'manish@gmail.com', 3, 'fff', 'kkk', '', 'fff', '8698066956', 1, 'kolhapur', 'Kolhapur', 22, 'profile_image_245_1613470431.png', 0, '2021-02-16 10:02:49'),
(28, 246, 1, 'Gayatri', '416012', '9822114880', 'Sp@12345', '', 'ddd', '2021-01-01', '', 0, '', '', '416012', 'Gayatri', '9822114884', 0, '', '', 0, '', 0, '2021-02-16 12:12:53'),
(29, 247, 1, 'Druv Shinde', '416012', '8484888987', 'Ki@1234556', '', 'Vasant', '2017-12-12', 'kiran@gmail.com', 1, 'nursary', 'Kolhapur', '', 'Druv Shinde', '8975645246', 1, 'kolhapur', 'Kolhapur', 22, 'profile_image_247_1613565978.jpg', 0, '2021-02-17 12:43:34'),
(30, 248, 1, 'sdfsd', '343442', '2344342343', 'gdf34324534', '', 'dfgd', '2018-01-31', 'manish@gmail.com', 1, 'dffd', 'kkk', '', 'sdfsd', '2344342343', 2, 'kolhapur', 'cvxc', 2, '', 0, '2021-02-17 12:56:33'),
(31, 249, 1, 'gsdgsd', '676767', '5675345455', 'Kiggg@1234545', '', 'hjkl', '2018-02-06', 'manish@gmail.com', 3, 'dfsd', 'kolhapur', '', 'gsdgsd', '4563245554', 2, 'kolhapur', 'Kolhapur', 22, '', 0, '2021-02-17 13:07:44'),
(32, 250, 0, 'hsgak', '356565', '7346127834', 'jh325613143', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-02-17 13:15:31'),
(33, 251, 1, 'xyz', '416012', '9822114899', 'xyz@1234', '', 'vilas', '2018-02-18', 'xyz@gmail.com', 1, 'ppgh', 'yash plaza', '', 'xyz', '9822114889', 1, '123', 'kolhapur12333', 22, '', 0, '2021-02-18 10:15:58'),
(34, 252, 1, 'hsdakjfhasdjkl', '343245', '9867543545', 'P@asdf1234', '', 'dsf', '2018-02-07', 'manish@gmail.com', 12, 'xdsdff', 'kkk', '', 'hsdakjfhasdjkl', '7856411232', 2, 'kolhapur', 'kolhapur', 18, '', 0, '2021-02-19 07:42:59'),
(35, 253, 1, 'ssd', '545454', '5464564666', 'gghgh343443', '', 'df', '2018-02-07', 'manish@gmail.com', 2, 'fgdf', 'kkk', '', 'ssd', '7898654411', 1, 'kolhapur', 'kolhapur', 22, '', 0, '2021-02-19 07:52:33'),
(36, 254, 1, 'sdfds', '343423', '3243423423', 'fgffg23423', '', 'fdf', '2018-02-09', 'manish@gmail.com', 11, 'sdgsd', 'kkk', '', 'sdfds', '7896541233', 1, 'kolhapur', 'kolhapur', 15, '', 0, '2021-02-19 08:12:13'),
(37, 255, 1, 'Manisha Kulkarni', '416012', '7798025825', 'Manisha@123', '', 'Kiran Kulkarni', '2015-07-09', 'manish@gmail.com', 7, 'ppg', 'Kolhapur', '', 'Manisha Kulkarni', '9874563210', 2, 'kolhapur', 'kolhapur', 22, 'profile_image_255_1613728321.png', 0, '2021-02-19 09:49:20'),
(38, 256, 1, 'Ramesh Kore', '416012', '8421751396', 'Ramesh@123', '', 'Sandip Kore', '2014-07-09', 'manish@gmail.com', 6, 'Maharashtra Highschool', 'Kolhapur', '', 'Ramesh Kore', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_256_1613820293.png', 0, '2021-02-20 11:22:54'),
(39, 257, 0, 'asdsdsd', '344324', '3423423434', 'fdgfd34534', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-02-20 13:38:04'),
(40, 258, 1, 'abc', '416012', '7412587412', 'Ki@12345', '', 'aa', '2013-06-12', 'aaa@gmail.com', 6, 'sm', 'Kolhapur', '', 'abc', '9874563210', 1, 'Kolhapur', 'Kolhapur', 22, 'profile_image_258_1613891266.jpg', 0, '2021-02-21 07:05:23'),
(41, 259, 1, 'asdf', '416015', '8698066910', 'Ki@123456', '', 'Manish', '2001-06-04', 'manish@gmail.com', 14, 'ppg', 'Kolhapur', '', 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 'profile_image_259_1613978579.png', 0, '2021-02-22 04:58:06'),
(42, 260, 0, 'fgsdg', '567567', '8698066930', 'gfgfd43534534', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-02-22 05:38:50'),
(43, 261, 1, 'Prakash Ilage', '416012', '8698066970', 'Ki@12345', '', 'Tukaram', '2017-06-13', 'manish@gmail.com', 1, 'sm', 'Kolhapur', '', 'Prakash Ilage', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_261_1613982851.png', 0, '2021-02-22 08:31:59'),
(44, 262, 1, 'Raju Patel', '416012', '8698066945', 'Ki@12345', '', 'Manish', '2016-02-17', 'manish@gmail.com', 6, 'SM', 'kolhapur', '', 'Raju Patel', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_262_1614339172.png', 0, '2021-02-26 11:30:29'),
(45, 263, 1, 'Ramesh Jadhav', '416012', '8698066946', 'Ki@12345', '', 'Umesh', '2016-06-15', 'manish@gmail.com', 6, 'SM', 'Kolhapur', '', 'Ramesh Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_263_1614340427.png', 0, '2021-02-26 11:52:58'),
(46, 264, 1, 'Rishikesh', '416012', '8698066975', 'Ki@123456', '', 'Ramesh Patil', '2015-03-13', 'ramesh@gmail.com', 6, 'SM', 'kolhapur', '', 'Rishikesh Patil', '9874569874', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_264_1614491663.PNG', 0, '2021-02-28 05:39:17'),
(47, 265, 1, 'Ram Jadhav', '416012', '8698066955', 'Ki@12345', '', 'Ramakant', '2015-07-16', 'ram@gmail.com', 7, 'Sm', 'Kolhapur', '', 'Ram Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_265_1614520183.PNG', 0, '2021-02-28 13:48:11'),
(48, 266, 1, 'Omkar Vhatkar', '416012', '8698066923', 'Ki@12345', '', 'Karan', '2000-06-09', 'manish@gmail.com', 13, 'sm', 'Kolhapur', '', 'Omkar Vhatkar', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_266_1614750583.PNG', 0, '2021-03-03 05:47:32'),
(49, 267, 1, 'abccfasd', '416012', '8745698745', 'Ki@12345', '', 'edasd', '2015-02-06', 'manish@gmail.com', 10, 'sm', 'kkk', '', 'abccfasd', '4343545666', 1, 'kolhapur', 'kolhapur', 22, '', 0, '2021-03-04 06:01:12'),
(55, 273, 0, 'aaaa', '416012', '8698066333', 'Ki@12345', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-04 13:25:19'),
(56, 275, 0, 'xdfdf', '416012', '8745987458', 'Ki@123456', 'manish@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 05:38:09'),
(57, 279, 0, 'sssss', '416012', '8968569856', 'Ki@123456', 'manish@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 05:51:44'),
(58, 280, 0, 'vbggvg', '416012', '8698066941', 'Ki@12345', 'kiran@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 05:58:53'),
(59, 281, 0, 'dddd', '416012', '8698066942', 'Ki@123456', 'manish1@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 06:38:50'),
(60, 282, 0, 'dfds', '416012', '8698066943', 'Ki@12345', 'manish12@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 07:29:21'),
(61, 283, 0, 'asda', '416012', '4343545666', 'Ki@12345', 'mmmm@ff', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 07:31:51'),
(62, 284, 0, 'gdf', '416012', '4343545668', 'Ki@12345', 'manish123@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 08:24:00'),
(63, 285, 0, 'dd', '416012', '7458965896', 'Ki@123456', 'dd@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 09:53:42'),
(64, 286, 0, 'fgddf', '416012', '8965741236', 'Ki@123454', 'fddf@gmic.vvv', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 09:56:41'),
(65, 287, 0, 'assss', '416012', '7854858585', 'Ki@12345', 'mm@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:04:08'),
(66, 288, 0, 'assss', '416012', '7412563241', 'Ki@12345', 'mmmm@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:04:31'),
(67, 289, 0, 'assss', '416012', '7412563242', 'Ki@12345', 'mmmmmm@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:05:11'),
(68, 290, 0, 'dcsd', '416012', '8698066998', 'Ki@123456', 'ggg@dfd.df', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:06:34'),
(69, 291, 0, 'dfgd', '416012', '7412589632', 'Ki@12345', 'kkk@kkk.kk', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:08:41'),
(70, 292, 0, 'dfgd', '416012', '7412589633', '571237b24eb535090251fa7bf3ecfd41', 'kkk@kkk.kkk', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:10:40'),
(71, 293, 0, 'gfg', '416012', '9856985698', 'Ki@123456', 'kkk@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:43:17'),
(72, 294, 0, 'dfsd', '416012', '7415896589', 'Ki@12345', 'aaaa@12h.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:45:00'),
(73, 295, 0, 'asdfg', '416012', '7458321636', 'Ki@12345', 'asss@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 10:46:04'),
(74, 296, 0, 'rohini', '416012', '9284355159', 'Ki@123456', 'roh@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:04:48'),
(75, 297, 0, 'dfsgsdfg', '416012', '8698562398', 'Ki@12345', 'aass@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:14:35'),
(76, 298, 0, 'dfsgsdfg', '416012', '8698562399', 'Ki@12345', 'aasss@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:16:25'),
(77, 299, 0, 'dfsgsdfg', '416012', '8698562394', 'Ki@12345', 'aasssd@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:18:50'),
(78, 300, 0, 'dfsgsdfg', '416012', '8698562392', 'Ki@12345', 'aasssdggg@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:21:09'),
(79, 301, 0, 'asdhf', '416016', '8698055632', 'Ki@123456', 'qwe@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:23:12'),
(80, 302, 0, 'asdhf', '416016', '8698055631', 'Ki@123456', 'qwee@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:28:33'),
(81, 303, 0, 'asdhf', '416016', '8698055610', 'Ki@123456', 'qweee@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:31:23'),
(82, 304, 0, 'asdhf', '416016', '8698055611', 'Ki@123456', 'qweeee@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:32:00'),
(83, 305, 0, 'abcd', '416012', '8698066123', 'Ki@123456', 'abcd@1gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 11:34:58'),
(84, 306, 0, 'Manisha Rane', '416012', '7798025888', 'Ki@123456', 'manisha1@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-05 12:29:49'),
(85, 307, 1, 'Chinmayi Patil', '416012', '7798025899', 'Ki@123456', 'chinu@gmail.com', 'ramesh', '2015-07-08', '', 9, 'sm', 'kolhapur', '', 'Chinmayi Patil', '4343545666', 2, 'kolhapur', 'kolhapur', 22, 'profile_image_307_1614947895.jpg', 0, '2021-03-05 12:32:04'),
(86, 332, 0, 'Ramesh Rane', '416012', '8698066954', 'Ki@1234567', 'ramesh1@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-06 08:39:02'),
(87, 333, 1, 'Ramesh Shinde', '416012', '8421751623', 'be6148685373df5bcc6f0baffda23be3', 'rameshs@gmail.com', 'Mahesh', '2005-11-16', '', 14, 'sm', 'kolhapur', '', 'Ramesh Shinde', '7458745874', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_333_1615025594.PNG', 0, '2021-03-06 09:57:59'),
(88, 334, 1, 'Pratham Chavan', '416012', '8698066925', 'be6148685373df5bcc6f0baffda23be3', 'pratham@gmail.com', 'Vinay', '2014-02-04', '', 6, 'rainbow school', 'kolhapur', '', 'Pratham Chavan', '9856321456', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_334_1615187696.PNG', 0, '2021-03-08 06:59:15'),
(89, 335, 0, 'Vedu Patil', '416012', '8698055940', '96ca1a1962182255e3b5b08dddaa0ed6', 'manish1233@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-15 04:57:16'),
(90, 336, 0, 'dfsd', '416012', '8698044650', 'be6148685373df5bcc6f0baffda23be3', 'manish11111@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-15 05:21:47'),
(91, 337, 0, 'asdf', '416012', '8698066560', '7d532c0ff2fda8f2cd91993db0202332', 'asdf@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-15 05:23:42'),
(92, 338, 0, 'Assdf', '416012', '8698064155', '74b1598b5c826f66c19011c320443e70', 'asdf1@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-15 05:32:17'),
(93, 339, 1, 'asdf lkjh', '416012', '9284355651', 'be6148685373df5bcc6f0baffda23be3', 'asdf123@gmail.com', 'zxcv', '1999-03-03', '', 14, 'sm', 'Kolhapur', '', 'asdf lkjh', '9284355451', 1, 'Kolhapur', 'Kolhapur', 22, '', 1, '2021-03-15 09:59:32'),
(94, 340, 1, 'asdf', '416012', '9284355151', 'be6148685373df5bcc6f0baffda23be3', 'aasdf@gmail.com', 'asddd', '2008-06-05', '', 10, 'sm', 'Kolhapur', '', 'asdf', '9284355451', 1, 'Kolhapur', 'Kolhapur', 22, '', 1, '2021-03-15 12:24:37'),
(95, 341, 0, 'Nagraj Chavan', '416012', '8698009595', 'Ki@123456', '', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-16 11:43:10'),
(96, 342, 0, 'Narayan Shinde', '416012', '9603917088', '', 'narayan@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 07:29:56'),
(97, 343, 0, 'Purva Chavan', '416012', '9603917089', '', 'purva@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 07:36:07'),
(98, 344, 0, 'Karuna Patil', '416012', '9603917087', '', 'karuna@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 07:49:18'),
(99, 345, 0, 'Kartik Powar', '416012', '9603917086', '', 'kartik@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 07:52:06'),
(100, 346, 0, 'Manish Kore', '416012', '9603917085', '', 'manishk@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 07:55:38'),
(101, 347, 0, 'Prasad Patil', '416012', '9603917084', '', 'prasad@gamil.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 08:00:32'),
(102, 348, 0, 'Mayuri Patil', '416012', '9603917083', 'be6148685373df5bcc6f0baffda23be3', 'mayuri@gmail.com', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', 0, '2021-03-17 08:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `userquizsubmit`
--

CREATE TABLE `userquizsubmit` (
  `userquizsubmitid` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `dynamiccompetitionid` bigint(50) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `selectanswertext` varchar(255) NOT NULL,
  `ceated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userquizsubmit`
--

INSERT INTO `userquizsubmit` (`userquizsubmitid`, `user_id`, `dynamiccompetitionid`, `question_id`, `selectanswertext`, `ceated_date`) VALUES
(16, 220, 53, '64', '6', '2021-02-20 05:39:00'),
(17, 220, 12, '65', '8', '2021-02-20 05:39:58'),
(18, 220, 12, '66', '5', '2021-02-20 05:39:58'),
(19, 220, 12, '68', '20', '2021-02-20 05:39:58'),
(26, 256, 7, '36', '3', '2021-02-20 12:45:07'),
(27, 256, 7, '37', '2', '2021-02-20 12:45:07'),
(28, 256, 7, '38', '1', '2021-02-20 12:45:07'),
(29, 256, 7, '38', '2', '2021-02-20 12:45:07'),
(30, 256, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-20 12:45:07'),
(31, 256, 7, '40', 'Two of the planes, American Airlines Flight 11 and United Airlines Flight 175, crashed into the North and South towers, respectively, of the World Trade Center complex in Lower Manhattan. Within an hour and 42 minutes, both 110-story towers collapsed.', '2021-02-20 12:45:07'),
(32, 256, 7, '67', '1', '2021-02-20 12:45:07'),
(33, 262, 7, '36', '3', '2021-02-26 11:33:34'),
(34, 262, 7, '37', '3', '2021-02-26 11:33:34'),
(35, 262, 7, '38', '1', '2021-02-26 11:33:34'),
(36, 262, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-26 11:33:34'),
(37, 262, 7, '40', '1994', '2021-02-26 11:33:34'),
(38, 262, 7, '67', '1', '2021-02-26 11:33:34'),
(39, 263, 7, '36', '1', '2021-02-26 11:54:24'),
(40, 263, 7, '37', '2', '2021-02-26 11:54:24'),
(41, 263, 7, '38', '1', '2021-02-26 11:54:24'),
(42, 263, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-26 11:54:24'),
(43, 263, 7, '40', '1994', '2021-02-26 11:54:24'),
(44, 263, 7, '67', '1', '2021-02-26 11:54:24'),
(63, 264, 7, '36', '1', '2021-02-28 07:48:24'),
(64, 264, 7, '37', '2', '2021-02-28 07:48:24'),
(65, 264, 7, '38', '1', '2021-02-28 07:48:24'),
(66, 264, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-28 07:48:24'),
(67, 264, 7, '40', '1994', '2021-02-28 07:48:24'),
(68, 264, 7, '67', '1', '2021-02-28 07:48:24'),
(69, 265, 7, '36', '1', '2021-02-28 13:54:29'),
(70, 265, 7, '37', '1', '2021-02-28 13:54:29'),
(71, 265, 7, '38', '1', '2021-02-28 13:54:29'),
(72, 265, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-28 13:54:29'),
(73, 265, 7, '40', 'Year 1994', '2021-02-28 13:54:29'),
(74, 265, 7, '67', '3', '2021-02-28 13:54:29'),
(75, 266, 7, '36', '1', '2021-03-03 05:50:30'),
(76, 266, 7, '37', '2', '2021-03-03 05:50:30'),
(77, 266, 7, '38', '1', '2021-03-03 05:50:30'),
(78, 266, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-03-03 05:50:30'),
(79, 266, 7, '40', '1994', '2021-03-03 05:50:30'),
(80, 266, 7, '67', '3', '2021-03-03 05:50:30'),
(81, 1, 6, '61', '3', '2021-03-04 05:24:25'),
(82, 1, 7, '36', '2', '2021-03-04 05:26:55'),
(83, 1, 7, '37', '2', '2021-03-04 05:26:55'),
(84, 1, 7, '38', '4', '2021-03-04 05:26:55'),
(85, 1, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-03-04 05:26:55'),
(86, 1, 7, '40', 'asa', '2021-03-04 05:26:55'),
(87, 1, 7, '67', '1', '2021-03-04 05:26:55'),
(88, 307, 7, '36', '1', '2021-03-05 12:39:10'),
(89, 307, 7, '37', '2', '2021-03-05 12:39:10'),
(90, 307, 7, '38', '1', '2021-03-05 12:39:10'),
(91, 307, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-03-05 12:39:10'),
(92, 307, 7, '40', '1994', '2021-03-05 12:39:10'),
(93, 307, 7, '67', '3', '2021-03-05 12:39:10'),
(94, 307, 79, '72', '1', '2021-03-05 13:30:53'),
(95, 307, 79, '73', '2', '2021-03-05 13:30:53'),
(96, 333, 7, '36', '1', '2021-03-06 10:31:47'),
(97, 333, 7, '37', '2', '2021-03-06 10:31:47'),
(98, 333, 7, '38', '1', '2021-03-06 10:31:47'),
(99, 333, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-03-06 10:31:47'),
(100, 333, 7, '40', '1994\r\n', '2021-03-06 10:31:47'),
(101, 333, 7, '67', '2', '2021-03-06 10:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `userscore_master`
--

CREATE TABLE `userscore_master` (
  `userscore_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `competitionid` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `correct_answer` int(11) NOT NULL,
  `score_percentage` float(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userscore_master`
--

INSERT INTO `userscore_master` (`userscore_id`, `user_id`, `competitionid`, `total_question`, `correct_answer`, `score_percentage`) VALUES
(1, 256, 7, 6, 4, 66.67),
(2, 220, 12, 3, 0, 0.00),
(5, 262, 7, 6, 3, 50.00),
(6, 263, 7, 6, 5, 83.33),
(7, 265, 7, 6, 4, 66.67),
(8, 264, 7, 6, 4, 66.67),
(9, 266, 7, 6, 5, 83.33),
(11, 307, 79, 2, 2, 100.00),
(13, 307, 7, 6, 5, 83.33),
(14, 333, 7, 6, 6, 100.00);

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
-- Indexes for table `admincheck_answer`
--
ALTER TABLE `admincheck_answer`
  ADD PRIMARY KEY (`admincheck_answerid`);

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
-- Indexes for table `competition_uploadfile_submit`
--
ALTER TABLE `competition_uploadfile_submit`
  ADD PRIMARY KEY (`uploadfileid`);

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
-- Indexes for table `points_master`
--
ALTER TABLE `points_master`
  ADD PRIMARY KEY (`pointsid`);

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
-- Indexes for table `userprofile_master`
--
ALTER TABLE `userprofile_master`
  ADD PRIMARY KEY (`userprofileid`);

--
-- Indexes for table `userquizsubmit`
--
ALTER TABLE `userquizsubmit`
  ADD PRIMARY KEY (`userquizsubmitid`);

--
-- Indexes for table `userscore_master`
--
ALTER TABLE `userscore_master`
  ADD PRIMARY KEY (`userscore_id`);

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
-- AUTO_INCREMENT for table `admincheck_answer`
--
ALTER TABLE `admincheck_answer`
  MODIFY `admincheck_answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `assigncompetition`
--
ALTER TABLE `assigncompetition`
  MODIFY `assigncompetitionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assignwinner`
--
ALTER TABLE `assignwinner`
  MODIFY `assignwinnerid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `competitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `competitionquizsubject`
--
ALTER TABLE `competitionquizsubject`
  MODIFY `quizsubjectid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `competitiontype`
--
ALTER TABLE `competitiontype`
  MODIFY `competitiontypeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `competition_uploadfile_submit`
--
ALTER TABLE `competition_uploadfile_submit`
  MODIFY `uploadfileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
  MODIFY `dynamiccompetitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
-- AUTO_INCREMENT for table `points_master`
--
ALTER TABLE `points_master`
  MODIFY `pointsid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tabcompetition`
--
ALTER TABLE `tabcompetition`
  MODIFY `tabinputtextid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `userprofile_master`
--
ALTER TABLE `userprofile_master`
  MODIFY `userprofileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `userquizsubmit`
--
ALTER TABLE `userquizsubmit`
  MODIFY `userquizsubmitid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `userscore_master`
--
ALTER TABLE `userscore_master`
  MODIFY `userscore_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winnerid` bigint(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
