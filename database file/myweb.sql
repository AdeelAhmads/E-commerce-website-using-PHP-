-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `name`, `cost`) VALUES
(12, 'Green Bag', 4000),
(14, 'HUXY', 4000),
(16, 'MEESAM', 3000),
(17, 'KURTA', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `price`, `description`) VALUES
(4, 4000, 'Price greater than 4000'),
(5, 3000, 'Price greater than 3000'),
(6, 2000, 'this category represents products greater than 2000'),
(7, 1000, 'this category represents products greater than 1000'),
(8, 5000, 'this category represents products greater than 5000');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `co_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`co_id`, `name`, `description`) VALUES
(4, 'Black', 'This color is for black products'),
(5, 'Brown', 'This color is for black brown'),
(6, 'Blue', 'This is the blue color'),
(7, 'White', 'This is white color'),
(8, 'Green', 'This is green color'),
(9, 'Red', 'This is Red color'),
(10, 'Orange', 'This is  orange color'),
(11, 'Yellow', 'This is yellow  color'),
(12, 'Grey', 'This is grey color'),
(13, 'Purple', 'This is  color'),
(14, 'Maroon', 'This is maroon color'),
(15, 'Wheat', 'This is wheat color');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password1` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `name`, `password1`, `email`, `phone`, `address`, `code`) VALUES
(3, 'Adnan', '454236', 'adnanit@gmail.com', '+923063177004', 'Adnan Medical Store, Taj Garh.', 315),
(4, 'Sajid', 'dsgq543af', 'sajid@gmail.com', '+923063174903', 'Shahi road,rahim yar khan, punjab', 894),
(5, 'Riaz sultan', 'dgt4wq5t', 'riaz@gmail.com', '+923063177454', 'punjab university, Lahore', 511);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `or_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`or_id`, `name`, `phone`, `amount`, `discount`, `date`) VALUES
(1, 'Adeel Ahmad', '03063177002', 12000, 2400, '2022-12-20'),
(7, 'Adnan', '03063177045', 8000, 1600, '2022-12-20'),
(8, 'Ali', '03063177351', 8000, 1600, '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `em_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`em_id`, `name`) VALUES
(1, 'Elyas Ahmad'),
(4, 'Shafiq');

-- --------------------------------------------------------

--
-- Table structure for table `febric`
--

CREATE TABLE `febric` (
  `f_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `febric`
--

INSERT INTO `febric` (`f_id`, `name`, `description`) VALUES
(2, 'Leather', 'this fabric is for leather products'),
(3, 'Cotton', 'This fabric is for cotton products'),
(4, 'Khaddar', 'This is Khaddar fabric'),
(5, 'Valvet', 'This is valvet fabric'),
(6, 'Jeans', 'This is jeans fabric');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `co_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `price`, `cat_id`, `s_id`, `co_id`, `f_id`, `t_id`, `description`, `image`) VALUES
(18, 'MEESAM', 3000, 5, 4, 11, 2, 6, 'This product is made of high quality leather ', 0x70726f64756374496d616765732f6d656e5f73686f65352e77656270),
(19, 'HUXY', 4000, 4, 2, 5, 2, 6, 'This product is made of high quality leather ', 0x70726f64756374496d616765732f6d656e5f73686f65322e77656270),
(20, 'ASTON', 1000, 7, 4, 4, 2, 6, 'This product is made of high quality leather ', 0x70726f64756374496d616765732f6d656e5f73686f65332e77656270),
(21, 'JAGUAR', 1000, 7, 4, 4, 2, 6, 'this shoe is made of good leather', 0x70726f64756374496d616765732f6d656e5f73686f65312e77656270),
(22, 'KEITH', 5000, 8, 4, 4, 2, 6, 'this shoe is made of good leather', 0x70726f64756374496d616765732f6d656e5f73686f65362e77656270),
(23, 'KURTA', 3000, 5, 4, 14, 4, 2, 'This is Pakitani qurta ', 0x70726f64756374496d616765732f6b75727461312e77656270),
(24, 'Shalwar Qameez', 3000, 5, 4, 4, 4, 2, 'Pakistani Shalwar Qameez', 0x70726f64756374496d616765732f6b75727461332e77656270),
(25, 'Green Bag', 4000, 4, 2, 8, 2, 5, 'Leather bag made with care', 0x70726f64756374496d616765732f7075727365322e6a7067),
(26, 'Jeans Shirt', 2000, 6, 4, 6, 6, 2, '', 0x70726f64756374496d616765732f70656e74322e77656270),
(27, 'men shirt pent', 3000, 5, 1, 5, 6, 2, 'english', 0x70726f64756374496d616765732f70656e74352e77656270),
(28, ' men pent', 4000, 4, -1, 12, 6, 2, 'jeans', 0x70726f64756374496d616765732f70656e74342e77656270),
(29, 'Skirt', 5000, 8, 4, 6, 5, 9, 'Women skirt', 0x70726f64756374496d616765732f73756974332e77656270),
(30, 'SUIT', 3000, 5, 4, 4, 3, 9, 'Women suit', 0x70726f64756374496d616765732f73756974342e77656270),
(31, 'Womens SASKA Plain Khaddar Stitched Shirt', 5000, 8, 4, 12, 4, 9, 'Womens SASKA Plain Khaddar Stitched Shirt made with pure khaddar', 0x70726f64756374496d616765732f73756974322e77656270),
(32, 'Womens BLEUET Woolen Stitched Shirt', 2000, 6, 2, 9, 5, 9, 'Womens BLEUET Woolen Stitched Shirt made with bluet', 0x70726f64756374496d616765732f73756974352e77656270),
(33, 'STILLA', 2000, 6, 4, 4, 2, 8, 'women best quality shoe', 0x70726f64756374496d616765732f73686f77332e77656270),
(34, 'NOOHRY', 5000, 8, 4, 14, 2, 8, 'NOOHRY women shoe', 0x70726f64756374496d616765732f73686f65322e77656270),
(35, 'KIMCHY', 3000, 5, 4, 7, 2, 8, 'KIMCHY women shoe', 0x70726f64756374496d616765732f73686f65352e77656270);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `s_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`s_id`, `name`, `description`) VALUES
(1, 'Small', 'This size is for small sized products'),
(2, 'medium', 'This size is for medium sized products'),
(4, 'large', 'This size is for large sized products');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `t_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`t_id`, `name`, `description`) VALUES
(2, 'Men Cloth', 'this type is for men cloth products'),
(5, 'Bag', 'This type is about bags'),
(6, 'Men Shoe', 'This is shoe type'),
(7, 'Wallet', 'This product is wallet'),
(8, 'Women shoe', 'This product is women shoe'),
(9, 'Women Cloth', 'This women cloth type');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `febric`
--
ALTER TABLE `febric`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `febric`
--
ALTER TABLE `febric`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
