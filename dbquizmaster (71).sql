-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 02:31 PM
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
(10, 262, 7, 36, 0, '2021-02-26 13:26:17'),
(11, 262, 7, 37, 1, '2021-02-26 13:26:17'),
(12, 262, 7, 38, 1, '2021-02-26 13:26:17'),
(13, 262, 7, 39, 1, '2021-02-26 13:26:17'),
(14, 262, 7, 40, 0, '2021-02-26 13:26:17'),
(15, 262, 7, 67, 0, '2021-02-26 13:26:17');

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
(2, 7, 416012, 50, 'Vinayak Baleghate', 51, 'Rohan Patil', '0000-00-00'),
(3, 7, 416012, 220, 'Rohan Velhal', 53, '', '0000-00-00'),
(4, 7, 3, 0, '', 0, '', '0000-00-00'),
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
  `emailaddress` varchar(255) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `whatsappnumber` char(12) NOT NULL,
  `file_format` varchar(256) NOT NULL,
  `upload_audio` int(11) NOT NULL,
  `upload_image` int(11) NOT NULL,
  `upload_vedio` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`) VALUES
(1, 2, 0, 0, 1, 5, 7, '1970-01-01', 'Diagnostic Quiz', 'Register to see competition topic', '<ul><li>xyz</li><li>abc</li></ul>', 0, 1, 'photo_1610351144.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 08:06:29'),
(2, 1, 0, 0, 1, 5, 7, '1970-01-01', 'Buzzfeed Style Quiz', 'Register to see competition topic', '', 0, 1, 'photo_1610351525.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-05 12:33:32'),
(3, 1, 0, 0, 1, 5, 7, '2021-01-21', 'Geography', 'Register to see competition topic', '', 0, 1, 'photo_1610351921.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:44:26'),
(4, 1, 1, 0, 1, 8, 11, '2021-01-27', 'Personality Quiz', 'Register to see competition topic', '', 0, 2, 'photo_4_1611751248.jpg', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 'Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.\r\nSubmissions that are not according to the topic and format will be disqualified.\r\nNew topics will be updated on the 1st of', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:40:48'),
(5, 1, 1, 0, 1, 8, 11, '2021-01-27', 'True/False Quiz', 'Register to see competition topic', '', 0, 2, 'photo_5_1611751122.jpg', 'sad\r\n', 'assssssss', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:38:42'),
(6, 1, 1, 0, 1, 12, 15, '2021-01-28', 'Assessment Quiz', 'Register to see competition topic', '', 0, 3, 'photo_6_1611751903.jpg', 'xxxx', 'xx', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-20 12:51:43'),
(7, 1, 1, 3, 1, 12, 15, '2021-02-28', 'Matching Quiz', 'Register to see competition topic', '<p>Matching Quiz</p>', 3, 3, 'photo_7_1611982112.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-02-11 13:16:47'),
(9, 1, 1, 0, 1, 12, 15, '2021-01-28', 'IT Quiz', 'Register to see competition topic', '', 0, 3, 'photo_9_1611752081.jpg', 'aaaaaaaa', 'aaaaaaaaaa', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-27 12:54:41'),
(11, 1, 0, 0, 2, 18, 99, '2020-12-29', 'second package', 'Register to see competition topic', '', 0, 4, 'photo_1610696124.jpg', 'aass', 'ddd', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:48:21'),
(12, 1, 1, 1, 1, 18, 99, '2021-03-02', 'Maths Quiz', 'Register to see competition topic', '<p>Maths Quiz</p>', 4, 4, 'photo_12_1611982189.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the <a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-02-11 13:16:14'),
(13, 1, 0, 0, 1, 12, 15, '2020-12-15', 'singing', 'Register to see competition topic', '', 0, 3, 'photo_1612270794.jpg', 'asssssa', 'sdsadada', 0, 0, '', 0, '0', '', 0, 0, 0, '2020-12-30 11:25:02'),
(14, 1, 0, 0, 1, 12, 15, '1970-01-01', 'quiz', 'Register to see competition topic', '<ul><li>maths</li><li>english</li></ul>', 0, 2, 'photo_1612330442.jpg', 'aaaaa', 'aaaaaaaa', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-01 11:37:06'),
(15, 1, 0, 0, 1, 2, 7, '2021-01-21', 'first package', 'Register to see competition topic', '<ul><li>asa</li></ul>', 0, 1, 'photo_1612356153.jpg', 'sdsa', 'sad', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:06:15'),
(16, 2, 0, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>ssd</p>', 0, 2, 'photo_1609586639.jpg', 'ZCDDF', 'FSDSDD', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:23:58'),
(17, 1, 0, 0, 1, 4, 7, '1970-01-01', 'first package', 'Register to see competition topic', '<p>dsaf</p>', 0, 1, 'photo_1609586692.jpg', 'tgdxtr', 'fgvc', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-02 11:24:52'),
(18, 2, 0, 0, 1, 14, 16, '1970-01-01', 'science quiz', 'Register to see competition topic', '<p>dddddddddf</p>', 0, 3, 'photo_18_1610093223.jpg', 'ughn', 'hjjjhy', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:02'),
(19, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 2, 'photo_1609852283.jpg', 'sd', 'sdd', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-05 13:11:23'),
(20, 1, 0, 0, 1, 5, 8, '2021-01-09', 'first package', 'Register to see competition topic', 'ds', 0, 1, 'photo_20_1610093311.jpg', 'gdg', 'fd', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:08:31'),
(21, 1, 0, 0, 1, 4, 5, '2021-01-07', 'first package', 'Register to see competition topic', 'xfs', 0, 1, 'photo_21_1609924059.jpg', 'jj', 'jj', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-06 09:07:39'),
(22, 2, 0, 0, 1, 4, 6, '2021-01-14', 'first package', 'Register to see competition topic', 'd', 0, 1, 'photo_22_1610093270.jpg', 'gtdg', ' vgf', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:50'),
(23, 2, 0, 0, 1, 7, 9, '2021-01-12', 'first package', 'Register to see competition topic', 'jhg', 0, 1, 'photo_23_1610093286.jpg', 'ghrh', 'bhh', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:08:06'),
(24, 2, 0, 0, 1, 4, 9, '2021-01-14', 'first package', 'Register to see competition topic', ';lj', 0, 1, 'photo_24_1610093250.jpg', 'yh', 'h', 1, 0, '', 0, '0', '', 0, 0, 0, '2021-01-08 08:07:30'),
(25, 1, 0, 0, 1, 15, 18, '2021-01-08', 'first package', 'Register to see competition topic', 'ghf', 0, 3, 'photo_1609924026.jpg', ' dfd', 'ds', 0, 0, '', 0, '0', '', 0, 0, 0, '2021-01-06 09:07:06'),
(26, 3, 3, 1, 1, 0, 1, '2021-03-08', 'Dancing Competition', 'Register to see competition topic', '<p>Dancing Competition</p>', 1, 1, 'photo_26_1612269702.jpg', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 'The duration of an event is based on the number, types, and the dance routines that are programmed to compete. Apart from the time needed for dance performances extra time is', 1, 1, 'demo@gmail.com', 1, '9999999999', '', 0, 0, 0, '2021-02-11 13:15:40'),
(27, 1, 0, 0, 4, 12, 15, '2021-01-21', 'easy', 'Register to see competition topic', '', 0, 3, 'photo_27_1610093339.jpg', 'sgdf', 'fsgsdf', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 08:08:59'),
(28, 2, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610090867.jpg', 'xzC', 'xc', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:27:47'),
(29, 1, 0, 0, 2, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610090955.jpg', 'fghh', 'fgfgfgf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:29:15'),
(30, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610091769.jpg', 'jhhhhhhhh', 'hfg', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:42:49'),
(32, 1, 0, 0, 1, 4, 5, '2021-01-22', 'first package', 'Register to see competition topic', '', 0, 1, 'photo_1610091875.jpg', 'gjhgf', 'hgj', 1, 0, '', 0, '', '', 0, 0, 0, '2021-01-08 07:44:35'),
(33, 1, 0, 0, 1, 12, 15, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 3, 'photo_1610092034.jpg', 'ghfh', 'dfghgh', 0, 0, '', 0, '9999999999', '', 0, 0, 0, '2021-01-08 07:47:14'),
(36, 2, 0, 0, 1, 5, 7, '2021-01-21', 'first package', 'Register to see competition topic', '', 0, 1, 'photo_1610092351.jpg', 'gjjjjjjjjjjjj', 'fggggg', 1, 0, '', 1, '9999999999', '', 0, 0, 0, '2021-01-08 07:52:31'),
(41, 1, 1, 0, 1, 12, 15, '2021-01-27', 'GK Quiz', 'Register to see competition topic', '', 0, 3, 'photo_41_1611752806.jpg', 'sfdfdd', 'dsfasdf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-27 13:06:46'),
(46, 1, 1, 0, 1, 8, 11, '2021-01-27', 'English Quiz', 'Register to see competition topic', '<div><br></div>', 0, 2, 'photo_46_1611753197.jpg', 'sdad', 'saaaaaa', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-27 13:13:17'),
(47, 1, 1, 0, 1, 12, 15, '2021-01-20', 'GK Quiz', 'Register to see competition topic', '', 0, 3, 'photo_47_1610359705.jpg', 'sfafd', 'dsaf', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-11 10:08:25'),
(51, 1, 1, 0, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 0, 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-15 07:26:25'),
(52, 1, 1, 0, 2, 18, 25, '2021-01-17', 'Current Affairs Quiz', 'Register to see competition topic', '', 0, 5, '', 'hfgfg', '<p>gh</p><p>fdh</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-01-15 07:27:18'),
(53, 1, 1, 3, 1, 8, 10, '2021-02-28', 'Current Affairs Quiz', 'Register to see competition topic', '<p>Current Affairs Quiz</p>', 2, 2, 'photo_53_1611981866.jpg', '<p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA & Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">5. Only one entry is permitted per person. Entries are to be submitted online via the </span><a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"font-family: \"Times New Roman\";\">competition page</span></a></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</span></p><p style=\"box-sizing: inherit; font-family: \"PT Serif\", Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\"><span style=\"font-family: \"Times New Roman\";\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</span></p>', '<ol style=\"margin-bottom: 10px; padding-left: 18px; color: rgb(51, 51, 51); font-family: open-sans; font-size: 15px; letter-spacing: -0.3px;\"><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">All entries must be a digital video.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">Each entry must focus on ONE of following global challenges as it relates to population growth:</span><ul style=\"margin-top: 10px; margin-bottom: 10px; padding-left: 18px; list-style-type: disc;\"><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Promoting Environmental Justice</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Strengthening Global Health</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Re-Imagining Industrial Systems</span></li></ul></span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Students may work together in groups or submit entries as individuals.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">The length of the video should not exceed 60 seconds (one minute), not including the 5 second title screen (see #5).</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">All entries should begin with a 5 second full-screen “title screen” that includes the following information:</span><ul style=\"margin-top: 10px; margin-bottom: 10px; padding-left: 18px; list-style-type: disc;\"><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Lead Producer’s name</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">School name</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">School city, state</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Title of video</span></li><li style=\"margin-bottom: 5px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">Total running time (not including the 5 second title screen)</span></li></ul></span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400; font-family: \"Times New Roman\";\">All information presented in the video must be cited, giving credit to the original source. Plagiarism of any kind will result in disqualification. You DO NOT need to include your citations in your video. IF CHOSEN AS A FINALIST, you must submit a list of your sources, properly cited.</span></li><li style=\"margin-bottom: 15px; line-height: 22px; color: rgb(2, 130, 201); font-weight: 700; font-size: 14px; padding-left: 8px;\"><span style=\"color: rgb(51, 51, 51); font-weight: 400;\"><span style=\"font-family: \"Times New Roman\";\">Each video must have one </span><span style=\"font-weight: 700; font-family: \"Times New Roman\";\">Lead Producer</span><span style=\"font-family: \"Times New Roman\";\"> to serve as the main point of contact. Recognition and prizes will be given to the lead producer and all those listed as co-producers on the entry form.</span></span></li></ol>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-02-11 13:20:21'),
(59, 2, 1, 2, 2, 15, 17, '2021-03-10', 'Classical Singing', 'Register to see competition topic', '<p>Classical Singing</p>', 3, 3, 'photo_59_1612328773.jpg', '<ul><li>Participants should send their submissions based on the given topics. Submission should be in the desired format i.e video/ image. </li><li>Participants should send their submissions based on the given topics. Submission should be in the desir', '<ul><li>Participants should send their submissions based on the given topics.\r\nSubmission should be in the desired format i.e video/ image.</li><li>Participants should send their submissions based on the given topics. Submission should be in the desired fo', 1, 0, '', 1, '', '2', 1, 0, 1, '2021-02-21 12:21:13');
INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`) VALUES
(60, 4, 1, 3, 1, 12, 15, '2021-02-28', 'Easy Writing', 'Register to see competition topic', '<ul><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Should plastic be banned?</li><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Pollution due to Urbanization.</li><li class=\"TrT0X', 3, 3, 'photo_60_1612270979.jpg', '<h4 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 1.5em; line-height: 1em; font-family: &quot;Open Sans&quot;, sans-serif; margin: 1em 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"background-color: rgb(255, 255, 255);\">Competition Rules</span></h4><ol style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: &quot;Open Sans&quot;, sans-serif; margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The SMART Competition is open to all undergraduate university students&nbsp;and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">An educator, school or sponsored education program may register multiple teams.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">A student may compete for multiple years.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The competition structure is progressive based on the scores assigned by the judges.&nbsp;&nbsp;Teams and team members that progress through each of these competition levels must remain consistent.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">All team members must comply with the SMART Competition Code of Conduct.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The decision of the judges is final.</span></li></ol>', '<h4 style=\"margin: 1em 0px; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 700; line-height: 1em; color: rgb(0, 0, 0); font-size: 1.5em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\">Competition Rules</h4><ol style=\"margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The SMART Competition is open to all undergraduate university students&nbsp;and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">An educator, school or sponsored education program may register multiple teams.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">A student may compete for multiple years.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The competition structure is progressive based on the scores assigned by the judges.&nbsp;&nbsp;Teams and team members that progress through each of these competition levels must remain consistent.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">All team members must comply with the SMART Competition Code of Conduct.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The decision of the judges is final.</li></ol><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"></ul>', 1, 0, '', 0, '', '1', 0, 0, 0, '2021-02-22 10:04:12'),
(61, 1, 1, 3, 1, 0, 99, '2021-01-24', 'Basic Computer Quiz', 'Register to see competition topic', '<p>Basic Computer Quiz</p>', 6, 6, 'photo_1613056055.jpg', '<p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA &amp; Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the&nbsp;<a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', '<p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">1. This competition is open to anyone aged 18 or over, except for employees of Reed Business Information Limited and their immediate families.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">2. The competition task is: Using the 2 week feature “50 ideas that will change science” (7th and 14th October 2010 cover dates). Vote for what you think is the best idea presented, giving your reason why in 140 characters or less.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">3. The prize is a HP TouchSmart multi-touch tablet PC, with a 20 inch screen, TV and 500 GB hard drive. The prize is non-transferable and non-divisible. Prizes cannot be exchanged.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">4. The competition is open to entrants residing in; UK, Europe, Middle East, Africa, USA &amp; Canada. A winner outside Europe may experience minor delay in delivery of the prize for logistical reasons.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">5. Only one entry is permitted per person. Entries are to be submitted online via the&nbsp;<a href=\"https://www.newscientist.com/projects/forms/fiftyideas2010\" style=\"color: rgb(0, 179, 229); margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">competition page</a></p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">6. New Scientist shall not be responsible for technical errors in telecommunication networks, internet access or otherwise, preventing entry at this website.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">7. Entries must be received by 12am GMT 31st October 2010. No purchase is necessary. Entries will not be returned, nor will they be removed from the website once posted.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">8. Every effort will be made to notify the winners by email by 12am GMT 30th November 2010. Winners must respond within 14 days or an alternative winner may be chosen.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">9. Submitting your entry constitutes your consent for us to use your entry, name and photos for editorial or publicity purposes, should you be a winner.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">10. The winner will be chosen by a judging panel which will be made up of New Scientist editors. The judges’ decision is final and no correspondence will be entered into. A list of winners is available by writing to “50 ideas competition”, Lacon House, 84 Theobalds Road, London WC1X 8NS</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">11. New Scientist reserves the right to change or withdraw the competition and/or prize at any time.</p><p style=\"box-sizing: inherit; font-family: &quot;PT Serif&quot;, Georgia, serif; font-size: 1.0625rem; line-height: 1.5625rem; margin-right: 0px; margin-bottom: 0.6875rem; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(77, 77, 77);\">12. By entering the competition, entrants are deemed to have accepted these terms and conditions.</p>', 0, 0, '', 0, '', '', 0, 0, 0, '2021-02-11 15:07:34'),
(71, 5, 1, 1, 1, 8, 10, '2021-03-24', 'Creativity of mind', 'Register to see competition topic', '<ul class=\"i8Z77e\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style-type: disc;\">Speech and Image', 3, 2, 'photo_71_1613377107.jpg', '<h3 style=\"font-family: type-font, Arial, Roboto, Helvetica, sans-serif; font-weight: 700; margin: 1.25rem 0px 0.625rem; line-height: 1.5; font-size: 1.25rem; color: rgb(64, 64, 64);\">General Terms and Conditions:</h3><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">This contest will be governed by these standard terms and conditions. Each participant agrees that he/she has read and understood these terms and by their participation in the contest, each participant agrees to be bound by the terms. Mere participation should not be perceived as any commitment on the part of Shell to select a participant as the winner. Nothing herein amounts to a commitment by Shell to conduct further, similar or other contests in future.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">This promotion is in no way sponsored, endorsed or administered by, or associated with, Facebook or Twitter. Any questions, comments or complaints regarding the promotion will be directed to Sponsor, not Facebook or Twitter.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Incomplete information provided or failure to provide true and accurate information as stated in these terms and conditions, failure to submit proof of identification and/or original confirmation number upon collection of the Prize will automatically disqualify the participant. Shell shall have the absolute and sole discretion to determine whether any participant should be disqualified by reason of failure to abide by these terms and conditions, bad faith, fraud or any other legitimate reason</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Multiple Facebook comment entries* and Tweets on the contest post per person during the Contest Period will be entertained</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell reserves the right to change the terms and conditions of this contest, including extending, withdrawing or discontinuing the same without notice, without assigning any reason, at its sole discretion without any liability..</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">There is no cash alternative to the stated prizes, and the prizes are non-transferable and non-refundable. Shell reserves the right to substitute either any part of Prize or whole Prize for similar prize of equal or greater value.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell shall not be liable in any manner whatsoever for any claims, losses, damage, costs or expenses in connection with or arising from this Competition, the redemption or use of the Prizes.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">To the extent only permitted by applicable law, Shell reserves the right to use the winner’s image, photograph, name and likeness in post-promotion publicity material and in advertising, marketing or promotional material in any media by any means throughout the world for any purpose connected with the products/services of Shell or any company within the Royal Dutch/Shell Group of companies without additional compensation or prior notice to the winner and all participants consent to the same.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Copyrighted, obscene, provocative or otherwise questionable content will not be considered. Shell India retains sole discretion as to what constitutes inappropriate content.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">In the event of any inconsistency between these terms and conditions and any advertising, promotional, publicity and other materials relating to or in connection with this promotion, these terms and conditions shall prevail.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell reserves the right to request proof of a participant\'s eligibility in the event that there is a doubt over his/her eligibility for the promotion.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Subject to applicable laws, Shell shall not be liable for any losses, taxes, liabilities or inconvenience suffered by any participant as a result of these terms and conditions, entering into this Competition or accepting any part of the Prize</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell shall not be liable under or in connection with these terms and conditions or for this Competition or using the Prize for any indirect, special or consequential cost, expense, loss or damage even if such cost, expense, loss or damage was reasonably foreseeable or might reasonably have been contemplated by the participant and Shell and whether arising from breach of contract, tort, negligence, breach of statutory duty or otherwise.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell India accepts no responsibility for difficulties experienced in submitting an entry to this Contest. Shell does not accept responsibility for (1) lost, late or undelivered entries or (2) any technical or access issue, failure, malfunction or difficulty that might hinder the ability of a participant to enter the Competition or (3) any event which may cause the Competition to be disrupted or corrupted.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">In addition to these terms & conditions, other specific terms may be imposed by Shell from time to time to deal with any unforeseen situation. Shell also reserves the absolute right to change the terms and conditions contained herein and, or, any other rules and regulations in respect of the Competition at any time without any notice, the itinerary, without assigning any reason and without any liability whatsoever. Participants are requested to refer to such other terms and conditions, if any, which may be intimated separately as Shell considers fit.  However, no obligation is cast on Shell to separately intimate each individual participant with regard to such additional terms and conditions.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Shell may (i) extend (ii) terminate or suspend the Competition at any time due to circumstances beyond its control (iii) substitute a prize (or any part of a Prize).</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The participant(s) hereby give express permission to Shell to freely distribute its submission in any publication and media whether online, offline or on the Internet. Material sent to Shell including feedback and other communications of any kind as well as submission of an entry to this Competition shall be deemed to be non-confidential. Shell shall be free to reproduce, distribute and publicly display such feedback, materials without limitation or obligation of any kind. Shell is also free to use any ideas, concepts, know-how or techniques contained in such submissions or materials for any purpose.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant understands that each of the officials of Shell engaged in the organization and management of this Competition including its directors, officers, partners, employees, consultants, and agents are under no obligation to render any advice or service to any participant in respect of this Competition</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The participant undertakes to indemnify and keep Shell harmless and indemnified against any loss, damage, claims, costs and expenses which may be incurred or suffered by Shell due to breach of any of the terms and conditions herein contained.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Any disputes, differences and/or any other matters in relation to and arising out of this Promotion and, or pertaining to these terms and conditions shall be referred to arbitration under the Arbitration & Conciliation Act, 1996. The venue of arbitration shall be New Delhi. The Promotion shall be governed by and construed in accordance with applicable laws in India and will be subject to exclusive jurisdiction of the courts at Bangalore alone. The Rules of Indian Council of Arbitration(“Rules”) shall apply to the arbitration proceedings and the arbitration shall be conducted by a sole arbitrator to be appointed as per the Rules.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant must ensure that his or her participation in the promotion is lawful in accordance with the laws of India. Neither Shell nor its representatives or agents shall be taken to make any representations, express or implied, as to the lawfulness of any participant\'s participation in the Competition</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Entrants are deemed to accept these terms and conditions by entering the Contest. </li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">One Winner of the contest will be selected basis a lucky draw of the answer entries that fulfil the eligibility criteria.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The Winner will be eligible to a trip sponsored by Shell to Malaysia MotoGP in Sepang. The prize is limited to Air Travel from Mumbai to Kuala Lumpur, Bus travel from Kuala Lumpur to Sepang, Accommodation and Meals as mentioned in the itinerary and Tickets to MotoGP in VIP. All mentioned arrangements will be made by Shell after receiving the necessary details from the winner as per the below mentioned itinerary.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Trip Itinerary:<ul style=\"padding: 0px; margin-right: 0px; margin-left: 0px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">28th October: Late night flight from Mumbai (Malindo). Transfers arranged from Pune.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">29th October: Early morning arrival in KL. Check into Hotel Renaissance. Breakfast, Lunch and Welcome Dinner on Day 1. Day free for leisure.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">30th October: MotoGP in VIP Suite. Lunch at MotoGP. Dinner at Hotel. Transfers arranged.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">31st October: Checkout from hotel.</li></ul></li></ul><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The prize is limited to the above mentioned expenses/itinerary and any additional expenses incurred by the winner during the trip will not be paid by Shell.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Each participant consents to the use of information supplied by the participant in any media for future promotional, marketing and publicity purposes without any further reference or payment or other compensation to the participant, by Shell.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">The decision of Shell will be final and binding.</li></ul>', '<h3 style=\"font-family: type-font, Arial, Roboto, Helvetica, sans-serif; font-weight: 700; margin-right: 0px; margin-bottom: 0.625rem; margin-left: 0px; line-height: 1.5; font-size: 1.25rem; color: rgb(64, 64, 64);\">How to Enter:</h3><p style=\"line-height: 1.5; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Facebook</span></p><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must like the contest post on Facebook.</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must share their answer entry in the comment section of the contest post using #TheWinningIngredient.</li></ul><p style=\"line-height: 1.5; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Twitter</span></p><ul style=\"padding: 0px; margin: 0.625rem 0px; color: rgb(64, 64, 64); font-family: Arial, Roboto, Helvetica, sans-serif; font-size: 14px;\"><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must follow <a href=\"https://twitter.com/Shell_India\" target=\"_blank\" class=\"text-link link-info tracking-progression\" data-tracking=\"external\" aria-label=\"@Shell_India Opens in new window\" style=\"line-height: 1.5; text-decoration-line: underline; font-weight: 700; color: inherit;\">@Shell_India</a></li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must retweet the contest tweet</li><li style=\"line-height: 1.5; list-style-position: inside; margin: 0px; left: 0px; padding: 0px 1.625rem; position: relative; list-style-type: square;\">Participants must tweet their answer entry to <a href=\"https://twitter.com/Shell_India\" target=\"_blank\" class=\"text-link link-info tracking-progression\" data-tracking=\"external\" aria-label=\"@Shell_India Opens in new window\" style=\"line-height: 1.5; text-decoration-line: underline; font-weight: 700; color: inherit;\">@Shell_India</a> using #TheWinningIngredient</li></ul>', 0, 1, '', 1, '', '', 0, 0, 0, '2021-02-15 08:18:27'),
(72, 3, 1, 3, 1, 7, 10, '2021-03-20', 'Dancing Competition', 'Register to see competition topic', '<p>classical Dancing</p>', 2, 2, 'photo_1613928781.jpg', '<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Your Entry must meet the following criteria:</p><ul style=\"font-family: &quot;Open Sans&quot;, sans-serif;\"><li>Must be your own original work.</li><li><span style=\"line-height: 1.5;\">May only contain content, for which you have all required consents and approvals.</span></li><li>Must comply with all Terms of Use of Instagram (http://instagram.com/about/legal/terms/).</li><li>Cannot contain, as determined by SeeMyCity, content that is sexually explicit, violent, derogatory of any ethnic, racial, gender, religious, professional or age group, which violates any law, or which communicates a messages inconsistent with the positive good will to which we wish to associate.</li><li>Must be a follower of SeeMyCity on Instagram</li><li>Must follow all rules as described in each individual contest description as well as General Rules.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Submissions must not:</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding-left: 30px;\">(a) violate any third party rights, including, but not limited to, copyrights, trademark rights, or rights of privacy and publicity<br>(b) contain defamatory statements<br>(c) include threats to any person, place, business, or group; or<br>(d) be obscene or indecent.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Any elements that appear in the submission, including, without limitation, images, text, or other materials used must be entirely original and created by the entrant, or be in the public domain. Use of any elements that are not original or in the public domain will result in disqualification of a submission, in SeeMyCity’s sole discretion.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">By submitting an entry, you represent that:</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding-left: 30px;\">(a) you are the creator of the submission<br>(b) you own all rights to the submission<br>(c) the submission does not infringe upon or violate the intellectual property, privacy, or other rights of any third party.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">SeeMyCity will not make available to the general public or to the Judges any entry that is obscene, pornographic, violent, offensive in any manner, or in any other way not suitable to be published (as determined solely by SeeMyCity). Entrants agree that the inability to publish an entry, or the obscenity, fraudulent nature or invalidity of the registration information (as determined by SeeMyCity, at their sole discretion) will render the corresponding entry void.</p>', '<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">Your Entry must meet the following criteria:</span></p><ul style=\"font-family: &quot;Open Sans&quot;, sans-serif;\"><li><span style=\"background-color: rgb(255, 255, 255);\">Must be your own original work.</span></li><li><span style=\"line-height: 1.5; background-color: rgb(255, 255, 255);\">May only contain content, for which you have all required consents and approvals.</span></li><li><span style=\"background-color: rgb(255, 255, 255);\">Must comply with all Terms of Use of Instagram (http://instagram.com/about/legal/terms/).</span></li><li><span style=\"background-color: rgb(255, 255, 255);\">Cannot contain, as determined by SeeMyCity, content that is sexually explicit, violent, derogatory of any ethnic, racial, gender, religious, professional or age group, which violates any law, or which communicates a messages inconsistent with the positive good will to which we wish to associate.</span></li><li><span style=\"background-color: rgb(255, 255, 255);\">Must be a follower of SeeMyCity on Instagram</span></li><li><span style=\"background-color: rgb(255, 255, 255);\">Must follow all rules as described in each individual contest description as well as General Rules.</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">Submissions must not:</span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding-left: 30px;\"><span style=\"background-color: rgb(255, 255, 255);\">(a) violate any third party rights, including, but not limited to, copyrights, trademark rights, or rights of privacy and publicity<br>(b) contain defamatory statements<br>(c) include threats to any person, place, business, or group; or<br>(d) be obscene or indecent.</span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">Any elements that appear in the submission, including, without limitation, images, text, or other materials used must be entirely original and created by the entrant, or be in the public domain. Use of any elements that are not original or in the public domain will result in disqualification of a submission, in SeeMyCity’s sole discretion.</span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">By submitting an entry, you represent that:</span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif; padding-left: 30px;\"><span style=\"background-color: rgb(255, 255, 255);\">(a) you are the creator of the submission<br>(b) you own all rights to the submission<br>(c) the submission does not infringe upon or violate the intellectual property, privacy, or other rights of any third party.</span></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"background-color: rgb(255, 255, 255);\">SeeMyCity will not make available to the general public or to the Judges any entry that is obscene, pornographic, violent, offensive in any manner, or in any other way not suitable to be published (as determined solely by SeeMyCity). Entrants agree that the inability to publish an entry, or the obscenity, fraudulent nature or invalidity of the registration information (as determined by SeeMyCity, at their sole discretion) will render the corresponding entry void.</span></p>', 0, 0, '', 1, '', '3', 0, 0, 1, '2021-02-21 17:33:01');
INSERT INTO `competition` (`competitionid`, `competitiontypeid`, `competitionusertype`, `gender`, `levelid`, `fromage`, `toage`, `enddate`, `title`, `subtitle`, `subjectstextarea`, `standard`, `tabinputtextid`, `photo`, `termsandconditions`, `instruction`, `uploadfile`, `email`, `emailaddress`, `whatsapp`, `whatsappnumber`, `file_format`, `upload_audio`, `upload_image`, `upload_vedio`, `created_date`) VALUES
(73, 6, 1, 3, 1, 3, 6, '2021-03-24', 'Drawing Competition', 'Register to see competition topic', '<p>Nature Drawing</p>', 1, 1, 'photo_1613982401.jpg', '<h4 style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 1.5em; line-height: 1em; font-family: &quot;Open Sans&quot;, sans-serif; margin: 1em 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\"><span style=\"background-color: rgb(255, 255, 255);\">Competition Rules</span></h4><ol style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: &quot;Open Sans&quot;, sans-serif; margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The SMART Competition is open to all undergraduate university students&nbsp;and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">An educator, school or sponsored education program may register multiple teams.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">A student may compete for multiple years.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The competition structure is progressive based on the scores assigned by the judges.&nbsp;&nbsp;Teams and team members that progress through each of these competition levels must remain consistent.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">All team members must comply with the SMART Competition Code of Conduct.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</span></li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"background-color: rgb(255, 255, 255);\">The decision of the judges is final.</span></li></ol>', '<h4 style=\"margin: 1em 0px; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 700; line-height: 1em; color: rgb(0, 0, 0); font-size: 1.5em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; padding: 0px; vertical-align: baseline; overflow-wrap: break-word;\">Competition Rules</h4><ol style=\"margin-right: 1.5em; margin-bottom: 1.5em; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 22px; font-family: &quot;Open Sans&quot;, sans-serif; padding: 0px 0px 0px 2em; vertical-align: baseline; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The SMART Competition is open to all undergraduate university students&nbsp;and high school students currently enrolled in a public, private, parochial or home school or other recognized secondary education institution. Students representing other non-school based or informal education programs may also participate.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student teams may be formed at a school, secondary education institution or other non-school based sponsored education program.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">An educator, school or sponsored education program may register multiple teams.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Student design teams include three or four members. A team may identify another student to serve as the team’s project manager. In addition to the student members, there must be an educator to serve as the team’s sponsor. The students or the educator may wish to identify a technical professional who will serve as the team advisor.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">A student may compete for multiple years.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The competition structure is progressive based on the scores assigned by the judges.&nbsp;&nbsp;Teams and team members that progress through each of these competition levels must remain consistent.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">All team members must comply with the SMART Competition Code of Conduct.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Specific rules and scoring criteria relating to each competition deliverable are provided in the Rules section.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Presentation materials including portable computing systems, presentation software, storyboards and other visual aids are the responsibility of the team. Any materials used must conform to competition specified standards.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">Awards, prizes or recognition items have no resale value and are not transferable or exchangeable.</li><li style=\"border: 0px; font: inherit; margin: 0px; padding: 0px; vertical-align: baseline;\">The decision of the judges is final.</li></ol>', 0, 1, '', 1, '', '4', 0, 1, 0, '2021-02-22 08:26:41');

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
(1, 'Quiz', '2021-01-11 00:00:00'),
(2, 'Singing', '2021-01-11 07:03:32'),
(3, 'Dancing', '2021-01-11 07:03:42'),
(4, 'Essay Writing', '2021-02-04 13:13:16'),
(5, 'Poster Presentation', '2021-02-15 06:00:59'),
(6, 'Drawing', '2021-02-22 08:07:25');

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
(67, 59, 258, '', 2, 'upload_audio_258_1613915146.webm', '', '', '2021-02-21 13:45:46'),
(69, 72, 259, '', 3, '', 'upload_vedio_259_1613980476.mp4', '', '2021-02-22 07:54:36'),
(70, 73, 261, '', 4, '', '', 'upload_image_261_1614079094.jpg', '2021-02-22 09:53:42'),
(76, 60, 220, 'uploadfile_220_1613989668.pdf', 1, '', '', '', '2021-02-22 10:27:48');

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
(68, 12, 'Question 1. What is three fifth of 100?', '5', '3,5,20,60', '2', '2021-02-15');

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
(1, 7, 100, '1st', 15, '2021-02-25'),
(2, 7, 200, '2nd', 20, '0000-00-00'),
(3, 7, 300, '3rd', 30, '0000-00-00'),
(4, 7, 450, '4th', 45, '2021-02-25'),
(5, 7, 500, '5th', 50, '0000-00-00');

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
(53, 'Mahesh Velhal', '2021-02-18', 'Mahesh@gmail.com', '4', 'Kolhapur Highschool Kolhapur', 'qsads', 416012, 'Rohan Velhal', '8965578744', 1, '1', '1', 22, 60, 220, 2, '', '2021-02-12'),
(54, 'Mahesh Velhal', '2021-02-18', 'Mahesh@gmail.com', '3', 'Kolhapur Highschool Kolhapur', 'qsads', 416012, 'Rohan Velhal', '8965578744', 1, '1', '1', 22, 53, 220, 2, '', '2021-02-12'),
(55, 'Vilas', '2014-01-24', 'yash@gmail.com', '13', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 12, 236, 18, '', '2021-02-12'),
(56, 'Vilas', '2014-01-24', 'yash@gmail.com', '13', 'PPGH', 'xyz road', 416013, 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, 53, 236, 18, '', '2021-02-12'),
(58, 'bbbb', '2021-02-11', 'aaa@gmail.com', '5', 'hhh', 'kkk', 416012, 'aabbb', '9874562144', 1, '1', '1', 22, 7, 241, 23, 'profile_image_241_1613305157.jpg', '2021-02-14'),
(59, 'yash', '2006-01-16', 'sve@gmail.com', '5', 'SM', 'Yash plaza', 416018, 'Aditya', '9822114878', 1, '1', '1', 22, 53, 242, 24, 'profile_image_242_1613367223.png', '2021-02-15'),
(60, 'Vilas', '2021-02-15', 'Yash@gmail.com', '3', 'Kolhapur Highschool Kolhapur', 'Rajarampuri', 416018, 'shweta E', '9822114888', 1, '1', '1', 22, 71, 243, 25, '', '2021-02-15'),
(61, 'bbbb', '2015-11-11', 'demo@gmail.com', '5', 'hhh', 'kkk', 416012, 'Rohan Velhal', '9874562144', 1, 'Kolhapur', 'Kolhapur', 22, 12, 220, 2, '', '2021-02-16'),
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
(75, 'Umesh', '2016-06-15', 'manish@gmail.com', '6', 'SM', 'Kolhapur', 0, 'Ramesh Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 7, 263, 45, 'profile_image_263_1614340427.png', '2021-02-26');

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
(18, 'Kenmore', '0000-00-00 00:00:00'),
(19, 'Kerala', '0000-00-00 00:00:00'),
(20, 'Lakshadweep', '0000-00-00 00:00:00'),
(21, 'Madhya Pradesh', '0000-00-00 00:00:00'),
(22, 'Maharashtra', '0000-00-00 00:00:00'),
(23, 'Manipur', '0000-00-00 00:00:00'),
(24, 'Meghalaya', '0000-00-00 00:00:00'),
(25, 'Mizoram', '0000-00-00 00:00:00'),
(26, 'Nagaland', '0000-00-00 00:00:00'),
(27, 'Narora', '0000-00-00 00:00:00'),
(28, 'Natwar', '0000-00-00 00:00:00'),
(29, 'Odisha', '0000-00-00 00:00:00'),
(30, 'Paschim Medinipur', '0000-00-00 00:00:00'),
(31, 'Pondicherry', '0000-00-00 00:00:00'),
(32, 'Punjab', '0000-00-00 00:00:00'),
(33, 'Rajasthan', '0000-00-00 00:00:00'),
(34, 'Sikkim', '0000-00-00 00:00:00'),
(35, 'Tamil Nadu', '0000-00-00 00:00:00'),
(36, 'Telangana', '0000-00-00 00:00:00'),
(37, 'Tripura', '0000-00-00 00:00:00'),
(38, 'TEST', '0000-00-00 00:00:00'),
(39, 'UP-1', '0000-00-00 00:00:00'),
(40, 'West Bengal', '0000-00-00 00:00:00'),
(41, 'UP-2', '0000-00-00 00:00:00');

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
  `alluser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabcompetition`
--

INSERT INTO `tabcompetition` (`tabinputtextid`, `tabinputtext`, `tabid`, `fromstand`, `tostand`, `alluser`) VALUES
(1, 'Nur-1st', 'nur-class1', 0, 1, 0),
(2, '2nd-5th', 'class2-class5', 2, 5, 0),
(3, '6th-9th', 'class6-class9', 6, 9, 0),
(4, 'Males(18+)', 'male', 0, 0, 0),
(5, 'Females(18+)', 'female', 0, 0, 0),
(6, 'All', 'all', 0, 100, 1);

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
(1, 1, '', 1, 'Admin', '', 1, 'Kolhapur', 'demo@email.com', '9876543210', '12345678', NULL, 'active', 'Admin', '2021-02-05 05:00:50', 0),
(6, 1, '', 2, 'Datta Mane', 'kop\r\n', 416012, 'Kop', 'datta@mail.com', '9673454383', '12345689', NULL, 'active', '0', '2021-02-05 05:01:37', 0),
(11, 1, '', 2, 'rohan wordpress', 'kop', 2, 'kolhapur', 'rohan@gm.com', '8974562101', '1234', NULL, 'active', '0', '2021-02-08 12:37:48', 0),
(12, 1, '', 2, 'techenvision', 'rajarampuri', 2, 'kop', 'techenvision@gmail.com', '8421751394', 'tech', '11', 'active', '0', '2021-01-21 06:08:05', 0),
(16, 0, '', 2, 'techenvision', '', 416012, '', '', '9999999999', '', '123654', 'active', '1', '2020-12-15 01:18:59', 1),
(17, 0, '', 2, 'tech', '', 416012, '', '', '7777777777', '', '30', 'active', '1', '2020-12-15 01:19:03', 1),
(18, 1, '', 2, 'abc', 'kk', 0, 'kolhapur', 'manish@gmail.com', '7845127845', '1234567', NULL, 'active', '1', '2020-12-15 01:17:00', 0),
(19, 0, '', 2, 'rohan wordpress', '', 123, '', '', '6666666666', '', '1234567', 'active', '1', '2021-02-04 06:48:46', 1),
(20, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9856325698', '', '10000', 'active', '1', '2020-12-15 01:19:07', 1),
(21, 0, '', 2, 'rohan wordpress', '', 4444444, '', '', '8888888888', '', NULL, 'active', '1', '2020-12-15 01:19:10', 1),
(23, 0, '', 2, 'rohan wordpress', '', 416, '', '', '744444444', '', NULL, 'active', '1', '2020-12-15 01:19:14', 1),
(25, 0, '', 2, 'rohan wordpress', 'kkk', 410, 'kolhapur', 'rrr@mail.com', '7845211254', '1235', NULL, 'active', '0', '2021-02-04 06:56:17', 0),
(26, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563214', '', NULL, 'active', '1', '2020-12-15 01:19:21', 1),
(29, 0, '', 2, 'rohan wordpress', '', 410512, '', '', '9874563215', '12', NULL, 'active', '1', '2021-02-04 05:22:00', 1),
(30, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222222222', '', NULL, 'active', '1', '2020-12-15 01:19:25', 1),
(33, 0, '', 2, 'rohan wordpress', '', 22, '', '', '2222', '', NULL, 'active', '1', '2020-12-15 01:19:28', 1),
(34, 0, '', 2, 'rohan wordpress', '', 411, '', '', '1111111111', '', NULL, 'active', '1', '2020-12-15 01:19:31', 1),
(35, 0, '', 2, 'rohan wordpress', '', 4160001, '', '', '8521478554', '', NULL, 'active', '1', '2020-12-15 01:19:35', 1),
(36, 0, '', 2, 'rohan wordpress', '', 416, '', '', '9632587412', '', NULL, 'active', '1', '2020-12-15 01:19:38', 1),
(37, 0, '', 2, 'rohan wordpress', '', 410, '', '', '9874563258', '', NULL, 'active', '1', '2020-12-15 01:19:40', 1),
(39, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7412589635', '', NULL, 'active', '1', '2020-12-15 01:19:42', 1),
(41, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrr@gmail.com', '9865988950', '1236', NULL, 'active', '1', '2021-02-04 06:56:23', 0),
(42, 0, '', 2, 'rohan wordpress', '', 410, '', '', '7845121236', '', NULL, 'active', '1', '2020-12-15 01:36:10', 1),
(43, 0, '', 2, 'rohan wordpress', '', 410126, '', '', '7896547890', '', NULL, 'active', '21', '2020-12-15 01:36:55', 1),
(44, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rrrr@aa.com', '9874563210', '1237', NULL, 'active', '1', '2021-02-04 06:56:26', 0),
(45, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'rr@r.v', '9845632108', '1238', NULL, 'active', '1', '2021-02-04 06:56:30', 0),
(46, 1, '', 2, 'abc', 'kkk', 0, 'kolhapur', 'rer@n.nn', '7771111111', '1239', NULL, 'active', '1', '2021-02-04 06:56:34', 0),
(47, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'eee@d.c', '122', '1230', NULL, 'active', '1', '2021-02-04 06:56:40', 0),
(48, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'jjj@f.cm', '44444', '1231', NULL, 'active', '1', '2021-02-04 06:56:44', 0),
(49, 1, '', 2, 'rohan wordpress', 'kkk', 0, 'kolhapur', 'zzz@g.mm', '1555', '1232', NULL, 'active', '1', '2021-02-04 06:56:51', 0),
(50, 1, '', 2, 'Vinayak Baleghate', 'kolhapur', 0, 'kolhapur', 'vinayak@techenvision.in', '9874577777', '1234563', NULL, 'active', '1', '2021-02-04 06:56:56', 1),
(51, 1, '', 2, 'Rohan Patil', 'kolhapur', 0, 'kolhapur', 'rohan@techenvision.in', '7474747474', '12334', NULL, 'active', '1', '2021-02-04 06:57:05', 1),
(53, 1, '', 2, 'Sweta Mane', 'kolhapur', 0, 'kolhapur', 'sweta@gmail.com', '9988998899', 'sweta', NULL, 'active', '1', '2020-12-25 07:06:36', 1),
(55, 0, '', 3, 'kiran kadam', '', 1, '', '', '8282828282', '', NULL, 'active', '', '2020-12-25 11:27:36', 3),
(56, 0, '', 3, 'prathamesh chavan', '', 1, '', '', '7417417417', '', NULL, 'active', '', '2020-12-25 11:53:06', 3),
(58, 0, '', 3, 'Manikarnika', '', 1, '', '', '9888888888', '', NULL, 'active', '', '2021-01-01 12:06:39', 3),
(59, 0, '', 3, 'abc', '', 2, '', '', '7897897897', '', NULL, 'active', '', '2021-01-02 12:16:02', 3),
(60, 0, '', 3, 'sdf', '', 2, '', '', '9666666666', '', NULL, 'active', '', '2021-01-06 06:20:25', 3),
(61, 1, '', 2, 'Rahul Patil', 'kkk', 0, 'kolhapur', 'df@gm.com', '9333333333', '12356', NULL, 'active', '1', '2021-02-04 06:57:11', 1),
(62, 1, '', 2, 'Omkar Mane', 'kolhapur', 0, 'kolhapur', 'omkar@gmail.com', '9639639630', 'omkar', NULL, 'active', '1', '2021-01-15 07:06:03', 1),
(63, 0, '', 3, 'Sayali Gavali', '', 416012, '', '', '9512364789', '', NULL, 'active', '', '2021-01-20 06:37:07', 3),
(64, 0, '', 3, 'gkshadg', '', 596, '', '', '9685714254', '', NULL, 'active', '', '2021-01-27 13:27:51', 3),
(65, 0, '', 3, 'Sweta', '', 416012, '', '', '8698066940', '123456789', NULL, 'active', '', '2021-02-05 05:02:31', 3),
(66, 0, '', 3, 'aaa', '', 416, '', '', '9856325555', '12387', NULL, 'active', '', '2021-02-04 06:57:26', 3),
(67, 0, '', 3, 'bbbb', '', 416012, '', '', '7410000000', '123676', NULL, 'active', '', '2021-02-04 06:57:29', 3),
(68, 0, '', 3, 'cccc', '', 416012, '', '', '8698066920', '12365', NULL, 'active', '', '2021-02-04 06:57:33', 3),
(69, 0, '', 3, 'aaaa', '', 1425, '', '', '8520000000', '12343', NULL, 'active', '', '2021-02-04 06:57:37', 3),
(71, 0, '', 3, 'aaa', '', 416012, '', '', '8540000000', '123433', NULL, 'active', '', '2021-02-04 06:57:42', 3),
(72, 0, '', 3, 'aaa', '', 1445, '', '', '8521000000', '12345657', NULL, 'active', '', '2021-02-04 06:57:48', 3),
(73, 0, '', 3, 'jjj', '', 416012, '', '', '8536000000', '12354323', NULL, 'active', '', '2021-02-04 06:57:54', 3),
(74, 0, '', 3, 'ssss', '', 416, '', '', '8456320000', '12345432', NULL, 'active', '', '2021-02-04 06:58:00', 3),
(75, 0, '', 3, 'ddds', '', 11455, '', '', '8563200000', '1230989', NULL, 'active', '', '2021-02-04 06:58:04', 3),
(76, 0, '', 3, 'ssss', '', 416012, '', '', '7896540000', '123896', NULL, 'active', '', '2021-02-04 06:58:09', 3),
(77, 0, '', 3, 'asss', '', 416, '', '', '8965000000', '41256', NULL, 'active', '', '2021-01-29 12:20:19', 3),
(78, 0, '', 3, 'fgd', '', 416, '', '', '8563200001', '1236786', NULL, 'active', '', '2021-02-04 06:58:13', 3),
(79, 0, '', 3, 'ssss', '', 54646, '', '', '4563210000', '123456657', NULL, 'active', '', '2021-02-04 06:58:20', 3),
(80, 0, '', 3, 'tetert', '', 453, '', '', '8745454333', '66753456', NULL, 'active', '', '2021-02-04 06:58:23', 3),
(81, 0, '', 3, 'fdgddddddd', '', 4160, '', '', '8654123000', '6789098', NULL, 'active', '', '2021-02-04 06:58:31', 3),
(82, 0, '', 3, 'hfhg', '', 41, '', '', '8652365400', '12398986', NULL, 'active', '', '2021-02-04 06:58:37', 3),
(83, 0, '', 3, 'gfdh', '', 456, '', '', '8745600000', '1238967', NULL, 'active', '', '2021-02-04 06:58:41', 3),
(84, 0, '', 3, 'dsf', '', 456, '', '', '8965412000', '12398678', NULL, 'active', '', '2021-02-04 06:58:49', 3),
(85, 0, '', 3, 'dsaf', '', 456, '', '', '9685698000', '0012', NULL, 'active', '', '2021-01-29 12:43:59', 3),
(86, 0, '', 3, 'gdfgsd', '', 323, '', '', '1234686543', '32', NULL, 'active', '', '2021-01-29 12:47:02', 3),
(87, 0, '', 3, 'kjhgk', '', 456, '', '', '7896541236', '154', NULL, 'active', '', '2021-01-29 12:48:03', 3),
(88, 0, '', 3, 'gfhfg', '', 54534, '', '', '4563789654', '1238976', NULL, 'active', '', '2021-02-04 06:58:53', 3),
(89, 0, '', 3, 'dfs', '', 456, '', '', '8965412345', '12376754', NULL, 'active', '', '2021-02-04 06:58:57', 3),
(90, 0, '', 3, 'shweta P', '', 416012, '', '', '9527205327', '1234', NULL, 'active', '', '2021-01-29 13:01:35', 3),
(91, 0, '', 3, 'fsds', '', 456321, '', '', '9284355156', '1233423', NULL, 'active', '', '2021-02-04 06:59:03', 3),
(92, 0, '', 3, 'Sandip Chavan', '', 416012, '', '', '9898986565', '1234569', NULL, 'active', '', '2021-02-02 10:29:52', 3),
(93, 0, '', 3, 'Sachin Chavan', '', 416012, '', '', '9898988787', '789456', NULL, 'active', '', '2021-02-02 10:35:25', 3),
(94, 0, '', 3, 'Test', '', 416012, '', '', '9822114878', '987', NULL, 'active', '', '2021-02-03 05:11:10', 3),
(95, 0, '', 3, 'test', '', 123, '', '', '7894569874', '12345678', NULL, 'active', '', '2021-02-03 06:30:26', 3),
(96, 0, '', 3, 'test', '', 123654, '', '', '8888855555', '12345678', NULL, 'active', '', '2021-02-03 06:32:27', 3),
(99, 0, '', 3, 'test', '', 456321, '', '', '8965456545', '1233423 ', NULL, 'active', '', '2021-02-04 06:59:08', 3),
(108, 0, '', 3, 'gfsdja', '', 89754, '', '', '4563545555', '1234356767', NULL, 'active', '', '2021-02-04 06:59:13', 3),
(109, 0, '', 3, 'weedas', '', 123445, '', '', '1222223333', '2334456', NULL, 'active', '', '2021-02-03 07:40:03', 3),
(110, 0, '', 3, 'dfgsdg', '', 22334545, '', '', '1222335566', 'Priya@12', NULL, 'active', '', '2021-02-03 07:40:42', 3),
(111, 0, '', 3, 'rfewrfe', '', 456321, '', '', '8745965444', '1236546', NULL, 'active', '', '2021-02-04 06:59:18', 3),
(112, 0, '', 3, 'demotype', '', 1234, '', '', '1122334455', 'Priya@12', NULL, 'active', '', '2021-02-03 08:29:33', 3),
(113, 0, '', 3, 'sdfds', '', 1223, '', '', '8698569852', 'Priya@12', NULL, 'active', '', '2021-02-03 10:11:36', 3),
(114, 0, '', 3, 'textwecfh', '', 456321, '', '', '9898983232', '12345678', NULL, 'active', '', '2021-02-03 10:32:35', 3),
(115, 0, '', 3, 'fadsh', '', 98555556, '', '', '7896969696', '45d6dsfd', NULL, 'active', '', '2021-02-03 11:02:57', 3),
(116, 0, '', 3, 'fdtgfdg', '', 546546, '', '', '5644545545', '12365478', NULL, 'active', '', '2021-02-03 11:04:47', 3),
(117, 0, '', 3, 'fdsfds', '', 54545, '', '', '3323323232', 'Priya123', NULL, 'active', '', '2021-02-03 11:08:55', 3),
(118, 0, '', 3, 'sjdfhsa', '', 12344, '', '', '3232323232', 'Priya@123', NULL, 'active', '', '2021-02-03 11:09:44', 3),
(119, 0, '', 3, 'sdsaf', '', 12323, '', '', '7896578788', 'Priuya@1234', NULL, 'active', '', '2021-02-03 12:19:59', 3),
(120, 0, '', 3, 'xyz', '', 416012, '', '', '9822114879', 'Sp@99663', NULL, 'active', '', '2021-02-03 12:24:39', 3),
(121, 0, '', 3, 'yash', '', 416012, '', '', '7507877187', 'Sp@7507877187', NULL, 'active', '', '2021-02-04 06:17:39', 3),
(122, 0, '', 3, 'Tushar', '', 416012, '', '', '9696965454', 'Tushar@123456', NULL, 'active', '', '2021-02-04 10:07:58', 3),
(123, 0, '', 3, 'Rohini Patil', '', 416012, '', '', '8585855252', 'Rohini@1', NULL, 'active', '', '2021-02-08 06:48:08', 3),
(124, 0, '', 3, 'Mohini Rane', '', 416012, '', '', '7474744141', 'Mohini@123', NULL, 'active', '', '2021-02-08 12:46:50', 3),
(125, 0, '', 3, 'Ram', '', 416012, '', '', '4545454512', 'Ram@1234', NULL, 'active', '', '2021-02-08 12:54:24', 3),
(126, 0, '', 3, 'sssssssss', '', 333333, '', '', '6666666667', 'Aa@654321', NULL, 'active', '', '2021-02-08 13:06:59', 3),
(127, 0, '', 3, 'ddddd', '', 223333, '', '', '9999999977', 'Sa#1223344', NULL, 'active', '', '2021-02-08 13:10:36', 3),
(128, 0, '', 3, 'yhtyyujy', '', 655555, '', '', '3333333344', 'Ad@1234567', NULL, 'active', '', '2021-02-08 13:12:16', 3),
(129, 0, '', 3, 'dddddds', '', 333333, '', '', '5555555554', 'Asdf@1234', NULL, 'active', '', '2021-02-08 13:20:09', 3),
(157, 0, '', 3, 'fdsfdf', '', 344555, '', '', '8888888866', 'As#12234454', NULL, 'active', '', '2021-02-08 13:24:03', 3),
(158, 0, '', 3, 'gjhgjh', '', 416012, '', '', '6363632121', 'Lh@1234567', NULL, 'active', '', '2021-02-08 13:26:13', 3),
(159, 0, '', 3, 'dfdgf', '', 444444, '', '', '6565656363', 'Ki@12345667', NULL, 'active', '', '2021-02-08 13:31:20', 3),
(183, 0, '', 3, 'xdfss', '', 234565, '', '', '6969696969', 'Kj@12345', NULL, 'active', '', '2021-02-09 04:47:15', 3),
(184, 0, '', 3, 'dfdfdff', '', 222222, '', '', '6363636363', 'Lu#1234556', NULL, 'active', '', '2021-02-09 04:48:53', 3),
(185, 0, '', 3, 'SHWETA', '', 123456, '', '', '7057088404', 'Sp@7057088404', NULL, 'active', '', '2021-02-09 04:55:09', 3),
(186, 0, '', 3, 'ffffff', '', 233333, '', '', '5666666666', 'tyA@1233444545', NULL, 'active', '', '2021-02-09 06:23:43', 3),
(187, 0, '', 3, 'ereeeeee', '', 444444, '', '', '5555555555', 'As@123456778', NULL, 'active', '', '2021-02-09 06:30:17', 3),
(188, 0, '', 3, 'hyyyygjghj', '', 677777, '', '', '4555555555', 'Sw@133456777', NULL, 'active', '', '2021-02-09 06:33:14', 3),
(189, 0, '', 3, 'wwwwwwwww', '', 333333, '', '', '4444443333', 'Sa@121243567', NULL, 'active', '', '2021-02-09 06:36:09', 3),
(190, 0, '', 3, 'rrrrreeeee', '', 444444, '', '', '5555555444', 'Ds$1234567', NULL, 'active', '', '2021-02-09 06:37:22', 3),
(191, 0, '', 3, 'tttt', '', 888888, '', '', '7777777778', 'tttttttttttS@2334567', NULL, 'active', '', '2021-02-09 06:41:29', 3),
(192, 0, '', 3, 'Yashvardhan Powar', '', 416012, '', '', '4141414141', 'Yash@1234', NULL, 'active', '', '2021-02-10 05:33:18', 3),
(193, 0, '', 3, 'Yash Mathur', '', 454545, '', '', '4545455656', 'Yash2123456', NULL, 'active', '', '2021-02-10 10:48:39', 3),
(194, 0, '', 3, 'Megha', '', 416012, '', '', '7533577533', 'Jik@12345678', NULL, 'active', '', '2021-02-10 10:50:37', 3),
(195, 0, '', 3, 'sssss', '', 455566, '', '', '8686868686', 'Ass@12334545', NULL, 'active', '', '2021-02-10 10:54:23', 3),
(196, 0, '', 3, 'fffff', '', 234255, '', '', '6677778888', 'Jesss@123456', NULL, 'active', '', '2021-02-10 10:57:26', 3),
(197, 0, '', 3, 'jjjjj', '', 666666, '', '', '2345678765', 'Khghg@12345', NULL, 'active', '', '2021-02-10 11:13:07', 3),
(198, 0, '', 3, 'ghhhhghg', '', 455666, '', '', '3454567788', 'Kjjhh@1234566', NULL, 'active', '', '2021-02-10 11:14:37', 3),
(203, 0, '', 3, 'hhjjh', '', 344545, '', '', '3345456687', 'Sdf@1223454', NULL, 'active', '', '2021-02-10 11:32:37', 3),
(204, 0, '', 3, 'GHDS', '', 435535, '', '', '3456543421', 'Sddd@12345566', NULL, 'active', '', '2021-02-10 11:35:39', 3),
(205, 0, '', 3, 'gfh', '', 0, '', '', '', '', NULL, 'active', '', '2021-02-10 11:42:21', 3),
(206, 0, '', 3, 'rrttr', '', 545355, '', '', '4334566777', 'Sddd@123456777', NULL, 'active', '', '2021-02-10 11:42:57', 3),
(207, 0, '', 3, 'sfdaf', '', 433444, '', '', '3544566767', 'Sdd3#45545456', NULL, 'active', '', '2021-02-10 11:49:59', 3),
(208, 0, '', 3, 'hgdh', '', 555555, '', '', '5433344545', 'Kj@12345455', NULL, 'active', '', '2021-02-10 11:56:20', 3),
(209, 0, '', 3, 'rerrt', '', 455655, '', '', '6775556555', 'Lk@123454556', NULL, 'active', '', '2021-02-10 12:20:19', 3),
(210, 0, '', 3, 'jhhjsdhgsd', '', 567665, '', '', '5678987654', 'Ki@1122334556', NULL, 'active', '', '2021-02-10 12:24:11', 3),
(211, 0, '', 3, 'yyyy', '', 556565, '', '', '6555545543', 'S@a34556677', NULL, 'active', '', '2021-02-10 12:25:35', 3),
(212, 0, '', 3, 'fds', '', 554555, '', '', '5656434423', 'Lk@123344555', NULL, 'active', '', '2021-02-10 12:31:16', 3),
(213, 0, '', 3, 'dfsg', '', 435655, '', '', '3457786554', 'Lj@1234545555', NULL, 'active', '', '2021-02-10 12:33:33', 3),
(214, 0, '', 3, 'ghsdaf', '', 666666, '', '', '3454637462', 'Kghds@4235', NULL, 'active', '', '2021-02-10 13:33:43', 3),
(215, 0, '', 3, 'cvx', '', 435235, '', '', '5463456446', 'Kdshafsg', NULL, 'active', '', '2021-02-10 13:37:24', 3),
(216, 0, '', 3, 'dfs', '', 546346, '', '', '2345787654', 'dcfS@565', NULL, 'active', '', '2021-02-10 13:38:32', 3),
(217, 1, '', 2, 'rohan wordpress', 'kolhapur', 0, 'kolhapur', 'manisha@gmail.com', '4142453521', 'Ks@123445', NULL, 'active', '1', '2021-02-11 06:44:37', 1),
(220, 1, '', 2, 'Rohan Velhal', 'Shahupuri, Kolhapur', 416012, 'Kolhapur', 'rohan@gmail.com', '8484888489', 'Ki@1234556', NULL, 'active', '1', '2021-02-16 06:15:15', 1),
(222, 0, '', 3, 'sadfs', '', 444444, '', '', '6655534444', 'Ss@12344556', NULL, 'active', '', '2021-02-11 08:23:55', 3),
(223, 0, '', 3, 'dfgdf', '', 555565, '', '', '6454434545', 'Ki@445623547', NULL, 'active', '', '2021-02-11 08:40:52', 3),
(224, 0, '', 3, 'Komal Kadam', '', 416012, '', '', '9876789877', 'Ko@123454566', NULL, 'active', '', '2021-02-11 10:39:56', 3),
(225, 0, '', 3, 'Kiran Mane', '', 416012, '', '', '9874587458', 'Li@123354', NULL, 'active', '', '2021-02-11 10:46:04', 3),
(226, 0, '', 3, 'Swapnil Joshi', '', 416012, '', '', '7276034878', 'Sj@1234', NULL, 'active', '', '2021-02-12 05:22:46', 3),
(227, 0, '', 3, 'Prathamesh Joshi', '', 416012, '', '', '7798025835', 'Pratham@1', NULL, 'active', '', '2021-02-12 06:03:51', 3),
(228, 0, '', 3, 'fgy', '', 654323, '', '', '8765342345', 'Li7786@', NULL, 'active', '', '2021-02-12 06:10:39', 3),
(229, 0, '', 3, 'ghjgk', '', 674564, '', '', '8907867656', '99999999', NULL, 'active', '', '2021-02-12 06:12:19', 3),
(230, 0, '', 3, 'ghhsafk', '', 345543, '', '', '3455433455', 'ki8765434', NULL, 'active', '', '2021-02-12 06:17:17', 3),
(231, 0, '', 3, 'drt', '', 444444, '', '', '3445565444', 'Ki678', NULL, 'active', '', '2021-02-12 06:30:15', 3),
(232, 0, '', 3, 'dffgsd', '', 544356, '', '', '4344344444', 'fgdf45654', NULL, 'active', '', '2021-02-12 06:32:37', 3),
(233, 0, '', 3, 'rtt', '', 456443, '', '', '5464656575', '12', NULL, 'active', '', '2021-02-12 06:33:08', 3),
(234, 0, '', 3, 'sghf', '', 766767, '', '', '9878765667', 'g8765', NULL, 'active', '', '2021-02-12 06:37:14', 3),
(235, 0, '', 3, 'fdgfsd', '', 355655, '', '', '5554544544', 'fgfgA@12233', NULL, 'active', '', '2021-02-12 07:15:32', 3),
(236, 0, '', 3, 'Yash Kulkarni', '', 416013, '', '', '7276094878', '123456', NULL, 'active', '', '2021-02-12 09:53:50', 3),
(237, 0, '', 3, 'kaustubh', '', 416013, '', '', '7276054878', '123456', NULL, 'active', '', '2021-02-12 10:13:02', 3),
(238, 0, '', 3, '+@@@@', '', 416016, '', '', '7276064878', '12345678', NULL, 'active', '', '2021-02-12 13:36:35', 3),
(239, 0, '', 3, '%%^^^', '', 416012, '', '', '7276074878', '12345678', NULL, 'active', '', '2021-02-12 13:40:44', 3),
(240, 0, '', 3, 'abc', '', 416012, '', '', '8585856565', 'Pa@12345', NULL, 'active', '', '2021-02-14 09:20:19', 3),
(241, 0, '', 3, 'aa', '', 416012, '', '', '4444444444', 'aaaaaaaa', NULL, 'active', '', '2021-02-14 10:48:55', 3),
(242, 0, '', 3, 'Aditya', '', 416018, '', '', '7507877188', 'Sp@12345', NULL, 'active', '', '2021-02-15 05:15:03', 3),
(243, 1, '', 2, 'shweta E', 'Padmini apartment,sHAHUPUIRI', 416018, 'KOLHAPUR', 'sve@gmail.com', '9822114889', 'Sp@12345', NULL, 'active', '1', '2021-02-15 05:52:19', 1),
(244, 0, '', 3, 'aaa', '', 422333, '', '', '8765433222', 'Ki@hsdjsj444', NULL, 'active', '', '2021-02-16 05:08:04', 3),
(245, 0, '', 3, 'fff', '', 417667, '', '', '9867645556', 'sssA@122', NULL, 'active', '', '2021-02-16 10:02:49', 3),
(246, 0, '', 3, 'Gayatri', '', 416012, '', '', '9822114880', 'Sp@12345', NULL, 'active', '', '2021-02-16 12:12:52', 3),
(247, 0, '', 3, 'Druv Shinde', '', 416012, '', '', '8484888987', 'Ki@1234556', NULL, 'active', '', '2021-02-17 12:43:34', 3),
(248, 0, '', 3, 'sdfsd', '', 343442, '', '', '2344342343', 'gdf34324534', NULL, 'active', '', '2021-02-17 12:56:33', 3),
(249, 0, '', 3, 'gsdgsd', '', 676767, '', '', '5675345455', 'Kiggg@1234545', NULL, 'active', '', '2021-02-17 13:07:44', 3),
(250, 0, '', 3, 'hsgak', '', 356565, '', '', '7346127834', 'jh325613143', NULL, 'active', '', '2021-02-17 13:15:31', 3),
(251, 0, '', 3, 'xyz', '', 416012, '', '', '9822114899', 'xyz@1234', NULL, 'active', '', '2021-02-18 10:15:58', 3),
(252, 0, '', 3, 'hsdakjfhasdjkl', '', 343245, '', '', '9867543545', 'P@asdf1234', NULL, 'active', '', '2021-02-19 07:42:59', 3),
(253, 0, '', 3, 'ssd', '', 545454, '', '', '5464564666', 'gghgh343443', NULL, 'active', '', '2021-02-19 07:52:33', 3),
(254, 0, '', 3, 'sdfds', '', 343423, '', '', '3243423423', 'fgffg23423', NULL, 'active', '', '2021-02-19 08:12:13', 3),
(255, 0, '', 3, 'Manisha Kulkarni', '', 416012, '', '', '7798025825', 'Manisha@123', NULL, 'active', '', '2021-02-19 09:49:20', 3),
(256, 0, '', 3, 'Ramesh Kore', '', 416012, '', '', '8421751396', 'Ramesh@123', NULL, 'active', '', '2021-02-20 11:22:54', 3),
(257, 0, '', 3, 'asdsdsd', '', 344324, '', '', '3423423434', 'fdgfd34534', NULL, 'active', '', '2021-02-20 13:38:04', 3),
(258, 0, '', 3, 'abc', '', 416012, '', '', '7412587412', 'Ki@12345', NULL, 'active', '', '2021-02-21 07:05:22', 3),
(259, 0, '', 3, 'Neha Rane', '', 416015, '', '', '8698066910', 'Ki@123456', NULL, 'active', '', '2021-02-22 07:22:59', 3),
(260, 0, '', 3, 'fgsdg', '', 567567, '', '', '8698066930', 'gfgfd43534534', NULL, 'active', '', '2021-02-22 05:38:49', 3),
(261, 0, '', 3, 'Prakash Ilage', '', 416012, '', '', '8698066970', 'Ki@12345', NULL, 'active', '', '2021-02-22 08:31:59', 3),
(262, 0, '', 3, 'Raju Patel', '', 416012, '', '', '8698066945', 'Ki@12345', NULL, 'active', '', '2021-02-26 11:30:29', 3),
(263, 0, '', 3, 'Ramesh Jadhav', '', 416012, '', '', '8698066946', 'Ki@12345', NULL, 'active', '', '2021-02-26 11:52:57', 3);

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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile_master`
--

INSERT INTO `userprofile_master` (`userprofileid`, `user_id`, `profile_submitted`, `user_name`, `user_pincode`, `user_mobile`, `user_password`, `parentname`, `birthdate`, `emailid`, `standard`, `schoolcollegename`, `address`, `pincode`, `fullname`, `alternatemobno`, `gender`, `cityid`, `districtid`, `stateid`, `profile_image`, `created_date`) VALUES
(2, 220, 1, 'Rohan Velhal', '416012', '8484888489', 'Ki@1234556', 'Mohan', '2015-11-11', 'demo@gmail.com', 5, 'SM Lohiya', 'Kolhapur', '', 'Rohan Velhal', '8745965412', 1, 'Kolhapur', 'Kolhapur', 22, 'profile_image_220_1613565686.png', '2021-02-16 04:24:46'),
(4, 222, 1, 'sadfs', '444444', '6655534444', 'Ss@12344556', 'sghdad', '2010-02-02', 'dsaf@gmail.com', 4, 'gkg', 'ghfhdf, kolhapur', '444444', 'sadfs', '7896541236', 1, '1', '1', 22, '', '2021-02-11 08:23:55'),
(5, 223, 1, 'dfgdf', '555565', '6454434545', 'Ki@445623547', 'sdfg', '2017-05-30', 'manish@gmail.com', 5, 'kkk', 'kkk', '555565', 'dfgdf', '4343545666', 1, '1', '1', 22, 'profile_image_223_1613036680.jpg', '2021-02-11 08:40:52'),
(6, 224, 0, 'Komal Kadam', '416012', '9876789877', 'Ko@123454566', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-11 10:39:57'),
(7, 225, 1, 'Kiran Mane', '416012', '9874587458', 'Li@123354', 'Ramesh Mane', '2013-02-05', 'kiran@gmail.com', 8, 'English Model School,kolhapur', 'kkk', '410012', 'Kiran Mane', '7854785478', 1, '1', '1', 22, 'profile_image_225_1613040466.jpg', '2021-02-11 10:46:04'),
(8, 226, 1, 'Swapnil Joshi', '416012', '7276034878', 'Sj@1234', 'Manish Joshi', '2008-06-17', 'Manish@gmail.com', 5, 'S.M. Lohiya School ,Kolhapur', 'Kolhapur', '416012', 'Swapnil Joshi', '9874587458', 1, '1', '1', 22, 'profile_image_226_1613109176.jpg', '2021-02-12 05:22:46'),
(9, 227, 0, 'Prathamesh Joshi', '416012', '7798025835', 'Pratham@1', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:03:51'),
(10, 228, 0, 'fgy', '654323', '8765342345', 'Li7786@', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:10:39'),
(11, 229, 0, 'ghjgk', '674564', '8907867656', '99999999', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:12:19'),
(12, 230, 0, 'ghhsafk', '345543', '3455433455', 'ki8765434', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:17:17'),
(13, 231, 0, 'drt', '444444', '3445565444', 'Ki678', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:30:15'),
(14, 232, 0, 'dffgsd', '544356', '4344344444', 'fgdf45654', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:32:37'),
(15, 233, 0, 'rtt', '456443', '5464656575', '12', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:33:08'),
(16, 234, 0, 'sghf', '766767', '9878765667', 'g8765', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 06:37:14'),
(17, 235, 0, 'fdgfsd', '355655', '5554544544', 'fgfgA@12233', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 07:15:32'),
(18, 236, 1, 'Yash Kulkarni', '416013', '7276094878', '123456', 'Vilas', '2014-01-24', 'yash@gmail.com', 13, 'PPGH', 'xyz road', '416013', 'Yash Kulkarni', '7276047878', 1, '1', '1', 22, '', '2021-02-12 09:53:50'),
(19, 237, 0, 'kaustubh', '416013', '7276054878', '123456', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 10:13:02'),
(20, 238, 0, '+@@@@', '416016', '7276064878', '12345678', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 13:36:35'),
(21, 239, 0, '%%^^^', '416012', '7276074878', '12345678', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-12 13:40:44'),
(22, 240, 1, 'abc', '416012', '8585856565', 'Pa@12345', 'bca', '2018-02-14', 'abc@gmail.com', 6, 'pg', 'Kolhapur', '416012', 'abc', '9874563211', 1, '1', '1', 22, '', '2021-02-14 09:20:19'),
(23, 241, 1, 'aa', '416012', '4444444444', 'aaaaaaaa', 'bbbb', '2021-02-11', 'aaa@gmail.com', 5, 'hhh', 'kkk', '416012', 'aabbb', '9874562144', 1, '1', '1', 22, 'profile_image_241_1613305157.jpg', '2021-02-14 09:28:39'),
(24, 242, 1, 'Aditya', '416018', '7507877188', 'Sp@12345', 'yash', '2006-01-16', 'sve@gmail.com', 14, 'SM', 'Yash plaza', '416018', 'Aditya', '9822114878', 2, '1', '1', 22, 'profile_image_242_1613367223.png', '2021-02-15 05:15:03'),
(25, 243, 1, 'shweta E', '416018', '9822114889', 'Sp@12345', 'Vilas', '2021-02-15', 'Yash@gmail.com', 3, 'Kolhapur Highschool Kolhapur', 'Rajarampuri', '416018', 'shweta E', '9822114888', 1, '1', '1', 22, '', '2021-02-15 00:27:31'),
(26, 244, 0, 'aaa', '422333', '8765433222', 'Ki@hsdjsj444', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '0', '0', 0, '', '2021-02-16 05:08:04'),
(27, 245, 1, 'fff', '417667', '9867645556', 'sssA@122', 'dfdf', '2021-02-02', 'manish@gmail.com', 3, 'fff', 'kkk', '', 'fff', '8698066956', 1, 'kolhapur', 'Kolhapur', 22, 'profile_image_245_1613470431.png', '2021-02-16 10:02:49'),
(28, 246, 1, 'Gayatri', '416012', '9822114880', 'Sp@12345', 'ddd', '2021-01-01', '', 0, '', '', '416012', 'Gayatri', '9822114884', 0, '', '', 0, '', '2021-02-16 12:12:53'),
(29, 247, 1, 'Druv Shinde', '416012', '8484888987', 'Ki@1234556', 'Vasant', '2017-12-12', 'kiran@gmail.com', 1, 'nursary', 'Kolhapur', '', 'Druv Shinde', '8975645246', 1, 'kolhapur', 'Kolhapur', 22, 'profile_image_247_1613565978.jpg', '2021-02-17 12:43:34'),
(30, 248, 1, 'sdfsd', '343442', '2344342343', 'gdf34324534', 'dfgd', '2018-01-31', 'manish@gmail.com', 1, 'dffd', 'kkk', '', 'sdfsd', '2344342343', 2, 'kolhapur', 'cvxc', 2, '', '2021-02-17 12:56:33'),
(31, 249, 1, 'gsdgsd', '676767', '5675345455', 'Kiggg@1234545', 'hjkl', '2018-02-06', 'manish@gmail.com', 3, 'dfsd', 'kolhapur', '', 'gsdgsd', '4563245554', 2, 'kolhapur', 'Kolhapur', 22, '', '2021-02-17 13:07:44'),
(32, 250, 0, 'hsgak', '356565', '7346127834', 'jh325613143', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', '2021-02-17 13:15:31'),
(33, 251, 1, 'xyz', '416012', '9822114899', 'xyz@1234', 'vilas', '2018-02-18', 'xyz@gmail.com', 1, 'ppgh', 'yash plaza', '', 'xyz', '9822114889', 1, '123', 'kolhapur12333', 22, '', '2021-02-18 10:15:58'),
(34, 252, 1, 'hsdakjfhasdjkl', '343245', '9867543545', 'P@asdf1234', 'dsf', '2018-02-07', 'manish@gmail.com', 12, 'xdsdff', 'kkk', '', 'hsdakjfhasdjkl', '7856411232', 2, 'kolhapur', 'kolhapur', 18, '', '2021-02-19 07:42:59'),
(35, 253, 1, 'ssd', '545454', '5464564666', 'gghgh343443', 'df', '2018-02-07', 'manish@gmail.com', 2, 'fgdf', 'kkk', '', 'ssd', '7898654411', 1, 'kolhapur', 'kolhapur', 22, '', '2021-02-19 07:52:33'),
(36, 254, 1, 'sdfds', '343423', '3243423423', 'fgffg23423', 'fdf', '2018-02-09', 'manish@gmail.com', 11, 'sdgsd', 'kkk', '', 'sdfds', '7896541233', 1, 'kolhapur', 'kolhapur', 15, '', '2021-02-19 08:12:13'),
(37, 255, 1, 'Manisha Kulkarni', '416012', '7798025825', 'Manisha@123', 'Kiran Kulkarni', '2015-07-09', 'manish@gmail.com', 7, 'ppg', 'Kolhapur', '', 'Manisha Kulkarni', '9874563210', 2, 'kolhapur', 'kolhapur', 22, 'profile_image_255_1613728321.png', '2021-02-19 09:49:20'),
(38, 256, 1, 'Ramesh Kore', '416012', '8421751396', 'Ramesh@123', 'Sandip Kore', '2014-07-09', 'manish@gmail.com', 6, 'Maharashtra Highschool', 'Kolhapur', '', 'Ramesh Kore', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_256_1613820293.png', '2021-02-20 11:22:54'),
(39, 257, 0, 'asdsdsd', '344324', '3423423434', 'fdgfd34534', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', '2021-02-20 13:38:04'),
(40, 258, 1, 'abc', '416012', '7412587412', 'Ki@12345', 'aa', '2013-06-12', 'aaa@gmail.com', 6, 'sm', 'Kolhapur', '', 'abc', '9874563210', 1, 'Kolhapur', 'Kolhapur', 22, 'profile_image_258_1613891266.jpg', '2021-02-21 07:05:23'),
(41, 259, 1, 'asdf', '416015', '8698066910', 'Ki@123456', 'Manish', '2015-02-17', 'manish@gmail.com', 5, 'ppg', 'Kolhapur', '', 'Neha Rane', '7456552121', 2, 'kolhapur', 'kolhapur', 22, 'profile_image_259_1613978579.png', '2021-02-22 04:58:06'),
(42, 260, 0, 'fgsdg', '567567', '8698066930', 'gfgfd43534534', '', '0000-00-00', '', 0, '', '', '', '', '', 0, '', '', 0, '', '2021-02-22 05:38:50'),
(43, 261, 1, 'Prakash Ilage', '416012', '8698066970', 'Ki@12345', 'Tukaram', '2017-06-13', 'manish@gmail.com', 1, 'sm', 'Kolhapur', '', 'Prakash Ilage', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_261_1613982851.png', '2021-02-22 08:31:59'),
(44, 262, 1, 'Raju Patel', '416012', '8698066945', 'Ki@12345', 'Manish', '2016-02-17', 'manish@gmail.com', 6, 'SM', 'kolhapur', '', 'Raju Patel', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_262_1614339172.png', '2021-02-26 11:30:29'),
(45, 263, 1, 'Ramesh Jadhav', '416012', '8698066946', 'Ki@12345', 'Umesh', '2016-06-15', 'manish@gmail.com', 6, 'SM', 'Kolhapur', '', 'Ramesh Jadhav', '9874563210', 1, 'kolhapur', 'kolhapur', 22, 'profile_image_263_1614340427.png', '2021-02-26 11:52:58');

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
(39, 263, 7, '36', '3', '2021-02-26 11:54:24'),
(40, 263, 7, '37', '1', '2021-02-26 11:54:24'),
(41, 263, 7, '38', '1', '2021-02-26 11:54:24'),
(42, 263, 7, '39', 'On the afternoon of August 3, 1914, two days after declaring war on Russia, Germany declares war on France, moving ahead with a long-held strategy, conceived by the former chief of staff of the German army, Alfred von Schlieffen, for a two-front war again', '2021-02-26 11:54:24'),
(43, 263, 7, '40', '1994', '2021-02-26 11:54:24'),
(44, 263, 7, '67', '1', '2021-02-26 11:54:24');

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
(3, 262, 7, 6, 3, 50.00);

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
  MODIFY `admincheck_answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `competitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `competitionquizsubject`
--
ALTER TABLE `competitionquizsubject`
  MODIFY `quizsubjectid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `competitiontype`
--
ALTER TABLE `competitiontype`
  MODIFY `competitiontypeid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `competition_uploadfile_submit`
--
ALTER TABLE `competition_uploadfile_submit`
  MODIFY `uploadfileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
  MODIFY `dynamiccompetitionid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
  MODIFY `pointsid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tabcompetition`
--
ALTER TABLE `tabcompetition`
  MODIFY `tabinputtextid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `userprofile_master`
--
ALTER TABLE `userprofile_master`
  MODIFY `userprofileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `userquizsubmit`
--
ALTER TABLE `userquizsubmit`
  MODIFY `userquizsubmitid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `userscore_master`
--
ALTER TABLE `userscore_master`
  MODIFY `userscore_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `winnerid` bigint(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
