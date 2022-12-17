-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:23 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Toyota'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Honda'),
(5, 'Tesla'),
(6, 'marcidic'),
(7, 'lookin glass');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(5, '::1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_id` int(11) NOT NULL,
  `Category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_id`, `Category_title`) VALUES
(1, 'Engine'),
(2, 'Battery'),
(3, 'Brakes'),
(4, 'Light'),
(5, 'looking glass');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Mobile`) VALUES
('15646'),
('15646');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `First_name` varchar(50) NOT NULL,
  `Message_txt` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`First_name`, `Message_txt`, `Email`, `Mobile`) VALUES
('Junaied', 'junaied526@gmail.com', '', '0156489'),
('Junaied', 'junaied526@gmail.com', '', '0156489'),
('joya', 'joya@gmail.com', '', '4498'),
('shajid', 'nice job', 'shajid@gmail.com', '7494654'),
('ju', '', 'junaied526@gmail.com', '1781247234'),
('ju', '', 'junaied526@gmail.com', '1781247234'),
('rafi', 'ghfbfrnj', 'junaied526@gmail.com', '15646'),
('Arif', 'good product', 'junaied526@gmail.com', '15646');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `Categoty_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `Categoty_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Lion 063 Car Battery - 3 Year Guarantee', 'Lion Performance batteries are able to withstand the pressures of day to day use, and are still excellent value for money. All Lion batteries carry a 3 year guarantee for peace of mind and are created to match original specifications.', 'Lion, 063, Car, Battery', 2, 1, 'globatt-battery-1.webp', 'golbatt-battery-2.webp', 'globatt-battery-1.webp', '10000', '2022-12-11 08:37:36', 'true'),
(2, ' Brake Shoe A8N005 (Toyota Premio,Allion- NZT260, Co)', 'Add Mobile Mechanic Service for only ৳250.00 Mechanics come to your home or office | Qualified mechanics | Online/COD', 'Brake ,Shoe', 3, 1, 'Brake Shoe-1.webp', 'Brake Shoe-2.webp', 'Brake Shoe-2.webp', '3850', '2022-12-11 08:38:01', 'true'),
(3, 'PIAA LEH181 Headlight and Fog Lights LED Bulb HB3/HB4/HIR1/HIR2', 'This LED bulb has been faithfully reproduced to the JIS standard, which is the origin of halogen bulb standards, so it is possible to create a bright an', 'Headlight,  Fog Lights, LED', 4, 2, 'Fog Lights LED-1.webp', 'Fog Lights LED-2.webp', 'Fog Lights LED-3.webp', '11500', '2022-12-11 08:38:11', 'true'),
(4, 'PIRELLI Contralto', 'ensuring ', 'PIRELLI Contralto, tire', 3, 4, 'tire-1.webp', 'tire-2.webp', 'tire-3.webp', '11000', '2022-12-11 08:38:18', 'true'),
(5, 'Car sit', 'dgnbdrnb rhnedrhthhbb', 'Car,sit', 5, 4, 'car-logo.png', 'car-logo.png', 'car-logo.png', '5000', '2022-12-16 17:54:24', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(3, 'joya', 'joya526@gmail.com', '$$2y$10$HGQyYyfBcj8/uct.FwQnLeDwhfdIqenRCcv4Lk.qlezIPp5UMaJZ.', 'ACcom1.png', '::1', 'mohakhali', '012458'),
(5, 'fardin', 'fardin526@gmail.com', '$$2y$10$K4Coaf/9ickfQ20TnD6JGOcdy7WIbG//.R.mMLm0Dnz32/fp.u1Mq', 'battary1.png', '::1', '522', '56489'),
(6, 'arif', 'arif526@gmail.com', '$$2y$10$HmgDxqFwj9C0ieU9wDtLaO8k23c1FNVTX.NVLwkfKEw9pUv52o80K', 'bttary2.png', '::1', '46545', '546465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
