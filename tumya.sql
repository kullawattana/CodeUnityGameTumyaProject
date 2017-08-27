-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 06:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user_id` int(3) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `first_name`, `last_name`, `username`, `password`, `confirm_password`, `address`, `email`, `telephone`, `status`) VALUES
(1, 1, 'suttipong', 'kullawattana', 'suttipong', '1234', '', '233/190', 'suttipong.kull@gmail.com', '025487898', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_1`
--

CREATE TABLE `hall_of_frame_part_1` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l1` int(10) NOT NULL,
  `score_p2_l1` int(10) NOT NULL,
  `score_p3_l1` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_1`
--

INSERT INTO `hall_of_frame_part_1` (`id`, `id_user`, `username`, `score_p1_l1`, `score_p2_l1`, `score_p3_l1`, `score_result`) VALUES
(1, 1, 'suttipong', 3300, 2000, 400, 5700);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_2`
--

CREATE TABLE `hall_of_frame_part_2` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l2` int(10) NOT NULL,
  `score_p2_l2` int(10) NOT NULL,
  `score_p3_l2` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_2`
--

INSERT INTO `hall_of_frame_part_2` (`id`, `id_user`, `username`, `score_p1_l2`, `score_p2_l2`, `score_p3_l2`, `score_result`) VALUES
(1, 1, 'suttipong', 1400, 3000, 300, 4700);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_3`
--

CREATE TABLE `hall_of_frame_part_3` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l3` int(10) NOT NULL,
  `score_p2_l3` int(10) NOT NULL,
  `score_p3_l3` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_3`
--

INSERT INTO `hall_of_frame_part_3` (`id`, `id_user`, `username`, `score_p1_l3`, `score_p2_l3`, `score_p3_l3`, `score_result`) VALUES
(1, 1, 'suttipong', 1300, 5000, 300, 6600);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_4`
--

CREATE TABLE `hall_of_frame_part_4` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l4` int(10) NOT NULL,
  `score_p2_l4` int(10) NOT NULL,
  `score_p3_l4` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_4`
--

INSERT INTO `hall_of_frame_part_4` (`id`, `id_user`, `username`, `score_p1_l4`, `score_p2_l4`, `score_p3_l4`, `score_result`) VALUES
(1, 1, 'suttipong', 1700, 6000, 300, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_5`
--

CREATE TABLE `hall_of_frame_part_5` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l5` int(10) NOT NULL,
  `score_p2_l5` int(10) NOT NULL,
  `score_p3_l5` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_5`
--

INSERT INTO `hall_of_frame_part_5` (`id`, `id_user`, `username`, `score_p1_l5`, `score_p2_l5`, `score_p3_l5`, `score_result`) VALUES
(1, 1, 'suttipong', 1700, 7000, 300, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_6`
--

CREATE TABLE `hall_of_frame_part_6` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l6` int(10) NOT NULL,
  `score_p2_l6` int(10) NOT NULL,
  `score_p3_l6` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_6`
--

INSERT INTO `hall_of_frame_part_6` (`id`, `id_user`, `username`, `score_p1_l6`, `score_p2_l6`, `score_p3_l6`, `score_result`) VALUES
(1, 1, 'suttipong', 1900, 6500, 300, 8700);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_7`
--

CREATE TABLE `hall_of_frame_part_7` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l7` int(10) NOT NULL,
  `score_p2_l7` int(10) NOT NULL,
  `score_p3_l7` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_7`
--

INSERT INTO `hall_of_frame_part_7` (`id`, `id_user`, `username`, `score_p1_l7`, `score_p2_l7`, `score_p3_l7`, `score_result`) VALUES
(1, 1, 'suttipong', 1500, 4500, 300, 6300);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_8`
--

CREATE TABLE `hall_of_frame_part_8` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l8` int(10) NOT NULL,
  `score_p2_l8` int(10) NOT NULL,
  `score_p3_l8` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_8`
--

INSERT INTO `hall_of_frame_part_8` (`id`, `id_user`, `username`, `score_p1_l8`, `score_p2_l8`, `score_p3_l8`, `score_result`) VALUES
(1, 1, 'suttipong', 2500, 8500, 300, 11300);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_9`
--

CREATE TABLE `hall_of_frame_part_9` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l9` int(10) NOT NULL,
  `score_p2_l9` int(10) NOT NULL,
  `score_p3_l9` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_9`
--

INSERT INTO `hall_of_frame_part_9` (`id`, `id_user`, `username`, `score_p1_l9`, `score_p2_l9`, `score_p3_l9`, `score_result`) VALUES
(1, 1, 'suttipong', 2400, 9000, 300, 11700);

-- --------------------------------------------------------

--
-- Table structure for table `hall_of_frame_part_10`
--

CREATE TABLE `hall_of_frame_part_10` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_p1_l10` int(10) NOT NULL,
  `score_p2_l10` int(10) NOT NULL,
  `score_p3_l10` int(10) NOT NULL,
  `score_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hall_of_frame_part_10`
--

INSERT INTO `hall_of_frame_part_10` (`id`, `id_user`, `username`, `score_p1_l10`, `score_p2_l10`, `score_p3_l10`, `score_result`) VALUES
(1, 1, 'suttipong', 2600, 8700, 300, 11600);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level1`
--

CREATE TABLE `herbal_level1` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level1`
--

INSERT INTO `herbal_level1` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'ขวดยา', 'Bottle', 200),
(2, 'น้ำ', 'Water', 200),
(3, 'ใบทองพันชั่ง', 'Dainty Spure', 150),
(4, 'กลีเซอรีน', 'Glycerin', 100);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level2`
--

CREATE TABLE `herbal_level2` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level2`
--

INSERT INTO `herbal_level2` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'ขวดยา', 'Bottle', 200),
(2, 'น้ำ', 'Water', 200),
(3, 'โพลีเอทิลีน', 'Polyethylene glycol 400', 200),
(4, 'เปลือกมังคุด', 'Mangosteen', 150);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level3`
--

CREATE TABLE `herbal_level3` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level3`
--

INSERT INTO `herbal_level3` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'มะขามป้อม', 'Indian Gooseberry', 200),
(2, 'ใบเสนียด', 'Malabar Nut', 150),
(3, 'กลีเซอรีน', 'Glycerin', 100),
(4, 'เกลือแกง', 'Sodium Chloride', 50),
(5, 'รากชะเอมเทศ', 'Liquorice', 50),
(6, 'แอลกอฮอล์', 'Alcohol', 50),
(7, 'สะระแหน่', 'Kitchen Mint', 50);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level4`
--

CREATE TABLE `herbal_level4` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level4`
--

INSERT INTO `herbal_level4` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'อบเชยเทศ', 'Cinnamon', 200),
(2, 'เปลือกสมุลแว้ง', 'Cinnamomum', 200),
(3, 'ลูกกระวาน', 'Cadamon', 200),
(4, 'ดอกกานพลู', 'Cloves', 200),
(5, 'รากชะเอมเทศ', 'Liquorice', 200),
(6, 'สะระแหน่', 'Kitchen Mint', 100),
(7, 'การบูร', 'Camphor', 100);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level5`
--

CREATE TABLE `herbal_level5` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level5`
--

INSERT INTO `herbal_level5` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'เหง้าไพล', 'Phlai', 200),
(2, 'ใบมะขาม', 'Ma Kham', 150),
(3, 'ผิวมะกรูด', 'Kaffir Lime', 100),
(4, 'เหง้าขมิ้นชัน', 'Turmeric', 50),
(5, 'ตะไคร้', 'Lemon Grass', 50),
(6, 'ใบส้มป่อย', 'Som Poi', 50),
(7, 'การบูร', 'Camphor', 25),
(8, 'เกลือเม็ด', 'Salt Tablets', 20);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level6`
--

CREATE TABLE `herbal_level6` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level6`
--

INSERT INTO `herbal_level6` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'ใบกะเพราแดง', 'Holy Basil', 200),
(2, 'ผิวมะกรูด', 'Kaffir Lime', 150),
(3, 'ชะเอมเทศ', 'Liquorice', 100),
(4, 'มหาหิงคุ์', 'Asafoetida', 100),
(5, 'พริกไทยล่อน', 'Pepper', 50),
(6, 'เหง้าขิง', 'Ginger Rhizome', 50),
(7, 'ดอกดีปลี', 'Long Pepper', 50),
(8, 'หัวกระเทียม', 'Garlic', 50);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level7`
--

CREATE TABLE `herbal_level7` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level7`
--

INSERT INTO `herbal_level7` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'โกฐสอ', 'Angelica Dahurica', 200),
(2, 'โกฐเขมา', 'Kot-Ke-ma', 200),
(3, 'แก่นจันทน์ขาว', 'Tarenna hoaensis Pitard', 200),
(4, 'แก่นจันทน์แดง', 'Dracaena lourieri Gagnep', 200),
(5, 'ลูกกระดอม', 'Gymnopetalum chinensis (Lour.) Merr', 200),
(6, 'เถาบอระเพ็ด', 'Tinospora crispa (L.) Miers ex Hook.f.& Thomson', 200);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level8`
--

CREATE TABLE `herbal_level8` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level8`
--

INSERT INTO `herbal_level8` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'ชะเอมเทศ', 'Liquorice', 200),
(2, 'แก่นจันทน์เทศ', 'Nutmeg', 150),
(3, 'ดอกกานพลู', 'cloves', 100),
(4, 'โกฐหัวบัว', 'Ligusticum sinense Oliv. cv.Chuanxiong Hort', 100),
(5, 'เกสรบัวหลวง', 'Lotus', 100),
(6, 'เปลือกสมุลแว้ง', 'Cinnamomum', 50),
(7, 'อบเชยเทศ', 'Cinnamon', 25),
(8, 'กระลำพัก', 'Kralampak', 25),
(9, 'ดอกสารภี', 'Saraphi', 20),
(10, 'แก่นจันทน์แดง', 'Nutmeg Red', 10);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level9`
--

CREATE TABLE `herbal_level9` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level9`
--

INSERT INTO `herbal_level9` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'แก่นจันทน์แดง', 'Nutmeg Red', 200),
(2, 'มะปรางหวาน', 'Marian Plum', 150),
(3, 'รากมะนาว', 'Lemon', 150),
(4, 'หัวเปราะหอม', 'Sand Ginger', 150),
(5, 'โกฐหัวบัว', 'Ligusticum Sinense', 150),
(6, 'แก่นจันทน์เทศ', 'Nutmeg Kan', 150),
(7, 'แก่นฝางเสน', 'Sappan Tree', 150),
(8, 'ดอกบุนนาค', 'Iron Wood', 100),
(9, 'ดอกสารภี', 'Saraphi', 100),
(10, 'ดอกมะลิ', 'Jasmine', 100);

-- --------------------------------------------------------

--
-- Table structure for table `herbal_level10`
--

CREATE TABLE `herbal_level10` (
  `id` int(10) NOT NULL,
  `thai_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eng_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `herbal_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `herbal_level10`
--

INSERT INTO `herbal_level10` (`id`, `thai_name`, `eng_name`, `herbal_score`) VALUES
(1, 'ลูกมะขามป้อม', 'Indian Gooseberry', 200),
(2, 'ลูกสมอไทย', 'Terminalia Chebula Retz', 150),
(3, 'รากชะเอมเทศ', 'Liquorice', 100),
(4, 'เหง้าขมิ้นอ้อย', 'Zedoary', 100),
(5, 'กะเพราแดง', 'Ocimum Sanctum', 100),
(6, 'เหง้าขิง', 'Ginger Rhizome', 75),
(7, 'ดอกดีปลี', 'Long Pepper', 75),
(8, 'ช้าพลู', 'WildbetalLeafbush', 50),
(9, 'ดอกกานพลู', 'Cloves', 25),
(10, 'สาระแหน่', 'Peppermint', 15);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_1`
--

CREATE TABLE `part1_level_1` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_1`
--

INSERT INTO `part1_level_1` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`) VALUES
(634, 1, 'D:/tumya_profile/tes', 3300, 1000, 600, 1200, 500),
(636, 2, 'D:/tumya_profile/tes', 1050, 600, 450, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_2`
--

CREATE TABLE `part1_level_2` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_2`
--

INSERT INTO `part1_level_2` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`) VALUES
(1, 1, 'suttipong', 1400, 500, 400, 300, 200);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_3`
--

CREATE TABLE `part1_level_3` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_3`
--

INSERT INTO `part1_level_3` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`) VALUES
(1, 1, 'suttipong', 1300, 400, 400, 300, 200, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_4`
--

CREATE TABLE `part1_level_4` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_4`
--

INSERT INTO `part1_level_4` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`) VALUES
(1, 1, 'suttipong', 1700, 500, 400, 300, 200, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_5`
--

CREATE TABLE `part1_level_5` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_5`
--

INSERT INTO `part1_level_5` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`) VALUES
(1, 1, 'suttipong', 1700, 400, 400, 300, 200, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_6`
--

CREATE TABLE `part1_level_6` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_6`
--

INSERT INTO `part1_level_6` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`) VALUES
(1, 1, 'suttipong', 1900, 400, 600, 300, 200, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_7`
--

CREATE TABLE `part1_level_7` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_7`
--

INSERT INTO `part1_level_7` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`) VALUES
(1, 1, 'suttipong', 1500, 400, 600, 300, 200, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_8`
--

CREATE TABLE `part1_level_8` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_8`
--

INSERT INTO `part1_level_8` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`) VALUES
(1, 1, 'suttipong', 2500, 500, 600, 300, 200, 100, 100, 100, 100, 200, 300);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_9`
--

CREATE TABLE `part1_level_9` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_9`
--

INSERT INTO `part1_level_9` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`) VALUES
(1, 1, 'suttipong', 2400, 500, 600, 300, 200, 100, 100, 100, 100, 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `part1_level_10`
--

CREATE TABLE `part1_level_10` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part1_level_10`
--

INSERT INTO `part1_level_10` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`) VALUES
(1, 1, 'suttipong', 2600, 600, 600, 300, 200, 100, 100, 100, 100, 200, 300);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_1`
--

CREATE TABLE `part2_level_1` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_1`
--

INSERT INTO `part2_level_1` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `weight_result`) VALUES
(1, 1, 'suttipong', 2600, 500, 600, 300, 200, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_2`
--

CREATE TABLE `part2_level_2` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_2`
--

INSERT INTO `part2_level_2` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `weight_result`) VALUES
(1, 1, 'suttipong', 1300, 200, 600, 300, 200, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_3`
--

CREATE TABLE `part2_level_3` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_3`
--

INSERT INTO `part2_level_3` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `weight_result`) VALUES
(1, 1, 'suttipong', 3300, 500, 600, 500, 500, 400, 300, 500, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_4`
--

CREATE TABLE `part2_level_4` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_4`
--

INSERT INTO `part2_level_4` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `weight_result`) VALUES
(1, 1, 'suttipong', 3200, 400, 600, 500, 500, 400, 300, 500, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_5`
--

CREATE TABLE `part2_level_5` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_5`
--

INSERT INTO `part2_level_5` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `weight_result`) VALUES
(1, 1, 'suttipong', 3700, 400, 600, 500, 500, 400, 300, 500, 500, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_6`
--

CREATE TABLE `part2_level_6` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_6`
--

INSERT INTO `part2_level_6` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `weight_result`) VALUES
(1, 1, 'suttipong', 3500, 200, 600, 500, 500, 400, 300, 500, 500, 6500);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_7`
--

CREATE TABLE `part2_level_7` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_7`
--

INSERT INTO `part2_level_7` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `weight_result`) VALUES
(1, 1, 'suttipong', 2500, 200, 600, 500, 500, 400, 300, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_8`
--

CREATE TABLE `part2_level_8` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_8`
--

INSERT INTO `part2_level_8` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`, `weight_result`) VALUES
(1, 1, 'suttipong', 4500, 200, 600, 500, 500, 400, 300, 500, 500, 500, 500, 8500);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_9`
--

CREATE TABLE `part2_level_9` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_9`
--

INSERT INTO `part2_level_9` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`, `weight_result`) VALUES
(1, 1, 'suttipong', 4600, 200, 600, 500, 500, 400, 300, 500, 500, 500, 600, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `part2_level_10`
--

CREATE TABLE `part2_level_10` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `score_item_1` int(10) NOT NULL,
  `score_item_2` int(10) NOT NULL,
  `score_item_3` int(10) NOT NULL,
  `score_item_4` int(10) NOT NULL,
  `score_item_5` int(10) NOT NULL,
  `score_item_6` int(10) NOT NULL,
  `score_item_7` int(10) NOT NULL,
  `score_item_8` int(10) NOT NULL,
  `score_item_9` int(10) NOT NULL,
  `score_item_10` int(10) NOT NULL,
  `weight_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part2_level_10`
--

INSERT INTO `part2_level_10` (`id`, `id_user`, `username`, `score_result`, `score_item_1`, `score_item_2`, `score_item_3`, `score_item_4`, `score_item_5`, `score_item_6`, `score_item_7`, `score_item_8`, `score_item_9`, `score_item_10`, `weight_result`) VALUES
(1, 1, 'suttipong', 4600, 200, 600, 500, 500, 400, 300, 500, 500, 500, 600, 8700);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_1`
--

CREATE TABLE `part3_level_1` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_1`
--

INSERT INTO `part3_level_1` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 400, 10);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_2`
--

CREATE TABLE `part3_level_2` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_2`
--

INSERT INTO `part3_level_2` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 25);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_3`
--

CREATE TABLE `part3_level_3` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_3`
--

INSERT INTO `part3_level_3` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 17);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_4`
--

CREATE TABLE `part3_level_4` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_4`
--

INSERT INTO `part3_level_4` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_5`
--

CREATE TABLE `part3_level_5` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_5`
--

INSERT INTO `part3_level_5` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 10);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_6`
--

CREATE TABLE `part3_level_6` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_6`
--

INSERT INTO `part3_level_6` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_7`
--

CREATE TABLE `part3_level_7` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_7`
--

INSERT INTO `part3_level_7` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 5);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_8`
--

CREATE TABLE `part3_level_8` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_8`
--

INSERT INTO `part3_level_8` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 11);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_9`
--

CREATE TABLE `part3_level_9` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_9`
--

INSERT INTO `part3_level_9` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 10);

-- --------------------------------------------------------

--
-- Table structure for table `part3_level_10`
--

CREATE TABLE `part3_level_10` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(20) NOT NULL,
  `time_result` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part3_level_10`
--

INSERT INTO `part3_level_10` (`id`, `id_user`, `username`, `score_result`, `time_result`) VALUES
(1, 1, 'suttipong', 300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `score_result` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `first_name`, `last_name`, `username`, `address`, `email`, `telephone`, `score_result`) VALUES
(1, 'suttipong', 'kullawattana', 'suttipong', '233/190', 'suttipong.kull@gmail.com', '021234567', 100),
(2, 'kawintip', 'kullawattana', 'kawin', '233/190', 'abc@gmail.com', '023456789', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_1`
--
ALTER TABLE `hall_of_frame_part_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_2`
--
ALTER TABLE `hall_of_frame_part_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_3`
--
ALTER TABLE `hall_of_frame_part_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_4`
--
ALTER TABLE `hall_of_frame_part_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_5`
--
ALTER TABLE `hall_of_frame_part_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_6`
--
ALTER TABLE `hall_of_frame_part_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_7`
--
ALTER TABLE `hall_of_frame_part_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_8`
--
ALTER TABLE `hall_of_frame_part_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_9`
--
ALTER TABLE `hall_of_frame_part_9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hall_of_frame_part_10`
--
ALTER TABLE `hall_of_frame_part_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level1`
--
ALTER TABLE `herbal_level1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level2`
--
ALTER TABLE `herbal_level2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level3`
--
ALTER TABLE `herbal_level3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level4`
--
ALTER TABLE `herbal_level4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level5`
--
ALTER TABLE `herbal_level5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level6`
--
ALTER TABLE `herbal_level6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level7`
--
ALTER TABLE `herbal_level7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level8`
--
ALTER TABLE `herbal_level8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level9`
--
ALTER TABLE `herbal_level9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbal_level10`
--
ALTER TABLE `herbal_level10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_1`
--
ALTER TABLE `part1_level_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_2`
--
ALTER TABLE `part1_level_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_3`
--
ALTER TABLE `part1_level_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_4`
--
ALTER TABLE `part1_level_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_5`
--
ALTER TABLE `part1_level_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_6`
--
ALTER TABLE `part1_level_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_7`
--
ALTER TABLE `part1_level_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_8`
--
ALTER TABLE `part1_level_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_9`
--
ALTER TABLE `part1_level_9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part1_level_10`
--
ALTER TABLE `part1_level_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_1`
--
ALTER TABLE `part2_level_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_2`
--
ALTER TABLE `part2_level_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_3`
--
ALTER TABLE `part2_level_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_4`
--
ALTER TABLE `part2_level_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_5`
--
ALTER TABLE `part2_level_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_6`
--
ALTER TABLE `part2_level_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_7`
--
ALTER TABLE `part2_level_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_8`
--
ALTER TABLE `part2_level_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_9`
--
ALTER TABLE `part2_level_9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part2_level_10`
--
ALTER TABLE `part2_level_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_1`
--
ALTER TABLE `part3_level_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_2`
--
ALTER TABLE `part3_level_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_3`
--
ALTER TABLE `part3_level_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_4`
--
ALTER TABLE `part3_level_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_5`
--
ALTER TABLE `part3_level_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_6`
--
ALTER TABLE `part3_level_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_7`
--
ALTER TABLE `part3_level_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_8`
--
ALTER TABLE `part3_level_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_9`
--
ALTER TABLE `part3_level_9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part3_level_10`
--
ALTER TABLE `part3_level_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_of_frame_part_1`
--
ALTER TABLE `hall_of_frame_part_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_2`
--
ALTER TABLE `hall_of_frame_part_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_3`
--
ALTER TABLE `hall_of_frame_part_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_4`
--
ALTER TABLE `hall_of_frame_part_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_5`
--
ALTER TABLE `hall_of_frame_part_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_6`
--
ALTER TABLE `hall_of_frame_part_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_7`
--
ALTER TABLE `hall_of_frame_part_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_8`
--
ALTER TABLE `hall_of_frame_part_8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_9`
--
ALTER TABLE `hall_of_frame_part_9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hall_of_frame_part_10`
--
ALTER TABLE `hall_of_frame_part_10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_1`
--
ALTER TABLE `part1_level_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=637;
--
-- AUTO_INCREMENT for table `part1_level_2`
--
ALTER TABLE `part1_level_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_3`
--
ALTER TABLE `part1_level_3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_4`
--
ALTER TABLE `part1_level_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_5`
--
ALTER TABLE `part1_level_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_6`
--
ALTER TABLE `part1_level_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_7`
--
ALTER TABLE `part1_level_7`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_8`
--
ALTER TABLE `part1_level_8`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_9`
--
ALTER TABLE `part1_level_9`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part1_level_10`
--
ALTER TABLE `part1_level_10`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_1`
--
ALTER TABLE `part2_level_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_2`
--
ALTER TABLE `part2_level_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_3`
--
ALTER TABLE `part2_level_3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_4`
--
ALTER TABLE `part2_level_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_5`
--
ALTER TABLE `part2_level_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_6`
--
ALTER TABLE `part2_level_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_7`
--
ALTER TABLE `part2_level_7`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_8`
--
ALTER TABLE `part2_level_8`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_9`
--
ALTER TABLE `part2_level_9`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part2_level_10`
--
ALTER TABLE `part2_level_10`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_1`
--
ALTER TABLE `part3_level_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_2`
--
ALTER TABLE `part3_level_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_3`
--
ALTER TABLE `part3_level_3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_4`
--
ALTER TABLE `part3_level_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_5`
--
ALTER TABLE `part3_level_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_6`
--
ALTER TABLE `part3_level_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_7`
--
ALTER TABLE `part3_level_7`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_8`
--
ALTER TABLE `part3_level_8`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_9`
--
ALTER TABLE `part3_level_9`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part3_level_10`
--
ALTER TABLE `part3_level_10`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
