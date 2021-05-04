-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 03:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) UNSIGNED NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `parent_category`, `created_at`, `updated_at`) VALUES
(1, 'Case Goods', '2021-05-01 20:50:09', '2021-05-01 20:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(12) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `customer_group` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `fname`, `lname`, `position`, `company_name`, `st_address`, `city`, `state`, `country`, `post_code`, `phone`, `website`, `extension`, `fax`, `customer_group`, `created_at`, `updated_at`) VALUES
(1, 'super', 'admin', '-', '-', '-', '-', '-', '-', '0', '0', '-', '-', '0', 0, '2021-05-01 03:56:39', '0000-00-00 00:00:00'),
(2, 'John', 'Aguero', 'CTO', 'Company x', 'St. Addess', 'New York', 'c', '3', '12930', '0899702753', 'www.company.com', '', '89077261', 2, '2021-05-01 21:04:01', '2021-05-01 21:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `id_account` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `is_approve` enum('1','0') NOT NULL,
  `allow_login` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`id_account`, `email`, `password`, `role`, `is_approve`, `allow_login`, `created_at`, `updated_at`) VALUES
(1, 'admin@furniture.com', '$2y$10$AXnjBoz8nFtei4k1ALyBCuJgsQ7qa65wEbH1SP27MGosdB/RJ8RU.', 'su', '1', '1', '2021-05-01 03:56:39', '0000-00-00 00:00:00'),
(2, 'companyc@gmail.com', 'qOExILmn', 'customer', '1', '1', '2021-05-01 21:04:01', '2021-05-01 21:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_prod` int(12) NOT NULL,
  `product_status` enum('on_progress','in_warehouse') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs_login`
--

CREATE TABLE `logs_login` (
  `id` int(100) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_date` bigint(20) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs_login`
--

INSERT INTO `logs_login` (`id`, `email`, `login_date`, `ip_address`, `browser`, `created_at`, `updated_at`) VALUES
(1, 'admin@furniture.com', 1619859420, '::1', 'Chrome', '2021-05-01 15:57:00', '2021-05-01 15:57:00'),
(2, 'admin@furniture.com', 1619859454, '::1', 'Chrome', '2021-05-01 15:57:34', '2021-05-01 15:57:34'),
(3, 'admin@furniture.com', 1619876931, '::1', 'Chrome', '2021-05-01 20:48:51', '2021-05-01 20:48:51'),
(4, 'admin@furniture.com', 1619879100, '::1', 'Chrome', '2021-05-01 21:25:00', '2021-05-01 21:25:00'),
(5, 'admin@furniture.com', 1619951004, '::1', 'Chrome', '2021-05-02 05:23:24', '2021-05-02 05:23:24'),
(6, 'admin@furniture.com', 1619953476, '::1', 'Chrome', '2021-05-02 06:04:36', '2021-05-02 06:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `logs_product`
--

CREATE TABLE `logs_product` (
  `id_prod` int(12) NOT NULL,
  `id_customer` int(12) NOT NULL,
  `date_viewed` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip_address` varchar(15) NOT NULL,
  `browser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message_board`
--

CREATE TABLE `message_board` (
  `id_message` int(12) UNSIGNED NOT NULL,
  `id_order` int(12) NOT NULL,
  `message` text NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(348, '2021-04-20-033930', 'App\\Database\\Migrations\\Product', 'default', 'App', 1619902596, 1),
(349, '2021-04-20-034913', 'App\\Database\\Migrations\\Categories', 'default', 'App', 1619902596, 1),
(350, '2021-04-20-035255', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1619902596, 1),
(351, '2021-04-20-035919', 'App\\Database\\Migrations\\Orders', 'default', 'App', 1619902596, 1),
(352, '2021-04-20-040550', 'App\\Database\\Migrations\\Shipping', 'default', 'App', 1619902596, 1),
(353, '2021-04-20-041306', 'App\\Database\\Migrations\\MessageBoard', 'default', 'App', 1619902596, 1),
(354, '2021-04-20-041804', 'App\\Database\\Migrations\\Inventory', 'default', 'App', 1619902596, 1),
(355, '2021-04-20-042448', 'App\\Database\\Migrations\\LogsLogin', 'default', 'App', 1619902597, 1),
(356, '2021-04-20-042919', 'App\\Database\\Migrations\\LogsProduct', 'default', 'App', 1619902597, 1),
(357, '2021-04-23-200112', 'App\\Database\\Migrations\\Pricing', 'default', 'App', 1619902597, 1),
(358, '2021-04-28-014558', 'App\\Database\\Migrations\\CustomerAccount', 'default', 'App', 1619902597, 1),
(359, '2021-04-29-174008', 'App\\Database\\Migrations\\SubCategories', 'default', 'App', 1619902597, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(12) UNSIGNED NOT NULL,
  `no_order` varchar(20) NOT NULL,
  `id_prod` int(12) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `width` varchar(5) NOT NULL,
  `depth` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `note` text NOT NULL,
  `qty` int(5) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `order_type` enum('neworder','showroom') NOT NULL,
  `date_order` datetime NOT NULL,
  `date_accepted` datetime NOT NULL,
  `status` enum('accept','cancel','pending') NOT NULL,
  `id_customer` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `no_order`, `id_prod`, `weight`, `width`, `depth`, `height`, `note`, `qty`, `total_price`, `order_type`, `date_order`, `date_accepted`, `status`, `id_customer`, `created_at`, `updated_at`) VALUES
(1, '00001', 1, '20', '120', '20', '120', 'aklsdkladlas', 2, '2400000', 'neworder', '2021-05-01 09:09:35', '2021-05-01 09:09:35', 'accept', 2, '2021-05-01 21:09:35', '2021-05-01 21:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id_price` int(12) UNSIGNED NOT NULL,
  `price_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `rate` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id_price`, `price_name`, `description`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Designer', 'Desginer Net', '120', '2021-05-01 20:49:23', '2021-05-01 20:49:23'),
(2, 'Wholesale', 'Wholesale Price', '100', '2021-05-01 20:49:38', '2021-05-01 20:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_prod` int(12) UNSIGNED NOT NULL,
  `item_code` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_categories` int(12) NOT NULL,
  `measurment` varchar(100) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `width` varchar(5) NOT NULL,
  `depth` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `spesification` text NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `stock` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_prod`, `item_code`, `name`, `id_categories`, `measurment`, `weight`, `width`, `depth`, `height`, `spesification`, `supplier`, `picture`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tables Room 1', 1, 'standard', '20', '120', '20', '120', '', 'Luxury', '1619921229_d242e67c1361ffb5fe94.jpeg', '1200000', 100, '2021-05-01 21:07:09', '2021-05-01 21:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id_shipping` int(12) UNSIGNED NOT NULL,
  `status` enum('pickup','ontheway','pending') NOT NULL,
  `schedule` datetime NOT NULL,
  `shipping_by` varchar(50) NOT NULL,
  `id_order` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_categories` int(11) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `id_categories`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 1, 'Coffe Tables', '2021-05-01 20:50:18', '2021-05-01 20:50:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `logs_login`
--
ALTER TABLE `logs_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_board`
--
ALTER TABLE `message_board`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id_price`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs_login`
--
ALTER TABLE `logs_login`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message_board`
--
ALTER TABLE `message_board`
  MODIFY `id_message` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id_price` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_prod` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_shipping` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
