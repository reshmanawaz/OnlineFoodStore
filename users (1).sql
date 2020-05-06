-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'A', 'V', 'C', 'asdf'),
(2, 'B', 'C', 'abc', 'abc'),
(3, 'hung2', 'nguyen2', 'hung2', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `percentage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `product`, `content`, `percentage`) VALUES
(1, 1, 'Vitamin A', '2%'),
(2, 1, 'Calcium', '2%'),
(3, 1, 'Vitamin C', '8%'),
(4, 1, 'Iron', '2%'),
(5, 2, 'Vitamin A', '2%'),
(6, 2, 'Calcium', '1%'),
(7, 2, 'Vitamin C', '17%'),
(8, 2, 'Iron', '2%'),
(9, 3, 'Vitamin C', '74%'),
(10, 3, 'Iron', '6%'),
(11, 3, 'Vitamin A', '85%'),
(12, 3, 'Calcium', '4%'),
(13, 4, 'Vitamin A', '20%'),
(14, 4, 'Calcium', '3%'),
(15, 4, 'Vitamin C', '12%'),
(16, 4, 'Iron', '16%'),
(17, 4, 'Vitamin B-6', '5%'),
(18, 4, 'Magnesium', '4%'),
(19, 5, 'Vitamin A', '25%'),
(20, 5, 'Calcium', '1%'),
(21, 5, 'Vitamin C', '32%'),
(22, 5, 'Iron', '2%'),
(23, 6, 'Vitamin A', '76%'),
(24, 6, 'Calcium', '14%'),
(25, 6, 'Vitamin C', '35%'),
(26, 6, 'Iron', '17%');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`id`, `product`, `content`, `weight`) VALUES
(1, 1, 'Total Fat', '0g'),
(2, 1, 'Saturated Fat', '0g'),
(3, 1, 'Trans Fat', '0g'),
(4, 1, 'Cholesterol', '0mg'),
(5, 1, 'Sodium', '0mg'),
(6, 1, 'Total Carbohydrate', '34g'),
(7, 1, 'Dietary Fiber', '5g'),
(8, 1, 'Sugar', '25g'),
(9, 2, 'Total Fat', '0g'),
(10, 2, 'Saturated Fat', '0g'),
(11, 2, 'Trans Fat', '0g'),
(12, 2, 'Cholesterol', '0mg'),
(13, 2, 'Sodium', '2mg'),
(14, 2, 'Total Carbohydrate', '27g'),
(15, 2, 'Dietary Fiber', '3g'),
(16, 2, 'Sugar', '14g'),
(17, 3, 'Total Fat', '1.7g'),
(18, 3, 'Saturated Fat', '10g'),
(19, 3, 'Protein', '1.9g'),
(20, 3, 'Cholesterol', '0mg'),
(21, 3, 'Sodium', '115mg'),
(22, 3, 'Total Carbohydrate', '24.8g'),
(23, 3, 'Dietary Fiber', '3.9g'),
(24, 3, 'Sugar', '16.2g'),
(25, 4, 'Total Fat', '.2g'),
(26, 4, 'Saturated Fat', '.1g'),
(27, 4, 'Potassium', '271mg'),
(28, 4, 'Total Carbohydrate', '5g'),
(29, 4, 'Protein', '3g'),
(30, 4, 'Dietary Fiber', '2.8g'),
(31, 4, 'Sugar', '2.5g'),
(32, 5, 'Total Fat', '0g'),
(33, 5, 'Saturated Fat', '0g'),
(34, 5, 'Cholesterol', '0g'),
(35, 5, 'Protein', '1g'),
(36, 5, 'Sodium', '7mg'),
(37, 5, 'Total Carbohydrate', '6g'),
(38, 5, 'Dietary Fiber', '2g'),
(39, 5, 'Sugar', '4g'),
(40, 6, 'Total Fat', '1g'),
(41, 6, 'Saturated Fat', '10g'),
(42, 6, 'Trans Fat', '0g'),
(43, 6, 'Cholesterol', '0mg'),
(44, 6, 'Sodium', '75mg'),
(45, 6, 'Total Carbohydrate', '24g'),
(46, 6, 'Dietary Fiber', '9g'),
(47, 6, 'Sugar', '15g');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `fruit` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `inventory` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `fruit`, `name`, `price`, `weight`, `calories`, `inventory`) VALUES
(1, 1, 'Apple', 1, 1, 130, 0),
(2, 1, 'Banana', 1, 3, 105, 13),
(3, 1, 'Orange', 1, 2, 118, 14),
(4, 0, 'Asparagus', 1, 3, 27, 10),
(5, 0, 'Tomato', 1, 1, 27, 8),
(6, 0, 'Lettuce', 1, 4, 105, 13);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `delivery_fee` int(11) NOT NULL DEFAULT 0,
  `purchases` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `card` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `price`, `weight`, `delivery_fee`, `purchases`, `address`, `card`) VALUES
(10, 1, 1, 0, '<br>1 <b>Apple(s)</b>', '4567 sjsu', 123456),
(11, 21, 38, 5, '<br>6 <b>Apple(s)</b><br>3 <b>Asparagus(s)</b><br>7 <b>Tomato(s)</b><br>2 <b>Banana(s)</b><br>2 <b>Lettuce(s)</b><br>1 <b>Orange(s)</b>', '123sjsu', 456789),
(12, 1, 1, 0, '<br>1 <b>Apple(s)</b>', '4667sjsu', 1357);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pd` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdi` (`product`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdi` (`product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `pd` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD CONSTRAINT `pdi` FOREIGN KEY (`product`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
