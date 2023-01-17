-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HotelSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'rooms', 'Conference', 40000, './assets/products/1.png', '2020-03-28 11:08:57'), -- NOW()
(2, 'rooms', 'Single', 5000, './assets/products/2.png', '2020-03-28 11:08:57'), -- NOW()
(3, 'rooms', 'double', 7500, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'rooms', 'Triple', 1000, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'rooms', 'Quad', 14000, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'rooms', 'Queen', 24000, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'rooms', 'King', 24900, './assets/products/7.png', '2020-03-28 11:08:57'),
(8, 'rooms', 'Twin', 19000, './assets/products/8.png', '2020-03-28 11:08:57'),
(9, 'rooms', 'Hollywood', 35000, './assets/products/9.png', '2020-03-28 11:08:57'),
(10, 'rooms', 'Double-double', 42000, './assets/products/10.png', '2020-03-28 11:08:57'),
(11, 'rooms', 'Executive', 45800, './assets/products/11.png', '2020-03-28 11:08:57'),
(12, 'rooms', 'Mini-suite', 27000, './assets/products/12.png', '2020-03-28 11:08:57'),
(13, 'rooms', 'Presidential suite', 75000, './assets/products/13.png', '2020-03-28 11:08:57'),
(14, 'foods', 'Banana', 20, './assets/products/14.png', '2020-03-28 11:08:57'),
(15, 'foods', 'Boiled eggs', 25, './assets/products/15.png', '2020-03-28 11:08:57'),
(16, 'foods', 'Chapati', 30, './assets/products/16.png', '2020-03-28 11:08:57'),
(17, 'foods', 'Pineapples', 70, './assets/products/17.png', '2020-03-28 11:08:57'),
(18, 'foods', 'Orange', 45, './assets/products/18.png', '2020-03-28 11:08:57'),
(19, 'foods', 'Chips', 50, './assets/products/19.png', '2020-03-28 11:08:57'),
(20, 'foods', 'Fried Omena', 50, './assets/products/20.png', '2020-03-28 11:08:57'),
(21, 'foods', 'Fried pork', 50, './assets/products/21.png', '2020-03-28 11:08:57'),
(22, 'foods', 'Ugali', 60, './assets/products/22.png', '2020-03-28 11:08:57'),
(23, 'foods', 'Boiled chicken', 200, './assets/products/23.png', '2020-03-28 11:08:57'),
(24, 'foods', 'Boiled Fish', 150, './assets/products/24.png', '2020-03-28 11:08:57'),
(25, 'foods', 'Fried meat', 250, './assets/products/25.png', '2020-03-28 11:08:57'),
(26, 'foods', 'Boiled Omena', 80, './assets/products/26.png', '2020-03-28 11:08:57'),
(27, 'foods', 'Pan Cake', 180, './assets/products/27.png', '2020-03-28 11:08:57'),
(28, 'foods', 'Water melon', 35, './assets/products/28.png', '2020-03-28 11:08:57'),
(29, 'foods', 'Fried Fish', 200, './assets/products/29.png', '2020-03-28 11:08:57'),
(30, 'foods', 'Boiled meat', 150, './assets/products/30.png', '2020-03-28 11:08:57'),
(31, 'drinks', 'Coca-cola', 50, './assets/products/31.png', '2020-03-28 11:08:57'),
(32, 'drinks', 'Strong tea', 30, './assets/products/32.png', '2020-03-28 11:08:57'),
(33, 'drinks', 'Thick tea', 45, './assets/products/33.png', '2020-03-28 11:08:57'),
(34, 'drinks', 'Sprite 350ml', 30, './assets/products/34.png', '2020-03-28 11:08:57'),
(35, 'drinks', 'Coca cola 350ml', 30, './assets/products/35.png', '2020-03-28 11:08:57'),
(36, 'recreational', 'Gym', 500, './assets/products/36.png', '2020-03-28 11:08:57'),
(37, 'recreational', 'Swimming pool', 1000, './assets/products/37.png', '2020-03-28 11:08:57');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Rovince', 'Otieno', '2020-03-28 13:07:17'),
(2, 'Collins', 'Odhiambo', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
