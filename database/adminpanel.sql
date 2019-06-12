-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 05:13 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 5.6.35-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `email`, `password`, `id`) VALUES
('Ranjan', 'ranjan@gmail.com', 'd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`name`, `image`, `date`, `status`, `id`) VALUES
('wqwff', 'mall.jpg', '2019-03-27', '1', 3),
('ranjan', 'goodwaves.png', '2019-03-27', '0', 4),
('photof', 'img2.jpg', '2019-03-29', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `disprice` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productname`, `productimage`, `productid`, `price`, `disprice`, `quantity`, `subcategory`, `user`) VALUES
(74, 'Compact Shirts', 'x.jpg', '11', '2500', '2000', '3', '3', 'a@a.a'),
(81, 'round neck full sleeves t-shirt', 'ti.jpeg', '7', '1500', '1200', '1', '2', 'ranjan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `status`, `date`, `id`) VALUES
('Men', '1', '2019-04-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `orderdate` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `orderdata` text NOT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id`, `fname`, `lname`, `email`, `mobile`, `address`, `orderdate`, `status`, `orderdata`, `order_id`) VALUES
(2, 'Ranjan', 'Kumar', 'a@a.a', '9122713468', 's', '2019-04-12', '0', '[{"id":"74","productname":"Compact Shirts","productimage":"x.jpg","productid":"11","price":"2500","disprice":"2000","quantity":"3","subcategory":"3","user":"a@a.a"}]', '{"orderid":"65XPULbFeY02SND"}'),
(3, 'Ranjan', 'Kumar', 'a@a.a', '9122713468', 'd', '2019-04-12', '0', '[{"id":"74","productname":"Compact Shirts","productimage":"x.jpg","productid":"11","price":"2500","disprice":"2000","quantity":"3","subcategory":"3","user":"a@a.a"}]', '{"orderid":"SgILCnoREdJT96A"}'),
(4, 'ranjan', 'kumar', 'ranjan@gmail.com', '9122888888', 'ds', '2019-04-12', '0', '[{"id":"72","productname":"Women Shirt","productimage":"w.jpg","productid":"12","price":"2000","disprice":"1700","quantity":"2","subcategory":"4","user":"ranjan@gmail.com"},{"id":"76","productname":"round neck full sleeves t-shirt","productimage":"ti.jpeg","productid":"8","price":"1200","disprice":"1000","quantity":"1","subcategory":"2","user":"ranjan@gmail.com"}]', '{"orderid":"SR71op502XlrFYA"}'),
(5, 'ranjan', 'kumar', 'ranjan@gmail.com', '9122888888', 'kjhgfdsa', '2019-04-12', '0', '[{"id":"72","productname":"Women Shirt","productimage":"w.jpg","productid":"12","price":"2000","disprice":"1700","quantity":"2","subcategory":"4","user":"ranjan@gmail.com"},{"id":"76","productname":"round neck full sleeves t-shirt","productimage":"ti.jpeg","productid":"8","price":"1200","disprice":"1000","quantity":"1","subcategory":"2","user":"ranjan@gmail.com"}]', '{"orderid":"5Qrlw8uAPcOJXop"}'),
(7, 'ranjan', 'kumar', 'ranjan@gmail.com', '9122888888', 'New Delhi', '2019-04-12', '0', '[{"id":"77","productname":"Blue Jeans","productimage":"jeans.jpg","productid":"3","price":"1500","disprice":"1250","quantity":"4","subcategory":"1","user":"ranjan@gmail.com"},{"id":"78","productname":"Printed Shirt","productimage":"fgfg.jpg","productid":"10","price":"3000","disprice":"2500","quantity":"1","subcategory":"3","user":"ranjan@gmail.com"},{"id":"79","productname":"Men\'s full Sleeve Shirt","productimage":"S145.jpg","productid":"13","price":"2500","disprice":"2300","quantity":"2","subcategory":"3","user":"ranjan@gmail.com"}]', '{"orderid":"7M30bfrOEZQusoC"}');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `productname` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `disprice` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`category`, `subcategory`, `productname`, `productimage`, `price`, `disprice`, `description`, `date`, `status`, `id`) VALUES
('2', '1', 'Blue Jeans', 'jeans.jpg', '1500', '1250', 'This HTML tutorial contains hundreds of HTML examples.\r\n\r\nWith our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-04', '1', 3),
('1', '2', 'round neck full sleeves t-shirt', 'ti.jpeg', '1500', '1200', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 7),
('1', '2', 'round neck full sleeves t-shirt', 'ti.jpeg', '1200', '1000', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 8),
('1', '3', 'Printed Shirt', 'fgfg.jpg', '3000', '2500', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 10),
('1', '3', 'Compact Shirts', 'x.jpg', '2500', '2000', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 11),
('2', '4', 'Women Shirt', 'w.jpg', '2000', '1700', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 12),
('1', '3', 'Men\'s full Sleeve Shirt', 'S145.jpg', '2500', '2300', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 13),
('2', '4', 'MARTELLE WOMEN\'S SHIRT', 'women.jpg', '2500', '1800', 'This HTML tutorial contains hundreds of HTML examples. With our online HTML editor, you can edit the HTML, and click on a button to view the result.', '2019-04-09', '1', 14);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`category`, `subcategory`, `status`, `date`, `id`) VALUES
('2', 'Jeans', 1, '2019-04-04', 1),
('1', 'T-shirt', 1, '2019-04-04', 2),
('1', 'Shirt', 1, '2019-04-04', 3),
('2', 'Shirt', 1, '2019-04-09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `mobile`, `image`, `id`) VALUES
('Ranjan', 'Kumar', 'a@a.a', '202cb962ac59075b964b07152d234b70', '9122713468', 'minions01.jpg', 3),
('ranjan', 'kumar', 'ranjan@gmail.com', '202cb962ac59075b964b07152d234b70', '9122888888', 'mall.jpg', 4),
('Anjalee', 'Kumari', 'anjalee@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
