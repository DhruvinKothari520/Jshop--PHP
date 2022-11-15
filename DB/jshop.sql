-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 06:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproduct`
--

CREATE TABLE `allproduct` (
  `id` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `prize` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allproduct`
--

INSERT INTO `allproduct` (`id`, `gender`, `pname`, `detail`, `prize`, `size`, `code`, `type`, `quantity`, `photo`) VALUES
(12, 'women', 'braslate', 'dark rose gold color', '12000', '15', '44421', 'braslate', 2, 'photo/c1.jpg'),
(13, 'men', 'gold', 'rose gold ', '8000', '4.5', '989209', 'ring', 12, 'photo/mr5.jpg'),
(14, 'men', 'gold', 'rose gold ', '8000', '4.5', '989209', 'ring', 12, 'photo/376095159mr5.jpg'),
(16, 'men', 'gold', 'Gold with Diamond', '18599', '5.6', '121212', 'ring', 2, 'photo/mr1.png'),
(17, 'men', 'gold', 'Gold with Diamond', '17500', '8.2', '121213', 'ring', 3, 'photo/mr2.png'),
(18, 'men', 'ring', 'Gold with Diamond', '15999', '5.5', '121214', 'ring', 5, 'photo/mr3.jpg'),
(19, 'men', 'gold', 'gold with one Diamond', '14500', '6.5', '121215', 'ring', 5, 'photo/mr4.jpg'),
(20, 'men', 'ring', 'gold with OM', '18000', '8.5', '121216', 'ring', 6, 'photo/mr6.jpg'),
(21, 'men', 'ring', 'gold jaguare ring ', '21999', '9.5', '121216', 'ring', 3, 'photo/mr9.jpg'),
(22, 'men', 'ring', 'american diamnd ring', '19999', '7', '121217', 'ring', 5, 'photo/mr12.jpg'),
(23, 'men', 'ring', 'gold with american diamond', '15999', '6.5', '121218', 'ring', 2, 'photo/mr13.jpg'),
(24, 'men', 'ring', 'gold and silver with one diamond', '16999', '6', '121219', 'ring', 5, 'photo/mr14.jpg'),
(25, 'men', 'gold ring', 'four diamond', '15000', '8', '15000', 'ring', 2, 'photo/mr17.jpg'),
(26, 'men', 'gold ring', 'crop design', '14000', '6', '121315', 'ring', 2, 'photo/mr18.jpg'),
(27, 'men', 'gold ring', 'one diamond', '12000', '5', '121131', 'ring', 2, 'photo/mr19.png'),
(28, 'men', 'gold with diamond', 'american diamond', '12999', '5', '121344', 'ring', 9, 'photo/mr20.png'),
(29, 'men', 'gold bracelets', 'only gold lock bracelets', '21999', '25', '121151', 'braslate', 2, 'photo/919187823m1.jpg'),
(30, 'men', 'bracelet', 'bracelet ring shape', '19000', '24', '121451', 'braslate', 12, 'photo/m2.jpg'),
(31, 'men', 'bracelet ', 'bracelet with diamond', '25000', '26', '121151', 'braslate', 1, 'photo/m3.jpg'),
(32, 'men', 'bracelet', 'gold and silver bracelet', '16000', '22', '123519', 'braslate', 2, 'photo/m4.jpg'),
(33, 'men', 'bracelet', 'black and silver ', '1200', '23', '212523', 'braslate', 5, 'photo/m5.jpg'),
(34, 'men', 'gold bracelet', 'with one diamond', '2199', '26', '248965', 'braslate', 2, 'photo/m6.jpg'),
(35, 'men', 'chain', 'with M pandel ', '9000', '50', '125496', 'Chain', 2, 'photo/cm1.jpg'),
(36, 'men', 'chain', 'normal chain gold', '8500', '65', '122655', 'Chain', 7, 'photo/cm2.jpg'),
(37, 'women', 'gold ring', 'star shape gold ring', '8000', '5', '254126', 'ring', 1, 'photo/ms1.jpg'),
(38, 'women', 'ring', 'gold with diamond', '8599', '6.5', '658214', 'ring', 2, 'photo/ms2.jpg'),
(39, 'women', 'ring', 'one diamond', '9599', '4.5', '632541', 'ring', 2, 'photo/ms3.jpg'),
(40, 'women', 'ring', 'gold and silver', '7599', '4', '125365', 'ring', 2, 'photo/ms4.jpg'),
(41, 'women', 'ring', 'three diamond', '9999', '5.5', '325648', 'ring', 3, 'photo/ms5.jpg'),
(42, 'women', 'ring', 'one diamond', '13999', '6.5', '987521', 'ring', 8, 'photo/ms6.jpg'),
(43, 'women', 'ring', 'flower shape', '10999', '6', '231546', 'ring', 1, 'photo/ms7.jpg'),
(44, 'women', 'ring', 'flower shape', '9999', '5', '231544', 'ring', 2, 'photo/ms8.jpg'),
(45, 'women', 'ring', 'one big diamond', '8999', '5', '325541', 'ring', 3, 'photo/ms9.jpg'),
(46, 'women', 'ring', 'new diamond shape', '8599', '7.5', '322125', 'ring', 1, 'photo/ms10.jpg'),
(47, 'women', 'ring and diamond', 'color diamond', '8599', '5', '212223', 'ring', 2, 'photo/ms11.jpg'),
(48, 'women', 'ring with diamond', 'color diamond', '8999', '5', '215325', 'ring', 2, 'photo/ms12.jpg'),
(49, 'women', 'color ring', 'color diamond', '7500', '6', '125489', 'ring', 3, 'photo/ms13.jpg'),
(50, 'women', 'big diamond', 'green diamond', '12999', '8', '254489', 'ring', 6, 'photo/ms14.jpg'),
(51, 'women', 'silver ring', 'natural shape', '1299', '5', '124963', 'ring', 3, 'photo/ms15.jpg'),
(52, 'women', 'ring', 'silver star', '899', '6', '885475', 'ring', 6, 'photo/ms16.jpg'),
(53, 'women', 'silver ', 'silver shape', '599', '5', '321654', 'Other', 3, 'photo/ms17.jpg'),
(54, 'women', 'ring silver', 'one diamond with silver ring', '4599', '6', '654128', 'ring', 5, 'photo/ms18.jpg'),
(55, 'women', 'rose gold ring', 'rose gold', '1599', '6', '123548', 'ring', 2, 'photo/ms19.jpg'),
(56, 'women', 'rose gold', 'rose gold with diamond', '15999', '5.5', '365985', 'ring', 2, 'photo/ms20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no` int(10) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no`, `fname`, `email`, `phone`, `message`) VALUES
(1, 'Tejas Metaliya', 'tejas@gmail.com', 2147483647, 'How are You?');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL,
  `saddress` varchar(250) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `rpassword` varchar(16) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `password`, `rpassword`, `username`) VALUES
(4, 'tejas patel', '123', '123', 'tejas123'),
(5, 'abhi', 'abhi123', 'abhi123', 'abhi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproduct`
--
ALTER TABLE `allproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allproduct`
--
ALTER TABLE `allproduct`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
