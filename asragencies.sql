-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 01:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asragencies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `varstatus` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `username`, `password`, `varstatus`, `date`) VALUES
(1, 'admin', 'admin123', 'active', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Cid` int(100) NOT NULL,
  `category` text NOT NULL,
  `varstatus` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Cid`, `category`, `varstatus`, `date`) VALUES
(1, 'FLOWER POTS', 'active', '0000-00-00'),
(2, 'GROUND CHAKKARAS', 'active', '0000-00-00'),
(3, 'BABY ITEMS', 'active', '0000-00-00'),
(4, 'ROCKTS', 'active', '0000-00-00'),
(5, 'CRACKERS', 'active', '0000-00-00'),
(6, 'LAR CRACKERS', 'active', '0000-00-00'),
(7, 'SLIVER LAR', 'active', '0000-00-00'),
(8, 'GOLD LAR', 'active', '0000-00-00'),
(9, 'BOMB', 'active', '0000-00-00'),
(10, 'DELUXE PAPER BOMB', 'active', '0000-00-00'),
(11, 'NOVELTIES', 'active', '0000-00-00'),
(12, 'FANCY WHEELS', 'active', '0000-00-00'),
(13, 'GUDIYA', 'active', '0000-00-00'),
(14, 'MATCHES', 'active', '0000-00-00'),
(15, 'SPARKLERS', 'active', '0000-00-00'),
(16, 'NEW', 'active', '0000-00-00'),
(17, 'PAPER ITEMS', 'active', '0000-00-00'),
(18, 'FANCY WHEELS', 'active', '0000-00-00'),
(19, 'MULTICOLOR SHOTS', 'active', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `Oid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `referal_code` varchar(50) NOT NULL,
  `order_details` longtext NOT NULL,
  `total_qty` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `varstatus` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `Order_id` varchar(100) NOT NULL,
  `amount_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Pid` int(100) NOT NULL,
  `categoryid` int(100) NOT NULL,
  `product` text NOT NULL,
  `um_type` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `original_price` int(100) NOT NULL,
  `offer_price` int(100) NOT NULL,
  `varstatus` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`Pid`, `categoryid`, `product`, `um_type`, `product_image`, `original_price`, `offer_price`, `varstatus`, `date`) VALUES
(1, 1, 'Flower Pots Small', 'Box', '1.jpg', 110, 33, '', '0000-00-00'),
(2, 1, 'Flower Pots Big', 'Box', '2.jpg', 160, 48, '', '0000-00-00'),
(3, 1, 'Flower Pots Special', 'Box', '3.jpg', 230, 69, '', '0000-00-00'),
(4, 1, 'Flower Pots Asoka', 'Box', '4.jpg', 350, 105, '', '0000-00-00'),
(5, 1, 'Flowr pots Deluxe', 'Box', '5.jpg', 450, 135, '', '0000-00-00'),
(6, 1, 'Color Koti', 'Box', '6.jpg', 500, 150, '', '0000-00-00'),
(7, 1, 'Color Koti deluxe', 'Box', '7.jpg', 1000, 300, '', '0000-00-00'),
(8, 1, 'Tricolor Pot', 'Box', '8.jpg', 1000, 300, '', '0000-00-00'),
(9, 1, 'Siren', 'Box', '9..jpg', 550, 165, '', '0000-00-00'),
(10, 1, 'Photo Flash', 'Box', '10.jpg', 350, 105, '', '0000-00-00'),
(11, 1, 'Shower', 'Box', '11.jpg', 350, 105, '', '0000-00-00'),
(12, 2, 'Ground Chakkaras Big', 'Box', '12.jpg', 100, 30, '', '0000-00-00'),
(13, 2, 'Ground Chakkaras Asoka', 'Box', '13.jpg', 160, 48, '', '0000-00-00'),
(14, 2, 'Ground Chakkaras Special', 'Box', '14.jpg', 200, 60, '', '0000-00-00'),
(15, 2, 'Ground Chakkaras Deluxe', 'Box', '15.jpg', 320, 96, '', '0000-00-00'),
(16, 2, 'Ground Chakkaras Super', 'Box', '16.jpg', 400, 120, '', '0000-00-00'),
(17, 3, 'Twinkling Star', 'Box', '17.jpg', 100, 30, '', '0000-00-00'),
(18, 3, 'Twinkling Star Special', 'Box', '18.jpeg', 180, 54, '', '0000-00-00'),
(19, 3, 'Silver Torch', 'Box', '19.jpg', 200, 60, '', '0000-00-00'),
(20, 3, 'Party Candles', 'Box', '18.jpg', 300, 90, '', '0000-00-00'),
(21, 3, 'Tri Colour Pencil', 'Box', 'logo.jpg', 300, 90, '', '0000-00-00'),
(22, 3, 'Toys', 'Box', '22.jpg', 300, 90, '', '0000-00-00'),
(23, 3, 'Roll', 'Box', 'logo.jpg', 250, 75, '', '0000-00-00'),
(24, 3, 'Serpent Small', 'Box', '24.jpeg', 600, 180, '', '0000-00-00'),
(25, 3, 'Serpent Big', 'Box', '25.jpeg', 800, 240, '', '0000-00-00'),
(26, 3, 'Anaconda', 'Box', 'logo.jpg', 300, 90, '', '0000-00-00'),
(27, 4, 'Baby Rocket', 'Box', '27.jpg', 100, 30, '', '0000-00-00'),
(28, 4, 'Colour Rocket', 'Box', 'logo.jpg', 120, 36, '', '0000-00-00'),
(29, 4, 'Rocket Bomb', 'Box', '29.jpg', 170, 51, '', '0000-00-00'),
(30, 4, 'Lunik Rocket', 'Box', 'logo.jpg', 300, 90, '', '0000-00-00'),
(31, 4, '2 Sound Rocket', 'Box', '31.jpg', 300, 90, '', '0000-00-00'),
(32, 4, '3 Sound Rocket', 'Box', '32.jpg', 300, 90, '', '0000-00-00'),
(33, 5, '2 3/4\" Crackers', 'Pkt', '33.jpg', 600, 180, '', '0000-00-00'),
(34, 5, '3 1/2\" Crackers', 'Pkt', '34.jpg', 450, 135, '', '0000-00-00'),
(35, 5, '4\" Crackers', 'Pkt', '35.jpg', 400, 120, '', '0000-00-00'),
(36, 5, '4\" Super Crackers', 'Pkt', 'logo.jpg', 900, 270, '', '0000-00-00'),
(37, 5, 'Kumki', 'Pkt', '37.jpg', 1200, 360, '', '0000-00-00'),
(38, 5, '4\" Gold Lakshmi', 'Pkt', '38.jpg', 800, 240, '', '0000-00-00'),
(39, 5, '4\" Gold Super Lakshmi', 'Pkt', 'logo.jpg', 900, 270, '', '0000-00-00'),
(40, 5, '2 Sound Crackers', 'Pkt', '40.jpg', 80, 24, '', '0000-00-00'),
(41, 5, 'Gold Bijili', 'Pkt', '41.jpg', 100, 30, '', '0000-00-00'),
(42, 5, '24 Deluxe', 'Pkt', '42.jpg', 100, 30, '', '0000-00-00'),
(43, 5, '28 Deluxe', 'Pkt', '43.jpg', 120, 36, '', '0000-00-00'),
(44, 5, '50 Deluxe', 'Pkt', '44.jpg', 240, 72, '', '0000-00-00'),
(45, 5, '100 Deluxe', 'Pkt', '45.jpg', 480, 144, '', '0000-00-00'),
(46, 6, '28 Chorsa', 'Pkt', '46.jpg', 40, 12, '', '0000-00-00'),
(47, 6, '28 Giant', 'Pkt', '47.jpeg', 60, 18, '', '0000-00-00'),
(48, 6, '56 Giant', 'Pkt', '48.jpg', 120, 36, '', '0000-00-00'),
(49, 6, '100 Wala', 'Box', '49.jpg', 110, 33, '', '0000-00-00'),
(50, 6, '200 Wala', 'Box', '50.jpg', 220, 66, '', '0000-00-00'),
(51, 6, '300 Wala', 'Box', '51.jpg', 330, 99, '', '0000-00-00'),
(52, 6, '600 Wala', 'Box', '52.jpg', 660, 198, '', '0000-00-00'),
(53, 7, '1000 Wala', 'Box', '53.jpg', 800, 240, '', '0000-00-00'),
(54, 7, '2000 Wala', 'Box', '54.jpg', 1600, 480, '', '0000-00-00'),
(55, 7, '3000 Wala', 'Box', 'logo.jpg', 2400, 720, '', '0000-00-00'),
(56, 7, '5000 Wala', 'Box', '56.jpg', 4000, 1200, '', '0000-00-00'),
(57, 8, '1000 Wala Gold', 'Box', '57.jpg', 1000, 300, '', '0000-00-00'),
(58, 8, '2000 Wala Gold', 'Box', '58.jpg', 2000, 600, '', '0000-00-00'),
(59, 8, '5000 Wala Gold', 'Box', '59.jpg', 5000, 1500, '', '0000-00-00'),
(60, 8, '10000 Wala Gold', 'Box', '60.jpg', 10000, 3000, '', '0000-00-00'),
(61, 9, 'Mini Bullet', 'Box', '61.jpg', 70, 21, '', '0000-00-00'),
(62, 9, 'Super Bullet', 'Box', 'logo.jpg', 100, 30, '', '0000-00-00'),
(63, 9, 'Prince Bullet', 'Box', '63.jpg', 120, 36, '', '0000-00-00'),
(64, 9, 'Hydro Green', 'Box', '64.jpg', 125, 38, '', '0000-00-00'),
(65, 9, 'Classic Green', 'Box', '65.jpg', 220, 66, '', '0000-00-00'),
(66, 9, 'Halk', 'Box', '66.jpg', 500, 150, '', '0000-00-00'),
(67, 9, 'Agni', 'Box', '67.jpg', 600, 180, '', '0000-00-00'),
(68, 10, 'Big Boss', 'Box', '68.jpg', 200, 60, '', '0000-00-00'),
(69, 10, 'Deluxe Spider Bomb', 'Box', '69.jpg', 600, 180, '', '0000-00-00'),
(70, 10, '1/2 kg Bomb', 'Box', '70.jpg', 420, 126, '', '0000-00-00'),
(71, 10, '1 Kg Bomb', 'Box', '71.jpg', 600, 180, '', '0000-00-00'),
(72, 11, 'KitKat', 'Box', '72.jpg', 160, 48, '', '0000-00-00'),
(73, 11, 'Magic Pop', 'Box', 'logo.jpg', 550, 165, '', '0000-00-00'),
(74, 11, 'Jee Boom Baa', 'Box', '74.jpg', 450, 135, '', '0000-00-00'),
(75, 11, 'Glittering Gems', 'Box', '75.jpg', 450, 135, '', '0000-00-00'),
(76, 11, 'Magic Butterfly', 'Box', '76.jpg', 320, 96, '', '0000-00-00'),
(77, 11, 'Spinner Star', 'Box', 'logo.jpg', 400, 120, '', '0000-00-00'),
(78, 11, 'HelicopterTron', 'Box', 'logo.jpg', 600, 180, '', '0000-00-00'),
(79, 12, 'Disco Wheel', 'Box', '79.jpg', 350, 105, '', '0000-00-00'),
(80, 12, 'Hot Wheel', 'Box', '80.jpg', 800, 240, '', '0000-00-00'),
(81, 12, 'Whistling wheel', 'Box', '81.jpg', 500, 150, '', '0000-00-00'),
(82, 13, 'Mini PearlMini Jeweels', 'Box', '82.jpg', 420, 126, '', '0000-00-00'),
(83, 13, 'Rim JimDim Dim', 'Box', '83.jpg', 500, 150, '', '0000-00-00'),
(84, 13, 'Golden star', 'Box', '84.jpg', 850, 255, '', '0000-00-00'),
(85, 13, '2 in 1', 'Box', '85.jpg', 1050, 315, '', '0000-00-00'),
(86, 13, 'Ashrafi', 'Box', '86.jpg', 1000, 300, '', '0000-00-00'),
(87, 13, 'Jasmine', 'Box', '87.jpg', 1000, 300, '', '0000-00-00'),
(88, 13, 'Red', 'Box', '88.jpg', 1100, 330, '', '0000-00-00'),
(89, 13, 'Green', 'Box', '89.jpg', 1100, 330, '', '0000-00-00'),
(90, 13, 'Pen 10', 'Box', '90.jpg', 1150, 345, '', '0000-00-00'),
(91, 13, 'Crackling', 'Box', '91.jpg', 1200, 360, '', '0000-00-00'),
(92, 13, 'Deluxe', 'Box', '92.jpg', 1600, 480, '', '0000-00-00'),
(93, 13, 'Gift Pack', 'Box', '93.jpg', 2300, 690, '', '0000-00-00'),
(94, 13, 'Doramon', 'Box', '94.jpg', 900, 270, '', '0000-00-00'),
(95, 13, 'Deluxe Anar', 'Box', '95.jpg', 1350, 405, '', '0000-00-00'),
(96, 13, 'Magic Star', 'Box', '96.jpg', 1000, 300, '', '0000-00-00'),
(97, 14, 'Champion (5 in 1)', 'Box', '97.jpg', 90, 27, '', '0000-00-00'),
(98, 14, 'Annam (5 in 1', 'Box', '98.jpg', 160, 48, '', '0000-00-00'),
(99, 14, 'Royal (5 in 1)', 'Box', '99.jpg', 210, 63, '', '0000-00-00'),
(100, 14, 'Samrat (5 in 1)', 'Box', '100.jpg', 260, 78, '', '0000-00-00'),
(101, 14, 'Hero (5 in 1)', 'Box', '101.jpg', 320, 96, '', '0000-00-00'),
(102, 14, 'Crown (5 in 1)', 'Box', '102.jpg', 420, 126, '', '0000-00-00'),
(103, 14, 'Majesty Mega (5 in 1)', 'Box', '103.jpg', 560, 168, '', '0000-00-00'),
(104, 15, '7cm. Electric Sparklers', 'Box', '104.jpg', 35, 11, '', '0000-00-00'),
(105, 15, '7cm. Crackling Sparklers', 'Box', '105.jpg', 37, 11, '', '0000-00-00'),
(106, 15, '7cm. Green Sparklers', 'Box', '106.jpg', 45, 14, '', '0000-00-00'),
(107, 15, '7cm. Red Sparklers', 'Box', '107.jpg', 50, 15, '', '0000-00-00'),
(108, 15, '10cm. Electric Sparklers', 'Box', '108.jpg', 50, 15, '', '0000-00-00'),
(109, 15, '10cm. Crackling Sparklers', 'Box', '109.jpg', 60, 18, '', '0000-00-00'),
(110, 15, '10cm. Green Sparklers', 'Box', '110.jpg', 65, 20, '', '0000-00-00'),
(111, 15, '10cm. Red Sparklers', 'Box', '111.jpg', 70, 21, '', '0000-00-00'),
(112, 15, '12cm. Electric Sparklers', 'Box', '112.jpg', 60, 18, '', '0000-00-00'),
(113, 15, '12cm. Crackling Sparklers', 'Box', '113.jpg', 65, 20, '', '0000-00-00'),
(114, 15, '12cm. Green Sparklers', 'Box', '114.jpg', 75, 23, '', '0000-00-00'),
(115, 15, '12cm. Red Sparklers', 'Box', '115.jpg', 80, 24, '', '0000-00-00'),
(116, 15, '15cm. Electric Sparklers', 'Box', '116.jpg', 115, 35, '', '0000-00-00'),
(117, 15, '15cm. Crackling Sparklers', 'Box', 'logo.jpg', 125, 38, '', '0000-00-00'),
(118, 15, '15cm. Green Sparklers', 'Box', '118.jpg', 130, 39, '', '0000-00-00'),
(119, 15, '15cm. Red Sparklers', 'Box', '119.jpg', 135, 41, '', '0000-00-00'),
(120, 15, '15cm. Mishmash Sparklers', 'Box', 'logo.jpg', 1300, 390, '', '0000-00-00'),
(121, 15, '15cm. Mingle Mix Sparkler!', 'Box', '121.jpg', 400, 120, '', '0000-00-00'),
(122, 15, '30cm. Electric Sparklers', 'Box', 'logo.jpg', 115, 35, '', '0000-00-00'),
(123, 15, '30cm. Crackling Sparklers', 'Box', 'logo.jpg', 125, 38, '', '0000-00-00'),
(124, 15, '30cm. Green Sparklers', 'Box', 'logo.jpg', 130, 39, '', '0000-00-00'),
(125, 15, '30cm. Red Sparklers', 'Box', 'logo.jpg', 135, 41, '', '0000-00-00'),
(126, 15, '30cm. Mishmash Sparkler!', 'Box', 'logo.jpg', 1300, 390, '', '0000-00-00'),
(127, 15, '30cm. Mingle Mix Sparkler!', 'Box', '127.jpg', 400, 120, '', '0000-00-00'),
(128, 15, '50cm. Electric Sparklers', 'Box', 'logo.jpg', 600, 180, '', '0000-00-00'),
(129, 15, '50cm. Mingle Mix Sparkler!', 'Box', 'logo.jpg', 800, 240, '', '0000-00-00'),
(130, 15, '75cm. Mingle Mix Sparkler!', 'Box', '130.jpg', 1200, 360, '', '0000-00-00'),
(131, 16, 'Mega Peacock', 'Box', 'logo.jpg', 750, 225, '', '0000-00-00'),
(132, 16, 'King Crackling', 'Box', 'logo.jpg', 800, 240, '', '0000-00-00'),
(133, 16, 'Wonder 3in1', 'Box', 'logo.jpg', 800, 240, '', '0000-00-00'),
(134, 16, 'Special Candle', 'Box', '134.jpg', 800, 240, '', '0000-00-00'),
(135, 16, 'Rock Star', 'Box', '135.jpg', 700, 210, '', '0000-00-00'),
(136, 16, 'Dragon Tail', 'Box', '136.jpg', 450, 135, '', '0000-00-00'),
(137, 16, 'Flora (Cone Fountain)', 'Box', '137.jpg', 1000, 300, '', '0000-00-00'),
(138, 16, 'Singnora', 'Box', '138.jpg', 650, 195, '', '0000-00-00'),
(139, 16, 'Lollypop Fountain', 'Box', '139.jpg', 450, 135, '', '0000-00-00'),
(140, 16, 'Bubble Bubble', 'Box', 'logo.jpg', 900, 270, '', '0000-00-00'),
(141, 17, 'Magic Show', 'Box', '141.jpg', 600, 180, '', '0000-00-00'),
(142, 17, 'SunStarMoon Drops', 'Box', '142.jpg', 500, 150, '', '0000-00-00'),
(143, 18, 'Penta Top', 'Box', '143.jpg', 400, 120, '', '0000-00-00'),
(144, 18, '12 Color Shot', 'Box', '144.jpg', 700, 210, '', '0000-00-00'),
(145, 18, 'Rang Chakkar', 'Box', '145.jpg', 700, 210, '', '0000-00-00'),
(146, 18, 'Chotta Fancy', 'Box', '146.jpg', 180, 54, '', '0000-00-00'),
(147, 18, '1 3/4 Fancy(1 pce)', 'Box', '147.jpg', 400, 120, '', '0000-00-00'),
(148, 18, '1 3/4 Fancy(3pce 45mm)', 'Box', '148.jpg', 700, 210, '', '0000-00-00'),
(149, 18, '1 3/4Fancy(3pce 48mm)', 'Box', '149.jpg', 900, 270, '', '0000-00-00'),
(150, 18, '2 \"Fancy(1pce)', 'Box', 'logo.jpg', 600, 180, '', '0000-00-00'),
(151, 18, '2 \"Fancy(2pce)', 'Box', 'logo.jpg', 1200, 360, '', '0000-00-00'),
(152, 18, '3 \"Fancy(1pce)', 'Box', 'logo.jpg', 900, 270, '', '0000-00-00'),
(153, 18, '3 \"Fancy(2pce)', 'Box', 'logo.jpg', 1800, 540, '', '0000-00-00'),
(154, 18, '3 \"Fancy(7Steps)', 'Box', 'logo.jpg', 1100, 330, '', '0000-00-00'),
(155, 18, '3 \"Fancy (Double Balls)', 'Box', 'logo.jpg', 1200, 360, '', '0000-00-00'),
(156, 18, '4 \"Fancy(1pce)', 'Box', 'logo.jpg', 1600, 480, '', '0000-00-00'),
(157, 19, 'Sweet 16 Whistling', 'Box', '157.jpg', 1300, 390, '', '0000-00-00'),
(158, 19, '15 Shot\n', 'Box', 'logo.jpg', 900, 270, '', '0000-00-00'),
(159, 19, '30 Shot ·SPL\n', 'Box', 'logo.jpg', 1600, 480, '', '0000-00-00'),
(160, 19, '30 Shot Colour\n', 'Box', '160.jpg', 1200, 360, '', '0000-00-00'),
(161, 19, '60 Shot\n', 'Box', '161.jpg', 3200, 960, '', '0000-00-00'),
(162, 19, '100 Shot', 'Box', 'logo.jpg', 5500, 1650, '', '0000-00-00'),
(163, 19, '120 Shot', 'Box', '163.jpg', 6000, 1800, '', '0000-00-00'),
(164, 19, '240 Shot', 'Box', '164.jpg', 12000, 3600, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `intsettingsid` int(11) NOT NULL,
  `website` varchar(55) NOT NULL,
  `varemail` text NOT NULL,
  `varrow` varchar(11) NOT NULL DEFAULT '',
  `varrowsfront` varchar(10) NOT NULL DEFAULT '',
  `varAdmtitle` text NOT NULL,
  `metatagkeyword` longtext NOT NULL,
  `varFortitle` text NOT NULL,
  `metatagdesc` longtext NOT NULL,
  `vardate` varchar(11) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`intsettingsid`, `website`, `varemail`, `varrow`, `varrowsfront`, `varAdmtitle`, `metatagkeyword`, `varFortitle`, `metatagdesc`, `vardate`) VALUES
(1, 'www.asragencies.com', 'help@asragencies.com', '300', '10000', 'asragencies', 'asragencies', 'asragencies', 'asragencies', '2021-10-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`intsettingsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `Cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `Oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `Pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `intsettingsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
