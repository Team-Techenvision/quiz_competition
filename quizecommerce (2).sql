-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 02:29 PM
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
-- Database: `quizecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `content_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `language_id` varchar(255) NOT NULL,
  `headline` text NOT NULL,
  `icon` text NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` varchar(220) NOT NULL,
  `account_table_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adv_id` varchar(100) NOT NULL,
  `add_page` varchar(100) DEFAULT NULL,
  `adv_position` int(11) NOT NULL,
  `adv_code` text NOT NULL,
  `adv_code2` text,
  `adv_code3` text,
  `adv_url` varchar(200) DEFAULT NULL,
  `adv_url2` varchar(200) DEFAULT NULL,
  `adv_url3` varchar(200) DEFAULT NULL,
  `adv_type` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_add`
--

CREATE TABLE `bank_add` (
  `bank_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `default_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` varchar(100) NOT NULL,
  `block_cat_id` varchar(100) DEFAULT NULL,
  `block_css` text,
  `block_position` int(11) DEFAULT NULL,
  `block_image` varchar(255) DEFAULT NULL,
  `block_style` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `block_cat_id`, `block_css`, `block_position`, `block_image`, `block_style`, `status`) VALUES
('FJQH2QJ2D43JIJ4', 'F9GNCBBPCOIEN67', 'null', 2, 'my-assets/image/block_image/ff3e3a547a2526c7af4d4c7dd711a34d.jpg', 1, 1),
('LL21UR7PWOZTRAC', 'F9GNCBBPCOIEN67', 'null', 1, 'my-assets/image/block_image/677297d226d79be0d2c5a5b3933d985d.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_image`, `website`, `status`) VALUES
('W6TGN2N16JUL5XA', 'Brand_1', 'my-assets/image/brand_image/f5c2659b1a25dd156c874a75fe2736a6.jpg', 'https://demo453464315.com', 1),
('1JDEMJYYXH1K7UQ', 'Brand_2', 'my-assets/image/brand_image/c43ee753324226b03a3747cdfaa532cf.jpg', 'https://demo453464315.com', 1),
('T36ZSIXTRZVPVEM', 'Brand_3', 'my-assets/image/brand_image/c85ecaefe52828ab5c7d7a92c31029ac.jpg', 'https://demo453464315.com', 1),
('R77CKBVFCB76UO9', 'Brand_4', 'my-assets/image/brand_image/0e64deaec1f10c3961fec5323a3bd20d.jpg', 'https://demo453464315.com', 1),
('Y9T6ZN4HRILB75N', 'Brand_5', 'my-assets/image/brand_image/bd32a563fca8302abecfc71eb936a3cb.jpg', 'https://demo453464315.com', 1),
('7XX8FG7MH7FGS87', 'Brand_6', 'my-assets/image/brand_image/e45791b012411f8d128814857e90e95b.jpg', 'https://demo453464315.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cardpayment`
--

CREATE TABLE `cardpayment` (
  `cardpayment_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `terminal_id` varchar(100) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_variant`
--

CREATE TABLE `category_variant` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `variant_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_variant`
--

INSERT INTO `category_variant` (`id`, `category_id`, `variant_id`, `created_at`, `updated_at`) VALUES
(1, 'F9GNCBBPCOIEN67', 'DBQD7B1AGBAUZSS', '2020-09-07 18:58:10', '2020-09-07 18:58:10'),
(2, 'F9GNCBBPCOIEN67', 'MMYXJ4FWYXAHXPJ', '2020-09-07 18:58:28', '2020-09-07 18:58:28'),
(3, 'F9GNCBBPCOIEN67', '3JJRT8TG11VD1FY', '2020-09-07 18:58:51', '2020-09-07 18:58:51'),
(4, 'OER22ASL88IWCCI', 'PWB7EHUPWMGWS56', '2021-03-02 07:02:54', '2021-03-02 07:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `check_out_id` varchar(100) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total_price` float NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_manger`
--

CREATE TABLE `cheque_manger` (
  `cheque_id` varchar(100) NOT NULL,
  `transection_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `store_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) NOT NULL,
  `cheque_no` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `transection_type` varchar(100) NOT NULL,
  `cheque_status` int(2) NOT NULL,
  `amount` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `color_backends`
--

CREATE TABLE `color_backends` (
  `id` int(11) NOT NULL,
  `color1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color5` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color_backends`
--

INSERT INTO `color_backends` (`id`, `color1`, `color2`, `color3`, `color4`, `color5`) VALUES
(1, '#072040', '#ffffff', '#efefef', '#0066ff', '#ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `color_frontends`
--

CREATE TABLE `color_frontends` (
  `id` int(11) NOT NULL,
  `theme` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `color1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color5` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color1_font` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color2_font` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color3_font` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color4_font` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color5_font` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color_frontends`
--

INSERT INTO `color_frontends` (`id`, `theme`, `color1`, `color2`, `color3`, `color4`, `color5`, `color1_font`, `color2_font`, `color3_font`, `color4_font`, `color5_font`) VALUES
(1, 'default', '#ffffff', '#ffffff', '#ffffff', '#008000', '#008000', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `company_id` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `status`) VALUES
('NOILG8EGCRXXBWUEUQBM', 'ABC', 'abc@gmail.com', 'New York, USA', '+00-000-00000', 'https://abc.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` varchar(100) NOT NULL,
  `coupon_name` varchar(100) NOT NULL,
  `coupon_discount_code` varchar(100) NOT NULL,
  `discount_amount` float DEFAULT NULL,
  `discount_percentage` varchar(20) DEFAULT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `discount_type` int(11) DEFAULT NULL COMMENT '1=Taka,2=Percentage',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_invoice`
--

CREATE TABLE `coupon_invoice` (
  `coupon_invoice_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `date_of_apply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `currency_info`
--

CREATE TABLE `currency_info` (
  `currency_id` varchar(255) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `currency_icon` text NOT NULL,
  `currency_position` int(11) NOT NULL DEFAULT '0',
  `convertion_rate` float NOT NULL,
  `default_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency_info`
--

INSERT INTO `currency_info` (`currency_id`, `currency_name`, `currency_icon`, `currency_position`, `convertion_rate`, `default_status`) VALUES
('ZFUXHWW83EM6QGP', 'INR', '₹', 0, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` varchar(250) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `customer_short_address` text NOT NULL,
  `customer_address_1` text NOT NULL,
  `customer_address_2` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `image` text,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL COMMENT '1=paid,2=credit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `first_name`, `last_name`, `customer_short_address`, `customer_address_1`, `customer_address_2`, `city`, `state`, `country`, `zip`, `customer_mobile`, `customer_email`, `image`, `password`, `token`, `company`, `status`) VALUES
('I1QWPK34FVMWOJY', 'aaaaaa bbbbb', 'aaaaaa', 'bbbbb', 'dhaka,Dhaka,Bangladesh,', '45435', '23423', 'dhaka', 'Dhaka', '18', '', '11212', 'abc@abc.com', NULL, '41d99b369894eb1ec3f461135132d8bb', '', '', 0),
('NSKXO3SNOWOWH7T', 'aaaa', NULL, '', '', '', '', '', '', '', '', '8698066333', '', NULL, 'Ki@12345', '', NULL, 0),
('R9AOQ7ZMJ8F6TN4', 'Rohan Patil', 'Rohan', 'Patil', 'Kolhapur', 'Kolhapur', '', 'Kolhapur', '', '', '1', '8698066952', 'rohan@gmail.com', 'http://localhost/quizecommerce/assets/dist/img/user.png', '1c78961d02a45ffb866cdc5003405eaa', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledger`
--

CREATE TABLE `customer_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `quotation_no` varchar(100) DEFAULT NULL,
  `order_no` varchar(100) NOT NULL,
  `receipt_no` varchar(100) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` text NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_order_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `shiping_id` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_method` varchar(100) NOT NULL,
  `total_bill` float NOT NULL,
  `order_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE `customer_order_details` (
  `c_o_d_id` varchar(100) NOT NULL,
  `customer_order_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `vat` float NOT NULL,
  `sell_price` float NOT NULL,
  `supplier_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily_closing`
--

CREATE TABLE `daily_closing` (
  `closing_id` varchar(255) NOT NULL,
  `store_id` varchar(255) NOT NULL,
  `last_day_closing` float NOT NULL,
  `cash_in` float NOT NULL,
  `cash_out` float NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` float NOT NULL,
  `adjustment` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_configuration`
--

CREATE TABLE `email_configuration` (
  `email_id` varchar(100) NOT NULL,
  `protocol` varchar(100) DEFAULT NULL,
  `mailtype` varchar(100) NOT NULL,
  `smtp_host` varchar(100) DEFAULT NULL,
  `smtp_port` int(11) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_configuration`
--

INSERT INTO `email_configuration` (`email_id`, `protocol`, `mailtype`, `smtp_host`, `smtp_port`, `sender_email`, `password`) VALUES
('1', 'smtp', 'html', 'ssl://smtp.googlemail.com', 465, 'bdinfoo.biz@gmail.com', 'bdinfo710785');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `image_gallery_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `img_thumb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`image_gallery_id`, `product_id`, `image_url`, `img_thumb`) VALUES
('4T2Y6X8OBDNRDFN', '79718542', 'my-assets/image/gallery/2f26bfa79fb236318e12df9261eb5bdd.jpg', 'null'),
('8P953K39Y9EYPH7', '31277867', 'my-assets/image/gallery/9cee04b2dc1aba2c2028d53b28d306d2.jpg', 'null'),
('OLCL66PCBHSUT32', '46415352', 'my-assets/image/gallery/06345cd078dcb5332c89a8aeec732892.jpg', 'null'),
('TM6MSMUL5N4WEIG', '14472766', 'my-assets/image/gallery/a995869723b1c8588c03c2a2f40848c0.jpg', 'null'),
('YVQPGV4EELVXMVY', '85299733', 'my-assets/image/gallery/b9f543684de34be7d69a465c752a7a43.jpg', 'null'),
('YYHOLAUVC9VT398', '83997459', 'my-assets/image/gallery/eb77b8424bdb5af8b4faf35a9505d0b3.jpg', 'null'),
('ZVAP2BWDH59OOKU', '99467578', 'my-assets/image/gallery/5cd3d2f82593b8776e81d0995f4dff2b.jpg', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(100) NOT NULL,
  `quotation_id` varchar(100) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `total_amount` float NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `total_discount` float DEFAULT NULL,
  `invoice_discount` float DEFAULT NULL COMMENT 'total_discount + invoice_discount',
  `service_charge` float DEFAULT NULL,
  `shipping_charge` tinyint(4) NOT NULL DEFAULT '0',
  `shipping_method` varchar(255) DEFAULT NULL,
  `paid_amount` float NOT NULL,
  `due_amount` float NOT NULL,
  `invoice_details` text,
  `status` int(2) NOT NULL,
  `invoice_status` int(11) NOT NULL COMMENT '1=shipped,2=cancel,3=pending,4=complete,5=processing,6=return'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `invoice_details_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `quantity` int(8) NOT NULL,
  `rate` float NOT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` float NOT NULL,
  `discount` float DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `phrase` text NOT NULL,
  `english` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`) VALUES
(1, 'user_profile', 'User Profile'),
(2, 'setting', 'Setting'),
(3, 'language', 'Language'),
(4, 'manage_users', 'Manage Users'),
(5, 'add_user', 'Add User'),
(6, 'manage_company', 'Manage Company'),
(7, 'web_settings', 'Web Settings'),
(8, 'manage_accounts', 'Manage Accounts'),
(9, 'create_accounts', 'Create Accounts'),
(10, 'manage_bank', 'Manage Bank'),
(11, 'add_new_bank', 'Add New Bank'),
(12, 'settings', 'Settings'),
(13, 'closing_report', 'Closing Report'),
(14, 'closing', 'Closing'),
(15, 'cheque_manager', 'Cheque Manager'),
(16, 'accounts_summary', 'Accounts Summary'),
(17, 'payment', 'Payment'),
(18, 'received', 'Received'),
(19, 'accounts', 'Accounts'),
(20, 'stock_report', 'Stock Report'),
(21, 'stock', 'Stock'),
(22, 'pos_invoice', 'POS Invoice'),
(23, 'manage_invoice', 'Manage Invoice '),
(24, 'new_invoice', 'New Invoice'),
(25, 'invoice', 'Invoice'),
(26, 'manage_purchase', 'Manage Purchase'),
(27, 'add_purchase', 'Add Purchase'),
(28, 'purchase', 'Purchase'),
(29, 'paid_customer', 'Paid Customer'),
(30, 'manage_customer', 'Manage Customer'),
(31, 'add_customer', 'Add Customer'),
(32, 'customer', 'Customer'),
(36, 'supplier_ledger', 'Supplier Ledger'),
(37, 'manage_supplier', 'Manage Supplier'),
(38, 'add_supplier', 'Add Supplier'),
(39, 'supplier', 'Supplier'),
(41, 'manage_product', 'Manage Product'),
(42, 'add_product', 'Add Product'),
(43, 'product', 'Product'),
(44, 'manage_category', 'Manage Category'),
(45, 'add_category', 'Add Category'),
(46, 'category', 'Category'),
(47, 'sales_report_product_wise', 'Sales Report (Product Wise)'),
(48, 'purchase_report', 'Purchase Report'),
(49, 'sales_report', 'Sales Report'),
(50, 'todays_report', 'Todays Report'),
(51, 'report', 'Report'),
(52, 'dashboard', 'Dashboard'),
(53, 'online', 'Online'),
(54, 'logout', 'Logout'),
(55, 'change_password', 'Change Password'),
(56, 'total_purchase', 'Total Purchase'),
(57, 'total_amount', 'Total Amount'),
(58, 'supplier_name', 'Supplier Name'),
(59, 'invoice_no', 'Invoice No'),
(60, 'purchase_date', 'Purchase Date'),
(61, 'todays_purchase_report', 'Todays Purchase Report'),
(62, 'total_sales', 'Total Sales'),
(63, 'customer_name', 'Customer Name'),
(64, 'sales_date', 'Sales Date'),
(65, 'todays_sales_report', 'Todays Sales Report'),
(66, 'home', 'Home'),
(67, 'todays_sales_and_purchase_report', 'Todays sales and purchase report'),
(68, 'total_ammount', 'Total Amount'),
(69, 'rate', 'Rate'),
(70, 'product_model', 'Product Model'),
(71, 'product_name', 'Product Name'),
(72, 'search', 'Search'),
(73, 'end_date', 'End Date'),
(74, 'start_date', 'Start Date'),
(75, 'total_purchase_report', 'Total Purchase Report'),
(76, 'total_sales_report', 'Total Sales Report'),
(77, 'total_seles', 'Total Sales'),
(78, 'all_stock_report', 'All Stock Report'),
(79, 'search_by_product', 'Search By Product'),
(80, 'date', 'Date'),
(81, 'print', 'Print'),
(82, 'stock_date', 'Stock Date'),
(83, 'print_date', 'Print Date'),
(84, 'sales', 'Sales'),
(85, 'price', 'Price'),
(86, 'sl', 'SL.'),
(87, 'add_new_category', 'Add new category'),
(88, 'category_name', 'Category Name'),
(89, 'save', 'Save'),
(90, 'delete', 'Delete'),
(91, 'update', 'Update'),
(92, 'action', 'Action'),
(93, 'manage_your_category', 'Manage your category '),
(94, 'category_edit', 'Category Edit'),
(95, 'status', 'Status'),
(96, 'active', 'Active'),
(97, 'inactive', 'Inactive'),
(98, 'save_changes', 'Save Changes'),
(99, 'save_and_add_another', 'Save And Add Another'),
(100, 'model', 'Model'),
(101, 'supplier_price', 'Supplier Price'),
(102, 'sell_price', 'Sell Price'),
(103, 'image', 'Image'),
(104, 'select_one', 'Select One'),
(105, 'details', 'Details'),
(106, 'new_product', 'New Product'),
(107, 'add_new_product', 'Add new product'),
(108, 'barcode', 'Barcode'),
(109, 'qr_code', 'Qr-Code'),
(110, 'product_details', 'Product Details'),
(111, 'manage_your_product', 'Manage your product'),
(112, 'product_edit', 'Product Edit'),
(113, 'edit_your_product', 'Edit your product'),
(114, 'cancel', 'Cancel'),
(115, 'excl_vat', 'Excl. Vat'),
(116, 'money', 'TK'),
(117, 'grand_total', 'Grand Total'),
(118, 'quantity', 'Qnty'),
(119, 'product_report', 'Product Report'),
(120, 'product_sales_and_purchase_report', 'Product sales and purchase report'),
(121, 'previous_stock', 'Previous Stock'),
(122, 'out', 'Out'),
(123, 'in', 'In'),
(124, 'to', 'To'),
(125, 'previous_balance', 'Previous Balance'),
(126, 'customer_address', 'Customer Address'),
(127, 'customer_mobile', 'Customer Mobile'),
(128, 'customer_email', 'Customer Email'),
(129, 'add_new_customer', 'Add new customer'),
(130, 'balance', 'Balance'),
(131, 'mobile', 'Mobile'),
(132, 'address', 'Address'),
(133, 'manage_your_customer', 'Manage your customer'),
(134, 'customer_edit', 'Customer Edit'),
(135, 'paid_customer_list', 'Manage your paid customer'),
(136, 'ammount', 'Amount'),
(137, 'customer_ledger', 'Customer Ledger'),
(138, 'manage_customer_ledger', 'Manage Customer Ledger'),
(139, 'customer_information', 'Customer Information'),
(140, 'debit_ammount', 'Debit Amount'),
(141, 'credit_ammount', 'Credit Amount'),
(142, 'balance_ammount', 'Balance Amount'),
(143, 'receipt_no', 'Receipt NO'),
(144, 'description', 'Description'),
(145, 'debit', 'Debit'),
(146, 'credit', 'Credit'),
(147, 'item_information', 'Item Information'),
(148, 'total', 'Total'),
(149, 'please_select_supplier', 'Please Select Supplier'),
(150, 'submit', 'Submit'),
(151, 'submit_and_add_another', 'Submit And Add Another One'),
(152, 'add_new_item', 'Add New Item'),
(153, 'manage_your_purchase', 'Manage your purchase'),
(154, 'purchase_edit', 'Purchase Edit'),
(155, 'purchase_ledger', 'Purchase Ledger'),
(156, 'invoice_information', 'Invoice Information'),
(157, 'paid_ammount', 'Paid'),
(158, 'discount', 'Dis/ Pcs'),
(159, 'save_and_paid', 'Save And Paid'),
(160, 'payee_name', 'Payee Name'),
(161, 'manage_your_invoice', 'Manage your invoice'),
(162, 'invoice_edit', 'Invoice Edit'),
(163, 'new_pos_invoice', 'New POS invoice'),
(164, 'add_new_pos_invoice', 'Add new pos invoice'),
(165, 'product_id', 'Product ID'),
(166, 'paid_amount', 'Paid'),
(167, 'authorised_by', 'Authorised By'),
(168, 'checked_by', 'Checked By'),
(169, 'received_by', 'Received By'),
(170, 'prepared_by', 'Prepared By'),
(171, 'memo_no', 'Memo No'),
(172, 'website', 'Website'),
(173, 'email', 'Email'),
(174, 'invoice_details', 'Invoice Details'),
(175, 'reset', 'Reset'),
(176, 'payment_account', 'Payment Account'),
(177, 'bank_name', 'Bank Name'),
(178, 'cheque_or_pay_order_no', 'Cheque/Pay Order No'),
(179, 'payment_type', 'Payment Type'),
(180, 'payment_from', 'Payment From'),
(181, 'payment_date', 'Payment Date'),
(182, 'add_received', 'Add Received'),
(183, 'cash', 'Cash'),
(184, 'cheque', 'Cheque'),
(185, 'pay_order', 'Pay Order'),
(186, 'payment_to', 'Payment To'),
(187, 'total_payment_ammount', 'Total Payment Report '),
(188, 'transections', 'Transections'),
(189, 'accounts_name', 'Accounts Name'),
(190, 'payment_report', 'Payment Report'),
(191, 'received_report', 'Income Report'),
(192, 'all', 'All'),
(193, 'account', 'Account'),
(194, 'from', 'From'),
(195, 'account_summary_report', 'Account Summary Report'),
(196, 'search_by_date', 'Search By Date'),
(197, 'cheque_no', 'Cheque No'),
(198, 'name', 'Name'),
(199, 'closing_account', 'Closing Account'),
(200, 'close_your_account', 'Close your account'),
(201, 'last_day_closing', 'Last Day Closing'),
(202, 'cash_in', 'Cash In'),
(203, 'cash_out', 'Cash Out'),
(204, 'cash_in_hand', 'Cash In Hand'),
(205, 'add_new_bank', 'Add New Bank'),
(206, 'day_closing', 'Day Closing'),
(207, 'account_closing_report', 'Account Closing Report'),
(208, 'last_day_ammount', 'Last Day Amount'),
(209, 'adjustment', 'Adjustment'),
(210, 'pay_type', 'Pay Type'),
(211, 'customer_or_supplier', 'Customer , Supplier Or Others'),
(212, 'transection_id', 'Transections ID'),
(213, 'accounts_summary_report', 'Accounts Summary Report'),
(214, 'bank_list', 'Bank List'),
(215, 'bank_edit', 'Bank Edit'),
(216, 'debit_plus', 'Debit (+)'),
(217, 'credit_minus', 'Credit (-)'),
(218, 'account_name', 'Account Name'),
(219, 'account_type', 'Account Type'),
(220, 'account_real_name', 'Account Real Name'),
(221, 'manage_account', 'Manage Account'),
(222, 'company_name', 'Company Name'),
(223, 'edit_your_company_information', 'Edit your company information'),
(224, 'company_edit', 'Company Edit'),
(225, 'admin', 'Admin'),
(226, 'user', 'User'),
(227, 'password', 'Password'),
(228, 'last_name', 'Last Name'),
(229, 'first_name', 'First Name'),
(230, 'add_new_user_information', 'Add new user information'),
(231, 'user_type', 'User Type'),
(232, 'user_edit', 'User Edit'),
(233, 'rtr', 'Right To Left -RTL'),
(234, 'ltr', 'Left To Right -LTR'),
(235, 'ltr_or_rtr', 'LTR/RTL'),
(236, 'footer_text', 'Footer Text'),
(237, 'favicon', 'Favicon'),
(238, 'logo', 'Logo'),
(239, 'update_setting', 'Update Setting'),
(240, 'update_your_web_setting', 'Update your web setting'),
(241, 'login', 'Login'),
(242, 'your_strong_password', 'Your strong password'),
(243, 'your_unique_email', 'Your unique email'),
(244, 'please_enter_your_login_information', 'Please enter your login information.'),
(245, 'update_profile', 'Update Profile'),
(246, 'your_profile', 'Your Profile'),
(247, 're_type_password', 'Re-Type Password'),
(248, 'new_password', 'New Password'),
(249, 'old_password', 'Old Password'),
(250, 'new_information', 'New Information'),
(251, 'old_information', 'Old Information'),
(252, 'change_your_information', 'Change your information'),
(253, 'change_your_profile', 'Change your profile'),
(254, 'profile', 'Profile'),
(255, 'wrong_username_or_password', 'Wrong User Name Or Password !'),
(256, 'successfully_updated', 'Successfully Updated.'),
(257, 'blank_field_does_not_accept', 'Blank Field Does Not Accept !'),
(258, 'successfully_changed_password', 'Successfully changed password.'),
(259, 'you_are_not_authorised_person', 'You are not authorised person !'),
(260, 'password_and_repassword_does_not_match', 'Passwor and re-password does not match !'),
(261, 'new_password_at_least_six_character', 'New Password At Least 6 Character.'),
(262, 'you_put_wrong_email_address', 'You put wrong email address !'),
(263, 'cheque_ammount_asjusted', 'Cheque amount adjusted. '),
(264, 'successfully_payment_paid', 'Successfully Payment Paid.'),
(265, 'successfully_added', 'Successfully Added.'),
(266, 'successfully_updated_2_closing_ammount_not_changeale', 'Successfully Updated -2. Note: Closing Amount Not Changeable.'),
(267, 'successfully_payment_received', 'Successfully Payment Received.'),
(268, 'already_inserted', 'Already Inserted !'),
(269, 'successfully_delete', 'Successfully Delete.'),
(270, 'successfully_created', 'Successfully Created.'),
(271, 'logo_not_uploaded', 'Logo not uploaded !'),
(272, 'favicon_not_uploaded', 'Favicon not uploaded !'),
(273, 'supplier_mobile', 'Supplier Mobile'),
(274, 'supplier_address', 'Supplier Address'),
(275, 'supplier_details', 'Supplier Details'),
(276, 'add_new_supplier', 'Add New Supplier'),
(277, 'manage_suppiler', 'Manage Supplier'),
(278, 'manage_your_supplier', 'Manage your supplier'),
(279, 'manage_supplier_ledger', 'Manage supplier ledger'),
(280, 'invoice_id', 'Invoice ID'),
(281, 'deposit_id', 'Deposite ID'),
(282, 'supplier_actual_ledger', 'Supplier Actual Ledger'),
(283, 'supplier_information', 'Supplier Information'),
(284, 'event', 'Event'),
(285, 'add_new_received', 'Add New Income'),
(286, 'add_payment', 'Add Payment'),
(287, 'add_new_payment', 'Add New Payment'),
(288, 'total_received_ammount', 'Total Received Amount'),
(289, 'create_new_invoice', 'Create New Invoice'),
(290, 'create_pos_invoice', 'Create POS Invoice'),
(291, 'total_profit', 'Total Profit'),
(292, 'monthly_progress_report', 'Monthly Progress Report'),
(293, 'total_invoice', 'Total Invoice'),
(294, 'account_summary', 'Account Summary'),
(295, 'total_supplier', 'Total Supplier'),
(296, 'total_product', 'Total Product'),
(297, 'total_customer', 'Total Customer'),
(298, 'supplier_edit', 'Supplier Edit'),
(299, 'add_new_invoice', 'Add New Invoice'),
(300, 'add_new_purchase', 'Add new purchase'),
(301, 'currency', 'Currency'),
(302, 'currency_position', 'Currency Position'),
(303, 'left', 'Left'),
(304, 'right', 'Right'),
(305, 'add_tax', 'Add Tax'),
(306, 'manage_tax', 'Manage Tax'),
(307, 'add_new_tax', 'Add new tax'),
(308, 'enter_tax', 'Enter Tax'),
(309, 'already_exists', 'Already Exists !'),
(310, 'successfully_inserted', 'Successfully Inserted.'),
(311, 'tax', 'Tax'),
(312, 'tax_edit', 'Tax Edit'),
(313, 'product_not_added', 'Product not added !'),
(314, 'total_tax', 'Total Tax'),
(315, 'manage_your_supplier_details', 'Manage your supplier details.'),
(316, 'invoice_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s                                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(317, 'thank_you_for_choosing_us', 'Thank you very much for choosing us.'),
(318, 'billing_date', 'Billing Date'),
(319, 'billing_to', 'Billing To'),
(320, 'billing_from', 'Billing From'),
(321, 'you_cant_delete_this_product', 'Sorry !!  You can\'t delete this product.This product already used in calculation system!'),
(322, 'old_customer', 'Old Customer'),
(323, 'new_customer', 'New Customer'),
(324, 'new_supplier', 'New Supplier'),
(325, 'old_supplier', 'Old Supplier'),
(326, 'credit_customer', 'Credit Customer'),
(327, 'account_already_exists', 'This Account Already Exists !'),
(328, 'edit_received', 'Edit Received'),
(329, 'you_are_not_access_this_part', 'You can not access this part !'),
(330, 'account_edit', 'Account Edit'),
(331, 'due', 'Due'),
(332, 'payment_edit', 'Payment Edit'),
(333, 'please_select_customer', 'Please select customer !'),
(334, 'profit_report', 'Profit Report (Invoice Wise)'),
(335, 'total_profit_report', 'Total profit report'),
(336, 'please_enter_valid_captcha', 'Please enter valid captcha.'),
(337, 'category_not_selected', 'Category not selected.'),
(338, 'supplier_not_selected', 'Supplier not selected.'),
(339, 'please_select_product', 'Please select product.'),
(340, 'product_model_already_exist', 'Product model already exist or file format is not correct !'),
(341, 'invoice_logo', 'Invoice Logo'),
(342, 'available_quantity', 'Ava. Qnty'),
(344, 'customer_details', 'Customer details'),
(345, 'manage_customer_details', 'Manage customer details.'),
(346, 'site_key', 'Captcha Site Key'),
(347, 'secret_key', 'Secret Key'),
(348, 'captcha', 'Captcha'),
(349, 'manage_your_credit_customer', 'Manage your credit  customer'),
(350, 'barcode_qrcode', 'Barcode/Qrcode'),
(351, 'barcode_qrcode_scan_here', 'Barcode OR QR code scan here '),
(352, 'please_add_walking_customer_for_default_customer', 'You are delete walking customer.Please add walking customer for default customer.'),
(353, 'stock_report_supplier_wise', 'Stock Report (Supplier Wise)'),
(354, 'stock_report_product_wise', 'Stock Report (Product Wise)'),
(355, 'in_ctn', 'In Ctn.'),
(356, 'out_ctn', 'Out Ctn.'),
(357, 'select_supplier', 'Select Supplier'),
(358, 'in_quantity', 'In Qnty'),
(359, 'out_quantity', 'Out Qnty'),
(360, 'in_taka', 'In Taka'),
(361, 'out_taka', 'Out Taka'),
(362, 'select_product', 'Select Product'),
(363, 'data_synchronizer', 'Data Synchronizer'),
(364, 'synchronize', 'Synchronizer'),
(365, 'backup_restore', 'Backup Restore'),
(366, 'synchronizer_setting', 'Synchronizer Setting'),
(367, 'hostname', 'Hostname'),
(368, 'user_name', 'User Name'),
(369, 'ftp_port', 'FTP Port'),
(370, 'ftp_debug', 'FTP Debug'),
(371, 'project_root', 'Project Root'),
(372, 'internet_connection', 'Internet connection'),
(373, 'outgoing_file', 'Outgoing file'),
(374, 'incoming_file', 'Incoming file'),
(375, 'available', 'Available'),
(376, 'not_available', 'Not Available'),
(377, 'data_upload_to_server', 'Data upload to server'),
(378, 'download_data_from_server', 'Download data from server'),
(379, 'data_import_to_database', 'Data import to database'),
(380, 'please_wait', 'Please wait'),
(381, 'ooops_something_went_wrong', 'Ooops something went wrong.'),
(382, 'ftp_setting', 'FTP setting'),
(383, 'please_try_again', 'Please try again'),
(384, 'save_successfully', 'Save successfully'),
(385, 'upload_successfully', 'Upload successfully'),
(386, 'unable_to_upload_file_please_check_configuration', 'Unable to upload file.Please check configuration.'),
(387, 'please_configure_synchronizer_settings', 'Please configure synchronizer settings'),
(388, 'download_successfully', 'Download successfully'),
(389, 'unable_to_download_file_please_check_configuration', 'Unable to download file.Please check configuration.'),
(390, 'data_import_first', 'Data import first.'),
(391, 'data_import_successfully', 'Data import successfully'),
(392, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data.Please check config or sql file.'),
(393, 'database_backup', 'Database backup'),
(394, 'file_information', 'File information'),
(395, 'filename', 'Filename'),
(396, 'size', 'Size'),
(397, 'backup_date', 'Backup date'),
(398, 'backup_now', 'Backup now'),
(399, 'restore_now', 'Restore now'),
(400, 'are_you_sure', 'Are you sure ?'),
(401, 'download', 'Download'),
(402, 'backup_successfully', 'Backup successfully'),
(403, 'restore_successfully', 'Restore successfully'),
(404, 'delete_successfully', 'Delete successfully'),
(405, 'backup_and_restore', 'Backup and Restore'),
(406, 'close', 'Close'),
(407, 'import_product_csv', 'Import Product (CSV)'),
(408, 'upload_csv_file', 'Upload CSV File'),
(411, 'supplier_id', 'Supplier ID'),
(412, 'category_id', 'Category ID'),
(413, 'file_data_format_is_not_correct', 'File format or data is not correct ! Please flollow the instruction.'),
(414, 'add_unit', 'Add Unit'),
(415, 'manage_unit', 'Manage Unit'),
(416, 'unit', 'Unit'),
(417, 'meter_m', 'Meter (M)'),
(418, 'piece_pc', 'Piece (Pc)'),
(419, 'kilogram_kg', 'Kilogram (Kg)'),
(420, 'select_unit', 'Select Unit'),
(421, 'no_tax', 'No Tax'),
(422, 'suppler_email', 'Supplier Email'),
(423, 'csv_file_informaion', 'CSV File Information'),
(424, 'stock_quantity', 'Stock'),
(425, 'out_of_stock', 'Out Of Stock'),
(426, 'phone', 'Phone'),
(427, 'you_can_not_buy_greater_than_available_cartoon', 'You can not sell greater than available quantity.'),
(428, 'total_discount', 'Total Discount'),
(429, 'if_you_update_purchase_first_select_supplier_then_product_and_then_quantity', 'If you update purchase.First select supplier then product and quantity.'),
(430, 'others', 'Others'),
(431, 'accounts_details_data', 'Accounts Details Data'),
(432, 'add_brand', 'Add Brand'),
(433, 'add_new_brand', 'Add new brand'),
(434, 'brand', 'Brand'),
(435, 'brand_image', 'Brand Image'),
(436, 'brand_name', 'Brand Name'),
(437, 'manage_brand', 'Manage Brand'),
(438, 'brand_edit', 'Brand Edit'),
(439, 'manage_your_brand', 'Manage your brand'),
(440, 'are_you_sure_want_to_delete', 'Are you sure want to delete ?'),
(441, 'variant', 'Variant'),
(442, 'add_variant', 'Add Variant'),
(443, 'manage_variant', 'Manage Variant'),
(444, 'add_new_variant', 'Add New Variant'),
(445, 'variant_name', 'Variant Name'),
(446, 'variant_edit', 'Variant Edit'),
(447, 'type', 'Type'),
(448, 'image_large', 'Image Large'),
(449, 'onsale', 'Offer'),
(450, 'yes', 'Yes'),
(451, 'no', 'No'),
(452, 'featured', 'Featured'),
(453, 'store_set', 'Store Set'),
(454, 'store_add', 'Store Add'),
(455, 'store_product', 'Store Product'),
(456, 'manage_store', 'Manage Store'),
(457, 'add_store', 'Add Store'),
(458, 'add_new_store', 'Add New Store'),
(459, 'store_name', 'Store Name'),
(460, 'store_address', 'Store Address'),
(461, 'manage_your_store', 'Manage your store'),
(462, 'store_edit', 'Store Edit'),
(463, 'store_product_transfer', 'Store Product Transfer'),
(465, 'manage_store_product', 'Manage Store Product'),
(466, 'manage_your_store_product', 'Manage your store product'),
(467, 'store_product_edit', 'Store Product Edit'),
(468, 'wearhouse_add', 'Warehouse Add'),
(469, 'wearhouse_transfer', 'Warehouse Transfer'),
(470, 'manage_wearhouse', 'Manage Warehouse'),
(471, 'wearhouse_set', 'Warehouse Set'),
(472, 'add_wearhouse', 'Add Warehouse'),
(473, 'add_new_wearhouse', 'Add New Warehouse'),
(474, 'wearhouse_name', 'Warehouse Name'),
(475, 'wearhouse_address', 'Warehouse Address'),
(476, 'manage_your_wearhouse', 'Manage your warehouse'),
(477, 'wearhouse_edit', 'Warehouse Edit'),
(478, 'transfer_wearhouse_product', 'Transfer warehouse product'),
(479, 'transfer_to', 'Transfer To'),
(480, 'wearhouse', 'Warehouse'),
(481, 'store', 'Store'),
(482, 'purchase_to', 'Purchase To'),
(483, 'product_and_supplier_did_not_match', 'Product and supplier did not match.'),
(484, 'please_select_wearhouse', 'Please select warehouse !'),
(485, 'product_is_not_available_please_purchase_product', 'Product not available.Please purchase product.'),
(486, 'please_select_store', 'Please select store'),
(487, 'store_transfer', 'Store Transfer'),
(488, 'add_new_unit', 'Add new unit'),
(489, 'unit_name', 'Unit Name'),
(490, 'unit_short_name', 'Unit Short Name'),
(491, 'manage_your_unit', 'Manage your unit'),
(492, 'unit_edit', 'Unit Edit'),
(493, 'gallery', 'Gallery'),
(494, 'add_image', 'Add Image'),
(495, 'manage_image', 'Manage Image'),
(496, 'add_new_image', 'Add new image'),
(497, 'manage_gallery_image', 'Manage gallery image'),
(498, 'image_edit', 'Image Edit'),
(499, 'tax_name', 'Tax Name'),
(500, 'manage_your_tax', 'Manage your tax'),
(501, 'tax_product_service', 'Tax Product Service'),
(502, 'add_tax_product_service', 'Add tax product service'),
(503, 'tax_percentage', 'Tax Percentage'),
(504, 'total_cgst', 'CGST'),
(505, 'total_sgst', 'SGST'),
(507, 'total_igst', 'IGST'),
(508, 'cat_image', 'Category Image'),
(509, 'parent_category', 'Parent category'),
(510, 'top_menu', 'Top Menu'),
(511, 'menu_position', 'Menu Position'),
(512, 'add_pos_invoice', 'Add POS Invoice'),
(513, 'customer_address_1', 'Address 1'),
(514, 'customer_address_2', 'Address 2'),
(515, 'city', 'City'),
(516, 'state', 'State'),
(517, 'country', 'Country'),
(518, 'zip', 'Zip'),
(519, 'transection_type', 'Transection Type'),
(520, 'product_ledger', 'Product Ledger'),
(521, 'transfer_report', 'Transfer Report'),
(522, 'store_to_store_transfer', 'Store To Store Transfer'),
(523, 'to_store', 'To Store'),
(524, 'store_to_warehouse_transfer', 'Store To Warehouse Transfer'),
(525, 'warehouse_to_store_transfer', 'Warehouse To Store Transfer'),
(526, 't_wearhouse', 'To Wearhouse'),
(527, 'warehouse_to_warehouse_transfer', 'Warehouse To Warehouse Transfer'),
(528, 'shop_manager', 'Shop Manager'),
(529, 'sales_man', 'Sales Man'),
(530, 'store_keeper', 'Store Keeper'),
(531, 'item', 'Item'),
(532, 'qnty', 'Qnty'),
(533, 'first', 'First'),
(534, 'last', 'Last'),
(535, 'next', 'Next'),
(536, 'prev', 'Previous'),
(537, '1', '1'),
(538, '2', '2'),
(539, '3', '3'),
(540, 'web_store', 'Web Store'),
(541, 'brand_id', 'Brand ID'),
(542, 'variant_id', 'Variant ID'),
(543, 'items', 'Items'),
(544, 'print_order', 'Print Order'),
(545, 'print_bill', 'Print Bill'),
(546, 'unpaid', 'Unpaid'),
(547, 'paid', 'Paid'),
(548, 'product_discount', 'Product Discount'),
(549, 'invoice_discount', 'Invoice Discount'),
(550, 'terminal', 'Terminal'),
(551, 'manage_terminal', 'Manage Terminal'),
(552, 'add_terminal', 'Add Terminal'),
(553, 'add_new_terminal', 'Add new terminal'),
(554, 'customer_care_phone_no', 'Customer Care Phone No'),
(555, 'terminal_bank_account', 'Terminal Bank Account'),
(556, 'terminal_company', 'Terminal Company'),
(557, 'terminal_name', 'Terminal Name'),
(558, 'manage_your_terminal', 'Manage your terminal'),
(559, 'terminal_edit', 'Terminal Edit'),
(560, 'full_paid', 'Full Paid'),
(561, 'card_no', 'Card NO'),
(562, 'card_type', 'Card Type'),
(563, 'tax_report_product_wise', 'Tax Report (Product Wise)'),
(564, 'tax_report_invoice_wise', 'Tax Report (Invoice Wise)'),
(565, 'software_settings', 'Software Settings'),
(566, 'social_link', 'Social Link'),
(567, 'advertisement', 'Advertisement'),
(568, 'contact_form', 'Contact Form'),
(569, 'update_your_social_link', 'Update your social link'),
(570, 'facebook', 'Facebook'),
(571, 'instagram', 'Instagram'),
(572, 'linkedin', 'Linkedin'),
(573, 'twitter', 'Twitter'),
(574, 'youtube', 'Youtube'),
(575, 'message', 'Message'),
(576, 'manage_contact', 'Manage contact'),
(577, 'manage_your_contact', 'Manage your contact'),
(578, 'update_contact_form', 'Update contact form'),
(579, 'update_your_contact_form', 'Update your contact form'),
(580, 'update_your_web_settings', 'Update your web setting'),
(581, 'google_map', 'Google Map'),
(582, 'about_us', 'About Us'),
(583, 'privacy_policy', 'Privacy Policy'),
(584, 'terms_condition', 'Terms and condition'),
(585, 'cat_icon', 'Category Icon'),
(586, 'add_slider', 'Add Slider'),
(587, 'manage_slider', 'Manage Slider'),
(588, 'update_your_slider', 'Update your slider'),
(589, 'slider_link', 'Slider Link'),
(590, 'slider_image', 'Slider Image'),
(591, 'slider_position', 'Slider Position'),
(592, 'update_slider', 'Update Slider'),
(593, 'manage_your_slider', 'Manage your slider'),
(594, 'successfully_inactive', 'Successfully Inactive'),
(595, 'successfully_active', 'Successfully active'),
(597, 'embed_code', 'Embed Code'),
(598, 'image_ads', 'Image Ads'),
(599, 'url', 'URL'),
(600, 'add_advertise', 'Add Advertisement'),
(601, 'add_new_advertise', 'Add new advertisement'),
(602, 'add_type', 'Ads Type'),
(603, 'ads_position', 'Ads Position'),
(604, 'add_page', 'Add Page'),
(605, 'ads_position_already_exists', 'Ads position already exists!'),
(606, 'manage_advertise', 'Manage Advertise'),
(607, 'manage_advertise_information', 'Manage advertise information'),
(609, 'update_advertise', 'Update Advertise'),
(610, 'add_block', 'Add Block'),
(611, 'manage_block', 'Manage Block'),
(612, 'block_position', 'Block Position'),
(613, 'block_style', 'Block Style'),
(614, 'block_css', 'Block Css'),
(615, 'add_new_block', 'Add new block'),
(616, 'block', 'Block'),
(617, 'manage_your_block', 'Manage your block'),
(618, 'block_edit', 'Block Edit'),
(619, 'add_product_review', 'Add Product Review'),
(620, 'manage_product_review', 'Manage Product Review'),
(621, 'product_review', 'Product Review'),
(622, 'comments', 'Comments'),
(623, 'reviewer_name', 'Reviewer Name'),
(624, 'product_review_edit', 'Product Review Edit'),
(625, 'add_subscriber', 'Add Subscriber'),
(626, 'add_new_subscriber', 'Add new subscriber'),
(627, 'subscriber', 'Subscriber'),
(628, 'manage_subscriber', 'Manage Subscriber'),
(629, 'manage_your_subscriber', 'Manage your subscriber'),
(630, 'subscriber_update', 'Subscriber Update'),
(631, 'apply_ip', 'Apply IP'),
(632, 'add_wishlist', 'Add Wishlist'),
(633, 'add_new_wishlist', 'Add new wishlist'),
(634, 'wishlist', 'Wishlist'),
(635, 'manage_wishlist', 'Manage Wishlist'),
(636, 'manage_your_wishlist', 'Manage your wishlist'),
(637, 'add_web_footer', 'Add Web Footer'),
(638, 'manage_web_footer', 'Manage Web Footer'),
(639, 'headlines', 'Headlines'),
(640, 'position', 'Position'),
(641, 'add_new_web_footer', 'Add new footer'),
(642, 'web_footer', 'Web Footer'),
(643, 'web_footer_update', 'Web Footer Update'),
(644, 'manage_your_web_footer', 'Manage your web footer.'),
(645, 'add_link_page', 'Add Link Page'),
(646, 'manage_link_page', 'Manage Link Page'),
(647, 'add_new_link_page', 'Add new link page'),
(648, 'link_page_update', 'Link Page Update'),
(649, 'manage_your_link_page', 'Manage your link page'),
(650, 'link_page', 'Link Page'),
(651, 'add_coupon', 'Add Coupon'),
(652, 'manage_coupon', 'Manage Coupon'),
(653, 'coupon_name', 'Coupon Name'),
(654, 'coupon_discount_code', 'Coupon Discount Code'),
(655, 'discount_amount', 'Discount Amount'),
(656, 'discount_percentage', 'Discount Percentage'),
(657, 'coupon', 'Coupon'),
(658, 'add_new_coupon', 'Add new coupon'),
(659, 'discount_type', 'Discount Type'),
(660, 'coupon_update', 'Coupon Update'),
(661, 'manage_your_coupon', 'Manage your coupon'),
(662, 'onsale_price', 'Offer Price'),
(663, 'download_sample_file', 'Download sample file'),
(664, 'quotation', 'Quotation'),
(665, 'new_quotation', 'New Quotation'),
(666, 'manage_quotation', 'Manage Quotation'),
(667, 'add_new_quotation', 'Add new quotation'),
(668, 'quotation_no', 'Quotation No'),
(669, 'manage_your_quotation', 'Manage your quotation'),
(670, 'quotation_update', 'Quotation Update'),
(671, 'quotation_details', 'Quotation Details'),
(672, 'quotation_from', 'Quotation Form'),
(673, 'quotation_date', 'Quotation Date'),
(674, 'quotation_to', 'Quotation To'),
(675, 'invoiced', 'Invoiced'),
(676, 'order', 'Order'),
(677, 'new_order', 'New Order'),
(678, 'manage_order', 'Manage Order'),
(679, 'order_no', 'Order No'),
(680, 'order_date', 'Order Date'),
(681, 'order_to', 'Order To'),
(682, 'order_from', 'Order From'),
(683, 'order_details', 'Order Details'),
(684, 'order_update', 'Order Update'),
(685, 'best_sale', 'Best Sale'),
(686, 'call_us', 'CALL US'),
(687, 'sign_up', 'Sign Up'),
(688, 'contact_us', 'Contact Us'),
(689, 'category_product_not_found', 'Opps !!!  product not found !'),
(690, 'sign_up_for_news_and', 'Sign up for news and '),
(691, 'offers', 'Offers'),
(692, 'you_may_unsubscribe_at_any_time', 'You may unsubscribe at any time'),
(693, 'enter_your_email', 'Enter your email.'),
(694, 'product_size', 'Product Size'),
(695, 'product_type', 'Product Type'),
(696, 'availability', 'Availability'),
(697, 'price_of_product', 'Price Of Product'),
(698, 'in_stock', 'In Stock'),
(699, 'related_products', 'Related Products'),
(700, 'review', 'Review'),
(701, 'tag', 'Tag'),
(702, 'specification', 'Specifications'),
(703, 'search_product_name_here', 'Search product name here...'),
(704, 'all_categories', 'All Categories'),
(705, 'best_sales', 'Best Sales'),
(706, 'price_range', 'Price Range'),
(707, 'see_more', 'See More'),
(708, 'add_to_cart', 'Add To Cart'),
(709, 'create_your_account', 'Create Your Account'),
(710, 'create_account', 'Create Account'),
(711, 'you_have_successfully_signup', 'You have successfully sign up.'),
(712, 'you_have_not_sign_up', 'You have not sign up.'),
(713, 'i_have_forgotten_my_password', 'I Have Forgotten My Password'),
(714, 'login_successfully', 'Login Successfully'),
(715, 'you_are_not_authorised', 'You are not authorised Person !'),
(716, 'customer_profile', 'Customer Profile'),
(717, 'total_order', 'Total Order'),
(718, 'add_currency', 'Add Currency'),
(719, 'manage_currency', 'Manage Currency'),
(720, 'add_new_currency', 'Add new currency'),
(721, 'currency_name', 'Currency Name'),
(722, 'currency_icon', 'Currency Icon'),
(723, 'conversion_rate', 'Conversion Rate'),
(724, 'default_status', 'Default Status'),
(725, 'default_store_already_exists', 'Default store already exists !'),
(726, 'currency_edit', 'Currency Edit'),
(727, 'manage_your_currency', 'Manage your currency'),
(728, 'review_this_product', 'Review This Product'),
(729, 'page', 'Page'),
(730, 'delivery_info', 'Delivery Info'),
(731, 'terms_and_condition', 'Terms And Condition'),
(732, 'help', 'Help'),
(733, 'get_in_touch', 'Get In Touch'),
(734, 'write_your_msg_here', 'Write your msg here'),
(736, 'add_about_us', 'Add About Us'),
(737, 'add_new_about_us', 'Add new about us'),
(738, 'manage_about_us', 'Manage About Us'),
(739, 'manage_your_about_us', 'Manage your about us'),
(740, 'about_us_update', 'About Us Update'),
(741, 'position_already_exists', 'Position Already Exists !'),
(742, 'why_choose_us', 'Why Choose US'),
(743, 'our_location', 'Our Location'),
(744, 'add_our_location', 'Add Our Location'),
(745, 'add_new_our_location', 'Add new our location'),
(746, 'manage_our_location', 'Manage Our Location'),
(747, 'our_location_update', 'Our Location Update'),
(748, 'map_api_key', 'Map API Key'),
(749, 'map_latitude', 'Map Latitude'),
(750, 'map_longitude', 'Map Longitude'),
(751, 'checkout_options', 'Checkout Options'),
(752, 'register_account', 'Register Account'),
(753, 'guest_checkout', 'Guest Checkout'),
(754, 'returning_customer', 'Returning Customer'),
(755, 'personal_details', 'Personal Details'),
(756, 'billing_details', 'Billing Details'),
(757, 'delivery_details', 'Delivery Details'),
(758, 'delivery_method', 'Delivery Method'),
(759, 'payment_method', 'Payment Method'),
(760, 'confirm_order', 'Confirm Order'),
(761, 'company', 'Company'),
(762, 'region_state', 'Region / State'),
(763, 'post_code', 'Post Code'),
(764, 'slider', 'Slider'),
(765, 'subscriver', 'Subscriver'),
(766, 'shipping_method', 'Shipping Method'),
(767, 'add_shipping_method', 'Add Shipping Method'),
(768, 'manage_shipping_method', 'Manage Shipping Method'),
(769, 'shipping_method_edit', 'Shipping Method Edit'),
(770, 'bank_transfer', 'Bank Transfer'),
(771, 'cash_on_delivery', 'Cash On Delivery'),
(772, 'sub_total', 'Sub Total'),
(773, 'product_successfully_order', 'Product Successfully Ordered'),
(774, 'checkout', 'Checkout'),
(775, 'share', 'Share'),
(776, 'are_you_sure_want_to_order', 'Are you sure want to order ?'),
(777, 'optional', 'This is optional'),
(778, 'manage_wearhouse_product', 'Manage Wearhouse Product'),
(779, 'you_cant_delete_this_is_in_calculate_system', 'You can\'t delete. This is in calculate system.'),
(780, 'you_can_add_only_one_product_at_a_time', 'You can add only one product at at a time !'),
(781, 'stock_report_store_wise', 'Stock Report (Store Wise)'),
(783, 'invoice_search_item', 'Invoice search item'),
(784, 'default_store', 'Default Store'),
(785, 'total_price', 'Total Price'),
(786, 'use_coupon_code', 'Use coupon code'),
(787, 'enter_your_coupon_here', 'Enter your coupon here'),
(788, 'apply_coupon', 'Apply Coupon'),
(789, 'coupon_code', 'Coupon Code'),
(790, 'cart', 'Cart'),
(791, 'your_coupon_is_used', 'Your coupon is used !'),
(792, 'coupon_is_expired', 'Your coupon is expired !'),
(793, 'coupon_discount', 'Coupon Discount'),
(794, 'oops_your_cart_is_empty', 'OOPS !!! Your Cart is Empty'),
(795, 'got_to_shop_now', 'Go to shop Now'),
(796, 'by_creating_an_account_you_will_able_to_shop_faster', 'By creating an account you will be able to shop faster, be up to date on an order\'s status, and keep track of the orders you have previously made.'),
(797, 'select_category', 'Select Category'),
(798, 'select_state', 'Select State'),
(799, 'my_delivery_and_billing_addresses_are_the_same', 'My delivery and billing addresses are the same.'),
(800, 'i_have_read_and_agree_to_the_privacy_policy', 'I have read and agree to the'),
(801, 'select_country', 'Select Country'),
(802, 'kindly_select_the_preferred_shipping_method_to_use_on_this_order', 'Kindly Select the preferred shipping method to use on this order.'),
(803, 'view_cart', 'View Cart'),
(804, 'category_wise_product', 'Category Wise Product.'),
(805, 'stock_not_available', 'Stock not available !'),
(806, 'print_barcode', 'Print Barcode'),
(807, 'print_qrcode', 'Print QR Code'),
(808, 'product_is_not_available_in_this_store', 'Product is not available in this store !'),
(809, 'category_product_search', 'Category Product Search.'),
(810, 'partial_paid', 'Partial Paid'),
(811, 'manage_product_tax', 'Manage Product Tax'),
(812, 'tax_setting', 'Tax Setting'),
(813, 'tax_name_1', 'Tax 1 Name '),
(814, 'tax_name_2', 'Tax 2 Name'),
(815, 'tax_name_3', 'Tax 3 Name'),
(816, 'quotation_discount', 'Quotation Discount'),
(817, 'select_variant', 'Select Variant'),
(818, 'already_a_member', 'Already a member ?'),
(819, 'not_a_member_yet', 'No a member yet ?'),
(820, 'store_or_wearhouse', 'Store or Wearhouse'),
(821, 'import_category_csv', 'Import Category (CSV)'),
(822, 'import_store_csv', 'Import Store (CSV)'),
(823, 'import_wearhouse_csv', 'Import Wearhouse (CSV)'),
(824, 'image_field_is_required', 'Image field is required !'),
(825, 'email_configuration', 'Email Configuration'),
(826, 'protocol', 'Protocol'),
(827, 'mailtype', 'Mail Type'),
(828, 'smtp_host', 'SMTP Host'),
(829, 'smtp_port', 'SMTP Port'),
(830, 'sender_email', 'Sender Email'),
(831, 'html', 'Html'),
(832, 'text', 'Text'),
(833, 'add_note', 'Add Note'),
(834, 'shipped', 'Shipped'),
(835, 'return', 'Return'),
(836, 'processing', 'Processing'),
(837, 'complete', 'Complete'),
(838, 'pending', 'Pending'),
(839, 'please_add_note', 'Please add note !'),
(840, 'email_send_to_customer', 'Email send to customer'),
(841, 'items_in_your_cart', 'Items In Your Cart.'),
(842, 'you_have', 'You Have'),
(843, 'add_coment_about_your_order', 'Add Comment About Your Order.'),
(844, 'add_coment_about_your_payment', 'Add Comment About Your Order.'),
(845, 'you_have_receive_a_email_please_check_your_email', 'You have received a email.Please check your email.'),
(846, 'invoice_status', 'Invoice Status'),
(847, 'order_information', 'Order Information'),
(848, 'order_info_details', 'Attached below is order. If you have any questions or there are any issues please let us know. Have a great day. '),
(849, 'bank_transfer_instruction', 'Bank Transfer Instruction'),
(850, 'pleasse_transfer_the_total_amount_to_the_following_bank_account', 'Please Transfer The Total Amount To The Following Bank Account.'),
(851, 'account_no', 'Account No'),
(852, 'branch', 'Branch'),
(853, 'add_to_wishlist', 'Add To Wishlist'),
(854, 'quick_view', 'Quick View.'),
(855, 'service_charge', 'Service Charge'),
(856, 'credit_card', 'Credit Card'),
(857, 'debit_card', 'Debit Card'),
(858, 'master_card', 'Master Card'),
(859, 'amex', 'Amex'),
(860, 'visa', 'Visa'),
(861, 'paypal', 'Paypal'),
(862, 'you_cant_delete_this_customer', 'You can\'t delete this customer ! This is in calculating system.'),
(863, 'you_cant_delete_this_supplier', 'You can\'t delete this supplier ! This is in calculating system.'),
(864, 'quotation_information', 'Quotation Information'),
(865, 'quotation_info_details', 'Attached below is quotation. If you have any questions or there are any issues please let us know. Have a great day. '),
(866, 'variant_is_required', 'Variant is required !'),
(867, 'bitcoin', 'Bitcoin'),
(868, 'order_cancel', 'Order cancel'),
(869, 'payeer_payment', 'Payeer Payment'),
(870, 'bitcoin_payment', 'Bitcoin Payment'),
(871, 'customer_id', 'Customer ID'),
(872, 'payeer', 'Payeer'),
(873, 'payment_gateway_setting', 'Payment Gateway Setting'),
(874, 'public_key', 'Public Key'),
(875, 'private_key', 'Private Key'),
(876, 'shop_id', 'Shop ID'),
(877, 'paypal_email', 'Paypal Email'),
(878, 'transaction_faild', 'Transaction Failed !'),
(879, 'footer_logo', 'Footer Logo'),
(880, 'footer_details', 'Footer Details'),
(881, 'default_status_already_exists', 'Default status already exists !'),
(882, 'store_name_already_exists', 'Store name already exists !'),
(883, 'please_set_default_store', 'Please set default store !'),
(884, 'do_you_want_make_it_default_store', 'Do you want make it default store ?'),
(885, 'do_you_want_make_it_default_currency', 'Do you want it default currency ?'),
(886, 'you_must_have_a_default_currency', 'You must have a default currency'),
(887, 'you_cant_delete_this_is_default_currency', 'You cant delete ! This is default currency. '),
(888, 'you_must_have_a_default_store', 'You must have a default sote'),
(889, 'email_not_send', 'Email not send !'),
(890, 'client_id', 'Client ID'),
(891, 'app_qr_code', 'App QR Code'),
(892, 'sms_configuration', 'Sms Configuration'),
(893, 'charset', 'Charset'),
(895, 'port', 'Port'),
(896, 'host', 'Host'),
(897, 'title', 'Title'),
(898, 'gateway', 'Gateway'),
(899, 'smsrank', 'SMS Rank'),
(900, 'sms_pre_text', 'Your Order No '),
(901, 'sms_text', 'has been confirmed '),
(902, 'sms_settings', 'SMS Settings '),
(903, 'sms_template', 'SMS Template'),
(904, 'template_name', 'Template Name'),
(905, 'sms_template_warning', 'please use \"{id}\" format without quotation to set dynamic value inside template. '),
(906, 'qr_status', 'QR Code Status'),
(907, 'pay_with', 'Pay With'),
(908, 'manage_pay_with', 'Manage Pay With'),
(909, 'add_pay_with', 'Add Pay With'),
(910, 'pay_with_edit', 'Pay With Edit'),
(911, 'color_setting_frontend', 'Color Setting Front End'),
(912, 'color1', 'Color 1'),
(913, 'color2', 'Color 2'),
(914, 'color3', 'Color 3'),
(915, 'color_setting_backend', 'Color Setting Backend'),
(916, 'color4', 'Color 4'),
(917, 'forget_password', 'Forgot Password'),
(918, 'send', 'Send'),
(919, 'password_recovery', 'Password Recovery'),
(920, 'color5', 'Color 5'),
(921, 'please_select_product_size', 'Please Select Product Size'),
(922, 'please_keep_quantity_up_to_zero', 'Please Keep Quantity Up To Zero'),
(923, 'product_added_to_cart', 'Product Added To Cart'),
(924, 'not_enough_product_in_stock', 'Not Enough Product In Stock. Please Reduce The Product Quantity.'),
(925, 'please_fill_up_all_required_field', 'Please Fill Up All Required Field'),
(926, 'fe_color1', 'Color1 = header section'),
(927, 'fe_color2', 'Color2 = Dropdown and Footer Section'),
(928, 'fe_color3', 'Color3 = Menu Bar'),
(929, 'be_color1', 'Color1 = Left Bar'),
(930, 'be_color2', 'Color2 = Top And Bottom Bar'),
(931, 'be_color3', 'Color3 = Body Background'),
(932, 'be_color4', 'Color4 = For All Button Except Edit & Delete Button'),
(933, 'be_color5', 'Color5 =  Button Font Color Except edit & Delete Button'),
(935, 'sales_report_store_wise', 'Sales Report (Store Wise)'),
(936, 'fe_color4', 'Color4 = Notification, Sign-up button, Rating, Footer text border, Go to top button  '),
(937, 'link', 'Link'),
(938, 'userid', 'UserId'),
(939, 'this_email_not_exits', 'This Email Not Exits'),
(940, 'sell', 'Sell'),
(941, 'transfer_quantity', 'Transfer Quantity'),
(942, 'order_completed', 'Your Order Is Completed. '),
(943, 'this_coupon_is_already_used', 'This Coupon Is Already Used'),
(944, 'please_login_first', 'Please Login First'),
(945, 'product_added_to_wishlist', 'Product Added To Wishlist'),
(946, 'product_already_exists_in_wishlist', 'Product Already Exists In Wishlist'),
(947, 'support', 'Support'),
(948, 'add_country_code', 'Please Add Country Code To Use SMS Services '),
(949, 'search_items', 'Items Found For '),
(950, 'variant_not_available', 'This variant is not available'),
(951, 'request_failed', 'Request Failed, Please check and try again!'),
(952, 'write_your_comment', 'Please write your comment.'),
(954, 'your_review_added', 'Your review added.'),
(955, 'already_reviewed', 'Thanks. You already reviewed.'),
(956, 'please_type_email_and_password', 'Please type email and password.'),
(957, 'ordered', 'Ordered '),
(958, 'your_order_has_been_confirm', 'Your order has been confirm.'),
(959, 'receive_quantity', 'Receive Quantity'),
(960, 'receive_from', 'Receive From'),
(961, 'stock_report_order_wise', 'Stock Report Order Wise'),
(962, 'theme_activation', 'Theme Activation'),
(963, 'manage_themes', 'Manage Themes'),
(964, 'upload_new_theme', 'Upload New Theme'),
(965, 'theme_name', 'Theme Name'),
(966, 'upload', 'Upload'),
(967, 'themes', 'Themes'),
(968, 'theme_active_successfully', 'Theme Active successfully.'),
(969, 'theme_uploaded_successfully', 'Theme uploaded successfully.'),
(970, 'there_was_a_problem_with_the_upload', 'There was a problem with the upload. Please try again.'),
(971, 'the_theme_has_not_uploaded', 'The Theme has not uploaded!'),
(972, 'have_a_question', 'Have a question?'),
(973, 'buy_now_promotion', 'Buy Now Promotions'),
(974, 'all_departments', 'All Departments'),
(975, 'best_sale_product', 'Best sale Product'),
(976, 'most_popular_product', 'Most Popular Product'),
(977, 'view_all', 'View All'),
(978, 'view_all', 'View All'),
(979, 'brand_of_the_week', 'Brands of the Week'),
(983, 'download_the_app', 'Download The App'),
(984, 'get_access_to_all_exclusive_offers', 'Get access to all exclusive offers, discounts and deals by download our App !'),
(985, 'select', 'Select'),
(986, 'you_may_alo_be_interested_in', 'You May Also Be Interested In'),
(987, 'rate_it', 'Rate It'),
(988, 'similar_products', 'Similar Products'),
(989, 'subscribe_successfully', 'Subscribe Successfully'),
(991, 'please_enter_email', 'Please Enter Valid Email. '),
(992, 'username_or_email', 'Username or Email'),
(993, 'dont_have_an_account', 'Don\'t have an account? '),
(994, 'already_member', 'Already Member ?'),
(995, 'success', 'Success'),
(996, 'lost_your_password', 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.'),
(997, 'reset_password', 'Reset Password'),
(998, 'ago', 'ago'),
(999, 'signin', 'Sign In'),
(1000, 'your', 'Your'),
(1001, 'product_remove_from_wishlist', 'Product Remove From Wish list'),
(1002, 'product_not_remove_from_wishlist', 'Product not remove from wish list'),
(1003, 'enter_your_coupon_code_if_you_have_one', 'Enter your coupon code if you have one.'),
(1004, 'cart_total', 'Cart Totals'),
(1005, 'remember_me', 'Remember Me'),
(1006, 'click_here_to_login', 'Click here to login'),
(1007, 'if_you_have_shopped_with_us', 'If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.'),
(1008, 'billing_address', 'Billing Address'),
(1009, 'create_an_account', 'Create An Account ?'),
(1010, 'create_account_password', 'Create Account Password'),
(1011, 'notes_about_your_order', 'Notes about your order, e.g. special notes for delivery.'),
(1012, 'ship_to_a_different_address', 'Ship to a different address?'),
(1013, 'by_variant', 'By Variant  '),
(1014, 'by_brand', 'By Brand'),
(1015, 'rating', 'Rating'),
(1016, 'filter', 'Filter'),
(1017, 'by_price', 'By Price'),
(1018, '5', '5'),
(1019, '4', '4'),
(1020, 'your_email_address_will_not_be_published', 'Your email address will not be published. Required fields are marked *'),
(1021, 'shop_of_the_week', 'Shop Of The Week'),
(1022, 'copyright', 'Copyright Ã‚Â© 2018 Bdtask. All Rights Reserved'),
(1023, 'app_link_status', 'App Link Status'),
(1024, 'update_your_software_setting', 'Update Your Software Setting'),
(1025, 'update_color_setting', 'Update Color Setting'),
(1026, 'update_web_color', 'Update Web Color'),
(1027, 'update_dashboard_color', 'Update Dashboard Color'),
(1028, 'update_color', 'Update Color'),
(1029, 'sslcommerz_email', 'SSLCOMMERZ Email'),
(1030, 'store_id', 'Store ID'),
(1031, 'import_database', 'Import Database'),
(1032, 'check_for_update', 'Check For Update'),
(1033, 'software_update', 'Software Update'),
(1034, 'activated', 'Activated'),
(1035, 'back_to_home', 'Back to home'),
(1036, 'in_active', 'In Active'),
(1037, 'january', 'January'),
(1038, 'february', 'February'),
(1039, 'march', 'March'),
(1040, 'january', 'January'),
(1041, 'february', 'February'),
(1042, 'april', 'April'),
(1043, 'may', 'May'),
(1044, 'june', 'June'),
(1045, 'july', 'July'),
(1046, 'august', 'August'),
(1047, 'september', 'September'),
(1048, 'october', 'October'),
(1049, 'november', 'November'),
(1050, 'december', 'December'),
(1051, 'product_image_gallery', 'Product Image Gallery'),
(1052, 'add_product_image', 'Add product image'),
(1053, 'manage_product_image', 'Manage product image'),
(1054, 'sms_service', 'SMS Service '),
(1055, 'google_analytics', 'Google Analytics'),
(1056, 'facebook_messenger', 'Facebook Messenger'),
(1057, 'welcome_back_to_login', 'Welcome Back to Login.'),
(1058, 'application_protocol', 'Application Protocol'),
(1059, 'http', 'HTTP'),
(1060, 'https', 'HTTPS'),
(1061, 'login_with_facebook', 'Login with facebook'),
(1062, 'social_authentication', 'Social Authentication'),
(1063, 'manage_social_media', 'Manage social media'),
(1064, 'social', 'Social'),
(1065, 'app_id', 'App ID'),
(1066, 'app_secret', 'App Secret'),
(1067, 'api_key', 'Api key'),
(1068, 'shipping_charge', 'Shipping Charge'),
(1069, 'stock_report_variant_wise', 'Stock report variant wise'),
(1070, 'purchase', 'Purchase'),
(1071, 'rating_and_reviews', 'Ratings and Reviews'),
(1072, 'average_user_rating', 'Average user rating'),
(1073, 'rating_breakdown', 'Rating breakdown'),
(1074, '100_percent_complete', '100% Complete (success)'),
(1075, '80_percent_complete', '80% Complete (primary)'),
(1076, '60_percent_complete', '60% Complete (info)'),
(1077, '40_percent_complete', '40% Complete (warning)'),
(1078, '20_percent_complete', '20% Complete (danger)'),
(1079, 'default_variant', 'Default variant'),
(1080, 'video_link', 'Video Link'),
(1081, 'send_your_review', 'Send Your Review'),
(1082, 'if_you_have_shopped_with_us_before', 'If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.'),
(1083, 'your_order', 'Your order'),
(1084, 'free_shipping', 'Free Shipping'),
(1085, 'from_newyork', 'From 345/E NewYork'),
(1086, 'the_internet_tend_to_repeat', 'The internet Tend To Repeat'),
(1087, '45_days_return', '45 Days Return'),
(1088, 'making_it_look_like_readable', 'Making it Look Like Readable'),
(1089, 'opening_all_week', 'Opening All Week'),
(1090, '8am_9pm', '08AM - 09PM'),
(1091, 'ad_style', 'Ads Style'),
(1092, 'style_one', 'Style One'),
(1093, 'style_two', 'Style Two'),
(1094, 'style_three', 'Style Three'),
(1095, 'embed_code2', 'Embed Code2'),
(1096, 'embed_code3', 'Embed Code3'),
(1097, 'url2', 'URL2'),
(1098, 'url3', 'URL3'),
(1099, 'image2', 'Image 2'),
(1100, 'image3', 'Image 3'),
(1101, 'order_now', 'Order Now'),
(1102, 'default_variant_must_have_to_be_one_of_the_variants', 'Default variant must have to be one of the variants'),
(1103, 'default_image', 'Default image'),
(1104, 'meta_keyword', 'Meta keyword'),
(1105, 'meta_description', 'Meta description'),
(1106, 'this_email_already_exists', 'This email already exists'),
(1107, 'you_cant_delete_this_is_default_store', 'You can\'t delete it. This is a default store. '),
(1108, 'already_exists_please_login', 'This Email already exists please login or use another email. '),
(1109, '4-5', '4-5'),
(1110, 'sign_office', 'Sign Office'),
(1111, 'customer_sign', 'Customer Sign'),
(1112, 'thank_you_for_shopping_with_us', 'Thank you for shopping with us.'),
(1113, 'new_sale', 'New sale'),
(1114, 'manage_sale', 'Manage sale'),
(1115, 'pos_sale', 'Pos sale'),
(1116, 'android_apps', 'Android apps'),
(1117, 'update_your_android_apps_link', 'Update your android apps link'),
(1118, 'put_your_apps_link', 'Put your apps link'),
(1119, 'go_to_website', 'Go to website'),
(1120, 'our_demo', 'Our demo'),
(1121, 'note', 'Note'),
(1122, 'login', 'Login'),
(1123, 'email', 'Email Address'),
(1124, 'password', 'Password'),
(1125, 'reset', 'Reset'),
(1126, 'dashboard', 'Dashboard'),
(1127, 'home', 'Home'),
(1128, 'profile', 'Profile'),
(1129, 'profile_setting', 'Profile Setting'),
(1130, 'firstname', 'First Name'),
(1131, 'lastname', 'Last Name'),
(1132, 'about', 'About'),
(1133, 'preview', 'Preview'),
(1134, 'image', 'Image'),
(1135, 'save', 'Save'),
(1136, 'upload_successfully', 'Upload Successfully!'),
(1137, 'user_added_successfully', 'User Added Successfully!'),
(1138, 'please_try_again', 'Please Try Again...'),
(1139, 'inbox_message', 'Inbox Messages'),
(1140, 'sent_message', 'Sent Message'),
(1141, 'message_details', 'Message Details'),
(1142, 'new_message', 'New Message'),
(1143, 'receiver_name', 'Receiver Name'),
(1144, 'sender_name', 'Sender Name'),
(1145, 'subject', 'Subject'),
(1146, 'message', 'Message'),
(1147, 'message_sent', 'Message Sent!'),
(1148, 'ip_address', 'IP Address'),
(1149, 'last_login', 'Last Login'),
(1150, 'last_logout', 'Last Logout'),
(1151, 'status', 'Status'),
(1152, 'delete_successfully', 'Delete Successfully!'),
(1153, 'send', 'Send'),
(1154, 'date', 'Date'),
(1155, 'action', 'Action'),
(1156, 'sl_no', 'SL No.'),
(1157, 'are_you_sure', 'Are You Sure ? '),
(1158, 'application_setting', 'Application Setting'),
(1159, 'application_title', 'Application Title'),
(1160, 'address', 'Address'),
(1161, 'phone', 'Phone'),
(1162, 'favicon', 'Favicon'),
(1163, 'logo', 'Logo'),
(1164, 'language', 'Language'),
(1165, 'left_to_right', 'Left To Right'),
(1166, 'right_to_left', 'Right To Left'),
(1167, 'footer_text', 'Footer Text'),
(1168, 'site_align', 'Application Alignment'),
(1169, 'welcome_back', 'Welcome Back!'),
(1170, 'please_contact_with_admin', 'Please Contact With Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES
(1171, 'incorrect_email_or_password', 'Incorrect Email/Password'),
(1172, 'select_option', 'Select Option'),
(1173, 'ftp_setting', 'Data Synchronize [FTP Setting]'),
(1174, 'hostname', 'Host Name'),
(1175, 'username', 'Username'),
(1176, 'ftp_port', 'FTP Port'),
(1177, 'ftp_debug', 'FTP Debug'),
(1178, 'project_root', 'Project Root'),
(1179, 'update_successfully', 'Update Successfully'),
(1180, 'save_successfully', 'Save Successfully!'),
(1181, 'delete_successfully', 'Delete Successfully!'),
(1182, 'internet_connection', 'Internet Connection'),
(1183, 'ok', 'Ok'),
(1184, 'not_available', 'Not Available'),
(1185, 'available', 'Available'),
(1186, 'outgoing_file', 'Outgoing File'),
(1187, 'incoming_file', 'Incoming File'),
(1188, 'data_synchronize', 'Data Synchronize'),
(1189, 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration'),
(1190, 'please_configure_synchronizer_settings', 'Please configure synchronizer settings'),
(1191, 'download_successfully', 'Download Successfully'),
(1192, 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration'),
(1193, 'data_import_first', 'Data Import First'),
(1194, 'data_import_successfully', 'Data Import Successfully!'),
(1195, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.'),
(1196, 'download_data_from_server', 'Download Data from Server'),
(1197, 'data_import_to_database', 'Data Import To Database'),
(1198, 'data_upload_to_server', 'Data Upload to Server'),
(1199, 'please_wait', 'Please Wait...'),
(1200, 'ooops_something_went_wrong', ' Ooops something went wrong...'),
(1201, 'module_permission_list', 'Module Permission List'),
(1202, 'user_permission', 'User Permission'),
(1203, 'add_module_permission', 'Add Module Permission'),
(1204, 'module_permission_added_successfully', 'Module Permission Added Successfully!'),
(1205, 'update_module_permission', 'Update Module Permission'),
(1206, 'download', 'Download'),
(1207, 'module_name', 'Module Name'),
(1208, 'create', 'Create'),
(1209, 'read', 'Read'),
(1210, 'update', 'Update'),
(1211, 'delete', 'Delete'),
(1212, 'module_list', 'Module List'),
(1213, 'add_module', 'Add Module'),
(1214, 'directory', 'Module Direcotory'),
(1215, 'description', 'Description'),
(1216, 'image_upload_successfully', 'Image Upload Successfully!'),
(1217, 'module_added_successfully', 'Module Added Successfully'),
(1218, 'inactive', 'Inactive'),
(1219, 'active', 'Active'),
(1220, 'user_list', 'User List'),
(1221, 'see_all_message', 'See All Messages'),
(1222, 'setting', 'Setting'),
(1223, 'logout', 'Logout'),
(1224, 'admin', 'Admin'),
(1225, 'add_user', 'Add User'),
(1226, 'user', 'User'),
(1227, 'module', 'Module'),
(1228, 'new', 'New'),
(1229, 'inbox', 'Inbox'),
(1230, 'sent', 'Sent'),
(1231, 'synchronize', 'Synchronize'),
(1232, 'data_synchronizer', 'Data Synchronizer'),
(1233, 'module_permission', 'Module Permission'),
(1234, 'backup_now', 'Backup Now!'),
(1235, 'restore_now', 'Restore Now!'),
(1236, 'backup_and_restore', 'Backup and Restore'),
(1237, 'captcha', 'Captcha Word'),
(1238, 'database_backup', 'Database Backup'),
(1239, 'restore_successfully', 'Restore Successfully'),
(1240, 'backup_successfully', 'Backup Successfully'),
(1241, 'filename', 'File Name'),
(1242, 'file_information', 'File Information'),
(1243, 'size', 'size'),
(1244, 'backup_date', 'Backup Date'),
(1245, 'overwrite', 'Overwrite'),
(1246, 'invalid_file', 'Invalid File!'),
(1247, 'invalid_module', 'Invalid Module'),
(1248, 'remove_successfully', 'Remove Successfully!'),
(1249, 'install', 'Install'),
(1250, 'uninstall', 'Uninstall'),
(1251, 'tables_are_not_available_in_database', 'Tables are not available in database.sql'),
(1252, 'no_tables_are_registered_in_config', 'No tables are registerd in config.php'),
(1253, 'enquiry', 'Enquiry'),
(1254, 'read_unread', 'Read/Unread'),
(1255, 'enquiry_information', 'Enquiry Information'),
(1256, 'user_agent', 'User Agent'),
(1257, 'checked_by', 'Checked By'),
(1258, 'new_enquiry', 'New Enquiry'),
(1259, 'first_name_is_required', 'First name is required'),
(1260, 'last_name_is_required', 'Last name is required'),
(1261, 'mobile_is_required', 'Mobile is required'),
(1262, 'country_is_required', 'Country is required'),
(1263, 'address_is_required', 'Address is required'),
(1264, 'state_is_required', 'State is required'),
(1265, 'failed_try_again', 'Failed! Please try again.'),
(1266, 'failed', 'Failed'),
(1267, 'subscribe_for_news_and', 'Subscribe for news and'),
(1268, 'subscribe', 'Subscribe'),
(1269, 'reviews', 'Reviews'),
(1270, 'feedback', 'Feedback'),
(1271, 'unit_id', 'Unit ID'),
(1272, 'set_default', 'Set default'),
(1273, 'add', 'Add'),
(1274, 'list', 'List'),
(1275, 'invalid_coupon', 'Invalid Coupon'),
(1276, 'login_to_apply_coupon', 'Login to apply coupon'),
(1277, 'great_your_coupon_is_applied', 'Great! Your coupon is applied'),
(1278, 'fe_color5', 'color5=Header Top Bar'),
(1279, 'receiver_email', 'Receiver email'),
(1280, 'modules', 'Modules'),
(1281, 'modules_management', 'Modules Management'),
(1283, 'buy_now', 'Buy now'),
(1284, 'no_theme_available', 'No Theme Available!'),
(1301, 'purchase_key', 'Purchase Key'),
(1302, 'invalid_purchase_key', 'Invalid Purchase Key'),
(1303, 'theme_deleted_successfully', 'Theme Deleted Successfully'),
(1304, 'downloaded_successfully', 'Downloaded Successfully'),
(1305, 'slider_category', 'Slider Category'),
(1306, 'clear_cart', 'Clear Cart'),
(1307, 'continue_shopping', 'Continue Shopping'),
(1308, 'my_cart', 'My Cart'),
(1309, 'favorites', 'Favorites'),
(1310, 'states', 'States'),
(1311, 'manage_states', 'Manage States'),
(1312, 'add_state', 'Add State'),
(1313, 'edit_state', 'Edit State'),
(1314, 'connect_with_us', 'Connect With Us'),
(1315, 'footer_block_1', 'Footer Block 1'),
(1316, 'footer_block_2', 'Footer Block 2'),
(1317, 'footer_block_3', 'Footer Block 3'),
(1318, 'footer_block_4', 'Footer Block 4'),
(1319, 'show', 'Show'),
(1320, 'hide', 'Hide'),
(1321, 'mobile_settings', 'Mobile Settings (For website Footer)'),
(1322, 'social_share', 'Social Share'),
(1323, 'bank', 'Bank'),
(1324, 'order_placed', 'Your order has been successfully placed'),
(1325, 'update_woocommerce_stock', 'Update Woocommerce Stock');

-- --------------------------------------------------------

--
-- Table structure for table `link_page`
--

CREATE TABLE `link_page` (
  `link_page_id` varchar(100) NOT NULL,
  `page_id` varchar(255) NOT NULL,
  `language_id` varchar(255) NOT NULL,
  `headlines` text,
  `image` text,
  `details` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_page`
--

INSERT INTO `link_page` (`link_page_id`, `page_id`, `language_id`, `headlines`, `image`, `details`, `status`) VALUES
('1O7RLB4BQ1HR94K', '3', 'bangla', '', 'my-assets/image/link_page/8f5013440d835b56c55867a9125f0e4c.jpg', '', 1),
('E3XOZ4N7DM8IG4P', '1', 'english', '<p>ABOUT US<br></p>', 'my-assets/image/link_page/2eaa2ed9eee24c9c08feb568d26f54e7.jpg', '<p><span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', 1),
('PQA7JY6HKXTHW81', '1', 'bangla', '<p><br></p>', 'my-assets/image/link_page/2eaa2ed9eee24c9c08feb568d26f54e7.jpg', '<p><br></p>', 1),
('SCHKM9YIFLEJ7OV', '3', 'english', '<p>Delivery Infomation<br></p>', 'my-assets/image/link_page/8f5013440d835b56c55867a9125f0e4c.jpg', '<p>we are trying to deliver our productÂ  very short time<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `sender_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  `receiver_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `directory` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `module_permission`
--

CREATE TABLE `module_permission` (
  `id` int(11) NOT NULL,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `total_amount` float NOT NULL,
  `order` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `total_discount` float DEFAULT NULL,
  `order_discount` float DEFAULT NULL COMMENT 'total_discount + order_discount',
  `service_charge` float DEFAULT NULL,
  `paid_amount` float NOT NULL,
  `due_amount` float NOT NULL,
  `file_path` text NOT NULL,
  `coupon` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

CREATE TABLE `order_delivery` (
  `order_delivery_id` varchar(255) NOT NULL,
  `delivery_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_delivery`
--

INSERT INTO `order_delivery` (`order_delivery_id`, `delivery_id`, `order_id`, `details`) VALUES
('1LLFUSTXT9DLLBR', '1', '3678BSARV34SES2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `store_id` varchar(255) NOT NULL,
  `quantity` int(8) NOT NULL,
  `rate` float NOT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` float NOT NULL,
  `discount` float DEFAULT NULL COMMENT 'discount_total_per_product',
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `order_payment_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`order_payment_id`, `payment_id`, `order_id`, `details`) VALUES
('ASF7XT2ISFS8SPH', '1', '3678BSARV34SES2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_tax_col_details`
--

CREATE TABLE `order_tax_col_details` (
  `order_tax_col_de_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_tax_col_summary`
--

CREATE TABLE `order_tax_col_summary` (
  `order_tax_col_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `tax_amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `our_location`
--

CREATE TABLE `our_location` (
  `location_id` int(11) NOT NULL,
  `language_id` varchar(255) NOT NULL,
  `headline` text NOT NULL,
  `details` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_location`
--

INSERT INTO `our_location` (`location_id`, `language_id`, `headline`, `details`, `position`, `status`) VALUES
(1, 'english', 'Head Office Location <br>', '<p>We sell our product all over the world . <br></p>', 1, 1),
(2, 'bangla', '', '', 1, 1),
(3, 'english', '<p>AfricaÂ </p>', '<p>our second location at Cameroon in Africa.<br></p>', 2, 1),
(4, 'bangla', '', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payeer_payments`
--

CREATE TABLE `payeer_payments` (
  `id` int(11) NOT NULL,
  `m_operation_id` int(11) NOT NULL,
  `m_operation_ps` int(11) NOT NULL,
  `m_operation_date` varchar(100) NOT NULL,
  `m_operation_pay_date` varchar(100) NOT NULL,
  `m_shop` int(11) NOT NULL,
  `m_orderid` varchar(300) NOT NULL,
  `m_amount` varchar(100) NOT NULL,
  `m_curr` varchar(100) NOT NULL,
  `m_desc` varchar(300) NOT NULL,
  `m_status` varchar(100) NOT NULL,
  `m_sign` text NOT NULL,
  `lang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `store_id` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `description` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateway`
--

CREATE TABLE `payment_gateway` (
  `id` int(11) NOT NULL,
  `used_id` int(11) NOT NULL,
  `module_id` varchar(100) DEFAULT NULL,
  `agent` varchar(100) NOT NULL,
  `public_key` varchar(100) NOT NULL,
  `private_key` varchar(100) NOT NULL,
  `shop_id` varchar(100) NOT NULL,
  `secret_key` varchar(100) NOT NULL,
  `paypal_email` varchar(250) DEFAULT NULL,
  `paypal_client_id` text,
  `currency` text,
  `is_live` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=live,0=sandbox',
  `image` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_gateway`
--

INSERT INTO `payment_gateway` (`id`, `used_id`, `module_id`, `agent`, `public_key`, `private_key`, `shop_id`, `secret_key`, `paypal_email`, `paypal_client_id`, `currency`, `is_live`, `image`, `status`) VALUES
(1, 3, NULL, 'Bitcoin', '22592AAtNOwwBitcoin77BTCPUBzo4PVkUmYCa2dR770wNNstd', '22592AAtNOwwBitcoin77BTCPRVk7hmp8s3ew6pwgOMgxMq81F', '', '', NULL, NULL, NULL, 1, 'my-assets/image/bitcoin.png', 2),
(2, 4, NULL, 'Payeer', '', '', '514435930', 'JH8LZUHCNrtHhlRW', NULL, NULL, NULL, 1, 'my-assets/image/payeer.png', 2),
(3, 5, NULL, 'Paypal', '', '', '', '', 'mamun.sabuj99-seller@gmail.com', '', 'USD', 0, 'my-assets/image/paypal.png', 1),
(4, 6, NULL, 'sslcommerz\r\n', '', '', 'style5c246d140fefc', 'style5c246d140fefc@ssl', 'shemul.rabbani@gmail.com', NULL, 'BDT', 0, 'my-assets/image/sslcommerz.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(11) NOT NULL,
  `pay_method` varchar(20) DEFAULT NULL,
  `used_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `order_no` varchar(30) NOT NULL,
  `trans_id` varchar(100) DEFAULT NULL,
  `amount` float(10,2) NOT NULL DEFAULT '0.00',
  `store_amount` float(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(20) DEFAULT NULL,
  `trans_date` varchar(100) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_withs`
--

CREATE TABLE `pay_withs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pay_withs`
--

INSERT INTO `pay_withs` (`id`, `title`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, 'mastercard', '54e64b679aeba35bb2888d303342b75b.png', 'http://bdtask.com', 0, '2019-01-01 14:39:14', '2021-02-20 11:08:12'),
(5, 'visa', 'ab52aa6b0653710cdd75ce58d2faf7ab.png', 'https://visa.com', 1, '2019-01-02 05:14:38', '2019-03-09 08:04:19'),
(6, 'paypal', '56e595d709a8a4d500b7e893a51acc0c.png', 'https://paypal.com', 1, '2019-01-02 05:24:35', '2019-03-09 08:04:19'),
(7, 'bkash', '15d320188b47f3f8f00866a26dd88403.jpg', 'https://bkash.com', 0, '2018-12-11 07:22:39', '2021-02-20 11:07:03'),
(8, 'rocket', 'dd6425bd07943dcc90698b3d0e81187f.jpeg', 'http://rocket.com', 1, '2019-03-09 08:04:19', '2019-03-09 08:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` varchar(255) NOT NULL,
  `parent_category_id` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `top_menu` int(11) NOT NULL,
  `menu_pos` int(11) NOT NULL,
  `cat_image` text NOT NULL,
  `cat_favicon` text,
  `cat_type` int(11) DEFAULT NULL COMMENT '1=parent,2=sub caregory',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `parent_category_id`, `category_name`, `top_menu`, `menu_pos`, `cat_image`, `cat_favicon`, `cat_type`, `status`) VALUES
('2M1PKKSX9JMS6WR', 'RPLNBN5OGTQGY99', 'Grammer Books', 0, 3, 'my-assets/image/category/781b35d5a78eece0945be202cb92c8f7.jpg', 'my-assets/image/category/f968ade0d374140fab6a50f1a6e708aa.jpg', 2, 1),
('2ZQO76F6D976HCU', 'R281MGT6YYQ3LCP', 'Electronics Toys', 0, 1, 'my-assets/image/category/ad533a55a4b938decca4c0e7495df9ab.jpg', 'my-assets/image/category/3aafe3ac943c66c46718b14748deeab5.jpg', 2, 1),
('5ST1Y86XKLSN6LS', '', 'sports', 1, 0, 'my-assets/image/category.png', 'my-assets/image/category.png', 1, 1),
('ADXL7ARPEMKH3DI', 'F9GNCBBPCOIEN67', 'Category_7', 0, 7, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 2, 1),
('CSSBW6HW54N62HE', NULL, 'Category_8', 0, 8, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('F9GNCBBPCOIEN67', '', 'Category_1', 1, 1, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('MY58TSN15SDZ36E', NULL, 'Category_2', 1, 2, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('O6YTDGPWCG2ILX3', 'YDU3RFGACXON9T9', 'School bags', 0, 2, 'my-assets/image/category/126ef93f9d6ab6abc0dedc674961738f.jpg', 'my-assets/image/category/5e2d1ede1659f0b8dcad5b37c5416319.jpg', 2, 1),
('OER22ASL88IWCCI', NULL, 'Category_10', 0, 10, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('QK1RF1L7G5ID28Q', NULL, 'Category_6', 0, 6, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('R281MGT6YYQ3LCP', '', 'Toys', 0, 1, 'my-assets/image/category/0685773d4dfa4052a59e313a7376f802.jpg', 'my-assets/image/category.png', 1, 1),
('RPLNBN5OGTQGY99', '', 'School Books', 0, 3, 'my-assets/image/category/1c8311104442ab61caf7dd1b77d4198a.jpg', 'my-assets/image/category.png', 1, 1),
('S8UEL9N18YX7481', 'F9GNCBBPCOIEN67', 'Category_9', 0, 9, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 2, 1),
('UJRTM2YY6941UGA', 'F9GNCBBPCOIEN67', 'Category_3', 1, 3, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 2, 1),
('UZ2UQ4PV74K8JK9', 'F9GNCBBPCOIEN67', 'Category_5', 1, 5, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 2, 1),
('WLFACXRF6T3U3UV', NULL, 'Category_4', 1, 4, 'my-assets/image/category/77d14ea6ae1ed219556ece65858f9d57.jpg', 'my-assets/image/category/0c9839f47ecf49664d2f7985be6887e5.png', 1, 1),
('YDU3RFGACXON9T9', '', 'School bags', 0, 2, 'my-assets/image/category/f06ea7dd15b23631a34c941196f6134d.jpg', 'my-assets/image/category/a62b32be03199a590367020a1c95e090.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `supplier_price` float DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `product_model` varchar(100) NOT NULL,
  `product_details` longtext,
  `image_thumb` text,
  `brand_id` varchar(255) DEFAULT NULL,
  `variants` text,
  `default_variant` varchar(255) DEFAULT NULL,
  `type` text,
  `best_sale` int(11) NOT NULL DEFAULT '0',
  `onsale` int(11) NOT NULL DEFAULT '0',
  `onsale_price` float DEFAULT NULL,
  `invoice_details` text,
  `image_large_details` text NOT NULL,
  `review` text,
  `description` text,
  `tag` text,
  `specification` text,
  `video` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`id`, `product_id`, `supplier_id`, `category_id`, `product_name`, `price`, `supplier_price`, `unit`, `product_model`, `product_details`, `image_thumb`, `brand_id`, `variants`, `default_variant`, `type`, `best_sale`, `onsale`, `onsale_price`, `invoice_details`, `image_large_details`, `review`, `description`, `tag`, `specification`, `video`, `status`) VALUES
(1, '98366399', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_3', 200, 150, '', 'P3', 'product details', 'my-assets/image/product/thumb/5852af8e1870db74fb43e5234f8cbeb0.jpg', 'W6TGN2N16JUL5XA', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 0, 0, NULL, 'invoice details 1 ', 'my-assets/image/product/5852af8e1870db74fb43e5234f8cbeb0.jpg', 'review1', 'description 1', '', 'spec 1', '', 1),
(2, '25869255', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_4', 300, 250, '', 'P4', 'product details', 'my-assets/image/product/thumb/d8aac1ebd37a1d16e6fcbe0c4a339956.jpg', 'T36ZSIXTRZVPVEM', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, 300, 'invoice details 2', 'my-assets/image/product/d8aac1ebd37a1d16e6fcbe0c4a339956.jpg', 'review2', 'description 2', '', 'spec 2', '', 1),
(3, '21473628', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_5', 400, 350, '', 'P5', '', 'my-assets/image/product/thumb/f993579035d7691c3d367ad37bf910d3.jpg', '7XX8FG7MH7FGS87', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, NULL, '', 'my-assets/image/product/f993579035d7691c3d367ad37bf910d3.jpg', '', '', '', '', '', 1),
(4, '62572489', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_6', 500, 470, '', 'P6', '', 'my-assets/image/product/thumb/e8d15852cbbde19f38b40309b2d6e0e1.jpg', '1JDEMJYYXH1K7UQ', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, NULL, '', 'my-assets/image/product/e8d15852cbbde19f38b40309b2d6e0e1.jpg', '', '', '', '', '', 1),
(5, '11389311', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_7', 600, 570, '', 'P7', '', 'my-assets/image/product/thumb/551f0014e4e6dbf0805455534b0eab36.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, NULL, '', 'my-assets/image/product/551f0014e4e6dbf0805455534b0eab36.jpg', '', '', '', '', '', 1),
(6, '77144835', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_8', 200, 150, '', 'P8', '', 'my-assets/image/product/thumb/54490be7219193a7fb07194efcb1aab3.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, NULL, '', 'my-assets/image/product/54490be7219193a7fb07194efcb1aab3.jpg', '', '', '', '', '', 1),
(7, '64148874', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_9', 400, 350, '', 'P9', '', 'my-assets/image/product/thumb/2ed8a6979f7bb9d530bb98f6a2e3bbeb.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 0, 0, NULL, '', 'my-assets/image/product/2ed8a6979f7bb9d530bb98f6a2e3bbeb.jpg', '', '', '', '', '', 1),
(8, '16789548', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_10', 500, 450, '', 'P10', '', 'my-assets/image/product/thumb/185c4176d4c6f6fd0f188c0cb89c188d.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 1, 450, '', 'my-assets/image/product/185c4176d4c6f6fd0f188c0cb89c188d.jpg', '', '', '', '', '', 1),
(9, '69428333', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_11', 300, 250, '', 'P11', '', 'my-assets/image/product/thumb/6964e1feeae391db310c5230cff125e2.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 1, 0, NULL, '', 'my-assets/image/product/6964e1feeae391db310c5230cff125e2.jpg', '', '', '', '', '', 1),
(10, '22161617', 'I3JRQQJSJ67GG2ZTEEU1', 'F9GNCBBPCOIEN67', 'Product_12', 100, 80, '', 'P12', '', 'my-assets/image/product/thumb/a66a7502d4d823781de7ec79c025bd63.jpg', '', '3JJRT8TG11VD1FY,DBQD7B1AGBAUZSS,MMYXJ4FWYXAHXPJ', 'DBQD7B1AGBAUZSS', '', 0, 1, 90, '', 'my-assets/image/product/a66a7502d4d823781de7ec79c025bd63.jpg', '', '', '', '', '', 1),
(11, '85299733', 'I3JRQQJSJ67GG2ZTEEU1', '2ZQO76F6D976HCU', 'Electronics Toys', 1000, 800, '', 'Techno Hight Barking, Waging Tail, Walking and Jumping Puppy, Battery Operated Back Flip Jumping Dog', '', 'my-assets/image/product/thumb/49742b91c14c029cef1ac018637bffd9.jpg', '', '3JJRT8TG11VD1FY', '3JJRT8TG11VD1FY', '', 0, 0, NULL, '', 'my-assets/image/product/49742b91c14c029cef1ac018637bffd9.jpg', '', '', '', '', '', 1),
(12, '83997459', 'I3JRQQJSJ67GG2ZTEEU1', '2ZQO76F6D976HCU', 'Webby Walkie Talkie Toy with Range Upto 100 Feet (Multi-Color)', 2000, 1500, '', 'Webby Walkie Talkie Toy with Range Upto 100 Feet (Multi-Color)', '<h2 class=\"a-size-mini a-spacing-none a-color-base s-line-clamp-4\" xss=removed><br></h2>', 'my-assets/image/product/thumb/6e08b9f46860de1c439c05b84f54a334.jpg', '', 'MMYXJ4FWYXAHXPJ', 'MMYXJ4FWYXAHXPJ', '', 0, 0, NULL, '', 'my-assets/image/product/6e08b9f46860de1c439c05b84f54a334.jpg', '', '', '', '', '', 1),
(13, '31277867', 'I3JRQQJSJ67GG2ZTEEU1', '2ZQO76F6D976HCU', 'BVM GROUP Talking Tom Toy for Kids Speaking Robot Cat Repeats What You Say Best Birthday Gift for Boy and Gir', 2000, 1800, '', 'BVM GROUP Talking Tom Toy for Kids Speaking Robot Cat Repeats What You Say Best Birthday Gift for Bo', '', 'my-assets/image/product/thumb/5e09db5a1ca77a498c3b4f1feea487f1.jpg', '', '3JJRT8TG11VD1FY', '3JJRT8TG11VD1FY', '', 0, 0, NULL, '', 'my-assets/image/product/5e09db5a1ca77a498c3b4f1feea487f1.jpg', '', '', '', '', '', 1),
(14, '98875137', 'I3JRQQJSJ67GG2ZTEEU1', '2ZQO76F6D976HCU', 'Sunshine Dancing Robot with 3D Lights and Music, Multi Color', 4000, 3600, '', 'Sunshine Dancing Robot with 3D Lights and Music, Multi Color', '', 'my-assets/image/product/thumb/3d93ce04a71c3c1875cc9e86b72a2aed.jpg', '', '3JJRT8TG11VD1FY', '3JJRT8TG11VD1FY', '', 0, 0, NULL, '', 'my-assets/image/product/3d93ce04a71c3c1875cc9e86b72a2aed.jpg', '', '', '', '', '', 1),
(15, '14472766', 'I3JRQQJSJ67GG2ZTEEU1', 'YDU3RFGACXON9T9', 'DZert Minnie Kids Bags for School 10Ltr Baby/Boys/Girls Velvet Backpack (Pink) by DZert', 2000, 1500, '', 'DZert Minnie Kids Bags for School 10Ltr Baby/Boys/Girls Velvet Backpack (Pink) by DZert', '', 'my-assets/image/product/thumb/ccfcc7d3c05ba6798366af638f8d12ab.jpg', '', 'DBQD7B1AGBAUZSS', 'DBQD7B1AGBAUZSS', '', 0, 0, NULL, '', 'my-assets/image/product/ccfcc7d3c05ba6798366af638f8d12ab.jpg', '', '', '', '', '', 1),
(16, '46415352', 'I3JRQQJSJ67GG2ZTEEU1', 'YDU3RFGACXON9T9', 'Kuber Industries Disney Mickey Mouse 15 inch Polyster School Bag/Backpack for Kids, Red & Black-DISNEY001', 1500, 100, '', 'Kuber Industries Disney Mickey Mouse 15 inch Polyster School Bag/Backpack for Kids, Red & Black-DISN', '', 'my-assets/image/product/thumb/455a7413a6c2b917d8e192a3861308ae.jpg', '', '3JJRT8TG11VD1FY', '3JJRT8TG11VD1FY', '', 0, 0, NULL, '', 'my-assets/image/product/455a7413a6c2b917d8e192a3861308ae.jpg', '', '', '', '', '', 1),
(17, '99467578', 'I3JRQQJSJ67GG2ZTEEU1', 'RPLNBN5OGTQGY99', 'ACE ENGLISH GRAMMER AND COMPOSITION CLASS 6 ORIENT BLACKSWAN', 300, 280, '', '1', '', 'my-assets/image/product/thumb/981f2b32b22c1f5f0d331dd02a51804f.jpg', '', 'PWB7EHUPWMGWS56', 'PWB7EHUPWMGWS56', '', 0, 0, NULL, '', 'my-assets/image/product/981f2b32b22c1f5f0d331dd02a51804f.jpg', '', '', '', '', '', 1),
(18, '79718542', 'I3JRQQJSJ67GG2ZTEEU1', 'RPLNBN5OGTQGY99', 'Mathematics Olympiad For Class 2nd Paperback', 500, 480, '', 'Mathematics Olympiad For Class 2nd Paperback', '', 'my-assets/image/product/thumb/0a945b7326595a07b91385941448590f.jpg', '', 'PWB7EHUPWMGWS56', 'PWB7EHUPWMGWS56', '', 0, 0, NULL, '', 'my-assets/image/product/0a945b7326595a07b91385941448590f.jpg', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `purchase_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `store_id` varchar(255) DEFAULT NULL,
  `wearhouse_id` varchar(255) DEFAULT NULL,
  `grand_total_amount` float NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `purchase_details` text NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`purchase_id`, `invoice_no`, `supplier_id`, `store_id`, `wearhouse_id`, `grand_total_amount`, `purchase_date`, `purchase_details`, `user_id`, `status`) VALUES
('MXFA4S9NF2ZBTBU', '55645', 'I3JRQQJSJ67GG2ZTEEU1', '3384CTWDU7QZFRO', '', 3095000, '09-07-2020', '', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase_details`
--

CREATE TABLE `product_purchase_details` (
  `purchase_detail_id` varchar(100) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `store_id` varchar(100) DEFAULT NULL,
  `wearhouse_id` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `total_amount` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase_details`
--

INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `variant_id`, `store_id`, `wearhouse_id`, `quantity`, `rate`, `total_amount`, `status`) VALUES
('3BGI4G96X7WQ98B', 'MXFA4S9NF2ZBTBU', '98366399', 'MMYXJ4FWYXAHXPJ', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1),
('596M7OPVOZROOK5', 'MXFA4S9NF2ZBTBU', '21473628', 'MMYXJ4FWYXAHXPJ', '3384CTWDU7QZFRO', '', 500, 350, 175000, 1),
('793KMUTRWEZPCAP', 'MXFA4S9NF2ZBTBU', '69428333', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 250, 125000, 1),
('7TDPCUNP786LLDT', 'MXFA4S9NF2ZBTBU', '22161617', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 80, 40000, 1),
('93JHENEWX6YDXOK', 'MXFA4S9NF2ZBTBU', '64148874', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 350, 175000, 1),
('9GVJOWZCFT7XOO6', 'MXFA4S9NF2ZBTBU', '62572489', 'MMYXJ4FWYXAHXPJ', '3384CTWDU7QZFRO', '', 500, 470, 235000, 1),
('9R1ZMP565QNSAJK', 'MXFA4S9NF2ZBTBU', '77144835', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1),
('ADL4831DBGYIA23', 'MXFA4S9NF2ZBTBU', '16789548', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 450, 225000, 1),
('BJ71YICNI1737MG', 'MXFA4S9NF2ZBTBU', '21473628', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 350, 175000, 1),
('CTJ7BN2ST8I5AVP', 'MXFA4S9NF2ZBTBU', '22161617', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 80, 40000, 1),
('EPXAPBTX5WB2YAS', 'MXFA4S9NF2ZBTBU', '16789548', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 450, 225000, 1),
('EU7KT42SKHD18PW', 'MXFA4S9NF2ZBTBU', '62572489', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 470, 235000, 1),
('IB5MPP93KOKNQIP', 'MXFA4S9NF2ZBTBU', '98366399', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1),
('MUUAXNXR8OBPXF7', 'MXFA4S9NF2ZBTBU', '11389311', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 570, 285000, 1),
('O3832XANWST7QNM', 'MXFA4S9NF2ZBTBU', '77144835', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1),
('ONE1TEFZ75A1IMC', 'MXFA4S9NF2ZBTBU', '98366399', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1),
('SDHRW3IE7Q61768', 'MXFA4S9NF2ZBTBU', '69428333', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 250, 125000, 1),
('U84HUCEBZW1D8GT', 'MXFA4S9NF2ZBTBU', '64148874', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 350, 175000, 1),
('VO7DCWMGNI979NM', 'MXFA4S9NF2ZBTBU', '11389311', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 570, 285000, 1),
('WDP9RT7ZLN35ATO', 'MXFA4S9NF2ZBTBU', '25869255', 'DBQD7B1AGBAUZSS', '3384CTWDU7QZFRO', '', 500, 250, 125000, 1),
('WQBXB1WZUP8GX8T', 'MXFA4S9NF2ZBTBU', '98366399', '3JJRT8TG11VD1FY', '3384CTWDU7QZFRO', '', 500, 150, 75000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `product_review_id` varchar(100) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `reviewer_id` varchar(255) DEFAULT NULL,
  `comments` text,
  `rate` varchar(100) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `total_amount` float NOT NULL,
  `quotation` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `total_discount` float DEFAULT NULL,
  `quotation_discount` float NOT NULL COMMENT 'total_discount + quotation_discount',
  `service_charge` float DEFAULT NULL,
  `paid_amount` float NOT NULL,
  `due_amount` float NOT NULL,
  `file_path` text,
  `status` int(2) NOT NULL COMMENT '1=not_invoice,2=invoiced'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_details`
--

CREATE TABLE `quotation_details` (
  `quotation_details_id` varchar(100) NOT NULL,
  `quotation_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `quantity` int(8) NOT NULL,
  `rate` float NOT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` float NOT NULL,
  `discount` float DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_tax_col_details`
--

CREATE TABLE `quotation_tax_col_details` (
  `quot_tax_col_de_id` varchar(100) NOT NULL,
  `quotation_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_tax_col_summary`
--

CREATE TABLE `quotation_tax_col_summary` (
  `quot_tax_col_id` varchar(100) NOT NULL,
  `quotation_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `tax_amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `received`
--

CREATE TABLE `received` (
  `transection_id` varchar(200) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `store_id` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `description` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `site_align`, `footer_text`) VALUES
(2, 'Dynamic Admin Panel', '98 Green Road, Farmgate, Dhaka-1215.', 'bdtask@gmail.com', '0123456789', 'assets/img/icons/logo.png', 'assets/img/icons/m.png', 'english', 'LTR', '2017Â©Copyright');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE `shipping_info` (
  `shiping_info_id` int(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `customer_short_address` text NOT NULL,
  `customer_address_1` text NOT NULL,
  `customer_address_2` text NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_info`
--

INSERT INTO `shipping_info` (`shiping_info_id`, `customer_id`, `order_id`, `customer_name`, `first_name`, `last_name`, `customer_short_address`, `customer_address_1`, `customer_address_2`, `customer_mobile`, `customer_email`, `city`, `state`, `country`, `zip`, `company`) VALUES
(1, 'I1QWPK34FVMWOJY', '3678BSARV34SES2', 'aaaaaa bbbbb', 'aaaaaa', 'bbbbb', 'dhaka,Dhaka,Bangladesh,', '45435', '23423', '11212', 'abc@abc.com', 'dhaka', 'Dhaka', '18', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method`
--

CREATE TABLE `shipping_method` (
  `method_id` int(11) NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `charge_amount` float NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_method`
--

INSERT INTO `shipping_method` (`method_id`, `method_name`, `details`, `charge_amount`, `position`) VALUES
(1, 'Inside the city', '', 0, 1),
(2, 'Outside the city', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` varchar(100) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_category` varchar(255) DEFAULT NULL,
  `slider_position` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_link`, `slider_image`, `slider_category`, `slider_position`, `status`) VALUES
('DLHEPY7IUPOJKAD', 'https://demo453464315.com', 'my-assets/image/slider/ca47da198e25a27b6c7c0d37eb9fba82.jpg', '', 1, 1),
('T17X8HSQ8W8MYG1', 'https://demo453464315.com', 'my-assets/image/slider/4d4a2f55be2c0f046cb281aefb68f629.jpg', '', 2, 1),
('ZFTN9GODSNWAN7Q', 'https://demo453464315.com', 'my-assets/image/slider/aaf9b565ecadcb2a20cadd736baaa4a3.jpg', '', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_configuration`
--

CREATE TABLE `sms_configuration` (
  `id` int(11) NOT NULL,
  `gateway` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sms_from` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_configuration`
--

INSERT INTO `sms_configuration` (`id`, `gateway`, `user_name`, `userid`, `password`, `status`, `link`, `sms_from`, `created_at`, `updated_at`) VALUES
(2, 'nexmo', 'd7a32ebc', '', 'SYCgDWZGgF8IDzx5', 0, 'https://www.nexmo.com/', 'isshue', '2020-08-23 07:46:20', '2018-12-10 19:00:00'),
(3, 'budgetsms', 'user1', '21547', '1e753da74', 1, 'https://www.budgetsms.net/', 'budgetsms', '2020-08-23 07:46:28', '2018-12-10 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sms_template`
--

CREATE TABLE `sms_template` (
  `id` int(11) NOT NULL,
  `template_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `default_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_template`
--

INSERT INTO `sms_template` (`id`, `template_name`, `message`, `type`, `status`, `default_status`, `created_at`, `updated_at`) VALUES
(1, 'one', 'your registration is complete', 'Registration', 1, 1, '2020-08-23 07:58:41', '2020-08-23 13:58:53'),
(2, 'two', 'your order {id} is completed', 'Order', 1, 1, '2020-08-23 07:58:45', '2020-08-23 13:58:53'),
(3, 'three', 'your order {id} is processing', 'Processing', 1, 1, '2020-08-23 07:58:48', '2020-08-23 13:58:53'),
(5, 'four', 'your order {id} is shipped', 'Shipped', 1, 1, '2020-08-23 07:58:53', '2020-08-23 13:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `social_auth`
--

CREATE TABLE `social_auth` (
  `id` int(11) NOT NULL,
  `name` text,
  `app_id` text,
  `app_secret` text,
  `api_key` text,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `soft_setting`
--

CREATE TABLE `soft_setting` (
  `setting_id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT '1' COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL,
  `sms_service` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft_setting`
--

INSERT INTO `soft_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `footer_text`, `country_id`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `sms_service`) VALUES
(1, 'my-assets/image/logo/8e63ede7099672f001cce46227fa9f0f.jpg', 'my-assets/image/logo/741c52cec57ad2b99d8587078eeda601.jpg', 'my-assets/image/logo/a18f82c4753cdb4c557632a9b672881d.jpg', 'Developed by Magnetontech', 101, 'english', '0', 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101),
(26, 'Nagaland', 101),
(27, 'Narora', 101),
(28, 'Natwar', 101),
(29, 'Odisha', 101),
(30, 'Paschim Medinipur', 101),
(31, 'Pondicherry', 101),
(32, 'Punjab', 101),
(33, 'Rajasthan', 101),
(34, 'Sikkim', 101),
(35, 'Tamil Nadu', 101),
(36, 'Telangana', 101),
(37, 'Tripura', 101),
(38, 'Uttar Pradesh', 101),
(39, 'Uttarakhand', 101),
(40, 'Vaishali', 101),
(41, 'West Bengal', 101),
(42, 'Badakhshan', 1),
(43, 'Badgis', 1),
(44, 'Baglan', 1),
(45, 'Balkh', 1),
(46, 'Bamiyan', 1),
(47, 'Farah', 1),
(48, 'Faryab', 1),
(49, 'Gawr', 1),
(50, 'Gazni', 1),
(51, 'Herat', 1),
(52, 'Hilmand', 1),
(53, 'Jawzjan', 1),
(54, 'Kabul', 1),
(55, 'Kapisa', 1),
(56, 'Khawst', 1),
(57, 'Kunar', 1),
(58, 'Lagman', 1),
(59, 'Lawghar', 1),
(60, 'Nangarhar', 1),
(61, 'Nimruz', 1),
(62, 'Nuristan', 1),
(63, 'Paktika', 1),
(64, 'Paktiya', 1),
(65, 'Parwan', 1),
(66, 'Qandahar', 1),
(67, 'Qunduz', 1),
(68, 'Samangan', 1),
(69, 'Sar-e Pul', 1),
(70, 'Takhar', 1),
(71, 'Uruzgan', 1),
(72, 'Wardag', 1),
(73, 'Zabul', 1),
(74, 'Berat', 2),
(75, 'Bulqize', 2),
(76, 'Delvine', 2),
(77, 'Devoll', 2),
(78, 'Dibre', 2),
(79, 'Durres', 2),
(80, 'Elbasan', 2),
(81, 'Fier', 2),
(82, 'Gjirokaster', 2),
(83, 'Gramsh', 2),
(84, 'Has', 2),
(85, 'Kavaje', 2),
(86, 'Kolonje', 2),
(87, 'Korce', 2),
(88, 'Kruje', 2),
(89, 'Kucove', 2),
(90, 'Kukes', 2),
(91, 'Kurbin', 2),
(92, 'Lezhe', 2),
(93, 'Librazhd', 2),
(94, 'Lushnje', 2),
(95, 'Mallakaster', 2),
(96, 'Malsi e Madhe', 2),
(97, 'Mat', 2),
(98, 'Mirdite', 2),
(99, 'Peqin', 2),
(100, 'Permet', 2),
(101, 'Pogradec', 2),
(102, 'Puke', 2),
(103, 'Sarande', 2),
(104, 'Shkoder', 2),
(105, 'Skrapar', 2),
(106, 'Tepelene', 2),
(107, 'Tirane', 2),
(108, 'Tropoje', 2),
(109, 'Vlore', 2),
(110, 'Ayn Daflah', 3),
(111, 'Ayn Tamushanat', 3),
(112, 'Adrar', 3),
(113, 'Algiers', 3),
(114, 'Annabah', 3),
(115, 'Bashshar', 3),
(116, 'Batnah', 3),
(117, 'Bijayah', 3),
(118, 'Biskrah', 3),
(119, 'Blidah', 3),
(120, 'Buirah', 3),
(121, 'Bumardas', 3),
(122, 'Burj Bu Arririj', 3),
(123, 'Ghalizan', 3),
(124, 'Ghardayah', 3),
(125, 'Ilizi', 3),
(126, 'Jijili', 3),
(127, 'Jilfah', 3),
(128, 'Khanshalah', 3),
(129, 'Masilah', 3),
(130, 'Midyah', 3),
(131, 'Milah', 3),
(132, 'Muaskar', 3),
(133, 'Mustaghanam', 3),
(134, 'Naama', 3),
(135, 'Oran', 3),
(136, 'Ouargla', 3),
(137, 'Qalmah', 3),
(138, 'Qustantinah', 3),
(139, 'Sakikdah', 3),
(140, 'Satif', 3),
(141, 'Sayda\'', 3),
(142, 'Sidi ban-al-\'Abbas', 3),
(143, 'Suq Ahras', 3),
(144, 'Tamanghasat', 3),
(145, 'Tibazah', 3),
(146, 'Tibissah', 3),
(147, 'Tilimsan', 3),
(148, 'Tinduf', 3),
(149, 'Tisamsilt', 3),
(150, 'Tiyarat', 3),
(151, 'Tizi Wazu', 3),
(152, 'Umm-al-Bawaghi', 3),
(153, 'Wahran', 3),
(154, 'Warqla', 3),
(155, 'Wilaya d Alger', 3),
(156, 'Wilaya de Bejaia', 3),
(157, 'Wilaya de Constantine', 3),
(158, 'al-Aghwat', 3),
(159, 'al-Bayadh', 3),
(160, 'al-Jaza\'ir', 3),
(161, 'al-Wad', 3),
(162, 'ash-Shalif', 3),
(163, 'at-Tarif', 3),
(164, 'Eastern', 4),
(165, 'Manu\'a', 4),
(166, 'Swains Island', 4),
(167, 'Western', 4),
(168, 'Andorra la Vella', 5),
(169, 'Canillo', 5),
(170, 'Encamp', 5),
(171, 'La Massana', 5),
(172, 'Les Escaldes', 5),
(173, 'Ordino', 5),
(174, 'Sant Julia de Loria', 5),
(175, 'Bengo', 6),
(176, 'Benguela', 6),
(177, 'Bie', 6),
(178, 'Cabinda', 6),
(179, 'Cunene', 6),
(180, 'Huambo', 6),
(181, 'Huila', 6),
(182, 'Kuando-Kubango', 6),
(183, 'Kwanza Norte', 6),
(184, 'Kwanza Sul', 6),
(185, 'Luanda', 6),
(186, 'Lunda Norte', 6),
(187, 'Lunda Sul', 6),
(188, 'Malanje', 6),
(189, 'Moxico', 6),
(190, 'Namibe', 6),
(191, 'Uige', 6),
(192, 'Zaire', 6),
(193, 'Other Provinces', 7),
(194, 'Sector claimed by Argentina/Ch', 8),
(195, 'Sector claimed by Argentina/UK', 8),
(196, 'Sector claimed by Australia', 8),
(197, 'Sector claimed by France', 8),
(198, 'Sector claimed by New Zealand', 8),
(199, 'Sector claimed by Norway', 8),
(200, 'Unclaimed Sector', 8),
(201, 'Barbuda', 9),
(202, 'Saint George', 9),
(203, 'Saint John', 9),
(204, 'Saint Mary', 9),
(205, 'Saint Paul', 9),
(206, 'Saint Peter', 9),
(207, 'Saint Philip', 9),
(208, 'Buenos Aires', 10),
(209, 'Catamarca', 10),
(210, 'Chaco', 10),
(211, 'Chubut', 10),
(212, 'Cordoba', 10),
(213, 'Corrientes', 10),
(214, 'Distrito Federal', 10),
(215, 'Entre Rios', 10),
(216, 'Formosa', 10),
(217, 'Jujuy', 10),
(218, 'La Pampa', 10),
(219, 'La Rioja', 10),
(220, 'Mendoza', 10),
(221, 'Misiones', 10),
(222, 'Neuquen', 10),
(223, 'Rio Negro', 10),
(224, 'Salta', 10),
(225, 'San Juan', 10),
(226, 'San Luis', 10),
(227, 'Santa Cruz', 10),
(228, 'Santa Fe', 10),
(229, 'Santiago del Estero', 10),
(230, 'Tierra del Fuego', 10),
(231, 'Tucuman', 10),
(232, 'Aragatsotn', 11),
(233, 'Ararat', 11),
(234, 'Armavir', 11),
(235, 'Gegharkunik', 11),
(236, 'Kotaik', 11),
(237, 'Lori', 11),
(238, 'Shirak', 11),
(239, 'Stepanakert', 11),
(240, 'Syunik', 11),
(241, 'Tavush', 11),
(242, 'Vayots Dzor', 11),
(243, 'Yerevan', 11),
(244, 'Aruba', 12),
(245, 'Auckland', 13),
(246, 'Australian Capital Territory', 13),
(247, 'Balgowlah', 13),
(248, 'Balmain', 13),
(249, 'Bankstown', 13),
(250, 'Baulkham Hills', 13),
(251, 'Bonnet Bay', 13),
(252, 'Camberwell', 13),
(253, 'Carole Park', 13),
(254, 'Castle Hill', 13),
(255, 'Caulfield', 13),
(256, 'Chatswood', 13),
(257, 'Cheltenham', 13),
(258, 'Cherrybrook', 13),
(259, 'Clayton', 13),
(260, 'Collingwood', 13),
(261, 'Frenchs Forest', 13),
(262, 'Hawthorn', 13),
(263, 'Jannnali', 13),
(264, 'Knoxfield', 13),
(265, 'Melbourne', 13),
(266, 'New South Wales', 13),
(267, 'Northern Territory', 13),
(268, 'Perth', 13),
(269, 'Queensland', 13),
(270, 'South Australia', 13),
(271, 'Tasmania', 13),
(272, 'Templestowe', 13),
(273, 'Victoria', 13),
(274, 'Werribee south', 13),
(275, 'Western Australia', 13),
(276, 'Wheeler', 13),
(277, 'Bundesland Salzburg', 14),
(278, 'Bundesland Steiermark', 14),
(279, 'Bundesland Tirol', 14),
(280, 'Burgenland', 14),
(281, 'Carinthia', 14),
(282, 'Karnten', 14),
(283, 'Liezen', 14),
(284, 'Lower Austria', 14),
(285, 'Niederosterreich', 14),
(286, 'Oberosterreich', 14),
(287, 'Salzburg', 14),
(288, 'Schleswig-Holstein', 14),
(289, 'Steiermark', 14),
(290, 'Styria', 14),
(291, 'Tirol', 14),
(292, 'Upper Austria', 14),
(293, 'Vorarlberg', 14),
(294, 'Wien', 14),
(295, 'Abseron', 15),
(296, 'Baki Sahari', 15),
(297, 'Ganca', 15),
(298, 'Ganja', 15),
(299, 'Kalbacar', 15),
(300, 'Lankaran', 15),
(301, 'Mil-Qarabax', 15),
(302, 'Mugan-Salyan', 15),
(303, 'Nagorni-Qarabax', 15),
(304, 'Naxcivan', 15),
(305, 'Priaraks', 15),
(306, 'Qazax', 15),
(307, 'Saki', 15),
(308, 'Sirvan', 15),
(309, 'Xacmaz', 15),
(310, 'Abaco', 16),
(311, 'Acklins Island', 16),
(312, 'Andros', 16),
(313, 'Berry Islands', 16),
(314, 'Biminis', 16),
(315, 'Cat Island', 16),
(316, 'Crooked Island', 16),
(317, 'Eleuthera', 16),
(318, 'Exuma and Cays', 16),
(319, 'Grand Bahama', 16),
(320, 'Inagua Islands', 16),
(321, 'Long Island', 16),
(322, 'Mayaguana', 16),
(323, 'New Providence', 16),
(324, 'Ragged Island', 16),
(325, 'Rum Cay', 16),
(326, 'San Salvador', 16),
(327, '\'Isa', 17),
(328, 'Badiyah', 17),
(329, 'Hidd', 17),
(330, 'Jidd Hafs', 17),
(331, 'Mahama', 17),
(332, 'Manama', 17),
(333, 'Sitrah', 17),
(334, 'al-Manamah', 17),
(335, 'al-Muharraq', 17),
(336, 'ar-Rifa\'a', 17),
(337, 'Bagar Hat', 18),
(338, 'Bandarban', 18),
(339, 'Barguna', 18),
(340, 'Barisal', 18),
(341, 'Bhola', 18),
(342, 'Bogora', 18),
(343, 'Brahman Bariya', 18),
(344, 'Chandpur', 18),
(345, 'Chattagam', 18),
(346, 'Chittagong Division', 18),
(347, 'Chuadanga', 18),
(348, 'Dhaka', 18),
(349, 'Dinajpur', 18),
(350, 'Faridpur', 18),
(351, 'Feni', 18),
(352, 'Gaybanda', 18),
(353, 'Gazipur', 18),
(354, 'Gopalganj', 18),
(355, 'Habiganj', 18),
(356, 'Jaipur Hat', 18),
(357, 'Jamalpur', 18),
(358, 'Jessor', 18),
(359, 'Jhalakati', 18),
(360, 'Jhanaydah', 18),
(361, 'Khagrachhari', 18),
(362, 'Khulna', 18),
(363, 'Kishorganj', 18),
(364, 'Koks Bazar', 18),
(365, 'Komilla', 18),
(366, 'Kurigram', 18),
(367, 'Kushtiya', 18),
(368, 'Lakshmipur', 18),
(369, 'Lalmanir Hat', 18),
(370, 'Madaripur', 18),
(371, 'Magura', 18),
(372, 'Maimansingh', 18),
(373, 'Manikganj', 18),
(374, 'Maulvi Bazar', 18),
(375, 'Meherpur', 18),
(376, 'Munshiganj', 18),
(377, 'Naral', 18),
(378, 'Narayanganj', 18),
(379, 'Narsingdi', 18),
(380, 'Nator', 18),
(381, 'Naugaon', 18),
(382, 'Nawabganj', 18),
(383, 'Netrakona', 18),
(384, 'Nilphamari', 18),
(385, 'Noakhali', 18),
(386, 'Pabna', 18),
(387, 'Panchagarh', 18),
(388, 'Patuakhali', 18),
(389, 'Pirojpur', 18),
(390, 'Rajbari', 18),
(391, 'Rajshahi', 18),
(392, 'Rangamati', 18),
(393, 'Rangpur', 18),
(394, 'Satkhira', 18),
(395, 'Shariatpur', 18),
(396, 'Sherpur', 18),
(397, 'Silhat', 18),
(398, 'Sirajganj', 18),
(399, 'Sunamganj', 18),
(400, 'Tangayal', 18),
(401, 'Thakurgaon', 18),
(402, 'Christ Church', 19),
(403, 'Saint Andrew', 19),
(404, 'Saint George', 19),
(405, 'Saint James', 19),
(406, 'Saint John', 19),
(407, 'Saint Joseph', 19),
(408, 'Saint Lucy', 19),
(409, 'Saint Michael', 19),
(410, 'Saint Peter', 19),
(411, 'Saint Philip', 19),
(412, 'Saint Thomas', 19),
(413, 'Brest', 20),
(414, 'Homjel\'', 20),
(415, 'Hrodna', 20),
(416, 'Mahiljow', 20),
(417, 'Mahilyowskaya Voblasts', 20),
(418, 'Minsk', 20),
(419, 'Minskaja Voblasts\'', 20),
(420, 'Petrik', 20),
(421, 'Vicebsk', 20),
(422, 'Antwerpen', 21),
(423, 'Berchem', 21),
(424, 'Brabant', 21),
(425, 'Brabant Wallon', 21),
(426, 'Brussel', 21),
(427, 'East Flanders', 21),
(428, 'Hainaut', 21),
(429, 'Liege', 21),
(430, 'Limburg', 21),
(431, 'Luxembourg', 21),
(432, 'Namur', 21),
(433, 'Ontario', 21),
(434, 'Oost-Vlaanderen', 21),
(435, 'Provincie Brabant', 21),
(436, 'Vlaams-Brabant', 21),
(437, 'Wallonne', 21),
(438, 'West-Vlaanderen', 21),
(439, 'Belize', 22),
(440, 'Cayo', 22),
(441, 'Corozal', 22),
(442, 'Orange Walk', 22),
(443, 'Stann Creek', 22),
(444, 'Toledo', 22),
(445, 'Alibori', 23),
(446, 'Atacora', 23),
(447, 'Atlantique', 23),
(448, 'Borgou', 23),
(449, 'Collines', 23),
(450, 'Couffo', 23),
(451, 'Donga', 23),
(452, 'Littoral', 23),
(453, 'Mono', 23),
(454, 'Oueme', 23),
(455, 'Plateau', 23),
(456, 'Zou', 23),
(457, 'Hamilton', 24),
(458, 'Saint George', 24),
(459, 'Bumthang', 25),
(460, 'Chhukha', 25),
(461, 'Chirang', 25),
(462, 'Daga', 25),
(463, 'Geylegphug', 25),
(464, 'Ha', 25),
(465, 'Lhuntshi', 25),
(466, 'Mongar', 25),
(467, 'Pemagatsel', 25),
(468, 'Punakha', 25),
(469, 'Rinpung', 25),
(470, 'Samchi', 25),
(471, 'Samdrup Jongkhar', 25),
(472, 'Shemgang', 25),
(473, 'Tashigang', 25),
(474, 'Timphu', 25),
(475, 'Tongsa', 25),
(476, 'Wangdiphodrang', 25),
(477, 'Beni', 26),
(478, 'Chuquisaca', 26),
(479, 'Cochabamba', 26),
(480, 'La Paz', 26),
(481, 'Oruro', 26),
(482, 'Pando', 26),
(483, 'Potosi', 26),
(484, 'Santa Cruz', 26),
(485, 'Tarija', 26),
(486, 'Federacija Bosna i Hercegovina', 27),
(487, 'Republika Srpska', 27),
(488, 'Central Bobonong', 28),
(489, 'Central Boteti', 28),
(490, 'Central Mahalapye', 28),
(491, 'Central Serowe-Palapye', 28),
(492, 'Central Tutume', 28),
(493, 'Chobe', 28),
(494, 'Francistown', 28),
(495, 'Gaborone', 28),
(496, 'Ghanzi', 28),
(497, 'Jwaneng', 28),
(498, 'Kgalagadi North', 28),
(499, 'Kgalagadi South', 28),
(500, 'Kgatleng', 28),
(501, 'Kweneng', 28),
(502, 'Lobatse', 28),
(503, 'Ngamiland', 28),
(504, 'Ngwaketse', 28),
(505, 'North East', 28),
(506, 'Okavango', 28),
(507, 'Orapa', 28),
(508, 'Selibe Phikwe', 28),
(509, 'South East', 28),
(510, 'Sowa', 28),
(511, 'Bouvet Island', 29),
(512, 'Acre', 30),
(513, 'Alagoas', 30),
(514, 'Amapa', 30),
(515, 'Amazonas', 30),
(516, 'Bahia', 30),
(517, 'Ceara', 30),
(518, 'Distrito Federal', 30),
(519, 'Espirito Santo', 30),
(520, 'Estado de Sao Paulo', 30),
(521, 'Goias', 30),
(522, 'Maranhao', 30),
(523, 'Mato Grosso', 30),
(524, 'Mato Grosso do Sul', 30),
(525, 'Minas Gerais', 30),
(526, 'Para', 30),
(527, 'Paraiba', 30),
(528, 'Parana', 30),
(529, 'Pernambuco', 30),
(530, 'Piaui', 30),
(531, 'Rio Grande do Norte', 30),
(532, 'Rio Grande do Sul', 30),
(533, 'Rio de Janeiro', 30),
(534, 'Rondonia', 30),
(535, 'Roraima', 30),
(536, 'Santa Catarina', 30),
(537, 'Sao Paulo', 30),
(538, 'Sergipe', 30),
(539, 'Tocantins', 30),
(540, 'British Indian Ocean Territory', 31),
(541, 'Belait', 32),
(542, 'Brunei-Muara', 32),
(543, 'Temburong', 32),
(544, 'Tutong', 32),
(545, 'Blagoevgrad', 33),
(546, 'Burgas', 33),
(547, 'Dobrich', 33),
(548, 'Gabrovo', 33),
(549, 'Haskovo', 33),
(550, 'Jambol', 33),
(551, 'Kardzhali', 33),
(552, 'Kjustendil', 33),
(553, 'Lovech', 33),
(554, 'Montana', 33),
(555, 'Oblast Sofiya-Grad', 33),
(556, 'Pazardzhik', 33),
(557, 'Pernik', 33),
(558, 'Pleven', 33),
(559, 'Plovdiv', 33),
(560, 'Razgrad', 33),
(561, 'Ruse', 33),
(562, 'Shumen', 33),
(563, 'Silistra', 33),
(564, 'Sliven', 33),
(565, 'Smoljan', 33),
(566, 'Sofija grad', 33),
(567, 'Sofijska oblast', 33),
(568, 'Stara Zagora', 33),
(569, 'Targovishte', 33),
(570, 'Varna', 33),
(571, 'Veliko Tarnovo', 33),
(572, 'Vidin', 33),
(573, 'Vraca', 33),
(574, 'Yablaniza', 33),
(575, 'Bale', 34),
(576, 'Bam', 34),
(577, 'Bazega', 34),
(578, 'Bougouriba', 34),
(579, 'Boulgou', 34),
(580, 'Boulkiemde', 34),
(581, 'Comoe', 34),
(582, 'Ganzourgou', 34),
(583, 'Gnagna', 34),
(584, 'Gourma', 34),
(585, 'Houet', 34),
(586, 'Ioba', 34),
(587, 'Kadiogo', 34),
(588, 'Kenedougou', 34),
(589, 'Komandjari', 34),
(590, 'Kompienga', 34),
(591, 'Kossi', 34),
(592, 'Kouritenga', 34),
(593, 'Kourweogo', 34),
(594, 'Leraba', 34),
(595, 'Mouhoun', 34),
(596, 'Nahouri', 34),
(597, 'Namentenga', 34),
(598, 'Noumbiel', 34),
(599, 'Oubritenga', 34),
(600, 'Oudalan', 34),
(601, 'Passore', 34),
(602, 'Poni', 34),
(603, 'Sanguie', 34),
(604, 'Sanmatenga', 34),
(605, 'Seno', 34),
(606, 'Sissili', 34),
(607, 'Soum', 34),
(608, 'Sourou', 34),
(609, 'Tapoa', 34),
(610, 'Tuy', 34),
(611, 'Yatenga', 34),
(612, 'Zondoma', 34),
(613, 'Zoundweogo', 34),
(614, 'Bubanza', 35),
(615, 'Bujumbura', 35),
(616, 'Bururi', 35),
(617, 'Cankuzo', 35),
(618, 'Cibitoke', 35),
(619, 'Gitega', 35),
(620, 'Karuzi', 35),
(621, 'Kayanza', 35),
(622, 'Kirundo', 35),
(623, 'Makamba', 35),
(624, 'Muramvya', 35),
(625, 'Muyinga', 35),
(626, 'Ngozi', 35),
(627, 'Rutana', 35),
(628, 'Ruyigi', 35),
(629, 'Banteay Mean Chey', 36),
(630, 'Bat Dambang', 36),
(631, 'Kampong Cham', 36),
(632, 'Kampong Chhnang', 36),
(633, 'Kampong Spoeu', 36),
(634, 'Kampong Thum', 36),
(635, 'Kampot', 36),
(636, 'Kandal', 36),
(637, 'Kaoh Kong', 36),
(638, 'Kracheh', 36),
(639, 'Krong Kaeb', 36),
(640, 'Krong Pailin', 36),
(641, 'Krong Preah Sihanouk', 36),
(642, 'Mondol Kiri', 36),
(643, 'Otdar Mean Chey', 36),
(644, 'Phnum Penh', 36),
(645, 'Pousat', 36),
(646, 'Preah Vihear', 36),
(647, 'Prey Veaeng', 36),
(648, 'Rotanak Kiri', 36),
(649, 'Siem Reab', 36),
(650, 'Stueng Traeng', 36),
(651, 'Svay Rieng', 36),
(652, 'Takaev', 36),
(653, 'Adamaoua', 37),
(654, 'Centre', 37),
(655, 'Est', 37),
(656, 'Littoral', 37),
(657, 'Nord', 37),
(658, 'Nord Extreme', 37),
(659, 'Nordouest', 37),
(660, 'Ouest', 37),
(661, 'Sud', 37),
(662, 'Sudouest', 37),
(663, 'Alberta', 38),
(664, 'British Columbia', 38),
(665, 'Manitoba', 38),
(666, 'New Brunswick', 38),
(667, 'Newfoundland and Labrador', 38),
(668, 'Northwest Territories', 38),
(669, 'Nova Scotia', 38),
(670, 'Nunavut', 38),
(671, 'Ontario', 38),
(672, 'Prince Edward Island', 38),
(673, 'Quebec', 38),
(674, 'Saskatchewan', 38),
(675, 'Yukon', 38),
(676, 'Boavista', 39),
(677, 'Brava', 39),
(678, 'Fogo', 39),
(679, 'Maio', 39),
(680, 'Sal', 39),
(681, 'Santo Antao', 39),
(682, 'Sao Nicolau', 39),
(683, 'Sao Tiago', 39),
(684, 'Sao Vicente', 39),
(685, 'Grand Cayman', 40),
(686, 'Bamingui-Bangoran', 41),
(687, 'Bangui', 41),
(688, 'Basse-Kotto', 41),
(689, 'Haut-Mbomou', 41),
(690, 'Haute-Kotto', 41),
(691, 'Kemo', 41),
(692, 'Lobaye', 41),
(693, 'Mambere-Kadei', 41),
(694, 'Mbomou', 41),
(695, 'Nana-Gribizi', 41),
(696, 'Nana-Mambere', 41),
(697, 'Ombella Mpoko', 41),
(698, 'Ouaka', 41),
(699, 'Ouham', 41),
(700, 'Ouham-Pende', 41),
(701, 'Sangha-Mbaere', 41),
(702, 'Vakaga', 41),
(703, 'Batha', 42),
(704, 'Biltine', 42),
(705, 'Bourkou-Ennedi-Tibesti', 42),
(706, 'Chari-Baguirmi', 42),
(707, 'Guera', 42),
(708, 'Kanem', 42),
(709, 'Lac', 42),
(710, 'Logone Occidental', 42),
(711, 'Logone Oriental', 42),
(712, 'Mayo-Kebbi', 42),
(713, 'Moyen-Chari', 42),
(714, 'Ouaddai', 42),
(715, 'Salamat', 42),
(716, 'Tandjile', 42),
(717, 'Aisen', 43),
(718, 'Antofagasta', 43),
(719, 'Araucania', 43),
(720, 'Atacama', 43),
(721, 'Bio Bio', 43),
(722, 'Coquimbo', 43),
(723, 'Libertador General Bernardo O\'', 43),
(724, 'Los Lagos', 43),
(725, 'Magellanes', 43),
(726, 'Maule', 43),
(727, 'Metropolitana', 43),
(728, 'Metropolitana de Santiago', 43),
(729, 'Tarapaca', 43),
(730, 'Valparaiso', 43),
(731, 'Anhui', 44),
(732, 'Anhui Province', 44),
(733, 'Anhui Sheng', 44),
(734, 'Aomen', 44),
(735, 'Beijing', 44),
(736, 'Beijing Shi', 44),
(737, 'Chongqing', 44),
(738, 'Fujian', 44),
(739, 'Fujian Sheng', 44),
(740, 'Gansu', 44),
(741, 'Guangdong', 44),
(742, 'Guangdong Sheng', 44),
(743, 'Guangxi', 44),
(744, 'Guizhou', 44),
(745, 'Hainan', 44),
(746, 'Hebei', 44),
(747, 'Heilongjiang', 44),
(748, 'Henan', 44),
(749, 'Hubei', 44),
(750, 'Hunan', 44),
(751, 'Jiangsu', 44),
(752, 'Jiangsu Sheng', 44),
(753, 'Jiangxi', 44),
(754, 'Jilin', 44),
(755, 'Liaoning', 44),
(756, 'Liaoning Sheng', 44),
(757, 'Nei Monggol', 44),
(758, 'Ningxia Hui', 44),
(759, 'Qinghai', 44);

-- --------------------------------------------------------

--
-- Table structure for table `store_product`
--

CREATE TABLE `store_product` (
  `store_product_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `store_set`
--

CREATE TABLE `store_set` (
  `store_id` varchar(100) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `store_address` text NOT NULL,
  `default_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_set`
--

INSERT INTO `store_set` (`store_id`, `store_name`, `store_address`, `default_status`) VALUES
('3384CTWDU7QZFRO', 'Store_a', 'Lorem ipsum dolor sit amet.', 1),
('JSG794YZP94M2QF', 'Store_b', 'Lorem ipsum dolor sit amet.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` varchar(100) NOT NULL,
  `apply_ip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_information`
--

CREATE TABLE `supplier_information` (
  `supplier_id` varchar(100) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `details` text NOT NULL,
  `website` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_information`
--

INSERT INTO `supplier_information` (`supplier_id`, `supplier_name`, `address`, `mobile`, `email`, `details`, `website`, `status`) VALUES
('I3JRQQJSJ67GG2ZTEEU1', 'Supplier_1', '', '48454656544', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ledger`
--

CREATE TABLE `supplier_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `purchase_id` varchar(100) DEFAULT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` float NOT NULL,
  `description` text NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_ledger`
--

INSERT INTO `supplier_ledger` (`transaction_id`, `purchase_id`, `supplier_id`, `invoice_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`) VALUES
('PKB71G24FCUW6J7', 'MXFA4S9NF2ZBTBU', 'I3JRQQJSJ67GG2ZTEEU1', '55645', NULL, 3095000, '', '', '', '09-07-2020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `synchronizer_setting`
--

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `synchronizer_setting`
--

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES
(8, '', '', '', '21', 'true', '');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` varchar(100) NOT NULL,
  `tax_name` varchar(100) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `status`) VALUES
('52C2SKCKGQY6Q9J', 'Income tax', 1),
('5SN9PRWPN131T4V', 'Tax 3', 1),
('H5MQN4NXJBSDX4L', 'sales tax', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax_collection_details`
--

CREATE TABLE `tax_collection_details` (
  `tax_col_de_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `variant_id` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tax_collection_summary`
--

CREATE TABLE `tax_collection_summary` (
  `tax_collection_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `tax_amount` float NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tax_product_service`
--

CREATE TABLE `tax_product_service` (
  `t_p_s_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `tax_id` varchar(100) NOT NULL,
  `tax_percentage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `terminal_payment`
--

CREATE TABLE `terminal_payment` (
  `pay_terminal_id` varchar(100) NOT NULL,
  `terminal_name` varchar(100) NOT NULL,
  `terminal_provider_company` varchar(250) NOT NULL,
  `linked_bank_account_no` varchar(100) NOT NULL,
  `customer_care_phone_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'isshue_classic', 0, '2020-08-27 14:26:41', '2020-11-24 19:32:13'),
(2, 'martbd', 0, '2020-08-31 07:09:01', '2020-11-24 19:32:17'),
(3, 'shatu', 0, '2020-08-31 07:09:01', '2020-11-24 19:32:21'),
(4, 'zaima', 1, '2020-08-31 07:09:01', '2020-10-08 18:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transfer_id` varchar(100) NOT NULL,
  `store_id` varchar(100) DEFAULT NULL,
  `warehouse_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) NOT NULL,
  `variant_id` varchar(100) NOT NULL,
  `quantity` float NOT NULL,
  `t_store_id` varchar(100) DEFAULT NULL,
  `t_warehouse_id` varchar(100) DEFAULT NULL,
  `purchase_id` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) NOT NULL,
  `transfer_by` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=store to store,2=store to warehouse,3=warehouse to store,4=warehouse to warehouse,5=purchase'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transfer_id`, `store_id`, `warehouse_id`, `product_id`, `variant_id`, `quantity`, `t_store_id`, `t_warehouse_id`, `purchase_id`, `date_time`, `transfer_by`, `status`) VALUES
('Z331N6DRMPYOPA2', '3384CTWDU7QZFRO', NULL, '16789548', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('39ZRRJO4DG6K8CV', '3384CTWDU7QZFRO', NULL, '16789548', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('WTP1OE252NEH4VI', '3384CTWDU7QZFRO', NULL, '98366399', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('J55259LI61H9NX2', '3384CTWDU7QZFRO', NULL, '69428333', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('IDOOAIKQEJR6GCG', '3384CTWDU7QZFRO', NULL, '69428333', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('16TE6CQ64Z5WAVF', '3384CTWDU7QZFRO', NULL, '22161617', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('Y3SPKCKUGFZZ2H1', '3384CTWDU7QZFRO', NULL, '22161617', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('UPP52WKDNGC23RA', '3384CTWDU7QZFRO', NULL, '64148874', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('IZBNQVZZPY21YNK', '3384CTWDU7QZFRO', NULL, '64148874', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('36YNQBZJH4NKB3I', '3384CTWDU7QZFRO', NULL, '77144835', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('ZDSZ88MSBDGRGEV', '3384CTWDU7QZFRO', NULL, '11389311', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('V7W4HT488D26ZSY', '3384CTWDU7QZFRO', NULL, '11389311', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('1257BHUN2TJNUCI', '3384CTWDU7QZFRO', NULL, '77144835', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('KS5EMQDMMHSOW4L', '3384CTWDU7QZFRO', NULL, '62572489', 'MMYXJ4FWYXAHXPJ', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('2L3FK3G4PT6RUXA', '3384CTWDU7QZFRO', NULL, '21473628', 'MMYXJ4FWYXAHXPJ', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('3RW51N1IEFPYUJI', '3384CTWDU7QZFRO', NULL, '62572489', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('M9FD1GEK9VI3U7Y', '3384CTWDU7QZFRO', NULL, '21473628', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('GG1Z3Y7MMZJ4VBX', '3384CTWDU7QZFRO', NULL, '25869255', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('ERW1DW4IGUKG733', '3384CTWDU7QZFRO', NULL, '98366399', 'DBQD7B1AGBAUZSS', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('88SVAM9BPSA5LIE', '3384CTWDU7QZFRO', NULL, '98366399', '3JJRT8TG11VD1FY', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3),
('ISYBVNTDFPN8K9K', '3384CTWDU7QZFRO', NULL, '98366399', 'MMYXJ4FWYXAHXPJ', 500, NULL, NULL, 'MXFA4S9NF2ZBTBU', '09-07-2020', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` varchar(100) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `unit_short_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `about` text,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_reset_token` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `user_type` tinyint(4) NOT NULL COMMENT '1=admin,2=shop-manager,3=sales man,4=store keeper,5=customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES
('1', 'Admin', 'Super', 1, '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` varchar(100) NOT NULL,
  `store_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `user_type` int(2) NOT NULL COMMENT '1=admin,2=shop-manager,3=sales man,4=store keeper,5=customer',
  `security_code` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `store_id`, `username`, `password`, `token`, `user_type`, `security_code`, `status`) VALUES
('1', '1', 'super@admin.com', '41d99b369894eb1ec3f461135132d8bb', NULL, 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `variant`
--

CREATE TABLE `variant` (
  `variant_id` varchar(100) NOT NULL,
  `variant_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variant`
--

INSERT INTO `variant` (`variant_id`, `variant_name`, `status`) VALUES
('3JJRT8TG11VD1FY', 'Large', 1),
('DBQD7B1AGBAUZSS', 'Medium', 1),
('MMYXJ4FWYXAHXPJ', 'Small', 1),
('PWB7EHUPWMGWS56', 'demo color', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wearhouse_set`
--

CREATE TABLE `wearhouse_set` (
  `wearhouse_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `wearhouse_name` varchar(100) NOT NULL,
  `wearhouse_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `website_content`
--

CREATE TABLE `website_content` (
  `web_content_id` int(11) NOT NULL,
  `content_id` varchar(255) NOT NULL,
  `language_id` varchar(255) NOT NULL,
  `content_headline` text NOT NULL,
  `content_image` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_footer`
--

CREATE TABLE `web_footer` (
  `footer_section_id` varchar(100) NOT NULL,
  `headlines` text NOT NULL,
  `details` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_footer`
--

INSERT INTO `web_footer` (`footer_section_id`, `headlines`, `details`, `position`, `status`) VALUES
('4UXP4OHYVGUBDSQ', 'First Block', '<h4 class=\"link-title fs-16 mb-3 font-weight-600 position-relative footer-app-link\">Our Communities</h4>\r\n<ul class=\"list-unstyled social-icon\">\r\n<li><a href=\"#\"><div class=\"icon-wrap fs-19 d-inline-block bg-primary text-white text-center fb\"><i class=\"fab fa-facebook-f\"></i></div>Facebook </a></li>\r\n\r\n<li><a href=\"#\"><div class=\"icon-wrap fs-19 d-inline-block bg-primary text-white text-center twi\"><i class=\"fab fa-twitter\"></i></div>Twitter</a></li>\r\n\r\n<li><a href=\"#\"><div class=\"icon-wrap fs-19 d-inline-block bg-primary text-white text-center inst\"><i class=\"fab fa-instagram\"></i></div>Instagram</a></li>\r\n\r\n<li><a href=\"#\"><div class=\"icon-wrap fs-19 d-inline-block bg-primary text-white text-center lin\"><i class=\"fab fa-linkedin\"></i></div>Linkedin</a></li>\r\n\r\n<li><a href=\"#\"><div class=\"icon-wrap fs-19 d-inline-block bg-primary text-white text-center yt\"><i class=\"fab fa-youtube-square\"></i></div>Youtube</a></li>\r\n                            \r\n</ul>', 1, 1),
('R65OGYDCBUWYYI3', 'Second Block', '<h4 class=\"link-title fs-16 mb-3 font-weight-600 position-relative footer-app-link\">Information</h4>\r\n                        <ul class=\"footer-link list-unstyled menu mb-0\">\r\n                            <li class=\"mb-2\"><a href=\"about_us\" class=\"link d-block\">About Us</a></li>\r\n                            <li class=\"mb-2\"><a href=\"contact_us\" class=\"link d-block\">Contact us</a></li>\r\n                            <li class=\"mb-2\"><a href=\"delivery_info\" class=\"link d-block\">Delivery Information</a></li>\r\n                            <li class=\"mb-2\"><a href=\"privacy_policy\" class=\"link d-block\">Privacy Policy</a></li>\r\n                            <li class=\"mb-2\"><a href=\"terms_condition\" class=\"link d-block\">Terms & Conditions</a></li>\r\n                            <li class=\"mb-2\"><a href=\"#\" class=\"link d-block\">Track My Order</a></li>\r\n                        </ul>', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `setting_id` int(11) NOT NULL,
  `logo` text,
  `invoice_logo` text,
  `favicon` text,
  `footer_logo` text,
  `footer_text` text,
  `footer_details` text,
  `google_analytics` text,
  `facebook_messenger` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `application_protocol` varchar(30) NOT NULL DEFAULT 'http',
  `app_link_status` tinyint(4) NOT NULL,
  `pay_with_status` tinyint(4) NOT NULL COMMENT '1=active , 0=inactive',
  `map_api_key` text,
  `map_latitude` text,
  `map_langitude` text,
  `apps_url` varchar(255) DEFAULT NULL,
  `mob_footer_block` varchar(100) DEFAULT NULL,
  `social_share` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `footer_logo`, `footer_text`, `footer_details`, `google_analytics`, `facebook_messenger`, `meta_keyword`, `meta_description`, `application_protocol`, `app_link_status`, `pay_with_status`, `map_api_key`, `map_latitude`, `map_langitude`, `apps_url`, `mob_footer_block`, `social_share`) VALUES
(1, 'my-assets/image/logo/9ba86ceae1ca73dc393fde84c12b7242.jpg', NULL, 'my-assets/image/logo/54a05c75ff2b81e34e0f608d63c8edd4.jpg', 'my-assets/image/logo/96b9657b86d4a193cea179a197f8f4a5.jpg', 'Developed by <a href=\"http://magnetontech.com/\" target=\"_blank\">Magnetontech</a>', 'WCTW.', '', '', 'meta keyword', 'E-commerce', '', 1, 1, 'AIzaSyBGwh3ShY_W1hMms1wmwlHK3hpInhExn3o', '8.901922', '66.325790', '', '[\"1\",\"0\",\"0\",\"1\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `bank_add`
--
ALTER TABLE `bank_add`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `category_variant`
--
ALTER TABLE `category_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`check_out_id`);

--
-- Indexes for table `cheque_manger`
--
ALTER TABLE `cheque_manger`
  ADD PRIMARY KEY (`cheque_id`);

--
-- Indexes for table `color_backends`
--
ALTER TABLE `color_backends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_frontends`
--
ALTER TABLE `color_frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `coupon_invoice`
--
ALTER TABLE `coupon_invoice`
  ADD PRIMARY KEY (`coupon_invoice_id`);

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `key3` (`boxID`,`orderID`,`userID`,`txID`,`amount`,`addr`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`);

--
-- Indexes for table `currency_info`
--
ALTER TABLE `currency_info`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_ledger`
--
ALTER TABLE `customer_ledger`
  ADD KEY `receipt_no` (`receipt_no`),
  ADD KEY `receipt_no_2` (`receipt_no`),
  ADD KEY `receipt_no_3` (`receipt_no`),
  ADD KEY `receipt_no_4` (`receipt_no`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`customer_order_id`);

--
-- Indexes for table `daily_closing`
--
ALTER TABLE `daily_closing`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `email_configuration`
--
ALTER TABLE `email_configuration`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`image_gallery_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`invoice_details_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_page`
--
ALTER TABLE `link_page`
  ADD PRIMARY KEY (`link_page_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_permission`
--
ALTER TABLE `module_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_module_id` (`fk_module_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `order_tax_col_details`
--
ALTER TABLE `order_tax_col_details`
  ADD PRIMARY KEY (`order_tax_col_de_id`);

--
-- Indexes for table `order_tax_col_summary`
--
ALTER TABLE `order_tax_col_summary`
  ADD PRIMARY KEY (`order_tax_col_id`);

--
-- Indexes for table `our_location`
--
ALTER TABLE `our_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `payeer_payments`
--
ALTER TABLE `payeer_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_gateway`
--
ALTER TABLE `payment_gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_withs`
--
ALTER TABLE `pay_withs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_model` (`product_model`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  ADD PRIMARY KEY (`purchase_detail_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`product_review_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_id`);

--
-- Indexes for table `quotation_details`
--
ALTER TABLE `quotation_details`
  ADD PRIMARY KEY (`quotation_details_id`);

--
-- Indexes for table `quotation_tax_col_details`
--
ALTER TABLE `quotation_tax_col_details`
  ADD PRIMARY KEY (`quot_tax_col_de_id`);

--
-- Indexes for table `quotation_tax_col_summary`
--
ALTER TABLE `quotation_tax_col_summary`
  ADD PRIMARY KEY (`quot_tax_col_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
  ADD PRIMARY KEY (`shiping_info_id`);

--
-- Indexes for table `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sms_configuration`
--
ALTER TABLE `sms_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_template`
--
ALTER TABLE `sms_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_auth`
--
ALTER TABLE `social_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft_setting`
--
ALTER TABLE `soft_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_product`
--
ALTER TABLE `store_product`
  ADD PRIMARY KEY (`store_product_id`);

--
-- Indexes for table `store_set`
--
ALTER TABLE `store_set`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `supplier_information`
--
ALTER TABLE `supplier_information`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `supplier_ledger`
--
ALTER TABLE `supplier_ledger`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `receipt_no` (`deposit_no`),
  ADD KEY `receipt_no_2` (`deposit_no`),
  ADD KEY `receipt_no_3` (`deposit_no`),
  ADD KEY `receipt_no_4` (`deposit_no`);

--
-- Indexes for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `tax_collection_details`
--
ALTER TABLE `tax_collection_details`
  ADD PRIMARY KEY (`tax_col_de_id`);

--
-- Indexes for table `tax_collection_summary`
--
ALTER TABLE `tax_collection_summary`
  ADD PRIMARY KEY (`tax_collection_id`);

--
-- Indexes for table `tax_product_service`
--
ALTER TABLE `tax_product_service`
  ADD PRIMARY KEY (`t_p_s_id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`variant_id`);

--
-- Indexes for table `wearhouse_set`
--
ALTER TABLE `wearhouse_set`
  ADD PRIMARY KEY (`wearhouse_id`);

--
-- Indexes for table `website_content`
--
ALTER TABLE `website_content`
  ADD PRIMARY KEY (`web_content_id`);

--
-- Indexes for table `web_footer`
--
ALTER TABLE `web_footer`
  ADD PRIMARY KEY (`footer_section_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_variant`
--
ALTER TABLE `category_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color_backends`
--
ALTER TABLE `color_backends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `color_frontends`
--
ALTER TABLE `color_frontends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1326;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_permission`
--
ALTER TABLE `module_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_location`
--
ALTER TABLE `our_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payeer_payments`
--
ALTER TABLE `payeer_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_gateway`
--
ALTER TABLE `payment_gateway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pay_withs`
--
ALTER TABLE `pay_withs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_information`
--
ALTER TABLE `product_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_info`
--
ALTER TABLE `shipping_info`
  MODIFY `shiping_info_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_configuration`
--
ALTER TABLE `sms_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms_template`
--
ALTER TABLE `sms_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_auth`
--
ALTER TABLE `social_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soft_setting`
--
ALTER TABLE `soft_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=760;

--
-- AUTO_INCREMENT for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_content`
--
ALTER TABLE `website_content`
  MODIFY `web_content_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
