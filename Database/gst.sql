-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 02:00 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `otp` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`, `mobilenumber`, `type`, `otp`) VALUES
('lovish@gmail.com', '123', '80549874514', 'Admin', NULL),
('rhtsharma462@gmail.com', '123', '8054906574', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `total` int(15) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_time` time NOT NULL,
  `email` varchar(40) NOT NULL,
  `bill_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `total`, `cust_id`, `bill_date`, `bill_time`, `email`, `bill_type`) VALUES
(37, 20054, 17, '2017-07-14', '06:18:15', 'rht@gmail.com', 'GST INVOICE'),
(38, 525, 17, '2017-07-14', '06:18:31', 'rht@gmail.com', 'GST INVOICE'),
(40, 4040, 17, '2017-07-18', '04:39:35', 'rht@gmail.com', 'GST INVOICE'),
(41, 8060, 17, '2017-07-19', '00:52:33', 'rht@gmail.com', 'GST INVOICE'),
(42, 806, 17, '2017-11-18', '11:38:22', 'rht@gmail.com', 'GST INVOICE');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `cgst` int(20) NOT NULL,
  `sgst` int(20) NOT NULL,
  `total_gst` int(10) NOT NULL,
  `mrp` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `price`, `cgst`, `sgst`, `total_gst`, `mrp`, `qty`) VALUES
(16, 37, 15, 500, 10, 8, 18, 590, 2),
(17, 37, 18, 650, 12, 12, 24, 806, 23),
(18, 37, 19, 150, 8, 4, 12, 168, 2),
(19, 38, 22, 250, 3, 2, 5, 263, 2),
(20, 40, 19, 150, 8, 4, 12, 168, 10),
(21, 40, 15, 500, 10, 8, 18, 590, 4),
(22, 41, 18, 650, 12, 12, 24, 806, 10),
(23, 42, 18, 650, 12, 12, 24, 806, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `enquiry` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(19) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `enq` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mob`, `enq`) VALUES
(2, 'rohit', '12458', 'rohit');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gstno` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `phone`, `email`, `gstno`) VALUES
(17, 'rohit', 1234567890, 'rht@gmail.com', '1234445');

-- --------------------------------------------------------

--
-- Table structure for table `gstr_1`
--

CREATE TABLE `gstr_1` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `turnover` int(20) NOT NULL,
  `financial_year` varchar(25) NOT NULL,
  `bill_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gstr_2`
--

CREATE TABLE `gstr_2` (
  `id` int(10) NOT NULL,
  `invoice_no` varchar(10) NOT NULL,
  `supplier` int(10) NOT NULL,
  `invoice_value` int(10) NOT NULL,
  `tax_value` int(10) NOT NULL,
  `state_tax` int(10) NOT NULL,
  `central_tax` int(10) NOT NULL,
  `itc_amount` int(10) NOT NULL,
  `state` int(10) NOT NULL,
  `central` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gstr_2`
--

INSERT INTO `gstr_2` (`id`, `invoice_no`, `supplier`, `invoice_value`, `tax_value`, `state_tax`, `central_tax`, `itc_amount`, `state`, `central`, `date`) VALUES
(1, '5645465', 6, 9000, 900, 450, 450, 900, 450, 450, '2017-07-12'),
(2, '1244', 15, 9000, 900, 450, 450, 900, 450, 450, '2017-07-12'),
(3, '4120', 15, 9000, 900, 450, 450, 900, 450, 450, '2017-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `selling_price` int(20) NOT NULL,
  `taxslab` int(20) NOT NULL,
  `mrp` double NOT NULL,
  `stock` int(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `supplier` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `selling_price`, `taxslab`, `mrp`, `stock`, `photo`, `description`, `supplier`) VALUES
(15, 'meat of goat', 500, 13, 590, 32, 'product/go.jpg', 'good quality', 15),
(16, 'meat of sheep', 450, 13, 531, 30, 'product/sh.jpg', 'fresh', 15),
(18, 'nuts', 650, 11, 806, 8, 'product/nu.jpg', 'jammu and kashmir special', 15),
(19, 'vegetable', 150, 14, 168, 35, 'product/ve.jpg', 'fresh', 15),
(20, 'perfume', 750, 15, 945, 29, 'product/per.jpg', ' Fragrance', 15),
(22, 'drinks', 250, 12, 262.5, 27, 'product/d.jpg', 'fresh', 15);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `entityname` varchar(50) NOT NULL,
  `gstno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `mobile`, `entityname`, `gstno`, `gender`) VALUES
('abc@gmail.com', '111111111', 0, 'sss', 'g333', 'Male'),
('aka@gmail.com', '1234', 1234567898, 'akash', '12300', 'Male'),
('akash@gmail.com', '123', 9874561230, 'akash', 'gst1234345', 'Male'),
('love@gmail.com', '123', 123456789, 'agsshdhididhhyegihjc', '1234', 'Male'),
('rht4@gmail.com', '123', 8054906577, 'rohit kumar', 'gdt4500', 'Male'),
('rht@gmail.com', '123', 258, 'rohit', '852', 'Male'),
('smahajan11', '1234', 233, '23', '33', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(40) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pan_no` varchar(40) NOT NULL,
  `mobile` bigint(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `gst_no`, `address`, `pan_no`, `mobile`, `email`, `user_email`) VALUES
(15, 'rohit', 'q123', 'lala', 'P258741', 80540965477, 'rhtsharma462@gmail.com', 'rht@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taxslab`
--

CREATE TABLE `taxslab` (
  `tsid` int(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cgst` int(10) NOT NULL,
  `sgst` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `totalgst` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxslab`
--

INSERT INTO `taxslab` (`tsid`, `name`, `cgst`, `sgst`, `code`, `totalgst`) VALUES
(11, 'Fruit and Nuts', 12, 12, '08112010', 24),
(12, 'goods', 3, 2, '0885414', 5),
(13, 'Meat of sheep or goats ', 10, 8, '02043000', 18),
(14, 'vegetable saps and extracts', 8, 4, '13021200', 12),
(15, 'cosmetic', 14, 12, '8520147', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gstr_1`
--
ALTER TABLE `gstr_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `gstr_2`
--
ALTER TABLE `gstr_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier` (`supplier`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxslab` (`taxslab`),
  ADD KEY `supplier` (`supplier`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `taxslab`
--
ALTER TABLE `taxslab`
  ADD PRIMARY KEY (`tsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gstr_1`
--
ALTER TABLE `gstr_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gstr_2`
--
ALTER TABLE `gstr_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `taxslab`
--
ALTER TABLE `taxslab`
  MODIFY `tsid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gstr_1`
--
ALTER TABLE `gstr_1`
  ADD CONSTRAINT `gstr_1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `signup` (`email`),
  ADD CONSTRAINT `gstr_1_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill_details` (`bill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
