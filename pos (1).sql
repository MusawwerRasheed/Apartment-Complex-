-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 08:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash_history`
--

CREATE TABLE `cash_history` (
  `id` int(11) NOT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `pay_status` varchar(100) DEFAULT NULL,
  `pay_by` varchar(100) NOT NULL DEFAULT 'Direct',
  `details` varchar(255) DEFAULT NULL,
  `pay_date` date NOT NULL,
  `pay_person` varchar(255) DEFAULT NULL,
  `contact` varchar(150) DEFAULT NULL,
  `pay_type_id` varchar(50) DEFAULT NULL,
  `slip_no` varchar(50) DEFAULT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `expense_id` int(11) DEFAULT NULL,
  `client_payment_id` int(11) DEFAULT NULL,
  `ticket_ptr_id` int(11) DEFAULT NULL,
  `supplier_payment_id` int(11) DEFAULT NULL,
  `ticket_payment_id` int(11) DEFAULT NULL,
  `cust_INOUT_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_history`
--

INSERT INTO `cash_history` (`id`, `amount`, `pay_status`, `pay_by`, `details`, `pay_date`, `pay_person`, `contact`, `pay_type_id`, `slip_no`, `receipt`, `expense_id`, `client_payment_id`, `ticket_ptr_id`, `supplier_payment_id`, `ticket_payment_id`, `cust_INOUT_id`) VALUES
(1, '500', 'IN', 'Direct', 'Opening Balance', '2021-10-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, '100', 'OUT', 'Purchase', 'paid amount', '2021-10-19', '', '', '1', '', '', NULL, NULL, NULL, 0, NULL, 0),
(4, '500', 'IN', 'Direct Cash', 'dfffd', '2021-10-19', '3', '4444', '2', 'fddffd', '', NULL, NULL, NULL, NULL, NULL, 5),
(5, '100', 'OUT', 'Direct Cash', 'out', '2021-10-19', '3', '034391234243', '1', '123456789', '', NULL, NULL, NULL, NULL, NULL, 5),
(6, '200', 'OUT', 'Purchase', '', '2021-10-19', '', '', '1', '', '', NULL, NULL, NULL, 8, NULL, 0),
(7, '500', 'OUT', 'Purchase', 'pruchase checking', '2021-10-19', '', '', '1', '777777', '', NULL, NULL, NULL, 9, NULL, 0),
(8, '600', 'OUT', 'Purchase', 'hghhhg', '2021-10-22', '', '', '1', '', '', NULL, NULL, NULL, 10, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cash_in_hand`
--

CREATE TABLE `cash_in_hand` (
  `id` int(11) NOT NULL,
  `opening_balance` varchar(50) NOT NULL,
  `cash` varchar(50) NOT NULL,
  `opening_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_in_hand`
--

INSERT INTO `cash_in_hand` (`id`, `opening_balance`, `cash`, `opening_date`) VALUES
(1, '500', '500', '2021-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Mobile'),
(2, 'Laptop'),
(3, 'Electronic'),
(4, 'Camera'),
(5, 'mindgigs');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `opening_balance` decimal(11,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `mobile`, `email`, `opening_balance`) VALUES
(2, 'Azmat karachi', 'karachi', '034198789', 'test@gmail.', '0.00'),
(3, 'Faheem Ullah', 'Harichand', '03456424062', 'mailtofaheemullah@gmail.com', '0.00'),
(4, 'Osman khan', 'Peshawar', '03456678900', 'saqibafridi464@gmail.com', '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_in_out`
--

CREATE TABLE `customer_in_out` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_in_out`
--

INSERT INTO `customer_in_out` (`id`, `customer`) VALUES
(3, 'Zahid Khan'),
(5, 'Faheem');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledger`
--

CREATE TABLE `customer_ledger` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL DEFAULT 0,
  `payment_id` int(11) NOT NULL DEFAULT 0,
  `debit` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `Ldate` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_ledger`
--

INSERT INTO `customer_ledger` (`id`, `customer_id`, `sale_id`, `payment_id`, `debit`, `credit`, `Ldate`, `details`) VALUES
(1, 2, 1, 1, '3990.00', '15990.00', '2021-08-30', ''),
(2, 2, 2, 1, '4000.00', '4000.00', '2021-09-08', ''),
(3, 4, 3, 1, '4000.00', '4000.00', '2021-09-21', ''),
(4, 4, 0, 20, '0', '400', '2021-09-21', ''),
(5, 1, 4, 1, '', '0', '2021-09-27', ''),
(6, 1, 5, 1, '', '0', '2021-09-27', ''),
(7, 2, 6, 1, '3745.48', '3745.48', '2021-10-20', ''),
(8, 2, 7, 1, '30000.00', '30000.00', '2021-10-20', ''),
(9, 2, 8, 1, '3737.00', '3737.00', '2021-10-20', ''),
(10, 3, 9, 1, '3727.93', '3727.93', '2021-10-20', ''),
(11, 3, 10, 1, '3718.21', '3718.21', '2021-10-20', ''),
(12, 3, 11, 1, '3707.78', '3707.78', '2021-10-20', ''),
(13, 2, 12, 1, '3696.54', '3696.54', '2021-10-20', ''),
(14, 2, 13, 1, '3684.40', '3684.40', '2021-10-20', ''),
(15, 2, 14, 1, '3671.25', '3671.25', '2021-10-20', ''),
(16, 2, 15, 1, '3656.96', '3656.96', '2021-10-20', ''),
(17, 2, 16, 1, '3641.36', '3641.36', '2021-10-21', ''),
(18, 2, 17, 1, '3624.29', '3624.29', '2021-10-22', ''),
(19, 2, 18, 1, '500.00', '500.00', '2021-10-22', ''),
(20, 2, 19, 1, '3605.50', '3605.50', '2021-10-22', ''),
(21, 2, 20, 1, '3584.74', '3584.74', '2021-10-22', ''),
(22, 2, 0, 1, '', '', '2021-10-25', ''),
(23, 2, 0, 1, '', '', '2021-10-25', ''),
(24, 2, 21, 1, '-4.00', '-4.00', '2021-10-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE `customer_payment` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL,
  `payment_method_id` varchar(11) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `slip_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment`
--

INSERT INTO `customer_payment` (`id`, `sale_id`, `customer_id`, `payment_method_id`, `paid`, `payment_date`, `details`, `receipt`, `slip_no`) VALUES
(6, 0, 1, '1', '1000', '2021-08-26', 'fgdfg', '2021-08-26 13-58375932428towseef.jpg', '2423'),
(7, 0, 3, '1', '100', '2021-08-27', 'dwww', '', '2342'),
(8, 11, 2, '1', '23.00', '2021-08-27', 'fgfgfgf', '', '4545'),
(9, 12, 1, '1', '34.00', '2021-08-27', 'ddd', '', '4545'),
(10, 13, 1, '1', '23.00', '2021-08-27', '', '', ''),
(11, 14, 2, '1', '66.47', '2021-08-27', '', '', ''),
(12, 15, 1, '1', '80.00', '2021-08-30', '', '', ''),
(13, 16, 1, '1', '133666.00', '2021-08-30', '', '', ''),
(14, 1, 1, '1', '1500.00', '2021-08-30', '', '', ''),
(15, 2, 1, '1', '1500.00', '2021-08-30', '', '', ''),
(16, 3, 1, '1', '5.00', '2021-08-30', '', '', ''),
(17, 1, 2, '1', '3990.00', '2021-08-30', '', '', ''),
(18, 2, 2, '1', '4000.00', '2021-09-08', '', '', ''),
(19, 3, 4, '1', '4000.00', '2021-09-21', '', '', ''),
(20, 0, 4, '1', '400', '2021-09-21', '', '', '222222'),
(21, 6, 2, '1', '3745.48', '2021-10-20', '', '', ''),
(22, 7, 2, '1', '30000.00', '2021-10-20', '', '', ''),
(23, 8, 2, '1', '3737.00', '2021-10-20', '', '', ''),
(24, 9, 3, '1', '3727.93', '2021-10-20', '', '', ''),
(25, 10, 3, '1', '3718.21', '2021-10-20', '', '', ''),
(26, 11, 3, '1', '3707.78', '2021-10-20', '', '', ''),
(27, 12, 2, '1', '3696.54', '2021-10-20', '', '', ''),
(28, 13, 2, '1', '3684.40', '2021-10-20', '', '', ''),
(29, 14, 2, '1', '3671.25', '2021-10-20', '', '', ''),
(30, 15, 2, '1', '3656.96', '2021-10-20', '', '', ''),
(31, 16, 2, '1', '3641.36', '2021-10-21', '', '', ''),
(32, 17, 2, '1', '3624.29', '2021-10-22', '', '', ''),
(33, 18, 2, '1', '500.00', '2021-10-22', '', '', ''),
(34, 19, 2, '1', '3605.50', '2021-10-22', '', '', ''),
(35, 20, 2, '1', '3584.74', '2021-10-22', '', '', ''),
(36, 21, 2, '1', '-4.00', '2021-10-25', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `installer_detail`
--

CREATE TABLE `installer_detail` (
  `id` int(11) NOT NULL,
  `installment_id` int(255) NOT NULL,
  `installer_father` varchar(255) NOT NULL,
  `installer_father_contact` int(50) NOT NULL,
  `grander_one_name` varchar(255) NOT NULL,
  `grander_two_name` varchar(255) NOT NULL,
  `grander_one_father` varchar(255) NOT NULL,
  `grander_two_father` varchar(255) NOT NULL,
  `grander_one_contact` int(20) NOT NULL,
  `grander_two_contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `installer_detail`
--

INSERT INTO `installer_detail` (`id`, `installment_id`, `installer_father`, `installer_father_contact`, `grander_one_name`, `grander_two_name`, `grander_one_father`, `grander_two_father`, `grander_one_contact`, `grander_two_contact`) VALUES
(1, 7, '', 0, '', '', '', '', 0, 0),
(2, 1, 'hahahah', 0, 'hahaha', 'hahaha', 'hahaha', 'hahah', 1232, 123),
(3, 2, 'khan', 2147483647, 'afridi', 'hasan', 'afridi1', 'hsasan2', 2147483647, 2147483647),
(4, 3, 'OOO', 7777, 'III', 'III', 'III', 'III', 888, 888),
(5, 4, 'dfdfd', 12345678, 'fdfdf', 'dfdf', 'dfdf', 'dfdf', 32232, 23232);

-- --------------------------------------------------------

--
-- Table structure for table `installment_category`
--

CREATE TABLE `installment_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `installment_time` varchar(255) NOT NULL,
  `percentage` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `installment_category`
--

INSERT INTO `installment_category` (`id`, `name`, `advance`, `duration`, `installment_time`, `percentage`, `status`) VALUES
(5, '1 Year', '400', '12', '12', 30, '0'),
(6, 'Khan', ' 5', '2', '5', 0, '1'),
(7, '2 ywaer', ' 5', '24', '8', 0, '1'),
(8, 'Laptop', ' 5', '6', '20', 0, '1'),
(9, '6 months', ' 5', '6', '6', 0, '1'),
(12, '7 moths Package', '700', '7', '12', 50, '1');

-- --------------------------------------------------------

--
-- Table structure for table `installment_payment`
--

CREATE TABLE `installment_payment` (
  `id` int(11) NOT NULL,
  `customer_install_id` int(50) NOT NULL,
  `product_id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_qty` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `due_install_amount` int(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `insallment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `installment_payment`
--

INSERT INTO `installment_payment` (`id`, `customer_install_id`, `product_id`, `price`, `stock_qty`, `quantity`, `total_price`, `due_install_amount`, `details`, `image`, `insallment_date`) VALUES
(1, 4, 4, 500, 497, 1, 500, 250, 'checking', '', '2021-10-25'),
(2, 2, 4, 500, 496, 1, 500, 50, '', '', '2021-10-26'),
(3, 3, 4, 500, 495, 1, 500, 495, '', '', '2021-10-26'),
(4, 2, 4, 500, 494, 1, 500, 250, '', '', '2021-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `intsaller_payment_history`
--

CREATE TABLE `intsaller_payment_history` (
  `id` int(11) NOT NULL,
  `installment_id` int(255) NOT NULL,
  `installment_type_id` int(11) NOT NULL,
  `total_istall_amount` varchar(255) NOT NULL,
  `per_install_amount` varchar(255) NOT NULL,
  `pay_per_install` varchar(255) DEFAULT '0',
  `insallment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intsaller_payment_history`
--

INSERT INTO `intsaller_payment_history` (`id`, `installment_id`, `installment_type_id`, `total_istall_amount`, `per_install_amount`, `pay_per_install`, `insallment_date`) VALUES
(1, 1, 5, '250.00', '20.83', '0', '2021-11-24'),
(2, 1, 5, '250.00', '20.83', '0', '2021-12-24'),
(3, 1, 5, '250.00', '20.83', '0', '2022-01-23'),
(4, 1, 5, '250.00', '20.83', '0', '2022-02-22'),
(5, 1, 5, '250.00', '20.83', '15', '2022-03-24'),
(6, 1, 5, '250.00', '20.83', '0', '2022-04-23'),
(7, 1, 5, '250.00', '20.83', '0', '2022-05-23'),
(8, 1, 5, '250.00', '20.83', '0', '2022-06-22'),
(9, 1, 5, '250.00', '20.83', '0', '2022-07-22'),
(10, 1, 5, '250.00', '20.83', '0', '2022-08-21'),
(11, 1, 5, '250.00', '20.83', '0', '2022-09-20'),
(12, 1, 5, '250.00', '20.83', '0', '2022-10-20'),
(13, 2, 12, '50.00', '4.17', '4.17', '2021-11-25'),
(14, 2, 12, '50.00', '4.17', '4.17', '2021-12-25'),
(15, 2, 12, '50.00', '4.17', '', '2022-01-24'),
(16, 2, 12, '50.00', '4.17', '', '2022-02-23'),
(17, 2, 12, '50.00', '4.17', '', '2022-03-25'),
(18, 2, 12, '50.00', '4.17', '', '2022-04-24'),
(19, 2, 12, '50.00', '4.17', '', '2022-05-24'),
(20, 2, 12, '50.00', '4.17', '', '2022-06-23'),
(21, 2, 12, '50.00', '4.17', '', '2022-07-23'),
(22, 2, 12, '50.00', '4.17', '', '2022-08-22'),
(23, 2, 12, '50.00', '4.17', '', '2022-09-21'),
(24, 2, 12, '50.00', '4.17', '', '2022-10-21'),
(25, 3, 9, '495.00', '82.50', '82.50', '2021-11-25'),
(26, 3, 9, '495.00', '82.50', '0', '2021-12-25'),
(27, 3, 9, '495.00', '82.50', '0', '2022-01-24'),
(28, 3, 9, '495.00', '82.50', '0', '2022-02-23'),
(29, 3, 9, '495.00', '82.50', '0', '2022-03-25'),
(30, 3, 9, '495.00', '82.50', '0', '2022-04-24'),
(31, 4, 5, '250.00', '20.83', '0', '2021-11-25'),
(32, 4, 5, '250.00', '20.83', '0', '2021-12-25'),
(33, 4, 5, '250.00', '20.83', '0', '2022-01-24'),
(34, 4, 5, '250.00', '20.83', '0', '2022-02-23'),
(35, 4, 5, '250.00', '20.83', '0', '2022-03-25'),
(36, 4, 5, '250.00', '20.83', '0', '2022-04-24'),
(37, 4, 5, '250.00', '20.83', '0', '2022-05-24'),
(38, 4, 5, '250.00', '20.83', '0', '2022-06-23'),
(39, 4, 5, '250.00', '20.83', '0', '2022-07-23'),
(40, 4, 5, '250.00', '20.83', '0', '2022-08-22'),
(41, 4, 5, '250.00', '20.83', '0', '2022-09-21'),
(42, 4, 5, '250.00', '20.83', '0', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `id` int(11) NOT NULL,
  `theme_style` varchar(100) NOT NULL,
  `header_color` varchar(100) NOT NULL,
  `sidebar_background` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `method`) VALUES
(1, 'Cash'),
(2, 'HBL'),
(3, 'UBL'),
(4, 'Jazz Cash'),
(5, 'Easy Paisa'),
(6, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_unit_id` int(11) NOT NULL,
  `purchase_unit` int(11) NOT NULL,
  `sale_unit` int(11) NOT NULL,
  `alert_quantity` varchar(100) NOT NULL,
  `open_stock_quantity` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_unit_id`, `purchase_unit`, `sale_unit`, `alert_quantity`, `open_stock_quantity`, `description`) VALUES
(1, 'Mobile', 1, 1, 2, 1, '1234', '1234', 'hahahha'),
(3, 'testing Product123', 3, 2, 2, 2, '500', '400', 'testing products'),
(4, 'pepsi', 5, 2, 0, 2, '3000', '5000', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(17) NOT NULL,
  `supplier_id` int(100) NOT NULL,
  `purchase_grand_total` decimal(11,2) NOT NULL,
  `total_discount` decimal(11,2) NOT NULL,
  `after_discount_purchase` decimal(11,2) NOT NULL,
  `purchase_date` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `supplier_id`, `purchase_grand_total`, `total_discount`, `after_discount_purchase`, `purchase_date`, `details`) VALUES
(1, 1, '200500.00', '0.00', '200500.00', '2021-08-30', ''),
(2, 2, '300.00', '0.00', '300.00', '2021-09-25', ''),
(3, 1, '12.00', '0.00', '12.00', '2021-10-19', 'pruchase'),
(4, 1, '100.00', '0.00', '100.00', '2021-10-19', 'purchase'),
(5, 1, '500.00', '0.00', '500.00', '2021-10-19', 'pruchase '),
(6, 1, '150000.00', '0.00', '150000.00', '2021-10-22', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_price` decimal(11,2) NOT NULL,
  `sale_price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_total` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_items`
--

INSERT INTO `purchase_items` (`id`, `purchase_id`, `product_id`, `purchase_price`, `sale_price`, `quantity`, `purchase_total`) VALUES
(1, 1, 1, '5000.00', '4000.00', 40, '200000.00'),
(2, 1, 3, '500.00', '100.00', 1, '500.00'),
(4, 2, 4, '300.00', '100.00', 1, '300.00'),
(5, 3, 1, '12.00', '10.00', 1, '12.00'),
(6, 4, 1, '100.00', '100.00', 1, '100.00'),
(7, 5, 4, '500.00', '30000.00', 1, '500.00'),
(8, 6, 4, '300.00', '500.00', 500, '150000.00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total_sale` decimal(11,2) NOT NULL,
  `discount` decimal(11,2) NOT NULL,
  `after_discount` decimal(11,2) NOT NULL,
  `details` varchar(255) NOT NULL,
  `sale_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `customer_id`, `grand_total_sale`, `discount`, `after_discount`, `details`, `sale_date`) VALUES
(1, 2, '16000.00', '10.00', '15990.00', '', '2021-08-30'),
(2, 2, '4100.00', '100.00', '4000.00', '', '2021-09-08'),
(3, 4, '4000.00', '0.00', '4000.00', '', '2021-09-21'),
(4, 1, '4000.00', '0.00', '0.00', '', '2021-09-27'),
(5, 1, '100.00', '0.00', '0.00', '', '2021-09-27'),
(6, 2, '3745.48', '0.00', '3745.48', '', '2021-10-20'),
(7, 2, '30000.00', '0.00', '30000.00', 'azmat sale', '2021-10-20'),
(8, 2, '3737.00', '0.00', '3737.00', '', '2021-10-20'),
(9, 3, '3727.93', '0.00', '3727.93', '', '2021-10-20'),
(10, 3, '3718.21', '0.00', '3718.21', '', '2021-10-20'),
(11, 3, '3707.78', '0.00', '3707.78', '', '2021-10-20'),
(12, 2, '3696.54', '0.00', '3696.54', 'asasa', '2021-10-20'),
(13, 2, '3684.40', '0.00', '3684.40', '', '2021-10-20'),
(14, 2, '3671.25', '0.00', '3671.25', '', '2021-10-20'),
(15, 2, '3656.96', '0.00', '3656.96', '', '2021-10-20'),
(16, 2, '3641.36', '0.00', '3641.36', '', '2021-10-21'),
(17, 2, '3624.29', '0.00', '3624.29', '', '2021-10-22'),
(18, 2, '500.00', '0.00', '500.00', '', '2021-10-22'),
(19, 2, '3605.50', '0.00', '3605.50', '', '2021-10-22'),
(20, 2, '3584.74', '0.00', '3584.74', '', '2021-10-22'),
(21, 2, '0.00', '4.00', '-4.00', '', '2021-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_items`
--

INSERT INTO `sale_items` (`id`, `sale_id`, `product_id`, `price`, `stock_qty`, `quantity`, `total_price`) VALUES
(1, 1, 1, '4000.00', 40, 5, '20000.00'),
(2, 2, 1, '4000.00', 32, 1, '4000.00'),
(3, 2, 3, '100.00', 1, 1, '100.00'),
(4, 3, 1, '4000.00', 31, 1, '4000.00'),
(5, 4, 1, '4000.00', 30, 1, '4000.00'),
(6, 5, 4, '100.00', 1, 1, '100.00'),
(7, 6, 1, '3745.48', 31, 1, '3745.48'),
(8, 7, 4, '30000.00', 1, 1, '30000.00'),
(9, 8, 1, '3737.00', 30, 1, '3737.00'),
(10, 9, 1, '3727.93', 29, 1, '3727.93'),
(11, 10, 1, '3718.21', 28, 1, '3718.21'),
(12, 11, 1, '3707.78', 27, 1, '3707.78'),
(13, 12, 1, '3696.54', 26, 1, '3696.54'),
(14, 13, 1, '3684.40', 25, 1, '3684.40'),
(15, 14, 1, '3671.25', 24, 1, '3671.25'),
(16, 15, 1, '3656.96', 23, 1, '3656.96'),
(17, 16, 1, '3641.36', 22, 1, '3641.36'),
(18, 17, 1, '3624.29', 21, 1, '3624.29'),
(19, 18, 4, '500.00', 500, 1, '500.00'),
(20, 19, 1, '3605.50', 20, 1, '3605.50'),
(21, 20, 1, '3584.74', 19, 1, '3584.74'),
(22, 21, 1, '0.00', 0, 7, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_items`
--

CREATE TABLE `stock_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_item_id` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `purchase_price` decimal(11,2) NOT NULL,
  `sale_price` decimal(11,2) NOT NULL,
  `stock_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_items`
--

INSERT INTO `stock_items` (`id`, `product_id`, `purchase_item_id`, `quantity`, `purchase_price`, `sale_price`, `stock_date`) VALUES
(1, 1, 1, 0, '5000.00', '4000.00', '2021-08-30'),
(2, 3, 2, 0, '500.00', '100.00', '2021-08-30'),
(3, 4, 4, 0, '300.00', '100.00', '2021-09-25'),
(4, 1, 5, 0, '12.00', '10.00', '2021-10-19'),
(5, 1, 6, 0, '100.00', '100.00', '2021-10-19'),
(6, 4, 7, 0, '500.00', '30000.00', '2021-10-19'),
(7, 4, 8, 493, '300.00', '500.00', '2021-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category`) VALUES
(1, 1, 'Samsung'),
(2, 2, 'Dell'),
(3, 2, 'HP'),
(4, 6, 'another sub');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_contact` text NOT NULL,
  `supplier_email` varchar(25) NOT NULL,
  `supplier_open_balance` int(100) NOT NULL,
  `supplier_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `supplier_contact`, `supplier_email`, `supplier_open_balance`, `supplier_address`) VALUES
(1, 'Test77', '034312223888', 'saqibafridi464@gmail.', 12345, 'kohi hassan khel ');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ledger`
--

CREATE TABLE `supplier_ledger` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL DEFAULT 0,
  `payment_id` int(11) NOT NULL DEFAULT 0,
  `debit` decimal(11,2) NOT NULL,
  `credit` decimal(11,2) NOT NULL,
  `Ldate` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_ledger`
--

INSERT INTO `supplier_ledger` (`id`, `supplier_id`, `purchase_id`, `payment_id`, `debit`, `credit`, `Ldate`, `details`) VALUES
(1, 1, 1, 3, '200500.00', '500.00', '2021-08-30', 'dsdsd'),
(2, 2, 2, 1, '300.00', '500.00', '2021-09-25', ''),
(3, 1, 3, 1, '12.00', '100.00', '2021-10-19', 'paid amount'),
(4, 1, 4, 1, '100.00', '200.00', '2021-10-19', ''),
(5, 1, 5, 1, '500.00', '500.00', '2021-10-19', 'pruchase checking'),
(6, 1, 6, 1, '150000.00', '600.00', '2021-10-22', 'hghhhg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payment`
--

CREATE TABLE `supplier_payment` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL DEFAULT 0,
  `supplier_id` int(11) NOT NULL,
  `payment_method_id` varchar(11) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `receipt` varchar(255) DEFAULT NULL,
  `slip_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_payment`
--

INSERT INTO `supplier_payment` (`id`, `purchase_id`, `supplier_id`, `payment_method_id`, `paid`, `payment_date`, `details`, `receipt`, `slip_no`) VALUES
(1, 1, 1, '3', '233', '2021-08-27', '', '', ''),
(2, 2, 1, '2', '123', '2021-08-19', '', '', '232'),
(3, 1, 1, '3', '500', '2021-08-09', '', '', ''),
(4, 2, 2, '3', '500', '2021-08-13', 'dds', '', '1234'),
(5, 1, 1, '3', '500', '2021-08-30', 'dsdsd', '', '3234234'),
(6, 2, 2, '1', '500', '2021-09-25', '', '', ''),
(7, 3, 1, '1', '100', '2021-10-19', 'paid amount', '', ''),
(8, 4, 1, '1', '200', '2021-10-19', '', '', ''),
(9, 5, 1, '1', '500', '2021-10-19', 'pruchase checking', '', '777777'),
(10, 6, 1, '1', '600', '2021-10-22', 'hghhhg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `signupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `role_id`, `status`, `name`, `username`, `email`, `password`, `contact`, `image`, `address`, `signupdate`) VALUES
(1, 1, 1, 'Faheem Ullah khan', 'admin', 'admin1@gmail.com', 'admin', '03456424062', '2021-10-14-12-13-48Asset-1@2x.png', 'adress', '2021-08-13'),
(4, 1, 1, 'testing', 'test', 'test@gmail.com', 'admin', '03456424062', '2021-09-07-09-27-06exp.png', 'adress', '2021-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`) VALUES
(1, 'KG'),
(2, 'Meters');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_history`
--
ALTER TABLE `cash_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_in_hand`
--
ALTER TABLE `cash_in_hand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_in_out`
--
ALTER TABLE `customer_in_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ledger`
--
ALTER TABLE `customer_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_detail`
--
ALTER TABLE `installer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installment_category`
--
ALTER TABLE `installment_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installment_payment`
--
ALTER TABLE `installment_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intsaller_payment_history`
--
ALTER TABLE `intsaller_payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_items`
--
ALTER TABLE `stock_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_ledger`
--
ALTER TABLE `supplier_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_payment`
--
ALTER TABLE `supplier_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash_history`
--
ALTER TABLE `cash_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cash_in_hand`
--
ALTER TABLE `cash_in_hand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_in_out`
--
ALTER TABLE `customer_in_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_ledger`
--
ALTER TABLE `customer_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_payment`
--
ALTER TABLE `customer_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `installer_detail`
--
ALTER TABLE `installer_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `installment_category`
--
ALTER TABLE `installment_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `installment_payment`
--
ALTER TABLE `installment_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intsaller_payment_history`
--
ALTER TABLE `intsaller_payment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stock_items`
--
ALTER TABLE `stock_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_ledger`
--
ALTER TABLE `supplier_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier_payment`
--
ALTER TABLE `supplier_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
