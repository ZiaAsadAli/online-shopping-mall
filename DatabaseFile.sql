-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 07:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OnlineShoppingMall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `phn_no` int(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `address`, `phn_no`) VALUES
(2, 'Asad', 'asad@asad.com', '25f9e794323b453885f5181f1b624d0b', 'gujrat', 1234567890),
(1, 'Usma Aslam', 'saad@saad.com', 'defac44447b57f152d14f30cea7a73cb', '  gujrawalla cantt kkkk', 44444444);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `addby` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `addby`, `title`, `date`, `description`, `pic`) VALUES
(1, 'Bu ali', 'SIMPLICITY IS BEST', 'Aug-19-2015', 'description descriptio ndescriptiondescr iptiondescriptio ndescriptiondescr iptiondescriptiondescriptiondescrip tiondescriptiondes criptiondescription descriptiondescript iondescriptiondescr iptiondescriptionde scriptiondescription descriptiondescriptiondescription', '3.jpg'),
(2, 'Bu ali', 'SIMPLICITY IS BEST se', 'Aug-19-2015', 'is the entity used to represent a non-breaking space. It is essentially a standard space, the primary difference being that a browser should not breakis the entity used to represent a non-breaking space. It is essentially a standard space, the primary difference being that a browser should not break', '2.jpg'),
(3, 'Bu ali', 'SIMPLICITY', 'Aug-27-2015', '<p>Asad Ali ZIA</p>', 'slider1.jpg'),
(5, 'Usma Aslam', 'new fashion', 'Oct-11-2015', '<p>this my blog&nbsp;</p>\r\n<p>im very good in blogginh</p>\r\n<p>ettctc</p>\r\n<p>hdgdbjd</p>', '3.jpg'),
(6, 'Usma Aslam', 'Big Sale', 'Dec-01-2015', '<p>This is Winter Sale</p>', '34.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `t_price` decimal(10,2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `shp_address` longtext NOT NULL,
  `userphoneno` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_qty`, `product_price`, `product_code`, `t_price`, `username`, `useremail`, `date`, `status`, `order_no`, `brand_name`, `shp_address`, `userphoneno`) VALUES
(7, 'Facewash', 5, '300.00', 'VD32RMVH5W', '1500.00', 'Saad Saad', '10013256-035@uog.edu.pk', 'Nov-25-2015', 'In Process', 'VHFV5CVZ3X', 'Navia', '', 0),
(17, 'Crush Nail Colours', 1, '900.00', 'ZQC0G2D6W2', '900.00', 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Processed', 'TSWH4HO3RE', 'Maadora', '', 44444444);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Face '),
(2, 'Perfume'),
(3, 'Lipstck'),
(4, 'Hairs'),
(5, 'Hands'),
(6, 'Body Spary');

-- --------------------------------------------------------

--
-- Table structure for table `complete`
--

CREATE TABLE IF NOT EXISTS `complete` (
  `id` int(11) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `t_price` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `p_date` varchar(30) NOT NULL,
  `c_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `shp_address` longtext NOT NULL,
  `completed_by` varchar(50) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `userphoneno` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3302 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complete`
--

INSERT INTO `complete` (`id`, `Product_name`, `product_qty`, `product_code`, `t_price`, `username`, `useremail`, `p_date`, `c_date`, `status`, `order_no`, `brand_name`, `shp_address`, `completed_by`, `product_price`, `userphoneno`) VALUES
(1, 'Crush Nail Colours', 1, 'ZQC0G2D6W2', 900, 'Usma Aslam', 'saad@saad.com', 'Oct-29-2015', 'Dec-08-2015', 'Completed', 'P0X3VK67N4', 'Maadora', '', 'saad@saad.com', '500.00', 0),
(2, 'Lips Sticks', 3, 'CMR90NQ7YN', 1500, 'Saad Saad', '10013256-035@uog.edu.pk', 'Nov-25-2015', 'Dec-08-2015', 'Returned', 'QMDCLFE71N', 'AVON', 'dvjdhbkfhegegegeggegegege', 'saad@saad.com', '500.00', 0),
(3292, 'Lips Sticks', 3, 'CMR90NQ7YN', 1500, 'ali', 'asad@yahoo.com', 'Dec-08-2015', 'Dec-08-2015', 'Completed', 'NFJNJSISXA', 'AVON', 'aaaaaaa', 'saad@saad.com', '500.00', 0),
(3293, 'Crush Nail Colours', 1, 'ZQC0G2D6W2', 900, 'ali', 'asad@yahoo.com', 'Dec-08-2015', 'Dec-08-2015', 'Completed', 'NFJNJSISXA', 'Maadora', 'aaaaaaa', 'saad@saad.com', '900.00', 0),
(3294, 'Purfume', 1, 'H8KE1EAJVT', 1000, 'ali', 'asad@yahoo.com', 'Dec-08-2015', 'Dec-08-2015', 'Completed', 'NFJNJSISXA', 'AVON', 'aaaaaaa', 'saad@saad.com', '1000.00', 0),
(3295, 'Crush Nail Colours', 1, 'ZQC0G2D6W2', 900, 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Dec-08-2015', 'Returned', 'YLMOE8MUOF', 'Maadora', 'qwert', 'saad@saad.com', '900.00', 44444444),
(3296, 'Crush Nail Colours', 1, '59T5ZLEHNZ', 900, 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Dec-08-2015', 'Returned', 'YLMOE8MUOF', 'Maadora', 'qwert', 'saad@saad.com', '900.00', 44444444),
(3297, 'Lips Sticks', 1, 'CMR90NQ7YN', 500, 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Dec-08-2015', 'Returned', 'YLMOE8MUOF', 'AVON', 'qwert', 'saad@saad.com', '500.00', 44444444),
(3298, 'Facewash', 1, 'UZR7N03XAL', 300, 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Dec-08-2015', 'Returned', 'YLMOE8MUOF', 'Navia', 'qwert', 'saad@saad.com', '300.00', 44444444),
(3299, 'Lips Sticks', 5, '1A5G5UB34Z', 5000, 'Usma Aslam', 'saad@saad.com', 'Dec-08-2015', 'Dec-08-2015', 'Returned', 'YLMOE8MUOF', 'Blue heaven', 'qwert', 'saad@saad.com', '1000.00', 44444444),
(3300, 'Facial foam', 1, 'DYELB1VIF6', 650, 'ali', 'asad@yahoo.com', 'Dec-08-2015', 'Dec-08-2015', 'Cancel', 'JN5HF35HNV', 'Navia', '', 'asad@yahoo.com', '650.00', 1234567),
(3301, 'Facial foam', 1, 'DYELB1VIF6', 650, 'ali', 'asad@yahoo.com', 'Dec-08-2015', 'Dec-08-2015', 'Cancel', '6Y2VLZ3CM0', 'Navia', 'iuy', 'asad@yahoo.com', '650.00', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE IF NOT EXISTS `products_list` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` varchar(10000) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_image1` varchar(100) NOT NULL,
  `product_image2` varchar(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `category` varchar(30) NOT NULL,
  `brands` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `keyword` text NOT NULL,
  `code` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `add_by` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`product_id`, `product_name`, `product_desc`, `product_image`, `product_image1`, `product_image2`, `product_price`, `category`, `brands`, `gender`, `keyword`, `code`, `status`, `add_by`) VALUES
(1, 'Crush Nail Colours', '<p><span style="font-family: Roboto, arial, sans-serif; font-size: 12px; line-height: 16px;">Colour Crush Nail Colours - 510 The Body Shop Green</span></p>\r\n<p>&nbsp;</p>', 'Crush Nail Colours.jpg', 'Crush Nail Colours.jpg', 'Crush Nail Colours.jpg', '900.00', 'Hands', 'Maadora', 'Women', '900,Crush Nail Colours,hands,women,Maadora', 'ZQC0G2D6W2', 'Unautherized', 'saad@saad.com'),
(2, 'Crush Nail Colours', '<p><span style="font-family: Roboto, arial, sans-serif; font-size: 12px; line-height: 16px;">Colour Crush Nail Colours - 510 The Body Shop Green</span></p>\r\n<p>&nbsp;</p>', 'Crush Nail Colours.jpg', 'Crush Nail Colours.jpg', 'Crush Nail Colours.jpg', '900.00', 'Hands', 'Maadora', 'Women', '900,Crush Nail Colours,hands,women,Maadora', '59T5ZLEHNZ', 'Autherized', 'saad@saad.com'),
(3, 'Facial foam', '<p><span style="color: #606060; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px;">Nivea Essentials Multi Protecting Foam Deeply Cleanses + Protects Skin for Men, 100ml</span><br style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; color: #606060; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px;" /><span style="color: #606060; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px;">The best products for skin care for all body</span></p>\r\n<ul style="box-sizing: border-box; margin: 0px; list-style: none; padding: 0px; color: #555555; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 17.1428px;">\r\n<li style="box-sizing: border-box; line-height: 16px; color: #606060; display: block; position: relative; margin-top: 3px; padding-left: 8px;">Deeply clean the skin without drying skin.</li>\r\n<li style="box-sizing: border-box; line-height: 16px; color: #606060; display: block; position: relative; margin-top: 3px; padding-left: 8px;">To remove excess oil and Dirt.</li>\r\n<li style="box-sizing: border-box; line-height: 16px; color: #606060; display: block; position: relative; margin-top: 3px; padding-left: 8px;">Vitamin E helps to moisturize skin and prevent aging.</li>\r\n</ul>', 'niveaformen1.jpg', 'niveaformen2s.jpg', 'niveaformen3s.jpg', '650.00', 'Face ', 'Navia', 'Men', '650,Navia men, face, facial, foam', 'DYELB1VIF6', 'Autherized', 'saad@saad.com'),
(5, 'Facewash', '<p>good in use</p>', '9.jpg', '10.jpg', '11.jpg', '300.00', 'Face ', 'AVON', 'Men', 'facewash,AVON,Face,300,wash,Men', 'MEJL734ODH', 'Autherized', 'saad@saad.com'),
(6, 'Lips Sticks', '<p>good</p>', '67.jpg', '68.jpg', '69.jpg', '500.00', 'Lipstck', 'AVON', 'Women', 'lipstick', 'CMR90NQ7YN', 'Autherized', 'saad@saad.com'),
(7, 'Purfume', '<p>good</p>', '52.jpg', '53.jpg', '54.jpg', '1000.00', 'Perfume', 'AVON', 'Men', 'perfume', 'S204REU8IA', 'Autherized', 'saad@saad.com'),
(8, 'Purfume', '<p>good</p>', '55.jpg', '56.jpg', '57.jpg', '1000.00', 'Perfume', 'AVON', 'Women', 'women perfume', 'H8KE1EAJVT', 'Autherized', 'saad@saad.com'),
(9, 'Facewash', '<p>good</p>', '1.jpg', '2.png', '3.jpg', '300.00', 'Face ', 'Navia', 'Men', 'men facewash', 'VD32RMVH5W', 'Autherized', 'saad@saad.com'),
(10, 'Facewash', '<p>good</p>', '6.jpg', '7.png', '8.jpg', '300.00', 'Face ', 'Navia', 'Women', 'facewash', 'UZR7N03XAL', 'Autherized', 'saad@saad.com'),
(11, 'Facewash', '<p>good</p>', '6.jpg', '7.png', '8.jpg', '300.00', 'Face ', 'Navia', 'Women', 'facewash', 'SWVEKEVKCO', 'Autherized', 'saad@saad.com'),
(12, 'Facewash', '<p>for women</p>', '19.jpg', '20.jpeg', '21.jpg', '400.00', 'Face ', 'Blue heaven', 'Women', 'women facewash', 'V5FMH86MS6', 'Autherized', 'saad@saad.com'),
(13, 'Lips Sticks', '<p>new style</p>', '72.jpg', '73.jpg', '75.jpg', '1000.00', 'Lipstck', 'Blue heaven', 'Women', 'women', '1A5G5UB34Z', 'Autherized', 'saad@saad.com'),
(14, 'Purfume', '<p>for men</p>', '58.jpg', '59.jpg', '60.jpg', '1500.00', 'Perfume', 'Blue heaven', 'Men', 'for men', 'PG1Z7LGI1X', 'Autherized', 'saad@saad.com'),
(15, 'Facewash', '<p>for men</p>', '34.png', '35.jpeg', '36.jpg', '400.00', 'Face ', 'Garnier', 'Men', 'for men', 'JS4HUKSOH2', 'Autherized', 'saad@saad.com'),
(16, 'Facewash', '<p>for women</p>', '31.jpg', '32.jpg', '33.jpg', '400.00', 'Face ', 'Garnier', 'Women', 'women', 'VH1YREKH9D', 'Autherized', 'saad@saad.com'),
(17, 'Facewash', '<p>for men</p>', '37.jpeg', '38.jpg', '39.jpg', '400.00', 'Face ', 'Loreal', 'Men', 'men', 'PDOVJUXUNM', 'Autherized', 'saad@saad.com'),
(18, 'Facewash', '<p>for women</p>', '40.jpg', '41.jpg', '42.jpg', '400.00', 'Face ', 'Loreal', 'Women', 'women', 'BT6WPNEF17', 'Autherized', 'saad@saad.com'),
(19, 'Lips Sticks', '<p>for women</p>', '77.jpg', '76.jpg', '79.jpg', '1500.00', 'Lipstck', 'Loreal', 'Women', 'women', 'DCPEHR8D1J', 'Autherized', 'saad@saad.com'),
(20, 'Purfume', '<p>women</p>', '64.jpg', '65.jpg', '66.jpg', '1500.00', 'Perfume', 'Loreal', 'Women', 'women', 'JON26FL319', 'Autherized', 'saad@saad.com'),
(21, 'Facewash', '<p>for men</p>', '43.jpg', '44.JPG', '46.jpg', '400.00', 'Face ', 'Olay', 'Men', 'men', 'L1K6VPUT4H', 'Autherized', 'saad@saad.com'),
(22, 'Facewash', '<p>good in use</p>', '49.jpg', '50.jpg', '51.jpg', '400.00', 'Face ', 'Ponds', 'Women', 'facewash', '9AJ7S6X5WJ', 'Autherized', 'saad@saad.com'),
(23, 'Lips Sticks', '<p>good</p>', '86.jpg', '87.jpeg', '88.jpg', '1000.00', 'Lipstck', 'Ponds', 'Women', 'women', 'F8L2SRBP9L', 'Autherized', 'saad@saad.com'),
(24, 'Facewash', '<p>for men</p>', '47.jpg', '48.jpg', '47.jpg', '400.00', 'Face ', 'Ponds', 'Men', 'men', '31RQ2765Y6', 'Autherized', 'saad@saad.com'),
(25, 'Facewash', '<p>for women</p>', '49.jpg', '50.jpg', '51.jpg', '500.00', 'Perfume', 'Ponds', 'Women', 'women', 'L0EPGMHZJ7', 'Autherized', 'saad@saad.com'),
(26, 'Lips Sticks', '<p>for women</p>', '86.jpg', '87.jpeg', '88.jpg', '1000.00', 'Lipstck', 'Ponds', 'Women', 'women', 'SR8CE9B7Y6', 'Autherized', 'saad@saad.com'),
(27, 'shampoo', '<p>for both</p>', '89.jpg', '90.jpg', '91.jpg', '500.00', 'Hairs', 'PANTENE', 'Men', 'hairs', '74HO2NK5JH', 'Autherized', 'saad@saad.com');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `o_name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phn_no` int(15) NOT NULL,
  `add_by` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `brand_name`, `o_name`, `password`, `email`, `address`, `phn_no`, `add_by`, `date`) VALUES
(10, 'AVON', 'Ali', '25d55ad283aa400af464c76d713c07ad', 'ali@ali.com', 'Gujrat', 300111111, 'Usma Aslam', 'Nov-08-2015'),
(12, 'Beauty', 'Aqsa', '25d55ad283aa400af464c76d713c07ad', 'madora@saad.com', 'bklknln', 0, 'Usma Aslam', 'Dec-09-2015'),
(4, 'Blue heaven', 'Adeel', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Adeel@adeel.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015'),
(11, 'Dove', 'Usman', '25d55ad283aa400af464c76d713c07ad', 'usman@usman.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015'),
(5, 'Garnier', 'Sannan ', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sananbutt@sanan.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015'),
(6, 'Loreal', 'Mannan', '25d55ad283aa400af464c76d713c07ad', 'mannan@mannan.com', 'Gujrat', 300111118, 'Usma Aslam', 'Nov-08-2015'),
(2, 'Maadora', 'Saad ', '25d55ad283aa400af464c76d713c07ad', 'madora@saad.com', '  gujrat to fawara chowk', 123456789, 'bu ali', 'Aug-28-2015'),
(3, 'Navia', 'Usama Aslam', '25d55ad283aa400af464c76d713c07ad', 'usam@gmail.com', 'fbfbfbfbfbffbffbfbffb', 2147483647, 'Usma Aslam', 'Oct-11-2015'),
(7, 'Olay', 'Ismail', '25d55ad283aa400af464c76d713c07ad', 'ismail@ismail.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015'),
(9, 'PANTENE', 'Asad', '25d55ad283aa400af464c76d713c07ad', 'asad@asad.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015'),
(8, 'Ponds', 'Ali', '25d55ad283aa400af464c76d713c07ad', 'ali@ali.com', 'Gujrat', 2147483647, 'Usma Aslam', 'Nov-08-2015');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone_no` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `shp_address` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `phone_no`, `address`, `shp_address`, `date`) VALUES
(2, 'ali', 'asad@yahoo.com', 'f5de9352cba612589e4b749a58cc9188', 'Male', 1234567, 'gujarat', 'gujarat', '17-08-2015'),
(3, 'falak', 'falak@falak.com', '25d55ad283aa400af464c76d713c07ad', 'Male', 2147483647, 'sfsfdfdf', 'fdfdfddfdfdfdfdf', 'Dec-09-2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_name`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `complete`
--
ALTER TABLE `complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_list`
--
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`brand_name`) COMMENT 'only one brand shop', ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `complete`
--
ALTER TABLE `complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3302;
--
-- AUTO_INCREMENT for table `products_list`
--
ALTER TABLE `products_list`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
