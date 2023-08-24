-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2023 at 10:03 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baby_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blogId` int NOT NULL AUTO_INCREMENT,
  `blogTitle` text NOT NULL,
  `bloggerName` text NOT NULL,
  `blogTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogDetails` varchar(255) NOT NULL,
  `blogImage` varchar(100) NOT NULL,
  `blogApproval` varchar(20) NOT NULL DEFAULT 'Not Approved',
  PRIMARY KEY (`blogId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartId` int NOT NULL AUTO_INCREMENT,
  `productId` int NOT NULL,
  `productQuantity` int NOT NULL,
  `productTitle` varchar(200) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `commentId` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `userId` int NOT NULL,
  `userName` varchar(255) NOT NULL,
  `blogId` int NOT NULL,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `memberId` int NOT NULL AUTO_INCREMENT,
  `memberName` varchar(255) NOT NULL,
  `memberEmail` varchar(255) NOT NULL,
  `memberPhone` varchar(20) NOT NULL,
  `memberUserName` varchar(25) NOT NULL,
  `memberRole` int NOT NULL,
  `memberAddress` varchar(255) NOT NULL,
  `memberPassword` varchar(255) NOT NULL,
  `confirmPassword` varchar(255) NOT NULL,
  `memberStatus` varchar(20) NOT NULL DEFAULT 'Activate',
  PRIMARY KEY (`memberId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberId`, `memberName`, `memberEmail`, `memberPhone`, `memberUserName`, `memberRole`, `memberAddress`, `memberPassword`, `confirmPassword`, `memberStatus`) VALUES
(1, 'Rakib', 'admin@gmail.com', '01515687080', 'admin', 1, 'Shantinagar, Dhaka', '123', '123', 'Activate'),
(2, 'Emon', 'emon@gmail.com', '01515963258', 'emon', 0, 'Shantinagar, Dhaka', '123', '123', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderDetailsId` int NOT NULL AUTO_INCREMENT,
  `order_id` varchar(10) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `optional` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `postCode` int NOT NULL,
  `phone` int NOT NULL,
  `email` text NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `totalAmount` varchar(11) NOT NULL,
  PRIMARY KEY (`orderDetailsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productId` int NOT NULL AUTO_INCREMENT,
  `productTitle` text NOT NULL,
  `productPrice` int NOT NULL,
  `productType` text NOT NULL,
  `productDetails` text NOT NULL,
  `productFile` varchar(100) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `reviewId` int NOT NULL AUTO_INCREMENT,
  `review` varchar(100) NOT NULL,
  `userId` int NOT NULL,
  `userName` varchar(100) NOT NULL,
  `productId` int NOT NULL,
  PRIMARY KEY (`reviewId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
