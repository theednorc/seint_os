-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2018 at 08:13 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(100) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`) VALUES
(1, 'admin', 'seint');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandid` int(100) NOT NULL,
  `brandname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brandname`) VALUES
(1, '424'),
(2, 'supreme'),
(3, 'changeyun'),
(4, 'korea sweater'),
(5, 'floral'),
(6, 'BKK'),
(7, 'Hello Kitty'),
(8, 'Traditional'),
(9, 'Lshua'),
(10, 'centeam'),
(11, 'who care you'),
(12, 'ck'),
(13, 'AK'),
(14, 'Jenny'),
(15, 'Date'),
(16, 'UN goyave');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cateid` int(100) NOT NULL,
  `catename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateid`, `catename`) VALUES
(1, 'Jeans'),
(2, 'Pants'),
(3, 'Back pack'),
(4, 'Shoes'),
(5, 'Cosmetics'),
(6, 'Toy'),
(7, 'wadrobe'),
(8, 'Short pant'),
(9, 'Shirt'),
(10, 'Sweater'),
(11, 'Top'),
(12, 'Dress'),
(13, 'Slim Bag'),
(14, 'Sport Bag'),
(15, 'Bag'),
(16, 'One set'),
(17, 'Blanket'),
(18, 'T-shirt'),
(19, 'Hoodie'),
(20, 'off shoulder'),
(21, 'spant'),
(22, 'Blouse'),
(23, 'Trouser'),
(24, 'baby bed'),
(25, 'coat'),
(26, 'long coat'),
(27, 'hair click'),
(28, 'longyi'),
(29, 'slipper'),
(30, 'Jump suit'),
(31, 'skirt'),
(32, 'rain coat'),
(33, 'bra'),
(34, 'underpant'),
(35, 'purse'),
(36, 'pajamas'),
(37, 'cardigan');

-- --------------------------------------------------------

--
-- Table structure for table `gen`
--

CREATE TABLE `gen` (
  `genid` int(100) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen`
--

INSERT INTO `gen` (`genid`, `genre`) VALUES
(1, 'Kids'),
(2, 'Men'),
(3, 'Women'),
(4, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsid` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsid`, `email`, `created_at`) VALUES
(1, 'koko@gmail.com', '2018-07-29 19:19:56'),
(2, 'ayeaye@gmail.com', '2018-07-29 19:22:49'),
(3, 'choseint@gmail.com', '2018-07-31 16:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `residentaddress` text NOT NULL,
  `deliveryaddress` text NOT NULL,
  `created_at` date NOT NULL,
  `modified_at` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fname`, `lname`, `email`, `phone`, `residentaddress`, `deliveryaddress`, `created_at`, `modified_at`, `status`) VALUES
(1, 'koko', 'koko', 'ko@gmail.com', '938409384', 'mandalay        ', 'mandalay', '2018-09-02', '2018-09-02', 0),
(2, 'nyi', 'nyi', 'nyi@gmail.com', '029309809989', 'yangon        ', 'yangon', '2018-09-04', '2018-09-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `items_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `items_qty` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`items_id`, `order_id`, `productcode`, `items_qty`) VALUES
(1, 1, 's2two7', 10),
(2, 2, 'ko2et', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(100) NOT NULL,
  `brandid` int(100) NOT NULL,
  `cateid` int(100) NOT NULL,
  `genid` int(100) NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `colordescription` text NOT NULL,
  `sizedescription` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `brandid`, `cateid`, `genid`, `productcode`, `productname`, `colordescription`, `sizedescription`, `description`, `image`, `price`, `Status`, `discount`) VALUES
(1, 1, 8, 2, '424st', 'Strip short pant', 'green', 'free', 'flexible ', 'c (79).jpeg', '6000', 'InStock', 0),
(2, 2, 8, 2, 'sup1st', 'strip short pant', 'dark orange', 'free', '', '29.jpeg', '6000', 'InStock', 0),
(3, 4, 10, 2, 'ko2et', 'three color strip sweater', 'red ', 'free', '', '31.jpeg', '10000', 'InStock', 0),
(4, 6, 17, 4, 'b51sn', 'silicon blanket', 'pale blue', '90cm*180cm', 'design as in photo', 'c (669).jpg', '15500', 'InStock', 30),
(5, 8, 16, 3, 'tos8w', 'traditional one set', 'pink', 'free', 'color as in photo', 'c (667).jpg', '15000', 'InStock', 0),
(6, 9, 16, 3, 'lfwo89', 'love flower', 'pink and floral', 'free', '', 'c (654).jpg', '15000', 'InStock', 0),
(7, 6, 18, 3, 'woet10', 'elastic t-shirt', 'yellow', 'free', 'just 10000 Ks in total 3 items', 'c (648).jpg', '3500', 'InStock', 0),
(8, 6, 18, 3, 'woet11', 'elastic t-shirt', 'black', 'free', 'just 10000 Ks in total 3 items', 'c (649).jpg', '3500', 'InStock', 20),
(9, 6, 18, 3, 'woet12', 'elastic t-shirt', 'red', 'free', 'just 10000 Ks in total 3 items', 'c (652).jpg', '3500', 'InStock', 0),
(10, 6, 19, 3, 'woph7', 'plain hoodie', 'pink', 'free', '', 'c (647).jpg', '7000', 'InStock', 0),
(11, 6, 19, 3, 'woph8', 'plain hoodie', 'blue', 'free', '', 'c (646).jpg', '7000', 'InStock', 0),
(12, 6, 19, 3, 'wo3121', '3 in 1 hoodie', 'pink', 'free', '', 'c (642).jpg', '21500', 'InStock', 0),
(13, 6, 17, 4, 'b52sn', 'silicon blanket', 'rainbow striped', '90cm*180cm', 'design as in photo', 'c (670).jpg', '15500', 'InStock', 0),
(14, 6, 20, 3, 'woost', 'off shoulder top', 'red', 'free', 'so cool', 'c (636).jpg', '8500', 'InStock', 0),
(15, 6, 20, 3, 'wo1st', 'off shoulder top', 'yellow', 'free', 'so cool', 'c (637).jpg', '8500', 'InStock', 0),
(16, 6, 20, 3, 'wo2st', 'off shoulder top', 'white', 'free', 'so cool', 'c (638).jpg', '8500', 'InStock', 0),
(17, 6, 21, 3, 'wossc21', 'silk spant collar', 'red', 'free', '', 'c (737).jpg', '8000', 'InStock', 0),
(18, 6, 21, 3, 'wossc22', 'silk spant collar', 'black', 'free', '', 'c (635).jpg', '8000', 'InStock', 0),
(19, 6, 21, 3, 'wossc23', 'silk spant collar', 'white', 'free', '', 'c (738).jpg', '8000', 'InStock', 0),
(20, 6, 21, 3, 'wossc24', 'silk spant collar', 'yellow', 'free', '', 'c (739).jpg', '8000', 'InStock', 0),
(21, 6, 16, 3, 'ctswo', 'cotton t-shirt & checked skirt', 'white & pale blue', 'free', '', 'c (633).jpg', '14000', 'InStock', 0),
(22, 6, 22, 3, 'pbob62', 'plain blouse with 1 button', 'pink', 'M ', '', 'c (622).jpg', '15000', 'InStock', 0),
(23, 6, 22, 3, 'pbob63', 'plain blouse with 1 button', 'pink', 'L', '', 'c (625).jpg', '15000', 'InStock', 0),
(24, 6, 22, 3, 'pbob64', 'plain blouse with 1 button', 'pale blue', 'M ', '', 'c (623).jpg', '15000', 'InStock', 0),
(25, 6, 22, 3, 'pbob65', 'plain blouse with 1 button', 'dark blue', 'L', '', 'c (623).jpg', '15000', 'InStock', 0),
(26, 6, 22, 3, 'pbob66', 'plain blouse with 1 button', 'pale blue', 'M ', '', 'c (624).jpg', '15000', 'InStock', 0),
(27, 6, 22, 3, 'pbob67', 'plain blouse with 1 button', 'dark blue', 'L', '', 'c (624).jpg', '15000', 'InStock', 0),
(28, 6, 11, 3, 'wocrt2', 'cute crop top', 'white', 'free', 'cute and sexy', 'c (616).jpg', '5500', 'InStock', 0),
(29, 6, 11, 3, 'wocrt3', 'cute crop top', 'yellow', 'free', 'cute and sexy', 'c (618).jpg', '5500', 'InStock', 0),
(30, 6, 17, 4, 'b53sn', 'silicon blanket', 'pink emoji', '90cm*180cm', 'design as in photo', 'c (671).jpg', '15500', 'InStock', 0),
(31, 8, 16, 3, 'cos3t', 'cotton one set short sleeve', 'print blue', 'M', 'good quality', 'c (606).jpg', '14000', 'InStock', 0),
(32, 8, 16, 3, 'cos4t', 'cotton one set short sleeve', 'print blue', 'L', 'good quality', 'c (606).jpg', '14000', 'InStock', 0),
(33, 8, 16, 3, 'cos5t', 'cotton one set short sleeve', 'print blue', 'XL', 'quality A', 'c (605).jpg', '14000', 'InStock', 0),
(34, 8, 16, 3, 'cos6t', 'cotton one set short sleeve', 'print dark orange', 'M', 'good quality', 'c (608).jpg', '14000', 'InStock', 0),
(35, 8, 16, 3, 'cos7t', 'cotton one set short sleeve', 'print dark orange', 'L', 'good quality', 'c (609).jpg', '14000', 'InStock', 0),
(36, 8, 16, 3, 'cos8t', 'cotton one set short sleeve', 'print dark orange', 'XL', 'quality A', 'c (610).jpg', '14000', 'InStock', 0),
(37, 8, 16, 3, 'cos9t', 'cotton one set short sleeve', 'print pink', 'M', 'good quality', 'c (612).jpg', '14000', 'InStock', 0),
(38, 8, 16, 3, 'cos1t', 'cotton one set short sleeve', 'print pink', 'L', 'good quality', 'c (613).jpg', '14000', 'InStock', 0),
(39, 8, 16, 3, 'cos0t', 'cotton one set short sleeve', 'print pink', 'XL', 'quality A', 'c (614).jpg', '14000', 'InStock', 0),
(40, 8, 16, 3, 'cos1e', 'cotton one set short sleeve', 'print yellow', 'M', 'good quality', 'c (603).jpg', '14000', 'InStock', 0),
(41, 8, 16, 3, 'cos2e', 'cotton one set short sleeve', 'print yellow', 'L', 'good quality', 'c (604).jpg', '14000', 'InStock', 0),
(42, 8, 16, 3, 'cos4e', 'cotton one set short sleeve', 'print yellow', 'XL', 'quality A', 'c (604).jpg', '14000', 'InStock', 0),
(43, 8, 16, 3, 'cos1d', 'cotton one set short sleeve', 'print green', 'M', 'good quality', 'c (602).jpg', '14000', 'InStock', 0),
(44, 8, 16, 3, 'cos2d', 'cotton one set short sleeve', 'print green', 'L', 'good quality', 'c (602).jpg', '14000', 'InStock', 0),
(45, 8, 16, 3, 'cos3d', 'cotton one set short sleeve', 'print green', 'XL', 'quality A', 'c (607).jpg', '14000', 'InStock', 0),
(46, 10, 23, 2, 'qtcme3', '3 quarter trouser ', 'blue', 'free', '', 'c (580).jpg', '7500', 'InStock', 0),
(47, 11, 18, 2, 'wcyt01', 'who care you t-shirt', 'red', 'XL', '', 'c (574).jpg', '10000', 'InStock', 0),
(48, 11, 18, 2, 'wcyt02', 'who care you t-shirt', 'red', '2XL', '', 'c (575).jpg', '10000', 'InStock', 0),
(49, 11, 18, 2, 'wcyt03', 'who care you t-shirt', 'black', 'XL', '', 'c (573).jpg', '10000', 'InStock', 0),
(50, 11, 18, 2, 'wcyt04', 'who care you t-shirt', 'black', '2XL', '', 'c (578).jpg', '10000', 'InStock', 0),
(51, 6, 24, 1, 'bbki31', 'baby bed', 'blue', '108*58cm', '', 'c (560).jpg', '8000', 'InStock', 0),
(52, 6, 24, 1, 'bbki41', 'baby bed', 'pink', '108*58cm', '', 'c (562).jpg', '8000', 'InStock', 0),
(53, 5, 22, 3, 'rfwo02', 'rose flower ', 'orange', 'free', '', 'c (554).jpg', '8500', 'InStock', 0),
(54, 5, 22, 3, 'rfwo12', 'rose flower ', 'black', 'free', '', 'c (553).jpg', '8500', 'InStock', 0),
(55, 5, 22, 3, 'rfwo22', 'rose flower ', 'white', 'free', '', 'c (555).jpg', '8500', 'InStock', 0),
(56, 6, 17, 4, 'b54sn', 'silicon blanket', 'star flower', '90cm*180cm', 'design as in photo', 'c (672).jpg', '15500', 'InStock', 0),
(57, 6, 12, 3, 'cdwo84', 'cotton dress', 'yellow', 'free', 'confortable and flawless beauty', 'c (545).jpg', '6000', 'InStock', 0),
(58, 6, 12, 3, 'cdwo85', 'cotton dress', 'dark blue', 'free', 'confortable and flawless beauty', 'c (544).jpg', '6000', 'InStock', 0),
(59, 6, 9, 4, 'csg483', 'couple shirt', 'black and white', 'free', '', 'c (540).jpg', '6000', 'InStock', 0),
(60, 3, 4, 3, 'fswo31', 'flat shoe', 'black', '36', '', 'c (533).jpg', '6000', 'InStock', 0),
(61, 6, 16, 3, 'wopost', 'print one set', 'print design', 'free', 'cool and flexible', 'c (522).jpg', '4000', 'InStock', 0),
(62, 6, 16, 3, 'wop1st', 'print one set', 'print design', 'free', 'cool and flexible', 'c (517).jpg', '4000', 'InStock', 0),
(63, 6, 16, 3, 'wop2st', 'print one set', 'print design', 'free', 'cool and flexible', 'c (518).jpg', '4000', 'InStock', 0),
(64, 6, 16, 3, 'wop3st', 'print one set', 'print design', 'free', 'cool and flexible', 'c (520).jpg', '4000', 'InStock', 0),
(65, 6, 16, 3, 'wop4st', 'print one set', 'print design', 'free', 'cool and flexible', 'c (521).jpg', '4000', 'InStock', 0),
(66, 6, 10, 3, 'tswo93', 'tartan sweater', 'red', 'free', '', 'c (514).jpg', '15000', 'InStock', 0),
(67, 6, 10, 3, 'tswo94', 'tartan sweater', 'inner purple', 'free', '', 'c (510).jpg', '15000', 'InStock', 0),
(68, 6, 10, 3, 'tswo95', 'tartan sweater', 'inner red', 'free', '', 'c (509).jpg', '15000', 'InStock', 0),
(69, 6, 10, 3, 'tswo96', 'tartan sweater', 'gray', 'free', '', 'c (511).jpg', '15000', 'InStock', 0),
(70, 6, 10, 3, 'tswo97', 'tartan sweater', 'seagreen', 'free', '', 'c (512).jpg', '15000', 'InStock', 0),
(71, 6, 22, 3, 'rcb343', 'ribbon cotton blouse', 'pale blue', 'free', 'so pretty', 'c (495).jpg', '8500', 'InStock', 0),
(72, 6, 22, 3, 'rcb343', 'ribbon cotton blouse', 'white', 'free', 'so pretty', 'c (500).jpg', '8500', 'InStock', 0),
(73, 12, 9, 2, 'vs3men', 'V shape short sleeve', 'black only', '2XL', '', 'c (490).jpg', '7000', 'InStock', 0),
(74, 12, 9, 2, 'vs4men', 'V shape short sleeve', 'black only', '3XL', '', 'c (490).jpg', '7000', 'InStock', 0),
(75, 6, 4, 3, 'fscwo6', 'flat shoe colored', 'inner pink outer dark blue', '36', '', 'c (482).jpg', '7000', 'InStock', 0),
(76, 6, 4, 3, 'fscwo7', 'flat shoe colored', 'inner pink outer dark blue', '37', '', 'c (482).jpg', '7000', 'InStock', 0),
(77, 6, 4, 3, 'fscwo8', 'flat shoe colored', 'inner pink outer dark blue', '38', '', 'c (482).jpg', '7000', 'InStock', 0),
(78, 6, 4, 3, 'fscwo9', 'flat shoe colored', 'inner pink outer dark blue', '39', '', 'c (482).jpg', '7000', 'InStock', 0),
(79, 6, 4, 3, 'fscw1p', 'flat shoe colored', 'inner brown outer gray', '36', '', 'c (483).jpg', '7000', 'InStock', 0),
(80, 6, 4, 3, 'fscw2p', 'flat shoe colored', 'inner brown outer gray', '37', '', 'c (483).jpg', '7000', 'InStock', 0),
(81, 6, 4, 3, 'fscw3p', 'flat shoe colored', 'inner brown outer gray', '38', '', 'c (483).jpg', '7000', 'InStock', 0),
(82, 6, 4, 3, 'fscw4p', 'flat shoe colored', 'inner brown outer gray', '39', '', 'c (483).jpg', '7000', 'InStock', 0),
(83, 6, 4, 3, 'fscw5p', 'flat shoe colored', 'inner brown outer gray', '40', '', 'c (483).jpg', '7000', 'InStock', 0),
(84, 6, 4, 3, 'fscwr1', 'flat shoe colored', 'inner peachpuff outer black', '36', '', 'c (484).jpg', '7000', 'InStock', 0),
(85, 6, 4, 3, 'fscwr2', 'flat shoe colored', 'inner peachpuff outer black', '37', '', 'c (484).jpg', '7000', 'InStock', 0),
(86, 6, 4, 3, 'fscwr3', 'flat shoe colored', 'inner peachpuff outer black', '38', '', 'c (484).jpg', '7000', 'InStock', 0),
(87, 6, 4, 3, 'fscwr4', 'flat shoe colored', 'inner peachpuff outer black', '39', '', 'c (484).jpg', '7000', 'InStock', 0),
(88, 6, 4, 3, 'fscwr5', 'flat shoe colored', 'inner peachpuff outer black', '40', '', 'c (484).jpg', '7000', 'InStock', 0),
(89, 6, 11, 3, 'lstwok', 'long sleeve top', 'white', 'free', '', 'c (476).jpg', '8000', 'InStock', 0),
(90, 6, 11, 3, 'lstw1k', 'long sleeve top', 'green', 'free', '', 'c (475).jpg', '8000', 'InStock', 0),
(91, 6, 11, 3, 'lstw2k', 'long sleeve top', 'red', 'free', '', 'c (472).jpg', '8000', 'InStock', 0),
(92, 6, 11, 3, 'lstw3k', 'long sleeve top', 'blue', 'free', '', 'c (473).jpg', '8000', 'InStock', 0),
(93, 13, 26, 3, 'cslcwo', 'color striped long coat', 'strip pink', 'free', '', 'c (465).jpg', '12000', 'InStock', 0),
(94, 13, 26, 3, 'cslcw1', 'color striped long coat', 'strip black', 'free', '', 'c (466).jpg', '12000', 'InStock', 0),
(95, 13, 26, 3, 'cslcw2', 'color striped long coat', 'strip gray', 'free', '', 'c (468).jpg', '12000', 'InStock', 0),
(96, 13, 26, 3, 'cslcw3', 'color striped long coat', 'strip brown', 'free', '', 'c (469).jpg', '12000', 'InStock', 0),
(97, 12, 9, 2, 's2dsme', 'short sleeve design shirt', 'gray', 'L', '', 'c (456).jpg', '15000', 'InStock', 0),
(98, 12, 9, 2, 's3dsme', 'short sleeve design shirt', 'gray', 'XL', '', 'c (456).jpg', '15000', 'InStock', 0),
(99, 12, 9, 2, 's4dsme', 'short sleeve design shirt', 'black', 'L', '', 'c (457).jpg', '15000', 'InStock', 0),
(100, 12, 9, 2, 's5dsme', 'short sleeve design shirt', 'black', 'XL', '', 'c (460).jpg', '15000', 'InStock', 0),
(101, 12, 9, 2, 's6dsme', 'short sleeve design shirt', 'white', 'L', '', 'c (455).jpg', '15000', 'InStock', 0),
(102, 12, 9, 2, 's7dsme', 'short sleeve design shirt', 'white', 'XL', '', 'c (458).jpg', '15000', 'InStock', 0),
(103, 1, 25, 4, 'rcge43', 'rain coat', 'gray', 'free', 'worth paying', 'c (451).jpg', '7000', 'InStock', 0),
(104, 5, 27, 3, 'rcftwo', 'ribbon click ', 'black', '', 'good quality', 'c (428).jpg', '4000', 'InStock', 0),
(105, 5, 27, 3, 'rcftw1', 'ribbon click ', 'orchid', '', 'good quality', 'c (429).jpg', '4000', 'InStock', 0),
(106, 5, 27, 3, 'rcftw2', 'ribbon click ', 'pink', '', 'good quality', 'c (430).jpg', '4000', 'InStock', 0),
(107, 5, 27, 3, 'rcftw3', 'ribbon click ', 'seagreen', '', 'good quality', 'c (432).jpg', '4000', 'InStock', 0),
(108, 5, 27, 3, 'rcftw4', 'ribbon click ', 'red', '', 'good quality', 'c (433).jpg', '4000', 'InStock', 0),
(109, 5, 27, 3, 'rcftw5', 'ribbon click ', 'purple', '', 'good quality', 'c (434).jpg', '4000', 'InStock', 0),
(110, 5, 27, 3, 'rcftw6', 'ribbon click ', 'brown and white', '', 'good quality', 'c (435).jpg', '4000', 'InStock', 0),
(111, 5, 27, 3, 'rcftw7', 'ribbon click ', 'purple and white', '', 'good quality', 'c (436).jpg', '4000', 'InStock', 0),
(112, 5, 27, 3, 'rcftw8', 'ribbon click ', 'green and white', '', 'good quality', 'c (437).jpg', '4000', 'InStock', 0),
(113, 5, 27, 3, 'rcftw9', 'ribbon click ', 'red and white', '', 'good quality', 'c (439).jpg', '4000', 'InStock', 0),
(114, 5, 27, 3, 'rcft1o', 'ribbon click ', 'green and white', '', 'good quality', 'c (440).jpg', '4000', 'InStock', 0),
(115, 5, 27, 3, 'rcft2o', 'ribbon click ', 'seagreen and white', '', 'good quality', 'c (442).jpg', '4000', 'InStock', 0),
(116, 5, 27, 3, 'rcft3o', 'ribbon click ', 'powder blue', '', 'good quality', 'c (443).jpg', '4000', 'InStock', 0),
(117, 5, 27, 3, 'rcft4o', 'ribbon click ', 'pink', '', 'good quality', 'c (444).jpg', '4000', 'InStock', 0),
(118, 5, 27, 3, 'rcft5o', 'ribbon click ', 'pink', '', 'good quality', 'c (445).jpg', '4000', 'InStock', 0),
(119, 5, 27, 3, 'rcft6o', 'ribbon click ', 'white', '', 'good quality', 'c (446).jpg', '4000', 'InStock', 0),
(120, 5, 27, 3, 'rcft7o', 'ribbon click ', 'green', '', 'good quality', 'c (447).jpg', '4000', 'InStock', 0),
(121, 5, 27, 3, 'rcft8o', 'ribbon click ', 'white rose', '', 'good quality', 'c (449).jpg', '4000', 'InStock', 0),
(122, 5, 27, 3, 'rcft9o', 'ribbon click ', 'pink rose', '', 'good quality', 'c (450).jpg', '4000', 'InStock', 0),
(123, 6, 1, 3, 'jdwo09', 'jean dress', '', '', '', 'c (427).jpg', '10000', 'InStock', 0),
(124, 6, 16, 3, 'wodos6', 'designed one set', 'pink', 'M', '', 'c (422).jpg', '8000', 'InStock', 0),
(125, 6, 16, 3, 'wodos7', 'designed one set', 'pink', 'L', '', 'c (423).jpg', '8000', 'InStock', 0),
(126, 6, 16, 3, 'wodos8', 'designed one set', 'pink', 'XL', '', 'c (424).jpg', '8000', 'InStock', 0),
(127, 6, 16, 3, 'wodos9', 'designed one set', 'pink', '2XL', '', 'c (424).jpg', '8000', 'InStock', 0),
(128, 6, 16, 3, 'wodo16', 'designed one set', 'black', 'M', '', 'c (421).jpg', '8000', 'InStock', 0),
(129, 6, 16, 3, 'wodo26', 'designed one set', 'black', 'L', '', 'c (425).jpg', '8000', 'InStock', 0),
(130, 6, 16, 3, 'wodo36', 'designed one set', 'black', 'XL', '', 'c (421).jpg', '8000', 'InStock', 0),
(131, 6, 16, 3, 'wodo46', 'designed one set', 'black', '2XL', '', 'c (425).jpg', '8000', 'InStock', 0),
(132, 6, 26, 3, 'woel82', 'elastic long coat', 'red', 'free', 'good quality', 'c (397).jpg', '30000', 'InStock', 0),
(133, 6, 26, 3, 'woel83', 'elastic long coat', 'orange', 'free', 'good quality', 'c (398).jpg', '30000', 'InStock', 0),
(134, 6, 12, 3, 'sdwo22', 'spotted top dress', 'dark red spot', 'free', '', 'c (390).jpg', '15500', 'InStock', 0),
(135, 6, 12, 3, 'sdwo33', 'spotted top dress', 'black spot', 'free', '', 'c (392).jpg', '15500', 'InStock', 0),
(136, 8, 28, 2, 'plfm2n', 'patterned longyi for men', 'dark orange', '', 'quality A', 'c (388).jpg', '10000', 'InStock', 0),
(137, 6, 16, 3, 's2bcwo', 'short sleeve blouse and circle skirt', 'white and blue', 'free', '', 'c (386).jpg', '10000', 'InStock', 0),
(138, 3, 18, 2, 'Adesmn', 'A design elastic shirt', 'black', 'L', 'quality A', 'c (379).jpg', '12000', 'InStock', 0),
(139, 3, 18, 2, 'Adesm1', 'A design elastic shirt', 'black', 'XL', 'quality A', 'c (379).jpg', '12000', 'InStock', 0),
(140, 3, 18, 2, 'Adesm2', 'A design elastic shirt', 'black', '2XL', 'quality A', 'c (379).jpg', '12000', 'InStock', 0),
(141, 3, 18, 2, 'Ades1n', 'A design elastic shirt', 'gray', 'L', 'quality A', 'c (380).jpg', '12000', 'InStock', 0),
(142, 3, 18, 2, 'Ades2n', 'A design elastic shirt', 'gray', 'XL', 'quality A', 'c (380).jpg', '12000', 'InStock', 0),
(143, 3, 18, 2, 'Ades3n', 'A design elastic shirt', 'gray', '2XL', 'quality A', 'c (380).jpg', '12000', 'InStock', 0),
(144, 3, 18, 2, 'Ade1mn', 'A design elastic shirt', 'white', 'L', 'quality A', 'c (382).jpg', '12000', 'InStock', 0),
(145, 3, 18, 2, 'Ade2mn', 'A design elastic shirt', 'white', 'XL', 'quality A', 'c (382).jpg', '12000', 'InStock', 0),
(146, 3, 18, 2, 'Ade3mn', 'A design elastic shirt', 'white', '2XL', 'quality A', 'c (382).jpg', '12000', 'InStock', 0),
(147, 6, 25, 3, 'pwcwo5', 'plain waffer coat', 'peachpuff', 'free', 'up to lb140', 'c (374).jpg', '9000', 'InStock', 0),
(148, 6, 25, 3, 'pwcw15', 'plain waffer coat', 'blue', 'free', 'up to lb140', 'c (372).jpg', '9000', 'InStock', 0),
(149, 6, 25, 3, 'pwcw25', 'plain waffer coat', 'aqua', 'free', 'up to lb140', 'c (373).jpg', '9000', 'InStock', 0),
(150, 6, 25, 3, 'pwcw35', 'plain waffer coat', 'pink', 'free', 'up to lb140', 'c (741).jpg', '9000', 'InStock', 0),
(151, 14, 29, 3, 'ts22wo', 'flowery thick slipper', 'dark', '36', 'Bkk item', 'c (371).jpg', '7000', 'InStock', 0),
(152, 15, 12, 3, 'fdwo92', 'flowery dress', 'flower pattern pale green ', 'free', 'up to lb125', 'c (365).jpg', '15000', 'InStock', 0),
(153, 15, 12, 3, 'fdwo93', 'flowery dress', 'flower pattern pale blue', 'free', 'up to lb125', 'c (364).jpg', '15000', 'InStock', 0),
(154, 15, 12, 3, 'fdwo94', 'flowery dress', 'flower pattern peachpuff', 'free', 'up to lb125', 'c (367).jpg', '15000', 'InStock', 0),
(155, 6, 30, 3, 'rjswo5', 'ribbon jump suit', 'dark orange', 'free', '', 'c (342).jpg', '15000', 'InStock', 0),
(156, 6, 30, 3, 'rjsw15', 'ribbon jump suit', 'black', 'free', '', 'c (343).jpg', '15000', 'InStock', 0),
(157, 6, 30, 3, 'rjsw25', 'ribbon jump suit', 'seagreen', 'free', '', 'c (344).jpg', '15000', 'InStock', 0),
(158, 6, 12, 3, 's3d4wo', 'spotted short sleeve dress', 'black plain and white spot', 'free', 'nice design', 'c (341).jpg', '25500', 'InStock', 0),
(159, 6, 9, 3, 'ps24wo', 'plain shirt with 2 strip design', 'yellow', 'free', '', 'c (338).jpg', '8000', 'InStock', 0),
(160, 6, 9, 3, 'ps24wl', 'plain shirt with 2 strip design', 'white', 'free', '', 'c (336).jpg', '8000', 'InStock', 0),
(161, 7, 6, 1, 'dino89', 'dinosaur', '', '', 'cutie popular toy', 'c (330).jpg', '12000', 'InStock', 0),
(162, 6, 12, 3, 'tldwo4', 'top long dress', 'red', 'free', 'good quality', 'c (323).jpg', '24500', 'InStock', 0),
(163, 6, 12, 3, 'tldwl4', 'top long dress', 'pink', 'free', 'good quality', 'c (324).jpg', '24500', 'InStock', 0),
(164, 6, 12, 3, 'tldwp4', 'top long dress', 'white', 'free', 'good quality', 'c (325).jpg', '24500', 'InStock', 0),
(165, 6, 31, 3, 'ecswo3', 'elastic circle skirt', 'black', 'free', '', 'c (318).jpg', '13000', 'InStock', 0),
(166, 6, 31, 3, 'ecswp3', 'elastic circle skirt', 'pale pink', 'free', '', 'c (319).jpg', '13000', 'InStock', 0),
(167, 6, 31, 3, 'ecsws3', 'elastic circle skirt', 'seagreen', 'free', '', 'c (315).jpg', '13000', 'InStock', 0),
(168, 13, 22, 3, 'bds4wo', 'butterfly design sleeve', 'gray', 'free', 'sexy and cool', 'c (313).jpg', '14500', 'InStock', 0),
(169, 7, 6, 1, 'uniki1', 'unicon ', 'yellow', '200 cm', '', 'c (284).jpg', '10000', 'InStock', 0),
(170, 6, 17, 4, 'b55sn', 'silicon blanket', 'checked pink color', '90cm*180cm', 'design as in photo', 'c (675).jpg', '15500', 'InStock', 0),
(171, 16, 13, 3, 'lsb2wo', '2 layered slim bag', 'pink', '', 'good quality', 'c (271).jpg', '11000', 'InStock', 0),
(172, 16, 13, 3, 'lsb2xo', '2 layered slim bag', 'black', '', 'good quality', 'c (273).jpg', '11000', 'InStock', 0),
(173, 16, 13, 3, 'lsb2yo', '2 layered slim bag', 'brown', '', 'good quality', 'c (275).jpg', '11000', 'InStock', 0),
(174, 6, 32, 3, 'zpcwo2', 'zipped plain coat', 'plain white and red design', 'free', '', 'c (262).jpg', '12000', 'InStock', 0),
(175, 6, 32, 3, 'zpcwp2', 'zipped plain coat', 'plain white and purple design', 'free', '', 'c (263).jpg', '12000', 'InStock', 0),
(176, 6, 33, 3, 'pdbwo5', 'plain design bra', 'gray', 'free', '', 'c (261).jpg', '11000', 'InStock', 0),
(177, 6, 33, 3, 'pdbwp5', 'plain design bra', 'black', 'free', '', 'c (259).jpg', '11000', 'InStock', 0),
(178, 6, 33, 3, 'pdbwq5', 'plain design bra', 'white', 'free', '', 'c (260).jpg', '11000', 'InStock', 0),
(179, 6, 33, 3, 'cdbwo0', 'checked design bra', 'white', 'free', '', 'c (257).jpg', '10000', 'InStock', 0),
(180, 6, 33, 3, 'cdbw10', 'checked design bra', 'black', 'free', '', 'c (255).jpg', '10000', 'InStock', 0),
(181, 6, 34, 3, 'suwo02', 'stocking underpant', 'white', 'free', '  ', 'c (247).jpg', '10000', 'InStock', 0),
(182, 6, 34, 3, 'suwl02', 'stocking underpant', 'black', 'free', '  ', 'c (244).jpg', '10000', 'InStock', 0),
(183, 6, 34, 3, 'suwm02', 'stocking underpant', 'bisque', 'free', '  ', 'c (245).jpg', '10000', 'InStock', 0),
(184, 3, 35, 2, 'mpme41', 'men purse', 'black', '8*18cm', '', 'c (242).jpg', '12000', 'InStock', 0),
(185, 3, 35, 2, 'mpme42', 'men purse', 'brown', '8*18cm', '', 'c (243).jpg', '12000', 'InStock', 0),
(186, 6, 22, 3, 'crs4wo', 'cotton ring sleeve', 'yellow', 'free', '', 'c (239).jpg', '13000', 'InStock', 0),
(187, 6, 17, 4, 'b56sn', 'silicon blanket', 'bubble rainbow design', '90cm*180cm', 'design as in photo', 'c (676).jpg', '15500', 'InStock', 0),
(188, 6, 12, 1, 'bcdpp3', 'baby cute dress', 'peachpuff', '1 year old baby', '', 'c (10).jpeg', '5000', 'InStock', 0),
(189, 6, 22, 3, 'fbwo01', 'flowery blouse', 'black', 'M', '', 'c (238).jpg', '11500', 'InStock', 0),
(190, 6, 22, 3, 'fbwo11', 'flowery blouse', 'black', 'L', '', 'c (238).jpg', '11500', 'InStock', 0),
(191, 6, 22, 3, 'fbwo21', 'flowery blouse', 'black', 'XL', '', 'c (238).jpg', '11500', 'InStock', 0),
(192, 6, 22, 3, 'fbwo31', 'flowery blouse', 'black', '2XL', '', 'c (238).jpg', '11500', 'InStock', 0),
(193, 6, 22, 3, 'fbwo02', 'flowery blouse', 'white', 'M', '', 'c (237).jpg', '11500', 'InStock', 0),
(194, 6, 22, 3, 'fbwo32', 'flowery blouse', 'white', 'L', '', 'c (237).jpg', '11500', 'InStock', 0),
(195, 6, 22, 3, 'fbwo42', 'flowery blouse', 'white', 'XL', '', 'c (237).jpg', '11500', 'InStock', 0),
(196, 6, 22, 3, 'fbwo52', 'flowery blouse', 'white', '2XL', '', 'c (237).jpg', '11500', 'InStock', 0),
(197, 6, 36, 3, 'p2wo39', 'print pajamas', 'plum printed design', 'free', 'lb90 to lb140', 'c (228).jpg', '5000', 'InStock', 0),
(198, 6, 36, 3, 'p2wo49', 'print pajamas', 'pink printed design', 'free', 'lb90 to lb140', 'c (229).jpg', '5000', 'InStock', 0),
(199, 6, 36, 3, 'p2wo59', 'print pajamas', 'peachpuff printed design', 'free', 'lb90 to lb140', 'c (230).jpg', '5000', 'InStock', 10),
(200, 6, 36, 3, 'p2wo69', 'print pajamas', 'blue printed design', 'free', 'lb90 to lb140', 'c (233).jpg', '5000', 'InStock', 0),
(201, 6, 25, 3, 'pcwo19', 'plain coat', 'dark red', 'M', '', 'c (223).jpg', '18500', 'InStock', 0),
(202, 6, 25, 3, 'pcwo29', 'plain coat', 'dark red', 'L', '', 'c (223).jpg', '18500', 'InStock', 0),
(203, 6, 25, 3, 'pcwo39', 'plain coat', 'dark red', 'XL', '', 'c (224).jpg', '18500', 'InStock', 0),
(204, 6, 11, 3, 's2two7', 'short sleeve top', 'red', 'free', '', 'c (195).jpg', '9500', 'InStock', 0),
(205, 6, 25, 3, 'pcwo49', 'plain coat', 'dark red', '2XL', '', 'c (224).jpg', '18500', 'InStock', 0),
(206, 6, 25, 3, 'pcwo59', 'plain coat', 'black', 'M', '', 'c (226).jpg', '18500', 'InStock', 0),
(207, 6, 25, 3, 'pcwo69', 'plain coat', 'black', 'L', '', 'c (226).jpg', '18500', 'InStock', 0),
(208, 6, 11, 3, 's2twa7', 'short sleeve top', 'skyblue', 'free', '', 'c (197).jpg', '9500', 'InStock', 0),
(209, 6, 25, 3, 'pcwo79', 'plain coat', 'black', 'XL', '', 'c (226).jpg', '18500', 'InStock', 0),
(210, 6, 25, 3, 'pcwo89', 'plain coat', 'black', '2XL', '', 'c (226).jpg', '18500', 'InStock', 0),
(211, 6, 37, 3, 'dlscwo', 'designed long sleeve cardigan', 'black', 'free', '', 'c (221).jpg', '12500', 'InStock', 0),
(212, 6, 25, 3, 'pcwo91', 'plain coat', 'blue', 'M', '', 'c (225).jpg', '18500', 'InStock', 0),
(213, 6, 25, 3, 'pcwo92', 'plain coat', 'blue', 'L', '', 'c (225).jpg', '18500', 'InStock', 0),
(214, 6, 11, 3, 's2twb7', 'short sleeve top', 'seagreen', 'free', '', 'c (198).jpg', '9500', 'InStock', 0),
(215, 6, 25, 3, 'pcwo93', 'plain coat', 'blue', 'XL', '', 'c (225).jpg', '18500', 'InStock', 0),
(216, 6, 25, 3, 'pcwo94', 'plain coat', 'blue', '2XL', '', 'c (225).jpg', '18500', 'InStock', 0),
(217, 6, 37, 3, 'dlscw0', 'designed long sleeve cardigan', 'white', 'free', '', 'c (220).jpg', '12500', 'InStock', 0),
(218, 6, 8, 3, 'gpwo92', 'gym pant', 'black', 'free', '', 'c (200).jpg', '6500', 'InStock', 0),
(219, 6, 11, 3, 's2twc7', 'short sleeve top', 'black', 'free', '', 'c (199).jpg', '9500', 'InStock', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `revid` int(100) NOT NULL,
  `revname` varchar(255) NOT NULL,
  `revemail` varchar(255) NOT NULL,
  `revph` varchar(200) NOT NULL,
  `revsubj` varchar(200) NOT NULL,
  `revcomment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`revid`, `revname`, `revemail`, `revph`, `revsubj`, `revcomment`) VALUES
(1, 'thiri swe', 'swe@gmail.com', '09761445927', 'items', 'quality good '),
(2, 'thuya naung', 'thuya@gmail.com', '0978624155', 'delivery', 'so fast');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateid`);

--
-- Indexes for table `gen`
--
ALTER TABLE `gen`
  ADD PRIMARY KEY (`genid`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`revid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gen`
--
ALTER TABLE `gen`
  MODIFY `genid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `items_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `revid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
